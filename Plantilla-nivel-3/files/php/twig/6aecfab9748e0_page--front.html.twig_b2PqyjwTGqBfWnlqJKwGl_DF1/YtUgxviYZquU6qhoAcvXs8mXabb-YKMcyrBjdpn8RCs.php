<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\MacroNamespace;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTestError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/custom/usach_theme/templates/page--front.html.twig */
class __TwigTemplate_0632a89f036a627a44692984f70544a9 extends Template
{
    private Source $source;
    /**
     * @var array<string, MacroNamespace>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        $this->sandbox = $env->getExtension(SandboxExtension::class)->getChecker();
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "
<!-- ========================================================================
     1. HEADER INSTITUCIONAL (Curvas inferiores de 35px)
     ======================================================================== -->
<header class=\"site-header\">
    <div class=\"header-inner\">
        <div class=\"site-branding\">
            <a href=\"";
        // line 15
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["front_page"] ?? null), "html", null, true);
        yield "\">
                <img src=\"";
        // line 16
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true);
        yield "/images/Usach-P1.png\" alt=\"USACH\" class=\"header-logo-img\">
                <div class=\"site-title-group\">
                    <span class=\"site-sublabel\">INSTITUTO DE</span>
                    <span class=\"site-main-title\">ESTUDIOS AVANZADOS</span>
                </div>
            </a>
        </div>

        <button class=\"menu-toggle\" id=\"mobileMenuBtnN3\" aria-label=\"Abrir Menú\">
            <span></span><span></span><span></span>
        </button>

        <nav class=\"main-navigation\" id=\"siteNavN3\">
            <ul class=\"nav-menu-list\">
                <li><a href=\"";
        // line 30
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["front_page"] ?? null), "html", null, true);
        yield "\" class=\"is-active\">Inicio</a></li>
                <li><a href=\"";
        // line 31
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["base_path"] ?? null), "html", null, true);
        yield "nosotros\">Nosotros</a></li>
                <li><a href=\"";
        // line 32
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["base_path"] ?? null), "html", null, true);
        yield "programas\">Programas</a></li>
                <li><a href=\"";
        // line 33
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["base_path"] ?? null), "html", null, true);
        yield "investigacion\">Investigación</a></li>
                <li><a href=\"";
        // line 34
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["base_path"] ?? null), "html", null, true);
        yield "vinculacion\">Vinculación con el medio</a></li>
                <li><a href=\"";
        // line 35
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["base_path"] ?? null), "html", null, true);
        yield "publicaciones\">Publicaciones</a></li>
                <li><a href=\"";
        // line 36
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["base_path"] ?? null), "html", null, true);
        yield "biblioteca\">Biblioteca</a></li>
            </ul>
        </nav>
    </div>
</header>

<main id=\"main-content\">

    <!-- ====================================================================
         2. HERO / SLIDER PRINCIPAL CON BOTONES INTERACTIVOS
         ==================================================================== -->
    ";
        // line 47
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 48
            yield "        ";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 48), "html", null, true);
            yield "
    ";
        } else {
            // line 50
            yield "        <section class=\"section-hero-split\">
            <div class=\"container hero-split-grid\">
                <div class=\"hero-split-content\">
                    <h1 id=\"heroSlideTitle\">Revisa las<br>colecciones</h1>
                    <p id=\"heroSlideDesc\">Buscamos fomentar la difusión de ideas y ser un aporte significativo en el avance de los estudios sociales y políticos, las artes y las humanidades.</p>
                    <a href=\"#colecciones\" class=\"btn-usach-pill btn-teal-outline\" id=\"heroSlideBtn\">VER AQUÍ</a>
                    
                    <div class=\"hero-split-nav\">
                        <button class=\"hero-nav-circle\" id=\"heroPrevBtn\" aria-label=\"Anterior\">&#10094;</button>
                        <button class=\"hero-nav-circle\" id=\"heroNextBtn\" aria-label=\"Siguiente\">&#10095;</button>
                    </div>
                </div>
                
                <div class=\"hero-split-image\">
                    <img src=\"https://picsum.photos/seed/ideahero/1200/650\" alt=\"Colección IDEA\" class=\"hero-rounded-img\" id=\"heroSlideImg\">
                </div>
            </div>
        </section>
    ";
        }
        // line 69
        yield "
    <!-- ====================================================================
         3. ACCESOS DIRECTOS (PÍLDORAS CON ÍCONOS)
         ==================================================================== -->
    ";
        // line 73
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "accesos_rapidos", [], "any", false, false, true, 73)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 74
            yield "        ";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "accesos_rapidos", [], "any", false, false, true, 74), "html", null, true);
            yield "
    ";
        }
        // line 76
        yield "
    <!-- ====================================================================
         4. SECCIÓN NOTICIAS (1 GRANDE A LA IZQ + 2 APILADAS A LA DERECHA)
         ==================================================================== -->
    ";
        // line 80
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "noticias", [], "any", false, false, true, 80)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 81
            yield "        ";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "noticias", [], "any", false, false, true, 81), "html", null, true);
            yield "
    ";
        }
        // line 83
        yield "
    <!-- ====================================================================
         5. SECCIÓN VIDEOS (TARJETAS CON BORDE NARANJA)
         ==================================================================== -->
    ";
        // line 87
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "videos", [], "any", false, false, true, 87)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 88
            yield "        ";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "videos", [], "any", false, false, true, 88), "html", null, true);
            yield "
    ";
        }
        // line 90
        yield "
    <!-- ====================================================================
         6. SECCIÓN GALERÍA (PÍLDORAS CON BORDE CURVO)
         ==================================================================== -->
    ";
        // line 94
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "galeria", [], "any", false, false, true, 94)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 95
            yield "        ";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "galeria", [], "any", false, false, true, 95), "html", null, true);
            yield "
    ";
        }
        // line 97
        yield "
    <!-- ====================================================================
         7. SECCIÓN DESTACADOS
         ==================================================================== -->
    ";
        // line 101
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "destacados", [], "any", false, false, true, 101)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 102
            yield "        ";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "destacados", [], "any", false, false, true, 102), "html", null, true);
            yield "
    ";
        } else {
            // line 104
            yield "        <section class=\"section-destacados-nivel3\" id=\"destacados\">
            <div class=\"container\">
                <div class=\"section-header-left\">
                    <h2 class=\"section-title-teal\">Destacados</h2>
                </div>

                <div class=\"destacados-n3-grid\">
                  ";
            // line 111
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["articulos_destacados"] ?? null))) {
                // line 112
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["articulos_destacados"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 113
                    yield "                      <div class=\"destacado-n3-card\" style=\"background: ";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "bg_color", [], "any", false, false, true, 113), "html", null, true);
                    yield "; color: ";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text_color", [], "any", false, false, true, 113), "html", null, true);
                    yield ";\">
                          <div class=\"destacado-n3-badge\">";
                    // line 114
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "badge", [], "any", false, false, true, 114), "html", null, true);
                    yield "</div>
                          <h4 class=\"destacado-n3-title\">
                              <a href=\"";
                    // line 116
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 116), "html", null, true);
                    yield "\" style=\"color: inherit;\">";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 116), "html", null, true);
                    yield "</a>
                          </h4>
                      </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 120
                yield "                  ";
            } else {
                // line 121
                yield "                    <div class=\"destacado-n3-card\" style=\"background: #f7941d; color: #fff; padding: 25px; flex-direction: column; justify-content: center;\">
                        <div style=\"font-size: 26px; font-weight: 800; line-height: 1;\">175 AÑOS</div>
                        <div style=\"font-size: 14px; font-weight: 700; text-transform: uppercase; margin-top: 5px;\">Saludos Aniversario USACH</div>
                    </div>

                    <div class=\"destacado-n3-card\" style=\"background: #f5b78b; color: #004d47; padding: 25px; flex-direction: column; justify-content: center;\">
                        <div style=\"font-size: 15px; font-weight: 800; text-transform: uppercase;\">Usa tu credencial en los puntos de acceso habilitados</div>
                        <div style=\"font-size: 12px; margin-top: 6px;\">Si la extravías informa de inmediato a <strong>credencial@usach.cl</strong></div>
                    </div>

                    <div class=\"destacado-n3-card\" style=\"background: #fff0d6; color: #a33800; padding: 25px; flex-direction: column; justify-content: center;\">
                        <div style=\"font-size: 12px; font-weight: 700; text-transform: uppercase; color: #555;\">Encuentra aquí los protocolos para</div>
                        <div style=\"font-size: 18px; font-weight: 800; text-transform: uppercase; color: #ea7600;\">La seguridad de nuestro campus</div>
                    </div>
                  ";
            }
            // line 136
            yield "                </div>
            </div>
        </section>
    ";
        }
        // line 140
        yield "
    <!-- ====================================================================
         8. SECCIÓN ACTIVIDADES (EVENTOS CALENDARIO)
         ==================================================================== -->
    ";
        // line 144
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "actividades", [], "any", false, false, true, 144)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 145
            yield "        ";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "actividades", [], "any", false, false, true, 145), "html", null, true);
            yield "
    ";
        }
        // line 147
        yield "
    <!-- ====================================================================
         9. ALIANZAS O INDEXACIONES (CARRUSEL LOGOS)
         ==================================================================== -->
    ";
        // line 151
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "alianzas", [], "any", false, false, true, 151)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 152
            yield "        ";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "alianzas", [], "any", false, false, true, 152), "html", null, true);
            yield "
    ";
        }
        // line 154
        yield "
    <!-- ====================================================================
         10. REDES SOCIALES
         ==================================================================== -->
    <section class=\"section-sociales\">
        <div class=\"container\">
            <div class=\"sociales-list\">
                <a href=\"";
        // line 161
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["social_facebook"] ?? null), "html", null, true);
        yield "\" class=\"social-link\" target=\"_blank\" rel=\"noopener\" aria-label=\"Facebook\">
                    <svg viewBox=\"0 0 24 24\"><path d=\"M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z\"></path></svg>
                </a>
                <a href=\"";
        // line 164
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["social_twitter"] ?? null), "html", null, true);
        yield "\" class=\"social-link\" target=\"_blank\" rel=\"noopener\" aria-label=\"X Twitter\">
                    <svg viewBox=\"0 0 24 24\"><path d=\"M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z\"></path></svg>
                </a>
                <a href=\"";
        // line 167
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["social_youtube"] ?? null), "html", null, true);
        yield "\" class=\"social-link\" target=\"_blank\" rel=\"noopener\" aria-label=\"YouTube\">
                    <svg viewBox=\"0 0 24 24\"><path d=\"M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19.1c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.43z\"></path><polygon points=\"9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02\" fill=\"#fff\"></polygon></svg>
                </a>
                <a href=\"";
        // line 170
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["social_instagram"] ?? null), "html", null, true);
        yield "\" class=\"social-link\" target=\"_blank\" rel=\"noopener\" aria-label=\"Instagram\">
                    <svg viewBox=\"0 0 24 24\"><rect x=\"2\" y=\"2\" width=\"20\" height=\"20\" rx=\"5\" ry=\"5\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"></rect><path d=\"M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"></path><line x1=\"17.5\" y1=\"6.5\" x2=\"17.51\" y2=\"6.5\" stroke=\"currentColor\" stroke-width=\"2\"></line></svg>
                </a>
            </div>
        </div>
    </section>



</main>

<!-- ========================================================================
     11. FOOTER INSTITUCIONAL (Curvas superiores de 35px)
     ======================================================================== -->
";
        // line 184
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 184)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 185
            yield "    ";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 185), "html", null, true);
            yield "
";
        } else {
            // line 187
            yield "    <footer class=\"site-footer\">
        <div class=\"container footer-inner\">
            <div>
                <img src=\"";
            // line 190
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true);
            yield "/images/Logo-Comunicaciones.png\" alt=\"Dirección General de Comunicaciones y Medios\" class=\"footer-logo-img\">
            </div>

            <div>
                <img src=\"";
            // line 194
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true);
            yield "/images/dei-logo.DsjmdWoQ.png\" alt=\"Dirección Estratégica Informática\" class=\"footer-logo-img\">
            </div>

            <div class=\"footer-seal-block\">
                <img src=\"";
            // line 198
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true);
            yield "/images/acreditacion-scaled-1.png\" alt=\"Acreditación CNA 7 años\" class=\"footer-logo-img\">
            </div>
        </div>
    </footer>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["front_page", "base_path", "directory", "page", "articulos_destacados", "social_facebook", "social_twitter", "social_youtube", "social_instagram"]);        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/usach_theme/templates/page--front.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDefaultEscapeStrategy(): string|false
    {
        return "html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  378 => 198,  371 => 194,  364 => 190,  359 => 187,  353 => 185,  351 => 184,  334 => 170,  328 => 167,  322 => 164,  316 => 161,  307 => 154,  301 => 152,  299 => 151,  293 => 147,  287 => 145,  285 => 144,  279 => 140,  273 => 136,  256 => 121,  253 => 120,  240 => 116,  235 => 114,  228 => 113,  223 => 112,  221 => 111,  212 => 104,  206 => 102,  204 => 101,  198 => 97,  192 => 95,  190 => 94,  184 => 90,  178 => 88,  176 => 87,  170 => 83,  164 => 81,  162 => 80,  156 => 76,  150 => 74,  148 => 73,  142 => 69,  121 => 50,  115 => 48,  113 => 47,  99 => 36,  95 => 35,  91 => 34,  87 => 33,  83 => 32,  79 => 31,  75 => 30,  58 => 16,  54 => 15,  45 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/usach_theme/templates/page--front.html.twig", "C:\\xampp\\htdocs\\drupal\\themes\\custom\\usach_theme\\templates\\page--front.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 47, "for" => 112];
        static $filters = ["escape" => 15];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "if", 1 => "for"],
                [0 => "escape"],
                [],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            } elseif ($e instanceof SecurityNotAllowedTestError && isset($tests[$e->getTestName()])) {
                $e->setTemplateLine($tests[$e->getTestName()]);
            }

            throw $e;
        }

    }
}
