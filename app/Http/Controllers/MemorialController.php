<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\NewRegisterRequest;
use Illuminate\Support\Facades\Auth;
use App\Word;
use App\User;

class MemorialController extends Controller{
    //分野別のワード一覧
    public function select(){
        $user = Auth::user();
        $enwords = Word::where('category','=','英単語')->get();
        $enrow = Word::where('category','=','英文法')->get();
        $jnwords = Word::where('category','=','漢字')->get();

        $data = [
            'user' => $user,
            'enwords' => $enwords,
            'enrow' => $enrow,
            'jnwords' => $jnwords,
        ];
        return view('screen.mainMenu', $data);
    }

    //ワード登録画面(登録ボタン押下時)のアクション
    public function make(NewRegisterRequest $req) {
        $param = [
            'words' => $req ->words,
            'meanings' => $req ->meanings,
            'category' =>  $req ->category,
        ];
        // TODO: DBへワード情報を登録する
        //DB::table('library')->insert($param);
        $words = new Word;
        $form = $req->all();
        $words->fill($form)->save();
        return redirect('/show');
    }


    //編集
    //ワード情報編集画面のアクション
    public function rewrite($id) {
        // TODO: DBかワード情報を取得する.(idを条件に取得)
        $words = Word::where('id','=',$id)->get();

        // TODO: View(テンプレート)に渡すデータを作成する.
        $data= [
            'words' => $words[0]
        ];

        // テンプレート(resources/views/display/edit.blade.php)を表示する.
        return view('screen.editWords', $data);
    }

    public function edit(NewRegisterRequest $req) {
        $param = [
            'id' => $req -> id,
            'words' => $req ->words,
            'meanings' => $req ->meanings,
            'category' => $req ->category
        ];
        //DB::table('library')->where('id',$req -> id)->update($param);
        $words = Word::find($req -> id);
        $form = $req -> all();
        $words->fill($form)->save();

        // テンプレート(resources/views/display/display.blade.php)を表示する.
        return redirect('/show');
    }

    //削除
    public function delete_comfirm(){

    }

    public function delete($id) {
        //DB::table('library')->where('id',$id)->delete();
        $words = Word::find($id)->delete();

        // テンプレート(resources/views/display/display.blade.php)を表示する.
        return redirect('/show');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}


?>