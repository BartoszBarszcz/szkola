<?php
require_once 'conect.php';
if (!empty($_GET['id'])) {
    
    $id=$_GET['id'];
    $sql="DELETE FROM `user` WHERE `user`.`id` = $id";
    $conect->query($sql);
    if($conect->query($sql)){
        echo"ok";
    }
}else {
    header('location:../Nowy%20folder/11_02_2021.php');
}


?>