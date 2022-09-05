<!DOCTYPE html>
<html lang="py-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX HTML</title>

</head>
<body>

<article>
    <h1>Meu formulário</h1>
    <form method="post">
        <input type="text" name="nome" placeholder="Digite o seu  nome" required> <br><br>
        <input type="text" name="idade" placeholder="Digite sua idade" required> <br><br>
        <input type="submit" value="Processar" name="processar">
    </form>
    <?php 
        if (isset($_POST['processar'])):
            

        endif;
    ?>
</article>
    
</body>
</html>