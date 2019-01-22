
<br>
@foreach ($customer as $customerlist)
{{$customerlist->customer_id}}
{{$customerlist->name}}
{{$customerlist->addres}}
<a href="/Customer/{{ $customerlist->customer_id}}">show</a>
</br>
<!..http://localhost:8000/Customer/3..>

@endforeach
<a href="{{url('Customer/create') }}">
  pencet saya dong!
</a>
