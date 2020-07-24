    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-1">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>
            	@foreach($items as $route => $item)
                @if($route === 0)
                    <li class="breadcrumb-item active" aria-current="page">{{$item}}</li>
                @else
                    <li class="breadcrumb-item"><a href="{{route($route)}}">{{$item}}</a></li>
                @endif
                @endforeach
                {{-- <li class="breadcrumb-item active" aria-current="page">Products</li> --}}
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->
