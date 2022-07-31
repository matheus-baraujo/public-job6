<h3 style="text-align: center; margin-bottom: 5%;"> <?php if ($_GET['action'] == 'edit') { echo 'Editar'; } ?> Parceiros</h3>

<?php
    $query = 'SELECT * FROM emp_vend WHERE id = "'.$_GET['id'].'"';
    $result = mysqli_fetch_array(mysqli_query($conn, $query));
?>

<div class="col-md-6">

    <form action="./public/database/update.php" method="post">

    <input type="hidden" name="type" value="parceiros">

    <label for="empresa">Empresa</label>
    <input class="form-control mb-3" type="text" name="empresa" id="empresa" <?php if ($_GET['action'] != 'edit') { echo 'disabled'; } echo ' value="'.$result['empresa'].'"'; ?>>

    <label for="cnpj">CNPJ</label>
    <input class="form-control mb-3" type="text" name="cnpj" id="cnpj" <?php if ($_GET['action'] != 'edit') { echo 'disabled'; } echo ' value="'.$result['CNPJ'].'"'; ?>>

    <label for="email">Email</label>
    <input class="form-control mb-3" type="mail" name="email" id="email" <?php if ($_GET['action'] != 'edit') { echo 'disabled'; } echo ' value="'.$result['email'].'"'; ?>>

    <label for="qntd">Quantidade de produtos</label>
    <input class="form-control mb-3" type="text" name="qntd" id="qntd" <?php if ($_GET['action'] != 'edit') { echo 'disabled'; } echo ' value="'.$result['quant_prod'].'"'; ?>>

    <label for="telefone">Telefone</label>
    <input class="form-control mb-3" type="tel" name="telefone" id="telefone" <?php if ($_GET['action'] != 'edit') { echo 'disabled'; } echo ' value="'.$result['telefone'].'"'; ?>>

</div>

<div class="col-md-6">

    <label for="cep">CEP</label>
    <input class="form-control mb-3" type="text" name="cep" id="cep" <?php if ($_GET['action'] != 'edit') { echo 'disabled'; } echo ' value="'.$result['cep'].'"'; ?>>

    <label for="estado">Estado</label>
    <input class="form-control mb-3" type="text" name="estado" id="estado" <?php if ($_GET['action'] != 'edit') { echo 'disabled'; } echo ' value="'.$result['Estado'].'"'; ?>>

    <label for="cidade">Cidade</label>
    <input class="form-control mb-3" type="text" name="cidade" id="cidade" <?php if ($_GET['action'] != 'edit') { echo 'disabled'; } echo ' value="'.$result['Cidade'].'"'; ?>>

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

