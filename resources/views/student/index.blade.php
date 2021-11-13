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
   <button><a href="{{route('students.create')}}">Create New</a></button><br><br>
    <table border="1">
        <th>ID</th>
        <th>First_Name</th>
        <th>Last_Name</th>
        <th>Gender</th>
        <th>Grade</th>
        <th>Address</th>
        <th>Subject</th>
        <th>DOB</th>
        <th>Email</th>
        <th>PhoneNumber</th>
        <th colspan="3">Action</th>
    @foreach($student as $student )
    <tr>
        <td>{{$student->id}}</td> 
        <td>{{$student->first_name}}</td> 
        <td>{{$student->last_name}}</td> 
        <td>{{$student->gender}}</td>
        <td>{{$student->grade}}</td>
        <td>{{$student->address}}</td> 
        <td>{{$student->subject}}</td> 
        <td>{{$student->dob}}</td> 
        <td>{{$student->email}}</td>
        <td>{{$student->mobile}}</td>
        <td><a href="{{route('students.show',$student->id)}}">show</a></td>
        <td><a href="{{route('students.edit',$student->id)}}">Edit</a></td>
        <td>
            <form action="{{route('students.destroy',$student->id)}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="Delete">
            </form>
        </td>
    
    @endforeach
    </table>
</body>
</html>