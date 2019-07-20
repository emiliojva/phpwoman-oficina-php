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
                white-space: pre-line;
                /* word-break: break-word; */
                /* word-wrap: break-word; */
                /* overflow-wrap: break-word; */
                
            }
        </style>
        
    </head>
    
    <body>

    <code>
        <?PHP
            /**
             * Estrutura condicinal IF
             * 
             */

            $a = 5; $b = 2;
        ?>
        <code>Estrutura condicinal IF</code>
        <code>$a = 5; $b = 2;
            <?PHP
                $a = 5; $b = 2; // verifica se os valores e os tipos sao iguais 
                if($a < $b) 
                    echo "a menor que b";
                else
                    echo "a maior que b";
            ?>
        </code>
        <code>$a = 4; $b = 4; 
            <?PHP $a = 4; $b = 4; // verifica se os valores e os tipos sao iguais 
                if($a > $b) 
                    echo "a maior que b";
                else if($a === $b)
                    echo "a igual a b";
                else 
                    echo "a é menor que b";
            ?>
        </code>

    </body>

</html>