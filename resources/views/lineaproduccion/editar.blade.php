
<a href="/linea_produccion/lista"> Lista</a>

<form action="/linea_produccion/editar/{{ $linea_produccion->idlinea_produccion }}" method="post">
    @csrf
    <label for="nombre">Nombre linea produccion</label>
    <input type="text" id="nombre" name="nombre" value="{{ $linea_produccion->nombre }}">

    <br/>
    
    <input type="checkbox" id="isactive" name="isactive" {{ $linea_produccion->isactive == "Y" ? 'checked' : ''  }}>
    <label for="isactive"> Activo</label>
    
    <br/>

    <input type="submit" value="Guardar">
</form>