<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="sweetalert2.all.min.js"></script>
    <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <script src="sweetalert2.min.js"></script>
	<link rel="stylesheet" href="sweetalert2.min.css">
	<script type="text/javascript">
	function passWord() {
		var pass1 = window.prompt('Please Enter Your Password',' ');
		if (pass1!="bookio"){history.go(-1); } 
}	
	</script>

</head>
	<body onload="passWord()">

    	<div class="main">
        	<div class="imgb">
            	<img src="images\Bookio Transparent logo.png" class="responsive" style="margin-left:50px; height: 70px;width: 210px;margin-top: 7px;">
        	</div>
        
        <div class="container">
            <div class="sign-up-content">
                <form method="POST" class="signup-form">

                	<div class="head"><img src="images\form.png" class="responsive" width="20%" style=" margin-left: 0px;
                	padding-bottom: 20px;padding-bottom: 50px;"></div>

                 		<div class="form-row">
                  			<div class="col-1">
                    			<label>Question</label>
                  			</div>
                  			
                  			<div class="col">
                    		<input type="text" name="ques" width="100%" required>
                  			</div>
                  		</div>
        <br>


                 <div class="form-row">
                  <div class="col-1">
                    <label>Option 1</label>
                  </div>
                  <div class="col-4">
                    <input type="text" name="opt1" width="100%" required>
                  </div>
                  <div class="col" align="center">
                    <label>Option 2</label>
                  </div>
                  <div class="col">
                    <input type="text" name="opt2" required>
                  </div>
                  </div>

<br>
 
        		<div class="form-row">
                  <div class="col-1">
                    <label>Option 3</label>
                  </div>
                  <div class="col-4">
                    <input type="text" name="opt3" width="100%" required>
                  </div>
                  <div class="col" align="center">
                    <label>Option 4</label>
                  </div>
                  <div class="col">
                    <input type="text" name="opt4">
                  </div>
                  </div>

<br>			
				<div class="form-row">
                  <div class="col-1">
                    <label>Answer</label>
                  </div>
                  <div class="col">
                    <input type="text" name="ans" width="100%" required>
                  </div>
                  </div><br>

				<div class="form-row">
                  <div class="col">
                    <label>Year</label>
                  </div>
                  <div class="col">
                    
  					<select name="year">
						  <option value="2016">2016</option>
						  <option value="2017">2017</option>
						  <option value="2018">2018</option>
						  <option value="2019">2019</option>
					</select>
				</div>
                  <div class="col" align="center">
                    <label>Chapter</label>
                  </div>
                  <div class="col">
                      	<select name="chap">
						  <option value="1">1</option>
						  <option value="2">2</option>
						  <option value="3">3</option>
						  <option value="4">4</option>	  
						  <option value="5">5</option>
						  <option value="6">6</option>
						  <option value="7">7</option>
						</select>
					</div>

				

					<div class="col" align="center">
                    <label>Class</label>
                  </div>
                  <div class="col">
                      	<select name="clas">
						  <option value="Inter">Inter</option>
						  <option value="First Year">First Year</option>
						</select>
					</div>
                  <div class="col" align="center">
                    <label>Subject</label>
                  </div>
                  <div class="col">
                      	<select name="sub">
						  <option value="1">Math</option>
						  <option value="2">Physic</option>
						  <option value="3">Chemistry</option>
						  <option value="4">Urdu</option>	  
						</select>
					</div>

                  </div>

                </div>  


                  <div class="form-row">
                  <div class="col" >
                    <div class="form-textbox">
                      &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                      <input type="submit" name="submit"  id="mysubmit" class="submit" value="Submit" />
                      

                  </div><br><br><br></form>

                
            </div>
        </div>

    </div>
</body>
</html>


<?php
  $conn=mysqli_connect('localhost','root','','Bookio');
  if(isset($_POST['submit'])){
  	$q=$_POST['ques'];
  	$o1=$_POST['opt1'];
  	$o2=$_POST['opt2'];
  	$o3=$_POST['opt3'];
  	$o4=$_POST['opt4'];
  	$a=$_POST['ans'];
  	$c=$_POST['clas'];
  	$s=$_POST['sub'];
  	$y=$_POST['year'];
  	$ch=$_POST['chap'];
  	$query=mysqli_query($conn,"Insert into mcqs(M_ques,Year,C_ID,Sub_ID,optionone,optiontwo,optionthree,optionfour,answer,Class) values ('$q','$y','$ch','$s','$o1','$o2','$o3','$o4','$a','$c')");
  	if($query){
  		echo "<script>Swal.fire(
                    'Good job!',
                  'Successfully Submitted!',
                  'success')</script>"; 
              ;
  	}
  	else
  		echo "Failed";
  
  }
  ?>