<?php
namespace  App\Repositories  ;
use App\Models\Job;
use App\Models\TypeJob;

class    JobRepository    {

protected $job ;


public function __construct(Job $job)
{
    $this->job = $job ;
}


public function singleJob($slug) {
    return $this->job->where('slug', $slug)->first();
}

public function filterJobInternational() {
    $typeJob = TypeJob::where('name', '=',  'internationale')->first();
    return $this->job->where('type_job_id', $typeJob->id)->paginate(20);
}

public function filterJoblocale() {
    $typeJob = TypeJob::where('name', '=',  'locale')->first();
    return $this->job->where('type_job_id', $typeJob->id)->paginate(20);
}


public function    globalJob() {
    return $this->job->orderbyDesc('created_at')->paginate(30);
}

public function collectionJob() {
    return $this->job->inRandomOrder()->OrderbyDesc('created_at')->take(10)->get();
}






}
