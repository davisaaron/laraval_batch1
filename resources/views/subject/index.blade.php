<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=h, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>subject List</h1>
   <button><a href="{{route('subjects.create')}}">Create New</a></button><br><br>
    <table border="1">
        <th>ID</th>
        <th>subject Name</th>
        <th colspan="3">Action</th>
    @foreach($subject as $subject )
    <tr>
        <td>{{$subject->id}}</td> 
        <td>{{$subject->name}}</td> 
    
        <td><a href="{{route('subjects.show',$subject->id)}}">show</a></td>
        <td><a href="{{route('subjects.edit',$subject->id)}}">Edit</a></td>
        <td>
            <form action="{{route('subjects.destroy',$subject->id)}}" method="post">
                @csrf
                @method('delete')
                <!-- //<input type="submit" value="Delete"> -->
                <button type="submit" class="btn btn-danger btn-sm" onclick="if(!confirm('Are you sure want to delete this record?')){ return false; }">delete</button>
            </form>
        </td>
    
    @endforeach
    </table>
</body>
</html>