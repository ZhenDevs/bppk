<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="icon" href="/foto/logo.png" type="image/png">
    <title>Presensi - BPPK</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    <style>
    .sidebar{
    height: 105vh;
    min-height: 500px;
    width: 60px;
    position: fixed;
    top: 0;
    left: 0;
    background-color: #16191e;
    overflow: hidden;
    transition: width 0.2s;
    z-index: 1000;
}
.sidebar a {
    color: #ffffff;
    text-decoration: none;
}
.sidebar:hover{
    width: 160px;
    overflow: visible;
}
img.logo{
    width: 50px;
    padding: 0 4px;
    margin: 30px 0;
}
nav{
    height: 60vh;
    min-height: 300px;
}
ul{
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
}
li a{
    width: 160px;
    display: flex;
    align-items: center;
    justify-content: space-around;
    text-decoration: none;
    padding: 10px 0;
    font-family: 'Poppins',sans-serif;
    color: #cacaca;
}
li a:hover{
    background-image: linear-gradient(
        to right,
        #2a88e6 7px,
        rgba(255,255,255,0.1) 7px
    );
    color: #ffffff;
}
i.fas{
    font-size: 20px;
    text-align: right;
}
li p{
    width: 75px;
    font-size: 16px;
    text-align: left;
    letter-spacing: 0.3px;
}

      @media (min-width: 768px) {
        .blog-content {
          text-align: left;
          margin-left: 100px;
          margin-right: -200px;
          margin-bottom: 20px;
        }
      }

  .navbar-brand img {
           height: 40px;
            width: auto;
            margin-right: 5px;
        }
        .navbar-brand {
  display: flex;
  align-items: center;
}
    </style>

  </head>

<body>



  <!-- navbar -->
