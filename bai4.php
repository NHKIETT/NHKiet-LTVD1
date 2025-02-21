<?php
function fibonacci($n) {
    // Điều kiện dừng của đệ quy: Fibonacci(0) = 0, Fibonacci(1) = 1
    if ($n == 0) {
        return 0;
    } elseif ($n == 1) {
        return 1;
    } else {
        // Đệ quy tính Fibonacci(n) = Fibonacci(n-1) + Fibonacci(n-2)
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

// Ví dụ gọi hàm
$n = 10;  // Bạn có thể thay đổi giá trị n ở đây
$ketQua = fibonacci($n);

echo "Số Fibonacci thứ $n là: $ketQua";
?>