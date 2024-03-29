<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="<?= media(); ?>/images/image-perfil.jpeg"
            alt="User Image">
        <div>
        <p class="app-sidebar__user-name"> <?= $_SESSION['userData']['nombres']; ?></p>
          <p class="app-sidebar__user-designation"><?= $_SESSION['userData']['nombre_rol']; ?></p>
        </div>
    </div>
    <ul class="app-menu">
    <?php if(!empty($_SESSION['permisos'][1]['r'])){ ?>
        <li>
            <a class="app-menu__item" href="<?= base_url(); ?>/dashboard">
                <i class="app-menu__icon fa fa-house"></i>
                <span class="app-menu__label">Inicio</span>
            </a>
        </li>
        <?php } ?>


        <?php if(!empty($_SESSION['permisos'][2]['r']) || !empty($_SESSION['permisos'][3]['r']) || !empty($_SESSION['permisos'][4]['r']) || !empty($_SESSION['permisos'][5]['r']) || !empty($_SESSION['permisos'][6]['r'])){ ?>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-cubes" aria-hidden="true"></i>
                <span class="app-menu__label">Módulos administrativo</span><i
                    class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">

            <?php if(!empty($_SESSION['permisos'][2]['r'])){ ?>
                <li><a class="treeview-item" href="<?= base_url(); ?>/roles"><i class="icon fa fa-circle-o"></i>
                        Roles</a></li>
                        <?php } ?>

            <?php if(!empty($_SESSION['permisos'][3]['r'])){ ?>
                <li><a class="treeview-item" href="<?= base_url(); ?>/usuarios"><i class="icon fa fa-circle-o"></i>
                        Usuarios</a></li>
                        <?php } ?>
                
                        <?php if(!empty($_SESSION['permisos'][4]['r'])){ ?>
                <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
                        <i class="app-menu__icon fa fa-sitemap" aria-hidden="true"></i>
                        <span class="app-menu__label">Configuraciones</span><i
                            class="treeview-indicator fa fa-angle-right"></i></a>
                    <ul class="treeview-menu">

                    <li><a class="treeview-item" href="<?= base_url(); ?>/secciones_config"><i
                                    class="icon fa fa-circle-o"></i>
                                Secciones</a></li>
                                <?php } ?>

                                <?php if(!empty($_SESSION['permisos'][5]['r'])){ ?>
                        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
                       
                                <i class="app-menu__icon fa fa-chalkboard-user" aria-hidden="true"></i>
                                <span class="app-menu__label">Docentes</span><i
                                    class="treeview-indicator fa fa-angle-right"></i></a>
                            <ul class="treeview-menu">
                            <?php if(!empty($_SESSION['permisos'][5]['r'])){ ?>
                                <li><a class="treeview-item" href="<?= base_url(); ?>/docentes"><i
                                            class="icon fa fa-circle-o"></i>
                                        Docentes</a></li>
                                        <?php } ?>
                                        <?php if(!empty($_SESSION['permisos'][6]['r'])){ ?>
                                <li><a class="treeview-item" href="<?= base_url(); ?>/especialidad"><i
                                            class="icon fa fa-circle-o"></i>
                                        Especialidad</a></li>

                            </ul>
                        </li>
                        <?php } ?>


                    </ul>
                </li>
                <?php } ?>


            </ul>
        </li>
        <?php } ?>

        <?php if(!empty($_SESSION['permisos'][7]['r']) || !empty($_SESSION['permisos'][8]['r']) ){ ?>
                                  
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-solid fa-users" aria-hidden="true"></i>
                <span class="app-menu__label">Estudiantes</span><i
                    class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">

            <?php if(!empty($_SESSION['permisos'][7]['r'])){ ?>
                <li><a class="treeview-item" href="<?= base_url(); ?>/estudiantes_inicial"><i class="icon fa fa-circle-o"></i>
                        Inicial</a></li>
                        <?php } ?>

                        <?php if(!empty($_SESSION['permisos'][8]['r'])){ ?>
                <li><a class="treeview-item" href="<?= base_url(); ?>/estudiantes"><i class="icon fa fa-circle-o"></i>
                        Basica</a></li>
                        <?php } ?>

            </ul>
        </li>
        <?php } ?>

        <?php if(!empty($_SESSION['permisos'][9]['r'])){ ?>                  
        <li><a class="app-menu__item" href="<?= base_url(); ?>/secciones">
                <i class="app-menu__icon fa fa-chalkboard-user" aria-hidden="true"></i>
                <span class="app-menu__label">Secciones</span></a></li>
                <?php } ?>

                <?php if(!empty($_SESSION['permisos'][10]['r'])){ ?>    
        <li><a class="app-menu__item" href="<?= base_url(); ?>/planillas">
                <i class="app-menu__icon fa fa-file-invoice" aria-hidden="true"></i>
                <span class="app-menu__label">Planillas</span></a></li>
                <?php } ?>

                <li><a class="app-menu__item" href="<?= base_url(); ?>/logout">
                <i class="app-menu__icon fa fa-sign-out" aria-hidden="true"></i>
                <span class="app-menu__label">Cerrar Sesión</span></a></li>
    </ul>
</aside>