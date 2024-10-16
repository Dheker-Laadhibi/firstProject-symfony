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

/* author/details.html.twig */
class __TwigTemplate_a17459f70b8f5a5803fed6d8bba85cf0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "author/details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "author/details.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Détails de l'Auteur</title>
    <style>
        /* Styles de base pour le détail de l'auteur */
        body {
            font-family: Arial, sans-serif;
            background-color: #E5D9F2;
            color: #333;
            padding: 20px;
        }
        h1 {
            color: #A594F9;
        }
        img {
            border-radius: 50%;
            margin-bottom: 15px;
        }
        p {
            margin: 5px 0;
            font-size: 1.1rem;
            color: #555;
        }
    </style>
</head>
<body>
    <h1>Détails de l'Auteur: ";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 30, $this->source); })()), "username", [], "any", false, false, false, 30)), "html", null, true);
        yield "</h1>
    <img src=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 31, $this->source); })()), "picture", [], "any", false, false, false, 31)), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 31, $this->source); })()), "username", [], "any", false, false, false, 31), "html", null, true);
        yield "\" width=\"200\" height=\"200\">
    <p>Email: ";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 32, $this->source); })()), "email", [], "any", false, false, false, 32), "html", null, true);
        yield "</p>
    <p>Total de Livres Écrits: ";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 33, $this->source); })()), "nb_books", [], "any", false, false, false, 33), "html", null, true);
        yield "</p>
    <a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("authorTable");
        yield "\">Retour à la liste des auteurs</a>
</body>
</html>
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
        return "author/details.html.twig";
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
        return array (  97 => 34,  93 => 33,  89 => 32,  83 => 31,  79 => 30,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Détails de l'Auteur</title>
    <style>
        /* Styles de base pour le détail de l'auteur */
        body {
            font-family: Arial, sans-serif;
            background-color: #E5D9F2;
            color: #333;
            padding: 20px;
        }
        h1 {
            color: #A594F9;
        }
        img {
            border-radius: 50%;
            margin-bottom: 15px;
        }
        p {
            margin: 5px 0;
            font-size: 1.1rem;
            color: #555;
        }
    </style>
</head>
<body>
    <h1>Détails de l'Auteur: {{ author.username|upper }}</h1>
    <img src=\"{{ asset(author.picture) }}\" alt=\"{{ author.username }}\" width=\"200\" height=\"200\">
    <p>Email: {{ author.email }}</p>
    <p>Total de Livres Écrits: {{ author.nb_books }}</p>
    <a href=\"{{ path('authorTable') }}\">Retour à la liste des auteurs</a>
</body>
</html>
", "author/details.html.twig", "C:\\Users\\21628\\Desktop\\symfony\\secondproject - Copie\\templates\\author\\details.html.twig");
    }
}
