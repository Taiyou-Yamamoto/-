<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Member;

class MemberController extends Controller
{
    /**
     * 会員画面表示
     */

    public function home_index()
    {
        $users = Member::orderBy('created_at', 'asc')->get();
        return view('home',[
            'users' => $users,
        ]);
    }
    /**
     * ログイン画面表示
     */

    public function login_index()
    {
        return view('login.login');
    }

    /**
     * ユーザー登録
     * 
     * @param Request $request
     * @return Response
     */
    public function store(Request $request){
        {
            $validated = $request->validate([
                'name' => 'required',
                'tel' => 'required',
                'email' => 'required|email',
            ]);
        }

        Member::create($validated);

        return redirect('/login');
    }
    
}
