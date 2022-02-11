@extends('partials.master')
@section('title', 'Searched rides')
    
@section('content')
    
    <div class="container" style="margin-top: 15px;">
        <div class="row">
            <div class="col-md-12">
                <h2> We Suggest:  </h2>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="image-container">
                            <div class="first">
                                <div class="d-flex justify-content-between align-items-center"> <span class="discount">-25%</span> <span class="wishlist"><i class="fa fa-heart-o"></i></span> </div>
                            </div> <img src="{{ asset('imgs/PtepOpe.jpg') }}" class="img-fluid rounded thumbnail-image">
                        </div>
                        <div class="product-detail-container p-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="dress-name">Alpha Cars</h5>
                                <div class="d-flex flex-column mb-2"> <span class="new-price">$3.99</span> <small class="old-price text-right">$5.99</small> </div>
                            </div>
                            
                            <div class="d-flex justify-content-between align-items-center pt-1">
                                <div> <i class="fa fa-star-o rating-star"></i> <span class="rating-number">4.8</span> </div> <span class="buy">BUY +</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="card voutchers">
                            <div class="voutcher-divider">
                                <div class="voutcher-left text-center"> <span class="voutcher-name">Monday Happy</span>
                                    <h5 class="voutcher-code">#MONHPY</h5>
                                </div>
                                <div class="voutcher-right text-center border-left">
                                    <h5 class="discount-percent">20%</h5> <span class="off">Off</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="image-container">
                            <div class="first">
                                <div class="d-flex justify-content-between align-items-center"> <span class="discount">-25%</span> <span class="wishlist"><i class="fa fa-heart-o"></i></span> </div>
                            </div> <img src="{{ asset('imgs/PtepOpe.jpg') }}" class="img-fluid rounded thumbnail-image">
                        </div>
                        <div class="product-detail-container p-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="dress-name">Haseeb Rent a Car</h5>
                                <div class="d-flex flex-column mb-2"> <span class="new-price">$3.99</span> <small class="old-price text-right">$5.99</small> </div>
                            </div>
                            
                            <div class="d-flex justify-content-between align-items-center pt-1">
                                <div> <i class="fa fa-star-o rating-star"></i> <span class="rating-number">4.8</span> </div> <span class="buy">BUY +</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="card voutchers">
                            <div class="voutcher-divider">
                                <div class="voutcher-left text-center"> <span class="voutcher-name">Payday Surprise</span>
                                    <h5 class="voutcher-code">#SRPSPYDY</h5>
                                </div>
                                <div class="voutcher-right text-center border-left">
                                    <h5 class="discount-percent">20%</h5> <span class="off">Off</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="image-container">
                            <div class="first">
                                <div class="d-flex justify-content-between align-items-center"> <span class="discount">-25%</span> <span class="wishlist"><i class="fa fa-heart-o"></i></span> </div>
                            </div> <img src="{{ asset('imgs/PtepOpe.jpg') }}" class="img-fluid rounded thumbnail-image">
                        </div>
                        <div class="product-detail-container p-2">
                            <div class="d-flex justify-content-between ">
                                <h5 class="dress-name">Jibran Rent a Car Service</h5>
                                <div class="d-flex flex-column mb-2"> <span class="new-price">$3.99</span> <small class="old-price text-right">$5.99</small> </div>
                            </div>
                            
                            <div class="d-flex justify-content-between align-items-center pt-1">
                                <div> <i class="fa fa-star-o rating-star"></i> <span class="rating-number">4.2</span> </div> <span class="buy">BUY +</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="card voutchers">
                            <div class="voutcher-divider">
                                <div class="voutcher-left text-center"> <span class="voutcher-name">First order</span>
                                    <h5 class="voutcher-code">#HPYFRST</h5>
                                </div>
                                <div class="voutcher-right text-center border-left">
                                    <h5 class="discount-percent">20%</h5> <span class="off">Off</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="image-container">
                            <div class="first">
                                <div class="d-flex justify-content-between align-items-center"> <span class="discount">-25%</span> <span class="wishlist"><i class="fa fa-heart-o"></i></span> </div>
                            </div> <img src="{{ asset('imgs/PtepOpe.jpg') }}" class="img-fluid rounded thumbnail-image">
                        </div>
                        <div class="product-detail-container p-2">
                            <div class="d-flex justify-content-between ">
                                <h5 class="dress-name"> EZ Rental Services </h5>
                                <div class="d-flex flex-column mb-2"> <span class="new-price">$3.99</span> <small class="old-price text-right">$5.99</small> </div>
                            </div>
                            
                            <div class="d-flex justify-content-between align-items-center pt-1">
                                <div> <i class="fa fa-star-o rating-star"></i> <span class="rating-number">3.8</span> </div> <span class="buy">BUY +</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="card voutchers">
                            <div class="voutcher-divider">
                                <div class="voutcher-left text-center"> <span class="voutcher-name">Vegetarian Food</span>
                                    <h5 class="voutcher-code">#VEGANLOVE</h5>
                                </div>
                                <div class="voutcher-right text-center border-left">
                                    <h5 class="discount-percent">20%</h5> <span class="off">Off</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection