<?php include 'header.php';?>


  <!-- Sweet Alert css-->
    <link href="<?=BASEURL?>assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />



<style>

  
  .ribbon-box .ribbon-info {
    background: #ff0000 !important;
}
.ribbon-box .ribbon-info.ribbon-shape::after {
    border-left-color: #ff0000 !important;
    border-bottom-color: #ff0000 !important;
}
.ribbon-box .ribbon-info.ribbon-shape::before {
    border-left-color: #ff0000;
    border-top-color: #ff0000;
}
.blink{
    animation: blink 0.5s linear infinite;
}

@keyframes blink{
0%{opacity: 0;}
50%{opacity: .5;}
100%{opacity: 1;}
}

.dashboard-container{
    font-family: 'Barlow', sans-serif !important;
}

/*My Account*/
  .view-btn{
    padding-right:27px !important;
}
.col-sm-12 {
    overflow: auto;
}
.input-group-text{
    background-color: #20604f !important;
    border:2px solid #20604f !important;
    color:#fff;
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
p.date{
    font-size: 14px;
}
.myaccount-container{
    font-family: 'Barlow', sans-serif !important;
}
.myaccount-card{
    background-color: #D8F1E9!important;
}
.form-control,.form-select{
    border: 1px solid #00b074 !important;
}
@media screen and (max-width:523px){
    .myaccount-flex{
        display:block !important;
    }
    .create-acnt-button{
        width: 170px;
    }
    .myaccount-container{
        padding:0 !important;
    }
}
@media screen and (max-width:1550px){
    .ma-button{
        width:130px !important;
        height:40px !important;
    }
}

tbody, td, tfoot, th, thead, tr {
    border-color: #00b074 !important;
}

.text-bg-danger {
    background-color: #20604f !important;
}
.btn-green,.btn-green:hover{
    background-color:#20604f !important;
    border-color:#20604f !important;
}
.btn-red,.btn-red:hover{
    background-color:#ff0000 !important;
    border-color:#ff0000 !important;
}
.dashboard-card{
    min-height:130px !important;
}
.avatar-sm {
    height: 58px !important;
    width: 58px !important;
}
.avatar-title{
    border-radius:50% !important;
    background-color:#d8f1e9 !important;
    display:flex;
    justify-content:center;
    align-items:center;
}
.d-card-icon{
    color:#00b074 !important;
    font-size:30px !important;
}
.card-icon2{
    font-size:37px !important;
}
.card-icon3{
    font-size:35px !important;
}
.card-icon4{
    font-size:27px !important;
    font-weight:600 !important;
}
.dollar-symbol{
    font-size:15px !important;
    font-weight:700;
    padding-right:2px;
}
.balance-show{
    font-weight:800 !important;
    font-size:27px !important;
    margin-bottom:1px !important;
}
.card-appropriate-text{
    font-size:16px !important;
    color:#2d3436 !important;
}
@media screen and (max-width:575px){
    .dashboard-card .justify-content-center{
        justify-content:start !important;
    }
}
@media screen and (min-width:500px){
    .myaccount-cardbody{
        padding-left:2px !important;
        padding-right:2px !important;
    }
}

/*Style for beginning popup*/

.close-button{
    border-radius:0px !important;
    height:32px;
    width:80px;
    text-align:center !important;
    display: flex;
    justify-content:center;
    align-items: center;
    padding-bottom:9px !important;
    box-shadow: 0 3px 4px rgb(0 0 0 / 34%) !important;
}
@media screen and (max-width:500px){
    .close-button{
        height:22px;
        width:50px;
        font-size:11px !important;
}

.mbody-begin-popup{
    padding-left:0px !important;
    padding-right:0px !important;
}
}
.beginning-popup .avatar-title{
    background-color:#20604f !important;
    border-radius:0px !important;
}
span.cnew {
  padding-top: 8px;
    background-color: #20604f;
    height: 55px;
    width: 58px;
    display: inline-block;
    color: white;
}
.up-curved-line, .down-curved-line{
	transition:all 0.05s ease-in-out;
}
.up-curved-line{
   width: 200px;
   height: 100px;
   border: dashed 2px #ff0000 !important;
  border-color: transparent transparent #000 transparent;
  border-radius: 0 0 240px 50%/60px;
}
td{
    color:#353b48 !important;
    font-size:16px !important;
    font-weight:600 !important;
}
th{
    font-size:16px !important;
}
@keyframes rotateIcon {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

.rotate {
  animation: rotateIcon 1s linear; /* Adjust the duration as desired */
}

#refresh{
    color:black;
}
.mt5-icon{
    display:block !important;
    height: 40px !important;
    margin-top: -6px !important;
}
.my-acnt-title{
    font-size:19px !important;
}
.refresh-card{
    cursor:pointer !important;
}
table.dataTable td.dataTables_empty, table.dataTable th.dataTables_empty {
    --vz-table-accent-bg: #d8f1e9 !important;
}

@keyframes rotateAnimation {
  from { transform: rotate(0deg); }
  to { transform: rotate(360deg); }
}

.rotate {
  animation: rotateAnimation 1s infinite;
}
/*CSS for Account Status Card*/
.custom-progress {
    height: 6px !important;
     padding: 0px !important; 
    border-radius: 30px;
}
@keyframes progressAnimation {
  0% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0 50%;
  }
}

.progress-bar.progress-bar-striped {
  background-image: linear-gradient(
    45deg,
    rgba(255, 255, 255, 0.15) 25%,
    transparent 25%,
    transparent 50%,
    rgba(255, 255, 255, 0.15) 50%,
    rgba(255, 255, 255, 0.15) 75%,
    transparent 75%,
    transparent
  );
  /*background-size: 40px 40px;*/
  animation: progressAnimation 2s linear infinite;
}
.account-status-avatar{
    display:flex;
    justify-content:center;
    align-items:center;
    height:30px;
    width:30px;
    border-radius:4px !important;
    background-color:#d8f1e9 !important;
    cursor:pointer !important;
}
.account-status-icon{
    font-size:15px !important;
    color:#00b074 !important;
}

