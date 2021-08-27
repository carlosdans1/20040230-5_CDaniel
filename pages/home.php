<?php
    require_once('dados/produtos.php');
?>

<?php
    foreach($produtos as $id => $produto):
?>

<a href="index.php?paginas=produto&id=<?php echo $id?>">
<div class="c-produtos">
    <img src="images/<?php echo $produto['imagem']?>" alt="<?php echo $produto['nome']?>"
    <h3><?php echo $produto['nome']?></h3>
</div>
</a>

<?php
    endforeach
?>









