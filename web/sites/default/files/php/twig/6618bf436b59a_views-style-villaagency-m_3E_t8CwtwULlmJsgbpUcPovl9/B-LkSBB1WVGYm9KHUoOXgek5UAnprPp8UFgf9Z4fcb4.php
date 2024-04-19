<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/villa_agency/templates/views-style-villaagency-main-banner.html.twig */
class __TwigTemplate_a3af0eb320c139d739429f8e4cfeca20 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 16, $this->source), "html", null, true);
        echo ">
  ";
        // line 17
        $context["row_classes"] = [0 => ((($context["default_row_class"] ?? null)) ? ("views-row") : (""))];
        // line 18
        echo "  <div class=\"main-banner\">
    <div class=\"owl-carousel owl-banner\">
  ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 21
            echo "   
      ";
            // line 23
            echo "
            <div class=";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "id", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo " style=\"background-image: url('";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "url", [], "any", false, false, true, 24), 24, $this->source)), "html", null, true);
            echo "');\">
              <div class=\"header-text\">
                <span class=\"category\">Toronto, <em>Canada</em></span>
                <h2>";
            // line 27
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "title", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "</h2>
              </div>
            </div>

  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "  </div></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/villa_agency/templates/views-style-villaagency-main-banner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 32,  68 => 27,  60 => 24,  57 => 23,  54 => 21,  50 => 20,  46 => 18,  44 => 17,  39 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for a view template to display a list of rows.
 *
 * Available variables:
 * - attributes: HTML attributes for the container.
 * - rows: A list of rows.
 *   - attributes: The row's HTML attributes.
 *   - content: The row's contents.
 * - title: The title of this group of rows. May be empty.
 *
 * @see template_preprocess_views_style_villaagency_main_banner()
 */
#}
<div{{ attributes }}>
  {% set row_classes = [default_row_class ? 'views-row'] %}
  <div class=\"main-banner\">
    <div class=\"owl-carousel owl-banner\">
  {% for row in rows %}
   
      {# {{ row.content }} #}

            <div class={{ row.id }} style=\"background-image: url('{{ file_url(row.url)}}');\">
              <div class=\"header-text\">
                <span class=\"category\">Toronto, <em>Canada</em></span>
                <h2>{{ row.title }}</h2>
              </div>
            </div>

  {% endfor %}
  </div></div>
</div>
", "modules/villa_agency/templates/views-style-villaagency-main-banner.html.twig", "/app/web/modules/villa_agency/templates/views-style-villaagency-main-banner.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 17, "for" => 20);
        static $filters = array("escape" => 16);
        static $functions = array("file_url" => 24);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['escape'],
                ['file_url']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
