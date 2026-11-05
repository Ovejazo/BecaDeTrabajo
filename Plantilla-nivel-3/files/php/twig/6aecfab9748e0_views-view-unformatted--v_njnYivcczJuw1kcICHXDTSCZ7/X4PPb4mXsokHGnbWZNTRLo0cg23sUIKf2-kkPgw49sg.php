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

/* themes/custom/usach_theme/templates/views-view-unformatted--videos.html.twig */
class __TwigTemplate_e8c4c6fe994fdcbb49a9b91257efc1c0 extends Template
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
        yield "<div class=\"videos-nivel3-grid\">
  ";
        // line 8
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["videos_list"] ?? null))) {
            // line 9
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["videos_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
                // line 10
                yield "      <div class=\"video-n3-card\">
          <div class=\"video-n3-thumb-wrapper\">
              <a href=\"";
                // line 12
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["video"], "url", [], "any", false, false, true, 12), "html", null, true);
                yield "\">
                  <img src=\"";
                // line 13
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["video"], "image", [], "any", false, false, true, 13), "html", null, true);
                yield "\" alt=\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["video"], "title", [], "any", false, false, true, 13), "html", null, true);
                yield "\" class=\"video-n3-thumb\">
                  <div class=\"video-play-red-btn\">
                      <svg viewBox=\"0 0 24 24\"><polygon points=\"5 3 19 12 5 21 5 3\"></polygon></svg>
                  </div>
              </a>
          </div>
          <h4 class=\"video-n3-title\">
              <a href=\"";
                // line 20
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["video"], "url", [], "any", false, false, true, 20), "html", null, true);
                yield "\">";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["video"], "title", [], "any", false, false, true, 20), "html", null, true);
                yield "</a>
          </h4>
          <a href=\"";
                // line 22
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["video"], "url", [], "any", false, false, true, 22), "html", null, true);
                yield "\" class=\"btn-usach-pill btn-orange-outline\">VER VIDEO</a>
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['video'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 25
            yield "  ";
        } else {
            // line 26
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["rows"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 27
                yield "      <div class=\"video-n3-card\" style=\"padding: 20px;\">
          ";
                // line 28
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 28), "html", null, true);
                yield "
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 31
            yield "  ";
        }
        // line 32
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["videos_list", "rows"]);        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/usach_theme/templates/views-view-unformatted--videos.html.twig";
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
        return array (  116 => 32,  113 => 31,  103 => 28,  100 => 27,  95 => 26,  92 => 25,  82 => 22,  75 => 20,  63 => 13,  59 => 12,  55 => 10,  50 => 9,  48 => 8,  45 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/usach_theme/templates/views-view-unformatted--videos.html.twig", "C:\\xampp\\htdocs\\drupal\\themes\\custom\\usach_theme\\templates\\views-view-unformatted--videos.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 8, "for" => 9];
        static $filters = ["escape" => 12];
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
