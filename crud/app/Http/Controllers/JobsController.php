<?php

namespace App\Http\Controllers;

use App\City;
use App\Company;
use App\Http\Controllers\Controller;
use App\Job;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rules\In;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function index() {
        $cities = City::all();
        $allJobs = Job::count();
        $jobs = Job::all();
        return view('jobs.index', ['cities' => $cities, 'jobs' => $jobs, 'allJobs' => $allJobs]);
    }

    public function add() {
        $cities = City::all();
        return view('jobs.add', ['cities' => $cities]);
    }

    public function store(Request $request) {
        $searchCompany = Company::where('name', $request->company)->first();

        if (!$searchCompany) {
            $createCompany = new Company();

            $createCompany->name = $request->company;

            $createCompany->save();
            $company = $createCompany->id;
        }
        else {$company = $searchCompany->id;}

        $createJob = new Job();
        $createJob->title = $request->title;
        $createJob->city_id = $request->city;
        $createJob->company_id = $company;
        $createJob->salary = $request->salary;
        $createJob->info = $request->info;
        $createJob->save();
        return redirect('/');
    }


}