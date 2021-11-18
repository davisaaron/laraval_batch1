<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Edit Grade</h1>
  @if($errors->any())
  <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
  @endif
<form action="{{route('subjects.update',$subject->id)}}" method=post>
    @csrf
    @method('put')
  <label for="sname">Grade name:</label>
  <input type="text" id="sname" name="sname" value="{{$subject->name}}" ><br><br>
  
  

  <input type="submit" value="Update">
  <button><a href="{{route('subjects.index')}}">Back</a></button><br><br>
</form> 
</body>
</html>
