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

    </div>
</div>

<div style="background-color: #111F44;"> 
    <div class="container-xxl " style="position: relative; min-height: 80vh;">

        <div class="row p-3 px-md-5">
            <div class="col-md-10 mx-auto p-5" style="background-color: white; border-radius: 23px;">

                <form action="./public/database/login.php" method="post">

                    <div class="row mb-md-3">

                        <div class="py-3">
                            <h3 style="text-align: center; font-weight: bold; color: #111F44;">Administração</h3>
                        </div>

                        <input type="hidden" name="type" id="type" value="admin">

                        <div class="col-md-8 mx-auto">
                            <input class="form-control mb-3" type="text" name="login" id="login" placeholder="Login" required>

                            <input class="form-control mb-3" type="password" name="senha" id="senha" placeholder="Senha" required>

                            <div class="row mb-4" style="justify-content: space-around;">

                                <div class="col-5 mx-auto">
                                    <button class="btn registerBtn w-100">Entrar</button>
                                </div>
        
                            </div>

                        </div>

                    </div>

                </form>

            </div>
        </div>

    </div>
</div>


