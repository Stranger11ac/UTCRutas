<?php include_once ("php/allassets.php"); ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Administración - Rutas 🚌 | UTC 🐥</title>
        <?php echo $header_content; ?>
    </head>
    <body>
        <div class="load_layer" id="load_layer">
            <div class="layer_img"></div>
        </div>
        <nav>
            <div class="nav_cont">
                <div class="logo">
                    <img src="<?php echo $website; ?>assets/IMG/UTC_logo-plano.webp" alt="UTC logo" />
                    <h2 class="logo_title">Rutas</h2>
                </div>
                <button class="menu" title="menu button"></button>
                <div class="nav_menu">
                    <div class="nav_links">
                        <a href="<?php echo $website; ?>perfil" class="link-perfil" title="Perfil">
                            <div class="link-perfil_box">
                                <img src="<?php echo $website; ?>assets/IMG/UTC_icono.ico" alt="foto de perfil" />
                            </div>
                            <h4>Nombre de usuario que es un poco largo</h4>
                        </a>
                        <a href="<?php echo $website; ?>exit" class="link"> Salir <i class="fa-solid fa-door-open"></i></a>
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

        <main class="flex_group column gap_60 pb-0">
            <form action="" method="post" id="session">
                <section class="form_header">
                    <h2>Nuevo</h2>
                </section>
                <div class="flex_group column gap_40">
                    <div class="form_group">
                        <input class="form_input" type="number" id="num_bus" name="num_bus" />
                        <label for="num_bus"><i class="fa-solid fa-bus-simple"></i> Número de Transporte:</label>
                    </div>
                    <div class="form_group">
                        <input class="form_input" type="text" id="bus_ruta" name="bus_ruta" />
                        <label for="bus_ruta"><i class="fa-solid fa-location-dot"></i> Ruta:</label>
                    </div>
                    <div class="form_group">
                        <textarea name="ruta_description" id="ruta_description" class="form_input"></textarea>
                        <label for="ruta_description"
                            ><i class="fa-solid fa-signs-post"></i> Descripción de la ruta:</label
                        >
                    </div>
                    <div class="form_group whit_btn mb-40">
                        <input type="submit" class="form_btn" value="Registrar" />
                    </div>
                </div>
            </form>

            <section>
                <h2>Edita las Rutas existentes</h2>
            </section>

            <section class="table_custom table_forms">
                <div class="table_custom-header">
                    <div class="table-c0 d-none">
                        ID
                        <button class="btn_desactive"><i class="fa-solid fa-eye-slash"></i></button>
                    </div>
                    <div class="table-c1">🚌</div>
                    <div class="table-c2">Direcciones</div>
                </div>
                <div class="table_content">
                    <form class="table_custom-row">
                        <div class="table-c0 d-none">
                            <input type="number" name="id_bus" id="id_bus-1" value="1" />
                            <div class="delete_id" id="delete-1"><i class="fa-regular fa-trash-can"></i></div>
                        </div>
                        <input type="number" name="num_bus" id="num_bus-1" class="table-c1" value="1423" />
                        <div class="table-c2">
                            <h3><input type="text" name="bus_ruta" id="bus_ruta-1" value="Teresitas" /></h3>
                            <p>
                                <textarea name="ruta_description" id="ruta_description-1">
saltillo teresitas, pasa por el centro</textarea
                                >
                            </p>
                        </div>
                        <input type="submit" class="d-none" id="form-1" />
                    </form>
                    <form class="table_custom-row">
                        <div class="table-c0 d-none">
                            <input type="number" name="id_bus" id="id_bus-2" value="2" />
                            <div class="delete_id" id="delete-2"><i class="fa-regular fa-trash-can"></i></div>
                        </div>
                        <input type="number" name="num_bus" id="num_bus-2" class="table-c1" value="2419" />
                        <div class="table-c2">
                            <h3><input type="text" name="bus_ruta" id="bus_ruta-2" value="Ramos" /></h3>
                            <p>
                                <textarea name="ruta_description" id="ruta_description-2">
Ramos teresitas, pasa por el centro abajo</textarea
                                >
                            </p>
                        </div>
                        <input type="submit" class="d-none" id="form-2" />
                    </form>
                    <form class="table_custom-row">
                        <div class="table-c0 d-none">
                            <input type="number" name="id_bus" id="id_bus-3" value="3" />
                            <div class="delete_id" id="delete-3"><i class="fa-regular fa-trash-can"></i></div>
                        </div>
                        <input type="number" name="num_bus" id="num_bus-3" class="table-c1" value="149" />
                        <div class="table-c2">
                            <h3><input type="text" name="bus_ruta" id="bus_ruta-3" value="Ramos Arriba" /></h3>
                            <p>
                                <textarea name="ruta_description" id="ruta_description-3">
Todas las colonias que salen de ramos y también  el centro</textarea
                                >
                            </p>
                        </div>
                        <input type="submit" class="d-none" id="form-3" />
                    </form>
                </div>
            </section>
            <button class="btn_order" title="Mostrar Orden">Cambiar orden</button>
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
        <script src="<?php echo $website; ?>assets/JS/form.js"></script>
    </body>
</html>
