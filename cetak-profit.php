<?php
$content = "
<style type='text/css'>

body {
    font-family: Calibri;
    font-size:12px;
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
            <h3>LAPORAN LABA/RUGI</h3>
            <h3>Untuk periode Desember dan periode sampai dengan Desember 2021</h3>
        </div>

        <table border='1' style='width:100%;border-collapse: collapse;border:3px solid'>
            <thead>
                <tr>
                    <th style='font-size:11px;height:35px'>Account Name</th>
                    <th style='font-size:11px'>Catatan</th>
                    <th style='font-size:11px'>Desember</th>
                    <th  style='font-size:11px'>s/d Desember</th>
                    <th style='font-size:11px'>Anggaran Desember</th>
                </tr>
            </thead>
            <tbody>
            <tr style='background-color:rgba(0,157,165,0.3);'>
                <td class='text-center border-left-2'><b>PENDAPATAN</b></td>
                <td class='border-left-1'></td>
                <td class='border-left-1'></td>
                <td class='border-left-1'></td>
                <td class='border-left-right'></td>
            </tr>
            <tr style='background-color:#004269;'>
                <td class='border-left-2' style='height:35px;color:#fff; padding-left:8px'><b>PENDAPATAN USAHA</b></td>
                <td class='border-left-1' style='height:35px;color:#fff'></td>
                <td class='border-left-1' style='height:35px;color:#fff'></td>
                <td class='border-left-1' style='height:35px;color:#fff'></td>
                <td class='border-left-right' style='height:35px;color:#fff;'></td>
            </tr>
            <tr style='background-color:rgba(0,157,165,0.2)'>
                <td class='border-left-2' style='padding-left:15px;'>Pendapatan Profesi</td>
                <td class='text-center border-left-1'>1</td>
                <td class='text-right border-left-1'><span class='text-danger'>-18.082.914,00</span></td>
                <td class='text-right border-left-1'>766.940.004,00</td>
                <td class='text-right border-left-right'>1.451.350.800,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px;'>Komputer Akuntansi(junior)</td>
                <td class='text-center border-left-1'></td>
                <td class='text-right border-left-1'>3.854.996,00</td>
                <td class='text-right border-left-1'>92.939.998,00</td>
                <td class='text-right border-left-right'>463.000.000,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px'>Informatika Komputer (Senior)</td>
                <td class='border-left-1'></td>
                <td class='text-right border-left-1'><span class='text-danger'>-14.342.916,00</span></td>
                <td class='text-right border-left-1'>144.040.002,00</td>
                <td class='text-right border-left-right'>67.250.000,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px'>Office Management (Senior)</td>
                <td class='border-left-1'></td>
                <td class='text-right border-left-1'><span class='text-danger'>-40.414.163,00</span></td>
                <td class='text-right border-left-1'>152.895.002,00</td>
                <td class='text-right border-left-right'>285.400.800,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px'></td>
                <td class='border-left-1' style='height:20px'></td>
                <td class='text-right border-left-1'></td>
                <td class='text-right border-left-1'></td>
                <td class='text-right border-left-right'></td>
            </tr>

            <tr style='background-color:rgba(0,157,165,0.2)'>
                <td class='border-left-2' style='padding-left:15px;'>Pendapatan Reguler</td>
                <td class='text-center border-left-1'>2</td>
                <td class='text-right border-left-1'>12.390.000,00</td>
                <td class='text-right border-left-1'>17.650.000,00</td>
                <td class='text-right border-left-right'>0,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px'>Pend. Reg. Komputer </td>
                <td class='border-left-1'></td>
                <td class='text-right border-left-1'>12.390.000,00</td>
                <td class='text-right border-left-1'>16.600.000,00</td>
                <td class='text-right border-left-right' >0,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px'>Pend. Reg. Akuntansi</td>
                <td class='border-left-1'></td>
                <td class='text-right border-left-1'>1.050.000,00</td>
                <td class='text-right border-left-1'>1.050.000,00 </td>
                <td class='text-right border-left-right'>0,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px'>Pend Reg. Bahasa Inggris</td>
                <td class='border-left-1'></td>
                <td class='text-right border-left-1'><span class='text-danger'>-1.050.000,00</span></td>
                <td class='text-right border-left-1'>0,00</td>
                <td class='text-right border-left-right'>0,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px'></td>
                <td class='border-left-1' style='height:20px'></td>
                <td class='text-right border-left-1'></td>
                <td class='text-right border-left-1'></td>
                <td class='text-right border-left-right'></td>
            </tr>
            <tr style='border:2px solid'>
                <td><b>Total Pendapatan</b></td>
                <td></td>
                <td class='text-right'><b>356.308.886,00</b></td>
                <td class='text-right'><b>1.325.431.804,00</b></td>
                <td class='text-right'><b>1.700.950.800,00</b></td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px'></td>
                <td class='border-left-1' style='height:20px'></td>
                <td class='text-right border-left-1'></td>
                <td class='text-right border-left-1'></td>
                <td class='text-right border-left-right'></td>
            </tr>
            <tr style='background-color:rgba(0,157,165,0.3);'>
                <td class='text-center border-left-2'><b>BIAYA</b></td>
                <td class='border-left-1'></td>
                <td class='border-left-1'></td>
                <td class='border-left-1'></td>
                <td class='border-left-right'></td>
            </tr>
            <tr style='background-color:#004269;'>
                <td class='border-left-2' style='height:35px;color:#fff padding-left:8px'><b>BIAYA OPERASIONAL</b></td>
                <td class='border-left-1'style='height:35px;color:#fff;'></td>
                <td class='border-left-1'style='height:35px;color:#fff;'></td>
                <td class='border-left-1'style='height:35px;color:#fff;'></td>
                <td class='border-left-right'style='height:35px;color:#fff;'></td>
            </tr>
            <tr style='background-color:rgba(0,157,165,0.2)'>
                <td class='border-left-2' style='padding-left:15px;'>Biaya Pendidikan</td>
                <td class='text-center border-left-1'>5</td>
                <td class='text-right border-left-1' >1.213.727,00</td>
                <td class='text-right border-left-1' >78.267.512,00</td>
                <td class='text-right border-left-right' >113.806.200,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px'>By. Buku Profesi</td>
                <td class='border-left-1'></td>
                <td class='text-right border-left-1'><span class='text-danger'>-10.565.000,00</span></td>
                <td class='text-right border-left-1'>0,00</td>
                <td class='text-right border-left-right' >0,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px'>By. Foto copy / modul</td>
                  <td class='border-left-1'></td>
                <td class='text-right border-left-1'>179.550,00</td>
                <td class='text-right border-left-1'>2.809.700,00</td>
                <td class='text-right border-left-right'>3.317.000,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px'>By. Periengkapan pendidikan</td>
                <td class='text-right border-left-1'></td>
                <td class='text-right border-left-1'>1.145.500,00</td>
                <td class='text-right border-left-1'>2.719.000,00</td>
                <td class='text-right border-left-right'>4.445.000,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px'>By. Periengkapan siswa</td>
                  <td class='border-left-1'></td>
                <td class='text-right border-left-1'><span class='text-danger'>-8.788.600,00</span></td>
                <td class='text-right border-left-1'>4.093.900,00 </td>
                <td class='text-right border-left-right' >35.560.000,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px'></td>
                <td class='text-right border-left-1' style='height:20px'></td>
                <td class='text-right border-left-1'></td>
                <td class='text-right border-left-1'></td>
                <td class='text-right border-left-right' ></td>
            </tr>
            <tr style='background-color:rgba(0,157,165,0.2)'>
                <td style='padding-left:15px;border:none;border-left:2px solid'> Beban Executive I </td>
                <td class='text-center border-left-1'>6</td>
                <td class='text-right border-left-1'><span class='text-danger'>-1.750.000,00</span></td>
                <td class='text-right border-left-1'>0,00</td>
                <td class='text-right border-left-right' >0,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px'>By. Honor Dosen</td>
                  <td class='border-left-1'></td>
                <td class='text-right border-left-1'><span class='text-danger'>-1.050.000,00</span></td>
                <td class='text-right border-left-1'>0,00</td>
                <td class='text-right border-left-right' >0,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px'> By. Perjalanan Dosen</td>
                  <td class='border-left-1'></td>
                <td class='text-right border-left-1'><span class='text-danger'>-700.000,00</span></td>
                <td class='text-right border-left-1'>0,00</td>
                <td class='text-right border-left-right' >0,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px'></td>
                <td class='text-right border-left-1' style='height:20px'></td>
                <td class='text-right border-left-1'></td>
                <td class='text-right border-left-1'></td>
                <td class='text-right border-left-right' ></td>
            </tr>
            <tr style='background-color:#004269;'>
                <td class='border-left-2' style='height:35px;color:#fff padding-left:8px'><b>BEBAN PERSONEL LANGSUNG</b></td>
                <td class='border-left-1'style='height:35px;color:#fff;'></td>
                <td class='border-left-1'style='height:35px;color:#fff;'></td>
                <td class='border-left-1'style='height:35px;color:#fff;'></td>
                <td class='border-left-right'style='height:35px;color:#fff;'></td>
            </tr>
            <tr style='background-color:rgba(0,157,165,0.2)'>
                <td style='padding-left:15px;border:none;border-left:2px solid'>Beban Honor Personel Langsung</td>
                <td class='text-center border-left-1'>10</td>
                <td class='text-right border-left-1'>19.100.600,00</td>
                <td class='text-right border-left-1'>101.281.625,00</td>
                <td class='text-right border-left-right' >92.359.750,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px'>By. Honor Dosen Tetap</td>
                  <td class='border-left-1'></td>
                <td class='text-right border-left-1'><span class='text-danger'>-640.000,00 </span></td>
                <td class='text-right border-left-1'>735.000,00</td>
                <td class='text-right border-left-right' >0,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px'> By. Honor Soal Ujian</td>
                  <td class='border-left-1'></td>
                <td class='text-right border-left-1'>1.580.000,00</td>
                <td class='text-right border-left-1'>6.570.000,00</td>
                <td class='text-right border-left-right' >0,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px'></td>
                <td class='text-right border-left-1' style='height:20px'></td>
                <td class='text-right border-left-1'></td>
                <td class='text-right border-left-1'></td>
                <td class='text-right border-left-right' ></td>
            </tr>
            <tr style='background-color:rgba(0,157,165,0.2)'>
                <td style='padding-left:15px;border:none;border-left:2px solid'> Beban Gaji </td>
                <td class='text-center border-left-1'>11</td>
                <td class='text-right border-left-1'>5.151.251,00</td>
                <td class='text-right border-left-1'>98.555.251,00 </td>
                <td class='text-right border-left-right' >0,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px'>By. Gaji / Dosen Full time</td>
                <td class='border-left-1'></td>
                <td class='text-right border-left-1'>5.151.251,00</td>
                <td class='text-right border-left-1'>98.555.251,00</td>
                <td class='text-right border-left-right' >0,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px'></td>
                <td class='text-right border-left-1' style='height:20px'></td>
                <td class='text-right border-left-1'></td>
                <td class='text-right border-left-1'></td>
                <td class='text-right border-left-right' ></td>
            </tr>
            <tr style='background-color:#004269;'>
                <td class='border-left-2' style='height:35px;color:#fff padding-left:8px'><b>BEBAN MARKETING</b></td>
                <td class='border-left-1'style='height:35px;color:#fff;'></td>
                <td class='border-left-1'style='height:35px;color:#fff;'></td>
                <td class='border-left-1'style='height:35px;color:#fff;'></td>
                <td class='border-left-right'style='height:35px;color:#fff;'></td>
            </tr>
            <tr style='background-color:rgba(0,157,165,0.2)'>
                <td style='padding-left:15px;border:none;border-left:2px solid'> Beban Marketing Profesi </td>
                <td class='text-center border-left-1'>12</td>
                <td class='text-right border-left-1'>30.813.005,00</td>
                <td class='text-right border-left-1'>116.834.688,00</td>
                <td class='text-right border-left-right' >0,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px'>By. Iklan Media Cetak </td>
                <td class='border-left-1'></td>
                <td class='text-right border-left-1'>600.000,00 </td>
                <td class='text-right border-left-1'>600.000,00</td>
                <td class='text-right border-left-right' >0,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px'>By. Pameran / Expo</td>
                <td class='border-left-1'></td>
                <td class='text-right border-left-1'><span class='text-danger'>-80.000,00</span></td>
                <td class='text-right border-left-1'>0,00</td>
                <td class='text-right border-left-right' >0,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px'>By. Sosial Media</td>
                <td class='border-left-1'></td>
                <td class='text-right border-left-1'>1.182.911,00 </td>
                <td class='text-right border-left-1'>5.492.096,00 </td>
                <td class='text-right border-left-right' >0,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px'>By. Gaji Presenter Kontrak</td>
                <td class='border-left-1'></td>
                <td class='text-right border-left-1'>1.118.100,00</td>
                <td class='text-right border-left-1'>39.402.000,00</td>
                <td class='text-right border-left-right' >0,00</td>
            </tr>
            <tr>
                <td class='border-left-2' style='padding-left:30px'></td>
                <td class='text-right border-left-1' style='height:20px'></td>
                <td class='text-right border-left-1'></td>
                <td class='text-right border-left-1'></td>
                <td class='text-right border-left-right' ></td>
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
            <h3>LAPORAN LABA/RUGI</h3>
            <h3>Untuk periode Desember dan periode sampai dengan Desember 2021</h3>
        </div>

        <table  border='1' style='width:100%;border-collapse: collapse;border:2px solid'>
            <thead>
                <tr>
                    <th style='font-size:11px;height:35px;width:270px'>Account Name</th>
                    <th style='font-size:11px;width:50px'>Catatan</th>
                    <th style='font-size:11px;'>Desember</th>
                    <th  style='font-size:11px;'>s/d Desember</th>
                    <th style='font-size:11px'>Anggaran Desember</th>
                </tr>
            </thead>
            <tbody>
                <tr style='background-color:rgba(0,157,165,0.2)'>
                    <td style='padding-left:15px;border:none;border-left:2px solid'>By Marketing IHT</td>
                    <td class='text-center border-left-1'>13</td>
                    <td class='text-right border-left-1'>33.990.522,00</td>
                    <td class='text-right border-left-1'>33.990.522,00</td>
                    <td class='text-right border-left-right' >0,00</td>
                </tr>
                <tr>
                    <td class='border-left-2' style='padding-left:30px'>By. Lain-lain IHT</td>
                    <td class='border-left-1'></td>
                    <td class='text-right border-left-1'>4.333.000,00</td>
                    <td class='text-right border-left-1'>4.333.000,00</td>
                    <td class='text-right border-left-right' >0,00</td>
                </tr>
                <tr>
                    <td class='border-left-2' style='padding-left:30px'>By. Insentif Peserta</td>
                    <td class='border-left-1'></td>
                    <td class='text-right border-left-1'>7.033.000,00</td>
                    <td class='text-right border-left-1'>7.033.000,00</td>
                    <td class='text-right border-left-right'>0,00</td>
                </tr>
                <tr>
                    <td class='border-left-2' style='padding-left:30px'>ZIS IHT </td>
                    <td class='border-left-1'></td>
                    <td class='text-right border-left-1'>1.348.622,00</td>
                    <td class='text-right border-left-1'>1.348.622,00</td>
                    <td class='text-right border-left-right' >0,00</td>
                </tr>
                <tr>
                    <td class='border-left-2' style='padding-left:30px'></td>
                    <td class='text-right border-left-1' style='height:20px'></td>
                    <td class='text-right border-left-1'></td>
                    <td class='text-right border-left-1'></td>
                    <td class='text-right border-left-right' ></td>
                </tr>
                <tr style='background-color:#004269;'>
                <td class='border-left-2' style='height:35px;color:#fff; padding-left:8px'><b>BEBAN ADMINISTRASI DAN UMUM</b></td>
                <td class='border-left-1' style='height:35px;color:#fff'></td>
                <td class='border-left-1' style='height:35px;color:#fff'></td>
                <td class='border-left-1' style='height:35px;color:#fff'></td>
                <td class='border-left-right' style='height:35px;color:#fff;'></td>
            </tr>
                <tr style='background-color:rgba(0,157,165,0.2)'>
                    <td style='padding-left:15px;border:none;border-left:2px solid'>Beban Administrasi </td>
                    <td class='text-center border-left-1'>14 </td>
                    <td class='text-right border-left-1'><span class='text-danger'>-3.295.274,00</span></td>
                    <td class='text-right border-left-1'>10.192.120,00</td>
                    <td class='text-right border-left-right' >9.368.210,00</td>
                </tr>
                <tr>
                    <td class='border-left-2' style='padding-left:30px'>By. Perlengkapan Kantor</td>
                    <td class='border-left-1'></td><span class='text-danger'>-1.602.500,00 </span></td>
                    <td class='text-right border-left-1'>2.306.000,00</td>
                    <td class='text-right border-left-right' >0,00</td>
                </tr>
                <tr>
                    <td class='border-left-2' style='padding-left:30px'>Lain-lain By. Administrasi </td>
                    <td class='border-left-1'></td>
                    <td class='text-right border-left-1'><span class='text-danger'>-3.052.494,00</span></td>
                    <td class='text-right border-left-1'>42.000,00</td>
                    <td class='text-right border-left-right'>0,00</td>
                </tr>
                <tr>
                    <td class='border-left-2' style='padding-left:30px'></td>
                    <td class='text-right border-left-1' style='height:20px'></td>
                    <td class='text-right border-left-1'></td>
                    <td class='text-right border-left-1'></td>
                    <td class='text-right border-left-right' ></td>
                </tr>
                <tr style='background-color:rgba(0,157,165,0.2)'>
                    <td style='padding-left:15px;border:none;border-left:2px solid'> Beban Personel </td>
                    <td class='text-center border-left-1'>15</td>
                    <td class='text-right border-left-1'>68.769.276,00</td>
                    <td class='text-right border-left-1'>520.278.870,00 </td>
                    <td class='text-right border-left-right' >667.089.018,00</td>
                </tr>
                <tr>
                    <td class='border-left-2' style='padding-left:30px'>By. Gaji / THR</td>
                    <td class='border-left-1'></td>
                    <td class='text-right border-left-1'>23.502.800,00 </td>
                    <td class='text-right border-left-1'>431.037.800,00</td>
                    <td class='text-right border-left-right'>553.601.000,00</td>
                </tr>
                <tr>
                    <td class='border-left-2' style='padding-left:30px'>By. Jamsostek</td>
                    <td class='border-left-1'></td>
                    <td class='text-right border-left-1'>11.922.871,00 </td>
                    <td class='text-right border-left-1'>21.600.711,00</td>
                    <td class='text-right border-left-right'>38.500.000,00</td>
                </tr>
                <tr>
                    <td class='border-left-2' style='padding-left:30px'>Lain-lain By. Personel </td>
                    <td class='border-left-1'></td>
                    <td class='text-right border-left-1'><span class='text-danger'>-53.740,00</span></td>
                    <td class='text-right border-left-1'>186.260,00 </td>
                    <td class='text-right border-left-right'>5.500.000,00</td>
                </tr>
                <tr>
                    <td class='border-left-2' style='padding-left:30px'></td>
                    <td class='text-right border-left-1' style='height:20px'></td>
                    <td class='text-right border-left-1'></td>
                    <td class='text-right border-left-1'></td>
                    <td class='text-right border-left-right' ></td>
                </tr>
                <tr style='border:2px solid'>
                    <td><b>Total Biaya </b></td>
                    <td></td>
                    <td class='text-right'><b>436.219.647,00</b></td>
                    <td class='text-right'><b>1.519.051.900,00</b></td>
                    <td class='text-right'><b>1.182.996.851,00</b></td>
                </tr>
                <tr>
                    <td class='border-left-2' style='padding-left:30px'></td>
                    <td class='text-right border-left-1' style='height:20px'></td>
                    <td class='text-right border-left-1'></td>
                    <td class='text-right border-left-1'></td>
                    <td class='text-right border-left-right' ></td>
                </tr>
                    <tr style='background-color:rgba(0,157,165,0.3);'>
                    <td class='text-center border-left-2'><b>PENDAPATAN (BEBAN) LAIN-LAIN</b></td>
                    <td class='border-left-1'></td>
                    <td class='border-left-1'></td>
                    <td class='border-left-1'></td>
                    <td class='border-left-right'></td>
                </tr>
                <tr style='background-color:#004269;'>
                    <td class='border-left-2' style='height:35px;color:#fff; padding-left:8px'><b>PENDAPATAN NON USAHA</b></td>
                    <td class='border-left-1' style='height:35px;color:#fff'></td>
                    <td class='border-left-1' style='height:35px;color:#fff'></td>
                    <td class='border-left-1' style='height:35px;color:#fff'></td>
                    <td class='border-left-right' style='height:35px;color:#fff;'></td>
                </tr>
                <tr>
                    <td class='border-left-2' style='padding-left:30px'>Jasa Giro</td>
                    <td class='text-center border-left-1'>19</td>
                    <td class='text-right border-left-1'>30.486,00</td>
                    <td class='text-right border-left-1'>82.525,00</td>
                    <td class='text-right border-left-right'>0,00</td>
                </tr>
                <tr>
                    <td class='border-left-2' style='padding-left:30px'> Sewa Ruangan</td>
                    <td class='text-center border-left-1'>20</td>
                    <td class='text-right border-left-1'><span class='text-danger'>-350.000,00</span></td>
                    <td class='text-right border-left-1'>150.000,00</td>
                    <td class='text-right border-left-right'>0,00</td>
                </tr>
                <tr>
                    <td class='border-left-2' style='padding-left:30px'>Lain-lain</td>
                    <td class='text-center border-left-1'>21</td>
                    <td class='text-right border-left-1'>107.586.750,00</td>
                    <td class='text-right border-left-1'>130.498.500,00</td>
                    <td class='text-right border-left-right'>0,00</td>
                </tr>
                <tr style='background-color:#004269;'>
                    <td class='border-left-2' style='height:35px;color:#fff; padding-left:8px'><b>BEBAN NON USAHA</b></td>
                    <td class='border-left-1' style='height:35px;color:#fff'></td>
                    <td class='border-left-1' style='height:35px;color:#fff'></td>
                    <td class='border-left-1' style='height:35px;color:#fff'></td>
                    <td class='border-left-right' style='height:35px;color:#fff;'></td>
                </tr>
                <tr>
                    <td class='border-left-2' style='padding-left:30px'>By. Administrasi Bank</td>
                    <td class='text-center border-left-1'>22</td>
                    <td class='text-right border-left-1'><span class='text-danger'>-2.272.531,00</span></td>
                    <td class='text-right border-left-1'>8.474.165,00</td>
                    <td class='text-right border-left-right'>11.000.000,00</td>
                </tr>
                <tr>
                    <td class='border-left-2' style='padding-left:30px'> By. Bunga Bank</td>
                    <td class='text-center border-left-1'>23</td>
                    <td class='text-right border-left-1'>39.118.328,00</td>
                    <td class='text-right border-left-1'>87.833.090,00</td>
                    <td class='text-right border-left-right'>77.000.000,00</td>
                </tr>
                <tr style='border:2px solid'>
                    <td><b>Total Pendapatan (Biaya) Lain-Lain</b></td>
                    <td></td>
                    <td class='text-right'><b>70.421.439,00</b></td>
                    <td class='text-right'><b>34.423.770,00 </b></td>
                    <td class='text-right text-danger'><b>-88.000.000,00</b></td>
                </tr>
                <tr>
                    <td class='border-left-2' style='padding-left:30px'></td>
                    <td class='text-right border-left-1' style='height:20px'></td>
                    <td class='text-right border-left-1'></td>
                    <td class='text-right border-left-1'></td>
                    <td class='text-right border-left-right' ></td>
                </tr>
                <tr style='border:2px solid'>
                <td class='text-center'><b>TOTAL LABA / (RUGI) BERSIH</b></td>
                <td></td>
                <td class='text-right text-danger'><b>-9.489.322,00</b></td>
                <td class='text-right text-danger'><b>-159.196.326,00</b></td>
                <td class='text-right'><b>429.953.949,00</b></td>
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
