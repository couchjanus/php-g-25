<ul>
    <li><a href="/">Home</a></li>
    <li><a href="/about">About</a></li>
    <li><a href="/contact">Contact</a></li>
</ul>
<?php

$hello = "<h1>Hello World</h1>";
// echo $hello;

function myf() {
    $a = 4;
    // echo $a;
}
// echo $a;
myf();

define("HELLO", "Hello php");
// HELLO = "Bla bla";
// echo HELLO;

// echo __dir__;
// echo __DIR__;
// echo __FILE__;

// print_r($_SERVER);
echo "<hr>";
// echo $_SERVER['REQUEST_URI'];

if ($_SERVER['REQUEST_URI'] == '/') {
    echo "<h1>Home Page</h1>";
} elseif($_SERVER['REQUEST_URI'] == '/about'){
    echo "<h1>About Page</h1>";
}elseif($_SERVER['REQUEST_URI'] == '/contact'){
    echo "<h1>Contact Page</h1>";
}
else {
    echo "<h1>404 Error Page</h1>";
}