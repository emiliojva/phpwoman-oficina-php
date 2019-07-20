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
             * Estruturas de Repeticao - Loops(for,while,foreach e doWhile)
             * 
             */
        ?>
        <code>Estruturas de Repeticao - Loops(for,while,foreach e doWhile)</code>
        <code>$i = 0; Loop enquanto i menor ou igual a 10
            <?PHP
            $i = 0; 
            echo "<hr>";
            while($i<10){

                $i++;

                echo $i . ' ';
                 
                if($i%2)
                    echo 'é impar';
                else 
                    echo 'é par';
                echo  '<br/> '; 
            }
            ?>
        </code>

    </body>

</html>