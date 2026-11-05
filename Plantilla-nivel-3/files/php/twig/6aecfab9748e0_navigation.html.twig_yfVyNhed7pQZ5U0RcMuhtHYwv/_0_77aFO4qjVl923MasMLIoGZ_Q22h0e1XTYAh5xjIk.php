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

/* themes/custom/usach_theme/templates/navigation.html.twig */
class __TwigTemplate_0a91055bf9f3473d08f31968948ae7e0 extends Template
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
        $context["control_bar_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
        // line 9
        yield "
<div";
        // line 10
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["control_bar_attributes"] ?? null), "addClass", ["admin-toolbar-control-bar"], "method", false, false, true, 10), "setAttribute", ["data-drupal-admin-styles", ""], "method", false, false, true, 11), "html", null, true);
        // line 13
        yield ">
  <div class=\"admin-toolbar-control-bar__content\">
    ";
        // line 15
        yield from $this->load("navigation:toolbar-button", 15)->unwrap()->yield(CoreExtension::toArray(["attributes" => $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["data-drupal-selector" => "admin-toolbar-mobile-trigger", "aria-expanded" => "false", "aria-controls" => "admin-toolbar", "type" => "button"]), "icon" => ["icon_id" => "burger"], "text" => t("Expand sidebar"), "modifiers" => ["small-offset"], "extra_classes" => ["admin-toolbar-control-bar__burger"]]));
        // line 24
        yield "  </div>
</div>

<aside";
        // line 27
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["admin-toolbar"], "method", false, false, true, 27), "setAttribute", ["id", "admin-toolbar"], "method", false, false, true, 28), "setAttribute", ["data-drupal-admin-styles", true], "method", false, false, true, 29), "setAttribute", ["role", "presentation"], "method", false, false, true, 30), "html", null, true);
        // line 32
        yield ">
  ";
        // line 34
        yield "  <div class=\"admin-toolbar__displace-placeholder\"></div>

  ";
        // line 36
        $context["nav_id"] = ("admin-toolbar__scroll-wrapper-" . Twig\Extension\CoreExtension::random($this->env->getCharset()));
        // line 37
        yield "  <nav class=\"admin-toolbar__scroll-wrapper\" aria-labelledby=\"";
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["nav_id"] ?? null), "html", null, true);
        yield "\">
    <h2 id=\"";
        // line 38
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["nav_id"] ?? null), "html", null, true);
        yield "\" class=\"visually-hidden\">";
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Administrative sidebar"));
        yield "</h2>
    ";
        // line 39
        $context["title_menu"] = \Drupal\Component\Utility\Html::getUniqueId("admin-toolbar-title");
        // line 40
        yield "    ";
        // line 41
        yield "    <div";
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["region_attributes"] ?? null), "content", [], "any", false, false, true, 41), "setAttribute", ["id", "menu-builder"], "method", false, false, true, 41), "addClass", ["admin-toolbar__content"], "method", false, false, true, 42), "html", null, true);
        // line 44
        yield ">
      ";
        // line 46
        yield "      <div class=\"admin-toolbar__header\">
        ";
        // line 47
        if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "hide_logo", [], "any", false, false, true, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 48
            yield "          <a class=\"admin-toolbar__logo\" href=\"";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
            yield "\">
            ";
            // line 49
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "logo_path", [], "any", false, false, true, 49))) {
                // line 50
                yield "              <img src=\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "logo_path", [], "any", false, false, true, 50)), "html", null, true);
                yield "\" loading=\"eager\" width=\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "logo_width", [], "any", true, true, true, 50)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "logo_width", [], "any", false, false, true, 50), 40)) : (40)), "html", null, true);
                yield "\" height=\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "logo_height", [], "any", true, true, true, 50)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "logo_height", [], "any", false, false, true, 50), 40)) : (40)), "html", null, true);
                yield "\" role=\"presentation\" aria-hidden=\"true\" focusable=\"false\">
            ";
            } else {
                // line 52
                yield "              ";
                yield from $this->load("@navigation/logo.svg.twig", 52)->unwrap()->yield([]);
                // line 53
                yield "            ";
            }
            // line 54
            yield "            <span class=\"visually-hidden\">";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home page"));
            yield "</span>
          </a>
        ";
        }
        // line 57
        yield "        ";
        yield from $this->load("navigation:toolbar-button", 57)->unwrap()->yield(CoreExtension::toArray(["attributes" => $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["data-toolbar-back-control" => true, "tabindex" => "-1"]), "extra_classes" => ["admin-toolbar__back-button"], "icon" => ["icon_id" => "arrow-left"], "text" => t("Back")]));
        // line 63
        yield "        ";
        // line 64
        yield "        ";
        yield from $this->load("navigation:toolbar-button", 64)->unwrap()->yield(CoreExtension::toArray(["action" => t("Collapse sidebar"), "attributes" => $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["aria-controls" => "admin-toolbar", "type" => "button"]), "extra_classes" => ["admin-toolbar__close-button"], "icon" => ["icon_id" => "cross"]]));
        // line 70
        yield "      </div>

      ";
        // line 72
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "content_top", [], "any", false, false, true, 72), "html", null, true);
        yield "
      ";
        // line 73
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, true, 73), "html", null, true);
        yield "
    </div>

    ";
        // line 76
        $context["title_menu_footer"] = \Drupal\Component\Utility\Html::getUniqueId("admin-toolbar-footer");
        // line 77
        yield "    <div";
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["region_attributes"] ?? null), "footer", [], "any", false, false, true, 77), "setAttribute", ["id", "menu-footer"], "method", false, false, true, 77), "addClass", ["admin-toolbar__footer"], "method", false, false, true, 78), "html", null, true);
        // line 80
        yield ">
      ";
        // line 81
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "footer", [], "any", false, false, true, 81), "html", null, true);
        yield "
      <button aria-controls=\"admin-toolbar\" class=\"admin-toolbar__expand-button\" type=\"button\">
        ";
        // line 83
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\IconsTwigExtension']->getIconRenderable("navigation", "chevron", ["class" => "admin-toolbar__expand-button-chevron", "size" => 16]), "html", null, true);
        yield "
        <span class=\"visually-hidden\" data-toolbar-text>";
        // line 84
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Collapse sidebar"));
        yield "</span>
      </button>
    </div>
  </nav>
