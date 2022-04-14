<?php

date_default_timezone_set('Asia/Ho_Chi_Minh');
$name='hello';
// Mảng
// cách 1: []
$arrNames = [];
$arrNames2 = array();   //Khai báo tự động

// Khởi tạo mảng có giá trị mặc định
$arrNames = [1,2,3];
$arrNames2=array(1,2,3);

echo '<pre>';
print_r($arrNames);
// Lấy phần tử trong mảng = $ten_mang[chi_so]
echo 'Phần tử:' .$arrNames[1];
echo '<br>';
var_dump($arrNames2);

// Hàm Count
echo count($arrNames);  // 3
echo '<br>';
echo count($arrNames2); // 3

echo '<br>';
// Hàm is-array(): kiểm tra 1 biến có phải là mảng hay ko
var_dump(is_array($name));  // false
var_dump(is_array($arrNames2)); // true

// Biểu thức điều kiện
if(3>5)
{
    echo 'sai';
}
echo '<br>';

if(3>5){
    echo 'đúng';
}else{
    echo 'sai';
}

//Dạng ngắn gọn của if... else
// (điều kiện) ? (biểu_thức_1: sau if) : (biểu_thức_2)
$giatri= (4 > 5) ? 'lớn hơn' : 'nhỏ hơn';
echo $giatri;
echo '<br>';

$x='4';
if ($x > 5){
    echo 'đúng';
}elseif ($x == 4){
    echo '==4';
}elseif ($x>=5){
    echo '>=5';
}else{
    echo 'cuoi cung';
}

function so_sanh($x)
{
    if ($x == 1){
        echo '1';
    } elseif ($x ==2){
        echo '2';
    }elseif ($x == 3){
        echo '3';
    }else{
        echo 'không khớp với bất kì già trị nào';
    }
}

echo '<br>';
echo '<br>';
$ket_qua = so_sanh('1');

echo '<br>';
echo $ket_qua;


$ket_qua2 = so_sanh('99');
echo $ket_qua2;

echo '<br>';
echo '<br>';
// isset- kiểm tra 1 biến có tồn tại/định nghĩa chưa và khác null
if(isset($xyz)){
    echo 'xyz tồn tại';
} else{
    echo 'xyz không tồn tại';
}
echo '<br>';
// empty- hàm kiểm tra biến có bằng: 0 0.0 "0" "" null false array()
if (!empty($y)){
    echo 'bằng rỗng';
}else{
    echo 'khác rỗng';
}
echo '<br>';
echo '<br>';
if (isset($z) && empty($z)) //= if (!empty($y))
{
    echo 'tồn tại và khác rỗng';
}else{
    echo 'khác';
}

// vòng lặp điều kiện foreach và for
// foreach: thường được sử dụng để duyệt các phần tử của 1 mảng
$arrNames3=['DEV1','DEV2','DEV3','DEV4'];
foreach ($arrNames3 as $index=> $item){
    echo '<br>'.$item;
}
echo '<br>';
echo '<br>';
$arr=array("one", "two", "three");
foreach ($arr as $value)
{

    echo "Value: ". $value . "<br />";
}

// for
$so_luong=count($arrNames3);
for ($i=0;$i<$so_luong;$i++){
    echo '<br>'.$arrNames3[$i];
}
echo '<br>';
// hàm date()
echo date('Y-m-d');
echo date('')
?>
