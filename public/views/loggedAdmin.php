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

                    <div class="row mb-md-3">
                        <div class="py-3">
                            <h2 style="text-align: center; font-weight: bold; color: #111F44;">Administração</h2>
                        </div>    
                    </div>

                    <div class="row mb-3" id="controlPanel">

                        <div class="col-md-4 col-6 mb-3">
                            <button class="btn w-100 p-3 panelButton" id="btn0" onclick="toggleSection(0)">
                                <h4>
                                    <i class="fas fa-user"></i> Clientes
                                </h4>
                            </button>
                        </div>

                        <div class="col-md-4 col-6 mb-3">
                            <button class="btn w-100 p-3 panelButton" id="btn1" onclick="toggleSection(1)">
                                <h4>
                                    <i class="fas fa-store-alt"></i> Parceiros
                                </h4>
                            </button>
                        </div>

                        <div class="col-md-4 col-6 mb-3">
                            <button class="btn w-100 p-3 panelButton" id="btn3" onclick="toggleSection(3)">
                                <h4>
                                    <i class="fas fa-archive"></i> Estoque
                                </h4>
                            </button>
                        </div>

                    </div>


                    <div class="row my-5 p-2 adminSection" id="clientes">

                        <h3 style="text-align: center; margin-bottom: 5%;">Clientes</h3>

                        <table id="tableClientes" class="table table-striped table-hover" style="text-align: center; width: 100% !important;">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nome</th>
                                    <th>CPF</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                
                                    $query = "SELECT * FROM clientes";
                                    $result = mysqli_query($conn, $query);

                                    while ($row = mysqli_fetch_array($result)) {
                                        
                                        echo '<tr>
                                            <td>'.$row["id_cli"].'</td>
                                            <td>'.$row["nome"].'</td>
                                            <td>'.$row["CPF"].'</td>
                                            <td>
                                                <a class="btnAction" href="?page=formAdmin&type=cliente&action=view&id='.$row["id_cli"].'"><i class="fas fa-eye"></i></a>
                                                <a class="btnAction" href="?page=formAdmin&type=cliente&action=edit&id='.$row["id_cli"].'"><i class="fas fa-pen"></i></a>
                                                <a class="btnAction" href="?page=formAdmin&type=cliente&action=delete&id='.$row["id_cli"].'"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>';

                                    }
                                
                                ?>
                                
                            </tbody>
                            
                        </table>

                    </div>

                    <div class="row my-5 p-2 adminSection" id="parceiros">

                        <h3 style="text-align: center; margin-bottom: 5%;">Parceiros</h3>

                        <table id="tableParceiros" class="table table-striped table-hover" style="text-align: center; width: 100% !important;">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nome</th>
                                    <th>CNPJ</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php
                                
                                    $query = "SELECT * FROM emp_vend";
                                    $result = mysqli_query($conn, $query);

                                    while ($row = mysqli_fetch_array($result)) {
                                        
                                        echo '<tr>
                                            <td>'.$row["id"].'</td>
                                            <td>'.$row["empresa"].'</td>
                                            <td>'.$row["CNPJ"].'</td>
                                            <td>
                                                <a class="btnAction" href="?page=formAdmin&type=parceiros&action=view&id='.$row["id"].'"><i class="fas fa-eye"></i></a>
                                                <a class="btnAction" href="?page=formAdmin&type=parceiros&action=edit&id='.$row["id"].'"><i class="fas fa-pen"></i></a>
                                                <a class="btnAction" href="?page=formAdmin&type=parceiros&action=delete&id='.$row["id"].'"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>';

                                    }
                                
                                ?>
                            </tbody>
                            
                        </table>

                    </div>

                    <div class="row my-5 p-2 adminSection" id="estoque">

                        <h3 style="text-align: center; margin-bottom: 5%;">Estoque</h3>

                        <div class="col-6 mx-auto">
                            <a href="?page=formAdmin&type=estoque" class="btn w-100">
                                <h4>
                                    <i class="fas fa-upload"></i>
                                    Upload
                                </h4>
                            </a>
                        </div>

                        <div class="col-6 mx-auto">
                            <button class="btn w-100">
                                <h4>
                                    <i class="fas fa-download"></i>
                                    Backup
                                </h4>
                            </button>
                        </div>

                    </div>


            </div>
        </div>

    </div>
</div>


<div class="logoutBtn">
    <a href="./public/database/logout.php?type=admin" class="btn loginBtn"><h4>Logout</h4></a>
</div>


<script>
    $(document).ready(function() {
        $(".adminSection").hide();
    });

    function toggleSection(div) {

        switch (div) {
            case 0:
                $("#clientes").slideToggle();
                $("#btn0").toggleClass("selected");
                
                break;

            case 1:
                $("#parceiros").slideToggle();
                $("#btn1").toggleClass("selected");
                break;

            case 2:
                $("#produto").slideToggle();
                $("#btn2").toggleClass("selected");
                break;

            case 3:
                $("#estoque").slideToggle();
                $("#btn3").toggleClass("selected");
                break;
        
            default:
                break;
        }


        var options = "#options"+div;
        $(options).slideToggle();
    }


</script>