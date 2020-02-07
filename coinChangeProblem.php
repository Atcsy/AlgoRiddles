<?php

/*
$amount = 1860;

Expected result:
Currency Count
1000 : 1
500 : 1
200 : 1
100 : 1
50 : 1
10 : 1
*/

function coinChangeProblem($amount) { 
	$notes = array(1000, 500, 200, 100, 50, 20, 10, 5); 
	$noteCounter = array(0, 0, 0, 0, 0, 0, 0, 0, 0); 
	
	/*
	Iterate over the $notes array and substract 
	the value from the $noteCounter array same index.
	*/
	
	for ($i = 0; $i < count($notes); $i++) { 
		if ($amount >= $notes[$i]) { //Do this till we have $amount
			$noteCounter[$i] = intval($amount / $notes[$i]); //integer result
      

			$amount = $amount - $noteCounter[$i] * $notes[$i]; 
		} 
	}	
	
  
  
	//Print notes
	echo ("Currency Count "."\n");
	
	for ($i = 0; $i < count($notes); $i++) {

  		if ($noteCounter[$i] !== 0) {
      
      			$result = $notes[$i] * $noteCounter[$i];
      			echo $result . " : " .$noteCounter[$i]. "\n";
		}

  	}
} 



$amount = 1860; 
coinChangeProblem($amount); 

?>
