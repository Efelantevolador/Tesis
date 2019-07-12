<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Perfil Funcional</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="../CSS/bootstrap/css/bootstrap.min.css">
        <?php
            require_once("../MODEL/Postulante.php");
            require_once("../MODEL/Discapacidad.php");
            session_start();
            $p=new Postulante();
            $dis=new Discapacidad();
            $p=$_SESSION["Postulante"];
        ?>
        <script type="text/javascript">
        function Paralisis() {
            element = document.getElementById("combobox");
            titulo = document.getElementById("titulo");
            check = document.getElementById("check");
            silla = document.getElementById("silla");
            sillaE = document.getElementById("sillaE");
            muleta = document.getElementById("muleta");
            if (check.checked) {
                element.style.display='block';
            }
            else {
                element.style.display='none';
                titulo.style.display='none';
                silla.style.display='none';
                sillaE.style.display='none';
                muleta.style.display='none';
                document.getElementById("Imuleta").checked=false;
                document.getElementById("IsillaE").checked=false;
                document.getElementById("Isilla").checked=false;
                document.getElementById("combotortuga").selected=true;

            }
        }
        function ParalisisCerebral() {
        element = document.getElementById("combo");
        titulo = document.getElementById("titulo2");
        silla = document.getElementById("silla2");
        sillaE = document.getElementById("sillaE2");
        muleta = document.getElementById("muleta2");
        check = document.getElementById("check2");
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
            titulo.style.display='none';
            silla.style.display='none';
            sillaE.style.display='none';
            muleta.style.display='none';
            document.getElementById("Imuleta2").checked=false;
            document.getElementById("IsillaE2").checked=false;
            document.getElementById("Isilla2").checked=false;
            document.getElementById("combotortuga2").selected=true;
        }
    }
        function filtroP(){
            variable= document.getElementById("comboboxP").value;
            silla = document.getElementById("silla");
            sillaE = document.getElementById("sillaE");
            muleta = document.getElementById("muleta");
            titulo = document.getElementById("titulo");
            if (variable==1){ //Hemiplegia  cod=1
                silla.style.display='block';
                sillaE.style.display='block';
                muleta.style.display='block';
                titulo.style.display='block';
                document.getElementById("Imuleta").checked=false;
                document.getElementById("IsillaE").checked=false;
                document.getElementById("Isilla").checked=false;
            }
            else if (variable==2){ //diplegia cod=2
                silla.style.display='block';
                sillaE.style.display='block';
                muleta.style.display='none';
                titulo.style.display='block';
                document.getElementById("Imuleta").checked=false;
                document.getElementById("IsillaE").checked=false;
                document.getElementById("Isilla").checked=false;
            }
            else if(variable==3){ //paraplegia cod=3
                silla.style.display='block';
                sillaE.style.display='block';
                muleta.style.display='none';
                titulo.style.display='block';
                document.getElementById("Imuleta").checked=false;
                document.getElementById("IsillaE").checked=false;
                document.getElementById("Isilla").checked=false;
            }
            else if (variable==4){ //monoplegia cod=4
                silla.style.display='none';
                sillaE.style.display='none';
                muleta.style.display='none';
                titulo.style.display='none';
                document.getElementById("Imuleta").checked=false;
                document.getElementById("IsillaE").checked=false;
                document.getElementById("Isilla").checked=false;
            }
            else if (variable==5){ //tripegia cod=5
                silla.style.display='none';
                sillaE.style.display='block';
                muleta.style.display='none';
                titulo.style.display='block';
                document.getElementById("Imuleta").checked=false;
                document.getElementById("IsillaE").checked=false;
                document.getElementById("Isilla").checked=false;
            }
            else{
                silla.style.display='none';
                sillaE.style.display='none';
                muleta.style.display='none';
                titulo.style.display='none';
                document.getElementById("Imuleta").checked=false;
                document.getElementById("IsillaE").checked=false;
                document.getElementById("Isilla").checked=false;
            }
        }
        function filtroPC(){
            variable= document.getElementById("comboboxPC").value;
            silla = document.getElementById("silla2");
            sillaE = document.getElementById("sillaE2");
            muleta = document.getElementById("muleta2");
            titulo = document.getElementById("titulo2");
            if (variable==8){ //espaticidad Cod=8
                silla.style.display='none';
                sillaE.style.display='none';
                muleta.style.display='block';
                titulo.style.display='block';
                document.getElementById("Imuleta2").checked=false;
                document.getElementById("IsillaE2").checked=false;
                document.getElementById("Isilla2").checked=false;
            }
            else if(variable==9){ // Atetosis cod=9
                silla.style.display='block';
                sillaE.style.display='block';
                muleta.style.display='block';
                titulo.style.display='block';
                document.getElementById("Imuleta2").checked=false;
                document.getElementById("IsillaE2").checked=false;
                document.getElementById("Isilla2").checked=false;
                
            }
            else{
                silla.style.display='none';
                sillaE.style.display='none';
                muleta.style.display='none';
                titulo.style.display='none';
            }
        }
