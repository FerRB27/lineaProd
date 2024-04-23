<h5>Lista de linea produccion</h5>

<a href="/linea_produccion/crear"> Nuevo</a>

<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($lineaProduccionList as $linea_produccion)
            <tr>
                <td> {{ $linea_produccion->nombre }} </td>
                <td> {{ $linea_produccion->isactive == 'Y' ? 'Activo' : 'Inactivo' }} </td>
                <td> 
                    <a href="/linea_produccion/editar/{{ $linea_produccion->idlinea_produccion }}">Editar</a>
                    <a href="/linea_produccion/mostrar/{{ $linea_produccion->idlinea_produccion }}">Detalle</a>
                    <a href="/linea_produccion/eliminar/{{ $linea_produccion->idlinea_produccion }}">Eliminar</a>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>