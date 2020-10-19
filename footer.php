    <footer>
        <div class="contenedor-footer cont-contenido">
            <div class="contenedor-logo">
                <img src="<?php echo get_template_directory_uri().'/img/Logo-BFC-white.png';?>" alt="">
            </div>
            <div class="contenedor-contacto">
                <p class="enc">contacto</p>
            <!--
                <p>
                    Av. Madrid Manzana 17 Lote 10 <br>
                    Fracc. Residencial Paraíso <br>
                    Paraíso Tabasco, C.P. 86605
                </p>
            -->
                <div class="cont-telefonos">
                    <?php  if ( is_active_sidebar( 'footer-contacto' ) ) : ?>
                        <div class="widget-area" role="complementary">
                            <?php dynamic_sidebar( 'footer-contacto' ); ?>
                        </div>
                    <?php endif; ?>
                    <!--
                    <a href="tel:+52 (83) 3140 4385" target="_blank">+52 (83) 3140 4385</a>
                    <span>|</span>
                    <a href="tel:+52 (81) 2351 2924" target="_blank">+52 (81) 2351 2924</a>
                    <span>|</span>
                    <a href="tel:+52 (81) 1692 5105" target="_blank">+52 (81) 1692 5105</a>
                    -->
                </div>
                <!--
                <div class="cont-correos">
                    <a href="mailto:contacto@bfc-mx.com" target="_blank">contacto@bfc-mx.com</a>
                </div>
                -->
            </div>
            <div class="contenedor-menu">
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'Footer'
                        )
                    );
                ?>
                <!--
                <ul>
                    <li> <a href="#">Política de Privacidad</a> </li>
                    <li> <a href="#">Código de Ética</a> </li>
                    <li> <a href="#">Términos de uso</a> </li>
                    <li> <a href="#">Intranet</a> </li>
                </ul>
                -->
            </div>
            <div class="contenedor-redes">
                <?php  if ( is_active_sidebar( 'footer-redes-sociales' ) ) : ?>
                    <div class="widget-area" role="complementary">
                        <?php dynamic_sidebar( 'footer-redes-sociales' ); ?>
                    </div>
                <?php endif; ?>
                <!--
                <a href="#" target="_blanck">
                    <img src="<?php echo get_template_directory_uri().'/img/facebook-r.png';?>" alt="">
                </a>
                <a href="#" target="_blanck">
                    <img src="<?php echo get_template_directory_uri().'/img/linkedin-r.png';?>" alt="">
                </a>
                <a href="#" target="_blanck">
                    <img src="<?php echo get_template_directory_uri().'/img/twitter-r.png';?>" alt="">
                </a>
                -->
            </div>
        </div>
    </footer>

    </body>
</html>