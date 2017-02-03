<?php 
	class Complete
	{
		function build($Cad)
		{
			
			$valor = explode(',',$Cad);
			$max=max($valor);
			$min=min($valor);
			$valor[0]=9;
				for ($i=0; $i <= $max-$min; $i++) { 
						echo $valor[0]=$valor[0]+1;	
					if (($max-$min)==$i) {				
					}
					else{
						echo ',';
					}
					
				}

		}
	}
	
	$Clase=new Complete;
	$Clase->build('10,11,14,40');

 ?>
