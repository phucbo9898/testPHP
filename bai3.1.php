<h1>include - triệu tập file khác vào trong file hiện tại</h1>
<?php
// hàm include() sinh ra 1 cảnh báo warning, nhưng scrip vẫn sẽ được thực thi
// hàm require() sinh ra 1 cảnh báo fatal error, nhưng scrip ko được thực thi và dừng lại tại ví trí đó
// ưu tiên sử dụng include_once
include 'bai3.2.php';
include_once 'bai3.2.php';  //kiểm tra file đã được import chưa, nếu đã được import thì bỏ qua
//include 'bai3.2.2.php';
require 'bai3.3.php';
require_once 'bai3.3.php';  //kiểm tra file đã được import chưa, nếu đã được import thì bỏ qua
//require 'bai3.3.3.php';
// include sẽ cảnh báo nhưng vẫn sẽ chạy code bên dưới còn require sẽ ngừng và ko chạy code bên dưới
echo 'cuối file';