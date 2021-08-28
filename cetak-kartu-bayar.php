<?php

use Mpdf\Tag\Table;

$content = "
<style type='text/css'>
<style type='text/css'>

font {
    font-family : arial;
}

.title {
  font-size: 18pt;
  font-weight: bold;
}

.font1 {
  font-size: 13pt;
  margin-top: 50px;
}

.col-tb1 {
    width: 170px;
}

.col-tb2 {
    width: 180px;
}

.head-col {
    text-align : center;
    font-weight: bold;
    background-color : #072047;
    color : white;
}

.cen-col {
    text-align : center;
}

.pad-col {
    padding-left : 5px;
}

.text-center{
    text-align:center;
}
.text-left{
    text-align:left;
}
.text-right{
    text-align:right;
}
</style>
<html>
    <body>
    <table>
        <tr>
            <td width='100px'> <img src='theme/img/logo-lp3i-poltek.png' width='8%'> </td>
            <td style='vertical-align:top;padding-top:20px'>
            <font class='title'>POLITEKNIK LP3I JAKARTA</font> <br>
            <font class='font1'>Kampus Jakarta Pusat (Kramat Raya) : GD. Sentra Kramat - JL. Kramat Raya No 7/9 Jakarta Pusat</font> <br>
            <font class='font1'>TAHUN AKADEMIK 2020/2021</font>
            </td>
        </tr>
        </table>

        <table style='margin:30px 0;'>
            <tr>
                <td rowspan='6'  width='100px'>
                <img src='theme/img/avatar02.png' width='16%'>
                </td>
            </tr>
            <tr>            
                <td>NIM</td>
                <td>:<b> 200111020028</b></td>
            </tr>
            <tr>            
                <td>NAMA LENGKAP</td>
                <td>: Amelia Margaretha</td>
            </tr>
            <tr>            
                <td>TEMPAT / TANGGAL LAHIR</td>
                <td>: Cilacap / 02 Agustus 2002</td>
            </tr>
            <tr>            
                <td>PROGRAM</td>
                <td>: Administrasi Bisnis</td>
            </tr>
            <tr>            
                <td>KELAS</td>
                <td>: AB-20-I-1</td>
            </tr>
        </table>

        <table border=1 style='border-collapse: collapse;width:100%;'>
    <thead >
        <tr>
            <th colspan='4'><b>RENCANA PEMBAYARAN MAHASISWA</b></th>
        </tr>
        <tr style='background-color:#31659d;'>
            <th>ANGSURAN</th>
            <th>TGL RENCANA</th>
            <th>JUMLAH TAGIHAN</th>
            <th>JUMLAH BAYAR</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Ke - 1</td>
            <td>10-Agustus-2020</td>
            <td class='text-right'>1,020,000</td>
            <td class='text-right'>1,020,000</td>
        </tr>
        <tr>
            <td>Ke - 2</td>
            <td>10-September-2020</td>
            <td class='text-right'>1,020,000</td>
            <td class='text-right'>1,020,000</td>
        </tr>
        <tr>
            <td>Ke - 3</td>
            <td>10-Oktober-2020</td>
            <td class='text-right'>1,020,000</td>
            <td class='text-right'>1,020,000</td>
        </tr>
        <tr>
            <td>Ke - 4</td>
            <td>10-November-2020</td>
            <td class='text-right'>1,020,000</td>
            <td class='text-right'>1,020,000</td>
        </tr>
        <tr>
            <td>Ke - 5</td>
            <td>10-Desember-2020</td>
            <td class='text-right'>1,020,000</td>
            <td class='text-right'>1,020,000</td>
        </tr>
        <tr>
            <td>Ke - 6</td>
            <td>10-Januari-2021</td>
            <td class='text-right'>1,020,000</td>
            <td class='text-right'>1,020,000</td>
        </tr>
        <tr>
            <td>Ke - 7</td>
            <td>10-Februari-2021</td>
            <td class='text-right'>1,020,000</td>
            <td class='text-right'>1,020,000</td>
        </tr>
        <tr>
            <td>Ke - 8</td>
            <td>10-Maret-2021</td>
            <td class='text-right'>1,020,000</td>
            <td class='text-right'>1,020,000</td>
        </tr>
        <tr>
            <td>Ke - 9</td>
            <td>10-April-2021</td>
            <td class='text-right'>1,020,000</td>
            <td class='text-right'>1,020,000</td>
        </tr>
        <tr>
            <td>Ke - 10</td>
            <td>10-Mei-2021</td>
            <td class='text-right'>1,020,000</td>
            <td class='text-right'>1,020,000</td>
        </tr>
        <tr>
            <td colspan='2' class='text-right'><b>Total</b></td>
            <td class='text-right'><b>10,200,000</b></td>
            <td class='text-right'><b>10,200,000</b></td>
        </tr>
        <tr>
            <td colspan='3' class='text-right'><b>Total Tagihan Angsuran</b></td>
            <td class='text-right'> <b>10,200,000</b></td>
        </tr>
        <tr>
            <td colspan='3' class='text-right'><b>Realisasi Pembayaran Angsuran</b></td>
            <td class='text-right'> <b>10,200,000</b></td>
        </tr>
        <tr>
            <td colspan='3' class='text-right'><b>Saldo</b></td>
        <td class='text-right'> <b>0</b></td>
    </tr>
    </tbody>
