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
        
    
       <tr><td>subject Name</td><td>{{$subject->name}}</td> </tr>
       
      
       
    </tr>
    
  
    </table>
    <br><br>

      

    <button><a href="{{route('subjects.index')}}">Back</a></button><br><br>
</body>
</html>