<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit Student</h1>
<form action="{{route('employees.update',$employee->id)}}" method=post>
    @csrf
    @method('put')
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname" value="{{$employee->first_name}}"><br><br>
  <label for="lname">Last name:</label>
  <input type="text" id="lname" name="lname" value="{{$employee->last_name}}"><br><br>
  <label for="dob">DOB :</label>
  <input type="date" id="dob" name="dob" value="{{$employee->dob}}"><br><br>
  <label for="salary">Salary :</label>
  <input type="salary" id="salary" name="salary" value="{{$employee->salary}}"><br><br><br>
  <input type="submit" value="Update">
</form> 

</body>
</html>