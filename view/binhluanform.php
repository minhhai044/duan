<?php
session_start();
include "../model/pdo.php";
include "../model/binhluan.php";
$idpro = $_REQUEST['idpro'];
$dsbl = list_binhluan($idpro);
?>
<table>
<div class="binhluan">
    
        <tr>
            <th>Nội dung</th>
            <th>Người bình luận</th>
            <th>Thời gian</th>
        </tr>
        <?php
        foreach ($dsbl as $bl) {
            extract($bl);
            echo '<tr>
            <td id="td_binhluan">' . $noidung . '</td>';
            echo '<td>' . $iduser . '</td>';
            echo '<td>' . $ngaybinhluan . '</td></tr>';
        }
        ?>

</div>
</table>
<?php
if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
    $noidung = $_POST['noidung'];
    $idpro = $_POST['idpro'];
    $iduser = $_SESSION['user']['id'];
    $ngaybinhluan = date('h:i:sa d/m/Y');
    add_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
    header("location: " . $_SERVER['HTTP_REFERER']);
}
?>
<div class="tkbinhluan mb-3">
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="hidden" name="idpro" value="<?= $idpro ?>">
            <label for="formGroupExampleInput" class="form-label">Nhập bình luận</label>
            <div style="display:flex;"><input type="text" style="width:400px;"   name="noidung" class="form-control" id="formGroupExampleInput" placeholder="Nhập bình luận ">
            <input type="submit" class="btn btn-success" value="Gửi bình luận" name="guibinhluan"></div>

    </form>
</div>