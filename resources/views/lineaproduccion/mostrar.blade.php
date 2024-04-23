
<a href="/linea_produccion/lista"> Lista </a>

<h5>Detalle</h5>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Estado</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $linea_produccion->idlinea_produccion }}</td>
            <td>{{ $linea_produccion->nombre }}</td>
            <td>{{ $linea_produccion->isactive == 'Y' ? 'Activo' : 'Inactivo' }}</td>
        </tr>
    </tbody>
</table>