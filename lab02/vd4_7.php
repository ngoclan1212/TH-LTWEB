<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>lab 2_5</title>
</head>

<body>
<?php
	include("lab2_5a.php");
	include("lab2_5b.php");
    include_once("lab2_5b.php");
	if(isset($x))
		echo "Giá trị của x là: $x";
	else
		echo "Biến x không tồn tại";
    echo "<br/><i>Include_one chỉ đảm bảo file chỉ được bao gồm 1 lần duy nhất trong suốt quá trình thực thi nên khi chạy chỉ bao gồm 2 dòng include đầu";
?>
</body>
</html>