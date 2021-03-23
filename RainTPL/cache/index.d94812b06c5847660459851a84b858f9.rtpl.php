<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template - Usando RainTPL</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
        }

        header{
            background-color: black;
            color: blanchedalmond;
            width: 100%;
            padding: 2rem 2rem;
            text-align: center;
        }

        section {
            margin: 3rem 7rem;
        }

        #title {
            display: block;
        }

        #navigation {
            display: block;
            margin-top: 0.8rem;
            min-width: 70%;
        }

        #navigation a {
            text-decoration: none;
            color: blanchedalmond;
            padding: 0.2rem 3rem 0.2rem 3rem;
            border-right: solid 1px blanchedalmond;

        }

        #navigation a:hover {
            border-radius: 3px;
            background-color: grey;
            color: white;
        }

        .flex {
            display: flex;
        }

        .flex-item-1 {
            flex: 1;
        }

        .notice-box {
            padding: 2rem;
            border-radius: 3px;
            box-shadow: rgb(37, 33, 33) 1px;
            border: solid 1px black;
        }
        
    </style>
</head>
<body>
    <header>
        <h1 id="title"><?php echo htmlspecialchars( $title, ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>
        <nav id="navigation">
            <a href="<?php echo static::$conf['base_url']; ?>not.html">Notícias</a>
            <a href="<?php echo static::$conf['base_url']; ?>">Receitas</a>
            <a href="<?php echo static::$conf['base_url']; ?>">Contato</a>
        </nav>
    </header>
    <section class="flex">
        <div class="notice-box flex-item-1">
            <h2><?php echo htmlspecialchars( $noticia1, ENT_COMPAT, 'UTF-8', FALSE ); ?></h2>
        </div>
        <div class="notice-box flex-item-1">
            <h2><?php echo htmlspecialchars( $noticia2, ENT_COMPAT, 'UTF-8', FALSE ); ?></h2>
        </div>
        <div class="notice-box flex-item-1">
            <h2><?php echo htmlspecialchars( $noticia3, ENT_COMPAT, 'UTF-8', FALSE ); ?></h2>
        </div>
    </section>
</body>
</html>