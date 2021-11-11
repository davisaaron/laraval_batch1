<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Show Employee</h1>
    
    <table border="1">
        
    
       <tr><td>First_Name</td><td>{{$employee->first_name}}</td> </tr>
       <tr><td>last_Name</td><td>{{$employee->last_name}}</td> </tr>
       <tr><td>DOB</td><td>{{$employee->dob}}</td> </tr>
       <tr><td>Salary</td><td>{{$employee->salary}}</td> </tr>
      
       
    </tr>
    
  
    </table>
</body>
</html>