<?php
    //Quy tắc đặt tên biến - hàm
    //$ten_chuc_nang
    //$tenChucNang


    //Định nghĩa biến   $ten_bien = giá trị
    $tuoi = 23; // number
    $ten = "Phúc bồ"; // String

    echo $ten;
    echo '<br>';    // br là xuống dòng
    echo $tuoi; // không được dùng để hiện kiểu dữ liệu mảng
    echo '<hr>';    // hr là kẻ đường

    print_r($ten); //Hỗ trợ hiện tất cả các loại kiểu dữ liệu

    echo '<hr>';

    var_dump($tuoi); // Hỗ trợ hiện tất cả các loại kiểu dữ liệu + hiển thị các kiểu dữ liệu của biến
    echo '<br>';
    var_dump($ten);


    // Phân biệt dấu ' và dấu "
    $name = 'Phúc';
    $age = '23';
    echo '<br>';
    //VD
    $txt = "Xin chào: $name";   // Khi khai báp biến sử dụng dấu nháy "" thì ta có thể truyền giá trị của biến khác vào
    echo $txt; // hiện ra Xin chào phúc bồ
    echo  '<br>';
    $txt2 = 'Xin chào: $name';
    echo $txt2; // hiện ra xin chào $name

    echo '<hr>';

    //Ép kiểu dữ liệu
    $a = 3.2; // Số thực
    var_dump($a); //3.2
    echo '<br>';
    $b = (int) $a;  //3
    var_dump($b);

    // Kiểu dữ liệu boolean
    $c =true;   // boolean
    $d = false; // boolean

    echo '<br>';
    echo $c;
    echo '<br>';
    echo $d;    // không trả về giá trị
    print_r($d);    // không trả về giá trị
    var_dump($d);

    // Hàm - function (phương thức - method)
    // hàm có nhiệm vụ thực hiện 1 chức năng nào đó do người dùng tự quy định, đóng gói trong biểu thức có cú pháp bắt đầu bằng function và {}
    function hello()
    {
        echo 'xin chào';
    }

    // cách gọi/sử dụng hàm: ten_ham();
    hello();

    // hàm có tham số có thể nhận vào giá trị biến
    function hello2($name)
    {
        echo 'xin chào'.$name;
    }
    hello2('DEV');

    // định nghĩa hàm có nhiều tham số
    function hello3($name, $age, $address)
    {
        echo "xin chào: $name, tuổi: $age, đ/c: $address";
    }
    hello3('Phúc', '23', 'HN'); // xin chào: phúc, tuổi:32, đ/c: HN
    echo '<br>';
    //VD
    function thongtin($name, $age, $phone, $address, $sex)
    {
        echo "Xin chào: $name, tuổi: $age, SĐT: $phone, Đ/c: $address, giới tính: $sex";
    }
    thongtin('Phúc Bồ','23','0969908298','Thái Bình','nam');
?>
