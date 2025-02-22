<?php
function chuyenDoiInHoa($chuoi) {
    // Sử dụng hàm strtoupper để chuyển toàn bộ chuỗi thành chữ in hoa
    return strtoupper($chuoi);
}

// Ví dụ gọi hàm
$chuoi = "Chào bạn, hôm nay trời đẹp và rất mát mẻ phù hợp để đi tắm biển."; // Thay đổi chuỗi ở đây
$chuoiInHoa = chuyenDoiInHoa($chuoi);

echo "Chuỗi sau khi chuyển đổi thành chữ in hoa là: $chuoiInHoa";
?>