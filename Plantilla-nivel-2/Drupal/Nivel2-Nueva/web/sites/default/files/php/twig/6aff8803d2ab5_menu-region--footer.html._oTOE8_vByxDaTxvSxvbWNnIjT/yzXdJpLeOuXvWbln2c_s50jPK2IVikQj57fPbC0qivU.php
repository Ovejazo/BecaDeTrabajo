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

/* core/modules/navigation/templates/menu-region--footer.html.twig */
class __TwigTemplate_f1c6d0049ab6c5e62c0e333f788c5a22 extends Template
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
        // line 24
        yield "<div class=\"admin-toolbar__item\">
  ";
        // line 26
        yield "  <h4 class=\"visually-hidden focusable\">";
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
        yield "</h4>
  <ul class=\"toolbar-block__list\">
    <li id=\"admin-toolbar-user-menu\" class=\"toolbar-block__list-item toolbar-block__list-item--user toolbar-popover\" data-toolbar-popover>
      ";
        // line 29
        yield from $this->load("navigation:toolbar-button", 29)->unwrap()->yield(CoreExtension::toArray(["action" => t("Extend"), "attributes" => $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["aria-expanded" => "false", "aria-controls" => "admin-toolbar-user-menu", "data-toolbar-popover-control" => true, "data-has-safe-triangle" => true]), "icon" => \Drupal\Component\Utility\Html::getClass(        // line 37
($context["menu_name"] ?? null)), "text" =>         // line 38
($context["title"] ?? null), "modifiers" => ["expand--side", "collapsible"], "extra_classes" => ["toolbar-popover__control"]]));
        // line 47
        yield "      <div class=\"toolbar-popover__wrapper\" data-toolbar-popover-wrapper>
        ";
        // line 48
        yield from $this->load("navigation:toolbar-button", 48)->unwrap()->yield(CoreExtension::toArray(["attributes" => $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(), "modifiers" => ["large", "dark", "non-interactive"], "extra_classes" => ["toolbar-popover__header"], "html_tag" => "span", "text" =>         // line 59
($context["title"] ?? null)]));
        // line 61
        yield "        <ul class=\"toolbar-menu toolbar-popover__menu\">
          ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 63
            yield "            <li class=\"toolbar-menu__item toolbar-menu__item--level-1\">
              ";
            // line 64
            yield from $this->load("navigation:toolbar-button", 64)->unwrap()->yield(CoreExtension::toArray(["attributes" => $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["href" => $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source,             // line 65
$context["item"], "url", [], "any", false, false, true, 65))]), "html_tag" => "a", "text" => CoreExtension::getAttribute($this->env, $this->source,             // line 67
$context["item"], "title", [], "any", false, false, true, 67)]));
            // line 69
            yield "            </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 71
        yield "        </ul>
      </div>
    </li>
  </ul>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["title", "menu_name", "items"]);        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/modules/navigation/templates/menu-region--footer.html.twig";
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
        return array (  87 => 71,  79 => 69,  77 => 67,  76 => 65,  75 => 64,  72 => 63,  68 => 62,  65 => 61,  63 => 59,  62 => 48,  59 => 47,  57 => 38,  56 => 37,  55 => 29,  48 => 26,  45 => 24,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/modules/navigation/templates/menu-region--footer.html.twig", "/var/www/html/web/core/modules/navigation/templates/menu-region--footer.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["include" => 29, "for" => 62];
        static $filters = ["escape" => 26, "t" => 30, "clean_class" => 37, "render" => 65];
        static $functions = ["create_attribute" => 31];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "include", 1 => "for"],
                [0 => "escape", 1 => "t", 2 => "clean_class", 3 => "render"],
                [0 => "create_attribute"],
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
