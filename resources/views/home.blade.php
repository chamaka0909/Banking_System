@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in Successfully !') }}
                    <a href="{{ url('/bankdetails/') }}" title="Ckeck Bank Details"><button class="btn btn-success btn"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Check Yor Bank Details</button></a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
