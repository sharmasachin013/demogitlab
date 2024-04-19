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

/* themes/villaagency/templates/page/page--front.html.twig */
class __TwigTemplate_09e4f0767c50000ef78d6672a9e9c667 extends Template
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


  <div class=\"featured section\">
    ";
        // line 95
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_section", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
        echo "
  </div>

  <div class=\"video section\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-4 offset-lg-4\">
          ";
        // line 102
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "video_section", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
        echo "
        </div>
      </div>
    </div>
  </div>


  <div class=\"video-content\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-10 offset-lg-1\">
          ";
        // line 113
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "video_content", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
        echo "
        </div>
      </div>
    </div>
  </div>


  <div class=\"fun-facts\">
    <div class=\"container\">
      <div class=\"row\">
       ";
        // line 123
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "fun_facts", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
        echo "
      </div>
    </div>
  </div>


  <div class=\"section best-deal\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-4\">
          <div class=\"section-heading\">
            <h6>| Best Deal</h6>
            <h2>Find Your Best Deal Right Now!</h2>
          </div>
        </div>
        <div class=\"col-lg-12\">
         ";
        // line 139
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "best_deal", [], "any", false, false, true, 139), 139, $this->source), "html", null, true);
        echo "
        </div>
      </div>
    </div>
  </div>


  <div class=\"properties section\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-4 offset-lg-4\">
          <div class=\"section-heading text-center\">
            <h6>| Properties</h6>
            <h2>We Provide The Best Property You Like</h2>
          </div>
        </div>
      </div>
    
     ";
        // line 157
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "properties_section", [], "any", false, false, true, 157), 157, $this->source), "html", null, true);
        echo "
  
    </div>
  </div>


  <div class=\"contact section\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-4 offset-lg-4\">
          ";
        // line 167
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contact_section", [], "any", false, false, true, 167), 167, $this->source), "html", null, true);
        echo "
        </div>
      </div>
    </div>
  </div>


  <div class=\"contact-content\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-7\">
         ";
        // line 178
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contact_map", [], "any", false, false, true, 178), 178, $this->source), "html", null, true);
        echo "
        </div>
        <div class=\"col-lg-5\">
          ";
        // line 181
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contact_form", [], "any", false, false, true, 181), 181, $this->source), "html", null, true);
        echo "
        </div>
      </div>
    </div>
  </div>


  <footer>
    <div class=\"container\">
      <div class=\"col-lg-8\">
                 ";
        // line 191
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 191), 191, $this->source), "html", null, true);
        echo "
      </div>
    </div>
  </footer>
  





</div>";
    }

    public function getTemplateName()
    {
        return "themes/villaagency/templates/page/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 191,  207 => 181,  201 => 178,  187 => 167,  174 => 157,  153 => 139,  134 => 123,  121 => 113,  107 => 102,  97 => 95,  90 => 91,  74 => 78,  53 => 60,  39 => 48,);
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


  <div class=\"featured section\">
    {{ page.featured_section }}
  </div>

  <div class=\"video section\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-4 offset-lg-4\">
          {{ page.video_section }}
        </div>
      </div>
    </div>
  </div>


  <div class=\"video-content\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-10 offset-lg-1\">
          {{ page.video_content }}
        </div>
      </div>
    </div>
  </div>


  <div class=\"fun-facts\">
    <div class=\"container\">
      <div class=\"row\">
       {{ page.fun_facts }}
      </div>
    </div>
  </div>


  <div class=\"section best-deal\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-4\">
          <div class=\"section-heading\">
            <h6>| Best Deal</h6>
            <h2>Find Your Best Deal Right Now!</h2>
          </div>
        </div>
        <div class=\"col-lg-12\">
         {{ page.best_deal }}
        </div>
      </div>
    </div>
  </div>


  <div class=\"properties section\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-4 offset-lg-4\">
          <div class=\"section-heading text-center\">
            <h6>| Properties</h6>
            <h2>We Provide The Best Property You Like</h2>
          </div>
        </div>
      </div>
    
     {{ page.properties_section }}
  
    </div>
  </div>


  <div class=\"contact section\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-4 offset-lg-4\">
          {{ page.contact_section }}
        </div>
      </div>
    </div>
  </div>


  <div class=\"contact-content\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-7\">
         {{ page.contact_map }}
        </div>
        <div class=\"col-lg-5\">
          {{ page.contact_form }}
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
", "themes/villaagency/templates/page/page--front.html.twig", "/app/web/themes/villaagency/templates/page/page--front.html.twig");
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
