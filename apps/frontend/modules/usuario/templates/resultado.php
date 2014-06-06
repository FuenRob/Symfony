<?php 
        
        function printResultados (){
            if (!isset($_POST ['tesis'])){
				echo "Termino no encontrado. Por favor redefina su busqueda";
			}
			else{
				$busqueda = $_POST['tesis'];
                $sql  = "SELECT * FROM tesis WHERE titulo LIKE '%$busqueda%'";
                $resultado = mysql_query($sql);
                
               
                while ($datos = mysql_fetch_row($resultado)) {
                    echo "<div class=\"item\">
                    <span class=\"title\">
                    <a href=\"$datos[1]\">$datos[2]</a>
                    </span>
                    <p>$datos[3]</p>
                    <p>
                    <span class=\"thumbnail\">
                    <a href=\"$datos[1]\"><img src=\"$datos[6]\" /></a>
                    <br/>Click para ver el vídeo
                    </span><br/>
                    <span class=\"attr\">Subido el:</span> $datos[4] <br/>
                    <span class=\"attr\">Categoría:</span> $datos[5] <br/>
                    </p>
                    </div>";    
                   
                }
            }
        }
        
?>