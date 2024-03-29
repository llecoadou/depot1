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

/* partials/__header.html.twig */
class __TwigTemplate_9d579cf2073e4a6dcf7145e620040e68 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/__header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/__header.html.twig"));

        // line 1
        echo "<!-- ======= Header ======= -->
<header id=\"header\" class=\"d-flex align-items-center bg-dark\">
\t<div class=\"container d-flex justify-content-between \">

\t\t<div id=\"logo\">
\t\t\t<h1>
\t\t\t\t<a href=\"index.html\" style=\"color: #2F47A0;\">K<span style=\"color:#CA9165;\">AL</span>
\t\t\t\t</a>
\t\t\t</h1>
\t\t\t<!-- Uncomment below if you prefer to use an image logo -->
\t\t\t<!-- <a href=\"index.html\"><img src=\"assets/img/logo.png\" alt=\"\"></a>-->
\t\t</div>

\t\t<nav id=\"navbar\" class=\"navbar\">
\t\t\t<ul>
\t\t\t\t<li>
\t\t\t\t\t<a class=\"nav-link scrollto active\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil.index");
        echo "\">Accueil</a>
\t\t\t\t</li>

\t\t\t\t<li>
\t\t\t\t\t<a class=\"nav-link scrollto\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("boutique.index");
        echo "\">Boutique</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a class=\"nav-link scrollto \" href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conseil.index");
        echo "\">Astuces</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a class=\"nav-link scrollto\" href=\"";
        // line 27
        if (array_key_exists("modifHeader", $context)) {
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil.index");
            echo "#testimonials";
        } else {
            echo " #testimonials ";
        }
        echo "\">Team</a>
\t\t\t\t</li>

\t\t\t\t<li>
\t\t\t\t\t<a class=\"nav-link scrollto\" href=\"";
        // line 31
        if (array_key_exists("modifHeader", $context)) {
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil.index");
            echo "#contact";
        } else {
            echo " #contact ";
        }
        echo "\">Contact</a>
\t\t\t\t</li>
\t\t\t\t
\t\t\t\t";
        // line 34
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34)) {
            // line 35
            echo "                    <li><a class=\"nav-link scrollto\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">
                        Déconnexion
                    </a></li>
                ";
        } else {
            // line 39
            echo "                    <li><a class=\"nav-link scrollto\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">
                        Connexion
                    </a></li>
                ";
        }
        // line 43
        echo "
\t\t\t</ul>
\t\t\t<i class=\"bi bi-list mobile-nav-toggle\"></i>
\t\t</nav>
\t\t<!-- .navbar -->

\t</div>
</header>
<!-- End Header -->
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "partials/__header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 43,  113 => 39,  105 => 35,  103 => 34,  92 => 31,  80 => 27,  74 => 24,  68 => 21,  61 => 17,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- ======= Header ======= -->
<header id=\"header\" class=\"d-flex align-items-center bg-dark\">
\t<div class=\"container d-flex justify-content-between \">

\t\t<div id=\"logo\">
\t\t\t<h1>
\t\t\t\t<a href=\"index.html\" style=\"color: #2F47A0;\">K<span style=\"color:#CA9165;\">AL</span>
\t\t\t\t</a>
\t\t\t</h1>
\t\t\t<!-- Uncomment below if you prefer to use an image logo -->
\t\t\t<!-- <a href=\"index.html\"><img src=\"assets/img/logo.png\" alt=\"\"></a>-->
\t\t</div>

\t\t<nav id=\"navbar\" class=\"navbar\">
\t\t\t<ul>
\t\t\t\t<li>
\t\t\t\t\t<a class=\"nav-link scrollto active\" href=\"{{path('accueil.index')}}\">Accueil</a>
\t\t\t\t</li>

\t\t\t\t<li>
\t\t\t\t\t<a class=\"nav-link scrollto\" href=\"{{path('boutique.index')}}\">Boutique</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a class=\"nav-link scrollto \" href=\"{{path('conseil.index')}}\">Astuces</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a class=\"nav-link scrollto\" href=\"{% if modifHeader is defined %}{{path('accueil.index')}}#testimonials{% else %} #testimonials {% endif %}\">Team</a>
\t\t\t\t</li>

\t\t\t\t<li>
\t\t\t\t\t<a class=\"nav-link scrollto\" href=\"{% if modifHeader is defined %}{{path('accueil.index')}}#contact{% else %} #contact {% endif %}\">Contact</a>
\t\t\t\t</li>
\t\t\t\t
\t\t\t\t{% if app.user %}
                    <li><a class=\"nav-link scrollto\" href=\"{{ path('app_logout') }}\">
                        Déconnexion
                    </a></li>
                {% else %}
                    <li><a class=\"nav-link scrollto\" href=\"{{ path('app_login') }}\">
                        Connexion
                    </a></li>
                {% endif %}

\t\t\t</ul>
\t\t\t<i class=\"bi bi-list mobile-nav-toggle\"></i>
\t\t</nav>
\t\t<!-- .navbar -->

\t</div>
</header>
<!-- End Header -->
", "partials/__header.html.twig", "C:\\wamp64\\www\\ap\\kal\\depot1\\templates\\partials\\__header.html.twig");
    }
}
