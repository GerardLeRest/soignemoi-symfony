<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* home/index.html.twig */
class __TwigTemplate_aae20bddaba9bf330f1b02bb490c4e64 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Bienvenue à Soignemoi";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "
<section id=\"hero\" class=\"hero section light-background\">

  <img src=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/hero-bg.jpg"), "html", null, true);
        yield "\" alt=\"Photo d'accueil\" data-aos=\"fade-in\">

  <div class=\"container position-relative\">

    <div class=\"welcome position-relative text-center\" data-aos=\"fade-down\" data-aos-delay=\"100\">
      <h2>Bienvenue à SoigneMoi</h2>
      <p>Un hôpital moderne au service de votre santé, votre bien-être et votre tranquillité d’esprit.</p>
    </div>

    <div class=\"content row gy-4 mt-5\">

      <div class=\"col-lg-4 d-flex align-items-stretch\">
        <div class=\"why-box p-4 shadow\" data-aos=\"zoom-out\" data-aos-delay=\"200\">
          <h3>Pourquoi choisir SoigneMoi ?</h3>
          <p>
            Établissement reconnu, SoigneMoi associe technologies de pointe, expertise médicale et accueil humain. 
            Nos équipes sont disponibles 24h/24 pour répondre à vos besoins.
          </p>
          <div class=\"text-center mt-3\">
            <a href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user");
        yield "\" class=\"more-btn\">
            <span>S'inscrire</span>
            <i class=\"bi bi-chevron-right\"></i>
</a>
          </div>
        </div>
      </div>

      <div class=\"col-lg-8 d-flex align-items-stretch\">
        <div class=\"d-flex flex-column justify-content-center\">
          <div class=\"row gy-4\">

            <div class=\"col-xl-4 d-flex align-items-stretch\">
              <div class=\"icon-box p-3 shadow\" data-aos=\"zoom-out\" data-aos-delay=\"300\">
                <i class=\"bi bi-heart-pulse\"></i>
                <h4>Soins personnalisés</h4>
                <p>Un parcours de soins adapté à chaque patient, avec un suivi sur mesure assuré par nos médecins.</p>
              </div>
            </div>

            <div class=\"col-xl-4 d-flex align-items-stretch\">
              <div class=\"icon-box p-3 shadow\" data-aos=\"zoom-out\" data-aos-delay=\"400\">
                <i class=\"bi bi-hospital\"></i>
                <h4>Technologies avancées</h4>
                <p>Imagerie, chirurgie mini-invasive, télémédecine : SoigneMoi est à la pointe de l’innovation.</p>
              </div>
            </div>

            <div class=\"col-xl-4 d-flex align-items-stretch\">
              <div class=\"icon-box p-3 shadow\" data-aos=\"zoom-out\" data-aos-delay=\"500\">
                <i class=\"bi bi-people\"></i>
                <h4>Équipe bienveillante</h4>
                <p>Du personnel attentif, des infirmières disponibles, et des services pensés pour faciliter votre séjour.</p>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div><!-- End content -->

  </div>
</section>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/index.html.twig";
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
    public function getDebugInfo(): array
    {
        return array (  127 => 28,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Bienvenue à Soignemoi{% endblock %}

{% block body %}

<section id=\"hero\" class=\"hero section light-background\">

  <img src=\"{{ asset('assets/img/hero-bg.jpg') }}\" alt=\"Photo d'accueil\" data-aos=\"fade-in\">

  <div class=\"container position-relative\">

    <div class=\"welcome position-relative text-center\" data-aos=\"fade-down\" data-aos-delay=\"100\">
      <h2>Bienvenue à SoigneMoi</h2>
      <p>Un hôpital moderne au service de votre santé, votre bien-être et votre tranquillité d’esprit.</p>
    </div>

    <div class=\"content row gy-4 mt-5\">

      <div class=\"col-lg-4 d-flex align-items-stretch\">
        <div class=\"why-box p-4 shadow\" data-aos=\"zoom-out\" data-aos-delay=\"200\">
          <h3>Pourquoi choisir SoigneMoi ?</h3>
          <p>
            Établissement reconnu, SoigneMoi associe technologies de pointe, expertise médicale et accueil humain. 
            Nos équipes sont disponibles 24h/24 pour répondre à vos besoins.
          </p>
          <div class=\"text-center mt-3\">
            <a href=\"{{ path('app_user') }}\" class=\"more-btn\">
            <span>S'inscrire</span>
            <i class=\"bi bi-chevron-right\"></i>
</a>
          </div>
        </div>
      </div>

      <div class=\"col-lg-8 d-flex align-items-stretch\">
        <div class=\"d-flex flex-column justify-content-center\">
          <div class=\"row gy-4\">

            <div class=\"col-xl-4 d-flex align-items-stretch\">
              <div class=\"icon-box p-3 shadow\" data-aos=\"zoom-out\" data-aos-delay=\"300\">
                <i class=\"bi bi-heart-pulse\"></i>
                <h4>Soins personnalisés</h4>
                <p>Un parcours de soins adapté à chaque patient, avec un suivi sur mesure assuré par nos médecins.</p>
              </div>
            </div>

            <div class=\"col-xl-4 d-flex align-items-stretch\">
              <div class=\"icon-box p-3 shadow\" data-aos=\"zoom-out\" data-aos-delay=\"400\">
                <i class=\"bi bi-hospital\"></i>
                <h4>Technologies avancées</h4>
                <p>Imagerie, chirurgie mini-invasive, télémédecine : SoigneMoi est à la pointe de l’innovation.</p>
              </div>
            </div>

            <div class=\"col-xl-4 d-flex align-items-stretch\">
              <div class=\"icon-box p-3 shadow\" data-aos=\"zoom-out\" data-aos-delay=\"500\">
                <i class=\"bi bi-people\"></i>
                <h4>Équipe bienveillante</h4>
                <p>Du personnel attentif, des infirmières disponibles, et des services pensés pour faciliter votre séjour.</p>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div><!-- End content -->

  </div>
</section>

{% endblock %}

", "home/index.html.twig", "/home/gerard/Bureau/soignemoi-symfony/soignemoi-local/templates/home/index.html.twig");
    }
}
