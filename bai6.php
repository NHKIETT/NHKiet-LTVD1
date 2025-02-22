<?php
function kiemTraNamNhuan($nam) {
    // Điều kiện năm nhuận:
    // - Năm chia hết cho 4, nhưng không chia hết cho 100, hoặc chia hết cho 400
    if (($nam % 4 == 0 && $nam % 100 != 0) || $nam % 400 == 0) {
        return true; // Là năm nhuận
    }
    return false; // Không phải năm nhuận
}

// Ví dụ gọi hàm
$nam = 2024; // Bạn có thể thay đổi năm ở đây
if (kiemTraNamNhuan($nam)) {
    echo "Năm $nam là năm nhuận.";
} else {
    echo "Năm $nam không phải là năm nhuận.";
}
?>