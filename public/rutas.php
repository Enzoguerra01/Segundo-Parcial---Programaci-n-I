<?php 
    require "../utils/autoload.php";

    Routes::AddView("/","blog");
    Routes::AddView("/login","login");
    Routes::Add("/login","post","SesionControlador::IniciarSesion");
    Routes::Add("/cerrar_sesion","get","SesionControlador::CerrarSesion");
    Routes::AddView("/usuarios/alta","register");
    Routes::Add("/usuarios/alta","post","UsuarioControlador::Alta");
    Routes::AddView("/crear_publicacion","crear_publicacion");
    Routes::Add("/crear_publicacion","post","PublicacionControlador::CrearPublicacion");
    
    Routes::Run();

       