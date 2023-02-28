<?php

class basedatos{
    private $con;
    private $dbequipo='sql306.epizy.com';
    private $dbusuario='epiz_31575939';
    private $dbclave='AC5dAp02u6xNXl';
    private $dbnombre='epiz_31575939_registrosTiendaRopa';

    //Método constructor
    function __construct(){
        $this->conectar();
    }//fin constructor

    //conexion basedatos
    public function conectar(){
        $this->con = mysqli_connect($this->dbequipo, $this->dbusuario, $this->dbclave, $this->dbnombre);
        
        if(mysqli_connect_error()){
        die("Error: No se pudo conectar a la base de datos: " . mysqli_connect_error() . mysqli_connect_errno());
            }
    }//fin funcion conectar

    public function leer_tabla(){
        $sql='select * from clientes;';
        $res= mysqli_query( $this->con, $sql );
        return $res;
    }//fin función leer_tabla

    public function insertar_datos($documento,$nombre,$apellidos,$email,$fechaNac,$celular,$telefono,$estilo){
        $sql="insert into clientes(dat_documento,dat_nombre,dat_apellidos,dat_email,dat_fecha,dat_celular,dat_telefono,dat_estilo) values('$documento','$nombre','$apellidos','$email','$fechaNac','$celular','$telefono','$estilo');";
        $res= mysqli_query( $this->con, $sql );
        if ($res){
            return true;
        }else{
        return false;
        }  
    }//fin de insertar_datos

    //funcion para eliminar registros
    public function eliminar_registro($doc){
        $sql = "delete from clientes where dat_documento=$doc;";
        $res=mysqli_query($this->con, $sql);
        if ($res) {
            return true;
        }else {
            return false;
        }
                
    }//fin funcion eliminar

    //funciones para actualizar un registro,
    public function seleccionar_cliente($id){
        $sql = "SELECT * FROM clientes where dat_id=$id";
        $res = mysqli_query($this->con, $sql);
        $return = mysqli_fetch_object($res);
        return $return;
    }//fin función seleccionar_reserva

            
    //Esta función actualiza el registro seleccionado
    public function actualizar_cliente($id,$documento,$nombre,$apellidos,$email,$fechaNac,$celular,$telefono,$estilo){                 
        $sql = "UPDATE clientes SET dat_documento='$documento', dat_nombre='$nombre', dat_apellidos='$apellidos', dat_email='$email', dat_fecha='$fechaNac', dat_celular='$celular', dat_telefono='$telefono', dat_estilo='$estilo' WHERE dat_id=$id ";
        //echo $sql; //activando esta línea se puede ver la impresión de la consulta SQL de la actualización.
        $res = mysqli_query($this->con, $sql);
        if($res){
            return true;
        }else{
            return false;
        }
    }//fin función actualizar



    //EMPLEADOS
    
    public function leer_tablaEmpleados(){
        $sql='select * from empleados;';
        $res= mysqli_query( $this->con, $sql );
        return $res;
    }//fin función leer_tabla

    public function insertar_datos_empleados($documento,$nombre,$apellidos,$email,$fechaNac,$celular,$telefono,$experiencia,$contra){
        $sql="insert into empleados(dat_documento,dat_nombre,dat_apellidos,dat_email,dat_fecha,dat_celular,dat_telefono,dat_experiencia,dat_contra) values('$documento','$nombre','$apellidos','$email','$fechaNac','$celular','$telefono','$experiencia','$contra');";
        $res= mysqli_query( $this->con, $sql );
        if ($res){
            return true;
        }else{
        return false;
        }  
    }//fin de insertar_datos

    //funcion para eliminar registros
    public function eliminar_registro_empleados($doc){
        $sql = "delete from empleados where dat_documento=$doc;";
        $res=mysqli_query($this->con, $sql);
        if ($res) {
            return true;
        }else {
            return false;
        }
                
    }//fin funcion eliminar

    //funciones para actualizar un registro,
    public function seleccionar_empleados($id){
        $sql = "SELECT * FROM empleados where dat_id=$id";
        $res = mysqli_query($this->con, $sql);
        $return = mysqli_fetch_object($res);
        return $return;
    }//fin función seleccionar_reserva

            
    //Esta función actualiza el registro seleccionado
    public function actualizar_empleados($id,$documento,$nombre,$apellidos,$email,$fechaNac,$celular,$telefono,$experiencia,$contra){                 
        $sql = "UPDATE empleados SET dat_documento='$documento', dat_nombre='$nombre', dat_apellidos='$apellidos', dat_email='$email', dat_fecha='$fechaNac', dat_celular='$celular', dat_telefono='$telefono', dat_experiencia='$experiencia', dat_contra='$contra' WHERE dat_id=$id ";
        $res = mysqli_query($this->con, $sql);
        if($res){
            return true;
        }else{
            return false;
        }
    }//fin función actualizar



}//claseBaseDatos