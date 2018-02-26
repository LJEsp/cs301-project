<html>
<head>
<title>IT Registration</title>

<link rel="icon" href="icon.png">
</head>

<script>

</script>

<style>

body{
	margin: 0;
	margin-bottom: 48px;
	padding:0;
	
	background: #ECE9E6;  /* fallback for old browsers */
	background: -webkit-linear-gradient(to right, #FFFFFF, #ECE9E6);  /* Chrome 10-25, Safari 5.1-6 */
	background: linear-gradient(to right, #FFFFFF, #ECE9E6); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}

p{
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	text-align: center;

}

#p1 {
	padding-right:150px;
	margin-top: 12 ;
}
	
h1{
	padding-left: 65px;
	margin-bottom: 0px;
	color: black;
}

#div1 {
	width: 500px;
	margin: auto;
    padding-top: 50px;
    padding-right: 50px;
    padding-bottom: 50px;
    padding-left: 200px;
	color: black;
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
}

#amaLogo {
	padding-left:12px;
}

form {
	line-height: 2;
}

#prog {
	padding-left: 100px;
}

label { 
	display: inline-block; 
	width: 100px; 
	text-align: right; 
}

#table {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 84%;
	margin: auto;
}

#table td, #table th {
    border: 1px solid #ddd;
    padding: 8px;
}

#table tr{
	background-color: #f2f2f2;
}

#table th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: darkred;
    color: white;
}

#submit {
    background-color: darkred;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    line-height: 12px;
    font-size: 16px;
    margin: 12px 4px -36px;
    cursor: pointer;
	width: 150px;
}

#submit:active {
	background-color: #580000;
}

#buttons {
	margin-left: -70px;
}

#buttons2 {
	margin-top: -48px;
	margin-left: 90px;
	padding-bottom: 12px;
}

#load {
	margin-left: -70px;

}

#created {
	color: gray;
	text-align: center;
}

</style>

