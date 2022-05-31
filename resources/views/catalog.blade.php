@extends('layouts.app')

@section('content')
<div style="display: flex;justify-content: space-around;">
<h1>Каталог</h1>
</div>
    <section class="listings catolog" style="display: flex;flex-wrap: wrap;">
		
	

	<?php
	
$link = mysqli_connect('127.0.0.1','root','','fmgutkih_m1');
$sql = "SELECT * FROM tovar";
$obj = mysqli_query($link, $sql);
$res = mysqli_fetch_all($obj);



	?>
	
	<?php foreach ($res as $data): ?>
	<div class="product-wrap">
			<div class="product-image">
			   <a href="K2 MINDBENDER 108 TI(5).html">
				  <img src="<?php echo $data['4']?>">
				  <div class="shadow"></div>
			   </a>
			   <a class="detail-link" href="K2 MINDBENDER 108 TI(5).html" title="Быстрый просмотр"></a>
			</div>
			<div class="product-list">
			   <h3><?php echo $data['1'] ?></h3>
			   <div class="price"><?php echo $data['3']?></div>
			</div>
		 </div>
		 <?php endforeach; ?>



@endsection

