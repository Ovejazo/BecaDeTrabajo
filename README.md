# Plantillas Institucionales USACH (Full Site Editing / Gutenberg)

Repositorio oficial del proyecto de desarrollo de plantillas y temas de bloques para la **Universidad de Santiago de Chile (USACH)**, desarrollado bajo las Normas Gráficas 2023 y el estándar nativo de WordPress (sin plugins de terceros).

---

## 📁 Estructura del Repositorio

El repositorio está organizado con la arquitectura modular de **Temas de Bloques (Full Site Editing - FSE)** de WordPress:

```text
├── parts/
│   ├── header.html               # Cabecera institucional USACH (curvas inferiores 35px, logo, navegación)
│   └── footer.html               # Pie de página institucional USACH (curvas superiores 35px, 3 columnas de logos)
├── templates/
│   └── plantilla-nivel-3.html    # Plantilla completa de página para Institutos y Centros (Nivel 3)
├── patterns/
│   ├── plantilla-nivel-2.php     # Patrón completo Nivel 2 (Departamentos, ej: Historia)
│   └── plantilla-nivel-3.php     # Patrón completo Nivel 3 (Institutos / Centros, ej: IDEA)
├── theme.json                    # Paleta oficial USACH 2023, tipografías y herramientas de diseño
├── functions.php                 # Registro de patrones de bloques y soportes del tema
├── style.css                     # Metadatos del tema y estilos base
├── Plantilla2.php                # Plantilla clásica PHP Nivel 2
├── Plantilla3.php                # Plantilla clásica PHP Nivel 3
└── single.php                    # Plantilla institucional para entradas individuales
```

---

## 🎨 Identidad Gráfica USACH 2023

Configurada de forma nativa en `theme.json`:
* **Teal Institucional (Pantone 3272 C):** `#00A499`
* **Terracota Institucional (Pantone 716 C):** `#EA7600`
* **Gris Pizarra (Pantone 432 C):** `#394049`
* **Paleta Complementaria PEI 2030:** Púrpura (`#8C4799`), Azul (`#498BCA`), Amarillo (`#EAAA00`), Rojo (`#C8102E`).

---

## 🚀 Cómo rescatar e instalar en una nueva plantilla de WordPress

Tienes dos formas de utilizar estos archivos en cualquier sitio WordPress:

### Método A: Como Tema de WordPress
1. Clona o copia esta carpeta dentro de:
   `wp-content/themes/usach/`
2. En el panel de WordPress, ve a **Apariencia > Temas** y activa **Plantillas USACH**.
3. En **Apariencia > Editor > Plantillas**, verás disponible automáticamente la **Plantilla Nivel 3 - Instituto / Centro (USACH)**.

### Método B: Usando los Patrones de Bloques
1. Con el tema activo, crea una nueva página en WordPress.
2. Haz clic en el botón `+` (Añadir bloque) > pestaña **Patrones** > categoría **USACH - Plantillas Oficiales**.
3. Inserta **Plantilla Nivel 3**: el diseño completo (Hero, Noticias con grilla 38%/62%, Galería con tarjetas curvas, Alianzas y Footer) se cargará listo para editar.

### Método C: Copiar bloques directamente
Si estás en cualquier tema de bloques moderno (como Twenty Twenty-Five):
* Puedes abrir el archivo `templates/plantilla-nivel-3.html` (o `parts/header.html` / `parts/footer.html`), copiar el código y pegarlo directamente (`Ctrl + V`) en el lienzo del editor de WordPress.
