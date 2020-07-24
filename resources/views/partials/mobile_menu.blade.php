    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-close"></i></span>

            <form action="#" method="get" class="mobile-search">
                <label for="mobile-search" class="sr-only">Search</label>
                <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search in..." required>
                <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
            </form>

            <ul class="nav nav-pills-mobile nav-border-anim" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="mobile-menu-link" data-toggle="tab" href="#mobile-menu-tab" role="tab" aria-controls="mobile-menu-tab" aria-selected="true">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="mobile-cats-link" data-toggle="tab" href="#mobile-cats-tab" role="tab" aria-controls="mobile-cats-tab" aria-selected="false">Categories</a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="mobile-menu-tab" role="tabpanel" aria-labelledby="mobile-menu-link">
                    <nav class="mobile-nav">
                        <ul class="mobile-menu">
                            <li class="{{setActive('home')}}">
                                <a href="{{route('home')}}">Inicio</a>
                            </li>
                            <li class="{{setActive('animes.*')}}">
                                <a href="">Animes</a>
                                <ul>
                                    <li><a href="{{route('animes.all')}}">Todos</a></li>
                                    <li><a href="{{route('animes.premiere')}}">En estreno</a></li>
                                    <li><a href="#">En oferta</a></li>
                                    <li><a href="#">Audio</a>
                                        <ul>
                                            <li><a href="{{route('animes.audio', 'jap')}}">Japonés</a></li>
                                            <li><a href="{{route('animes.audio', 'cast')}}">Castellano</a></li>
                                            <li><a href="{{route('animes.audio', 'lat')}}">Latino</a></li>
                                            <li><a href="#">Dual (Jap/Cas)</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Tipo</a>
                                        <ul>
                                            <li><a href="#">Película</a></li>
                                            <li><a href="#">Ovas</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Los más vistos</a></li>
                                    <li><a href="#">Top anime</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Doramas</a>
                            </li>
                            <li>
                                <a href="#">Kpop</a>
                            </li>
                            <li>
                                <a href="#">Artículos</a>
                                <ul>
                                    <li><a href="{{route('articles.all')}}">Todos</a></li>
                                    <li><a href="#">En oferta</a></li>
                                    <li><a href="#">Collares</a></li>
                                    <li><a href="#">Peluches</a></li>
                                    <li><a href="#">Figuras</a>
                                        <ul>
                                            <li><a href="#">Naruto Shippuden</a></li>
                                            <li><a href="#">One piece</a></li>
                                            <li><a href="#">Death Note</a></li>
                                            <li><a href="#">Dragon Ball</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Posters</a>
                                    <li><a href="#">Tazas</a>
                                    <li><a href="#">Llaveros</a>
                                    <li><a href="#">Cintas</a>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Prendas</a>
                                <ul>
                                    <li><a href="#">Todos</a>
                                    <li><a href="#">Mochilas</a>
                                    <li><a href="#">Camperas</a>
                                    <li><a href="#">Poleras</a>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Comestibles</a>
                            </li>
                        </ul>
                    </nav><!-- End .mobile-nav -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane fade" id="mobile-cats-tab" role="tabpanel" aria-labelledby="mobile-cats-link">
                    <nav class="mobile-cats-nav">
                        <ul class="mobile-menu">
                            <li>
                                <a href="#">Playstation</a>
                                <ul>
                                    <li>
                                        <a href="#">Games Software</a>

                                        <ul>
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Adventure</a></li>
                                            <li><a href="#">Music</a></li>
                                            <li><a href="#">Racing</a></li>
                                            <li><a href="#">Sports</a></li>
                                            <li><a href="#">Strategy</a></li>
                                            <li><a href="#">Role-Playing Game</a></li>
                                            <li><a href="#">Action-Adventure</a></li>
                                            <li><a href="#">Stealth</a></li>
                                            <li><a href="#">Shooter</a></li>
                                            <li><a href="#">Horror</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">XBOX</a>
                                <ul>
                                    <li>
                                        <a href="#">Nindendo</a>

                                        <ul>
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Adventure</a></li>
                                            <li><a href="#">Music</a></li>
                                            <li><a href="#">Racing</a></li>
                                            <li><a href="#">Sports</a></li>
                                            <li><a href="#">Strategy</a></li>
                                            <li><a href="#">Role-Playing Game</a></li>
                                            <li><a href="#">Action-Adventure</a></li>
                                            <li><a href="#">Stealth</a></li>
                                            <li><a href="#">Shooter</a></li>
                                            <li><a href="#">Horror</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Game Console & Accessories</a>

                                        <ul>
                                            <li><a href="#">Console</a></li>
                                            <li><a href="#">Headsets</a></li>
                                            <li><a href="#">Collectibles</a></li>
                                            <li><a href="#">Gaming Chairs</a></li>
                                            <li><a href="#">Controller</a></li>
                                            <li><a href="#">Digital</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Nindendo</a></li>
                            <li><a href="#">PC Gaming</a></li>
                            <li><a href="#">Phones & Tablets</a></li>
                            <li><a href="#">Pre-owned</a></li>
                            <li><a href="#">Deals</a></li>
                            <li><a href="#">Coming Soon</a></li>
                            <li><a href="#">Accessories</a></li>
                        </ul>
                    </nav><!-- End .mobile-cats-nav -->
                </div><!-- .End .tab-pane -->
            </div><!-- End .tab-content -->

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->