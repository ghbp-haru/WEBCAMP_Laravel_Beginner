<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\TaskRegisterPostRequest;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * タスク一覧ページ を表示する
     *
     * @return \Illuminate\View\View
     */
    public function list()
    {
        return view('task.list');
    }

    /**
     * タスクの新規登録
     */
    public function register(TaskRegisterPostRequest $request)
    {
        // validate済みのデータの取得
        $datum = $request->validated();
        //
        //$user = Auth::user();
        //$id = Auth::id();
        // var_dump($datum); exit;
        // var_dump($datum, $user, $id); exit;

        // user_id の追加
         $datum['user_id'] = Auth::id();

        // テーブルへのINSERT
         $r = TaskModel::create($datum);
var_dump($r); exit;
    }
}