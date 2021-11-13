<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Edit Students</h1>
<form action="{{route('students.update',$student->id)}}" method=post>
    @csrf
    @method('put')
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname" value="{{$student->first_name}}" ><br><br>
  
  <label for="lname">Last name:</label>
  <input type="text" id="lname" name="lname" value="{{$student->last_name}}"><br><br>
  
  <label for="gender">Gender</label><br>
  <input type="radio" name="gender"  id="male" value="male"{{ $student->gender == 'male' ? 'checked' : ''}}> <label for="male">Male</label>
	<input type="radio"  name="gender" id="female" value="female"{{ $student->gender == 'female' ? 'checked' : ''}}> <label for="female">Female</label><br><br>
  
  <label for="grade">Grade</label>
  <select name="grade" id="grade">
  <option value="1"{{($student->grade === '1') ? 'Selected' : ''}}>1</option>
  <option value="2"{{($student->grade === '2') ? 'Selected' : ''}}>2</option>
  <option value="3"{{($student->grade === '3') ? 'Selected' : ''}}>3</option>
  <option value="4"{{($student->grade === '4') ? 'Selected' : ''}}>4</option>
  </select><br><br>

  <label for="address">Address</label>
	<textarea id="address" name="address" value="">{{$student->address}}</textarea><br><br>

  <label for="subject">Subject</label><br>
  <input type="checkbox" id="subject1" name="subject1" value="maths">
  <label for="subject1"> Maths</label><br>
  <input type="checkbox" id="subject2" name="subject2" value="science">
  <label for="subject1"> Science</label><br>
  <input type="checkbox" id="subject3" name="subject3" value="history">
  <label for="subject1"> History</label><br><br>

  <label for="dob">DOB :</label>
  <input type="date" id="dob" name="dob" value="{{$student->dob}}"><br><br>
  
  <label for="email">Email :</label>
  <input type="email" id="email" name="email" value="{{$student->email}}"><br><br>

  <label for="phone">phone number:</label>
<input type="tel" id="phone" name="phone" value="{{$student->mobile}}"><br><br>

  <input type="submit" value="Update">
</form> 
</body>
</html>
