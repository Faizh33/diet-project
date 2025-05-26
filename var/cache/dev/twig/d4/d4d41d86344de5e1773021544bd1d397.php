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

/* recipe-details.html.twig */
class __TwigTemplate_e424ebd9e817d3ff885e2e59aa898b9c extends Template
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
            'error_top' => [$this, 'block_error_top'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recipe-details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recipe-details.html.twig"));

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

        yield "Les recettes";
        
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/recipe-details.css"), "html", null, true);
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
    <script src=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/reviews.js"), "html", null, true);
        yield "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 15
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

        // line 16
        yield "    <h1 class=\"title\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 16, $this->source); })()), "title", [], "any", false, false, false, 16), "html", null, true);
        yield "</h1>
    ";
        // line 17
        yield from $this->unwrap()->yieldBlock('error_top', $context, $blocks);
        // line 24
        yield "    <div class=\"container\">
        <div class=\"recipe-container\" style=\"display: inline-block; width: 80%;\">
            <div class=\"image-container\">
                <img src=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("pictures/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 27, $this->source); })()), "pictureName", [], "any", false, false, false, 27))), "html", null, true);
        yield "\" alt=\"Photo de la recette ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 27, $this->source); })()), "title", [], "any", false, false, false, 27), "html", null, true);
        yield "\" class=\"recipe-picture\" />
            </div>
            <p class=\"recipe-introduction text\">";
        // line 29
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 29, $this->source); })()), "description", [], "any", false, false, false, 29);
        yield "</p>
            <p class=\"text\"><span class=\"text-title\">Temps de préparation:</span> 
            ";
        // line 31
        yield (((null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 31, $this->source); })()), "preparationTime", [], "any", false, false, false, 31))) ? ("0") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 31, $this->source); })()), "preparationTime", [], "any", false, false, false, 31), "html", null, true)));
        yield " minutes
            </p>
            <p class=\"text\"><span class=\"text-title\">Temps de repos:</span>
            ";
        // line 34
        yield (((null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 34, $this->source); })()), "breakTime", [], "any", false, false, false, 34))) ? ("0") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 34, $this->source); })()), "breakTime", [], "any", false, false, false, 34), "html", null, true)));
        yield " minutes
            </p>
            <p class=\"text\"><span class=\"text-title\">Temps de cuisson:</span>
            ";
        // line 37
        yield (((null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 37, $this->source); })()), "cookingTime", [], "any", false, false, false, 37))) ? ("0") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 37, $this->source); })()), "cookingTime", [], "any", false, false, false, 37), "html", null, true)));
        yield " minutes
            </p>
            <div class=\"list-ingredients-container\">
                <p class=\"text-title text\">Ingredients</p>  
                <ul class=\"list-ingredients\">
                    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 42, $this->source); })()), "getIngredients", [], "method", false, false, false, 42));
        foreach ($context['_seq'] as $context["_key"] => $context["ingredient"]) {
            // line 43
            yield "                        <li class=\"text\"><b>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ingredient"], "name", [], "any", false, false, false, 43), "html", null, true);
            yield " :</b> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ingredient"], "quantity", [], "any", false, false, false, 43), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ingredient"], "unity", [], "any", false, false, false, 43), "html", null, true);
            yield "</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ingredient'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "                </ul>
            </div>
            <div class=\"steps\">
                <p class=\"text-title text\">Étapes</p>
                ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sortedSteps"]) || array_key_exists("sortedSteps", $context) ? $context["sortedSteps"] : (function () { throw new RuntimeError('Variable "sortedSteps" does not exist.', 49, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["step"]) {
            // line 50
            yield "                    <p class=\"text\"><b>Étape ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["step"], "orderNumber", [], "any", false, false, false, 50), "html", null, true);
            yield " </b>  ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["step"], "description", [], "any", false, false, false, 50), "html", null, true);
            yield "</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['step'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "                </p>
            </div>
            <p class=\"text-title text\">Recette adaptée pour les régimes</p>
            <ul>
                ";
        // line 56
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 56, $this->source); })()), "getDiets", [], "method", false, false, false, 56)) > 0)) {
            // line 57
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 57, $this->source); })()), "getDiets", [], "method", false, false, false, 57));
            foreach ($context['_seq'] as $context["_key"] => $context["diet"]) {
                // line 58
                yield "                        <li class=\"text\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["diet"], "name", [], "any", false, false, false, 58), "html", null, true);
                yield "</li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['diet'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            yield "                ";
        } else {
            // line 61
            yield "                    <li class=\"text\">Aucun</li>
                ";
        }
        // line 63
        yield "            </ul>
            <p class=\"text-title text\">Liste des allergènes</p>
            <ul>
                ";
        // line 66
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 66, $this->source); })()), "getAllergens", [], "method", false, false, false, 66)) > 0)) {
            // line 67
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 67, $this->source); })()), "getAllergens", [], "method", false, false, false, 67));
            foreach ($context['_seq'] as $context["_key"] => $context["allergen"]) {
                // line 68
                yield "                        <li class=\"text\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["allergen"], "name", [], "any", false, false, false, 68), "html", null, true);
                yield "</li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['allergen'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            yield "                ";
        } else {
            // line 71
            yield "                    <li class=\"text\">Aucun</li>
                ";
        }
        // line 73
        yield "            </ul>
        </div>
    </div>
    <h2 class=\"title\">Vos avis</h2>
    <div class=\"row\">
        ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 78, $this->source); })()), "reviews", [], "any", false, false, false, 78));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 79
            yield "            <div class=\"col-xl-4 col-lg-6 col-12 review-item\">
                <div class=\"review-container\">
                    <div class=\"rate\">
                        ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 83
                yield "                            ";
                if (($context["i"] <= CoreExtension::getAttribute($this->env, $this->source, $context["review"], "rate", [], "any", false, false, false, 83))) {
                    // line 84
                    yield "                                <span class=\"star yellow-star\">★</span>
                            ";
                } else {
                    // line 86
                    yield "                                <span class=\"star\">☆</span>
                            ";
                }
                // line 88
                yield "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            yield "                    </div>
                    <p class=\"review-text text\">";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["review"], "comment", [], "any", false, false, false, 90), "html", null, true);
            yield "</p>
                    <p class=\"review-name\">";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["review"], "name", [], "any", false, false, false, 91), "html", null, true);
            yield "</p>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['review'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        yield "    </div>
    <div class=\"form-review-container\" style=\"margin-bottom:50px;\">
        ";
        // line 97
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "user", [], "any", false, false, false, 97))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 98
            yield "            <div class=\"alert success-message\" style=\"display:none;\"></div>
            <div class=\"alert error-message\" style=\"display:none;\"></div>
            ";
            // line 100
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), 'form_start', ["attr" => ["id" => "review-form", "class" => "form review-form"]]);
            yield "
            ";
            // line 101
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "recipes", [], "any", false, false, false, 101), 'widget', ["value" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 101, $this->source); })()), "id", [], "any", false, false, false, 101)]);
            yield "
            ";
            // line 102
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "users", [], "any", false, false, false, 102), 'widget', ["value" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 102, $this->source); })()), "id", [], "any", false, false, false, 102)]);
            yield "
            ";
            // line 103
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "name", [], "any", false, false, false, 103), 'widget', ["attr" => ["id" => "name", "name" => "name", "value" => (((" " . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "user", [], "any", false, false, false, 103), "getLastName", [], "any", false, false, false, 103)) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "user", [], "any", false, false, false, 103), "getFirstName", [], "any", false, false, false, 103)), "required" => "required"]]);
            yield "
            ";
            // line 104
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "comment", [], "any", false, false, false, 104), 'label', ["label_attr" => ["class" => "label"], "label" => "Donnez-moi votre avis"]);
            yield "
            ";
            // line 105
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "comment", [], "any", false, false, false, 105), 'widget', ["attr" => ["id" => "comment", "rows" => "10", "cols" => "33", "maxlength" => "350"]]);
            yield "

            <p class=\"label\">Note</p>
            <div class=\"rating-form-container\"  id=\"star-rating\">
                <div class=\"rating\">
                    <input type=\"radio\" id=\"star1\" name=\"rating\" value=\"5\" />
                    <label for=\"star1\"></label>
                    <input type=\"radio\" id=\"star2\" name=\"rating\" value=\"4\" />
                    <label for=\"star2\"></label>
                    <input type=\"radio\" id=\"star3\" name=\"rating\" value=\"3\" />
                    <label for=\"star3\"></label>
                    <input type=\"radio\" id=\"star4\" name=\"rating\" value=\"2\" />
                    <label for=\"star4\"></label>
                    <input type=\"radio\" id=\"star5\" name=\"rating\" value=\"1\" />
                    <label for=\"star5\"></label>
                </div>
            </div>
            <input type=\"hidden\" id=\"recipe-id\" value=\"";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 122, $this->source); })()), "id", [], "any", false, false, false, 122), "html", null, true);
            yield "\">
            <input type=\"submit\" class=\"button form-button\" value=\"Envoyer\">
            ";
            // line 124
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), 'form_end');
            yield "
        ";
        }
        // line 126
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_error_top(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "error_top"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "error_top"));

        // line 18
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "flashes", ["error_top"], "method", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 19
            yield "            <div class=\"alert alert-danger\">
                ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "recipe-details.html.twig";
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
        return array (  460 => 23,  451 => 20,  448 => 19,  443 => 18,  430 => 17,  418 => 126,  413 => 124,  408 => 122,  388 => 105,  384 => 104,  380 => 103,  376 => 102,  372 => 101,  368 => 100,  364 => 98,  362 => 97,  358 => 95,  348 => 91,  344 => 90,  341 => 89,  335 => 88,  331 => 86,  327 => 84,  324 => 83,  320 => 82,  315 => 79,  311 => 78,  304 => 73,  300 => 71,  297 => 70,  288 => 68,  283 => 67,  281 => 66,  276 => 63,  272 => 61,  269 => 60,  260 => 58,  255 => 57,  253 => 56,  247 => 52,  236 => 50,  232 => 49,  226 => 45,  213 => 43,  209 => 42,  201 => 37,  195 => 34,  189 => 31,  184 => 29,  177 => 27,  172 => 24,  170 => 17,  165 => 16,  152 => 15,  139 => 12,  134 => 11,  121 => 10,  108 => 7,  103 => 6,  90 => 5,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Les recettes{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/recipe-details.css') }}\">
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('js/reviews.js') }}\"></script>
{% endblock %}

