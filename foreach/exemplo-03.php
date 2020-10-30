<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="box">
    <form action="" >
        <input type="text" name="Nome" id="">
        <input type="date" name="Data de nascimento" id="">
        <input class="btn-submit text-md" type="submit" value="Enviar">
    </form>
    <div class="inside-box">
    <?php
        if (isset($_GET)){
            foreach ($_GET as $key => $value) {
                echo $key.": ".$value."<br>";
                
            }
        }
        ?>
    </div>
</body>
</html>