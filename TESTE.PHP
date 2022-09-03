<!-- AULA 16 -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Livros da Bienal de São Paulo</title>
</head>
<body>
    <?php
    include'CONEXAO.PHP';
    $consulta = $cn->query('select * from vw_LIVRO');
    // AULA 17// 
    while ($exibe = $consulta->fetch(PDO:: FETCH_ASSOC){
    echo $exibe['NM_LIVRO'].'<br>';
    echo $exibe['VL_PRECO'].'<br>';
    echo $exibe['DS_CATEGORIA'].'<br>';
    echo '<hr>'; //salvando + F5//

    }
    ?>
</body>
</html>
