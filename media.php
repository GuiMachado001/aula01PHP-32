<?php
    $nota1 = 3;
    $nota2 = 4;
    $nota3 = 7;
    $nota4 = 1;

    $media = ($nota1 + $nota2 + $nota3 + $nota4 ) / 4;

    if($media >= 9){
        echo "O luno passou com honras!! <br> Média: $media";
    }else if($media >= 4){
        // exemplo de arredondamento
        echo "Média ".round($media). "O aluno de exame !!";
    }else{
        echo "O aluno reprovou! <br> Média $media";
    }

?>