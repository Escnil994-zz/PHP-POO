
<!--BARRA LATERAL-->
<aside id="lateral">
    <div id="login" class="block_aside">
        <?php if (!isset($_SESSION['logged_in'])) : ?>
        <h3>Entrar a la Web</h3>
        <form action="<?=base_url?>usuario/login" method="post" class="form_container">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password">
            <input type="submit" value="Entrar">
        </form>
        <?php else: ?>
            <h3 class="green_alert">Estas logueado como: <?=$_SESSION['logged_in']->nombre ?> <?= $_SESSION['logged_in']->apellidos?></h3>

        <?php endif; ?>

        <ul>

            <?php if (isset($_SESSION['admin'])) : ?>
                <li>
                    <a href="<?=base_url?>categoria/index">Gestionar categorias</a>
                </li>
                <li>
                    <a href="<?=base_url?>producto/gestion">Gestionar productos</a>
                </li>
                <li>
                    <a href="#">Gestionar pedidos</a>
                </li>

            <?php endif; ?>

            <?php if (isset($_SESSION['logged_in'])): ?>
                <li>
                    <a href="">Gestionar pedidos</a>
                </li>
                <li>
                    <a href="<?=base_url?>usuario/logout">Cerrar Sesión</a>
                </li>
            <?php else:?>

                <li>
                    <a href="<?=base_url?>usuario/registrar">Registrate aquí</a>
                </li>

            <?php endif;?>
        </ul>

    </div>
</aside>




<!--CONTENIDO CENTRAL-->
<div id="central">