<?php   
    require_once('dados/produtos.php');
    
    $id = null;
    if(isset($_GET['id'])){
    $id = $_GET['id'];

    if(!isset($produtos[$id]))
        $id = null;
    }
    
    if(is_null($id)){
?>

        <div>
            codigo não existe
        </div>

<?php
    }else{
?>

<div class="c-esq">
    <img src="images/<?php echo $produtos[$id]['imagem']?>" alt="<?php echo $produtos[$id]['nome']?>">
</div>
<div class="c-dir">
    <h1><?php echo $produtos[$id]['nome']?></h1>
    <h2><?php echo "R$ " .number_format($produtos[$id]['preco'], 2, ",")?> <span class="preco-un">/ Unidades</span> </h2>
    <p><?php echo $produtos[$id]['descricao']?></p>

    <a href="index.php?paginas=contato" class="botao"> Solicitar Pedido</a>
</div>
<?php
    }
?>

