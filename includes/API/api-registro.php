<?php


function plz_api_register(){
    

    register_rest_route("plz",
        "registro",
        array(
            'methods' => 'POST',
            'callback' => 'plz_registro_callback'
        ) 
    );

}

function plz_registro_callback($request){
    
    # En request llega los datos del formulario
    # con el atributo name de las etiquetas como llave
    # y los values como valores

    # Con get_user_by consulto la base de datos
    $is_user_exist = get_user_by("login", $request["name"]);
    $is_email_exist = get_user_by("login", $request["email"]);

    if($is_user_exist){
        return array(
            "msg" => "Este usuario ya existe"
        );
    }elseif($is_email_exist){
        return array("msg" => "Ya existes un usuario con ese email");
    }

    $args = array(
        "user_login" => $request["name"],
        "user_pass" => $request["password"],
        "user_email" => $request["email"],
        "role" => "editor",
    );
    
    # Al crear un usuario wp_insert_usert devuelve el id del usuario
    $user = wp_insert_user($args);
    #return array("usuario registrado"=> $user);
    return array("msg" =>"El usuario se registro correctamentes");
}
add_action("rest_api_init", "plz_api_register");