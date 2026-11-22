# Danazn Utilidades

Plugin propio de WordPress que añade funcionalidades a medida y mejoras de seguridad independientes del tema activo.

## Qué hace
- Añade al final de cada entrada individual una caja con enlace a la página de Contacto.
- Registra el shortcode `[anio]` para mostrar dinámicamente el año actual.
- Oculta la etiqueta `<meta name="generator">` con la versión de WordPress en el `<head>`.
- Personaliza la pantalla de acceso (`/wp-login.php`): enlaza el logotipo a la portada y añade un aviso sobre el formulario.

## Dependencias
- WordPress 6.x y PHP 8.x.
- No depende de ningún tema concreto (compatible con cualquier tema).

## Instalación
1. Copia la carpeta `danazn-utilidades` dentro de `wp-content/plugins/`.
2. En el panel de WordPress, ve a **Plugins → Plugins instalados** y activa **Danazn Utilidades**.
