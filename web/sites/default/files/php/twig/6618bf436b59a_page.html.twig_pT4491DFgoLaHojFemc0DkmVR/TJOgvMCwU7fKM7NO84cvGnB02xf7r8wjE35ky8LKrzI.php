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

/* themes/villaagency/templates/page/page.html.twig */
class __TwigTemplate_6bbf37851f0c962a16bd550c35b9bbae extends Template
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
        // line 48
        echo "<div class=\"layout-container\">

<div class=\"sub-header\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-md-8\">
        <ul class=\"info\">
          <li><i class=\"fa fa-envelope\"></i> info@company.com</li>
          <li><i class=\"fa fa-map\"></i> Sunny Isles Beach, FL 33160</li>
        </ul>
      </div>
      <div class=\"col-lg-4 col-md-4\">
        ";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "subheader", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
        echo "
      </div>
    </div>
  </div>
</div>


<header class=\"header-area header-sticky\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12\">
        <nav class=\"main-nav\">
          <!-- ***** Logo Start ***** -->
          <a href=\"index.html\" class=\"logo\">
            <h1>Villa</h1>
          </a>
          <!-- ***** Logo End ***** -->
          <!-- ***** Menu Start ***** -->
          ";
        // line 78
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
        echo "
          <a class=\"menu-trigger\">
            <span>Menu</span>
          </a>
          <!-- ***** Menu End ***** -->
        </nav>
      </div>
    </div>
  </div>
</header>



  ";
        // line 91
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_banner", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
        echo "








  <div class=\"properties section\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-4 offset-lg-4\">
        </div>
      </div>
    
     ";
        // line 107
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "properties_section", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
        echo "
  
    </div>
  </div>


<div>
  ";
        // line 114
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 114), 114, $this->source), "html", null, true);
        echo "
</div>

<div class=\"section best-deal\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-4\">
      </div>
      <div class=\"col-lg-12\">
        ";
        // line 123
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "best_deal", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
        echo "
      </div>
    </div>
  </div>
</div>



  <footer>
    <div class=\"container\">
      <div class=\"col-lg-8\">
                 ";
        // line 134
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 134), 134, $this->source), "html", null, true);
        echo "
      </div>
    </div>
  </footer>
  





</div>";
    }

    public function getTemplateName()
    {
        return "themes/villaagency/templates/page/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 134,  131 => 123,  119 => 114,  109 => 107,  90 => 91,  74 => 78,  53 => 60,  39 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - messages: Status and error messages. Should be displayed prominently.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 *
 * @ingroup themeable
 */
#}
<div class=\"layout-container\">

<div class=\"sub-header\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-md-8\">
        <ul class=\"info\">
          <li><i class=\"fa fa-envelope\"></i> info@company.com</li>
          <li><i class=\"fa fa-map\"></i> Sunny Isles Beach, FL 33160</li>
        </ul>
      </div>
      <div class=\"col-lg-4 col-md-4\">
        {{ page.subheader }}
      </div>
    </div>
  </div>
</div>


<header class=\"header-area header-sticky\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12\">
        <nav class=\"main-nav\">
          <!-- ***** Logo Start ***** -->
          <a href=\"index.html\" class=\"logo\">
            <h1>Villa</h1>
          </a>
          <!-- ***** Logo End ***** -->
          <!-- ***** Menu Start ***** -->
          {{ page.header }}
          <a class=\"menu-trigger\">
            <span>Menu</span>
          </a>
          <!-- ***** Menu End ***** -->
        </nav>
      </div>
    </div>
  </div>
</header>



  {{ page.main_banner }}








  <div class=\"properties section\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-4 offset-lg-4\">
        </div>
      </div>
    
     {{ page.properties_section }}
  
    </div>
  </div>


<div>
  {{ page.content }}
</div>

<div class=\"section best-deal\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-4\">
      </div>
      <div class=\"col-lg-12\">
        {{ page.best_deal }}
      </div>
    </div>
  </div>
</div>



  <footer>
    <div class=\"container\">
      <div class=\"col-lg-8\">
                 {{ page.footer }}
      </div>
    </div>
  </footer>
  





</div>{# /.layout-container #}
", "themes/villaagency/templates/page/page.html.twig", "/app/web/themes/villaagency/templates/page/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 60);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
