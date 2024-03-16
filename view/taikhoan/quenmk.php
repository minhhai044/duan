<div class="dangky_dangnhap form_danhmuc">
   <h2>Quên mật khẩu</h2>
   <form action="" method="post">

      <div class="form_text">
         <p>Email:</p> <input type="email" name="email"> <br>
         <!-- <p> Name :</p><input type="text" name="user"> <br> -->
         <!-- <p>Pass :</p><input type="password" name="pass"> <br> -->
         <!-- <p>Address :</p><input type="text" name="address"> <br> -->
         <!-- <p>Telephone :</p><input type="password" name="tele"> <br> -->
      </div>
      <div class="form_buttom">
         <input type="submit" value="Gửi" name="guiemail">
         <input type="reset" value="Nhập lại">
      </div>
   </form>
   <?php
   if (isset($thongbao) && ($thongbao != "")) {
      echo $thongbao;
   }
   ?>
</div>