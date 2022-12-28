<?php

namespace App\Repositories ;

use App\Models\Job;
use App\Models\Category;


class    CategoryRepository   {

    protected  $category  ;
    protected $job ;


    public function   __construct(Category $category, Job $job)
        {
            $this->category = $category ;
            $this->job = $job ;
    }

    public function collectionSingle($id) {
        return $this->job->where('category_id', $id)->paginate(5);
    }


    public function collectionCategory() {
        return $this->category->inRandomOrder()->take(12)->get();
    }






}