<div class="sidebar">
        <div class="logo">
            <a href="#">
                <img src="https://4.bp.blogspot.com/-gfDReKw330k/VP93v41IrgI/AAAAAAAAADw/NWMb3UdAtFo/s1600/BPPK%2BFull%2BColor%2BTransparan.png" alt="logo" class="logo"></a>
        </div>
        <nav>
            <ul>
                <li>
                    <a href="/home">
                        <i class="fa-solid fa-house" style="color: #ffffff;"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li>
                    <a href="/proker">
                        <i class="fa-solid fa-bookmark" style="color: #ffffff;"></i>
                        <p>Proker</p>
                    </a>
                </li>
                <li>
                    <a href="/about">
                        <i class="fas fa-user"></i>
                        <p>About</p>
                    </a>
                </li>
                    <li>
                    <a href="/presensi">
                      <i class="fa-solid fa-ticket" style="color: #ffffff;"></i>
                      <p>Presensi</p>
                    </a>
                  </li>
                <li>
                  <a href="mailto:stembayo.bppk@gmail.com">
                    <i class="fa-solid fa-address-book" style="color: #ffffff;"></i>
                    <p>Contact</p>
                  </a>
                  </li>
            </ul>
        </nav>
    </div>
  <!-- ***** Header Area End ***** -->

 <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">

          <!-- ***** Banner Start *****
          <div class="main-banner">
            <div class="row">
              <div class="col-lg-7">
                <div class="header-text">
                  <h6>Welcome To Cyborg</h6>
                  <h4><em>Browse</em> Our Popular Games Here</h4>
                  <div class="main-button">
                    <a href="browse.html">Browse Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          ***** Banner End ***** -->
          <!-- ***** Most Popular Start ***** -->
          <div class="most-popular">
            <div class="row">
              <div class="col-lg-12">
                <div class="heading-section">
                  <h4><em>Presensi ekstra</em></h4>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-sm-6">
                    <div class="item" onclick="karista()">
                       <img src="assets/images/popular-01.jpg" alt="" width="100px" height="145px">
                      <h4>KARISTA<br><span>Ekstrakurikuler</span></h4>
                      <ul>
                       <!-- <li><i class="fa fa-star"></i> 4.8</li>
                        <li><i class="fa fa-download"></i> 2.3M</li> -->
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="item" onclick="snb()">
                      <img src="../foto/ekstra/snb.jpg" alt="" width="100px" height="145px">
                      <h4>SNB<br><span>Ekstrakurikuler</span></h4>
                      <ul>
                     <!--   <li><i class="fa fa-star"></i> 4.8</li>
                        <li><i class="fa fa-download"></i> 2.3M</li> -->
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="item" onclick="sdf()">
                      <img src="../foto/ekstra/sdf.jpg" alt="" width="100px" height="145px">
                      <h4>SDF<br><span>Ekstrakurikuler</span></h4>
                      <ul>
                   <!--     <li><i class="fa fa-star"></i> 4.8</li>
                        <li><i class="fa fa-download"></i> 2.3M</li> -->
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                   <div class="item" onclick="jurnalistik()">
                      <img src="../foto/ekstra/jurnal.jpg" alt="" width="100px" height="145px">
                      <h4>JURNALISTIK<br><span>Ekstrakurikuler</span></h4>
                      <ul>
                    <!--    <li><i class="fa fa-star"></i> 4.8</li>
                        <li><i class="fa fa-download"></i> 2.3M</li> -->
                      </ul>
                    </div>
                  </div>
            <!--      <div class="col-lg-6">
                    <div class="item">
                      <div class="row">
                        <div class="col-lg-6 col-sm-6">
                          <div class="item inner-item">
                            <img src="assets/images/popular-05.jpg" alt="">
                            <h4>Mini Craft<br><span>Legendary</span></h4>
                            <ul>
                              <li><i class="fa fa-star"></i> 4.8</li>
                              <li><i class="fa fa-download"></i> 2.3M</li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                          <div class="item">
                            <img src="assets/images/popular-06.jpg" alt="">
                            <h4>Eagles Fly<br><span>Matrix Games</span></h4>
                            <ul>
                              <li><i class="fa fa-star"></i> 4.8</li>
                              <li><i class="fa fa-download"></i> 2.3M</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                      <img src="assets/images/popular-07.jpg" alt="">
                      <h4>Warface<br><span>Max 3D</span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i> 4.8</li>
                        <li><i class="fa fa-download"></i> 2.3M</li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                      <img src="assets/images/popular-08.jpg" alt="">
                      <h4>Warcraft<br><span>Legend</span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i> 4.8</li>
                        <li><i class="fa fa-download"></i> 2.3M</li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="main-button">
                      <a href="browse.html">Discover Popular</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
           ***** Most Popular End ***** -->

          <!-- ***** Gaming Library Start *****
          <div class="gaming-library">
            <div class="col-lg-12">
              <div class="heading-section">
                <h4><em>Your Gaming</em> Library</h4>
              </div>
              <div class="item">
                <ul>
                  <li><img src="assets/images/game-01.jpg" alt="" class="templatemo-item"></li>
                  <li><h4>Dota 2</h4><span>Sandbox</span></li>
                  <li><h4>Date Added</h4><span>24/08/2036</span></li>
                  <li><h4>Hours Played</h4><span>634 H 22 Mins</span></li>
                  <li><h4>Currently</h4><span>Downloaded</span></li>
                  <li><div class="main-border-button border-no-active"><a href="#">Donwloaded</a></div></li>
                </ul>
              </div>
              <div class="item">
                <ul>
                  <li><img src="assets/images/game-02.jpg" alt="" class="templatemo-item"></li>
                  <li><h4>Fortnite</h4><span>Sandbox</span></li>
                  <li><h4>Date Added</h4><span>22/06/2036</span></li>
                  <li><h4>Hours Played</h4><span>740 H 52 Mins</span></li>
                  <li><h4>Currently</h4><span>Downloaded</span></li>
                  <li><div class="main-border-button"><a href="#">Donwload</a></div></li>
                </ul>
              </div>
              <div class="item last-item">
                <ul>
                  <li><img src="assets/images/game-03.jpg" alt="" class="templatemo-item"></li>
                  <li><h4>CS-GO</h4><span>Sandbox</span></li>
                  <li><h4>Date Added</h4><span>21/04/2036</span></li>
                  <li><h4>Hours Played</h4><span>892 H 14 Mins</span></li>
                  <li><h4>Currently</h4><span>Downloaded</span></li>
                  <li><div class="main-border-button border-no-active"><a href="#">Donwloaded</a></div></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="main-button">
                <a href="profile.html">View Your Library</a>
              </div>
            </div>
          </div>
           ***** Gaming Library End *****
        </div>
      </div>
    </div>
  </div> -->



  <!-- Scripts -->
  <script>
  function karista() {
    window.location.href = '/presensi/karista';
  }
  function snb() {
    window.location.href = '/presensi/snb';
  }
  function sdf() {
    window.location.href = '/presensi/sdf';
  }
  function jurnalistik() {
    window.location.href = '/presensi/jurnalistik';
  }
  </script>
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>


  </body>

</html>