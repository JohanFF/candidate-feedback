<?php include 'views/layout/header.php'; ?>

<main class="container">
    <div class="card card-form">
        <h2>Registrar Análisis de Postulación</h2>
        <p class="subtitle">Evalúa el desempeño del candidato para generar su informe personalizado.</p>

        <form action="index.php?action=create" method="POST" class="form-grid">
            <div class="form-group">
                <label for="candidate_name">Nombre del Candidato</label>
                <input type="text" id="candidate_name" name="candidate_name" placeholder="Ej. Ana Martínez" required>
            </div>

            <div class="form-group">
                <label for="candidate_email">Correo Electrónico</label>
                <input type="email" id="candidate_email" name="candidate_email" placeholder="candidato@email.com" required>
            </div>

            <div class="form-group">
                <label for="position_applied">Vacante Postulada</label>
                <input type="text" id="position_applied" name="position_applied" placeholder="Ej. Desarrollador Web Fullstack" required>
            </div>

            <div class="form-group row-2">
                <div>
                    <label for="technical_score">Puntaje Técnico (1 - 10)</label>
                    <input type="number" id="technical_score" name="technical_score" min="1" max="10" required>
                </div>
                <div>
                    <label for="soft_skills_score">Habilidades Blandas (1 - 10)</label>
                    <input type="number" id="soft_skills_score" name="soft_skills_score" min="1" max="10" required>
                </div>
            </div>

            <div class="form-group">
                <label for="status">Estado del Proceso</label>
                <select id="status" name="status" required>
                    <option value="En Revision">En Revisión</option>
                    <option value="Aprobado">Aprobado / Pasa a la siguiente fase</option>
                    <option value="Rechazado">No seleccionado</option>
                </select>
            </div>

            <div class="form-group">
                <label for="strengths">Fortalezas Clave</label>
                <textarea id="strengths" name="strengths" rows="3" placeholder="Puntos destacados de su prueba o perfil..." required></textarea>
            </div>

            <div class="form-group">
                <label for="areas_to_improve">Aspectos a Mejorar</label>
                <textarea id="areas_to_improve" name="areas_to_improve" rows="3" placeholder="Recomendaciones constructivas..." required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Guardar y Generar Reporte</button>
        </form>
    </div>
</main>

<?php include 'views/layout/footer.php'; ?>