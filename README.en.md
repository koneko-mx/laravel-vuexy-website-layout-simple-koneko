# 🧩 Laravel Vuexy Website Layout: Simple Koneko

<p align="center">
    <a href="https://koneko.mx" target="_blank">
        <img src="https://git.koneko.mx/Koneko-ST/koneko-st/raw/branch/main/logo-images/horizontal-05.png" width="400" alt="Koneko Soluciones Tecnológicas Logo">
    </a>
</p>

<p align="center">
    <a href="https://koneko.mx"><img src="https://img.shields.io/badge/Website-koneko.mx-blue" alt="Website"></a>
    <a href="https://github.com/koneko-mx/laravel-vuexy-website-layout-simple-koneko"><img src="https://img.shields.io/github/license/koneko-mx/laravel-vuexy-website-layout-simple-koneko" alt="License"></a>
    <a href="https://github.com/koneko-mx/laravel-vuexy-website-layout-simple-koneko/issues"><img src="https://img.shields.io/github/issues/koneko-mx/laravel-vuexy-website-layout-simple-koneko" alt="Issues"></a>
</p>

---

## 📝 Description

**Laravel Vuexy Website Layout: Simple Koneko** is a minimal, fast and flexible website template designed for integration with the [Laravel Vuexy Website Admin](https://github.com/koneko-mx/laravel-vuexy-website-admin) module. Ideal for MVPs, institutional websites, landing pages and rapid deployments.

This layout offers a clean structure, customizable banners and sections, and a plug-and-play approach for publishing content dynamically through Koneko’s ecosystem.

---

## 🚀 Quick Installation

```bash
composer require koneko/laravel-vuexy-website-layout-simple-koneko:dev-develop
php artisan vendor:publish --tag=vuexy-website-layout-simple-koneko-assets
```

---

## 📦 Features

* Minimal and professional layout structure
* Multiple view variants: Notus, Landwind, Maximus, Samuel Coming Soon, etc.
* Custom Blade components and blocks
* Banner and asset management per template
* Seamless integration with Laravel Vuexy Admin and Vuexy Website Admin

---

## 📁 Folder Structure Highlights

```
resources/
├── views/templates/
│   ├── notus/
│   ├── maximus/
│   ├── samuel-coming-soon/
│   └── vuexy-website-layout-simple-koneko/
├── public/templates/
└── img/module-cover.png
```

---

## ⚙️ Integration with Koneko Admin Ecosystem

This package registers itself automatically in Koneko’s Vuexy Admin system using the provided ServiceProvider. It is recognized as a visual plugin-type component, and can be selected from the admin panel UI to control public site appearance.

---

## 🛠️ Requirements

* PHP `^8.2`
* Laravel `^11.31`
* [koneko/laravel-vuexy-website-admin](https://github.com/koneko-mx/laravel-vuexy-website-admin)
* Node + Vite for SCSS customization (optional but recommended)

---

## 📄 License

This package is licensed under the [custom Business Source License 1.1](LICENSE), transitioning to MIT after 3 years. For commercial usage, redistribution, or extended usage, please contact:

📧 [opensource@koneko.mx](mailto:opensource@koneko.mx)

---

## 📚 More Information

* [Vuexy Website Admin Module](https://github.com/koneko-mx/laravel-vuexy-website-admin)
* [Vuexy Admin Core](https://github.com/koneko-mx/laravel-vuexy-admin)
* [Documentation in Spanish](README.md)
* [Koneko ST Official Website](https://koneko.mx)
* [Contact Email](mailto:opensource@koneko.mx)

---

<p align="center">
    Made with ❤️ in Mexico by <a href="https://koneko.mx">Koneko Soluciones Tecnológicas</a>
</p>
