<?php include 'views/layout/header.php'; ?>

<main class="container">
    <div style="margin-bottom: 1rem;">
        <a href="index.php?action=list" style="color: #64748b; text-decoration: none; font-size: 0.9rem; font-weight: 500;">
            ← Volver al listado
        </a>
    </div>

    <div class="card" style="border-top: 4px solid #be123c; padding: 2rem;">
        <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 1.5rem; flex-wrap: wrap; gap: 1rem; border-bottom: 1px solid #e2e8f0; padding-bottom: 1rem;">
            <div>
                <h2 style="font-size: 1.5rem; color: #0f172a;">Informe de Retroalimentación de Postulación</h2>
                <p style="color: #64748b; font-size: 0.95rem; margin-top: 0.3rem;">
                    <strong>Candidato:</strong> <?= htmlspecialchars($candidateData['candidate_name']) ?> <br>
                    <strong>Puesto:</strong> <?= htmlspecialchars($candidateData['position_applied']) ?>
                </p>
            </div>
            <span class="status-pill status-<?= strtolower(str_replace(' ', '-', $candidateData['status'])) ?>" style="font-size: 0.85rem; padding: 0.4rem 0.8rem;">
                Estado: <?= htmlspecialchars($candidateData['status']) ?>
            </span>
        </div>

        <!-- Bloques de Puntajes -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem; margin-bottom: 1.5rem;">
            <div style="background-color: #fff1f2; border: 1px solid #ffe4e6; border-radius: 8px; padding: 1.2rem; text-align: center;">
                <span style="font-size: 0.75rem; font-weight: 700; color: #be123c; text-transform: uppercase;">EVALUACIÓN TÉCNICA</span>
                <p style="font-size: 1.8rem; font-weight: 700; color: #be123c; margin-top: 0.3rem;"><?= $candidateData['technical_score'] ?> / 10</p>
            </div>
            <div style="background-color: #f0fdf4; border: 1px solid #dcfce7; border-radius: 8px; padding: 1.2rem; text-align: center;">
                <span style="font-size: 0.75rem; font-weight: 700; color: #15803d; text-transform: uppercase;">HABILIDADES BLANDAS</span>
                <p style="font-size: 1.8rem; font-weight: 700; color: #15803d; margin-top: 0.3rem;"><?= $candidateData['soft_skills_score'] ?> / 10</p>
            </div>
        </div>

        <!-- Fortalezas Destacadas -->
        <h3 class="feedback-title">Fortalezas Destacadas</h3>
        <div class="feedback-box feedback-box-strengths">
            <?= nl2br(htmlspecialchars($candidateData['strengths'])) ?>
        </div>

        <!-- Oportunidades de Crecimiento -->
        <h3 class="feedback-title">Oportunidades de Crecimiento / Recomendaciones</h3>
        <div class="feedback-box feedback-box-improvements">
            <?= nl2br(htmlspecialchars($candidateData['areas_to_improve'])) ?>
        </div>
    </div>
</main>

<?php include 'views/layout/footer.php'; ?>