<?php
session_start();
session_unset(); // Xóa tất cả các biến session
session_destroy(); // Hủy session

// Có thể trả về thông báo để xác nhận logout thành công
header('Location: /CNWEB.TH2-TLUNEWS/index.php');

?>