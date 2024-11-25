<?php

class DBGestionLibreria {


    private $servidor = 'localhost'; /*Este servidor debemos cambiarlo una vez lo subamos a un host*/ 
    private $dataBase = 'db_libreria';
    private $user = 'root';
    private $password = '';


    private function getConection() {
        $dns = "mysql:host=$this->servidor;dbname=$this->dataBase";
        $obPDO = new PDO($dns, $this->user, $this->password);
        return $obPDO;

    }

    public function getTiendas() {
        $pdoConexion = $this->getConection();
        $resultado = [];

        if (is_object($pdoConexion)) {
            $sql ="SELECT *FROM tiendas";
            $resultado = $pdoConexion ->query($sql);
        }
        return $resultado;
    }
    public function getLibros() {
        $pdoConexion = $this->getConection();
        $resultado = [];

        if (is_object($pdoConexion)) {
            $sql ="SELECT *FROM titulos";


            $resultado = $pdoConexion ->query($sql);
        }
        return $resultado;
    }

    public function getAutores() {
        $pdoConexion = $this->getConection();
        $resultado = [];

        if (is_object($pdoConexion)) {
            $sql ="SELECT *FROM autores";
            $resultado = $pdoConexion ->query($sql);
        }
        return $resultado;
    }

    public function enviarComentario($nombre, $correo, $asunto, $comentario) {
        $pdoConexion = $this->getConection();
    
        if (is_object($pdoConexion)) {
            try {
                // Preparar la consulta SQL
                $sql = "INSERT INTO contacto (nombre, correo, asunto, comentario) VALUES (:nombre, :correo, :asunto, :comentario)";
                $stmt = $pdoConexion->prepare($sql);
    
                // Bind de parámetros
                $stmt->bindParam(':nombre', $nombre);
                $stmt->bindParam(':correo', $correo);
                $stmt->bindParam(':asunto', $asunto);
                $stmt->bindParam(':comentario', $comentario);
            
    
                // Ejecutar la consulta
                $stmt->execute();
    
                // Devolver true si la inserción fue exitosa
                return true;
            } catch (PDOException $e) {
                // Manejar cualquier error de la base de datos
                // Por ejemplo, puedes imprimir el mensaje de error o registrar el error en algún archivo de registro
                echo "Error al insertar comentario: " . $e->getMessage();
            }
        }
        // Devolver false si hubo algún problema con la conexión a la base de datos
        return false;
    }
    

    

}

?>