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

footer {
          text-align: left;
          margin-left: 50px;
          margin-right: -20px;
          margin-bottom: 0px;
}

footer p {
  margin-bottom: -100px;
}

.contact {
  text-align: center;
  margin: 20px 0;
}

.contact h2 {
  font-size: 24px;
  margin-bottom: 10px;
  margin-right: 120px;
}

.contact p {
  font-size: 16px;
  margin: 0;
}

.contact a {
  color: #1a0dab;
  text-decoration: none;
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
                    <a href="#">
                        <i class="fa-solid fa-house" style="color: #ffffff;"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li>
                    <a href="proker">
                        <i class="fa-solid fa-bookmark" style="color: #ffffff;"></i>
                        <p>Proker</p>
                    </a>
                </li>
                <li>
                    <a href="about">
                        <i class="fas fa-user"></i>
                        <p>About</p>
                    </a>
                </li>
                    <li>
                    <a href="presensi">
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
          <!-- ... (bppk) ... -->
      <div class="container mx-auto mt-4">
        <div class="row">
          <div class="col-lg-8">
            <div class="blog-content" style="background: #fbfbfb; border-radius: 0.15em; box-shadow: 0 2px 3px rgba(0, 0, 0, 0.1); padding: 10px;">
              <h1></h1>
              <p class="text-muted">Oleh BPPK Stembayo</p>
              <div class="text-center">
                <img src="/foto/logo.png" class="img-fluid" alt="Logo Bppk" height="200px" width="200px">
              </div>
              <br>
              <p>BPPK Stembayo (Berbahasa, Penerapan Pengetahuan dan Kesastraan - Sekolah Teknologi Menengah Negeri Pembangunan Yogyakarta) merupakan salah satu Seksi Bidang yang berada di bawah kepengurusan OSIS SMK Negeri 2 Depok Sleman.<br><br>Terdapat 4 Sub Seksi Bidang dibawah BPPK Stembayo, yaitu:<br><br>1. [SDFC] Stembayo Debating Forum Club (Debat Bahasa Inggris)<br>2. [Karista] Karya Ilmiah Siswa Stembayo<br>3. [SC] STEZINE's Crew (Jurnalistik)<br>4. [SNB] Stembayo Nihongo Benkyoukai (Bahasa Jepang)<br><br>BPPK Stembayo lahir pada tanggal 27 September 2006 dengan nama "Berorganisasi ,Pendidikan Politik dan Kepemimpinan." Berdasarkan AD/ART PK & OSIS Amandemen 2014, kepanjangan BPPK berubah menjadi "Berbahasa, Penerapan Pengetahuan dan Kesastraan." Perubahan kepanjangan BPPK digagas oleh Bendahara I PK serta Koordinator dan Bendahara I BPPK periode kepengurusan 2013/2014 (Generasi Ke-8 BPPK). Dasar dari perubahan kepanjangan ini adalah untuk mensinkronkan antara nama dengan bidang yang diampu oleh BPPK. Kepanjangan ini mulai berlaku sejak periode kepengurusan 2014/2015 (Generasi Ke-9 BPPK) sampai dengan sekarang.<br><br>Semboyan dari BPPK Stembayo adalah "Never Ending Spirit" :D
</p>
              
              </p>
            </div>
          </div>
        </div>
      </div>
      <footer class="text-dark py-4">
        <div class="container mx-auto">
          <div class="row">
            <div class="col-md-6">
              <p>&copy; 2023 BPPK Stembayo. All Rights Reserved.</p>
            </div>
            </div>
          </div>
        </div>
      </footer>
  </body>
</html>