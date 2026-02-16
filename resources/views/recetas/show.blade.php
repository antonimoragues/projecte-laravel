<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $receta->titulo }} - Receta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .page-header { display: flex; align-items: center; gap: 0.6rem; margin-bottom: 1rem; }
        .icon { display: inline-flex; color: #333; }
        .icon svg { display: block; fill: currentColor; }
        .meta { color: #666; font-size: 0.95rem; }
    </style>
</head>
<body class="bg-light">
    <main class="container py-4">
        <header class="page-header mb-3">
            <span class="icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" width="24" height="24" role="img" focusable="false">
                    <path d="M7 3a1 1 0 0 1 1 1v4h1V4a1 1 0 1 1 2 0v4h1V4a1 1 0 1 1 2 0v4h1V4a1 1 0 1 1 2 0v6a4 4 0 0 1-4 4h-1v7a1 1 0 1 1-2 0v-7H9a4 4 0 0 1-4-4V4a1 1 0 0 1 1-1zm13 6v12a1 1 0 1 1-2 0V9a2 2 0 0 1 2-2z"/>
                </svg>
            </span>
            <h1 class="h3 m-0">Recetario de DAW</h1>
        </header>

        <div class="card shadow-sm">
            <div class="row g-0">
                <div class="col-12 col-md-6">
                    @if ($receta->imagen_path)
                        <img src="{{ $receta->imagen_path }}" class="img-fluid h-100 w-100 rounded-start object-fit-cover" alt="Imagen de {{ $receta->titulo }}">
                    @else
                        <div class="h-100 d-flex align-items-center justify-content-center bg-light border-end">
                            <span class="text-muted">Sin imagen</span>
                        </div>
                    @endif
                </div>
                <div class="col-12 col-md-6">
                    <div class="card-body">
                        <h2 class="h4">{{ $receta->titulo }}</h2>
                        @if ($receta->descripcion)
                            <p class="card-text">{{ $receta->descripcion }}</p>
                        @endif
                        @if ($receta->tiempo_minutos)
                            <p class="meta mb-0">Tiempo: {{ $receta->tiempo_minutos }} min</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-3">
            <a class="btn btn-outline-secondary" href="/recetas">Volver</a>
        </div>
    </main>
</body>
</html>
