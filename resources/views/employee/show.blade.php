
<br>
@foreach ($employee as $employeelist)
{{$employeelist->employee_id}}
{{$employeelist->employee_name}}
{{$employeelist->employee_address}}
{{$employeelist->employee_phone_number}}
<a href="/Employee/{{ $employeelist->employee_id}}">show</a>
</br>

@endforeach
<a href="{{url('Employee/create') }}">
  pencet saya dong!
</a>
