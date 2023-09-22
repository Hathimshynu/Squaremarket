
<?php include 'header.php';?>
<style>
.my-div {
  display: none;
}
    .acc-details, .qr-code{
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }
    
.col-sm-12 {
    overflow: auto;
}

.custom-amount-doll{
    border:2px solid #FE8E4C !important;
}

/*Copy icon*/

.container-copy{
    width: fit-content !important;
}
.copy-text {
	position: relative;
	padding: 6px;
	background: #fff;
	border: 1px solid #ddd;
	border-radius: 10px;
	display: flex;
}
.copy-text input.text {
	/* padding: 10px; */
	font-size: 18px;
	color: #20604f !important;
	border: none;
	outline: none;
}
.copy-text button {
	padding: 10px;
	background: #5784f5;
	color: #fff;
	font-size: 18px;
	border: none;
	outline: none;
	border-radius: 10px;
	cursor: pointer;
}

.copy-text button:active {
	background: #ff0000;
}
.copy-text button:before {
	content: "Copied";
	position: absolute;
	top: -45px;
	right: 0px;
	background: #FF0000;
	color:#fff;
	padding: 8px 10px;
	border-radius: 20px;
	font-size: 15px;
	display: none;
}
.copy-text button:after {
	content: "";
	position: absolute;
	top: -20px;
	right: 25px;
	width: 10px;
	height: 10px;
	background: #FF0000;
	transform: rotate(45deg);
	display: none;
}
.copy-text.active button:before,
.copy-text.active button:after {
	display: block;
}

