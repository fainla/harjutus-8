<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset= utf-8">
</head>
<body>

<h2>Funktsioon continue</h2>
<?php
for ($number = 1; $number <= 10; $number++) {
    if ($number == 5) {
        continue; 
    }

    echo $number . ", ";
}

?>

<h2>Funktsioon "break</h2>
<?php
for ($number = 1; $number <= 10; $number++) {
    if ($number == 7) {
     break;
    }

    echo $number . ", ";
}

?>
</body>
</html>