<?php

namespace App\Http\Controllers 
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller
class MicropostsController extends Controller

{
    
    public function index() //表紙的要素への機能
    {
        $data = [];　//データ変数を空のarrayとして利用
        if (\Auth::check()) {　//ログインしているならば以下を作動させる権限がある
            $user = \Auth::user();　//権利のあるユーザー、$userにloginしているuserを割り当てる
            $microposts = $user->feed_microposts()->orderBy('created_at', 'desc')->paginate(10);　//ユーザーが投降したマイクロポストを投稿順に、10個配置

            $data = [　//data変数はの配列は
                'user' => $user,　//ユーザー変数をuserと呼ぶ
                'microposts' => $microposts,　//マイクロポスト変数から受け取る、マイクロポスト変数をマイクロポストと呼ぶ
            ];
            $data += $this->counts($user);　//ユーザー変数内のデータをカウントし、データ変数に代入する
            return view('users.show', $data);　//userフォルダ＞show.blade.phpファイルのデータ変数に表示させる　//$dataを継承し、user.showを見せる
        
        }else {　//ログインしていない時
            return view('welcome');　//welcome.bladeを表示、見せる
        }
    }
    public function store(Request $request)　//投稿された文章を保存する際の機能、$requestを必要とする
    {
        $this->validate($request, [　//以下を検証する、this変数からvalidateを呼び起こす
            'content' => 'required|max:255',　//投稿された文章は必ず記入、255文字以内
        ]);

        $request->user()->microposts()->create([　//リクエスト変数はユーザーの、マイクロポストの、作成されたものから参照
            'content' => $request->content,　//投稿されたものは、リクエスト変数のコンテンツを代入する
        ]);

        return redirect('/');　//情報を更新
    }
    public function destroy($id)　//削除機能
    {
        $micropost = \App\Micropost::find($id);　//マイクロポスト変数はAPP＞？？？？

        if (\Auth::user()->id === $micropost->user_id) {　//ユーザーのid　と　マイクロポスト変数のユーザーidが一致
            $micropost->delete();　//つぶやき
        }

        return redirect()->back();　//以前の状態に戻す
    }

}