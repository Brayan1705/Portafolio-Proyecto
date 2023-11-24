<?php
    class Usuario extends conectar{
        public function login(){
            $conectar = parent::conexion();
            parent::set_names();
            if (isset($_POST["enviar"])){
                $correo = $_POST["correo"];
                $password = $_POST["password"];
                if(empty($correo) and empty($password)){
                    header("Location:".Conectar::ruta()."index.php?m=2");
                    exit();
            }else{
                $sql = "SELECT * FROM usuario WHERE correo=? and password=? and estado=1";
                $stmt = $conectar->prepare($sql);
                $stmt->bindvalue(1,$correo);
                $stmt->bindvalue(2,$password);
                $stmt-> Execute();
                $resultado = $stmt->fetch();

                if (is_array($resultado) and count($resultado)>0){
                    $_SESSION["id"]=$resultado["id"];
                    $_SESSION["nombre"]=$resultado["nombre"];
                    $_SESSION["apellido_paterno"]=$resultado["apellido_paterno"];
                    $_SESSION["correo"]=$resultado["correo"];
                    header("Location:".Conectar::ruta()."views/inicio.php");
                    exit();
                }else{
                    header("Location:".Conectar::ruta()."index.php?m=1");
                    exit();
                }
            }
        }
    }    
}   