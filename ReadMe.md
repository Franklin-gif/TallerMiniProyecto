# Mini Proyecto #2 - Sentencias de Control y Clases en PHP

Este repositorio contiene la solución completa al **Mini Proyecto #2** de la asignatura **Desarrollo Web VII**, desarrollado bajo las directrices académicas de la **Universidad Tecnológica de Panamá (UTP)** en la Facultad de Ingeniería en Sistemas Computacionales.

El ecosistema web resuelve 9 problemas de lógica algorítmica y procesamiento estadístico utilizando programación del lado del servidor.

## 🚀 Arquitectura del Proyecto (MVC)

La aplicación implementa de manera rigurosa el patrón de diseño **Modelo-Vista-Controlador (MVC)**, asegurando la modularidad del código fuente y cumpliendo con el principio **DRY (Don't Repeat Yourself)** mediante vistas unificadas y dinámicas.

```text
Taller2_Apellidos/
├── config/          # Configuraciones globales de la app
├── controllers/     # Lógica algorítmica y procesamiento matemático (Controller.php)
├── models/          # Validaciones, utilidades estáticas y OWASP (Utilidades.php)
├── views/           # Capa de presentación e interfaces
│   ├── components/  # Fragmentos HTML unificados (header.php, footer.php)
│   ├── formularios/ # Formularios de captura específicos (p1 a p9)
│   ├── menu.php     # Panel unificado de control del usuario
│   └── resultado.php# Renderizador dinámico de respuestas y gráficas
└── index.php        # Enrutador Frontal (Punto de entrada único)