.account-status-avatar.inactive {
  background-color: #ffe6e6 !important;
  border:1px dashed #ff0000 !important;
}

.account-status-icon.inactive {
  color: #ff0000 !important;
}
.document-avatar{
    background-color:#ffe6e6 !important;
}
.acnt-status-text{
    font-weight: 700 !important;
    font-size: 23px !important;
}
.acnt-status .bg-success{
    background-color:#00b074 !important;
}

.acnt-status-icon{
    display: block !important;
    height: 37px !important;
}
.label-view{
    top: -20px !important;
    right: -9px;
    background-color: #00b074 !important;
    color: #fff;
    line-height: 17px !important;
    padding: 0 3px !important;
    border-radius: 4px;
    font-weight: 600;
}
.progress-label .progress-bar .label:after {
    border-top-color: #00b074 !important;
}

</style>

<div class="container-fluid dashboard-container">
    <?php  $news = $this->db->where('news_date',date('Y-m-d'))->where('status','Active')->get('scroll_news')->result_array(); 
    if(count($news) > 0)
    {
    ?>
    <div class="row mb-0">
        <div class="col-lg-12">
          <div class="card ribbon-box border shadow-none overflow-hidden">
            <div class="card-body">
                <div class="ribbon ribbon-info ribbon-shape trending-ribbon">
                    <span class="trending-ribbon-text show me-2">News Alert</span> <i style="font-size:19px;" class="fa-solid fa-bullhorn text-white align-bottom float-end"></i>
                </div>
                <h5 class="fs-14 text-end mb-3"><span class="badge rounded-pill text-bg-danger blink px-2">New</span></h5>
                <?php
               
                foreach($news as $key => $ns)
                {
                ?>
                <marquee class="text-primary"><p class="mb-0"><?=$ns['news'];?></p></marquee>
                <?php } ?>
            </div>
        </div>
        </div>
    </div>
    <?php } ?>
    
     <?php $wallet = $this->db->select('sum(credit) - sum(debit) as balance')->where('user_id',$this->session->userdata('usquareusername'))->get('e_wallet')->row()->balance+0; ?>

    
   <div class="row">
      <div class="col">
         <div class="h-100">
             <button style="display:none" id="popupbtn" type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#AppModal">Modal</button>
             <div id="AppModal" class="modal fade zoomIn" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body mbody-begin-popup">
                               <div class="text-center mt-2">
                                   <h3 style="font-weight:700;" class="text-dark">Start trading in 4 steps</h3>
                               </div>
                               <div class="row beginning-popup mt-2">
                                   <div class="col-lg-12">
                                       <img src="<?=BASEURL?>assets/images/begin-popup.png" class="img-fluid img-responsive" alt="Trading Roadmap View Popup">
                                   </div>
                               </div>
                               <div class="d-flex justify-content-center align-items-center mt-3">
                                   <button type="button" class="btn btn-green close-button text-white" data-bs-dismiss="modal">Close</button>
                               </div>
                            </div>
                          
                
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
               <!-- Old Modal for App Downloads-->
                <!--<button style="display:none" id="popupbtn" type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#AppModal">Modal</button>-->
                <!--<div id="AppModal" class="modal fade zoomIn" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">-->
                <!--    <div class="modal-dialog modal-dialog modal-dialog-centered">-->
                <!--        <div class="modal-content">-->
                <!--            <div class="modal-header">-->
                <!--                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>-->
                <!--            </div>-->
                <!--            <div class="modal-body">-->
                <!--               <div class="text-center">-->
                <!--                   <img style="height:70px;width:auto;margin-top: -44px;" src="<?=BASEURL?>assets/images/logo.jpg" class="img-fluid img-responsive">-->
                <!--                   <h3 style="font-weight:700;color:#20604f;" class="mt-2 ">DOWNLOAD OUR SQUAREMARKETS MOBILE APP</h3>-->
                <!--                   <div class="app-button-container px-0 px-lg-2 mt-3">-->
                <!--                       <a href="https://play.google.com/store/apps/details?id=net.metaquotes.metatrader5&amp;hl=en&amp;referrer=ref_id%3d5189117725657477754%26server%3dGoDo-Server" target="_blank" class="btn btn-primary btn-green android-btn w-100">Click to Download Android App</a>-->
                <!--                       <a href="https://apps.apple.com/us/app/metatrader-5-forex-stocks/id413251709" target="_blank" class="btn btn-primary btn-red android-btn w-100 my-3">Click to Download Iphone/Ipad App</a>-->
                <!--                       <a href="https://squareprofits.com/user/metachart" target="_blank" class="btn btn-primary btn-green android-btn w-100">Click to Download Desktop EXE</a>-->
                <!--                   </div>-->
                <!--                   <div class="mt-3">-->
                <!--                       <p class="text-muted">-->
                <!--                           NOTE: We have discontinued the old app with immediate effect.-->
                <!--                       </p>-->
                <!--                   </div>-->
                <!--               </div>-->
                <!--            </div>-->
                <!--        </div><!-- /.modal-content -->
                <!--    </div><!-- /.modal-dialog -->
                <!--</div><!-- /.modal -->
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                  <!-- card -->
                  <div class="card card-animate dashboard-card">
                     <div class="card-body d-flex justify-content-center align-items-center"><a href="<?=BASEURL?>user/deposit">
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="d-flex align-items-center">
                                 <div class="avatar-sm  me-2">
                                      <span class="avatar-title rounded fs-3">
                                      <i class="bx bx-wallet d-card-icon"></i>
                                      </span>
                                  </div>
                                   <div>
                                      <h4 class="fs-22 balance-show fw-semibold ff-secondary"><span class="dollar-symbol">$</span><span><?=number_format($wallet,2);?></span></h4>
                                       <p class="text-capitalize fw-medium text-dark text-truncate card-appropriate-text mb-0">My Wallet</p>
                                   </div>
                             </div>  
                        </div>
                         </a>
                     </div>
                     <!-- end card body -->
                  </div>
                  <!-- end card -->
               </div>
               <!-- end col -->
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                  <!-- card -->
                  <?php
                 $mt5_amount= array();
                  $accounts = $this->db->where('user_id',$this->session->userdata('usquareusername'))->get('accounts')->result_array();
                  foreach($accounts as $key => $acc){
                        $wallet = $acc['current_balance'];
                        array_push($mt5_amount,$wallet);
                  }
                  $account_balance = array_sum($mt5_amount)+0;
                   ?>
                  <div class="card card-animate dashboard-card">
                     <div class="card-body d-flex justify-content-center align-items-center myaccount-cardbody">  <a href="#">
                          <div class="d-flex justify-content-center align-items-center">
                            <div class="d-flex align-items-center">
                                 <div class="avatar-sm  me-2">
                                      <span class="avatar-title rounded fs-3">
                                      <!--<i class="bx bx-dollar-circle d-card-icon card-icon2"></i>-->
                                      <img style="display:block" src="<?=BASEURL?>assets/images/mt5.png" class="mt5-icon">
                                      </span>
                                  </div>
                                   <div>
                                      <h4 class="fs-22 balance-show fw-semibold ff-secondary"><span class=""><?=count($accounts);?> - <span class="dollar-symbol">$</span><?=number_format($account_balance,2);?></span></h4>
                                       <p class="text-capitalize card-appropriate-text fw-medium text-muted text-truncate mb-0">My Accounts & Balance</p>
                                   </div>
                             </div>  
                        </div>
                        
                          </a>
                     </div>
                     <!-- end card body -->
                  </div>
                
                  <!-- end card -->
               </div>
               <!-- end col -->
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                  <!-- card -->
                  <div class="card card-animate dashboard-card">
                     <div class="card-body d-flex justify-content-center align-items-center px-lg-1 px-xl-1 pt-2">
                         <div class="avatar-sm  me-2 d-block d-sm-block d-md-block d-lg-none d-xl-none d-xxl-none">
                                      <span class="avatar-title rounded fs-3">
                                      <img style="display:block" src="<?=BASEURL?>assets/images/account-status.png" class="acnt-status-icon">
                                      </span>
                                  </div>
                             <div class="acnt-status">
                                 <h4 class="acnt-status-text">Account Status</h4>
                                 
                                 <div class="progress progress-sm animated-progress progress-label custom-progress my-3 mt-4">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width:75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><div class="label label-view">75%</div></div>
                                </div>  
                                
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="account-status-avatar">
                                        <i class="fa-solid fa-gavel account-status-icon" id="legal-icon"></i>
                                    </div>
                                    <div class="account-status-avatar mx-2">
                                        <i style="font-size:21px !important;" class="bx bx-file account-status-icon" id="document-icon"></i>
                                        
                                    </div>
                                    <div class="account-status-avatar">
                                        <i class="fa-solid fa-user account-status-icon" id="user-icon"></i>
                                    </div>
                                </div>
                        </div>
                     </div>
                     <!-- end card body -->
                  </div>
                  <!-- end card -->
               </div>
               <!-- end col -->
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                  <!-- card -->
                  <a id="refreshButton"><div class="card card-animate dashboard-card refresh-card">
                     <div class="card-body d-flex justify-content-center align-items-center">
                         <div class="d-flex align-items-center">
                             <div class="d-flex justify-content-center align-items-center">
                            <div class="d-flex align-items-center">
                                 <div class="avatar-sm  me-2">
                                      <span class="avatar-title rounded fs-3">
                                      <i class=" fa-solid fa-arrow-rotate-right refresh-icon d-card-icon card-icon4" id="refresh-icon"></i>
                                     
                                      </span>
                                  </div>
                                   <div>
                                      <h4 class="fs-22 balance-show fw-semibold ff-secondary"><span class="dollar-symbol"></span><span>Refresh</span> </h4>
                                       <!--<p class="text-capitalize card-appropriate-text fw-medium text-muted text-truncate mb-0">Free Margin</p>-->
                                   </div>
                             </div>  
                        </div>
                        </div>
                    
                     </div>
                     <!-- end card body -->
                  </div></a>
                  <!-- end card -->
               </div>
               <!-- end col -->
            </div>
            <!-- end row-->
                   <?php
                    $banner = $this->db->order_by('id', 'DESC')->limit('1')->get('banner')->row_array();
                    if (!empty($banner['image'])) {
                        ?>
                        <div class="row"> <!-- If there is no image, then this banner section should be hidden -->
                            <div style="border-radius:0px;min-height:55px;background-color:#d8f1e9!important;" class="card">
                                <div class="banner-container d-flex justify-content-center align-items-center text-center">
                                    <img src="<?= BASEURL ?>assets/banner/<?= $banner['image'] ?>" class="img-fluid img-responsive" alt="Dashboard Banner">
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>

                    <!--<div class="card">-->
                    <!--    <div class="card-body">-->
                    <!--        <div class="row">-->
                    <!--            <div class="col-sm-8">-->
                    <!--                <div class="d-flex justify-content-center align-items-center">-->
                    <!--                    <h2 style="margin-top: 70px;color:#20604f;font-weight:800;letter-spacing:2px;background-color:#d8f1e9;width:fit-content;" class="text-center p-3">"Everything's ready for your journey in trading with Square Markets"</h2>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--            <div class="col-sm-4">-->
                    <!--                <div class="px-3">-->
                    <!--                    <img style="height:205px;object-fit:cover;" src="<?=BASEURL?>assets/images/trading-vector-bg.png" class="img-fluid" alt="">-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div> -->
                        <!-- end card-body-->
                    <!--</div>-->

            <!-- end row-->
           <div class="row">
                        <div class="col-lg-12">
                            <div style="border: 2px solid #00b074;background-color: #d8f1e9;border-radius:0px!important" class="card">
                                <div class="card-header myaccount-card d-flex justify-content-between align-items-center">
                                    <h5 class="card-title my-acnt-title mb-0">My Live Accounts</h5>
                                     <button data-bs-toggle="modal" data-bs-target="#CreateAccount" class="btn btn-success create-acnt-button btn-green"><i class="ri-add-fill align-bottom me-1"></i>Create Account</button>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="table-responsive">
                                      <table id="scroll-horizontal" class="table nowrap align-middle" style="width:100%">
                                        <thead>
                                            <tr>
                                                
                                                <th>Sl.No</th>
                                                <th>Account ID</th>
                                                <th>Group</th>
                                                <th>Master Password</th>
                                                <th>Investor Password</th>
                                                <th>Balance</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $accounts = $this->db->order_by('id','DESC')->where('user_id',$this->session->userdata('usquareusername'))->get('accounts')->result_array();
                                        $count = 1;
                                        foreach($accounts as $key => $acc){
                                            // $wallet = $this->db->select('sum(credit) - sum(debit) as balance')->where('user_id',$acc['account_id'])->get('e_wallet')->row()->balance+0;
                                            // $wallet = $this->mt5->get_trade_balance($acc['account_id']);
                                            $userdetails = $this->db->where('username',$acc['user_id'])->get('user_role')->row_array(); 
                                          
                                        ?>
                                            <tr>
                                               
                                                <td><?=$count++;?></td>
                                                <td><?php if($acc['account_id'] !=""){ echo $acc['account_id']; }else{ echo "--"; }?></td>
                                                <td><?=ucfirst($acc['package']);?></td>
                                                <td><?=$acc['master_pass'];?></td>
                                                <td><?=$acc['invest_pass'];?></td>
                                                <td id="walletvalue"><span id="curbal<?=$acc['account_id'];?>">$<?=$acc['current_balance'];?></span><button id="refreshbal" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Refresh" data-acc="<?=$acc['account_id'];?>" class="btn btn-ghost-secondary btn-icon btn-sm fs-16"><i id="refresh" class="ri-refresh-line align-bottom refresh-icon"></i></button> <br> <p class="date">last updated: <span id="upd<?=$acc['account_id'];?>"><?=date("d-m-Y h:i a", strtotime($acc['bal_updated_date']));?></span></p></td>
                                                <td>
                                                    <?php 
                                                    if($acc['status'] == "Active"){ ?>
                                                        <div class="d-flex"><button type="button" class="btn btn-success ma-button btn-green waves-effect waves-light  edit_info" data-bs-toggle="modal" data-id='<?=$acc["account_id"]?>' data-bs-target="#varyingcontentModal" data-bs-whatever="@mdo"><i class="fa-solid fa-dollar-sign me-1"></i>Add Fund</button>
                                                       
                                                        <button type="button" class="btn btn-danger btn-red ma-button mx-2 waves-effect waves-light  edit_infoo" data-bs-toggle="modal" data-id='<?=$acc["account_id"]?>' data-wvalue='<?=number_format($acc['current_balance'],2);?>' data-bs-target="#Withdraw" ><i class="fa-solid fa-dollar-sign me-1"></i>Withdraw</button>
                                                        
                                                         <a href="<?=BASEURL?>user/view/<?=bin2hex($acc["id"]);?>"><button type="button" class="btn ma-button btn-green btn-primary waves-effect waves-light"><i class="fa-solid fa-eye me-2"></i>View</button></a></div>
                                                    <?php } else { ?>
                                                        <a class="btn btn-info " href=""><i class="fa-solid fa-arrows-rotate me-2"></i> Refresh</a>
                                                    <?php } ?>
                                                    
                                                    
                                                    
                                                    </td>
                                                <!--<td><?=$acc['pwd_hint']?></td>-->
                                                <!--<td><?=$acc['investor_pwd']?></td>-->
                                                <!-- <td>-->
                                                <!--     <a href="<?=BASEURL?>user/acc_login/<?=bin2hex($acc['email']);?>/<?=bin2hex($acc['pwd_hint']);?>">-->
                                                <!--       <button type="button" class="btn btn-primary btn-label view-btn right rounded-pill"><i class="fa-solid fa-lock me-2"></i>Login</button>-->
                                                <!--     </a>-->
                                                <!--</td>-->
                                                
                                            </tr>
                                        <?php } ?>  
                                          
                                        </tbody>
                                    </table>
                                    
                                      <!-- Modal Starts-->
                    <div class="modal fade" id="adddeals" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header bg-light p-3">
                                    <h5 style="color:#20604f;" class="modal-title" id="exampleModalLabel">Create Account</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <?php 
                                $count_of_account = $this->db->where('user_id',$this->session->userdata('usquareusername'))->count_all_results('accounts')+0;
                                if($count_of_account < 3)
                                {
                                ?>
                                <form class="needs-validation" novalidate id="regist" method="post" action="<?=BASEURL?>user/my_account">
                                    <div id="accounterror"></div>
                                      <div id="message" class="text-danger text-center"></div>
                                    <div class="modal-body">
                                      
                                          <div class="mb-3">
                                            <label for="dealTitle" class="form-label">Deposit <span><?=form_error('deposit');?></span></label>
                                            <input type="text" class="form-control" name="deposit" value="" id="" placeholder="Enter Amount">
                                            <div id="phoneerror">
                                                
                                            </div>
                                            <?php $wallet = $this->db->select('sum(credit) - sum(debit) as balance')->where('user_id',$this->session->userdata('usquareusername'))->get('e_wallet')->row()->balance+0; ?>
                                            <div class="mt-3 d-flex justify-content-center"><span class="badge badge-soft-success badge-border bal-badge">Available Balance : <strong style="font-size:14px;color:orange;" class="w-balance"><span class="me-1">$</span><?=number_format($wallet,2);?></strong></span></div>
                                        </div>
                                        
                                      
                                      
                                    </div>
                                    <div class=" d-flex justify-content-center">
                                      <div  class="mb-4">
                                            <button type="button" class="btn btn-danger btn-red me-3" id="close-modal" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" id="" class="btn btn-success submit-btn"><i class="fa-regular fa-circle-check me-2"></i>Submit</button>
                                      </div>
                                    </div>
                                </form>
                                <?php }else{ ?>
                                <div class="modal-body">
                                      
                                          <div class="mb-3 text-center">
                                              <lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f7b84b,secondary:#405189" style="width:130px;height:130px"></lord-icon>
                                            <h2 style="color:#ff0000;font-family: 'Barlow', sans-serif !important;" class="text-center">Account limit reached. please contact support</h2>
                                            
                                        </div>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <button type="button" class="btn btn-light btn-green text-white px-3" data-bs-dismiss="modal">OK</button>
                                        </div>
                                      
                                      
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <!--end modal-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
           <!-- end row-->
        <!--Modal for Add Fund Starts-->
        <!-- Varying modal content -->
        <div class="modal fade" id="varyingcontentModal" tabindex="-1" aria-labelledby="varyingcontentModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <!--<h5 class="modal-title" id="varyingcontentModalLabel">New message</h5>-->
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!--<form>-->
                              <div class="card">
                                <div class="card-body position-relative">
                                    <h5 class="mb-3">Add Fund</h5>
                                    <div class="vstack gap-2">
                                        <div class="form-check card-radio">
                                            <input id="listGroupRadioGrid1" name="listGroupRadioGrid" type="radio" class="form-check-input" checked>
                                            <label class="form-check-label" for="listGroupRadioGrid1">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <div class="avatar-xs">
                                                            <div class="avatar-title bg-soft-success text-success fs-18 rounded">
                                                                <i class="fa-solid fa-wallet"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h6 class="mb-1">Wallet Balance</h6>
                                                        <?php $wallet = $this->db->select('sum(credit) - sum(debit) as balance')->where('user_id',$this->session->userdata('usquareusername'))->get('e_wallet')->row()->balance+0; ?>
                                                        <b id="balan" class="pay-amount"><?=number_format($wallet,2)?></b>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <form action="<?=BASEURL?>user/transfer" method="post">        
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Add Fund: <?=form_error('amount');?></label>
                                            <div class="input-group">
                                                <input type="hidden" class="form-control" name="hids" id="hids">
                                                <span style="font-weight:900;" class="input-group-text">$</span>
                                                <input type="text" class="form-control" name="amount" aria-label="Amount (to the nearest dollar)">
                                                <span style="font-weight:900;" class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                        
                                        <button type="submit" class="btn submit-btn btn-success w-100 mt-3" id=""><i class="fa-regular fa-circle-check me-2"></i>Confirm</button>
                                    </form>
                                    <div id="notification-warn" class="position-absolute top-0 start-0 end-0 d-none">
                                        <div class="alert alert-warning" role="alert">
                                            Select at list one item
                                        </div>
                                    </div>
                                    <!-- notification-warning -->
                        
                                    <div class="notification-elem" id="notification-overlay">
                                        <div class="text-center">
                                            <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>
                                            <div class="mt-4 pt-2">
                                                <h3 class="text-center text-primary">Congratulations !!</h3>
                                                <!--<h5 class="mb-1 success-pay">$6,201 Payment added Successfully to your Wallet.</h5>-->
                                                <p class="text-muted mx-4">Aww yeah, you successfully added $789 to your Wallet</p>
                        
                                                <div>
                                                    <button type="button" class="btn btn-success btn-sm w-sm" id="back-btn">Back to Home</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- notification-overlay -->
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                           
                            
                        <!--</form>-->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-red" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
          </div>

  <!--Modal for Withdraw-->
        <div class="modal fade" id="Withdraw" tabindex="-1" aria-labelledby="varyingcontentModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <!--<h5 class="modal-title" id="Withdraw">New message</h5>-->
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!--<form>-->
                              <div class="card">
                                <div class="card-body position-relative">
                                    <h5 class="mb-3">Withdraw</h5>
                                    <div class="vstack gap-2">
                                        <div class="form-check card-radio">
                                            <input id="listGroupRadioGrid1" name="listGroupRadioGrid" type="radio" class="form-check-input" checked>
                                            <label class="form-check-label" for="listGroupRadioGrid1">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <div class="avatar-xs">
                                                            <div class="avatar-title bg-soft-success text-success fs-18 rounded">
                                                                <i class="fa-solid fa-wallet"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h6 class="mb-1">Account Balance</h6>
                                                        <b id="balance" class="pay-amount"></b>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <form action="<?=BASEURL?>user/account_withdraw" method="post">    
                                    
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Withdraw <span><?=form_error('withdraw_amount');?></span></label>
                                            <div class="input-group">
                                                <input type="hidden" class="form-control" name="hids_id" id="hids_id">
                                                <span style="font-weight:900;" class="input-group-text">$</span>
                                                <input type="text" class="form-control" name="withdraw_amount" aria-label="Amount (to the nearest dollar)">
                                                <span style="font-weight:900;" class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                        
                                        <button type="submit" class="btn submit-btn btn-success w-100 mt-3" id=""><i class="fa-regular fa-circle-check me-2"></i>Withdraw</button>
                                    </form>
                                    <div id="notification-warn" class="position-absolute top-0 start-0 end-0 d-none">
                                        <div class="alert alert-warning" role="alert">
                                            Select at list one item
                                        </div>
                                    </div>
                                    <!-- notification-warning -->
                        
                                    <div class="notification-elem" id="notification-overlay">
                                        <div class="text-center">
                                            <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>
                                            <div class="mt-4 pt-2">
                                                <h3 class="text-center text-primary">Congratulations !!</h3>
                                                <!--<h5 class="mb-1 success-pay">$6,201 Payment added Successfully to your Wallet.</h5>-->
                                                <p class="text-muted mx-4">Aww yeah, you successfully added $789 to your Wallet</p>
                        
                                                <div>
                                                    <button type="button" class="btn btn-success btn-sm w-sm" id="back-btn">Back to Home</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- notification-overlay -->
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                           
                            
                        <!--</form>-->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-red" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
          </div>
          
          
          <!--New Table for Demo Account-->
            <div class="row">
                        <div class="col-lg-12">
                            <div style="border: 2px solid #00b074;background-color: #d8f1e9;border-radius:0px!important" class="card">
                                <div class="card-header myaccount-card d-flex justify-content-between align-items-center">
                                    <h5 class="card-title my-acnt-title mb-0">My Demo Accounts</h5>
                                         
                                </div>
                                <div class="card-body pt-0">
                                    <div class="table-responsive">
                                      <table id="scroll-horizontal" class="table nowrap align-middle" style="width:100%">
                                        <thead>
                                            <tr>
                                                
                                                <th>Sl.No</th>
                                                <th>Account ID</th>
                                                <th>Group</th>
                                                <th>Master Password</th>
                                                <th>Investor Password</th>
                                                <th>Balance</th>
                                                <!--<th>Action</th>-->
                                            </tr>
                                        </thead>
                                           <tbody>
                                        <?php 
                                        $accounts = $this->db->order_by('id','DESC')->where('account_type','demo')->where('user_id',$this->session->userdata('usquareusername'))->get('demo_accounts')->result_array();
                                        $count = 1;
                                        foreach($accounts as $key => $acc){
                                            // $wallet = $this->db->select('sum(credit) - sum(debit) as balance')->where('user_id',$acc['account_id'])->get('e_wallet')->row()->balance+0;
                                            // $wallet = $this->mt5->get_trade_balance($acc['account_id']);
                                            $userdetails = $this->db->where('username',$acc['user_id'])->get('user_role')->row_array(); 
                                          
                                        ?>
                                            <tr>
                                               
                                                <td><?=$count++;?></td>
                                                <td><?php if($acc['account_id'] !=""){ echo $acc['account_id']; }else{ echo "--"; }?></td>
                                                <td><?=ucfirst($acc['package']);?></td>
                                                <td><?=$acc['master_pass'];?></td>
                                                <td><?=$acc['invest_pass'];?></td>
                                                <td id="walletvalue"><span id="curbal1<?=$acc['account_id'];?>">$<?=$acc['current_balance'];?></span><button id="refreshbal1" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Refresh" data-acc="<?=$acc['account_id'];?>" class="btn btn-ghost-secondary btn-icon btn-sm fs-16"><i id="refresh" class="ri-refresh-line align-bottom refresh-icon"></i></button> <br> <p class="date">last updated: <span id="upd1<?=$acc['account_id'];?>"><?=date("d-m-Y h:i a", strtotime($acc['bal_updated_date']));?></span></p></td>
                                                <!--<td>-->
                                                <!--    <php -->
                                                <!--    if($acc['status'] == "Active"){ ?>-->
                                                <!--        <div class="d-flex"><button type="button" class="btn btn-success ma-button btn-green waves-effect waves-light  edit_info" data-bs-toggle="modal" data-id='<?=$acc["account_id"]?>' data-bs-target="#varyingcontentModal" data-bs-whatever="@mdo"><i class="fa-solid fa-dollar-sign me-1"></i>Add Fund</button>-->
                                                       
                                                <!--        <button type="button" class="btn btn-danger btn-red ma-button mx-2 waves-effect waves-light  edit_infoo" data-bs-toggle="modal" data-id='<?=$acc["account_id"]?>' data-wvalue='<?=number_format($acc['current_balance'],2);?>' data-bs-target="#Withdraw" ><i class="fa-solid fa-dollar-sign me-1"></i>Withdraw</button>-->
                                                        
                                                <!--         <a href="<?=BASEURL?>user/view/<?=bin2hex($acc["id"]);?>"><button type="button" class="btn ma-button btn-green btn-primary waves-effect waves-light"><i class="fa-solid fa-eye me-2"></i>View</button></a></div>-->
                                                <!--    <php } else { ?>-->
                                                <!--        <a class="btn btn-info " href=""><i class="fa-solid fa-arrows-rotate me-2"></i> Refresh</a>-->
                                                <!--    <php } ?>-->
                                                    
                                                <!--    </td>-->
                                            </tr>
                                        <?php } ?>  
                                          
                                        </tbody>
                                    </table>
                                    
                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
         </div>
         
             <!-- Modal for Create Account-->
                    <div class="modal zoomIn fade" id="CreateAccount" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header bg-light p-3">
                                    <h5 style="color:#20604f;" class="modal-title" id="exampleModalLabel">Create Account</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form class="needs-validation" novalidate  method="post" action="">
                                    <div class="modal-body">
                                         <div>
                                             <select class="form-select mb-3" aria-label="Default select example" id="account-selector">
                                                <option selected value="select-acnt">Select Account</option>
                                                <option data-bs-toggle="modal" data-bs-target="#RealAccount" value="real-account">Live Account</option>
                                                <option data-bs-toggle="modal" data-bs-target="#DemoAccount" value="demo-account">Demo Account</option>
                                            </select>
                                       </div> 
                                    </div>
                                    <!--<div class=" d-flex justify-content-center">-->
                                    <!--  <div  class="mb-4">-->
                                    <!--        <button type="button" class="btn btn-danger btn-red me-3" id="close-modal" data-bs-dismiss="modal">Close</button>-->
                                    <!--    <button type="button" id="demo-acnt-success" class="btn btn-success submit-btn"><i class="fa-regular fa-circle-check me-2"></i>Submit</button>-->
                                    <!--  </div>-->
                                    <!--</div>-->
                                </form>
                              
                            </div>
                        </div>
                    </div>
                    <!--end modal-->
                    
         
         
                    <!-- Modal for Real account dropdown-->
                    <div class="modal fade zoomIn" id="RealAccount" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header bg-light p-3">
                                    <h5 style="color:#20604f;" class="modal-title" id="exampleModalLabel">Create Live Account</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form class="needs-validation" novalidate  method="post" action="<?=BASEURL?>user/my_account">
                                    <div class="modal-body">
                                          <div class="mb-3">
                                            <label for="deposit" class="form-label">Deposit</label>
                                            <input type="text" class="form-control" name="deposit" value="" id="" placeholder="Enter Amount">
                                            <div class="mt-3 d-flex justify-content-center"><span class="badge badge-soft-success badge-border bal-badge">Available Balance : <strong style="font-size:14px;color:orange;" class="w-balance"><span class="me-1">$</span><?=$wallet;?></strong></span></div>
                                        </div>
                                        
                                      
                                      
                                    </div>
                                    <div class=" d-flex justify-content-center">
                                      <div  class="mb-4">
                                            <button type="button" class="btn btn-danger btn-red me-3" id="close-modal" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" id="" class="btn btn-success submit-btn"><i class="fa-regular fa-circle-check me-2"></i>Submit</button>
                                      </div>
                                    </div>
                                </form>
                              
                            </div>
                        </div>
                    </div>
                    <!--end modal-->
                    
                      <!-- Modal for Demo account dropdown-->
                    <div class="modal fade" id="DemoAccount" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header bg-light p-3">
                                    <h5 style="color:#20604f;" class="modal-title" id="exampleModalLabel">Create Demo Account</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form class="needs-validation" novalidate  method="post" action="<?=BASEURL?>user/createdemoaccount">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="group" class="form-label">Group</label>
                                             <select class="form-select mb-3" name='group' aria-label="Default select example">
                                                <option selected>Select Group</option>
                                                <option value="demo\CRYSTAL">Demo - Crystal</option>
                                                <option value="demo\GOLD">Demo - Gold</option>
                                                <option value="demo\DIAMOND">Demo - Diamond</option>
                                            </select>
                                       </div>  
                                        <div class="mb-3">
                                            <label for="group" class="form-label">Leverage</label>
                                            <?php $leverage=$this->db->select('leverage')->group_by('leverage')->get('package')->result_array();?>
                                             <select class="form-select mb-3" name='leverage' aria-label="Default select example">
                                                <option selected>Select Leverage</option>
                                                <?php foreach ($leverage as $item){ ?>
                                                <option value="<?php echo $item['leverage']; ?>"><?php echo $item['leverage']; ?></option>
                                            <?php } ?>
                                               
                                            </select>
                                       </div>  
                                          <div class="mb-3">
                                            <label for="deposit" class="form-label">Deposit</label>
                                            <input type="text" class="form-control" name="deposit" value="10000" id="" placeholder="Enter Amount">
                                        </div>
                                        
                                      
                                      
                                    </div>
                                    <div class=" d-flex justify-content-center">
                                      <div  class="mb-4">
                                            <button type="button" class="btn btn-danger btn-red me-3" id="close-modal" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" id="" class="btn btn-success submit-btn"><i class="fa-regular fa-circle-check me-2"></i>Submit</button>
                                      </div>
                                    </div>
                                </form>
                              
                            </div>
                        </div>
                    </div>
                    <!--end modal-->
                    
                    <!--Modal for Add Fund in Demo Account-->
                     <div class="modal fade" id="Addfund-Demoaccount" tabindex="-1" aria-labelledby="varyingcontentModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!--<form>-->
                                      <div class="card">
                                        <div class="card-body position-relative">
                                            <h5 class="mb-3">Add Fund</h5>
                                            <form action="#" method="post">        
                                                <div class="mb-3">
                                                    <label for="recipient-name" class="col-form-label">Amount:</label>
                                                    <div class="input-group">
                                                        <input type="hidden" class="form-control" name="hids" id="hids">
                                                        <span style="font-weight:900;" class="input-group-text">$</span>
                                                        <input type="text" class="form-control" name="amount" aria-label="Amount (to the nearest dollar)">
                                                        <span style="font-weight:900;" class="input-group-text">.00</span>
                                                    </div>
                                                </div>
                                                
                                                <button type="submit" class="btn submit-btn btn-success w-100 mt-3" id=""><i class="fa-regular fa-circle-check me-2"></i>Confirm</button>
                                            </form>
                                
                                           
                                          
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                   
                                    
                                <!--</form>-->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger btn-red" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
          </div>
         
         
      </div>
   </div>
   
    
   
    
    
</div>
<!-- container-fluid -->




<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!--Script for My account Dropdown-->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const accountSelector = document.getElementById("account-selector");

        accountSelector.addEventListener("change", function() {
            const realAccountModal = new bootstrap.Modal(document.getElementById("RealAccount"));
            const demoAccountModal = new bootstrap.Modal(document.getElementById("DemoAccount"));
            
            if (this.value === "real-account") {
                realAccountModal.show();
            } else if (this.value === "demo-account") {
                demoAccountModal.show();
            }
        });
    });
