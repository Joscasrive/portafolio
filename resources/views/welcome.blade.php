@extends('layouts.template')
@section('content')
    

@foreach ($proyectos as $proyecto)
<!-- Portfolio Item 1-->
<div class="col-md-6 col-lg-4 mb-5">
    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal{{$proyecto->id}}">
        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
        </div>
        <img class="img-fluid" style="width:400px; height:200px" src="{{ asset('storage')."/".$proyecto->img}}"  />
    </div>
</div>

  
    <!-- Portfolio Modal 1-->
    <div class="portfolio-modal modal fade" id="portfolioModal{{$proyecto->id}}" tabindex="-1" aria-labelledby="portfolioModal{{$proyecto->id}}" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body pb-5">
                    <div class="container">
                    
            
                        

<!-- Portfolio Item Heading -->


<!-- Portfolio Item Row -->
<div class="row">

  <div class="col-md-8">
    <img class="img-fluid"  src="{{ asset('storage')."/".$proyecto->img}}" alt="">
  </div>

  <div class="col-md-4">
    <h3 class="my-3">{{$proyecto->name}}</h3>
    <p>{{$proyecto->description}}</p>

              <a href="{{$proyecto->url}}" class="btn btn-primary">
                                    <i class="fas fa-globe"></i>
                                    Más detalle ...
                                </a>

  </div>

</div>
<!-- /.row -->





                     
                        </div>
                    </div>
                </div>
            </div>
        </div>
   

@endforeach
@endsection

