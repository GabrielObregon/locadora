<?php
include_once("conexao.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Lista de Filmes - Locadora IFPR</title>
</head>
<body>
<h1>LISTA DE FILMES</h1>
    <?php
        $sqlRegistros = mysqli_query($conexao,"select * from tbFilmes");
        $num_linhas = mysqli_num_rows($sqlRegistros);
      
        echo "<table border='1'>";
        echo "<tr>
                <th>Código</th>
                <th>Título</th>
                <th>Duração</th>
                <th>Valor da
                Locação</th>
                <th>Cod.Categoria</th>
                </tr>";
       

    for($i;$i<$num_linhas;$i++){
        $dados = mysqli_fetch_array($sqlRegistros);
        $idFilme = $dados["idFilme"];
        $tituloFilme = $dados["tituloFilme"];
        $duracaoFilme = $dados["duracaoFilme"];
        $valorLocacao = $dados["valorLocacao"];
        $idCategoria = $dados["idCategoria"];
        
        echo "
        <tr>
        <td> $idFilme</td>
        <td>$tituloFilme</td>
        <td>$duracaoFilme</td>
        <td>$valorLocacao</td>
        <td>$idCategoria</td>
        </tr>";
    }
    echo "</table>"; // fim da tabela
    ?>
    </body>
    </html>