# Pip-Pos-Sistema-de-Ventas

Este es el repositorio del Trabajo Final Integrador (TFI) para la materia **Metodología de Sistemas II**. El proyecto consiste en un Punto de Venta (POS)  desarrollado con Laravel y Livewire.

**Integrantes:**
* [Nahuel Espinola]
* [Jennifer Elizabeth Coronel]

---

## 🛠️ Requisitos para Correr Localmente

* PHP >= 8.3
* Composer
* Una base de datos (MySQL)
* Node.js (npm)

---

## 📖 Instrucciones de Instalación

Sigue estos pasos en tu terminal para clonar y ejecutar el proyecto:

1.  **Clonar el repositorio:**
    ```bash
    git clone [https://github.com/nahueldevup/Pip-Pos.git](https://github.com/nahueldevup/Pip-Pos.git)
    cd Pip-Pos
    ```

2.  **Instalar dependencias de PHP:**
    ```bash
    composer install
    ```

3.  **Configurar el entorno:**
    * Copiá el archivo de entorno de ejemplo:
        ```bash
        cp .env.example .env
        ```
    * Abrí el archivo `.env` y configurá la conexión a tu base de datos (líneas `DB_DATABASE=`, `DB_USERNAME=`, `DB_PASSWORD=`).

4.  **Generar la llave de la aplicación:**
    ```bash
    php artisan key:generate
    ```

5.  **Correr las migraciones (y seeders si los tenés):**
    * Esto creará las tablas en tu base de datos.
        ```bash
        php artisan migrate
        ```
    * (Opcional) Si creaste seeders para poblar la BD:
        ```bash
        php artisan migrate --seed
        ```

6.  **Instalar dependencias de Node (para el frontend):**
    ```bash
    npm install
    npm run dev
    ```

7.  **Iniciar el servidor:**
    * Abrí **otra terminal** en la misma carpeta y ejecutá:
        ```bash
    php artisan serve
    ```

¡El proyecto ahora estará corriendo en `http://127.0.0.1:8000`!
