
<a href="/producto/lista"> Lista</a>

<form action="/producto/crear" method="post">
    @csrf

    <label for="idlinea_produccion">Linea produccion</label>
    <select id="idlinea_produccion" name="idlinea_produccion">

        @foreach ($lineaProduccionList as $linea_produccion)
            <option value="{{ $linea_produccion->idlinea_produccion }}"> {{ $linea_produccion->nombre }}</option>
        @endforeach
    </select>
    <br/>
    <label for="nombre">Nombre producto</label>
    <input type="text" id="nombre" name="nombre">
    <br/>
    <label for="nombre">Codigo Producto</label>
    <input type="text" id="codigo" name="codigo">
    <br/>
    <input type="checkbox" id="isactive" name="isactive">
    <label for="isactive"> Activo</label>
    <br/>

    <input type="submit" value="Guardar">
</form>