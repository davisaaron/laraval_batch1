<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=h, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Employee List</h1>
   
    <table border="1">
        <th>ID</th>
        <th>First_Name</th>
        <th>Last_Name</th>
        <th>DOB</th>
        <th>Salary</th>
        <th colspan="3">Action</th>
    @foreach($employee as $employee )
    <tr>
        <td>{{$employee->id}}</td> 
        <td>{{$employee->first_name}}</td> 
        <td>{{$employee->last_name}}</td> 
        <td>{{$employee->dob}}</td>
        <td>{{$employee->salary}}</td>
        <td><a href="{{route('employees.show',$employee->id)}}">show</a></td>
        <td><a href="{{route('employees.edit',$employee->id)}}">Edit</a></td>
        <td><a href="{{route('employees.show',$employee->id)}}">Delete</a></td>
    </tr>
    
    @endforeach
    </table>
</body>
</html>