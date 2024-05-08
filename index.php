<?php include_once ("php/allassets.php"); ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Rutas 🚌 | UTC 🐥 | Inicio</title>
        <?php echo $header_content; ?>
    </head>
    <body class="light-theme">
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
                        <a class="link active"> Inicio <i class="fa-solid fa-house"></i> </a>
                        <a href="<?php echo $website; ?>comments" class="link"> Comentarios <i class="fa-solid fa-comment-dots"></i> </a>
                        <a href="<?php echo $website; ?>about" class="link"> Acerca de <i class="fa-solid fa-address-card"></i> </a>
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

        <main class="pb-0">
            <p class="message d-none">
                No hay Rutas por Ahora <br />
                🚌🚌🚌
            </p>
            <section class="last_update">
                <h3>Ultima Modificación: <u>Ayer</u></h3>
            </section>
            <section class="table_custom">
                <div class="table_custom-header">
                    <div class="table-c1">🚌</div>
                    <div class="table-c2">
                        Dirección
                        <button class="table-c2_btn-search" title="Buscar">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                        <div class="table-c2_search">
                            <input id="inputSearch" type="text" placeholder="Buscar..." />
                            <button class="table-c2_btn-close" title="cerrar">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="table_content" id="myTable">
                    <div class="table_custom-row">
                        <div class="table-c1">#3412</div>
                        <details class="table-c2">
                            <summary>Teresitas</summary>
                            <p>saltillo teresitas, pasa por el centro centro.</p>
                        </details>
                    </div>
                    <div class="table_custom-row">
                        <div class="table-c1">#2419</div>
                        <details class="table-c2">
                            <summary>Ramos</summary>
                            <p>Ramos teresitas, pasa por el centro centro abajo.</p>
                        </details>
                    </div>
                    <div class="table_custom-row">
                        <div class="table-c1">#2439</div>
                        <details class="table-c2">
                            <summary>Fundadores</summary>
                            <p>Fundadores, sube por juan navarro.</p>
                        </details>
                    </div>
                    <div class="table_custom-row">
                        <div class="table-c1">#2419</div>
                        <details class="table-c2">
                            <summary>Guayulera</summary>
                            <p>Ramos teresitas, pasa por el centro centro abajo.</p>
                        </details>
                    </div>
                    <div class="table_custom-row">
                        <div class="table-c1">#149</div>
                        <details class="table-c2">
                            <summary>Ramos Arriba</summary>
                            <p>Todas las colonias que salen de ramos y tambien el centro.</p>
                        </details>
                    </div>
                </div>
                <div class="table_footer" id="noResults">
                    No se encontraron resultado para "<strong id="searchValue">0</strong>"
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
        <script src="<?php echo $website; ?>assets/JS/search.js"></script>
    </body>
</html>
