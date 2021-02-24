<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('home');
    }
    public function adminHome()
    {
        return view('adminHome');
    }
    public function userList()
    {
        return view('userList');
    }
    
    public function usersUpdate(Request $request, User $user,$id)
    {
        //User::find($id)->delete();
        if($request->ajax())
    	{
    		if($request->action == 'edit')
    		{
    			$data = array(
    				'name'	=>	$request->name,
    				'email'		=>	$request->email,
    				'is_admin'		=>	$request->is_admin
    			);
    			DB::table('user')
    				->where('id', $request->id)
    				->update($data);
    		}    		
    		return response()->json($request);
    	}

    }
    
    



















    
    public function store(Request $request)
    {  
        $userId = $request->user_id;
        $user   =   User::updateOrCreate(['id' => $userId],
                    ['name' => $request->name, 'email' => $request->email, 'is_admin' => $request->is_admin]);        
        return Response::json($user);
    }
    
    
    
    public function edit($id)
    {   
        $where = array('id' => $id);
        $user  = User::where($where)->first();    
        return Response::json($user);
    }
    
    
    
    public function destroy($id)
    {
        $user = User::where('id',$id)->delete();    
        return Response::json($user);
    }
}

