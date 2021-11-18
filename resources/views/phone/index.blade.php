<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=h, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>phone List</h1>
   <button><a href="{{route('phones.create')}}">Create New</a></button><br><br>
    <table border="1">
        <th>ID</th>
        <th>Phone Number</th>
        <th colspan="3">Action</th>
    @foreach($phone as $phone )
    <tr>
        <td>{{$phone->id}}</td> 
        <td>{{$phone->phone_no}}</td> 
    
        <td><a href="{{route('phones.show',$phone->id)}}">show</a></td>
        <td><a href="{{route('phones.edit',$phone->id)}}">Edit</a></td>
        <td>
            <form action="{{route('phones.destroy',$phone->id)}}" method="post">
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