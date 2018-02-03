<?php

namespace App\Http\Controllers;

use App\City;
use App\Company;
use App\Http\Controllers\Controller;
use App\Job;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rules\In;

class HomeController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function home() {
        $cities = City::all();
        $allJobs = Job::count();
        $jobs = Job::take(5)
            ->get();
        return view('home.index', ['cities' => $cities, 'jobs' => $jobs, 'allJobs' => $allJobs]);
    }

    public function search() {
        $title = Input::get ( 'title' );
        $city = Input::get('city');
        $company = Input::get('company');
        $searchCompany = Company::where('name', $company)->first();
        if (!$searchCompany) {
            $result = Job::where('city_id', $city)->orWhere('title', $title)->get();
            $resultCount = Job::where('city_id', $city)->orWhere('title', $title)->count();
        }
        else {
            $result = Job::where('city_id', $city)->orWhere('title', $title)->orWhere('company_id', $searchCompany->id)->get();
            $resultCount = Job::where('city_id', $city)->orWhere('title', $title)->orWhere('company_id', $searchCompany->id)->count();
        }

        return view('home.search', ['jobs' => $result, 'count' => $resultCount]);
    }
}