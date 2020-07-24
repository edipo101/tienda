                {{-- {{var_dump($animes)}} --}}
                <div class="bg-light pt-3 pb-5 mb-5">
                    <div class="container">
                        <ul class="nav nav-pills nav-big nav-border-anim justify-content-center mb-5" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="products-trending-link" data-toggle="tab" href="#products-trending-tab" role="tab" aria-controls="products-trending-tab" aria-selected="true">Animes en estreno</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="products-new-link" data-toggle="tab" href="#products-new-tab" role="tab" aria-controls="products-new-tab" aria-selected="false">Doramas en estreno</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="products-best-link" data-toggle="tab" href="#products-best-tab" role="tab" aria-controls="products-best-tab" aria-selected="false">Kpop en estreno</a>
                            </li>
                        </ul>
                        <div class="tab-content tab-content-carousel">
                            <div class="tab-pane p-0 fade show active" id="products-trending-tab" role="tabpanel" aria-labelledby="products-trending-link">
                                <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                                    data-owl-options='{
                                        "nav": false, 
                                        "dots": true,
                                        "margin": 20,
                                        "loop": false,
                                        "responsive": {
                                            "0": {
                                                "items":2
                                            },
                                            "480": {
                                                "items":2
                                            },
                                            "768": {
                                                "items":3
                                            },
                                            "992": {
                                                "items":4
                                            },
                                            "1200": {
                                                "items":5,
                                                "nav": true
                                            }
                                        }
                                    }'>                                    
                                    @include('partials._premiere_animes')                                    
                                </div><!-- End .owl-carousel -->
                            </div><!-- .End .tab-pane -->
                            <div class="tab-pane p-0 fade" id="products-new-tab" role="tabpanel" aria-labelledby="products-new-link">
                                <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                                    data-owl-options='{
                                        "nav": false, 
                                        "dots": true,
                                        "margin": 20,
                                        "loop": false,
                                        "responsive": {
                                            "0": {
                                                "items":2
                                            },
                                            "480": {
                                                "items":2
                                            },
                                            "768": {
                                                "items":3
                                            },
                                            "992": {
                                                "items":4
                                            },
                                            "1200": {
                                                "items":5,
                                                "nav": true
                                            }
                                        }
                                    }'>
                                    @yield('premiere_dramas')
                                </div><!-- End .owl-carousel -->
                            </div><!-- .End .tab-pane -->
                            <div class="tab-pane p-0 fade" id="products-best-tab" role="tabpanel" aria-labelledby="products-best-link">
                                <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                                    data-owl-options='{
                                        "nav": false, 
                                        "dots": true,
                                        "margin": 20,
                                        "loop": false,
                                        "responsive": {
                                            "0": {
                                                "items":2
                                            },
                                            "480": {
                                                "items":2
                                            },
                                            "768": {
                                                "items":3
                                            },
                                            "992": {
                                                "items":4
                                            },
                                            "1200": {
                                                "items":5,
                                                "nav": true
                                            }
                                        }
                                    }'>
                                    @yield('carousel')
                                </div><!-- End .owl-carousel -->
                            </div><!-- .End .tab-pane -->
                        </div><!-- End .tab-content -->
                    </div><!-- End .container -->
                </div><!-- End .bg-light pt-4 pb-4 -->