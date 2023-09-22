<?php include 'header.php';?>




<!--datatable css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
    
     <!-- Sweet Alert css-->
    <link href="<?=BASEURL?>assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />




<div class="container-fluid">
                    
                     <div class="row mt-5">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">IB Commission History</h5>
                                </div>
                                <div class="card-body">
                                    <table id="scroll-horizontal" class="table nowrap align-middle" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Date</th>
                                                <th>CRM ID</th>
                                                <th>Name</th>
                                                <th>Account ID</th>
                                                <th>Ticket</th>
                                                <th>Symbol</th>
                                                <th>Volume</th>
                                                <th>Commision</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $count=1;
                                        
                                        foreach($commission as $key => $his){
                                            $usdata = $this->db->where('username',$his['crm_id'])->get('user_role')->row_array();
                                        ?>  
                                        <tr>
                                            <td><?=$count++;?></td>
                                            <td><?=$his['commission_date'];?></td>
                                            <td><?=$his['crm_id'];?></td>
                                            <td><?=$usdata['fname']." ".$usdata['mname']." ".$usdata['lname'];?></td>
                                            <td><?=$his['remark'];?></td>
                                            <td><?=$his['ticket_id'];?></td>
                                            <td><?=$his['symbol'];?></td>
                                             <td><?=$his['volume'];?></td>
                                             <td><?=$his['credit'];?></td>
                                        </tr>
                                       <?php } ?> 
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

    <script src="<?=BASEURL?>assets/js/pages/datatables.init.js"></script>




  
  

<?php include 'footer.php';?>