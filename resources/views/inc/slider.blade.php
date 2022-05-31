<!-- 

<div class="slider">
  <input type="radio" name="slider" title="slide1" checked="checked" class="slider__nav"/>
  <input type="radio" name="slider" title="slide2" class="slider__nav"/>
  <input type="radio" name="slider" title="slide3" class="slider__nav"/>
  <input type="radio" name="slider" title="slide4" class="slider__nav"/>
  <input type="radio" name="slider" title="slide5" class="slider__nav"/>
  <div class="slider__inner">
    <div class="slider__contents"><img class="slider__image " src="https://static8.depositphotos.com/1022422/1055/i/450/depositphotos_10558044-stock-photo-red-eared-slider.jpg">
      <h2 class="slider__caption">Черепашка 1</h2>
      <p class="slider__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate omnis possimus illo quos, corporis minima!</p>
    </div>
    <div class="slider__contents"><img class="slider__image " src="https://static8.depositphotos.com/1022422/1055/i/450/depositphotos_10558044-stock-photo-red-eared-slider.jpg">
      <h2 class="slider__caption">Черепашка 2</h2>
      <p class="slider__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate omnis possimus illo quos, corporis minima!</p>
    </div>
    <div class="slider__contents"><img class="slider__image " src="https://static8.depositphotos.com/1022422/1055/i/450/depositphotos_10558044-stock-photo-red-eared-slider.jpg">
      <h2 class="slider__caption">Черепашка 3</h2>
      <p class="slider__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate omnis possimus illo quos, corporis minima!</p>
    </div>
    <div class="slider__contents"><img class="slider__image " src="https://static8.depositphotos.com/1022422/1055/i/450/depositphotos_10558044-stock-photo-red-eared-slider.jpg">
      <h2 class="slider__caption">Черепашка 4</h2>
      <p class="slider__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate omnis possimus illo quos, corporis minima!</p>
    </div>
    <div class="slider__contents"><img class="slider__image " src="https://static8.depositphotos.com/1022422/1055/i/450/depositphotos_10558044-stock-photo-red-eared-slider.jpg">
      <h2 class="slider__caption">Черепашка 5</h2>
      <p class="slider__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate omnis possimus illo quos, corporis minima!</p>
    </div>
  </div>
</div> -->


<?php
	
$link = mysqli_connect('127.0.0.1','root','root','fmgutkih_m1');
$sql = "SELECT * FROM tovar";
$obj = mysqli_query($link, $sql);
$res = mysqli_fetch_all($obj);

var_dump($res); 

echo '<pre>';
print_r($res);
echo '</pre>';


	?>



<div class="slider">
  <input type="radio" name="slider" title="slide1" checked="checked" class="slider__nav"/>
  <input type="radio" name="slider" title="slide2" class="slider__nav"/>
  <input type="radio" name="slider" title="slide3" class="slider__nav"/>
  <input type="radio" name="slider" title="slide4" class="slider__nav"/>
  <input type="radio" name="slider" title="slide5" class="slider__nav"/>

  
  <div class="slider__inner">
    <?php foreach ($res as $data): ?>
    <div class="slider__contents"><img class="slider__image " src="<?php echo $data['4']?>">
      <h2 class="slider__caption"><?php echo $data['1']?></h2>
      <p class="slider__txt"><?php echo $data['3']?></p>
    </div>
    <!-- <div class="slider__contents"><img class="slider__image " src="https://static8.depositphotos.com/1022422/1055/i/450/depositphotos_10558044-stock-photo-red-eared-slider.jpg">
      <h2 class="slider__caption">Черепашка 2</h2>
      <p class="slider__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate omnis possimus illo quos, corporis minima!</p>
    </div>
    <div class="slider__contents"><img class="slider__image " src="https://static8.depositphotos.com/1022422/1055/i/450/depositphotos_10558044-stock-photo-red-eared-slider.jpg">
      <h2 class="slider__caption">Черепашка 3</h2>
      <p class="slider__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate omnis possimus illo quos, corporis minima!</p>
    </div>
    <div class="slider__contents"><img class="slider__image " src="https://static8.depositphotos.com/1022422/1055/i/450/depositphotos_10558044-stock-photo-red-eared-slider.jpg">
      <h2 class="slider__caption">Черепашка 4</h2>
      <p class="slider__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate omnis possimus illo quos, corporis minima!</p>
    </div>
    <div class="slider__contents"><img class="slider__image " src="https://static8.depositphotos.com/1022422/1055/i/450/depositphotos_10558044-stock-photo-red-eared-slider.jpg">
      <h2 class="slider__caption">Черепашка 5</h2>
      <p class="slider__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate omnis possimus illo quos, corporis minima!</p> -->
     <?php endforeach; ?>
     </div>
  
  </div>

</div>



<!-- <div class="adaptivSlayder">

  <input type="radio" name="kadoves" id="slaid1" checked>

  <input type="radio" name="kadoves" id="slaid2">

  <input type="radio" name="kadoves" id="slaid3">
  
  <input type="radio" name="kadoves" id="slaid4">
  
  <input type="radio" name="kadoves" id="slaid5">
  
  

  <div class="kadoves">

  <label for="slaid1"></label>

  <label for="slaid2"></label>

  <label for="slaid3"></label>
  
  <label for="slaid4"></label>
  
  <label for="slaid5"></label>
  
</div>

   

  <div class="adaptivSlayderlasekun">

  <div class="abusteku-deagulus">
 
  <img  src="https://static8.depositphotos.com/1022422/1055/i/450/depositphotos_10558044-stock-photo-red-eared-slider.jpg">

  <img src="https://static8.depositphotos.com/1022422/1055/i/450/depositphotos_10558044-stock-photo-red-eared-slider.jpg"> 

  <img src="https://static8.depositphotos.com/1022422/1055/i/450/depositphotos_10558044-stock-photo-red-eared-slider.jpg">
  
  <img src="https://static8.depositphotos.com/1022422/1055/i/450/depositphotos_10558044-stock-photo-red-eared-slider.jpg">
  
  <img src="https://static8.depositphotos.com/1022422/1055/i/450/depositphotos_10558044-stock-photo-red-eared-slider.jpg">
  
  
  </div>
  <div class="adaptivSlayder">

<input type="radio" name="kadoves" id="slaid1" checked>

<input type="radio" name="kadoves" id="slaid2">

<input type="radio" name="kadoves" id="slaid3">

<input type="radio" name="kadoves" id="slaid4">

<input type="radio" name="kadoves" id="slaid5">


 

<div class="adaptivSlayderlasekun">
<div class="abusteku-deagulus">
 
  <img  src="https://static8.depositphotos.com/1022422/1055/i/450/depositphotos_10558044-stock-photo-red-eared-slider.jpg">
  
  </div>
</div> -->




<!-- 
<div style="display: flex;  flex-wrap: wrap;flex-direction: column;align-content: space-around;">
       <h1 style="display:flex;">Описание товара</h1>
       <div style="display:flex;">
          <p>Черепашка 1<p>
        </div> -->