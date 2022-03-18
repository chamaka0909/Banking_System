@extends('layout')
@section('content')

<br><br>
    <div class="container" >
        <div class="row">
 
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Bank Details </h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/bankdetails/create') }}" class="btn btn-success btn-sm" title="Add New Bank Details">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Account Number</th>
                                        <th>Banks Name</th>
                                        <th>Branch</th>
                                        <th>Branch Code</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($bankdetails as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->accountno }}</td>
                                        <td>{{ $item->bankname }}</td>
                                        <td>{{ $item->branch }}</td>
                                        <td>{{ $item->branchcode }}</td>
                                       
                                        <td>
                                            <a href="{{ url('/bankdetails/' . $item->id) }}" title="View Bank Details"><button class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/bankdetails/' . $item->id . '/edit') }}" title="Edit Bank Details"><button class="btn btn-warning btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/bankdetails' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Bank Details" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection