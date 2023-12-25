<?php

function work_script_registro(){
    wp_register_script("work_registro",plugins_url("../assets/js/registro.js",__FILE__), array(),null);
}
add_action("wp_enqueue_scripts","work_script_registro");

function conditionally_enqueue_styles_scripts() {
    if ( is_page(array('sign-up')) ) {       
        wp_enqueue_style( 'custom-design', plugins_url('../../style.css', __FILE__ ), array(),'','all');
    }
}

add_action("wp_enqueue_scripts", "conditionally_enqueue_styles_scripts");

function work_add_registre_form(){
    wp_enqueue_script("work_registro");
  
    $response = '
    <div class="signin">
        <div class="signin__container">
            <h1 class="title">Registro</h1>
            <form class="signin__form" id="signin">
               
                    <label class="label" for="Name">Nombre:</label>
                    <input class="input" name="name" type="text" id="Name">
               
                
                    <label class="label" for="email">Correo:</label>
                    <input class="input" name="email" type="email" id="email">
               
               
                    <label class="label" for="password">Contraseña:</label>
                    <input class="input" name="password" type="password" id="password">                   
                                 
                    <input class="primary-button" type="submit" value="Crear">        
                    
                    <a href="'.home_url("login").'">Iniciar Sesión</a>  
               
            </form>
        
                    
           
        </div>
    </div>';
    return $response;
}
                 

add_shortcode("work_registro","work_add_registre_form");


?>