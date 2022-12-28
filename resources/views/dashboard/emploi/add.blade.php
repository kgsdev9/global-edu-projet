@extends('dashboard.master.master')

@section('dashboard')
<main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid">
      <!-- Page Header -->
      <div class="page-header">
        <div class="row align-items-center">
          <div class="col-sm mb-2 mb-sm-0">


            <h1 class="page-header-title">Nouvelle Offre</h1>


          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>
      <!-- End Page Header -->

      <div class="row">
        <div class="col-lg-12 mb-3 mb-lg-0">
          <!-- Card -->
          <div class="card mb-3 mb-lg-5">
            <!-- Header -->
            <div class="card-header">
              <h4 class="card-header-title">Informations sur le job</h4>
            </div>
            <!-- End Header -->

            <!-- Body -->
            <form action="{{$action}}" method="{{$method}}">
                @csrf
            <div class="card-body">
              <!-- Form -->
              <div class="mb-4">
                <label for="productNameLabel" class="form-label">Lebellé du poste  @error('title')
                        <small  class="text-danger">{{$message}}</small>
                @enderror </label>

                <input type="text" class="form-control" name="title" id="productNameLabel" placeholder="Exemple:Developpeur D'application" aria-label="Shirt, t-shirts, etc." value="{{old('title')}}">
              </div>
              <!-- End Form -->

              <div class="row">
                <div class="col-sm-6">
                  <!-- Form -->
                  <div class="mb-4">
                    <label for="SKULabel" class="form-label">Nom De L'entreprise (Optional)</label>

                    <input type="text" class="form-control" name="entreprise_name" id="SKULabel" placeholder="KHMS GROUPs" >
                  </div>
                  <!-- End Form -->
                </div>
                <!-- End Col -->
                <div class="col-sm-6">
                  <!-- Form -->
                  <div class="mb-4">
                    <label for="weightLabel" class="form-label">Région  @error('region')
                        <small  class="text-danger">{{$message}}</small>
                    @enderror</label>

                    <div class="input-group">
                        <select name="region" id="" class="form-control">
                            <option value="">----------------</option>
                            <option value="">Abidjan</option>
                            <option value="">Yamoussokro</option>
                        </select>

                    </div>


                  </div>
                  <!-- End Form -->
                </div>
                <!-- End Col -->
              </div>


              <div class="row">
                <div class="col-sm-6">
                  <!-- Form -->
                  <div class="mb-4">
                    <label for="SKULabel" class="form-label">Visibilite  de L'Offre</label>
                    <select name="status" id="" class="form-control">
                        <option value="">------------</option>
                        <option value="urgent">Urgent</option>
                        <option value="normale">Normale</option>
                    </select>
                  </div>
                  <!-- End Form -->
                </div>
                <!-- End Col -->

                <div class="col-sm-6">
                  <!-- Form -->
                  <div class="mb-4">
                    <label for="weightLabel" class="form-label">Categorie De L'offre</label>
                    <div class="input-group">
                        <select name="category_id" id="" class="form-control">
                            @foreach ($category as $category )
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach


                        </select>

                    </div>


                  </div>
                  <!-- End Form -->
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->


              <div class="row">
                <div class="col-sm-12">
                  <!-- Form -->
                  <div class="mb-4">
                    <label for="SKULabel" class="form-label">Date limite</label>

                    <input type="date" class="form-control" name="limit_date" id="SKULabel" placeholder="KHMS GROUPs" >
                  </div>
                  <!-- End Form -->
                </div>
                <!-- End Col -->


                <!-- End Col -->
              </div>




              <label class="form-label">Déscription <span class="form-label-secondary"></span></label>
              <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
              <!-- Quill -->
              <div>

              </div >
              <div class="col-md-12">
                <br>
                <button class="btn btn-primary btn-sm">Enregistrer L'offre</button>
              </div>

              <!-- End Quill -->
            </div>
            <!-- Body -->

          </div>
        </form>
          <!-- End Card -->

          <!-- Card -->
          <div class="card mb-3 mb-lg-5">
            <!-- Header -->

            <!-- End Header -->

            <!-- Body -->

            <!-- Body -->
          </div>
          <!-- End Card -->


        </div>
        <!-- End Col -->


        <!-- End Col -->
      </div>
      <!-- End Row -->


    </div>
    <!-- End Content -->





    <!-- End Footer -->
  </main>

@endsection
