ni create dari view
<form method="POST" action="{{route('Employee.store')}}" >
  {{csrf_field()}}

  <input type="text" name="emp_id"/> <br />
  <input type="text" name="emp_name"/> <br />
  <input type="text" name="emp_address" /><br />
  <input type="text" name="emp_notelp" /><br />
  <input type="submit"
          name="sbm_save"
          id= "sbm_save"
          value="save"> />

</form>
