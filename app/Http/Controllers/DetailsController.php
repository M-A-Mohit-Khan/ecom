<?php

namespace App\Http\Controllers;
use App\Models\Detail;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class DetailsController extends Controller
{
    //
    public function index()
    {
        // $clientIP = request()->ip();
        // dd($clientIP);
        // $ipAddr=\Request::ip();
        // dd($ipAddr);        
        return view('detail');
    }
    public function store(Request $request)
    {
        //dd($_SERVER["REMOTE_ADDR"]);
        //dd($request->server['REMOTE_ADDR']);
        //dd("hello");
        $detail=new Detail;
        $order=new Order;
        //dd("hello");
        // dd($request->email);
        //$user=Details::find($request->email);
        //dd($request->email);
        $user=Detail::where('email', $request->email)->get();
        //dd(!count($user));
        // $user=1;
        if(!count($user))
        {
            //dd("hello1");
            //dd($request->ip());
            $detail->email=$request->email;
            $detail->phone=$request->phone;
            $detail->token="";
            $detail->status="";
            $detail->save();

            $u_id=Detail::where('email', $request->email)->get();
            $order->detail_id=$u_id[0]["id"];
            $order->confirmed="";
            $order->product_id=1;
            $order->save();

        }
        else
        {
            // dd($user[0]["id"]);
            //dd("hello2");
            $randomString = Str::random(15);
            $request->session()->put('token', $randomString);
            $request->session()->put('email', $request->email);

            //dd(session('id'));
            return redirect('send-mail');
        }
        // $details->save();
        return redirect('detail');
    }
}
