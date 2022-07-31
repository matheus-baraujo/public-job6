<style>
    body{
        background-color: white;
    }
</style>

<div style="background-color: white;"> 
    <div class="container-xxl " style="min-height: 20vh; position: relative;">

        <div class="row">
            <img class="logo3 mx-auto  my-5" src="./public/resources/logo (1).png" alt="logo">
        </div>

        <?php include './public/partials/buttons.php'; ?>

    </div>
</div>

<div style="background-color: #111F44;"> 
    <div class="container-xxl " style="position: relative; min-height: 80vh;">

        <div class="row p-md-5 p-3">
            <div class="py-3" style="background-color: white; text-align: center; border-radius: 23px;">
                <h3>Cadastre-se na Tuyster e compre seus materiais de construção com os melhores preços!</h3>
            </div>
        </div>

        <div class="row p-3 px-md-5">
            <div class="p-4" style="background-color: white; border-radius: 23px;">

                <form action="./public/database/insert.php" method="post">

                    <div class="row mb-md-3">
                        <div class="col-md-4 px-3 mb-3">
                            <label class="label mb-2" for="name">Nome Completo</label>
                            <input class="form-control input" type="text" name="name" id="name" placeholder="Escreva aqui" required>
                        </div>

                        <div class="col-md-4 px-3 mb-3">
                            <label class="label mb-2" for="cpf">CPF</label>
                            <input class="form-control input" type="text" name="cpf" id="cpf" placeholder="Escreva aqui" required>
                        </div>

                        <div class="col-md-4 px-3 mb-3">
                            <label class="label mb-2" for="number">Número</label>
                            <input class="form-control input" type="tel" name="number" id="number" placeholder="Escreva aqui" required>
                        </div>
                    </div>

                    <div class="row mb-md-3">
                        <div class="col-md-4 px-3 mb-3">
                            <label class="label mb-2" for="end">CEP</label>
                            <input class="form-control input" type="text" name="cep" id="cep" placeholder="CEP" required>
                        </div>

                        <div class="col-md-4 px-3 mb-3">
                            <label class="label mb-2" for="email">Estado</label>
                            <input class="form-control input" type="text" name="estado" id="estado" placeholder="Estado" required>
                        </div>

                        <div class="col-md-4 px-3 mb-3">
                            <label class="label mb-2" for="password">Cidade</label>
                            <input class="form-control input" type="text" name="cidade" id="cidade" placeholder="Cidade" required>
                        </div>
                    </div>

                    <div class="row mb-md-3">
                        <div class="col-md-4 px-3 mb-3">
                            <label class="label mb-2" for="end">Endereço</label>
                            <input class="form-control input" type="text" name="end" id="end" placeholder="Rua, número, bairro..." required>
                        </div>

                        <div class="col-md-4 px-3 mb-3">
                            <label class="label mb-2" for="email">Email</label>
                            <input class="form-control input" type="mail" name="email" id="email" placeholder="example@mail.com" required>
                        </div>

                        <div class="col-md-4 px-3 mb-3">
                            <label class="label mb-2" for="password">Senha</label>
                            <input class="form-control input" type="password" name="password" id="password" placeholder="Escreva aqui" required>
                        </div>
                    </div>

                    <div class="row mb-md-3">

                        <div class="col-md-6 mx-auto px-3 mb-3">
                            <label class="label mb-2" for="perfil">Perfil</label>
                            <div id="perfil" class="row">

                                <input type="hidden" name="perfil" id="perfilValue" value="">
                                
                                <div class="col-md-6 mb-3">
                                    <div class="btn perfilBtn w-100" id="opt1" onclick="perfil(0);">
                                        <div class="square"></div> Consumidor
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <div class="btn perfilBtn w-100" id="opt2" onclick="perfil(1);">
                                        <div class="square"></div> Profissional de obra
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row mb-md-3" style="justify-content: space-between;">

                        <a href="?page=<?php echo $_SESSION['return']; ?>" class="btn loginBtn" style="width: auto;">Cancelar</a>
                        <button class="btn registerBtn" style="width: auto;">Confirmar</button>
                        
                    </div>

                </form>

            </div>
        </div>

    </div>
</div>

<script src="./public/js/register.js"></script>