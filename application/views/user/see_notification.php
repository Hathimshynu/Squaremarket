<?php include 'header.php';?>

<link rel="text/stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    .section-50 {
    padding: 50px 0;
}

.m-b-50 {
    margin-bottom: 50px;
}

.dark-link {
    color: #333;
}

.heading-line {
    position: relative;
    padding-bottom: 5px;
}

.heading-line:after {
    content: "";
    height: 4px;
    width: 75px;
    background-color: #29B6F6;
    position: absolute;
    bottom: 0;
    left: 0;
}

.notification-ui_dd-content {
    margin-bottom: 30px;
}

.notification-list {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    padding: 20px;
    margin-bottom: 7px;
  
    -webkit-box-shadow: 0 3px 10px rgba(0, 0, 0, 0.06);
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.06);
}

.notification-list--unread {
    border-left: 2px solid #29B6F6;
}

.notification-list .notification-list_content {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
}

.notification-list .notification-list_content .notification-list_img img {
    height: 48px;
    width: 48px;
    border-radius: 50px;
    margin-right: 20px;
}

.notification-list .notification-list_content .notification-list_detail p {
    margin-bottom: 5px;
    line-height: 1.2;
}

.notification-list .notification-list_feature-img img {
    height: 48px;
    width: 48px;
    border-radius: 5px;
    margin-left: 20px;
}

button.btn.btn-success.btn-icon.tick-icon.waves-effect.waves-light.rounded-pill {
    background-color: #00bd9da8;
    border: none;
}

button.btn.btn-success.unread-btn.btn-icon.waves-effect.waves-light.rounded-pill {
    background-color: #57d4be52;
    border: none;
}

.notification-list,.notification-card{
    cursor:pointer !important;
}

.notification-list:hover,.notification-card:hover{
    cursor:pointer !important;
}
</style>


