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
                        <a href="<?php echo $website; ?>comments" class="link"> Comentarios <i class="fa-solid fa-comment-dots"></i> </a>
                        <a class="link active"> Acerca de <i class="fa-solid fa-address-card"></i> </a>
                    </div>
                    <hr class="menu_divisor" />
                    <?php echo $menu_settings; ?>
                </div>
            </div>
            <div class="divisor mb-40">
                <?php echo $waves ?>
            </div>
        </nav>
        <div class="nav_layer"></div>

        <main class="flex_group column align-start gap_60 m0 pb-0">
            <article>
                <h2>Sobre la Aplicación</h2>
                <p>
                    Con la finalidad de automatizar y mejorar la atencion y funcionamiento del personal de transporte y
                    de los alumnos de la UTC se creo esta aplicacion la cual funje como fuente informativa para los
                    alumnos y al mismo tiempo como un registros mas agil y util para el personal de transporte.
                </p>
            </article>
            <article>
                <h2>Agradecimientos</h2>
                <p>
                    Al personal de transporte que nos ofrecen su apoyo, tanto choferes y coordinadores, gracias por su
                    tiempo y esfuerzo.
                    <br />
                    Atte: UTC
                </p>
            </article>
            <section class="sociales">
                <h2>Uiversidad Tecnológica de Coahuila</h2>
                <div class="social_links flex_group gap_50">
                    <div>
                        <a target="_blank" rel="noopener noreferrer" class="social-link social_facebook" title="facebook UTC" href="https://www.facebook.com/UniversidadTecnologicadeCoahuila/"
                            ><i class="fa-brands fa-facebook"></i
                        ></a>
                    </div>
                    <div>
                        <a target="_blank" rel="noopener noreferrer" class="social-link social_instagram" title="instagram UTC" href="https://www.instagram.com/p/CsdDf-bOp3D/"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                    <div>
                        <a target="_blank" rel="noopener noreferrer" class="social-link social_UTC" title="UTC oficial" href="https://utc.edu.mx/"><i class="fa-solid fa-globe"></i></a>
                    </div>
                </div>
            </section>
        </main>

        <footer class="active">
            <div class="divisor divisor-top mt-60">
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
