<?php
function demSoTu($chuoi) {
    // Sử dụng hàm str_word_count để đếm số từ trong chuỗi
    return str_word_count($chuoi);
}

// Ví dụ gọi hàm
$chuoi = "Chào bạn, hôm nay trời đẹp và rất mát mẻ để đi tắm biển."; // Thay đổi chuỗi ở đây
$soTu = demSoTu($chuoi);

echo "Số từ trong chuỗi là: $soTu";
?>