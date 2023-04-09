<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="img/zhelezno.png" />
    <title>Квест в музее</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
    <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script>
        var links = [
            '1.php',
            '2.php',
            '3.php',
            '4.php',
            '5.php',
            '6.php',
            '7.php',
            '8.php',
            '9.php',
            '10.php'
        ];

        var images = [
            'quest/questmap1.1.jpg',
            'quest/questmap12.jpg',
            'quest/questmap13.jpg',
            'quest/questmap14.jpg',
            'quest/questmap15.jpg',
            'quest/questmap16.jpg',
            'quest/questmap17.jpg',
            'quest/questmap18.jpg',
            'quest/questmap19.jpg',
            'quest/questmap20.jpg'
        ];

        var index = 0;

      function openLink() {
        var image = document.getElementById('myImage');
        image.src = images[index];
        var newTab = window.open(links[index], '_blank');
        newTab.focus();
        index++;
        if (index >= links.length) {
          index = 0;
        }
        document.getElementById('myButton').innerHTML = "Следующий шаг";
        document.getElementById('myButton').onclick = nextImage;
        document.getElementById('backButton').style.display = "block";
      }

      function nextImage() {
        index++;
        if (index >= images.length) {
          index = 0;
        }
        var image = document.getElementById('myImage');
        image.src = images[index];
        var newTab = window.open(links[index], '_blank');
        newTab.focus();
      }

      function goBack() {
        index--;
        if (index < 0) {
          index = images.length - 1;
        }
        var image = document.getElementById('myImage');
        image.src = images[index];
        var newTab = window.open(links[index], '_blank');
        newTab.focus();
        if (index == 0) {
          document.getElementById('backButton').style.display = "none";
        }
      }
    </script>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>
<body>
    <div>
        <?php
        require 'header.php';
        ?>
    </div>
    <center>
<div class="button" style="display: flex; flex-direction: column;">
<center>
    <img id="myImage" src="quest/questmap11.jpg" border="0" width="1336" height="692" orgWidth="1366" orgHeight="692">
	</center>
    <button id="myButton" onclick="openLink()">Начать квест</button>
</div>
	</center>
		<center>
		<div class="button">
        <button id="backButton" style="display: none;" onclick="goBack()">Назад</button>
	     </div>
    </center>
    <br><br> <br><br><br><br>
<footer class="footer">
  <div class="container">
    <center>
      <p>Номера для связи с музеем: +7 (4725) 45-12-30, +7 (951) 769-95-63</p>
      <p>Этот сайт разработан Голосовым Даниилом</p>
      <div class="social-icons">
  <a href="https://vk.com"><i class="fab fa-vk"></i></a>
  <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
  <a href="https://telegram.org/"><i class="fab fa-telegram"></i></a>      </div>
    </center>
  </div>
</footer></body>
</html>