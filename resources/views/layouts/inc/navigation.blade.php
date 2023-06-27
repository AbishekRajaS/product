<!--Main Navigation-->
<style>



  /* Carousel styling */
#introCarousel,
.carousel-inner,
.carousel-item,
.carousel-item.active {
  height: 100vh;
}

.carousel-item:nth-child(1) {
  background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
}

.carousel-item:nth-child(2) {
  background-image: url('https://mdbootstrap.com/img/Photos/Others/images/77.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
}

.carousel-item:nth-child(3) {
  background-image: url('https://mdbootstrap.com/img/Photos/Others/images/78.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
}

/* Height for devices larger than 576px */
@media (min-width: 992px) {
  #introCarousel {
    margin-top: -58.59px;
  }
}

.navbar .nav-link {
  color: #fff !important;
}
</style>
<header>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000;">
    <div class="container-fluid">
      <!-- Navbar brand -->
    
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
        aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarExample01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li>
            <h1></h1>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('login')}}" rel="nofollow"
              target="_blank">Login</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="https://mdbootstrap.com/docs/standard/" target="_blank">Download MDB UI KIT</a>
          </li> -->
        </ul>

        <ul class="navbar-nav list-inline">
          <!-- Icons -->
          <li class="">
            <a class="nav-link" href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA" rel="nofollow"
              target="_blank">
              <i class="fab fa-youtube"></i>
            </a>
          </li>
          <li class="">
            <a class="nav-link" href="https://www.facebook.com/mdbootstrap" rel="nofollow" target="_blank">
              <i class="fab fa-facebook-f"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://twitter.com/MDBootstrap" rel="nofollow" target="_blank">
              <i class="fab fa-twitter"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://github.com/mdbootstrap/mdb-ui-kit" rel="nofollow" target="_blank">
              <i class="fab fa-github"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->

  <!-- Carousel wrapper -->
  <div id="introCarousel" class="carousel slide carousel-fade shadow-2-strong" data-mdb-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-mdb-target="#introCarousel" data-mdb-slide-to="0" class="active"></li>
      <li data-mdb-target="#introCarousel" data-mdb-slide-to="1"></li>
      <li data-mdb-target="#introCarousel" data-mdb-slide-to="2"></li>
    </ol>

    <!-- Inner -->
    <div class="carousel-inner">
      <!-- Single item -->
      <div class="carousel-item active">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
          <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white text-center">
            </div>
          </div>
        </div>
      </div>

     
     

    
  <!-- Carousel wrapper -->
</header>