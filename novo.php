<h1>Novo</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="novo">
    <div class="mb-3">
        <label>Descricao</label>
        <input type="text" name="descricao" class="form-control">
    </div>
    <div class="mb-3">
        <label>Marca</label>
        <input type="text" name="marca" class="form-control">
    </div>
    <div class="mb-3">
        <label>Estoque</label>
        <input type="number" name="estoque" class="form-control">
    </div>
    <div class="mb-3">
        <label>Preco</label>
        <input type="number" name="preco" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary"> Enviar</button>
    </div>
</form>