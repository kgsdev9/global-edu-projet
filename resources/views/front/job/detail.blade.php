@extends('apps.master')

@section('master')




<section class="bg-light py-5 position-relative">
    <div class="container">
        <div class="row">

            <div class="col-xl-12 col-lg-8 col-md-10 col-sm-12">

                <div class="bg-white rounded px-3 py-4 mb-4">
                    <div class="jbd-01 d-flex align-items-center justify-content-between">
                        <div class="jbd-flex d-flex align-items-center justify-content-start">
                            <div class="jbd-01-thumb">
                                <img src="https://via.placeholder.com/120x120" class="img-fluid" width="90" alt="">
                            </div>
                            <div class="jbd-01-caption pl-3">
                                <div class="tbd-title"><h4 class="mb-0 ft-medium fs-md">{{Str::limit($detailJob->title, 80)}}</h4></div>
                                <div class="jbl_location mb-3"><span><i class="lni lni-map-marker mr-1"></i>Région  {{Str::limit($detailJob->region->region, 80)}}</span><span class="medium ft-medium text-warning ml-3">Date de cloture  {{$detailJob->created_at->diffForHumans()}} </span></div>
                                <div class="jbl_info01">
                                    <span class="px-2 py-1 ft-medium medium rounded theme-cl theme-bg-light mr-2"> Categorie  {{$detailJob->category->name}}  </span>
                                </div>
                            </div>
                        </div>
                        <div class="jbd-01-right text-right hide-1023">

                            <div class="jbl_button"><a href="javascript:void(0);" class="btn rounded bg-white border fs-sm ft-medium">Offre de   {{$detailJob->entreprise_name}}</a></div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded mb-4">
                    <div class="jbd-01 px-3 py-4">
                        <div class="jbd-details mb-4">
                            <h5 class="ft-medium fs-md"> Description de l'offre</h5>
                            <p>{{$detailJob->description}}</p>

                        </div>

                        <div class="jbd-details mb-3">
                            <h5>Contact de l'entreprise</h5>
                            <div class="position-relative row">
                                <div class="col-lg-12 col-md-12 col-12">
                                    <div class="mb-2 mr-4 ml-lg-0 mr-lg-4">
                                        <div class="d-flex align-items-center">
                                          <div class="rounded-circle bg-light-success theme-cl p-1 small d-flex align-items-center justify-content-center">

                                          </div>
                                          <h6 class="mb-0 ml-3 text-muted fs-sm">E-mail  {{$detailJob->email}}</h6>
                                        </div>
                                    </div>
                                    <div class="mb-2 mr-4 ml-lg-0 mr-lg-4">
                                        <div class="d-flex align-items-center">
                                          <div class="rounded-circle bg-light-success theme-cl p-1 small d-flex align-items-center justify-content-center">
                                           
                                          </div>
                                          <h6 class="mb-0 ml-3 text-muted fs-sm">Numero de telephone  {{$detailJob->telephone}}.</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="jbd-02 px-3 py-3 br-top">
                        <div class="jbd-02-flex d-flex align-items-center justify-content-between">
                            <div class="jbd-02-social">
                                <ul class="jbd-social">
                                    {!! $shareComponent !!}
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
</section>
@endsection
