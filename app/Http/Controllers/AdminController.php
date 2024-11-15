<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmployeeSendMail;
use Illuminate\Support\Carbon;

use App\Models\Employee;
use App\Models\Salarie;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function login_admin(Request $request)
    {

        $request->validate([
            'email'    => 'required',
            'password' => 'required'
        ]);

        if (Auth::guard('admin')->attempt($request->only('email', 'password'))) {
            return redirect()->route('admin.dashboard')->with('success', 'Admin Login SuccessFully!');
        }

        return redirect('admins/login')->with('error', 'Please Correct Email and Passowrd');
    }

    public function dashboard()
    {
        $last_month    = carbon::now()->submonth()->format('m');
        $current_month = carbon::now()->format('m');

        $compare_last_month    = Salarie::where('month', $last_month)->count();
        $compare_current_month = Salarie::where('month', $current_month)->count();
        $total_employee        = Employee::distinct('id')->count('id');

        $percent_last_month    = ($compare_last_month / $total_employee) * 100;
        $percent_current_month = ($compare_current_month / $total_employee) * 100;

        return view('admin.dashboard', ['percent_last_month'    => $percent_last_month, 
                                        'percent_current_month' => $percent_current_month]);
    }
}
   