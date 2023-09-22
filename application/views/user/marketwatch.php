<?php include 'header.php';?>

<style>
  .currency-title{
      color: #20604f;
      font-size: 23px;
    font-weight: 700;
    background-color: #edf7ff;
    width: 100%;
    padding:4px;
    border:1px solid #ced4da;
    /*border-bottom:none;*/
  }
  .market-container{
      font-family: 'Barlow', sans-serif !important;
  }
  .page-content{
      margin-top:-7px !important;
  }
  /*.marquee-widget{*/
  /*    margin-top:-5px !important;*/
  /*}*/
  .m-watch-container{
      margin-top:-14px !important;
  }
  .m-watch-container2{
      margin-top:17px !important;
  }
  .tradingview-widget-container{
      width:100% !important;
  }
  iframe{
      width:100% !important;
  }
  @media screen and (max-width:991px){
      .tech-summary-widget{
          margin-top:17px !important;
      }
  }
  .tech-summary-widget iframe{
      height:450px !important;
  }
  .tech-summary-widget .col-lg-5-container{
      height:450px !important;
  }
</style>

<div class="row market-container">
    
      <div class="col-lg-12  mt-0 mb-0 pb-0">
                     <div class="card-header d-flex justify-content-center mb-3">
                         <div class="mb-0 text-center currency-title">Market Watch</div>
                     </div>
                   <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                                          <div class="tradingview-widget-container__widget"></div>
                                          <div class="tradingview-widget-copyright d-none"><a href="https://in.tradingview.com/markets/" rel="noopener" target="_blank">
                                              <span class="blue-text">Markets today</span></a> by Square Markets.
                                              </div>
                                          <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                                          {
                                          "symbols": [
                                            {
                                              "proName": "FOREXCOM:SPXUSD",
                                              "title": "S&P 500"
                                            },
                                            {
                                              "proName": "FOREXCOM:NSXUSD",
                                              "title": "US 100"
                                            },
                                            {
                                              "proName": "FX_IDC:EURUSD",
                                              "title": "EUR/USD"
                                            },
                                            {
                                              "proName": "BITSTAMP:BTCUSD",
                                              "title": "Bitcoin"
                                            },
                                            {
                                              "proName": "BITSTAMP:ETHUSD",
                                              "title": "Ethereum"
                                            }
                                          ],
                                          "showSymbolLogo": true,
                                          "colorTheme": "light",
                                          "isTransparent": false,
                                          "displayMode": "compact",
                                          "locale": "in"
                                        }
                                          </script>
                                        </div>
                        <!-- TradingView Widget END -->
                </div>
                
                <div style="padding-right:0px!important" class="row mt-0 pt-0 m-watch-container">
                    <div style="padding-right:0px!important" class="col-lg-7">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                          <div class="tradingview-widget-container__widget"></div>
                          
                          <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
                          {
                          "width": 100%,
                          "height": 450,
                          "symbolsGroups": [
                            {
                              "name": "Indices",
                              "originalName": "Indices",
                              "symbols": [
                                {
                                  "name": "FOREXCOM:DJI",
                                  "displayName": "Dow 30"
                                },
                                {
                                  "name": "INDEX:DEU40",
                                  "displayName": "DAX Index"
                                },
                                {
                                  "name": "EURONEXT:FTSE",
                                  "displayName": "FTSE"
                                }
                              ]
                            },
                            {
                              "name": "Futures",
                              "originalName": "Futures",
                              "symbols": [
                                {
                                  "name": "COMEX:GC1!",
                                  "displayName": "Gold"
                                },
                                {
                                  "name": "MCX:SILVER1!",
                                  "displayName": "Silver"
                                },
                                {
                                  "name": "FAIRX:OILQ2023",
                                  "displayName": "Oil"
                                }
                              ]
                            },
                            {
                              "name": "Bonds",
                              "originalName": "Bonds",
                              "symbols": []
                            },
                            {
                              "name": "Forex",
                              "originalName": "Forex",
                              "symbols": [
                                {
                                  "name": "FX:EURUSD",
                                  "displayName": "EUR/USD"
                                },
                                {
                                  "name": "FX:GBPUSD",
                                  "displayName": "GBP/USD"
                                },
                                {
                                  "name": "FX:USDJPY",
                                  "displayName": "USD/JPY"
                                },
                                {
                                  "name": "FX:USDCHF",
                                  "displayName": "USD/CHF"
                                },
                                {
                                  "name": "FX:AUDUSD",
                                  "displayName": "AUD/USD"
                                },
                                {
                                  "name": "FX:USDCAD",
                                  "displayName": "USD/CAD"
                                }
                              ]
                            }
                          ],
                          "showSymbolLogo": true,
                          "colorTheme": "light",
                          "isTransparent": false,
                          "locale": "in"
                        }
                          </script>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>
                    <div style="padding-right:0px!important" class="col-lg-5 tech-summary-widget">
                         <!-- TradingView Widget BEGIN -->
                        <div style="height:450px;" class="tradingview-widget-container col-lg-5-container">
                          <div class="tradingview-widget-container__widget"></div>
                          <!--<div class="tradingview-widget-copyright"><a href="https://in.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span>-->
                          <!--</a></div>-->
                          <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-timeline.js" async>
                          {
                          "feedMode": "all_symbols",
                          "colorTheme": "light",
                          "isTransparent": false,
                          "displayMode": "regular",
                          "width": 100%,
                          "height": 450,
                          "locale": "in"
                        }
                          </script>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>
                     <div style="padding-right:0px !important" class="col-lg-12 m-watch-container2">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                          <div class="tradingview-widget-container__widget"></div>
                          <!--<div class="tradingview-widget-copyright">-->
                          <!--    <a href="https://in.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a>-->
                          <!--    </div>-->
                          <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>
                          {
                          "width": 100%,
                          "height": 450,
                          "currencies": [
                            "EUR",
                            "USD",
                            "JPY",
                            "GBP",
                            "CHF",
                            "AUD",
                            "CAD",
                            "NZD"
                          ],
                          "isTransparent": false,
                          "colorTheme": "light",
                          "locale": "in"
                        }
                          </script>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>
                </div>
</div>






<?php include 'footer.php';?>