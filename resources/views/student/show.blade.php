<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</head>
<body>

    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-10">
                <h2 style="color: blueviolet"><b> Student Profile </b></h2>
            </div>
            <div class="col-md-2">
                <a class="btn btn-primary btn-lg" href="{{ route('students.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 50px;">
    <div class="row">
        <div class="col-md-8">
            <div class="card" >
                <div class="row g-0">
                    
                    <div class="col-md-8">
                        <div class="card-body">
                        <h4 class="card-title">Student Profile</h4>
                        <h6>First Name: {{$student->first_name}}</h6>
                        <h6>Last Name:{{$student->last_name}}</h6>
                        <h6>Gender:{{$student->gender}}</h6>
                        <h6>Date of birth:{{$student->dob}}</h6>
                        <h6>Grade: {{$student->grade}}</h6>
                        <h6>Address: {{$student->address}}</h6>
                        <h6>Email Address: {{$student->email}}</h6>
                        <h6>Mobile No: {{$student->mobile}}</h6>
                        <h6>Subjects: {{$student->subject}}</h6>
                        </div>
                        
                    </div>
                    <div class="row">
                    <div class="col-sm-6">
                        <a href="{{ route('students.edit',$student->id) }}" class="btn btn-success btn-sm">Edit</a>
                      
                    </div>
                    <div class="col-sm-6">
                       
                        <form action="{{ route('students.destroy',$student->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm btn-block" onclick="if(!confirm('Are you sure want to delete this record?')){ return false; }">Delete</button>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="well">
                <!-- <dl class="dl-horizontal">
                    <label>Created At:</label>
                    <p>{{ date('M j,Y h:ia', strtotime($student->created_at)) }}</p>
                </dl>
                <dl class="dl-horizontal">
                    <label>Last Updated:</label>
                    <p>{{ date('M j,Y h:ia', strtotime($student->updated_at)) }}</p>
                </dl> -->
                
                
            </div>
        </div>
    </div>
    </div>
</body>
</html>