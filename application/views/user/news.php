<?php include 'header.php';?>


<style>
   
.form-control,.form-select{
    border: 1px solid #00b074 !important;
}
.news-container{
    font-family: 'Barlow', sans-serif !important;
}
</style>


<div class="container-fluid news-container">
    
    
    <div class="row">
        
          <div class="col-xl-12 col-lg-12">
              <h4 class="heading mb-3">News Alert</h4>
              <?php 
              $news = $this->db->where('news_date',date('Y-m-d'))->where('status','Active')->get('informative_news')->result_array();
              if(count($news) > 0){
              foreach($news as $key => $ns)
              {
              ?>
                    <div class="card">
                        <div class="card-header">
                            <h6 class="card-title mb-0"></i>
                            <span class="me-2">
                           <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 504.123 504.123" xml:space="preserve" width="35px" height="35px" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path style="fill:#AA2102;" d="M266.744,367.675c0,6.798-5.498,12.296-12.288,12.296h-40.724c-6.79,0-12.296-5.49-12.296-12.296 l-50.861-209.77c0-6.782,5.506-12.296,12.304-12.296h40.716c6.798,0,12.296,5.506,12.296,12.296L266.744,367.675z"></path> <g> <path style="fill:#F9BDA0;" d="M161.721,434.337c-24.781,0-44.906-21.402-44.906-47.781v-32.65 c0-26.403,20.126-47.797,44.906-47.797h74.831c24.812,0,44.891,21.402,44.891,47.797v32.65c0,26.388-20.078,47.781-44.891,47.781 H161.721z"></path> <path style="fill:#F9BDA0;" d="M164.273,434.716c-9.381,0-16.983-7.601-16.983-16.967l0,0c0-9.397,7.601-16.983,16.983-16.983 h119.603c9.374,0,16.975,7.585,16.975,16.983l0,0c0,9.366-7.601,16.967-16.975,16.967H164.273z"></path> <path style="fill:#F9BDA0;" d="M161.894,372.661c-9.366,0-16.991-7.617-16.991-16.983l0,0c0-9.381,7.625-16.983,16.991-16.983 h138.185c9.381,0,16.991,7.601,16.991,16.983l0,0c0,9.366-7.609,16.983-16.991,16.983H161.894z"></path> <path style="fill:#F9BDA0;" d="M158.736,404.854c-9.381,0-16.983-7.601-16.983-16.983l0,0c0-9.366,7.601-16.967,16.983-16.967 h138.169c9.389,0,16.983,7.601,16.983,16.967l0,0c0,9.381-7.593,16.983-16.983,16.983H158.736z"></path> <path style="fill:#F9BDA0;" d="M152.474,340.303c-9.381,0-16.991-7.601-16.991-16.983l0,0c0-9.366,7.609-16.967,16.991-16.967 h138.201c9.366,0,16.967,7.601,16.967,16.967l0,0c0,9.381-7.601,16.983-16.967,16.983H152.474z"></path> <path style="fill:#F9BDA0;" d="M185.36,291.316l-31.13-17.258c-2.765,0-2.095,4.955-7.712,15.833 c-11.083,13.69-30.074,38.558-30.074,38.558l44.386-5.12c0,0,34.257-7.491,24.899-23.631 C183.997,296.704,186.896,293.687,185.36,291.316z"></path> </g> <rect x="109.536" y="308.488" style="fill:#102D35;" width="20.645" height="119.863"></rect> <polyline points="109.536,308.488 130.182,308.488 130.182,428.351 "></polyline> <rect y="297.114" style="fill:#105FA0;" width="115.704" height="138.461"></rect> <polyline style="fill:#093A56;" points="0,297.106 115.704,297.106 115.704,435.566 "></polyline> <g> <circle style="fill:#4097D3;" cx="76.965" cy="366.352" r="11.366"></circle> <circle style="fill:#4097D3;" cx="27.317" cy="366.352" r="11.366"></circle> </g> <polygon style="fill:#C63205;" points="100.021,276.996 397.091,337.64 397.091,82.964 100.021,143.592 "></polygon> <polygon style="fill:#FF3817;" points="370.294,168.862 130.458,168.862 130.458,156.731 370.294,120.348 "></polygon> <g> <path style="fill:#D32A0F;" d="M114.011,276.996c-0.008,7.956-5.593,14.399-12.469,14.399l0,0c-6.892,0-12.477-6.443-12.477-14.399 l-0.008-133.404c0.008-7.956,5.593-14.399,12.485-14.399l0,0c6.877,0,12.485,6.459,12.469,14.399V276.996z"></path> <path style="fill:#D32A0F;" d="M414.736,337.64c-0.016,7.94-5.585,14.399-12.477,14.399l0,0c-6.877,0-12.485-6.459-12.485-14.415 V82.964c-0.008-7.956,5.593-14.415,12.469-14.415l0,0c6.908,0,12.493,6.459,12.493,14.415V337.64z"></path> <polygon style="fill:#D32A0F;" points="397.076,84.98 397.091,82.964 387.206,84.98 "></polygon> </g> <polygon style="fill:#AA2102;" points="100.029,221.424 100.021,276.996 397.091,337.64 397.076,221.408 "></polygon> <g> <path style="fill:#F29233;" d="M450.914,214.563c-2.363,0-4.301-1.922-4.293-4.309l0,0c-0.008-2.355,1.93-4.277,4.293-4.277h48.916 c2.371,0,4.293,1.906,4.293,4.277l0,0c0,2.387-1.922,4.309-4.293,4.309H450.914z"></path> <path style="fill:#F29233;" d="M441.494,245.583c-1.678-1.662-1.678-4.403,0.008-6.073l0,0c1.67-1.662,4.403-1.662,6.073,0 l34.588,34.588c1.67,1.678,1.67,4.403,0,6.089l0,0c-1.678,1.662-4.403,1.662-6.073,0L441.494,245.583z"></path> <path style="fill:#F29233;" d="M441.502,174.966c-1.686,1.662-1.686,4.387,0,6.065l0,0c1.67,1.678,4.395,1.678,6.073,0 l34.588-34.588c1.67-1.662,1.67-4.403,0.016-6.073l0,0c-1.694-1.678-4.419-1.678-6.089,0L441.502,174.966z"></path> </g> </g></svg></span><?=$ns['title'];?>
                            </h6>
                        </div>
                        <div class="card-body">
                            <!--<p class="text-muted"></p>-->
                            <p class="text-muted mb-0"><?=$ns['news'];?></p>
                        </div>
                        <div class="card-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <a href="javasceript:void(0);" class="btn btn-primary btn-sm">Read More</a>
                            </div>
                        </div>
                    </div>
              <?php }
              }else{
              ?>      
              <div class="text-center"> No News to show.</div>
              <?php } ?>
                </div><!-- end col -->
         </div><!-- end row -->
    
    
<!--    $user_id = $this->session->userdata('user_id');-->
<!--$this->db->select('*');-->
<!--$this->db->from('news');-->
<!--$this->db->where('viewers NOT LIKE', '%~'.$user_id.'~%');-->
<!--$query = $this->db->get();-->
    
    
</div>    
    



  <!-- Masonry plugin -->
    <script src="<?=BASEURL?>assets/libs/masonry-layout/masonry.pkgd.min.js"></script>

    <script src="<?=BASEURL?>assets/js/pages/card.init.js"></script>

    <!-- App js -->
    <script src="<?=BASEURL?>assets/js/app.js"></script>



<?php include 'footer.php';?>