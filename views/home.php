<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    /* Full-width input fields */
    input[type=text],
    input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    /* Set a style for all buttons */
    button {
    
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
    }

    button:hover {
      opacity: 0.8;
    }

    /* Extra styles for the cancel button */
    .cancelbtn {
      width: auto;
      padding: 10px 18px;
      background-color: #f44336;
    }

    /* Center the image and position the close button */
    .imgcontainer {
      text-align: center;
      margin: 24px 0 12px 0;
      position: relative;
    }

    img.avatar {
      width: 40%;
      border-radius: 50%;
    }

    .container {
      padding: 16px;
    }

    span.psw {
      float: right;
      padding-top: 16px;
    }

    /* The Modal (background) */
    .modal {
      display: none;
      /* Hidden by default */
      position: fixed;
      /* Stay in place */
      z-index: 1;
      /* Sit on top */
      left: 0;
      top: 0;
      width: 100%;
      /* Full width */
      height: 100%;
      /* Full height */
      overflow: auto;
      /* Enable scroll if needed */
      background-color: rgb(0, 0, 0);
      /* Fallback color */
      background-color: rgba(0, 0, 0, 0.4);
      /* Black w/ opacity */
      padding-top: 60px;
    }

    /* Modal Content/Box */
    .modal-content {
      background-color: #fefefe;
      margin: 5% auto 15% auto;
      /* 5% from the top, 15% from the bottom and centered */
      border: 1px solid #888;
      width: 80%;
      /* Could be more or less, depending on screen size */
    }

    /* The Close Button (x) */
    .close {
      position: absolute;
      right: 25px;
      top: 0;
      color: #000;
      font-size: 35px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: red;
      cursor: pointer;
    }

    /* Add Zoom Animation */
    .animate {
      -webkit-animation: animatezoom 0.6s;
      animation: animatezoom 0.6s
    }

    @-webkit-keyframes animatezoom {
      from {
        -webkit-transform: scale(0)
      }

      to {
        -webkit-transform: scale(1)
      }
    }

    @keyframes animatezoom {
      from {
        transform: scale(0)
      }

      to {
        transform: scale(1)
      }
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
      span.psw {
        display: block;
        float: none;
      }

      .cancelbtn {
        width: 100%;
      }
    }
  </style>
</head>

<body>


  <table>
    <tr>
      <td>
        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">
          <img style="width: 500px; height: 300px" src="https://static.ybox.vn/2017/8/8/04f43f92-7b99-11e7-8015-56c566ee3692.jpg" alt="">
        </button>

        <div id="id01" class="modal">

          <form class="modal-content animate" action="/action_page.php" method="post">
            <div class="imgcontainer">
              <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

            </div>

            <div class="container">
              <iframe id="1" style="margin-left: 150px" width="1100" height="600" src="https://www.youtube.com/embed/KIz7aRXfDC8">
              </iframe>
            </div>

            <div class="container" style="background-color:#f1f1f1">
              <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>

            </div>
          </form>
        </div>
      </td>
      <td>
        <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">
          <img style="width: 500px; height: 300px" src="https://i.ytimg.com/vi/DUC1g0nFY4Q/maxresdefault.jpg" alt="">
        </button>

        <div id="id02" class="modal">

          <form class="modal-content animate" action="/action_page.php" method="post">
            <div class="imgcontainer">
              <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>

            </div>

            <div class="container">
              <iframe style="margin-left: 150px" width="1100" height="600" src="https://www.youtube.com/embed/DUC1g0nFY4Q">
              </iframe>
            </div>

            <div class="container" style="background-color:#f1f1f1">
              <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>

            </div>
          </form>
        </div>
      </td>
      <td>
        <button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">
          <img style="width: 500px; height: 300px" src="https://i.ytimg.com/vi/s7gDXtRS0jo/maxresdefault.jpg" alt="">
        </button>

        <div id="id03" class="modal">

          <form class="modal-content animate" action="/action_page.php" method="post">
            <div class="imgcontainer">
              <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>

            </div>

            <div class="container">
              <iframe style="margin-left: 150px" width="1100" height="600" src="https://www.youtube.com/embed/5Btbdt7ksko">
              </iframe>
            </div>

            <div class="container" style="background-color:#f1f1f1">
              <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>

            </div>
          </form>
        </div>
      </td>
    </tr>

    <tr>
     <td>
     <button onclick="document.getElementById('id04').style.display='block'" style="width:auto;">
          <img style="width: 500px; height: 300px" src="https://i.ytimg.com/vi/ot7sxY0CW2o/maxresdefault.jpg" alt="">
        </button>

        <div id="id04" class="modal">

          <form class="modal-content animate" action="/action_page.php" method="post">
            <div class="imgcontainer">
              <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">&times;</span>

            </div>

            <div class="container">
              <iframe style="margin-left: 150px" width="1100" height="600" src="https://www.youtube.com/embed/ot7sxY0CW2o">
              </iframe>
            </div>

            <div class="container" style="background-color:#f1f1f1">
              <button type="button" onclick="document.getElementById('id04').style.display='none'" class="cancelbtn">Cancel</button>

            </div>
          </form>
        </div>
     </td>
     <td>
     <button onclick="document.getElementById('id05').style.display='block'" style="width:auto;">
          <img style="width: 500px; height: 300px" src="https://i.ytimg.com/vi/jJsrAlz4C3s/maxresdefault.jpg" alt="">
        </button>

        <div id="id05" class="modal">

          <form class="modal-content animate" action="/action_page.php" method="post">
            <div class="imgcontainer">
              <span onclick="document.getElementById('id05').style.display='none'" class="close" title="Close Modal">&times;</span>

            </div>

            <div class="container">
              <iframe style="margin-left: 150px" width="1100" height="600" src="https://www.youtube.com/embed/jJsrAlz4C3s">
              </iframe>
            </div>

            <div class="container" style="background-color:#f1f1f1">
              <button type="button" onclick="document.getElementById('id05').style.display='none'" class="cancelbtn">Cancel</button>

            </div>
          </form>
        </div>
     </td>
     <td>
     <button onclick="document.getElementById('id06').style.display='block'" style="width:auto;">
          <img style="width: 500px; height: 300px" src="https://i.ytimg.com/vi/V7LGwwZFoHs/maxresdefault.jpg" alt="">
        </button>

        <div id="id06" class="modal">

          <form class="modal-content animate" action="/action_page.php" method="post">
            <div class="imgcontainer">
              <span onclick="document.getElementById('id06').style.display='none'" class="close" title="Close Modal">&times;</span>

            </div>

            <div class="container">
              <iframe style="margin-left: 150px" width="1100" height="600" src="https://www.youtube.com/embed/V7LGwwZFoHs">
              </iframe>
            </div>

            <div class="container" style="background-color:#f1f1f1">
              <button type="button" onclick="document.getElementById('id06').style.display='none'" class="cancelbtn">Cancel</button>

            </div>
          </form>
        </div>
     </td>
    </tr>
  </table>

  <script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
        var video= document.getElementById("1");
        <video src="" class="pause"></video>

      }
    }
  </script>
  <script>
    // Get the modal
    var modal = document.getElementById('id02');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";


      }
    }
  </script>
  <script>
    // Get the modal
    var modal = document.getElementById('id03');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";


      }
    }
  </script>
  <script>
    // Get the modal
    var modal = document.getElementById('id04');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";


      }
    }
  </script>
  <script>
    // Get the modal
    var modal = document.getElementById('id05');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";


      }
    }
  </script>
    <script>
    // Get the modal
    var modal = document.getElementById('id06');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";


      }
    }
  </script>
</body>

</html>