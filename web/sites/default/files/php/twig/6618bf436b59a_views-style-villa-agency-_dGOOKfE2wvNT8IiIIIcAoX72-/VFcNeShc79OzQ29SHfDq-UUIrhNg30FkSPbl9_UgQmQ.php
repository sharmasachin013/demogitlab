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

/* modules/villa_agency/templates/views-style-villa-agency-properties-section.html.twig */
class __TwigTemplate_fdb647dcad6a87cdf2aea758f199b183 extends Template
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
        echo "
<div class=\"row\">
  ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 19
            echo "<div class=\"col-lg-4 col-md-6\">
  <div class=\"item\">
    <a href=\"property-details.html\"><img src=\"";
            // line 21
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "url", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
            echo "\" alt=\"\"></a>
    <span class=\"category\">";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "term", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "</span>
    <h6>";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "price", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            echo "</h6>
    <h4><a href=\"property-details.html\">";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "title", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "</a></h4>
    <ul>
    
      <li>Total Flat Space <span>";
            // line 27
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "totalflatSpace", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "</span></li>
      <li>Floor number <span>";
            // line 28
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "floornumber", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
            echo "</span></li>
      <li>Number of rooms <span>";
            // line 29
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "numberofrooms", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
            echo "</span></li>
      <li>Parking Available <span>";
            // line 30
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "parkingavailable", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            echo "</span></li>
      <li>Payment Process <span>";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "parkingavailable", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "</span></li>
    
    </ul>
    <div class=\"main-button\">
      <a href=\"property-details.html\">Schedule a visit</a>
    </div>
  </div>
</div>

  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "modules/villa_agency/templates/views-style-villa-agency-properties-section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 41,  85 => 31,  81 => 30,  77 => 29,  73 => 28,  69 => 27,  63 => 24,  59 => 23,  55 => 22,  51 => 21,  47 => 19,  43 => 18,  39 => 16,);
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
 * @see template_preprocess_views_style_villa_agency_properties_section()
 */
#}

<div class=\"row\">
  {% for row in rows %}
<div class=\"col-lg-4 col-md-6\">
  <div class=\"item\">
    <a href=\"property-details.html\"><img src=\"{{ row.url }}\" alt=\"\"></a>
    <span class=\"category\">{{ row.term }}</span>
    <h6>{{ row.price }}</h6>
    <h4><a href=\"property-details.html\">{{ row.title }}</a></h4>
    <ul>
    
      <li>Total Flat Space <span>{{ row.totalflatSpace}}</span></li>
      <li>Floor number <span>{{ row.floornumber}}</span></li>
      <li>Number of rooms <span>{{ row.numberofrooms}}</span></li>
      <li>Parking Available <span>{{ row.parkingavailable }}</span></li>
      <li>Payment Process <span>{{ row.parkingavailable }}</span></li>
    
    </ul>
    <div class=\"main-button\">
      <a href=\"property-details.html\">Schedule a visit</a>
    </div>
  </div>
</div>

  {% endfor %}
</div>", "modules/villa_agency/templates/views-style-villa-agency-properties-section.html.twig", "/app/web/modules/villa_agency/templates/views-style-villa-agency-properties-section.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 18);
        static $filters = array("escape" => 21);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape'],
                []
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
