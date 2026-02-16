<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Recetas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        h1 { margin: 0; }
        .page-header { display: flex; align-items: center; gap: 0.6rem; margin-bottom: 1rem; }
        .icon { display: inline-flex; color: #333; }
        .icon svg { display: block; fill: currentColor; }
        .meta { color: #666; font-size: 0.9rem; }
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
            <h1>Recetario de DAW</h1>
        </header>

        @if ($recetas->isEmpty())
            <p>No hay recetas todavía.</p>
        @else
            <div class="row g-3">
                @foreach ($recetas as $receta)
                    <div class="col-12 col-md-6 col-lg-4">
                        <article class="card h-100 shadow-sm">
                            @if ($receta->imagen_path)
                                <img src="{{ $receta->imagen_path }}" class="card-img-top" alt="Imagen de {{ $receta->titulo }}">
                            @endif
                            <div class="card-body">
                                <h2 class="h5 card-title">
                                    <a class="text-decoration-none" href="/recetas/{{ $receta->id }}">{{ $receta->titulo }}</a>
                                </h2>
                                @if ($receta->descripcion)
                                    <p class="card-text">{{ $receta->descripcion }}</p>
                                @endif
                                @if ($receta->tiempo_minutos)
                                    <p class="meta mb-0">Tiempo: {{ $receta->tiempo_minutos }} min</p>
                                @endif
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        @endif
    </main>
</body>
</html>
