<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Perfil Funcional</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="../CSS/bootstrap/css/bootstrap.min.css">
        <script type="text/javascript">
        function Paralisis() {
        element = document.getElementById("contenido");
        element0 = document.getElementById("contenido0");
        element1 = document.getElementById("contenido1");
        element2 = document.getElementById("contenido2");
        element3 = document.getElementById("contenido3");
        check = document.getElementById("check");
        if (check.checked) {
            element.style.display='block';
            element0.style.display='block';
            element1.style.display='block';
            element2.style.display='block';
            element3.style.display='block';
        }
        else {
            element.style.display='none';
            element0.style.display='none';
            element1.style.display='none';
            element2.style.display='none';
            element3.style.display='none';
        }
    }
        function ParalisisCerebral() {
        element = document.getElementById("conte");
        element0 = document.getElementById("conte0");
        element1 = document.getElementById("conte1");
        element2 = document.getElementById("conte2");
        element3 = document.getElementById("conte3");
        check = document.getElementById("check2");
        if (check.checked) {
            element.style.display='block';
            element0.style.display='block';
            element1.style.display='block';
            element2.style.display='block';
            element3.style.display='block';
            btn2.style.display='block';
        }
        else {
            element.style.display='none';
            element0.style.display='none';
            element1.style.display='none';
            element2.style.display='none';
            element3.style.display='none';
        }
    }
        function tipoParalisis(){
            element = document.get
        }
</script>
    </head>
    <body>
        <?php
            require_once("../MODEL/Postulante.php");
            require_once("../MODEL/Discapacidad.php");
            session_start();
            $p=new Postulante();
            $dis=new Discapacidad();
            $p=$_SESSION["Postulante"];
        ?>
<!-- ********************************************|1 CONTENIDO |*******************************************************************************************************************-->
    <header>
    <!-- Barra Navegacion -->
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="../VIEW/Base-pag.php">Trabaja a tu medida</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Info</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Desplegable
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Opción</a>
                        <a class="dropdown-item" href="#">Otra opción</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Ultima Opción separada</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Déshabilitado</a>
                    </li>
                </ul>
                <a class="nav-link" style="color:white;" href="#">
                    <img src="../CSS/open-iconic-master/png/account-login-3x.png" alt="icon name">  <!--|  Entrar  |--->
                    <img src="../CSS/open-iconic-master/png/account-logout-3x.png" alt="icon name"> <!--|  Salir   |--->
                    <img src="../CSS/open-iconic-master/png/person-3x.png" alt="icon name">         <!--| Usuario  |-->
                    <?php
                    echo $p->getNombre()." ".$p->getApellido_Paterno();
                    ?>
                </a>
                <!-- *************** BUSCADOR
                <form class="form-inline my-2 my-lg-0 disabled">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                -->
            </div>
        </div> 
    <!-- Fin Barra Navegacion -->   
    </nav>
    </header>
    
    <div class="container-fluid">
        <div class="row"> <!--row: se utiliza para definir una tabla de posicionamiento donde utilizar despues las clases Col-xs-?  -->
            <!--*************************|2 MENU DE NAVEGACION IZQUIERDO |**********************************************************-->
            <div class="col-xl-3 borde-b table-dark" style="min-height: 800px">
                <div class="">
                    <table class="table asd"style="position:absolute;top:0;left:0;">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center" style="color:white;">Menu de navegacion</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <img src="../CSS/open-iconic-master/png/bookmark-3x.png" alt="icon name"><a href="../VIEW/perfil.php" style="color:white;"> Perfil</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../CSS/open-iconic-master/png/bookmark-3x.png" alt="icon name"><a href="../VIEW/perfil-funcional.php" style="color:white;"> Perfil Funcinal</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../CSS/open-iconic-master/png/bookmark-3x.png" alt="icon name"><a href="../VIEW/postulaciones.php" style="color:white;">Mis Postulaciones</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../CSS/open-iconic-master/png/bookmark-3x.png" alt="icon name"><a href="../VIEW/buscarOfertas.php" style="color:white;"> Buscar Trabajo</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!--*************************|2 FIN MENU DE NAVEGACION IZQUIERDO |******************************************************-->
            <div class="col-xl-9 borde-b">
                <div class="container" style="margin-top:30px;">
                <!--*****************|3 CONTENIDO INTERNO DE PAG|*****************************************************************-->
                    <div class="row align-content-center">
                        <div class="col-xl-1 text-center borde-r"></div>
                        <div class="col-xl-10 text-center borde-r">
                            <h1>Perfil Funcional</h1>
                        </div>
                        <div class="col-xl-1 text-center borde-r"></div>
                        <div class="col-xl-12 borde-r">
                            <h3>Información Funcional</h3>
