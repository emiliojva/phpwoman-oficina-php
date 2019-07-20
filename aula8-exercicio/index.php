<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Exemplo</title>

        <style>
            
            body { padding: 0px; margin:0px; }
            
            /*Enter automatico e enquadramento de código*/
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
        <?PHP
            /**
             * Exercicio
             * receba dois valores inteiros e imprima todos os valores(inclusive) entre eles considerando os valores digitados
             * 
             */
        ?>
        <code><code>Exercicio - receba dois valores inteiros e imprima todos os valores(inclusive) entre eles considerando os valores digitados</code>
            <code>Exercicio - Com While

                $primeiro_valor = 5;
                $segundo_valor &nbsp;= 15;

                while($primeiro_valor<=$segundo_valor){

                    &nbsp;echo ($primeiro_valor++). ' ';

                }

                <?PHP

                $primeiro_valor = 5;
                $segundo_valor = 15;

                echo "<hr>";
                while($primeiro_valor<=$segundo_valor){

                    echo ($primeiro_valor++). ' ';

                }
                ?>
            </code><!--while()-->
            <code>Exercicio - Com For
            
                
                $primeiro_valor = 2;
                $segundo_valor &nbsp;= 8;

                for($i=$primeiro_valor; $i<=$segundo_valor; $i++){

                    &nbsp;echo ($i). ' ';

                }

                <?PHP

                    $primeiro_valor = 2;
                    $segundo_valor = 8;

                    echo "<hr>";

                    for($i=$primeiro_valor; $i<=$segundo_valor; $i++){
                        echo ($i). ' ';
                    }

                ?>
            </code><!--for()-->
        </code>

    </body>

</html>