
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Square Markets</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?=BASEURL?>assets/images/logo.jpg">

    <!-- jsvectormap css -->
    <link href="<?=BASEURL?>assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="<?=BASEURL?>assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="<?=BASEURL?>assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="<?=BASEURL?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?=BASEURL?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?=BASEURL?>assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="<?=BASEURL?>assets/css/custom.min.css" rel="stylesheet" type="text/css" />
   <!--FONT AWESOME-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
     
     <style>
     
     html{
         background-color:#d8f1e9 !important;
     }
     footer{
         /*position:fixed !important;*/
         z-index:10 !important;
     }
     .hamburger-icon span {
         
    background-color: #ffff !important;
    
     }
      :is(.h1,.h2,.h3,.h4,.h5,.h6,h1,h2,h3,h4,h5,h6) {
    font-family: 'Barlow', sans-serif !important;
}    

a.nav-link.menu-link.active {
    font-weight:600 !important;
    background-image: linear-gradient(90deg, #ff0000 -10%, #ff0000 100%);
    border-top-right-radius: 30px !important;
    border-bottom-right-radius: 30px !important;
}


           @media screen and (min-width:1025px){
          .navbar-brand-box {
    margin-top: 12px !important;
      }
      }
      .submit-btn{
          background-color:#00b074 !important;
          border-color:#00b074 !important;
          color:#fff !important;
      }
      .submit-btn:hover{
          background-color:#ff0000 !important;
          border-color:#ff0000 !important;
          color:#fff !important;
      }
        .text-bg-info {
    background-color: #20604f !important;
}
.text-warning {
    --vz-text-opacity: 0 !important;
    color: #ff0000 !important;
}
.text-red{
    color:#ff0000 !important;
}
.btn-green{
    background-color:#00b074 !important;
    border-color:#00b074 !important;
}
.btn-green:hover{
    background-color:#00b074 !important;
    border-color:#00b074 !important;
}
.btn-red,.btn-red:hover{
    background-color:#ff0000 !important;
    border-color:#ff0000 !important;
}
#spinner {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #ffffff;
  z-index: 9999;
  display: flex;
  justify-content: center;
  align-items: center;
}

#newload {
  border: 8px solid #f3f3f3;
  border-top: 8px solid #3498db;
  border-radius: 50%;
  width: 60px;
  height: 60px;
  animation: spin 2s linear infinite;
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

@media (min-width: 768px){
#page-topbar {
    left: 247px !important;
}
}
#page-topbar {
    /*top: -1px !important;*/
    background-color: #20604f !important;
    border: 1px solid #20604f !important;
}
@media (min-width: 768px){
[data-layout=vertical]:is([data-sidebar-size=sm],[data-sidebar-size=sm-hover]) #page-topbar {
    left: 70px !important;
}
}
:is([data-layout=vertical],[data-layout=semibox])[data-sidebar=dark][data-sidebar-size=sm] .navbar-brand-box {
    background: #00bd9d24 !important;
}
.btn-ghost-secondary {
    color: var(--vz-white) !important;
}

.page-content {
    background-color: #D8F1E9!important;
}
@media (min-width: 768px){
.topbar-user {
    background-color: #20604f !important;
}
}
.vertical-ruler{
    display: inline-block;
    align-self: center !important;
    width: 1px !important;
    height: 55px !important;
    min-height: 5px;
    background-color: white !important;
    opacity: 0.7 !important;
}
.menu-link{
    font-family: 'Barlow', sans-serif !important;
    color:white !important;
}
.menu-link:hover{
    font-weight:700 !important;
}

.right-side-nav{
    background-color:#d8f1e9 !important;
    border-top:none !important;
    border-left:1px solid #20604f !important;
    border-right:1px solid #20604f !important;
    border-bottom:1px solid #20604f !important;
}
.right-side-nav .dropdown-item:hover{
    background-color:#ff0000 !important;
    color:#fff !important;
}
.right-side-nav .dropdown-item:hover .right-side-nav-icon{
    color:white !important;
}

