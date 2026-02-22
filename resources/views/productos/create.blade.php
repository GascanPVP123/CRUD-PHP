<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">
    </div>

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4>Nuevo Producto</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('productos.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nombre del Producto</label>
                    <input type="text" name="nombre" class="form-control" placeholder="Ej. Monitor Gamer" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Descripción</label>
                    <textarea name="descripcion" class="form-control" rows="3"></textarea>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Precio (S/)</label>
                        <input type="number" step="0.01" name="precio" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Stock Actual</label>
                        <input type="number" name="stock" class="form-control" required>
                    </div>
                </div>

                <div class="d-flex justify-content-end">
                    <a href="{{ route('productos.index') }}" class="btn btn-secondary me-2">Cancelar</a>
                    <button type="submit" class="btn btn-success">Guardar Producto</button>
                </div>
            </form>
        </div>
    </div>
</div>