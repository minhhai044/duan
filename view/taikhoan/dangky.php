<div class="dangky_dangnhap form_danhmuc">
   <h2>Đăng ký thành viên</h2>
   <form action="" method="post">

      <div class="form_text">
         <p>Email:</p> <input type="email" value="<?php echo $email; ?>" name="email"> <br>
         <p> Name :</p><input type="text" value="<?php echo $user; ?>" name="user"> <br>
         <p>Pass :</p><input type="password" value="<?php echo $pass; ?>" name="pass"> <br>
         <p>Address :</p><input type="text" value="<?php echo $address; ?>" name="address"> <br>
         <p>Telephone :</p><input type="password" value="<?php echo $tele; ?>" name="tele"> <br>
      </div>
      <div class="form_buttom">
         <input type="submit" value="Đăng ký" name="dangky">
         <input type="reset" value="Nhập lại">
      </div>
   </form>
   <?php
   if (isset($thongbao) && ($thongbao != "")) {
      echo $thongbao;
   }
   ?>
</div>