<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
function kt_ngto($n)
{
//    if ($n = 1) {
//        return false;
//    }
    $kt = 1;
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i === 0 && $n > 2) {
            $kt = 0;
        }
    }
    return $kt;
}


function lk_ngto($n)
{

    $i=2;
    $dem =0;
    (string) $ketqua = "";
    while($dem<$n)
    {
        if(kt_ngto($i)==1)
        {
            $ketqua .= $i." &nbsp;";
            $dem++;
        }
        $i++;
    }
    return $ketqua;
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $songuyento = $_POST["a"];

    if(kt_ngto($songuyento) === 1){
        echo $songuyento;
    }
    else
        echo "ngu qua";
}

//echo lk_ngto(5);
?>

<form method="post">
    <input type="text" name="a" value=""/>
    <input type="submit" value="ket qua" name="ok"/>
</form>
</body>
</html>