<div class="container-fluid">
    <div class="row">
    <div class="card">
    
       <section class="section-50">
    <div class="container">
        <h3 class="m-b-50 heading-line">Notifications <i class="fa fa-bell text-muted"></i></h3>

        <div class="notification-ui_dd-content">
            <!--<a href="<?=BASEURL?>user/notification_view" target="_self" class="notification-card"><div class="notification-list notification-list--unread">-->
            <!--    <div class="notification-list_content">-->
            <!--        <div class="notification-list_img">-->
            <!--            <img src="https://i.imgur.com/zYxDCQT.jpg" alt="user">-->
            <!--        </div>-->
            <!--        <div class="notification-list_detail">-->
            <!--            <p><b>John Doe</b> reacted to your post</p>-->
            <!--            <p class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, dolorem.</p>-->
            <!--            <p class="text-muted"><small>10 mins ago</small></p>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--    <div class="notification-list_feature-img">-->
            <!--       <button type="button" class="btn btn-success btn-icon tick-icon waves-effect waves-light rounded-pill"><i class="ri-check-double-line"></i></button>-->
            <!--    </div>-->
            <!--</div></a>-->
            <!--<a href="<?=BASEURL?>user/notification_view" target="_self" class="notification-card"><div class="notification-list notification-list--unread">-->
            <!--    <div class="notification-list_content">-->
            <!--        <div class="notification-list_img">-->
            <!--            <img src="https://i.imgur.com/w4Mp4ny.jpg" alt="user">-->
            <!--        </div>-->
            <!--        <div class="notification-list_detail">-->
            <!--            <p><b>Richard Miles</b> liked your post</p>-->
            <!--            <p class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, dolorem.</p>-->
            <!--            <p class="text-muted"><small>10 mins ago</small></p>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--    <div class="notification-list_feature-img">-->
            <!--        <button type="button" class="btn btn-success tick-icon btn-icon waves-effect waves-light rounded-pill"><i class="ri-check-double-line"></i></button>-->
            <!--    </div>-->
            <!--</div></a>-->
            <!--<a href="<?=BASEURL?>user/notification_view" target="_self" class="notification-card"><div class="notification-list">-->
            <!--    <div class="notification-list_content">-->
            <!--        <div class="notification-list_img">-->
            <!--            <img src="https://i.imgur.com/ltXdE4K.jpg" alt="user">-->
            <!--        </div>-->
            <!--        <div class="notification-list_detail">-->
            <!--            <p><b>Brian Cumin</b> reacted to your post</p>-->
            <!--            <p class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, dolorem.</p>-->
            <!--            <p class="text-muted"><small>10 mins ago</small></p>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--    <div class="notification-list_feature-img">-->
            <!--         <button type="button" class="btn btn-success unread-btn btn-icon waves-effect waves-light rounded-pill"><i class="ri-check-double-line"></i></button>-->
            <!--    </div>-->
            <!--</div></a>-->
            <!--<a href="<?=BASEURL?>user/notification_view" target="_self" class="notification-card"><div class="notification-list">-->
            <!--    <div class="notification-list_content">-->
            <!--        <div class="notification-list_img">-->
            <!--            <img src="https://i.imgur.com/CtAQDCP.jpg" alt="user">-->
            <!--        </div>-->
            <!--        <div class="notification-list_detail">-->
            <!--            <p><b>Lance Bogrol</b> reacted to your post</p>-->
            <!--            <p class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, dolorem.</p>-->
            <!--            <p class="text-muted"><small>10 mins ago</small></p>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--    <div class="notification-list_feature-img">-->
            <!--        <button type="button" class="btn btn-success btn-icon unread-btn waves-effect waves-light rounded-pill"><i class="ri-check-double-line"></i></button>-->
            <!--    </div>-->
            <!--</div></a>-->
            <!--<a href="<?=BASEURL?>user/notification_view" target="_self" class="notification-card"><div class="notification-list">-->
            <!--    <div class="notification-list_content">-->
            <!--        <div class="notification-list_img">-->
            <!--            <img src="https://i.imgur.com/zYxDCQT.jpg" alt="user">-->
            <!--        </div>-->
            <!--        <div class="notification-list_detail">-->
            <!--            <p><b>Parsley Montana</b> reacted to your post</p>-->
            <!--            <p class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, dolorem.</p>-->
            <!--            <p class="text-muted"><small>10 mins ago</small></p>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--    <div class="notification-list_feature-img">-->
            <!--        <button type="button" class="btn btn-success btn-icon unread-btn waves-effect waves-light rounded-pill"><i class="ri-check-double-line"></i></button>-->
            <!--    </div>-->
            <!--</div></a>-->
            <!--<a href="<?=BASEURL?>user/notification_view" target="_self" class="notification-card"><div class="notification-list">-->
            <!--    <div class="notification-list_content">-->
            <!--        <div class="notification-list_img">-->
            <!--            <img src="https://i.imgur.com/zYxDCQT.jpg" alt="user">-->
            <!--        </div>-->
            <!--        <div class="notification-list_detail">-->
            <!--            <p><b>Parsley Montana</b> reacted to your post</p>-->
            <!--            <p class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, dolorem.</p>-->
            <!--            <p class="text-muted"><small>10 mins ago</small></p>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--    <div class="notification-list_feature-img">-->
            <!--        <button type="button" class="btn btn-success btn-icon unread-btn waves-effect waves-light rounded-pill"><i class="ri-check-double-line"></i></button>-->
            <!--    </div>-->
            <!--</div></a>-->
            <!--<a href="<?=BASEURL?>user/notification_view" target="_self" class="notification-card"><div class="notification-list">-->
            <!--    <div class="notification-list_content">-->
            <!--        <div class="notification-list_img">-->
            <!--            <img src="https://i.imgur.com/zYxDCQT.jpg" alt="user">-->
            <!--        </div>-->
            <!--        <div class="notification-list_detail">-->
            <!--            <p><b>Parsley Montana</b> reacted to your post</p>-->
            <!--            <p class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, dolorem.</p>-->
            <!--            <p class="text-muted"><small>10 mins ago</small></p>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--    <div class="notification-list_feature-img">-->
            <!--        <button type="button" class="btn btn-success btn-icon unread-btn waves-effect waves-light rounded-pill"><i class="ri-check-double-line"></i></button>-->
            <!--    </div>-->
            <!--</div></a>-->
            <!--<a href="<?=BASEURL?>user/notification_view" target="_self" class="notification-card"><div class="notification-list">-->
            <!--    <div class="notification-list_content">-->
            <!--        <div class="notification-list_img">-->
            <!--            <img src="https://i.imgur.com/zYxDCQT.jpg" alt="user">-->
            <!--        </div>-->
            <!--        <div class="notification-list_detail">-->
            <!--            <p><b>Parsley Montana</b> reacted to your post</p>-->
            <!--            <p class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, dolorem.</p>-->
            <!--            <p class="text-muted"><small>10 mins ago</small></p>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--    <div class="notification-list_feature-img">-->
            <!--        <button type="button" class="btn btn-success btn-icon unread-btn waves-effect waves-light rounded-pill"><i class="ri-check-double-line"></i></button>-->
            <!--    </div>-->
            <!--</div></a>-->
            <!--<a href="<?=BASEURL?>user/notification_view" target="_self" class="notification-card"><div class="notification-list">-->
            <!--    <div class="notification-list_content">-->
            <!--        <div class="notification-list_img">-->
            <!--            <img src="https://i.imgur.com/zYxDCQT.jpg" alt="user">-->
            <!--        </div>-->
            <!--        <div class="notification-list_detail">-->
            <!--            <p><b>Parsley Montana</b> reacted to your post</p>-->
            <!--            <p class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, dolorem.</p>-->
            <!--            <p class="text-muted"><small>10 mins ago</small></p>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--    <div class="notification-list_feature-img">-->
            <!--        <button type="button" class="btn btn-success btn-icon unread-btn waves-effect waves-light rounded-pill"><i class="ri-check-double-line"></i></button>-->
            <!--    </div>-->
            <!--</div></a>-->
            <!--<a href="<?=BASEURL?>user/notification_view" target="_self" class="notification-card"><div class="notification-list">-->
            <!--    <div class="notification-list_content">-->
            <!--        <div class="notification-list_img">-->
            <!--            <img src="https://i.imgur.com/zYxDCQT.jpg" alt="user">-->
            <!--        </div>-->
            <!--        <div class="notification-list_detail">-->
            <!--            <p><b>Parsley Montana</b> reacted to your post</p>-->
            <!--            <p class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, dolorem.</p>-->
            <!--            <p class="text-muted"><small>10 mins ago</small></p>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--    <div class="notification-list_feature-img">-->
            <!--        <button type="button" class="btn btn-success btn-icon unread-btn waves-effect waves-light rounded-pill"><i class="ri-check-double-line"></i></button>-->
            <!--    </div>-->
            <!--</div></a>-->
            <!--<a href="<?=BASEURL?>user/notification_view" target="_self" class="notification-card"><div class="notification-list">-->
            <!--    <div class="notification-list_content">-->
            <!--        <div class="notification-list_img">-->
            <!--            <img src="https://i.imgur.com/zYxDCQT.jpg" alt="user">-->
            <!--        </div>-->
            <!--        <div class="notification-list_detail">-->
            <!--            <p><b>Parsley Montana</b> reacted to your post</p>-->
            <!--            <p class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, dolorem.</p>-->
            <!--            <p class="text-muted"><small>10 mins ago</small></p>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--    <div class="notification-list_feature-img">-->
            <!--        <button type="button" class="btn btn-success btn-icon unread-btn waves-effect waves-light rounded-pill"><i class="ri-check-double-line"></i></button>-->
            <!--    </div>-->
            <!--</div></a>-->
            
            <?php $msg=$this->db->where('username !=',$this->session->userdata('usquareusername'))->get('notification')->result_array();?>
            
            <?php foreach($msg as $key=> $row) {?>
            <a href="<?=BASEURL?>user/notification_view/<?= $row['notification_id'] ?>" target="_self" class="notification-card"><div class="notification-list">
                <div class="notification-list_content">
                    <div class="notification-list_img">
                        <img src="https://i.imgur.com/zYxDCQT.jpg" alt="user">
                    </div>
                    <div class="notification-list_detail">
                        <p><b><?=$row['title'];?></b></p>
                        <p class="text-muted"><?=$row['message'];?></p>
                        <p class="text-muted"><small><?=$row['messaged_at'];?></small></p>
                    </div>
                </div>
                <div class="notification-list_feature-img">
                    <button type="button" class="btn btn-success btn-icon unread-btn waves-effect waves-light rounded-pill"><i class="ri-check-double-line"></i></button>
                </div>
            </div></a>
            <?php }?>
        </div>

        <!--<div class="text-center">-->
        <!--    <button type="button" class="btn btn-info btn-load">-->
        <!--        <span class="d-flex align-items-center">-->
        <!--            <span class="flex-grow-1 me-2">-->
        <!--                Load more activity-->
        <!--            </span>-->
        <!--            <span class="spinner-grow flex-shrink-0" role="status">-->
        <!--                <span class="visually-hidden">Load more activity...</span>-->
        <!--            </span>-->
        <!--        </span>-->
        <!--    </button>-->
        <!--</div>-->

    </div>
</section>
    </div>
    </div>
</div>    
    















<?php include 'footer.php';?>