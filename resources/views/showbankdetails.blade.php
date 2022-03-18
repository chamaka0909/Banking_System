@extends('layout')
@section('content')
<div class="card">
  <div class="card-header"><h2>View Bank Details</h2></div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Account Number : {{ $bankdetails->accountno }}</h5>
        <p class="card-text">Bank Name : {{ $bankdetails->bankname }}</p>
        <p class="card-text">Branch : {{ $bankdetails->branch }}</p>
        <p class="card-text">Branch Code : {{ $bankdetails->branchcode }}</p>
  </div>
      
    </hr>
  
  </div>
</div>