</script>

<!--close model-->
<script>
$(document).ready(function () {
    $("#close-modal").click(function () {
        $("#CreateAccount .btn-close").trigger("click");
    });
});
</script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha512-bnIvzh6FU75ZKxp0GXLH9bewza/OIw6dLVh9ICg0gogclmYGguQJWl8U30WpbsGTqbIiAwxTsbe76DErLq5EDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <!--<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>-->
    <!--<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>-->
    <!--<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>-->
    <!--<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>-->
    <!--<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>-->
    <!--<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

    <!--<script src="<?=BASEURL?>assets/js/pages/datatables.init.js"></script>-->
 <script>
      var legalIcon = document.getElementById('legal-icon');
var documentIcon = document.getElementById('document-icon');
var userIcon = document.getElementById('user-icon');

legalIcon.addEventListener('click', function() {
  toggleIcon(legalIcon, 'legal-avatar');
});

documentIcon.addEventListener('click', function() {
  toggleIcon(documentIcon, 'document-avatar');
});

userIcon.addEventListener('click', function() {
  toggleIcon(userIcon, 'user-avatar');
});

documentIcon.classList.add('inactive'); // Add 'inactive' class to documentIcon by default
documentIcon.parentElement.classList.add('inactive'); // Add 'inactive' class to documentIcon's parent by default