footer{
    background-color:#d8f1e9 !important;
    color:#20604f !important;
    font-weight:600 !important;
}
.dp-avatar{
    width:47px;
    height:47px;
    border-radius:50%;
    background-color:#00b074;
    border:2px solid #fff;
    display:flex;
    justify-content:center;
    align-items:center;
}
.profile-name{
    font-size:27px;
    font-weight:700;
    margin-bottom:4px !important;
    display:flex;
    justify-content:center;
    align-items:center;
    color:white;
    font-family: 'Barlow', sans-serif !important;
}
#back-to-top{
    display:none !important;
    background-color:#ff0000 !important;
    border-color:#ff0000 !important;
}

     </style>
   </head>
  
   <link href="<?=BASEURL?>assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
   <body>
       
        
  <!-- <div id="spinner">-->
  <!--  <div id="newload"></div>-->
  <!--</div>-->
    
       
    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
    <div class="layout-width">
       <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box horizontal-logo">
                    <a href="<?=BASEURL?>user" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="<?=BASEURL?>assets/images/logo.jpg" alt="" height="50">
                        </span>
                        <span class="logo-lg">
                            <img src="<?=BASEURL?>assets/images/updated-logo.jpg" alt="" height="90" width="200">
                        </span>
                    </a>

                    <a href="<?=BASEURL?>user" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="<?=BASEURL?>assets/images/logo.jpg" alt="" height="50">
                        </span>
                        <span class="logo-lg">
                            <img src="<?=BASEURL?>assets/images/updated-logo.jpg" alt="" height="90" width="200">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger" id="topnav-hamburger-icon">
                    <span class="hamburger-icon open">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>

           
            </div>

            <div class="d-flex align-items-center">
                
                <!--   <div class="dropdown topbar-head-dropdown header-item">-->
                <!--    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                <!--        <img id="header-lang-img" src="<?=BASEURL?>assets/images/flags/us.svg" alt="Header Language" height="20" class="rounded">-->
                <!--    </button>-->
                <!--    <div class="dropdown-menu dropdown-menu-end">-->

                        
                <!--        <a href="#" class="dropdown-item notify-item language py-2" data-lang="en" title="English">-->
                <!--            <img src="<?=BASEURL?>assets/images/flags/us.svg" alt="user-image" class="me-2 rounded" height="18">-->
                <!--            <span class="align-middle">English</span>-->
                <!--        </a>-->

                        
                <!--        <a href="#" class="dropdown-item notify-item language" data-lang="sp" title="Spanish">-->
                <!--            <img src="<?=BASEURL?>assets/images/flags/spain.svg" alt="user-image" class="me-2 rounded" height="18">-->
                <!--            <span class="align-middle">Española</span>-->
                <!--        </a>-->

                        
                <!--        <a href="#" class="dropdown-item notify-item language" data-lang="gr" title="German">-->
                <!--            <img src="<?=BASEURL?>assets/images/flags/germany.svg" alt="user-image" class="me-2 rounded" height="18"> <span class="align-middle">Deutsche</span>-->
                <!--        </a>-->

                        
                <!--        <a href="#" class="dropdown-item notify-item language" data-lang="it" title="Italian">-->
                <!--            <img src="<?=BASEURL?>assets/images/flags/italy.svg" alt="user-image" class="me-2 rounded" height="18">-->
                <!--            <span class="align-middle">Italiana</span>-->
                <!--        </a>-->

                        
                <!--        <a href="#" class="dropdown-item notify-item language" data-lang="ru" title="Russian">-->
                <!--            <img src="<?=BASEURL?>assets/images/flags/russia.svg" alt="user-image" class="me-2 rounded" height="18">-->
                <!--            <span class="align-middle">русский</span>-->
                <!--        </a>-->

                        
                <!--        <a href="#" class="dropdown-item notify-item language" data-lang="ch" title="Chinese">-->
                <!--            <img src="<?=BASEURL?>assets/images/flags/china.svg" alt="user-image" class="me-2 rounded" height="18">-->
                <!--            <span class="align-middle">中国人</span>-->
                <!--        </a>-->

                       
                <!--        <a href="#" class="dropdown-item notify-item language" data-lang="fr" title="French">-->
                <!--            <img src="<?=BASEURL?>assets/images/flags/french.svg" alt="user-image" class="me-2 rounded" height="18">-->
                <!--            <span class="align-middle">français</span>-->
                <!--        </a>-->

                        
                <!--        <a href="#" class="dropdown-item notify-item language" data-lang="ar" title="Arabic">-->
                <!--            <img src="<?=BASEURL?>assets/images/flags/ae.svg" alt="user-image" class="me-2 rounded" height="18">-->
                <!--            <span class="align-middle">Arabic</span>-->
                <!--        </a>-->
                <!--    </div>-->
                <!--</div>-->

                <div class="dropdown d-md-none topbar-head-dropdown header-item">
                    <!--<button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                    <!--    <i class="bx bx-search fs-22"></i>-->
                    <!--</button>-->
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">
                        <form class="p-3">
                            <div class="form-group m-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
             
                
              <?php $support = $this->db->where('view', 'unread')->where('user_id',$this->session->userdata('usquareusername'))->count_all_results('support')+0; ?>
                
                  <div data-bs-toggle="tooltip" data-bs-placement="bottom" title="Support" class="ms-1 header-item d-flex d-sm-flex">
                    <a href="<?=BASEURL?>user/support" type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                        <i class="fa-solid fa-headset fs-22"></i>
                         <?php if($support!="") { ?>
                        <span class="position-absolute topbar-badge fs-10 translate-middle badge rounded-pill bg-danger"><?=$support?></span>
                          <?php }?>
                    </a>
                </div>
                  <?php $newss = $this->db->where('status', 'active')->count_all_results('informative_news')+0; ?>
                 <div data-bs-toggle="tooltip" data-bs-placement="bottom" title="News" class="ms-1 header-item d-flex d-sm-flex">
                    <a href="<?=BASEURL?>user/news" type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                        <i class='fa-solid fa-newspaper fs-22'></i>
                         <?php if($newss!="") { ?>
                        <span class="position-absolute topbar-badge fs-10 translate-middle badge rounded-pill bg-danger"><?=$newss?></span>
                        <?php }?>
                    </a>
                </div>

                <!--<div class="ms-1 header-item d-none d-sm-flex">-->
                <!--    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" data-toggle="fullscreen">-->
                <!--        <i class="bx bx-fullscreen fs-22"></i>-->
                <!--    </button>-->
                <!--</div>-->
                
                 
                
                 <?php $msg = $this->db->where('username NOT LIKE', '%' . $this->session->userdata('usquareusername') . '%')->order_by('notification_id', 'DESC')
                ->count_all_results('notification')+0;?>
                
              
                
                 <div class="dropdown topbar-head-dropdown ms-1 header-item" id="notificationDropdown">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                        <i class='bx bx-bell fs-22'></i>
                          <?php if($msg!="") { ?>
                        <span class="position-absolute topbar-badge fs-10 translate-middle badge rounded-pill bg-danger"><?=$msg?><span class="visually-hidden">unread messages</span></span>
                          <?php }?>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">

                       
                        <div class="dropdown-head bg-primary bg-pattern rounded-top">
                            <div class="p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0 fs-16 fw-semibold text-white"> Notifications </h6>
                                    </div>
                                    <div class="col-auto dropdown-tabs">
                                        <span class="badge badge-soft-light fs-13"> <?=$msg?>New</span>
                                    </div>
                                </div>
                            </div>

                            <div class="px-2 pt-2">
                                <ul class="nav nav-tabs nav-justified dropdown-tabs nav-tabs-custom" data-dropdown-tabs="true" id="notificationItemsTab" role="tablist">
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#all-noti-tab" role="tab" aria-selected="true">
                                            All (<?=$msg?>)
                                        </a>
                                    </li>
                                    <!--<li class="nav-item waves-effect waves-light">-->
                                    <!--    <a class="nav-link" data-bs-toggle="tab" href="#messages-tab" role="tab" aria-selected="false">-->
                                    <!--        Recent-->
                                    <!--    </a>-->
                                    <!--</li>-->
                                    <!--<li class="nav-item waves-effect waves-light">-->
                                    <!--    <a class="nav-link" data-bs-toggle="tab" href="#alerts-tab" role="tab" aria-selected="false">-->
                                    <!--        Alerts-->
                                    <!--    </a>-->
                                    <!--</li>-->
                                </ul>
                            </div>

                        </div>
              <?php $unread=$this->db->where('username NOT LIKE', '%' . $this->session->userdata('usquareusername') . '%')
              ->order_by('notification_id', 'DESC')->get('notification')->result_array();?>
              
                        <div class="tab-content position-relative" id="notificationItemsTabContent">
                            <div class="tab-pane fade show active py-2 ps-2" id="all-noti-tab" role="tabpanel">
                                <div data-simplebar style="max-height: 300px;" class="pe-2">
                                    
                                    <?php foreach($unread as $key => $a) { ?>
                                    <div class="text-reset notification-item d-block dropdown-item position-relative">
                                        <div class="d-flex">
                                            <div class="avatar-xs me-3">
                                                <span class="avatar-title bg-soft-info text-info rounded-circle fs-16">
                                                    <i class="bx bx-badge-check"></i>
                                                </span>
                                            </div>
                                              <div class="flex-1">
                                                <a href="<?=BASEURL?>user/notification_view/<?= $a['notification_id'] ?>" class="stretched-link">
                                                    <h6 class="mt-0 mb-2 lh-base message-truncate">Your <b> <?= $a['message']; ?></b>  <span class="text-secondary"></span> 
                                                        
                                                    </h6>
                                                </a>
                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                    <span><i class="mdi mdi-clock-outline"></i> <?=$a['messaged_at'];?></span>
                                                </p>
                                            </div>
                                            <div class="px-2 fs-15">
                                                <div class="form-check notification-check">
                                                    <input class="form-check-input" type="checkbox" value="<?= $a['notification_id']; ?>" id="all-notification-check01">
                                                    <label class="form-check-label" for="all-notification-check01"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>

                                    <!--<div class="text-reset notification-item d-block dropdown-item position-relative">-->
                                    <!--    <div class="d-flex">-->
                                    <!--        <img src="<?=BASEURL?>assets/images/users/avatar-2.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">-->
                                    <!--        <div class="flex-1">-->
                                    <!--            <a href="#!" class="stretched-link">-->
                                    <!--                <h6 class="mt-0 mb-1 fs-13 fw-semibold">Angela Bernier</h6>-->
                                    <!--            </a>-->
                                    <!--            <div class="fs-13 text-muted">-->
                                    <!--                <p class="mb-1">Answered to your comment on the cash flow forecast's-->
                                    <!--                    graph ðŸ””.</p>-->
                                    <!--            </div>-->
                                    <!--            <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">-->
                                    <!--                <span><i class="mdi mdi-clock-outline"></i> 48 min ago</span>-->
                                    <!--            </p>-->
                                    <!--        </div>-->
                                    <!--        <div class="px-2 fs-15">-->
                                    <!--            <div class="form-check notification-check">-->
                                    <!--                <input class="form-check-input" type="checkbox" value="" id="all-notification-check02">-->
                                    <!--                <label class="form-check-label" for="all-notification-check02"></label>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->

                                    <!--<div class="text-reset notification-item d-block dropdown-item position-relative">-->
                                    <!--    <div class="d-flex">-->
                                    <!--        <div class="avatar-xs me-3">-->
                                    <!--            <span class="avatar-title bg-soft-danger text-danger rounded-circle fs-16">-->
                                    <!--                <i class='bx bx-message-square-dots'></i>-->
                                    <!--            </span>-->
                                    <!--        </div>-->
                                    <!--        <div class="flex-1">-->
                                    <!--            <a href="#!" class="stretched-link">-->
                                    <!--                <h6 class="mt-0 mb-2 fs-13 lh-base">You have received <b class="text-success">20</b> new messages in the conversation-->
                                    <!--                </h6>-->
                                    <!--            </a>-->
                                    <!--            <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">-->
                                    <!--                <span><i class="mdi mdi-clock-outline"></i> 2 hrs ago</span>-->
                                    <!--            </p>-->
                                    <!--        </div>-->
                                    <!--        <div class="px-2 fs-15">-->
                                    <!--            <div class="form-check notification-check">-->
                                    <!--                <input class="form-check-input" type="checkbox" value="" id="all-notification-check03">-->
                                    <!--                <label class="form-check-label" for="all-notification-check03"></label>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->

                                    <!--<div class="text-reset notification-item d-block dropdown-item position-relative">-->
                                    <!--    <div class="d-flex">-->
                                    <!--        <img src="<?=BASEURL?>assets/images/users/avatar-8.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">-->
                                    <!--        <div class="flex-1">-->
                                    <!--            <a href="#!" class="stretched-link">-->
                                    <!--                <h6 class="mt-0 mb-1 fs-13 fw-semibold">Maureen Gibson</h6>-->
                                    <!--            </a>-->
                                    <!--            <div class="fs-13 text-muted">-->
                                    <!--                <p class="mb-1">We talked about a project on linkedin.</p>-->
                                    <!--            </div>-->
                                    <!--            <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">-->
                                    <!--                <span><i class="mdi mdi-clock-outline"></i> 4 hrs ago</span>-->
                                    <!--            </p>-->
                                    <!--        </div>-->
                                    <!--        <div class="px-2 fs-15">-->
                                    <!--            <div class="form-check notification-check">-->
                                    <!--                <input class="form-check-input" type="checkbox" value="" id="all-notification-check04">-->
                                    <!--                <label class="form-check-label" for="all-notification-check04"></label>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->

                                    <div class="my-3 text-center view-all">
                                        <a href="<?=BASEURL?>user/see_notification" type="button" class="btn btn-soft-success waves-effect waves-light">View
                                            All Notifications <i class="ri-arrow-right-line align-middle"></i></a>
                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane fade py-2 ps-2" id="messages-tab" role="tabpanel" aria-labelledby="messages-tab">
                                <div data-simplebar style="max-height: 300px;" class="pe-2">
                                    <div class="text-reset notification-item d-block dropdown-item">
                                        <div class="d-flex">
                                            <img src="<?=BASEURL?>assets/images/users/avatar-3.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="flex-1">
                                                <a href="#!" class="stretched-link">
                                                    <h6 class="mt-0 mb-1 fs-13 fw-semibold">James Lemire</h6>
                                                </a>
                                                <div class="fs-13 text-muted">
                                                    <p class="mb-1">We talked about a project on linkedin.</p>
                                                </div>
                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                    <span><i class="mdi mdi-clock-outline"></i> 30 min ago</span>
                                                </p>
                                            </div>
                                            <div class="px-2 fs-15">
                                                <div class="form-check notification-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="messages-notification-check01">
                                                    <label class="form-check-label" for="messages-notification-check01"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-reset notification-item d-block dropdown-item">
                                        <div class="d-flex">
                                            <img src="<?=BASEURL?>assets/images/users/avatar-2.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="flex-1">
                                                <a href="#!" class="stretched-link">
                                                    <h6 class="mt-0 mb-1 fs-13 fw-semibold">Angela Bernier</h6>
                                                </a>
                                                <div class="fs-13 text-muted">
                                                    <p class="mb-1">Answered to your comment on the cash flow forecast's
                                                        graph ðŸ””.</p>
                                                </div>
                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                    <span><i class="mdi mdi-clock-outline"></i> 2 hrs ago</span>
                                                </p>
                                            </div>
                                            <div class="px-2 fs-15">
                                                <div class="form-check notification-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="messages-notification-check02">
                                                    <label class="form-check-label" for="messages-notification-check02"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-reset notification-item d-block dropdown-item">
                                        <div class="d-flex">
                                            <img src="<?=BASEURL?>assets/images/users/avatar-6.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="flex-1">
                                                <a href="#!" class="stretched-link">
                                                    <h6 class="mt-0 mb-1 fs-13 fw-semibold">Kenneth Brown</h6>
                                                </a>
                                                <div class="fs-13 text-muted">
                                                    <p class="mb-1">Mentionned you in his comment on ðŸ“ƒ invoice #12501.
                                                    </p>
                                                </div>
                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                    <span><i class="mdi mdi-clock-outline"></i> 10 hrs ago</span>
                                                </p>
                                            </div>
                                            <div class="px-2 fs-15">
                                                <div class="form-check notification-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="messages-notification-check03">
                                                    <label class="form-check-label" for="messages-notification-check03"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-reset notification-item d-block dropdown-item">
                                        <div class="d-flex">
                                            <img src="<?=BASEURL?>assets/images/users/avatar-8.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="flex-1">
                                                <a href="#!" class="stretched-link">
                                                    <h6 class="mt-0 mb-1 fs-13 fw-semibold">Maureen Gibson</h6>
                                                </a>
                                                <div class="fs-13 text-muted">
                                                    <p class="mb-1">We talked about a project on linkedin.</p>
                                                </div>
                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                    <span><i class="mdi mdi-clock-outline"></i> 3 days ago</span>
                                                </p>
                                            </div>
                                            <div class="px-2 fs-15">
                                                <div class="form-check notification-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="messages-notification-check04">
                                                    <label class="form-check-label" for="messages-notification-check04"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="my-3 text-center view-all">
                                        <a href="<?=BASEURL?>user/see_notification" type="button" class="btn btn-soft-success waves-effect waves-light">View
                                            All Messages <i class="ri-arrow-right-line align-middle"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade p-4" id="alerts-tab" role="tabpanel" aria-labelledby="alerts-tab"></div>

                            <div class="notification-actions" id="notification-actions">
                                <div class="d-flex text-muted justify-content-center">
                                    Select <div id="select-content" class="text-body fw-semibold px-1">0</div> Result <button type="button" class="btn btn-link link-danger p-0 ms-3" data-bs-toggle="modal" data-bs-target="#removeNotificationModal">Remove</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--<div class="ms-1 header-item d-none d-sm-flex">-->
                <!--    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode">-->
                <!--        <i class="bx bx-moon fs-22"></i>-->
                <!--    </button>-->
                <!--</div>-->
            
                <div class="vr vertical-ruler ms-4"></div>
                <div class="dropdown ms-sm-3 header-item topbar-user">
                    <button style="font-family: 'Barlow', sans-serif !important;" type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            
                            <span class="text-start ms-xl-2">
                                <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text text-white"><span style="font-weight:300;" class="me-1">Hello,</span><?=$this->session->userdata('usquarename');?></span>
                                <span style="font-weight:500;" class="d-none d-xl-block fw-medium ms-1 user-name-text text-white text-end"><span style="font-weight:200;font-size:12px;" class="me-1">CRM ID:</span><?=$this->session->userdata('usquareusername')?></span>
                            </span>
                            <?php $first_letter = substr($this->session->userdata('usquarename'), 0, 1);
                                 $upper = strtoupper($first_letter); ?>
                           <span class="dp-avatar ms-2">
                               <h1 class="profile-name text-uppercase"><?=$upper;?></h1>
                           </span>
                           
                           </span>
                        
                    </button>
                    <div style="font-family: 'Barlow', sans-serif !important;" class="dropdown-menu dropdown-menu-end right-side-nav" style="">
                        <!-- item-->
                        <h6 class="dropdown-header mb-0 pb-0">Welcome <?=$this->session->userdata('usquarename')?></h6>
                        <h6 style="color:#20604f;" class="dropdown-header mt-1 d-block d-sm-block d-md-none d-lg-none d-xl-none d-xxl-none mt-0 pt-1"><span class="text-dark me-1" style="font-size:12px;font-weight:300;">CRM ID:</span><?=$this->session->userdata('usquareusername')?></h6>
                        <a class="dropdown-item mt-1" href="<?=BASEURL?>user/profile"><i class="mdi mdi-account-circle text-muted right-side-nav-icon fs-16 align-middle me-1"></i> <span class="align-middle">Profile</span></a>
                        <!--<div class="dropdown-divider"></div>-->
                        <hr>
                        <?php $wallet = $this->db->select('sum(credit) - sum(debit) as balance')->where('user_id',$this->session->userdata('usquareusername'))->get('e_wallet')->row()->balance+0; ?>
                        <a class="dropdown-item wallet-bal-header" href="<?=BASEURL?>user/deposit"><i class="mdi mdi-wallet text-muted right-side-nav-icon fs-16 align-middle me-1"></i> <span class="align-middle">Balance : <b class="show-wallet-balance">$ <?=$wallet;?></b></span></a>
                        <!--<a class="dropdown-item" href="<?=BASEURL?>user/support"><i class="fa-solid fa-headset a-notification-icon text-muted right-side-nav-icon fs-16 align-middle me-1"></i> <span class="align-middle">Support</span></a>-->
                        <a class="dropdown-item my-1" href="<?=BASEURL?>user/reset_password"><i class="fa-solid fa-lock text-muted right-side-nav-icon fs-16 align-middle me-1"></i> <span class="align-middle">Reset Password</span></a>
                        <a class="dropdown-item logout-nav" href="<?=BASEURL?>user/logout"><i class="fa-solid fa-power-off logout-icon text-muted right-side-nav-icon fs-15 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->

              <div class="navbar-brand-box">
            <!-- Dark Logo-->
            <a href="<?=BASEURL?>user" class="logo logo-dark">
            <span class="logo-sm">
            <img src="<?=BASEURL?>assets/images/logo.jpg" alt="" height="50">
            </span>
            <span class="logo-lg">
            <img src="<?=BASEURL?>assets/images/updated-logo.jpg" alt="" height="90" width="200">
            </span>
            </a>
            <!-- Light Logo-->
            <a href="<?=BASEURL?>user" class="logo logo-light">
            <span class="logo-sm">
            <img src="<?=BASEURL?>assets/images/logo.jpg" alt="" height="50">
            </span>
            <span class="logo-lg">
            <img src="<?=BASEURL?>assets/images/updated-logo.jpg" alt="" height="90" width="200">
            </span>
            </a>
            <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
            </button>
         </div>
            <div id="scrollbar">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                     <ul class="navbar-nav mt-1 mt-sm-1 mt-sm-0 mt-lg-0 mt-xl-0 mt-xxl-0" id="navbar-nav">
                           <span class="logo-sm d-flex justify-content-center align-items-center d-block d-sm-block d-md-none d-lg-none d-xl-none d-xxl-none">
                    <img src="<?=BASEURL?>assets/images/updated-logo.jpg" alt="" height="70">
            </span>
                  <!--<li class="menu-title"><span data-key="t-menu">Menu</span>-->
                  <!--</li>-->
                  <li style="margin-top:12px!important;" class="nav-item d-nav mb-2 ">
                     <a class="nav-link menu-link main-nav-link active" href="<?=BASEURL?>user/index">
                     <i class="fa-solid fa-house-user d-icon"></i> <span data-key="t-dashboards">Dashboard</span>
                     </a>
                  </li>
                  <!-- end Dashboard Menu -->
                  <!--<li class="nav-item prof-nav">-->
                  <!--   <a href="<?=BASEURL?>user/profile" class="nav-link menu-link" data-key="t-analytics"> <i class="fa-solid fa-user prof-icon"></i> <span data-key="t-dashboards">Profile</span></a>-->
                  <!--</li>-->
                  <!--  <li class="nav-item myacc-nav">-->
                  <!--   <a class="nav-link menu-link" href="<?=BASEURL?>user/my_account">-->
                  <!--   <i class="fa-solid fa-circle-user myacc-icon"></i> <span data-key="t-dashboards">My Account</span>-->
                  <!--   </a>-->
                  <!--</li>-->
                  <li class="nav-item dropmenu-container deposit-nav  mb-1">
                            <a class="nav-link main-nav-link menu-link collapsed" <?php if($page_name=="deposit" || $page_name=="withdraw" || $page_name=="payment_methods"){ echo "active nav-link menu-link";} ?> href="#FundsNavbar" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="FundsNavbar">
                                <i class="fa-solid fa-sack-dollar deposit-icon"></i> <span data-key="FundsNavbar">Funds</span>
                            </a>
                            <div class="menu-dropdown collapse mega-dropdown-menu" id="FundsNavbar">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item drop-nav-item mb-2 <?php if($page_name=="deposit"){ echo "active";} ?>">
                                        <a style="font-family: 'Barlow', sans-serif !important;" href="<?=BASEURL?>user/deposit" class="nav-link menu-link drop-nav-link" data-key="t-sweet-alerts"><i class="fa-solid fa-right-long arrow-icon"></i>Deposit</a>
                                    </li>
                                    <li class="nav-item drop-nav-item mb-2<?php if($page_name=="withdraw"){ echo "active";} ?>">
                                        <a style="font-family: 'Barlow', sans-serif !important;" href="<?=BASEURL?>user/withdraw" class="nav-link menu-link drop-nav-link" data-key="t-nestable-list"><i class="fa-solid fa-right-long arrow-icon"></i>Withdraw</a>
                                    </li>
                                     <li class="nav-item drop-nav-item mb-2 <?php if($page_name=="payment_methods"){ echo "active";} ?>">
                                        <a style="font-family: 'Barlow', sans-serif !important;" href="<?=BASEURL?>user/payment_methods" class="nav-link menu-link drop-nav-link" data-key="t-nestable-list"><i class="fa-solid fa-right-long arrow-icon"></i>My Financial Credentials</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                  <!--<li class="nav-item deposit-nav">-->
                  <!--   <a class="nav-link menu-link" href="<?=BASEURL?>user/deposit">-->
                  <!--   <i class="fa-solid fa-sack-dollar deposit-icon"></i> <span data-key="t-dashboards">Deposit</span>-->
                  <!--   </a>-->
                  <!--</li>-->
                  <!--  <li class="nav-item">-->
                  <!--   <a class="nav-link menu-link" href="<?=BASEURL?>user/transfer">-->
                  <!--   <i class="fa-solid fa-right-left"></i> <span data-key="t-dashboards">Transfer</span>-->
                  <!--   </a>-->
                  <!--</li>-->
                 
                  
                     
                      <li class="nav-item dropmenu-container tools-nav mb-1">
                            <a class="nav-link main-nav-link menu-link collapsed" href="#Tools" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="Tools">
                                <i class="fa-solid fa-compass tools-icon"></i> <span data-key="t-advance-ui">Tools</span>
                            </a>
                            <div class="menu-dropdown collapse mega-dropdown-menu" id="Tools">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item drop-nav-item mb-2">
                                        <a style="font-family: 'Barlow', sans-serif !important;" href="<?=BASEURL?>user/economiccalender" class="nav-link menu-link drop-nav-link" data-key="t-sweet-alerts"><i class="fa-solid fa-right-long arrow-icon"></i>Economic Calender</a>
                                    </li>
                                    <li class="nav-item drop-nav-item mb-2">
                                        <a style="font-family: 'Barlow', sans-serif !important;" href="<?=BASEURL?>user/marketwatch" class="nav-link menu-link drop-nav-link" data-key="t-nestable-list"><i class="fa-solid fa-right-long arrow-icon"></i>Market Watch</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                  
                 

                  <?php 
                   $check_ib_eligible = $this->db->where('username',$this->session->userdata('usquareusername'))->get('user_role')->row_array();
                   
                    $check_ref_sub_ib_status = $this->db->where('username',$check_ib_eligible['ref_id'])->get('user_role')->row_array();
                   
               if($check_ref_sub_ib_status['sub_ib_account'] != "Eligible")
               {
                   if($check_ib_eligible['sub_ib_account'] != "Eligible")
                   {
                       if($check_ib_eligible['ib_account'] == 'Eligible')
                       {
                       ?>
                      
                      <li class="nav-item ibportal-nav mb-1">
                         <a class="nav-link main-nav-link menu-link" href="<?=BASEURL?>user/ib_registration">
                         <i class="fa-solid fa-desktop ibportal-icon"></i> <span data-key="t-dashboards">IB Portal</span>
                         </a>
                      </li>
                     
                     <?php }else{ ?>
                      <li class="nav-item ibact-nav mb-1">
                         <a class="nav-link main-nav-link menu-link" href="<?=BASEURL?>user/ib_activation">
                         <i class="fa-solid fa-circle-user ibact-icon"></i> <span data-key="t-dashboards">IB Activate </span>
                         </a>
                      </li>
                 <?php } } } ?>
                  <!-- <li class="nav-item bankdet-nav">-->
                  <!--   <a class="nav-link menu-link" href="<?=BASEURL?>user/add_bank">-->
                  <!--   <i class="fa-solid fa-building-columns bankdet-icon"></i> <span data-key="t-dashboards">Payment Details</span>-->
                  <!--   </a>-->
                  <!--</li>-->
                  <li class="nav-item dephistory-nav mb-1">
                     <a class="nav-link main-nav-link menu-link" href="<?=BASEURL?>user/ledger">
                     <i class="fa-solid fa-money-check-dollar dephistory-icon"></i> <span data-key="t-dashboards">Ledger</span>
                     </a>
                  </li>
                   <li class="nav-item dropmenu-container tools-nav mb-1">
                            <a class="nav-link main-nav-link menu-link collapsed" href="#Platforms" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAdvanceUI">
                                <i style="font-size: 22px;font-weight: 900;" class="mdi mdi-cellphone-link tools-icon"></i> <span data-key="t-advance-ui">Platforms</span>
                            </a>
                            <div class="menu-dropdown collapse mega-dropdown-menu" id="Platforms">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item drop-nav-item mb-2">
                                        <a style="font-family: 'Barlow', sans-serif !important;" href="<?=BASEURL?>user/metachart" target="_blank" class="nav-link menu-link drop-nav-link" data-key="t-sweet-alerts"><i class="fa fa-globe"></i>MT5 for Web</a>
                                    </li>
                                    <li class="nav-item drop-nav-item mb-2">
                                        <a style="font-family: 'Barlow', sans-serif !important;" href="#" target="_blank" class="nav-link menu-link drop-nav-link" data-key="t-sweet-alerts"><i class="fa-brands fa-windows"></i>MT5 for Windows</a>
                                    </li>
                                    <li class="nav-item drop-nav-item mb-2">
                                        <a style="font-family: 'Barlow', sans-serif !important;" href="https://apps.apple.com/us/app/metatrader-5-forex-stocks/id413251709" target="_blank" class="nav-link menu-link drop-nav-link" data-key="t-nestable-list"><i class="fa-brands fa-apple"></i>MT5 for Apple</a>
                                    </li>
                                     <li class="nav-item drop-nav-item mb-2">
                                        <a style="font-family: 'Barlow', sans-serif !important;" href="https://play.google.com/store/apps/details?id=net.metaquotes.metatrader5&hl=en&referrer=ref_id%3d5189117725657477754%26server%3dGoDo-Server" target="_blank" class="nav-link menu-link drop-nav-link" data-key="t-nestable-list"><i class=" ri-android-fill"></i>MT5 for Android</a>
                                    </li>
                                    <!-- <li class="nav-item drop-nav-item mb-2">-->
                                    <!--    <a style="font-family: 'Barlow', sans-serif !important;" href="https://squareprofits.com/dist/metachart" target="_blank" class="nav-link menu-link drop-nav-link" data-key="t-nestable-list"><i class="ri-funds-box-line"></i>WebTrader</a>-->
                                    <!--</li>-->
                                </ul>
                            </div>
                        </li>
                  <!-- <li class="nav-item withdraw-nav">-->
                  <!--   <a class="nav-link menu-link" href="<?=BASEURL?>user/withdraw">-->
                  <!--   <i class="fa-solid fa-dollar-sign withdraw-icon"></i> <span data-key="t-dashboards">Withdraw</span>-->
                  <!--   </a>-->
                  <!--</li>-->
                  <!--  <li class="nav-item news-nav">-->
                  <!--   <a class="nav-link menu-link" href="<?=BASEURL?>user/news">-->
                  <!--   <i class="fa-solid fa-square-rss news-icon"></i> <span data-key="t-dashboards">News <span class="badge bg-danger ms-1">2</span></span>-->
                  <!--   </a>-->
                  <!--</li>-->
                  <!--  <li class="nav-item resetp-nav">-->
                  <!--   <a class="nav-link menu-link" href="<?=BASEURL?>user/reset_password">-->
                  <!--   <i class="fa-solid fa-lock resetp-icon"></i> <span data-key="t-dashboards">Reset Password</span>-->
                  <!--   </a>-->
                  <!--</li>-->
                   <!--<li class="nav-item a-notification-nav">-->
                   <!--         <a class="nav-link menu-link" href="<?=BASEURL?>user/support">-->
                   <!--           <i class="fa-solid fa-headset a-notification-icon"></i> <span data-key="t-dashboards">Support</span>-->
                   <!--         </a>-->
                   <!--     </li>-->
                  <!--<li class="nav-item logout-nav">-->
                  <!--   <a class="nav-link menu-link" href="<?=BASEURL?>user/logout">-->
                  <!--   <i class="fa-solid fa-power-off logout-icon"></i> <span data-key="t-dashboards">Logout</span>-->
                  <!--   </a>-->
                  <!--</li>-->
               </ul>
                </div>
                <!-- Sidebar -->
            </div>

            <div class="sidebar-background"></div>
        </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                
        <!-- removeNotificationModal -->
<div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
            </div>
            <div class="modal-body">
                <div class="mt-2 text-center">
                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                        <h4>Are you sure ?</h4>
                        <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
                </div>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->        
                
                
    <script>
    // Truncate the message text
    var messageElements = document.getElementsByClassName("message-truncate");
    for (var i = 0; i < messageElements.length; i++) {
        var messageElement = messageElements[i];
        var messageText = messageElement.innerText;
        var truncatedText = truncateText(messageText, 10);
        messageElement.innerText = truncatedText;
    }

    // Truncate text function
    function truncateText(text, length) {
        var words = text.split(' ');
        var truncated = words.slice(0, length).join(' ');
        if (words.length > length) {
            truncated += '...';
        }
        return truncated;
    }
</script>  


<script>
    // Execute the following code once the document is ready
    document.addEventListener('DOMContentLoaded', function () {
        // Select the "Remove" button
        var removeBtn = document.getElementById('removeNotificationBtn');

        // Add click event listener to the "Remove" button
        removeBtn.addEventListener('click', function () {
            // Get all the checked checkboxes
            var checkboxes = document.querySelectorAll('.form-check-input:checked');
            var notificationIds = [];

            // Extract the notification IDs from the checked checkboxes
            checkboxes.forEach(function (checkbox) {
                notificationIds.push(checkbox.value);
            });

            // Make an Ajax request to update the is_read status in the database
            if (notificationIds.length > 0) {
                var url = "<?=BASEURL?>user/update_is_read_status";

                // Send the Ajax request
                var xhr = new XMLHttpRequest();
                xhr.open('POST', url, true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        // Handle the response from the server if needed
                        console.log(xhr.responseText);
                    }
                };
                xhr.send('notification_ids=' + JSON.stringify(notificationIds));
            }
        });
    });
</script>

                
                
                          