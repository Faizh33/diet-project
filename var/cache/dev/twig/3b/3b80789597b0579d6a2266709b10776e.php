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

/* @EasyAdmin/crud/detail.html.twig */
class __TwigTemplate_0d5d9fe86aee4e77da0b73e7e53faa48 extends Template
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
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'configured_head_contents' => [$this, 'block_configured_head_contents'],
            'configured_body_contents' => [$this, 'block_configured_body_contents'],
            'configured_stylesheets' => [$this, 'block_configured_stylesheets'],
            'configured_javascripts' => [$this, 'block_configured_javascripts'],
            'content_title' => [$this, 'block_content_title'],
            'page_actions' => [$this, 'block_page_actions'],
            'main' => [$this, 'block_main'],
            'detail_fields' => [$this, 'block_detail_fields'],
            'delete_form' => [$this, 'block_delete_form'],
            'detail_field' => [$this, 'block_detail_field'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 3
        return $this->load(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 3, $this->source); })()), "templatePath", ["layout"], "method", false, false, false, 3), 3);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/detail.html.twig"));

        // line 8
        $context["ea_field_assets"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 8, $this->source); })()), "crud", [], "any", false, false, false, 8), "fieldAssets", [Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud::PAGE_DETAIL")], "method", false, false, false, 8);
        // line 3
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_id(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_id"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((("ea-detail-" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5)) . "-") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 5, $this->source); })()), "primaryKeyValue", [], "any", false, false, false, 5)), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("ea-detail ea-detail-" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6)), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_head_contents(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_head_contents"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_head_contents"));

        // line 11
        yield "    ";
        yield from $this->yieldParentBlock("configured_head_contents", $context, $blocks);
        yield "
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea_field_assets"]) || array_key_exists("ea_field_assets", $context) ? $context["ea_field_assets"] : (function () { throw new RuntimeError('Variable "ea_field_assets" does not exist.', 12, $this->source); })()), "headContents", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 13
            yield "        ";
            yield $context["htmlContent"];
            yield "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['htmlContent'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_body_contents(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_body_contents"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_body_contents"));

        // line 18
        yield "    ";
        yield from $this->yieldParentBlock("configured_body_contents", $context, $blocks);
        yield "
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea_field_assets"]) || array_key_exists("ea_field_assets", $context) ? $context["ea_field_assets"] : (function () { throw new RuntimeError('Variable "ea_field_assets" does not exist.', 19, $this->source); })()), "bodyContents", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 20
            yield "        ";
            yield $context["htmlContent"];
            yield "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['htmlContent'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 24
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_stylesheets"));

        // line 25
        yield "    ";
        yield from $this->yieldParentBlock("configured_stylesheets", $context, $blocks);
        yield "
    ";
        // line 26
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_css_assets.html.twig", ["assets" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea_field_assets"]) || array_key_exists("ea_field_assets", $context) ? $context["ea_field_assets"] : (function () { throw new RuntimeError('Variable "ea_field_assets" does not exist.', 26, $this->source); })()), "cssAssets", [], "any", false, false, false, 26)], false);
        yield "
    ";
        // line 27
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_encore_link_tags.html.twig", ["assets" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea_field_assets"]) || array_key_exists("ea_field_assets", $context) ? $context["ea_field_assets"] : (function () { throw new RuntimeError('Variable "ea_field_assets" does not exist.', 27, $this->source); })()), "webpackEncoreAssets", [], "any", false, false, false, 27)], false);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 30
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_javascripts"));

        // line 31
        yield "    ";
        yield from $this->yieldParentBlock("configured_javascripts", $context, $blocks);
        yield "
    ";
        // line 32
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_js_assets.html.twig", ["assets" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea_field_assets"]) || array_key_exists("ea_field_assets", $context) ? $context["ea_field_assets"] : (function () { throw new RuntimeError('Variable "ea_field_assets" does not exist.', 32, $this->source); })()), "jsAssets", [], "any", false, false, false, 32)], false);
        yield "
    ";
        // line 33
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_encore_script_tags.html.twig", ["assets" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea_field_assets"]) || array_key_exists("ea_field_assets", $context) ? $context["ea_field_assets"] : (function () { throw new RuntimeError('Variable "ea_field_assets" does not exist.', 33, $this->source); })()), "webpackEncoreAssets", [], "any", false, false, false, 33)], false);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        // line 37
        $context["custom_page_title"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 37, $this->source); })()), "crud", [], "any", false, false, false, 37), "customPageTitle", [(isset($context["pageName"]) || array_key_exists("pageName", $context) ? $context["pageName"] : (function () { throw new RuntimeError('Variable "pageName" does not exist.', 37, $this->source); })()), (((($tmp = (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 37, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 37, $this->source); })()), "instance", [], "any", false, false, false, 37)) : (null)), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 37, $this->source); })()), "i18n", [], "any", false, false, false, 37), "translationParameters", [], "any", false, false, false, 37), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 37, $this->source); })()), "i18n", [], "any", false, false, false, 37), "translationDomain", [], "any", false, false, false, 37)], "method", false, false, false, 37);
        // line 38
        yield (((null === (isset($context["custom_page_title"]) || array_key_exists("custom_page_title", $context) ? $context["custom_page_title"] : (function () { throw new RuntimeError('Variable "custom_page_title" does not exist.', 38, $this->source); })()))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 39
(isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 39, $this->source); })()), "crud", [], "any", false, false, false, 39), "defaultPageTitle", [null, null, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 39, $this->source); })()), "i18n", [], "any", false, false, false, 39), "translationParameters", [], "any", false, false, false, 39)], "method", false, false, false, 39))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(        // line 40
(isset($context["custom_page_title"]) || array_key_exists("custom_page_title", $context) ? $context["custom_page_title"] : (function () { throw new RuntimeError('Variable "custom_page_title" does not exist.', 40, $this->source); })()))));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 43
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions"));

        // line 44
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 44, $this->source); })()), "actions", [], "any", false, false, false, 44));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 45
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 45), ["action" => $context["action"]], false);
            yield "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['action'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 49
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 50
        yield "    ";
        yield from $this->unwrap()->yieldBlock('detail_fields', $context, $blocks);
        // line 59
        yield "
    ";
        // line 60
        yield from $this->unwrap()->yieldBlock('delete_form', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 50
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_detail_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "detail_fields"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "detail_fields"));

        // line 51
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 51, $this->source); })()), "fields", [], "any", false, false, false, 51));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 52
            yield "            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["field"], "isFormLayoutField", [], "any", false, false, false, 52)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 53
                yield "                ";
                yield $this->getTemplateForMacro("macro_render_layout_field", $context, 53, $this->getSourceContext())->macro_render_layout_field(...[$context["field"]]);
                yield "
            ";
            } else {
                // line 55
                yield "                ";
                yield $this->getTemplateForMacro("macro_render_field_contents", $context, 55, $this->getSourceContext())->macro_render_field_contents(...[(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 55, $this->source); })()), $context["field"]]);
                yield "
            ";
            }
            // line 57
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 60
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_delete_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delete_form"));

        // line 61
        yield "        ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/crud/includes/_delete_form.html.twig", ["entity_id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 61, $this->source); })()), "primaryKeyValue", [], "any", false, false, false, 61)], false);
        yield "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 319
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_detail_field(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "detail_field"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "detail_field"));

        // line 320
        yield "            ";
        if ((($tmp =  !(isset($context["is_form_fieldset"]) || array_key_exists("is_form_fieldset", $context) ? $context["is_form_fieldset"] : (function () { throw new RuntimeError('Variable "is_form_fieldset" does not exist.', 320, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 321
            yield "                ";
            yield $this->getTemplateForMacro("macro_render_field", $context, 321, $this->getSourceContext())->macro_render_field(...[(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 321, $this->source); })()), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 321, $this->source); })())]);
            yield "
            ";
        }
        // line 323
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 65
    public function macro_render_field_contents($entity = null, $field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "entity" => $entity,
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_field_contents"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_field_contents"));

            // line 66
            yield "    <div class=\"field-group ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 66, $this->source); })()), "cssClass", [], "any", false, false, false, 66), "html", null, true);
            yield "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 66, $this->source); })()), "htmlAttributes", [], "any", false, false, false, 66));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html_attr");
                yield "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['name'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield ">
        ";
            // line 67
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 67, $this->source); })()), "label", [], "any", false, false, false, 67) === false)) {
                // line 68
                yield "            ";
                // line 70
                yield "        ";
            } else {
                // line 71
                yield "            <div class=\"field-label\">";
                // line 72
                $context["label_html_attributes"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 73
                    if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 73, $this->source); })()), "help", [], "any", false, false, false, 73))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 74
                        yield "data-bs-toggle=\"tooltip\" data-bs-placement=\"auto\" data-bs-animation=\"false\"
                        data-bs-html=\"true\" data-bs-custom-class=\"ea-detail-label-tooltip\"
                        data-bs-title=\"";
                        // line 76
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 76, $this->source); })()), "help", [], "any", false, false, false, 76)), "html_attr");
                        yield "\"";
                    }
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 80
                yield "<div ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["label_html_attributes"]) || array_key_exists("label_html_attributes", $context) ? $context["label_html_attributes"] : (function () { throw new RuntimeError('Variable "label_html_attributes" does not exist.', 80, $this->source); })()), "html", null, true);
                yield ">
                    ";
                // line 81
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 81, $this->source); })()), "label", [], "any", false, false, false, 81));
                yield "
                </div>
            </div>
        ";
            }
            // line 85
            yield "
        <div class=\"field-value\">
            ";
            // line 87
            yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 87, $this->source); })()), "templatePath", [], "any", false, false, false, 87), ["field" => (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 87, $this->source); })()), "entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 87, $this->source); })())], false);
            yield "
        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 92
    public function macro_render_layout_field($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_layout_field"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_layout_field"));

            // line 93
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 93, $this->source); })()), "formType", [], "any", false, false, false, 93) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormTabListType")) {
                // line 94
                yield "        ";
                yield $this->getTemplateForMacro("macro_render_tab_list", $context, 94, $this->getSourceContext())->macro_render_tab_list(...[(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 94, $this->source); })())]);
                yield "
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 95
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 95, $this->source); })()), "formType", [], "any", false, false, false, 95) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormTabPaneGroupOpenType")) {
                // line 96
                yield "        ";
                yield $this->getTemplateForMacro("macro_render_tab_group_open", $context, 96, $this->getSourceContext())->macro_render_tab_group_open(...[(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 96, $this->source); })())]);
                yield "
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 97
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 97, $this->source); })()), "formType", [], "any", false, false, false, 97) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormTabPaneGroupCloseType")) {
                // line 98
                yield "        ";
                yield $this->getTemplateForMacro("macro_render_tab_group_close", $context, 98, $this->getSourceContext())->macro_render_tab_group_close(...[(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 98, $this->source); })())]);
                yield "
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 99
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 99, $this->source); })()), "formType", [], "any", false, false, false, 99) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormTabPaneOpenType")) {
                // line 100
                yield "        ";
                yield $this->getTemplateForMacro("macro_render_tab_open", $context, 100, $this->getSourceContext())->macro_render_tab_open(...[(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 100, $this->source); })())]);
                yield "
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 101
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 101, $this->source); })()), "formType", [], "any", false, false, false, 101) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormTabPaneCloseType")) {
                // line 102
                yield "        ";
                yield $this->getTemplateForMacro("macro_render_tab_close", $context, 102, $this->getSourceContext())->macro_render_tab_close(...[(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 102, $this->source); })())]);
                yield "
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 103
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 103, $this->source); })()), "formType", [], "any", false, false, false, 103) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormColumnGroupOpenType")) {
                // line 104
                yield "        ";
                yield $this->getTemplateForMacro("macro_render_column_group_open", $context, 104, $this->getSourceContext())->macro_render_column_group_open(...[(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 104, $this->source); })())]);
                yield "
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 105
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 105, $this->source); })()), "formType", [], "any", false, false, false, 105) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormColumnGroupCloseType")) {
                // line 106
                yield "        ";
                yield $this->getTemplateForMacro("macro_render_column_group_close", $context, 106, $this->getSourceContext())->macro_render_column_group_close(...[(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 106, $this->source); })())]);
                yield "
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 107
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 107, $this->source); })()), "formType", [], "any", false, false, false, 107) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormColumnOpenType")) {
                // line 108
                yield "        ";
                yield $this->getTemplateForMacro("macro_render_column_open", $context, 108, $this->getSourceContext())->macro_render_column_open(...[(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 108, $this->source); })())]);
                yield "
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 109
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 109, $this->source); })()), "formType", [], "any", false, false, false, 109) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormColumnCloseType")) {
                // line 110
                yield "        ";
                yield $this->getTemplateForMacro("macro_render_column_close", $context, 110, $this->getSourceContext())->macro_render_column_close(...[(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 110, $this->source); })())]);
                yield "
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 111
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 111, $this->source); })()), "formType", [], "any", false, false, false, 111) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormFieldsetOpenType")) {
                // line 112
                yield "        ";
                yield $this->getTemplateForMacro("macro_render_fieldset_open", $context, 112, $this->getSourceContext())->macro_render_fieldset_open(...[(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 112, $this->source); })())]);
                yield "
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 113
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 113, $this->source); })()), "formType", [], "any", false, false, false, 113) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormFieldsetCloseType")) {
                // line 114
                yield "        ";
                yield $this->getTemplateForMacro("macro_render_fieldset_close", $context, 114, $this->getSourceContext())->macro_render_fieldset_close(...[(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 114, $this->source); })())]);
                yield "
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 118
    public function macro_render_tab_list($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_tab_list"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_tab_list"));

            // line 119
            yield "    ";
            $context["tab_id_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_ID");
            // line 120
            yield "    ";
            $context["tab_is_active_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_IS_ACTIVE");
            // line 121
            yield "    ";
            $context["tab_error_count_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_ERROR_COUNT");
            // line 122
            yield "
    <div class=\"nav-tabs-custom form-tabs-tablist\">
        <ul class=\"nav nav-tabs\">
            ";
            // line 125
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 125, $this->source); })()), "getCustomOption", ["tabs"], "method", false, false, false, 125));
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 126
                yield "                <li class=\"nav-item\">
                    <a class=\"nav-link ";
                // line 127
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", [(isset($context["tab_is_active_option_name"]) || array_key_exists("tab_is_active_option_name", $context) ? $context["tab_is_active_option_name"] : (function () { throw new RuntimeError('Variable "tab_is_active_option_name" does not exist.', 127, $this->source); })())], "method", false, false, false, 127)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "active";
                }
                yield "\" href=\"#";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", [(isset($context["tab_id_option_name"]) || array_key_exists("tab_id_option_name", $context) ? $context["tab_id_option_name"] : (function () { throw new RuntimeError('Variable "tab_id_option_name" does not exist.', 127, $this->source); })())], "method", false, false, false, 127), "html", null, true);
                yield "\" id=\"tablist-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", [(isset($context["tab_id_option_name"]) || array_key_exists("tab_id_option_name", $context) ? $context["tab_id_option_name"] : (function () { throw new RuntimeError('Variable "tab_id_option_name" does not exist.', 127, $this->source); })())], "method", false, false, false, 127), "html", null, true);
                yield "\" data-bs-toggle=\"tab\">";
                // line 128
                if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", ["icon"], "method", true, true, false, 128)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", ["icon"], "method", false, false, false, 128), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 129
                    yield "<twig:ea:Icon name=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", ["icon"], "method", false, false, false, 129), "html", null, true);
                    yield "\" class=\"tab-nav-item-icon\"/>";
                }
                // line 131
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "label", [], "any", false, false, false, 131), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 131, $this->source); })()), "i18n", [], "any", false, false, false, 131), "translationDomain", [], "any", false, false, false, 131));
                yield "

                        ";
                // line 133
                $context["tab_error_count"] = CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "getCustomOption", [(isset($context["tab_error_count_option_name"]) || array_key_exists("tab_error_count_option_name", $context) ? $context["tab_error_count_option_name"] : (function () { throw new RuntimeError('Variable "tab_error_count_option_name" does not exist.', 133, $this->source); })())], "method", false, false, false, 133);
                // line 134
                if (((isset($context["tab_error_count"]) || array_key_exists("tab_error_count", $context) ? $context["tab_error_count"] : (function () { throw new RuntimeError('Variable "tab_error_count" does not exist.', 134, $this->source); })()) > 0)) {
                    // line 135
                    yield "<span class=\"badge badge-danger\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.tab.error_badge_title", ["%count%" => (isset($context["tab_error_count"]) || array_key_exists("tab_error_count", $context) ? $context["tab_error_count"] : (function () { throw new RuntimeError('Variable "tab_error_count" does not exist.', 135, $this->source); })())], "EasyAdminBundle"), "html", null, true);
                    yield "\">";
                    // line 136
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tab_error_count"]) || array_key_exists("tab_error_count", $context) ? $context["tab_error_count"] : (function () { throw new RuntimeError('Variable "tab_error_count" does not exist.', 136, $this->source); })()), "html", null, true);
                    // line 137
                    yield "</span>";
                }
                // line 139
                yield "</a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tab'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            yield "        </ul>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 146
    public function macro_render_tab_group_open($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_tab_group_open"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_tab_group_open"));

            // line 147
            yield "    <div class=\"nav-tabs-custom form-tabs-content\">
        <div class=\"tab-content\">
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 151
    public function macro_render_tab_group_close($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_tab_group_close"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_tab_group_close"));

            // line 152
            yield "        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 156
    public function macro_render_tab_open($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_tab_open"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_tab_open"));

            // line 157
            yield "    ";
            $context["tab_id_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_ID");
            // line 158
            yield "    ";
            $context["tab_is_active_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_IS_ACTIVE");
            // line 159
            yield "
    <div id=\"";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 160, $this->source); })()), "getCustomOption", [(isset($context["tab_id_option_name"]) || array_key_exists("tab_id_option_name", $context) ? $context["tab_id_option_name"] : (function () { throw new RuntimeError('Variable "tab_id_option_name" does not exist.', 160, $this->source); })())], "method", false, false, false, 160), "html", null, true);
            yield "\" class=\"tab-pane ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 160, $this->source); })()), "getCustomOption", [(isset($context["tab_is_active_option_name"]) || array_key_exists("tab_is_active_option_name", $context) ? $context["tab_is_active_option_name"] : (function () { throw new RuntimeError('Variable "tab_is_active_option_name" does not exist.', 160, $this->source); })())], "method", false, false, false, 160)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "active";
            }
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 160, $this->source); })()), "cssClass", [], "any", false, false, false, 160), "html", null, true);
            yield "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 160, $this->source); })()), "getFormTypeOption", ["attr"], "method", false, false, false, 160));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html_attr");
                yield "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield ">
        ";
            // line 161
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 161, $this->source); })()), "help", [], "any", false, false, false, 161)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 162
                yield "            <div class=\"content-header-help tab-help\">
                ";
                // line 163
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 163, $this->source); })()), "help", [], "any", false, false, false, 163), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 163, $this->source); })()), "i18n", [], "any", false, false, false, 163), "translationDomain", [], "any", false, false, false, 163));
                yield "
            </div>
        ";
            }
            // line 166
            yield "
        <div class=\"row\">
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 170
    public function macro_render_tab_close($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_tab_close"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_tab_close"));

            // line 171
            yield "        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 175
    public function macro_render_column_group_open($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_column_group_open"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_column_group_open"));

            // line 176
            yield "    ";
            // line 177
            yield "    ";
            if ((($tmp =  !((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getFormTypeOption", ["ea_is_inside_tab"], "method", true, true, false, 177)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 177, $this->source); })()), "getFormTypeOption", ["ea_is_inside_tab"], "method", false, false, false, 177), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 178
                yield "        <div class=\"row\">
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 182
    public function macro_render_column_group_close($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_column_group_close"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_column_group_close"));

            // line 183
            yield "    ";
            // line 184
            yield "    ";
            if ((($tmp =  !((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getFormTypeOption", ["ea_is_inside_tab"], "method", true, true, false, 184)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 184, $this->source); })()), "getFormTypeOption", ["ea_is_inside_tab"], "method", false, false, false, 184), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 185
                yield "        </div>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 189
    public function macro_render_column_open($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_column_open"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_column_open"));

            // line 190
            yield "    ";
            $context["field_icon"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 190, $this->source); })()), "getCustomOption", ["icon"], "method", false, false, false, 190);
            // line 191
            yield "    ";
            $context["column_has_title"] = ((((((isset($context["field_icon"]) || array_key_exists("field_icon", $context) ? $context["field_icon"] : (function () { throw new RuntimeError('Variable "field_icon" does not exist.', 191, $this->source); })()) != null) || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 191, $this->source); })()), "label", [], "any", false, false, false, 191) != false)) || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 191, $this->source); })()), "label", [], "any", false, false, false, 191) != null)) || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 191, $this->source); })()), "label", [], "any", false, false, false, 191) != "")) || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 191, $this->source); })()), "help", [], "any", false, false, false, 191) != null));
            // line 192
            yield "
    <div class=\"form-column ";
            // line 193
            yield (((($tmp =  !(isset($context["column_has_title"]) || array_key_exists("column_has_title", $context) ? $context["column_has_title"] : (function () { throw new RuntimeError('Variable "column_has_title" does not exist.', 193, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("form-column-no-header") : (""));
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 193, $this->source); })()), "cssClass", [], "any", false, false, false, 193), "html", null, true);
            yield "\">
        ";
            // line 194
            if ((($tmp = (isset($context["column_has_title"]) || array_key_exists("column_has_title", $context) ? $context["column_has_title"] : (function () { throw new RuntimeError('Variable "column_has_title" does not exist.', 194, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 195
                yield "            <div class=\"form-column-title\">
                <div class=\"form-column-title-content\">
                    ";
                // line 197
                if ((($tmp = (isset($context["field_icon"]) || array_key_exists("field_icon", $context) ? $context["field_icon"] : (function () { throw new RuntimeError('Variable "field_icon" does not exist.', 197, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<twig:ea:Icon name=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["field_icon"]) || array_key_exists("field_icon", $context) ? $context["field_icon"] : (function () { throw new RuntimeError('Variable "field_icon" does not exist.', 197, $this->source); })()), "html", null, true);
                    yield "\" class=\"form-column-icon\" />";
                }
                // line 198
                yield "                    ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 198, $this->source); })()), "label", [], "any", false, false, false, 198)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 198, $this->source); })()), "label", [], "any", false, false, false, 198), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 198, $this->source); })()), "i18n", [], "any", false, false, false, 198), "translationDomain", [], "any", false, false, false, 198));
                }
                // line 199
                yield "                </div>

                ";
                // line 201
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 201, $this->source); })()), "help", [], "any", false, false, false, 201)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 202
                    yield "                    <div class=\"form-column-help\">";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 202, $this->source); })()), "help", [], "any", false, false, false, 202), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 202, $this->source); })()), "i18n", [], "any", false, false, false, 202), "translationDomain", [], "any", false, false, false, 202));
                    yield "</div>
                ";
                }
                // line 204
                yield "            </div>
        ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 208
    public function macro_render_column_close($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_column_close"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_column_close"));

            // line 209
            yield "    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 212
    public function macro_render_fieldset_open($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_fieldset_open"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_fieldset_open"));

            // line 213
            yield "    ";
            $context["fieldset_has_header"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 213, $this->source); })()), "label", [], "any", false, false, false, 213) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 213, $this->source); })()), "getCustomOption", ["icon"], "method", false, false, false, 213)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 213, $this->source); })()), "help", [], "any", false, false, false, 213));
            // line 214
            yield "    ";
            $context["is_collapsible_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_COLLAPSIBLE");
            // line 215
            yield "    ";
            $context["is_collapsed_option_name"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_COLLAPSED");
            // line 216
            yield "    ";
            $context["is_collapsible"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 216, $this->source); })()), "getCustomOption", [(isset($context["is_collapsible_option_name"]) || array_key_exists("is_collapsible_option_name", $context) ? $context["is_collapsible_option_name"] : (function () { throw new RuntimeError('Variable "is_collapsible_option_name" does not exist.', 216, $this->source); })())], "method", false, false, false, 216);
            // line 217
            yield "    ";
            $context["is_collapsed"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 217, $this->source); })()), "getCustomOption", [(isset($context["is_collapsed_option_name"]) || array_key_exists("is_collapsed_option_name", $context) ? $context["is_collapsed_option_name"] : (function () { throw new RuntimeError('Variable "is_collapsed_option_name" does not exist.', 217, $this->source); })())], "method", false, false, false, 217);
            // line 218
            yield "
    <div class=\"form-fieldset ";
            // line 219
            yield (((($tmp =  !(isset($context["fieldset_has_header"]) || array_key_exists("fieldset_has_header", $context) ? $context["fieldset_has_header"] : (function () { throw new RuntimeError('Variable "fieldset_has_header" does not exist.', 219, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("form-fieldset-no-header") : (""));
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 219, $this->source); })()), "cssClass", [], "any", false, false, false, 219), "html", null, true);
            yield "\">
        <fieldset>
            ";
            // line 221
            if ((($tmp = (isset($context["fieldset_has_header"]) || array_key_exists("fieldset_has_header", $context) ? $context["fieldset_has_header"] : (function () { throw new RuntimeError('Variable "fieldset_has_header" does not exist.', 221, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 222
                yield "                <div class=\"form-fieldset-header ";
                yield (((($tmp = (isset($context["is_collapsible"]) || array_key_exists("is_collapsible", $context) ? $context["is_collapsible"] : (function () { throw new RuntimeError('Variable "is_collapsible" does not exist.', 222, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapsible") : (""));
                yield " ";
                yield (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 222, $this->source); })()), "help", [], "any", false, false, false, 222))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("with-help") : (""));
                yield "\">
                    <div class=\"form-fieldset-title\">
                        ";
                // line 224
                $context["fieldset_title_contents"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 225
                    yield "                            ";
                    if ((($tmp = (isset($context["is_collapsible"]) || array_key_exists("is_collapsible", $context) ? $context["is_collapsible"] : (function () { throw new RuntimeError('Variable "is_collapsible" does not exist.', 225, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 226
                        yield "                                <twig:ea:Icon name=\"internal:chevron-right\" class=\"form-fieldset-collapse-marker\"/>
                            ";
                    }
                    // line 228
                    yield "
                            ";
                    // line 229
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 229, $this->source); })()), "getCustomOption", ["icon"], "method", false, false, false, 229)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 230
                        yield "                                <twig:ea:Icon name=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 230, $this->source); })()), "getCustomOption", ["icon"], "method", false, false, false, 230), "html", null, true);
                        yield "\" class=\"form-fieldset-icon\" />
                            ";
                    }
                    // line 232
                    yield "
                            ";
                    // line 233
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 233, $this->source); })()), "label", [], "any", false, false, false, 233));
                    yield "
                        ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 235
                yield "
                        ";
                // line 236
                if ((($tmp = (isset($context["is_collapsible"]) || array_key_exists("is_collapsible", $context) ? $context["is_collapsible"] : (function () { throw new RuntimeError('Variable "is_collapsible" does not exist.', 236, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 237
                    yield "                            <a href=\"#content-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 237, $this->source); })()), "propertyNameWithSuffix", [], "any", false, false, false, 237), "html", null, true);
                    yield "\" data-bs-toggle=\"collapse\"
                               class=\"form-fieldset-title-content form-fieldset-collapse ";
                    // line 238
                    yield (((($tmp = (isset($context["is_collapsed"]) || array_key_exists("is_collapsed", $context) ? $context["is_collapsed"] : (function () { throw new RuntimeError('Variable "is_collapsed" does not exist.', 238, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapsed") : (""));
                    yield "\"
                               aria-expanded=\"";
                    // line 239
                    yield (((($tmp = (isset($context["is_collapsed"]) || array_key_exists("is_collapsed", $context) ? $context["is_collapsed"] : (function () { throw new RuntimeError('Variable "is_collapsed" does not exist.', 239, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("false") : ("true"));
                    yield "\" aria-controls=\"content-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 239, $this->source); })()), "propertyNameWithSuffix", [], "any", false, false, false, 239), "html", null, true);
                    yield "\">
                                ";
                    // line 240
                    yield (isset($context["fieldset_title_contents"]) || array_key_exists("fieldset_title_contents", $context) ? $context["fieldset_title_contents"] : (function () { throw new RuntimeError('Variable "fieldset_title_contents" does not exist.', 240, $this->source); })());
                    yield "
                            </a>
                        ";
                } else {
                    // line 243
                    yield "                            <span class=\"not-collapsible form-fieldset-title-content\">
                                ";
                    // line 244
                    yield (isset($context["fieldset_title_contents"]) || array_key_exists("fieldset_title_contents", $context) ? $context["fieldset_title_contents"] : (function () { throw new RuntimeError('Variable "fieldset_title_contents" does not exist.', 244, $this->source); })());
                    yield "
                            </span>
                        ";
                }
                // line 247
                yield "
                        ";
                // line 248
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 248, $this->source); })()), "help", [], "any", false, false, false, 248)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 249
                    yield "                            <div class=\"form-fieldset-help\">";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 249, $this->source); })()), "help", [], "any", false, false, false, 249));
                    yield "</div>
                        ";
                }
                // line 251
                yield "                    </div>
                </div>
            ";
            }
            // line 254
            yield "
            <div id=\"content-";
            // line 255
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 255, $this->source); })()), "propertyNameWithSuffix", [], "any", false, false, false, 255), "html", null, true);
            yield "\" class=\"form-fieldset-body ";
            yield (((($tmp =  !(isset($context["fieldset_has_header"]) || array_key_exists("fieldset_has_header", $context) ? $context["fieldset_has_header"] : (function () { throw new RuntimeError('Variable "fieldset_has_header" does not exist.', 255, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("without-header") : (""));
            yield " ";
            yield (((($tmp = (isset($context["is_collapsible"]) || array_key_exists("is_collapsible", $context) ? $context["is_collapsible"] : (function () { throw new RuntimeError('Variable "is_collapsible" does not exist.', 255, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapse") : (""));
            yield " ";
            yield (((($tmp =  !(isset($context["is_collapsed"]) || array_key_exists("is_collapsed", $context) ? $context["is_collapsed"] : (function () { throw new RuntimeError('Variable "is_collapsed" does not exist.', 255, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
            yield "\">
                <div class=\"row\">
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 259
    public function macro_render_fieldset_close($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_fieldset_close"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_fieldset_close"));

            // line 260
            yield "                </div>
            </div>
        </fieldset>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 267
    public function macro_render_detail_fields_with_tabs($entity = null, $field_layout = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "entity" => $entity,
            "field_layout" => $field_layout,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_detail_fields_with_tabs"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_detail_fields_with_tabs"));

            // line 268
            yield "    ";
            trigger_deprecation('', '', "The \"render_detail_fields_with_tabs\" macro is deprecated because the layout building logic has been revamped for the \"detail\" page. Check EasyAdmin's `detail.html.page` for more details."." in \"@EasyAdmin/crud/detail.html.twig\" at line 268.");
            // line 269
            yield "
    <div class=\"col-12\">
        <div class=\"nav-tabs-custom form-tabs\">
            <ul class=\"nav nav-tabs\">
                ";
            // line 273
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field_layout"]) || array_key_exists("field_layout", $context) ? $context["field_layout"] : (function () { throw new RuntimeError('Variable "field_layout" does not exist.', 273, $this->source); })()), "tabs", [], "any", false, false, false, 273));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 274
                yield "                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
                // line 275
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 275)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "active";
                }
                yield "\" href=\"#tab-pane-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "uniqueId", [], "any", false, false, false, 275), "html", null, true);
                yield "\" id=\"tab-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "uniqueId", [], "any", false, false, false, 275), "html", null, true);
                yield "\" data-bs-toggle=\"tab\">";
                // line 276
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "customOption", ["icon"], "method", false, false, false, 276)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 277
                    yield "<twig:ea:Icon name=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "customOption", ["icon"], "method", false, false, false, 277), "html", null, true);
                    yield "\" />";
                }
                // line 279
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "label", [], "any", false, false, false, 279), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 279, $this->source); })()), "i18n", [], "any", false, false, false, 279), "translationDomain", [], "any", false, false, false, 279));
                yield "
                        </a>
                    </li>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 283
            yield "            </ul>
            <div class=\"tab-content\">
                ";
            // line 285
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field_layout"]) || array_key_exists("field_layout", $context) ? $context["field_layout"] : (function () { throw new RuntimeError('Variable "field_layout" does not exist.', 285, $this->source); })()), "tabs", [], "any", false, false, false, 285));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 286
                yield "                    <div id=\"tab-pane-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "uniqueId", [], "any", false, false, false, 286), "html", null, true);
                yield "\" class=\"tab-pane ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 286)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "active";
                }
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "cssClass", [], "any", true, true, false, 286)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "cssClass", [], "any", false, false, false, 286), "")) : ("")), "html", null, true);
                yield "\">
                        ";
                // line 287
                if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "help", [], "any", true, true, false, 287)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "help", [], "any", false, false, false, 287), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 288
                    yield "                            <div class=\"content-header-help tab-help\">
                                ";
                    // line 289
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "help", [], "any", false, false, false, 289), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 289, $this->source); })()), "i18n", [], "any", false, false, false, 289), "translationDomain", [], "any", false, false, false, 289));
                    yield "
                            </div>
                        ";
                }
                // line 292
                yield "                        <div class=\"row\">
                            ";
                // line 293
                yield $this->getTemplateForMacro("macro_render_detail_fields", $context, 293, $this->getSourceContext())->macro_render_detail_fields(...[(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 293, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field_layout"]) || array_key_exists("field_layout", $context) ? $context["field_layout"] : (function () { throw new RuntimeError('Variable "field_layout" does not exist.', 293, $this->source); })()), "fieldsInTab", [CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "uniqueId", [], "any", false, false, false, 293)], "method", false, false, false, 293)]);
                yield "
                        </div>
                    </div>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 297
            yield "            </div>
        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 302
    public function macro_render_detail_fields($entity = null, $fields = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "entity" => $entity,
            "fields" => $fields,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_detail_fields"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_detail_fields"));

            // line 303
            yield "    ";
            trigger_deprecation('', '', "The \"render_detail_fields\" macro is deprecated because the layout building logic has been revamped for the \"detail\" page. Check EasyAdmin's `detail.html.page` for more details."." in \"@EasyAdmin/crud/detail.html.twig\" at line 303.");
            // line 304
            yield "
    ";
            // line 305
            $context["form_fieldset_is_already_open"] = false;
            // line 306
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 306, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 307
                yield "        ";
                $context["is_form_fieldset"] = CoreExtension::inFilter("field-form_fieldset", CoreExtension::getAttribute($this->env, $this->source, $context["field"], "cssClass", [], "any", false, false, false, 307));
                // line 308
                yield "
        ";
                // line 309
                if (((isset($context["is_form_fieldset"]) || array_key_exists("is_form_fieldset", $context) ? $context["is_form_fieldset"] : (function () { throw new RuntimeError('Variable "is_form_fieldset" does not exist.', 309, $this->source); })()) || (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 309) &&  !(isset($context["is_form_fieldset"]) || array_key_exists("is_form_fieldset", $context) ? $context["is_form_fieldset"] : (function () { throw new RuntimeError('Variable "is_form_fieldset" does not exist.', 309, $this->source); })())))) {
                    // line 310
                    yield "            ";
                    if ((($tmp = (isset($context["form_fieldset_is_already_open"]) || array_key_exists("form_fieldset_is_already_open", $context) ? $context["form_fieldset_is_already_open"] : (function () { throw new RuntimeError('Variable "form_fieldset_is_already_open" does not exist.', 310, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 311
                        yield "                ";
                        yield $this->getTemplateForMacro("macro_close_form_fieldset", $context, 311, $this->getSourceContext())->macro_close_form_fieldset(...[]);
                        yield "
                ";
                        // line 312
                        $context["form_fieldset_is_already_open"] = false;
                        // line 313
                        yield "            ";
                    }
                    // line 314
                    yield "
            ";
                    // line 315
                    yield $this->getTemplateForMacro("macro_open_form_fieldset", $context, 315, $this->getSourceContext())->macro_open_form_fieldset(...[(((($tmp = (isset($context["is_form_fieldset"]) || array_key_exists("is_form_fieldset", $context) ? $context["is_form_fieldset"] : (function () { throw new RuntimeError('Variable "is_form_fieldset" does not exist.', 315, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($context["field"]) : (null))]);
                    yield "
            ";
                    // line 316
                    $context["form_fieldset_is_already_open"] = true;
                    // line 317
                    yield "        ";
                }
                // line 318
                yield "
        ";
                // line 319
                yield from $this->unwrap()->yieldBlock('detail_field', $context, $blocks);
                // line 324
                yield "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 325
            yield "
    ";
            // line 326
            if ((($tmp = (isset($context["form_fieldset_is_already_open"]) || array_key_exists("form_fieldset_is_already_open", $context) ? $context["form_fieldset_is_already_open"] : (function () { throw new RuntimeError('Variable "form_fieldset_is_already_open" does not exist.', 326, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 327
                yield "        ";
                yield $this->getTemplateForMacro("macro_close_form_fieldset", $context, 327, $this->getSourceContext())->macro_close_form_fieldset(...[]);
                yield "
        ";
                // line 328
                $context["form_fieldset_is_already_open"] = false;
                // line 329
                yield "    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 332
    public function macro_open_form_fieldset($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "open_form_fieldset"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "open_form_fieldset"));

            // line 333
            yield "    ";
            trigger_deprecation('', '', "The \"open_form_fieldset\" macro is deprecated because the layout building logic has been revamped for the \"detail\" page. Check EasyAdmin's `detail.html.page` for more details."." in \"@EasyAdmin/crud/detail.html.twig\" at line 333.");
            // line 334
            yield "
    ";
            // line 335
            $context["fieldset_name"] = (((null === (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 335, $this->source); })()))) ? (null) : (("content-" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 335, $this->source); })()), "uniqueId", [], "any", false, false, false, 335))));
            // line 336
            yield "    ";
            $context["collapsible"] = (((null === (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 336, $this->source); })()))) ? (false) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 336, $this->source); })()), "customOption", ["collapsible"], "method", false, false, false, 336)));
            // line 337
            yield "    ";
            $context["collapsed"] = (((null === (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 337, $this->source); })()))) ? (false) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 337, $this->source); })()), "customOption", ["collapsed"], "method", false, false, false, 337)));
            // line 338
            yield "    ";
            $context["fieldset_icon"] = (((null === (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 338, $this->source); })()))) ? (null) : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, true, false, 338), "get", ["icon"], "method", true, true, false, 338)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 338, $this->source); })()), "customOptions", [], "any", false, false, false, 338), "get", ["icon"], "method", false, false, false, 338), false)) : (false))));
            // line 339
            yield "    ";
            $context["fieldset_label"] = (((null === (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 339, $this->source); })()))) ? (null) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 339, $this->source); })()), "label", [], "any", false, false, false, 339)));
            // line 340
            yield "    ";
            $context["fieldset_help"] = (((null === (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 340, $this->source); })()))) ? (null) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", true, true, false, 340)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 340, $this->source); })()), "help", [], "any", false, false, false, 340), false)) : (false))));
            // line 341
            yield "    ";
            $context["fieldset_has_header"] = ((((isset($context["collapsible"]) || array_key_exists("collapsible", $context) ? $context["collapsible"] : (function () { throw new RuntimeError('Variable "collapsible" does not exist.', 341, $this->source); })()) || (isset($context["fieldset_icon"]) || array_key_exists("fieldset_icon", $context) ? $context["fieldset_icon"] : (function () { throw new RuntimeError('Variable "fieldset_icon" does not exist.', 341, $this->source); })())) || (isset($context["fieldset_label"]) || array_key_exists("fieldset_label", $context) ? $context["fieldset_label"] : (function () { throw new RuntimeError('Variable "fieldset_label" does not exist.', 341, $this->source); })())) || (isset($context["fieldset_help"]) || array_key_exists("fieldset_help", $context) ? $context["fieldset_help"] : (function () { throw new RuntimeError('Variable "fieldset_help" does not exist.', 341, $this->source); })()));
            // line 342
            yield "
    <div class=\"";
            // line 343
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", true, true, false, 343) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 343, $this->source); })()), "cssClass", [], "any", false, false, false, 343)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 343, $this->source); })()), "cssClass", [], "any", false, false, false, 343), "html", null, true)) : (""));
            yield "\">
        <div class=\"form-fieldset\">
            ";
            // line 345
            if ((($tmp = (isset($context["fieldset_has_header"]) || array_key_exists("fieldset_has_header", $context) ? $context["fieldset_has_header"] : (function () { throw new RuntimeError('Variable "fieldset_has_header" does not exist.', 345, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 346
                yield "                <div class=\"form-fieldset-header ";
                yield (((($tmp = (isset($context["collapsible"]) || array_key_exists("collapsible", $context) ? $context["collapsible"] : (function () { throw new RuntimeError('Variable "collapsible" does not exist.', 346, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapsible") : (""));
                yield " ";
                yield (((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["fieldset_help"]) || array_key_exists("fieldset_help", $context) ? $context["fieldset_help"] : (function () { throw new RuntimeError('Variable "fieldset_help" does not exist.', 346, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("with-help") : (""));
                yield "\">
                    <div class=\"form-fieldset-title\">
                        <a ";
                // line 348
                if ((($tmp =  !(isset($context["collapsible"]) || array_key_exists("collapsible", $context) ? $context["collapsible"] : (function () { throw new RuntimeError('Variable "collapsible" does not exist.', 348, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 349
                    yield "                            href=\"#\" class=\"not-collapsible\"
                        ";
                } else {
                    // line 351
                    yield "                            href=\"#";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["fieldset_name"]) || array_key_exists("fieldset_name", $context) ? $context["fieldset_name"] : (function () { throw new RuntimeError('Variable "fieldset_name" does not exist.', 351, $this->source); })()), "html", null, true);
                    yield "\" data-bs-toggle=\"collapse\"
                            class=\"form-fieldset-collapse ";
                    // line 352
                    yield (((($tmp = (isset($context["collapsed"]) || array_key_exists("collapsed", $context) ? $context["collapsed"] : (function () { throw new RuntimeError('Variable "collapsed" does not exist.', 352, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapsed") : (""));
                    yield "\"
                            aria-expanded=\"";
                    // line 353
                    yield (((($tmp = (isset($context["collapsed"]) || array_key_exists("collapsed", $context) ? $context["collapsed"] : (function () { throw new RuntimeError('Variable "collapsed" does not exist.', 353, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("false") : ("true"));
                    yield "\" aria-controls=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["fieldset_name"]) || array_key_exists("fieldset_name", $context) ? $context["fieldset_name"] : (function () { throw new RuntimeError('Variable "fieldset_name" does not exist.', 353, $this->source); })()), "html", null, true);
                    yield "\"
                        ";
                }
                // line 355
                yield "                        >
                            ";
                // line 356
                if ((($tmp = (isset($context["collapsible"]) || array_key_exists("collapsible", $context) ? $context["collapsible"] : (function () { throw new RuntimeError('Variable "collapsible" does not exist.', 356, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 357
                    yield "                                <twig:ea:Icon name=\"internal:chevron-right\" class=\"form-fieldset-collapse-marker\"/>
                            ";
                }
                // line 359
                yield "
                            ";
                // line 360
                if ((($tmp = (isset($context["fieldset_icon"]) || array_key_exists("fieldset_icon", $context) ? $context["fieldset_icon"] : (function () { throw new RuntimeError('Variable "fieldset_icon" does not exist.', 360, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 361
                    yield "                                <twig:ea:Icon name=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["fieldset_icon"]) || array_key_exists("fieldset_icon", $context) ? $context["fieldset_icon"] : (function () { throw new RuntimeError('Variable "fieldset_icon" does not exist.', 361, $this->source); })()), "html", null, true);
                    yield "\" class=\"form-fieldset-icon\" />
                            ";
                }
                // line 363
                yield "                            ";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["fieldset_label"]) || array_key_exists("fieldset_label", $context) ? $context["fieldset_label"] : (function () { throw new RuntimeError('Variable "fieldset_label" does not exist.', 363, $this->source); })()));
                yield "
                        </a>

                        ";
                // line 366
                if ((($tmp = (isset($context["fieldset_help"]) || array_key_exists("fieldset_help", $context) ? $context["fieldset_help"] : (function () { throw new RuntimeError('Variable "fieldset_help" does not exist.', 366, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 367
                    yield "                            <div class=\"form-fieldset-help\">";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["fieldset_help"]) || array_key_exists("fieldset_help", $context) ? $context["fieldset_help"] : (function () { throw new RuntimeError('Variable "fieldset_help" does not exist.', 367, $this->source); })()));
                    yield "</div>
                        ";
                }
                // line 369
                yield "                    </div>
                </div>
            ";
            }
            // line 372
            yield "
            <div ";
            // line 373
            if ((($tmp = (isset($context["fieldset_name"]) || array_key_exists("fieldset_name", $context) ? $context["fieldset_name"] : (function () { throw new RuntimeError('Variable "fieldset_name" does not exist.', 373, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["fieldset_name"]) || array_key_exists("fieldset_name", $context) ? $context["fieldset_name"] : (function () { throw new RuntimeError('Variable "fieldset_name" does not exist.', 373, $this->source); })()), "html", null, true);
                yield "\"";
            }
            yield " class=\"form-fieldset-body ";
            yield (((($tmp = (isset($context["collapsible"]) || array_key_exists("collapsible", $context) ? $context["collapsible"] : (function () { throw new RuntimeError('Variable "collapsible" does not exist.', 373, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("collapse") : (""));
            yield " ";
            yield (((($tmp =  !(isset($context["collapsed"]) || array_key_exists("collapsed", $context) ? $context["collapsed"] : (function () { throw new RuntimeError('Variable "collapsed" does not exist.', 373, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
            yield "\">
                <dl class=\"datalist\">
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 377
    public function macro_close_form_fieldset(...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "close_form_fieldset"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "close_form_fieldset"));

            // line 378
            yield "    ";
            trigger_deprecation('', '', "The \"close_form_fieldset\" macro is deprecated because the layout building logic has been revamped for the \"detail\" page. Check EasyAdmin's `detail.html.page` for more details."." in \"@EasyAdmin/crud/detail.html.twig\" at line 378.");
            // line 379
            yield "
            </dl>
        </div>
    </div>
</div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 386
    public function macro_render_field($entity = null, $field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "entity" => $entity,
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_field"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_field"));

            // line 387
            yield "    ";
            trigger_deprecation('', '', "The \"render_field\" macro is deprecated because the layout building logic has been revamped for the \"detail\" page. Check EasyAdmin's `detail.html.page` for more details."." in \"@EasyAdmin/crud/detail.html.twig\" at line 387.");
            // line 388
            yield "
    <div class=\"data-row ";
            // line 389
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 389, $this->source); })()), "cssClass", [], "any", false, false, false, 389), "html", null, true);
            yield "\">
        <dt>
            ";
            // line 391
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 391, $this->source); })()), "label", [], "any", false, false, false, 391));
            yield "

            ";
            // line 393
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 393, $this->source); })()), "help", [], "any", false, false, false, 393))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 394
                yield "                <a tabindex=\"0\" class=\"data-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"right\" data-bs-trigger=\"focus\" data-bs-content=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 394, $this->source); })()), "help", [], "any", false, false, false, 394)), "html_attr");
                yield "\">
                    <twig:ea:Icon name=\"internal:circle-info\" />
                </a>
            ";
            }
            // line 398
            yield "        </dt>
        <dd>
            ";
            // line 400
            yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 400, $this->source); })()), "templatePath", [], "any", false, false, false, 400), ["field" => (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 400, $this->source); })()), "entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 400, $this->source); })())], false);
            yield "
        </dd>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/detail.html.twig";
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
        return array (  1830 => 400,  1826 => 398,  1818 => 394,  1816 => 393,  1811 => 391,  1806 => 389,  1803 => 388,  1800 => 387,  1781 => 386,  1764 => 379,  1761 => 378,  1744 => 377,  1721 => 373,  1718 => 372,  1713 => 369,  1707 => 367,  1705 => 366,  1698 => 363,  1692 => 361,  1690 => 360,  1687 => 359,  1683 => 357,  1681 => 356,  1678 => 355,  1671 => 353,  1667 => 352,  1662 => 351,  1658 => 349,  1656 => 348,  1648 => 346,  1646 => 345,  1641 => 343,  1638 => 342,  1635 => 341,  1632 => 340,  1629 => 339,  1626 => 338,  1623 => 337,  1620 => 336,  1618 => 335,  1615 => 334,  1612 => 333,  1594 => 332,  1581 => 329,  1579 => 328,  1574 => 327,  1572 => 326,  1569 => 325,  1555 => 324,  1553 => 319,  1550 => 318,  1547 => 317,  1545 => 316,  1541 => 315,  1538 => 314,  1535 => 313,  1533 => 312,  1528 => 311,  1525 => 310,  1523 => 309,  1520 => 308,  1517 => 307,  1499 => 306,  1497 => 305,  1494 => 304,  1491 => 303,  1472 => 302,  1457 => 297,  1439 => 293,  1436 => 292,  1430 => 289,  1427 => 288,  1425 => 287,  1414 => 286,  1397 => 285,  1393 => 283,  1375 => 279,  1370 => 277,  1368 => 276,  1359 => 275,  1356 => 274,  1339 => 273,  1333 => 269,  1330 => 268,  1311 => 267,  1295 => 260,  1277 => 259,  1256 => 255,  1253 => 254,  1248 => 251,  1242 => 249,  1240 => 248,  1237 => 247,  1231 => 244,  1228 => 243,  1222 => 240,  1216 => 239,  1212 => 238,  1207 => 237,  1205 => 236,  1202 => 235,  1196 => 233,  1193 => 232,  1187 => 230,  1185 => 229,  1182 => 228,  1178 => 226,  1175 => 225,  1173 => 224,  1165 => 222,  1163 => 221,  1156 => 219,  1153 => 218,  1150 => 217,  1147 => 216,  1144 => 215,  1141 => 214,  1138 => 213,  1120 => 212,  1107 => 209,  1089 => 208,  1075 => 204,  1069 => 202,  1067 => 201,  1063 => 199,  1058 => 198,  1052 => 197,  1048 => 195,  1046 => 194,  1040 => 193,  1037 => 192,  1034 => 191,  1031 => 190,  1013 => 189,  999 => 185,  996 => 184,  994 => 183,  976 => 182,  962 => 178,  959 => 177,  957 => 176,  939 => 175,  925 => 171,  907 => 170,  893 => 166,  887 => 163,  884 => 162,  882 => 161,  860 => 160,  857 => 159,  854 => 158,  851 => 157,  833 => 156,  819 => 152,  801 => 151,  787 => 147,  769 => 146,  755 => 142,  747 => 139,  744 => 137,  742 => 136,  738 => 135,  736 => 134,  734 => 133,  729 => 131,  724 => 129,  722 => 128,  713 => 127,  710 => 126,  706 => 125,  701 => 122,  698 => 121,  695 => 120,  692 => 119,  674 => 118,  658 => 114,  656 => 113,  651 => 112,  649 => 111,  644 => 110,  642 => 109,  637 => 108,  635 => 107,  630 => 106,  628 => 105,  623 => 104,  621 => 103,  616 => 102,  614 => 101,  609 => 100,  607 => 99,  602 => 98,  600 => 97,  595 => 96,  593 => 95,  588 => 94,  585 => 93,  567 => 92,  551 => 87,  547 => 85,  540 => 81,  535 => 80,  529 => 76,  525 => 74,  523 => 73,  521 => 72,  519 => 71,  516 => 70,  514 => 68,  512 => 67,  495 => 66,  476 => 65,  465 => 323,  459 => 321,  456 => 320,  443 => 319,  429 => 61,  416 => 60,  405 => 58,  399 => 57,  393 => 55,  387 => 53,  384 => 52,  379 => 51,  366 => 50,  355 => 60,  352 => 59,  349 => 50,  336 => 49,  318 => 45,  313 => 44,  300 => 43,  289 => 40,  288 => 39,  287 => 38,  285 => 37,  272 => 36,  259 => 33,  255 => 32,  250 => 31,  237 => 30,  224 => 27,  220 => 26,  215 => 25,  202 => 24,  184 => 20,  180 => 19,  175 => 18,  162 => 17,  144 => 13,  140 => 12,  135 => 11,  122 => 10,  99 => 6,  76 => 5,  66 => 3,  64 => 8,  51 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{# @var entity \\EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto #}
{% extends ea.templatePath('layout') %}

{% block body_id 'ea-detail-' ~ entity.name ~ '-' ~ entity.primaryKeyValue %}
{% block body_class 'ea-detail ea-detail-' ~ entity.name %}

{% set ea_field_assets = ea.crud.fieldAssets(constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Config\\\\Crud::PAGE_DETAIL')) %}

{% block configured_head_contents %}
    {{ parent() }}
    {% for htmlContent in ea_field_assets.headContents %}
        {{ htmlContent|raw }}
    {% endfor %}
{% endblock %}

{% block configured_body_contents %}
    {{ parent() }}
    {% for htmlContent in ea_field_assets.bodyContents %}
        {{ htmlContent|raw }}
    {% endfor %}
{% endblock %}

{% block configured_stylesheets %}
    {{ parent() }}
    {{ include('@EasyAdmin/includes/_css_assets.html.twig', { assets: ea_field_assets.cssAssets }, with_context = false) }}
    {{ include('@EasyAdmin/includes/_encore_link_tags.html.twig', { assets: ea_field_assets.webpackEncoreAssets }, with_context = false) }}
{% endblock %}

{% block configured_javascripts %}
    {{ parent() }}
    {{ include('@EasyAdmin/includes/_js_assets.html.twig', { assets: ea_field_assets.jsAssets }, with_context = false) }}
    {{ include('@EasyAdmin/includes/_encore_script_tags.html.twig', { assets: ea_field_assets.webpackEncoreAssets }, with_context = false) }}
{% endblock %}

{% block content_title %}
    {%- set custom_page_title = ea.crud.customPageTitle(pageName, entity ? entity.instance : null, ea.i18n.translationParameters, ea.i18n.translationDomain) -%}
    {{- custom_page_title is null
        ? ea.crud.defaultPageTitle(null, null, ea.i18n.translationParameters)|trans|raw
        : custom_page_title|trans|raw -}}
{% endblock %}

{% block page_actions %}
    {% for action in entity.actions %}
        {{ include(action.templatePath, { action: action }, with_context = false) }}
    {% endfor %}
{% endblock %}

{% block main %}
    {% block detail_fields %}
        {% for field in entity.fields %}
            {% if field.isFormLayoutField %}
                {{ _self.render_layout_field(field) }}
            {% else %}
                {{ _self.render_field_contents(entity, field) }}
            {% endif %}
        {% endfor %}
    {% endblock detail_fields %}

    {% block delete_form %}
        {{ include('@EasyAdmin/crud/includes/_delete_form.html.twig', { entity_id: entity.primaryKeyValue }, with_context = false) }}
    {% endblock delete_form %}
{% endblock %}

{% macro render_field_contents(entity, field) %}
    <div class=\"field-group {{ field.cssClass }}\" {% for name, value in field.htmlAttributes %}{{ name }}=\"{{ value|e('html_attr') }}\" {% endfor %}>
        {% if field.label is same as (false) %}
            {# a FALSE label value means that the field doesn't even display the <label> element;
               use an empty string to not display a label but keep the <label> element to not mess with the layout #}
        {% else %}
            <div class=\"field-label\">
                {%- set label_html_attributes -%}
                    {%- if field.help is not empty -%}
                        data-bs-toggle=\"tooltip\" data-bs-placement=\"auto\" data-bs-animation=\"false\"
                        data-bs-html=\"true\" data-bs-custom-class=\"ea-detail-label-tooltip\"
                        data-bs-title=\"{{ field.help|trans|e('html_attr') }}\"
                    {%- endif -%}
                {%- endset -%}

                <div {{ label_html_attributes }}>
                    {{ field.label|trans|raw }}
                </div>
            </div>
        {% endif %}

        <div class=\"field-value\">
            {{ include(field.templatePath, { field: field, entity: entity }, with_context = false) }}
        </div>
    </div>
{% endmacro %}

{% macro render_layout_field(field) %}
    {% if field.formType == 'EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Form\\\\Type\\\\Layout\\\\EaFormTabListType' %}
        {{ _self.render_tab_list(field) }}
    {% elseif field.formType == 'EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Form\\\\Type\\\\Layout\\\\EaFormTabPaneGroupOpenType' %}
        {{ _self.render_tab_group_open(field) }}
    {% elseif field.formType == 'EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Form\\\\Type\\\\Layout\\\\EaFormTabPaneGroupCloseType' %}
        {{ _self.render_tab_group_close(field) }}
    {% elseif field.formType == 'EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Form\\\\Type\\\\Layout\\\\EaFormTabPaneOpenType' %}
        {{ _self.render_tab_open(field) }}
    {% elseif field.formType == 'EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Form\\\\Type\\\\Layout\\\\EaFormTabPaneCloseType' %}
        {{ _self.render_tab_close(field) }}
    {% elseif field.formType == 'EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Form\\\\Type\\\\Layout\\\\EaFormColumnGroupOpenType' %}
        {{ _self.render_column_group_open(field) }}
    {% elseif field.formType == 'EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Form\\\\Type\\\\Layout\\\\EaFormColumnGroupCloseType' %}
        {{ _self.render_column_group_close(field) }}
    {% elseif field.formType == 'EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Form\\\\Type\\\\Layout\\\\EaFormColumnOpenType' %}
        {{ _self.render_column_open(field) }}
    {% elseif field.formType == 'EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Form\\\\Type\\\\Layout\\\\EaFormColumnCloseType' %}
        {{ _self.render_column_close(field) }}
    {% elseif field.formType == 'EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Form\\\\Type\\\\Layout\\\\EaFormFieldsetOpenType' %}
        {{ _self.render_fieldset_open(field) }}
    {% elseif field.formType == 'EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Form\\\\Type\\\\Layout\\\\EaFormFieldsetCloseType' %}
        {{ _self.render_fieldset_close(field) }}
    {% endif %}
{% endmacro %}

{% macro render_tab_list(field) %}
    {% set tab_id_option_name = constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Field\\\\FormField::OPTION_TAB_ID') %}
    {% set tab_is_active_option_name = constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Field\\\\FormField::OPTION_TAB_IS_ACTIVE') %}
    {% set tab_error_count_option_name = constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Field\\\\FormField::OPTION_TAB_ERROR_COUNT') %}

    <div class=\"nav-tabs-custom form-tabs-tablist\">
        <ul class=\"nav nav-tabs\">
            {% for tab in field.getCustomOption('tabs') %}
                <li class=\"nav-item\">
                    <a class=\"nav-link {% if tab.getCustomOption(tab_is_active_option_name) %}active{% endif %}\" href=\"#{{ tab.getCustomOption(tab_id_option_name) }}\" id=\"tablist-{{ tab.getCustomOption(tab_id_option_name) }}\" data-bs-toggle=\"tab\">
                        {%- if tab.getCustomOption('icon')|default(false) -%}
                            <twig:ea:Icon name=\"{{ tab.getCustomOption('icon') }}\" class=\"tab-nav-item-icon\"/>
                        {%- endif -%}
                        {{ tab.label|trans(domain = ea.i18n.translationDomain)|raw }}

                        {% set tab_error_count = tab.getCustomOption(tab_error_count_option_name)  %}
                        {%- if tab_error_count > 0 -%}
                            <span class=\"badge badge-danger\" title=\"{{ 'form.tab.error_badge_title'|trans({'%count%': tab_error_count}, 'EasyAdminBundle') }}\">
                                {{- tab_error_count -}}
                            </span>
                        {%- endif -%}
                    </a>
                </li>
            {% endfor %}
        </ul>
    </div>
{% endmacro %}

{% macro render_tab_group_open(field) %}
    <div class=\"nav-tabs-custom form-tabs-content\">
        <div class=\"tab-content\">
{% endmacro %}

{% macro render_tab_group_close(field) %}
        </div>
    </div>
{% endmacro %}

{% macro render_tab_open(field) %}
    {% set tab_id_option_name = constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Field\\\\FormField::OPTION_TAB_ID') %}
    {% set tab_is_active_option_name = constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Field\\\\FormField::OPTION_TAB_IS_ACTIVE') %}

    <div id=\"{{ field.getCustomOption(tab_id_option_name) }}\" class=\"tab-pane {% if field.getCustomOption(tab_is_active_option_name) %}active{% endif %} {{ field.cssClass }}\" {% for key, value in field.getFormTypeOption('attr') %}{{ key }}=\"{{ value|e('html_attr') }}\"{% endfor %}>
        {% if field.help %}
            <div class=\"content-header-help tab-help\">
                {{ field.help|trans(domain = ea.i18n.translationDomain)|raw }}
            </div>
        {% endif %}

        <div class=\"row\">
{% endmacro %}

{% macro render_tab_close(field) %}
        </div>
    </div>
{% endmacro %}

{% macro render_column_group_open(field) %}
    {# if columns are inside tabs, don't add a '.row' element because the tab pane already opens it #}
    {% if not field.getFormTypeOption('ea_is_inside_tab')|default(false) %}
        <div class=\"row\">
    {% endif %}
{% endmacro %}

{% macro render_column_group_close(field) %}
    {# if columns are inside tabs, don't add a '.row' element because the tab pane already opens it #}
    {% if not field.getFormTypeOption('ea_is_inside_tab')|default(false) %}
        </div>
    {% endif %}
{% endmacro %}

{% macro render_column_open(field) %}
    {% set field_icon = field.getCustomOption('icon') %}
    {% set column_has_title = field_icon != null or field.label != false or field.label != null or field.label != '' or field.help != null %}

    <div class=\"form-column {{ not column_has_title ? 'form-column-no-header' }} {{ field.cssClass }}\">
        {% if column_has_title %}
            <div class=\"form-column-title\">
                <div class=\"form-column-title-content\">
                    {% if field_icon %}<twig:ea:Icon name=\"{{ field_icon }}\" class=\"form-column-icon\" />{% endif %}
                    {% if field.label %}{{ field.label|trans(domain = ea.i18n.translationDomain)|raw }}{% endif %}
                </div>

                {% if field.help %}
                    <div class=\"form-column-help\">{{ field.help|trans(domain = ea.i18n.translationDomain)|raw }}</div>
                {% endif %}
            </div>
        {% endif %}
{% endmacro %}

{% macro render_column_close(field) %}
    </div>
{% endmacro %}

{% macro render_fieldset_open(field) %}
    {% set fieldset_has_header = field.label or field.getCustomOption('icon') or field.help %}
    {% set is_collapsible_option_name = constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Field\\\\FormField::OPTION_COLLAPSIBLE') %}
    {% set is_collapsed_option_name = constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Field\\\\FormField::OPTION_COLLAPSED') %}
    {% set is_collapsible = field.getCustomOption(is_collapsible_option_name) %}
    {% set is_collapsed = field.getCustomOption(is_collapsed_option_name) %}

    <div class=\"form-fieldset {{ not fieldset_has_header ? 'form-fieldset-no-header' }} {{ field.cssClass }}\">
        <fieldset>
            {% if fieldset_has_header %}
                <div class=\"form-fieldset-header {{ is_collapsible ? 'collapsible' }} {{ field.help is not empty ? 'with-help' }}\">
                    <div class=\"form-fieldset-title\">
                        {% set fieldset_title_contents %}
                            {% if is_collapsible %}
                                <twig:ea:Icon name=\"internal:chevron-right\" class=\"form-fieldset-collapse-marker\"/>
                            {% endif %}

                            {% if field.getCustomOption('icon') %}
                                <twig:ea:Icon name=\"{{ field.getCustomOption('icon') }}\" class=\"form-fieldset-icon\" />
                            {% endif %}

                            {{ field.label|trans|raw }}
                        {% endset %}

                        {% if is_collapsible %}
                            <a href=\"#content-{{ field.propertyNameWithSuffix }}\" data-bs-toggle=\"collapse\"
                               class=\"form-fieldset-title-content form-fieldset-collapse {{ is_collapsed ? 'collapsed' }}\"
                               aria-expanded=\"{{ is_collapsed ? 'false' : 'true' }}\" aria-controls=\"content-{{ field.propertyNameWithSuffix }}\">
                                {{ fieldset_title_contents|raw }}
                            </a>
                        {% else %}
                            <span class=\"not-collapsible form-fieldset-title-content\">
                                {{ fieldset_title_contents|raw }}
                            </span>
                        {% endif %}

                        {% if field.help %}
                            <div class=\"form-fieldset-help\">{{ field.help|trans|raw }}</div>
                        {% endif %}
                    </div>
                </div>
            {% endif %}

            <div id=\"content-{{ field.propertyNameWithSuffix }}\" class=\"form-fieldset-body {{ not fieldset_has_header ? 'without-header' }} {{ is_collapsible ? 'collapse' }} {{ not is_collapsed ? 'show'}}\">
                <div class=\"row\">
{% endmacro %}

{% macro render_fieldset_close(field) %}
                </div>
            </div>
        </fieldset>
    </div>
{% endmacro %}


{% macro render_detail_fields_with_tabs(entity, field_layout) %}
    {% deprecated 'The \"render_detail_fields_with_tabs\" macro is deprecated because the layout building logic has been revamped for the \"detail\" page. Check EasyAdmin\\'s `detail.html.page` for more details.' %}

    <div class=\"col-12\">
        <div class=\"nav-tabs-custom form-tabs\">
            <ul class=\"nav nav-tabs\">
                {% for tab in field_layout.tabs %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link {% if loop.first %}active{% endif %}\" href=\"#tab-pane-{{ tab.uniqueId }}\" id=\"tab-{{ tab.uniqueId }}\" data-bs-toggle=\"tab\">
                            {%- if tab.customOption('icon') -%}
                                <twig:ea:Icon name=\"{{ tab.customOption('icon') }}\" />
                            {%- endif -%}
                            {{ tab.label|trans(domain = ea.i18n.translationDomain)|raw }}
                        </a>
                    </li>
                {% endfor %}
            </ul>
            <div class=\"tab-content\">
                {% for tab in field_layout.tabs %}
                    <div id=\"tab-pane-{{ tab.uniqueId }}\" class=\"tab-pane {% if loop.first %}active{% endif %} {{ tab.cssClass|default('') }}\">
                        {% if tab.help|default(false) %}
                            <div class=\"content-header-help tab-help\">
                                {{ tab.help|trans(domain = ea.i18n.translationDomain)|raw }}
                            </div>
                        {% endif %}
                        <div class=\"row\">
                            {{ _self.render_detail_fields(entity, field_layout.fieldsInTab(tab.uniqueId)) }}
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>
{% endmacro %}

{% macro render_detail_fields(entity, fields) %}
    {% deprecated 'The \"render_detail_fields\" macro is deprecated because the layout building logic has been revamped for the \"detail\" page. Check EasyAdmin\\'s `detail.html.page` for more details.' %}

    {% set form_fieldset_is_already_open = false %}
    {% for field in fields %}
        {% set is_form_fieldset = 'field-form_fieldset' in field.cssClass %}

        {% if is_form_fieldset or (loop.first and not is_form_fieldset) %}
            {% if form_fieldset_is_already_open %}
                {{ _self.close_form_fieldset() }}
                {% set form_fieldset_is_already_open = false %}
            {% endif %}

            {{ _self.open_form_fieldset(is_form_fieldset ? field : null) }}
            {% set form_fieldset_is_already_open = true %}
        {% endif %}

        {% block detail_field %}
            {% if not is_form_fieldset %}
                {{ _self.render_field(entity, field) }}
            {% endif %}
        {% endblock %}
    {% endfor %}

    {% if form_fieldset_is_already_open %}
        {{ _self.close_form_fieldset() }}
        {% set form_fieldset_is_already_open = false %}
    {% endif %}
{% endmacro %}

{% macro open_form_fieldset(field = null) %}
    {% deprecated 'The \"open_form_fieldset\" macro is deprecated because the layout building logic has been revamped for the \"detail\" page. Check EasyAdmin\\'s `detail.html.page` for more details.' %}

    {% set fieldset_name = field is null ? null : 'content-' ~ field.uniqueId %}
    {% set collapsible = field is null ? false : field.customOption('collapsible') %}
    {% set collapsed = field is null ? false : field.customOption('collapsed') %}
    {% set fieldset_icon = field is null ? null : (field.customOptions.get('icon')|default(false)) %}
    {% set fieldset_label = field is null ? null : field.label %}
    {% set fieldset_help = field is null ? null : field.help|default(false)%}
    {% set fieldset_has_header = collapsible or fieldset_icon or fieldset_label or fieldset_help %}

    <div class=\"{{ field.cssClass ?? '' }}\">
        <div class=\"form-fieldset\">
            {% if fieldset_has_header %}
                <div class=\"form-fieldset-header {{ collapsible ? 'collapsible' }} {{ fieldset_help is not empty ? 'with-help' }}\">
                    <div class=\"form-fieldset-title\">
                        <a {% if not collapsible %}
                            href=\"#\" class=\"not-collapsible\"
                        {% else %}
                            href=\"#{{ fieldset_name }}\" data-bs-toggle=\"collapse\"
                            class=\"form-fieldset-collapse {{ collapsed ? 'collapsed' }}\"
                            aria-expanded=\"{{ collapsed ? 'false' : 'true' }}\" aria-controls=\"{{ fieldset_name }}\"
                        {% endif %}
                        >
                            {% if collapsible %}
                                <twig:ea:Icon name=\"internal:chevron-right\" class=\"form-fieldset-collapse-marker\"/>
                            {% endif %}

                            {% if fieldset_icon %}
                                <twig:ea:Icon name=\"{{ fieldset_icon }}\" class=\"form-fieldset-icon\" />
                            {% endif %}
                            {{ fieldset_label|trans|raw }}
                        </a>

                        {% if fieldset_help %}
                            <div class=\"form-fieldset-help\">{{ fieldset_help|trans|raw }}</div>
                        {% endif %}
                    </div>
                </div>
            {% endif %}

            <div {% if fieldset_name %}id=\"{{ fieldset_name }}\"{% endif %} class=\"form-fieldset-body {{ collapsible ? 'collapse' }} {{ not collapsed ? 'show'}}\">
                <dl class=\"datalist\">
{% endmacro %}

{% macro close_form_fieldset() %}
    {% deprecated 'The \"close_form_fieldset\" macro is deprecated because the layout building logic has been revamped for the \"detail\" page. Check EasyAdmin\\'s `detail.html.page` for more details.' %}

            </dl>
        </div>
    </div>
</div>
{% endmacro %}

{% macro render_field(entity, field) %}
    {% deprecated 'The \"render_field\" macro is deprecated because the layout building logic has been revamped for the \"detail\" page. Check EasyAdmin\\'s `detail.html.page` for more details.' %}

    <div class=\"data-row {{ field.cssClass }}\">
        <dt>
            {{ field.label|trans|raw }}

            {% if field.help is not empty %}
                <a tabindex=\"0\" class=\"data-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"right\" data-bs-trigger=\"focus\" data-bs-content=\"{{ field.help|trans|e('html_attr') }}\">
                    <twig:ea:Icon name=\"internal:circle-info\" />
                </a>
            {% endif %}
        </dt>
        <dd>
            {{ include(field.templatePath, { field: field, entity: entity }, with_context = false) }}
        </dd>
    </div>
{% endmacro %}
", "@EasyAdmin/crud/detail.html.twig", "C:\\Users\\erika\\Desktop\\diet-coupart\\diet-project\\vendor\\easycorp\\easyadmin-bundle\\templates\\crud\\detail.html.twig");
    }
}
