<?php

namespace App\Http\Controllers\Admin\customerMgt;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function create()
    {
        $customers =  DB::table('customers')->get();
        return view('admin.customer.viewAll', ["customers" => $customers]);
    }
    public function destroy($id)
    {
        DB::table('customers')->where('id', $id)->delete();
        return redirect()->route('admin.customer.create')->with("info", "Customer deleted");
    }
    public function activateCustomer($id)
    {
        DB::table('customers')->where('id', $id)->update(["status" => "1"]);
        return redirect()->route('admin.customer.create');
    }
    public function deactivateCustomer($id)
    {
        DB::table('customers')->where('id', $id)->update(["status" => "0"]);
        return redirect()->route('admin.customer.create');
    }
}
