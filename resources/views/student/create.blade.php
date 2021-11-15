<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form action="{{route('students.store')}}" method=post>
    @csrf
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname" ><br><br>
  
  <label for="lname">Last name:</label>
  <input type="text" id="lname" name="lname" ><br><br>
  
  <label for="gender">Gender</label><br>
  <input type="radio" name="gender"  id="male" value="male"> <label for="male">Male</label>
	<input type="radio" name="gender"  id="female" value="female"> <label for="female">Female</label><br><br>
  
  <label for="grade">Grade </label>
  <select name="grade" id="grade">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  </select><br><br>

  <label for="address">Address</label>
	<textarea id="address" name="address"></textarea><br><br>

  <label for="Subjects">Subjects</label><br>
  <input type="checkbox" id="tamil" name="subject[]" value="Tamil">
  <label for="tamil"> Tamil</label><br>
  <input type="checkbox" id="maths" name="subject[]" value="Maths">
  <label for="maths"> Maths</label><br>
  <input type="checkbox" id="english" name="subject[]" value="English">
  <label for="english"> English</label><br><br>

  <label for="dob">DOB :</label>
  <input type="date" id="dob" name="dob" value=""><br><br>
  
  <label for="email">Email :</label>
  <input type="email" id="email" name="email"><br><br>

  <label for="phone">phone number:</label>
<input type="tel" id="phone" name="phone" ><br><br>

  <input type="submit" value="Submit">
</form> 
</body>
</html>
