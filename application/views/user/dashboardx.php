<?php include 'header.php';?>


  <!-- Sweet Alert css-->
    <link href="<?=BASEURL?>assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />



<style>

   .d-card-icon{
   font-size:35px !important;
   }
   .d-card-icon-bag{
   font-size:30px !important;
   }
   .dashboard-card{
   border-left: 4px solid #32ccff;
   border-top-left-radius: 10px;
   border-bottom-left-radius: 10px;
   }
   .card.card-animate.dashboard-card.d-card2 {
   border-left-color: #00bd9d;
   }
   .card.card-animate.dashboard-card.d-card3 {
   border-left-color: #ffbc0a;
   }
  .currency-title{
      font-size: 21px;
    font-weight: 600;
    background-color: #edf7ff;
    width: 100%;
    padding:4px;
    border:1px solid #ced4da;
    border-bottom:none;
  }
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
    font-size: 10px;
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
@media screen and (max-width:1284px){
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
           
            <div class="row">
               <div class="col-xl-4 col-lg-6 col-md-6">
                  <!-- card -->
                  <div class="card card-animate dashboard-card d-card1">
                     <div style="background-color: #32ccff0a;" class="card-body">  <a href="<?=BASEURL?>user/deposit">
                        <div class="d-flex align-items-center">
                           <div class="flex-grow-1 overflow-hidden">
                              <p class="text-uppercase fw-medium text-muted text-truncate mb-0">My Wallet</p>
                           </div>
                        </div>
                        <div class="d-flex align-items-end justify-content-between mt-4">
                           <div>
                              <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span class="counter-value" data-target="<?=$wallet;?>">0</span></h4>
                           </div>
                         
                           <div class="avatar-sm flex-shrink-0">
                              <span class="avatar-title bg-soft-info rounded fs-3">
                              <i class="bx bxs-wallet text-info d-card-icon"></i>
                              </span>
                           </div>
                          
                        </div>
                         </a>
                     </div>
                     <!-- end card body -->
                  </div>
                  <!-- end card -->
               </div>
               <!-- end col -->
               <div class="col-xl-4 col-lg-6 col-md-6">
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
                  <div class="card card-animate dashboard-card d-card2">
                     <div style="background-color: #c0f1dc57;" class="card-body">  <a href="#">
                        <div class="d-flex align-items-center">
                           <div class="flex-grow-1 overflow-hidden">
                              <p class="text-uppercase fw-medium text-muted text-truncate mb-0">My Accounts & Balance</p>
                           </div>
                        </div>
                        <div class="d-flex align-items-end justify-content-between mt-4">
                           <div>
                              <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class=""><?=count($accounts);?> - $<?=$account_balance;?></span></h4>
                           </div>
                          
                           <div class="avatar-sm flex-shrink-0">
                              <span class="avatar-title bg-soft-success rounded fs-3">
                              <i class="fa-solid fa-sack-dollar text-success d-card-icon-bag"></i>
                              </span>
                           </div>
                         
                        </div>
                          </a>
                     </div>
                     <!-- end card body -->
                  </div>
                
                  <!-- end card -->
               </div>
               <!-- end col -->
               <div class="col-xl-4 col-lg-6 col-md-6">
                  <!-- card -->
                  <div class="card card-animate dashboard-card d-card3">
                     <div style="background-color: #fff3d35e;" class="card-body">
                        <div class="d-flex align-items-center">
                           <div class="flex-grow-1 overflow-hidden">
                              <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Profit and Loss</p>
                           </div>
                           <!--<div class="flex-shrink-0">-->
                           <!--    <h5 class="text-success fs-14 mb-0">-->
                           <!--        <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +29.08 %-->
                           <!--    </h5>-->
                           <!--</div>-->
                        </div>
                        <div class="d-flex align-items-end justify-content-between mt-4">
                           <div>
                              <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span class="counter-value" data-target="0">0</span> </h4>
                              
                              <!--<a href="#" class="text-decoration-underline">See details</a>-->
                           </div>
                           <div class="avatar-sm flex-shrink-0">
                              <span class="avatar-title bg-soft-warning rounded fs-3">
                              <i class="bx ri-arrow-up-circle-fill text-warning d-card-icon"></i>
                              </span>
                           </div>
                        </div>
                     </div>
                     <!-- end card body -->
                  </div>
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
                                    <h5 class="card-title mb-0">My Accounts</h5>
                                     <button data-bs-toggle="modal" data-bs-target="#adddeals" class="btn btn-success create-acnt-button btn-green"><i class="ri-add-fill align-bottom me-1"></i>Create Account</button>
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
                                           switch($acc['package']) {
                                                case 'standard':
                                                    $package = 'Standard';
                                                    break;
                                                case 'diamond':
                                                    $package = 'Diamond';
                                                    break;      
                                                case 'crystal':
                                                    $package = 'Crystal';
                                                    break;
                                                    default:
                                                    $package = '';
                                            }
                                        ?>
                                            <tr>
                                               
                                                <td><?=$count++;?></td>
                                                <td><?php if($acc['account_id'] !=""){ echo $acc['account_id']; }else{ echo "--"; }?></td>
                                                <td><?=$package;?></td>
                                                <td><?=$acc['master_pass'];?></td>
                                                <td><?=$acc['invest_pass'];?></td>
                                                <td id="walletvalue">$<?=$acc['current_balance'];?> <br> <p class="date">last updated: <?=$acc['bal_updated_date'];?></p></td>
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
                                    <h5 class="modal-title" id="exampleModalLabel">Create Account</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
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
         </div>
      </div>
   </div>
   
    
   
    
    
</div>
<!-- container-fluid -->

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

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>


<?php include 'footer.php';?>