function toggleIcon(icon, parentClass) {
  icon.classList.toggle('inactive');
  var parentElement = icon.closest('.account-status-avatar');
  parentElement.classList.toggle('inactive');
}

    </script>
<script>
$(document).on('click', '.edit_info', function() {
    //alert("hiii");
    var dt_id = $(this).attr("data-id");
    $("#hids").val(dt_id);

});
</script>

<script>
$(document).on('click', '.edit_infoo', function() {
    //alert("hiii");
    var dt_id = $(this).attr("data-id");
    $("#hids_id").val(dt_id);
    var waalletvalue = $(this).attr("data-wvalue");
$("#balance").html('$'+waalletvalue);

});
</script>

  <!-- cleave.js -->
    <script src="<?=BASEURL?>assets/libs/cleave.js/cleave.min.js"></script>

    <script src="<?=BASEURL?>assets/js/pages/crm-deals.init.js"></script>

  
  <script>
      document.getElementById("real-acnt-success") && document.getElementById("real-acnt-success").addEventListener("click", function() {
    Swal.fire({
        title: "Your Real Account has been created Successfully!",
        icon: "success",
        confirmButtonClass: "btn btn-primary w-xs me-2 mt-2",
        buttonsStyling: !1,
    })
})

  document.getElementById("demo-acnt-success") && document.getElementById("demo-acnt-success").addEventListener("click", function() {
    Swal.fire({
        title: "Your Demo Account has been created Successfully!",
        icon: "success",
        confirmButtonClass: "btn btn-primary w-xs me-2 mt-2",
        buttonsStyling: !1,
    })
})
  </script>
  
  
     <!-- Sweet Alerts js -->
    <script src="<?=BASEURL?>assets/libs/sweetalert2/sweetalert2.min.js"></script>

    <!-- Sweet alert init js-->
    <script src="<?=BASEURL?>assets/js/pages/sweetalerts.init.js"></script>
    
     <!-- password-addon init -->
    <script src="<?=BASEURL?>assets/js/pages/passowrd-create.init.js"></script>
