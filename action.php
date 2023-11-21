<?php
    echo "<form style='width: 400px; margin: auto; padding: 20px; border: 1px solid #ccc; border-radius: 4px; text-align: center;'>";
    echo "<img src='images.png' alt='image' style='width:100px;'> ";

    if (isset($_GET["name"])) {
        echo "<h1> Thank you " . $_GET["name"] . "!! </h1>";
    }
    if (isset($_GET["club"])) {
        echo "<p> We have received your application for the " . $_GET["club"];
    }
    if (isset($_GET["skill"])){
        $skills = $_GET["skill"];
        echo "<p> You are a crazy ".implode(" and ", $skills);
    }
    if (isset($_GET["time"])) {
        echo "<p> You will be available on " . $_GET["time"] ;
    }
    echo "</form>";
?>