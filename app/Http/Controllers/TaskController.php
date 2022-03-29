<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;

use App\Repositories\TaskRepository;

class TaskController extends Controller
{
    /**
     *  タスクリポジトリ
     * 
     * @var TaskRepository
     */
    protected $tasks;

    /**
    * コンストラクタ
    * コンストラクタとは自動的に呼び出される初期化処理用のメソッド
    * 以下、認証機能をTaskContorollerで有効にするためのコード
    *
    * @return void
    */
    public function __construct(TaskRepository $tasks)//コンストラクトでタスクリポジトリを受け取れるように、引数を追加する
    {
        $this->middleware('auth');

        $this->tasks = $tasks;
    }

     /**
    * データベースからタスク一覧の取得
    *
    * @param Request $request
    * @return Response
    */
    public function index(Request $request)
    {
        //$tasks = Task::orderBy('created_at', 'asc')->get();
        //$tasks = $request->user()->tasks()->get();//$request->userメソッドで、認証済みのユーザーを取得、そのユーザーが保持するタスク一覧を取得
        /*
        $u = $request->user();
        $t = $this->tasks->forUser($u);
        $v = view('tasks.index', [
             'ts' => $t,
              'xxx' -> $request,
        ]);
        return $v;
        */
        return view('tasks.index', [//←タスクスフォルダのインデックスというViewを使用するという意味
            'tasks' => $this->tasks->forUser($request->user())
        ]);
    }

    /**
    * タスク登録
    *
    * @param Request $request
    * @return Response
    */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);
    
        // タスク作成
    //     Task::create([
    //         'user_id' => 0,
    //         'name' => $request->name
    //     ]);
    
    //     return redirect('/tasks');
    // }
    /*
        $u = $request->user();
        $t = $u->tasks();
        $t->create(['name' => $request->name,]);
        */

        $request->user()->tasks()->create([
            'name' => $request->name,

        ]);
      

        return redirect('/tasks');
    }
    
    /**
        * タスク削除
        *
        * @param Request $request
        * @param Task $task
        * @return Response
        */
    public function destroy(Request $request, Task $task)
    {
        $this-> authorize('destroy',$task);

        $task->delete();
        return redirect('/tasks');
    }
}