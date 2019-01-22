ini halamman edit
<br />

@foreach ($employee as $employeelist)
<form action="{{route('Employee.update',$employeelist->employee_id)}}" method="post">
  {{ csrf_field()}}
      {{method_field('PUT')}}

<input type="text" name="emp_id" value="{{$employeelist->employee_id}}"/>
<br />
<input type="text" name="emp_name" value="{{$employeelist->employee_name}}"/> <br />
<input type="text" name="emp_address" value="{{$employeelist->employee_address}}"/> <br />
<input type="text" name="emp_notelp" value="{{$employeelist->employee_phone_number}}"/> <br />
@endforeach
<button type="submit">Submit</button>
<a href="{{url('Employee') }}">
  index
</a>
