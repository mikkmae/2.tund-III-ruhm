<?php

	$first_name = "Mikk";
	$last_name = "Mäe";
	echo $first_name." ".$last_name;

?>    	    	    	  	 			 		
<br>
<?php

	$age = 5;
	
	//testib loogikat jelu, juhul gei vanus on väiksem kui 18 siis kirjuta "alaealine"
	//muuljuhul "täisealine"
	
	// if loogikatehe
	
	if ($age >=18) {
		
		echo "Oled täisealine.";
	} else {
		
			echo "Oled alaealine.";
	}
?>

<br>

<?php

	//vastavalt vanusele trükime niimitu korda välja sõna ""palju""
	
	for($i=0;$i < $age; $i++) {
		
		//tegevus mis kordub
		echo "Palju ".$i." ";
		
		
	}
	
	echo "õnne!";
?>

<br>

<?php

	//Trüki välja kuupäev kujul: nädalapäev, kp, kuu, aasta
	echo date("l, j F Y e");

?>