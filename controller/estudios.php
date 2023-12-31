<?php
    require_once("../config/conexion.php");
    require_once("../models/Estudios.php");
    $estudios = new Estudios();

    switch($_GET["op"]){
        
        case "mostrar":
            $datos = $estudios->get_EstudiosXid($_POST["id"]);
            if(is_array($datos)==true and count($datos)<>0){
                foreach($datos as $row){
                    $output["institucion"] = $row["institucion"];
                    $output["direccion"] = $row["direccion"];
                    $output["nivel"] = $row["nivel"];
                    $output["fecha_inicio"] = $row["fecha_inicio"];
                    $output["fecha_finalizacion"] = $row["fecha_finalizacion"];
                    $output["est"] = $row["est"];

                } 
                echo json_encode($output);
            }
            break;
        case "modificar":
            $estudios->update_Estudios(
                $_POST["id"],
                $_POST["institucion"], 
                $_POST["direccion"],
                $_POST["nivel"],
                $_POST["fecha_inicio"],
                $_POST["fecha_finalizacion"],
                $_POST["est"],

            );
            break;
        case "guardaryeditar":
            if(empty($_POST["id"])){
                $estudios->insert_Estudios($_POST["institucion"], $_POST["direccion"], $_POST["nivel"], $_POST["fecha_inicio"], $_POST["fecha_finalizacion"], $_POST["est"]);
            }else{
                $estudios->update_Estudios($_POST["id"], $_POST["institucion"],$_POST["direccion"], $_POST["nivel"], $_POST["fecha_inicio"], $_POST["fecha_finalizacion"], $_POST["est"] );
            }
            break;
        case "eliminar":
            $estudios->delete_Estudios($_POST["id"]);
            break;
        case "listar":
            $datos=$estudios->get_Estudios();
            $data=Array();
            foreach($datos as $row){
                $sub_array = Array();
                $sub_array[] = $row["institucion"] 
                $sub_array[] = $row["direccion"];
                $sub_array[] = $row["nivel"];
                $sub_array[] = $row["fecha_inicio"];
                $sub_array[] = $row["fecha_finalizacion"];
                $sub_array[] = $row["est"];
                
                $sub_array[] ='<button type="button" onClick="editar('.$row["id"].');" id="' .$row["id"].'"
                class="btn btn-outline-waring btn-icon"><div><i class="fa fa-edit"></i></div></button>';
                $sub_array[] ='<button type="button" onClick="eliminar('.$row["id"].');" id="' .$row["id"].'"
                class="btn btn-outline-danger btn-icon"><div><i class="fa fa-close"></i></div></button>';
                $data[]=$sub_array;
            }

            $results = array(
                "sEcho"=>1,
                "iTotalRecords"=>count($data),
                "iTotalDisplayRecords"=>count($data),
                "aaData"=>$data);
            echo json_encode($results);

            break;
        }
?>