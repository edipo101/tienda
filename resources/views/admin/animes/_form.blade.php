		{{ csrf_field() }}
		<h3>Datos generales</h3>
		<input type="text" name="name" placeholder="Nombre del producto" value="{{ old('name', $anime->name) }}"><br>
		<textarea name="description" id="" cols="30" rows="5" placeholder="Descripción">{{ old('description', $anime->description) }}</textarea><br>
		<input type="text" name="purchase_price" placeholder="Precio de compra" value="{{ old('purchase_price', $anime->purchase_price) }}"><br>
		<input type="text" name="sale_price" placeholder="Precio de venta" value="{{ old('sale_price', $anime->sale_price) }}"><br>
		
		<h3>Datos del anime</h3>
		<textarea name="synopsis" id="" cols="30" rows="5" placeholder="Sinopsis">{{ old('synopsis', $anime->synopsis) }}</textarea><br>
		<input type="text" name="episodes" placeholder="Nro. de episodios" value="{{ old('episodes', $anime->episodes) }}"><br>
		<input type="text" name="release_date" placeholder="Fecha de estreno" value="{{ old('release_date', $anime->release_date) }}"><br>
		<?php
			$selected = old('state', $anime->state);
		?>
		<select name="state" id="">
			<option value="">Seleccionar</option>
			@foreach($options as $option)
				<option value="{{ $option }}"{{ ($option == $selected) ? 'selected': ''}}>{{ $option }}</option>
			@endforeach
		</select><br>
		
		<button>Enviar</button>