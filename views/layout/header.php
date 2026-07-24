<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CandidateFeedback</title>
    <!-- Ruta absoluta desde la raíz para evitar fallos de carpeta -->
    <link rel="stylesheet" href="./assets/css/style.css?v=10.0">
</head>
<body>
    <header class="header">
        <div class="header-logo">
            <a href="index.php?action=list">CandidateFeedback</a>
        </div>

        <button class="nav-toggle" id="navToggle" aria-label="Abrir menú">
            ☰
        </button>

        <nav class="nav-menu" id="navMenu">
            <a href="index.php?action=list">Panel / Candidatos</a>
            <a href="index.php?action=form" class="btn-nav">+ Registrar Evaluación</a>
        </nav>
    </header>

    <script>
        document.getElementById('navToggle').addEventListener('click', function() {
            document.getElementById('navMenu').classList.toggle('active');
        });
    </script>