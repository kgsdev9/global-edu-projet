<?php

namespace App\Http\Controllers;

use App\Services\JobService;
use App\Services\CategoryService;

class HomeController extends Controller
{

protected  $categoryService ;
protected  $JobService ;

public function __construct(CategoryService $categoryService, JobService $JobService)
{
    $this->categoryService = $categoryService ;
    $this->JobService = $JobService ;


}

public function store_job() {
    return view('emploi.store', [
        'globaljob' => $this->JobService->globalJob(),
    ]);
}

public function filterJoblocale() {
    return view('front.job.locale.index', [
        'ressourcelocale' => $this->JobService->filterJoblocale()
    ]);
}


    public function filter_job_internationale() {
        return view('front.job.international.index', [
            'ressourcesInternationale'  =>$this->JobService->filterJobInternational(),
        ]);
    }

    public function detailJob($slug) {

        $urlcurrent =  url()->current() ;

        $shareComponent = \Share::page(
            $urlcurrent .'+2250768365866'
        )
        ->facebook()
        ->twitter()
        ->linkedin()
        ->telegram()
        ->whatsapp()
        ->reddit();



        return view('front.job.detail', [
            'detailJob' => $this->JobService->singleJob($slug),
            'shareComponent' => $shareComponent
        ]);
    }



public function show($slug) {

        return view('front.job.joblinkcategory', [
            'joblinkcategory' => $this->categoryService->categorySingle($slug)
        ]);

}

    public function index()  {
        return view('welcome',  [
            'category' => $this->categoryService->categoryCollection(),
            'jobRessource' =>$this->JobService->collectionJob(),

        ]);
    }
}
