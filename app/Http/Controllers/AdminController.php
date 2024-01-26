<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\NoticeBoard;
use App\Models\Award;
use App\Models\Expense;
use App\Models\Admin;
use App\Models\Setting;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->input()){

			$request->validate([
				'username'=>'required',
				'password'=>'required',
			]); 
			$login = Admin::where(['user_name'=>$request->username])->pluck('user_pass')->first();

			if(empty($login)){
				return response()->json(['username'=>'Username Does not Exists']);
			}else{
				if(Hash::check($request->password,$login)){
					$admin = Admin::first();
					$request->session()->put('admin','1');
					$request->session()->put('admin_name',$admin->admin_name);
					return 1;
					// return response()->json(['success'=>'1']);
				}else{
					return response()->json(['password'=>'Username and Password does not matched']);
				}
			}
			
		}else{
			return view('admin.admin');
		}
    }

    public function dashboard(){
		
		$Employees = Employee::Select("*")->get();
		$empCount = $Employees->count();
		
		$NoticeBoard = NoticeBoard::Select("*")->get();
		$noticeCount = $NoticeBoard->count();

		$Awards = Award::Select("*")->get();
		$awardCount = $Awards->count();

		$Expenses = Expense::Select("*")->get();
		$expenseCount = $Awards->count();
	
		return view('admin.dashboard',['employee'=> $empCount,'NoticeBoard'=> $noticeCount,'Award'=> $awardCount,'expense'=> $expenseCount]);
	}

	public function logout(Request $req) {
		Auth::logout();
		session()->forget('admin');
		session()->forget('admin_name');
		return '1';
	}
}
