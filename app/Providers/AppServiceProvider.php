<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
            if (Schema::hasTable('settings')) {
                $siteInfo = DB::table('settings')->get();
                // print_r()
            }
            if (Schema::hasTable('leave_applications') && Schema::hasTable('employees')) {
                $notification = DB::table('leave_applications')->select(['leave_applications.*','employees.emp_name'])
                                ->where(['leave_applications.status'=>'0'])
                                ->leftJoin('employees','employees.id','=','leave_applications.employee_id')
                                ->get();
                view()->share(['siteInfo'=> $siteInfo,'notification'=>$notification]);
    
            }
    }
}
