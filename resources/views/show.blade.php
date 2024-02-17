<h2><a href="{{ url('list')}}">Create User</a></h2>
<table border="1">
   <thead>
<tr>
   <td>S No.</td>
   <td>Name</td>
   <td>Class</td>
   <td>Age</td>
   <td>Edit</td> 
   <td>Delete</td>
</tr>   
</thead><tbody><tr>
@foreach( $students as $student ) 
@php
//  dd($students)   
$encrypted = Crypt::encrypt($student['id'])
@endphp
<div class="card mb-3" >
   <h5 class="card-header">
      <td>{{$loop->iteration}}</td>
      <td>{{$student['name']}}</td>
      <td>{{$student['class']}}</td>
      <td>{{$student['age']}}</td>
      <td><a href="edit/{{$encrypted }}/{{rand(10,50)}}" >Edit</a></td>
      <td><form action="{{ url('destroy/'.$student['id']) }}" method="POST">
         @csrf
         @method("DELETE")
         <button value="{{$student['id']}}" >Delete</button></h5>
      </form></td>
      
</div>
@endforeach
</tbody></table>