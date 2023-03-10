<?php



echo '<table>';

for($i=1;$i<11;$i++){
	echo '<tr>';
		for($j=1;$j<11;$j++){

            $numero = random_int(1,9);
			

            if($numero%2==0){
                echo "<td> <p style='background-color: black;color: white'> $numero</p> </td>";
                
            }else{
                echo "<td> <p style='background-color: while;color: black'> $numero</p> </td>";
            }
			}
	echo '</tr>';}

?>