<body>

	<div id="div1">
	
		<img src="amaLogo.png" id="amaLogo" style="width: 60%">
	
		<h1>IT Registration</h1>
		
		<!-- UPLOAD FILE -->
		
		<form enctype ="multipart/form-data" action ="" method ="POST">

			<input type ="hidden" name ="MAX_FILE_SIZE" value = "100000"/>

			<p id="p1">Choose the resume to upload:</p><br>
		
			<div id="buttons2">
				<input type="file" name="uploadedfile"> <br>

				<input id="submit" type="submit" name="btnupload" value="Upload File">
			</div>
		</form>
		
		
		<?php	
		if(isset($_POST['btnupload'])){
			$target_path="uploads/";
			
			$target_path=$target_path.basename($_FILES['uploadedfile']['name']);
			
				if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)){
					
					// Yung itong nakacomment sa baba yung original
					// echo "The file ".basename($_FILES['uploadedfile']['name'])." has been uploaded";
					
					
					// Alert box
					$filename = basename($_FILES['uploadedfile']['name']);
					echo '<script type="text/javascript">alert("The file " + "'.$filename.'" + " has been uploaded");</script>';		
					
				}else{
					
					// Yung itong nakacomment sa baba yung original
					// echo "There was an error upload the file, please try again!";
					
					// Alert box 
					echo "<script type='text/javascript'>alert('There was an error upload the file, please try again!');</script>";
				}
		}
		?>

		<!-- UPLOAD FILE END -->
		
		<!-- REGISTRATION FORM -->
		
		<br>
		<form action="" method ="post">
			
					
			<p id="p1" style="margin-bottom: 3px">Please fill out all the fields below.</p>
			
			<!--oninvalid="setCustomValidity('Please match the requested format')" 
			onchange="try{setCustomValidity('')}catch(e){}" 
			 -->
			
			<label>USN: </label> <input type="text" name="usn" 
			pattern="[0-9]{11}" 
			title="USN should be an 11-digit number."
			{{required="yes}}"><br>

			<label>Firstname: </label> <input type="text" name="firstName" 
			pattern="[a-zA-Z -]{1,35}"
			title="Firstname may contain letters, dashes, and spaces only (35 characters max)."
			{{required="yes"}}> <br>

			<label>Lastname: </label> <input type="text" name="lastName" 
			pattern="[a-zA-Z -]{1,35}" 
			title="Lastname may contain letters, dashes, and spaces only (35 characters max)."
			{{required="yes"}}> <br>

			<label>Gender: </label>
			<input type="radio" name="gender" value="Male" {{required="yes"}}> Male
			<input type="radio" name="gender" value="Female"> Female <br>

			<label>Age: </label> <input type="number" name="age" min=1 max=100 {{required="yes"}}><br>

			<label>Date of Birth: </label> <input type="date" name="dateOfBirth" min="1980-12-31" max="2017-10-26" {{required="yes"}}><br>

			<label>Year level: </label> 
			
			<select name="year" {{required}}>
				<option value="">Please select</option>
				<option value="1st Year">1st Year</option>
				<option value="2nd Year">2nd Year</option>
				<option value="3rd Year">3rd Year</option>
				<option value="4th Year">4th Year</option>
			</select><br>

			Programming Languages: <br>

			<div id="prog">
			
				<input type="checkbox" name="language[]" value="Turbo C"> Turbo C<br>
				<input type="checkbox" name="language[]" value="C++"> C++<br>
				<input type="checkbox" name="language[]" value="VB.Net"> VB.Net<br>
				<input type="checkbox" name="language[]" value="PHP"> PHP<br>
				<input type="checkbox" name="language[]" value="Python"> Python<br>
				<input type="checkbox" name="language[]" value="Java"> Java<br>
				
			</div>					
			<div id="buttons">
				<input id="submit" type="submit" name="btnRegister" value="REGISTER">
				<input id="submit" type="submit" name="btnUpdate" value="UPDATE">
				<input id="submit" type="submit" name="btnLoadData" value="LOAD DATA" >
				<input id="submit" type="submit" name="btnSearch" value="SEARCH">	
				
				<input id="submit" type="submit" name="btnDelete" value="DELETE" 
				onclick="return confirm('Are you sure you want to delete this student&lsquo;s record?')" >
				
				<input id="submit" type="submit" name="btnDeleteAll" value="DELETE ALL" 
				onclick="return confirm('Are you sure you want to delete all students records?')" >	
				
			</div>
		</form>	
		<form id="load" method="post" action="">
		</form>
	</div>

	<?php

		function showTable(){
			
			$con = mysqli_connect("localhost","root","");
			$database = mysqli_select_db($con,"studentsdb");
			
			$sql = "SELECT * from students";
			$result = mysqli_query($con, $sql);
			
			echo"<table id='table'>
			<tr>
					<th>USN</th>
					<th>FIRSTNAME</th>
					<th>LASTNAME</th>
					<th>GENDER</th>
					<th>AGE</th>
					<th>DATE OF BIRTH</th>
					<th>YEAR LEVEL</th>
					<th>PROGRAMMING LANGUAGES</th>
					<th>ORGANIZATION</th>
				</tr>";
			while  ($data = mysqli_fetch_array($result))
			{
				echo "<tr><td>".$data['USN']."<br></td>";
				echo "<td>".$data['Firstname']."<br></td>";
				echo "<td>".$data['Lastname']."<br></td>";
				echo "<td>".$data['Gender']."<br></td>";
				echo "<td>".$data['Age']."<br></td>";
				echo "<td>".$data['DOB']."<br></td>";
				echo "<td>".$data['Year']."<br></td>";
				echo "<td>".$data['Languages']."<br></td>";
				echo "<td>".$data['Organization']."<br></td></tr>";
			}
			echo "</table>";
			
			
		}


		$user='root';
		$pass='';
		$db='studentsdb';

		$conn=new mysqli('localhost', $user, $pass, $db);
		
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 	
			
		$sqlTable="CREATE TABLE IF NOT EXISTS students(
			USN bigint,
			Firstname varchar(35),
			Lastname varchar(35),
			Gender varchar (12),
			Age int,
			DOB date,
			Year varchar(12),
			Languages varchar(60),
			Organization varchar(60)
		)";
		
		if ($conn->query($sqlTable) === TRUE) {
			echo "<p>Table students created successfully</p>";
			} else {
			echo "Error creating table: " . $conn->error;
		}
		
	//LOAD DATA

		if (isset($_POST['btnLoadData'])){
			
			showTable();
			
			// $con = mysqli_connect("localhost","root","");
			// $database = mysqli_select_db($con,"studentsdb");
				
			// $sql = "SELECT * from students";
			// $result = mysqli_query($con, $sql);
			
			// echo"<table id='table'>
			// <tr>
					// <th>USN</th>
					// <th>FIRSTNAME</th>
					// <th>LASTNAME</th>
					// <th>GENDER</th>
					// <th>AGE</th>
					// <th>DATE OF BIRTH</th>
					// <th>YEAR LEVEL</th>
					// <th>PROGRAMMING LANGUAGES</th>
					// <th>ORGANIZATION</th>
				// </tr>";
			// while  ($data = mysqli_fetch_array($result))
			// {
				// echo "<tr><td>".$data['USN']."<br></td>";
				// echo "<td>".$data['Firstname']."<br></td>";
				// echo "<td>".$data['Lastname']."<br></td>";
				// echo "<td>".$data['Gender']."<br></td>";
				// echo "<td>".$data['Age']."<br></td>";
				// echo "<td>".$data['DOB']."<br></td>";
				// echo "<td>".$data['Year']."<br></td>";
				// echo "<td>".$data['Languages']."<br></td>";
				// echo "<td>".$data['Organization']."<br></td></tr>";
			// }
		}
		
	//REGISTER

		if (isset($_POST['btnRegister'])){
			$usn=$_POST['usn'];
			$firstName=$_POST['firstName'];
			$lastName=$_POST['lastName'];
			$gender=("");
			
			if(isset($_POST['gender'])){
				$gender=($_POST['gender']);
			}
			
			$age=$_POST['age'];
			$dateOfBirth=$_POST['dateOfBirth'];
			$year=$_POST['year'];
			
			$language;
			$languageList;
			
			if(isset($_POST['language'])){
				$language=($_POST['language']);
			}
			
			$lang=array();
			$org="";
			
			if(isset($_POST['language'])){
				foreach($language as $pl){
					$lang[]=$pl;
				}
				$languageList=implode(', ', $lang);
				
			}else{
				$languageList="None";
			}	
			
			if(!ctype_digit($usn) || strlen($usn) != 11 || empty($usn)){
				echo "<script type='text/javascript'>alert('USN should be an 11-digit number.');</script>";
				die;
			}
			
			if(!preg_match ("/^[a-zA-Z\s-]+$/",$firstName) || strlen($firstName) > 35 || empty($firstName)){
				echo "<script type='text/javascript'>alert('Firstname may contain letters, dashes, and spaces only (35 characters max).');</script>";
				die;
			}
			
			if(!preg_match ("/^[a-zA-Z\s-]+$/",$lastName) || strlen($lastName) > 35 || empty($lastName)){
				echo "<script type='text/javascript'>alert('Lastname may contain letters, dashes, and spaces only (35 characters max).');</script>";
				die;
			}
			
			if(empty($gender)){
				echo "<script type='text/javascript'>alert('Please select a gender.');</script>";
				die;
			}
			
			if(empty($age)){
				echo "<script type='text/javascript'>alert('Please select an age.');</script>";
				die;
			}
			
			if(empty($dateOfBirth)){
				echo "<script type='text/javascript'>alert('Please select a date of birth.');</script>";
				die;
			}
			
			if(empty($year)){
				echo "<script type='text/javascript'>alert('Please select a year level.');</script>";
				die;
			}
			
			if($year == "3rd Year" || $year == "4th Year"){
				if($age >= 15 && $age <= 20){
				$org="LDA";
				}
				elseif($age >= 21 && $age <= 25){
					$org="MSOC";
				}
				elseif($age >= 26 && $age <= 30){
					$org="IT Core";
				}
				elseif($age >= 31 && $age <= 35){
					$org="Sports Club";
					
				}else{
					$org="Age must be between 15 to 35 to qualify for organizations.";
				}
			}else{
				$org="Student must be atleast a 3rd Year student to qualify for organizations. ";
		
				if($age < 15 || $age > 35){
					$org .= "Age must be between 15 to 35 to qualify for organizations.";
				}
			}
				
			$con = mysqli_connect("localhost","root","");
			$database = mysqli_select_db($con,"studentsdb");
				
			$sql = "INSERT INTO students (usn,firstname,lastname,gender,age,dob,year,languages,organization)
			VALUES($usn,'$firstName','$lastName','$gender','$age','$dateOfBirth','$year','$languageList','$org')";
			$result = mysqli_query($con, $sql);
			
			showTable();
			
			// $sql = "SELECT * from students";
			// $result = mysqli_query($con, $sql);
			
			// echo"<table id='table'>
			// <tr>
					// <th>USN</th>
					// <th>FIRSTNAME</th>
					// <th>LASTNAME</th>
					// <th>GENDER</th>
					// <th>AGE</th>
					// <th>DATE OF BIRTH</th>
					// <th>YEAR LEVEL</th>
					// <th>PROGRAMMING LANGUAGES</th>
					// <th>ORGANIZATION</th>
				// </tr>";
			// while  ($data = mysqli_fetch_array($result))
			// {
				// echo "<tr><td>".$data['USN']."<br></td>";
				// echo "<td>".$data['Firstname']."<br></td>";
				// echo "<td>".$data['Lastname']."<br></td>";
				// echo "<td>".$data['Gender']."<br></td>";
				// echo "<td>".$data['Age']."<br></td>";
				// echo "<td>".$data['DOB']."<br></td>";
				// echo "<td>".$data['Year']."<br></td>";
				// echo "<td>".$data['Languages']."<br></td>";
				// echo "<td>".$data['Organization']."<br></td></tr>";
			// }
			// echo "</table>";
			
		}
		
	//UPDATE

		if (isset($_POST['btnUpdate'])){
			$usn=$_POST['usn'];
			$firstName=$_POST['firstName'];
			$lastName=$_POST['lastName'];
			$gender=("");
			
			if(isset($_POST['gender'])){
				$gender=($_POST['gender']);
			}
			
			$age=$_POST['age'];
			$dateOfBirth=$_POST['dateOfBirth'];
			$year=$_POST['year'];
			
			$language;
			$languageList;
			
			if(isset($_POST['language'])){
				$language=($_POST['language']);
			}
			
			$lang=array();
			$org="";
			
			if(isset($_POST['language'])){
				foreach($language as $pl){
					$lang[]=$pl;
				}
				$languageList=implode(', ', $lang);
				
			}else{
				$languageList="None";
			}	
			
			if(!ctype_digit($usn) || strlen($usn) != 11){
				echo "<script type='text/javascript'>alert('USN should be an 11-digit number.');</script>";
				die;
			}
			
			if($firstName){
				if(!preg_match ("/^[a-zA-Z\s-]+$/",$firstName) || strlen($firstName) > 35){
					echo "<script type='text/javascript'>alert('Firstname may contain letters, dashes, and spaces only (35 characters max).');</script>";
					die;
				}
			}	
			
			if($lastName){
				if(!preg_match ("/^[a-zA-Z\s-]+$/",$lastName) || strlen($lastName) > 35){
					echo "<script type='text/javascript'>alert('Lastname may contain letters, dashes, and spaces only (35 characters max).');</script>";
					die;
				}
			}	
			
			// if(empty($gender)){
				// echo "<script type='text/javascript'>alert('Please select a gender.');</script>";
				// die;
			// }
			
			// if(empty($age)){
				// echo "<script type='text/javascript'>alert('Please select an age.');</script>";
				// die;
			// }
			
			// if(empty($dateOfBirth)){
				// echo "<script type='text/javascript'>alert('Please select a date of birth.');</script>";
				// die;
			// }
			
			// if(empty($year)){
				// echo "<script type='text/javascript'>alert('Please select a year level.');</script>";
				// die;
			// }
			
			if($year || $age){
				if($year && $age){
					if($year == "3rd Year" || $year == "4th Year"){
						if($age >= 15 && $age <= 20){
						$org="LDA";
						}
						elseif($age >= 21 && $age <= 25){
							$org="MSOC";
						}
						elseif($age >= 26 && $age <= 30){
							$org="IT Core";
						}
						elseif($age >= 31 && $age <= 35){
							$org="Sports Club";
							
						}
						else{
							$org="Age must be between 15 to 35 to qualify for organizations.";
						}
					}	
				}else{
					if($year && ($year != "3rd Year" || $year != "4th Year")){
					$org="Student must be atleast a 3rd Year student to qualify for organizations. ";
					}
					if($age){
						if($age < 15 || $age > 35){
							$org .= "Age must be between 15 to 35 to qualify for organizations.";
						}
					}
				}
			}	
			$con = mysqli_connect("localhost","root","");
			$database = mysqli_select_db($con,"studentsdb");
				
			$sql = "UPDATE students SET firstname=IF(LENGTH('$firstName')=0,firstname,'$firstName'),
										lastname=IF(LENGTH('$lastName')=0,lastname,'$lastName'),
										gender=IF(LENGTH('$gender')=0,gender,'$gender'),
										age=IF(LENGTH('$age')=0,age,'$age'),
										dob=IF(LENGTH('$dateOfBirth')=0,dob,'$dateOfBirth'),
										year=IF(LENGTH('$year')=0,year,'$year'),
										languages=IF(LENGTH('$languageList')=0,languages,'$languageList'),
										organization=IF(LENGTH('$org')=0,organization,'$org')
					WHERE usn='$usn'";
			
			$result = mysqli_query($con, $sql);
			
			//Show table
			
			showTable();
			
			// $sql = "SELECT * from students";
			// $result = mysqli_query($con, $sql);
			
			// echo"<table id='table'>
			// <tr>
					// <th>USN</th>
					// <th>FIRSTNAME</th>
					// <th>LASTNAME</th>
					// <th>GENDER</th>
					// <th>AGE</th>
					// <th>DATE OF BIRTH</th>
					// <th>YEAR LEVEL</th>
					// <th>PROGRAMMING LANGUAGES</th>
					// <th>ORGANIZATION</th>
				// </tr>";
			// while  ($data = mysqli_fetch_array($result))
			// {
				// echo "<tr><td>".$data['USN']."<br></td>";
				// echo "<td>".$data['Firstname']."<br></td>";
				// echo "<td>".$data['Lastname']."<br></td>";
				// echo "<td>".$data['Gender']."<br></td>";
				// echo "<td>".$data['Age']."<br></td>";
				// echo "<td>".$data['DOB']."<br></td>";
				// echo "<td>".$data['Year']."<br></td>";
				// echo "<td>".$data['Languages']."<br></td>";
				// echo "<td>".$data['Organization']."<br></td></tr>";
			// }
			// echo "</table>";
			
		}
		
	//DELETE

		if (isset($_POST['btnDelete'])){
			
			$usn = $_POST['usn'];
			
			// if(!ctype_digit($usn) || strlen($usn) != 11 || empty($usn)){
				// echo "<script type='text/javascript'>alert('USN should be an 11-digit number.');</script>";
				// die;
			// }
				
			$con = mysqli_connect("localhost","root","");
			$database = mysqli_select_db($con,"studentsdb");
				
			$sql = "DELETE FROM students WHERE usn=$usn";
			
			$result = mysqli_query($con, $sql);
			
			//Show table
			
			showTable();
			
			// $sql = "SELECT * from students";
			// $result = mysqli_query($con, $sql);
			
			// echo"<table id='table'>
			// <tr>
					// <th>USN</th>
					// <th>FIRSTNAME</th>
					// <th>LASTNAME</th>
					// <th>GENDER</th>
					// <th>AGE</th>
					// <th>DATE OF BIRTH</th>
					// <th>YEAR LEVEL</th>
					// <th>PROGRAMMING LANGUAGES</th>
					// <th>ORGANIZATION</th>
				// </tr>";
			// while  ($data = mysqli_fetch_array($result))
			// {
				// echo "<tr><td>".$data['USN']."<br></td>";
				// echo "<td>".$data['Firstname']."<br></td>";
				// echo "<td>".$data['Lastname']."<br></td>";
				// echo "<td>".$data['Gender']."<br></td>";
				// echo "<td>".$data['Age']."<br></td>";
				// echo "<td>".$data['DOB']."<br></td>";
				// echo "<td>".$data['Year']."<br></td>";
				// echo "<td>".$data['Languages']."<br></td>";
				// echo "<td>".$data['Organization']."<br></td></tr>";
			// }
			// echo "</table>";
		}
		
	//DELETE ALL

		if (isset($_POST['btnDeleteAll'])){
			
			$usn = $_POST['usn'];
			
			// if(!ctype_digit($usn) || strlen($usn) != 11 || empty($usn)){
				// echo "<script type='text/javascript'>alert('USN should be an 11-digit number.');</script>";
				// die;
			// }
				
			$con = mysqli_connect("localhost","root","");
			$database = mysqli_select_db($con,"studentsdb");
				
			$sql = "truncate students";
			
			$result = mysqli_query($con, $sql);
		}

	//SEARCH
		
		if (isset($_POST['btnSearch'])){
			$usn=$_POST['usn'];
		
			if(!ctype_digit($usn) || strlen($usn) != 11 || empty($usn)){
				echo "<script type='text/javascript'>alert('USN should be an 11-digit number.');</script>";
				die;
			}
			
			$con = mysqli_connect("localhost","root","");
			$database = mysqli_select_db($con,"studentsdb");
				
			$sql = "SELECT * FROM students WHERE usn='$usn'";
			
			$result = mysqli_query($con, $sql);
			
			echo"<table id='table'>
			<tr>
					<th>USN</th>
					<th>FIRSTNAME</th>
					<th>LASTNAME</th>
					<th>GENDER</th>
					<th>AGE</th>
					<th>DATE OF BIRTH</th>
					<th>YEAR LEVEL</th>
					<th>PROGRAMMING LANGUAGES</th>
					<th>ORGANIZATION</th>
				</tr>";
			while  ($data = mysqli_fetch_array($result))
			{
				echo "<tr><td>".$data['USN']."<br></td>";
				echo "<td>".$data['Firstname']."<br></td>";
				echo "<td>".$data['Lastname']."<br></td>";
				echo "<td>".$data['Gender']."<br></td>";
				echo "<td>".$data['Age']."<br></td>";
				echo "<td>".$data['DOB']."<br></td>";
				echo "<td>".$data['Year']."<br></td>";
				echo "<td>".$data['Languages']."<br></td>";
				echo "<td>".$data['Organization']."<br></td></tr>";
			}
			echo "</table>";
			
				
		}
		
		$conn->close();
	?>

	<!-- REGISTRATION FORM -->
	
	<p id="created">Created by Leandro J. Esparrago</p>

</body>
</html>	
		
		
