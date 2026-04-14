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

/* services/index.html.twig */
class __TwigTemplate_94088e3c14e44068c0f9431e1e36be3a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "services/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "services/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "services/index.html.twig", 1);
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

        yield "Nos services";
        
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
        yield "<section id=\"services\" class=\"services section\">

  <!-- Section Title -->
  <div class=\"container section-title\" data-aos=\"fade-up\">
    <h2>Nos services</h2>
    <p>Découvrez les services numériques proposés pour faciliter vos démarches médicales et améliorer votre confort.</p>
  </div>

  <div class=\"container\">
    <div class=\"row gy-4\">

      <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"100\">
        <div class=\"service-item position-relative\">
          <div class=\"icon\"><i class=\"fas fa-calendar-check\"></i></div>
          <a href=\"#\" class=\"stretched-link\"><h3>Rendez-vous en ligne</h3></a>
          <p>Réservez vos consultations en ligne 24h/24, sans passer par l'accueil téléphonique.</p>
        </div>
      </div>

      <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"200\">
        <div class=\"service-item position-relative\">
          <div class=\"icon\"><i class=\"fas fa-video\"></i></div>
          <a href=\"#\" class=\"stretched-link\"><h3>Consultation à distance</h3></a>
          <p>Consultez un professionnel de santé depuis chez vous, en toute sécurité.</p>
        </div>
      </div>

      <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"300\">
        <div class=\"service-item position-relative\">
          <div class=\"icon\"><i class=\"fas fa-folder-open\"></i></div>
          <a href=\"#\" class=\"stretched-link\"><h3>Dossier médical en ligne</h3></a>
          <p>Accédez à vos résultats et à votre historique médical via un espace sécurisé.</p>
        </div>
      </div>

      <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"400\">
        <div class=\"service-item position-relative\">
          <div class=\"icon\"><i class=\"fas fa-user-cog\"></i></div>
          <a href=\"#\" class=\"stretched-link\"><h3>Support administratif</h3></a>
          <p>Un service dédié pour vous accompagner dans les démarches médicales et sociales.</p>
        </div>
      </div>

      <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"500\">
        <div class=\"service-item position-relative\">
          <div class=\"icon\"><i class=\"fas fa-bell\"></i></div>
          <a href=\"#\" class=\"stretched-link\"><h3>Alertes et rappels</h3></a>
          <p>Recevez des notifications par SMS ou email pour ne rien oublier.</p>
        </div>
      </div>

      <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"600\">
        <div class=\"service-item position-relative\">
          <div class=\"icon\"><i class=\"fas fa-language\"></i></div>
          <a href=\"#\" class=\"stretched-link\"><h3>Assistance multilingue</h3></a>
          <p>Un accompagnement disponible dans plusieurs langues pour mieux vous servir.</p>
        </div>
      </div>

    </div>
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
        return "services/index.html.twig";
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
        return array (  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nos services{% endblock %}

{% block body %}
<section id=\"services\" class=\"services section\">

  <!-- Section Title -->
  <div class=\"container section-title\" data-aos=\"fade-up\">
    <h2>Nos services</h2>
    <p>Découvrez les services numériques proposés pour faciliter vos démarches médicales et améliorer votre confort.</p>
  </div>

  <div class=\"container\">
    <div class=\"row gy-4\">

      <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"100\">
        <div class=\"service-item position-relative\">
          <div class=\"icon\"><i class=\"fas fa-calendar-check\"></i></div>
          <a href=\"#\" class=\"stretched-link\"><h3>Rendez-vous en ligne</h3></a>
          <p>Réservez vos consultations en ligne 24h/24, sans passer par l'accueil téléphonique.</p>
        </div>
      </div>

      <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"200\">
        <div class=\"service-item position-relative\">
          <div class=\"icon\"><i class=\"fas fa-video\"></i></div>
          <a href=\"#\" class=\"stretched-link\"><h3>Consultation à distance</h3></a>
          <p>Consultez un professionnel de santé depuis chez vous, en toute sécurité.</p>
        </div>
      </div>

      <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"300\">
        <div class=\"service-item position-relative\">
          <div class=\"icon\"><i class=\"fas fa-folder-open\"></i></div>
          <a href=\"#\" class=\"stretched-link\"><h3>Dossier médical en ligne</h3></a>
          <p>Accédez à vos résultats et à votre historique médical via un espace sécurisé.</p>
        </div>
      </div>

      <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"400\">
        <div class=\"service-item position-relative\">
          <div class=\"icon\"><i class=\"fas fa-user-cog\"></i></div>
          <a href=\"#\" class=\"stretched-link\"><h3>Support administratif</h3></a>
          <p>Un service dédié pour vous accompagner dans les démarches médicales et sociales.</p>
        </div>
      </div>

      <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"500\">
        <div class=\"service-item position-relative\">
          <div class=\"icon\"><i class=\"fas fa-bell\"></i></div>
          <a href=\"#\" class=\"stretched-link\"><h3>Alertes et rappels</h3></a>
          <p>Recevez des notifications par SMS ou email pour ne rien oublier.</p>
        </div>
      </div>

      <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"600\">
        <div class=\"service-item position-relative\">
          <div class=\"icon\"><i class=\"fas fa-language\"></i></div>
          <a href=\"#\" class=\"stretched-link\"><h3>Assistance multilingue</h3></a>
          <p>Un accompagnement disponible dans plusieurs langues pour mieux vous servir.</p>
        </div>
      </div>

    </div>
  </div>
</section>
{% endblock %}

", "services/index.html.twig", "/home/gerard/Bureau/soignemoi-symfony/soignemoi-local/templates/services/index.html.twig");
    }
}
