<?php 

require "../utils/autoload.php";

    class PublicacionModelo extends Modelo{
        public $Autor;
        public $Cuerpo;
        

        public function __construct(){
            parent::__construct();
        }

        public function Guardar(){
            $sql = "INSERT INTO publicaciones (autor,cuerpo) VALUES (
            '" . $this -> Autor . "',
            '" . $this -> Cuerpo . "')";

            $this -> conexionBaseDeDatos -> query($sql);
        }

        public function ObtenerTodos(){
            $sql = "SELECT * FROM publicaciones order by fecha_hora desc;";
            $filas = $this -> conexionBaseDeDatos -> query($sql) -> fetch_all(MYSQLI_ASSOC);

            $resultado = array();
            foreach($filas as $fila){
                $p = new PublicacionModelo();
                $p -> Autor = $fila['autor'];
                $p -> Cuerpo = $fila['cuerpo'];
                $p -> FechaHora = $fila['fecha_hora'];
                array_push($resultado,$p);
            }
            return $resultado;
        }

    }