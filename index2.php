$value1 = $_POST['value1'];
$value2 = $_POST['value2'];

$add = $value1 + $value2;
$mult = $value * $value2;
$sub = $value1 - $value2;
$exp = $value1 ** $value2;

if($_POST['value']=="add"){
    echo 'The value of your addition gives: '.$add;
}
else if($_POST["value"]=="subtract"){
    echo 'The value of your subtraction gives: '.$sub;
}
else if($_POST['value']=='multiply'){
    echo 'The value of your multiplication gives: '.$mult;
}
else if($_POST['value']=='exponential'){
    echo 'The value of your exponentiation gives: '.$exp;
}



<!doctype html>
<body>
<form action="" method ="post">
<input name="value1", placeholder="Enter an integer">
<br>
<input name="value2", placeholder="Enter a name">
<br>
<input name="value", placeholder="Enter an operation">
<br>
<input type='submit'>
</form>
</body>
</html>
