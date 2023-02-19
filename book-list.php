<?php 
	require 'config.php';
 		
 		$sqltran = mysqli_query($con, "SELECT * FROM borrowed_books ")or die(mysqli_error($con));
		$arrVal = array();
 		
		$i=1;
 		while ($rowList = mysqli_fetch_array($sqltran)) {
 								 
						$name = array(
								'num' => $i,
 	 		 	 				'first'=> $rowList['book_title'],
	 		 	 				'second'=> $rowList['borrower'],
                                'third'=> $rowList['borrow_date'],
                                'fourth'=> $rowList['Action']
 	 		 	 			);		


							array_push($arrVal, $name);	
			$i++;			
	 	}
	 		 echo  json_encode($arrVal);		
 

	 	mysqli_close($con);
?>  