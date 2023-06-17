  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg  navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="index.php?page=home"><img src="#" max-width="150px" height="100px"> </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item <?php if(@$_GET['page'] == 'home') { echo "active"; }?>">
            <a class="nav-link" href="index.php?page=home"><h5><i class="fas fa-home"></i> หน้าแรก </a>
          </li>
          <li class="nav-item <?php if(@$_GET['page'] == 'shopping') { echo "active"; }?>">
            <a class="nav-link" href="shop.php?page=shopping"><h5><i class="fas fa-store"></i> สินค้าคอมประกอบ</a>
          </li>
          <li class="nav-item <?php if(@$_GET['page'] == 'shopping') { echo "active"; }?>">
            <a class="nav-link" href="shop.php?page=shopping"><h5><i class="fas fa-store"></i> สินค้าและอุปกรณ์ต่างๆ</a>
          </li>
          <li class="nav-item <?php if(@$_GET['page'] == 'payinfo') { echo "active"; }?>">
            <a class="nav-link" href="cpayment.php?page=payinfo"><h5><i class="fas fa-comment-dollar"></i> แจ้งชำระเงิน</a>
          </li>
          <li class="nav-item <?php if(@$_GET['page'] == 'cont') { echo "active"; }?>">
            <a class="nav-link" href="contact.php?page=cont"><h5><i class="fas fa-phone"></i> ติดต่อ</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>