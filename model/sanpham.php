<?php
function add_sanpham($tensp, $gia, $mota, $filename, $iddm)
{
    $sql = "INSERT INTO sanpham(tensp,giasp,mota,img,iddm)values('$tensp','$gia','$mota','$filename','$iddm')";
    pdo_execute($sql);
}
function list_sanpham($kyw="", $iddm=0)
{
    $sql = "SELECT*FROM sanpham where 1";
    if ($kyw != "") {
        $sql .= " and tensp like '%" . $kyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " and iddm ='" . $iddm . "'";
    }
    $sql .= " order by id desc";
    $listsp = pdo_query($sql);
    return $listsp;
}
function list_sanpham1()
{
    $sql = "SELECT*FROM sanpham ORDER BY id desc";
    $listsp = pdo_query($sql);
    return $listsp;
}
function list_sanpham_top10()
{
    $sql = "SELECT*FROM sanpham WHERE 1 ORDER BY luotxem desc limit 0,10";
    $listsp = pdo_query($sql);
    return $listsp;
}
function list_sanpham_home()
{
    $sql = "SELECT*FROM sanpham WHERE 1 ORDER BY id desc limit 0,15";
    $listsp = pdo_query($sql);
    return $listsp;
}
function delete_sanpham($id)
{
    $sql = "DELETE FROM sanpham WHERE id=" . $id;
    pdo_execute($sql);
}
function loadtendm($iddm)
{
    $sql = "SELECT *FROM danhmuc where id=" . $iddm;
    $dm = pdo_query_one($sql);
    extract($dm);
    return $tendm;
}
function sua_sanpham($id){
    $sql = "SELECT *FROM sanpham where id=" . $id;
    $sp = pdo_query_one($sql);
    return $sp;
}
function sua_sanpham_cungloai($id,$iddm)
{
    $sql = "SELECT *FROM sanpham where iddm=".$iddm." AND id <> " . $id;
    $listsp = pdo_query($sql);
    return $listsp;
}
function update_sanpham($id,$tensp, $gia, $mota, $filename)
{
    if ($filename != "") {
        $sql = "UPDATE sanpham set tensp = '$tensp',giasp='$gia',mota='$mota',img = '$filename' where id=" . $id;
    } else {
        $sql = "UPDATE sanpham set tensp = '$tensp',giasp='$gia',mota='$mota' where id=" . $id;
    }
    pdo_execute($sql);
}
