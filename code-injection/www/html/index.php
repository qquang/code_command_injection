
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./static/index.css">
    <title>Eval 2.0</title>
</head>
<body>
    <div class='container'>
        <form class="container_form" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method='post'>
            <h1>Code to eval</h1>
            <input type='text' name='data' value='printf(1+1);'> 
            <input type='submit' value='Run!' name='submit'>
            <br>
            <?php
                        if (isset($_POST['data'])) {
                            eval($_POST['data']);
                        } else {
                            echo 'Try to find the flag <3';
                        }
            ?>
        </form>
    </div>
</body>
</html>