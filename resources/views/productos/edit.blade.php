<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-warning text-dark">
            <h4>Editar Producto: {{ $producto->nombre }}</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('productos.update', $producto->id) }}" method="POST">
                @csrf
                @method('PUT') <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input type="text" name="nombre" class="form-control" value="{{ $producto->nombre }}" required>
                </div>
                
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Precio</label>
                        <input type="number" step="0.01" name="precio" class="form-control" value="{{ $producto->precio }}" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Stock</label>
                        <input type="number" name="stock" class="form-control" value="{{ $producto->stock }}" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Actualizar Cambios</button>
                <a href="{{ route('productos.index') }}" class="btn btn-secondary">Volver</a>
            </form>
        </div>
    </div>
</div>