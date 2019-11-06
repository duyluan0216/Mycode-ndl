<?php
    session_start();
    if (isset($_SESSION)) {
    	if ($_SESSION['username']=='ndl1602') {
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Sửa Thành Viên</title>
<link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
</head>
<body>
    <?php
        include ("../config.php");
        $id = "";
        $username ="";
        $email = "";
        $level ="";
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "SELECT * FROM user WHERE id = $id";
            $query = mysqli_query($connect,$sql);
            while ($data = mysqli_fetch_array($query)) {
                $username = $data['username'];
                $email = $data['email'];
                $level = $data['level'];
            }
        }
        if (isset($_POST['btn_sua'])) {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $level = $_POST['capdo'];
            $sql = "UPDATE user SET username = '$username',email = '$email',level = '$level' WHERE id = $id";
            mysqli_query($connect,$sql);
            header("Location:quanlythanhvien.php");
        }
    ?>
    <div class="container">
    	<div class="row">
    		<h3 align="center">Thông tin thành viên</h3>
            <div class="col-lg-12 border shadow-lg">
    		<form action="" method="Post">
              <div class="form-group mt-3">
                <label for="username">Tên đăng nhập</label>
                <input type="text" class="form-control" name="username" placeholder="Tên đăng nhập" value="<?php echo $username ?>">
              </div>
               <div class="form-group mt-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" placeholder="name@example.com" value="<?php echo $email ?>">
              </div>
              <label for="capdo">Cấp Độ</label>
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="capdo"  value="Thành Viên" <?php echo ($level==1)?'checked':''; ?>>
                  <label class="form-check-label" for="thanhvien">
                    Thành Viên
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="capdo"  value="Quản Trị Viên" <?php echo ($level==0)?'checked':''; ?>>
                  <label class="form-check-label" for="quantrivien">
                    Quản Trị Viên
                  </label>
                </div>
                <input type="submit" name="btn_sua" class="btn btn-primary mt-3 mb-3" value="Lưu Thông Tin">
            </form>
        </div>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="../js/bootstrap.min.js" ></script>
</body>
</html>
<?php } else {
		echo "<h2>
				  Bạn không có quyền truy cập mời <a href='../index.php'>quay lại</a>
				</h2>";
	}
}
 ?>