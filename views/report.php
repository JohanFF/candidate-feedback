<?php include 'views/layout/header.php'; ?>

<main class="container">
    <div style="margin-bottom: 1rem;">
        <a href="index.php?action=list" style="color: #64748b; text-decoration: none; font-weight: 500;">← Volver al listado</a>
    </div>

    <!-- Borde superior en rojo carmesí -->
    <div class="card" style="border-top: 5px solid #e11d48;">
        <div style="display: flex; justify-content: space-between; align-items: flex-start; border-bottom: 1px solid #e2e8f0; padding-bottom: 1rem; margin-bottom: 1.5rem;">
            <div>
                <h2>Informe de Retroalimentación de Postulación</h2>
                <p class="subtitle" style="margin-bottom: 0;">Candidato: <strong><?= htmlspecialchars($candidateData['candidate_name']) ?></strong></p>
                <p style="font-size: 0.85rem; color: #64748b; margin-top: 0.2rem;">Puesto: <?= htmlspecialchars($candidateData['position_applied']) ?></p>
            </div>
            <span style="padding: 0.4rem 0.8rem; border-radius: 12px; font-size: 0.85rem; font-weight: 600; 
                background-color: <?= $candidateData['status'] == 'Aprobado' ? '#dcfce7' : ($candidateData['status'] == 'Rechazado' ? '#fee2e2' : '#fef3c7') ?>; 
                color: <?= $candidateData['status'] == 'Aprobado' ? '#166534' : ($candidateData['status'] == 'Rechazado' ? '#991b1b' : '#92400e') ?>;">
                Estado: <?= htmlspecialchars($candidateData['status']) ?>
            </span>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 2rem;">
            <!-- Destacado del puntaje en rojo carmesí -->
            <div style="background: #fff1f2; padding: 1rem; border-radius: 8px; text-align: center; border: 1px solid #ffe4e6;">
                <span style="font-size: 0.85rem; color: #9f1239; font-weight: 600;">EVALUACIÓN TÉCNICA</span>
                <p style="font-size: 1.8rem; font-weight: 700; color: #be123c; margin-top: 0.2rem;"><?= $candidateData['technical_score'] ?> / 10</p>
            </div>
            <div style="background: #f8fafc; padding: 1rem; border-radius: 8px; text-align: center; border: 1px solid #e2e8f0;">
                <span style="font-size: 0.85rem; color: #64748b; font-weight: 600;">HABILIDADES BLANDAS</span>
                <p style="font-size: 1.8rem; font-weight: 700; color: #059669; margin-top: 0.2rem;"><?= $candidateData['soft_skills_score'] ?> / 10</p>
            </div>
        </div>

        <div style="margin-bottom: 1.5rem;">
            <h3 style="font-size: 1.05rem; color: #1e293b; margin-bottom: 0.5rem;">💪 Fortalezas Destacadas</h3>
            <p style="background: #f8fafc; padding: 1rem; border-radius: 6px; color: #334155; line-height: 1.5; border: 1px solid #f1f5f9;">
                <?= nl2br(htmlspecialchars($candidateData['strengths'])) ?>
            </p>
        </div>

        <div style="margin-bottom: 1.5rem;">
            <h3 style="font-size: 1.05rem; color: #1e293b; margin-bottom: 0.5rem;">📈 Oportunidades de Crecimiento / Recomendaciones</h3>
            <p style="background: #f8fafc; padding: 1rem; border-radius: 6px; color: #334155; line-height: 1.5; border: 1px solid #f1f5f9;">
                <?= nl2br(htmlspecialchars($candidateData['areas_to_improve'])) ?>
            </p>
        </div>
    </div>
</main>

<?php include 'views/layout/footer.php'; ?>