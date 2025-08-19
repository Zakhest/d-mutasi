<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Export extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_data'); // Pastikan model sudah ada
    }

    public function index() {
       
            $spreadsheet = new Spreadsheet();
            $sheet = $spreadsheet->getActiveSheet();
        
            // Set Header Kolom
            $headers = [
                'No', 'No Surat', 'Tanggal Disahkan', 'Nama Siswa', 'Kelas', 'Tempat Tanggal Lahir',
                'NISN/NIS', 'Jenis Kelamin', 'Sekolah Asal', 'Alamat Sekolah Asal', 'Sekolah Tujuan',
                'Kota/Kab', 'Provinsi', 'Tanggal Dibuat', 'Sekretaris', 'NIP', 'Jabatan'
            ];
        
            $column = 'A';
            foreach ($headers as $header) {
                $sheet->setCellValue($column . '1', $header);
                $column++;
            }
        
            // Ambil Data dari Database
            $mutasi = $this->m_data->DataGet('data_mutasi');
            $row = 2;
            $no = 1;
        
            foreach ($mutasi as $m) {
                $sheet->setCellValue('A' . $row, $no++);
                $sheet->setCellValue('B' . $row, $m->no_surat);
                $sheet->setCellValue('C' . $row, $m->tgl_disahkan);
                $sheet->setCellValue('D' . $row, $m->nama_siswa);
                $sheet->setCellValue('E' . $row, $m->kelas);
                $sheet->setCellValue('F' . $row, $m->ttl);
                $sheet->setCellValue('G' . $row, $m->nisn_nis);
                $sheet->setCellValue('H' . $row, $m->jenis_kelamin);
                $sheet->setCellValue('I' . $row, $m->sekolah_asal);
                $sheet->setCellValue('J' . $row, $m->alamat_sekolah_asal);
                $sheet->setCellValue('K' . $row, $m->sekolah_tujuan);
                $sheet->setCellValue('L' . $row, $m->kota_kab);
                $sheet->setCellValue('M' . $row, $m->provinsi);
                $sheet->setCellValue('N' . $row, $m->tanggal_dibuat);
                $sheet->setCellValue('O' . $row, $m->sekertaris);
                $sheet->setCellValue('P' . $row, $m->nip);
                $sheet->setCellValue('Q' . $row, $m->jabatan);
                $row++;
            }
        
            // Menyesuaikan Lebar Kolom Secara Otomatis
            foreach (range('A', 'Q') as $col) {
                $sheet->getColumnDimension($col)->setAutoSize(true);
            }
        
            // Menambahkan Border ke Sel
            $styleArray = [
                'borders' => [
                    'allBorders' => [
                        'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                        'color' => ['argb' => '000000'],
                    ],
                ],
            ];
        
            $sheet->getStyle('A1:Q' . ($row - 1))->applyFromArray($styleArray);
        
            // Simpan sebagai file Excel
            $writer = new Xlsx($spreadsheet);
            $filename = 'Data-Mutasi-Keluar-' . date('Ymd') . '.xlsx';
        
            header('Content-Type: application/vnd.ms-excel');
            header('Content-Disposition: attachment;filename="' . $filename . '"');
            header('Cache-Control: max-age=0');
        
            $writer->save('php://output');
            exit();
        
        
       
    }

    public function MasukExcel() {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
    
        // Set Header Kolom
        $headers = [
            'No Urut', 'Tanggal Hari Ini', 'Tanggal Hijriah', 'Kepala SD', 
            'No Surat', 'Tanggal Surat', 'Alamat Sekolah', 'Kecamatan'
        ];
    
        $column = 'A';
        foreach ($headers as $header) {
            $sheet->setCellValue($column . '1', $header);
            $column++;
        }
    
        // Ambil Data dari Database
        $mutasi_masuk = $this->m_data->DataGet('mutasi_masuk');
        $row = 2;
    
        foreach ($mutasi_masuk as $m) {
            $sheet->setCellValue('A' . $row, $m->no_urut);
            $sheet->setCellValue('B' . $row, $m->tanggal_hari_ini);
            $sheet->setCellValue('C' . $row, $m->tanggal_hijriah);
            $sheet->setCellValue('D' . $row, $m->kepala_sd);
            $sheet->setCellValue('E' . $row, $m->no_surat);
            $sheet->setCellValue('F' . $row, $m->tanggal_surat);
            $sheet->setCellValue('G' . $row, $m->alamat_sekolah);
            $sheet->setCellValue('H' . $row, $m->kecamatan);
            $row++;
        }
    
        // Menyesuaikan Lebar Kolom Secara Otomatis
        foreach (range('A', 'H') as $col) {
            $sheet->getColumnDimension($col)->setAutoSize(true);
        }
    
        // Menambahkan Border ke Sel
        $styleArray = [
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    'color' => ['argb' => '000000'],
                ],
            ],
        ];
    
        $sheet->getStyle('A1:H' . ($row - 1))->applyFromArray($styleArray);
    
        // Simpan sebagai file Excel
        $writer = new Xlsx($spreadsheet);
        $filename = 'Mutasi-Masuk-' . date('Ymd') . '.xlsx';
    
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');
    
        $writer->save('php://output');
        exit();
    }

    public function SiswaMasukExcel() {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
    
        // Set Header Kolom
        $headers = [
            'No', 'No Urut', 'Nama Siswa', 'Tempat, Tanggal Lahir', 
            'Masuk Kelas', 'Tahun', 'Asal Sekolah', 'NISN'
        ];
    
        $column = 'A';
        foreach ($headers as $header) {
            $sheet->setCellValue($column . '1', $header);
            $column++;
        }
    
        // Ambil Data dari Database
        $siswa_masuk = $this->m_data->DataGet('siswa_masuk');
        $row = 2;
    
        foreach ($siswa_masuk as $s) {
            $sheet->setCellValue('A' . $row, $s->no);
            $sheet->setCellValue('B' . $row, $s->no_urut);
            $sheet->setCellValue('C' . $row, $s->nama_siswa);
            $sheet->setCellValue('D' . $row, $s->ttl);
            $sheet->setCellValue('E' . $row, $s->masuk_kelas);
            $sheet->setCellValue('F' . $row, $s->tahun);
            $sheet->setCellValue('G' . $row, $s->asal_sekolah);
            $sheet->setCellValue('H' . $row, $s->nisn);
            $row++;
        }
    
        // Menyesuaikan Lebar Kolom Secara Otomatis
        foreach (range('A', 'H') as $col) {
            $sheet->getColumnDimension($col)->setAutoSize(true);
        }
    
        // Menambahkan Border ke Sel
        $styleArray = [
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    'color' => ['argb' => '000000'],
                ],
            ],
        ];
    
        $sheet->getStyle('A1:H' . ($row - 1))->applyFromArray($styleArray);
    
        // Simpan sebagai file Excel
        $writer = new Xlsx($spreadsheet);
        $filename = 'Siswa-Masuk-' . date('Ymd') . '.xlsx';
    
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');
    
        $writer->save('php://output');
        exit();
    }

    public function LuarNegeriExcel() {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
    
        // Set Header Kolom
        $headers = [
            'No', 'No Surat', 'Nama Siswa', 'Jenis Kelamin', 'Kelas', 
            'Nama Wali', 'Asal Sekolah', 'Alamat Sekolah', 'Tujuan', 
            'Tanggal Dibuat', 'Tanggal Hijriah', 'Tanggal Surat'
        ];
    
        $column = 'A';
        foreach ($headers as $header) {
            $sheet->setCellValue($column . '1', $header);
            $column++;
        }
    
        // Ambil Data dari Database
        $luar_negeri = $this->m_data->DataGet('luar_negeri');
        $row = 2;
    
        foreach ($luar_negeri as $ln) {
            $sheet->setCellValue('A' . $row, $ln->no);
            $sheet->setCellValue('B' . $row, $ln->no_surat);
            $sheet->setCellValue('C' . $row, $ln->nama_siswa);
            $sheet->setCellValue('D' . $row, $ln->jenis_kelamin);
            $sheet->setCellValue('E' . $row, $ln->kelas);
            $sheet->setCellValue('F' . $row, $ln->nama_wali);
            $sheet->setCellValue('G' . $row, $ln->asal_sekolah);
            $sheet->setCellValue('H' . $row, $ln->alamat_sekolah);
            $sheet->setCellValue('I' . $row, $ln->tujuan);
            $sheet->setCellValue('J' . $row, $ln->tanggal_dibuat);
            $sheet->setCellValue('K' . $row, $ln->tanggal_hijriah);
            $sheet->setCellValue('L' . $row, $ln->tanggal_surat);
            $row++;
        }
    
        // Menyesuaikan Lebar Kolom Secara Otomatis
        foreach (range('A', 'L') as $col) {
            $sheet->getColumnDimension($col)->setAutoSize(true);
        }
    
        // Menambahkan Border ke Sel
        $styleArray = [
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    'color' => ['argb' => '000000'],
                ],
            ],
        ];
    
        $sheet->getStyle('A1:L' . ($row - 1))->applyFromArray($styleArray);
    
        // Simpan sebagai file Excel
        $writer = new Xlsx($spreadsheet);
        $filename = 'Luar-Negeri-' . date('Ymd') . '.xlsx';
    
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');
    
        $writer->save('php://output');
        exit();
    }
    
    
    
}
