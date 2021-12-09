<?php
    require_once "Conexion.php";

    class Crud {
        public function mostrar(){
            try {
                $conexion = Conexion::conectar();
                $coleccion = $conexion->personas;
                $datos = $coleccion->find();
                return $datos;
            } catch (\Throwable $th) {
                return $th;
            }
        }

        public function insertarDatos($datos){
            try {
                $conexion = Conexion::conectar();
                $coleccion = $conexion->personas;
                $resultado = $coleccion->insertOne([
                    "nombre"=>$datos['nombre'],
                    "paterno"=>$datos['paterno'],
                    "materno"=>$datos['materno'],
                    "fecha_nacimiento"=>$datos['fecha_nacimiento']
                ]);
                return $resultado;
            } catch (\Throwable $th) {
                return $th;
            }
        }
    }
?>