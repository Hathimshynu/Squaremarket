<?php include 'header.php';?>



   <!--datatable css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">




  <div class="row mt-5">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">User Credential</h5>
                                </div>
                                <div class="card-body">
                                    <table id="scroll-horizontal" class="table nowrap align-middle" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th scope="col" style="width: 10px;">
                                                    <!--<div class="form-check">-->
                                                    <!--    <input class="form-check-input fs-15" type="checkbox" id="checkAll" value="option">-->
                                                    <!--</div>-->
                                                </th>
                                                <th>#</th>
                                                <th>User ID</th>
                                                <th>joining Date</th>
                                                 <th>Active Date</th>
                                                <th>Sponser ID</th>
                                               <th>Password</th>
                                                <th>Trans.Password</th>
                                                
                                                <th>Status</th>
                                                <th>View</th>
                                                
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <!--<div class="form-check">-->
                                                    <!--    <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">-->
                                                    <!--</div>-->
                                                </th>
                                                <td>01</td>
                                                <td>VLZ-452</td>
                                                <td>thomas</td>
                                               
                                                <td>10001</td>
                                                <td>mathew</td>
                                                <td>20-3-2023</td>
                                                <td>20-3-2023</td>
                                                <td>active</td>
                                                <td>
                                                    <a href="<?=BASEURL?>admin/view"><button type="button" class="btn btn-primary btn-sm" fdprocessedid="60z5ko">view</button></a>
                                                </td>
                                                
                                            </tr>
                                           
                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>




    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


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

<?php include 'footer.php';?>


