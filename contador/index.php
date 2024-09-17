<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOTÍCAIS</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="titulo">
        <h3><center> BEM VINDO AO SITE WEBDESIGN EM FOCO</center></h3>
    </div>
    <br>
    <hr>
    <br>
    <div class="conteudo">
        <h4><center> NOVIDADES DA SEMANA </center></h4>
    </div>

    <?php
        $total = file_get_contents("/opt/lampp/htdocs/contador/contar.txt");
        $total = chop($total);
        $total++;
        echo $total;

        $arquivo = fopen("/opt/lampp/htdocs/contador/contar.txt", "w");
        fwrite($arquivo, $total);
        fclose($arquivo);
        echo "Contador: $total ";

    ?>
    
</body>
</html>