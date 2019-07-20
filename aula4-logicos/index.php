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
             * Operadores Lógicos
             * 
             * São utilizados para realizar comparações lógicas retornando true ou false.
             * 
             */

            $a = TRUE; $b = FALSE;
        ?>

        <code>Operadores Relacionais</code>

        <code>
            $a and $b
            <?PHP var_dump($a and $b); // verifica se os valores sao iguais, sem cast types ² ?>
        </code>         

        <code>
            $a or $b
            <?PHP var_dump($a or $b); // verifica se os valores e os tipos sao iguais ?>
        </code>

        <code>
            $a xor $b
            <?PHP var_dump($a xor $b); // verifica se os valores e os tipos sao iguais ?>
        </code>

        <code>
            $a=true;
            echo !$a;
            <?PHP $a=true; var_dump(!$a); // verifica se os valores e os tipos sao iguais ?>
        </code>

        <code>
            $a && $b
            <?PHP var_dump($a && $b); // verifica se os valores e os tipos sao iguais ?>
        </code>

    </body>

</html>