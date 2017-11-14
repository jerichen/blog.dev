<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Validation\ValidationException;
use App\Task;

class TaskController extends Controller
{
    public function create()
    {
        $tasks = Task::orderBy('id', 'ASC')->get();
        
        return view('tasks.create', compact(['tasks']));
    }
    
    public function store(Request $request)
    {
        try {
            // 驗證
            $rules = [
                'title' => 'required',
            ];
            $messages = [
                'title.required' => '標題必填',
            ];

            $validator = Validator::make($request->all(), $rules, $messages);
            if ($validator->fails()) {
                return response()->json(array(
                        'success' => false,
                        'errors' => $validator->getMessageBag()->toArray()
                        ), 500);
            }

            $result = $this->save($request);
            return response()->json($result);
            
        } catch (ValidationException $e) {            
            return back()->withErrors($e->errors())->withInput();
        } 
    }
    
    protected function save($request)
    {
        $title = $request->get('title');
        
        $task = new Task();
        $task->title = $title;
 
        if (!$task->save()) {
            $result = [
                'success' => true,
                'msg' => '新增失敗',
                'http_code' => 500,
            ];

        }else{
            $result = [
                'success' => true,
                'msg' => '新增成功',
                'http_code' => 200,
            ];
        }
        
        return $result;
    }
}
