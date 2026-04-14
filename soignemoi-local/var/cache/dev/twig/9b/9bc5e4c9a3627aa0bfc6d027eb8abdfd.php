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

/* header.html.twig */
class __TwigTemplate_4d1164fd6460cfdf59d7b21c2d7dbad5 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        // line 2
        yield "<header id=\"header\" class=\"header sticky-top\">

  <div class=\"topbar d-flex align-items-center\">
    <div class=\"container d-flex justify-content-center justify-content-md-between\">
      <div class=\"contact-info d-flex align-items-center\">
        <i class=\"bi bi-envelope d-flex align-items-center\">
          <a href=\"mailto:soignemoi@free.com\">soignemoi@free.fr</a>
        </i>
        <i class=\"bi bi-phone d-flex align-items-center ms-4\">
          <span>02 78 45 63 21</span>
        </i>
      </div>
      <div class=\"social-links d-none d-md-flex align-items-center\">
        <a href=\"#\" class=\"twitter\"><i class=\"bi bi-twitter-x\"></i></a>
        <a href=\"#\" class=\"facebook\"><i class=\"bi bi-facebook\"></i></a>
        <a href=\"#\" class=\"instagram\"><i class=\"bi bi-instagram\"></i></a>
        <a href=\"#\" class=\"linkedin\"><i class=\"bi bi-linkedin\"></i></a>
      </div>
    </div>
  </div><!-- End Top Bar -->

  <div class=\"branding d-flex align-items-center\">
    <div class=\"container position-relative d-flex align-items-center justify-content-between\">
      <a href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"logo d-flex align-items-center me-auto\">
        <!-- <img src=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        yield "\" alt=\"\"> -->
        <h1 class=\"sitename\">SoigneMoi</h1>
      </a>

      <nav id=\"navmenu\" class=\"navmenu\">
        <ul>
          <li><a href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a></li>
          <li><a href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services");
        yield "\">Services</a></li>
          <li><a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_departements");
        yield "\">Départements</a></li>
          <li><a href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formulaire_sejour");
        yield "\">Séjour</a></li>
          <li><a href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_liste_sejours");
        yield "\">Liste des Séjours</a></li>
          <li><a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user");
        yield "\">Inscription</a></li>
        </ul>
        <i class=\"mobile-nav-toggle d-xl-none bi bi-list\"></i>
      </nav>
      <a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"cta-btn d-none d-sm-block ms-3\" style=\"background-color: #007bff; color: white;\">
     Connexion </a>
    </div>
  </div>
</header>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "header.html.twig";
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
        return array (  113 => 41,  106 => 37,  102 => 36,  98 => 35,  94 => 34,  90 => 33,  86 => 32,  77 => 26,  73 => 25,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/header.html.twig #}
<header id=\"header\" class=\"header sticky-top\">

  <div class=\"topbar d-flex align-items-center\">
    <div class=\"container d-flex justify-content-center justify-content-md-between\">
      <div class=\"contact-info d-flex align-items-center\">
        <i class=\"bi bi-envelope d-flex align-items-center\">
          <a href=\"mailto:soignemoi@free.com\">soignemoi@free.fr</a>
        </i>
        <i class=\"bi bi-phone d-flex align-items-center ms-4\">
          <span>02 78 45 63 21</span>
        </i>
      </div>
      <div class=\"social-links d-none d-md-flex align-items-center\">
        <a href=\"#\" class=\"twitter\"><i class=\"bi bi-twitter-x\"></i></a>
        <a href=\"#\" class=\"facebook\"><i class=\"bi bi-facebook\"></i></a>
        <a href=\"#\" class=\"instagram\"><i class=\"bi bi-instagram\"></i></a>
        <a href=\"#\" class=\"linkedin\"><i class=\"bi bi-linkedin\"></i></a>
      </div>
    </div>
  </div><!-- End Top Bar -->

  <div class=\"branding d-flex align-items-center\">
    <div class=\"container position-relative d-flex align-items-center justify-content-between\">
      <a href=\"{{ path('app_home') }}\" class=\"logo d-flex align-items-center me-auto\">
        <!-- <img src=\"{{ asset('assets/img/logo.png') }}\" alt=\"\"> -->
        <h1 class=\"sitename\">SoigneMoi</h1>
      </a>

      <nav id=\"navmenu\" class=\"navmenu\">
        <ul>
          <li><a href=\"{{ path('app_home') }}\">Accueil</a></li>
          <li><a href=\"{{ path('app_services') }}\">Services</a></li>
          <li><a href=\"{{ path('app_departements') }}\">Départements</a></li>
          <li><a href=\"{{ path('app_formulaire_sejour') }}\">Séjour</a></li>
          <li><a href=\"{{ path('app_liste_sejours') }}\">Liste des Séjours</a></li>
          <li><a href=\"{{ path('app_user') }}\">Inscription</a></li>
        </ul>
        <i class=\"mobile-nav-toggle d-xl-none bi bi-list\"></i>
      </nav>
      <a href=\"{{ path('app_login') }}\" class=\"cta-btn d-none d-sm-block ms-3\" style=\"background-color: #007bff; color: white;\">
     Connexion </a>
    </div>
  </div>
</header>

", "header.html.twig", "/home/gerard/Bureau/soignemoi-symfony/soignemoi-local/templates/header.html.twig");
    }
}
