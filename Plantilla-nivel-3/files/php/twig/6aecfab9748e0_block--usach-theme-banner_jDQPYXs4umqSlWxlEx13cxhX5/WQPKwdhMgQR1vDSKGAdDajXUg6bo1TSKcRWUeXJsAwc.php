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

/* themes/custom/usach_theme/templates/block--usach-theme-bannerprincipal.html.twig */
class __TwigTemplate_02be7e4dbe37487c01e529fe87a084dd extends Template
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
        // line 7
        $context["hero"] = (($_v0 = ($context["content"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#block_content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "#block_content", [], "array", false, false, true, 7));
        // line 8
        yield "
<section class=\"section-hero-split\">
    <div class=\"container hero-split-grid\">
        <div class=\"hero-split-content\">
            <h1 id=\"heroSlideTitle\">";
        // line 12
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "field_titulo", [], "any", false, true, true, 12), "value", [], "any", true, true, true, 12)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "field_titulo", [], "any", false, false, true, 12), "value", [], "any", false, false, true, 12), "Revisa las colecciones")) : ("Revisa las colecciones")));
        yield "</h1>
            <div id=\"heroSlideDesc\">
                ";
        // line 14
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "field_descripcion", [], "any", false, false, true, 14), "value", [], "any", false, false, true, 14));
        yield "
            </div>
            
            ";
        // line 17
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "field_boton", [], "any", false, false, true, 17), 0, [], "any", false, false, true, 17), "url", [], "any", false, false, true, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 18
            yield "                <a href=\"";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "field_boton", [], "any", false, false, true, 18), 0, [], "any", false, false, true, 18), "url", [], "any", false, false, true, 18), "html", null, true);
            yield "\" class=\"btn-usach-pill btn-teal-outline\" id=\"heroSlideBtn\">
                    ";
            // line 19
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "field_boton", [], "any", false, true, true, 19), 0, [], "any", false, true, true, 19), "title", [], "any", true, true, true, 19)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "field_boton", [], "any", false, false, true, 19), 0, [], "any", false, false, true, 19), "title", [], "any", false, false, true, 19), "VER AQUÍ")) : ("VER AQUÍ")), "html", null, true);
            yield "
                </a>
            ";
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 21
($context["hero"] ?? null), "field_boton", [], "any", false, false, true, 21), "uri", [], "any", false, false, true, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 22
            yield "                <a href=\"";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "field_boton", [], "any", false, false, true, 22), "uri", [], "any", false, false, true, 22), "html", null, true);
            yield "\" class=\"btn-usach-pill btn-teal-outline\" id=\"heroSlideBtn\">
                    ";
            // line 23
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "field_boton", [], "any", false, true, true, 23), "title", [], "any", true, true, true, 23)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "field_boton", [], "any", false, false, true, 23), "title", [], "any", false, false, true, 23), "VER AQUÍ")) : ("VER AQUÍ")), "html", null, true);
            yield "
                </a>
            ";
        } else {
            // line 26
            yield "                <a href=\"#colecciones\" class=\"btn-usach-pill btn-teal-outline\" id=\"heroSlideBtn\">VER AQUÍ</a>
            ";
        }
        // line 28
        yield "
            <div class=\"hero-split-nav\">
                <button class=\"hero-nav-circle\" id=\"heroPrevBtn\" aria-label=\"Anterior\">&#10094;</button>
                <button class=\"hero-nav-circle\" id=\"heroNextBtn\" aria-label=\"Siguiente\">&#10095;</button>
            </div>
        </div>

        <div class=\"hero-split-image\">
            ";
        // line 36
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "field_imagen", [], "any", false, false, true, 36), "entity", [], "any", false, false, true, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "                <img src=\"";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "field_imagen", [], "any", false, true, true, 37), "entity", [], "any", false, true, true, 37), "getFileUri", [], "method", true, true, true, 37)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "field_imagen", [], "any", false, false, true, 37), "entity", [], "any", false, false, true, 37), "getFileUri", [], "method", false, false, true, 37), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "field_imagen", [], "any", false, false, true, 37), "entity", [], "any", false, false, true, 37), "uri", [], "any", false, false, true, 37), "value", [], "any", false, false, true, 37))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "field_imagen", [], "any", false, false, true, 37), "entity", [], "any", false, false, true, 37), "uri", [], "any", false, false, true, 37), "value", [], "any", false, false, true, 37)))), "html", null, true);
            yield "\" alt=\"";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "field_titulo", [], "any", false, false, true, 37), "value", [], "any", false, false, true, 37), "html", null, true);
            yield "\" class=\"hero-rounded-img\" id=\"heroSlideImg\">
            ";
        } else {
            // line 39
            yield "                <img src=\"https://picsum.photos/seed/ideahero/1200/650\" alt=\"Colección IDEA\" class=\"hero-rounded-img\" id=\"heroSlideImg\">
            ";
        }
        // line 41
        yield "        </div>
    </div>
</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content"]);        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/usach_theme/templates/block--usach-theme-bannerprincipal.html.twig";
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
        return array (  117 => 41,  113 => 39,  105 => 37,  103 => 36,  93 => 28,  89 => 26,  83 => 23,  78 => 22,  76 => 21,  71 => 19,  66 => 18,  64 => 17,  58 => 14,  53 => 12,  47 => 8,  45 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/usach_theme/templates/block--usach-theme-bannerprincipal.html.twig", "C:\\xampp\\htdocs\\drupal\\themes\\custom\\usach_theme\\templates\\block--usach-theme-bannerprincipal.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 7, "if" => 17];
        static $filters = ["raw" => 12, "default" => 12, "escape" => 18];
        static $functions = ["file_url" => 37];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "set", 1 => "if"],
                [0 => "raw", 1 => "default", 2 => "escape"],
                [0 => "file_url"],
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
