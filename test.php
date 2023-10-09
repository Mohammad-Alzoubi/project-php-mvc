<?php


require 'function.php';

$filename = "C:\Users\GTS\Desktop\PHP For Beginners\mohammad.txt";


//$fp       = fopen($filename, "r");//open file in read mode
//
//$contents = fread($fp, 25);//read file
//echo "<pre>$contents</pre>";//printing data of file
//
////echo $contents = fgets($fp);//read file and get first character.
////echo $contents = fgets($fp);//read file and get first character.



//$fp       = fopen($filename, "a");//open file in read mode
//
//fwrite($fp, 'asdfasdf   ');
//
//
//echo 'Write success';
//fclose($fp);//close file


//$status = unlink('C:\Users\GTS\Desktop\PHP For Beginners\mohammad.txt');
//if ($status) {
//    echo "File deleted successfully";
//} else {
//    echo "Sorry!";
//}
//
//
//dd($_SERVER);
//dd($_SERVER["REMOTE_ADDR"]);


$seasons = ["summer", "winter", "spring", "autumn"];

foreach($seasons as $season){
    echo $season . "<br/>";
}

echo "<br/>";

//
$salary=array("Sonoo"=>"550000","Vimal"=>"250000","Ratan"=>"200000");
//
//
//foreach($salary as $key=>$value) {
//    echo "key: ". $key . "   " . 'value: ' . $value . "<br/>";
//}
//



$salary=array("Sonoo"=>"550000","Vimal"=>"250000","Ratan"=>"200000");

//print_r(array_change_key_case($salary, CASE_UPPER));

echo "<pre>";

print_r(array_chunk($salary, 2, 1));
echo "</pre>";
echo "<br/>";




$city = 'Delhi';
$str = <<<DEMO
Hello! My name is Misthi, and I live in $city.  
DEMO;
echo $str;








$emp = array
(
    array(1,"sonoo",400000),
    array(2,"john",500000),
    array(3,"rahul",300000)
);




//dd(count($emp));

//for ($row = 0; $row < count($emp); $row++){
//    for ($col = 0; $col < count($emp); $col++){
//        echo $emp[$row][$col] . " ";
//    }
//    echo "<br/>";
//}



