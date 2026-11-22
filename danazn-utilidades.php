<?php
/**
 * Plugin Name: Danazn Utilidades
 * Description: Funcionalidades a medida para el blog de Daniel Aznar Calle.
 * Version: 1.1.0
 * Author: Daniel Aznar Calle
 */

// Protección contra acceso directo
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Petición 3: Caja al final de cada entrada (solo entradas, no páginas)
add_filter( 'the_content', 'danazn_caja_contacto' );
function danazn_caja_contacto( $contenido ) {
    if ( ! is_singular( 'post' ) || ! is_main_query() || ! in_the_loop() ) {
        return $contenido;
    }

    $url_contacto = esc_url( home_url( '/index.php/contacto/' ) );
    $caja = '<div class="danazn-caja-contacto"><p>¿Te ha gustado? Escríbeme desde <a href="' . $url_contacto . '">Contacto</a></p></div>';

    return $contenido . $caja;
}

// Petición 4: Código corto [anio] que devuelve el año actual
add_shortcode( 'anio', 'danazn_shortcode_anio' );
function danazn_shortcode_anio() {
    return esc_html( wp_date( 'Y' ) );
}

// Petición 5: Ocultar la versión de WordPress del <head>
remove_action( 'wp_head', 'wp_generator' );

// Petición 6: Personalizar la pantalla de acceso (/wp-login.php)
add_filter( 'login_headerurl', 'danazn_login_url' );
function danazn_login_url() {
    return esc_url( home_url() );
}

add_filter( 'login_headertext', 'danazn_login_texto' );
function danazn_login_texto() {
    return esc_html( get_bloginfo( 'name' ) );
}

add_filter( 'login_message', 'danazn_login_aviso' );
function danazn_login_aviso( $mensaje ) {
    $nombre_blog = esc_html( get_bloginfo( 'name' ) );
    $aviso = '<p class="message">Acceso restringido al equipo de ' . $nombre_blog . '</p>';
    return $mensaje . $aviso;
}
