<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit page</title>
</head>
<body>
  {{-- {{dd($detals->name)}} --}}
    <h2>Update File given for user</h2>
   <form method="POST" action="{{ url('update/'.$detals->id)}}">
    @csrf
    @method("PUT")
    Name:<input type="text" name="name" value={{$detals->name}}>
    Class:<input type="text" name="class" value={{$detals->class}}>
    Age:<input type="number" name="age" value={{$detals->age}}>
    <button type="submit">Update</button>
</form>
</body>
</html>