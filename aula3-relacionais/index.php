<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Exemplo</title>

        <style>
            
            body { padding: 0px; margin:0px; }
            
            code {
                padding: 10px;
                display:block;
                border: 1px dashed gray;
                margin: 10px 5px ;
            }
        </style>
        
    </head>
    
    <body>

    <code>

        <?PHP
            /**
             * Tipos de Dados
             * 
             * São utilizados para relaizar comparações entre valores ou expressões
             * 
             */
        ?>

        <code>Operadores Relacionais</code>

        <code>
            $a == $b
            <?PHP var_dump($a == $b); // verifica se os valores sao iguais, sem cast types ² ?>
        </code>         

        <code>
            $a === $b
            <?PHP var_dump($a === $b); // verifica se os valores e os tipos sao iguais ?>
        </code>

        <code>
            ($a != $b) || ($a <> $b) 
            <?PHP var_dump( ($a != $b) || ($a <> $b) ); // verifica se os valores sao diferentes ?>
        </code>

    </body>

</html>