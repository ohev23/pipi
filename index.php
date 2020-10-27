<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<title></title>
</head>
<body>
	<div>
		<?php 
				$con =mysqli_connect('127.0.0.1','root',"","project");
				$query = mysqli_query($con, "SELECT * FROM magazine");
				$string1=$query->fetch_assoc();
				
			?>
		<!-- шапка-->
		<div class="col-12 mx-auto bg-info" >
			<div class="col-10 mx-auto px-0 d-flex" style="height: 100px;">
				<div class="col-1 px-0" style="height: 100px;">
					<img src="img/event.svg" class="w-100">
				</div>
				<div class="col-7 d-flex" style="height: 100px;">
					<div class="col-3">
						<p>Бесплатная доставка</p>
					</div>
					<div class="col-3">
						<p>Мои товары</p>
					</div>
					<div class="col-3">
						<p>Избранное</p>
					</div>
					<div class="col-3">
						<p><a href="admin.php">Админ-панель</a></p>
					</div>
				</div>
				<div class="col-4 d-flex" style="height: 100px;">
					<div class="col-4">
						<img src="img/www.svg" class="w-100">
					</div>
					<div class="col-4">
						<img src="img/he.svg" class="w-100">
					</div>
					<div class="col-4">
						<img src="img/world.svg" class="w-100">
					</div>
				</div>
			</div>
		</div>

		<!--название-->
		<div class="col-8 mx-auto my-3 " style="height: 500px;">
			<div class="col-10 mx-auto px-0 d-flex" style="height: 500px;">
				<div class="col-7" style="height: 500px;">
					<img src="img/women.svg" class="w-100">
				</div>
				<div class="col-5" style="height: 500px;">
					<h1 class="mt-5">Интернет-магазин</h1>
				</div>
			</div>
		</div>
			<div class="row mt-4">
							<div class="col-6">
								<?php
									
								 ?>
							</div>
							<div class="col-6">
									<h5>
										<?php
											echo $_GET["author"];
										 ?>
									</h5>
									<p>
										<?php
											echo $_GET["text"];
										 ?>
									</p>
							</div>
						</div>
		<!--хотелки-->
		<div class="col-8 mx-auto px-0" style="height: 400px;">
			<div class="col-12 mb-3 d-flex px-0" style="height: 400px;">

					<div class="col-4" style="height: 400px;">
						<div class="col-12 d-flex px-0" style="height: 200px;">
							<div class="col-6 " style="height: 200px;">
								<img src="img/ruby.jpg" class="w-100 mt-3">
							</div>
							<div class="col-6" style="height: 200px;">
								<img src="img/apple.jpg" class="w-100 mt-3">
							</div>
						</div>
						<div class="col-12 d-flex px-0" style="height: 200px;">
							<div class="col-6 " style="height: 200px;">
								<img src="img/copic.png" class="w-100 h-100 mt-2">
							</div>
							<div class="col-6" style="height: 200px;">
								<img src="img/jojo.jpg" class="w-100 h-100 mt-2">
							</div>
						</div>
					</div>

					<div class="col-4">
						<div class="col-12 px-0" style="height: 400px;">
							<div class="col-12" style="height: 400px;">
								<img src="img/king.jpg" class="w-100 h-100 mt-2">
							</div>
						</div>
					</div>

					<div  class="col-4">
						<div class="col-12 d-flex px-0" style="height: 200px;">
							<div class="col-6" style="height: 200px;">
								<img src="img/nike2.jpg" class="w-100 h-100 mt-2">
							</div>
							<div class="col-6" style="height: 200px;">
								
							</div>
						</div>
						<div class="col-12 d-flex px-0" style="height: 200px;">
							<div class="col-6" style="height: 200px;">
								<img src="img/kk.jpg" class="w-100 ">
							</div>
							<div class="col-6" style="height: 200px;">
								<img src="">
							</div>
						</div>
					</div>
			</div>
		</div>
		
	</div>
</body>
</html>s