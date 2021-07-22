<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Keuangan Cabang</a>
        <a href="billing-data.php">Billing Data</a>
    </div>
</div>
<div class="content">
    <div class="container">

        <div class="py-1">
            <div class="card">
                <div class="d-flex flex-start">
                 <a href="billing-data.php" class="btn btn-link btn-danger text-center" style="width: 65px;">Back</a>
             </div>
         </div>
     </div>

     <div class="py-1">
        <div class="card">
            <div class="card-header d-flex flex-space-between">
                <h6>Create Billing Log</h6>
            </div>

            <div class="py-1">
                <div class="table-responsive">
                    <table id="datatable">
                        <thead class="bg-color-primary">
                            <tr>
                                <th class="align-left">MHS_ID</th>
                                <th class="align-left">Billing_ID</th>
                                <th class="align-left">VA Number</th>
                                <th class="align-left">Customer Name</th>
                                <th class="align-left">Customer Email</th>
                                <th class="align-left">Customer Phone</th>
                                <th class="align-center">Trx_Ammount</th>
                                <th class="align-left">Description</th>
                                <th class="align-left">Billing Type</th>
                                <th class="align-left">Status</th>
                                <th class="align-left">Status Code</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-left">18099989</td>
                                <td class="align-left">INV21070001</td>
                                <td class="align-left">9882034129345650</td>
                                <td class="align-left">Rohmana</td>
                                <td class="align-left">rohmana@gmail.com</td>
                                <td class="align-left">08199888999</td>
                                <td class="align-center">6.350.000</td>
                                <td class="align-left">Pembayaran Angsuran</td>                       
                                <td class="align-left">Create Billing</td>                       
                                <td class="align-left text-success">Sucess</td>                       
                                <td class="align-left text-success">000</td>                       
                            </tr>
                             <tr>
                                <td class="align-left">18092222</td>
                                <td class="align-left">INV21060321</td>
                                <td class="align-left">9882034129342222</td>
                                <td class="align-left">Rohimin</td>
                                <td class="align-left">rohimin@gmailcom</td>
                                <td class="align-left">081799988878</td>
                                <td class="align-center">1.200.000</td>
                                <td class="align-left">Pembayaran Angsuran</td>                       
                                <td class="align-left">Create Billing</td>                       
                                <td class="align-left text-danger">Error { incomplete pharamter }</td>                       
                                <td class="align-left text-danger">103</td>                       
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
</div>

<?php include('footer-datatable.php') ?>

<script type="text/javascript">
    $(document).ready(function(){
        alert('Page Ini Muncul Setelah Form Billing Data Tersimpan Akan Meredirect Ke Billing Log')
    });
</script>