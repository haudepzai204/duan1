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






























<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

        <h2 class="text-center">Xác Nhận Hóa Đơn</h2>
        <form  class="col-6 m-auto">
            <div class="form-group form">
                <label for="ho_ten">Họ Tên:</label>
                <input class="form-control" id="ho_ten" 
                value ="<?= $ho_ten ?>">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" value ="<?= $email ?>">
            </div>
            <div class="form-group">
                <label for="sdt">Số Điện Thoại:</label>
                <input type="tel" class="form-control" id="sdt" value ="<?= $sdt ?>">
              

            </div>
            <div class="form-group">
                <label for="dia_chi">Địa Chỉ:</label>
                <input type="text" class="form-control" id="dia_chi"
                value ="<?= $dia_chi ?>">
            </div>
            <div class="form-group">
                <label for="phuong_thuc_tt">Phương Thức Thanh Toán:</label>
                <input type="text" class="form-control" id="phuong_thuc_tt"
                value ="<?= $phuong_thuc_tt ?>">
            </div>
            <div class="form-group">
                <label for="ghi_chu">Ghi Chú:</label>
                
                <input type="text" class="form-control" id="ghi_chu"
                value ="<?= $ghi_chu ?>">
            </div>



            <h2>Chúng tôi sẽ gửi đến cho bạn mã QR hoặc STK ngân hàng nếu bạn không thanh toán bằng tiền mặt </h2>
  <div class="mt-4 p-5 bg-primary text-white rounded">
    <h1>Mua Hàng Thành Công</h1> 
   <p>Cảm ơn bạn đã truy cập trang web của chúng tôi</p>
  </div>
  <br>
  <a href="http://localhost/duanmau/site/trang-chinh/index.php" class="btn btn-primary">Về trang chủ</a>
</div>

    </div>
</body>
</html>

        </form>

        <br>

        
  