<?php
if($this->session->flashdata('popup_message') != "")
{
    $check = $this->db->where('email',$this->session->userdata('usquareemail'))->count_all_results('login_success')+0;
    if($check == 1)
    {
?>
<script>
    $(document).ready(function() {
      $('#popupbtn').click();
    });
  </script>
<?php }
}
$this->session->set_flashdata('popup_message','');
?>
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
<script>
    $(document).ready(function() {
      $('#refreshButton').click(function() {
        location.reload(); // Refresh the page
      });
    });
  </script>
<script>

document.querySelectorAll('.refresh-icon').forEach(function(icon) {
  icon.addEventListener('click', function() {
    var refreshIcon = this;
    var row = refreshIcon.closest('tr');
    
    // Add the "rotate" class to start the animation
    refreshIcon.classList.add('rotate');

    // Remove the "rotate" class after 3 seconds
    setTimeout(function() {
      refreshIcon.classList.remove('rotate');
    }, 3000);
    
  });
});

 </script>
 
 <!--live account refresh bal-->
 <script>
$(document).on('click', '#refreshbal', function() {
    var account = $(this).attr("data-acc");
     $('#curbal'+account).html('Fetching...');
    $.post('<?=BASEURL?>admin/update_wallet_balance', {
        'account': account
    })
    .done(function(res) {
        //alert(res);
        if ($.trim(res) != 'empty') {
          var object = JSON.parse(res);
          $('#curbal'+account).html('$'+object.wallet.toFixed(2));
          $('#upd'+account).html(object.updateddate);
        } else {
          console.log(res);
        }
    });

  });
  
</script> 


<!--demo account refresh bal-->
 <script>
$(document).on('click', '#refreshbal1', function() {
    var account = $(this).attr("data-acc");
     $('#curbal1'+account).html('Fetching...');
    $.post('<?=BASEURL?>admin/demo_update_wallet_balance', {
        'account': account
    })
    .done(function(res) {
        //alert(res);
        if ($.trim(res) != 'empty') {
          var object = JSON.parse(res);
          $('#curbal1'+account).html('$'+object.wallet.toFixed(2));
          $('#upd1'+account).html(object.updateddate);
        } else {
          console.log(res);
        }
    });

  });
  
</script> 




<script>
  document.getElementById("refreshButton").addEventListener("click", function() {
  var icon = document.getElementById("refresh-icon");
  icon.classList.add("rotate");

  // Reload the page
  window.location.reload();
});

window.addEventListener("load", function() {
  var icon = document.getElementById("refresh-icon");
  icon.classList.remove("rotate");
});

</script>

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

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>


<?php include 'footer.php';?>