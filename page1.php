
<!DOCTYPE html>
<html>
<head>
    <title>Evo Event Calendar Example</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/evo-calendar.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
</head>
<style>
    main {
        padding: 20px;
       
    }
    h1 {
        color: #755eb5;
    }
    h1 span {
        color: #616161;
    }
    hr {
        margin-bottom: 20px;
    }
    @media only screen and (max-width: 425px) {
        main {
            padding: 10px;
        }
    }
</style>
<body>



</script>
<script type="text/javascript"
src="https://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
<div class="jquery-script-clear"></div>
</div>
</div>
   
        <div id="evoCalendar"></div>
        
        
   <br>
    <div class ="container "><button type="button" style="margin-left:auto;margin-right:auto;display:block;margin-top:1px;margin-bottom:0%" id = "add_bt">
   mybuttonname
</button> </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha384-vk5WoKIaW/vJyUAd9n/wmopsmNhiy+L2Z+SBxGYnUkunIxVxAv/UtMOhba/xskxh" crossorigin="anonymous"></script>
    <script src="js/evo-calendar.js"></script>
    <script>
        $('#evoCalendar').evoCalendar({
            todayHighlight: true,
            sidebarToggler: true,
            eventListToggler: true,
            canAddEvent: false,
            calendarEvents: [
                { name: "New Year", date: "Wed Jan 01 2020 00:00:00 GMT-0800 (Pacific Standard Time)", type: "holiday", everyYear: true },
                { name: "Valentine's Day", date: "Fri Feb 14 2020 00:00:00 GMT-0800 (Pacific Standard Time)", type: "holiday", everyYear: true },
                { name: "Patient #1", date: "October/3/2021", type: "event" },
                { name: "Patient #3", date: "October/3/2021", type: "event" },
                { name: "Patient #4", date: "October/3/2021", type: "event" },
                { name: "Holiday #3", date: "October/3/2021", type: "holiday" },
                { name: "Birthday #2", date: "October/3/2021", type: "birthday" },
                { name: "Author's Birthday", date: "October/15/2021", type: "birthday", everyYear: true },
                { name: "Holiday #4", date: "October/15/2021", type: "event" },
                { name: "Patient #2", date: "October/8/2021", type: "event" },
                { name: "Leap day", date: "October29/2021", type: "holiday", everyYear: true }
            ],
            onSelectDate: function() {
                 console.log('onSelectDate!')
            },
            onAddEvent: function() {
                console.log('onAddEvent!')
            }
        });
        // $("#evoCalendar").evoCalendar('addCalendarEvent', [...]);
    </script>
    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script>
try {
  fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", { method: 'HEAD', mode: 'no-cors' })).then(function(response) {
    return true;
  }).catch(function(e) {
    var carbonScript = document.createElement("script");
    carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CK7DKKQU&placement=wwwjqueryscriptnet";
    carbonScript.id = "_carbonads_js";
    document.getElementById("carbon-block").appendChild(carbonScript);
  });
} catch (error) {
  console.log(error);
}
</script>

<script>
$("#add_bt").click(function(a) {
       alert("test");
    });

</script>




</body>
</html>