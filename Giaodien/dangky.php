<?php
  include("config.php");
  if (isset($_POST['button_dangky'])) {
    $username = mysqli_real_escape_string($connect,$_POST['username']);
    $password = mysqli_real_escape_string($connect,$_POST['password']);
    $email = mysqli_real_escape_string($connect,$_POST['email']);
    $password=md5($password);
    if ($username != "" || $password != "" || $email != ""){
      $sql="SELECT * FROM user WHERE username='$username'";
  		$kt=mysqli_query($connect, $sql);
      if(mysqli_num_rows($kt) > 0){
        echo "Tài khoản này đã tồn tại";
      }else{
        $sql = "INSERT INTO user(username,password,email) VALUES('$username','$password','$email')";
        $query = mysqli_query($connect,$sql);
            }
      }
  }
?>
<div class="modal fade" id="hide_dangky" tabindex="-1" role="dialog" aria-labelledby="hide_dangkyLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
  <div class="modal-content bg-light">
    <div class="modal-header">
    <h5 class="modal-title" id="hide_dangkyLabel">Đăng Ký</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <div class="modal-body">
    <form action="" name="form_dangky" method="post">
      <div class="form-group">
        <label for="email_dk">Email</label>
        <input type="email" class="form-control" placeholder="Email" name="email" required title="Bạn phải nhập vào email">
      </div>
       <div class="form-group">
        <label for="username_dk">Tên tài khoản</label>
        <input type="text" class="form-control" placeholder="Tên tài khoản" name="username" required title="Bạn phải nhập vào tên">
      </div>
      <div class="form-group">
        <label for="password_dk">Mật khẩu</label>
        <input type="password" class="form-control" placeholder="Mật khẩu" name="password" required title="Ban phải nhập vào mật khẩu">
      </div>
      <div class="form-group">
        <label for="repassword_dk">Nhập lại mật khẩu</label>
        <input type="password" class="form-control" placeholder="Nhập Lại Mật khẩu" required>
      </div>
      <div align="center">
      <button type="submit" class="btn btn-primary" name="button_dangky">Đăng ký</button>
      <button type="reset" class="btn btn-primary" name="button_dangky">Nhập lại</button>
      </div>
    </form>
  </div>
  </div>
  </div>
</div>
