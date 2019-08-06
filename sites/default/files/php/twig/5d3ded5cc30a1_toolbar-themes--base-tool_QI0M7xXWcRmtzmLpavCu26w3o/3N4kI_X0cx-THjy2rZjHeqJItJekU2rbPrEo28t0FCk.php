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

/* modules/toolbar_themes/themes/base/templates/toolbar-themes--base-toolbar.html.twig */
class __TwigTemplate_c783d1746c94a24525869a7260a61c3bcd32bd82cca4beeda2089db7305dee4d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 28, "for" => 36, "if" => 41, "spaceless" => 47];
        $filters = ["escape" => 26];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if', 'spaceless'],
                ['escape'],
                []
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
        // line 26
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "toolbar"], "method")), "html", null, true);
        echo ">
  ";
        // line 28
        $context["classes"] = [0 => "toolbar-bar", 1 => ((        // line 30
($context["show_icons"] ?? null)) ? ("has-icons") : ("no-icons")), 2 => ((        // line 31
($context["show_tabs"] ?? null)) ? ("has-tabs") : ("no-tabs"))];
        // line 34
        echo "  <nav";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["toolbar_attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method"), "setAttribute", [0 => "style", 1 => ($context["font_size"] ?? null)], "method")), "html", null, true);
        echo ">
    <h2 class=\"visually-hidden\">";
        // line 35
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["toolbar_heading"] ?? null)), "html", null, true);
        echo "</h2>
    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["tab"]) {
            // line 37
            echo "      ";
            $context["tray"] = $this->getAttribute(($context["trays"] ?? null), $context["key"], [], "array");
            // line 38
            echo "      <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["tab"], "attributes", []), "addClass", [0 => "toolbar-tab"], "method")), "html", null, true);
            echo ">
        <span class=\"toolbar-tab__items-wrapper\">";
            // line 40
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["tab"], "link", [])), "html", null, true);
            // line 41
            if ((($context["show_icons"] ?? null) && ($context["show_tabs"] ?? null))) {
                // line 42
                if ($this->getAttribute($context["tab"], "icon_attributes", [])) {
                    // line 43
                    echo "<i";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["tab"], "icon_attributes", []), "setAttribute", [0 => "data-grunticon-embed", 1 => ""], "method")), "html", null, true);
                    echo "></i>";
                }
            }
            // line 46
            echo "</span>
        ";
            // line 47
            ob_start();
            // line 48
            echo "          <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["tray"] ?? null), "attributes", [])), "html", null, true);
            echo ">
            ";
            // line 49
            if ($this->getAttribute(($context["tray"] ?? null), "label", [])) {
                // line 50
                echo "              <h3 class=\"toolbar-tray-name visually-hidden\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["tray"] ?? null), "label", [])), "html", null, true);
                echo "</h3>
            ";
            }
            // line 52
            echo "            <nav class=\"toolbar-lining clearfix\" role=\"navigation\"";
            if ($this->getAttribute(($context["tray"] ?? null), "label", [])) {
                echo " aria-label=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["tray"] ?? null), "label", [])), "html", null, true);
            }
            echo "\">
              ";
            // line 53
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["tray"] ?? null), "links", [])), "html", null, true);
            echo "
            </nav>
          </div>
        ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 57
            echo "      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "  </nav>
  ";
        // line 60
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["remainder"] ?? null)), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/toolbar_themes/themes/base/templates/toolbar-themes--base-toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 60,  137 => 59,  130 => 57,  123 => 53,  115 => 52,  109 => 50,  107 => 49,  102 => 48,  100 => 47,  97 => 46,  91 => 43,  89 => 42,  87 => 41,  85 => 40,  80 => 38,  77 => 37,  73 => 36,  69 => 35,  64 => 34,  62 => 31,  61 => 30,  60 => 28,  55 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/toolbar_themes/themes/base/templates/toolbar-themes--base-toolbar.html.twig", "C:\\xampp\\htdocs\\drupal875\\modules\\toolbar_themes\\themes\\base\\templates\\toolbar-themes--base-toolbar.html.twig");
    }
}
