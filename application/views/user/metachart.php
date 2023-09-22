<?php include 'header.php';?>







<div class="container-fluid">


    <div class="section-full"> 
                    <div class="row mb-3 mt-1"> 
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

</div>






<?php include 'footer.php';?>