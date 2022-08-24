<?php 
    $scrum_devs = [
        'Stenio' => "Agora na parte da manha fez a entrega da task -> Canal Webhook - Melhorar mensagem de envio com falha - [YNvF5fgb], está ficando sem task para atuar",
        'Ricardo'=> "Terminou a task Chats - Refatorar Query index [dCnTYu5u] mas deixou em blocked, vai realizar mais alguns testes antes de subir",
        'Raphael' => "Informou que Lucas apontou algumas correções no review da task Planos - tela minhas assinaturas - [QP27KvIy], entrei em contato com o Lucas na parte da tarde para alinhar a damanda.",
        'Hannan' => "Informou  que está nos ultimos ajustes da task Estatísticas por Canais [fwiPnQxW] entrega ainda hoje
        OBS: Entregue as 12:00",
        'Rogério'=> "Está finalizando a task Permissões/Atendimento - Testes e anotações [K7yBvV4H], informou que vai precisar realizar algumas alterações pq em alguns momentos listeners dos eventos não são aplicados.
        Também apontou uma alteração no back-end, Gonçalves já está no caso.",
        'Lucas' => "Atuando nos code review e atuando na task https://trello.com/c/v06t72qk"


    ];

    $number_devs = 0;


    if ($number_devs <= 0) {

        echo "*** STATUS DA DAILY (15/08/2022)***";
        echo "<br><br>";
        echo "Valor da variavel number_devs: <br><br>";
        print_r($number_devs);
        for ($i=$number_devs; $i <= $number_devs; $i++) 
        { 
            
            
            foreach ($scrum_devs as $key => $value) {
            echo "<br><br>";
            echo "Dev:. <b>".$key."</b><br>";
            echo "  Detalhamento das tasks: ".$value;
            echo "<br><hr>";
            }; 
        };
    } elseif ($number_devs == 0 ) {
        echo "Você não deveria estar aqui";
    } else {
        echo "Você caiu na ultima verificação";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily diaria</title>
</head>
<body>
    
</body>
</html>