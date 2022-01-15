<?php
$content = "
<style type='text/css'>

body {
    font-family: Calibri;
    font-size:12px;
   margin:30px;
}

td{
    padding-left: 8px;
    padding-right:8px;
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
                                <td  style='vertical-align:top;padding-top:10px;width:700px;'>
                                    <p class='title'><b>POLITEKNIK LP3I JAKARTA</b></p> 
                                </td>
                            </tr>     
                            <tr>
                                <td  style='vertical-align:top;padding-top:2px;width:700px;'>
                                    <p class='title2'><b>KAMPUS JAKARTA PUSAT (KRAMAT RAYA)</b></p> 
                                </td>
                            </tr>
                            <tr>                                             
                            <td  style='vertical-align:top;padding-top:2px;width:700px;'>
                                <p class='font1'>Gedung Sentra Kramat</p>
                            </td>
                        </tr> 
                        <tr>                                             
                            <td  style='vertical-align:top;padding-top:2px;width:700px;'>
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
                <td class='border-left-2' style='color:#fff;height:25px'><b>AKTIVA LANCAR</b></td>
                <td class='border-left-1'></td>
                <td class='border-left-1'></td>
                <td class='border-left-right'></td>
            </tr>
            <tr style='background-color:rgba(49,101,158,0.2)'>
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
            <tr style='background-color:rgba(49,101,158,0.2)'>
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
            <tr style='background-color:rgba(49,101,158,0.2)'>
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
                <td class='border-left-2' style='color:#fff;height:25px'><b>AKTIVA TETAP</b></td>
                <td class='border-left-1'></td>
                <td class='border-left-1'></td>
                <td class='border-left-right'></td>
            </tr>
            <tr style='background-color:rgba(49,101,158,0.2)'>
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
            <tr style='background-color:rgba(49,101,158,0.2)'>
                <td class='border-left-2' style='padding-left:15px;'>Akumulasi Penyusutan </td>
                <td class='text-center border-left-1'>9 </td>
                <td class='text-right border-left-1 text-danger'>-739.233.662,00</td>
                <td class='text-right border-left-right text-danger'>-752.418.977,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px;'>Ak. Peny. Partisi Gedung</td>
                <td class='text-center border-left-1'></td>
                <td class='text-right border-left-1 text-danger'>-160.175.546,00</td>
                <td class='text-right border-left-right text-danger'>-158.049.310,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px;'>Ak. Peny. Kendaraan </td>
                <td class='text-center border-left-1'></td>
                <td class='text-right border-left-1 text-danger'>-171.274.734,00</td>
                <td class='text-right border-left-right text-danger'>-178.136.092,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px;'>Ak. Peny. Mesin AC</td>
                <td class='text-center border-left-1'></td>
                <td class='text-right border-left-1 text-danger'>-63.501.539,00</td>
                <td class='text-right border-left-right text-danger'>-69.494.584,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px'></td>
                <td class='border-left-1' style='height:20px'></td>
                <td class='text-right border-left-1'></td>
                <td class='text-right border-left-right'></td>
            </tr>
            <tr style='background-color:#009da5'>
                <td class='border-left-2' style='color:#fff;height:25px'><b>AKTIVA LAIN - LAIN</b></td>
                <td class='border-left-1'></td>
                <td class='border-left-1'></td>
                <td class='border-left-right'></td>
            </tr>
            <tr style='background-color:rgba(49,101,158,0.1)'>
                <td class='border-left-2' style='padding-left:15px;'> Biaya Pra Operasi / Pendirian Org.</td>
                <td class='text-center border-left-1'>10</td>
                <td class='text-right border-left-1'>609.760.280,00</td>
                <td class='text-right border-left-right'>599.340.224,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px;'>Harga Perolehan By. Pra operasi</td>
                <td class='text-center border-left-1'></td>
                <td class='text-right border-left-1'>749.800.280,00</td>
                <td class='text-right border-left-right'>749.800.280,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px;'>Akumulasi Amortisasi </td>
                <td class='text-center border-left-1'></td>
                <td class='text-right border-left-1 text-danger'>-140.040.000,00</td>
                <td class='text-right border-left-right text-danger'>-150.460.056,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px'></td>
                <td class='border-left-1' style='height:20px'></td>
                <td class='text-right border-left-1'></td>
                <td class='text-right border-left-right'></td>
            </tr>
            <tr style='background-color:rgba(49,101,158,0.1)'>
                <td class='border-left-2' style='padding-left:15px;'>Software dan Kepustakaan</td>
                <td class='text-center border-left-1'>11</td>
                <td class='text-right border-left-1'>750.000,00</td>
                <td class='text-right border-left-right'>2.500.000,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px;'>Harga Perolehan Software / Kepustakaan</td>
                <td class='text-center border-left-1'></td>
                <td class='text-right border-left-1'>2.500.000,00 </td>
                <td class='text-right border-left-right'>2.500.000,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px;'>Akumulasi Amortisasi</td>
                <td class='text-center border-left-1'></td>
                <td class='text-right border-left-1 text-danger'>-1.750.000,00</td>
                <td class='text-right border-left-right'>0,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px'></td>
                <td class='border-left-1' style='height:20px'></td>
                <td class='text-right border-left-1'></td>
                <td class='text-right border-left-right'></td>
            </tr>
            <tr style='border:2px solid'>
                <td class='text-center'><b>TOTAL AKTIVA</b></td>
                <td></td>
                <td class='text-right'><b>1.168.126.581,00</b></td>
                <td class='text-right'><b>1.236.763.440,00</b></td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px'></td>
                <td class='border-left-1' style='height:20px'></td>
                <td class='text-right border-left-1'></td>
                <td class='text-right border-left-right'></td>
            </tr>
            <tr style='background-color:#004269'>
                <td class='text-center border-left-2' style='color:#fff;height:35px'><b>KEWAJIBAN & EQUITAS</b></td>
                <td class='border-left-1'></td>
                <td class='border-left-1'></td>
                <td class='border-left-right'></td>
            </tr>
            <tr style='background-color:#009da5'>
                <td class='border-left-2' style='color:#fff;height:25px'><b>KEWAJIBAN JANGKA PENDEK</b></td>
                <td class='border-left-1'></td>
                <td class='border-left-1'></td>
                <td class='border-left-right'></td>
            </tr>
            </tbody>
        </table>
        <table style='width:100%'>
                <tr>
                    <td width='100px'>
                        <img src='theme/img/logo-lp3i-poltek.png' width='80px'> 
                    </td>
                    <td style='vertical-align:top;padding-top:2px;'>
                        <table>
                            <tr>
                                <td  style='vertical-align:top;padding-top:10px;width:700px;'>
                                    <p class='title'><b>POLITEKNIK LP3I JAKARTA</b></p> 
                                </td>
                            </tr>     
                            <tr>
                                <td  style='vertical-align:top;padding-top:2px;width:700px;'>
                                    <p class='title2'><b>KAMPUS JAKARTA PUSAT (KRAMAT RAYA)</b></p> 
                                </td>
                            </tr>
                            <tr>                                             
                            <td  style='vertical-align:top;padding-top:2px;width:700px;'>
                                <p class='font1'>Gedung Sentra Kramat</p>
                            </td>
                        </tr> 
                        <tr>                                             
                            <td  style='vertical-align:top;padding-top:2px;width:700px;'>
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
                    <th style='width:360px'></th>
                    <th class='text-center' style='width:60px'><b>Catatan</b></th>
                    <th class='text-center'><b>Desember 2021</b></th>
                    <th class='text-center'><b>November 2021</b></th>
                </tr>
            </thead>
            <tbody>
            <tr style='background-color:rgba(49,101,158,0.1)'>
                <td class='border-left-2' style='padding-left:15px;'>Hutang Lain-lain</td>
                <td class='text-center border-left-1'>12</td>
                <td class='text-right border-left-1'>249.331.877,00</td>
                <td class='text-right border-left-right'>274.302.677,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px;'>Hutang Koripindo</td>
                <td class='text-center border-left-1'></td>
                <td class='text-right border-left-1'>36.377.000,00</td>
                <td class='text-right border-left-right'>36.377.000,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px;'>Hutang Jasa Produksi</td>
                <td class='text-center border-left-1'></td>
                <td class='text-right border-left-1'>58.569.127,00</td>
                <td class='text-right border-left-right'>58.569.127,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px;'>Kewajiban Imbalan Pasca Kerja</td>
                <td class='text-center border-left-1'></td>
                <td class='text-right border-left-1'>152.407.750,00</td>
                <td class='text-right border-left-right'>152.407.750,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px;'>Hutang Lain-lain</td>
                <td class='text-center border-left-1'></td>
                <td class='text-right border-left-1'>1.978.000,00</td>
                <td class='text-right border-left-right'>26.948.800,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px'></td>
                <td class='border-left-1' style='height:20px'></td>
                <td class='text-right border-left-1'></td>
                <td class='text-right border-left-right'></td>
            </tr>   
            <tr style='background-color:rgba(49,101,158,0.1)'>
                <td class='border-left-2' style='padding-left:15px;'> Hutang Pihak ketiga</td>
                <td class='text-center border-left-1'>13</td>
                <td class='text-right border-left-1'>92.035.000,00</td>
                <td class='text-right border-left-right'>128.535.000,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px;'>Hutang Ar Rahman </td>
                <td class='text-center border-left-1'></td>
                <td class='text-right border-left-1'>9.035.000,00</td>
                <td class='text-right border-left-right'>35.000,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px;'>Hutang Kantor Pusat</td>
                <td class='text-center border-left-1'></td>
                <td class='text-right border-left-1'>83.000.000,00</td>
                <td class='text-right border-left-right'>103.000.000,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px;'>Hutang Pihak Ketiga Lainnya</td>
                <td class='text-center border-left-1'></td>
                <td class='text-right border-left-1'>0,00</td>
                <td class='text-right border-left-right'>25.500.000,00</td>
            </tr>   
            <tr>
                <td class='border-left-2' style='padding-left:30px'></td>
                <td class='border-left-1' style='height:20px'></td>
                <td class='text-right border-left-1'></td>
                <td class='text-right border-left-right'></td>
            </tr>      
            <tr style='background-color:#009da5'>
                <td class='border-left-2' style='color:#fff;height:25px'><b>KEWAJIBAN JANGKA PANJANG</b></td>
                <td class='border-left-1'></td>
                <td class='border-left-1'></td>
                <td class='border-left-right'></td>
            </tr>
            <tr style='background-color:rgba(49,101,158,0.1)'>
                <td class='border-left-2' style='padding-left:15px;'>Hutang Bank</td>
                <td class='text-center border-left-1'>19</td>
                <td class='text-right border-left-1'>506.526.801,00</td>
                <td class='text-right border-left-right'>390.366.244,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px;'>Hutang Bank Aceh</td>
                <td class='text-center border-left-1'></td>
                <td class='text-right border-left-1'>506.526.801,00</td>
                <td class='text-right border-left-right'>390.366.244,00</td>
            </tr> 
            <tr>
                <td class='border-left-2' style='padding-left:30px'></td>
                <td class='border-left-1' style='height:20px'></td>
                <td class='text-right border-left-1'></td>
                <td class='text-right border-left-right'></td>
            </tr>     
            <tr style='background-color:#009da5'>
                <td class='border-left-2' style='color:#fff;height:25px'><b>MODAL DISETOR</b></td>
                <td class='border-left-1'></td>
                <td class='border-left-1'></td>
                <td class='border-left-right'></td>
            </tr>     
            <tr style='background-color:rgba(49,101,158,0.1)'>
                <td class='border-left-2' style='padding-left:15px;'>Modal Saham Ibu Alkhansya </td>
                <td class='text-center border-left-1'>20</td>
                <td class='text-right border-left-1'>41.423.019,00</td>
                <td class='text-right border-left-right'>41.423.019,00</td>
            </tr>    
            <tr style='background-color:rgba(49,101,158,0.1)'>
                <td class='border-left-2' style='padding-left:15px;'>Modal Kantor Pusat </td>
                <td class='text-center border-left-1'>21</td>
                <td class='text-right border-left-1'>165.692.074,00</td>
                <td class='text-right border-left-right'>165.692.074,00</td>
            </tr> 
            <tr>
                <td class='border-left-2' style='padding-left:30px'></td>
                <td class='border-left-1' style='height:20px'></td>
                <td class='text-right border-left-1'></td>
                <td class='text-right border-left-right'></td>
            </tr>  
            <tr style='background-color:#009da5'>
                <td class='border-left-2' style='color:#fff;height:25px'><b>LABA DITAHAN</b></td>
                <td class='border-left-1'></td>
                <td class='border-left-1'></td>
                <td class='border-left-right'></td>
            </tr>  
            <tr style='background-color:rgba(49,101,158,0.2)'>
                <td class='border-left-2' style='padding-left:15px;'>Aktiva Besih s.d 2009</td>
                <td class='text-center border-left-1'>22</td>
                <td class='text-right border-left-1'>104.092.231,00</td>
                <td class='text-right border-left-right'>238.488.580,00</td>
            </tr>   
            <tr style='background-color:rgba(49,101,158,0.2)'>
                <td class='border-left-2' style='padding-left:15px;'>Aktiva Bersih 2009-2010</td>
                <td class='text-center border-left-1'>23</td>
                <td class='text-right border-left-1'>134.396.349,00</td>
                <td class='text-right border-left-right'>17.462.986,00</td>
            </tr>    
            <tr style='background-color:rgba(49,101,158,0.2)'>
                <td class='border-left-2' style='padding-left:15px;'>Aktiva Bersih 2010 - 2011</td>
                <td class='text-center border-left-1'>24</td>
                <td class='text-right border-left-1'>17.462.986,00</td>
                <td class='text-right border-left-right'>102.268.267,00</td>
            </tr>      
            <tr style='background-color:rgba(49,101,158,0.2)'>
                <td class='border-left-2' style='padding-left:15px;'>Aktiva Bersih 2011 - 2012</td>
                <td class='text-center border-left-1'>25</td>
                <td class='text-right border-left-1'>102.268.267,00</td>
                <td class='text-right border-left-right text-danger'>-22.922.766,00</td>
            </tr> 
            <tr style='background-color:rgba(49,101,158,0.2)'>
                <td class='border-left-2' style='padding-left:15px;'>Laba Periode Berjalan</td>
                <td class='text-center border-left-1'>36</td>
                <td class='text-right border-left-1 text-danger'>-159.196.326,00</td>
                <td class='text-right border-left-right text-danger'>-149.707.004,00</td>
            </tr> 
            <tr style='background-color:rgba(49,101,158,0.2)'>
                <td class='border-left-2' style='padding-left:30px'></td>
                <td class='border-left-1' style='height:20px'></td>
                <td class='text-right border-left-1'></td>
                <td class='text-right border-left-right'></td>
            </tr>          
            <tr style='border:2px solid'>
                <td class='text-center'><b>TOTAL KEWAJIBAN & EQUITAS</b></td>
                <td></td>
                <td class='text-right'><b>1.168.126.581,00</b></td>
                <td class='text-right'><b>1.236.763.440,00</b></td>
            </tr>
            </tbody>
        </table>
        <div>
            <p>19-Desember-2021</p>
        </div>

        <table style='width:100%'>
        <tr>
            <td style='width:63%'><b>Dibuat Oleh,</b></td>
            <td><b>Mengetahui</b></td>
        </tr>
        <tr>
            <td style='height:100px'></td>
            <td style='height:100px'></td>
        </tr>
        <tr>
            <td style='width:63%'>Name here...</td>
            <td>Name here...</td>
        </tr>
        <tr>
            <td style='width:63%'><b>Head Of Finance & HRD </b></td>
            <td><b>Branch Manager</b></td>
        </tr>
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
