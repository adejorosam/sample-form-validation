<?php




class Human{
    public $age, $name;

    function set_name($name){
        $this->name = $name;
        
    }

    function set_age($age){
        $this->age = $age;

    }

    function get_name(){
        return $this->name;

    }

    function get_age(){
        return $this->age;
    }
}


$message = "";
$name1 = "";
$age1 = "";
$name2 = "";
$age2 = "";
$name3 = "";
$age3 = "";
$arr = "";

if ($_SERVER['REQUEST_METHOD']=="POST"){
    $name1 = $_POST['Boy1'];
    $age1 = $_POST['age1'];
    $name2 = $_POST['Boy2'];
    $age2 = $_POST['age2'];
    $name3 = $_POST['Girl1'];
    $age3 = $_POST['age3'];
    
    
    $Boy1 = new Human();
    $x = $Boy1->set_name($name1);
    $x1 = $Boy1->set_age($age1);
    
    $Boy2 = new Human();
    $y = $Boy2->set_name($name2);
    $y1 = $Boy2->set_age($age2);
    
    $Girl1 = new Human();
    $z = $Girl1->set_name($name3);
    $z1 = $Girl1->set_age($age3);
    
    $highest = "";
    $arr = [$Boy1->get_name()=>$Boy1->get_age(),$Boy2->get_name()=>$Boy2->get_age(),$Girl1->get_name()=>$Girl1->get_age() ];
    foreach($arr as $key => $value){
        if($arr[$key] > $highest){
            $highest = $value;
        }
    }
    
    $x8 = implode(array_keys($arr,$highest));
    $x8.= " is ${highest} years old and so he is the oldest";
    
    if ($_SERVER['REQUEST_METHOD']==="POST"){
        $message = $x8;
    }
    
} else {
    echo "";
}
?>



<!doctype html>
<body>
<form action="" method ="post">

<input name="Boy1", placeholder="Enter a name">
<input name='age1', placeholder="Enter a age">
<br>
<br>
<input name="Boy2", placeholder="Enter a name">
<input name='age2', placeholder="Enter a age">
<br>
<br>
<input name="Girl1", placeholder="Enter a name">
<input name='age3', placeholder="Enter a age">
<br>
<br>
<input type='submit'>
</form>
<div id="form-output">
            <p id="response"><?= print_r($arr)?></p>
			<p id="response"><?= $message?></p>
            
</div>
</body>
</html>
