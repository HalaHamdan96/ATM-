	<?php 

	echo "<div style='background-color:gray; text-align:center; color:white; font-weight:bold;'>The ATM Machine</div>";

	$personNeeds=400;
	for ($i=0; $i < 1000; $i++) { 
	$var1=3;
	$var2=9;
	$var3=39;
	$var4=99;

	$fifty=array();
	$twinty=array();
	$ten=array();
	$five=array();

	for ($i=0; $i <= $var1; $i++) { 
		//$var1.array_push(array, var)
		array_push($fifty, 50);
	}

	for ($i=0; $i <= $var2; $i++) { 
		array_push($twinty, 20);
	}

	for ($i=0; $i <= $var3; $i++) { 
		array_push($ten, 10);
	}

	for ($i=0; $i <= $var4; $i++) { 
		array_push($five, 5);
	}

	$fiftyRand=random_int(0, $var1);
	$twintyRand=random_int(0, $var2);
	$tenRand=random_int(0, $var3);
	$fiveRand=random_int(0, $var4);
	//echo $fiftyRand."<br>".$twintyRand."<br>".$tenRand."<br>".$fiveRand."<br>";
	// function ATM($value)
	// {
		$sum=0;
		// parse_Int( $sum);
		// $result=$sum+20;
		// echo $result;
	    for ($i=0; $i < $fiftyRand ; $i++) { 
			$sum+=$fifty[$i];
		} //$sum=0;

		for ($i=0; $i < $twintyRand ; $i++) { 
			$sum+=$twinty[$i];
		}


		for ($i=0; $i < $tenRand ; $i++) { 
			$sum+=$ten[$i];
			// echo $sum;
		}

		for ($i=0; $i < $fiveRand ; $i++) { 
			$sum+=$five[$i];
		}

	if ($personNeeds==$sum) {
		echo "<br>"."The person needs ".$sum; 
		echo "<br>"."Fifty ".$fiftyRand;
		echo "<br>"."Twinty ".$twintyRand;
		echo "<br>"."Ten ".$tenRand;
		echo "<br>"."Five ".$fiveRand."<hr>";
		
		break;
	    }
	}
	$fifty_mod=$var1-$fiftyRand+1;
	$twinty_mod=$var2-$twintyRand+1;
	$ten_mod=$var3-$tenRand+1;
	$five_mod=$var4-$fiveRand+1;
	echo "The ATM has ".$fifty_mod." of Fifty ";
	echo "<br>"."The ATM has ".$twinty_mod." of Twinty ";
	echo "<br>"."The ATM has ".$ten_mod." of Ten ";
	echo "<br>"."The ATM has ".$five_mod." of Five ";	
	// $result=ATM($personNeeds);
	// echo $result;
	// print_r($fifty);echo "<br>";
	// print_r($twinty);echo "<br>";
	// print_r($ten);echo "<br>";
	// print_r($five);echo "<br>";
	//$money=array(array(50,50,50,50),array(1,2),array(1),array(2,4,3));

	?>