<?php


namespace App\Services;


use App\Repositories\JobRepository;

class  JobService   {

    protected $jobRepository ;


    public function __construct(JobRepository $jobRepository )
    {
        $this->jobRepository =  $jobRepository ;
    }

    public function collectionJob()  {
        return $this->jobRepository->collectionJob();
    }

    public function globalJob() {
        return $this->jobRepository->globalJob();
    }

    public function  filterJoblocale() {
        return $this->jobRepository->filterJoblocale();
    }

    public function filterJobInternational() {
        return $this->jobRepository->filterJobInternational();
    }

    public function singleJob($slug) {
        return $this->jobRepository->singleJob($slug);
    }






}


