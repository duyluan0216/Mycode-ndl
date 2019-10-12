
<!-- Modal đăng nhập -->
  <div class="modal fade" id="hide_dangnhap" tabindex="-1" role="dialog" aria-labelledby="hide_dangnhapdaLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content bg-light">
      <div class="modal-header">
      <h5 class="modal-title" id="hide_dangnhapLabel">Đăng Nhập</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      </div>
      <div class="modal-body">
      <form action="" method="post" name="form_dangnhap">
        <div class="form-group">
        <label for="username">Tên tài khoản</label>
        <input type="text" class="form-control" name="username_login" placeholder="Nhập tên tài khoản" required title="Vui lòng nhập vào tên đăng nhập">
        </div>
        <div class="form-group">
        <label for="matkhau">Mật khẩu</label>
        <input type="password" class="form-control" name="password_login" placeholder="Nhập vào mật khẩu" required title="Vui lòng nhập vào mật khẩu">
        </div>
        <div class="form-group form-check float-left">
        <input type="checkbox" class="form-check-input" id="remember">
        <label class="form-check-label" for="remember">Nhớ mật khẩu</label>
        </div>
        <div class="form-text text-info float-right" align="center"><a href="#">Quên mật khẩu?</a></div>
        <div class="clearfix"></div>
        <div align="center">
          <button type="submit" class="btn btn-primary" name="button_dangnhap">Đăng Nhập</button>
        <div class="form-text text-info mt-2" align="center">Chưa có tài khoản? Đăng ký <a href="#hide_dangky" data-toggle="modal" data-target="#hide_dangky">tại đây</a></div>
        </div>
      </form>
      <?php
        include("config.php");
      	if (isset($_POST['button_dangnhap'])) {
      		$username = $_POST["username_login"];
      		$password = $_POST["password_login"];
      		$username = strip_tags($username);
      		$username = addslashes($username);
      		$password = strip_tags($password);
      		$password = addslashes($password);
          $password = md5($password);
      			$sql = "SELECT * FROM user WHERE username = '$username' and password = '$password' ";
      			$query = mysqli_query($connect,$sql);
      			$num_rows = mysqli_num_rows($query);
      		if ($num_rows==0)
          {
      				echo "<div class='alert alert-danger' role='alert'>
                      Mật khẩu sai hoặc Tên đăng nhập không có
                    </div>";
      			}else{
              echo "<div class='alert alert-primary' role='alert'>
                      Đăng nhập thành công
                    </div>";
      				$_SESSION['username'] = $username;
              $_SESSION['password'] = $password;
      			}
      	}
      ?>
      </div>
    </div>
    </div>
  </div>
<!-- Modal -->
