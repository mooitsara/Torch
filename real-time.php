<!DOCTYPE html>
<html>
<head>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <!-- <script src = "https://cdn.firebase.com/js/client/2.4.2/firebase.js"></script> -->
  <!-- <script type = "text/javascript" src = "index.js"></script> -->
	<script type="text/javascript" src="js/bootstrap.js"></script>

  <script type="text/javascript" src="js/daterangepicker.js"></script>
<!-- <script src="https://www.gstatic.com/firebasejs/3.9.0/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyCyKYtA2gSbVMeLPemffb6o5a74MtzPMqw",
    authDomain: "comaid-a00f8.firebaseapp.com",
    databaseURL: "https://comaid-a00f8.firebaseio.com",
    projectId: "comaid-a00f8",
    storageBucket: "comaid-a00f8.appspot.com",
    messagingSenderId: "709683597221"
  };
  firebase.initializeApp(config);
</script> -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <!-- <script src="https://www.gstatic.com/firebasejs/live/3.1/firebase.js"></script> -->
	<link rel="stylesheet" type="text/css" href="css/home.css">

  <!-- <script type="text/javascript" src="js/date.js"></script> -->
  <link rel="stylesheet" type="text/css" href="css/date.css">

	<title></title>
</head>
<body background="images/2.jpg" >
 <div class="sections">
<div class= "container-fluid ">
<div class="row">
<nav class="navbar navbar-default " style="max-width: 100%;">
  <!-- <div class="container-fluid"> -->
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Torch</a>


    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">



				<li>
            <a href="devices.php"> Devices</a>
            </a>
        </li>

        <li>
              <a href="real-time.php" > Real-Time Graph </a>
        </li>


          <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> History <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="historytable.php">Historydata</a></li>
                  <li><a href="index.php">HistoryGraph</a></li>
                </ul>
                </a>
          </li>

        </ul>

      </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <!-- <li><a href="#">Sign In</a></li>
        <li><a href="#">Register</a></li> -->
      </ul>
    </div><!-- /.navbar-collapse -->
  <!-- </div>/.container-fluid -->
</nav>

</div>




<div class="row">
  <div class="col-md-2">


  </div>

  <div class="col-md-8" style="margin-top: -20px">






     <center><h1>Real-Time Graph
     </h1></center>
     <br></br>
  <div class="row">
  		<div class="col-sm-9  "><a href=javascript:history.back(1)><input type="button" value="ย้อนกลับ"></a></div>
      <div class="container">
          <div class="row">

            <div class="col-sm-4">
              <input type="date" id='datepicker'>
            </div>

          </div>
      </div>

			<!-- Styles -->
<style>
#chartdiv {
	width	: 100%;
	height	: 500px;
}
</style>

<!-- Resources -->
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/themes/none.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />

<!-- Chart code -->
<script>
var chartData = generateChartData();

var chart = AmCharts.makeChart("chartdiv", {
    "type": "serial",
    "theme": "none",
    "legend": {
        "useGraphSettings": true
    },
    "dataProvider": chartData,
    "synchronizeGrid":true,
    "valueAxes": [{
        "id":"v1",
        "axisColor": "#FF6600",
        "axisThickness": 2,
        "axisAlpha": 1,
        "position": "left"
    }, {
        "id":"v2",
        "axisColor": "#FCD202",
        "axisThickness": 2,
        "axisAlpha": 1,
        "position": "right"
    }, {
        "id":"v3",
        "axisColor": "#B0DE09",
        "axisThickness": 2,
        "gridAlpha": 0,
        "offset": 50,
        "axisAlpha": 1,
        "position": "left"
    }],
    "graphs": [{
        "valueAxis": "v1",
        "lineColor": "#FF6600",
        "bullet": "round",
        "bulletBorderThickness": 1,
        "hideBulletsCount": 30,
        "title": "red line",
        "valueField": "visits",
		"fillAlphas": 0
    }, {
        "valueAxis": "v2",
        "lineColor": "#00FFFF",
        "bullet": "square",
        "bulletBorderThickness": 1,
        "hideBulletsCount": 30,
        "title": "yellow line",
        "valueField": "hits",
		"fillAlphas": 0
    }, {
        "valueAxis": "v3",
        "lineColor": "#B0DE09",
        "bullet": "triangleUp",
        "bulletBorderThickness": 1,
        "hideBulletsCount": 30,
        "title": "green line",
        "valueField": "views",
		"fillAlphas": 0
    }],
    "chartScrollbar": {},
    "chartCursor": {
        "cursorPosition": "mouse"
    },
    "categoryField": "date",
    "categoryAxis": {
        "parseDates": true,
        "axisColor": "#DADADA",
        "minorGridEnabled": true
    },
    "export": {
    	"enabled": true,
        "position": "bottom-right"
     }
});

chart.addListener("dataUpdated", zoomChart);
zoomChart();


// generate some random data, quite different range
function generateChartData() {
    var chartData = [];
    var firstDate = new Date();
    firstDate.setDate(firstDate.getDate() - 100);

        var visits = 1600;
        var hits = 2900;
        var views = 8700;


    for (var i = 0; i < 100; i++) {
        // we create date objects here. In your data, you can have date strings
        // and then set format of your dates using chart.dataDateFormat property,
        // however when possible, use date objects, as this will speed up chart rendering.
        var newDate = new Date(firstDate);
        newDate.setDate(newDate.getDate() + i);

        visits += Math.round((Math.random()<0.5?1:-1)*Math.random()*10);
        hits += Math.round((Math.random()<0.5?1:-1)*Math.random()*10);
        views += Math.round((Math.random()<0.5?1:-1)*Math.random()*10);


        chartData.push({
            date: newDate,
            visits: visits,
            hits: hits,
            views: views
        });
    }

    return chartData;
}

function zoomChart(){
    chart.zoomToIndexes(chart.dataProvider.length - 20, chart.dataProvider.length - 1);
}

</script>

<!-- HTML -->
<div id="chartdiv"></div>
    </div>
  </div>
</div>
  <div class="col-md-2"></div>
</div>

 </div>

 </div>
</body>
</html>

<script type="text/javascript" src="app.js"></script>
