<?php
$address = conf('contacts');
$messages = [];

$link = mysqli_connect("localhost", "root", "","shopaholic");

if($link === false) {
    die("Error: Could not connect ". mysqli_connect_error());
}

// echo "Connet created succesfully";


// var_dump($address);
// $messages = [
//     [
//         'name' => "Tom",
//         'surname' => "Cat",
//         'email' => "tom@my.cat",
//         'message' => "Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own additions education satisfied the perpetual. If he cause manor happy. Without farther she exposed saw man led. Along on happy could cease green oh.",
//         'created_at' => "August 2, 2022",
//     ],
//     [
//         'name' => "Sara",
//         'surname' => "Baraboo",
//         'email' => "sb@my.cat",
//         'message' => "Without farther she exposed saw man led. Along on happy could cease green oh.",
//         'created_at' => "August 5, 2022",
//     ],
// ];

if ($_POST) {
    // var_dump($_GLOBALS);
    $name = mysqli_real_escape_string($link, $_POST['name']);
    $surname = mysqli_real_escape_string($link, $_POST['surname']);
    $email = mysqli_real_escape_string($link,$_POST['email']);
    $message = mysqli_real_escape_string($link, $_POST['message']);
    
    $sql = "INSERT INTO feedback (name, surname, message, email) VALUES('$name', '$surname', '$message', '$email')";
    mysqli_query($link, $sql);
    // var_dump($messages);
}
// var_dump($_ENV);
$sql = "SELECT name, surname, message, created_at FROM feedback";

$result = mysqli_query($link, $sql);

if($result){
    $messages = mysqli_fetch_all($result, MYSQLI_ASSOC);
}else{
    echo "ERROR: Could not able to execute $sql. ".mysqli_error($link);
}
render('contact/index', ['messages' => $messages, 'address'=>$address]);
