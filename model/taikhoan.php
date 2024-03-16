<?php 
function add_taikhoan($email, $user, $pass,$address,$tele)
{
    $sql = "INSERT INTO taikhoan(email,user,pass,address,tele)values('$email','$user','$pass','$address','$tele')";
    pdo_execute($sql);
}
function checktaikhoan($email,$pass){
    $sql = "SELECT * FROM taikhoan where email='".$email."' AND pass='".$pass."' " ;
    $checkuser1 = pdo_query_one($sql);
    return $checkuser1;
}
function checkemail($email){
    $sql = "SELECT * FROM taikhoan where email='".$email."' " ;
    $check = pdo_query_one($sql);
    return $check;
}
function list_taikhoan(){
    $sql = "SELECT*FROM taikhoan ORDER BY id desc";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}
function delete_taikhoan($id){
    $sql = "DELETE FROM taikhoan WHERE id=".$id;
    pdo_execute($sql);
}

?>