<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="/foto/logo.png" type="image/png">
  <title>PRESENSI JURNALISTIK</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    #form-container {
      font-family: 'Poppins', sans-serif;
      width: 330px;
      margin: 0 auto;
      margin-top: 195px;
      background-color: #f1f1f7;
      border-radius: 10px;
      padding: 20px;
      border: 2px solid #ccc;
      box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.2);
    }
    #form-container h2 {
      text-align: center;
      color: #1E90FF;
    }
    #form-container input[type="text"], #form-container input[type="date"], #form-container input[type="tel"] {
      width: 60%;
      padding: 10px;
      margin-bottom: 20px;
      border: 2px solid #f1d0d0;
      border-radius: 5px;
    }
    #form-container .presensi-buttons {
      display: flex;
      justify-content: space-between;
      margin-bottom: 10px;
    }
    #form-container .presensi-buttons button {
      flex-grow: 1;
      background-color: #1E90FF;
      color: #FFFFFF;
      border: none;
      border-radius: 10%;
      padding: 9px;
      margin-right: 5px;
      cursor: pointer;
    }
    #form-container .presensi-buttons button:last-child {
      margin-right: 0;
    }
    #form-container .presensi-buttons .selected {
      background-color: #4CAF50;
    }
    #form-container input[type="submit"] {
      background-color: #1E90FF;
      color: #FFFFFF;
      border: none;
      border-radius: 5px;
      margin-top: 10px;
      padding: 10px;
      width: 100%;
      cursor: pointer;
    }
    #form-container input[type="submit"]:hover {
      background-color: #004B8D;
    }
    #footer {
      text-align: center;
      margin-top: 30px;
      font-size: 12px;
      color: #FF0000;
    }

    .message-container {
      text-align: center;
      margin-bottom: 20px;
    }

    .message {
      font-family: 'Poppins', sans-serif;
      font-size: 18px;
      font-weight: bold;
      color: #00000;
      background-color: #ccc;
      padding: 10px;
      border-radius: 5px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    td {
      vertical-align: top;
    }

    td:first-child {
      width: 40%;
      text-align: left;
    }
    
    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgb(0,0,0);
      background-color: rgba(0,0,0,0.4);
    }
    
.modal-content {
  margin-top: 250px;
  font-family: 'Poppins', sans-serif;
  background-color: #f1f1f7;
  padding: 20px;
  border: 2px solid #ccc;
  border-radius: 10px;
}

.modal-content h3 {
  text-align: center;
  color: #1E90FF;
  margin-bottom: 20px;
}

.modal-content textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border: 2px solid #f1d0d0;
  border-radius: 5px;
}

.modal-content button {
  background-color: #1E90FF;
  color: #FFFFFF;
  border: none;
  border-radius: 5px;
  padding: 10px;
  width: 100%;
  cursor: pointer;
}

.modal-content button:hover {
  background-color: #004B8D;
}
    
    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }
    
    .close:hover,
    .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
    }
    

.ui-switch {
  --switch-bg: rgb(135, 150, 165);
  --switch-width: 48px;
  --switch-height: 20px;
  --circle-diameter: 32px;
  --circle-bg: rgb(0, 56, 146);
  --circle-inset: calc((var(--circle-diameter) - var(--switch-height)) / 2);
}

.ui-switch input {
  display: none;
}

.slider {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  width: var(--switch-width);
  height: var(--switch-height);
  background: var(--switch-bg);
  border-radius: 999px;
  position: relative;
  cursor: pointer;
  margin-left: 350px;
  margin-top: 60px;
}

