<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="/foto/logo.png" type="image/png">
    <title>BPPK STEMBAYO</title>
    <!-- Font Awesome Icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap"
      rel="stylesheet"
    />
    <!-- Stylesheet -->
    <style>
    *,
*:before,
*:after{
    padding: 0;
    margin: 0;
}
body {
        font-family: 'Roboto', sans-serif;
        font-size: 16px;
        line-height: 1.6;
        color: #333;
      }

      h1,
      h2,
      h3 {
        font-family: 'Arial', sans-serif;
      }

      a {
        color: #1a0dab;
        text-decoration: none;
      }

      a:hover {
        text-decoration: underline;
      }

        .blog-content {
          text-align: left;
          margin-left: 50px;
          margin-right: -20px;
          margin-bottom: 20px;
        }

      .btn-read-more {
        font-size: 14px;
      }
      
            .button-12 {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 6px 14px;
        font-family: -apple-system, BlinkMacSystemFont, 'Roboto', sans-serif;
        border-radius: 6px;
        border: none;
        background: #6E6D70;
        box-shadow: 0px 0.5px 1px rgba(0, 0, 0, 0.1), inset 0px 0.5px 0.5px rgba(255, 255, 255, 0.5), 0px 0px 0px 0.5px rgba(0, 0, 0, 0.12);
        color: #DFDEDF;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
      }

      .button-12:focus {
        box-shadow: inset 0px 0.8px 0px -0.25px rgba(255, 255, 255, 0.2), 0px 0.5px 1px rgba(0, 0, 0, 0.1), 0px 0px 0px 3.5px rgba(58, 108, 217, 0.5);
        outline: 0;
      }

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
                    <a href="#">
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
        <div id="home" style="padding:20px">
            <!-- ... (Obseva) ... -->
      <div class="container mx-auto mt-4">
        <div class="row">
          <div class="col-lg-8">
            <div class="blog-content" style="background: #fbfbfb; border-radius: 0.15em; box-shadow: 0 2px 3px rgba(0, 0, 0, 0.1); padding: 10px;">
              <h1></h1>
              <p class="text-muted">Oleh BPPK Stembayo - Oktober 14, 2023</p>
              <div class="text-center">
                <img src="foto/obseva-2023.png" class="img-fluid" alt="Obseva" height="250" width="250">
              </div>
              <br>
              <p>Hallo temen-temen BPPK <i class="fa-solid fa-bullhorn"></i> <i class="fa-solid fa-bullhorn"></i><br>BPPK Stembayo comeback lagi nihh dengan event yang seru dan menyenangkan</p>
              <button class="button-12" role="button" onclick="window.open('proker/obseva-14-10-2023', '_blank')">Selengkapnya</button>
              </p>
            </div>
          </div>
        </div>
      </div>
          <!-- ... (MPK) ... -->
      <div class="container mx-auto mt-4">
        <div class="row">
          <div class="col-lg-8">
            <div class="blog-content" style="background: #fbfbfb; border-radius: 0.15em; box-shadow: 0 2px 3px rgba(0, 0, 0, 0.1); padding: 10px;">
              <h1>Musyawarah Program Kerja</h1>
              <p class="text-muted">Oleh BPPK Stembayo - Januari 15, 2020</p>
              <div class="text-center">
                <img src="foto/mpk.jpg" class="img-fluid" alt="Mpk">
              </div>
              <br>
              <p>Rabu, 15 Januari 2020 SMK Negeri 2 Depok telah mengadakan MPK (musyawarah program kerja) tahun 2019/2020 yang diikuti oleh perwakilan dan pembina setiap Seksi bidang. PK merupakan organisasi di SMK Negeri 2 Depok, yang tugasnya untuk menjaring aspirasi para siswa dan merupakan organisasi siswa tertinggi yang ada di SMK Negeri 2 Depok Sleman.</p>
              <button class="button-12" role="button" onclick="window.open('proker/mpk-15-01-2020', '_blank')">Selengkapnya</button>
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- ... (Syohita) ... -->
      <div class="container mx-auto mt-4">
        <div class="row">
          <div class="col-lg-8">
            <div class="blog-content" style="background: #fbfbfb; border-radius: 0.15em; box-shadow: 0 2px 3px rgba(0, 0, 0, 0.1); padding: 10px;">
              <h1></h1>
              <p class="text-muted">Oleh BPPK Stembayo - Maret 29, 2019</p>
              <div class="text-center">
                <img src="foto/syohita-2019.png" class="img-fluid" alt="Syohita">
              </div>
              <br>
              <p> BPPK Stembayo Proudly Present <br>
                <br> Hallo teman-teman kls 10 dan kls 11 siswa STEMBAYO yang berbahagia. Berbahasa Penerapan Pengetahuan dan Kesastraan (BPPK) SMK N 2 Depok akan mengadakan berbagai macam lomba dalam bidang bahasa nih, dalam program kerja SYOHITA #6 ( SHOW YOUR HIDDEN TALENT #6 ) yang mengusung tema "Grow Our Abilities by Discovering Our Hidden Potential " 
              </p>
              <button class="button-12" role="button" onclick="window.open('proker/syohita-29-03-2019', '_blank')">Selengkapnya</button>
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- ... (Obseva) ... -->
      <div class="container mx-auto mt-4">
        <div class="row">
          <div class="col-lg-8">
            <div class="blog-content" style="background: #fbfbfb; border-radius: 0.15em; box-shadow: 0 2px 3px rgba(0, 0, 0, 0.1); padding: 10px;">
              <h1></h1>
              <p class="text-muted">Oleh BPPK Stembayo - Agustus 17, 2015</p>
              <div class="text-center">
                <img src="https://telegra.ph/file/3dc4a76dfd572fc6aba96.jpg" class="img-fluid" alt="obseva-2015" height="250" width="250">
              </div>
              <br>
              <p>Apa sih OBSEVA itu??? <br> OBSEVA itu merupakan salah satu program kerja OSIS SMK Negeri 2 Depok Sleman seksi bidang Berbahasa Penerapan Pengetahuan dan Kesastraan (BPPK) periode 2014/2015. </p>
              <button class="button-12" role="button" onclick="window.open('proker/obseva-17-08-2015', '_blank')">Selengkapnya</button>
              </p>
            </div>
          </div>
        </div>
      </div>
  </body>
</html>