<?php

require "connect.php";


if (isset($_POST['btn_thanh_toan'])) {


$ho_ten = $_POST['ho_ten'];
$email = $_POST['email'];
$sdt = $_POST['sdt'];
$dia_chi = $_POST['dia_chi'];
$phuong_thuc_tt = $_POST['phuong_thuc_tt'];
$ghi_chu = $_POST['ghi_chu'];

if (!empty($ho_ten)&&!empty($email)&&!empty($sdt)&&!empty($dia_chi)) {
  
 $sql = "INSERT INTO `thong_tin_don_hang`(`ho_ten`, `email`, `sdt`, `dia_chi`, `phuong_thuc_tt`, `ghi_chu`) VALUES 
('$ho_ten','$email','$sdt','$dia_chi','$phuong_thuc_tt','$ghi_chu')";

if ($conn->query($sql)===TRUE) {



} else {
  echo " M thieu cc j roi";
}

} else {
echo "Van thieu";
}


}





?>






























