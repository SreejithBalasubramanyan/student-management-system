<html>

<head>
		
<title>form-submission</title>

<link rel="stylesheet" href="original.css"/>

</head>

	
<body>
	   
<form action="insert.php" method="POST" enctype="multipart/form-data">
		
<table id="form">
		
<caption> New User? Sign Up</caption>
		
<tr>
		
<td>Name</td>
		
<td><input type="text" placeholder="Firstname" name="name"></td>
		

		
</tr>

<tr>
      <td> Occupation </td><td colspan="2">	
      
<table>
     
 <tr>   
	   
<td>Staff</td><td style="width:80px;">
<input type="radio" name="occup" value="staff"></td>
	  
 <td>Student</td><td style="width:30px;">
<input type="radio" name="occup" value="student"></td>
		
</tr>
		
</table>
		
</td>	   
	   
</tr>	   
<tr>
      <td> Gender </td><td colspan="2">	
      
<table>
     
 <tr>   
	   
<td>Male</td><td style="width:80px;">
<input type="radio" name="gender" value="M"></td>
	  
 <td>Female</td><td style="width:30px;">
<input type="radio" name="gender" value="F"></td>
		
</tr>
		
</table>
		
</td>	   
	   
</tr>					
		
<tr>
		
<td>DoB</td>
		
<td colspan="2"><input type="date" placeholder="yyyy-mm-dd" name="dob"/></td>
		
</tr>
		
<tr>
		
<td>Email</td>
		
<td><input type="email" placeholder="youremail@hostname"name="email"/></td>

		
</tr>
		
<tr>
		
<td>Mob</td>
		
<td><input type="tel" name="mob"/></td>
		
</tr>
		
<tr>
		
<td>Branch</td>
	 	
<td>   <select name="branch">
  		
<option value="CSE">CSE</option>
  		
<option value="EEE">EEE</option>
  		
<option value="ME">ME</option>
  		
<option value="EC">EC</option>
  		
<option value="IT">IT</option>
		
</select> 
		
</td>
		
<td>Semester
	   
<select name="semester">
  		
<option value="s1">S1</option>
  		
<option value="s2">S2</option>
  		
<option value="s3">S3</option>
  		
<option value="s4">s4</option>
  		
<option value="s5">S5</option>
    	
<option value="s6">S6</option>
  		
<option value="s7">S7</option>
  		
<option value="s8">S8</option>	
		
</select> 
		
</td>	
		
</tr>
		
<tr>
		
<td>address</td>
		
<td><textarea rows="5" cols="27" placeholder="address" name="address"></textarea></td>
		
</tr>	
		
<tr>	
		
<td>image</td>
		
<td><input type="file" name="image" accept="image/*" /></td>
		
</tr>
		
<tr>
		
<td></td>
		
<td><input type="submit" value="Submit" name="submit"/></td>
		
</tr>			
		

</table>
		
</form>
	
</body>
</html>		