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

/* base.html.twig */
class __TwigTemplate_d90ffd29f36a9230e2d8eddb875c8ec3 extends Template
{
    private $source;
    private $macros = [];

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta description=\"Diététicienne nutritionniste, je vous propose une prise en charge nutritionnelle personnalisée selon vos objectifs et vos pathologies.\">
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">

        <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>

        <title>";
        // line 14
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 16
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "
        ";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "    </head>
    <body>
        <!-- Navbar version mobile -->
        <nav class=\"navbar navbar-expand-md d-md-none\">  
            <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/logo.png"), "html", null, true);
        echo "\" alt=\"Logo\" class=\"logo\" />
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#mobileNavbarContent\">
                <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("svg/list.svg"), "html", null, true);
        echo "\" alt=\"List\" class=\"navbar-list\">
            </button>
            <div class=\"collapse navbar-collapse\" id=\"mobileNavbarContent\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item nav-item-mobile\">
                        <a class=\"nav-link\" href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">Accueil</a>
                    </li>
                    <li class=\"nav-item nav-item-mobile\">
                        <a class=\"nav-link\" href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipes");
        echo "\">Recettes</a>
                    </li>
                    <li class=\"nav-item nav-item-mobile\">
                        <a class=\"nav-link\" href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a>
                    </li>
                    ";
        // line 42
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 43
            echo "                        <li class=\"nav-item nav-item-mobile\">
                            <a class=\"nav-link\" href=\"";
            // line 44
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">Connexion</a>
                        </li>
                    ";
        }
        // line 47
        echo "                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47) && twig_in_filter("ROLE_USER", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), "roles", [], "any", false, false, false, 47)))) {
            // line 48
            echo "                        <li class=\"nav-item nav-item-mobile\">
                            <a class=\"nav-link\" href=\"";
            // line 49
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
                        </li>
                    ";
        }
        // line 52
        echo "                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52) && twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "roles", [], "any", false, false, false, 52)))) {
            // line 53
            echo "                    <li class=\"nav-item nav-item-mobile\">
                        <a class=\"nav-link\" href=\"";
            // line 54
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\">Administrateur</a>
                    </li>
                    ";
        }
        // line 57
        echo "                </ul>
            </div>
        </nav>

        <!-- Navbar version desktop -->
        <nav class=\"navbar navbar-expand-md d-none d-md-flex\">
            <img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/logo.png"), "html", null, true);
        echo "\" alt=\"Logo\" class=\"logo\" />
            <ul class=\"navbar-nav navbar-desktop mr-auto\">
                <li class=\"nav-item nav-item-desktop\">
                    <a class=\"nav-link\" href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">Accueil</a>
                </li>
                <li class=\"nav-item nav-item-desktop\">
                    <a class=\"nav-link\" href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipes");
        echo "\">Recettes</a>
                </li>
                <li class=\"nav-item nav-item-desktop\">
                    <a class=\"nav-link\" href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a>
                </li>
                ";
        // line 74
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 75
            echo "                    <li class=\"nav-item nav-item-desktop\">
                        <a class=\"nav-link\" href=\"";
            // line 76
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">Connexion</a>
                    </li>
                ";
        }
        // line 79
        echo "                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "user", [], "any", false, false, false, 79) && twig_in_filter("ROLE_USER", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "user", [], "any", false, false, false, 79), "roles", [], "any", false, false, false, 79)))) {
            // line 80
            echo "                        <li class=\"nav-item nav-item-desktop\">
                            <a class=\"nav-link\" href=\"";
            // line 81
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
                        </li>
                    ";
        }
        // line 84
        echo "                ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "user", [], "any", false, false, false, 84) && twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "user", [], "any", false, false, false, 84), "roles", [], "any", false, false, false, 84)))) {
            // line 85
            echo "                    <li class=\"nav-item nav-item-desktop\">
                        <a class=\"nav-link\" href=\"";
            // line 86
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\">Administrateur</a>
                    </li>
                ";
        }
        // line 89
        echo "            </ul>
        </nav>

        <!-- Contenu principal -->
        <div class=\"content\">
            ";
        // line 94
        $this->displayBlock('body', $context, $blocks);
        // line 95
        echo "        </div>

        <!-- Footer -->
        <div class=\"footer-container\">
            <footer class=\"footer\">
                <div class=\"footer-link-container\">
                    <div class=\"footer-item\">
                        <a class=\"footer-link\" href=\"";
        // line 102
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a>
                    </div>
                    <div class=\"footer-item\">
                        <a class=\"footer-link\" href=\"";
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("private-policy");
        echo "\">Politique de confidentialité</a>
                    </div>
                    <div class=\"footer-item\">
                        <a class=\"footer-link\" href=\"";
        // line 108
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("legal-mentions");
        echo "\">Mentions légales</a>
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
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 14
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenue!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_link_tags')->getCallable()("styles"), "html", null, true);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 94
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 94,  322 => 21,  312 => 20,  299 => 17,  289 => 16,  270 => 14,  257 => 118,  244 => 108,  238 => 105,  232 => 102,  223 => 95,  221 => 94,  214 => 89,  208 => 86,  205 => 85,  202 => 84,  196 => 81,  193 => 80,  190 => 79,  184 => 76,  181 => 75,  179 => 74,  174 => 72,  168 => 69,  162 => 66,  156 => 63,  148 => 57,  142 => 54,  139 => 53,  136 => 52,  130 => 49,  127 => 48,  124 => 47,  118 => 44,  115 => 43,  113 => 42,  108 => 40,  102 => 37,  96 => 34,  88 => 29,  83 => 27,  77 => 23,  75 => 20,  72 => 19,  69 => 16,  65 => 14,  55 => 7,  47 => 1,);
    }

    public function getSourceContext()
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
            <img src=\"{{ asset('pictures/logo.png') }}\" alt=\"Logo\" class=\"logo\" />
            <ul class=\"navbar-nav navbar-desktop mr-auto\">
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
