<?php  include_once 'includes/templates/header.php'; ?>

    <section class="seccion contenedor">
        <h2>Registro de Usuarios
        </h2>
        <form id="registro" class="registro" action="index.html" method="POST">

            <div id="datos-usuarios" class="registro caja clearfix">
                <div class="campo">
                    <label for="nombre">Nombre:</label>
                    <input type="Text" id="nombre" class="nombre" placeholder="Ingrese su nombre">
                </div>
                <div class="campo">
                    <label for="apellido">Apellido:</label>
                    <input type="Text" id="apellido" class="apellido" placeholder="Ingrese su apellido">
                </div>
                <div class="campo">
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" class="email" placeholder="Ingrese su email">
                </div>
                <div id="error">

                </div>
            </div>


            <div id="paquetes" class="paquetes">
                <h3>Elige el numero de boletos</h3>

                <ul class="lista-precios clearfix">
                    <li>
                        <div class="tabla-precio">
                            <h3>Pase por dia (Viernes)</h3>
                            <p class="numero">$30</p>
                            <ul>
                                <li><i class="fas fa-check"></i>Bocadillos Gratis</li>
                                <li><i class="fas fa-check"></i>Todas las conferencias</li>
                                <li><i class="fas fa-check"></i>Todos los talleres</li>
                            </ul>
                            <div class="orden">
                                <label for="pase-dia">Boletos Deseados</label>
                                <input type="number" min="0" id="pase_dia" size="3" placeholder="0">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="tabla-precio">
                            <h3>Todos los dias</h3>
                            <p class="numero">$50</p>
                            <ul>
                                <li><i class="fas fa-check"></i>Bocadillos Gratis</li>
                                <li><i class="fas fa-check"></i>Todas las conferencias</li>
                                <li><i class="fas fa-check"></i>Todos los talleres</li>
                            </ul>
                            <div class="orden">
                                <label for="pase_completo">Boletos Deseados</label>
                                <input type="number" min="0" id="pase_completo" size="3" placeholder="0">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="tabla-precio">
                            <h3>Pase por 2 dias (Viernes y Sabado)</h3>
                            <p class="numero">$45</p>
                            <ul>
                                <li><i class="fas fa-check"></i>Bocadillos Gratis</li>
                                <li><i class="fas fa-check"></i>Todas las conferencias</li>
                                <li><i class="fas fa-check"></i>Todos los talleres</li>
                            </ul>
                            <div class="orden">
                                <label for="pase-dosdias">Boletos Deseados</label>
                                <input type="number" min="0" id="pase_dosdias" size="3" placeholder="0">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>


            <div id="eventos" class="eventos clearfix">
                <h3>Elige tus talleres</h3>
                <div class="caja">
                    <div id="viernes" class="contenido-dia clearfix">
                        <h4>Viernes</h4>
                        <div>
                            <p>Talleres:</p>
                            <label><input type="checkbox" name="registro[]" id="taller_01" value="taller_01"><time>10:00</time> Responsive Web Design</label>
                            <label><input type="checkbox" name="registro[]" id="taller_02" value="taller_02"><time>12:00</time> Flexbox</label>
                            <label><input type="checkbox" name="registro[]" id="taller_03" value="taller_03"><time>14:00</time> HTML5 y CSS3</label>
                            <label><input type="checkbox" name="registro[]" id="taller_04" value="taller_04"><time>17:00</time> Drupal</label>
                            <label><input type="checkbox" name="registro[]" id="taller_05" value="taller_05"><time>19:00</time> WordPress</label>
                        </div>
                        <div>
                            <p>Conferencias:</p>
                            <label><input type="checkbox" name="registro[]" id="conf_01" value="conf_01"><time>10:00</time> Como ser Freelancer</label>
                            <label><input type="checkbox" name="registro[]" id="conf_02" value="conf_02"><time>17:00</time> Tecnologías del Futuro</label>
                            <label><input type="checkbox" name="registro[]" id="conf_03" value="conf_03"><time>19:00</time> Seguridad en la Web</label>
                        </div>
                        <div>
                            <p>Seminarios:</p>
                            <label><input type="checkbox" name="registro[]" id="sem_01" value="sem_01"><time>10:00</time> Diseño UI y UX para móviles</label>
                        </div>
                    </div>
                    <!--#viernes-->
                    <div id="sabado" class="contenido-dia clearfix">
                        <h4>Sábado</h4>
                        <div>
                            <p>Talleres:</p>
                            <label><input type="checkbox" name="registro[]" id="taller_06" value="taller_06"><time>10:00</time> AngularJS</label>
                            <label><input type="checkbox" name="registro[]" id="taller_07" value="taller_07"><time>12:00</time> PHP y MySQL</label>
                            <label><input type="checkbox" name="registro[]" id="taller_08" value="taller_08"><time>14:00</time> JavaScript Avanzado</label>
                            <label><input type="checkbox" name="registro[]" id="taller_09" value="taller_09"><time>17:00</time> SEO en Google</label>
                            <label><input type="checkbox" name="registro[]" id="taller_10" value="taller_10"><time>19:00</time> De Photoshop a HTML5 y CSS3</label>
                            <label><input type="checkbox" name="registro[]" id="taller_11" value="taller_11"><time>21:00</time> PHP Medio y Avanzado</label>
                        </div>
                        <div>
                            <p>Conferencias:</p>
                            <label><input type="checkbox" name="registro[]" id="conf_04" value="conf_04"><time>10:00</time> Como crear una tienda online que venda millones en pocos días</label>
                            <label><input type="checkbox" name="registro[]" id="conf_05" value="conf_05"><time>17:00</time> Los mejores lugares para encontrar trabajo</label>
                            <label><input type="checkbox" name="registro[]" id="conf_06" value="conf_06"><time>19:00</time> Pasos para crear un negocio rentable</label>
                        </div>
                        <div>
                            <p>Seminarios:</p>
                            <label><input type="checkbox" name="registro[]" id="sem_02" value="sem_02"><time>10:00</time> Aprende a Programar en una mañana</label>
                            <label><input type="checkbox" name="registro[]" id="sem_03" value="sem_03"><time>17:00</time> Diseño UI y UX para móviles</label>
                        </div>
                    </div>
                    <!--#sabado-->
                    <div id="domingo" class="contenido-dia clearfix">
                        <h4>Domingo</h4>
                        <div>
                            <p>Talleres:</p>
                            <label><input type="checkbox" name="registro[]" id="taller_12" value="taller_12"><time>10:00</time> Laravel</label>
                            <label><input type="checkbox" name="registro[]" id="taller_13" value="taller_13"><time>12:00</time> Crea tu propia API</label>
                            <label><input type="checkbox" name="registro[]" id="taller_14" value="taller_14"><time>14:00</time> JavaScript y jQuery</label>
                            <label><input type="checkbox" name="registro[]" id="taller_15" value="taller_15"><time>17:00</time> Creando Plantillas para WordPress</label>
                            <label><input type="checkbox" name="registro[]" id="taller_16" value="taller_16"><time>19:00</time> Tiendas Virtuales en Magento</label>
                        </div>
                        <div>
                            <p>Conferencias:</p>
                            <label><input type="checkbox" name="registro[]" id="conf_07" value="conf_07"><time>10:00</time> Como hacer Marketing en línea</label>
                            <label><input type="checkbox" name="registro[]" id="conf_08" value="conf_08"><time>17:00</time> ¿Con que lenguaje debo empezar?</label>
                            <label><input type="checkbox" name="registro[]" id="conf_09" value="conf_09"><time>19:00</time> Frameworks y librerias Open Source</label>
                        </div>
                        <div>
                            <p>Seminarios:</p>
                            <label><input type="checkbox" name="registro[]" id="sem_04" value="sem_04"><time>14:00</time> Creando una App en Android en una tarde</label>
                            <label><input type="checkbox" name="registro[]" id="sem_05" value="sem_05"><time>17:00</time> Creando una App en iOS en una tarde</label>
                        </div>
                    </div>
                    <!--#domingo-->
                </div>
                <!--.caja-->
            </div>
            <!--#eventos-->

            <div id="resumen" class="resumen">
                <h3>Pagos y Extras</h3>
                <div class="caja clearfix">
                    <div class="extras">
                        <div class="orden">
                            <label for="camisa-evento">Camisa del Evento $10 <small>(Promocion 7% dto.)</small></label>
                            <input type="number" min="0" id="camisa-evento" size="3" placeholder="0">
                        </div>
                        <!--#Orden-->
                        <div class="orden">
                            <label for="etiquetas">Paquete de 10 etiquetas $2<small>(HTML5, CSS3, JavaScript, Chrome)</small></label>
                            <input type="number" min="0" id="etiquetas" size="3" placeholder="0">
                        </div>
                        <!--#Orden-->
                        <div class="orden">
                            <label for="regalo">Seleccione un regalo</label><br>
                            <select name="regalo" id="regalo" required>
                                <option value="">--Seleccione un regalo--</option>
                                <option value="ETI">Etiquetas</option>
                                <option value="PUL">Pulseras</option>
                                <option value="PLU">Plumas</option>
                            </select>
                        </div>
                        <!--#Orden-->
                        <input type="button" id="calcular" class="button position" value="Calcular">
                    </div>
                    <div class="total">
                        <p>Resumen</p>
                        <div id="lista_productos"></div>
                        <p>Total</p>
                        <div id="suma-total"></div>
                        <input type="submit" id="btnRegistro" class="button position btnRegistro" value="Pagar">
                    </div>
                    <!--#Total-->
                </div>
                <!--#CAJA-->
            </div>
            <!--#RESUMEN-->



        </form>
    </section>

    <?php  include_once 'includes/templates/footer.php'; ?>