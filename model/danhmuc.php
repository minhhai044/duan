<?php 
    function add_danhmuc($tenloai){
        $sql = "INSERT INTO danhmuc(tendm)values('$tenloai')";
        pdo_execute($sql);
    }
    function loadall_danhmuc(){
        $sql = "SELECT*FROM danhmuc ORDER BY id desc";
        $listdm = pdo_query($sql);
        return $listdm;
    }
    function delete_danhmuc($id){
        $sql = "DELETE FROM danhmuc WHERE id=".$id;
        pdo_execute($sql);
    }
    function loadone_danhmuc($id){
        $sql = "SELECT *FROM danhmuc where id=".$id;
        $dm = pdo_query_one($sql);
        return $dm;
    }
    function update_danhmuc($id,$tenloai){
        $sql = "UPDATE danhmuc set tendm='" . $tenloai . "' where id=" . $id;
        pdo_execute($sql);
    }
?>