</script>
    </head>
    <body>
        
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
                                
                                <form id="miform" action="">
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


                                        <div class="col-xl-4" style="display: none;" id="combobox">
                                            <div class="input-group mb-4">
                                                <div class="input-group-append">
                                                    <label class="input-group-text" for="comboboxP">Tipo :</label>
                                                </div>
                                                <select class="custom-select" id="comboboxP" onchange="javascript:filtroP()">
                                                <option selected disabled id="combotortuga" value="0">-Paralisis-</option>
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

                                        
                                        <div class="col-xl-12" style="display:none;" id="titulo">
                                            <h6>Herramientas de ayuda Necesarias</h6>
                                        </div>  <!-- salto linea -->
                                        <?php
                                            
                                        ?>
                                        <div class="col-xl-3" style="display:none;" id="muleta">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <input name="ayudap" type="checkbox" id="Imuleta" aria-label="Checkbox for following text input">
                                                    </div>
                                                </div>
                                                <input type="text" value="Muletas" class="form-control" disabled aria-label="Text input with checkbox">
                                                <div class="input-group-append">
                                                    <label class="input-group-text" for="inputGroupSelect02"><img src="../CSS/open-iconic-master/png/Shield-3x.png" alt="icon name"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3" style="display:none;" id="silla">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <input name="ayudap" type="checkbox" id="Isilla" aria-label="Checkbox for following text input">
                                                    </div>
                                                </div>
                                                <input type="text" value="Silla ruedas" class="form-control" disabled aria-label="Text input with checkbox">
                                                <div class="input-group-append">
                                                    <label class="input-group-text" for="inputGroupSelect02"> <img src="../CSS/open-iconic-master/png/Shield-3x.png" alt="icon name"></label>
                                                </div>
                                            </div>
                                        </div>   
                                        <div class="col-xl-4" style="display:none;" id="sillaE">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <input name="ayudap" type="checkbox" id="IsillaE" aria-label="Checkbox for following text input">
                                                    </div>
                                                </div>
                                                <input type="text" value="Silla Ruedas Electrica" class="form-control" disabled aria-label="Text input with checkbox">
                                                <div class="input-group-append">
                                                    <label class="input-group-text" for="inputGroupSelect02"> <img src="../CSS/open-iconic-master/png/Shield-3x.png" alt="icon name"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12"></div>
                                        <!--************************************************OPCION PARALISIS CEREBRAL**********************************-->
                                        <!--************************************************OPCION PARALISIS CEREBRAL**********************************-->
                                        <!--************************************************OPCION PARALISIS CEREBRAL**********************************-->
                                        <!--************************************************OPCION PARALISIS CEREBRAL**********************************-->
                                        <!--************************************************OPCION PARALISIS CEREBRAL**********************************-->
                                        <div class="col-xl-4" id="combo" style="display:none;">
                                            <div class="input-group mb-4">
                                                <div class="input-group-append">
                                                    <label class="input-group-text" for="comboboxPC">Tipo :</label>
                                                </div>
                                                <select class="custom-select" id="comboboxPC" onchange="javascript:filtroPC()">
                                                    <option selected disabled id="combotortuga2">-Paralisis Cerebral-</option>
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
                                        <div class="col-xl-12" style="display:none;" id="titulo2">
                                            <h6>Herramientas de ayuda Necesarias</h6>
                                        </div>  <!-- salto linea -->
                                        <div class="col-xl-12"></div>
                                        <div class="col-xl-3" id="muleta2" style="display:none;">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <input name="ayudapc" type="checkbox" id="Imuleta2" aria-label="Checkbox for following text input">
                                                    </div>
                                                </div>
                                                <input type="text" value="Muletas" class="form-control" disabled aria-label="Text input with checkbox">
                                                <div class="input-group-append">
                                                    <label class="input-group-text" for="inputGroupSelect02"><img src="../CSS/open-iconic-master/png/Shield-3x.png" alt="icon name"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3" id="silla2" style="display:none;">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <input name="ayudapc" type="checkbox" id="Isilla2" aria-label="Checkbox for following text input">
                                                    </div>
                                                </div>
                                                <input type="text" value="Silla ruedas" class="form-control" disabled aria-label="Text input with checkbox">
                                                <div class="input-group-append">
                                                    <label class="input-group-text" for="inputGroupSelect02"> <img src="../CSS/open-iconic-master/png/Shield-3x.png" alt="icon name"></label>
                                                </div>
                                            </div>
                                        </div>   
                                        <div class="col-xl-4" id="sillaE2" style="display:none;">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <input name="ayudapc" type="checkbox" id="IsillaE2" aria-label="Checkbox for following text input">
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