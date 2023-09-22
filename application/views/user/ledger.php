<?php include 'header.php';?>


  <!-- Sweet Alert css-->
    <link href="<?=BASEURL?>assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    
       <!-- plugin css -->
    <link href="<?=BASEURL?>assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

    <link href="<?=BASEURL?>assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" />
    
    <style>
        .view-btn{
    padding-right:27px !important;
}
.col-sm-12 {
    overflow: auto;
}
.input-group-text{
    background-color: #FE8E4C;
}
.addfund-btn{
    background-color: #f25a00 !important;
    border-color: var(--vz-gray-400);
}
.bal-badge{
    padding: 10px;
    font-size: 13px;
}
.bal-badge{
    border:1px solid !important;
}
.form-control,.form-select{
    border: 1px solid #00b074 !important;
}
.ledge-container{
    font-family: 'Barlow', sans-serif !important;
}
@media screen and (max-width:500px){
    .row>* {
        padding-right: 5px !important;
        padding-left: 5px !important;
    }
}
.ledger-card{
    background-color: #D8F1E9!important;
}

tbody, td, tfoot, th, thead, tr {
    border-color: #00b074 !important;
}

td{
    color:#353b48 !important;
    font-size:14px !important;
    font-weight:600 !important;
}
th{
    font-size:16px !important;
}
table.dataTable td.dataTables_empty, table.dataTable th.dataTables_empty {
    
    --vz-table-accent-bg: #d8f1e9 !important;
}
.card{
    border: 2px solid #00b074;
    border-radius:0px !important;
}
    </style>


<!--datatable css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
    
     <!-- Sweet Alert css-->
    <link href="<?=BASEURL?>assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />




<div class="container-fluid ledge-container">
                    
                     <div class="row mt-1">
                        <div class="col-lg-12">
                            <div class="card ledger-card">
                                <div class="card-header ledger-card">
                                    <h5 class="card-title mb-0">Ledger History</h5>
                                </div>
                                <div class="card-body">
                                    <table id="scroll-horizontal" class="table nowrap align-middle" style="width:100%">
                                        <thead>
                                            <tr>
                                                
                                                <th>#</th>
                                                <th>Date</th>
                                                <th>Particular</th>
                                                <th>Credit</th>
                                                <th>Debit</th>
                                                <th>Balance</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $accounts = $this->db->where('user_id',$this->session->userdata('usquareusername'))->get('e_wallet')->result_array();
                                        $count = 1;
                                        $credit_total = 0;
                                        foreach($accounts as $key => $acc){
                                            //$balance = $this->db->select('sum(credit) - sum(debit) as balance')->where('user_id',$this->session->userdata('usquareusername'))->where('wallet_id <',$acc['wallet_id'])->get('e_wallet')->row()->balance+0;
                                           $credit_total += $acc['credit'];
                                           $debit_total += $acc['debit'];
                                           $bal = $credit_total - $debit_total;
                                           
                                           $description = "red";

                                            switch ($acc['description']) {
                                              case "Deposit":
                                                 $particular = 'Wallet Deposit to ';
                                                
                                                if ($acc['remark'] == 'Bank Transfer') {
                                                    $particular .= 'Bank';
                                                } 
                                                elseif ($acc['remark'] == 'USDT TRC20 Wallet') {
                                                    $particular .= 'Crypto';
                                                }
                                                 elseif ($acc['remark'] == 'UPI') {
                                                    $particular .= 'UPI';
                                                }else{
                                                    $acc['remark'];
                                                }
                                                break;
                                              case "Account Deposit":
                                                $particular = 'Meta Deposit '.$acc['remark'];
                                                break;
                                              case "Deposit to account":
                                                $particular = 'Meta Deposit '.$acc['remark'];
                                                break;
                                              case "MT5 Withdraw":
                                                $particular = 'Meta Withdraw '.$acc['remark'];
                                                break;
                                              case "Withdraw":
                                                $particular .= 'Wallet Withdraw from ';
                                                
                                                if ($acc['remark'] == 'Bank Transfer') {
                                                    $particular .= 'Bank';
                                                } 
                                                elseif ($acc['remark'] == 'USDT TRC20 Wallet') {
                                                    $particular .= 'Crypto';
                                                }
                                                 elseif ($acc['remark'] == 'UPI') {
                                                    $particular .= 'UPI';
                                                }else{
                                                    $acc['remark'];
                                                }
                                                break;
                                              default:
                                                $particular = $acc['description'];
                                            }
                                        ?>
                                            <tr>
                                               
                                                <td><?=$count++;?></td>
                                                <td><?=$acc['entry_date']?></td>
                                                <td><?=$particular;?></td>
                                                <td><?=$acc['credit'];?></td>
                                                <td><?=$acc['debit'];?></td>
                                                <td><?=$bal;?></td>
                                            </tr>
                                        <?php } ?>  
                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


