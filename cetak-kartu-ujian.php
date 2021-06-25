<?php
    $content = "

    <style type='text/css'>

    font {
        font-family : arial;
    }

    .title {
      font-size: 14pt;
      font-weight: bold;
  }

  .title2 {
      font-size: 16pt;
      font-weight: bold;
  }

  .sub {
      font-size: 10pt;
      font-family : arial;
  }

  .font1 {
      font-size: 10pt;
      margin-top: 80px;
  }

  .col-tb1 {
    width: 110px;
}

.col-tb2 {
    width: 13px;
}

.head-col {
    font-weight: bold;
    height: 40px;
    padding:5px;
}

.cen-col {
    text-align : center;
    padding : 5px;
}

.pad-col {
    padding-left : 5px;
    padding-right : 5px;
}

.ket-col {
    font-size: 10pt;
    padding-top:100px;
    float:bottom;
}

.ket-table {
    font-size: 10pt;
}

  </style>

    <html> 
    <body>

        <table>
        <tr>
            <td width='70px'> <img src='theme/img/logo-lp3i-poltek.png' width='8%'> </td>
            <td style='vertical-align:top;padding-top:10px'>
            <font class='title'>POLITEKNIK LP3I JAKARTA</font> <br> 
            <font class='font1'>Kampus Cikarang</font> <br>
            <font class='font1'>Jl. Gatot Subroto No. 119 KarangAsih Cikarang Utara</font>
            </td>
        </tr>
        </table>

        <p align='center'><font class='title2'><b> Ujian Tengah Semester </b></font>

        <table class='sub'>
        <tr>
        <td class='col-tb1'>NIM</td>
        <td class='col-tb2'>:</td>
        <td>1902211330110</td>
        <td width='100px'>&nbsp;</td>
        <td class='col-tb1'>SEMESTER</td>
        <td class='col-tb2'>:</td>
        <td>1 (Ganjil)</td>        
        </tr>

       <tr>
        <td class='col-tb1'>NAMA LENGKAP</td>
        <td class='col-tb2'>:</td>
        <td>Rosihan Arbi Said</td>
        <td>&nbsp;</td>
        <td class='col-tb1'>KONSENTRASI</td>
        <td class='col-tb2'>:</td>
        <td>Manajemen Informatika</td>        
        </tr>

        </table>


        <table border=1 style='border-collapse: collapse;width:100%;margin-top:20px'>
        <tr>
        <td class='head-col' align='center'>NO</td>
        <td class='head-col'>HARI, TANGGAL</td>
        <td class='head-col' align='center'>WAKTU</td>
        <td class='head-col'>RUANG</td>
        <td class='head-col'>MATA KULIAH</td>
        <td class='head-col'>PENGAWAS</td>
        </tr>

        <tr>
        <td class='cen-col'>1</td>
        <td class='pad-col'>Senin, 21 Juni 2021</td>
        <td class='cen-col'>08.00 - 09.45</td>
        <td class='pad-col'>R.30</td>
        <td class='pad-col'>Pendidikan Agama</td>
        <td class='pad-col'>Fajar Widyatama M.Kom</td>
        </tr>

        <tr>
        <td class='cen-col'>2</td>
        <td class='pad-col'>Selasa, 22 Juni 2021</td>
        <td class='cen-col'>08.00 - 09.45</td>
        <td class='pad-col'>LMS-Online</td>
        <td class='pad-col'>Basis Data</td>
        <td class='pad-col'>Teddy Setiady M.Kom</td>
        </tr>

        </table>


        <!-- BEGIN FORM 2 -->
        <table style='padding-top:20px;'>

        <tr>
        <td>&nbsp;</td>
        <td width='310px'></td>
        <td>Jakarta, 18 Juni 2021</td>
        </tr>
        <tr>
        <td height=80px>&nbsp;</td>
        </tr>

        <tr>
        <td>Siska Handayani, S.AP</td>
        <td>&nbsp;</td>
        <td>Nurulita Amalia, M.T</td>
        </tr>
        <tr>
        <td>Kabid Keuangan</td>
        <td>&nbsp;</td>
        <td>Kabid Akademik</td>
        </tr>

        </table>
        <!-- END FORM 2 -->

        <!-- BEGIN KETERANGAN FORM -->
        <div style='padding-top:50px;'>
        <table style='width 100%;'>
        <tr>
        <td>
        Catatan : <br>
        <ul>
        <li>Silahkan konfirmasi ke Bagian Keuangan Kampus Jakarta Utara, untuk diberikan stempel/cap.</li>
        <li>Kartu ujian harap dibawa pada saat ujian berlangsung, apabila hilang/tertinggal silahkan unduh ulang.</li>
        </ul>
        </td>
        </tr>
        </table>
        </div>
        <!-- END KETERANGAN FORM -->



    </body>
    </html>
    ";

    require_once "./mpdf_v8.0.3/vendor/autoload.php";
    $mpdf = new \Mpdf\Mpdf();

    // AddPage Function = https://mpdf.github.io/reference/mpdf-functions/addpage.html

    $mpdf->AddPage("P","","","","","15","15","15","15","","","","","","","","","","","","A4");
    $mpdf->WriteHTML($content);
    $mpdf->Output(); //UNTUK PREVIEW FILE
    // $mpdf->Output("contoh_report.pdf"); UNTUK AUTODOWNLOAD FILE
?>
