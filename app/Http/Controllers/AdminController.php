<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
use Hash;
use Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){
        $ordersPerDay= count($this->daily_orders());
        $orders=Order::get();
        $dproducts= count($this->dproducts());
        $shops=count($this->allshops());
        $allproducts=$this->getAllProducts();
        //return view('Backend.Admin.index');
       return view('Backend.Admin.index',compact(['orders','ordersPerDay','dproducts','allproducts','shops']));
    }
    public function daily_orders(){
       return Order::whereDate('created_at', Carbon::today())->get();

    }
    public function dproducts(){
        return Product::whereDate('created_at',Carbon::today())->get();
    }
    public function allshops(){
        return User::where('is_admin','seller')->get();
    }
    public function getAllProducts(){
        return Product::get();
        // try {
        //     // -- START DEFAULT DATATABLE QUERY PARAMETER
        //     $draw = $request->input('draw');
        //     $start = $request->input('start');
        //     $length = $request->input('length');
        //     $page = (int)$start > 0 ? ($start / $length) + 1 : 1;
        //     $limit = (int)$length > 0 ? $length : 10;
        //     $columnIndex = $request->input('order')[0]['column']; // Column index
        //     $columnName = $request->input('columns')[$columnIndex]['data']; // Column name
        //     $columnSortOrder = $request->input('order')[0]['dir']; // asc or desc value
        //     $searchValue = $request->input('search')['value']; // Search value from datatable
        //     //-- END DEFAULT DATATABLE QUERY PARAMETER

        //     //-- START DYNAMIC QUERY BINDING
        //     $conditions = '1 = 1';
        //     if (!empty($searchValue)) {
        //         $conditions .= " AND name LIKE '%" . trim($searchValue) . "%'";
        //         $conditions .= " OR status LIKE '%" . trim($searchValue) . "%'";
        //     }
        //     //-- END DYNAMIC QUERY BINDING

        //     //-- WE MUST HAVE COUNT ALL RECORDS WITHOUT ANY FILTERS
        //     $countAll = Product::count();

        //     //-- CREATE LARAVEL PAGINATION
        //     $paginate = Product::select('*')
        //         ->whereRaw($conditions)
        //         ->orderBy($columnName, $columnSortOrder)
        //         ->paginate($limit, ["*"], 'page', $page);

        //     $num = 1;
        //     $items = array();
        //     foreach ($paginate->items() as $idx => $row) {
        //         $items[] = array(
        //             "no" => $num,
        //             "id" => $row['id'],
        //             "name" => $row['name'],
        //             "image_path" => $row['image_path'],
        //             "price" => $row['price'],
        //             "status" => $row['status'],
        //         );
        //         $num++;
        //     }

        //     //-- START CREATE JSON RESPONSE FOR DATATABLES
        //     $response = array(
        //         "draw" => (int)$draw,
        //         "recordsTotal" => (int)$countAll,
        //         "recordsFiltered" => (int)$paginate->total(),
        //         "data" => $items
        //     );
        //     return response()->json($response);
        //     //-- END CREATE JSON RESPONSE FOR DATATABLES
        // } catch (\Exception $e) {
        //     // Error Log
        //     \Illuminate\Support\Facades\Log::error($e->getMessage());
        //     return abort(404);
        // }
    }
    public function getAllorders(){
        $orders=Order::get();
        $corders= count($this->daily_orders());
       // dd($orders);
        return view('Backend.Admin.Oders',compact(['orders','corders']));
}
public function allproducts(){
    $allproducts=$this->getAllProducts();
    $cproducts=count($allproducts);
    return view('Backend.Admin.products',compact(['allproducts','cproducts']));
}
public function shops(){
    $shops=User::where('is_admin','seller')->get();
    return view('Backend.Admin.shops',compact('shops'));
}
public function adminregister(){
    return view('Backend.Admin.auth.register');
    
}
public function adminstore(Request $request){
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
        'password_confirmation' => 'required',
    ]);

    User::create([
        'name' => $request->name,
        'is_admin'=>'admin',
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);
   return redirect()->route('admin');

}
public function adminlogin(){
    return view('Backend.Admin.auth.login');
    
}
public function adminauthenticate(Request $request){
    $request->validate([
        'email' => 'required|string|email',
        'password' => 'required|string',
    ]);
    $role=User::get('is_admin');
    if ($role ='admin') {
        $credentials = $request->only('email', 'password',);

        if (Auth::attempt($credentials)) {
            //dd(Auth::attempt($credentials));
            return redirect()->route('adashboard');
        }
       return redirect()->route('adminauthh')->with('error', 'Oppes! You have entered invalid credentials');
    
     }

}
public function admin(){
    return view('Backend.Admin.test');
}
}
