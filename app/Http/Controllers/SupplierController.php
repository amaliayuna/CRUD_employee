<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;

class SupplierController extends Controller
{
  //buat fungsi baru untuk index
  function index(){
    //echo "asaoy geboyu";
    $supplier = Supplier::get(['supplier_id','suplier_name','supplier_address']);
    //var_dump($supplier);
    return view('supplier.index',compact('supplier'));
  }
  function create() {
    //echo "telo";
    //url supplier/create >_<
    return view('supplier.create');
  }
  public function store (Request $request){
    //echo "hmmmmm";
    $supId = $request->input('sup_id');
    $supName = $request->input('sup_name');
    $supAddress = $request->input('sup_address');

    echo $supId. "<br />".
    $supName. "<br />".
    $supAddress;

    Supplier::create([
    'supplier_id' => $supId,
    'suplier_name' => $supName,
    'supplier_address' => $supAddress
    ]);

    return redirect('/Supplier');

  }
}
