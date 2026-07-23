<?php include 'views/layout/header.php'; ?>

<main class="container">
    <div class="card form-card">
        <div class="form-header">
            <h2>Registrar Análisis de Postulación</h2>
            <p class="subtitle">Evalúa el desempeño del candidato para generar su informe personalizado.</p>
        </div>

        <form action="index.php?action=create" method="POST" class="evaluation-form">
            <!-- Fila 1: Datos Básicos -->
            <div class="form-group">
                <label for="candidate_name">Nombre del Candidato</label>
                <input type="text" id="candidate_name" name="candidate_name" placeholder="Ej. Ana Martínez" required>
            </div>

            <div class="form-grid-2">
                <div class="form-group">
                    <label for="candidate_email">Correo Electrónico</label>
                    <input type="email" id="candidate_email" name="candidate_email" placeholder="candidato@email.com" required>
                </div>
                <div class="form-group">
                    <label for="position_applied">Vacante Postulada</label>
                    <input type="text" id="position_applied" name="position_applied" placeholder="Ej. Desarrollador Web Fullstack" required>
                </div>
            </div>

            <!-- Fila 2: Puntajes y Estado -->
            <div class="form-grid-3">
                <div class="form-group">
                    <label for="technical_score">Puntaje Técnico (1 - 10)</label>
                    <input type="number" id="technical_score" name="technical_score" min="1" max="10" placeholder="8" required>
                </div>
                <div class="form-group">
                    <label for="soft_skills_score">Habilidades Blandas (1 - 10)</label>
                    <input type="number" id="soft_skills_score" name="soft_skills_score" min="1" max="10" placeholder="9" required>
                </div>
                <div class="form-group">
                    <label for="status">Estado del Proceso</label>
                    <select id="status" name="status" required>
                        <option value="En Revision">En Revisión</option>
                        <option value="Aprobado">Aprobado</option>
                        <option value="Rechazado">Rechazado</option>
                    </select>
                </div>
            </div>

            <!-- Fila 3: Textareas -->
            <div class="form-group">
                <label for="strengths">Fortalezas Clave</label>
                <textarea id="strengths" name="strengths" rows="4" placeholder="Puntos destacados de su prueba o perfil..." required></textarea>
            </div>

            <div class="form-group">
                <label for="areas_to_improve">Aspectos a Mejorar</label>
                <textarea id="areas_to_improve" name="areas_to_improve" rows="4" placeholder="Recomendaciones constructivas..." required></textarea>
            </div>

            <!-- Botones -->
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Guardar y Generar Reporte</button>
                <a href="index.php?action=list" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
</main>

<?php include 'views/layout/footer.php'; ?>