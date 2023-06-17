<?php
if(@$_GET['page'] == 'home');
require_once('_inc/header.php'); //Header


?>
<body>
<?php
require_once('_inc/nav.php'); //Navbar
?>
  <center>
      </div></center>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <p class="lead"></p>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://media.discordapp.net/attachments/844252912879927366/881695875846533140/1630283056383.png?width=1440&height=574" class="d-block w-100" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <div class="alert alert-light shadow-lg p-3 mb-5 bg-white rounded" role="alert">
          <h2 class="alert-heading">ยินดีต้อนรับเข้าสู่ แหล่งรวมป้าย</h2>
          <h4>ขายคอมราคาถูก ประหยัด ปลอดภัย  พร้อมบริการดูแลคอมท่านอยู่เสมอ</h4>
          <h4>พร้อมให้บริการดูแลและติดตั้ง ตั้งแต่ต้นจนจบ และพร้อมให้คำปรึกษาฟรี! </h4>
          <hr>
          <h5 class="mb-0">หากพบปัญหา กรุณาติดต่อ DB</h3>
        </div>
        <center>
        <div id="cd" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./img/2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="./img/3.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="./img/4.jpg" height="624px"class="d-block w-100" alt="...">
            </div>
          <div class="carousel-item">
              <img src="./img/5.jpg" height="624px"class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="./img/6.jpg" height="624px"class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="./img/7.jpg" height="624px"class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="./img/8.jpg" height="624px"class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="./img/9.jpg" height="624px"class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="./img/10.jpg" height="624px"class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="./img/11.jpg" height="624px"class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="./img/12.jpg" height="624px"class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="./img/13.jpg" height="624px"class="d-block w-100" alt="...">
            </div>
          
          
          <a class="carousel-control-prev" href="#cd" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#cd" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        </div>
        <div class="alert alert-light shadow-lg p-3 mb-5 bg-white rounded" role="alert">
        <h2 class="alert-heading">พนักงานและการทำงานของร้าน</h2>
        <h4>การทำงานของพนักงานร้านเรา มืออาชีพ</h4>
        <h4>พร้อมให้บริการดูแลและติดตั้ง ตลอดเวลา</h4>
        <hr>
          <h5 class="mb-0">หากพบปัญหา กรุณาติดต่อ ADsign </h5>
        </div>
        <a class="btn btn-warning btn-lg btn-block" href="shop.php?page=shopping" role="button"><h3><font color="#FFFFFF"><i class="fas fa-sign-in-alt"></i><font color="#FFFFFF"> ชมสินค้า</h3></a></font></font>
         
      </div>
    </div>
  </div>


<?php
  require_once('_inc/footer.php');
?>
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
