<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Detail;

class TokenController extends Controller
{
    //

    public function index()
    {
        return view('token');
    }
    public function store(Request $request)
    {
        $detail=new Detail;
        // dd($request->email);
        // $user=Details::find($request->email);
        //dd($user);
        $user=Detail::where('email', '=', session('email'))->firstOrFail();
        if($request->token==$user->token)
        {
            $user->status="verified";
            $user->save();
            return redirect('detail');
        }
        else 
        {
            return redirect('detail');
        }
         // $details->save();
        return redirect('detail');
    }
}
