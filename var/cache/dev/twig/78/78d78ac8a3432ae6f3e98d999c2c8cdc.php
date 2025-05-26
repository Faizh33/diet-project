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

/* home.html.twig */
class __TwigTemplate_8915564514d0280100ed5963d8cc4ead extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
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

        yield "Accueil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/home.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 11
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 14
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

        // line 15
        yield "<div class=\"home-body\">
    <div class=\"home-intro row\">
        <div class=\"picture-container col-md-6\">
            <img src=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/fruits.jpg"), "html", null, true);
        yield "\" alt=\"fruits\" class=\"picture\" />
        </div>
        <h1 class=\"home-title col-md-5\">J'adore manger, et vous?</h1>
    </div>
    <div class=\"about-us-container row\">
        <div class=\"picture-container col-md-6\">
            <img src=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/dieteticienne.jpg"), "html", null, true);
        yield "\" alt=\"fruits\" class=\"picture diet-picture\">
        </div>
        <div class=\"about-us-text-container col-md-5\">
            <h2 class=\"about-us-title\">DIETETICIENNE - NUTRITIONNISTE</h2>
            <p class=\"about-us-text text\">Bonjour et bienvenue, je m'appelle Sandrine Coupart, diplômée de l'académie de Caen. Je consulte du lundi au samedi au cabinet.</p>
            <div class=\"button contact-button\">
                <a href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        yield "\" class=\"button-link\">Contactez-moi</a>
            </div>
        </div>
    </div>
    <h2 class=\"title\">Mes services</h2>
    <div class=\"services-container row\">
        <div class=\"service col-md-6 col-lg-4\">
            <h3 class=\"subtitle\">Conseils nutritionnels</h3>
            <p class=\"service-text text\">Obtenez des conseils d'une expert pour adopter une alimentation saine et équilibrée adaptée à votre mode de vie, vos objectifs de santé et vos préférences alimentaires.</p>
        </div>
        <div class=\"service col-md-6 col-lg-4\">
            <h3 class=\"subtitle\">Menu personnalisé</h3>
            <p class=\"service-text text\">Profitez de menus sur mesure conçus spécialement pour vous, tenant compte de vos besoins nutritionnels, de vos goûts personnels et de vos restrictions alimentaires.</p>
        </div>
        <div class=\"service col-md-6 col-lg-4\">
            <h3 class=\"subtitle\">Suivi régulier</h3>
            <p class=\"service-text text\">Bénéficiez d'un suivi personnalisé et régulier pour vous aider à atteindre et à maintenir vos objectifs de santé, avec des ajustements personnalisés à votre plan nutritionnel au fil du temps.</p>
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
        return "home.html.twig";
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
        return array (  183 => 30,  174 => 24,  165 => 18,  160 => 15,  147 => 14,  133 => 11,  120 => 10,  107 => 7,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/home.css') }}\">
{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}

{% block body %}
<div class=\"home-body\">
    <div class=\"home-intro row\">
        <div class=\"picture-container col-md-6\">
            <img src=\"{{ asset('pictures/fruits.jpg') }}\" alt=\"fruits\" class=\"picture\" />
        </div>
        <h1 class=\"home-title col-md-5\">J'adore manger, et vous?</h1>
    </div>
    <div class=\"about-us-container row\">
        <div class=\"picture-container col-md-6\">
            <img src=\"{{ asset('pictures/dieteticienne.jpg') }}\" alt=\"fruits\" class=\"picture diet-picture\">
        </div>
        <div class=\"about-us-text-container col-md-5\">
            <h2 class=\"about-us-title\">DIETETICIENNE - NUTRITIONNISTE</h2>
            <p class=\"about-us-text text\">Bonjour et bienvenue, je m'appelle Sandrine Coupart, diplômée de l'académie de Caen. Je consulte du lundi au samedi au cabinet.</p>
            <div class=\"button contact-button\">
                <a href=\"{{ path('contact') }}\" class=\"button-link\">Contactez-moi</a>
            </div>
        </div>
    </div>
    <h2 class=\"title\">Mes services</h2>
    <div class=\"services-container row\">
        <div class=\"service col-md-6 col-lg-4\">
            <h3 class=\"subtitle\">Conseils nutritionnels</h3>
            <p class=\"service-text text\">Obtenez des conseils d'une expert pour adopter une alimentation saine et équilibrée adaptée à votre mode de vie, vos objectifs de santé et vos préférences alimentaires.</p>
        </div>
        <div class=\"service col-md-6 col-lg-4\">
            <h3 class=\"subtitle\">Menu personnalisé</h3>
            <p class=\"service-text text\">Profitez de menus sur mesure conçus spécialement pour vous, tenant compte de vos besoins nutritionnels, de vos goûts personnels et de vos restrictions alimentaires.</p>
        </div>
        <div class=\"service col-md-6 col-lg-4\">
            <h3 class=\"subtitle\">Suivi régulier</h3>
            <p class=\"service-text text\">Bénéficiez d'un suivi personnalisé et régulier pour vous aider à atteindre et à maintenir vos objectifs de santé, avec des ajustements personnalisés à votre plan nutritionnel au fil du temps.</p>
        </div>
    </div>
{% endblock %}", "home.html.twig", "C:\\Users\\erika\\Desktop\\diet-coupart\\diet-project\\templates\\home.html.twig");
    }
}
