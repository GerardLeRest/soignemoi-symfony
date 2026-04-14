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

/* sejour/index.html.twig */
class __TwigTemplate_c7c78ca417c3f56fe2132b9c22697a02 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sejour/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sejour/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "sejour/index.html.twig", 1);
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

        yield "Saisie d’un séjour";
        
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
    <h1 class=\"text-center mt-4 mb-5\">Renseigner un séjour</h1>

    ";
        // line 9
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start', ["method" => "POST"]);
        yield "

    <div class=\"container mt-5 \">
        <div class=\"row justify-content-center\">
           
            <div class=\"col-lg-8 col-md-10 formulaire jaune\">
                <div class=\"row mb-3\">
                    <div class=\"col-lg-6 col-md-6 mb-3\">
                        ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "dateDebut", [], "any", false, false, false, 17), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date de Début"]);
        yield "
                        ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "dateDebut", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "form-control border-3"]]);
        yield "
                        ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "dateDebut", [], "any", false, false, false, 19), 'errors');
        yield "
                    </div>
                    <div class=\"col-lg-6 col-md-6 mb-3\">
                        ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "dateFin", [], "any", false, false, false, 22), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date de Fin"]);
        yield "
                        ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "dateFin", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control border-3"]]);
        yield "
                        ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "dateFin", [], "any", false, false, false, 24), 'errors');
        yield "
                    </div>
                </div>

                <div class=\"row mb-3\">
                    <div class=\"col-12\">
                        ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "motifSejour", [], "any", false, false, false, 30), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Motif du séjour"]);
        yield "
                        ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "motifSejour", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control border-3"]]);
        yield "
                        ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "motifSejour", [], "any", false, false, false, 32), 'errors');
        yield "
                    </div>
                </div>

                <div class=\"row mb-3\">
                    <div class=\"col-lg-6 col-md-6 mb-3\">
                        ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "specialite", [], "any", false, false, false, 38), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Spécialité"]);
        yield "
                        ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "specialite", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control border-3"]]);
        yield "
                        ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "specialite", [], "any", false, false, false, 40), 'errors');
        yield "
                    </div>
                    <div class=\"col-lg-6 col-md-6 mb-3\">
                        ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "medecinSouhaite", [], "any", false, false, false, 43), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Médecin souhaité"]);
        yield "
                        ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "medecinSouhaite", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control border-3"]]);
        yield "
                        ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "medecinSouhaite", [], "any", false, false, false, 45), 'errors');
        yield "
                    </div>
                </div>

                <div class=\"text-center\">
                    <button type=\"submit\" class=\"btn bouton-perso\">Valider</button>
                    <button type=\"submit\" class=\"btn btn-primary\">Test</button>
                </div>
            </div>

        </div>
    </div>

    ";
        // line 58
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), 'form_end');
        yield "

    <div class=\"text-center mt-5 mb-4\">
  <img src=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/gallery/gallery-1.jpg"), "html", null, true);
        yield "\" class=\"rounded shadow\" alt=\"Illustration séjour\" class=\"img-fluid rounded\" style=\"max-height: 300px;\">
</div>

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
        return "sejour/index.html.twig";
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
        return array (  208 => 61,  202 => 58,  186 => 45,  182 => 44,  178 => 43,  172 => 40,  168 => 39,  164 => 38,  155 => 32,  151 => 31,  147 => 30,  138 => 24,  134 => 23,  130 => 22,  124 => 19,  120 => 18,  116 => 17,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Saisie d’un séjour{% endblock %}

{% block body %}

    <h1 class=\"text-center mt-4 mb-5\">Renseigner un séjour</h1>

    {{ form_start(form, {'method': 'POST'}) }}

    <div class=\"container mt-5 \">
        <div class=\"row justify-content-center\">
           
            <div class=\"col-lg-8 col-md-10 formulaire jaune\">
                <div class=\"row mb-3\">
                    <div class=\"col-lg-6 col-md-6 mb-3\">
                        {{ form_label(form.dateDebut, 'Date de Début', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.dateDebut, {'attr': {'class': 'form-control border-3'}}) }}
                        {{ form_errors(form.dateDebut) }}
                    </div>
                    <div class=\"col-lg-6 col-md-6 mb-3\">
                        {{ form_label(form.dateFin, 'Date de Fin', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.dateFin, {'attr': {'class': 'form-control border-3'}}) }}
                        {{ form_errors(form.dateFin) }}
                    </div>
                </div>

                <div class=\"row mb-3\">
                    <div class=\"col-12\">
                        {{ form_label(form.motifSejour, 'Motif du séjour', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.motifSejour, {'attr': {'class': 'form-control border-3'}}) }}
                        {{ form_errors(form.motifSejour) }}
                    </div>
                </div>

                <div class=\"row mb-3\">
                    <div class=\"col-lg-6 col-md-6 mb-3\">
                        {{ form_label(form.specialite, 'Spécialité', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.specialite, {'attr': {'class': 'form-control border-3'}}) }}
                        {{ form_errors(form.specialite) }}
                    </div>
                    <div class=\"col-lg-6 col-md-6 mb-3\">
                        {{ form_label(form.medecinSouhaite, 'Médecin souhaité', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.medecinSouhaite, {'attr': {'class': 'form-control border-3'}}) }}
                        {{ form_errors(form.medecinSouhaite) }}
                    </div>
                </div>

                <div class=\"text-center\">
                    <button type=\"submit\" class=\"btn bouton-perso\">Valider</button>
                    <button type=\"submit\" class=\"btn btn-primary\">Test</button>
                </div>
            </div>

        </div>
    </div>

    {{ form_end(form) }}

    <div class=\"text-center mt-5 mb-4\">
  <img src=\"{{ asset('assets/img/gallery/gallery-1.jpg') }}\" class=\"rounded shadow\" alt=\"Illustration séjour\" class=\"img-fluid rounded\" style=\"max-height: 300px;\">
</div>

{% endblock %}

", "sejour/index.html.twig", "/home/gerard/Bureau/soignemoi-symfony/soignemoi-local/templates/sejour/index.html.twig");
    }
}
