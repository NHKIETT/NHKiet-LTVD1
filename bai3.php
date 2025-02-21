<?php
function daoNguocChuoi($chuoi) {
   
    return strrev($chuoi);
}


$chuoi = "LeHoangNhat11A6"; 
$chuoiDaoNguoc = daoNguocChuoi($chuoi);

echo "Chuỗi đảo ngược của chuỗi '$chuoi' là: '$chuoiDaoNguoc'";
?>