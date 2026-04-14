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

/* departements/index.html.twig */
class __TwigTemplate_f5c4f93c867b3bb5c5626b34dd9e651a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "departements/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "departements/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "departements/index.html.twig", 1);
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

        yield "Nos Départements";
        
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
<section id=\"departments\" class=\"departments section\">

  <!-- Titre de section -->
  <div class=\"container section-title\" data-aos=\"fade-up\">
    <h2>Départements</h2>
    <p>Chaque spécialité offre une prise en charge experte adaptée aux besoins des patients.</p>
  </div>

  <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">
    <div class=\"row\">
      <div class=\"col-lg-3\">
        <ul class=\"nav nav-tabs flex-column\">
          <li class=\"nav-item\">
            <a class=\"nav-link active show\" data-bs-toggle=\"tab\" href=\"#departments-tab-1\">Cardiologie</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#departments-tab-2\">Neurologie</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#departments-tab-3\">Hépatologie</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#departments-tab-4\">Pédiatrie</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#departments-tab-5\">Ophtalmologie</a>
          </li>
        </ul>
      </div>

      <div class=\"col-lg-9 mt-4 mt-lg-0\">
        <div class=\"tab-content\">

          <div class=\"tab-pane active show\" id=\"departments-tab-1\">
            <div class=\"row\">
              <div class=\"col-lg-8 details order-2 order-lg-1\">
                <h3>Cardiologie</h3>
                <p class=\"fst-italic\">Suivi des maladies cardiovasculaires, prévention et soins spécialisés pour le cœur.</p>
                <p>Notre service de cardiologie prend en charge toutes les pathologies cardiaques, du dépistage à la chirurgie, en passant par le suivi des patients atteints de troubles chroniques. Une équipe experte assure un accompagnement personnalisé.</p>
              </div>
              <div class=\"col-lg-4 text-center order-1 order-lg-2\">
                <img src=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/departments-1.jpg"), "html", null, true);
        yield "\" alt=\"Cardiologie\" class=\"img-fluid\">
              </div>
            </div>
          </div>

          <div class=\"tab-pane\" id=\"departments-tab-2\">
            <div class=\"row\">
              <div class=\"col-lg-8 details order-2 order-lg-1\">
                <h3>Neurologie</h3>
                <p class=\"fst-italic\">Diagnostics et traitements des maladies du système nerveux.</p>
                <p>Notre équipe de neurologues intervient dans le cadre de maladies comme l’épilepsie, la sclérose en plaques ou encore les troubles du sommeil. Un plateau technique complet permet des examens de haute précision.</p>
              </div>
              <div class=\"col-lg-4 text-center order-1 order-lg-2\">
                <img src=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/departments-2.jpg"), "html", null, true);
        yield "\" alt=\"Neurologie\" class=\"img-fluid\">
              </div>
            </div>
          </div>

          <div class=\"tab-pane\" id=\"departments-tab-3\">
            <div class=\"row\">
              <div class=\"col-lg-8 details order-2 order-lg-1\">
                <h3>Hépatologie</h3>
                <p class=\"fst-italic\">Prise en charge des maladies du foie, du pancréas et des voies biliaires.</p>
                <p>Le service d’hépatologie suit les patients atteints d’hépatites, de cirrhoses ou de cancers hépatiques. Des traitements innovants et une approche multidisciplinaire garantissent une qualité de soins optimale.</p>
              </div>
              <div class=\"col-lg-4 text-center order-1 order-lg-2\">
                <img src=\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/departments-3.jpg"), "html", null, true);
        yield "\" alt=\"Hépatologie\" class=\"img-fluid\">
              </div>
            </div>
          </div>

          <div class=\"tab-pane\" id=\"departments-tab-4\">
            <div class=\"row\">
              <div class=\"col-lg-8 details order-2 order-lg-1\">
                <h3>Pédiatrie</h3>
                <p class=\"fst-italic\">Médecine de l’enfant, du nourrisson à l’adolescent.</p>
                <p>Notre équipe pédiatrique veille au bon développement et à la santé des plus jeunes. Vaccination, suivi de croissance, pathologies infantiles : tout est mis en œuvre pour accompagner les familles en toute confiance.</p>
              </div>
              <div class=\"col-lg-4 text-center order-1 order-lg-2\">
                <img src=\"";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/departments-4.jpg"), "html", null, true);
        yield "\" alt=\"Pédiatrie\" class=\"img-fluid\">
              </div>
            </div>
          </div>

          <div class=\"tab-pane\" id=\"departments-tab-5\">
            <div class=\"row\">
              <div class=\"col-lg-8 details order-2 order-lg-1\">
                <h3>Ophtalmologie</h3>
                <p class=\"fst-italic\">Soins de la vue, interventions et suivi des troubles oculaires.</p>
                <p>Le service d’ophtalmologie propose des consultations pour la correction visuelle, la chirurgie de la cataracte ou du glaucome, ainsi que le dépistage de pathologies rétiniennes. Un matériel de dernière génération garantit un suivi efficace.</p>
              </div>
              <div class=\"col-lg-4 text-center order-1 order-lg-2\">
                <img src=\"";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/departments-5.jpg"), "html", null, true);
        yield "\" alt=\"Ophtalmologie\" class=\"img-fluid\">
              </div>
            </div>
          </div>

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
        return "departements/index.html.twig";
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
        return array (  208 => 100,  192 => 87,  176 => 74,  160 => 61,  144 => 48,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nos Départements{% endblock %}

{% block body %}

<section id=\"departments\" class=\"departments section\">

  <!-- Titre de section -->
  <div class=\"container section-title\" data-aos=\"fade-up\">
    <h2>Départements</h2>
    <p>Chaque spécialité offre une prise en charge experte adaptée aux besoins des patients.</p>
  </div>

  <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">
    <div class=\"row\">
      <div class=\"col-lg-3\">
        <ul class=\"nav nav-tabs flex-column\">
          <li class=\"nav-item\">
            <a class=\"nav-link active show\" data-bs-toggle=\"tab\" href=\"#departments-tab-1\">Cardiologie</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#departments-tab-2\">Neurologie</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#departments-tab-3\">Hépatologie</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#departments-tab-4\">Pédiatrie</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#departments-tab-5\">Ophtalmologie</a>
          </li>
        </ul>
      </div>

      <div class=\"col-lg-9 mt-4 mt-lg-0\">
        <div class=\"tab-content\">

          <div class=\"tab-pane active show\" id=\"departments-tab-1\">
            <div class=\"row\">
              <div class=\"col-lg-8 details order-2 order-lg-1\">
                <h3>Cardiologie</h3>
                <p class=\"fst-italic\">Suivi des maladies cardiovasculaires, prévention et soins spécialisés pour le cœur.</p>
                <p>Notre service de cardiologie prend en charge toutes les pathologies cardiaques, du dépistage à la chirurgie, en passant par le suivi des patients atteints de troubles chroniques. Une équipe experte assure un accompagnement personnalisé.</p>
              </div>
              <div class=\"col-lg-4 text-center order-1 order-lg-2\">
                <img src=\"{{ asset('assets/img/departments-1.jpg') }}\" alt=\"Cardiologie\" class=\"img-fluid\">
              </div>
            </div>
          </div>

          <div class=\"tab-pane\" id=\"departments-tab-2\">
            <div class=\"row\">
              <div class=\"col-lg-8 details order-2 order-lg-1\">
                <h3>Neurologie</h3>
                <p class=\"fst-italic\">Diagnostics et traitements des maladies du système nerveux.</p>
                <p>Notre équipe de neurologues intervient dans le cadre de maladies comme l’épilepsie, la sclérose en plaques ou encore les troubles du sommeil. Un plateau technique complet permet des examens de haute précision.</p>
              </div>
              <div class=\"col-lg-4 text-center order-1 order-lg-2\">
                <img src=\"{{ asset('assets/img/departments-2.jpg') }}\" alt=\"Neurologie\" class=\"img-fluid\">
              </div>
            </div>
          </div>

          <div class=\"tab-pane\" id=\"departments-tab-3\">
            <div class=\"row\">
              <div class=\"col-lg-8 details order-2 order-lg-1\">
                <h3>Hépatologie</h3>
                <p class=\"fst-italic\">Prise en charge des maladies du foie, du pancréas et des voies biliaires.</p>
                <p>Le service d’hépatologie suit les patients atteints d’hépatites, de cirrhoses ou de cancers hépatiques. Des traitements innovants et une approche multidisciplinaire garantissent une qualité de soins optimale.</p>
              </div>
              <div class=\"col-lg-4 text-center order-1 order-lg-2\">
                <img src=\"{{ asset('assets/img/departments-3.jpg') }}\" alt=\"Hépatologie\" class=\"img-fluid\">
              </div>
            </div>
          </div>

          <div class=\"tab-pane\" id=\"departments-tab-4\">
            <div class=\"row\">
              <div class=\"col-lg-8 details order-2 order-lg-1\">
                <h3>Pédiatrie</h3>
                <p class=\"fst-italic\">Médecine de l’enfant, du nourrisson à l’adolescent.</p>
                <p>Notre équipe pédiatrique veille au bon développement et à la santé des plus jeunes. Vaccination, suivi de croissance, pathologies infantiles : tout est mis en œuvre pour accompagner les familles en toute confiance.</p>
              </div>
              <div class=\"col-lg-4 text-center order-1 order-lg-2\">
                <img src=\"{{ asset('assets/img/departments-4.jpg') }}\" alt=\"Pédiatrie\" class=\"img-fluid\">
              </div>
            </div>
          </div>

          <div class=\"tab-pane\" id=\"departments-tab-5\">
            <div class=\"row\">
              <div class=\"col-lg-8 details order-2 order-lg-1\">
                <h3>Ophtalmologie</h3>
                <p class=\"fst-italic\">Soins de la vue, interventions et suivi des troubles oculaires.</p>
                <p>Le service d’ophtalmologie propose des consultations pour la correction visuelle, la chirurgie de la cataracte ou du glaucome, ainsi que le dépistage de pathologies rétiniennes. Un matériel de dernière génération garantit un suivi efficace.</p>
              </div>
              <div class=\"col-lg-4 text-center order-1 order-lg-2\">
                <img src=\"{{ asset('assets/img/departments-5.jpg') }}\" alt=\"Ophtalmologie\" class=\"img-fluid\">
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
{% endblock %}

", "departements/index.html.twig", "/home/gerard/Bureau/soignemoi-symfony/soignemoi-local/templates/departements/index.html.twig");
    }
}
