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

/* accueil/index.html.twig */
class __TwigTemplate_ca25b58a105e31a1d27757a2476a5ef6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "accueil/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello AccueilController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "<!-- ======= About Section ======= -->
    <section id=\"about\">
      <div class=\"container\" data-aos=\"fade-up\">
        <div class=\"row\">
          <div class=\"col-lg-6 about-img\">
            <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/img/Logo.png"), "html", null, true);
        echo "\" style=\"margin-left:50px;\" />
            
          </div>

          <div class=\"col-lg-6 content\">
            <h2>Bienvenue sur notre site KAL</h2>
            <h3>Ici, vous trouverez tout ce qu'il vous faut pour bien s'occuper de vos animaux de compagnies.</h3>

            <ul>
              <li><i class=\"bi bi-check-circle\"></i> Des produits de qualité supérieur.</li>
              <li><i class=\"bi bi-check-circle\"></i> Des conseils adapté à votre animal.</li>
              <li><i class=\"bi bi-check-circle\"></i> Une équipe qualifié et disponible pour vous 24H/24H car la santé de vos animaux ne peut pas attendre.</li>
            </ul>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

<!-- ======= Services Section ======= -->
    <section id=\"services\">
      <div class=\"container\" data-aos=\"fade-up\">
        <div class=\"section-header\">
          <h2>Services</h2>
          <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
        </div>

        <div class=\"row gy-4\">

          <div class=\"col-lg-6\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"box\">
              <div class=\"icon\"><i class=\"bi bi-briefcase\"></i></div>
              <h4 class=\"title\"><a href=\"\">Lorem Ipsum</a></h4>
              <p class=\"description\">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident etiro rabeta lingo.</p>
            </div>
          </div>

          <div class=\"col-lg-6\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"box\">
              <div class=\"icon\"><i class=\"bi bi-card-checklist\"></i></div>
              <h4 class=\"title\"><a href=\"\">Dolor Sitema</a></h4>
              <p class=\"description\">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata nodera clas.</p>
            </div>
          </div>

          <div class=\"col-lg-6\" data-aos=\"fade-up\" data-aos-delay=\"300\">
            <div class=\"box\">
              <div class=\"icon\"><i class=\"bi bi-bar-chart\"></i></div>
              <h4 class=\"title\"><a href=\"\">Sed ut perspiciatis</a></h4>
              <p class=\"description\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur trinige zareta lobur trade.</p>
            </div>
          </div>

          <div class=\"col-lg-6\" data-aos=\"fade-up\" data-aos-delay=\"400\">
            <div class=\"box\">
              <div class=\"icon\"><i class=\"bi bi-binoculars\"></i></div>
              <h4 class=\"title\"><a href=\"\">Magni Dolores</a></h4>
              <p class=\"description\">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum rideta zanox satirente madera</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id=\"testimonials\">
      <div class=\"container\" data-aos=\"fade-up\">
        <div class=\"section-header\">
          <h2>Testimonials</h2>
          <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
        </div>

        <div class=\"testimonials-slider swiper\" data-aos=\"fade-up\" data-aos-delay=\"100\">
          <div class=\"swiper-wrapper\">

            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <p>
                  <img src=\"assets/img/quote-sign-left.png\" class=\"quote-sign-left\" alt=\"\">
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <img src=\"assets/img/quote-sign-right.png\" class=\"quote-sign-right\" alt=\"\">
                </p>
                <img src=\"assets/img/testimonial-1.jpg\" class=\"testimonial-img\" alt=\"\">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <p>
                  <img src=\"assets/img/quote-sign-left.png\" class=\"quote-sign-left\" alt=\"\">
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <img src=\"assets/img/quote-sign-right.png\" class=\"quote-sign-right\" alt=\"\">
                </p>
                <img src=\"assets/img/testimonial-2.jpg\" class=\"testimonial-img\" alt=\"\">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <p>
                  <img src=\"assets/img/quote-sign-left.png\" class=\"quote-sign-left\" alt=\"\">
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <img src=\"assets/img/quote-sign-right.png\" class=\"quote-sign-right\" alt=\"\">
                </p>
                <img src=\"assets/img/testimonial-3.jpg\" class=\"testimonial-img\" alt=\"\">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <p>
                  <img src=\"assets/img/quote-sign-left.png\" class=\"quote-sign-left\" alt=\"\">
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <img src=\"assets/img/quote-sign-right.png\" class=\"quote-sign-right\" alt=\"\">
                </p>
                <img src=\"assets/img/testimonial-4.jpg\" class=\"testimonial-img\" alt=\"\">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <p>
                  <img src=\"assets/img/quote-sign-left.png\" class=\"quote-sign-left\" alt=\"\">
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <img src=\"assets/img/quote-sign-right.png\" class=\"quote-sign-right\" alt=\"\">
                </p>
                <img src=\"assets/img/testimonial-5.jpg\" class=\"testimonial-img\" alt=\"\">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class=\"swiper-pagination\"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "accueil/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello AccueilController!{% endblock %}

