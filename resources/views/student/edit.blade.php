<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <style>

        form{
          width: 70%;
          border-radius: 5px;
          background-color: #f2f2f2;
          padding: 16px;
          margin:auto;
        }
    </style>
</head>
<body>
<div class="row" style="margin-top: 20px;">
        <div class="col-8">
             <h1 style="text-align: center">Student Edit</h1>
        </div>
        <div class="col-2">
            <a href="{{ route('students.index') }}" class="btn btn-info btn-lg" style="margin-left: 120px;">Back</a>
        </div>
    </div><br>

  @if($errors->any())
  <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
  @endif
<form action="{{route('students.update',$student->id)}}" method=post>
    @csrf
    @method('put')
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname" value="{{$student->first_name}}" ><br><br>

  <label for="lname">Last name:</label>
  <input type="text" id="lname" name="lname" value="{{$student->last_name}}"><br><br>

  <label for="gender">Gender</label><br>
  <input type="radio" name="gender"  id="male" value="male"{{ $student->gender == 'male' ? 'checked' : ''}}> <label for="male">Male</label>
	<input type="radio"  name="gender" id="female" value="female"{{ $student->gender == 'female' ? 'checked' : ''}}> <label for="female">Female</label><br><br>

  <label for="grade">Grade</label>
  <select name="grade" id="grade">
  @foreach($grades as $grade)
  <option value="{{$grade->name}}"{{($student->grade === "$grade->name") ? 'Selected' : ''}}>{{$grade->name}}</option>

  @endforeach
</select><br><br>

  <label for="address">Address</label>
	<textarea id="address" name="address" value="">{{$student->address}}</textarea><br><br>
  {{-- {{$subjects = json_decode($student->subject);}}  --}}
  <label for="Subjects">Subjects</label><br>
  @foreach ($subjects as $subject)
  <input type="checkbox" id="subject" name="subject[]" value="{{$subject->name}}" {{ in_array("$subject->name", json_decode($student->subject )) ? 'checked' : ''}}>
  <label for="subject"> {{$subject->name}}</label><br>
  @endforeach
            {{-- <input type="checkbox" id="tamil" name="subject[]" value="Tamil" {{ in_array("Tamil", json_decode($student->subject)) ? 'checked' : ''}}>
            <label for="tamil"> Tamil</label><br>
            <input type="checkbox" id="maths" name="subject[]" value="Maths" {{ in_array("Maths", json_decode($student->subject)) ? 'checked' : ''}}>
            <label for="maths"> Maths</label><br>
            <input type="checkbox" id="english" name="subject[]" value="English" {{ in_array("English", json_decode($student->subject)) ? 'checked' : ''}}>
            <label for="english"> English</label><br><br> --}}

  <label for="dob">DOB :</label>
  <input type="date" id="dob" name="dob" value="{{$student->dob}}"><br><br>

  <label for="email">Email :</label>
  <input type="email" id="email" name="email" value="{{$student->email}}"><br><br>

  <label for="phone">phone number:</label>
<input type="tel" id="phone" name="phone" value="{{$student->mobile}}"><br><br>

  <input type="submit" value="Update">
  <button><a href="{{route('students.index')}}">Back</a></button><br><br>
</form>
</body>
</html>
