<?php
$titulo = "Responder";
include "./conexao.php";
include "./cabecalho.php";
$query = "select * from questoes order by rand() limit 15";
$resultado = mysqli_query($conexao, $query);

?>

    <form action="./responder.php" method=""></form>

<?php

while ($linha = mysqli_fetch_array($resultado)) {
?>  
        <div class="card w-75">
        <div class="card-body">
        <h2 class="card-title"><?php echo $linha["pergunta"]; ?></h2>
        <p class="card-text">
            <input type="radio" name="<?php echo $linha["id"];?>" id="a" value="a" required> <?php echo $linha["a"]; ?><br>
            <input type="radio" name="<?php echo $linha["id"];?>" id="b" value="b" required> <?php echo $linha["b"]; ?><br>
            <input type="radio" name="<?php echo $linha["id"];?>" id="c" value="c" required> <?php echo $linha["c"]; ?><br>
            <input type="radio" name="<?php echo $linha["id"];?>" id="d" value="d" required> <?php echo $linha["d"]; ?><br>
            <input type="radio" name="<?php echo $linha["id"];?>" id="e" value="e" required> <?php echo $linha["e"]; ?><br>
        </p>
        <a href="#" class="btn btn-dark">Enviar resposta</a>
    </div>
    </div>
<?php
}


?>

    <button type="submit "class="btn btn-dark">ENVIAR PARA CORREÇÃO</button>


<?php
include "./rodape.php";
?>
