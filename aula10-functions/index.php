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
        <code><code>Functions - Soma()</code>
            <code>$resultado = soma(2,3);
                  echo $resultado;
                <?PHP

                    function soma($a, $b){
                        $soma = $a + $b;
                        return $soma;
                    }

                    $a = 2;
                    $b = 3;

                    $resultado = soma(2,3);

                    echo $resultado;
                    
                ?>
            </code><!--Functions-->
        </code>
    </body>
</html>