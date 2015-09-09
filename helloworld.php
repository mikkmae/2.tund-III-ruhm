<?php

	$first_name = "Mikk";
	$last_name = "Mäe";
	echo $first_name." ".$last_name;

?>    	    	    	  	 			 		
<br>
<?php

	$age = 19;
	
	//testib loogikat jelu, juhul gei vanus on väiksem kui 18 siis kirjuta "alaealine"
	//muuljuhul "täisealine"
	
	// if loogikatehe
	
	if ($age >=18) {
		
		echo "Oled täisealine.";
	} else {
		
			echo "Oled alaealine.";
	}
?>
