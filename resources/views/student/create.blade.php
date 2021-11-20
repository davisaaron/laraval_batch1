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
  <option value="1"{{(old('grade') === '1') ? 'Selected' : ''}}>1</option>
  <option value="2"{{(old('grade') === '2') ? 'Selected' : ''}}>2</option>
  <option value="3"{{(old('grade') === '3') ? 'Selected' : ''}}>3</option>
  <option value="4"{{(old('grade') === '4') ? 'Selected' : ''}}>4</option>
  </select><br><br>

  <label for="address">Address</label>
	<textarea id="address" name="address" value="">{{old('address')}}</textarea><br><br>

  <label for="Subjects">Subjects</label><br>
  <input type="checkbox" id="tamil" name="subject[]" value="Tamil" {{ (is_array(old('subject')) && in_array('Tamil' , old('subject'))) ? ' checked' : '' }}>
  <label for="tamil"> Tamil</label><br>
  <input type="checkbox" id="maths" name="subject[]" value="Maths" {{ (is_array(old('subject')) && in_array('Maths', old('subject'))) ? ' checked' : '' }}>
  <label for="maths"> Maths</label><br>
  <input type="checkbox" id="english" name="subject[]" value="English" {{ (is_array(old('subject')) && in_array('English', old('subject'))) ? ' checked' : '' }}>
  <label for="english"> English</label><br><br>

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