</div>



<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>      -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha512-bnIvzh6FU75ZKxp0GXLH9bewza/OIw6dLVh9ICg0gogclmYGguQJWl8U30WpbsGTqbIiAwxTsbe76DErLq5EDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    

    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

    <script src="<?=BASEURL?>assets/js/pages/datatables.init.js"></script>

<script>
// $(document).on('click', '.edit_info', function() {
//     //alert("hiii");
//     var dt_id = $(this).attr("data-id");
//     $("#hids").val(dt_id);

// });
</script>

  <!-- cleave.js -->
    <script src="<?=BASEURL?>assets/libs/cleave.js/cleave.min.js"></script>

    <script src="<?=BASEURL?>assets/js/pages/crm-deals.init.js"></script>

  
     <!-- Sweet Alerts js -->
    <!--<script src="<?=BASEURL?>assets/libs/sweetalert2/sweetalert2.min.js"></script>-->

    <!-- Sweet alert init js-->
    <!--<script src="<?=BASEURL?>assets/js/pages/sweetalerts.init.js"></script>-->
    
     <!-- password-addon init -->
    <script src="<?=BASEURL?>assets/js/pages/passowrd-create.init.js"></script>

<script>
//     $(document).ready(function() {
//         //alert("hiii");
//     $('#regist').submit(function(e) {
//         //alert("Hiiii");
//         e.preventDefault();
//         $("#account-create-success").prop("disabled", true);
//         $("#account-create-success").html('Wait...');
//         var formData = new FormData($(this)[0]);

//         $.ajax({
//             url: '<?php echo base_url('admin/account_register'); ?>',
//             type: 'POST',
//             data: formData,
//             processData: false,
//             contentType: false,
//             success: function(response) {
//                 response = JSON.parse(response);
//                 alert(response.status);
//                 if (response.status == 'success') {
//                     $('#regist')[0].reset();
//                     location.reload();
//                 } else {
//                     $('#fnameerror').html(response.fname_error);
//                     $('#lnameerror').html(response.lname_error);
//                     $('#emailerror').html(response.useremail_error);
//                     $('#phoneerror').html(response.phone_error);
//                     $("#account-create-success").prop("disabled", false);
//                     $("#account-create-success").html('Sign Up');
//                     //alert(response.message);
//                 }
//             }
//         });
//     });
// });
</script>

<!--Custom CSS-->

 <!-- apexcharts -->
    <script src="<?=BASEURL?>assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Vector map-->
    <script src="<?=BASEURL?>assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
    <script src="<?=BASEURL?>assets/libs/jsvectormap/maps/world-merc.js"></script>
    <script src="<?=BASEURL?>assets/libs/jsvectormap/maps/us-merc-en.js"></script>

    <!-- Swiper Js -->
    <script src="<?=BASEURL?>assets/libs/swiper/swiper-bundle.min.js"></script>

    <script src="<?=BASEURL?>assets/js/pages/form-input-spin.init.js"></script>

    <script src="<?=BASEURL?>assets/libs/card/card.js"></script>

    <!-- Widget init -->
    <script src="<?=BASEURL?>assets/js/pages/widgets.init.js"></script>

    <!-- App js -->
    <script src="<?=BASEURL?>assets/js/app.js"></script>


<?php include 'footer.php';?>