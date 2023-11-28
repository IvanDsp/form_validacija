<?php

if(isset($_POST['btn'])){
    $ime = $_POST['name'];
    $email = $_POST['email'];
    $rodj = $_POST['god'];
    $pol = $_POST['pol'];

    if(isset($_POST['jezik'])){
        $jezik = $_POST['jezik'];
    }

}else{
    header("Location:index.php");
}

if(isset($jezik)){
    echo "<h2>Welcome $ime<h2>";
    foreach($jezik as $language){
        echo "<h2>We need $language developer</h2>";
    }
    echo "<h2>We send you email on <span style='text-decoration:underline'>$email</span></h2>";
}else{
    echo "<h2>I'm sorry, we need only one language!</h2>";
}

?>