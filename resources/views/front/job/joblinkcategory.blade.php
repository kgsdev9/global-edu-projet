@extends('apps.master')

@section('master')

<div class="py-3 theme-bg searchingBar">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-xl-7 col-lg-9 col-md-9 col-sm-12 col-12">
                <form class="bg-white rounded p-1 border">
                    <div class="row no-gutters">
                        <div class="col-xl-6 col-lg-5 col-md-5 col-sm-12 col-12">
                            <div class="form-group mb-0 position-relative">
                                <input type="text" class="form-control sm left-ico" placeholder="Job Title, Keyword or Company">
                                <i class="bnc-ico lni lni-search-alt"></i>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12">
                            <div class="form-group mb-0 position-relative">
                                <input type="text" class="form-control sm left-ico" placeholder="Location or Zip Code">
                                <i class="bnc-ico lni lni-target"></i>
                            </div>
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
                    <a href="#" onclick="openSearch()" class="mlb-btn btn ft-medium rounded text-dark bg-light"><i class="ti-bell mr-1"></i>Job Alert</a>
                </div>
            </div>

        </div>
    </div>
</div>


<section class="bg-light middle">
    <div class="container">

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                <div class="row align-items-center justify-content-between mx-0 bg-white rounded py-2 mb-4">
                    <div class="col-xl-3 col-lg-4 col-md-5 col-sm-12">
                        <h6 class="mb-0 ft-medium fs-sm"> {{count($joblinkcategory)}}  Offre Emploi pour cette categorie</h6>
                    </div>

                    <div class="col-xl-9 col-lg-8 col-md-7 col-sm-12">
                        <div class="filter_wraps elspo_wrap d-flex align-items-center justify-content-end">
                            <div class="single_fitres mr-2 br-right">
                                <select class="custom-select simple">
                                  <option value="1" selected="">Trié par </option>
                                  <option value="2">Date de creation </option>
                                  <option value="3">Urgent</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- row -->
        <div class="row align-items-center">

            <!-- Single -->

            @foreach ($joblinkcategory as  $detail)
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="jbr-wrap text-left border rounded">
                    <div class="cats-box mlb-res rounded bg-white d-flex align-items-center justify-content-between px-3 py-3">
                        <div class="cats-box rounded bg-white d-flex align-items-center">
                            <div class="text-center"><img src="https://via.placeholder.com/120x120" class="img-fluid" width="55" alt=""></div>
                            <div class="cats-box-caption px-2">
                                <h4 class="fs-md mb-0 ft-medium">{{Str::limit($detail->title, 36)}}</h4>
                                <div class="d-block mb-2 position-relative">
                                    <span class="text-muted medium"><i class="lni lni-map-marker mr-1"></i> Région {{  $detail->region->name}}</span>
                                    <span class="muted medium ml-2 theme-cl"><i class="lni lni-briefcase mr-1"></i>Ajouté </span>
                                    <span class="muted medium ml-2 theme-cl">{{  $detail->created_at->diffForHumans() }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mlb-last"><a href="{{route('detail.job', $detail->slug)}}" class="btn gray ft-medium apply-btn fs-sm rounded">Detail<i class="lni lni-arrow-right-circle ml-1"></i></a></div>
                    </div>
                </div>
            </div>
            @endforeach



        </div>
        <!-- row -->

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <ul class="pagination">

                  {{$joblinkcategory->links()}}

                </ul>
            </div>
        </div>

    </div>
</section>




@endsection
