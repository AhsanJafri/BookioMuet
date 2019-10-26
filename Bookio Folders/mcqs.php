<?php
	
 	$conn=mysqli_connect('localhost','root','','bookio');
	
	$z=1;
	$a=1;
	$i=array();												#Intialize an array
	$t=array();
	#Taking the input from the firstpage.php
	if(isset($_POST['submit'])){
		$year=$_POST['opt'];
		$sub=$_POST['Sub'];
		#$rowcount=mysqli_num_rows($row);
		#$ran=rand(1,$rowcount);
		
		$query="Select * from mcqs where Year='$year'";			#Query which we wanted To execute
		if($result=mysqli_query($conn,$query))					#Fetching out the result
		{
			echo "<form method='POST'>";
			
			while ($ques=mysqli_fetch_assoc($result))      
			{
				
				echo $z;
				#echo $ran."<br>";			 
				echo "<h1>".$ques['M_ques']."</h1><br>";
				echo "<input type='radio' name=".$z." value=".$ques['optionone'].">".$ques['optionone']."</input><br>";
				echo "<input type='radio' name=".$z." value=".$ques['optiontwo'].">".$ques['optiontwo']."</input><br>";
				echo "<input type='radio' name=".$z." value=".$ques['optionthree'].">".$ques['optionthree']."</input><br>";
				//echo "<input type='hidden' name=".$a." value=".$ques['answer']."><br>";
				array_push($i,strval($ques['answer']));

				$z++;
				$a++;
			}
			#Now after fetching we wanted to verify our anwer
			echo "<br><button type='submit' name='sub' value=".$z.">SUBMIT</button></form>";
					
							
		}
	}
			
	
	if(isset($_POST['sub'])){
		$ans1=$_POST['1'];
		$ans2=$_POST['2'];
		$ans3=$_POST['3'];
		echo $ans1;
		echo $ans2;
		echo $ans3;
		echo $_POST['sub'];

	}
?>
<script type="text/javascript">
		var input= <?php echo json_encode($i) ?>;
		document.write(input);
		var array1 =new Array();
		for (var i=1,i<input,i++) {
			var a=document.getElementById(i);
			array1.append(a);}
</script>