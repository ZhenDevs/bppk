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
#about h1,h2 {
  margin-left: 35px;
}

#about p {
  margin-left: 37px;
}

#about ul.list-group {
  margin-left: 5px;
}

#about li.list-group-item {
  margin-left: 50px;
}

.row {
  display: flex;
  flex-wrap: wrap;
  padding: 2em 1em;
  text-align: center;
}
.column {
  width: 100%;
  padding: 0.5em 0;
  margin-bottom: 20px;
}
h1 {
  width: 100%;
  text-align: center;
  font-size: 3.5em;
  color: #1f003b;
}
.card {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  box-shadow: 0 0 2.4em rgba(25, 0, 58, 0.1);
  padding: 3.5em 1em;
  border-radius: 0.6em;
  color: #1f003b;
  cursor: pointer;
  transition: 0.3s;
  background-color: #ffffff;
  margin-left: 60px;
}
.card .img-container {
  width: 13em;
  height: 13em;
  background-color: #C0C0C0;
  padding: 0.5em;
  border-radius: 50%;
  margin: 0 auto 2em auto;
}
.card img {
  width: 100%;
  border-radius: 60%;
}
.card h3 {
  font-weight: 500;
}
.card p {
  font-weight: 300;
  text-transform: uppercase;
  margin: 0.5em 0 2em 0;
  letter-spacing: 2px;
}
.icons {
  width: 50%;
  min-width: 180px;
  margin: auto;
  display: flex;
  justify-content: space-between;
}
.card a {
  text-decoration: none;
  color: inherit;
  font-size: 1.4em;
}
.card:hover {
  background: linear-gradient(#6045ea, #8567f7);
  color: #ffffff;
}
.card:hover .img-container {
  transform: scale(1.15);
}

.notification {
  background-color: red;
  color: white;
  text-align: center;
  padding: 16px;
  position: fixed;
  bottom: 30px;
  right: 30px;
  z-index: 1;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  display: none;
}

.notification.show {
  display: block;
}

.row h1 {
  margin-left: 50px;
}

@media screen and (min-width: 100px) {
  .col-lg-6 img {
    height: 245px;
    margin-left: 50px;
  }
}
@media screen and (min-width: 580px) {
  section {
    padding: 1em 7em;
  }
  .col-lg-6 img {
    height: 245px;
    margin-left: 60px;
  }
}
@media screen and (min-width: 992px) {
  section {
    padding: 1em;
  }
  .card {
    padding: 5em 1em;
  }
  .row h1 {
    margin-left: 50px;
  }
  .column {
    flex: 0 0 33.33%;
    max-width: 33.33%;
    padding: 0 1em;
  }
  .col-lg-6 img {
    height: 345px;
  }
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
                    <a href="/proker">
                        <i class="fa-solid fa-book-bookmark" style="color: #ffffff;"></i>
                        <p>Proker</p>
                    </a>
                </li>
                <li>
                    <a href="#">
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
         <div id="about" class="container my-5">
        <div class="row">
          <div class="col-lg-6">
            <img src="/foto/logo.png" alt="logo">
           <!-- <h1>BPPK!<br>Structure</h1> -->
          </div>
          <div class="col-lg-6">
            <br>
            <h2>Organization Details</h2>
            <ul class="list-group">
              <li class="list-group-item">
                <strong>Industri:</strong> Edukasi
              </li>
              <li class="list-group-item">
                <strong>Jabatan:</strong> Seksi Bidang
              </li>
              <li class="list-group-item">
                <strong>Lokasi:</strong> Sleman, Daerah Istimewa Yogyakarta, Indonesia
              </li>
              <li class="list-group-item">
                <strong>Minat:</strong> Bahasa Inggris, Bahasa Jepang, Karya Ilmiah, Jurnalistik
              </li>
            </ul>
          </div>
        </div>
      </div>
      
        <div class="row">
        <h1>BPPK Structure 2023-2024!</h1>
      </div>
      <div class="row">
        <!-- pembina BPPK -->
        <div id="1"></div>
        <div class="column">
          <div class="card">
            <div class="img-container">
              <img src="/foto/staf-23-24/pembinabeppek.jpg" alt="pembina bppk" style="height:190px;"/>
            </div>
            <h3>Marzuanti Indah Lestari</h3>
            <p>Pembina BPPK</p>
            <div class="icons">
              <a href="#1" id="facebook1">
                <i class="fab fa-facebook"></i>
              </a>
              <a href="https://instagram.com/indahbgtz?igshid=NzZhOTFlYzFmZQ==">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#1" id="tiktok1">
                <i class="fab fa-tiktok"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Koordinator BPPK -->
        <div id="2"></div>
        <div class="column">
          <div class="card">
            <div class="img-container">
              <img src="/foto/staf-23-24/koorsbeppek.jpg" alt="koor bppk" style="height:190px;"/>
            </div>
            <h3>Muhammad Akbar A</h3>
            <p>Koordinator BPPK</p>
            <div class="icons">
              <a href="#2" id="facebook2">
                <i class="fab fa-facebook"></i>
              </a>
              <a href="https://instagram.com/oiibarrr?igshid=NzZhOTFlYzFmZQ==">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="https://www.tiktok.com/@barralwayssenyum" id="tiktok">
                <i class="fab fa-tiktok"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Ketua 1 BPPK-->
        <div id="3"></div>
        <div class="column">
          <div class="card">
            <div class="img-container">
              <img src="/foto/staf-23-24/ketuabeppek.jpg" alt="ketua bppk" style="height:190px;"/>
            </div>
            <h3>Fikriyan Budiyana Asmi</h3>
            <p>Ketua 1 BPPK</p>
            <div class="icons">
              <a href="https://www.facebook.com/fikriyan.b.asmi">
                <i class="fab fa-facebook"></i>
              </a>
              <a href="https://instagram.com/fikrianbudiana?igshid=NzZhOTFlYzFmZQ==" id="instagram">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#3" id="tiktok3">
                <i class="fab fa-tiktok"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Ketua 2 BPPK -->
        <div id="4"></div>
          <div class="column">
          <div class="card">
            <div class="img-container">
              <img src="/foto/staf-23-24/ketua2beppek.jpg" alt="ketua2 bppk" style="height:190px;"/>
            </div>
            <h3>Mutiara Sekar Kinasih</h3>
            <p>Ketua 2 BPPK </p>
            <div class="icons">
              <a href="#4" id="facebook4">
                <i class="fab fa-facebook"></i>
              </a>
              <a href="https://instagram.com/mtiarasekar?igshid=NzZhOTFlYzFmZQ==" id="instagram">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#4" id="tiktok4">
                <i class="fab fa-tiktok"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Sekre 1 BPPK -->
        <div id="5"></div>
                  <div class="column">
          <div class="card">
            <div class="img-container">
              <img src="/foto/staf-23-24/sekre1beppek.jpg" alt="sekre1 bppk" style="height:190px;"/> 
            </div>
            <h3>Wildan Fadhilah</h3>
            <p>Sekretaris 1 BPPK</p>
            <div class="icons">
              <a href="#5" id="facebook5">
                <i class="fab fa-facebook"></i>
              </a>
              <a href="https://instagram.com/wildan_fadhilah_wf27?igshid=NzZhOTFlYzFmZQ==" id="instagram">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#5" id="tiktok5">
                <i class="fab fa-tiktok"></i>
              </a>
            </div>
          </div>
        </div>
       <!-- Sekretaris 2 BPPK -->
       <div id="6"></div>
                  <div class="column">
          <div class="card">
            <div class="img-container">
              <img src="/foto/staf-23-24/sekree2beppek.jpg" alt="sekre2 bppk" style="height:190px"/>
            </div>
            <h3>Lutfiah Amelia Putri</h3>
            <p>Sekretaris 2 BPPK</p>
            <div class="icons">
              <a href="#6" id="facebook6">
                <i class="fab fa-facebook"></i>
              </a>
              <a href="https://www.instagram.com/upiiik_13d06?igsh=MTFvZXhtZHh2Z3NxaQ==" id="instagram">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#6" id="tiktok6">
                <i class="fab fa-tiktok"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Bendahara 1 BPPK -->
        <div id="7"></div>
                  <div class="column">
          <div class="card">
            <div class="img-container">
              <img src="/foto/staf-23-24/bendahara1beppek.jpg" alt="bendahara1 bppk" style="height:190px"/>
            </div>
            <h3>Nindya Kharissa Hayutyasti</h3>
            <p>Bendahara 1 BPPK</p>
            <div class="icons">
              <a href="#7" id="facebook7">
                <i class="fab fa-facebook"></i>
              </a>
              <a href="#7" id="instagram7">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#7" id="tiktok7">
                <i class="fab fa-tiktok"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Bendahara 2 BPPK -->
        <div id="8"></div>
                  <div class="column">
          <div class="card">
            <div class="img-container">
              <img src="/foto/staf-23-24/bendahara2beppek.jpg" alt="sekre2 bppk" style="height:190px;"/>
            </div>
            <h3>Salwa Az-zahra Mizar</h3>
            <p>Bendahara 2 BPPK</p>
            <div class="icons">
              <a href="#8" id="facebook8">
                <i class="fab fa-facebook"></i>
              </a>
              <a href="https://www.instagram.com/zhr.mizar?igsh=enQwb28wcG5zcTlx" id="instagram">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#8" id="tiktok8">
                <i class="fab fa-tiktok"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Ketua SDF -->
        <div id="9"></div>
                  <div class="column">
          <div class="card">
            <div class="img-container">
              <img src="/foto/staf-23-24/ketuasdf.jpg" alt="ketua sdf" style="height:190px;"/>
            </div>
            <h3>Zulaykha Kusuma Wardhani</h3>
            <p>Leader SDF</p>
            <div class="icons">
              <a href="#9" id="facebook9">
                <i class="fab fa-facebook"></i>
              </a>
              <a href="#9" id="instagram9">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#9" id="tiktok9">
                <i class="fab fa-tiktok"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Ketua SNB -->
        <div id="10"></div>
                  <div class="column">
          <div class="card">
            <div class="img-container">
              <img src="/foto/staf-23-24/ketuasnb.jpg" alt="ketua snb" style="height:190px;" />
            </div>
            <h3>Gema Sabda Bhaskara</h3>
            <p>Kaichou SNB</p>
            <div class="icons">
              <a href="#10" id="facebook10">
                <i class="fab fa-facebook"></i>
              </a>
              <a href="https://www.instagram.com/gema.sabda?igsh=MXdhdHh5bGtjZWdwMQ==" id="instagram">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="https://www.tiktok.com/@eikoexists?_t=8jqj0jK2y8Y&_r=1" id="tiktok">
                <i class="fab fa-tiktok"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Ketua KARISTA -->
        <div id="11"></div>
                  <div class="column">
          <div class="card">
            <div class="img-container">
              <img src="/foto/staf-23-24/ketuakarista.jpg" alt="ketua karista" style="height:190px;"/>
            </div>
            <h3>Robertho Darrell</h3>
            <p>Ketua KARISTA</p>
            <div class="icons">
              <a href="#11" id="facebook11">
                <i class="fab fa-facebook"></i>
              </a>
              <a href="https://instagram.com/kaizoo.gx?igshid=NzZhOTFlYzFmZQ==" id="instagram">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#11" id="tiktok11">
                <i class="fab fa-tiktok"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Ketua JURNALISTIK -->
        <div id="12"></div>
                  <div class="column">
          <div class="card">
            <div class="img-container">
              <img src="/foto/staf-23-24/ketuajurnalistikk.jpg" alt="ketua jurnalistik" style="height:190px;"/>
            </div>
            <h3>Rifda Marha Kifaya</h3>
            <p>Ketua JURNALISTIK</p>
            <div class="icons">
              <a href="#12" id="facebook12">
                <i class="fab fa-facebook"></i>
              </a>
              <a href="#12" id="instagram12">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#12" id="tiktok12">
                <i class="fab fa-tiktok"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script>
    function equalizeCardHeight() {
  const cards = document.querySelectorAll('.card');

  let maxHeight = 0;
  cards.forEach(card => {
    const cardHeight = card.clientHeight;
    if (cardHeight > maxHeight) {
      maxHeight = cardHeight;
    }
  });

  cards.forEach(card => {
    card.style.height = `${maxHeight}px`;
  });
}

// Panggil fungsi untuk pertama kali saat halaman dimuat
equalizeCardHeight();

// Panggil kembali fungsi saat jendela browser diubah ukurannya
window.addEventListener('resize', equalizeCardHeight);

for (var i = 1; i <= 12; i++) {
  var elementId = 'facebook' + i;
  var element = document.getElementById(elementId);

  if (element) {
    element.addEventListener('click', function() {
      showNotification('Not Found!');
    });
  }
}

for (var i = 1; i <= 12; i++) {
  var elementId = 'tiktok' + i;
  var element = document.getElementById(elementId);

  if (element) {
    element.addEventListener('click', function() {
      showNotification('Not Found!');
    });
  }
}

for (var i = 1; i <= 12; i++) {
  var elementId = 'instagram' + i;
  var element = document.getElementById(elementId);

  if (element) {
    element.addEventListener('click', function() {
      showNotification('Not Found!');
    });
  }
}

function showNotification(message) {
  var notification = document.createElement('div');
  notification.classList.add('notification');
  notification.innerHTML = message;
  document.body.appendChild(notification);

  setTimeout(function() {
    notification.classList.add('show');
    setTimeout(function() {
      notification.classList.remove('show');
      setTimeout(function() {
        notification.remove();
      }, 300);
    }, 3000);
  }, 100);
}

    </script>

</div>
  </body>
</html>