<?php include 'header.php';?>

    <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper" style="background-image: url(images/banner/about-banner.jpg);height: 78px;">
                <div class="overlay-main bg-black opacity-07"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <h1 class="text-white">&nbsp; </h1>
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END --> 
                
            <!-- BREADCRUMB ROW -->                            
             <!-- BREADCRUMB  ROW END --> 
            
            <!-- ABOUT COMPANY SECTION START -->
            <div class="section-full"> 
                    <div class="row"> 
                            <div class="text-center">
                                  <div id="webterminal" style="width:100%;height:715px;"></div>
                                <script type="text/javascript" src="https://trade.mql5.com/trade/widget.js"></script>
                                <script type="text/javascript">
                                    new MetaTraderWebTerminal("webterminal", {
                                        version: 5,
                                        servers: ["SquareFX-Demo", "SquareFX-Live"],
                                        server: "SquareFX-Demo",
                                        demoAllServers: true,
                                        utmSource: "www.squarefx.uk",
                                        startMode: "create_demo",
                                        language: "en",
                                        colorScheme: "black_on_white"
                                    });
                                </script>
                            </div>
                        
                    </div> 
            </div>   
            <!-- ABOUT COMPANY SECTION END -->  
            
            <?php include 'footer.php';?>
