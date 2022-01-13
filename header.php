<header class="container">
        <nav class="navbar navbar-expand-md">
            <div class="container-fluid px-0">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars" ></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0 mt-2">
                        <li class="nav-item px-3">
                            <a class="nav-link px-3 py-1 <?php echo ($pg == "index")?"active":"" ?>" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link px-3 py-1 <?php echo ($pg == "sobre-mi")?"active":"" ?>" href="sobre-mi.php">Sobre mi</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link px-3 py-1 <?php echo ($pg == "proyectos")?"active":"" ?>" href="proyectos.php">Proyectos</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link px-3 py-1 <?php echo ($pg == "contacto")?"active":"" ?>" href="contacto.php">Contacto</a>
                        </li>
                        <li>
                            <div class="container pb-3">
                                <button type="button" id="btn-descarga" name="btnDescargar" class="btn btn-rojo px-4 py-1">Descargar mi CV</button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>