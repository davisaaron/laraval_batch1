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
  @if($errors->any())
  <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
  @endif
  <div class="row" style="margin-top: 20px;">
        <div class="col-8">
             <h1 style="text-align: center">Students Create</h1>
        </div>
        <div class="col-2">
            <a href="{{ route('students.index') }}" class="btn btn-info btn-lg" style="margin-left: 120px;">Back</a>
        </div>
    </div><br>

<form action="{{route('students.store')}}" method=post>
    @csrf
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname" value="{{old('fname')}}"><br><br>

  <label for="lname">Last name:</label>
  <input type="text" id="lname" name="lname" value="{{old('lname')}}"><br><br>

  <label for="gender">Gender</label><br>
  <input type="radio" name="gender"  id="male" value="male" {{(old('gender') == 'male') ? 'checked' : ''}}> <label for="male">Male</label>
	<input type="radio" name="gender"  id="female" value="female" {{(old('gender') == 'female') ? 'checked' : ''}}> <label for="female">Female</label><br><br>

  <label for="grade">Grade </label>
  <select name="grade" id="grade" >
  @foreach($grades as $grade)
  <option value="{{$grade->name}}">{{$grade->name}}</option>
  @endforeach
  </select>
  <button><a href="{{route('grades.create')}}">Create Grade</a></button><br><br>

  <label for="address">Address</label>
	<textarea id="address" name="address" value="">{{old('address')}}</textarea><br><br>

  <label for="Subjects">Subjects</label>
  <button><a href="{{route('subjects.create')}}">Create Subjects</a></button>
  <br>
  @foreach ($subjects as $subject )
  <input type="checkbox" id="subject" name="subject[]" value="{{$subject->name}}" >
  <label for="subject"> {{$subject->name}}</label><br>
  @endforeach
<br><br>


  <label for="dob">DOB :</label>
  <input type="date" id="dob" name="dob" ><br><br>

  <label for="email">Email :</label>
  <input type="email" id="email" name="email" value="{{old('email')}}"><br><br>

  <label for="phone">phone number:</label>
<input type="tel" id="phone" name="phone" value="{{old('phone')}}"><br><br>

  <input type="submit"   class="btn btn-primary" value="Submit">
</form>
</body>
</html>
