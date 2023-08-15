<?php
   include 'config.php';
   include 'libs/libs.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Pagination Card</title>
   <link rel="stylesheet" href="web/css/style.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" charset="utf8"></script>     
</head>
<body>
   <section class="container">
      <div class="card-content">
         <div class="card">
            <div class="card-img">
               <img src="web/img/1.jpg" alt="">
            </div>
            <div class="card-info">
               <h3>Card 01</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt?</p>
            </div>
         </div>
         <div class="card">
            <div class="card-img">
               <img src="web/img/2.jpg" alt="">
            </div>
            <div class="card-info">
               <h3>Card 02</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt?</p>
            </div>
         </div>
         <div class="card">
            <div class="card-img">
               <img src="web/img/3.jpg" alt="">
            </div>
            <div class="card-info">
               <h3>Card 03</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt?</p>
            </div>
         </div>
         <div class="card">
            <div class="card-img">
               <img src="web/img/4.jpg" alt="">
            </div>
            <div class="card-info">
               <h3>Card 04</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt?</p>
            </div>
         </div>
         <div class="card">
            <div class="card-img">
               <img src="web/img/5.jpg" alt="">
            </div>
            <div class="card-info">
               <h3>Card 05</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt?</p>
            </div>
         </div>
         <div class="card">
            <div class="card-img">
               <img src="web/img/6.jpg" alt="">
            </div>
            <div class="card-info">
               <h3>Card 06</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt?</p>
            </div>
         </div>
         <div class="card">
            <div class="card-img">
               <img src="web/img/7.jpg" alt="">
            </div>
            <div class="card-info">
               <h3>Card 07</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt?</p>
            </div>
         </div>
         <div class="card">
            <div class="card-img">
               <img src="web/img/8.jpg" alt="">
            </div>
            <div class="card-info">
               <h3>Card 08</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt?</p>
            </div>
         </div>
         
      </div>
      <div class="pagination">
         <li class="page-item previous-page disable"><a href="#" class="page-link">prev</a></li>
         <li class="page-item current-page active" ><a href="#" class="page-link">1</a></li>
         <li class="page-item current-page"><a href="#" class="page-link">2</a></li>
         <li class="page-item current-page"><a href="#" class="page-link">3</a></li>
         <li class="page-item current-page"><a href="#" class="page-link">4</a></li>
         <li class="page-item dots"><a href="#" class="page-link">....</a></li>
         <li class="page-item current-page"><a href="#" class="page-link">10</a></li>
         <li class="page-item next-page"><a href="#" class="page-link">next</a></li>
      </div>
   </section>

   <script src="web/js/script.js"></script>
</body>
</html>