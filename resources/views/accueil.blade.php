@extends('layouts.index')

@section('content')

<section class="bg-half-260 d-table w-100" id="home">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-12">
                <div class="title-heading text-center">
                    <p class="display-6 fw-bold text-white title-dark mb-3" style="font-family: Gill Sans Extrabold, sans-serif; font-size:40px" >
                        Bienvenu à la <span class="text-light text-decoration typewrite"  data-period="2000" data-type='[ "Fédération des Pêcheurs Marins Artisans et Assimilés du Bénin" ]'> </span> <br></p>
                </div>
            </div>
        </div><!--end row-->
    </div> <!--end container-->
</section>

<!--end section-->
<!-- Hero End -->

<!-- Start -->
<section class="section">
    <div class="container mt-50 mt-60">
        {{-- <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title mb-4 pb-2 text-center">
                    <h4 class="title mb-4">Qui sommes nous ?</h4>
                    <p class="para-desc mb-0 mx-auto">
                        La Fédération des Pêcheurs Marins Artisans et Assimilés du Bénin FePeMAA-BENIN est apolitique et à but non lucratif et constituée des associations dénommées APeMAA/Grand-Popo N°9/058/PDM/SG/STCCD ; APeMAA/Ouidah N° 2021/105/DEP-ATL/SG/SAG-Assoc du 07 juillet 2021 ; APeMAA-Cotonou N° 2021/3063/DEP-LIT/SG-Assoc ; APeMAA/SEME-KPODJI N° 2021/064/PDO/SG/SAG/SA du 25 Aout 2021.
                    </p>
                </div>
            </div><!--end col-->
        </div> --}}<!--end row-->

        <div class="row align-items-center">
            <div class="col-lg-5 col-md-5 mt-4 pt-2 mt-sm-0 pt-sm-0">
                <div class="card border-0 work-container work-classic">
                    <div class="card-body p-0">
                        <a href="portfolio-detail-one.html"><img style="height:250px; width:600px;" src="{{ asset('fishing_photo/image4.jpg') }}" class="img-fluid rounded work-image" alt=""></a>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-7 col-md-7 mt-4 pt-2 mt-sm-0 pt-sm-0">
                <div class="section-title ms-lg-4">
                    <h4 class="title mb-4">Qui sommes nous ?</h4>
                    <p class="para-desc mb-0 mx-auto">
                        La Fédération des Pêcheurs Marins Artisans et Assimilés du Bénin FePeMAA-BENIN est apolitique et à but non lucratif et constituée des associations dénommées APeMAA/Grand-Popo N°9/058/PDM/SG/STCCD, 
                        APeMAA/Ouidah N° 2021/105/DEP-ATL/SG/SAG-Assoc du 07 juillet 2021, 
                        APeMAA-Cotonou N° 2021/3063/DEP-LIT/SG-Assoc, 
                        APeMAA/SEME-KPODJI N° 2021/064/PDO/SG/SAG/SA du 25 Aout 2021 et enfin le CHANGE GLOBAL WORLD (CGW) enregistré sous 2020/2763/DEP-ATL/SG/SAG/Assoc.
                    </p>
                </div>
            </div><!--end col-->
        </div>

        <div class="row align-items-center">
            <div class="col-lg-8 col-md-6 mt-4 pt-2">
                <div class="section-title ms-lg-5">
                    <h4 class="title mb-4">Objectifs </h4>
                    <p class="">
                        La FePeMAA-BENIN a pour objectifs de:
                    </p>
                    <ul class="list-unstyled ">
                        <li class="mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>
                            Veiller à la préservation de l’unité, la solidarité, le dialogue, la cohésion au sein de la Fédération 
                        </li>
                        <li class="mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>
                            Défendre les intérêts des membres de la Fédération
                        </li>
                        <li class="mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>
                            Contribuer à la structuration et au renforcement des capacités institutionnelles, Organisationnelles et de gestion de ses membres 
                        </li>
                        <li class="mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>
                            Contribuer à l’élaboration et à la mise en œuvre de politique et programme de développement adapté au secteur                                </li>
                    </ul>
                    
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="section-title ms-lg-5">
                    <h4 class="title mb-4">Membres</h4>
                    <p class="">
                        La Fédération est composée de trois (03) catégories de membres:
                    </p>
                    <ul class="list-unstyled ">
                        <li class="mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Membres fondateurs </li>
                        <li class="mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Membres adhérents </li>
                        <li class="mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Membres d’honneur </li>
                    </ul>
                    
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title mb-4 pb-2 text-center">
                    <h4 class="title mt-3 mb-4">Organes dirigeants de la Fédération</h4>
                </div>
            </div><!--end col-->
        </div>
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="card border-0 text-center features feature-clean rounded">
                    <div class="icons text-primary text-center mx-auto">
                        <i class="uil uil-map-marker-plus d-block rounded h3 mb-0"></i>
                    </div>

                    <div class="card-body p-0 mt-4">
                        <a href="javascript:void(0)" class="title h5 text-dark">Assemblée Générale</a>
                        <div class="mt-2">
                        </div>
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="card border-0 text-center features feature-clean rounded">
                    <div class="icons text-primary text-center mx-auto">
                        <i class="uil uil-estate d-block rounded h3 mb-0"></i>
                    </div>

                    <div class="card-body p-0 mt-4">
                        <a href="javascript:void(0)" class="title h5 text-dark">Bureau Directeur </a>
                        <div class="mt-2">
                        </div>
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="card border-0 text-center features feature-clean rounded">
                    <div class="icons text-primary text-center mx-auto">
                        <i class="uil uil-house-user d-block rounded h3 mb-0"></i>
                    </div>

                    <div class="card-body p-0 mt-4">
                        <a href="javascript:void(0)" class="title h5 text-dark">Commissariat au comptes </a>
                        <div class="mt-2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end container-->
</section>
    
@endsection