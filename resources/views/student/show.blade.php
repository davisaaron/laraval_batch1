<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ShowStudents</h1>
    
    <table border="1">
        
    
       <tr><td>First_Name</td><td>{{$student->first_name}}</td> </tr>
       <tr><td>Last_Name</td><td>{{$student->last_name}}</td> </tr>
       <tr><td>Gender</td><td>{{$student->gender}}</td> </tr>
       <tr><td>Grade</td><td>{{$student->grade}}</td> </tr>
       <tr><td>Address</td><td>{{$student->address}}</td> </tr>
       <tr><td>Subject</td><td>{{$student->subject}}</td> </tr>
       <tr><td>DOB</td><td>{{$student->dob}}</td> </tr>
       <tr><td>Email</td><td>{{$student->email}}</td> </tr>
       <tr><td>Mobile</td><td>{{$student->mobile}}</td> </tr>
      
       
    </tr>
    
  
    </table>
    <br><br>

      

    <button><a href="{{route('students.index')}}">Back</a></button><br><br>
</body>
</html>