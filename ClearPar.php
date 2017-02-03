<?php  
	class Complete
	{
		function build($Cad)
		{
			$parts = preg_split('//', $Cad);
			for ($i=0; $i < count($parts); $i++) { 
				if ($parts[$i]=='(') {
					if ($parts[$i+1]==')') {
						echo $parts[$i];
						echo $parts[$i+1];
					}
				}
			}
		}
	}
	
	$Clase=new Complete;
	$Clase->build('()()))(()()()(()))()()()()()()()()()()(((((()))))))(())))()');
?>