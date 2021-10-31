<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Customer;

class CustomerSearchController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search')){
            $customers= Customer::search($request->input('search'))->toArray();
            return view('welcome',["customers"=>$customers]);
        }
        return view('welcome');   
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);
        $customer= Customer::create($request->all());
        $customer->addToIndex();
        return redirect()->back();
    }
}
