<?php
require "../utils/autoload.php";

class PublicacionControlador
{
    public static function CrearPublicacion($context)
    {
        if (!isset($_SESSION['autenticado'])) {
            header("Location: /login");
            exit;
        }
        $u = new PublicacionModelo();
        $u->Cuerpo = $context['post']['cuerpo'];
        $u->Autor = $_SESSION['nombreUsuario'];
        $u->Guardar();
        header("Location:/");
    }

    public static function ObtenerTodos()
    {
        $publicacion = new PublicacionModelo();
        $publicaciones = $publicacion->ObtenerTodos();
        $resultado = array();

        foreach ($publicaciones as $elemento) {
            $array = array(
                'autor' => $elemento->Autor,
                'fecha_hora' => $elemento->FechaHora,
                'cuerpo' => $elemento->Cuerpo,
            );
            array_push($resultado, $array);
        }
        return $resultado;
    }
}
