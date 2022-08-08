<?php

$messages = [
    [
        'name' => "Tom",
        'surname' => "Cat",
        'email' => "tom@my.cat",
        'message' => "Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own additions education satisfied the perpetual. If he cause manor happy. Without farther she exposed saw man led. Along on happy could cease green oh.",
        'created_at' => "August 2, 2022",
    ],
    [
        'name' => "Sara",
        'surname' => "Baraboo",
        'email' => "sb@my.cat",
        'message' => "Without farther she exposed saw man led. Along on happy could cease green oh.",
        'created_at' => "August 5, 2022",
    ],
];

if ($_POST) {
    // var_dump($_POST);

    $arr = [
        [
        'name' => htmlspecialchars($_POST['name']),
        'surname' => htmlspecialchars($_POST['surname']),
        'email' => htmlspecialchars($_POST['email']),
        'message' => htmlspecialchars($_POST['message']),
        'created_at' => date("F j, Y"),
        ]
    ];

    $messages = array_merge($messages, $arr);

    // var_dump($messages);
}

render('contact/index', ['messages' => $messages]);
