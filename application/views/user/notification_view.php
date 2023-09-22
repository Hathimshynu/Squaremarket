<?php include 'header.php';?>

<style>
    .timeline::after{
        display:none !important;
    }
    @media (max-width: 991.98px){
.timeline-item {
    padding-left:0 !important;
}
}
.timeline-item{
    width:100% !important;
}
</style>


<div class="container-fluid">
    
   
       <div class="row">
            <div class="col-lg-12">
                            <div>
                                <h5>View Notification</h5>
                                <div class="timeline">
                                    <div class="timeline-item left">
                                        <!--<i class="icon ri-stack-line"></i>-->
                                        <!--<div class="date">15 Dec 2021</div>-->
                                        <div class="content">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0">
                                                    <img src="<?=BASEURL?>assets/images/users/avatar-5.png" alt="" class="avatar-sm rounded">
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h5 class="fs-15">Admin <small class="text-muted fs-13 fw-normal"><?= $message['messaged_at'] ;?></small></h5>
                                                    <p class="text-muted mb-2"><?= $message['message'] ;?></p>
                                                    <!--<div class="hstack gap-2">-->
                                                    <!--    <a class="btn btn-sm btn-light"><span class="me-1">&#128293;</span> 19</a>-->
                                                    <!--    <a class="btn btn-sm btn-light"><span class="me-1">&#129321;</span> 22</a>-->
                                                    <!--</div>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                              </div>
                            </div>
                    </div>        
        </div>  
  
  
</div>    
    















<?php include 'footer.php';?>