@extends('layouts.appfront')

@section('content')
  <link href="/css/responsive-calendar.css" rel="stylesheet">
<div class="container" >
<div class="col-sm-5">
            <h2 class=" linea text-dark text-right" style="font-family:LemonMilk;"><span>Eventos</span></h2>
            </div>

      <!-- Responsive calendar - START -->
    	<div class="responsive-calendar">
        <div class="controls">
            <a class="" data-go="prev"><div class="btn btn-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-left" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M8.354 1.646a.5.5 0 0 1 0 .708L2.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
              <path fill-rule="evenodd" d="M12.354 1.646a.5.5 0 0 1 0 .708L6.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
            </svg></div></a>
            <h4><span data-head-month style="font-family:LemonMilk;"></span> <span data-head-year style="font-family:LemonMilk;"></span></h4>
            <a class="" data-go="next"><div class="btn btn-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
              <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
            </svg></div></a>
        </div><hr/>
     
        <table class="days" data-group="days" style="text-align: center; width: 100%; font-family:LemonMilk;">
          
        </table>
      </div>
      <!-- Responsive calendar - END -->
    </div>
    <!-- <script src="/js/jquery.js"></script> -->
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/responsive-calendar.js"></script>
    <script type="text/javascript">
      $(document).ready(function () {
        var d = new Date();
          var m = d.getMonth() + 1;
          var y = d.getFullYear();
        $(".responsive-calendar").responsiveCalendar({
          time: y+'-'+m,
          events: {
            "2021-06-30": {"number": 5, "url": "http://w3widgets.com/responsive-slider"},
            "2021-06-26": {"number": 1, "url": "http://w3widgets.com"}, 
            "2021-05-03":{"number": 1}, 
            "2021-06-12": {}}
        });


        $.ajax({
        url: "{{'eventos'}}",
        data: 'hola',
        dataType: 'json',
        success: function(result)
        {
            if (result['result'] == 'ok')
            {

            }
            else
            {

            }
        },
        fail: function(){
        },
        beforeSend: function(){
        }
    });
});




    </script>
@endsection