.slider .circle {
  top: calc(var(--circle-inset) * -1);
  left: 0;
  width: var(--circle-diameter);
  height: var(--circle-diameter);
  position: absolute;
  background: var(--circle-bg);
  border-radius: inherit;
  background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGhlaWdodD0iMjAiIHdpZHRoPSIyMCIgdmlld0JveD0iMCAwIDIwIDIwIj4KICAgIDxwYXRoIGZpbGw9IiNmZmYiCiAgICAgICAgZD0iTTkuMzA1IDEuNjY3VjMuNzVoMS4zODlWMS42NjdoLTEuMzl6bS00LjcwNyAxLjk1bC0uOTgyLjk4Mkw1LjA5IDYuMDcybC45ODItLjk4Mi0xLjQ3My0xLjQ3M3ptMTAuODAyIDBMMTMuOTI3IDUuMDlsLjk4Mi45ODIgMS40NzMtMS40NzMtLjk4Mi0uOTgyek0xMCA1LjEzOWE0Ljg3MiA0Ljg3MiAwIDAwLTQuODYyIDQuODZBNC44NzIgNC44NzIgMCAwMDEwIDE0Ljg2MiA0Ljg3MiA0Ljg3MiAwIDAwMTQuODYgMTAgNC44NzIgNC44NzIgMCAwMDEwIDUuMTM5em0wIDEuMzg5QTMuNDYyIDMuNDYyIDAgMDExMy40NzEgMTBhMy40NjIgMy40NjIgMCAwMS0zLjQ3MyAzLjQ3MkEzLjQ2MiAzLjQ2MiAwIDAxNi41MjcgMTAgMy40NjIgMy40NjIgMCAwMTEwIDYuNTI4ek0xLjY2NSA5LjMwNXYxLjM5aDIuMDgzdi0xLjM5SDEuNjY2em0xNC41ODMgMHYxLjM5aDIuMDg0di0xLjM5aC0yLjA4NHpNNS4wOSAxMy45MjhMMy42MTYgMTUuNGwuOTgyLjk4MiAxLjQ3My0xLjQ3My0uOTgyLS45ODJ6bTkuODIgMGwtLjk4Mi45ODIgMS40NzMgMS40NzMuOTgyLS45ODItMS40NzMtMS40NzN6TTkuMzA1IDE2LjI1djIuMDgzaDEuMzg5VjE2LjI1aC0xLjM5eiIgLz4KPC9zdmc+");
  background-repeat: no-repeat;
  background-position: center center;
  -webkit-transition: left 150ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, -webkit-transform 150ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
  -o-transition: left 150ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, transform 150ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
  transition: left 150ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, transform 150ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, -webkit-transform 150ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  box-shadow: 0px 2px 1px -1px rgba(0,0,0,0.2), 0px 1px 1px 0px rgba(0,0,0,0.14), 0px 1px 3px 0px rgba(0,0,0,0.12);
  ;
}

.slider .circle::before {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  background: rgba(255, 255, 255, 0.75);
  border-radius: inherit;
  -webkit-transition: all 500ms;
  -o-transition: all 500ms;
  transition: all 500ms;
  opacity: 0;
}

.ui-switch input:checked+.slider .circle {
  left: calc(100% - var(--circle-diameter));
  background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGhlaWdodD0iMjAiIHdpZHRoPSIyMCIgdmlld0JveD0iMCAwIDIwIDIwIj4KICAgIDxwYXRoIGZpbGw9IiNmZmYiCiAgICAgICAgZD0iTTQuMiAyLjVsLS43IDEuOC0xLjguNyAxLjguNy43IDEuOC42LTEuOEw2LjcgNWwtMS45LS43LS42LTEuOHptMTUgOC4zYTYuNyA2LjcgMCAxMS02LjYtNi42IDUuOCA1LjggMCAwMDYuNiA2LjZ6IiAvPgo8L3N2Zz4=");
}

.ui-switch input:active+.slider .circle::before {
  -webkit-transition: 0s;
  -o-transition: 0s;
  transition: 0s;
  opacity: 1;
  width: 0;
  height: 0;
}
body.dark {
  background-color: black;
}
body.dark #form-container {
  border-color: #666;
  background-color: #a9a9a9;
}
body.dark input[type="text"],
body.dark input[type="date"],
body.dark input[type="tel"] {
  background-color: #f1f1f7;
}
  </style>
</head>

<body>
  <div id="loadingIndicator" style="display: none;">
  <p>Loading...</p>
</div>
  <div id="form-container">
    <h2>PRESENSI JURNALISTIK</h2>
    <div class="message-container">
      <p class="message" id="message"> Maaf, formulir ini hanya dapat diakses pada hari Rabu pukul 15:30 - 17:00</p>
    </div>
    <form action="https://script.google.com/macros/s/AKfycbwW0XIxPUwwuEnspSGoQzXi1C5USZ-R7kc8M09mKjclPxUn-hZXk0lu8YvlrE95_iL2ug/exec" method="post" id="presensiForm">

        <table>
          <tr>
            <td><label for="nama">Nama:</label></td>
            <td><input type="text" id="nama" name="nama" placeholder="Nama lengkap" required></td>
          </tr>
          <tr>
            <td><label for="kelas">Kelas:</label></td>
            <td><input type="text" id="kelas" name="kelas" placeholder="Kelas dan jurusan" required></td>
          </tr>
          <tr>
            <td><label for="nis">Nis:</label></td>
            <td><input type="text" id="nis" name="nis" placeholder="Nis kamu" required></td>
          </tr>
          <tr>
            <td><label for="presensi">Presensi:</label></td>
            <td>
              <div class="presensi-buttons">
                <button type="button" id="presentBtn" onclick="setPresensi('Present')">Present</button>
                
                <button type="button" id="izinBtn" onclick="showReasonModal()">Izin</button>
              </div>
              <input type="hidden" id="presensi" name="presensi" required>
            </td>
          </tr>
        </table>

        <input type="submit" value="Kirim Presensi" id="submitBtn">
        
    </form>
  </div>
  
  <!-- <label class="ui-switch">
  <input type="checkbox" id="theme-switch">
  <div class="slider">
    <div class="circle"></div>
  </div>
