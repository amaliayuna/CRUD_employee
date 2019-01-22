<br>
@foreach ($supplier as $supplierlist)
{{$supplierlist->supplier_id}}
{{$supplierlist->suplier_name}}
{{$supplierlist->supplier_address}}
</br>
@endforeach
<a href="{{url('Supplier/create') }}">
  pencet saya dong!
</a>
