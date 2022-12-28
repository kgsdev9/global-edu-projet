<div>
    <div class="py-3 theme-bg searchingBar">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-7 col-lg-9 col-md-9 col-sm-12 col-12">
                    <form class="bg-white rounded p-1 border">
                        <div class="row no-gutters">
                            <div class="col-xl-6 col-lg-5 col-md-5 col-sm-12 col-12">
                                <div class="form-group mb-0 position-relative">
                                    <input type="text" class="form-control sm left-ico" placeholder="Rechercher une categorie...">
                                    <i class="bnc-ico lni lni-search-alt"></i>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12">

                            </div>
                            <div class="col-xl-1 col-lg-2 col-md-2 col-sm-12 col-12">
                                <div class="form-group mb-0 position-relative">
                                    <button class="btn full-width custom-height sm rounded bg-dark text-white fs-md" type="button">Go</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                    <div class="d-block position-relative text-right">
                        <a href="#" onclick="openSearch()" class="mlb-btn btn ft-medium rounded text-dark bg-light"><i class="ti-bell mr-1"></i>Poster une Offre</a>
                    </div>
                </div>

            </div>
        </div>
    </div>




    <section class="space gray">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="sec_title position-relative text-center mb-5">
                        <h6 class="text-muted mb-0">Cherchez</h6>
                        <h2 class="ft-bold">NOS CATEGORIES EMPLOI</h2>
                    </div>
                </div>
            </div>

            <!-- row -->
            <div class="row align-items-center">








                @foreach ($category as $value )
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="cats-wrap text-center">
                        <a href="{{route('job.category', $value->id)}}" class="cats-box d-block rounded bg-white px-2 py-4">
                            <div class="text-center mb-2 mx-auto position-relative d-inline-flex align-items-center justify-content-center p-3 theme-bg-light circle">
                                <i class="lni lni-briefcase fs-lg theme-cl"></i>

                            </div>
                            <div class="cats-box-caption">
                                <h4 class="fs-md mb-0 ft-medium m-catrio">{{$value->name}}</h4>
                                <span class="text-muted"> {{count($value->jobs)}} Emploi</span>
                            </div>
                        </a>
                    </div>
                </div>

                @endforeach

            </div>
            <!-- /row -->


            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <ul class="pagination">

                        {{$category->links()}}

                    </ul>
                </div>
            </div>



        </div>
        </div>
    </section>



</div>


