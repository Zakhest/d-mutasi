import sys
import json
import pytesseract
from PIL import Image
import fitz  # PyMuPDF
import os
import re
from datetime import datetime

# Ambil path absolut ke folder uploads/
BASE_DIR = os.path.dirname(os.path.abspath(__file__))
UPLOAD_DIR = os.path.join(BASE_DIR, 'uploads')

def extract_text_from_image(path):
    img = Image.open(path)
    return pytesseract.image_to_string(img)

def extract_text_from_pdf(path):
    text = ""
    doc = fitz.open(path)
    for page in doc:
        text += page.get_text()
    return text

def parse_text(text):
    result = {}
    lines = [line.strip() for line in text.split('\n') if line.strip()]
    cleaned_text = "\n".join(lines)

    def extract(pattern, label):
        match = re.search(pattern, cleaned_text, re.IGNORECASE)
        result[label] = match.group(1).strip() if match else ""

    extract(r"Nomor\s*:\s*([^\n]*)", "no_surat")
    extract(r"tanggal\s*(\d{1,2}\s+\w+\s+\d{4})", "tanggal_surat")
    extract(r"Nama\s*:\s*(.*)", "nama")
    extract(r"Kelas\s*:\s*(.*)", "kelas")
    extract(r"Tempat/Tanggal Lahir\s*:\s*(.*)", "ttl")
    extract(r"NISN\s*:\s*(.*)", "nisn")
    extract(r"Jenis Kelamin\s*:\s*(.*)", "jenis_kelamin")
    extract(r"Asal Sekolah\s*:\s*(.*)", "sekolah_asal")
    extract(r"Nama Sekolah Tujuan\s*:\s*(.*)", "sekolah_tujuan")
    extract(r"Kota/Kabupaten\s*:\s*(.*)", "kota_kab")
    extract(r"Provinsi\s*:\s*(.*)", "provinsi")

    # Format tanggal_surat menjadi yyyy/mm/dd jika ada
    if result.get("tanggal_surat"):
        try:
            bulan_mapping = {
                "januari": "January", "februari": "February", "maret": "March",
                "april": "April", "mei": "May", "juni": "June",
                "juli": "July", "agustus": "August", "september": "September",
                "oktober": "October", "november": "November", "desember": "December"
            }
            tanggal_str = result["tanggal_surat"].lower()
            for indo, eng in bulan_mapping.items():
                tanggal_str = tanggal_str.replace(indo, eng)

            dt = datetime.strptime(tanggal_str, "%d %B %Y")
            result["tanggal_surat"] = dt.strftime("%Y/%m/%d")
        except Exception as e:
            result["tanggal_surat"] = f"Format tidak dikenali: {result['tanggal_surat']}"

    return result

def scan_file(filename):
    path = os.path.join(UPLOAD_DIR, filename)
    if not os.path.exists(path):
        return {'error': f'File tidak ditemukan di path: {path}'}

    ext = os.path.splitext(filename)[1].lower()
    if ext in ['.jpg', '.jpeg', '.png']:
        text = extract_text_from_image(path)
    elif ext == '.pdf':
        text = extract_text_from_pdf(path)
    else:
        return {'error': 'Format tidak didukung'}

    return parse_text(text)

if __name__ == "__main__":
    if len(sys.argv) < 2:
        print(json.dumps({'error': 'Parameter filename diperlukan'}))
        sys.exit(1)

    filename = sys.argv[1]
    hasil = scan_file(filename)
    print(json.dumps(hasil, ensure_ascii=False))
