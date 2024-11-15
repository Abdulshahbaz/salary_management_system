<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salarie;
use App\Models\Employee;
use Carbon\Carbon;
class SalaryController extends Controller
{

    public function create_salary()
    {
        $salarys = Employee::all();
        return view('admin.employee-salaries',['salarys'=>$salarys]);
    }

    public function insert_salary(Request $request)
    {
        
        $request->validate([
            'employe_id' => 'required|exists:employees,id',
            'month'      => 'required',
            'year'       => 'required|numeric|digits:4',
            'working_day'=> 'required|numeric|digits:2',
            'leave_taken'=> 'required|numeric',
            'over_time'  => 'required|numeric',
        ]);
        $month  = Carbon::parse($request->month)->format('m');
       $month_year_exists = Salarie::where('employee_id',$request->employe_id)
                                     ->where('month',$month)
                                     ->where('year',$request->year)
                                     ->exists();
                                    
    if($month_year_exists)
        {
            return redirect()->back()->with('messages', 'Data for this month and year already exists for the employee.');
        }

       $employee_salary_calculate = new Salarie;
       $employee_salary_calculate->employee_id          = $request->employe_id;
       $employee_salary_calculate->month                = $month;
       $employee_salary_calculate->year                 = $request->year;
       $employee_salary_calculate->total_working_days   = $request->working_day;
       $employee_salary_calculate->total_leave_taken    = $request->leave_taken;
       $employee_salary_calculate->overtime             = $request->over_time;
       $employee_salary_calculate->save(); 

       return redirect()->route('admin.dashboard')->with('success','Employee Salary Calculated SuccessFully!');
     }

     public function calculate_salary()
     {
        $calculated_salary = Salarie::where('is_salary_calculated',1)
                            ->paginate(10);
        return view('admin.calculated-salary-list',['calculated_salary'=>$calculated_salary]);
     }
}
 