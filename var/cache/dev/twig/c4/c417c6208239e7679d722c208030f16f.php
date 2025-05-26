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

/* recipe-details.html.twig */
class __TwigTemplate_ff0e0c3f7147dbcb5c82f826d8e4c2b0 extends Template
{
    private $source;
    private $macros = [];

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

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recipe-details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recipe-details.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "recipe-details.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Les recettes";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/recipe-details.css"), "html", null, true);
        echo "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 11
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/reviews.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "    <h1 class=\"title\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 16, $this->source); })()), "title", [], "any", false, false, false, 16), "html", null, true);
        echo "</h1>
    ";
        // line 17
        $this->displayBlock('error_top', $context, $blocks);
        // line 24
        echo "    <div class=\"container\">
        <div class=\"recipe-container\" style=\"display: inline-block; width: 80%;\">
            <div class=\"image-container\">
                <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("pictures/" . twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 27, $this->source); })()), "pictureName", [], "any", false, false, false, 27))), "html", null, true);
        echo "\" alt=\"Photo de la recette ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 27, $this->source); })()), "title", [], "any", false, false, false, 27), "html", null, true);
        echo "\" class=\"recipe-picture\" />
            </div>
            <p class=\"recipe-introduction text\">";
        // line 29
        echo twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 29, $this->source); })()), "description", [], "any", false, false, false, 29);
        echo "</p>
            <p class=\"text\"><span class=\"text-title\">Temps de préparation:</span> 
            ";
        // line 31
        (((null === twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 31, $this->source); })()), "preparationTime", [], "any", false, false, false, 31))) ? (print ("0")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 31, $this->source); })()), "preparationTime", [], "any", false, false, false, 31), "html", null, true))));
        echo " minutes
            </p>
            <p class=\"text\"><span class=\"text-title\">Temps de repos:</span>
            ";
        // line 34
        (((null === twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 34, $this->source); })()), "breakTime", [], "any", false, false, false, 34))) ? (print ("0")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 34, $this->source); })()), "breakTime", [], "any", false, false, false, 34), "html", null, true))));
        echo " minutes
            </p>
            <p class=\"text\"><span class=\"text-title\">Temps de cuisson:</span>
            ";
        // line 37
        (((null === twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 37, $this->source); })()), "cookingTime", [], "any", false, false, false, 37))) ? (print ("0")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 37, $this->source); })()), "cookingTime", [], "any", false, false, false, 37), "html", null, true))));
        echo " minutes
            </p>
            <div class=\"list-ingredients-container\">
                <p class=\"text-title text\">Ingredients</p>  
                <ul class=\"list-ingredients\">
                    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 42, $this->source); })()), "getIngredients", [], "method", false, false, false, 42));
        foreach ($context['_seq'] as $context["_key"] => $context["ingredient"]) {
            // line 43
            echo "                        <li class=\"text\"><b>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ingredient"], "name", [], "any", false, false, false, 43), "html", null, true);
            echo " :</b> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ingredient"], "quantity", [], "any", false, false, false, 43), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ingredient"], "unity", [], "any", false, false, false, 43), "html", null, true);
            echo "</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingredient'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                </ul>
            </div>
            <div class=\"steps\">
                <p class=\"text-title text\">Étapes</p>
                ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sortedSteps"]) || array_key_exists("sortedSteps", $context) ? $context["sortedSteps"] : (function () { throw new RuntimeError('Variable "sortedSteps" does not exist.', 49, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["step"]) {
            // line 50
            echo "                    <p class=\"text\"><b>Étape ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["step"], "orderNumber", [], "any", false, false, false, 50), "html", null, true);
            echo " </b>  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["step"], "description", [], "any", false, false, false, 50), "html", null, true);
            echo "</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['step'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                </p>
            </div>
            <p class=\"text-title text\">Recette adaptée pour les régimes</p>
            <ul>
                ";
        // line 56
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 56, $this->source); })()), "getDiets", [], "method", false, false, false, 56)) > 0)) {
            // line 57
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 57, $this->source); })()), "getDiets", [], "method", false, false, false, 57));
            foreach ($context['_seq'] as $context["_key"] => $context["diet"]) {
                // line 58
                echo "                        <li class=\"text\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["diet"], "name", [], "any", false, false, false, 58), "html", null, true);
                echo "</li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['diet'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                ";
        } else {
            // line 61
            echo "                    <li class=\"text\">Aucun</li>
                ";
        }
        // line 63
        echo "            </ul>
            <p class=\"text-title text\">Liste des allergènes</p>
            <ul>
                ";
        // line 66
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 66, $this->source); })()), "getAllergens", [], "method", false, false, false, 66)) > 0)) {
            // line 67
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 67, $this->source); })()), "getAllergens", [], "method", false, false, false, 67));
            foreach ($context['_seq'] as $context["_key"] => $context["allergen"]) {
                // line 68
                echo "                        <li class=\"text\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["allergen"], "name", [], "any", false, false, false, 68), "html", null, true);
                echo "</li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['allergen'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "                ";
        } else {
            // line 71
            echo "                    <li class=\"text\">Aucun</li>
                ";
        }
        // line 73
        echo "            </ul>
        </div>
    </div>
    <h2 class=\"title\">Vos avis</h2>
    <div class=\"row\">
        ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 78, $this->source); })()), "reviews", [], "any", false, false, false, 78));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 79
            echo "            <div class=\"col-xl-4 col-lg-6 col-12 review-item\">
                <div class=\"review-container\">
                    <div class=\"rate\">
                        ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 83
                echo "                            ";
                if (($context["i"] <= twig_get_attribute($this->env, $this->source, $context["review"], "rate", [], "any", false, false, false, 83))) {
                    // line 84
                    echo "                                <span class=\"star yellow-star\">★</span>
                            ";
                } else {
                    // line 86
                    echo "                                <span class=\"star\">☆</span>
                            ";
                }
                // line 88
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "                    </div>
                    <p class=\"review-text text\">";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "comment", [], "any", false, false, false, 90), "html", null, true);
            echo "</p>
                    <p class=\"review-name\">";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "name", [], "any", false, false, false, 91), "html", null, true);
            echo "</p>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "    </div>
    <div class=\"form-review-container\" style=\"margin-bottom:50px;\">
        ";
        // line 97
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "user", [], "any", false, false, false, 97))) {
            // line 98
            echo "            <div class=\"alert success-message\" style=\"display:none;\"></div>
            <div class=\"alert error-message\" style=\"display:none;\"></div>
            ";
            // line 100
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), 'form_start', ["attr" => ["id" => "review-form", "class" => "form review-form"]]);
            echo "
            ";
            // line 101
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "recipes", [], "any", false, false, false, 101), 'widget', ["value" => twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 101, $this->source); })()), "id", [], "any", false, false, false, 101)]);
            echo "
            ";
            // line 102
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "users", [], "any", false, false, false, 102), 'widget', ["value" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 102, $this->source); })()), "id", [], "any", false, false, false, 102)]);
            echo "
            ";
            // line 103
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "name", [], "any", false, false, false, 103), 'widget', ["attr" => ["id" => "name", "name" => "name", "value" => (((" " . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "user", [], "any", false, false, false, 103), "getLastName", [], "any", false, false, false, 103)) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "user", [], "any", false, false, false, 103), "getFirstName", [], "any", false, false, false, 103)), "required" => "required"]]);
            echo "
            ";
            // line 104
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "comment", [], "any", false, false, false, 104), 'label', ["label_attr" => ["class" => "label"], "label" => "Donnez-moi votre avis"]);
            echo "
            ";
            // line 105
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "comment", [], "any", false, false, false, 105), 'widget', ["attr" => ["id" => "comment", "rows" => "10", "cols" => "33", "maxlength" => "350"]]);
            echo "

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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 122, $this->source); })()), "id", [], "any", false, false, false, 122), "html", null, true);
            echo "\">
            <input type=\"submit\" class=\"button form-button\" value=\"Envoyer\">
            ";
            // line 124
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), 'form_end');
            echo "
        ";
        }
        // line 126
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_error_top($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "error_top"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "error_top"));

        // line 18
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "flashes", ["error_top"], "method", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 19
            echo "            <div class=\"alert alert-danger\">
                ";
            // line 20
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "recipe-details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  436 => 23,  427 => 20,  424 => 19,  419 => 18,  409 => 17,  398 => 126,  393 => 124,  388 => 122,  368 => 105,  364 => 104,  360 => 103,  356 => 102,  352 => 101,  348 => 100,  344 => 98,  342 => 97,  338 => 95,  328 => 91,  324 => 90,  321 => 89,  315 => 88,  311 => 86,  307 => 84,  304 => 83,  300 => 82,  295 => 79,  291 => 78,  284 => 73,  280 => 71,  277 => 70,  268 => 68,  263 => 67,  261 => 66,  256 => 63,  252 => 61,  249 => 60,  240 => 58,  235 => 57,  233 => 56,  227 => 52,  216 => 50,  212 => 49,  206 => 45,  193 => 43,  189 => 42,  181 => 37,  175 => 34,  169 => 31,  164 => 29,  157 => 27,  152 => 24,  150 => 17,  145 => 16,  135 => 15,  123 => 12,  118 => 11,  108 => 10,  96 => 7,  91 => 6,  81 => 5,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
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
