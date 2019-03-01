<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Thing;

class ThingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = [];
        if (\Auth::check()) {
            $user = \Auth::user();
            $things0 = $user->things()-> where('use', '0')->orderBy('created_at', 'desc')->get();
            
            $things1 = $user->things()-> where('use', '1')->orderBy('created_at', 'desc')->get();
            
            $things2 = $user->things()->where('use','2')->orderBy('created_at', 'desc')->get();
        
            $data = [
                'things0' => $things0,
                'things1' => $things1,
                'things2' => $things2,
                
            ];
        }
        
        return view('welcome', $data);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'content' => 'required|max:191',
        ]);

        $request->user()->things()->create([
            'content' => $request->content,
        ]);

        return back();
    }

    public function destroy($id)
    {
        $thing = \App\Thing::find($id);

        if (\Auth::id() === $thing->user_id) {
            $thing->delete();
        }

        return redirect('/');
    }
    
    public function unused(Request $request,$id)
    {
        $thing = Thing::find($id); //まずthingを探しだす
        $number = $request->get('invisible'); //ボタンで送信された値を取出す
        $thing->use = $number; //そしてthingのuseに値を代入する
        $thing->save();
        return redirect('/');
    }

    public function using(Request $request,$id)
    {
        $thing = Thing::find($id);
        $number = $request->get('invisible');
        $thing->use = $number;
        $thing->save();
        return redirect('/');
    }
}