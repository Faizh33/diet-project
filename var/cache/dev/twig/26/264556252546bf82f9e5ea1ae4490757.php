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

/* @EasyAdmin/components/Alert.html.twig */
class __TwigTemplate_4b0268d7a6e1650fd6e72b9d853f4661 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/components/Alert.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/components/Alert.html.twig"));

        // line 1
        yield "<div ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 1, $this->source); })()), "defaults", [["class" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 1, $this->source); })()), "defaultCssClass", [], "method", false, false, false, 1), "role" => "alert"]], "method", false, false, false, 1), "html", null, true);
        yield ">
    <twig:block name=\"content\"></twig:block>

    ";
        // line 4
        if ((($tmp = (isset($context["withDismissButton"]) || array_key_exists("withDismissButton", $context) ? $context["withDismissButton"] : (function () { throw new RuntimeError('Variable "withDismissButton" does not exist.', 4, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            yield "        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    ";
        }
        // line 7
        yield "</div>
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
        return "@EasyAdmin/components/Alert.html.twig";
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
        return array (  61 => 7,  57 => 5,  55 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div {{ attributes.defaults({class: this.defaultCssClass(), role: 'alert'}) }}>
    <twig:block name=\"content\"></twig:block>

    {% if withDismissButton %}
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    {% endif %}
</div>
", "@EasyAdmin/components/Alert.html.twig", "C:\\Users\\erika\\Desktop\\diet-coupart\\diet-project\\vendor\\easycorp\\easyadmin-bundle\\templates\\components\\Alert.html.twig");
    }
}
