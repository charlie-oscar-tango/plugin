<?php
 
/**
 

 
 */
 
/*
 
Plugin Name: CSP Plugin - Cadastro de Regionais
 

 
Description: Plugin para cadastro de regionais
 
Version: 0.0.01
 
Author: CSP Tecnologia


 
*/

/* impede acesso direto aos arquivos da pasta do plugin*/
if (!function_exists('add_action')) {
    echo 'Acesso Inválido.';
    exit;
}


/*Cadastro simples de um post type */
function create_post_type_regional() {
    register_post_type(
        'regional',
        array(
            'labels' => array(
                'name' => __( 'Perfil e Regional' ),
                'singular_name' => __( 'Perfis e Regionais' )
            ),
            'has_archive' => true,
            'public' => true,
            'rewrite' => true, 
			'show_in_menu'       => true,
            'rewrite' => array('slug' => 'regional'),
            'show_in_rest' => true,
            'supports' => array('title','editor','page-attributes'),//habilitando apenas o titulo. Para adicionar outros campos como o editor, thmbnails, etc: array('title','editor','thumbnail')*/ 
            'hierarchical' => true 
        )
        
    ); 
       
}
add_action( 'init', 'create_post_type_regional' );
