<?php
	session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Website nghe nhạc</title>
<link rel="stylesheet" href="css/animate.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<script defer src="js/all.js"></script>
<script defer src="js/player.js"></script>
<link href="css/all.css" rel="stylesheet">
<link href="css/captions.css" type="text/css" rel="stylesheet">
<link href="css/captions.minimal.css" type="text/css" rel="stylesheet">
<link href="css/giaodien.css" type="text/css" rel="stylesheet">
<link href="css/animate.min.css" type="text/css" rel="stylesheet">
<style>
	img{ width: 1000px; height: 500px;}
	body{min-height: 1000px;}
	.dropdown{
   		position: relative;
   		display: inline-block;
	}
	/*sub-menu*/
	.dropdown-content{
   		display: none;
   		position: absolute;
   		background-color: #f5f5f5;
   		z-index: 1;
   		list-style: none;
		border-radius: 5px;
		width: 200px;
	}
	.dropdown:hover .dropdown-content{
		display: block;
	}
</style>
</head>

<body>
	<section class="wrapper bounceIn">
		<header>
			<div class="container-fluid">
				<div class="row">
					<nav>
						<div class="navbar navbar-expand-sm navbar-light shadow-lg border fixed-top bg-light" style="padding-left: 10px; padding-right: 10px;">
							<div class="col-lg-2">
								<button class="navbar-toggler float-left" data-toggle="collapse" data-target="#menu_chinh">
								<span class="navbar-toggler-icon"></span>
							</button>
								<a class="navbar-brand float-right" href="index.php">AiMuZic</a>
							</div>
							<div class="col-lg-10">
								<div class="collapse navbar-collapse" id="menu_chinh">
									<ul class="navbar nav nv-pills">
										<li class="nav-item"><a class="nav-link" href="#" title="Xếp hạng">Xếp Hạng</a></li>
										  <li class="nav-item dropdown">
											<a class="nav-link" href="#" role="button" aria-haspopup="true" aria-expanded="false">Bài hát</a>
											<div class="dropdown-content">
											  	<a class="dropdown-item" href="#">Việt Nam</a>
												<div class="dropdown-divider"></div>
											  	<a class="dropdown-item" href="#">Âu Mỹ</a>
												<div class="dropdown-divider"></div>
											  	<a class="dropdown-item" href="#">Hàn Quốc</a>
												<div class="dropdown-divider"></div>
											  	<a class="dropdown-item" href="#">Nhật Bản</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Khác</a>
											</div>
										  </li>
										<li class="nav-item dropdown">
											<a class="nav-link " href="#" role="button" aria-haspopup="true" aria-expanded="false">Ca sĩ</a>
											<div class="dropdown-content">
											  	<a class="dropdown-item" href="#">Việt Nam</a>
												<div class="dropdown-divider"></div>
											  	<a class="dropdown-item" href="#">Âu Mỹ</a>
												<div class="dropdown-divider"></div>
											  	<a class="dropdown-item" href="#">Hàn Quốc</a>
												<div class="dropdown-divider"></div>
											  	<a class="dropdown-item" href="#">Nhật Bản</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Khác</a>
											</div>
										  </li>
										<li class="nav-item dropdown">
											<a class="nav-link" href="#" role="button" aria-haspopup="true" aria-expanded="false">Album</a>
											<div class="dropdown-content">
											  	<a class="dropdown-item" href="#">Việt Nam</a>
												<div class="dropdown-divider"></div>
											  	<a class="dropdown-item" href="#">Âu Mỹ</a>
												<div class="dropdown-divider"></div>
											  	<a class="dropdown-item" href="#">Hàn Quốc</a>
												<div class="dropdown-divider"></div>
											  	<a class="dropdown-item" href="#">Nhật Bản</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Khác</a>
											</div>
										  </li>
										<li class="nav-item dropdown">
											<a class="nav-link" href="#">Bài hát</a>
											<div class="dropdown-content">
											  	<a class="dropdown-item" href="#">Việt Nam</a>
												<div class="dropdown-divider"></div>
											  	<a class="dropdown-item" href="#">Âu Mỹ</a>
												<div class="dropdown-divider"></div>
											  	<a class="dropdown-item" href="#">Hàn Quốc</a>
												<div class="dropdown-divider"></div>
											  	<a class="dropdown-item" href="#">Nhật Bản</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Khác</a>
											</div>
										  </li>
										<li class="nav-item"><a class="nav-link" href="#" title="Hot 100">Hot 100</a></li>
										<?php
											if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
												echo "<li class='nav-item dropdown'>
													<a class='nav-link' href='#' title='nhạc cá nhân'><b>".$_SESSION['username']."</b></a>
													<div class='dropdown-content' style='width:150px;height:140px;'>
													  	<a class='dropdown-item' href='#'>Trang cá nhân</a>
														<div class='dropdown-divider'></div>
													  	<a class='dropdown-item' href='#'>Nhạc cá nhân</a>
														<div class='dropdown-divider'></div>
													  	<a class='dropdown-item' href='dangxuat.php'><i class='fas fa-sign-out-alt'></i> Đăng xuất</a>
													</div>
												</li>";
											}
										 else{
										echo "<li class='nav-item dropdown'>
											<a class='nav-item dropdown-toggle' role='button' data-toggle='dropdown' title='Đăng Nhập'>
												<i class='fas fa-user-circle' style='width: 25px; height: 25px;'></i>
											</a>
											<div class='dropdown-menu'>
												<a href='#' class='dropdown-item' data-toggle='modal' data-target='#hide_dangnhap' id='dangnhap_ne' ><i class='fas fa-sign-in-alt'></i> Đăng Nhập</a>
												<div class='dropdown-divider'></div>
												<a href='#'' class='dropdown-item' data-toggle='modal' data-target='#hide_dangky'><i class='fas fa-user-plus'></i> Đăng Ký</a>
											</div>
										</li>";
												}
										?>
										<li class="nav-item"><a href="#" class="nav-link" title="Upload"><i class="fas fa-cloud-upload-alt" style="color:black; width: 30px; height: 30px;"></i></a></li>
									</ul>
									<form class="form-inline ml-2">
										<input class="form-control" type="search" placeholder="Nhập tên bài hát, ca sĩ, album,..." style="width: 250px;">
										<button type="submit" class="btn btn-info"><i class="fas fa-search fa-1x"></i></button>
									</form>
								</div>
							</div>
						</div>
					</nav>
					<?php
						include("login.php");
					 ?>
					 <?php
					 	include('dangky.php');
					 ?>
				</div>
			</div>
		</header>
		<section>
			<div class="container-fluid" style="margin-top:60px;">
				<div class="row">
					<div class="col-lg-12">
						<div class="carousel slide shadow" data-ride="carousel" id="slideshow">
							<div class="carousel-inner">
								<div class="carousel-item" data-interval="10000">
									<img src="images/FILE-20170901-1420WDJFDVM6D8KL.jpg" class="d-block w-100">
								</div>
								<div class="carousel-item active" data-interval="2000">
									<img src="images/FILE-20170901-1420WDJFDVM6D8KL.jpg" class="d-block w-100">
								</div>
								<div class="carousel-item">
									<img src="images/FILE-20170901-1420WDJFDVM6D8KL.jpg" class="d-block w-100">
								</div>
							</div>
							<a class="carousel-control-prev" href="#slideshow" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon"></span>
								<span class="sr-only" aria-hidden="true">Previous</span>
							</a>
							<a class="carousel-control-next" href="#slideshow" role="button" data-slide="next">
								<span class="carousel-control-next-icon"></span>
								<span class="sr-only" aria-hidden="true">Next</span>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="container mt-5 shadow px-3 py-3">
				<div class="row">
					<div class="col-lg-8 col-md-12">
						<div class="float-left"><a href="#" style="font-weight: bold;">Album mới nhất 2019</a></div>
						<div class="clearfix"></div>
							<div class="mt-2">
							<figure class="figure mr-3">
								<img src="images/FILE-20170901-1420WDJFDVM6D8KL.jpg" style="width: 165px; height: 165px;" class="img-thumbnail">
								<figcaption class="figure-caption">Album A</figcaption>
							</figure>
							<figure class="figure mr-3">
								<img src="images/FILE-20170901-1420WDJFDVM6D8KL.jpg" style="width: 165px; height: 165px;" class="img-thumbnail">
								<figcaption class="figure-caption">Album A</figcaption>
							</figure>
							<figure class="figure mr-3">
								<img src="images/FILE-20170901-1420WDJFDVM6D8KL.jpg" style="width: 165px; height: 165px;" class="img-thumbnail">
								<figcaption class="figure-caption">Album A</figcaption>
							</figure>
							<figure class="figure">
								<img src="images/FILE-20170901-1420WDJFDVM6D8KL.jpg" style="width: 165px; height: 165px;" class="img-thumbnail">
								<figcaption class="figure-caption">Album A</figcaption>
							</figure>
							</div>
						<div class="float-left"><a href="#" style="font-weight: bold;">Nghe gì hôm nay</a></div>
						<div class="clearfix"></div>
							<div class="mt-2 mx-auto">
							<figure class="figure mr-3">
								<img src="images/FILE-20170901-1420WDJFDVM6D8KL.jpg" style="width: 165px; height: 165px;" class="img-thumbnail">
								<figcaption class="figure-caption">Album A</figcaption>
							</figure>
							<figure class="figure mr-3">
								<a href="#"><img src="images/FILE-20170901-1420WDJFDVM6D8KL.jpg" style="width: 165px; height: 165px;" class="img-thumbnail"></a>
								<figcaption class="figure-caption">Album A</figcaption>
							</figure>
							<figure class="figure mr-3">
								<img src="images/FILE-20170901-1420WDJFDVM6D8KL.jpg" style="width: 165px; height: 165px;" class="img-thumbnail">
								<figcaption class="figure-caption">Album A</figcaption>
							</figure>
							<figure class="figure">
								<img src="images/FILE-20170901-1420WDJFDVM6D8KL.jpg" style="width: 165px; height: 165px;" class="img-thumbnail">
								<figcaption class="figure-caption">Album A</figcaption>
							</figure>

						</div>
						</div>
					<div class="col-lg-4">
						<div class="float-left text-danger" style="font-weight: bold;">Bảng xếp hạng</div>
						<div class="clearfix"></div>
						<div class="mt-2 mx-auto">
							<ul class="nav nav-tabs bg-light justify-content-center rounded" id="bxh" role="tablist">
								<li class="nav-item float-left">
									<a class="nav-link active" id="vietnam-tab" data-toggle="tab" href="#vietnam" role="tab" style="font-weight: bold;">Việt Nam</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="aumy-tab" data-toggle="tab" href="#aumy" role="tab" style="font-weight: bold;">Âu Mỹ</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="hanquoc-tab" data-toggle="tab" href="#hanquoc" role="tab" style="font-weight: bold;">Hàn Quốc</a>
								</li>
							</ul>
							<div class="tab-content" id="content-tab">
								<div class="tab-pane fade show active" id="vietnam" role="tabpanel">bảng xếp hạng việt nam ở đây<br>
								bảng xếp hạng việt nam ở đây<br>
									bảng xếp hạng việt nam ở đây này<br>
									bảng xếp hạng việt nam ở đây<br>
									bảng xếp hạng việt nam ở đây<br>
									bảng xếp hạng việt nam ở đây<br>
									bảng xếp hạng việt nam ở đây<br>
									bảng xếp hạng việt nam ở đây<br>
									bảng xếp hạng việt nam ở đây<br>
									bảng xếp hạng việt nam ở đây<br>
									bảng xếp hạng việt nam ở đây<br>
									bảng xếp hạng việt nam ở đây<br>
									bảng xếp hạng việt nam ở đây<br>
								</div>
								<div class="tab-pane fade show" id="aumy" role="tabpanel">Bảng xếp hạng âu mỹ ở đây</div>
								<div class="tab-pane fade show" id="hanquoc" role="tabpanel">bảng xếp hạng hàn quốc ở đây</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row mt-2">
					<div class="col-md-8">
						<div class="float-left text-danger" style="font-weight: bold;">Top 100</div>
						<div class="clearfix"></div>
						<div id="top100" class="carousel slide mt-2" data-ride="carousel">
						  <div class="carousel-inner">
							<div class="carousel-item active">
							<figure class="figure mr-3">
								<a href="#">
									<img src="images/FILE-20170901-1420WDJFDVM6D8KL.jpg" style="width: 165px; height: 165px;" class="img-thumbnail">
									<figcaption class="figure-caption">Album A</figcaption>
								</a>
							</figure>
							<figure class="figure mr-3">
								<a href="#">
									<img src="images/FILE-20170901-1420WDJFDVM6D8KL.jpg" style="width: 165px; height: 165px;" class="img-thumbnail">
									<figcaption class="figure-caption">Album A</figcaption>
								</a>
							</figure>
							<figure class="figure mr-3">
								<a href="#">
									<img src="images/FILE-20170901-1420WDJFDVM6D8KL.jpg" style="width: 165px; height: 165px;" class="img-thumbnail">
									<figcaption class="figure-caption">Album A</figcaption>
								</a>
							</figure>
							<figure class="figure mr">
								<a href="#">
									<img src="images/FILE-20170901-1420WDJFDVM6D8KL.jpg" style="width: 165px; height: 165px;" class="img-thumbnail">
									<figcaption class="figure-caption">Album A</figcaption>
								</a>
							</figure>
							</div>
							<div class="carousel-item">
							<figure class="figure mr-3">
								<a href="#">
									<img src="images/FILE-20170901-1420WDJFDVM6D8KL.jpg" style="width: 165px; height: 165px;" class="img-thumbnail">
									<figcaption class="figure-caption">Album A</figcaption>
								</a>
							</figure>
							<figure class="figure mr-3">
								<a href="#">
									<img src="images/FILE-20170901-1420WDJFDVM6D8KL.jpg" style="width: 165px; height: 165px;" class="img-thumbnail">
									<figcaption class="figure-caption">Album A</figcaption>
								</a>
							</figure>
							<figure class="figure mr-3">
								<a href="#">
									<img src="images/FILE-20170901-1420WDJFDVM6D8KL.jpg" style="width: 165px; height: 165px;" class="img-thumbnail">
									<figcaption class="figure-caption">Album A</figcaption>
								</a>
							</figure>
							<figure class="figure mr">
								<a href="#">
									<img src="images/FILE-20170901-1420WDJFDVM6D8KL.jpg" style="width: 165px; height: 165px;" class="img-thumbnail">
									<figcaption class="figure-caption">Album A</figcaption>
								</a>
							</figure>
							</div>
							<div class="carousel-item">
							  							<figure class="figure mr-3">
								<a href="#">
									<img src="images/FILE-20170901-1420WDJFDVM6D8KL.jpg" style="width: 165px; height: 165px;" class="img-thumbnail">
									<figcaption class="figure-caption">Album A</figcaption>
								</a>
							</figure>
							<figure class="figure mr-3">
								<a href="#">
									<img src="images/FILE-20170901-1420WDJFDVM6D8KL.jpg" style="width: 165px; height: 165px;" class="img-thumbnail">
									<figcaption class="figure-caption">Album A</figcaption>
								</a>
							</figure>
							<figure class="figure mr-3">
								<a href="#">
									<img src="images/FILE-20170901-1420WDJFDVM6D8KL.jpg" style="width: 165px; height: 165px;" class="img-thumbnail">
									<figcaption class="figure-caption">Album A</figcaption>
								</a>
							</figure>
							<figure class="figure mr">
								<a href="#">
									<img src="images/FILE-20170901-1420WDJFDVM6D8KL.jpg" style="width: 165px; height: 165px;" class="img-thumbnail">
									<figcaption class="figure-caption">Album A</figcaption>
								</a>
							</figure>
							</div>
						  </div>
						  <a class="carousel-control-prev" href="#top100" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						  </a>
						  <a class="carousel-control-next" href="#top100" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						  </a>
						</div>
					</div>
				</div>
				<div class="row mt-2">
					<div class="col-lg-4 mt-2">
						<div class="float-left link" style="font-weight: bold;font-size: 20px;"><a href="#">Bài Hát Mới ></a></div>
						<div class="clearfix"></div>
							  <div class="list-group list-group-flush mt-4">
								  <a class="list-group-item" href="#">
								  	<div class="media float-left">
									  <img src="images/FILE-20170901-1420WDJFDVM6D8KL.jpg" class="mr-3" style="width: 40px; height: 40px;">
									  <div class="media-body" style="line-height: 11px; font-size: 13px;">
										<p style="font-weight: bold;">Bài Hát A</p>
										Ca Sĩ A
									  </div>
									</div>
									<div class="clearfix"></div>
								  </a>
								  <a class="list-group-item" href="#">
								  	<div class="media float-left">
									  <img src="images/FILE-20170901-1420WDJFDVM6D8KL.jpg" class="mr-3" style="width: 40px; height: 40px;">
									  <div class="media-body" style="line-height: 11px; font-size: 13px;">
										<p style="font-weight: bold;">Bài Hát A</p>
										Ca Sĩ A
									  </div>
									</div>
									<div class="clearfix"></div>
								  </a>
								  <a class="list-group-item" href="#">
								  	<div class="media float-left">
									  <img src="images/FILE-20170901-1420WDJFDVM6D8KL.jpg" class="mr-3" style="width: 40px; height: 40px;">
									  <div class="media-body" style="line-height: 11px; font-size: 13px;">
										<p style="font-weight: bold;">Bài Hát A</p>
										Ca Sĩ A
									  </div>
									</div>
									<div class="clearfix"></div>
								  </a>
								  <a class="list-group-item" href="#">
								  	<div class="media float-left">
									  <img src="images/FILE-20170901-1420WDJFDVM6D8KL.jpg" class="mr-3" style="width: 40px; height: 40px;">
									  <div class="media-body" style="line-height: 11px; font-size: 13px;">
										<p style="font-weight: bold;">Bài Hát A</p>
										Ca Sĩ A
									  </div>
									</div>
									<div class="clearfix"></div>
								  </a>
								  <a class="list-group-item " href="#">
								  	<div class="media float-left">
									  <img src="images/FILE-20170901-1420WDJFDVM6D8KL.jpg" class="mr-3" style="width: 40px; height: 40px;">
									  <div class="media-body" style="line-height: 11px; font-size: 13px;">
										<p style="font-weight: bold;">Bài Hát A</p>
										Ca Sĩ A
									  </div>
									</div>

								  </a>
							</div>
					</div>
				  <div class="col-lg-4 mt-2">
						<div class="link float-left" style="font-weight: bold;font-size: 20px;"><a href="#">Bài Hát Hot ></a></div>
						<div class="clearfix"></div>
							  <div class="list-group list-group-flush mt-4">
								  <a class="list-group-item" href="#">
								  	<div class="media float-left">
									  <img src="images/FILE-20170901-1420WDJFDVM6D8KL.jpg" class="mr-3" style="width: 40px; height: 40px;">
									  <div class="media-body" style="line-height: 11px; font-size: 13px;">
										<p style="font-weight: bold;">Bài Hát A</p>
										Ca Sĩ A
									  </div>
									</div>
									<div class="clearfix"></div>
								  </a>
								  <a class="list-group-item" href="#">
								  	<div class="media float-left">
									  <img src="images/FILE-20170901-1420WDJFDVM6D8KL.jpg" class="mr-3" style="width: 40px; height: 40px;">
									  <div class="media-body" style="line-height: 11px; font-size: 13px;">
										<p style="font-weight: bold;">Bài Hát A</p>
										Ca Sĩ A
									  </div>
									</div>
									<div class="clearfix"></div>
								  </a>
								  <a class="list-group-item" href="#">
								  	<div class="media float-left">
									  <img src="images/FILE-20170901-1420WDJFDVM6D8KL.jpg" class="mr-3" style="width: 40px; height: 40px;">
									  <div class="media-body" style="line-height: 11px; font-size: 13px;">
										<p style="font-weight: bold;">Bài Hát A</p>
										Ca Sĩ A
									  </div>
									</div>
									<div class="clearfix"></div>
								  </a>
								  <a class="list-group-item" href="#">
								  	<div class="media float-left">
									  <img src="images/FILE-20170901-1420WDJFDVM6D8KL.jpg" class="mr-3" style="width: 40px; height: 40px;">
									  <div class="media-body" style="line-height: 11px; font-size: 13px;">
										<p style="font-weight: bold;">Bài Hát A</p>
										Ca Sĩ A
									  </div>
									</div>
									<div class="clearfix"></div>
								  </a>
								  <a class="list-group-item " href="#">
								  	<div class="media float-left">
									  <img src="images/FILE-20170901-1420WDJFDVM6D8KL.jpg" class="mr-3" style="width: 40px; height: 40px;">
									  <div class="media-body" style="line-height: 11px; font-size: 13px;">
										<p style="font-weight: bold;">Bài Hát A</p>
										Ca Sĩ A
									  </div>
									</div>
									<div class="clearfix"></div>
								  </a>
					</div>
				  </div>
					<div class="col-lg-4 mx-auto">
						<div class="card-header" align="center" style="font-weight: bold;">Nghệ sĩ</div>
						<div class="card">
						  <img src="images/FILE-20170901-1420WDJFDVM6D8KL.jpg" class="card-img-top" style="width: 350px; height: 320px;">
						  <div class="card-body">
							<h5 class="card-title">Nghệ Sĩ A</h5>
							<p class="card-text">Giới thiệu về nghệ sĩ a gì gì đó</p>
						  </div>
						</div>
					</div>
			  </div>
				<div class="row mt-5 mb-5">
					<div class="col-md-12">
						<div class="card text-center">
						  <div class="card-header">
							  <div class="nav nav-pills float-left" id="nav-tab-chude-va-theloai" role="tablist">
								<a class="nav-item nav-link active" id="nav-chu-de" data-toggle="tab" href="#chu-de" role="tab">Chủ Đề</a>
								<a class="nav-item nav-link" id="nav-the-loai" data-toggle="tab" href="#the-loai" role="tab" >Thể Loại</a>
							  </div>
							  <div class="float-right link" style="font-size:20px; font-weight: bold;">	<a href="#">Chủ đề & Thể loại</a>
							  </div>
						  </div>
						  <div class="card-body">
							  <div class="tab-content" id="noidung-chude-theloai">
								  <div class="tab-pane fade show active" id="chu-de" role="tabpanel">
								  	<div class="mt-2 mx-auto">
							<figure class="figure mr-3">
								<img src="images/FILE-20170901-1420WDJFDVM6D8KL.jpg" style="width: 165px; height: 165px;" class="img-thumbnail">
								<figcaption class="figure-caption">Album A</figcaption>
							</figure>
							<figure class="figure mr-3">
								<a href="#"><img src="images/FILE-20170901-1420WDJFDVM6D8KL.jpg" style="width: 165px; height: 165px;" class="img-thumbnail"></a>
								<figcaption class="figure-caption">Album A</figcaption>
							</figure>
							<figure class="figure mr-3">
								<img src="images/FILE-20170901-1420WDJFDVM6D8KL.jpg" style="width: 165px; height: 165px;" class="img-thumbnail">
								<figcaption class="figure-caption">Album A</figcaption>
							</figure>
							<figure class="figure mr-3">
								<img src="images/FILE-20170901-1420WDJFDVM6D8KL.jpg" style="width: 165px; height: 165px;" class="img-thumbnail">
								<figcaption class="figure-caption">Album A</figcaption>
							</figure>
							<figure class="figure">
								<img src="images/FILE-20170901-1420WDJFDVM6D8KL.jpg" style="width: 165px; height: 165px;" class="img-thumbnail">
								<figcaption class="figure-caption">Album A</figcaption>
							</figure>

						</div>
								  </div>
								<div class="tab-pane fade show" id="the-loai" role="tabpanel">
								 <div class="mt-2 mx-auto">
							<figure class="figure mr-3">
								<img src="images/FILE-20170901-1420WDJFDVM6D8KL.jpg" style="width: 165px; height: 165px;" class="img-thumbnail">
								<figcaption class="figure-caption">Album A</figcaption>
							</figure>
							<figure class="figure mr-3">
								<a href="#"><img src="images/FILE-20170901-1420WDJFDVM6D8KL.jpg" style="width: 165px; height: 165px;" class="img-thumbnail"></a>
								<figcaption class="figure-caption">Album A</figcaption>
							</figure>
							<figure class="figure mr-3">
								<img src="images/FILE-20170901-1420WDJFDVM6D8KL.jpg" style="width: 165px; height: 165px;" class="img-thumbnail">
								<figcaption class="figure-caption">Album A</figcaption>
							</figure>
							<figure class="figure mr-3">
								<img src="images/FILE-20170901-1420WDJFDVM6D8KL.jpg" style="width: 165px; height: 165px;" class="img-thumbnail">
								<figcaption class="figure-caption">Album A</figcaption>
							 </figure>
							<figure class="figure">
								<img src="images/FILE-20170901-1420WDJFDVM6D8KL.jpg" style="width: 165px; height: 165px;" class="img-thumbnail">
								<figcaption class="figure-caption">Album A</figcaption>
							</figure>
						</div>
								</div>
								</div>
						  </div>
						</div>
					</div>
				</div>
				</div>
			</div>
		</section>
	<footer>
		<div class="row">
			<div class="col-12">
				<div class="jumbotron jumbotron-fluid mb-0 mt-5 border">
				  <div class="container">
					<h1 class="display-4">Footer</h1>
					<p class="lead">Giao diện website nhóm 92</p>
				  </div>
				</div>
			</div>
		</div>
	</footer>
	</section>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="js/bootstrap.min.js" ></script>
</body>
</html>