</aside>
<div class=\"admin-toolbar-overlay\" admin-toolbar-trigger data-drupal-admin-styles></div>
<script>
  if (localStorage.getItem(\x27Drupal.navigation.sidebarExpanded\x27) !== \x27false\x27 && (window.matchMedia(\x27(min-width: 1024px)\x27).matches)) {
    document.documentElement.setAttribute(\x27data-admin-toolbar\x27, \x27expanded\x27);
  }
</script>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "region_attributes", "settings", "content"]);        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/usach_theme/templates/navigation.html.twig";
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
        return array (  169 => 84,  165 => 83,  160 => 81,  157 => 80,  154 => 77,  152 => 76,  146 => 73,  142 => 72,  138 => 70,  135 => 64,  133 => 63,  130 => 57,  123 => 54,  120 => 53,  117 => 52,  107 => 50,  105 => 49,  100 => 48,  98 => 47,  95 => 46,  92 => 44,  89 => 41,  87 => 40,  85 => 39,  79 => 38,  74 => 37,  72 => 36,  68 => 34,  65 => 32,  63 => 27,  58 => 24,  56 => 15,  52 => 13,  50 => 10,  47 => 9,  45 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/usach_theme/templates/navigation.html.twig", "C:\\xampp\\htdocs\\drupal\\themes\\custom\\usach_theme\\templates\\navigation.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 8, "include" => 15, "if" => 47];
        static $filters = ["escape" => 12, "t" => 18, "clean_unique_id" => 39, "default" => 50];
        static $functions = ["create_attribute" => 8, "random" => 36, "url" => 48, "file_url" => 50, "icon" => 83];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "set", 1 => "include", 2 => "if"],
                [0 => "escape", 1 => "t", 2 => "clean_unique_id", 3 => "default"],
                [0 => "create_attribute", 1 => "random", 2 => "url", 3 => "file_url", 4 => "icon"],
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