{% block main %}
<!-- ======= About Section ======= -->
    <section id=\"about\">
      <div class=\"container\" data-aos=\"fade-up\">
        <div class=\"row\">
          <div class=\"col-lg-6 about-img\">
            <img src=\"{{asset('asset/img/Logo.png')}}\" style=\"margin-left:50px;\" />
            
          </div>

          <div class=\"col-lg-6 content\">
            <h2>Bienvenue sur notre site KAL</h2>
            <h3>Ici, vous trouverez tout ce qu'il vous faut pour bien s'occuper de vos animaux de compagnies.</h3>

            <ul>
              <li><i class=\"bi bi-check-circle\"></i> Des produits de qualité supérieur.</li>
              <li><i class=\"bi bi-check-circle\"></i> Des conseils adapté à votre animal.</li>
              <li><i class=\"bi bi-check-circle\"></i> Une équipe qualifié et disponible pour vous 24H/24H car la santé de vos animaux ne peut pas attendre.</li>
            </ul>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

<!-- ======= Services Section ======= -->
    <section id=\"services\">
      <div class=\"container\" data-aos=\"fade-up\">
        <div class=\"section-header\">
          <h2>Services</h2>
          <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
        </div>

        <div class=\"row gy-4\">

          <div class=\"col-lg-6\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"box\">
              <div class=\"icon\"><i class=\"bi bi-briefcase\"></i></div>
              <h4 class=\"title\"><a href=\"\">Lorem Ipsum</a></h4>
              <p class=\"description\">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident etiro rabeta lingo.</p>
            </div>
          </div>

          <div class=\"col-lg-6\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"box\">
              <div class=\"icon\"><i class=\"bi bi-card-checklist\"></i></div>
              <h4 class=\"title\"><a href=\"\">Dolor Sitema</a></h4>
              <p class=\"description\">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata nodera clas.</p>
            </div>
          </div>

          <div class=\"col-lg-6\" data-aos=\"fade-up\" data-aos-delay=\"300\">
            <div class=\"box\">
              <div class=\"icon\"><i class=\"bi bi-bar-chart\"></i></div>
              <h4 class=\"title\"><a href=\"\">Sed ut perspiciatis</a></h4>
              <p class=\"description\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur trinige zareta lobur trade.</p>
            </div>
          </div>

          <div class=\"col-lg-6\" data-aos=\"fade-up\" data-aos-delay=\"400\">
            <div class=\"box\">
              <div class=\"icon\"><i class=\"bi bi-binoculars\"></i></div>
              <h4 class=\"title\"><a href=\"\">Magni Dolores</a></h4>
              <p class=\"description\">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum rideta zanox satirente madera</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id=\"testimonials\">
      <div class=\"container\" data-aos=\"fade-up\">
        <div class=\"section-header\">
          <h2>Testimonials</h2>
          <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
        </div>

        <div class=\"testimonials-slider swiper\" data-aos=\"fade-up\" data-aos-delay=\"100\">
          <div class=\"swiper-wrapper\">

            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <p>
                  <img src=\"assets/img/quote-sign-left.png\" class=\"quote-sign-left\" alt=\"\">
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <img src=\"assets/img/quote-sign-right.png\" class=\"quote-sign-right\" alt=\"\">
                </p>
                <img src=\"assets/img/testimonial-1.jpg\" class=\"testimonial-img\" alt=\"\">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <p>
                  <img src=\"assets/img/quote-sign-left.png\" class=\"quote-sign-left\" alt=\"\">
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <img src=\"assets/img/quote-sign-right.png\" class=\"quote-sign-right\" alt=\"\">
                </p>
                <img src=\"assets/img/testimonial-2.jpg\" class=\"testimonial-img\" alt=\"\">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <p>
                  <img src=\"assets/img/quote-sign-left.png\" class=\"quote-sign-left\" alt=\"\">
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <img src=\"assets/img/quote-sign-right.png\" class=\"quote-sign-right\" alt=\"\">
                </p>
                <img src=\"assets/img/testimonial-3.jpg\" class=\"testimonial-img\" alt=\"\">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <p>
                  <img src=\"assets/img/quote-sign-left.png\" class=\"quote-sign-left\" alt=\"\">
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <img src=\"assets/img/quote-sign-right.png\" class=\"quote-sign-right\" alt=\"\">
                </p>
                <img src=\"assets/img/testimonial-4.jpg\" class=\"testimonial-img\" alt=\"\">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <p>
                  <img src=\"assets/img/quote-sign-left.png\" class=\"quote-sign-left\" alt=\"\">
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <img src=\"assets/img/quote-sign-right.png\" class=\"quote-sign-right\" alt=\"\">
                </p>
                <img src=\"assets/img/testimonial-5.jpg\" class=\"testimonial-img\" alt=\"\">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class=\"swiper-pagination\"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

{% endblock %}
", "accueil/index.html.twig", "C:\\wamp64\\www\\ProjetKAL\\depot1\\templates\\accueil\\index.html.twig");
    }
}
