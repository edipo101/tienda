            <header class="header header-intro-clearance header-3">
                <div class="header-middle">
                    <div class="container">
                        <div class="header-left">
                            <button class="mobile-menu-toggler">
                                <span class="sr-only">Toggle mobile menu</span>
                                <i class="icon-bars"></i>
                            </button>

                            <a href="index.html" class="logo">
                                <img src="{{config('app.url')}}/assets/images/logo4.png" alt="Molla Logo">
                            </a>
                        </div><!-- End .header-left -->

                        <div class="header-center">
                            <div class="header-search header-search-extended header-search-visible d-none d-lg-block">
                                <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                                <form action="{{route('products.search')}}" method="get">
                                    <div class="header-search-wrapper search-wrapper-wide">
                                        <label for="q" class="sr-only">Buscar</label>
                                        <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                                        <input type="search" class="form-control" name="q" id="q" placeholder="Buscar producto ..." required value="{{request('q')}}">
                                    </div><!-- End .header-search-wrapper -->
                                </form>
                            </div><!-- End .header-search -->
                        </div>

                        <div class="header-right">
                            <div class="header-dropdown-link">
                                <div class="account">
                                    <a href="dashboard.html" title="My account">
                                        <div class="icon">
                                            <i class="icon-user"></i>
                                        </div>
                                        <p>Mi cuenta</p>
                                    </a>
                                </div><!-- End .compare-dropdown -->

                                {{-- <div class="wishlist">
                                    <a href="wishlist.html" title="Wishlist">
                                        <div class="icon">
                                            <i class="icon-heart-o"></i>
                                            <span class="wishlist-count badge">3</span>
                                        </div>
                                        <p>Los más vendidos</p>
                                    </a>
                                </div> --}}

                            </div>
                        </div><!-- End .header-right -->
                    </div><!-- End .container -->
                </div><!-- End .header-middle -->

                <div class="header-bottom sticky-header">
                    <div class="container">
                        <div class="header-center">
                            <nav class="main-nav">
                                <ul class="menu sf-arrows">
                                    <li class="{{setActive('home')}}">
                                        <a href="{{route('home')}}">Inicio</a>
                                    </li>
                                    <li class="{{setActive('animes.*')}}">
                                        <a href="#">Animes</a>
                                        {{-- <span>Animes</span> --}}
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
                                            <li><a href="#">Categoria</a>                                                
                                                <ul>
                                                    @foreach(App\Category::get() as $category)
                                                    <li><a href="{{route('animes.by_category', $category->slug)}}">{{title_case($category->categ_name)}}</a></li>
                                                    @endforeach
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

                                </ul><!-- End .menu -->
                            </nav><!-- End .main-nav -->
                        </div><!-- End .header-center -->

                    </div><!-- End .container -->
                </div><!-- End .header-bottom -->
            </header><!-- End .header -->