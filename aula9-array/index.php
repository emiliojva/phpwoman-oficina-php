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
        <code><code>Arrays - com array search</code>
            <code>
                <?PHP
                    $frutas = array();

                    array_push($frutas, "Banana", "Maçã", "Pera", "Laranja" );

                    foreach($frutas as $fruta){
                        if($fruta == "Pera"){
                            echo "Pera está no indice ". array_search($fruta,$frutas) . "<br>";
                        }

                    }

                ?>
            </code><!--arrays-->
           
        </code>

    </body>

</html>