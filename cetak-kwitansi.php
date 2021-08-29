<?php
$content = "

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

        <table style='width:100%'>
        <tr>
            <td rowspan='2'> <img src='theme/img/logo-lp3i-poltek.png' width='8%'> </td>
            <td style='padding:10px 0 0 10px;width:100%'>
            <font class='title'>POLITEKNIK LP3I JAKARTA</font> <br>
            <font class='font1'>Kampus Jakarta Pusat (Kramat Raya) : GD. Sentra Kramat - JL. Kramat Raya No 7/9 Jakarta Pusat</font> <br>
            <font class='font1'>TAHUN AKADEMIK 2020/2021</font>
            <hr>
            </td>
        </tr>
        <tr>
            <td style='padding:0 0 0 10px;width:100%'><p><b>Program yang di selenggarakan :</b></p></td>
        </tr>
      
        </table>
        <p>
        Administrasi Bisnis - Multimedia - Keuangan Perbankan Syariah - Informatika Komputer - Komputerisasi Akuntansi - Administrasi Bisnis Otomotif - Administrasi Bisnis Internasional -  Hubungan Masyarakat - Teknik Otomotif - Administrasi Perkantoran - Multimedia dan Komunikasi Visual - Manajemen Informatika - Teknik Informatika - Sekretaris.
        </p>
        <hr>

        <h3 class='text-center'>KWINTASI PEMBAYARAN</h3>

        <h4 class='text-right'>No : INV/221070049120</h4>

        <table  border=1 style='border-collapse:collapse;width:100%;margin:2rem 0;'>
        <tr>
        <td style='padding:1rem'>

            <table>
                <tr>
                    <td style='width:40%'>Tanggal</td>
                    <td>: 13 - Juli - 2021</td>
                </tr>
                <tr>
                    <td style='width:40%'>Telah Diterima Dari</td>
                    <td>: <b>Abdula Agim</b></td>
                </tr>
                <tr>
                    <td style='width:40%'>Uang Sejumlah</td>
                    <td>: <b>Rp. 3,000,000</b></td>
                </tr>
                <tr>
                    <td style='width:40%'>Terbilang</td>
                    <td>: <b>Tiga Juta Rupiah</b></td>
                </tr>
                <tr>
                    <td style='width:40%'>Program Jurusan</td>
                    <td>: Multimedia dan Komunikasi Visual</td>
                </tr>
                <tr>
                    <td style='width:40%'>Untuk Pembayaran</td>
                    <td>: Pembyaran Angsuran Tahun Ajaran 2021/2022</td>
                </tr>
            </table>

            <table border=1 style='border-collapse:collapse;width:100%;margin:2rem 0;'>
                <tr>
                    <td rowspan='2' style='padding:1rem'>
                        Lembar :
                        <ol>
                            <li>Penerima</li>
                            <li>Bagian Keuangan</li>
                            <li>Bagian Akuntansi</li>
                        </ol>
                    </td>
                    <td rowspan='2' class='text-center'> Uang yang telah dibayarkan <br> Tidak dapat dikembalikan</td>
                    <td  class='text-center' style='background-color: #d9d9d9;width:20%'>Entry</td>
                    <td  class='text-center' style='background-color: #d9d9d9;width:20%'>Mengetahui</td>
                    <td  class='text-center' style='background-color: #d9d9d9;width:20%'>Kasir</td>
                </tr>
                <tr>
                    <td style='height:80px'></td>
                    <td style='height:80px'></td>
                    <td style='height:80px'></td>
                </tr>
            </table>                                        
        </td>
        </tr>
        </table>

        
    </body>
</html>


";



require_once "./mpdf_v8.0.3/vendor/autoload.php";
$mpdf = new \Mpdf\Mpdf();

// AddPage Function = https://mpdf.github.io/reference/mpdf-functions/addpage.html

$mpdf->AddPage("L", "", "", "", "", "15", "15", "15", "15", "", "", "", "", "", "", "", "", "", "", "", "A4");
$mpdf->WriteHTML($content);
$mpdf->Output(); //UNTUK PREVIEW FILE
// $mpdf->Output("contoh_report.pdf"); UNTUK AUTODOWNLOAD FILE
