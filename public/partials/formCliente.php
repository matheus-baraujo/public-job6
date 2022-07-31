<h3 style="text-align: center; margin-bottom: 5%;"> <?php if ($_GET['action'] == 'edit') { echo 'Editar'; } ?> Clientes</h3>

<?php
    $query = 'SELECT * FROM clientes WHERE id_cli = "'.$_GET['id'].'"';
    $result = mysqli_fetch_array(mysqli_query($conn, $query));
?>



<div class="col-md-6">

    <form action="./public/database/update.php" method="post">

    <input type="hidden" name="type" value="cliente">

    <label for="nome">Nome</label>
    <input class="form-control mb-3" type="text" name="nome" id="nome" <?php if ($_GET['action'] != 'edit') { echo 'disabled'; } echo ' value="'.$result['nome'].'"'; ?>>

    <label for="cpf">Cpf</label>
    <input class="form-control mb-3" type="text" name="cpf" id="cpf" <?php if ($_GET['action'] != 'edit') { echo 'disabled'; } echo ' value="'.$result['CPF'].'"'; ?>>

    <label for="email">Email</label>
    <input class="form-control mb-3" type="mail" name="email" id="email" <?php if ($_GET['action'] != 'edit') { echo 'disabled'; } echo ' value="'.$result['email'].'"'; ?>>

    <label for="cargo">Cargo</label>
    <input class="form-control mb-3" type="text" name="cargo" id="cargo" <?php if ($_GET['action'] != 'edit') { echo 'disabled'; } echo ' value="'.$result['cargo'].'"'; ?>>

    <label for="telefone">Telefone</label>
    <input class="form-control mb-3" type="tel" name="telefone" id="telefone" <?php if ($_GET['action'] != 'edit') { echo 'disabled'; } echo ' value="'.$result['telefone'].'"'; ?>>

</div>

<div class="col-md-6">

    <label for="cep">CEP</label>
    <input class="form-control mb-3" type="text" name="cep" id="cep" <?php if ($_GET['action'] != 'edit') { echo 'disabled'; } echo ' value="'.$result['cep'].'"'; ?>>

    <label for="uf">UF</label>
    <input class="form-control mb-3" type="text" name="uf" id="uf" <?php if ($_GET['action'] != 'edit') { echo 'disabled'; } echo ' value="'.$result['UF'].'"'; ?>>

    <label for="cidade">Cidade</label>
    <input class="form-control mb-3" type="text" name="cidade" id="cidade" <?php if ($_GET['action'] != 'edit') { echo 'disabled'; } echo ' value="'.$result['cidade'].'"'; ?>>

    <label for="end">Endereço</label>
    <input class="form-control mb-3" type="text" name="end" id="end" <?php if ($_GET['action'] != 'edit') { echo 'disabled'; } echo ' value="'.$result['endereco'].'"'; ?>>

    <label for="bairro">Bairro</label>
    <input class="form-control mb-3" type="text" name="bairro" id="bairro" <?php if ($_GET['action'] != 'edit') { echo 'disabled'; } echo ' value="'.$result['bairro'].'"'; ?>>

</div>

<div class="col-md-6 mx-auto">
    <label for="numero">Número</label>
    <input class="form-control mb-3" type="text" name="numero" id="numero" <?php if ($_GET['action'] != 'edit') { echo 'disabled'; } echo ' value="'.$result['numero'].'"'; ?>>
</div>

<div class="row mb-4" style="justify-content: space-around;">

    <?php 
        if ($_GET['action'] == 'edit') { 
            echo '<div class="col-5 mx-auto">
                <input type="submit" class="btn registerBtn w-100" value="Salvar">
            </div>';
        } 
    ?>

    
    <div class="col-5 mx-auto">
        <a href="?page=loggedAdmin" class="btn loginBtn w-100">Voltar</a>
    </div>

    </form>
</div>

