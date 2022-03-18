@extends('layout')
@section('content')

<br><br>
<div class="card">
  <div class="card-header"><h2>Edit Bank Details</h2></div>
  <div class="card-body">
      
      <form action="{{ url('bankdetails/' .$bankdetails->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$bankdetails->id}}" id="id" />
        <label>Account Number</label></br>
        <input type="text" name="accountno" id="accountno" value="{{$bankdetails->accountno}}" class="form-control" pattern ="[0-9]{8}" title="Account Number is Invalid ,please enter 8 digit number" required></br>
        <label>Bank Name</label></br>
        <input type="text" name="bank" id="bank" value="{{$bankdetails->bankname}}" class="form-control" required></br>
        <label>Branch</label></br>
        <input type="text" name="branch" id="branch" value="{{$bankdetails->branch}}" class="form-control" required></br>
        <label>Branch Code</label></br>
        <input type="text" name="branchcode" id="branchcode" value="{{$bankdetails->branchcode}}" class="form-control" pattern ="[0-9]{5}" title="Account Number is Invalid ,please enter 5 digit number" required></br>
        <input type="submit" value="Update" class="btn btn-success" onclick="return confirm('Are you sure to Update The recode? ')"></br>
        
    </form>
  
  </div>
</div>
@stop
