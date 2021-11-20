<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=h, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</head>
<body>
   
 

    <div class="container">
        <div class="row">
            <div class="col-md-10">
            <h1 style="margin-top: 20px;">All Students</h1>
            </div>
            
            <div class="col-md-2">
                <a href="{{ route('students.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing" style="margin-top: 20px;">Create Students</a>
        
            </div>       
        </div>
    
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
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

                    </thead>
                    <tbody>
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
                                <!-- //<input type="submit" value="Delete"> -->
                                <button type="submit" class="btn btn-danger btn-sm" onclick="if(!confirm('Are you sure want to delete this record?')){ return false; }">delete</button>
                            </form>
                        </td>
                    
                    @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>