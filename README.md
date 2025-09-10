# 🧩 Laravel Vuexy Website Layout: Simple Koneko

<p align="center">
    <a href="https://koneko.mx" target="_blank">
        <img src="https://git.koneko.mx/Koneko-ST/koneko-st/raw/branch/main/logo-images/horizontal-05.png" width="400" alt="Koneko Soluciones Tecnológicas Logo">
    </a>
</p>

<p align="center">
    <a href="https://koneko.mx"><img src="https://img.shields.io/badge/Sitio%20Web-koneko.mx-blue" alt="Sitio Web"></a>
    <a href="https://github.com/koneko-mx/laravel-koneko-layout-small-templates"><img src="https://img.shields.io/github/license/koneko-mx/laravel-koneko-layout-small-templates" alt="Licencia"></a>
    <a href="https://github.com/koneko-mx/laravel-koneko-layout-small-templates/issues"><img src="https://img.shields.io/github/issues/koneko-mx/laravel-koneko-layout-small-templates" alt="Issues"></a>
</p>

---

## 📌 Descripción

**Laravel Vuexy Website Layout: Simple Koneko** es una plantilla de sitio web minimalista, rápida y flexible, diseñada para integrarse con el módulo [Laravel Vuexy Website Admin](https://github.com/koneko-mx/laravel-koneko-website-admin). Ideal para MVPs, sitios institucionales, landing pages y despliegues rápidos.

Esta plantilla ofrece una estructura limpia, secciones personalizables, banners y un enfoque plug-and-play para publicar contenido de forma dinámica dentro del ecosistema Koneko.

---

## 🚀 Instalación Rápida

```bash
composer require koneko/laravel-koneko-layout-small-templates:dev-develop
php artisan vendor:publish --tag=koneko-layout-small-templates-assets
```

---

## 📦 Características

* Estructura profesional y minimalista
* Múltiples variantes visuales: Notus, Landwind, Maximus, Samuel Coming Soon, entre otras
* Componentes Blade personalizados por plantilla
* Gestor de banners y recursos por template
* Integración directa con Laravel Vuexy Admin y Website Admin

---

## 📁 Estructura de Carpetas Destacada

```
resources/
├── views/templates/
│   ├── notus/
│   ├── maximus/
│   ├── samuel-coming-soon/
│   └── koneko-layout-small-templates/
├── public/templates/
└── img/module-cover.png
```

---

## ⚙️ Integración con el Ecosistema Admin Koneko

Este paquete se registra automáticamente en el sistema Vuexy Admin de Koneko usando su ServiceProvider. Se reconoce como un componente visual tipo plugin, y puede ser seleccionado desde la UI del panel de administración para controlar la apariencia del sitio público.

---

## 🛠️ Requisitos

* PHP `^8.2`
* Laravel `^11.31`
* [koneko/laravel-koneko-website-admin](https://github.com/koneko-mx/laravel-koneko-website-admin)
* Node + Vite para personalización con SCSS (opcional pero recomendado)

---

## 📄 Licencia

Este paquete se distribuye bajo la [Licencia Business Source 1.1 personalizada](LICENSE.es), con transición automática a MIT a los 3 años. Para uso comercial, redistribución o integraciones ampliadas, contacta a:

📧 [opensource@koneko.mx](mailto:opensource@koneko.mx)
    
---

## 📚 Más Información

* [Módulo Website Admin](https://github.com/koneko-mx/laravel-koneko-website-admin)
* [Core Vuexy Admin](https://github.com/koneko-mx/laravel-koneko-vuexy-admin)
* [Documentación en inglés](README.en.md)
* [Sitio Oficial Koneko ST](https://koneko.mx)
* [Correo de Contacto](mailto:opensource@koneko.mx)

---

<p align="center">
    Hecho con ❤️ en México por <a href="https://koneko.mx">Koneko Soluciones Tecnológicas</a>
</p>
