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

/* modules/villa_agency/templates/views-style-villa-agency-best-deal.html.twig */
class __TwigTemplate_beee6b526a54aadf722c4d778716b044 extends Template
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
        echo "<div class=\"tabs-content\">
  <div class=\"row\">
    <div class=\"nav-wrapper \">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 21
            echo "        <li class=\"nav-item\" role=\"presentation\">
          <button class=\"nav-link\" id=\"appartment-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "term", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "\"
            type=\"button\" role=\"tab\" aria-controls=\"";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "term", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            echo "\" aria-selected=\"true\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "term", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            echo "</button>
        </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "      </ul>
    </div>
    <div class=\"tab-content\" id=\"myTabContent\">
      ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 30
            echo "      <div class=\"tab-pane fade\" id=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "term", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            echo "\" role=\"tabpanel\" aria-labelledby=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "term", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            echo "-tab\">
        <div class=\"row\">
          <div class=\"col-lg-3\">
            <div class=\"info-table\">
              <ul>
               
                <li>Total Flat Space <span>";
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "totalflatSpace", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
            echo "</span></li>
                <li>Floor number <span>";
            // line 37
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "floornumber", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
            echo "</span></li>
                <li>Number of rooms <span>";
            // line 38
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "numberofrooms", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
            echo "</span></li>
                <li>Parking Available <span>";
            // line 39
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "parkingavailable", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
            echo "</span></li>
                <li>Payment Process <span>";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "parkingavailable", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
            echo "</span></li>
               
              </ul>
            </div>
          </div>
          <div class=\"col-lg-6\">
            <img src=\"";
            // line 46
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "url", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
            echo "\" alt=\"\">
          </div>
          <div class=\"col-lg-3\">
            <h4>Extra Info About Property</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempor pack incididunt ut labore et
              dolore magna aliqua quised ipsum suspendisse.
              <br><br>When you need free CSS templates, you can simply type TemplateMo in any search engine website. In
              addition, you can type TemplateMo Portfolio, TemplateMo One Page Layouts, etc.
            </p>
            <div class=\"icon-button\">
              <a href=\"property-details.html\"><i class=\"fa fa-calendar\"></i> Schedule a visit</a>
            </div>
          </div>
        </div>
      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/villa_agency/templates/views-style-villa-agency-best-deal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 62,  113 => 46,  104 => 40,  100 => 39,  96 => 38,  92 => 37,  88 => 36,  76 => 30,  72 => 29,  67 => 26,  56 => 23,  52 => 22,  49 => 21,  45 => 20,  39 => 16,);
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
 * @see template_preprocess_views_style_villa_agency_best_deal()
 */
#}
<div class=\"tabs-content\">
  <div class=\"row\">
    <div class=\"nav-wrapper \">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
        {% for row in rows %}
        <li class=\"nav-item\" role=\"presentation\">
          <button class=\"nav-link\" id=\"appartment-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#{{row.term}}\"
            type=\"button\" role=\"tab\" aria-controls=\"{{ row.term }}\" aria-selected=\"true\">{{ row.term }}</button>
        </li>
        {% endfor %}
      </ul>
    </div>
    <div class=\"tab-content\" id=\"myTabContent\">
      {% for row in rows %}
      <div class=\"tab-pane fade\" id=\"{{ row.term }}\" role=\"tabpanel\" aria-labelledby=\"{{row.term}}-tab\">
        <div class=\"row\">
          <div class=\"col-lg-3\">
            <div class=\"info-table\">
              <ul>
               
                <li>Total Flat Space <span>{{ row.totalflatSpace}}</span></li>
                <li>Floor number <span>{{ row.floornumber}}</span></li>
                <li>Number of rooms <span>{{ row.numberofrooms}}</span></li>
                <li>Parking Available <span>{{ row.parkingavailable }}</span></li>
                <li>Payment Process <span>{{ row.parkingavailable }}</span></li>
               
              </ul>
            </div>
          </div>
          <div class=\"col-lg-6\">
            <img src=\"{{ row.url }}\" alt=\"\">
          </div>
          <div class=\"col-lg-3\">
            <h4>Extra Info About Property</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempor pack incididunt ut labore et
              dolore magna aliqua quised ipsum suspendisse.
              <br><br>When you need free CSS templates, you can simply type TemplateMo in any search engine website. In
              addition, you can type TemplateMo Portfolio, TemplateMo One Page Layouts, etc.
            </p>
            <div class=\"icon-button\">
              <a href=\"property-details.html\"><i class=\"fa fa-calendar\"></i> Schedule a visit</a>
            </div>
          </div>
        </div>
      </div>
      {% endfor %}
    </div>
  </div>
</div>
", "modules/villa_agency/templates/views-style-villa-agency-best-deal.html.twig", "/app/web/modules/villa_agency/templates/views-style-villa-agency-best-deal.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 20);
        static $filters = array("escape" => 22);
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
