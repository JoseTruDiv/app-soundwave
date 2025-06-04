# App Soundwave

Este proyecto es una aplicación web construida con **Laravel** (backend) y **Vue 3** (frontend), utilizando **Inertia.js** para la integración entre ambos entornos. El sistema permite una experiencia SPA (Single Page Application) manteniendo la robustez y seguridad de Laravel.

## Tecnologías principales

- **Laravel**: Framework PHP para el backend y API.
- **Vue 3**: Framework JavaScript para el frontend.
- **Inertia.js**: Puente entre Laravel y Vue para crear SPAs sin necesidad de una API separada.
- **Vite**: Herramienta de build para frontend moderno.
- **Blade**: Motor de plantillas de Laravel.

## Estructura del proyecto

- `resources/views/app.blade.php`: Plantilla principal que carga la aplicación Inertia/Vue.
- `resources/js/app.ts`: Punto de entrada de la aplicación Vue.
- `resources/js/pages/`: Componentes Vue que representan las páginas.
- `routes/web.php`: Definición de rutas web de Laravel.
- `app/Http/Controllers/`: Controladores de Laravel.

## Instalación

1. **Clona el repositorio**
   ```bash
   git clone <url-del-repositorio>
   cd app-soundwave
   ```

2. **Instala las dependencias de PHP y JavaScript**
   ```bash
   composer install
   npm install
   ```

3. **Configura el entorno**
   - Copia `.env.example` a `.env` y configura tus variables de entorno.
   - Genera la clave de la aplicación:
     ```bash
     php artisan key:generate
     ```

4. **Ejecuta las migraciones (si aplica)**
   ```bash
   php artisan migrate
   ```

5. **Inicia los servidores de desarrollo**
   - Backend (Laravel):
     ```bash
     php artisan serve
     ```
   - Frontend (Vite):
     ```bash
     npm run dev
     ```

## Uso

Accede a la aplicación en [http://localhost:8000](http://localhost:8000) (o el puerto configurado).  
Las rutas y vistas se gestionan desde Laravel, pero la interfaz y la navegación son controladas por Vue e Inertia.js.

## Scripts útiles

- `npm run dev`: Compila y recarga el frontend en modo desarrollo.
- `npm run build`: Compila el frontend para producción.
- `php artisan serve`: Levanta el servidor de desarrollo de Laravel.

## Recursos

- [Documentación de Laravel](https://laravel.com/docs)
- [Documentación de Vue.js](https://vuejs.org/)
- [Documentación de Inertia.js](https://inertiajs.com/)
- [Documentación de Vite](https://vitejs.dev/)

---

**Autor:** [Tu Nombre o Equipo]  
**Licencia:** [MIT u otra licencia]