</table>

<table border=1 style='border-collapse: collapse;width:100%;margin-top:1rem;'>
    <thead>
        <tr>
            <th colspan='7'><b>REALISASI PEMBAYARAN MAHASISWA</b></th>
        </tr>
        <tr style='background-color:#31659d;'>
            <th>NO</th>
            <th>NO BUKTI</th>
            <th>TGL BAYAR</th>
            <th>JUMLAH BAYAR</th>
            <th>DENDA</th>
            <th>TOTAL BAYAR</th>
            <th>PETUGAS</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>2020 -03753,4643</td>
            <td>29-Maret-2020</td>
            <td class='text-right'>4,500,000</td>
            <td class='text-right'>0</td>
            <td class='text-right'>4,500,000</td>
            <td>keuangan</td>
        </tr>
        <tr>
            <td>2</td>
            <td>INV/220100041730</td>
            <td>11-November-2020</td>
            <td class='text-right'>4,080,000</td>
            <td class='text-right'>0</td>
            <td class='text-right'>4,080,000</td>
            <td>keuangan</td>
        </tr>
        <tr>
            <td>3</td>
            <td>INV/220100041730</td>
            <td>09-Februari-2021</td>
            <td class='text-right'>2,040,000</td>
            <td class='text-right'>0</td>
            <td class='text-right'>2,040,000</td>
            <td>keuangan</td>
        </tr>
        <tr>
            <td>4</td>
            <td>INV/220100041730</td>
            <td>01-April-2021</td>
            <td class='text-right'>2,040,000</td>
            <td class='text-right'>0</td>
            <td class='text-right'>2,040,000</td>
            <td>keuangan</td>
        </tr>
        <tr>
            <td>5</td>
            <td>INV/220100041730</td>
            <td>22-Mei-2021</td>
            <td class='text-right'>2,040,000</td>
            <td class='text-right'>0</td>
            <td class='text-right'>2,040,000</td>
            <td>keuangan</td>
        </tr>
        <tr>
            <td colspan='3' class='text-right'><b>Total</b></td>
            <td class='text-right'><b>14,700,000</b></td>
            <td class='text-right'><b>0</b></td>
            <td class='text-right'><b>14,700,000</b></td>
            <td class='text-right'><b>-</b></td>
        </tr>
        <tr>
            <td colspan='6'><b>DP (Uang Muka) yang dibayarkan</b></td>
            <td class='text-right'><b>4,500,000</b></td>
        </tr>
        <tr>
            <td colspan='6'><b>Total Tagihan Angsuran</b></td>
            <td class='text-right'><b>10,200,000</b></td>
        </tr>
        <tr>
            <td colspan='6'><b>Total Realisasi Pembayaran Keseluruhan</b></td>
            <td class='text-right'><b>14,700,000</b></td>
        </tr>
        <tr>
            <td colspan='6'><b>Saldo</b></td>
            <td class='text-right'><b>0</b></td>
        </tr>
    </tbody>
</table>

<p class='text-center'><b>Lembaran ini di keluarkan dan di cetak secara otomatis, hak otorisasi sudah di validasi oleh bagian keuangan

di Kampus Jakarta Pusat (Kramat Raya)</b></p>
        
    </body>
</html>
";

require_once "./mpdf_v8.0.3/vendor/autoload.php";
$mpdf = new \Mpdf\Mpdf();

// AddPage Function = https://mpdf.github.io/reference/mpdf-functions/addpage.html

$mpdf->AddPage("P", "", "", "", "", "10", "10", "10", "5", "", "", "", "", "", "", "", "", "", "", "", "A4");
$mpdf->WriteHTML($content);
$mpdf->Output(); //UNTUK PREVIEW FILE
// $mpdf->Output("contoh_report.pdf"); UNTUK AUTODOWNLOAD FILE
