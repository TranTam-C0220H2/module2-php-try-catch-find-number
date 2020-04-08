<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="get">
    <label>Nhap chi so phan tu cua mang: <input type="number" name="index"></label>
    <input type="submit" value="Tim">
</form>
<?php
    $arrayNumber = [];
    for ($i = 0; $i < 100; $i++) {
        $arrayNumber[$i] = random_int(0, 100);
    }
    echo 'Khoi tao mang 100 so nguyen: ' . implode(', ', $arrayNumber) . '<br>';
    $indexFindNumber = $_GET['index'];
    try {
        if ($indexFindNumber >= 100 || $indexFindNumber < 0) {
            throw new Exception('Chi so khong hop le!!!');
        }
        foreach ($arrayNumber as $index => $value) {
            if ($indexFindNumber == $index) {
                echo "Phan tu co chi so ' " . $indexFindNumber . " ' cua mang la: " . $value;
            }
        }
    } catch (Exception $exception) {
        echo $exception->getMessage();
    }

?>
</body>
</html>
