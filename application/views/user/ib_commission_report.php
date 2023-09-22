<?php include 'header.php';?>




<!--datatable css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
    
     <!-- Sweet Alert css-->
    <link href="<?=BASEURL?>assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />


<style>
   
.form-control,.form-select{
    border: 1px solid #00b074 !important;
}
.commission-container{
    font-family: 'Barlow', sans-serif !important;
}
@media screen and (max-width:500px){
    .row>* {
        padding-right: 5px !important;
        padding-left: 5px !important;
    }
}
.commission-card{
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

<div class="container-fluid commission-container">
                    
                     <div class="row mt-0">
                        <div class="col-lg-12">
                            <div class="card commission-card">
                                <div class="card-header commission-card">
                                    <h5 class="card-title mb-0">IB Commission History</h5>
                                </div>
                                <div class="card-body">
                                    <table id="scroll-horizontal" class="table nowrap align-middle" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <!--<th>Date</th>-->
                                                <th>CRM ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Total Commission</th>
                                                <th>View</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $count=1;
                                        $this->db->select('crm_id, username, COUNT(*) as count');
                                        $this->db->group_by('crm_id, username');
                                        $this->db->where('crm_id!=', "");
                                        $this->db->where('username', $this->session->userdata('usquareusername'));
                                        $history = $this->db->get('account')->result_array();
                                        foreach($history as $key => $his){
                                            $usdata = $this->db->where('username',$his['crm_id'])->get('user_role')->row_array();
                                            $amount = $this->db->select_sum('credit')->where('username', $this->session->userdata('usquareusername'))->where('crm_id',$his['crm_id'])->get('account')->row()->credit+0;
                                        ?>  
                                        <tr>
                                            <td><?=$count++;?></td>
                                            <!--<td>--</td>-->
                                            <td><?=$his['crm_id'];?></td>
                                            <td><?=$usdata['fname']." ".$usdata['mname']." ".$usdata['lname'];?></td>
                                            <td><?=$usdata['email'];?></td>
                                            <td><?=$amount;?></td>
                                            <td><a href="<?=BASEURL?>user/view_ib_commission/<?=bin2hex($his['crm_id']);?>" class="btn btn-primary">View</a></td>
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