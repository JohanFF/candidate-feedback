<?php include 'views/layout/header.php'; ?>

<main class="container" style="max-width: 1000px;">
    <!-- Encabezado del Dashboard -->
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
        <div>
            <h2>Panel de Reclutamiento</h2>
            <p class="subtitle" style="margin-bottom: 0;">Gestiona las evaluaciones y envía retroalimentación a tus postulantes.</p>
        </div>
        <a href="index.php?action=form" class="btn btn-primary">+ Evaluacion de Candidato</a>
    </div>

    <!-- Tarjetas Estadísticas Rápidas -->
    <?php 
        $total = count($evaluations);
        $aprobados = count(array_filter($evaluations, fn($e) => $e['status'] === 'Aprobado'));
        $revision = count(array_filter($evaluations, fn($e) => $e['status'] === 'En Revision'));
    ?>
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1rem; margin-bottom: 2rem;">
        <div style="background: #fff; padding: 1.2rem; border-radius: 8px; border: 1px solid #e2e8f0; border-left: 4px solid #881337;">
            <span style="font-size: 0.8rem; color: #64748b; font-weight: 600;">TOTAL EVALUADOS</span>
            <p style="font-size: 1.6rem; font-weight: 700; color: #0f172a; margin-top: 0.2rem;"><?= $total ?></p>
        </div>
        <div style="background: #fff; padding: 1.2rem; border-radius: 8px; border: 1px solid #e2e8f0; border-left: 4px solid #166534;">
            <span style="font-size: 0.8rem; color: #64748b; font-weight: 600;">APROBADOS</span>
            <p style="font-size: 1.6rem; font-weight: 700; color: #166534; margin-top: 0.2rem;"><?= $aprobados ?></p>
        </div>
        <div style="background: #fff; padding: 1.2rem; border-radius: 8px; border: 1px solid #e2e8f0; border-left: 4px solid #92400e;">
            <span style="font-size: 0.8rem; color: #64748b; font-weight: 600;">EN REVISIÓN</span>
            <p style="font-size: 1.6rem; font-weight: 700; color: #92400e; margin-top: 0.2rem;"><?= $revision ?></p>
        </div>
    </div>

    <!-- Tabla del Panel -->
    <div class="card">
        <h3 style="font-size: 1.1rem; color: #1e293b; margin-bottom: 1rem;">Candidatos Evaluados Recientemente</h3>
        <?php if (empty($evaluations)): ?>
            <p style="text-align: center; color: #64748b; padding: 2rem 0;">No hay evaluaciones registradas aún. Haz clic en el botón superior para agregar la primera.</p>
        <?php else: ?>
            <div style="overflow-x: auto;">
                <table style="width: 100%; border-collapse: collapse; text-align: left;">
                    <thead>
                        <tr style="border-bottom: 2px solid #e2e8f0; color: #475569; font-size: 0.85rem;">
                            <th style="padding: 0.75rem;">Candidato</th>
                            <th style="padding: 0.75rem;">Vacante</th>
                            <th style="padding: 0.75rem;">P. Técnico</th>
                            <th style="padding: 0.75rem;">Hab. Blandas</th>
                            <th style="padding: 0.75rem;">Estado</th>
                            <th style="padding: 0.75rem; text-align: center;">Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($evaluations as $item): ?>
                            <tr style="border-bottom: 1px solid #f1f5f9;">
                                <td style="padding: 1rem 0.75rem; font-weight: 600; color: #0f172a;">
                                    <?= htmlspecialchars($item['candidate_name']) ?><br>
                                    <span style="font-size: 0.8rem; color: #64748b; font-weight: normal;"><?= htmlspecialchars($item['candidate_email']) ?></span>
                                </td>
                                <td style="padding: 1rem 0.75rem; color: #334155;"><?= htmlspecialchars($item['position_applied']) ?></td>
                                <td style="padding: 1rem 0.75rem; font-weight: 600; color: #be123c;"><?= $item['technical_score'] ?> / 10</td>
                                <td style="padding: 1rem 0.75rem; font-weight: 600; color: #059669;"><?= $item['soft_skills_score'] ?> / 10</td>
                                <td style="padding: 1rem 0.75rem;">
                                    <span style="padding: 0.25rem 0.6rem; border-radius: 12px; font-size: 0.8rem; font-weight: 600; 
                                        background-color: <?= $item['status'] == 'Aprobado' ? '#dcfce7' : ($item['status'] == 'Rechazado' ? '#fee2e2' : '#fef3c7') ?>; 
                                        color: <?= $item['status'] == 'Aprobado' ? '#166534' : ($item['status'] == 'Rechazado' ? '#991b1b' : '#92400e') ?>;">
                                        <?= htmlspecialchars($item['status']) ?>
                                    </span>
                                </td>
                                <td style="padding: 1rem 0.75rem; text-align: center;">
                                    <a href="index.php?action=report&id=<?= $item['id'] ?>" class="btn" style="background-color: #fff1f2; color: #be123c; text-decoration: none; font-size: 0.85rem; border: 1px solid #ffe4e6;">Ver Informe</a>
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