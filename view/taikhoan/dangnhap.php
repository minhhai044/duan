
<div class="dangky_dangnhap form_danhmuc">
   <h2>Đăng Nhập</h2>
   <form action="" method="post">

      <div class="form_text">
         <p>Email:</p> <input type="email" name="email"> <br>
         <!-- <p> Name :</p><input type="text" name="user"> <br> -->
         <p>Pass :</p><input type="password" name="pass"> <br>
         <!-- <p>Address :</p><input type="text" name="address"> <br> -->
         <!-- <p>Telephone :</p><input type="password" name="tele"> <br> -->
      </div>
      <div class="form_buttom">
         <input type="submit" value="Đăng nhập" name="dangnhap">
         <input type="reset" value="Nhập lại">
      </div>
      <a style="text-decoration: none; color: black;" href="index.php?act=quenmk">Quên mật khẩu</a>
   </form>
   <?php
   if (isset($thongbao) && ($thongbao != "")) {
      echo $thongbao;
   }
   ?>
</div>