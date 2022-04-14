<h1>session và cookie</h1>
<?php
// session được dùng để quản lý người dùng riêng biệt
// khở itaoj session bắt đầu làm việc
session_start();
$_SESSION['name']='DEV';    // khai báo 1 session có tên là name

$_SESSION['gio_hang']= ['sp1'=>'dieu-hoa','sp2'=>'may-giat'];
$_SESSION['dang_nhap']= ['name'=>'phuc bo','email'=>'phucbo9898@gmail.com'];

// lấy giá trị lưu trong session
$gio_hang = $_SESSION['gio_hang'];
print_r($gio_hang);

$dang_nhap= $_SESSION['dang_nhap'];
print_r($dang_nhap);

echo time();
setcookie('user', 'Bkap', time() +60*60);   // thiết lập sống cho cookie =1h=3600=60*60

// in ra giá trị của 1 cookie
echo '<br>'.$_COOKIE["user"];

//in ra giá trị của tất cả các cookie
print_r($_SESSION);
print_r($_COOKIE);

//Thiết lập cookie đã hết hạn tử 1 giờ trước đây
setcookie("user","",time()-1);