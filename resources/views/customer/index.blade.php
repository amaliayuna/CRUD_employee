apakah ini keluar bro ?
<br>
@foreach ($customer as $customerlist)
{{$customerlist->customer_id}}
{{$customerlist->name}}
{{$customerlist->addres}}
<a href="/Customer/{{ $customerlist->customer_id}}">show</a>
</br>
<a href="/Customer/{{ $customerlist->customer_id}}">edit</a>
<br />
  <form action="/Customer/{{$customerlist->customer_id}}" method="post">
    {{csrf_field()}}
    {{method_field('DELETE')}}
    <button>X</button>
  </form>
@endforeach
<a href="{{url('Customer/create') }}">
  pencet saya dong!
</a>
