 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-teal navbar-light">
     <!-- Left navbar links -->
     <ul class="navbar-nav">
         <li class="nav-item">
             <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
         </li>

     </ul>

     <!-- SEARCH FORM -->


     <!-- Right navbar links -->
     <ul class="navbar-nav ml-auto">
         <!-- Messages Dropdown Menu -->

         <!-- Notifications Dropdown Menu -->
         <li class="nav-item dropdown user-menu">
             <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">


             <?php

                    if ($_SESSION["foto"] != ""){
                        
                    echo '<img src="'.$_SESSION["foto"].'"class="img-size-50 mr-3 img-circle">';

                    }else {
                        
                    echo '<img src="vistas/img/usuarios/user1.jpg" class="img-size-50 mr-3 img-circle">';
                    }

                    ?>




                 
                 <span class="d-none d-md-inline"> <?php echo $_SESSION["nombre"]; ?></span>
             </a>
             <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">
                 <!-- User image -->
                 <li class="user-header bg-teal">

                <?php

                   if ($_SESSION["foto"] != ""){
                       
                    echo '<img src="'.$_SESSION["foto"].'"class="img-circle elevation-2">';

                   }else {
                       
                    echo '<img src="vistas/img/usuarios/user5.png" class="img-circle elevation-2" alt="User Image">';
                   }

                ?>

                     <p>
                     <?php echo $_SESSION["nombre"]; ?>
                         <small><?php echo $_SESSION["perfil"]; ?></small>
                     </p>
                 </li>
                 <!-- Menu Body -->

                 <!-- Menu Footer-->
                 <li class="user-footer text-center">
                     <a href="salir" class="btn btn-default btn-flat bg-succes ">Cerrar Sesion</a>
                 </li>
             </ul>
         </li>
     </ul>
 </nav>