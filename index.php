<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Snake Game</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
 <style>

 body{
  background-color: #263445;
  color: #fff;
 }

 .canva-container{
  width: 300px;
  margin: 0 auto;
 }

 .canvas{
  border: 1px solid #fff;
  display: block;
  margin: 0 auto;
 }

 .mobile-controls{
  display: none;
 } 

 .mobile-controls img{
  width: 50px;
  padding: 5px;
 }

 @media (max-width: 500px){
  .mobile-controls{
   display:block;
  }
 }

 </style>
</head>
<body class="text-center">
<container>

  <h1 class="mb-5">Snake</h1>

  <div class="canva-container mb-5">

   <div class="row">
     <p class="score col-6 text-center"></p>
     <p class="highest col-6 text-center"></p>
   </div>
    
    <canvas class="canvas" height="300" width="300" style="background-color: #3e3e3e;"></canvas>
  </div>

 <div class="mobile-controls">
  <div class="row">
   <div class="col-12" onclick="snake.changeDirection('Up');"><img id="up" src="images/up.png"></div>
  </div>
  <div class="row">
   <div class="col-6 text-right" onclick="snake.changeDirection('Left')"><img id="left" src="images/left.png"></div>
   
   <div class="col-6 text-left" onclick="snake.changeDirection('Right')"><img id="right" src="images/right.png"></div>
  </div>
  <div class="row">
   <div class="col-12" onclick="snake.changeDirection('Down')"><img id="down" src="images/down.png"></div>
  </div>
  

 </div>

</container>

</body>
<script src="fruit.js"></script>
<script src="snake.js"></script>
<script src="draw.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

<script>

 //MOUSE ENTER//
 $("#up").mouseenter(function(){
  $(this).attr("src", "images/up-white.png");
 });

 $("#left").mouseenter(function(){
  $(this).attr("src", "images/left-white.png");
 });

 $("#right").mouseenter(function(){
  $(this).attr("src", "images/right-white.png");
 });

 $("#down").mouseenter(function(){
  $(this).attr("src", "images/down-white.png");
 });

 //MOUSE LEAVES//
 $("#up").mouseleave(function(){
  $(this).attr("src", "images/up.png");
 });

 $("#left").mouseleave(function(){
  $(this).attr("src", "images/left.png");
 });

 $("#right").mouseleave(function(){
  $(this).attr("src", "images/right.png");
 });

 $("#down").mouseleave(function(){
  $(this).attr("src", "images/down.png");
 });

</script>
</html>