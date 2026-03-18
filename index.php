<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serminf POS</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos personalizados -->
    <style>
        body {
            background: linear-gradient(135deg, #0d6efd, #6610f2);
            color: white;
        }
        .hero {
            height: 90vh;
            display: flex;
            align-items: center;
        }
        .card {
            border: none;
            border-radius: 15px;
            transition: transform 0.3s;
        }
        .card:hover {
            transform: scale(1.05);
        }
        footer {
            background: rgba(0,0,0,0.2);
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">Serminf POS</a>
    </div>
</nav>

<!-- HERO -->
<section class="hero text-center">
    <div class="container">
        <h1 class="display-3 fw-bold">Bienvenido a Serminf POS</h1>
        <p class="lead">Sistema de punto de venta moderno y eficiente</p>
        <a href="#" class="btn btn-light btn-lg mt-3">Comenzar</a>
    </div>
</section>

<!-- CARDS -->
<section class="container my-5">
    <div class="row g-4">

        <div class="col-md-4">
            <div class="card p-4 text-dark">
                <h3>Ventas</h3>
                <p>Controla todas tus ventas de manera rápida y sencilla.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card p-4 text-dark">
                <h3>Inventario</h3>
                <p>Administra tus productos y stock en tiempo real.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card p-4 text-dark">
                <h3>Reportes</h3>
                <p>Visualiza estadísticas y toma mejores decisiones.</p>
            </div>
        </div>

    </div>
</section>

<!-- PHP dinámico simple -->
<section class="container text-center my-5">
    <?php
        date_default_timezone_set("America/Mexico_City");
        echo "<h4>Hoy es: " . date("d/m/Y H:i:s") . "</h4>";
    ?>
</section>

<!-- FOOTER -->
<footer>
    <p>© <?php echo date("Y"); ?> Serminf POS - Todos los derechos reservados</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
