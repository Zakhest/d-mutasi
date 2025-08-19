<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konversi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Load model jika diperlukan
    }

 public function index()
    {
         $data['hijriDate'] = '';

        if ($this->input->post('gregorianDate')) {
            $gregorianDate = $this->input->post('gregorianDate');
            $data['hijriDate'] = $this->gregorianToHijri($gregorianDate);
       
    }

     $this->load->view('tampil',$data);

}
private function gregorianToHijri($date)
{
    $gregorianDate = date_create($date);

    // Membuat objek IntlDateFormatter untuk konversi tanggal
    $formatter = new IntlDateFormatter(
        'id_ID@calendar=islamic-civil',
        IntlDateFormatter::FULL,
        IntlDateFormatter::FULL,
        'Asia/Jakarta',
        IntlDateFormatter::FULL,
        'dd MMMM yyyy' // Menggunakan format penuh bulan
    );

    // Mengatur kalender Hijriah
    $formatter->setCalendar(IntlDateFormatter::FULL);

    // Mengonversi tanggal Gregorian ke Hijriah
    $hijriFormattedDate = $formatter->format($gregorianDate);

    // Mengonversi nama bulan Hijriah ke Bahasa Indonesia
    $indonesianIslamicMonths = array(
        'Muharram' => 'Muharram',
        'Safar' => 'Safar',
        'Rabiʻ II' => 'Rabiul Akhir',
        'Rabiʻ I' => 'Rabiul Awwal',
        'Jumada I' => 'Jumadil Awwal',
        'Jumada II' => 'Jumadil Akhir',
        'Rajab' => 'Rajab',
        'Shaʻban' => 'Syaban',
        'Ramadan' => 'Ramadhan',
        'Shawwal' => 'Syawal',
        'Dhuʻl-Qiʻdah' => 'Dzulqaʻdah',
        'Dhuʻl-Hijjah' => 'Dzulhijjah',
    );

    foreach ($indonesianIslamicMonths as $englishMonth => $indonesianMonth) {
        $hijriFormattedDate = str_replace($englishMonth, $indonesianMonth, $hijriFormattedDate);
    }

    return $hijriFormattedDate;
}

}