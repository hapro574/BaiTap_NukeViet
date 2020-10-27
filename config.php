<?php
$conn = mysqli_connect("localhost", "root", "", "thuchanh") or die("kết nối thất bại !!!");
$conn->query("SET NAME 'UTF-8'");
$sql = "SELECT * FROM nv4_vi_location_province";
$query = mysqli_query($conn, $sql);
$district = "SELECT * FROM nv4_vi_location_district";
$qr_district = mysqli_query($conn, $district);
$ward = "SELECT * FROM nv4_vi_location_ward";
$qr_ward = mysqli_query($conn, $ward);