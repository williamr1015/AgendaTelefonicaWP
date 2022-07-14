<?php

function init_template(){
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    register_nav_menus(
        array(
            'top_menu' => 'Menu Pricipal'
        )
    );
}

add_action('after_setup_theme', 'init_template');

function assets(){
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css','', '5.0.2', 'all');
    wp_register_style('font','https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&display=swap','','1.0', 'all');

    wp_enqueue_style('estilos', get_stylesheet_uri(), array('bootstrap', 'font'),'1.0','all');

    wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js','','2.9.2',true);

    wp_enqueue_script('bootstraps', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js', 'popper', '5.0.2',true);

    wp_enqueue_script('custom', get_template_directory_uri().'/asset/custom.js','','1.0',true);
}

add_action('wp_enqueue_scripts', 'assets');

function sidebar(){
    register_sidebar(
        array(
            'name' => 'Pie de pagína',
            'id' => 'footer',
            'description' => 'Zona de Widgets para pie de pagína',
            'before_title' => '<p>',
            'after_title' => '</p>',
            'before_widget' => '<div id="%1$s" class="%2$s">',
            'after_widget' => '</div>',
        )
        );
}


add_action('widgets_init', 'sidebar');


function contactos_type(){
    register_post_type('contactos', array(
        'public' => true,
        'labels' => array(
            'name' => 'Contactos, contactoswp',
            'singular_name' => 'Contacto, contactoswp',
            'add_new_item' => 'Agregar nuevo contacto, contactoswp',
            'edit_item' => 'Editar contacto, contactoswp',
            'all_items' => 'Todos los contactos, contactoswp',
            'view_item' => 'Ver contacto, contactoswp',
            'search_items' => 'Buscar contacto, contactoswp',
            'new_item' => 'Nuevo contacto, contactoswp',
            'not_found' => 'No se encontraron contactos, contactoswp',
            'not_found_in_trash' => 'No se encontraron contactos en la papelera, contactoswp',
            'parent_item_colon' => 'Contacto padre, contactoswp',
            'menu_name' => 'Contactos',),
        'show_in_menu' => true, 
        'pubic' => true,
        'show_ui' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-cart',
        'supports' => array('title',  'custom-fields'),
        'has_archive' => true,
        'can_export' => true,
        'publicly_queryable' => true,
        'show_rest' => true,
        'rewrite' => array('slug' => 'contactos'),
    ));
}

add_action('init', 'contactos_type');

function taxonomia_contactos_category(){
    register_taxonomy('contactos_category', 'contactos', array(
        'labels' => array(
            'name' => 'Categorías de contactos, contactoswp',
            'singular_name' => 'Categoría de contactos, contactoswp',
            'add_new_item' => 'Agregar nueva categoría de contactos, contactoswp',
            'edit_item' => 'Editar categoría de contactos, contactoswp',
            'all_items' => 'Todas las categorías de contactos, contactoswp',
            'view_item' => 'Ver categoría de contactos, contactoswp',
            'search_items' => 'Buscar categoría de contactos, contactoswp',
            'new_item' => 'Nueva categoría de contactos, contactoswp',
            'not_found' => 'No se encontraron categorías de contactos, contactoswp',
            'not_found_in_trash' => 'No se encontraron categorías de contactos en la papelera, contactoswp',
            'parent_item_colon' => 'Categoría de contactos padre, contactoswp',
            'choose_from_most_used' => 'Elegir de las más usadas, contactoswp',
            'menu_name' => 'Categorías de contactos, contactoswp',),
        'show_in_menu' => true, 
        'show_admin_column' => true,
        'query_var' => true,
        'public' => true,
        'show_ui' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-cart',
        'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes'),
        'has_archive' => true,
        'can_export' => true,
        'publicly_queryable' => true,
        'show_rest' => true,
        'rewrite' => array('slug' => 'contactos-category'),
    ));
}

add_action('init', 'taxonomia_contactos_category');

function taxonomia_contactos_tag(){
    register_taxonomy('tags-contactos',
    array(0 => 'contactos'),
    array('hierarchical' => false,
        'label' => 'Etiquetas de contactos, contactoswp',
        'singular_label' => 'Etiqueta de contactos, contactoswp',
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'update_count_callback' => '_update_post_term_count',
        'labels' => array(
            'name' => 'Etiquetas de contactos, contactoswp',
            'singular_name' => 'Etiqueta de contactos, contactoswp',
            'search_items' => 'Buscar etiquetas de contactos, contactoswp',
            'popular_items' => 'Etiquetas populares, contactoswp',
            'all_items' => 'Todas las etiquetas de contactos, contactoswp',
            'parent_item' => 'Etiqueta de contactos padre, contactoswp',
            'parent_item_colon' => 'Etiqueta de contactos padre, contactoswp',
            'edit_item' => 'Editar etiqueta de contactos, contactoswp',
            'update_item' => 'Actualizar etiqueta de contactos, contactoswp',
            'add_new_item' => 'Agregar nueva etiqueta de contactos, contactoswp',
            'new_item_name' => 'Nombre de nueva etiqueta de contactos, contactoswp',
            'separate_items_with_commas' => 'Separar etiquetas de contactos con comas, contactoswp',
            'add_or_remove_items' => 'Agregar o quitar etiquetas de contactos, contactoswp',
            'choose_from_most_used' => 'Elegir de las más usadas, contactoswp',
            'menu_name' => 'Etiquetas de contactos, contactoswp',),
    ));
}

add_action('init', 'taxonomia_contactos_tag');

function twp_register_meta_boxes() {
	add_meta_box( 'mi-meta-box-id', __( 'Mis Custom Fields', 'contactoswp' ), 'twp_mi_display_callback', 'post' );
}
add_action( 'add_meta_boxes', 'twp_register_meta_boxes' );

function twp_mi_display_callback( $post ) {
	
	$Precio = get_post_meta( $post->ID, 'Precio', true );
	$Existencias = get_post_meta( $post->ID, 'Existencias', true );
	
	// Usaremos este nonce field más adelante cuando guardemos en twp_save_meta_box()
	wp_nonce_field( 'mi_meta_box_nonce', 'meta_box_nonce' );
	
	
	echo '<p><label for="Precio_label">Web de referencia 1</label> <input type="text" name="Precio" id="Precio" value="'. $Precio .'" /></p>';
	echo '<p><label for="Existencias_label">Web de referencia 2</label> <input type="text" name="Existencias" id="Existencias" value="'. $Existencias .'" /></p>';
}

function twp_save_meta_box( $post_id ) {
	// Comprobamos si es auto guardado
	if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	// Comprobamos el valor nonce creado en twp_mi_display_callback()
	if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'mi_meta_box_nonce' ) ) return;
	// Comprobamos si el usuario actual no puede editar el post
	if( !current_user_can( 'edit_post' ) ) return;
	
	
	// Guardamos...
	if( isset( $_POST['Precio'] ) )
	update_post_meta( $post_id, 'Precio', $_POST['Precio'] );
	if( isset( $_POST['Existencias'] ) )
	update_post_meta( $post_id, 'Existencias', $_POST['Existencias'] );
}
add_action( 'save_post', 'twp_save_meta_box' );



