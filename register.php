<?php
include "config.php";

if (isset($_POST["submit"])) {
    $sql = "";
    //lấy thông tin từ các form bằng phương thức POST
    $username   = isset($_POST["name"])  ? $_POST["name"]  : '';
    $phone      = isset($_POST["phone"])  ? (int)$_POST["phone"]  : '';
    $email      = isset($_POST["email"])  ? $_POST["email"]  : '';
    $province   = isset($_POST["province"]) ? $_POST["province"] : '';
    $district       = isset($_POST["district"]) ? $_POST["district"] : '';
    $ward         = isset($_POST["ward"]) ? $_POST["ward"] : '';
    //Kiểm tra điều kiện bắt buộc đối với các file không được bỏ trống
    if ($username === "" || $phone === "" || $email === "" || $province === "" || $district === "" || $ward === "" && is_numeric($phone)) {
        echo "<script>alert('bạn vui lòng nhập đầy đủ thông tin')</script>";
    } else {
        $sql = "INSERT INTO thongtin (
            username,
            phone,
            email,
            province,
            district,
            ward
        ) VALUES (
            '$username',
            '$phone',
            '$email',
            '$province',
            '$district',
            '$ward',
        )";
        // thực thi câu $sql với biến conn lấy từ file connection.php
        mysqli_query($conn, $sql);
        $conn->close();
    }
}