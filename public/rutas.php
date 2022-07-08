<?php 
    require "../utils/autoload.php";

    Routes::AddView("/","blog");
    Routes::AddView("/login","login");
    Routes::Add("/login","post","SesionControlador::IniciarSesion");
    
    Routes::Run();

       