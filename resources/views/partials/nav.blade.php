<nav>
	<ul>
		<li><a class="{{ setActive('home') }}" href="{{ route('home') }}">Inicio</a></li>
		<li><a class="{{ setActive('animes.*') }}" href="{{ route('animes.index') }}">Animes</a></li>
	</ul>
</nav>