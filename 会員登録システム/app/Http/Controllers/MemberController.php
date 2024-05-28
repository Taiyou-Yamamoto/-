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
        $members = Member::orderBy('created_at', 'asc')->get();
        return view('home',[
            'members' => $members,
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

    /**
     * ログイン画面表示
     * 
     * @param $is
     * @return Response
     */
    public function edit_index($id)
    {
        $member = Member::findOrFail($id);
        return view('edit.edit',[
            'member' => $member,
        ]);
    }

    /**
     * 編集
     * @param Request
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $member = Member::findOrFail($id);
        $validated = $request->validate([
            'name' => 'required',
            'tel' => 'required',
            'email' => 'required|email',
        ]); 

        $member->update($validated);

        return redirect('/home');
    }


    /**
     * 削除
     * @param Request
     * @return Response
     */
    public function destroy($id)
    {

        $member = Member::findOrFail($id);
        $member->delete();
        
        return redirect('/home');
    }
}
