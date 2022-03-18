@extends('layout')
@section('content')

<br><br>
<div class="card">
  <div class="card-header"><h2>Add New Bank Details</h2></div>
  <div class="card-body">
      
      <form action="{{ url('bankdetails') }}" method="post">
        {!! csrf_field() !!}
        <label>Account number</label></br>
        <input type="text" name="accountno" id="accountno" class="form-control"  pattern ="[0-9]{8}" title="Account Number is Invalid ,please enter 8 digit number" required></br>
        <label>Bank Name</label></br>
        <input type="text" name="bankname" id="bankname" class="form-control" required></br>
        <label>Branch</label></br>
        <input type="text" name="branch" id="branch" class="form-control" required></br>
        <label>Branch Code</label></br>
        <input type="text" name="branchcode" id="branchcode" class="form-control" pattern ="[0-9]{5}" title="Branch Code is Invalid please enter 5 digit number" required></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop