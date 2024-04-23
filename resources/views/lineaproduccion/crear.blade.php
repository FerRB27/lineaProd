
<form action="/linea_produccion/crear" method="post">
    @csrf
    <label for="nombre">Nombre linea produccion</label>
    <input type="text" id="nombre" name="nombre">

    <br/>
    
    <input type="checkbox" id="isactive" name="isactive">
    <label for="isactive"> Activo</label>
    
    <br/>

    <input type="submit" value="Guardar">
</form>