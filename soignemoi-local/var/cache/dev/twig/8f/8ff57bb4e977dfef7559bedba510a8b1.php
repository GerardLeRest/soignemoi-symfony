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

/* footer.html.twig */
class __TwigTemplate_e74a30afd33285ca19f57f57cefbe2d7 extends Template
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
            'footer_top' => [$this, 'block_footer_top'],
            'footer_links' => [$this, 'block_footer_links'],
            'footer_bottom' => [$this, 'block_footer_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 1
        yield "<footer id=\"footer\" class=\"footer light-background\">

  ";
        // line 3
        yield from $this->unwrap()->yieldBlock('footer_top', $context, $blocks);
        // line 74
        yield "
  ";
        // line 75
        yield from $this->unwrap()->yieldBlock('footer_bottom', $context, $blocks);
        // line 83
        yield "
</footer>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer_top(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer_top"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer_top"));

        // line 4
        yield "    <div class=\"container footer-top\">
      <div class=\"row gy-4\">
        
        <div class=\"col-lg-4 col-md-6 footer-about\">
          <a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"logo d-flex align-items-center\">
            <span class=\"sitename\">SoigneMoi</span>
          </a>
          <div class=\"footer-contact pt-3\">
            <p><strong>Projet – démonstration technique</strong></p>
            <p>Réalisé dans le cadre d’un CDA</p>
            <p>\"Concepteur Développeur d’Application\"</p>
            <p><strong>Email:</strong> <span>ge.lerest@gmail.com</span></p>
          </div>
          <div class=\"social-links d-flex mt-4\">
            <a href=\"#\"><i class=\"bi bi-twitter-x\"></i></a>
            <a href=\"#\"><i class=\"bi bi-facebook\"></i></a>
            <a href=\"#\"><i class=\"bi bi-instagram\"></i></a>
            <a href=\"#\"><i class=\"bi bi-linkedin\"></i></a>
          </div>
        </div>

        ";
        // line 25
        yield from $this->unwrap()->yieldBlock('footer_links', $context, $blocks);
        // line 70
        yield "        
      </div>
    </div>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 25
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer_links(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer_links"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer_links"));

        // line 26
        yield "          <div class=\"col-lg-2 col-md-3 footer-links\">
            <h4>Liens utiles</h4>
            <ul>
              <li><a href=\"#\">Home</a></li>
              <li><a href=\"#\">About us</a></li>
              <li><a href=\"#\">Services</a></li>
              <li><a href=\"#\">Terms of service</a></li>
              <li><a href=\"#\">Privacy policy</a></li>
            </ul>
          </div>

          <div class=\"col-lg-2 col-md-3 footer-links\">
            <h4>Nos services</h4>
            <ul>
              <li><a href=\"#\">Web Design</a></li>
              <li><a href=\"#\">Web Development</a></li>
              <li><a href=\"#\">Product Management</a></li>
              <li><a href=\"#\">Marketing</a></li>
              <li><a href=\"#\">Graphic Design</a></li>
            </ul>
          </div>

          <div class=\"col-lg-2 col-md-3 footer-links\">
            <h4>Hic solutasetp</h4>
            <ul>
              <li><a href=\"#\">Molestiae accusamus iure</a></li>
              <li><a href=\"#\">Excepturi dignissimos</a></li>
              <li><a href=\"#\">Suscipit distinctio</a></li>
              <li><a href=\"#\">Dilecta</a></li>
              <li><a href=\"#\">Sit quas consectetur</a></li>
            </ul>
          </div>

          <div class=\"col-lg-2 col-md-3 footer-links\">
            <h4>Nobis illum</h4>
            <ul>
              <li><a href=\"#\">Ipsam</a></li>
              <li><a href=\"#\">Laudantium dolorum</a></li>
              <li><a href=\"#\">Dinera</a></li>
              <li><a href=\"#\">Trodelas</a></li>
              <li><a href=\"#\">Flexo</a></li>
            </ul>
          </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 75
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer_bottom(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer_bottom"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer_bottom"));

        // line 76
        yield "    <div class=\"container copyright text-center mt-2\">
      <p>© <strong class=\"sitename\">Medilab</strong> All Rights Reserved</p>
      <div class=\"credits\">
        Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
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
        return "footer.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  210 => 76,  197 => 75,  143 => 26,  130 => 25,  116 => 70,  114 => 25,  94 => 8,  88 => 4,  75 => 3,  62 => 83,  60 => 75,  57 => 74,  55 => 3,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<footer id=\"footer\" class=\"footer light-background\">

  {% block footer_top %}
    <div class=\"container footer-top\">
      <div class=\"row gy-4\">
        
        <div class=\"col-lg-4 col-md-6 footer-about\">
          <a href=\"{{ path('app_home') }}\" class=\"logo d-flex align-items-center\">
            <span class=\"sitename\">SoigneMoi</span>
          </a>
          <div class=\"footer-contact pt-3\">
            <p><strong>Projet – démonstration technique</strong></p>
            <p>Réalisé dans le cadre d’un CDA</p>
            <p>\"Concepteur Développeur d’Application\"</p>
            <p><strong>Email:</strong> <span>ge.lerest@gmail.com</span></p>
          </div>
          <div class=\"social-links d-flex mt-4\">
            <a href=\"#\"><i class=\"bi bi-twitter-x\"></i></a>
            <a href=\"#\"><i class=\"bi bi-facebook\"></i></a>
            <a href=\"#\"><i class=\"bi bi-instagram\"></i></a>
            <a href=\"#\"><i class=\"bi bi-linkedin\"></i></a>
          </div>
        </div>

        {% block footer_links %}
          <div class=\"col-lg-2 col-md-3 footer-links\">
            <h4>Liens utiles</h4>
            <ul>
              <li><a href=\"#\">Home</a></li>
              <li><a href=\"#\">About us</a></li>
              <li><a href=\"#\">Services</a></li>
              <li><a href=\"#\">Terms of service</a></li>
              <li><a href=\"#\">Privacy policy</a></li>
            </ul>
          </div>

          <div class=\"col-lg-2 col-md-3 footer-links\">
            <h4>Nos services</h4>
            <ul>
              <li><a href=\"#\">Web Design</a></li>
              <li><a href=\"#\">Web Development</a></li>
              <li><a href=\"#\">Product Management</a></li>
              <li><a href=\"#\">Marketing</a></li>
              <li><a href=\"#\">Graphic Design</a></li>
            </ul>
          </div>

          <div class=\"col-lg-2 col-md-3 footer-links\">
            <h4>Hic solutasetp</h4>
            <ul>
              <li><a href=\"#\">Molestiae accusamus iure</a></li>
              <li><a href=\"#\">Excepturi dignissimos</a></li>
              <li><a href=\"#\">Suscipit distinctio</a></li>
              <li><a href=\"#\">Dilecta</a></li>
              <li><a href=\"#\">Sit quas consectetur</a></li>
            </ul>
          </div>

          <div class=\"col-lg-2 col-md-3 footer-links\">
            <h4>Nobis illum</h4>
            <ul>
              <li><a href=\"#\">Ipsam</a></li>
              <li><a href=\"#\">Laudantium dolorum</a></li>
              <li><a href=\"#\">Dinera</a></li>
              <li><a href=\"#\">Trodelas</a></li>
              <li><a href=\"#\">Flexo</a></li>
            </ul>
          </div>
        {% endblock %}
        
      </div>
    </div>
  {% endblock %}

  {% block footer_bottom %}
    <div class=\"container copyright text-center mt-2\">
      <p>© <strong class=\"sitename\">Medilab</strong> All Rights Reserved</p>
      <div class=\"credits\">
        Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
      </div>
    </div>
  {% endblock %}

</footer>
", "footer.html.twig", "/home/gerard/Bureau/soignemoi-symfony/soignemoi-local/templates/footer.html.twig");
    }
}
