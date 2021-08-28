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

        <table border=1 style='border-collapse: collapse;width:100%;margin-top:1rem;'> 
    <thead>
        <tr  style='background-color:#31659d;'>
            <th>NO</th>
            <th>NIM</th>
            <th>NAMA MAHASISWA</th>
            <th>KONSENTRASI</th>
            <th>KELAS</th>
            <th>NO.BUKTI</th>
            <th>TANGGAL</th>
            <th>JUMLAH BAYAR</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>200111020002</td>
            <td>Regina Handayani Savitri</td>
            <td>Administrasi Bisnis</td>
            <td>AB-20-I-1</td>
            <td>2019-02155</td>
            <td>20-11-2019</td>
            <td class='text-right'>3,500,000</td>
        </tr>
        <tr>
            <td>2</td>
            <td>200111020006</td>
            <td>Zufar Ramadhan Putra Hardyan</td>
            <td>Administrasi Bisnis</td>
            <td>AB-20-I-1</td>
            <td>2020-03710,04300</td>
            <td>24-03-2020</td>
            <td class='text-right'>3,000,000</td>
        </tr>
        <tr>
            <td>3</td>
            <td>200111020010</td>
            <td>Eva Dorince Sipora Marisan</td>
            <td>Administrasi Bisnis</td>
            <td>AB-20-I-1</td>
            <td>2020-04157</td>
            <td>06-05-2020</td>
            <td class='text-right'>5,100,000</td>
        </tr>
        <tr>
            <td>4</td>
            <td>200111020011</td>
            <td>Salsa Dilla Muzdalifah</td>
            <td>Administrasi Bisnis</td>
            <td>AB-20-I-1</td>
            <td>2020-04214, 4633, 5112</td>
            <td>11-05-2020</td>
            <td class='text-right'>4,500,000</td>
        </tr>
        <tr>
            <td>5</td>
            <td>200111020012</td>
            <td>Ayu Vernanda</td>
            <td>Administrasi Bisnis</td>
            <td>AB-20-I-1</td>
            <td>2020-04223</td>
            <td>12-05-2020</td>
            <td class='text-right'>1,860,000</td>
        </tr>
        <tr>
            <td>6</td>
            <td>200111020015</td>
            <td>Amiliya Afrianingsih</td>
            <td>Administrasi Bisnis</td>
            <td>AB-20-I-1</td>
            <td>2020-04454,04457</td>
            <td>11-06-2020</td>
            <td class='text-right'>4,650,000</td>
        </tr>
        <tr>
            <td>7</td>
            <td>200111020018</td>
            <td>Riski Pratama</td>
            <td>Administrasi Bisnis</td>
            <td>AB-20-I-1</td>
            <td>INV/220090041540</td>
            <td>31-08-2020</td>
            <td class='text-right'>4,500,000</td>
        </tr>
        <tr>
            <td>8</td>
            <td>200111020020</td>
            <td>Tri Hartini</td>
            <td>Administrasi Bisnis</td>
            <td>AB-20-I-1</td>
            <td>2020-04791,4888</td>
            <td>14-07-2020</td>
            <td class='text-right'>7,000,000</td>
        </tr>
        <tr>
            <td>9</td>
            <td>200111020022</td>
            <td>Rayhan Sultan Ramadhan</td>
            <td>Administrasi Bisnis</td>
            <td>AB-20-I-1</td>
            <td>INV/220090041540</td>
            <td>15-09-2020</td>
            <td class='text-right'>5,000,000</td>
        </tr>
        <tr>
            <td>10</td>
            <td>200111020024</td>
            <td>Nafilah</td>
            <td>Administrasi Bisnis</td>
            <td>AB-20-I-1</td>
            <td>2020-00000</td>
            <td>02-10-2020</td>
            <td class='text-right'>0</td>
        </tr>
    </tbody>
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
