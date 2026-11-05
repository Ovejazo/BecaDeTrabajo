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

/* themes/custom/usach_theme/templates/block--block-content--seccion-noticias.html.twig */
class __TwigTemplate_78826557a05f4c7295c6b7eda24ea334 extends Template
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
        yield "<section class=\"section-noticias-nivel3\" id=\"noticias\">
    <div class=\"container\">
        <div class=\"section-header-left\">
            <h2 class=\"section-title-teal\">";
        // line 10
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("seccion_titulo", $context)) ? (Twig\Extension\CoreExtension::default(($context["seccion_titulo"] ?? null), "Noticias")) : ("Noticias")), "html", null, true);
        yield "</h2>
        </div>

        <div class=\"noticias-asymm-grid\">
          ";
        // line 14
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["noticias_destacadas"] ?? null))) {
            // line 15
            yield "            ";
            // line 16
            yield "            ";
            $context["primera"] = (($_v0 = ($context["noticias_destacadas"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["noticias_destacadas"] ?? null), 0, [], "array", false, false, true, 16));
            // line 17
            yield "            <article class=\"noticia-large-card\">
                <a href=\"";
            // line 18
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["primera"] ?? null), "url", [], "any", false, false, true, 18), "html", null, true);
            yield "\">
                    <img src=\"";
            // line 19
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["primera"] ?? null), "image", [], "any", false, false, true, 19), "html", null, true);
            yield "\" alt=\"";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["primera"] ?? null), "title", [], "any", false, false, true, 19), "html", null, true);
            yield "\" class=\"noticia-large-img\">
                </a>
                <div class=\"noticia-large-body\">
                    <span class=\"noticia-date-teal\">";
            // line 22
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["primera"] ?? null), "date", [], "any", false, false, true, 22), "html", null, true);
            yield "</span>
                    <h3 class=\"noticia-large-title\">
                        <a href=\"";
            // line 24
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["primera"] ?? null), "url", [], "any", false, false, true, 24), "html", null, true);
            yield "\">";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["primera"] ?? null), "title", [], "any", false, false, true, 24), "html", null, true);
            yield "</a>
                    </h3>
                    <div>
                        <a href=\"";
            // line 27
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["primera"] ?? null), "url", [], "any", false, false, true, 27), "html", null, true);
            yield "\" class=\"btn-usach-pill btn-teal-outline\">VER MÁS</a>
                    </div>
                </div>
            </article>

            ";
            // line 33
            yield "            <div class=\"noticias-small-stack\">
              ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["noticias_destacadas"] ?? null), 1, 2));
            foreach ($context['_seq'] as $context["_key"] => $context["noticia"]) {
                // line 35
                yield "                <article class=\"noticia-horizontal-card\">
                    <a href=\"";
                // line 36
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["noticia"], "url", [], "any", false, false, true, 36), "html", null, true);
                yield "\">
                        <img src=\"";
                // line 37
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["noticia"], "image", [], "any", false, false, true, 37), "html", null, true);
                yield "\" alt=\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["noticia"], "title", [], "any", false, false, true, 37), "html", null, true);
                yield "\" class=\"noticia-h-img\">
                    </a>
                    <div class=\"noticia-h-body\">
                        <div>
                            <span class=\"noticia-date-teal\">";
                // line 41
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["noticia"], "date", [], "any", false, false, true, 41), "html", null, true);
                yield "</span>
                            <h4 class=\"noticia-h-title\">
                                <a href=\"";
                // line 43
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["noticia"], "url", [], "any", false, false, true, 43), "html", null, true);
                yield "\">";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["noticia"], "title", [], "any", false, false, true, 43), "html", null, true);
                yield "</a>
                            </h4>
                        </div>
                        <div>
                            <a href=\"";
                // line 47
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["noticia"], "url", [], "any", false, false, true, 47), "html", null, true);
                yield "\" class=\"btn-usach-pill btn-teal-outline\">VER MÁS</a>
                        </div>
                    </div>
                </article>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['noticia'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 52
            yield "            </div>
          ";
        }
        // line 54
        yield "        </div>

        <div style=\"text-align: center;\">
            <a href=\"";
        // line 57
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["base_path"] ?? null), "html", null, true);
        yield "noticias\" class=\"btn-usach-pill btn-teal-solid\">
                VER MÁS NOTICIAS
            </a>
        </div>
    </div>
</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["seccion_titulo", "noticias_destacadas", "base_path"]);        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/usach_theme/templates/block--block-content--seccion-noticias.html.twig";
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
        return array (  158 => 57,  153 => 54,  149 => 52,  137 => 47,  128 => 43,  123 => 41,  114 => 37,  110 => 36,  107 => 35,  103 => 34,  100 => 33,  92 => 27,  84 => 24,  79 => 22,  71 => 19,  67 => 18,  64 => 17,  61 => 16,  59 => 15,  57 => 14,  50 => 10,  45 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/usach_theme/templates/block--block-content--seccion-noticias.html.twig", "C:\\xampp\\htdocs\\drupal\\themes\\custom\\usach_theme\\templates\\block--block-content--seccion-noticias.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 14, "set" => 16, "for" => 34];
        static $filters = ["escape" => 10, "default" => 10, "slice" => 34];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "if", 1 => "set", 2 => "for"],
                [0 => "escape", 1 => "default", 2 => "slice"],
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
