
<a href="/producto/lista"> Lista</a>

<form action="/producto/editar/{{ $producto->idproducto }}" method="post">
    @csrf

    <label for="idlinea_produccion">Linea produccion</label>
    <select id="idlinea_produccion" name="idlinea_produccion">

        @foreach ($lineaProduccionList as $linea_produccion)
            <option {{ $producto->idlinea_produccion == $linea_produccion->idlinea_produccion ? "selected='selected'" : ''}} value="{{ $linea_produccion->idlinea_produccion }}"> {{ $linea_produccion->nombre }}</option>
        @endforeach
    </select>
    <br/>
    <label for="nombre">Nombre producto</label>
    <input type="text" id="nombre" name="nombre" value="{{ $producto->nombre }}">
    <br/>
    <label for="nombre">Codigo Producto</label>
    <input type="text" id="codigo" name="codigo" value="{{ $producto->codigo }}">
    <br/>
    <input type="checkbox" id="isactive" name="isactive" {{ $producto->isactive == "Y" ? 'checked' : ''  }}>
    <label for="isactive"> Activo</label>
    <br/>

    <input type="submit" value="Guardar">
</form>