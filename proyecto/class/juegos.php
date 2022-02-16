<?php

require_once('modelo.php');

class juegos extends modeloCredencialesBD{
    protected $nombre;
    protected $correo;
    protected $contrasena;

public function __construct(){
    parent::__construct();
}

public function Listar_Halo(){

        $instruccion = "CALL sp_listar_Halo()";

        $consulta=$this->_db->query($instruccion);
        $resultado=$consulta->fetch_all(MYSQLI_ASSOC);

        if(!$resultado){
            echo "Fallo al consultar las noticias";
        }
        else{
            return $resultado;
            $resultado->close();
            $this->_db->close();
        }
}

public function Listar_Hitman(){
    $instruccion = "CALL sp_listar_Hitman()";

    $consulta=$this->_db->query($instruccion);
    $resultado=$consulta->fetch_all(MYSQLI_ASSOC);

    if(!$resultado){
        echo "Fallo al consultar las noticias";
    }
    else{
        return $resultado;
        $resultado->close();
        $this->_db->close();
    }
}

public function Listar_Battle(){
    $instruccion = "CALL sp_listar_Battlefield()";

    $consulta=$this->_db->query($instruccion);
    $resultado=$consulta->fetch_all(MYSQLI_ASSOC);

    if(!$resultado){
        echo "Fallo al consultar las noticias";
    }
    else{
        return $resultado;
        $resultado->close();
        $this->_db->close();
    }
}

public function Listar_LOL(){
    $instruccion = "CALL sp_listar_Lol()";

    $consulta=$this->_db->query($instruccion);
    $resultado=$consulta->fetch_all(MYSQLI_ASSOC);

    if(!$resultado){
        echo "Fallo al consultar las noticias";
    }
    else{
        return $resultado;
        $resultado->close();
        $this->_db->close();
    }
}


public function Listar_payday(){
    $instruccion = "CALL sp_listar_payday()";

    $consulta=$this->_db->query($instruccion);
    $resultado=$consulta->fetch_all(MYSQLI_ASSOC);

    if(!$resultado){
        echo "Fallo al consultar las noticias";
    }
    else{
        return $resultado;
        $resultado->close();
        $this->_db->close();
    }
}


public function Listar_squad(){

    $instruccion = "CALL sp_listar_Squad()";

    $consulta=$this->_db->query($instruccion);
    $resultado=$consulta->fetch_all(MYSQLI_ASSOC);

    if(!$resultado){
        echo "Fallo al consultar las noticias";
    }
    else{
        return $resultado;
        $resultado->close();
        $this->_db->close();
    }
}

public function Listar_dragon(){
    $instruccion = "CALL sp_listar_Dragon()";

    $consulta=$this->_db->query($instruccion);
    $resultado=$consulta->fetch_all(MYSQLI_ASSOC);

    if(!$resultado){
        echo "Fallo al consultar las noticias";
    }
    else{
        return $resultado;
        $resultado->close();
        $this->_db->close();
    }
}

public function Listar_aztech(){
    $instruccion = "CALL sp_listar_Aztech()";

    $consulta=$this->_db->query($instruccion);
    $resultado=$consulta->fetch_all(MYSQLI_ASSOC);

    if(!$resultado){
        echo "Fallo al consultar las noticias";
    }
    else{
        return $resultado;
        $resultado->close();
        $this->_db->close();
    }
}

public function Listar_avowed(){
    $instruccion = "CALL sp_listar_Avowed()";

    $consulta=$this->_db->query($instruccion);
    $resultado=$consulta->fetch_all(MYSQLI_ASSOC);

    if(!$resultado){
        echo "Fallo al consultar las noticias";
    }
    else{
        return $resultado;
        $resultado->close();
        $this->_db->close();
    }
}

public function Listar_persia(){
    $instruccion = "CALL sp_listar_Persia()";

    $consulta=$this->_db->query($instruccion);
    $resultado=$consulta->fetch_all(MYSQLI_ASSOC);

    if(!$resultado){
        echo "Fallo al consultar las noticias";
    }
    else{
        return $resultado;
        $resultado->close();
        $this->_db->close();
    }
}

public function Listar_p(){
    $instruccion = "CALL sp_listar_P()";

    $consulta=$this->_db->query($instruccion);
    $resultado=$consulta->fetch_all(MYSQLI_ASSOC);

    if(!$resultado){
        echo "Fallo al consultar las noticias";
    }
    else{
        return $resultado;
        $resultado->close();
        $this->_db->close();
    }
}

public function Listar_sonic(){
    $instruccion = "CALL sp_listar_Sonic()";

    $consulta=$this->_db->query($instruccion);
    $resultado=$consulta->fetch_all(MYSQLI_ASSOC);

    if(!$resultado){
        echo "Fallo al consultar las noticias";
    }
    else{
        return $resultado;
        $resultado->close();
        $this->_db->close();
    }
}


public function Listar_elden(){
    $instruccion = "CALL sp_listar_Elden()";

    $consulta=$this->_db->query($instruccion);
    $resultado=$consulta->fetch_all(MYSQLI_ASSOC);

    if(!$resultado){
        echo "Fallo al consultar las noticias";
    }
    else{
        return $resultado;
        $resultado->close();
        $this->_db->close();
    }
}

}


?>