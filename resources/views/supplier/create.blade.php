ini create dari view
<form method="POST" action="{{route('Supplier.store')}}" >
  {{csrf_field()}}

  <input type="text" name="sup_id"/>
  <input type="text" name="sup_name"/>
  <input type="text" name="sup_address" />
  <input type="submit"
          name="sbm_save"
          id= "sbm_save"
          value="save"> 

</form>
