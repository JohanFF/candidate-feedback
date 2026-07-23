<?php include 'views/layout/header.php'; ?>

<main class="container" style="max-width: 1000px;">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
        <h2>Candidatos Evaluados</h2>
        <a href="index.php?action=form" class="btn btn-primary">+ Nueva Evaluación</a>
    </div>

    <div class="card">
        <?php if (empty($evaluations)): ?>
            <p style="text-align: center; color: #64748b; padding: 2rem 0;">No hay evaluaciones registradas aún.</p>
        <?php else: ?>
            <div style="overflow-x: auto;">
                <table style="width: 100%; border-collapse: collapse; text-align: left;">
                    <thead>
                        <tr style="border-bottom: 2px solid #e2e8f0; color: #475569; font-size: 0.9rem;">
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
                                <td style="padding: 1rem 0.75rem; font-weight: 600; color: #2563eb;"><?= $item['technical_score'] ?> / 10</td>
                                <td style="padding: 1rem 0.75rem; font-weight: 600; color: #059669;"><?= $item['soft_skills_score'] ?> / 10</td>
                                <td style="padding: 1rem 0.75rem;">
                                    <span style="padding: 0.25rem 0.6rem; border-radius: 12px; font-size: 0.8rem; font-weight: 600; 
                                        background-color: <?= $item['status'] == 'Aprobado' ? '#dcfce7' : ($item['status'] == 'Rechazado' ? '#fee2e2' : '#fef3c7') ?>; 
                                        color: <?= $item['status'] == 'Aprobado' ? '#166534' : ($item['status'] == 'Rechazado' ? '#991b1b' : '#92400e') ?>;">
                                        <?= htmlspecialchars($item['status']) ?>
                                    </span>
                                </td>
                                <td style="padding: 1rem 0.75rem; text-align: center;">
                                    <a href="index.php?action=report&id=<?= $item['id'] ?>" class="btn" style="background-color: #f1f5f9; color: #0f172a; text-decoration: none; font-size: 0.85rem;">Ver Reporte</a>
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