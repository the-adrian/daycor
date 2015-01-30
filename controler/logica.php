<?php 
        require_once 'connection.php';
        $objdb= new Connection;
        $table= "";

        $query ="SELECT * FROM activealums";
        // $query ="create view activealums as select almnombre as nombre, almapellidos as apellidos, crrsnombre as carrera, grdgrado as grado, grpnombre as grupo, (case when (ggcstatus=1) then 'Activo' else 'Baja' end) as estado from alumnos inner join gragrucar on almid=ggcid inner join carreras on ggccarrera=crrsid inner join grados on ggcgrado=grdid inner join grupos on ggcgrupo=grpid;";  

        $viewalum= $objdb->execQuery($query);
        
        $table .= '<table class="large-12 small-12 columns hover-table">';
        $table .= "<thead>";
        $table .= "<tr>";
        $table .= "<th>Nombre</th>";
        $table .= "<th>Apellidos</th>";
        $table .= "<th>Carrera</th>";
        $table .= "<th>Grado</th>";
        $table .= "<th>Grupo</th>";
        $table .= "<th>Estado</th>";
        $table .= "</tr>";
        $table .= "</thead>";

        while ($row = $viewalum->fetch_assoc()) {
             // echo $row['crrsnombre'] ."<br/>";
            $table .= "<tr>";
            $table .= ("<td>". $row['nombre'] . "</td>" );
            $table .= ("<td>". $row['apellidos'] . "</td>" );
            $table .= ("<td>". $row['carrera'] . "</td>" );
            $table .= ("<td>". $row['grado'] . "</td>" );
            $table .= ("<td>". $row['grupo'] . "</td>" );
            $table .= ("<td>". $row['estado'] . "</td>" );      
            $table .= "</tr>"; 
            }

        $table .= "</table>";
        echo $table;
        return $table;
?>  
 

