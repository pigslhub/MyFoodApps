<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class AdvertisementController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:shop');
    }

    public function create()
    {
       $advertisements = DB::table('advertisements')
           ->where('shop_id', '=', Auth::guard('shop')->user()->id)
           ->get();

       return view('shop.advertisement.create', ['advertisements'=>$advertisements]);
    }

    public function store(Request $request){


            $avatar = $request->file('banner');
            $fileName = time() . '.' . $avatar->getClientOriginalName() . '.' . $avatar->getClientOriginalExtension();
//            $path = public_path('/images/customer/' . $fileName);
//            (new ImageManager)->make($avatar->getRealPath())->resize(300, 300)->save($path);
            $avatar->move(public_path() . '/images/shops/advertisements/', $fileName);

            $fileNameWithPath = 'images/shops/advertisements/' . $fileName;

        DB::table('advertisements')->insert([
           'title'=>$request->title,
           'shop_id'=>Auth::guard('shop')->user()->id,
           'description'=>$request->advertisement_description,
           'due_date'=>$request->advertisement_due_date,
            'status'=>(Carbon::now() <= $request->advertisement_due_date)?'1':'0',
            'add_type'=>'image',
            'add_file'=>$fileNameWithPath
        ]);

        return redirect()->route('shop.advertisement.create');
    }

    public function edit($id)
    {
       $advertisement = DB::table('advertisements')
           ->where('id', '=', $id)
           ->first();

       return view('shop.advertisement.edit', ['advertisement'=>$advertisement]);
    }

    public function update(Request $request, $id)
    {
        if($request->file('banner')) {
            $avatar = $request->file('banner');
            $fileName = time() . '.' . $avatar->getClientOriginalName() . '.' . $avatar->getClientOriginalExtension();
//            $path = public_path('/images/customer/' . $fileName);
//            (new ImageManager)->make($avatar->getRealPath())->resize(300, 300)->save($path);
            $avatar->move(public_path() . '/images/shops/advertisements/', $fileName);

            $fileNameWithPath = 'images/shops/advertisements/' . $fileName;

            DB::table('advertisements')->where('id', '=', $id)
                ->update([
                'title' => $request->title,
                'description' => $request->advertisement_description,
                'due_date' => $request->advertisement_due_date,
                'status' => (Carbon::now() <= $request->advertisement_due_date)?'1':'0',
                'add_file' => $fileNameWithPath
            ]);
        }
        else{
            DB::table('advertisements')->where('id', '=', $id)
                ->update([
                    'title' => $request->title,
                    'description' => $request->advertisement_description,
                    'due_date' => $request->advertisement_due_date,
                    'status' => (Carbon::now() <= $request->advertisement_due_date)?'1':'0',
                ]);
        }

        return redirect()->route('shop.advertisement.edit', $id);

    }

}
