<?php include_once ("php/allassets.php"); ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Rutas 🚌 | UTC 🐥 | Comentarios</title>
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
                        <a class="link active"> Comentarios <i class="fa-solid fa-comment-dots"></i> </a>
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

        <main class="flex_group align-start around wrap gap_80 m0 pb-180">
            <form action="" method="post" id="comm_form">
                <section class="form_header">
                    <h2>Enviar Comentarios</h2>
                </section>
                <div class="flex_group column gap_40">
                    <div class="form_group">
                        <input class="form_input" type="text" id="comm_name" name="comm_name" />
                        <label for="comm_name"
                            ><i class="fa-solid fa-circle-user"></i> Nombre: <span> (opcional)</span></label
                        >
                    </div>
                    <div class="form_group">
                        <input class="form_input" type="Email" id="comm_email" name="comm_email" />
                        <label for="comm_email"
                            ><i class="fa-solid fa-envelope"></i> Email: <span> (opcional)</span></label
                        >
                    </div>
                    <div class="form_group">
                        <textarea name="comm_comm" id="comm_comm" cols="30" rows="10" class="form_input"> </textarea>
                        <label for="comm_comm"><i class="fa-solid fa-comment-dots"></i> Comenta libremente:</label>
                    </div>
                    <div class="form_group whit_btn mb-40">
                        <input type="submit" class="form_btn" value="Enviar" name="comm_btn" />
                    </div>
                </div>
            </form>

            <section class="comments_section">
                <h2>Comentarios Destacados</h2>
                <div class="comments_box mt-30">
                    <div>
                        <div class="card card_sm">
                            <div class="card_header">Arizona Torres Ramos</div>
                            <div class="card_body">Esta pagina me parece una verdadera...</div>
                            <div class="card_footer"><i class="fa-solid fa-calendar-days"></i> 19/01/2024</div>
                        </div>
                    </div>
                    <div>
                        <div class="card card_sm">
                            <div class="card_header">Anonimo 2</div>
                            <div class="card_body">Esta pagina me parece una verdadera...</div>
                            <div class="card_footer"><i class="fa-solid fa-calendar-days"></i> 19/01/2024</div>
                        </div>
                    </div>
                    <div>
                        <div class="card card_sm">
                            <div class="card_header">Anonimo 3</div>
                            <div class="card_body">Esta pagina me parece una verdadera...</div>
                            <div class="card_footer"><i class="fa-solid fa-calendar-days"></i> 19/01/2024</div>
                        </div>
                    </div>
                    <div>
                        <div class="card card_sm">
                            <div class="card_header">Juan jose</div>
                            <div class="card_body">Esta pagina me parece una verdadera...</div>
                            <div class="card_footer"><i class="fa-solid fa-calendar-days"></i> 19/01/2024</div>
                        </div>
                    </div>
                    <div>
                        <div class="card card_sm">
                            <div class="card_header">Adriana</div>
                            <div class="card_body">Esta pagina me parece una verdadera...</div>
                            <div class="card_footer"><i class="fa-solid fa-calendar-days"></i> 19/01/2024</div>
                        </div>
                    </div>
                    <div>
                        <div class="card card_sm">
                            <div class="card_header">Arizona Torres Ramos</div>
                            <div class="card_body">Esta pagina me parece una verdadera...</div>
                            <div class="card_footer"><i class="fa-solid fa-calendar-days"></i> 19/01/2024</div>
                        </div>
                    </div>
                    <div>
                        <div class="card card_sm">
                            <div class="card_header">Anonimo 2</div>
                            <div class="card_body">Esta pagina me parece una verdadera...</div>
                            <div class="card_footer"><i class="fa-solid fa-calendar-days"></i> 19/01/2024</div>
                        </div>
                    </div>
                    <div>
                        <div class="card card_sm">
                            <div class="card_header">Anonimo 3</div>
                            <div class="card_body">Esta pagina me parece una verdadera...</div>
                            <div class="card_footer"><i class="fa-solid fa-calendar-days"></i> 19/01/2024</div>
                        </div>
                    </div>
                    <div>
                        <div class="card card_sm">
                            <div class="card_header">Juan jose</div>
                            <div class="card_body">Esta pagina me parece una verdadera...</div>
                            <div class="card_footer"><i class="fa-solid fa-calendar-days"></i> 19/01/2024</div>
                        </div>
                    </div>
                    <div>
                        <div class="card card_sm">
                            <div class="card_header">Adriana</div>
                            <div class="card_body">Esta pagina me parece una verdadera...</div>
                            <div class="card_footer"><i class="fa-solid fa-calendar-days"></i> 19/01/2024</div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer>
            <div class="divisor divisor-top mt-0">
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
