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
<title>Quản lý thành viên</title>
<link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
<script type="text/javascript">
    function warning() {
        alert('Thao tác sẽ xóa cơ sở dữ liệu không thể khôi phục');
    }
</script>
</head>
<body>
	<?php
	include ("../config.php");
	$stt = 1;
	$sql = "SELECT * FROM user";
	$query = mysqli_query($connect,$sql);
	?>
    <div class="container">
    	<div class="row">
    		<h3 align="center">Quản lý thành viên</h3>
    		<table class="table table-dark">
    			<caption>Danh sách thành viên đã đăng ký</caption>
    			<thead>
    				<tr>
    					<th>STT</th>
    					<th>Tên Đăng Nhập</th>
    					<th>Email</th>
    					<th>Cấp Độ</th>
    					<th>Hành Động</th>
    				</tr>
    			</thead>
    			<tbody>
    				<?php while ($data=mysqli_fetch_array($query)){ ?>
    				<tr>
    					<th scope="row"><?php echo $stt++ ?></th>
    					<td><?php echo $data['username']; ?></td>
    					<td><?php echo $data['email']; ?></td>
    					<td>
    						<?php 
    							if ($data['level']==1) {
    								echo "Thành viên";
    							}
    							else
    								echo "Quản trị viên";
    						 ?>
    					</td>
    					<td><a href="sua_thanhvien.php?id=<?php echo $data['id'] ?>">Sửa </a>-<a href="xoa_thanhvien.php?id=<?php echo $data['id'] ?>" class = "alert-link" onclick="warning();"> Xóa</a></td>
    				</tr>
    				<?php } ?>
    			</tbody>
    		</table>
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