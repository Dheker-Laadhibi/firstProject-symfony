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

/* author/affiche.html.twig */
class __TwigTemplate_e983ab19737312443da44918378f1ba7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "author/affiche.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "author/affiche.html.twig"));

        // line 1
        yield "<table>


<tr>
<td>ID</td>
<td>Username</td>
<td>Email</td>
<td>actions </td>
</tr>



";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["authors"]) || array_key_exists("authors", $context) ? $context["authors"] : (function () { throw new RuntimeError('Variable "authors" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
            // line 14
            yield "    <tr>
    <th>";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["author"], "id", [], "any", false, false, false, 15), "html", null, true);
            yield "</th>
    <th>";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["author"], "username", [], "any", false, false, false, 16), "html", null, true);
            yield "</th>
    <th>";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["author"], "email", [], "any", false, false, false, 17), "html", null, true);
            yield "</th>
<!-- Ajout d'un texte pour le lien d'édition -->
<td><a href=\"";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["author"], "id", [], "any", false, false, false, 19)]), "html", null, true);
            yield "\">Edit</a></td>
<td><a href=\"";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["author"], "id", [], "any", false, false, false, 20)]), "html", null, true);
            yield "\">Remove</a></td>
    
    </tr>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['author'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        yield "


</table>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "author/affiche.html.twig";
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
        return array (  97 => 25,  86 => 20,  82 => 19,  77 => 17,  73 => 16,  69 => 15,  66 => 14,  62 => 13,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<table>


<tr>
<td>ID</td>
<td>Username</td>
<td>Email</td>
<td>actions </td>
</tr>



{% for author in authors %}
    <tr>
    <th>{{author.id}}</th>
    <th>{{author.username}}</th>
    <th>{{author.email}}</th>
<!-- Ajout d'un texte pour le lien d'édition -->
<td><a href=\"{{ path('edit', {'id': author.id}) }}\">Edit</a></td>
<td><a href=\"{{ path('remove', {'id': author.id}) }}\">Remove</a></td>
    
    </tr>

{% endfor %}



</table>", "author/affiche.html.twig", "C:\\Users\\21628\\Desktop\\symfony\\secondproject - Copie\\templates\\author\\affiche.html.twig");
    }
}
