<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lab 3_4</title>
</head>

<body>
<?php
//Kết hợp hàm và vòng lặp
function kiemtranguyento($x)//Kiểm tra 1 số có nguyên tố hay không
{
    $i=3;
	if($x<2)
		return false;
	if($x==2)
		return true;
    if($x % 2 == 0) // Loại số chẵn ra giảm 1/2 số lần lặp
        return false;
    do {
        if ($x % $i == 0)
            return false;
        $i+=2;
    } while($i <= sqrt($x));
	return true;
}

if(kiemtranguyento(14))
	echo  "là số nguyên tố";
else
	echo "không phải số nguyên tố";
	
?>
</body>
</html>