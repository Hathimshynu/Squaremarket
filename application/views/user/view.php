
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
 .pack-subit-btn{
       margin-top: 28px;
      color:#fff;
   }

   @media screen and (max-width:991px){
       .pack-subit-btn{
       margin-top: 0px !important;
   }
   }
   .excel-btn{
       background-color: #0F733C !important;
   }
   .trade-container{
    font-family: 'Barlow', sans-serif !important;
}
.form-control,.form-select{
    border: 1px solid #00b074 !important;
}

.trade-card{
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
    margin-top:10px !important;
}
    </style>


<!--datatable css-->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
<!--datatable responsive css-->
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">




<div class="container-fluid trade-container">
                    
                     <div class="row mt-3">
                         <form action="<?=BASEURL?>user/view/<?=bin2hex($id);?>" method="post">
                            <div class="row mt-3 mb-4 d-flex justify-content-between align-items-center">
                                    <div class="col-lg-5 col-6">
                                        <div class="mb-3">
                                            <label for="StartleaveDate" class="form-label">From Date</label>
                                            <input type="date" class="form-control" name="from_date" id="">
                                        </div>
                                    </div>
                                     <div class="col-lg-5 col-6">
                                        <div class="mb-3">
                                            <label for="StartleaveDate" class="form-label">To Date</label>
                                            <input type="date" class="form-control" name="to_date" id="">
                                        </div>
                                    </div>
                                     <div class="col-lg-2 col-6">
                                        <div class="mb-3">
                                            <button type="submit" class="btn waves-effect waves-light pack-subit-btn submit-btn" id=""><i class="fa-regular fa-circle-check me-2"></i>Submit</button>
                                        </div>
                                    </div>
                            </div>
                            </form>
                        <div class="col-lg-12">
                            
                            <div class="d-flex">
                                <button type="button"  onClick="fnExcelReport()"  class="btn btn-success excel-btn waves-effect waves-light px-4 me-3" id="exportExcel"><i class="fa-solid fa-file-excel me-1"></i>Excel<i class="fa-solid fa-download ms-2"></i></button>
                                <button type="button" class="btn btn-danger waves-effect waves-light px-4" onclick="fnPdfReport()"  id="exportPDF"><i class="fa-solid fa-file-pdf me-1"></i>PDF<i class="fa-solid fa-download ms-2"></i></button>
                            </div> 
                                                    
                            <div class="card trade-card">
                                <div class="card-header trade-card">
                                    <h5 class="card-title mb-0">Trade History</h5>
                                </div>
                                <div class="card-body">
                                    <table id="example" class="table nowrap align-middle example" style="width:100%">
                                        <thead>
                                            <tr>
                                                
                                                <th>#</th>
                                                
                                                               <th>Login</th>
                                                               <th>Date </th>
                                                                <th>Ticket No. </th>
                                                                 <th>Symbol </th>
                                                                    <th>Volume </th>
                                                                     <th>Profit </th>
                                                                    
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $count = 1;
                                        foreach($deals as $key => $acc){; 
                                        if($acc->Entry == 1){
                                        ?>
                                            <tr>
                                               
                                                <td><?=$count++;?></td>
                                                <td><?=$acc->Login;?></td>
                                                <td><?=date('Y.m.d', $acc->Time)?></td>
                                                <td><?=$acc->PositionID;?></td>
                                                <td><?=$acc->Symbol;?></td>
                                                <td><?=$acc->Volume/10000;?></td>
                                                <td>$<?=$acc->Profit;?></td>
                                                
                                                
                                            </tr>
                                        <?php }} ?>  
                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


</div>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha512-bnIvzh6FU75ZKxp0GXLH9bewza/OIw6dLVh9ICg0gogclmYGguQJWl8U30WpbsGTqbIiAwxTsbe76DErLq5EDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    

        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.66/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.66/vfs_fonts.js"></script>
    <!--<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>-->
    <script src="<?=BASEURL?>assets/js/pages/datatables.init.js"></script>


<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>



<script>
//     new DataTable('.example', {
//     responsive: true
// });
</script>

<script>

//   $(document).ready(function() {
//   var table = $('#example').DataTable({ 
//     dom: 'Bfrtip', // Show buttons only
//     buttons: [
//       'excel', // Excel button
//       'pdf' // PDF button
//     ]
//   });

//   // Export as Excel
//   $('#exportExcel').on('click', function() {
//     table.button('.buttons-excel').trigger();
//   });

//   // Export as PDF
//   $('#exportPDF').on('click', function() {
//     table.button('.buttons-pdf').trigger();
//   });
// });


  </script>
  
  
  
  
  <script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>
  
  
<script>
 $(document).ready(function () {
     var table = $('#example').DataTable({ 
    dom: 'Bfrtip', // Show buttons only
    "oLanguage": {
      "EmptyTable": "Please select the date range"
    }
  });
     
            $('#example').DataTable({
                responsive: true
            });
        });

        function fnExcelReport() {
            var table = document.getElementById('example'); // id of table

            // Create a new workbook
            var workbook = XLSX.utils.book_new();

            // Add a worksheet to the workbook
            var worksheet = XLSX.utils.table_to_sheet(table);

            // Set column widths based on content
            var columnCount = table.rows[0].cells.length;
            var colWidths = Array(columnCount).fill({ wch: 50 }); // Set a default width for all columns

            // Update column widths if needed
            colWidths[0] = { wch: 10 }; // Select Checkbox
            colWidths[1] = { wch: 5 };  // #
            // Add more columns if required

            // Apply the updated column widths
            worksheet['!cols'] = colWidths;

            // Add the worksheet to the workbook
            XLSX.utils.book_append_sheet(workbook, worksheet, 'Sheet1');

            // Convert the workbook to a binary XLSX file
            var excelBuffer = XLSX.write(workbook, { bookType: 'xlsx', type: 'array' });

            // Create a Blob object from the binary data
            var excelBlob = new Blob([excelBuffer], { type: 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' });

            // Create a temporary link element to trigger the download
            var excelLink = document.createElement('a');
            excelLink.href = URL.createObjectURL(excelBlob);
            excelLink.download = 'download.xlsx';

            // Append the link to the document and trigger the download
            document.body.appendChild(excelLink);
            excelLink.click();

            // Clean up
            document.body.removeChild(excelLink);
            URL.revokeObjectURL(excelLink.href);
        }


        function fnPdfReport() {
            var table = document.getElementById('example'); // id of table

            // Create a new html2pdf instance
            var opt = {
                margin:       10,
                filename:     'download.pdf',
                image:        { type: 'jpeg', quality: 0.98 },
                html2canvas:  { scale: 2 },
                jsPDF:        { unit: 'pt', format: 'a4', orientation: 'portrait' }
            };

            html2pdf().set(opt).from(table).save();
        }
</script>








<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.3/jspdf.umd.min.js"></script>

<!-- Include html2pdf.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
  
  

  <!-- cleave.js -->
    <script src="<?=BASEURL?>assets/libs/cleave.js/cleave.min.js"></script>

    <script src="<?=BASEURL?>assets/js/pages/crm-deals.init.js"></script>

 
    
     <!-- password-addon init -->
    <script src="<?=BASEURL?>assets/js/pages/passowrd-create.init.js"></script>



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
