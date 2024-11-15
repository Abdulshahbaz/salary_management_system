<?php

namespace App\Console\Commands;

use App\Jobs\CalculateSalarieJob;
use App\Mail\EmployeeSendMail;
use App\Models\Employee;
use Illuminate\Console\Command;
use App\Models\Salarie; 


class CalculateSalaries extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'calculate:salaries';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Salary Calculated for Employees in months 2 days';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $salary = Salarie::where('is_salary_calculated',0)->get();

        foreach($salary as $salaries)
        {

            CalculateSalarieJob::dispatch($salaries);

        }
        $this->info('Salaries calculated successfully.');
    }
}