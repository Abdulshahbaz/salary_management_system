<?php

namespace App\Jobs;

use App\Models\Employee;
use App\Models\Salarie;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmployeeSendMail;
use Illuminate\Support\Facades\Log;


class CalculateSalarieJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    protected $salarie;
    public function __construct(Salarie $salary)
    {
        $this->salarie = $salary;

    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
       
        $employee = Employee::find($this->salarie->employee_id);
           

            if(!$employee){

                return;
            }

            $per_day_salary = $employee->base_salary / $this->salarie->total_working_days;

            $total_salary   = round(($per_day_salary *($this->salarie->total_working_days - $this->salarie->total_leave_taken + 
                                   $this->salarie->overtime/8)),2);
                                
                                   $this->salarie->update([
                                       'total_salary_made'    => $total_salary,
                                       'is_salary_calculated' => 1,
          
            ]);
            try {
                Mail::to($employee->email)->send(new EmployeeSendMail($employee,$total_salary));
                Log::info("Email sent for email: ".$employee->email);
            } catch (\Exception $e) {
                Log::error("Email bot sent for email: ".$employee->email." error: ".$e->getMessage());
            }
    }
}
