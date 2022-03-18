<?php
namespace App\Http\Controllers;
use App\Models\Bank;
use Illuminate\Http\Request;

class BankController extends Controller
{
    
    public function index()
    {
        $bankdetails = Bank::all();
        return view ('bankdetails')->with('bankdetails', $bankdetails);
    }
    
    public function create()
    {
        return view('createbankdetails');
    }
  
    public function store(Request $request)
    {
        $input = $request->all();
        Bank::create($input);
        return redirect('bankdetails')->with('flash_message', 'Bank Details Addedd!');  
    }
    
    public function show($id)
    {
        $Bank = Bank::find($id);
        return view('showbankdetails')->with('bankdetails', $Bank);
    }
    
    public function edit($id)
    {
        $Bank = Bank::find($id);
        return view('editbankdetails')->with('bankdetails', $Bank);
    }
  
    public function update(Request $request, $id)
    {
        $Bank = Bank::find($id);
        $input = $request->all();
        $Bank->update($input);
        return redirect('bankdetails')->with('flash_message', 'Bank details Updated!');  
    }
  
    public function destroy($id)
    {
        Bank::destroy($id);
        return redirect('bankdetails')->with('flash_message', 'Bank Details deleted!');  
    }
}
