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
                    <a href="#" onclick="openSearch()" class="mlb-btn btn ft-medium rounded text-dark bg-light"><i class="ti-bell mr-1"></i>Offre Internationale</a>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="row align-items-center">



    <!-- Single -->

    @foreach ($ressourcesInternationale as  $value)
    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
        <div class="jbr-wrap text-left border rounded">
            <div class="cats-box mlb-res rounded bg-white d-flex align-items-center justify-content-between px-3 py-3">
                <div class="cats-box rounded bg-white d-flex align-items-center">
                    <div class="text-center"><img src="https://via.placeholder.com/120x120" class="img-fluid" width="55" alt=""></div>
                    <div class="cats-box-caption px-2">
                        <h4 class="fs-md mb-0 ft-medium">{{ Str::limit($value->title, 36)}}</h4>
                        <div class="d-block mb-2 position-relative">
                            <span class="text-muted medium"><i class="lni lni-map-marker mr-1"></i>Région , {{$value->region->region}}</span>
                            <span class="muted medium ml-2 text-purple"><i class="lni lni-briefcase mr-1"></i>{{$value->typejob->name}}</span>
                        </div>
                    </div>
                </div>
                <div class="text-center mlb-last"><a href="{{route('detail.job', $value->slug)}}" class="btn gray ft-medium apply-btn fs-sm rounded">Apply Job<i class="lni lni-arrow-right-circle ml-1"></i></a></div>
            </div>
        </div>
    </div>
    @endforeach
</div>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <ul class="pagination">

            {{$ressourcesInternationale->links()}}

        </ul>
    </div>
</div>


@endsection


