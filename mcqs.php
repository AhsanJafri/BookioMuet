<?php
	
  include('Databaseinclude.php');

	#Taking the input from the firstpage.php
	if(isset($_POST['submit'])){
		$year=$_POST['opt'];
		$sub=$_POST['Sub'];
	}
		#$rowcount=mysqli_num_rows($row);
		#$ran=rand(1,$rowcount);
		$i=array();												#Intialize an array
		$t=array();
		$query="Select * from mcqs where Year='$year'";			#Query which we wanted To execute
		if($result=mysqli_query($conn,$query))					#Fetching out the result
		{
			echo "<form method='POST'>";
		
			while ($ques=mysqli_fetch_assoc($result))      
			{
				#echo $ran."<br>";			 
				echo "<h1>".$ques['M_ques']."</h1><br>";
				echo "<input type='radio' name='Ans'>".$ques['optionone']."<br>";
				echo "<input type='radio' name='Ans'>".$ques['optiontwo']."<br>";
				echo "<input type='radio' name='Ans'>".$ques['optionthree']."<br>";
				array_push($i,strval($ques['answer']));
			}

			#Now after fetching we wanted to verify our anwer
			echo "<input type='submit' name='sub'></input></form>";
					if(isset($_POST['sub'])){

						$Ans=$_POST['Ans'];
						echo $Ans;			 

			
						}		
			}
	

?>
