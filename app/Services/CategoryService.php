<?php

namespace App\Services ;

use App\Repositories\CategoryRepository ;

class    CategoryService {

protected  $categoryRepository  ;


public function __construct(CategoryRepository $categoryRepository)
{
    $this->categoryRepository = $categoryRepository;
}


public function categorySingle($id) {
    return $this->categoryRepository->collectionSingle($id);
}



public function categoryCollection() {
    return $this->categoryRepository->collectionCategory();

}


}
