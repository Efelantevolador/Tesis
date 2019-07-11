<?php
  require_once("conexion.php");
  class Discapacidad
    {
        private $cod_discapacidad;
        private $nombre_dis;
        private $tipo_dis;

        public function __construct()
        {
            
        }

        public function getCod_discapacidad(){
            return $this->cod_discapacidad;
        }

        public function getNombre_dis(){
            return $this->nombre_dis;
        }

        public function getTipo_dis(){
            return $this->tipo_dis;
        }

        public function setCod_discapacidad($cod_discapacidad)
        {
            $this->cod_discapacidad = $cod_discapacidad;
        }

        public function setNombre_dis($nombre_dis)
        {
            $this->nombre_dis = $nombre_dis;
        }

        public function setTipo_dis($tipo_dis)
        {
            $this->tipo_dis = $tipo_dis;
        }

        public function listar_dis(){
            $conn=new Conexion();
            $conexion=$conn->conectar();
            $sql="SELECT * FROM discapacidad WHERE tipo_dis='".$this->tipo_dis."'";
            $result = $conexion->query($sql);
            if ($result->num_rows > 0) {
                $lista=[];
                while($row = $result->fetch_assoc()) {
                    $dis=new Discapacidad();
                    $dis->setCod_discapacidad($row["cod_discapacidad"]);
                    $dis->setNombre_dis($row["nombre_dis"]);
                    $dis->setTipo_dis($row["tipo_dis"]);
                    $lista[]=$dis;
                }
            }
            return $lista;
        }
    }
?>