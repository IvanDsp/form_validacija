<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreach</title>
</head>
<body>
    <?php
    
    $pets=["cat", "dog", "fish", "mouse"];
    $pet_names = [
        "cat"=>"Marla",
        "dog"=>"Badi",
        "fish"=>"Nemo",
        "mouse"=>"Dzeri"
    ];
    // foreach($pet_names as $key=>$value){
    //     echo $key. " : ".$value. "<br>";
    // }
    ?>

    <?php foreach($pet_names as $key=>$name): ?>
        <h2><span><?php echo $key. " : "; ?></span><?php echo $name. "<br>"; ?></h2>
        <?php endforeach ?>
</body>
</html>