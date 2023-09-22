<?php include 'header.php';?>
<style>
    .col-sm-12 {
        overflow: auto;
    }

    .text-bold {
        font-weight: 600;
    }

    .table .form-check .form-check-input {
        border: 1px solid!important;
    }
</style>

<!--datatable css-->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
<!--datatable responsive css-->
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Generate Payout</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="live-preview">
                    <div class="col-lg-3 col-3">
                        <div class="" style="margin-top:30px;">
                            <a href="<?=BASEURL?>admin/pay_gen" type="submit" class="btn btn-primary bg-gradient waves-effect waves-light">Generate Weekly</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-3">
                        <div class="" style="margin-top:30px;">
                            <a href="<?=BASEURL?>admin/pay_gen_mon" type="submit" class="btn btn-primary bg-gradient waves-effect waves-light">Generate monthly</a>
                        </div>
                    </div>
                    <div class="row mb-2 mt-4">
                        <div class="d-flex">
                            <button type="button" onClick="fnExcelReport()" class="btn btn-success excel-btn waves-effect waves-light px-4 me-3" id="btnExport"><i class="fa-solid fa-file-excel me-1"></i>Excel<i class="fa-solid fa-download ms-2"></i></button>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">History</h5>
                                </div>
                                <div class="card-body">
                                    <form action="<?= BASEURL ?>admin/selectedfuction/<?=bin2hex($type)?>/<?=bin2hex($date)?>" method="post" id="payoutForm">
                                        <table id="example" class="table nowrap align-middle" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        Select all<br>
                                                        <input type="checkbox" id="select-all-checkbox">
                                                    </th>
                                                    <th>#</th>
                                                    <th>Date</th>
                                                    <th>User Details</th>
                                                    <th>Bank Details</th>
                                                    <th>Payout Details</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input fs-15" type="checkbox" name="selected_ids[]" value="<?=$user['id'];?>">
                                                        </div>
                                                    </td>
                                                    <td><?=$count++;?></td>
                                                    <td><?=date('d-m-Y H:i:A',strtotime($user['entry_date']))?></td>
                                                    <td>
                                                        <div>
                                                            <p class="text-bold">User ID:<?=$user['user_id'];?></p>
                                                            <p class="text-bold"> User Name:<?=$role['name'];?></p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <p class="text-bold"> Account No:<?=$detail['acc_no'];?></p>
                                                            <p class="text-bold">IFSC Code:<?=$detail['acc_ifsc'];?></p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <p class="text-bold">Amount:<?=$user['amount'];?></p>
                                                            <p class="text-bold"> TDS:<?=$user['tds'];?></p>
                                                            <p class="text-bold"> Admin Charge:<?=$user['admin_charge'];?></p>
                                                            <p class="text-bold">Payable Amount:<?=$user['payable_amount'];?></p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <?php if($user['status'] == "Request"): ?>
                                                            Unpaid
                                                        <?php else: ?>
                                                            <?=$user['status'];?>
                                                        <?php endif; ?>
                                                    </td>
                                                </tr>
                                             
                                            </tbody>
                                        </table>
                                        <div class="d-flex justify-content-center">
                                            <div class="col-lg-2 col-2">
                                                <div style="margin-top: 30px;">
                                                    <button type="submit" class="btn btn-primary bg-gradient waves-effect waves-light">Pay to All</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end col-->
</div>

<script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>
<script>
function fnExcelReport() {
    var table = document.getElementById('example'); // id of table

    // Create a new workbook
    var workbook = XLSX.utils.book_new();
    
    // Add a worksheet to the workbook
    var worksheet = XLSX.utils.table_to_sheet(table);

    // Set column widths based on content
    worksheet['!cols'] = [
        { wch: 10 }, // Select Checkbox
        { wch: 5 },  // #
        { wch: 50 }, // Date
        { wch: 50 }, // User Details
        { wch: 50 }, // Bank Details
        { wch: 50 }, // Payout Details
        { wch: 50 }  // Status
    ];
    
    // Add the worksheet to the workbook
    XLSX.utils.book_append_sheet(workbook, worksheet, 'Sheet1');
    
    // Convert the workbook to a binary XLSX file
    var excelBuffer = XLSX.write(workbook, { bookType: 'xlsx', type: 'array' });
    
    // Create a Blob object from the binary data
    var blob = new Blob([excelBuffer], { type: 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' });
    
    // Create a temporary link element to trigger the download
    var link = document.createElement('a');
    link.href = URL.createObjectURL(blob);
    link.download = 'download.xlsx';
    
    // Append the link to the document and trigger the download
    document.body.appendChild(link);
    link.click();
    
    // Clean up
    document.body.removeChild(link);
    URL.revokeObjectURL(link.href);
}
</script>


<?php include 'footer.php';?>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>


<script>
// Function to handle the select all checkbox
document.getElementById('select-all-checkbox').addEventListener('change', function() {
    var checkboxes = document.querySelectorAll('input[name="selected_ids[]"]');
    for (var i = 0; i < checkboxes.length; i++) {
        checkboxes[i].checked = this.checked;
    }
});
</script>

<script>
$(document).ready(function () {
    $('#example').DataTable();
});
</script>
