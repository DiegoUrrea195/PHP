
<nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
    <p class="navbar-brand">Articulos</p>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapse">
        <span class="navbar-toggler-icon"></span>
      </button>

    <div class="collapse navbar-collapse" id="collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item mr-5 ml-5">
                <a href="TuCuentaView.php" class="nav-link">Tu cuenta</a>
            </li>
            <li class="nav-item mr-5 ml-5">
                <a href="ArticulosListView.php" class="nav-link">Articulos</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item dropdown ml-1">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Options</a>
                <div class="dropdown-menu">
                    <?php 
                    
                        require("session.php");
                        if($_SESSION["id"] == 1) {
                            $r = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
                            echo "<a href='AdminView.php' class='dropdown-item'>Admin</a>";
                        }

                    ?>
                    <a href="closeSession.php" class="dropdown-item">Sign out</a>
                </div>
            </li>
        </ul>
    </div>
</nav>