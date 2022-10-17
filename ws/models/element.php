<?php
include "./interfaces/iToJson.php";
    class Element implements iToJson{
        public $nombre = "";
        public $descripcion = "";
        public $numSerie = "";
        public $estado = "";
        public $prioridad = "";

        function __construct($nombre, $descripcion, $numSerie, $estado, $prioridad){
            $this->nombre = $nombre;
            $this->descripcion = $descripcion;
            $this->numSerie = $numSerie;
            $this->estado = $estado;
            $this->prioridad = $prioridad;

        }
        /**
         * Get the value of nombre
         */ 
        public function getNombre()
        {
                return $this->nombre;
        }

        /**
         * Set the value of nombre
         *
         * @return  self
         */ 
        public function setNombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }

        /**
         * Get the value of descripcion
         */ 
        public function getDescripcion()
        {
                return $this->descripcion;
        }

        /**
         * Set the value of descripcion
         *
         * @return  self
         */ 
        public function setDescripcion($descripcion)
        {
                $this->descripcion = $descripcion;

                return $this;
        }

        /**
         * Get the value of numSerie
         */ 
        public function getNumSerie()
        {
                return $this->numSerie;
        }

        /**
         * Set the value of numSerie
         *
         * @return  self
         */ 
        public function setNumSerie($numSerie)
        {
                $this->numSerie = $numSerie;

                return $this;
        }

        /**
         * Get the value of estado
         */ 
        public function getEstado()
        {
                return $this->estado;
        }

        /**
         * Set the value of estado
         *
         * @return  self
         */ 
        public function setEstado($estado)
        {
                $this->estado = $estado;

                return $this;
        }

        /**
         * Get the value of prioridad
         */ 
        public function getPrioridad()
        {
                return $this->prioridad;
        }

        /**
         * Set the value of prioridad
         *
         * @return  self
         */ 
        public function setPrioridad($prioridad)
        {
                $this->prioridad = $prioridad;

                return $this;
        }
        function toJson($elemento){
                $formularioArray = array("nombre" => $this->nombre, "descripcion" => $this->descripcion, "numero de serie" => $this->numSerie, "estado" => $this->estado, "prioridad" => $this->prioridad);
                var_dump(json_encode($formularioArray));
                file_put_contents('formulario.txt', print_r($formularioArray, true) ,FILE_APPEND);
                
               
        }
    }
?>