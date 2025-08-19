import sys
import json
import os
import pytesseract
from PIL import Image
import mysql.connector

# Konfigurasi koneksi ke DB MySQL
db_config = {
    'host': 'localhost',
    'user': 'root',           # ganti jika bukan root
    'password': '',           # isi password jika ada
    'database': 'e-mutasi'  # ganti dengan nama database kamu
}

# Ambil argumen PK dari PHP (no)
if len(sys.argv) < 2:
    print(json.dumps({"error": "No parameter missing"}))
    sys.exit()

no = sys.argv[1]

try:
    # Koneksi ke database
    conn = mysql.connector.connect(**db_config)
    cursor = conn.cursor(dictionary=True)

    # Ambil data permintaan berdasarkan no
    cursor.execute("SELECT * FROM permintaan_mutasi WHERE no = %s", (no,))
    row = cursor.fetchone()

    if not row:
        print(json.dumps({"error": "Data not found in DB"}))
        sys.exit()

    # Ambil nama file dan path-nya
    filename = row['surat_pindah_sekolah_asal']  # atau dokumen yang ingin di-scan
    file_path = os.path.join("uploads", filename)

    if not os.path.exists(file_path):
        print(json.dumps({"error": "File not found"}))
        sys.exit()

    # Lakukan OCR (gunakan Tesseract)
    text = pytesseract.image_to_string(Image.open(file_path))

    # Ekstrak informasi penting dari hasil OCR
    def extract_field(label, text_block):
        for line in text_block.splitlines():
            if label.lower() in line.lower():
                return line.split(":")[-1].strip()
        return ""

    extracted_data = {
        "nama": extract_field("Nama", text),
        "ttl": extract_field("Tempat/Tanggal Lahir", text),
        "nisn": extract_field("NISN", text),
        "alamat": extract_field("Alamat", text),
        "sekolah_asal": extract_field("Sekolah Asal", text)
    }

    # Output JSON ke stdout
    print(json.dumps(extracted_data))

except Exception as e:
    print(json.dumps({"error": str(e)}))

finally:
    if 'cursor' in locals(): cursor.close()
    if 'conn' in locals(): conn.close()
