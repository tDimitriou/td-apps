<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/toolbar_themes/themes/base/templates/toolbar-themes--base-menu.html.twig */
class __TwigTemplate_6d76ddf07f6be803e22eea64608fe6079608a7ec25fe1ce50f0985ec486eeabb extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["import" => 23, "macro" => 29, "if" => 31, "for" => 32, "set" => 45];
        $filters = ["escape" => 37, "clean_class" => 37, "without" => 57, "render" => 57];
        $functions = ["cycle" => 39, "link" => 58];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape', 'clean_class', 'without', 'render'],
                ['cycle', 'link']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 23
        $context["menus"] = $this;
        // line 28
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0, ($context["menu_name"] ?? null)));
    }

    // line 29
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__menu_name__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "menu_name" => $__menu_name__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 30
            $context["menus"] = $this;
            // line 31
            if (($context["items"] ?? null)) {
                // line 32
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 34
                    if ($this->getAttribute($context["loop"], "first", [])) {
                        // line 35
                        echo "        <ul";
                        // line 36
                        if ((($context["menu_level"] ?? null) == 0)) {
                            // line 37
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => [0 => "toolbar-menu", 1 => "odd", 2 => "menu-level-1", 3 => ((($context["menu_name"] ?? null)) ? (("menu-name--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["menu_name"] ?? null))))) : (""))]], "method")), "html", null, true);
                        } else {
                            // line 39
                            echo "          class=\"toolbar-menu is-child ";
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_cycle([0 => "odd", 1 => "even"], $this->sandbox->ensureToStringAllowed(($context["menu_level"] ?? null))), "html", null, true);
                            echo " ";
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ("menu-level-" . (($context["menu_level"] ?? null) + 1)), "html", null, true);
                            echo "\"";
                        }
                        // line 41
                        echo ">
      ";
                    }
                    // line 44
                    if ( !twig_test_empty($this->getAttribute($context["item"], "below", []))) {
                        // line 45
                        $context["is_parent"] = true;
                    } else {
                        // line 47
                        $context["is_parent"] = false;
                    }
                    // line 49
                    $context["item_classes"] = [0 => "menu-item", 1 => ((                    // line 51
($context["is_parent"] ?? null)) ? ("is-parent") : ("")), 2 => (($this->getAttribute(                    // line 52
$context["item"], "is_expanded", [])) ? ("menu-item--expanded") : ("")), 3 => (($this->getAttribute(                    // line 53
$context["item"], "is_collapsed", [])) ? ("menu-item--collapsed") : ("")), 4 => (($this->getAttribute(                    // line 54
$context["item"], "in_active_trail", [])) ? ("menu-tem--active-trail") : (""))];
                    // line 57
                    echo "      <li";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["item_classes"] ?? null)], "method"), "setAttribute", [0 => "id", 1 => ("mlid-" . \Drupal\Component\Utility\Html::getClass($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])))))], "method")), "role"), "html", null, true);
                    echo ">";
                    // line 58
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", []))), "html", null, true);
                    // line 59
                    if ($this->getAttribute($context["item"], "show_icon", [])) {
                        // line 60
                        if ($this->getAttribute($context["item"], "icon_attributes", [])) {
                            // line 61
                            echo "<i";
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "icon_attributes", []), "setAttribute", [0 => "data-grunticon-embed", 1 => ""], "method")), "html", null, true);
                            echo "></i>";
                        }
                    }
                    // line 64
                    if ($this->getAttribute($context["item"], "below", [])) {
                        // line 65
                        echo "          ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", []), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1), ($context["menu_name"] ?? null)));
                        echo "
        ";
                    }
                    // line 67
                    echo "      </li>

      ";
                    // line 69
                    if ($this->getAttribute($context["loop"], "last", [])) {
                        // line 70
                        echo "        </ul>
      ";
                    }
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "modules/toolbar_themes/themes/base/templates/toolbar-themes--base-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 70,  159 => 69,  155 => 67,  149 => 65,  147 => 64,  141 => 61,  139 => 60,  137 => 59,  135 => 58,  131 => 57,  129 => 54,  128 => 53,  127 => 52,  126 => 51,  125 => 49,  122 => 47,  119 => 45,  117 => 44,  113 => 41,  106 => 39,  103 => 37,  101 => 36,  99 => 35,  97 => 34,  80 => 32,  78 => 31,  76 => 30,  61 => 29,  57 => 28,  55 => 23,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/toolbar_themes/themes/base/templates/toolbar-themes--base-menu.html.twig", "C:\\xampp\\htdocs\\drupal875\\modules\\toolbar_themes\\themes\\base\\templates\\toolbar-themes--base-menu.html.twig");
    }
}
