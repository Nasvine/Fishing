@extends("layouts.index")

@section('content')

<style>
    .bg{
        background-color: #383f50;
    }
</style>
    <section class="bg-half bg d-table w-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class="page-next-level">
                            <h4 class="title text-white">Quelques Photos & Videos</h4>
                            <div class="page-next">
                                <nav aria-label="breadcrumb" class="d-inline-block">
                                    <ul class="breadcrumb bg-white rounded shadow mb-0">
                                        <li class="breadcrumb-item"><a href="#"> FePeMAA-BENIN</a></li>
                                        
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>  <!--end col-->
                </div><!--end row-->
            </div> <!--end container-->
        </section>

        <section class="section"><!--(.work-process) css write in (_feature.scss)-->

            <div class="container mt-50 pt-50">

                <div class="row">
                    <div class="col-md-6 col-12 mt-4 pt-2">
                        <div class="card border-0 work-container work-classic">
                            <div class="card-body p-0">
                                <a href="portfolio-detail-one.html"><img style="height:310px; width:600px;" src="{{ asset('fishing_photo/image1.jpg') }}" class="img-fluid rounded work-image" alt=""></a>
                                <div class="content pt-3">
                                    <h5 class="mb-0"><a href="portfolio-detail-one.html" class="text-dark title">Image 1</a></h5>
                                                     
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-md-6 col-12 mt-4 pt-2">
                        <div class="card border-0 work-container work-classic">
                            <div class="card-body p-0">
                                <video style="height:310px; width:600px;" controls class="img-fluid rounded work-image">
                                    <source src="{{ asset('fishing_photo/vid1.mp4') }}" type=video/ogg> <source src="/build/videos/arcnet.io(7-sec).mp4" type=video/mp4>
                                  </video>
                                {{-- <a href="portfolio-detail-one.html"><img src="{{ asset('fishing_photo/image3.jpg') }}" class="img-fluid rounded work-image" alt=""></a>
                                --}}
                                <div class="content pt-3">
                                    <h5 class="mb-0"><a href="portfolio-detail-one.html" class="text-dark title">Video 1</a></h5>
                                    </div> 
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-md-6 col-12 mt-4 pt-2">
                        <div class="card border-0 work-container work-classic">
                            <div class="card-body p-0">
                                <video style="height:310px; width:600px;" controls class="img-fluid rounded work-image">
                                    <source src="{{ asset('fishing_photo/vid2.mp4') }}" type=video/ogg> <source src="/build/videos/arcnet.io(7-sec).mp4" type=video/mp4>
                                  </video>
                                {{-- <a href="portfolio-detail-one.html"><img src="{{ asset('fishing_photo/image3.jpg') }}" class="img-fluid rounded work-image" alt=""></a>
                                --}}
                                <div class="content pt-3">
                                    <h5 class="mb-0"><a href="portfolio-detail-one.html" class="text-dark title">Video 2</a></h5>
                                    </div> 
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-md-6 col-12 mt-4 pt-2">
                        <div class="card border-0 work-container work-classic">
                            <div class="card-body p-0">
                                <a href="portfolio-detail-one.html"><img style="height:310px; width:600px;" style="height:310px; width:600px;" src="{{ asset('fishing_photo/image2.jpg') }}" class="img-fluid rounded work-image" alt=""></a>
                                <div class="content pt-3">
                                    <h5 class="mb-0"><a href="portfolio-detail-one.html" class="text-dark title">Image 2</a></h5>
                                                  </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-md-6 col-12 mt-4 pt-2">
                        <div class="card border-0 work-container work-classic">
                            <div class="card-body p-0">
                                <a href="portfolio-detail-one.html"><img style="height:310px; width:600px;" src="{{ asset('fishing_photo/image5.jpg') }}" class="img-fluid rounded work-image" alt=""></a>
                                <div class="content pt-3">
                                    <h5 class="mb-0"><a href="portfolio-detail-one.html" class="text-dark title">Image 3</a></h5>
                                                   </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-md-6 col-12 mt-4 pt-2">
                        <div class="card border-0 work-container work-classic">
                            <div class="card-body p-0">
                                <video style="height:310px; width:600px;" controls class="img-fluid rounded work-image">
                                    <source src="{{ asset('fishing_photo/vid3.mp4') }}" type=video/ogg> <source src="/build/videos/arcnet.io(7-sec).mp4" type=video/mp4>
                                  </video>
                                {{-- <a href="portfolio-detail-one.html"><img src="{{ asset('fishing_photo/image3.jpg') }}" class="img-fluid rounded work-image" alt=""></a>
                                --}}
                                <div class="content pt-3">
                                    <h5 class="mb-0"><a href="portfolio-detail-one.html" class="text-dark title">Video 3</a></h5>
                                    </div> 
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

               {{--  <div class="row justify-content-center">
                    <div class="col-12 text-center mt-4 pt-2">
                        <a href="portfolio-modern-three.html" class="btn btn-primary">See More <i class="uil uil-angle-right align-middle"></i></a>
                    </div><!--end col-->
                </div> --}}<!--end row-->
            </div><!--end container-->
        </section>
@endsection