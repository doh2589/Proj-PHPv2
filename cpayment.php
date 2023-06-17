<?php
if(@$_GET['page'] == 'payinfo')
require_once('_inc/header.php'); //Header
?>
<body>
<?php
require_once('_inc/nav.php'); //Navbar
?>

<style>
@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');

*,
*:after,
*:before {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}

.clearfix:before,
.clearfix:after {
	content: " ";
	display: table;
}

.clearfix:after {
	clear: both;
}

body {
	font-family: sans-serif;
	background: #f6f9fa;
}

h1 {
	color: #000000;
	text-align: center;
}

a {
  color: #000000;
  text-decoration: none;
  outline: none;
}

/*Fun begins*/
.tab_container {
	width: 90%;
	margin: 0 auto;
	padding-top: 70px;
	position: relative;
}

input, section {
  clear: both;
  padding-top: 10px;
  display: none;
}

label {
  font-weight: 700;
  font-size: 18px;
  display: block;
  float: left;
  width: 20%;
  padding: 1.5em;
  color: #757575;
  cursor: pointer;
  text-decoration: none;
  text-align: center;
  background: #CCFFFF;
}

#tab1:checked ~ #content1,
#tab2:checked ~ #content2,
#tab3:checked ~ #content3,
#tab4:checked ~ #content4,
#tab5:checked ~ #content5 {
  display: block;
  padding: 20px;
  background: #33CCFF;
  color: #999;
  border-bottom: 5px solid #000000;
}

.tab_container .tab-content p,
.tab_container .tab-content h3 {
  -webkit-animation: fadeInScale 0.7s ease-in-out;
  -moz-animation: fadeInScale 0.7s ease-in-out;
  animation: fadeInScale 0.7s ease-in-out;
}
.tab_container .tab-content h3  {
  text-align: center;
}

.tab_container [id^="tab"]:checked + label {
  background: #fff;
  box-shadow: inset 0 3px #0CE;
}

.tab_container [id^="tab"]:checked + label .fa {
  color: #0CE;
}

label .fa {
  font-size: 1.3em;
  margin: 0 0.4em 0 0;
}

/*Media query*/
@media only screen and (max-width: 900px) {
  label span {
    display: none;
  }
  
  .tab_container {
    width: 98%;
  }
}

/*Content Animation*/
@keyframes fadeInScale {
  0% {
  	transform: scale(0.9);
  	opacity: 0;
  }
  
  100% {
  	transform: scale(1);
  	opacity: 1;
  }
}

.no_wrap {
  text-align:center;
  color: #0ce;
}
.link {
  text-align:center;
}


</style>

<center>
<h1><font color="#oooooo">แจ้งชำระเงิน</h1>
		<div class="tab_container">
			<input id="tab1" type="radio" name="tabs" checked>
			<label for="tab1"><img src="./img/บริการ.png"width="100" height="100"><span> บัญชีที่ 1 </span></label>

			<input id="tab2" type="radio" name="tabs">
			<label for="tab2"><img src="./img/บัญชี.png"width="100" height="100"><span> บัญชีที่ 2 </span></label>

			<input id="tab3" type="radio" name="tabs">
			<label for="tab3"><img src="./img/เงิน.png"width="100" height="100"><span>แจ้งชำระเงิน</span></label>
			<section id="content1" class="tab-content">
		<img src="./img/บัญชี.png" width="250" height="250">
    <br>
    <br>
		      	<h5><font color=”#000000>ชื่อบัญชี ประสาตร์</h5></font>
		      	<h5><font color=”#000000>เลขบัญชี<br>4222-613006</font></h5>
			</section>

			<section id="content2" class="tab-content">
      <img src="./img/บัญชี.png" width="250" height="250">
      <br>
      <br>
      <h5><font color=”#000000>ชื่อบัญชี ชนวิทย์</h5></font>
		  <h5><h5><font color=”#000000>เลขบัญชี<br>037-1-42237-4</h5></font>
			</section>

			<section id="content3" class="tab-content">
      <img src="./img/บริการ.png" width="250" height="250">
		      	<h5><font color=”#000000>แจ้งชำระเงิน</h5></font>
		      	<h5><font color=”#000000>แจ้งชำระเงิน ผ่านLine @adsign shop หรือคลิกที่ลิ้ง</font> <a href="buysale.php"><font color=”#FFD700>คลิก</a></font></h5>
			</section>
		</div>
    </center>


<br><br><br><br><br><br><br><br><br><br><br><br>
  <?php require_once('_inc/footer.php'); //footer ?>
  <!-- Bootstrap core JavaScript -->

  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
