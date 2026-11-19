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

/* core/modules/navigation/templates/navigation-menu.html.twig */
class __TwigTemplate_e65dd4c66c46f6d5481345bd8d4b2eed extends Template
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
        // line 1
        $macros["menus"] = $this->macros["menus"] = $this->getMacroNamespace();
        // line 2
        yield "<div class=\"admin-toolbar__item\">
  <h4 class=\"visually-hidden focusable\">";
        // line 3
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
        yield "</h4>
  <ul class=\"toolbar-block__list\">
    ";
        // line 5
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($macros["menus"] ?? $this->throwUninitializedMacroNamespace(5))->call("menu_items", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], $context, 5, $this->source));
        yield "
  </ul>
</div>

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "title", "items", "attributes", "menu_level", "v"]);        return; yield;
    }

    protected function loadDeclaredMacros(): array
    {
        return [
            "menu_items" => new \Twig\TwigMacro("menu_items", function ($items = null, $attributes = null, $menu_level = null, ...$varargs): string|Markup {
                // line 9
                $macros = $this->macros;
                $context = [
                    "items" => $items,
                    "attributes" => $attributes,
                    "menu_level" => $menu_level,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 10
                    yield "  ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 11
                        yield "
    ";
                        // line 12
                        $context["item_link_tag"] = "a";
                        // line 13
                        yield "
    ";
                        // line 14
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 14), "isRouted", [], "any", false, false, true, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 15
                            yield "      ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 15), "routeName", [], "any", false, false, true, 15) == "<nolink>")) {
                                // line 16
                                yield "        ";
                                $context["item_link_tag"] = Twig\Extension\CoreExtension::constant("\\Drupal\\Core\\GeneratedNoLink::TAG");
                                // line 17
                                yield "      ";
                            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 17), "routeName", [], "any", false, false, true, 17) == "<button>")) {
                                // line 18
                                yield "        ";
                                $context["item_link_tag"] = Twig\Extension\CoreExtension::constant("\\Drupal\\Core\\GeneratedButton::TAG");
                                // line 19
                                yield "      ";
                            }
                            // line 20
                            yield "    ";
                        }
                        // line 21
                        yield "
    ";
                        // line 22
                        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 22), "options", [], "any", false, false, true, 22), "attributes", [], "any", false, false, true, 22))) {
                            // line 23
                            yield "      ";
                            $context["item_link_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
                            // line 24
                            yield "    ";
                        } else {
                            // line 25
                            yield "      ";
                            $context["item_link_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 25), "options", [], "any", false, false, true, 25), "attributes", [], "any", false, false, true, 25));
                            // line 26
                            yield "    ";
                        }
                        // line 27
                        yield "
    ";
                        // line 28
                        $context["item_id"] = \Drupal\Component\Utility\Html::getUniqueId(("navigation-link--" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "original_link", [], "any", false, false, true, 28), "pluginId", [], "any", false, false, true, 28)));
                        // line 29
                        yield "    ";
                        if ((($context["menu_level"] ?? null) == 0)) {
                            // line 30
                            yield "      ";
                            if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 30))) {
                                // line 31
                                yield "        <li id=\"";
                                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["item_id"] ?? null), "html", null, true);
                                yield "\" class=\"toolbar-block__list-item\">
          ";
                                // line 32
                                yield from $this->load("navigation:toolbar-button", 32)->unwrap()->yield(CoreExtension::toArray(["attributes" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                                 // line 33
($context["item_link_attributes"] ?? null), "setAttribute", ["href", Twig\Extension\CoreExtension::default($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 33)), null)], "method", false, false, true, 33), "setAttribute", ["data-drupal-tooltip", CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 33)], "method", false, false, true, 33), "setAttribute", ["data-drupal-tooltip-class", "admin-toolbar__tooltip"], "method", false, false, true, 33), "icon" => \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,                                 // line 34
$context["item"], "class", [], "any", false, false, true, 34)), "html_tag" =>                                 // line 35
($context["item_link_tag"] ?? null), "text" => CoreExtension::getAttribute($this->env, $this->source,                                 // line 36
$context["item"], "title", [], "any", false, false, true, 36), "modifiers" => Twig\Extension\CoreExtension::filter($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->getChecker()->isSandboxed($this->source), ["collapsible", (((                                // line 39
($context["item_link_tag"] ?? null) == "span")) ? ("non-interactive") : (null))],                                 // line 40
function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return  !(null === ($context["v"] ?? null)); })]));
                                // line 42
                                yield "        </li>
      ";
                            } else {
                                // line 44
                                yield "        <li id=\"";
                                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["item_id"] ?? null), "html", null, true);
                                yield "\" class=\"toolbar-block__list-item toolbar-popover\" data-toolbar-popover>
          ";
                                // line 45
                                yield from $this->load("navigation:toolbar-button", 45)->unwrap()->yield(CoreExtension::toArray(["action" => t("Extend"), "attributes" => $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["aria-expanded" => "false", "aria-controls" =>                                 // line 49
($context["item_id"] ?? null), "data-toolbar-popover-control" => true, "data-has-safe-triangle" => true]), "icon" => \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,                                 // line 53
$context["item"], "class", [], "any", false, false, true, 53)), "text" => CoreExtension::getAttribute($this->env, $this->source,                                 // line 54
$context["item"], "title", [], "any", false, false, true, 54), "modifiers" => ["expand--side", "collapsible"], "extra_classes" => ["toolbar-popover__control"]]));
                                // line 63
                                yield "          <div class=\"toolbar-popover__wrapper\" data-toolbar-popover-wrapper inert>
            ";
                                // line 64
                                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 64)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    // line 65
                                    yield "              ";
                                    yield from $this->load("navigation:toolbar-button", 65)->unwrap()->yield(CoreExtension::toArray(["attributes" => CoreExtension::getAttribute($this->env, $this->source,                                     // line 66
($context["item_link_attributes"] ?? null), "setAttribute", ["href", $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 66))], "method", false, false, true, 66), "html_tag" =>                                     // line 67
($context["item_link_tag"] ?? null), "text" => CoreExtension::getAttribute($this->env, $this->source,                                     // line 68
$context["item"], "title", [], "any", false, false, true, 68), "modifiers" => ["large", "dark"], "extra_classes" => ["toolbar-popover__header"]]));
                                    // line 77
                                    yield "            ";
                                } else {
                                    // line 78
                                    yield "              ";
                                    yield from $this->load("navigation:toolbar-button", 78)->unwrap()->yield(CoreExtension::toArray(["attributes" => $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(), "modifiers" => ["large", "dark", "non-interactive"], "extra_classes" => ["toolbar-popover__header"], "html_tag" => "span", "text" => CoreExtension::getAttribute($this->env, $this->source,                                     // line 89
$context["item"], "title", [], "any", false, false, true, 89)]));
                                    // line 91
                                    yield "            ";
                                }
                                // line 92
                                yield "            <ul class=\"toolbar-menu toolbar-popover__menu\">
              ";
                                // line 93
                                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($macros["menus"] ?? $this->throwUninitializedMacroNamespace(93))->call("menu_items", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 93), ($context["attributes"] ?? null), 1], $context, 93, $this->source));
                                yield "
            </ul>
          </div>
        </li>
      ";
                            }
                            // line 98
                            yield "
    ";
                        } elseif ((                        // line 99
($context["menu_level"] ?? null) == 1)) {
                            // line 100
                            yield "      <li class=\"toolbar-menu__item toolbar-menu__item--level-";
                            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["menu_level"] ?? null), "html", null, true);
                            yield "\">
        ";
                            // line 101
                            if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 101))) {
                                // line 102
                                yield "          ";
                                yield from $this->load("navigation:toolbar-button", 102)->unwrap()->yield(CoreExtension::toArray(["attributes" => CoreExtension::getAttribute($this->env, $this->source,                                 // line 103
($context["item_link_attributes"] ?? null), "setAttribute", ["href", Twig\Extension\CoreExtension::default($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 103)), null)], "method", false, false, true, 103), "text" => CoreExtension::getAttribute($this->env, $this->source,                                 // line 104
$context["item"], "title", [], "any", false, false, true, 104), "html_tag" =>                                 // line 105
($context["item_link_tag"] ?? null), "extra_classes" => [(((                                // line 107
($context["item_link_tag"] ?? null) == "span")) ? ("toolbar-button--non-interactive") : (""))]]));
                                // line 110
                                yield "        ";
                            } else {
                                // line 111
                                yield "          ";
                                yield from $this->load("navigation:toolbar-button", 111)->unwrap()->yield(CoreExtension::toArray(["attributes" => $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["aria-expanded" => "false", "data-toolbar-menu-trigger" =>                                 // line 114
($context["menu_level"] ?? null)]), "text" => CoreExtension::getAttribute($this->env, $this->source,                                 // line 116
$context["item"], "title", [], "any", false, false, true, 116), "modifiers" => ["expand--down"]]));
                                // line 119
                                yield "          <ul class=\"toolbar-menu toolbar-menu--level-";
                                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["menu_level"] ?? null) + 1), "html", null, true);
                                yield "\" inert>
            ";
                                // line 120
                                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($macros["menus"] ?? $this->throwUninitializedMacroNamespace(120))->call("menu_items", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 120), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], $context, 120, $this->source));
                                yield "
          </ul>
        ";
                            }
                            // line 123
                            yield "      </li>
    ";
                        } else {
                            // line 125
                            yield "      <li class=\"toolbar-menu__item toolbar-menu__item--level-";
                            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["menu_level"] ?? null), "html", null, true);
                            yield "\">
        ";
                            // line 126
                            if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 126))) {
                                // line 127
                                yield "          ";
                                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 127), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 127), ["class" => ["toolbar-menu__link", ("toolbar-menu__link--" .                                 // line 130
($context["menu_level"] ?? null))], "data-index-text" => Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,                                 // line 132
$context["item"], "title", [], "any", false, false, true, 132)))]), "html", null, true);
                                // line 133
                                yield "
        ";
                            } else {
                                // line 135
                                yield "          <button
            class=\"toolbar-menu__link toolbar-menu__link--";
                                // line 136
                                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["menu_level"] ?? null), "html", null, true);
                                yield "\"
            data-toolbar-menu-trigger=\"";
                                // line 137
                                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["menu_level"] ?? null), "html", null, true);
                                yield "\"
            aria-expanded=\"false\"
            data-index-text=\"";
                                // line 139
                                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 139))), "html", null, true);
                                yield "\"
          >
            <span data-toolbar-action class=\"toolbar-menu__link-action visually-hidden\">";
                                // line 141
                                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Extend"));
                                yield "</span>
            <span class=\"toolbar-menu__link-title\">";
                                // line 142
                                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 142), "html", null, true);
                                yield "</span>
          </button>
          <ul class=\"toolbar-menu toolbar-menu--level-";
                                // line 144
                                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["menu_level"] ?? null) + 1), "html", null, true);
                                yield "\" inert>
            ";
                                // line 145
                                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($macros["menus"] ?? $this->throwUninitializedMacroNamespace(145))->call("menu_items", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 145), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], $context, 145, $this->source));
                                yield "
          </ul>
        ";
                            }
                            // line 148
                            yield "      </li>
    ";
                        }
                        // line 150
                        yield "  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent);
                    $context += $_parent;
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["items" => false, "attributes" => false, "menu_level" => false], false),
        ];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/modules/navigation/templates/navigation-menu.html.twig";
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
        return array (  300 => 150,  296 => 148,  290 => 145,  286 => 144,  281 => 142,  277 => 141,  272 => 139,  267 => 137,  263 => 136,  260 => 135,  256 => 133,  254 => 132,  253 => 130,  251 => 127,  249 => 126,  244 => 125,  240 => 123,  234 => 120,  229 => 119,  227 => 116,  226 => 114,  224 => 111,  221 => 110,  219 => 107,  218 => 105,  217 => 104,  216 => 103,  214 => 102,  212 => 101,  207 => 100,  205 => 99,  202 => 98,  194 => 93,  191 => 92,  188 => 91,  186 => 89,  184 => 78,  181 => 77,  179 => 68,  178 => 67,  177 => 66,  175 => 65,  173 => 64,  170 => 63,  168 => 54,  167 => 53,  166 => 49,  165 => 45,  160 => 44,  156 => 42,  154 => 40,  153 => 39,  152 => 36,  151 => 35,  150 => 34,  149 => 33,  148 => 32,  143 => 31,  140 => 30,  137 => 29,  135 => 28,  132 => 27,  129 => 26,  126 => 25,  123 => 24,  120 => 23,  118 => 22,  115 => 21,  112 => 20,  109 => 19,  106 => 18,  103 => 17,  100 => 16,  97 => 15,  95 => 14,  92 => 13,  90 => 12,  87 => 11,  82 => 10,  70 => 9,  55 => 5,  50 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/modules/navigation/templates/navigation-menu.html.twig", "/var/www/html/web/core/modules/navigation/templates/navigation-menu.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["import" => 1, "macro" => 9, "for" => 10, "set" => 12, "if" => 14, "include" => 32];
        static $filters = ["escape" => 3, "clean_unique_id" => 28, "default" => 33, "render" => 33, "clean_class" => 34, "filter" => 40, "t" => 46, "lower" => 132, "first" => 132];
        static $functions = ["constant" => 16, "create_attribute" => 23, "link" => 127];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "import", 1 => "macro", 2 => "for", 3 => "set", 4 => "if", 5 => "include"],
                [0 => "escape", 1 => "clean_unique_id", 2 => "default", 3 => "render", 4 => "clean_class", 5 => "filter", 6 => "t", 7 => "lower", 8 => "first"],
                [0 => "constant", 1 => "create_attribute", 2 => "link"],
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
