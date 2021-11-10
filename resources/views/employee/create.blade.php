<!DOCTYPE html>
<html>
<body>



<form action="{{route('employees.index')}}" method=post>
    @csrf
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname" value=""><br>
  <label for="lname">Last name:</label>
  <input type="text" id="lname" name="lname" value=""><br>
  <label for="dob">DOB</label>
  <input type="text" id="dob" name="dob" value=""><br>
  <label for="salary">Salary</label>
  <input type="salary" id="salary" name="salary" value=""><br><br>
  <input type="submit" value="Submit">
</form> 



</body>
</html>