</label> -->

  <div id="footer">
     BPPK STEMBAYO
  </div>


  <div id="reasonModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="hideReasonModal()">&times;</span>
      <h3>Alasan Izin</h3>
      <textarea id="izinAlasan" rows="4" cols="50"></textarea>
      <button type="button" onclick="submitIzin()">Submit</button>
    </div>
  </div>

  <script>
    window.onload = function() {
      var currentTime = new Date();
      var targetTimeStart = new Date();
      var targetTimeEnd = new Date();
      targetTimeStart.setHours(15, 30, 0);
      targetTimeEnd.setHours(17, 0, 0);

      if (currentTime.getDay() !== 3 || currentTime < targetTimeStart || currentTime > targetTimeEnd) {
        document.getElementById("presensiForm").style.pointerEvents = "none";
        document.getElementById("submitBtn").disabled = true;
        document.getElementById("message").style.display = "block";
      } else {
        document.getElementById("message").style.display = "none";
      }
    };

    function setPresensi(presensi) {
      var presentBtn = document.getElementById("presentBtn");
      var absentBtn = document.getElementById("absentBtn");
      var izinBtn = document.getElementById("izinBtn");

      if (presensi === "Present") {
        document.getElementById("presensi").value = "Present";
        presentBtn.classList.add("selected");
        absentBtn.classList.remove("selected");
        izinBtn.classList.remove("selected");
      } else if (presensi === "Absent") {
        document.getElementById("presensi").value = "Absent";
        presentBtn.classList.remove("selected");
        absentBtn.classList.add("selected");
       izinBtn.classList.remove("selected");
      } else if (presensi === "Izin") {
        showReasonModal();
      } else {
        document.getElementById("presensi").value = "";
        presentBtn.classList.remove("selected");
        absentBtn.classList.remove("selected");
        izinBtn.classList.remove("selected");
      }
    }

    function showReasonModal() {
      var modal = document.getElementById("reasonModal");
      modal.style.display = "block";
    }

    function hideReasonModal() {
      var modal = document.getElementById("reasonModal");
      modal.style.display = "none";
    }

    function submitIzin() {
      var reason = document.getElementById("izinAlasan").value;
      document.getElementById("presensi").value = "Izin: " + reason;
      hideReasonModal();
      var izinBtn = document.getElementById("izinBtn");
      izinBtn.classList.add("selected");
    }

     const form = document.getElementById('presensiForm');

  form.addEventListener('submit', function(event) {
    event.preventDefault();

    // Mengirimkan data formulir ke server
    fetch(form.action, {
      method: form.method,
      body: new FormData(form)
    })
    .then(response => {
      if (response.ok) {
        alert('Formulir berhasil terkirim!');
        form.reset();
      } else {
        alert('Terjadi kesalahan saat mengirim formulir.');
      }
    })
    .catch(error => {
      console.error('Error:', error);
      alert('Terjadi kesalahan saat mengirim formulir.');
    });
  });

/*const switchInput = document.getElementById('theme-switch');
  switchInput.addEventListener('change', toggleDarkMode);

  function toggleDarkMode() {
    const body = document.querySelector('body');
    if (switchInput.checked) {
      body.classList.add('dark');
      localStorage.setItem('darkMode', 'enabled');
    } else {
      body.classList.remove('dark');
      localStorage.setItem('darkMode', 'disabled');
    }
  }
  window.addEventListener('load', () => {
    const darkModePreference = localStorage.getItem('darkMode');
    if (darkModePreference === 'enabled') {
      switchInput.checked = true;
      toggleDarkMode();
    }
  })
  */
  </script>
</body>
</html>