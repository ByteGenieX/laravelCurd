<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curd</title>
</head>
<body>
    
    @if($errors->any())
        <div class="denger">
            @foreach($errors->all() as $error)
                <span style="color:red">{{$error}}<br></span> 
            @endforeach
        </div>
    @endif
    <table>
    <form method="POST" action="{{ route('store') }}">
        @csrf
        <tr><td>Name</td><td><input type="text" name="name" placeholder="Enter you Name" value="{{old('name')}}"></td></tr>
        <tr><td>Class</td><td><input type="text" name="class" placeholder="Enter your class" value="{{old('class')}}"></td></tr>
        <tr><td>Age</td><td><input type="number" name="age" placeholder="Enter your Age" value="{{old('age')}}"></td></tr>
        <tr><td rowspan=2><input type="submit" name="submit"></td></tr> 
    </form>
    </table>
</body>
</html>