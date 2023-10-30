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
                            <h4 class="title text-white">Contactez-nous</h4>
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

        <!-- Hero Start -->
        <section class="section pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card border-0 text-center features feature-clean">
                            <div class="icons text-primary text-center mx-auto">
                                <i class="uil uil-phone d-block rounded h3 mb-0"></i>
                            </div>
                            <div class="content mt-3">
                                <h5 class="fw-bold">Téléphone</h5>
                                <p class="">Pour nous contactez par télephone, vous avez le choix entre ces deux numéros.</p>
                                <a href="tel:97685646" class="text-primary">(+229) 97 68 56 46 / 96 68 67 51</a>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-md-4 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="card border-0 text-center features feature-clean">
                            <div class="icons text-primary text-center mx-auto">
                                <i class="uil uil-envelope d-block rounded h3 mb-0"></i>
                            </div>
                            <div class="content mt-3">
                                <h5 class="fw-bold">Email</h5>
                                <p class="">Vous avez aussi la possibilité de nous envoyez des mails par ce canal.</p>
                                <a href="mailto:fepemaabenin@gmail.com" class="text-primary">fepemaabenin@gmail.com</a>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-md-4 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="card border-0 text-center features feature-clean">
                            <div class="icons text-primary text-center mx-auto">
                                <i class="uil uil-map-marker d-block rounded h3 mb-0"></i>
                            </div>
                            <div class="content mt-3">
                                <h5 class="fw-bold">Localisation</h5>
                                <p class="">FePeMAA - BENIN COTONOU-XWLACODJI Port de pêche artisanale <br>01BP 3475 COTONOU.</p>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-100 mt-60">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6 pt-2 pt-sm-0 order-2 order-md-1">
                        <div class="card shadow rounded border-0">
                            <div class="card-body py-5">
                                <h4 class="card-title">Envoyez un message</h4>
                                <div class="custom-form mt-3">
                                    <form name="myForm">
                                        <p id="error-msg" class="mb-0"></p>
                                        <div id="simple-msg"></div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Nom <span class="text-danger">*</span></label>
                                                    <div class="form-icon position-relative">
                                                        <i data-feather="user" class="fea icon-sm icons"></i>
                                                        <input name="name" id="name" type="text" class="form-control ps-5" placeholder="Name :">
                                                    </div>
                                                </div>
                                            </div>
        
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Email <span class="text-danger">*</span></label>
                                                    <div class="form-icon position-relative">
                                                        <i data-feather="mail" class="fea icon-sm icons"></i>
                                                        <input name="email" id="email" type="email" class="form-control ps-5" placeholder="Email :">
                                                    </div>
                                                </div> 
                                            </div><!--end col-->
        
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Objet</label>
                                                    <div class="form-icon position-relative">
                                                        <i data-feather="book" class="fea icon-sm icons"></i>
                                                        <input name="subject" id="subject" class="form-control ps-5" placeholder="subject :">
                                                    </div>
                                                </div>
                                            </div><!--end col-->
        
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Commentaire <span class="text-danger">*</span></label>
                                                    <div class="form-icon position-relative">
                                                        <i data-feather="message-circle" class="fea icon-sm icons clearfix"></i>
                                                        <textarea name="comments" id="comments" rows="4" class="form-control ps-5" placeholder="Message :"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button  id="submit" name="send" class="btn btn-primary">Envoyer</button>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </form>
                                </div><!--end custom-form-->
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-2 col-md-6 order-1 order-md-2">
                    </div>

                    <div class="col-lg-5 col-md-6 order-1 order-md-2">
                        <div class="card border-0">
                            <div class="card-body p-0">
                                <img src="{{ asset('fishing_photo/image8.png') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section>
@endsection