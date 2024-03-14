<?php 
    if (is_array($sp)) {
        extract($sp);
    }
    $hinhpath = "../uploadfile/".$img;
    if(is_file($hinhpath)) {
        $anh = "<img src='".$hinhpath."' height='80'>";
    }else {
        $anh = "Khong co";
    }
?>
<div class="form_danhmuc">
<h2>Cập nhật sản phẩm</h2>
    <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
        <div class="form_text">
        <select name="iddm" id="">
            <?php 
            foreach ($listdm as $dm){
                extract($dm);
                 $id == $iddm ? $e="selected":"";echo "<option  value=$id $e>$tendm</option>";
            }
            ?>
        </select> <br>
        <p>Tên sản phẩm:</p> <input type="text" name="tensp"  value="<?=$tensp?>"> <br>
        <p>Ảnh :</p>  <input type="file" name="hinh"  value=""> <?=$anh?>' <br>
        <p>Giá :</p> <input type="number" name="gia"  value="<?=$giasp?>" > <br>
        <p>Mô tả :</p> <textarea name="mota" id="" cols="79"  rows="10" ><?=$mota?> </textarea> <br>
        </div>
        <div class="form_buttom">
        <input type="hidden" name="id" value="<?=$id?>">
        <input type="submit" name="capnhat" value="Update"> 
        <a href="index.php?act=listsp"><input type="button" value="Danh Sách"></a>
        </div>
        <?php 
            if (isset($thongbao)&&($thongbao!="")) echo $thongbao;
    
        ?>
    </form>
</div>