<!--********************************|A) INFORMACION Discapacidad|***************************************-->
                                
                                <form action="">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <h6>Selecciones las opciones que usted precenta.</h6>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <input type="checkbox" id="check" aria-label="Checkbox for following text input" onchange="javascript:Paralisis()">
                                                    </div>
                                                </div>
                                                <input type="text" value="Paralisis" class="form-control" disabled aria-label="Text input with checkbox">
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <input type="checkbox" id="check2" aria-label="Checkbox for following text input" onchange="javascript:ParalisisCerebral()">
                                                    </div>
                                                </div>
                                                <input type="text" value="Paralisis Cerebral" class="form-control" disabled aria-label="Text input with checkbox">
                                            </div>
                                        </div>


                                        <div class="col-xl-12"></div>  <!-- Opcion Paralisis -->


                                        <div class="col-xl-4" style="display: none;" id="contenido">
                                            <div class="input-group mb-4">
                                                <div class="input-group-append">
                                                    <label class="input-group-text" for="inputGroupSelect02">Tipo :</label>
                                                </div>
                                                <select class="custom-select" id="inputGroupSelect02">
                                                <option selected disabled>-Paralisis-</option>
                                                <?php
                                                    $disc=new Discapacidad();
                                                    $dis->setTipo_dis("7");
                                                    $list=$dis->listar_dis();
                                                        foreach ($list as $disc) {
                                                            echo '<option value="'.$disc->getCod_discapacidad().'">'.$disc->getNombre_dis().'</option>';
                                                        }
                                                ?>
                                                </select>
                                            </div>
                                        </div>

                                        
                                        <div class="col-xl-12" style="display:none;" id="contenido0">
                                            <h6>Herramientas de ayuda Necesarias</h6>
                                        </div>  <!-- salto linea -->
                                        <?php
                                            
                                        ?>
                                        <div class="col-xl-3" style="display:none;" id="contenido1">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <input type="checkbox" aria-label="Checkbox for following text input">
                                                    </div>
                                                </div>
                                                <input type="text" value="Muletas" class="form-control" disabled aria-label="Text input with checkbox">
                                                <div class="input-group-append">
                                                    <label class="input-group-text" for="inputGroupSelect02"><img src="../CSS/open-iconic-master/png/Shield-3x.png" alt="icon name"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3" style="display:none;" id="contenido2">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <input type="checkbox" aria-label="Checkbox for following text input">
                                                    </div>
                                                </div>
                                                <input type="text" value="Silla ruedas" class="form-control" disabled aria-label="Text input with checkbox">
                                                <div class="input-group-append">
                                                    <label class="input-group-text" for="inputGroupSelect02"> <img src="../CSS/open-iconic-master/png/Shield-3x.png" alt="icon name"></label>
                                                </div>
                                            </div>
                                        </div>   
                                        <div class="col-xl-4" style="display:none;" id="contenido3">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <input type="checkbox" aria-label="Checkbox for following text input">
                                                    </div>
                                                </div>
                                                <input type="text" value="Silla Ruedas Electrica" class="form-control" disabled aria-label="Text input with checkbox">
                                                <div class="input-group-append">
                                                    <label class="input-group-text" for="inputGroupSelect02"> <img src="../CSS/open-iconic-master/png/Shield-3x.png" alt="icon name"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <!--OPCION PARALISIS CEREBRAL-->
                                        <div class="col-xl-4" id="conte" style="display:none;">
                                            <div class="input-group mb-4">
                                                <div class="input-group-append">
                                                    <label class="input-group-text" for="inputGroupSelect02">Tipo :</label>
                                                </div>
                                                <select class="custom-select" id="inputGroupSelect02">
                                                    <option selected disabled>-Paralisis Cerebral-</option>
                                                    <?php
                                                        $disc=new Discapacidad();
                                                        $dis->setTipo_dis("8");
                                                        $list=$dis->listar_dis();
                                                            foreach ($list as $disc) {
                                                                echo '<option value="'.$disc->getCod_discapacidad().'">'.$disc->getNombre_dis().'</option>';
                                                            }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-12"></div>
                                        <div class="col-xl-3" id="conte0" style="display:none;">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <input type="checkbox" aria-label="Checkbox for following text input">
                                                    </div>
                                                </div>
                                                <input type="text" value="Muletas" class="form-control" disabled aria-label="Text input with checkbox">
                                                <div class="input-group-append">
                                                    <label class="input-group-text" for="inputGroupSelect02"><img src="../CSS/open-iconic-master/png/Shield-3x.png" alt="icon name"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3" id="conte1" style="display:none;">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <input type="checkbox" aria-label="Checkbox for following text input">
                                                    </div>
                                                </div>
                                                <input type="text" value="Silla ruedas" class="form-control" disabled aria-label="Text input with checkbox">
                                                <div class="input-group-append">
                                                    <label class="input-group-text" for="inputGroupSelect02"> <img src="../CSS/open-iconic-master/png/Shield-3x.png" alt="icon name"></label>
                                                </div>
                                            </div>
                                        </div>   
                                        <div class="col-xl-4" id="conte2" style="display:none;">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <input type="checkbox" aria-label="Checkbox for following text input">
                                                    </div>
                                                </div>
                                                <input type="text" value="Silla Ruedas Electrica" class="form-control" disabled aria-label="Text input with checkbox">
                                                <div class="input-group-append">
                                                    <label class="input-group-text" for="inputGroupSelect02"> <img src="../CSS/open-iconic-master/png/Shield-3x.png" alt="icon name"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 mb-3" >
                                            <input type="submit" class="btn btn-outline-success btn-lg btn-block" value="Guardar Información">
                                        </div>     
                                    </div>
                                </form>

                        </div>
                    </div>
                <!--*****************|3 FIN CONTENIDO INTERNO DE PAG|*************************************************************-->
                </div>
            </div>
        </div>  
    </div>
    <!--FINAL DE PAGINA-->
    <div class="container-fluid" style="background-color:black;">
        <br>
        <br>
    </div>
<!-- *******************************************|1 TERMINA EL CONTENIDO |*********************************************************************************************************-->    
        <script src="../CSS/bootstrap/js/jquery-3.2.1.slim.min.js"></script>
        <script src="../CSS/bootstrap/js/popper.min.js"></script>
        <script src="../CSS/bootstrap/js/bootstrap.min.js"></script>
        
    </body>
</html>