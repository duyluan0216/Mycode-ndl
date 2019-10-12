<?php
    session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Tên bài hát - Tên ca sĩ</title>
<link rel="stylesheet" href="css/animate.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<script defer src="js/all.js"></script>
<link href="css/all.css" rel="stylesheet">
<link href="css/giaodien.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/player.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
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
                <div class="col-lg-8">
                    <div class="gianchu">
                        <div class="media mb-3">
                          <img src="images/FILE-20170901-1420WDJFDVM6D8KL.jpg" class="mr-3" alt="album" width="200px" height="175px">
                          <div class="media-body">
                            <h5 class="mt-0">Tên bài hát</h5>
                            <p>Ca sĩ:</p>
                            <p>Sáng tác:</p>
                            <p>Album:</p>
                            <p>Năm phát hành:</p>
                          </div>
                    </div>
                    </div>
                <!-- partial:index.partial.html -->
                <!-- Called of font style  file -->

                <link href='https://fonts.googleapis.com/css?family=Allerta' rel='stylesheet'>
                    <div class="container-audio">
                        <div class="colum1">
                            <div class="row"></div>
                        </div>
                        <div class="colum1">
                            <div class="row"></div>
                        </div>
                        <div class="colum1">
                            <div class="row"></div>
                        </div>
                        <div class="colum1">
                            <div class="row"></div>
                        </div>
                        <div class="colum1">
                            <div class="row"></div>
                        </div>
                        <div class="colum1">
                            <div class="row"></div>
                        </div>
                        <div class="colum1">
                            <div class="row"></div>
                        </div>
                        <div class="colum1">
                            <div class="row"></div>
                        </div>
                        <div class="colum1">
                            <div class="row"></div>
                        </div>
                        <div class="colum1">
                            <div class="row"></div>
                        </div>
                        <div class="colum1">
                            <div class="row"></div>
                        </div>
                        <div class="colum1">
                            <div class="row"></div>
                        </div>
                        <div class="colum1">
                            <div class="row"></div>
                        </div>
                        <div class="colum1">
                            <div class="row"></div>
                        </div>
                        <div class="colum1">
                            <div class="row"></div>
                        </div>
                        <div class="colum1">
                            <div class="row"></div>
                        </div>
                         <div class="colum1">
                            <div class="row"></div>
                        </div>
                         <div class="colum1">
                            <div class="row"></div>
                        </div>
                         <div class="colum1">
                            <div class="row"></div>
                        </div>
                         <div class="colum1">
                            <div class="row"></div>
                        </div>
                         <div class="colum1">
                            <div class="row"></div>
                        </div>
                    </div>
                    <div class="container-audio">
                        <audio controls  loop autoplay>
                                   <source src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/9473/new_year_dubstep_minimix.ogg" type="audio/ogg">
                                   Your browser dose not Support the audio Tag
                               </audio>
                    </div>
                        <div class="mt-4">
                            <ul class="nav nav-pills bg-light rounded float-left" id="bxh" role="tablist">
                                <li class="nav-item mr-3">
                                    <a class="nav-link active" id="download-tab" data-toggle="tab" href="#download" role="tab" style="font-weight: bold;">Download</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="lyric-tab" data-toggle="tab" href="#lyric" role="tab" style="font-weight: bold;">Lyric</a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                            <div class="tab-content" id="content-tab">
                                <div class="tab-pane fade show active" id="download" role="tabpanel">Tải nhạc ở đây
                                </div>
                                <div class="tab-pane fade show" id="lyric" role="tabpanel">Lời bài hát ở đây</div>
                            </div>
                        </div>
                <!-- partial -->
                </div>
                <div class="col-lg-4">
                        <div class="float-right text-danger" style="font-weight: bold;">Bảng xếp hạng</div>
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
                            <div class="tab-content mt-3" id="content-tab">
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