{% block body %}
    <h1 class=\"title\">{{ recipe.title }}</h1>
    {% block error_top %}
        {% for message in app.flashes('error_top') %}
            <div class=\"alert alert-danger\">
                {{ message }}
            </div>
        {% endfor %}
    {% endblock %}
    <div class=\"container\">
        <div class=\"recipe-container\" style=\"display: inline-block; width: 80%;\">
            <div class=\"image-container\">
                <img src=\"{{ asset('pictures/' ~ recipe.pictureName) }}\" alt=\"Photo de la recette {{ recipe.title }}\" class=\"recipe-picture\" />
            </div>
            <p class=\"recipe-introduction text\">{{ recipe.description|raw }}</p>
            <p class=\"text\"><span class=\"text-title\">Temps de préparation:</span> 
            {{ recipe.preparationTime is null ? '0' : recipe.preparationTime }} minutes
            </p>
            <p class=\"text\"><span class=\"text-title\">Temps de repos:</span>
            {{ recipe.breakTime is null ? '0' : recipe.breakTime }} minutes
            </p>
            <p class=\"text\"><span class=\"text-title\">Temps de cuisson:</span>
            {{ recipe.cookingTime  is null ? '0' : recipe.cookingTime}} minutes
            </p>
            <div class=\"list-ingredients-container\">
                <p class=\"text-title text\">Ingredients</p>  
                <ul class=\"list-ingredients\">
                    {% for ingredient in recipe.getIngredients() %}
                        <li class=\"text\"><b>{{ ingredient.name }} :</b> {{ ingredient.quantity }} {{ ingredient.unity }}</li>
                    {% endfor %}
                </ul>
            </div>
            <div class=\"steps\">
                <p class=\"text-title text\">Étapes</p>
                {% for step in sortedSteps %}
                    <p class=\"text\"><b>Étape {{ step.orderNumber }} </b>  {{ step.description }}</li>
                {% endfor %}
                </p>
            </div>
            <p class=\"text-title text\">Recette adaptée pour les régimes</p>
            <ul>
                {% if recipe.getDiets()|length > 0 %}
                    {% for diet in recipe.getDiets() %}
                        <li class=\"text\">{{ diet.name }}</li>
                    {% endfor %}
                {% else %}
                    <li class=\"text\">Aucun</li>
                {% endif %}
            </ul>
            <p class=\"text-title text\">Liste des allergènes</p>
            <ul>
                {% if recipe.getAllergens()|length > 0 %}
                    {% for allergen in recipe.getAllergens() %}
                        <li class=\"text\">{{ allergen.name }}</li>
                    {% endfor %}
                {% else %}
                    <li class=\"text\">Aucun</li>
                {% endif %}
            </ul>
        </div>
    </div>
    <h2 class=\"title\">Vos avis</h2>
    <div class=\"row\">
        {% for review in recipe.reviews %}
            <div class=\"col-xl-4 col-lg-6 col-12 review-item\">
                <div class=\"review-container\">
                    <div class=\"rate\">
                        {% for i in 1..5 %}
                            {% if i <= review.rate %}
                                <span class=\"star yellow-star\">★</span>
                            {% else %}
                                <span class=\"star\">☆</span>
                            {% endif %}
                        {% endfor %}
                    </div>
                    <p class=\"review-text text\">{{ review.comment }}</p>
                    <p class=\"review-name\">{{ review.name }}</p>
                </div>
            </div>
        {% endfor %}
    </div>
    <div class=\"form-review-container\" style=\"margin-bottom:50px;\">
        {% if app.user is not null %}
            <div class=\"alert success-message\" style=\"display:none;\"></div>
            <div class=\"alert error-message\" style=\"display:none;\"></div>
            {{ form_start(form, {'attr': {'id':'review-form', 'class': 'form review-form'}}) }}
            {{ form_widget(form.recipes, {'value': recipe.id}) }}
            {{ form_widget(form.users, {'value': user.id}) }}
            {{ form_widget(form.name, {'attr': {'id': 'name', 'name': 'name', 'value': ' ' ~ app.user.getLastName ~ ' ' ~ app.user.getFirstName, 'required': 'required'}}) }}
            {{ form_label(form.comment, 'Donnez-moi votre avis', {'label_attr': {'class': 'label'}}) }}
            {{ form_widget(form.comment, {'attr': {'id': 'comment', 'rows': '10', 'cols': '33', 'maxlength':'350'}}) }}

            <p class=\"label\">Note</p>
            <div class=\"rating-form-container\"  id=\"star-rating\">
                <div class=\"rating\">
                    <input type=\"radio\" id=\"star1\" name=\"rating\" value=\"5\" />
                    <label for=\"star1\"></label>
                    <input type=\"radio\" id=\"star2\" name=\"rating\" value=\"4\" />
                    <label for=\"star2\"></label>
                    <input type=\"radio\" id=\"star3\" name=\"rating\" value=\"3\" />
                    <label for=\"star3\"></label>
                    <input type=\"radio\" id=\"star4\" name=\"rating\" value=\"2\" />
                    <label for=\"star4\"></label>
                    <input type=\"radio\" id=\"star5\" name=\"rating\" value=\"1\" />
                    <label for=\"star5\"></label>
                </div>
            </div>
            <input type=\"hidden\" id=\"recipe-id\" value=\"{{ recipe.id }}\">
            <input type=\"submit\" class=\"button form-button\" value=\"Envoyer\">
            {{ form_end(form) }}
        {% endif %}
    </div>
{% endblock %}", "recipe-details.html.twig", "C:\\Users\\erika\\Desktop\\diet-coupart\\diet-project\\templates\\recipe-details.html.twig");
    }
}
