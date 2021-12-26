<?php
$content = "
<style type='text/css'>

font {
    font-family: Calibri;
}

h2,h3{
    font-family: Calibri;
}

.fa { 
    font-family: fontawesome; 
}     
.fas { 
    font-family: fontawesome-solid;
}     
.fab { 
    font-family: fontawesome-brands; 
}

.title {
  font-size: 2rem;
  font-weight:700;

}

.title2 {
  font-size: 1.25rem;
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


</style>

<html>
<body>
    <div style='margin: 2rem '>
        <table style='width:100%'>
            <tr>
                <td width='100px'>
                    <img src='theme/img/logo-lp3i-poltek.png' width='80px'> 
                </td>
                <td style='vertical-align:top;padding-top:2px;'>
                    <table>
                        <tr>
                            <td  style='vertical-align:top;padding-top:10px;text-align:center;width:700px;'>
                                <font class='title'><b>POLITEKNIK LP3I JAKARTA</b></font> 
                            </td>
                        </tr>     
                        <tr>
                            <td  style='vertical-align:top;padding-top:2px;text-align:center;width:700px;'>
                                <font class='title2'><b>KAMPUS JAKARTA PUSAT (KRAMAT RAYA)</b></font> 
                            </td>
                        </tr>
                        <tr>                                             
                        <td  style='vertical-align:top;padding-top:2px;text-align:center;width:700px;'>
                            <font class='font1'>Gedung Sentra Kramat</font>
                        </td>
                    </tr> 
                    <tr>                                             
                        <td  style='vertical-align:top;padding-top:2px;text-align:center;width:700px;'>
                            <font class='font1'>Jl. Kramat Raya No 7/9, Jakarta Pusat </font>
                        </td>
                    </tr> 
                    </table>
                </td>
            </tr>
        </table>
        <hr>

        <div style='text-align:center;margin-bottom:1.5rem;'>
            <h3>LAPORAN LABA/RUGI</h3>
            <h3>Untuk periode Desember dan periode sampai dengan Desember 2021</h3>
        </div>

        <table border='1' style='width:100%;border-collapse: collapse;'>
            <thead>
                <tr>
                    <th>Account Name</th>
                    <th>Catatan</th>
                    <th>Desember</th>
                    <th>s/d Desember</th>
                    <th>Anggaran Desember</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <td style='text-align:center;'><b>Pendapatan</b></td>
            </tr>
            <tr>
                <td><b>PENDAPATAN USAHA</b></td>
            </tr>
            <tr>
                <td>Pendapatan Profesi</td>
                <td>1</td>
                <td class='text-right'><span class='text-danger'>-18.082.914,00</span></td>
                <td class='text-right'>766.940.004,00</td>
                <td class='text-right'>1.451.350.800,00</td>
            </tr>
            <tr>
                <td>Komputer Akuntansi(junior)</td>
                <td></td>
                <td class='text-right'>3.854.996,00</td>
                <td class='text-right'>92.939.998,00</td>
                <td class='text-right'>463.000.000,00</td>
            </tr>
            <tr>
                <td>Informatika Komputer (Senior)</td>
                <td></td>
                <td class='text-right'>-14.342.916,00</td>
                <td class='text-right'>144.040.002,00</td>
                <td class='text-right'>67.250.000,00</td>
            </tr>
            <tr>
                <td>Office Management (Senior)</td>
                <td></td>
                <td class='text-right'>-40.414.163,00</td>
                <td class='text-right'>152.895.002,00</td>
                <td class='text-right'>285.400.800,00</td>
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
$mpdf->SetHTMLFooter("<div style='background-color:#00426d'>
                            <div>
                                <table>
                                    <tr>
                                        <td width='515px'>
                                            <font style='color:white;' size='4'>Copyright &copy; " . date('Y') . " Politeknik LP3I. All Right Reserve</font>
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
