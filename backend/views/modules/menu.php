<?php

        if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }

        if(!$_SESSION["validar"]){

            header("location:ingreso");

            exit();

        }
        include "views/modules/cabezote.php";
        include "views/modules/botonera.php";
        

    ?>  
    <div id="main-wrapper">
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Menús</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
                        <li class="breadcrumb-item">Menús</li>
                    </ol>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Listado de Menús</h4>
                                <div id="btnAgregarMenu"  class="trans text-right">     
                                    <button  class="btn btn-success waves-effect waves-light">Nuevo Menú</button>
                                </div>

                                <div id="agregarMenu" style="display:none;">
                                <form method="post">
                                <div class="card-body">
                                
                                    <div class="form-body">
                                        <h3 class="box-title m-t-40">Agregar Men&uacute;</h3>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>T&iacute;tulo</label>
                                                    <input type="text" name="tituloMenu" class="form-control">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>URL</label>
                                                    <input type="text" name="enlaceMenu" class="form-control">
                                                </div>
                                            </div>

                                            <!--/span-->
                                        </div>
                                    </div>
                            </div>
                            <div class="form-actions">
                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Guardar</button>
                            <button type="button" id="btnCancel" class="btn btn-inverse">Cancelar</button>
                            </div>
                            </form>
                                </div>
                                <div class="clearfix"></div>
                                <?php

                                    $crearMenu = new MenuController();
                                    $crearMenu -> guardarMenuController();

                                ?>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>T&iacute;tutlo</th>
                                                <th>URL</th>
                                                <th width="15">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php

                                          $menus = new menuController();
                                          $menus -> mostrarMenuController();
                                          $menus -> borrarMenuController();

                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> © 2017 Admin Press Admin by themedesigner.in </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <script type="text/javascript">
        $("#btnAgregarMenu").click(function(){

            $("#agregarMenu").toggle(400);

        })
        $("#btnCancel").click(function(){

            $("#agregarMenu").toggle(400);

        })
        
    </script>>
    <!-- This is data table -->
    