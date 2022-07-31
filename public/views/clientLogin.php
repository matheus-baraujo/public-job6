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
            <div class="py-3 px-5" style="color: white; text-align: center; border-radius: 23px;">
                <h3><span style="font-size: 2.5rem; font-weight: bold;">Falta pouco! </span>  Já estamos enviando sua lista de materiais para as lojas 
                    escolhidas, mas antes precisamos de algumas informações suas!</h3>
            </div>
        </div>

        <div class="row p-3 px-md-5">
            <div class="col-md-10 mx-auto p-5" style="background-color: white; border-radius: 23px;">

                <form action="./public/database/login.php" method="post">

                    <div class="row mb-md-3">

                        <div class="py-3">
                            <h3 style="text-align: center; font-weight: bold; color: #111F44;">Entre na sua conta Tuyster</h3>
                        </div>

                        <div class="col-md-8 mx-auto">

                            <input type="hidden" name="type" value="client">

                            <input type="hidden" name="return" value="<?php echo $_SESSION['return']; ?>">

                            <input class="form-control input mb-3" type="text" name="login" id="login" placeholder="Login" required>

                            <input class="form-control input mb-3" type="password" name="senha" id="senha" placeholder="Senha" required>

                            <div class="row mb-4" style="justify-content: space-around;">

                                <div class="col-5 mx-auto">
                                    <button class="btn registerBtn w-100">Entrar</button>
                                </div>
                                <div class="col-5 mx-auto">
                                    <a href="?page=<?php echo $_SESSION['return']; ?>" class="btn loginBtn w-100">Cancelar</a>
                                </div>
        
                            </div>

                            <div class="row mb-3">
                                <p style="text-align: center; font-weight: bold;">Não tem uma conta ainda? 
                                    <a style="text-decoration: none;" href="?page=register">Cadastre-se</a>
                                </p>
                            </div>

                        </div>

                    </div>

                </form>

            </div>
        </div>

    </div>
</div>


