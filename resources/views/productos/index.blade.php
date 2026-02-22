<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="text-primary"><i class="fas fa-boxes"></i> Inventario StockLaravel</h2>
    
    <div>
        <a href="{{ route('productos.create') }}" class="btn btn-success me-2">
            <i class="fas fa-plus"></i> Agregar Producto
        </a>

        <form method="POST" action="{{ route('logout') }}" class="d-inline">
            @csrf
            <button type="submit" class="btn btn-outline-danger">
                <i class="fas fa-sign-out-alt"></i> Salir
            </button>
        </form>
    </div>
</div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card shadow border-0">
        <div class="card-body">
            <table class="table table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($productos as $producto)
                    <tr>
                        <td><strong>#{{ $producto->id }}</strong></td>
                        <td>{{ $producto->nombre }}</td>
                        <td class="text-muted">{{ Str::limit($producto->descripcion, 30) }}</td>
                        <td>S/ {{ number_format($producto->precio, 2) }}</td>
                        <td>
                            <span class="badge {{ $producto->stock <= 5 ? 'bg-danger' : 'bg-primary' }}">
                                {{ $producto->stock }} unidades
                            </span>
                        </td>
                        
                        <td class="text-center">
                            <div class="d-flex justify-content-center gap-2">
                                <a href="{{ route('productos.edit', $producto->id) }}" 
                                class="btn btn-outline-warning d-flex align-items-center justify-content-center" 
                                style="width: 40px; height: 40px; border-radius: 8px; border-width: 2px;">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="btn btn-outline-danger d-flex align-items-center justify-content-center" 
                                            style="width: 40px; height: 40px; border-radius: 8px; border-width: 2px;"
                                            onclick="return confirm('¿Seguro de eliminar?')">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>