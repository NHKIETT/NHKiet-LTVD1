<?php
function kiemTraChanLe($n) {
    // Kiểm tra số chẵn hay lẻ
    if ($n % 2 == 0) {
        return "Số $n là số chẵn.";
    } else {
        return "Số $n là số lẻ.";
    }
}

// Ví dụ gọi hàm
$n = 7; // Thay đổi giá trị n ở đây
echo kiemTraChanLe($n);
?>