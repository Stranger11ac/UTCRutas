<?php include_once ("php/allassets.php"); ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Rutas 🚌 | UTC 🐥 | Iniciar Sesión</title>
        <?php echo $header_content; ?>
    </head>
    <body>
        <div class="load_layer" id="load_layer">
            <div class="layer_img"></div>
        </div>
        <nav>
            <div class="nav_cont">
                <a href="<?php echo $website; ?>" class="logo">
                    <img src="<?php echo $website; ?>assets/IMG/UTC_logo-plano.webp" alt="UTC logo" />
                    <h2 class="logo_title">Rutas</h2>
                </a>
                <button class="menu" title="menu button"></button>
                <div class="nav_menu">
                    <div class="nav_links">
                        <a href="<?php echo $website; ?>" class="link"> Inicio <i class="fa-solid fa-house"></i> </a>
                        <a href="<?php echo $website; ?>comments" class="link"> Comentarios <i class="fa-solid fa-comment-dots"></i> </a>
                        <a href="<?php echo $website; ?>about" class="link"> Acerca de <i class="fa-solid fa-address-card"></i> </a>
                    </div>
                    <hr class="menu_divisor" />
                    <?php echo $menu_settings; ?>
                </div>
            </div>
            <div class="divisor">
                <?php echo $waves ?>
            </div>
        </nav>
        <div class="nav_layer"></div>

        <main>
            <form action="" method="post" id="singin_form" autocomplete="false">
                <section class="form_header">
                    <h2>Iniciar Sesión</h2>
                </section>
                <div class="flex_group column gap_40">
                    <div class="form_group">
                        <input class="form_input" type="text" id="session_user" name="session_user" />
                        <label for="session_user"><i class="fa-solid fa-circle-user"></i> Usuario:</label>
                    </div>
                    <div class="form_group">
                        <input class="form_input" type="password" id="session_password" name="session_password" />
                        <label for="session_password"><i class="fa-solid fa-key"></i> Contraseña:</label>
                    </div>
                    <div class="form_group whit_btn">
                        <input type="submit" class="form_btn" value="Entrar" name="singin_btn"/>
                    </div>
                </div>
                <section class="form_footer">
                    <div>
                        <a href="<?php echo $website; ?>forgotten" class="dash_bottom"
                            >Ovide mi Contraseña <i class="fa-solid fa-arrow-up-right-from-square"></i
                        ></a>
                    </div>
                    <div>
                        <a href="<?php echo $website; ?>singup" class="dash_bottom"
                            >Registrame <i class="fa-solid fa-arrow-up-right-from-square"></i
                        ></a>
                    </div>
                </section>
            </form>
        </main>

        <footer class="active">
            <div class="divisor divisor-top">
                <?php echo $waves ?>
            </div>
            <div class="footer_cont">
                <p>
                    <?php echo $credits_footer; ?>
                </p>
            </div>
        </footer>
        <?php echo $scripts_content; ?>
    </body>
</html>
