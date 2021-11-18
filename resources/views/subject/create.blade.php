<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
 
  
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
  
<form action="{{route('subjects.store')}}" method=post>
    @csrf
  <label for="sname">Subject Name:</label>
  <input type="text" id="sname" name="sname" value="{{old('name')}}"><br><br>
  
  
  <input type="submit"   class="btn btn-primary" 
  
  value="Submit">
</form> 
</body>
</html>
