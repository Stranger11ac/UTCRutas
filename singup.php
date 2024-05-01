<?php include_once ("php/allassets.php"); ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Rutas 🚌 | UTC 🐥 | Registrate</title>
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
            <form method="post" role="form" id="singup_form" autocomplete="off">
                <section class="form_header">
                    <h2>Registrate</h2>
                    <div id="errorDiv"></div>
                </section>
                <div class="flex_group column gap_40">
                    <div class="form_group">
                        <input class="form_input" type="text" id="up_name" name="up_name" />
                        <label for="up_name"><i class="fa-solid fa-user"></i> Nombre Completo:</label>
                        <div class="help-block"></div>
                    </div>
                    <div class="form_group whit_btn">
                        <input type="submit" class="form_btn" value="Registrar" name="singup_btn" />
                    </div>
                </div>

                <section class="form_footer footer_with_message">
                    <div class="form_message">
                        <p>El registro y acceso es exclusivamente para <b class="c-red">Administración</b>. Las cuentas deben ser verificadas por Dto. Sistemas</p>
                    </div>
                    <hr class="form_divisor">
                    <div>
                        Ya tienes Cuenta?
                        <a href="<?php echo $website; ?>singin" class="dash_bottom">
                            Ingresa<i class="fa-solid fa-arrow-up-right-from-square"></i
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
