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




	<br></br>

     <center><h2>Welcome to Data Center Telemetry Robot
     </h2></center>
     <center><h1>"Torch Project" </h1></center>

     <br></br>

     <center><h3>โปรดเลือกช่องทางการดูข้อมูล</h3></center>
     <br><br><br>
<div class="row">
      <center>
        <h4>
       <div class="col-md-4">
         <a href=devices.php><input type="button" value="รับชมข้อมูลตาม Devices"style="width:200px;height:100px"></a>
       </div>

       <div class="col-md-4">
         <a href=real-time.php><input type="button" value="รับชมข้อมูลแบบ Real-Time Graph" style="width:300px;height:100px"></a>
       </div>

       <div class="col-md-4">
         <a href=historytable.php><input type="button" value="รับชมข้อมูลย้อนหลัง" style="width:200px;height:100px"></a>
       </div>
     </h4>
     </center>
</div>
  <div class="col-md-2"></div>
</div>

 </div>

 </div>
</body>
</html>

<script type="text/javascript" src="app.js"></script>
