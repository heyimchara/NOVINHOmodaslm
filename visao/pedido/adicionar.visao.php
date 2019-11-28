<h2>Selecione cupom</h2> 
<form action="pedido/desconto" method="POST">
Digite o código de seu cupom ou vale: <input type="text" name="id_cupom">
<button type="submit">Calcular</button>
</form>  

<h2>Pedidos</h2>

<form action="pedido/salvarPedido" method="POST">
<h2>Selecione o endereço</h2> 
Endereços: <select name="logradouro">
<option value="default"></option>
<?php foreach ($enderecos as $endereco): ?>
<option value="<?=$endereco["idEndereco"]?>"><?=$endereco["logradouro"]?></option>
<?php endforeach;?>
</select> 

<h2>Selecione a forma de pagamento</h2> 
FormasDePagamento: <select name="cod_formadepagamento">
<option value="default"></option>
<?php foreach ($formasdepagamento as $formadepagamento): ?>
<option value="<?=$formadepagamento["cod_formadepagamento"]?>"><?=$formadepagamento["descricao"]?></option>
<?php endforeach;?>
</select>

<h2>Produtos</h2>
<?php foreach ($produtos as $produto) : ?>
<p><a href="produto/ver/<?=$produto['cod_produto']?>"><?= $produto['nome']?><br><img src="<?=$produto['imagem']?>" alt=""></a></p>
<p>R$ <?= number_format($produto["preco"],2) ?></p>
<?php endforeach; ?>


<p>Total: <?=$total?></p>

<br><br>
<button type="submit">Finalizar</button>
</form>
