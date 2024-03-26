<div class="dangky_dangnhap form_danhmuc">
   <h2>Đăng ký thành viên</h2>
   <form action="" method="post">
      <div class="form_text">
         <p>Email:</p> 
         <input type="email" value="<?php echo htmlspecialchars($email); ?>" name="email"> <br>
         <?php if (isset($errors) && in_array("Vui lòng nhập địa chỉ email.", $errors)) echo "<span style='color:red;'>Vui lòng nhập địa chỉ email.</span>"; ?>
         <?php if (isset($errors) && in_array("Địa chỉ email không hợp lệ.", $errors)) echo "<span style='color:red;'>Địa chỉ email không hợp lệ.</span>"; ?><br>

         <p> Name :</p>
         <input type="text" value="<?php echo htmlspecialchars($user); ?>" name="user"> <br>
         <?php if (isset($errors) && in_array("Vui lòng nhập tên người dùng.", $errors)) echo "<span style='color:red;'>Vui lòng nhập tên người dùng.</span>"; ?><br>

         <p>Nhập mật khẩu :</p>
         <input type="password" value="<?php echo htmlspecialchars($pass); ?>" name="pass"> <br>
         <?php if (isset($errors) && in_array("Vui lòng nhập mật khẩu.", $errors)) echo "<span style='color:red;'>Vui lòng nhập mật khẩu.</span>"; ?><br>

         <p>Nhập lại mật khẩu:</p>
         <input type="password" value="<?php echo htmlspecialchars($pass_confirm); ?>" name="pass_confirm"> <br>
         <?php if (isset($errors) && in_array("Mật khẩu nhập lại không khớp.", $errors)) echo "<span style='color:red;'>Mật khẩu nhập lại không khớp.</span>"; ?><br>

         <p>Address :</p>
         <input type="text" value="<?php echo htmlspecialchars($address); ?>" name="address"> <br>
         <?php if (isset($errors) && in_array("Vui lòng nhập địa chỉ.", $errors)) echo "<span style='color:red;'>Vui lòng nhập địa chỉ.</span>"; ?><br>

         <p>Telephone :</p>
         <input type="text" value="<?php echo htmlspecialchars($tele); ?>" name="tele"> <br>
         <?php if (isset($errors) && in_array("Vui lòng nhập số điện thoại.", $errors)) echo "<span style='color:red;'>Vui lòng nhập số điện thoại.</span>"; ?>
         <?php if (isset($errors) && in_array("Số điện thoại chỉ được chứa số.", $errors)) echo "<span style='color:red;'>Số điện thoại chỉ được chứa số.</span>"; ?><br>
      </div>
      <div class="form_buttom">
         <input type="submit" value="Đăng ký" name="dangky">
      </div>
   </form>
   <?php
   if (isset($thongbao) && ($thongbao != "")) {
      echo $thongbao;
   }
   ?>
</div>