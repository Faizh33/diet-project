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

/* base.html.twig */
class __TwigTemplate_5e708986d76b74f3ee63a0ef56a7ed18 extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta description=\"Diététicienne nutritionniste, je vous propose une prise en charge nutritionnelle personnalisée selon vos objectifs et vos pathologies.\">
        <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        yield "\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">

        <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>

        <title>";
        // line 14
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        ";
        // line 16
        yield "        ";
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 19
        yield "
        ";
        // line 20
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 23
        yield "    </head>
    <body>
        <!-- Navbar version mobile -->
        <nav class=\"navbar navbar-expand-md d-md-none\">  
            <img src=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/logo.png"), "html", null, true);
        yield "\" alt=\"Logo\" class=\"logo\" />
            <h1 class=\"navbar-title\">Sandrine Coupart<br>Diététicienne Nutritionniste</h1>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#mobileNavbarContent\">
                <img src=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("svg/list.svg"), "html", null, true);
        yield "\" alt=\"List\" class=\"navbar-list\">
            </button>
            <div class=\"collapse navbar-collapse\" id=\"mobileNavbarContent\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item nav-item-mobile\">
                        <a class=\"nav-link\" href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        yield "\">Accueil</a>
                    </li>
                    <li class=\"nav-item nav-item-mobile\">
                        <a class=\"nav-link\" href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipes");
        yield "\">Recettes</a>
                    </li>
                    <li class=\"nav-item nav-item-mobile\">
                        <a class=\"nav-link\" href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        yield "\">Contact</a>
                    </li>
                    ";
        // line 43
        if ((($tmp =  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 44
            yield "                        <li class=\"nav-item nav-item-mobile\">
                            <a class=\"nav-link\" href=\"";
            // line 45
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            yield "\">Connexion</a>
                        </li>
                    ";
        }
        // line 48
        yield "                    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48) && CoreExtension::inFilter("ROLE_USER", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48), "roles", [], "any", false, false, false, 48)))) {
            // line 49
            yield "                        <li class=\"nav-item nav-item-mobile\">
                            <a class=\"nav-link\" href=\"";
            // line 50
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Déconnexion</a>
                        </li>
                    ";
        }
        // line 53
        yield "                    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53) && CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53), "roles", [], "any", false, false, false, 53)))) {
            // line 54
            yield "                    <li class=\"nav-item nav-item-mobile\">
                        <a class=\"nav-link\" href=\"";
            // line 55
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            yield "\">Administrateur</a>
                    </li>
                    ";
        }
        // line 58
        yield "                </ul>
            </div>
        </nav>

        <!-- Navbar version desktop -->
        <nav class=\"navbar navbar-expand-md d-none d-md-flex\">
            <div class=\"navbar-left\">
                <img src=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/logo.png"), "html", null, true);
        yield "\" alt=\"Logo\" class=\"logo\" />
            </div>

            <div class=\"navbar-center\">
                <h1 class=\"navbar-title\">Sandrine Coupart<br>Diététicienne Nutritionniste</h1>
                <ul class=\"navbar-nav navbar-desktop\">
                    <li class=\"nav-item nav-item-desktop\">
                        <a class=\"nav-link\" href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        yield "\">Accueil</a>
                    </li>
                    <li class=\"nav-item nav-item-desktop\">
                        <a class=\"nav-link\" href=\"";
        // line 75
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipes");
        yield "\">Recettes</a>
                    </li>
                    <li class=\"nav-item nav-item-desktop\">
                        <a class=\"nav-link\" href=\"";
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        yield "\">Contact</a>
                    </li>
                    ";
        // line 80
        if ((($tmp =  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 81
            yield "                        <li class=\"nav-item nav-item-desktop\">
                            <a class=\"nav-link\" href=\"";
            // line 82
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            yield "\">Connexion</a>
                        </li>
                    ";
        }
        // line 85
        yield "                    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "user", [], "any", false, false, false, 85) && CoreExtension::inFilter("ROLE_USER", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "user", [], "any", false, false, false, 85), "roles", [], "any", false, false, false, 85)))) {
            // line 86
            yield "                        <li class=\"nav-item nav-item-desktop\">
                            <a class=\"nav-link\" href=\"";
            // line 87
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Déconnexion</a>
                        </li>
                    ";
        }
        // line 90
        yield "                    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "user", [], "any", false, false, false, 90) && CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "user", [], "any", false, false, false, 90), "roles", [], "any", false, false, false, 90)))) {
            // line 91
            yield "                        <li class=\"nav-item nav-item-desktop\">
                            <a class=\"nav-link\" href=\"";
            // line 92
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            yield "\">Administrateur</a>
                        </li>
                    ";
        }
        // line 95
        yield "                </ul>
            </div>
        </nav>

        <!-- Contenu principal -->
        <div class=\"content\">
            ";
        // line 101
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 102
        yield "        </div>

        <!-- Footer -->
        <div class=\"footer-container\">
            <footer class=\"footer\">
                <div class=\"footer-link-container\">
                    <div class=\"footer-item\">
                        <a class=\"footer-link\" href=\"";
        // line 109
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        yield "\">Contact</a>
                    </div>
                    <div class=\"footer-item\">
                        <a class=\"footer-link\" href=\"";
        // line 112
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("private-policy");
        yield "\">Politique de confidentialité</a>
                    </div>
                    <div class=\"footer-item\">
                        <a class=\"footer-link\" href=\"";
        // line 115
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("legal-mentions");
        yield "\">Mentions légales</a>
                    </div>
                </div>
                <div class=\"notice\">
                    <div class=\"desktop-notice\">© 2023 Diététicienne Nutritionniste. Site créé par Faizh33</div>
                    <div class=\"mobile-notice\">© 2023 Diététicienne Nutritionniste.</div>
                    <div class=\"mobile-notice\">Site créé par Faizh33</div>
                </div>
            </footer>
        </div>
        <script src=\"";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/app.js"), "html", null, true);
        yield "\"></script>
    </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 14
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

        yield "Bienvenue!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 16
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

        // line 17
        yield "            ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('encore_entry_link_tags')->getCallable()("styles"), "html", null, true);
        yield "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 20
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

        // line 21
        yield "            ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        yield "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 101
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  360 => 101,  346 => 21,  333 => 20,  319 => 17,  306 => 16,  283 => 14,  269 => 125,  256 => 115,  250 => 112,  244 => 109,  235 => 102,  233 => 101,  225 => 95,  219 => 92,  216 => 91,  213 => 90,  207 => 87,  204 => 86,  201 => 85,  195 => 82,  192 => 81,  190 => 80,  185 => 78,  179 => 75,  173 => 72,  163 => 65,  154 => 58,  148 => 55,  145 => 54,  142 => 53,  136 => 50,  133 => 49,  130 => 48,  124 => 45,  121 => 44,  119 => 43,  114 => 41,  108 => 38,  102 => 35,  94 => 30,  88 => 27,  82 => 23,  80 => 20,  77 => 19,  74 => 16,  70 => 14,  60 => 7,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta description=\"Diététicienne nutritionniste, je vous propose une prise en charge nutritionnelle personnalisée selon vos objectifs et vos pathologies.\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/styles.css') }}\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">

        <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>

        <title>{% block title %}Bienvenue!{% endblock %}</title>
        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        {% block stylesheets %}
            {{ encore_entry_link_tags('styles') }}
        {% endblock %}

        {% block javascripts %}
            {{ encore_entry_script_tags('app') }}
        {% endblock %}
    </head>
    <body>
        <!-- Navbar version mobile -->
        <nav class=\"navbar navbar-expand-md d-md-none\">  
            <img src=\"{{ asset('pictures/logo.png') }}\" alt=\"Logo\" class=\"logo\" />
            <h1 class=\"navbar-title\">Sandrine Coupart<br>Diététicienne Nutritionniste</h1>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#mobileNavbarContent\">
                <img src=\"{{ asset('svg/list.svg') }}\" alt=\"List\" class=\"navbar-list\">
            </button>
            <div class=\"collapse navbar-collapse\" id=\"mobileNavbarContent\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item nav-item-mobile\">
                        <a class=\"nav-link\" href=\"{{ path('homepage') }}\">Accueil</a>
                    </li>
                    <li class=\"nav-item nav-item-mobile\">
                        <a class=\"nav-link\" href=\"{{ path('recipes') }}\">Recettes</a>
                    </li>
                    <li class=\"nav-item nav-item-mobile\">
                        <a class=\"nav-link\" href=\"{{ path('contact') }}\">Contact</a>
                    </li>
                    {% if not is_granted('IS_AUTHENTICATED_FULLY') %}
                        <li class=\"nav-item nav-item-mobile\">
                            <a class=\"nav-link\" href=\"{{ path('login') }}\">Connexion</a>
                        </li>
                    {% endif %}
                    {% if app.user and 'ROLE_USER' in app.user.roles %}
                        <li class=\"nav-item nav-item-mobile\">
                            <a class=\"nav-link\" href=\"{{ path('app_logout') }}\">Déconnexion</a>
                        </li>
                    {% endif %}
                    {% if app.user and 'ROLE_ADMIN' in app.user.roles %}
                    <li class=\"nav-item nav-item-mobile\">
                        <a class=\"nav-link\" href=\"{{ path('admin') }}\">Administrateur</a>
                    </li>
                    {% endif %}
                </ul>
            </div>
        </nav>

        <!-- Navbar version desktop -->
        <nav class=\"navbar navbar-expand-md d-none d-md-flex\">
            <div class=\"navbar-left\">
                <img src=\"{{ asset('pictures/logo.png') }}\" alt=\"Logo\" class=\"logo\" />
            </div>

            <div class=\"navbar-center\">
                <h1 class=\"navbar-title\">Sandrine Coupart<br>Diététicienne Nutritionniste</h1>
                <ul class=\"navbar-nav navbar-desktop\">
                    <li class=\"nav-item nav-item-desktop\">
                        <a class=\"nav-link\" href=\"{{ path('homepage') }}\">Accueil</a>
                    </li>
                    <li class=\"nav-item nav-item-desktop\">
                        <a class=\"nav-link\" href=\"{{ path('recipes') }}\">Recettes</a>
                    </li>
                    <li class=\"nav-item nav-item-desktop\">
                        <a class=\"nav-link\" href=\"{{ path('contact') }}\">Contact</a>
                    </li>
                    {% if not is_granted('IS_AUTHENTICATED_FULLY') %}
                        <li class=\"nav-item nav-item-desktop\">
                            <a class=\"nav-link\" href=\"{{ path('login') }}\">Connexion</a>
                        </li>
                    {% endif %}
                    {% if app.user and 'ROLE_USER' in app.user.roles %}
                        <li class=\"nav-item nav-item-desktop\">
                            <a class=\"nav-link\" href=\"{{ path('app_logout') }}\">Déconnexion</a>
                        </li>
                    {% endif %}
                    {% if app.user and 'ROLE_ADMIN' in app.user.roles %}
                        <li class=\"nav-item nav-item-desktop\">
                            <a class=\"nav-link\" href=\"{{ path('admin') }}\">Administrateur</a>
                        </li>
                    {% endif %}
                </ul>
            </div>
        </nav>

        <!-- Contenu principal -->
        <div class=\"content\">
            {% block body %}{% endblock %}
        </div>

        <!-- Footer -->
        <div class=\"footer-container\">
            <footer class=\"footer\">
                <div class=\"footer-link-container\">
                    <div class=\"footer-item\">
                        <a class=\"footer-link\" href=\"{{ path('contact') }}\">Contact</a>
                    </div>
                    <div class=\"footer-item\">
                        <a class=\"footer-link\" href=\"{{ path('private-policy') }}\">Politique de confidentialité</a>
                    </div>
                    <div class=\"footer-item\">
                        <a class=\"footer-link\" href=\"{{ path('legal-mentions') }}\">Mentions légales</a>
                    </div>
                </div>
                <div class=\"notice\">
                    <div class=\"desktop-notice\">© 2023 Diététicienne Nutritionniste. Site créé par Faizh33</div>
                    <div class=\"mobile-notice\">© 2023 Diététicienne Nutritionniste.</div>
                    <div class=\"mobile-notice\">Site créé par Faizh33</div>
                </div>
            </footer>
        </div>
        <script src=\"{{ asset('js/app.js') }}\"></script>
    </body>
</html>", "base.html.twig", "C:\\Users\\erika\\Desktop\\diet-coupart\\diet-project\\templates\\base.html.twig");
    }
}
