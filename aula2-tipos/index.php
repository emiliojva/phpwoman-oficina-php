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
             * boolean
             * integer
             * float
             * string simples com aspas simples ''
             * string interpolada com aspas simples "{$var}"
             * array(vetor ou matriz) - Estrutura Heterogenea 
             * heterogêneo - adjetivo que possui natureza desigual e/ou apresenta diferença de estrutura, função, distribuição etc. (diz-se de qualquer coisa em comparação com outra). GRAMÁTICA que tem um gênero no singular e outro no plural (diz-se de substantivo). 
             */

             $vaiChover = true; // boolean

             $idade = 23; // integer

             $dolar = 3.88; // float

             $frase = "Hello World";

             echo $vaiChover . ' - ' . gettype($vaiChover);

        ?>

    </code>

    </body>

</html>