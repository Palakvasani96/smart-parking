<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Yajra\DataTables\DataTables;
use Response;
use DB;

class UserController extends Controller
{
    public function index()
    {
        if(request()->ajax()) 
        {
            $data = User::latest()->get();
            return datatables()->of($data)
            ->addColumn('action', 'action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('userList');
    }

    
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        DB::table('users')
    		->where('id', $request->user_id)
    		->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'is_admin'=>	$request->is_admin
            ]);
    	return response()->json($request);
    }
    
  
    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $where = array('id' => $id);
        $user  = User::where($where)->first();  
        return Response::json($user);
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        $user = User::where('id',$id)->delete();  
        return Response::json($user);
    }
}
