<h5>Lista de Productos</h5>

<a href="/producto/crear"> Nuevo</a>

<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Codigo</th>
            <th>Fecha creacion</th>
            <th>Estado</th>
            <th>Linea Produccion</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($productoList as $producto)
            <tr>
                <td> {{ $producto->nombre }} </td>
                <td> {{ $producto->codigo }} </td>
                <td> {{ $producto->created }} </td>
                <td> {{ $producto->isactive == 'Y' ? 'Activo' : 'Inactivo' }} </td>
                <td> {{ $producto->nombre_linea_produccion }} </td>
                <td> 
                    <a href="/producto/editar/{{ $producto->idproducto }}">Editar</a>
                    <a href="/producto/mostrar/{{ $producto->idproducto }}">Detalle</a>
                    <a href="/producto/eliminar/{{ $producto->idproducto }}">Eliminar</a>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>