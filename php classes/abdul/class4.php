<?php
// $arr1 = array(1, "Dattebayo", true, false, 0.99);
// // echo $arr1[4];

// $arr2 = array(
//     "Name"=>"Muzammil",
//     "Age"=>"20",
//     "Designation"=>"Web Developer",
//     );

//     foreach ($arr2 as $key => $value) {
//         echo "<br/>";
//         echo $key;
//         echo "<br/>";
//         echo $value;
//         echo "<br/>";
//     }

// $arr3 = [
//     1 =>["name"=>"Muzammil"],
//     2 =>["age"=>"20"],
//     3 =>["designation"=>"Web Developer"],
// ];

// $arr3 = [
//     "1" =>["name"=>"Jazlan"],
//     "2" =>["name"=>"Jazlan"],
//     "3" =>["name"=>"Jazlan"],
// ];

// foreach ($arr3 as $key1 => $count) {
//     echo "<br/>";
//     foreach ($count as $key2 => $values) {
//         echo $key2 . " : ". $values;
//      }
// }


// $arrayName = [
//     "vegs" =>[
//         "Banana"=>["color"=>"yellow"],
//         "Oranges"=>["color"=>"orange"],
//         "Mango"=>["color"=>"yellow"],]
// ];

// foreach ($arrayName as $key1 => $values) {
//     echo "<h1>$key1</h1>";
//     foreach ($values as $key2 => $values1) {
//         echo "$key2";
//         echo "<br/>";
//         foreach ($values1 as $key3 => $value) {
//            echo "$key3 : $value";
//         }
//     }
// }


// echo $arr3[1]['name'];
// echo "<br/>";


if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $name = isset($_GET['name']) ? htmlspecialchars ($_GET['name']) : " " ;
    $surnmae = isset($_GET['surname']) ? htmlspecialchars ($_GET['surname']) : " " ;
    echo $name . $surnmae;
}










?>