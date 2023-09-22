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
    /*margin-right: 12px!important;*/
    /*margin-left: 12px!important;*/
    /*border-bottom:none;*/
  }
  .calender-container{
      font-family: 'Barlow', sans-serif !important;
  }
  .tradingview-widget-container,iframe{
      height:100vh !important;
      width:100% !important;
  }
  .page-content{
      margin-top:-6px !important;
  }
  .inlineblock {
    width: 100%;
}
@media screen and (min-width:768px){
    .economic-col{
        padding-right:1px !important;
    }
}
@media screen and (max-width:767px){
    .economic-col{
        margin-bottom:15px !important;
    }
}
</style>
<div class="row calender-container">
     
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 economic-col">
                   <div class="card-header d-flex justify-content-center">
                         <div class="mb-0 text-center currency-title">Economic Calendar</div>
                     </div>
                   <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                        <!--     <div id="economicCalendarWidget"></div>-->
                        <!--<script async type="text/javascript" data-type="calendar-widget" src="https://www.tradays.com/c/js/widgets/calendar/widget.js?v=12">-->
                        <!--  {"width":"100%","height":"500","mode":"1","lang":"en"}-->
                        <!--</script>-->
                       <iframe src="https://sslecal2.investing.com?columns=exc_flags,exc_currency,exc_importance,exc_actual,exc_forecast,exc_previous&features=datepicker,timezone&countries=25,32,6,37,72,22,17,39,14,10,35,43,56,36,110,11,26,12,4,5&calType=day&timeZone=23&lang=1" width="100%" height="100%" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0"></iframe>
                       <!--<div class="poweredBy" style="font-family: Arial, Helvetica, sans-serif;"><span style="font-size: 11px;color: #333333;text-decoration: none;">Real Time Economic Calendar provided by <a href="https://www.investing.com/" rel="nofollow" target="_blank" style="font-size: 11px;color: #06529D; font-weight: bold;" class="underline_link">Investing.com</a>.</span></div>-->
                        </div>
                        <!-- TradingView Widget END -->
                        
                </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="card-header d-flex justify-content-center">
                         <div class="mb-0 text-center currency-title">National Holidays Calendar</div>
                     </div>
                <script type="text/javascript">DukascopyApplet = {"type":"holiday_calendar","params":{"showHeader":false,"tableBorderColor":"#D92626","showPastItems":false,"defaultRegion":0,"width":"100%","height":"100%","adv":"popup"}};</script><script type="text/javascript" src="https://freeserv-static.dukascopy.com/2.0/core.js"></script>
            </div>    
    
</div>






<?php include 'footer.php';?>