/* Border Animation */
.gradient-border {
    border:3px solid transparent;
    background: linear-gradient(white, white) padding-box, linear-gradient(to right, #20604f, #ff0000) border-box;
    }
    .copy-text button{
        background-image: linear-gradient(259deg, #20604f 0%, #20604f 50%, #20604f 100%);
        font-size: 11px;
        padding: 9px;
    }
    .copy-icon{
        font-size: 17px;
    } 
    
    @media screen and (min-width:768px){
        .select-currency{
            padding: 11px 10px !important;
        }
    }
    .badge-soft-danger {
    color: #ff0000 !important;
    }
    .text-bg-info {
    background-color: #20604f !important;
}
.text-warning {
    --vz-text-opacity: 0 !important;
    color: #ff0000 !important;
}
.deposit-submit-btn{
    background-color:#00b074 !important;
    border-color:#00b074;
}
.deposit-submit-btn:hover{
    background-color:#ff0000 !important;
    border-color:#ff0000 !important;
}
.form-control,.form-select{
    border: 1px solid #00b074 !important;
}

.deposit-container{
    font-family: 'Barlow', sans-serif !important;
}

.deposit-card{
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

 <!-- dropzone css -->
    <link rel="stylesheet" href="<?=BASEURL?>assets/libs/dropzone/dropzone.css" type="text/css" />

    <!-- Filepond css -->
    <link rel="stylesheet" href="<?=BASEURL?>assets/libs/filepond/filepond.min.css" type="text/css" />
    <link rel="stylesheet" href="<?=BASEURL?>assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css">

 <!-- aos css -->
 <!--   <link rel="stylesheet" href="<?=BASEURL?>assets/libs/aos/aos.css" />-->
    
    <!--Custom CSS-->
   <link href="<?=BASEURL?>assets/css/deposit.css" rel="stylesheet" type="text/css" />
   <link href="<?=BASEURL?>assets/css/responsive.css" rel="stylesheet" type="text/css" />
   
 
 <!--datatable css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
    
     <!-- Sweet Alert css-->
    <link href="<?=BASEURL?>assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<div class="container-fluid deposit-container">
    
    
    <div class="row">
         <div class="col-xxl-12 col-lg-12">
                            <!--<h5 class="mb-3">Deposit</h5>-->
                            <!--<div class="card">-->
                            <!--    <div class="card-body">-->
                                   
                                    <!--<ul class="nav nav-pills nav-justified mb-3" role="tablist">-->
                                    <!--    <li class="nav-item waves-effect waves-light">-->
                                    <!--        <a class="nav-link active" data-bs-toggle="tab" href="#pill-justified-home-1" role="tab">-->
                                    <!--            Manual Deposit-->
                                    <!--        </a>-->
                                    <!--    </li>-->
                                        <!--<li class="nav-item waves-effect waves-light">-->
                                        <!--    <a class="nav-link" data-bs-toggle="tab" href="#pill-justified-profile-1" role="tab">-->
                                        <!--        Auto Deposit-->
                                        <!--    </a>-->
                                        <!--</li>-->
                                    <!--</ul>-->
                                    <!-- Tab panes -->
                                    <div class="tab-content text-muted">
                                        <div class="tab-pane active" id="pill-justified-home-1" role="tabpanel">
                                           
                                            <!--end row-->
                                            <div class="row mt-1">
                                                <div class="col-lg-12">
                                                    <div class="card deposit-card">
                                                        <div class="card-header deposit-card">
                                                            <h5 class="card-title mb-0">Deposit History</h5>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="table-responsive">
                                                             <table id="scroll-horizontal" class="table nowrap align-middle" style="width:100%">
                                                                <thead>
                                                                    <tr>
                                                                        
                                                                        <th>#</th>
                                                                        <th>Deposit Date</th>
                                                                        <th>Paymode</th>
                                                                         <!--<th>To</th>-->
                                                                        <th>Currency</th>
                                                                        <th>Deposited Amount</th>
                                                                        <th>Credited Amount</th>
                                                                        <!--<th>Conversion Charge</th>-->
                                                                        <th>Transaction ID</th>
                                                                        <th>View</th>
                                                                        <!--<th>Action Date</th>-->
                                                                       <th>Remark</th>
                                                                        <th>Status</th>
                                                                       
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                    $history = $this->db->order_by('admin_request_id','desc')->where('user_id',$this->session->userdata('usquareusername'))->get('admin_request')->result_array();
                                                                    $count = 1;
                                                                    foreach($history as $key => $his)
                                                                    {
                                                                        if($his['status'] == 'Accepted'){
                                                                            $col = 'success';
                                                                        }else if($his['status'] == 'Rejected'){
                                                                            $col = 'danger';
                                                                        }else{
                                                                            $col = 'warning';
                                                                        }
                                                                    ?>
                                                                    <tr>
                                                                       
                                                                        <td><?=$count++;?></td>
                                                                        <td><?=$his['entry_date']?></td>
                                                                        <td><?=$his['pay_mode']?></td>
                                                                        <!--<td><?=$his['user_id']?></td>-->
                                                                        <td><?php if($his['currency'] != ""){ echo $his['currency']; }else{ echo "---"; }?></td>
                                                                        <td><?=$his['wallet_value']?></td>
                                                                        <td><?=$his['updated_amount']?></td>
                                                                        <!--<td><?=$his['conversion_charge']?></td>-->
                                                                        <td><span class="me-2"><?=$his['utr']?></span></td>
                                                                         <td><button data-bs-toggle="modal" data-bs-target=".bs-example-modal-center" data-img="<?=$his['filename']?>" type="button" class="btn btn-primary btn-icon eye-icon waves-effect waves-light">
                                                                             <i class="fa-solid fa-eye"></i></button>
                                                                        </td>
                                                                       
                                                                         <!--<td><?php if($his['approve_date'] != NULL){ echo $his['approve_date']; }else{ echo "---"; }?></td>-->
                                                                          <td><?php if($his['remark'] != ""){ echo $his['remark']; }else{ echo "---"; }?></td>
                                                                           <td><span class="badge text-bg-<?=$col?>"><?=$his['status'];?></span></td>
                                                                          
                                                                    </tr>
                                                                   <?php } ?>
                                                                   <!--Modal Starts for Eye Icon-->
                                                            <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body text-center p-4">
                                                                            <div class="mt-4">
                                                                                    <div class="card">
                                                                                         <div class="text-danger" id="image_error"></div>
                                                                                    <div class="card-body" id="append_div">
                                                                                        
                                                                                       
                                                                                        <!--<div class="d-flex align-items-center border border-dashed p-2 rounded">-->
                                                                                        <!--    <div class="flex-shrink-0 avatar-sm">-->
                                                                                        <!--        <div class="avatar-title bg-light rounded">-->
                                                                                                    <!--<i class="ri-file-zip-line fs-20 text-primary"></i>-->
                                                                                        <!--            <a href="#"><img style="width:50px;height:50px;" class="img-responsive rounded" src="<?=BASEURL?>assets/images/bitcoin.jpg"></a>-->
                                                                                        <!--        </div>-->
                                                                                        <!--    </div>-->
                                                                                        <!--    <div class="flex-grow-1 ms-3">-->
                                                                                        <!--        <h6 class="mb-1"><a href="javascript:void(0);">Velzon-admin.zip</a></h6>-->
                                                                                        <!--        <small class="text-muted">3.2 MB</small>-->
                                                                                        <!--    </div>-->
                                                                                        <!--    <div class="hstack gap-3 fs-16 align-items-center">-->
                                                                                        <!--        <a href="javascript:void(0);" class="text-muted"><i class="fa-solid fa-eye"></i></a>-->
                                                                                               
                                                                                        <!--    </div>-->
                                                                                        <!--</div>-->
                                                                                        <!--<div class="d-flex align-items-center border border-dashed p-2 rounded mt-2">-->
                                                                                        <!--    <div class="flex-shrink-0 avatar-sm">-->
                                                                                        <!--        <div class="avatar-title bg-light rounded">-->
                                                                                                    <!--<i class="ri-file-ppt-2-line fs-20 text-danger"></i>-->
                                                                                        <!--            <a href="#"><img style="width:50px;height:50px;" class="img-responsive rounded" src="<?=BASEURL?>assets/images/bitcoin.jpg"></a>-->
                                                                                        <!--        </div>-->
                                                                                        <!--    </div>-->
                                                                                        <!--    <div class="flex-grow-1 ms-3">-->
                                                                                        <!--        <h6 class="mb-1"><a href="javascript:void(0);">Velzon-admin.ppt</a></h6>-->
                                                                                        <!--        <small class="text-muted">4.5 MB</small>-->
                                                                                        <!--    </div>-->
                                                                                        <!--    <div class="hstack gap-3 fs-16 align-items-center">-->
                                                                                        <!--        <a href="javascript:void(0);" class="text-muted"><i class="fa-solid fa-eye fs-20"></i></a>-->
                                                                                                
                                                                                        <!--    </div>-->
                                                                                        <!--</div>-->
                                                                                    </div>
                                                                                </div>
                                                                                <!--<div class="text-center">-->
                                                                                <!--    <img class="img-responsive img-fluid" src="<?=BASEURL?>assets/images/bitcoin.jpg">-->
                                                                                <!--</div>-->
                                                                                <div class="hstack gap-2 justify-content-center mt-5">
                                                                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                                                    <!--<button type="button" class="btn btn-primary waves-effect waves-light" id="sa-success-eye-icon">Submit</button>-->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div><!-- /.modal-content -->
                                                                </div><!-- /.modal-dialog -->
                                                            </div><!-- /.modal -->
                                                                   
                                                                  
                                                                </tbody>
                                                            </table>
                                                                   
                                                                   <!--Modal Starts for Eye Icon-->
                                                            <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body text-center p-4">
                                                                            <div class="mt-4">
                                                                                    <div class="card">
                                                                                         <div class="text-danger" id="image_error"></div>
                                                                                    <div class="card-body" id="append_div">
                                                                                        
                                                                                       
                                                                                        <!--<div class="d-flex align-items-center border border-dashed p-2 rounded">-->
                                                                                        <!--    <div class="flex-shrink-0 avatar-sm">-->
                                                                                        <!--        <div class="avatar-title bg-light rounded">-->
                                                                                                    <!--<i class="ri-file-zip-line fs-20 text-primary"></i>-->
                                                                                        <!--            <a href="#"><img style="width:50px;height:50px;" class="img-responsive rounded" src="<?=BASEURL?>assets/images/bitcoin.jpg"></a>-->
                                                                                        <!--        </div>-->
                                                                                        <!--    </div>-->
                                                                                        <!--    <div class="flex-grow-1 ms-3">-->
                                                                                        <!--        <h6 class="mb-1"><a href="javascript:void(0);">Velzon-admin.zip</a></h6>-->
                                                                                        <!--        <small class="text-muted">3.2 MB</small>-->
                                                                                        <!--    </div>-->
                                                                                        <!--    <div class="hstack gap-3 fs-16 align-items-center">-->
                                                                                        <!--        <a href="javascript:void(0);" class="text-muted"><i class="fa-solid fa-eye"></i></a>-->
                                                                                               
                                                                                        <!--    </div>-->
                                                                                        <!--</div>-->
                                                                                        <!--<div class="d-flex align-items-center border border-dashed p-2 rounded mt-2">-->
                                                                                        <!--    <div class="flex-shrink-0 avatar-sm">-->
                                                                                        <!--        <div class="avatar-title bg-light rounded">-->
                                                                                                    <!--<i class="ri-file-ppt-2-line fs-20 text-danger"></i>-->
                                                                                        <!--            <a href="#"><img style="width:50px;height:50px;" class="img-responsive rounded" src="<?=BASEURL?>assets/images/bitcoin.jpg"></a>-->
                                                                                        <!--        </div>-->
                                                                                        <!--    </div>-->
                                                                                        <!--    <div class="flex-grow-1 ms-3">-->
                                                                                        <!--        <h6 class="mb-1"><a href="javascript:void(0);">Velzon-admin.ppt</a></h6>-->
                                                                                        <!--        <small class="text-muted">4.5 MB</small>-->
                                                                                        <!--    </div>-->
                                                                                        <!--    <div class="hstack gap-3 fs-16 align-items-center">-->
                                                                                        <!--        <a href="javascript:void(0);" class="text-muted"><i class="fa-solid fa-eye fs-20"></i></a>-->
                                                                                                
                                                                                        <!--    </div>-->
                                                                                        <!--</div>-->
                                                                                    </div>
                                                                                </div>
                                                                                <!--<div class="text-center">-->
                                                                                <!--    <img class="img-responsive img-fluid" src="<?=BASEURL?>assets/images/bitcoin.jpg">-->
                                                                                <!--</div>-->
                                                                                <div class="hstack gap-2 justify-content-center mt-5">
                                                                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                                                    <!--<button type="button" class="btn btn-primary waves-effect waves-light" id="sa-success-eye-icon">Submit</button>-->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div><!-- /.modal-content -->
                                                                </div><!-- /.modal-dialog -->
                                                            </div><!-- /.modal -->
                                                                   
                                                                  
                                                                
                                                            </table>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="pill-justified-profile-1" role="tabpanel">
                                            
                                    </div>
                                </div>
                                <!-- end card-body -->
                            <!--</div>-->
                            <!-- end card -->
                       
    <!--</div>-->
    
</div>    

</div>

</div>

<script>
//  $(document).ready(function () {
//     $('#tabrow').DataTable();
// });   
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

 <script src="<?=BASEURL?>assets/js/pages/sweetalerts.init.js"></script>
 <!-- Include jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Include SweetAlert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>




   <!--Viewing Table data-->

<script>
//     $(document).ready(function() {
    

//      function initializeDataTable() {
//         $('#tabrow').DataTable();
//         responsive: true
//     }
// });
</script>








<script type="text/javascript">
    window.addEventListener('resize', function() {
  var screenWidth = window.innerWidth;
  var divElement = document.querySelector('.wallet-address-container');
  
  if (screenWidth < 1379) {
    divElement.classList.remove('col-lg-8');
    divElement.classList.add('col-lg-12');
  } else {
    divElement.classList.remove('col-lg-12');
    divElement.classList.add('col-lg-8');
  }
});
</script>

<!-- Script for Copy to Clipboard -->
<script type="text/javascript">
    let copyText = document.querySelector(".copy-text");
copyText.querySelector("button").addEventListener("click", function () {
	let input = copyText.querySelector("input.text");
	input.select();
	document.execCommand("copy");
	copyText.classList.add("active");
	window.getSelection().removeAllRanges();
	setTimeout(function () {
		copyText.classList.remove("active");
	}, 2000);
});

</script>





<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>      -->
<?php $amount = $this->db->select('amount')->order_by('id','desc')->limit(1)->get('price_master')->row()->amount+0; ?>
     <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
 
  <script>
$(document).on('click', '.btn-icon', function() {
    //alert('hii');
    $('#append_div').empty();
     $('#image_error').html('');
    var filename = $(this).attr("data-img");
    //alert(filename);
    $.post('<?=BASEURL?>user/get_image_details', {
        'file_id': filename
    })
    .done(function(res) {
       // alert($.trim(res));
        if ($.trim(res) != 'error') {
        
        var obj = JSON.parse(res);   
        
        $.each(obj, function(index, item) {
          var filename = item.filename;
          var html = '<div class="d-flex align-items-center border border-dashed p-2 rounded mb-2">' +
            '<div class="flex-shrink-0 avatar-sm">' +
            '<div class="avatar-title bg-light rounded">' +
            '<a target="_blank" href="<?=BASEURL?>assets/receipt/'+ filename +'"><img style="width:50px;height:50px;" class="img-responsive rounded" src="<?=BASEURL?>assets/receipt/'+ filename +'"></a>' +
            '</div>' +
            '</div>' +
            '<div class="flex-grow-1 ms-3">' +
            '<h6 class="mb-1"><a href="javascript:void(0);">'+ filename +'</a></h6>' +
            '</div>' +
            '<div class="hstack gap-3 fs-16 align-items-center">' +
            '<a target="_blank" href="<?=BASEURL?>assets/receipt/'+ filename +' " class="text-muted"><i class="fa-solid fa-eye"></i></a>' +
            '</div>' +
            '</div>';

            $('#append_div').append(html);
          
        });
           
        } else {
              
             $('#image_error').html('No Receipts Found');
             
        }
    });


});
</script>  













      <!-- dropzone min -->
    <script src="<?=BASEURL?>assets/libs/dropzone/dropzone-min.js"></script>
    <!-- filepond js -->
    <script src="<?=BASEURL?>assets/libs/filepond/filepond.min.js"></script>
    <script src="<?=BASEURL?>assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js"></script>
    <script src="<?=BASEURL?>assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js"></script>
    <script src="<?=BASEURL?>assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js"></script>
    <script src="<?=BASEURL?>assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js"></script>

    <script src="<?=BASEURL?>assets/js/pages/form-file-upload.init.js"></script>


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



  <!-- aos js -->
    <script src="<?=BASEURL?>assets/libs/aos/aos.js"></script>
    <!-- prismjs plugin -->
    <script src="<?=BASEURL?>assets/libs/prismjs/prism.js"></script>
    <!-- animation init -->
    <!--<script src="<?=BASEURL?>assets/js/pages/animation-aos.init.js"></script>-->

    <script src="<?=BASEURL?>assets/libs/sweetalert2/sweetalert2.min.js"></script>

   

<?php include 'footer.php';?>


