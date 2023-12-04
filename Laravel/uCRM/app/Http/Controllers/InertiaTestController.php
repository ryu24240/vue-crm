<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\InertiaTest;

class InertiaTestController extends Controller
{
    public function index() 
    {
        //第一引数にコンポーネント名、第二引数にプロパティ配列
        //コンポーネント呼び出しかつコンポーネントにプロパティ配列を渡すことで画面に値表示できる
        return Inertia::render('Inertia/Index');
    }

    public function create()
    {
        return Inertia::render('Inertia/Create');
    }

    public function show($id)
    {
        // ddと記載するとLaravel側のデバック起動(ここで処理が止まって変数の中身が見える)
        // dd($id);
        return Inertia::render('Inertia/Show',
        [
            'id' => $id
        ]);

    }

    // inputタグでの入力値をrequest変数で受け取る
    public function store(Request $request)
    {

        $request->validate([
            'title' => ['required', 'max:20'],
            'content' => ['required'],
        ]);

        $inertiaTest = new InertiaTest;
        $inertiaTest->title = $request->title;
        $inertiaTest->content = $request->content;
        // テーブルに保存処理
        $inertiaTest->save();

        // テーブルに保存した後、以下でリダイレクト処理
        // リダイレクトの際にフラッシュメッセージを作成、セッションに保存
        return to_route('inertia.index')->with([
            'message' => '登録しました。'
        ]);
    }
}
