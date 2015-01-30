<?php 

	function cmbCar(){
        require_once 'connection.php';
        $objdb= new Connection;
        $table= "";

        $query ="SELECT * FROM viewcar";
     

        $viewcar= $objdb->execQuery($query);
        
        	$table.='<select name="carrer" id="">';
			$table.='<option class="placeholder" disable default selected>Selecciona una Carrera</option>';
			
			$cont = 1;

        while ($row = $viewcar->fetch_assoc()) {
             // echo $row['crrsnombre'] ."<br/>";
            $table .= ('<option value="'.$cont.'">'. $row['crrsnombre'] . "</option>" );

            $table .= "</tr>"; 
            $cont++;
            }

   		$table.='</select>';
        echo $table;
        return $table;
        }


        function cmbGrad(){
        	   require_once 'connection.php';
        $objdb= new Connection;
        $table= "";

        $query ="SELECT * FROM viewgrad";
     

        $viewgrd= $objdb->execQuery($query);
        
        	$table.='<select name="grado" id="">';
			$table.='<option class="placeholder" disable default selected>Grado</option>';
			
			$cont = 1;

        while ($row = $viewgrd->fetch_assoc()) {
             // echo $row['crrsnombre'] ."<br/>";
            $table .= ('<option value="'.$cont.'">'. $row['grdgrado'] . "</option>" );

            $table .= "</tr>"; 
            $cont++;
            }

   		$table.='</select>';
        echo $table;
        return $table;
        }


        function cmbGrup(){
        	   require_once 'connection.php';
        $objdb= new Connection;
        $table= "";

        $query ="SELECT * FROM viewgrp";
     

        $viewgrup= $objdb->execQuery($query);
        
        	$table.='<select name="grupo" id="">';
			$table.='<option class="placeholder" disable default selected>Grupo</option>';
			
			$cont = 1;

        while ($row = $viewgrup->fetch_assoc()) {
             // echo $row['crrsnombre'] ."<br/>";
            $table .= ('<option value="'.$cont.'">'. $row['grpnombre'] . "</option>" );

            $table .= "</tr>"; 
            $cont++;
            }

   		$table.='</select>';
        echo $table;
        return $table;
        }

        // function newAlum(){
        	
        	
        // }


        

?>  
 

