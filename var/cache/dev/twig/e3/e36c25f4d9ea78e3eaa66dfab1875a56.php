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

/* lucky/number.html.twig */
class __TwigTemplate_df723dedcf5bf728d06b2ca3de7c2cfb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lucky/number.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lucky/number.html.twig"));

        // line 1
        yield "<h1>Your lucky number is ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["number"]) || array_key_exists("number", $context) ? $context["number"] : (function () { throw new RuntimeError('Variable "number" does not exist.', 1, $this->source); })()), "html", null, true);
        yield "</h1>

<br> <h1>projectDir:</h1> ";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["project_dir"]) || array_key_exists("project_dir", $context) ? $context["project_dir"] : (function () { throw new RuntimeError('Variable "project_dir" does not exist.', 3, $this->source); })()), "html", null, true);
        yield "
<br><br>

Route : ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "current_route", [], "any", false, false, false, 6), "html", null, true);
        yield "

<br>
Login URL:
";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        yield "

<script>
    const route = \"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_index", ["title" => "my-blog-post"]), "js"), "html", null, true);
        yield "\";
    console.log(\"Blog URL: \" + route);
</script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "lucky/number.html.twig";
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
        return array (  73 => 13,  67 => 10,  60 => 6,  54 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<h1>Your lucky number is {{ number }}</h1>

<br> <h1>projectDir:</h1> {{ project_dir }}
<br><br>

Route : {{app.current_route}}

<br>
Login URL:
{{ path('login') }}

<script>
    const route = \"{{ path('blog_index', {title: 'my-blog-post'})|escape('js') }}\";
    console.log(\"Blog URL: \" + route);
</script>", "lucky/number.html.twig", "/var/www/html/templates/lucky/number.html.twig");
    }
}
