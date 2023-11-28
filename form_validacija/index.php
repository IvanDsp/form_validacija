<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form validacija</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="jumbotron text-center">
        <h1 class="display-3">Form validacija</h1>
    </div>    
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <form action="validate.php" method="post">
                    <input type="text" name="name" placeholder="Name:" class="form-control" required><br>
                    <input type="email" name="email" placeholder="Email:" class="form-control" required><br>
                    <select name="god" id="god">
                        <?php for($i=1965; $i<2005; $i++): ?>
                            <option value="<?php echo $i; ?>">Year of birth <?php echo $i ?></option>
                        <?php endfor; ?>    
                    </select>
                    <input type="radio" name="pol" value="male" required> Male
                    <input type="radio" name="pol" value="female"> Female <br>  
                    <br><p>Programming languages:</p>
                    <input type="checkbox" name="jezik[]" value="php"> Php
                    <input type="checkbox" name="jezik[]" value="js"> Js
                    <input type="checkbox" name="jezik[]" value="html"> Html
                    <button type="submit" class="btn btn-info form-control" name="btn">Save</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>