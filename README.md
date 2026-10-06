# Plantillas Institucionales USACH (Full Site Editing / Gutenberg)

Repositorio oficial del proyecto de desarrollo de plantillas y temas de bloques para la **Universidad de Santiago de Chile (USACH)**, desarrollado bajo las Normas Gráficas 2023 y el estándar nativo de WordPress (sin plugins de terceros).

---

## 📁 Estructura del Repositorio

El proyecto se encuentra ordenado de forma modular en dos carpetas principales:

```text
├── tema-usach/                   # Carpeta completa del Tema de WordPress (Lista para instalar/comprimir)
│   ├── parts/
│   │   ├── header.html           # Cabecera institucional USACH (curvas inferiores 35px, logo, menú)
│   │   └── footer.html           # Pie de página institucional USACH (curvas superiores 35px, 3 columnas de logos)
│   ├── templates/
│   │   └── plantilla-nivel-3.html# Plantilla completa de página para Institutos y Centros (Nivel 3)
│   ├── patterns/
│   │   ├── plantilla-nivel-2.php # Patrón completo Nivel 2 (Departamentos, ej: Historia)
│   │   └── plantilla-nivel-3.php # Patrón completo Nivel 3 (Institutos / Centros, ej: IDEA)
│   ├── theme.json                # Paleta oficial USACH 2023, tipografías y herramientas de diseño
│   ├── functions.php             # Registro de patrones de bloques y soportes del tema
│   ├── style.css                 # Metadatos del tema y estilos base
│   ├── index.php                 # Entrada clásica
│   ├── page.php                  # Plantilla para páginas
│   ├── single.php                # Plantilla para entradas individuales
│   ├── Plantilla2.php            # Plantilla alternativa clásica PHP Nivel 2
│   └── Plantilla3.php            # Plantilla alternativa clásica PHP Nivel 3
│
├── recursos/                     # Maquetas y manuales de referencia del proyecto
│   ├── PLANTILLAS WEB_NIVEL 2_Plantilla Nivel 2.pdf
│   ├── PLANTILLAS WEB_NIVEL 3_Plantilla Nivel 3.pdf
│   └── Usach-P1.png
│
├── .gitignore
└── README.md
```

---

## 🎨 Identidad Gráfica USACH 2023

Configurada en `tema-usach/theme.json`:
* **Teal Institucional (Pantone 3272 C):** `#00A499`
* **Terracota Institucional (Pantone 716 C):** `#EA7600`
* **Gris Pizarra (Pantone 432 C):** `#394049`
* **Paleta Complementaria PEI 2030:** Púrpura (`#8C4799`), Azul (`#498BCA`), Amarillo (`#EAAA00`), Rojo (`#C8102E`).

---

## 🚀 Cómo instalar y utilizar en WordPress

### Método 1: Instalar como Tema de WordPress (Recomendado)
1. Copia la carpeta **`tema-usach`** dentro de tu instalación de WordPress:
   `wp-content/themes/tema-usach/` (o puedes comprimir la carpeta `tema-usach` en un `.zip` y subirla en *Apariencia > Temas > Añadir nuevo*).
2. En el panel de WordPress, ve a **Apariencia > Temas** y activa **Plantillas USACH**.
3. En **Apariencia > Editor > Plantillas**, verás disponible automáticamente la **Plantilla Nivel 3 - Instituto / Centro (USACH)**.

### Método 2: Usar los Patrones de Bloques
1. Con el tema activo, crea o edita cualquier página en WordPress.
2. Haz clic en el botón `+` (Añadir bloque) > pestaña **Patrones** > categoría **USACH - Plantillas Oficiales**.
3. Inserta **Plantilla Nivel 3**: el diseño completo (Hero, Noticias en grilla 38%/62%, Galería con tarjetas redondas, Alianzas y Footer) se cargará listo para editar.

### Método 3: Copiar bloques directamente
Si estás usando cualquier otro tema de bloques (como Twenty Twenty-Five):
* Abre el archivo `tema-usach/templates/plantilla-nivel-3.html` (o `tema-usach/parts/header.html` / `footer.html`), copia su contenido y pégalo (`Ctrl + V`) directamente en el editor visual de WordPress.
