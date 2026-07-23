<?php include 'views/layout/header.php'; ?>

<main class="container">
    <div class="dashboard-head">
        <div>
            <h2>Panel de Reclutamiento</h2>
            <p class="subtitle">Gestiona las evaluaciones y envía retroalimentación.</p>
        </div>
        <a href="index.php?action=form" class="btn btn-primary btn-mobile-block">+ Evaluación</a>
    </div>

    <?php 
        $total = count($evaluations);
        $aprobados = count(array_filter($evaluations, fn($e) => $e['status'] === 'Aprobado'));
        $revision = count(array_filter($evaluations, fn($e) => $e['status'] === 'En Revision'));
    ?>

    <!-- Tarjetas adaptables -->
    <div class="stats-grid">
        <div class="stat-card stat-total">
            <span class="stat-label">TOTAL EVALUADOS</span>
            <p class="stat-value"><?= $total ?></p>
        </div>
        <div class="stat-card stat-approved">
            <span class="stat-label">APROBADOS</span>
            <p class="stat-value"><?= $aprobados ?></p>
        </div>
        <div class="stat-card stat-review">
            <span class="stat-label">EN REVISIÓN</span>
            <p class="stat-value"><?= $revision ?></p>
        </div>
    </div>

    <!-- Tabla Responsiva -->
    <div class="card card-table">
        <h3 style="font-size: 1.1rem; color: #1e293b; margin-bottom: 1rem;">Candidatos Evaluados Recientemente</h3>
        <?php if (empty($evaluations)): ?>
            <p style="text-align: center; color: #64748b; padding: 2rem 0;">No hay evaluaciones registradas aún.</p>
        <?php else: ?>
            <div class="table-wrapper">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>Candidato</th>
                            <th>Vacante</th>
                            <th>P. Técnico</th>
                            <th>Hab. Blandas</th>
                            <th>Estado</th>
                            <th style="text-align: center;">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($evaluations as $item): ?>
                            <tr>
                                <td>
                                    <strong><?= htmlspecialchars($item['candidate_name']) ?></strong><br>
                                    <span class="text-sub"><?= htmlspecialchars($item['candidate_email']) ?></span>
                                </td>
                                <td><?= htmlspecialchars($item['position_applied']) ?></td>
                                <td><span class="score-badge score-tech"><?= $item['technical_score'] ?> / 10</span></td>
                                <td><span class="score-badge score-soft"><?= $item['soft_skills_score'] ?> / 10</span></td>
                                <td>
                                    <span class="status-pill status-<?= strtolower(str_replace(' ', '-', $item['status'])) ?>">
                                        <?= htmlspecialchars($item['status']) ?>
                                    </span>
                                </td>
                                <td>
                                    <div class="actions-cell">
                                        <a href="index.php?action=report&id=<?= $item['id'] ?>" class="btn-action btn-view">Informe</a>
                                        <a href="index.php?action=delete&id=<?= $item['id'] ?>" class="btn-action btn-delete" onclick="return confirm('¿Seguro que deseas eliminar este informe?');">Eliminar</a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php include 'views/layout/footer.php'; ?>