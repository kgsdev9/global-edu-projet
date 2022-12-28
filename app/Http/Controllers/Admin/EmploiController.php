<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Services\CategoryService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class EmploiController extends Controller
{

    public $categortService ;
    public $jobRandomCode  ;
    public function __construct(CategoryService $categortService)
    {
        $this->categortService = $categortService ;
        $this->jobRandomCode = Rand(0,10000);
    }


    public function index()
    {

    }

    public function create()
    {
        return view('dashboard.emploi.add', [
            'category' => $this->categortService->categoryCollection(),
            'action' => route('job.store'),
            'method' => 'POST'
        ]);
    }
    public function store(Request $request)
    {
        $this->validatorInput($request->input())->validate();

        dd('merci');
    }


    public function  validatorInput(array $data) {
        $ressources =Validator::make($data,  [
            'title' => ['required', 'string'],
            'region' => ['required', 'string'],
            'status' => ['required', 'string'],
            'category' => ['required'],
            'limit_date' => ['required', 'date'],
            'description' => ['required', 'string'],
        ]);
        return $ressources;
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
