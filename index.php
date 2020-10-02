<?php include_once 'includes/templates/header.php';  ?>
    <!--Barra principal-->

    <section class="seccion contenedor">
        <h2>La mejor conferencia de Diseño web en Español</h2>
        <p>Aprende Desarrollo Web con este curso 100% práctico, paso a paso y sin conocimientos previos, INCLUYE PROYECTO FINAL Un curso paso a paso si deseas comenzar en el mundo de la programación Web. En este curso aprenderás 7 Lenguajes y Tecnologías
            Web
        </p>
    </section>

    <section class="programa">
        <div class="contenedor-video">
            <video autoplay loop poster="img/bg-talleres.jpg">
            <source src="video/video.mp4" type="video/mp4">
            <source src="video/video.webm" type="video/webm">
            <source src="video/video.ogv" type="video/ogv">
            </video>
        </div>

        <!-- contenedor de video-->

        <div class="contenido-programa">
            <div class="contenedor">
                <div class="programa-evento">
                    <h2>Programa del evento</h2>
                    <nav class="menuPrograma">
                        <a href="#talleres"><i class="fas fa-code"></i>Talleres</a>
                        <a href="#conferencias"><i class="fas fa-comment"></i>Conferencias</a>
                        <a href="#seminarios"><i class="fas fa-university"></i>Seminarios</a>
                    </nav>
                    <div id="talleres" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>HTML5, CSS3 y JavaScript</h3>
                            <p><i class="fas fa-clock"></i>16:00 hrs</p>
                            <p><i class="fas fa-calendar"></i>10 de Diciembre</p>
                            <p><i class="fas fa-user"></i>Leonardo Arevalo</p>
                        </div>
                        <div class="detalle-evento">
                            <h3>Responsive Web Design</h3>
                            <p><i class="fas fa-clock"></i>20:00 hrs</p>
                            <p><i class="fas fa-calendar"></i>10 de Diciembre</p>
                            <p><i class="fas fa-user"></i>Leonardo Arevalo</p>
                        </div>
                        <a href="" class="button float-right">Ver todos</a>
                    </div>
                    <div id="conferencias" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>Como ser Freelancer</h3>
                            <p><i class="fas fa-clock"></i>08:00 hrs</p>
                            <p><i class="fas fa-calendar"></i>10 de Diciembre</p>
                            <p><i class="fas fa-user"></i>Ezequiel Lopez</p>
                        </div>
                        <div class="detalle-evento">
                            <h3>Aprende Diseño responsive</h3>
                            <p><i class="fas fa-clock"></i>10:00 hrs</p>
                            <p><i class="fas fa-calendar"></i>10 de Diciembre</p>
                            <p><i class="fas fa-user"></i>Belen Arias</p>
                        </div>
                        <a href="" class="button float-right">Ver todos</a>
                    </div>
                    <div id="seminarios" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>Como hackear Microsoft</h3>
                            <p><i class="fas fa-clock"></i>16:00 hrs</p>
                            <p><i class="fas fa-calendar"></i>11 de Diciembre</p>
                            <p><i class="fas fa-user"></i>Bill Gates</p>
                        </div>
                        <div class="detalle-evento">
                            <h3>Interfaz mobile</h3>
                            <p><i class="fas fa-clock"></i>17:00 hrs</p>
                            <p><i class="fas fa-calendar"></i>11 de Diciembre</p>
                            <p><i class="fas fa-user"></i>Ariel Rodriguez</p>
                        </div>
                        <a href="" class="button float-right">Ver todos</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="invitados contenedor seccion">
        <h2>Nuestros invitados</h2>
        <ul class="lista-invitados clearfix">
            <li>
                <div class="invitado">
                    <img src="img/invitado1.jpg" alt="imagen-invitado">
                    <p>Ezequiel Lopez</p>
                </div>
            </li>
            <li>
                <div class="invitado">
                    <img src="img/invitado2.jpg" alt="imagen-invitado">
                    <p>Karen Arevalo</p>
                </div>
            </li>
            <li>
                <div class="invitado">
                    <img src="img/invitado3.jpg" alt="imagen-invitado">
                    <p>Lucas Arevalo</p>
                </div>
            </li>
            <li>
                <div class="invitado">
                    <img src="img/invitado4.jpg" alt="imagen-invitado">
                    <p>Cintia Arias</p>
                </div>
            </li>
            <li>
                <div class="invitado">
                    <img src="img/invitado5.jpg" alt="imagen-invitado">
                    <p>Ariel Rodriguez</p>
                </div>
            </li>
            <li>
                <div class="invitado">
                    <img src="img/invitado6.jpg" alt="imagen-invitado">
                    <p>Belén Arias</p>
                </div>
            </li>
        </ul>
    </section>

    <div class="contador parallax">
        <div class="contenedor">
            <ul class="resumen-evento clearfix">
                <li>
                    <p class="numero"></p>
                    Invitados
                </li>
                <li>
                    <p class="numero"></p>
                    Talleres
                </li>
                <li>
                    <p class="numero"></p>
                    Dias
                </li>
                <li>
                    <p class="numero"></p>
                    Conferencias
                </li>
            </ul>
        </div>
    </div>

    <!--Seccion precios-->
    <section class="precios seccion">
        <h2>Precios</h2>
        <div class="contenedor">
            <ul class="lista-precios clearfix">
                <li>
                    <div class="tabla-precio">
                        <h3>Pase por dias</h3>
                        <p class="numero">$30</p>
                        <ul>
                            <li><i class="fas fa-check"></i>Bocadillos Gratis</li>
                            <li><i class="fas fa-check"></i>Todas las conferencias</li>
                            <li><i class="fas fa-check"></i>Todos los talleres</li>
                        </ul>
                        <a href="" class="button hollow">Comprar</a>
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
                        <a href="" class="button">Comprar</a>
                    </div>
                </li>
                <li>
                    <div class="tabla-precio">
                        <h3>Pase por 2 dias</h3>
                        <p class="numero">$45</p>
                        <ul>
                            <li><i class="fas fa-check"></i>Bocadillos Gratis</li>
                            <li><i class="fas fa-check"></i>Todas las conferencias</li>
                            <li><i class="fas fa-check"></i>Todos los talleres</li>
                        </ul>
                        <a href="" class="button hollow">Comprar</a>
                    </div>
                </li>
            </ul>
        </div>

    </section>

    <div id="mapa" class="mapa">

    </div>

    <section class="seccion">
        <h2>Testimoniales</h2>
        <div class="testimoniales contenedor clearfix">
            <div class="testimonial">
                <blockquote>
                    <p>Excelente servicio al cliente, su equipo responde de manera muy oportuna. Excelentes diseños: ¡tops para Internet sin duda! Recomendamos encarecidamente WPZOOM. Tantos temas geniales de ellos, ¡no te decepcionará!</p>
                    <footer class="info-testimonial clearfix"><img src="img/testimonial.jpg" alt=" imagen Testimonial">
                        <cite>George Soros Escudero <span>Diseñador de la arquitectura</span></cite>
                    </footer>
                </blockquote>
            </div>
            <div class="testimonial">
                <blockquote>
                    <p>El mejor servicio que he recibido de los desarrolladores. Gran servicio al cliente para colmo.¡Foodica es un gran tema y mi sitio se ve maravilloso! Un gran paso adelante del Marco de Tesis. Anímate a más, y trascenderás </p>
                    <footer class="info-testimonial clearfix"><img src="img/testimonial.jpg" alt=" imagen Testimonial">
                        <cite>Bill Gates Charles <span>Creador de Microsoft</span></cite>
                    </footer>
                </blockquote>
            </div>
            <div class="testimonial">
                <blockquote>
                    <p>La verdad el mundo de la programación web, para mi ha sido el lugar donde he resucitado, he crecido, y he aprendido que lo mejor es desarrollarte en esta área. Te recomiendo notablemente este curso para vos</p>
                    <footer class="info-testimonial clearfix"><img src="img/testimonial.jpg" alt=" imagen Testimonial">
                        <cite>Jhon Beagle Steach <span>Creador de Amazon</span></cite>
                    </footer>
                </blockquote>
            </div>
        </div>
    </section>

    <div class="newsletter parallax">
        <div class="contenido contenedor">
            <p>Registrate para el newsletter</p>
            <h3>GDLWebcamp</h3>
            <a href="" class="button transparente">Registro</a>
        </div>

    </div>
    <!--Newsletter-->

    <section class="seccion contenedor">
        <h2>faltan</h2>
        <div class="cuenta-regresiva">
            <ul class="clearfix">
                <li>
                    <p class="numero" id="dias"></p>Dias</li>
                <li>
                    <p class="numero" id="horas"></p>Horas</li>
                <li>
                    <p class="numero" id="minutos"></p>minutos</li>
                <li>
                    <p class="numero" id="segundos"></p>Segundos</li>
            </ul>
        </div>
    </section>
    <!--Cuenta regresiva-->

<?php  include_once 'includes/templates/footer.php'; ?>