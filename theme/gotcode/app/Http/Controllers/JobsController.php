<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostedJob;

class JobsController extends Controller
{
    public function retrieve() {
        $postedJobs = PostedJob::all();
        return view('client.dashboard', ['postedJobs' => $postedJobs]);
    }

    public function post(Request $request) {
        
        $worKLocationMapping = [
            'onsite' => 'On-site',
            'hybrid' => 'Hybrid',
            'remote' => 'Remote',
        ];

        $correctWorkLocation = '';

        $validateData = $request->validate([
            'jobTitle' => 'required | string',
            'jobDesc' => 'required | string',
            'salary' => 'required | integer',
            'workLocation' => 'required | string',
        ]);

        $selectedWorkLocation = $request->workLocation;

        if (array_key_exists($selectedWorkLocation, $worKLocationMapping)) {
            $correctWorkLocation = $worKLocationMapping[$selectedWorkLocation];
        }

        $newJob = new PostedJob();
        $newJob->created_at = date('Y-m-d');
        $newJob->job_title = $request->jobTitle;
        $newJob->job_desc = $request->jobDesc;
        $newJob->company = 'Strathmore University';
        $newJob->company_location = 'Nairobi, Kenya';
        $newJob->work_location = $correctWorkLocation;
        $newJob->salary = $request->salary;
        $newJob->save();
    }
}
