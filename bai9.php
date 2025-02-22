<?php
function demKyTuXuatHien($chuoi, $kyTu) {
    // Sử dụng hàm substr_count để đếm số lần xuất hiện của ký tự trong chuỗi
    return substr_count($chuoi, $kyTu);
}

// Ví dụ gọi hàm
$chuoi = "Chào bạn, bạn hôm nay như thế nào có khỏe không?"; // Thay đổi chuỗi ở đây
$kyTu = "b"; // Ký tự cần đếm
$soLanXuatHien = demKyTuXuatHien($chuoi, $kyTu);

echo "Ký tự '$kyTu' xuất hiện $soLanXuatHien lần trong chuỗi.";
?>