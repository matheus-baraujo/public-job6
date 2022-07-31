<h3 style="text-align: center; margin-bottom: 5%;"> Upload Estoque</h3>

<div class="col-md-6 mx-auto">
    <form action="./public/database/update.php" enctype="multipart/form-data" method="post">

    <input type="hidden" name="type" value="estoque">

    <label for="arquivoAdd" class="mb-3">Arquivo</label>
    <input class="form-control mb-3" type="file" name="arquivo" id="arquivoAdd">

</div>

<div class="row my-4" style="justify-content: space-around;">

    <div class="col-5 mx-auto">
        <input type="submit" class="btn registerBtn w-100" value="Enviar">
    </div>
    
    <div class="col-5 mx-auto">
        <a href="?page=loggedAdmin" class="btn loginBtn w-100">Voltar</a>
    </div>

    </form>
</div>

