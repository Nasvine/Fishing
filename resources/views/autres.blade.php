@extends('layouts.index')

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
                            <h4 class="title text-white">Présentation de la pêche au Bénin et Quelques liens de documentation</h4>
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
        <section class="section">
            <div class="container mt-50 mt-60">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title mb-4 pb-2 text-center">
                            <h4 class="title mt-3 mb-4">La pêche et les différentes Techniques de pêche au Bénin</h4>
                            <p>La pêche est l'activité consistant à capturer des animaux aquatiques (poissons, crustacés, céphalopodes, etc.) dans leur biotope (océans, mers, cours d'eau, étangs, lacs, mares). Elle est pratiquée par les pêcheurs, comme loisir (pêche récréative ou pêche sportive), 
                                profession (pêche commerciale) ou pour assurer une autosuffisance alimentaire (pêche de subsistance).
                                En effet, au Bénin les techniques et engins de pêche sont nombreux, dépendant de l'espèce recherchée, du milieu, ou encore du bateau ou de l'outil utilisé.
                            </p>
                            <p>On distingue:</p>
                        </div>
                    </div><!--end col-->
                </div>
        
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-5 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <div class="card border-0 work-container work-classic">
                            <div class="card-body p-0">
                                <a href="portfolio-detail-one.html">
                                    <img style="height:300px; width:600px;" src="{{ asset('fishing_photo/image2.jpg') }}" class="img-fluid rounded work-image" alt="">
                                </a>
                            </div>
                        </div>
                    </div><!--end col-->
        
                    <div class="col-lg-7 col-md-7 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <div class="section-title ms-lg-4">
                            <h4 class="title mb-4">La Pêche à pied</h4>
                            <p class="para-desc mb-0 mx-auto">
                                Au Bénin, cette pêche se déroule sur le bord de mer, sur les rochets et îlots, en se déplaçant essentiellement à pied, sans que le pêcheur ne cesse d'avoir un appui au sol et sans équipement de nage ou de plongée. Elle est pratiquée à marée basse. Loisirs joignant l'utile à l'agréable, la pêche à pied fait le bonheur des petits et grand. Pratiquée entre terre et mer sur l'estran, cette partie du littoral qui se couvre et se découvre au fil des marées, chaque partie de pêche à pied vous apporte son lot de surprises et de découverte. Tourteaux, praires, huitres, bigorneaux, étrilles, crevette, ou encore coquilles Saint-Jacques, araignées de mer et moules, que vous réserve cette sortie de pêche.
                            </p>
                        </div>
                    </div><!--end col-->
                </div>
                <div class="row mt-5 align-items-center">
                    <div class="col-lg-7 col-md-7 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <div class="section-title ms-lg-4">
                            <h4 class="title mb-4">La pêche sous marine</h4>
                            <p class="para-desc mb-0 mx-auto">
                                La pêche sous-marine, aussi appelée pêche en plongée, est une pêche sportive consistant à capturer sous l’eau à l’aide d’un harpon certains poissons, mollusques et céphalopodes ainsi qu’à prélever à la main certains crustacés, mollusques et échinodermes comme les oursins. La pêche sous-marine se pratique en apnée avec une combinaison, des palmes, un masque, un tuba, une ceinture de plomb, une bouée de signalisation avec un drapeau et une arbalète sous-marine (ou fusil harpon) si vous chassez des poissons. Afin de préserver le milieu marin, cette activité est très réglementée. Si elle ne nécessite pas de permis de chasse spécifique, le chasseur sous-marin doit être couvert par une assurance (responsabilité civile).
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <div class="card border-0 work-container work-classic">
                            <div class="card-body p-0">
                                <a href="portfolio-detail-one.html"><img style="height:300px; width:600px;" src="{{ asset('fishing_photo/image3.jpg') }}" class="img-fluid rounded work-image" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5 align-items-center">
                    <div class="col-lg-5 col-md-5 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <div class="card border-0 work-container work-classic">
                            <div class="card-body p-0">
                                <a href="portfolio-detail-one.html"><img style="height:300px; width:600px;" src="{{ asset('fishing_photo/image4.jpg') }}" class="img-fluid rounded work-image" alt=""></a>
                            </div>
                        </div>
                    </div><!--end col-->
        
                    <div class="col-lg-7 col-md-7 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <div class="section-title ms-lg-4">
                            <h4 class="title mb-4">Pêche au bord de mer ou en mer</h4>
                            <p class="para-desc mb-0 mx-auto">
                                Nous pouvons énumerer quelques techniques de pêche telles que la pêche au chalut qui consiste à déposer un grand filet de pêche conique ayant la forme d’un entonnoir à l’arrière d’un bateau; la pêche au filet consistant à jeter dans l’eau de grands filets rectangulaires que l’on fait tenir verticalement dans l’eau à l’aide de flotteurs et de lests; 
                                la pêche à la drague qui consiste à jeter une énorme poche (celle-ci est en filet ou en métal, et possède une lame ou des dents) dans les fonds marins et 
                                la pêche aux casiers où on pose d’énormes cages recouvertes d’un grillage au fond de l’eau. Ces cages contiennent un appât (appelé « boëtte ») qui attire tout naturellement les poissons à l’intérieur.
                            </p>
                        </div>
                    </div><!--end col-->
                </div>
            </div><!--end container-->
        </section>
        <section class="section bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title mb-4 pb-2 text-center">
                            <h4 class="title mt-3 mb-4">Quelques documents à télécharger</h4>
                        </div>
                    </div><!--end col-->
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="card features fea-primary rounded p-4 bg-white position-relative overflow-hidden border-0">
                            <span class="h1 icon2 text-primary">
                                <i class="uil uil-file-search-alt h1 text-primary"></i>
                            </span>
                            <div class="card-body p-0 content">
                                <h5>Types de poissons</h5>
                                <p class="para text-muted mb-0">Vous y trouverez en cliquant sur Télechager quelques poissons pêchés au Bénin et leurs description.</p>
                                <a href="{{asset('fishing_photo/Types_de_poissons.pdf')}}" download="Types_de_poissons" class="btn btn-pills btn-primary mt-4">Télécharger</a>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="card features fea-primary rounded p-4 bg-white position-relative overflow-hidden border-0">
                            <span class="h1 icon2 text-primary">
                                <i class="uil uil-file-search-alt h1 text-primary"></i>
                            </span>
                            <div class="card-body p-0 content">
                                <h5>Pêche Continentale</h5>
                                <p class="para text-muted mb-0">Vous y trouverez en cliquant sur Télechager tout sur les pêches au Bénin.</p>
                                <a href="{{asset('fishing_photo/Peche_au_Benin.pdf')}}" download="Peche_au_Benin" class="btn btn-pills btn-primary mt-5">Télécharger</a>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="card features fea-primary rounded p-4 bg-white position-relative overflow-hidden border-0">
                            <span class="h1 icon2 text-primary">
                                <i class="uil uil-file-search-alt h1 text-primary"></i>
                            </span>
                            <div class="card-body p-0 content">
                                <h5>Elevage des poissons</h5>
                                <p class="para text-muted mb-0">Vous y trouverez en cliquant sur Télechager tout sur l'elevage des poissons en étangs
                                    au Bénin.</p>
                                    <a href="{{asset('fishing_photo/Elevage_des_poissons.pdf')}}" download="Elevage_des_poissons" class="btn btn-pills btn-primary mt-4">Télécharger</a>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="card features fea-primary rounded p-4 bg-white position-relative overflow-hidden border-0">
                            <span class="h1 icon2 text-primary">
                                <i class="uil uil-file-search-alt h1 text-primary"></i>
                            </span>
                            <div class="card-body p-0 content">
                                <h5>Statuts de la FePeMAA</h5>
                                <p class="para text-muted mb-0">Vous y trouverez en cliquant sur Télechager tout sur les Statuts de la FePeMAA-BENIN.</p>
                                <a href="{{asset('fishing_photo/STATUT_de_la_FePeMAA.pdf')}}" download="STATUT_de_la_FePeMAA" class="btn btn-pills btn-primary mt-4">Télécharger</a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section>
       
@endsection