<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\RedisService;
use App\User;
use App\Stats;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function index(Request $request){
        if($request->session()->has('user_id')){
            $user = new User;
            $id = $request->session()->get('user_id');
            Auth::login($user);
            $traffic = Stats::getTotalTraffic($id);
            $cacheHit = Stats::getTotalCacheHit($id);
            $stopped = Stats::getTotalStopped($id);
            $data = ["traffic" => $traffic, "cache" => $cacheHit, "stopped" => $stopped];
            return view('home.index',$data);
        }
        return view("home.site");
    }

    public function login(Request $request){
        $user = User::login($request->input("email"),$request->input("password"));
        if($user){
            $request->session()->put('user_id', $user->redis_user_id);
            Auth::login($user);
            return view("home.index");
        }
        return redirect('/');
    }
    
        public function logout(Request $request) {
        $request->session()->forget('user_id');
        $request->session()->flush();
        return redirect('/');
    }

    public function traffic(){
        return view("home.traffic");
    }

    public function health(){
        return view("home.health");
    }

    public function settings(){
        return view("home.settings");
    }
}
