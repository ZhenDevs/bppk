<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./foto/logo.png" type="image/png">
    <title>BPPK Stembayo</title>
    <style>
      html,
      body {
        background: #e3e3e3;
        height: 100%;
        margin: 0;
        overflow-x: hidden;
        width: 100%;
      }

      body {
        font-family: "Raleway", sans-serif;
        letter-spacing: 1px;
      }

      *,
      *:after,
      *:before {
        box-sizing: border-box;
        -webkit-transition: all 0.3s;
        transition: all 0.3s;
      }

      .card {
        background: #fbfbfb;
        border-radius: 0.15em;
        box-shadow: 0 2px 3px rgba(0, 0, 0, 0.1);
        float: left;
        font-size: 16px;
        left: 50%;
        margin: 0 auto;
        padding: 24px 32px;
        position: relative;
        text-align: center;
        top: 50%;
        -webkit-transform: translateY(-50%) translateX(-50%);
        transform: translateY(-50%) translateX(-50%);
        width: 320px;
      }

      .card:hover {
        background: #fff;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
      }

      .card h1 {
        color: #111;
        font-size: 24px;
        font-weight: 400;
        margin: 8px 0 24px 0;
        text-align: center;
      }

      .card p {
        color: #303030;
        font-weight: 300;
        line-height: 24px;
        margin: 8px 0 24px 0;
        text-align: center;
      }

      @keyframes spin {
        0% {
          transform: rotate(0deg);
        }

        10% {
          transform: rotate(0deg);
        }

        20% {
          transform: rotate(90deg);
        }

        35% {
          transform: rotate(90deg);
        }

        45% {
          transform: rotate(180deg);
        }

        60% {
          transform: rotate(180deg);
        }

        75% {
          transform: rotate(270deg);
        }

        85% {
          transform: rotate(270deg);
        }

        100% {
          transform: rotate(360deg);
        }
      }

      @-webkit-keyframes spin {
        0% {
          -webkit-transform: rotate(0deg);
        }

        10% {
          -webkit-transform: rotate(0deg);
        }

        20% {
          -webkit-transform: rotate(90deg);
        }

        35% {
          -webkit-transform: rotate(90deg);
        }

        45% {
          -webkit-transform: rotate(180deg);
        }

        60% {
          -webkit-transform: rotate(180deg);
        }

        75% {
          -webkit-transform: rotate(270deg);
        }

        85% {
          -webkit-transform: rotate(270deg);
        }

        100% {
          -webkit-transform: rotate(360deg);
        }
      }

      @keyframes bounce {
        0% {
          transform: scaleX(1);
        }

        10% {
          transform: scaleX(1);
        }

        20% {
          transform: scaleX(0.8);
        }

        35% {
          transform: scaleX(0.8);
        }

        45% {
          transform: scaleX(1);
        }

        60% {
          transform: scaleX(1);
        }

        75% {
          transform: scaleX(0.8);
        }

        85% {
          transform: scaleX(0.8);
        }

        100% {
          transform: scaleX(1);
        }
      }

      @-webkit-keyframes bounce {
        0% {
          -webkit-transform: scaleX(1);
        }

        10% {
          -webkit-transform: scaleX(1);
        }

        20% {
          -webkit-transform: scaleX(0.8);
        }

        35% {
          -webkit-transform: scaleX(0.8);
        }

        45% {
          -webkit-transform: scaleX(1);
        }

        60% {
          -webkit-transform: scaleX(1);
        }

        75% {
          -webkit-transform: scaleX(0.8);
        }

        85% {
          -webkit-transform: scaleX(0.8);
        }

        100% {
          -webkit-transform: scaleX(1);
        }
      }

      .card .loader {
        box-sizing: content-box;
        height: 40px;
        margin: 0 auto 10px auto;
        position: relative;
        width: 70px;
      }

      .card .loader:before {
        border: 2px solid #111;
        box-sizing: content-box;
        content: "";
        height: 0;
        left: 50%;
        position: absolute;
        top: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        width: 0;
      }

      .card .loader .spin {
        -webkit-animation: spin 2.25s linear infinite;
        animation: spin 2.25s linear infinite;
        height: 14px;
        left: 28px;
        position: absolute;
        top: 13px;
        width: 14px;
      }

      .card .loader .spin:before {
        border: 3px solid #111;
        box-sizing: content-box;
        content: "";
        height: 14px;
        left: 50%;
        position: absolute;
        top: 50%;
        -webkit-transform: translate(-50%, -50%) rotate(45deg);
        transform: translate(-50%, -50%) rotate(45deg);
        width: 14px;
      }

      .card .loader .bounce {
        -webkit-animation: bounce 2.25s linear infinite;
        animation: bounce 2.25s linear infinite;
        height: 100%;
        margin: 0 auto;
        position: relative;
        width: 100%;
      }

      .card .loader .bounce:after,
      .card .loader .bounce:before {
        box-sizing: content-box;
        content: "";
        height: 10px;
        position: absolute;
        top: 13px;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
        width: 10px;
      }

      .card .loader .bounce:before {
        border-bottom: 3px solid #111;
        border-left: 3px solid #111;
        left: 0;
      }

      .card .loader .bounce:after {
        border-right: 3px solid #111;
        border-top: 3px solid #111;
        right: 0;
      }

      @media (max-width: 768px) {
        .card {
          width: 80%;
        }
      }
    </style>
  </head>
  <body>
    <div class="card">
      <h1></h1>
      <p></p>
      <img src="/foto/logo.png" alt="logo" style="width: 100px; height: 100px;">
      <div class="loader">
        <div class="spin"></div>
        <div class="bounce"></div>
      </div>
    </div>
 <script>
  window.onload = function() {
    setTimeout(function() {
      window.location.href = "home";
    }, 3000);
  }
</script>

  </body>
</html>