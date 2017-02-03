<?php 
	class cambiando
	{

		var $Cad;

		function build($Cad)
		{
			$parts = preg_split('//', $Cad);

			for ($i=0; $i < count($parts); $i++) { 
				if (is_numeric($parts[$i])) {
				echo $parts[$i]+"\n ";
				}
				else if (is_string($parts[$i]))
				{
					if ($parts[$i]=='a' || $parts[$i]=='A') {
						$parts[$i]=str_replace('a', 'b', $parts[$i]);
						echo $parts[$i];
					}
					else if ($parts[$i]=='b' || $parts[$i]=='B') {
						$parts[$i]=str_replace('b', 'c', $parts[$i]);
						echo $parts[$i];
					}
					else if ($parts[$i]=='c' || $parts[$i]=='C') {
						$parts[$i]=str_replace('c', 'd', $parts[$i]);
						echo $parts[$i];
					}
					else if ($parts[$i]=='d' || $parts[$i]=='D') {
						$parts[$i]=str_replace('d', 'e', $parts[$i]);
						echo $parts[$i];
					}
					else if ($parts[$i]=='e' || $parts[$i]=='E') {
						$parts[$i]=str_replace('e', 'f', $parts[$i]);
						echo $parts[$i];
					}
					else if ($parts[$i]=='f' || $parts[$i]=='F') {
						$parts[$i]=str_replace('f', 'g', $parts[$i]);
						echo $parts[$i];
					}
					else if ($parts[$i]=='g' || $parts[$i]=='G') {
						$parts[$i]=str_replace('g', 'h', $parts[$i]);
						echo $parts[$i];
					}
					else if ($parts[$i]=='h' || $parts[$i]=='H') {
						$parts[$i]=str_replace('h', 'i', $parts[$i]);
						echo $parts[$i];
					}
					else if ($parts[$i]=='i' || $parts[$i]=='I') {
						$parts[$i]=str_replace('i', 'j', $parts[$i]);
						echo $parts[$i];
					}
					else if ($parts[$i]=='j' || $parts[$i]=='J') {
						$parts[$i]=str_replace('j', 'k', $parts[$i]);
						echo $parts[$i];
					}
					else if ($parts[$i]=='k' || $parts[$i]=='K') {
						$parts[$i]=str_replace('k', 'l', $parts[$i]);
						echo $parts[$i];
					}
					else if ($parts[$i]=='l' || $parts[$i]=='L') {
						$parts[$i]=str_replace('l', 'm', $parts[$i]);
						echo $parts[$i];
					}
					else if ($parts[$i]=='m' || $parts[$i]=='M') {
						$parts[$i]=str_replace('m', 'n', $parts[$i]);
						echo $parts[$i];
					}
					else if ($parts[$i]=='n' || $parts[$i]=='N') {
						$parts[$i]=str_replace('n', 'ñ', $parts[$i]);
						echo $parts[$i];
					}
					else if ($parts[$i]=='ñ' || $parts[$i]=='Ñ') {
						$parts[$i]=str_replace('ñ', 'o', $parts[$i]);
						echo $parts[$i];
					}
					else if ($parts[$i]=='o' || $parts[$i]=='O') {
						$parts[$i]=str_replace('o', 'p', $parts[$i]);
						echo $parts[$i];
					}
					else if ($parts[$i]=='p' || $parts[$i]=='P') {
						$parts[$i]=str_replace('p', 'q', $parts[$i]);
						echo $parts[$i];
					}
					else if ($parts[$i]=='q' || $parts[$i]=='Q') {
						$parts[$i]=str_replace('q', 'r', $parts[$i]);
						echo $parts[$i];
					}
					else if ($parts[$i]=='r' || $parts[$i]=='R') {
						$parts[$i]=str_replace('r', 's', $parts[$i]);
						echo $parts[$i];
					}
					else if ($parts[$i]=='s' || $parts[$i]=='S') {
						$parts[$i]=str_replace('s', 't', $parts[$i]);
						echo $parts[$i];
					}
					else if ($parts[$i]=='t' || $parts[$i]=='T') {
						$parts[$i]=str_replace('t', 'u', $parts[$i]);
						echo $parts[$i];
					}
					else if ($parts[$i]=='u' || $parts[$i]=='U') {
						$parts[$i]=str_replace('u', 'v', $parts[$i]);
						echo $parts[$i];						
					}
					else if ($parts[$i]=='v' || $parts[$i]=='V') {
						$parts[$i]=str_replace('v', 'w', $parts[$i]);
						echo $parts[$i];
					}
					else if ($parts[$i]=='w' || $parts[$i]=='W') {
						$parts[$i]=str_replace('w', 'x', $parts[$i]);
						echo $parts[$i];
					}
					else if ($parts[$i]=='x' || $parts[$i]=='x') {
						$parts[$i]=str_replace('x', 'y', $parts[$i]);
						echo $parts[$i];
					}
					else if ($parts[$i]=='y' || $parts[$i]=='Y') {
						$parts[$i]=str_replace('y', 'z', $parts[$i]);
						echo $parts[$i];
					}

				}
			}}
                        
                                        }
			
	$Clase=new cambiando;
	$Clase->build('11dala11');
?>
