<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Basic animasi</title>
    <link rel="stylesheet" href="style2.css" />
    
    <style>
       
        </style>
  </head>

  <header>
    <nav>
      <a href="#">Home</a>
      <a href="#">About</a>
      <a href="#">Contact</a>
    </nav>
  </header>

  
  <body>
    <section1 class="hidden">
      <div class="text1">
        <h1>Halo Dunia</h1>
        <p>Ini adalah website pertama buatanku </p>
        <p>yang menggunakan animasi </p>
      </div>
          <img class="image" src="assets/1.png"  alt="Teknologi">
    </section1>
    

    

    <section2 class="hidden2">
      <body>
        <div class="container">
            <div class="wrapper">
                <div class="content">
                    <p id ="pertanyaan"></p>
                    <div class="row">
                        <input id ="jawaban" type ="text" placeholder="silahkan jawab" />
                        <button onclick="botStart()">SEND</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="loaders"></div>
        <script src="bot.js"></script>
    </body>
    <div class="text2">
      <h1>Ini ceritanya bot(JS)</h1>
      <p>Wow ini benar benar bekerja</p>
    </div>
    </section2>
    <style>
    @keyframes appear {
      from{
        scale: 0.5;

        clip-path: inset(100% 100% 0 0);

      } 
      to{

        scale: 1;
        clip-path: inset(0 0 0 0);
      }
    }
    
    .hidden2{
      animation: appear linear;
      animation-timeline: view();
      animation-range: 0% cover 60%;
    }
    </style>
    <section3 class="hidden2">
      <h2>Animasi ini keren</h2>
      <p1>under construction :D</p1>
    </section>

    <script src="app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lenis@2.0.0/dist/lenis.min.js"></script>
  </body>
</html>
