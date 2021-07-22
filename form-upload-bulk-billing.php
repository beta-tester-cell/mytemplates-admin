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
               <div class="d-flex flex-space-between align-center flex-change">
                    <a href="billing-data.php" class="btn btn-link btn-danger text-center" style="width: 65px;">Back</a>
                    <div class="note-bulk">
                        <font size="5"><span><b>Note</span> : <span class="text-danger">Bulk Upload maksimal 50 Record</span></b></font>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Create Billing Bulk Upload</h6>
                </div>

                <form>
                    <div class="grid-2 grid-gap-3">
                        <div class="form-mr-2">
                            <div class="form-inputs">
                                <label><b><span class="text-danger">*</span> Browse File</b></label>
                                <input type="file" name="upload-kalender">
                            </div>
                            <div class="form-inputs">
                                <label><b><span class="text-danger">*</span> Type </b></label>
                                <input class="width-100" id="blling_type" type="text" disabled value="Create" placeholder="Billing Type">
                            </div>
                            <div class="form-inputs">
                                <label><b><span class="text-danger">*</span> Billing Type </b></label>
                                <input class="width-100" id="blling_type" type="text" disabled value="Fix Payment" placeholder="Billing Type">
                            </div>
                            <div class="form-inputs">
                                <label>&nbsp;</label>
                                <div class="grid-2 grid-gap-3">
                                    <button class="btn btn-link btn-primary"><span>Submit</span></button>
                                    <button type="button" class="btn btn-link btn-primary" id="btn-preview"><span>Preview</span></button>
                                </div>
                            </div>
                        </div>
                        <div class="text-generator">
                            <a href="#" title="Edit" class="text-danger" style="float: right;"><b><i class="fa fa-file-excel-o"></i><span class="text-danger"> Download Template Generator</span></b></a>
                           <!--  <font size="4" style="float: right;"><b><i class="fa fa-file-excel-o" aria-hidden="true"></i><span class="text-danger"> Download Template Generator</span></b></font> -->
                        </div>
                    </div>
                </form>


                <div class="py-1" id="table-preview">
                    <div class="table-responsive">
                        <table id="datatable">
                        <thead class="bg-color-primary">
                            <tr>
                                <th class="align-left">Billing_ID</th>
                                <th class="align-left">VA Number</th>
                                <th class="align-left">Customer Name</th>
                                <th class="align-left">Customer Email</th>
                                <th class="align-left">Customer Phone</th>
                                <th class="align-center">Trx_Ammount</th>
                                <th class="align-left">Expired Date</th>
                                <th class="align-left">Expired Time</th>
                                <th class="align-left">Description</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-left">INV21070001</td>
                                <td class="align-left">9882034129345650</td>
                                <td class="align-left">Rohmana</td>
                                <td class="align-left">rohmana@gmail.com</td>
                                <td class="align-left">08199888999</td>
                                <td class="align-center">6.350.000</td>
                                <td class="align-left">2021-07-31</td>                                            
                                <td class="align-left">23:59</td>                                            
                                <td class="align-left">Pembayaran Angsuran s/d ke 4</td>                                            
                            </tr>
                             <tr>
                                <td class="align-left">INV21060321</td>
                                <td class="align-left">9882034129342222</td>
                                <td class="align-left">Rohimin</td>
                                <td class="align-left">rohimin@gmailcom</td>
                                <td class="align-left">081799988878</td>
                                <td class="align-center">1.200.000</td>
                                <td class="align-left">2021-07-31</td>                                            
                                <td class="align-left">23:59</td> 
                                <td class="align-left">Pembayaran Angsuran ke 1</td>                                            
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
        $('#table-preview').hide();
    });

    $(document).on('click','#btn-preview',function(){
        $('#table-preview').show();
    });
</script>