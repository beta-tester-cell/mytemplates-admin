<?php
    $content = "

    <style type='text/css'>

    font {
        font-family : arial;
    }

    .title {
      font-size: 16pt;
      font-weight: bold;
      padding-left:150px;    
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

  </style>

    <html> 
    <body>


        <table style='margin-bottom:20px;'>
        <tr>
            <td width='200px' align='center'> <img src='theme/img/logo-lp3i-poltek.png' width='12%'> </td>
            <td style='vertical-align:top;padding-top:20px'>
                <table>
                    <tr>
                        <td align='center'><font class='title' style='margin-bottom: 105px;'>SLIP GAJI DOSEN</font></td>
                    </tr>
                    <tr>
                        <td align='center'><font class='title'>PLJ KAMPUS JAKARTA TIMUR</font> </td>
                    </tr>
                    <tr>
                        <td align='center'><font class='title'>PERIODE JUNI 2020</font></td>
                    </tr>
                </table>      
            </td>
        </tr>
        </table>


        <table style='margin-bottom:20px;'>
            <tr>
                <td width='260px'><font>NAMA</font></td>
                <td>SOLEHA, S.Psi</font></td>
            </tr>
            <tr>
                <td width='260px'><font>JABATAN</font></td>
                <td><font>Dosen</font></td>
            </tr>
        </table>

         <table>
            <tr>
                <td width='260px'><font>JUMLAH SESI</font></td>
                <td width='260px' align='right'><font>2</font></td>
            </tr>
            <tr>
                <td><font>HONOR PER SESI</font></td>
                <td>
                    <table>
                        <tr>
                            <td width='202px'><font>Rp. </font></td>
                            <td align='right'><font>75.000</font></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><hr style='height:2px;border:none;color:#333;background-color:#333;'></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <table>
                        <tr>
                            <td width='100px'><font>Rp. </font></td>
                            <td align='right'><font>150.000</font></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td><font>POTONGAN</font></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><font>PPH 21</font></td>
                <td>                    
                    <table>
                        <tr>
                            <td width='202px'><font>Rp. </font></td>
                            <td align='right'><font>150.000</font></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td><font>ZIS</font></td>
                <td>                    
                    <table>
                        <tr>
                            <td width='240px'><font>Rp. </font></td>
                            <td align='right'><font>-</font></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td><font>PINJAMAN</font></td>
                <td>                    
                    <table>
                        <tr>
                            <td width='240px'><font>Rp. </font></td>
                            <td align='right'><font>-</font></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td><font>*POTONGAN LAIN</font></td>
                <td>                    
                    <table>
                        <tr>
                            <td width='240px'><font>Rp. </font></td>
                            <td align='right'><font>-</font></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><hr style='height:2px;border:none;color:#333;background-color:#333;'></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <table>
                        <tr>
                            <td width='100px'><font>Rp. </font></td>
                            <td align='right'><font>4.500</font></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td width='150px'><hr style='height:2px;border:none;color:#333;background-color:#333;' ></td>
            </tr>
            <tr>
                <td colspan='2' style='text-align:center;'><font size='6'><b>TOTAL HONOR BULAN JUNI 2020</b></font></td>
                <td>
                    <table>
                        <tr>
                            <td width='100px'><font><b>Rp. </b></font></td>
                            <td align='right'><font><b>145.500</b></font></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <table style='padding-top:100px'>
            <tr>
                <td>Jakarta, 01 Juli 2020</td>
            </tr>
            <tr>
                <td width='480px'> Dibuat Oleh,</td>
                <td> Diterima Oleh,</td>
            </tr>
            <tr>
                <td height='90px'></td>
            </tr>
            <tr>
                <td width='480px'>Egi Panji Kresna A.Md</td>
                <td> SOLEHA, S.Psi</td>
            </tr>
            <tr>
                <td>Staff Kasir</td>
            </tr>
        </table>



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
