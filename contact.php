<?php
if(@$_GET['page'] == 'cont')
require_once('_inc/header.php'); //Header
?>
<body>
<?php
require_once('_inc/nav.php'); //Navbar
?>


  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 ">
        <center><h1 class="mt-5">
        <i class="material-icons" style="font-size:48px;color">forum</i>
        <i class="material-icons" style="font-size:48px;color">call</i>
        <i class="material-icons" style="font-size:48px;color">mail_outline</i>
        <br>
        ติดต่อเรา
        </h1></center>
        <div class="container">
            <div class="card shadow-lg p-3 mb-5 rounded" style="margin-top:37px; ; background: rgba(0,0,0,0.1) ">
                <div class="card-body">
                   <!-- Just an image -->
                   <div class="d-flex flex-column bd-highlight mb-3">
                    <div class="p-2 bd-highlight">
                    <img src="https://png.pngtree.com/svg/20160617/mail_122991.png" width="60" height="60" alt="">
                    <a href="https://mail.google.com/mail/u/0/#inbox"><?php echo $Emaill ;?><br><hr></a>
                    <img src="https://img.icons8.com/ios/452/line-me.png" width="60" height="60" alt="">
                    <?php echo $Line ;?><br><hr>
                    </div>
                    <div class="p-2 bd-highlight">
                    &nbsp;&nbsp;<img src="https://image.flaticon.com/icons/png/512/33/33702.png" width="40" height="40" alt="">
                    &nbsp;&nbsp;Facebook: <a href="<?php echo $linkFb ; ?>"><?php echo $linkFb ; ?></a><br><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ติดต่อป้ายและพูดคุย สอบถาม แจ้งปัญหา ได้ตลอด 24 ชั่วโมง
                    </div>
                  </div>
    

                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Page Content -->



  <!-- Footer Content -->

<br><br><br><br><br><br><br><br><br><br><br><br>
<?php
  require_once('_inc/footer.php');
?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>