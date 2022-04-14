<?php
    //print_r($_GET);
    if (isset($_GET['email'])){
        $email = $_GET['email'];
        print_r($email);
    }
    echo '<br>';
    if (isset($_GET['pwd'])){
        $password = $_GET['pwd'];
        print_r($password);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>form login - get</h2>
    <form action="" method="get" >
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
        </div>
        <div class="checkbox">
            <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>

    <?php
    //print_r($_GET);
    if (isset($_POST['email'])){
        $email = $_POST['email'];
        print_r($email);
    }
    echo '<br>';
    if (isset($_POST['pwd'])){
        $password = $_POST['pwd'];
        print_r($password);
    }
    ?>
    <h2>form login - post</h2>
    <form action="" method="post">
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
        </div>
        <div class="checkbox">
            <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>

</body>
</html>
// phương thức get dùng trong form tìm kiếm(giới hạn 2048 kí tự)
// phương thức post dùng khi thêm sửa xóa dữ liệu và trong form đăng nhập(bảo mật hơn,post ko giới hạn về kí tự )
