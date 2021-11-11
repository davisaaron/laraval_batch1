<!DOCTYPE html>
<html>
<body>



<form action="{{route('employees.store')}}" method=post>
    @csrf
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname" value=""><br><br>
  <label for="lname">Last name:</label>
  <input type="text" id="lname" name="lname" value=""><br><br>
  <label for="dob">DOB :</label>
  <input type="date" id="dob" name="dob" value=""><br><br>
  <label for="salary">Salary :</label>
  <input type="salary" id="salary" name="salary" value=""><br><br><br>
  <input type="submit" value="Submit">
</form> 



</body>
</html>
