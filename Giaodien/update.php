<?php
    session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Upload nhạc</title>
<link rel="stylesheet" href="css/animate.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link href="css/all.css" rel="stylesheet">
<link href="css/giaodien.css" type="text/css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="css/golden-forms.css"/>
<link type="text/css" rel="stylesheet" href="css/font-awesome.min.css"/>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,400italic' rel='stylesheet' type='text/css'> 
<script defer src="js/all.js"></script>
<style>
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
	<?php
        include ("config.php");
        $tenbaihat="";
        $tencasy="";
        $theloai="";
        $ketqua="";
        $duongdan="";
		if (isset($_POST['button_huy'])) {
			header("Location:index.php");
		}elseif (isset($_POST['button_them'])) {
            $tenbaihat=$_POST['tenbaihat'];
            $tencasy=$_POST['tencasy'];
            $theloai=$_POST['theloai'];
            $nhac = $_FILES['f_nhac'];
            $name=$nhac['name'];
            $type =$nhac['type'];
            $error =$nhac['error'];
            if (($type=='audio/x-m4a' || $type=='audio/mp3' || $type=='audio/ogg') && $error == 0) {
                if ($_SESSION['username']=='ndl1602') {
                    $duongdan = "nhac/$name";
                }else {
                    $duongdan = "upload_nhac/$name";
                }
                $result = move_uploaded_file($nhac['tmp_name'], "$duongdan");
                if ($result==true) {
                    if ($_SESSION['username']=='ndl1602') {
                        $sql = "INSERT INTO baihat(tenbaihat,casy,theloai,duongdan) VALUES ('$tenbaihat','$tencasy','$theloai','$duongdan')";
                    }else {
                        $sql = "INSERT INTO baihatmoi(tenbaihat,casy,theloai,duongdan) VALUES ('$tenbaihat','$tencasy','$theloai','$duongdan')";
                    }
                    mysqli_query($connect,$sql);
                    $ketqua = "Upload thành công";
                }
                else {
                    $ketqua = "Có lỗi trong quá trình thực hiện vui lòng thử lại";
                }
            }
            else {
                $ketqua = "Định dạng file không đúng phải là đuôi .mp4, .mp3, .ogg, xin mời nhập lại";
            }
        }
	 ?>
    <section class="wrapper bounceIn">
        <header>
            <div class="container-fluid">
                <div class="row">
                    <nav>
                        <div class="navbar navbar-expand-lg navbar-light shadow-lg bg-light fixed-top" style="padding-left: 10px; padding-right: 10px;">
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
                                                    <a class='nav-link' href='#' title='nhạc cá nhân'>".$_SESSION['username']."</a>
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
        <div class="container border shadow-lg px-5 pb-5" style="margin-top: 90px;">
            <div class="row mt-3">
                <div class="col-lg-12">
                    <form name="addnhac" action="" method="post" enctype="multipart/form-data">
                        <div class="gforms spaced">    
                          <div class="golden-forms wrapper">
                            
                            <div class="form-title">
                                <h2>Upload Nhạc</h2>
                            </div>

                             <div class="form-enclose">
                                  <div class="form-section">
                                
                                <section>
                                  <div class="row">
                                          <div class="col3 first">
                                                          <label for="tenbaihat" class="lbl-text tleft">Tên bài hát:</label>
                                          </div>
                                         <div class="col6 last">
                                                         <label class="lbl-ui append-icon">
                                                                    <input type="text" name="tenbaihat" class="input" value="<?php echo $tenbaihat ?>" required title="Vui lòng nhập vào tên bài át" />
                                                                    <b class="tooltip left-top"><em> Tên bài hát </em></b>
                                                                    <span><i class="fas fa-music"></i></span>
                                                         </label>
                                         </div>
                               </div> <!--kết thúc row-->                            
                               </section> 
                               <section>
                                  <div class="row">
                                          <div class="col3 first">
                                                          <label for="tensp" class="lbl-text tleft">Tên ca sỹ:</label>
                                          </div>
                                         <div class="col6 last">
                                                         <label class="lbl-ui append-icon">
                                                                    <input type="text" name="tencasy" class="input" value="<?php echo $tencasy ?>" required title="Vui lòng nhập vào tên ca sỹ" />
                                                                    <b class="tooltip left-top"><em> Tên ca sỹ </em></b>
                                                                    <span><i class="far fa-user"></i></span>
                                                         </label>
                                         </div>
                               </div> <!--kết thúc row-->                            
                               </section> 
                               <section>
                                  <div class="row">
                                          <div class="col3 first">
                                                          <label for="theloai" class="lbl-text tleft">Thể loại:</label>
                                          </div>
                                         <div class="col6 last">
                                                         <label class="lbl-ui append-icon">
                                                                    <input type="text" name="theloai" class="input" value="<?php echo $theloai ?>" required title="Vui lòng nhập vào thể loại bài hát" />
                                                                    <b class="tooltip left-top"><em> Thể loại bài hát </em></b>
                                                                    <span><i class="fas fa-music"></i></span>
                                                         </label>
                                         </div>
                               </div> <!--kết thúc row-->                            
                               </section> 
                               <section>
                                  <div class="row">
                                          <div class="col3 first">
                                                          <label for="file_nhac" class="lbl-text tleft">File Nhạc:</label>
                                          </div>
                                         <div class="col6 last">
                                                         <label class="lbl-ui file-input">
                                                             <span class="button blue">
                                                                <input type="file" name="f_nhac" onChange="this.parentNode.nextSibling.value=this.value" />Chọn nhạc
                                                             </span><input type="text" placeholder="Chưa chọn nhạc" readonly class="input">
                                                         </label>
                                         </div>
                               </div> <!--kết thúc row-->                            
                               </section>
                               <?php if ($ketqua!="") { ?>
                               <section>
                                   <p align="center" class="notification <?php if($ketqua=='Upload thành công') echo "success"; else echo "error"; ?> ">
                                       <?php echo $ketqua; ?>
                                   </p>
                               </section>
                                <?php } ?>
                               <section> 
                                   <p align="center">
                                       <input name="button_them" type="submit" class="button blue" value="Thêm"/>
                                       <input name="button_huy" type="submit" class="button red" value="Hủy"/>
                                  </p>
                              </section>                
                                
                                
                                </div>
                              </div>
                            
                            
                            </div>
                          </div>
                        </form>        
                </div>
            </div>
        </div>
        <footer>
        <div class="row">
            <div class="col-12">
                <div class="jumbotron jumbotron-fluid mb-0 mt-5 border fix-bottom">
                  <div class="container">
                    <h1 class="display-4">Footer</h1>
                    <p class="lead">Giao diện website nhóm 92</p>
                  </div>
                </div>
            </div>
        </div>
    </footer>
    </section>
    </section>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="js/bootstrap.min.js" ></script>
</body>
</html>
