@extends('apps.master')

@section('master')

		<!-- End Navigation -->
        <div class="clearfix"></div>
        <!-- ============================================================== -->
        <!-- Top header  -->
        <!-- ============================================================== -->

        <!-- ======================= Home Banner ======================== -->
        <div class="home-banner margin-bottom-0" style="background:#eff6f2 url(https://via.placeholder.com/1920x900) no-repeat;">
            <div class="container">
                <div class="row justify-content-start">
                    <div class="col-xl-6 col-lg-9 col-md-12 col-sm-12 col-12">
                        <div class="banner_caption text-left mb-4">
                            <h1 class="banner_title ft-bold mb-1">Rechercher des  offres <span class="theme-cl"> d'emploi  </span><br></h1>
                            <p class="fs-md ft-regular">Trouvez des offres d'emploi partout en cote d'ivoire et à l'international.

                            </p>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-10 col-md-12 col-sm-12 col-12">

                        <form class="bg-white rounded p-1">
                            <div class="row no-gutters">
                                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12">
                                    <div class="form-group mb-0 position-relative">
                                        <input type="text" class="form-control lg left-ico" placeholder="Rechercher par nom par categorie...." />
                                        <i class="bnc-ico lni lni-search-alt"></i>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="form-group mb-0 position-relative">
                                        <select class="custom-select lg b-0">
                                          <option value="1">Choose Categories</option>
                                          <option value="2">Information Technology</option>
                                          <option value="3">Cloud Computing</option>
                                          <option value="4">Engineering Services</option>
                                          <option value="5">Healthcare/Pharma</option>
                                          <option value="6">Telecom/ Internet</option>
                                          <option value="7">Finance/Insurance</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 col-12">
                                    <div class="form-group mb-0 position-relative">
                                        <button class="btn full-width custom-height-lg theme-bg text-white fs-md" type="button">Trouver un Job</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <div class="top-searches-key">
                            <ul class="p-0 mt-4 align-items-center d-flex">
                                <li><span class="text-dark ft-medium medium">Top Emploi:</span></li>
                                <li><a href="javascript:void(0);" class="">Informatoque</a></li>
                                <li><a href="javascript:void(0);" class="">Tourisme</a></li>
                                <li><a href="javascript:void(0);" class="">Hotelerie</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- ======================= Home Banner ======================== -->

        <section class="middle">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="sec_title position-relative text-center mb-5">
                            <h6 class="text-muted mb-0">Offre D'emploi Recentes</h6>
                            <h2 class="ft-bold">Les Offres  <span class="theme-cl">Recemments ajoutées</span></h2>
                        </div>
                    </div>
                </div>

                <!-- row -->
                <div class="row align-items-center">
                        @foreach ($jobRessource as  $ressource)
                                   <!-- Single -->
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="jbr-wrap text-left border rounded">
                            <div class="cats-box mlb-res rounded bg-white d-flex align-items-center justify-content-between px-3 py-3">
                                <div class="cats-box rounded bg-white d-flex align-items-center">
                                    <div class="text-center"><img src="https://via.placeholder.com/120x120" class="img-fluid" width="55" alt=""></div>
                                    <div class="cats-box-caption px-2">
                                        <h4 class="fs-md mb-0 ft-medium">{{Str::limit($ressource->title, 36)}}</h4>
                                        <div class="d-block mb-2 position-relative">
                                            <span class="text-muted medium"><i class="lni lni-map-marker mr-1"></i>Région {{$ressource->region->region}}</span>
                                            <span class="muted medium ml-2 theme-cl"><i class="lni lni-briefcase mr-1"></i>{{$ressource->created_at->diffForHumans()}} </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center mlb-last"><a href="{{route('detail.job', $ressource->slug)}}" class="btn gray ft-medium apply-btn fs-sm rounded">Detail<i class="lni lni-arrow-right-circle ml-1"></i></a></div>
                            </div>
                        </div>
                    </div>
                        @endforeach




                </div>
                <!-- row -->

                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="position-relative text-center">
                            <a href="{{route('store.job')}}" class="btn btn-md theme-bg rounded text-light hover-theme">Toutes les offres<i class="lni lni-arrow-right-circle ml-2"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </section>




        <!-- ======================= All category ======================== -->
        <section class="space">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="sec_title position-relative text-center mb-5">
                            <h6 class="text-muted mb-0">Popular Categories</h6>
                            <h2 class="ft-bold">Offre D'emploi  <span class="theme-cl">Par Categorie</span></h2>
                        </div>
                    </div>
                </div>

                <!-- row -->
                <div class="row align-items-center">

                        @foreach ($category as  $cate)

                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                            <div class="cats-wrap text-center">
                                <a href="{{route('job.category', $cate->id)}}" class="cats-box d-block rounded bg-white shadow px-2 py-4">
                                    <div class="text-center mb-2 mx-auto position-relative d-inline-flex align-items-center justify-content-center p-3 theme-bg-light circle">
                                        <i class="lni lni-briefcase fs-lg theme-cl"></i>
                                    </div>
                                    <div class="cats-box-caption">
                                        <h4 class="fs-md mb-0 ft-medium m-catrio">{{ $cate->name}}</h4>
                                        <span class="text-muted">{{count($cate->jobs)}}</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforeach





                </div>
                <!-- /row -->

                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="position-relative text-center">
                            <a href="{{route('category.index')}}" class="btn btn-md bg-dark rounded text-light hover-theme">Consulter Nos Categories<i class="lni lni-arrow-right-circle ml-2"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- ======================= All category ======================== -->




        <!-- ======================= Customer Review ======================== -->
        <section class="middle">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="sec_title position-relative text-center mb-5">
                            <h6 class="text-muted mb-0">Ils ont deja obtenu du boulot</h6>
                            <h2 class="ft-bold">Qu'attendez  <span class="theme-cl">Vous !</span></h2>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12">
                        <div class="reviews-slide px-3">

                            <!-- single review -->
                            <div class="single_review">
                                <div class="sng_rev_thumb"><figure><img src="https://via.placeholder.com/500x500" class="img-fluid circle" alt="" /></figure></div>
                                <div class="sng_rev_caption text-center">
                                    <div class="rev_desc mb-4">
                                        <p class="fs-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                                    </div>
                                    <div class="rev_author">
                                        <h4 class="mb-0">Mark Jevenue</h4>
                                        <span class="fs-sm">CEO of Addle</span>
                                    </div>
                                </div>
                            </div>

                            <!-- single review -->
                            <div class="single_review">
                                <div class="sng_rev_thumb"><figure><img src="https://via.placeholder.com/500x500" class="img-fluid circle" alt="" /></figure></div>
                                <div class="sng_rev_caption text-center">
                                    <div class="rev_desc mb-4">
                                        <p class="fs-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                                    </div>
                                    <div class="rev_author">
                                        <h4 class="mb-0">Henna Bajaj</h4>
                                        <span class="fs-sm">Aqua Founder</span>
                                    </div>
                                </div>
                            </div>

                            <!-- single review -->
                            <div class="single_review">
                                <div class="sng_rev_thumb"><figure><img src="https://via.placeholder.com/500x500" class="img-fluid circle" alt="" /></figure></div>
                                <div class="sng_rev_caption text-center">
                                    <div class="rev_desc mb-4">
                                        <p class="fs-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                                    </div>
                                    <div class="rev_author">
                                        <h4 class="mb-0">John Cenna</h4>
                                        <span class="fs-sm">CEO of Plike</span>
                                    </div>
                                </div>
                            </div>

                            <!-- single review -->
                            <div class="single_review">
                                <div class="sng_rev_thumb"><figure><img src="https://via.placeholder.com/500x500" class="img-fluid circle" alt="" /></figure></div>
                                <div class="sng_rev_caption text-center">
                                    <div class="rev_desc mb-4">
                                        <p class="fs-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                                    </div>
                                    <div class="rev_author">
                                        <h4 class="mb-0">Madhu Sharma</h4>
                                        <span class="fs-sm">Team Manager</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======================= Customer Review ======================== -->


 @endsection
