<?php
        function vermenu(){
                /*echo '
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <ul>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </li>
                        <ul>
                            <li><a href="view.php">Ver Clientes</a> </li>
                            <li><a href="edit.php">Modificar Clientes</a> </li>
                        </ul>
                        <li>Servicios</li>
                        <li>Finanzas</li>
                    </ul>
                </nav>
                ';*/

                echo '
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">CxFront</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Clientes
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="view.php">Ver Listado</a>
                            <a class="dropdown-item" href="edit.php">Buscar Cliente</a>
                            <a class="dropdown-item" href=#>Crear</a>
                            <a class="dropdown-item" href="edit.php">Modificar</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item disabled" href="#">Eliminar</a>
                            </div>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                </nav>
                ';
        }

?>

