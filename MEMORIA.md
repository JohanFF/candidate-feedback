# Memoria de Proceso - CandidateFeedback

## Herramientas de IA Utilizadas
- Gemini (Asistente principal de arquitectura y código)
- Bolt.new (Prototipado rápido de la vista en React)
## Prompts Clave y Decisiones
- Le pedi la Estructuración inicial bajo arquitectura MVC en PHP POO sin frameworks pesados para maximizar velocidad y rendimiento en despliegue.
- Le pedi modificacion en los estilos, en los botonones, para resaltar algunos datos
-Le pedi cambiar a menu desplegable para dispositivos
-le mostraba imagenes en partes que no podia  explicarle bien para que me diera una mejor solucion
-como cerre varias veces gemini me toco volver a darle retroalimentacion
## Que hizo mal la ia
- Le pedi cambiar el color de un boton y se equivoco y y estaba  cambiando uno que ya tenia hoover. dure mucho tiempo resolviendo ese problema hasta que por fin me di cuenta del error
- se predio en algunas partes y me le di  retroalimentacion para  que recordara lo que estabamos haciendo
## Que descarte y por que
- Descarte que soolo fuera una pagina para mostrar todo, osea le pedi que  que tuviera un panel, registro y con sus informes
## Tarea Sorpresa: Reconstrucción en Bolt.new y Comparación

- **URL de la app en Bolt.new:** [https://candidate-feedback-m-bs6k.bolt.host/]

### Comparación: Bolt.new vs. Código a Mano (PHP/MVC)
- **Qué hizo mejor Bolt:** Generó una interfaz SPA completa, reactiva y moderna usando Tailwind CSS y componentes modulares en menos de 2 minutos. Además, estructuró estados en vivo para interactuar con los formularios sin recargar la página.
- **Qué hizo peor Bolt:** Aunque incluye persistencia con Bolt Cloud, la arquitectura queda acoplada a su entorno propio y abstracciones automáticas, mientras que el código PHP/MVC hecho a mano me permite un control total sobre las consultas SQL, validaciones del servidor, seguridad PDO y facilidades para desplegar en cualquier hosting tradicional como InfinityFree.