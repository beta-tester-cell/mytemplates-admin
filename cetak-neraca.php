<?php
$content = "
<style type='text/css'>

body {
    font-family: Calibri;
    font-size:12px;
   margin:30px;
}

.title {
  font-size: 28px;
  font-weight:700;

}

.title2 {
  font-size: 20px;
  font-weight: bold;
}

.sub {
  font-size: 10pt;
  font-family : arial;
}

.font1 {
  font-size: 12pt;
  margin-top: 80px;
}

.text-right{
text-align:right;
}

.text-danger{
color:#bf111f;
}

.border-left-2{
    border:none;
    border-left:2px solid;
}

.border-left-1{
    border:none;
    border-left:2px solid;
}

.border-left-right{
    border:none;
    border-left:1px solid;
    border-right:2px solid;
}

.text-center{
    text-align:center;
}
</style>

<html>
    <body>
    <div style='margin:30px'>
    <table style='width:100%'>
        <tr>
            <td width='100px'>
                <img src='theme/img/logo-lp3i-poltek.png' width='80px'> 
            </td>
            <td style='vertical-align:top;padding-top:2px;'>
                <table>
                    <tr>
                        <td  style='vertical-align:top;padding-top:10px;text-align:center;width:700px;'>
                            <p class='title'><b>POLITEKNIK LP3I JAKARTA</b></p> 
                        </td>
                    </tr>     
                    <tr>
                        <td  style='vertical-align:top;padding-top:2px;text-align:center;width:700px;'>
                            <p class='title2'><b>KAMPUS JAKARTA PUSAT (KRAMAT RAYA)</b></p> 
                        </td>
                    </tr>
                    <tr>                                             
                    <td  style='vertical-align:top;padding-top:2px;text-align:center;width:700px;'>
                        <p class='font1'>Gedung Sentra Kramat</p>
                    </td>
                </tr> 
                <tr>                                             
                    <td  style='vertical-align:top;padding-top:2px;text-align:center;width:700px;'>
                        <p class='font1'>Jl. Kramat Raya No 7/9, Jakarta Pusat </p>
                    </td>
                </tr> 
                </table>
            </td>
        </tr>
        </table>
        <hr>

        <div style='text-align:center;margin-bottom:1.5rem;'>
            <h3>NERACA</h3>
            <h3>Desember dan November 2021</h3>
        </div>
        <table border='1' style='width:100%;border-collapse:collapse;border:3px solid; '>
            <thead>
                <tr>
                    <th></th>
                    <th class='text-center'><b>Catatan</b></th>
                    <th class='text-center'><b>Desember 2021</b></th>
                    <th class='text-center'><b>November 2021</b></th>
                </tr>
            </thead>
            <tbody>
            <tr style='background-color:#004269'>
                <td class='text-center border-left-2' style='color:#fff;height:35px'><b>AKTIVA</b></td>
                <td class='border-left-1'></td>
                <td class='border-left-1'></td>
                <td class='border-left-right'></td>
            </tr>
            <tr style='background-color:#009da5'>
                <td class='border-left-2' style='color:#fff;'><b>AKTIVA LANCAR</b></td>
                <td class='border-left-1'></td>
                <td class='border-left-1'></td>
                <td class='border-left-right'></td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:15px;'>Kas & Bank</td>
                <td class='text-center border-left-1'>1</td>
                <td class='text-right border-left-1'>11.657.447,00</td>
                <td class='text-right border-left-right'>17.691.392,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px;'>Kas Ditangan</td>
                <td class='text-center border-left-1'></td>
                <td class='text-right border-left-1'>797.205,00</td>
                <td class='text-right border-left-right'>272.086,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px;'>Bank DDD Pend. Lain-lain a/c 1050596083</td>
                <td class='text-center border-left-1'></td>
                <td class='text-right border-left-1'>828.178,00</td>
                <td class='text-right border-left-right'>448.658,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px;'>Bank xxx a/c 040.01.08.000004.6</td>
                <td class='text-center border-left-1'></td>
                <td class='text-right border-left-1'>2.315.531,00</td>
                <td class='text-right border-left-right'>4.925.531,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px'></td>
                <td class='border-left-1' style='height:20px'></td>
                <td class='text-right border-left-1'></td>
                <td class='text-right border-left-right'></td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:15px;'>Piutang Siswa</td>
                <td class='text-center border-left-1'>2</td>
                <td class='text-right border-left-1'>345.900.080,00</td>
                <td class='text-right border-left-right'>477.325.080,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px;'>Piutang Tunggakan</td>
                <td class='text-center border-left-1'></td>
                <td class='text-right border-left-1'>340.400.080,00</td>
                <td class='text-right border-left-right'>471.875.080,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px;'>Piutang Dana Pinjaman </td>
                <td class='text-center border-left-1'></td>
                <td class='text-right border-left-1'>7.400.000,00</td>
                <td class='text-right border-left-right'>7.300.000,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px;'>Akumulasi piutang tak tertagih</td>
                <td class='text-center border-left-1'></td>
                <td class='text-right border-left-1 text-danger'>-1.900.000,00</td>
                <td class='text-right border-left-right text-danger'>-1.850.000,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px'></td>
                <td class='border-left-1' style='height:20px'></td>
                <td class='text-right border-left-1'></td>
                <td class='text-right border-left-right'></td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:15px;'>Piutang Pegawai / Lain-lain</td>
                <td class='text-center border-left-1'>3</td>
                <td class='text-right border-left-1'>25.497.344,00</td>
                <td class='text-right border-left-right'>27.691.285,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px;'>Piutang Pegawai </td>
                <td class='text-center border-left-1'></td>
                <td class='text-right border-left-1'>8.102.792,00</td>
                <td class='text-right border-left-right'>6.305.941,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px;'>Piutang Investor</td>
                <td class='text-center border-left-1'></td>
                <td class='text-right border-left-1'>15.585.254,00</td>
                <td class='text-right border-left-right'>15.585.254,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px;'>Piutang lain-lain</td>
                <td class='text-center border-left-1'></td>
                <td class='text-right border-left-1'>1.809.298,00</td>
                <td class='text-right border-left-right'>5.800.090,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px'></td>
                <td class='border-left-1' style='height:20px'></td>
                <td class='text-right border-left-1'></td>
                <td class='text-right border-left-right'></td>
            </tr>
            <tr style='background-color:#009da5'>
                <td class='border-left-2' style='color:#fff;'><b>AKTIVA TETAP</b></td>
                <td class='border-left-1'></td>
                <td class='border-left-1'></td>
                <td class='border-left-right'></td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:15px;'>Harga Perolehan Aktiva Tetap (Cost)</td>
                <td class='text-center border-left-1'>8</td>
                <td class='text-right border-left-1'>783.416.563,00 </td>
                <td class='text-right border-left-right'>795.516.563,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px;'> Partisi Gedung</td>
                <td class='text-center border-left-1'></td>
                <td class='text-right border-left-1'>160.616.000,00</td>
                <td class='text-right border-left-right'>160.616.000,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px;'>Kendaraan</td>
                <td class='text-center border-left-1'></td>
                <td class='text-right border-left-1'>178.136.092,00</td>
                <td class='text-right border-left-right'>178.136.092,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px;'>Mesin AC</td>
                <td class='text-center border-left-1'></td>
                <td class='text-right border-left-1'>92.345.000,00</td>
                <td class='text-right border-left-right'>92.345.000,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px'></td>
                <td class='border-left-1' style='height:20px'></td>
                <td class='text-right border-left-1'></td>
                <td class='text-right border-left-right'></td>
            </tr>
            </tbody>
        </table>
    </div>
    </body>
</html>

";


require_once "./mpdf_v8.0.3/vendor/autoload.php";
$mpdf = new \Mpdf\Mpdf();

// AddPage Function = https://mpdf.github.io/reference/mpdf-functions/addpage.html

$mpdf->SetHTMLHeader("

");

$mpdf->SetHTMLFooter("<div style='background-color:#00426d'>
                            <div>
                                <table>
                                    <tr>
                                        <td width='515px'>
                                            <p style='color:white;' size='4'>Copyright &copy; " . date('Y') . " Politeknik LP3I. All Right Reserve</p>
                                        </td>
                                    </tr>
                                </table>                   
                            </div>
                        </div>");
// $pdf->AddPage('', // L - landscape, P - portrait 
//     '', '', '', '',
//     5, // margin_left
//     5, // margin right
//    60, // margin top
//    30, // margin bottom
//     0, // margin header
//     0); // margin footer
$mpdf->AddPage("P", "", "", "", "", "0", "0", "0", "0", "0", "0", "", "", "", "", "", "", "", "", "", "A4");
$mpdf->WriteHTML($content);
$mpdf->Output(); //UNTUK PREVIEW FILE
    // $mpdf->Output("contoh_report.pdf"); UNTUK AUTODOWNLOAD FILE
