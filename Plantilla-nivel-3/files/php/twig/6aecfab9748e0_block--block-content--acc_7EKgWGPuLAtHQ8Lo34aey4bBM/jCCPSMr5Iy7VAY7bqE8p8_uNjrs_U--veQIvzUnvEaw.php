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

/* themes/custom/usach_theme/templates/block--block-content--accesos-rapidos.html.twig */
class __TwigTemplate_a2ad444a47d33a2394417154a4080dc0 extends Template
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
        yield "<section class=\"section-quick-pills\">
    <div class=\"container quick-pills-grid\">
        ";
        // line 10
        yield "        <a href=\"";
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("pildora_1_url", $context)) ? (Twig\Extension\CoreExtension::default(($context["pildora_1_url"] ?? null), "#admision")) : ("#admision")), "html", null, true);
        yield "\" class=\"quick-pill-card\">
            <img src=\"";
        // line 11
        yield (string) (((($tmp = ($context["pildora_1_icon_url"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["pildora_1_icon_url"], "html", null, true)) : ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((($context["base_path"] ?? null) . ($context["directory"] ?? null)) . "/images/gorro-de-graduacion.png"), "html", null, true)));
        yield "\" alt=\"";
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("pildora_1_title", $context)) ? (Twig\Extension\CoreExtension::default(($context["pildora_1_title"] ?? null), "Admisión")) : ("Admisión")), "html", null, true);
        yield "\" class=\"quick-pill-icon-img\">
            <span class=\"quick-pill-title\">";
        // line 12
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("pildora_1_title", $context)) ? (Twig\Extension\CoreExtension::default(($context["pildora_1_title"] ?? null), "Admisión")) : ("Admisión")), "html", null, true);
        yield "</span>
        </a>

        ";
        // line 16
        yield "        <a href=\"";
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("pildora_2_url", $context)) ? (Twig\Extension\CoreExtension::default(($context["pildora_2_url"] ?? null), "#doctorados")) : ("#doctorados")), "html", null, true);
        yield "\" class=\"quick-pill-card\">
            <img src=\"";
        // line 17
        yield (string) (((($tmp = ($context["pildora_2_icon_url"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["pildora_2_icon_url"], "html", null, true)) : ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((($context["base_path"] ?? null) . ($context["directory"] ?? null)) . "/images/libro.png"), "html", null, true)));
        yield "\" alt=\"";
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("pildora_2_title", $context)) ? (Twig\Extension\CoreExtension::default(($context["pildora_2_title"] ?? null), "Doctorados")) : ("Doctorados")), "html", null, true);
        yield "\" class=\"quick-pill-icon-img\">
            <span class=\"quick-pill-title\">";
        // line 18
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("pildora_2_title", $context)) ? (Twig\Extension\CoreExtension::default(($context["pildora_2_title"] ?? null), "Doctorados")) : ("Doctorados")), "html", null, true);
        yield "</span>
        </a>

        ";
        // line 22
        yield "        <a href=\"";
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("pildora_3_url", $context)) ? (Twig\Extension\CoreExtension::default(($context["pildora_3_url"] ?? null), "#magisteres")) : ("#magisteres")), "html", null, true);
        yield "\" class=\"quick-pill-card\">
            <img src=\"";
        // line 23
        yield (string) (((($tmp = ($context["pildora_3_icon_url"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["pildora_3_icon_url"], "html", null, true)) : ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((($context["base_path"] ?? null) . ($context["directory"] ?? null)) . "/images/escribir.png"), "html", null, true)));
        yield "\" alt=\"";
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("pildora_3_title", $context)) ? (Twig\Extension\CoreExtension::default(($context["pildora_3_title"] ?? null), "Magísteres")) : ("Magísteres")), "html", null, true);
        yield "\" class=\"quick-pill-icon-img\">
            <span class=\"quick-pill-title\">";
        // line 24
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("pildora_3_title", $context)) ? (Twig\Extension\CoreExtension::default(($context["pildora_3_title"] ?? null), "Magísteres")) : ("Magísteres")), "html", null, true);
        yield "</span>
        </a>
    </div>
</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["pildora_1_url", "pildora_1_icon_url", "base_path", "directory", "pildora_1_title", "pildora_2_url", "pildora_2_icon_url", "pildora_2_title", "pildora_3_url", "pildora_3_icon_url", "pildora_3_title"]);        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/usach_theme/templates/block--block-content--accesos-rapidos.html.twig";
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
        return array (  94 => 24,  88 => 23,  83 => 22,  77 => 18,  71 => 17,  66 => 16,  60 => 12,  54 => 11,  49 => 10,  45 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/usach_theme/templates/block--block-content--accesos-rapidos.html.twig", "C:\\xampp\\htdocs\\drupal\\themes\\custom\\usach_theme\\templates\\block--block-content--accesos-rapidos.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 10, "default" => 10];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                [0 => "escape", 1 => "default"],
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
