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

/* userpatient/index.html.twig */
class __TwigTemplate_c7ac1344936afd86febc9be66356af91 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "userpatient/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "userpatient/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "userpatient/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "<h1 class=\"text-center mt-4 mb-4\">S'inscrire</h1>

<div class=\"container\">
    ";
        // line 7
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'form_start', ["method" => "POST"]);
        yield "
    <div class=\"row\">
        <div class=\"col-lg-2 col-md-2\"></div>
        <div class=\"col-lg-8 col-md-8\">
            <div class=\"row mb-3\">
                <div class=\"mb-3 col-lg-6\">
                    ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "patientForm", [], "any", false, false, false, 13), "prenom", [], "any", false, false, false, 13), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Prénom"]);
        yield "
                    ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "patientForm", [], "any", false, false, false, 14), "prenom", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "form-control border-3"]]);
        yield "
                    ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "patientForm", [], "any", false, false, false, 15), "prenom", [], "any", false, false, false, 15), 'errors');
        yield "
                </div>
                <div class=\"mb-3 col-lg-6\">
                    ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "patientForm", [], "any", false, false, false, 18), "nom", [], "any", false, false, false, 18), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nom"]);
        yield "
                    ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "patientForm", [], "any", false, false, false, 19), "nom", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control border-3"]]);
        yield "
                    ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "patientForm", [], "any", false, false, false, 20), "nom", [], "any", false, false, false, 20), 'errors');
        yield "
                </div>
            </div>
           
            <div class=\"mb-3 col-lg-8 mx-auto\">
                ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "patientForm", [], "any", false, false, false, 25), "adressePostale", [], "any", false, false, false, 25), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Adresse Postale"]);
        yield "
                ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "patientForm", [], "any", false, false, false, 26), "adressePostale", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control border-3"]]);
        yield "
                ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "patientForm", [], "any", false, false, false, 27), "adressePostale", [], "any", false, false, false, 27), 'errors');
        yield "
            </div>

            <div class=\"mb-3 col-lg-8 mx-auto\">
                ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "userForm", [], "any", false, false, false, 31), "email", [], "any", false, false, false, 31), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Email"]);
        yield "
                ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "userForm", [], "any", false, false, false, 32), "email", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control border-3"]]);
        yield "
                ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "userForm", [], "any", false, false, false, 33), "email", [], "any", false, false, false, 33), 'errors');
        yield "
            </div>

            <div class=\"mb-3 col-lg-8 mx-auto\">
                ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "userForm", [], "any", false, false, false, 37), "password", [], "any", false, false, false, 37), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Mot de passe"]);
        yield "
                ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "userForm", [], "any", false, false, false, 38), "password", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control border-3"]]);
        yield "
                ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "userForm", [], "any", false, false, false, 39), "password", [], "any", false, false, false, 39), 'errors');
        yield "
            </div>
              

            <div class=\"text-center\">
                <button type=\"submit\" class=\"btn bouton-perso\">Valider</button>
            </div>
        </div>
        <div class=\"col-lg-2 col-md-2\"></div>
    </div>
    ";
        // line 49
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), 'form_end');
        yield "

    ";
        // line 52
        yield "    <div class=\"d-flex justify-content-center mb-5 mt-5\">
        <img src=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/doctors/doctors-2.jpg"), "html", null, true);
        yield "\"
             alt=\"Illustration inscription\"
             class=\"rounded shadow\"
             style=\"height: 300px; object-fit: cover;\">
    </div>
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
        return "userpatient/index.html.twig";
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
        return array (  179 => 53,  176 => 52,  171 => 49,  158 => 39,  154 => 38,  150 => 37,  143 => 33,  139 => 32,  135 => 31,  128 => 27,  124 => 26,  120 => 25,  112 => 20,  108 => 19,  104 => 18,  98 => 15,  94 => 14,  90 => 13,  81 => 7,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<h1 class=\"text-center mt-4 mb-4\">S'inscrire</h1>

<div class=\"container\">
    {{ form_start(form, {'method': 'POST'}) }}
    <div class=\"row\">
        <div class=\"col-lg-2 col-md-2\"></div>
        <div class=\"col-lg-8 col-md-8\">
            <div class=\"row mb-3\">
                <div class=\"mb-3 col-lg-6\">
                    {{ form_label(form.patientForm.prenom, 'Prénom', {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.patientForm.prenom, {'attr': {'class': 'form-control border-3'}}) }}
                    {{ form_errors(form.patientForm.prenom) }}
                </div>
                <div class=\"mb-3 col-lg-6\">
                    {{ form_label(form.patientForm.nom, 'Nom', {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.patientForm.nom, {'attr': {'class': 'form-control border-3'}}) }}
                    {{ form_errors(form.patientForm.nom) }}
                </div>
            </div>
           
            <div class=\"mb-3 col-lg-8 mx-auto\">
                {{ form_label(form.patientForm.adressePostale, 'Adresse Postale', {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(form.patientForm.adressePostale, {'attr': {'class': 'form-control border-3'}}) }}
                {{ form_errors(form.patientForm.adressePostale) }}
            </div>

            <div class=\"mb-3 col-lg-8 mx-auto\">
                {{ form_label(form.userForm.email, 'Email', {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(form.userForm.email, {'attr': {'class': 'form-control border-3'}}) }}
                {{ form_errors(form.userForm.email) }}
            </div>

            <div class=\"mb-3 col-lg-8 mx-auto\">
                {{ form_label(form.userForm.password, 'Mot de passe', {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(form.userForm.password, {'attr': {'class': 'form-control border-3'}}) }}
                {{ form_errors(form.userForm.password) }}
            </div>
              

            <div class=\"text-center\">
                <button type=\"submit\" class=\"btn bouton-perso\">Valider</button>
            </div>
        </div>
        <div class=\"col-lg-2 col-md-2\"></div>
    </div>
    {{ form_end(form) }}

    {# Photo centrée #}
    <div class=\"d-flex justify-content-center mb-5 mt-5\">
        <img src=\"{{ asset('assets/img/doctors/doctors-2.jpg') }}\"
             alt=\"Illustration inscription\"
             class=\"rounded shadow\"
             style=\"height: 300px; object-fit: cover;\">
    </div>
</div>
{% endblock %}
", "userpatient/index.html.twig", "/home/gerard/Bureau/soignemoi-symfony/soignemoi-local/templates/userpatient/index.html.twig");
    }
}
