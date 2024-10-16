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

/* author/list.html.twig */
class __TwigTemplate_0d8f637e79930a1b14c1e5c08d83cc02 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "author/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "author/list.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Author List</title>
    <style>
        /* Base styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #E5D9F2;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column; /* Align items in column */
        }

        h1 {
            color: #A594F9;
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        li {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 15px;
            text-align: center;
            width: 250px;
            transition: transform 0.3s;
        }

        li:hover {
            transform: translateY(-10px);
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

        p:first-of-type {
            font-weight: bold;
            color: #A594F9;
        }

        /* Styles for the button */
        .btn {
            background-color: #A594F9;
            color: white;
            border: none;
            border-radius: 3px; /* Reduced border radius */
            padding: 5px 10px; /* Smaller padding */
            font-size: 0.9rem; /* Smaller font size */
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
            margin-top: 20px;
        }

        .btn:hover {
            background-color: #E5D9F2;
            color: #A594F9;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div>
        <h1>List of Authors</h1>
        ";
        // line 92
        if ((array_key_exists("authors", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["authors"]) || array_key_exists("authors", $context) ? $context["authors"] : (function () { throw new RuntimeError('Variable "authors" does not exist.', 92, $this->source); })())) > 0))) {
            // line 93
            yield "            <p class=\"total\">Click the button below  the know more Details  </p>

            ";
            // line 95
            $context["totalBooks"] = 0;
            // line 96
            yield "         <ul>
    ";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["authors"]) || array_key_exists("authors", $context) ? $context["authors"] : (function () { throw new RuntimeError('Variable "authors" does not exist.', 97, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
                // line 98
                yield "        <li>
            <a href=\"";
                // line 99
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("author_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["author"], "id", [], "any", false, false, false, 99)]), "html", null, true);
                yield "\">
                <img src=\"";
                // line 100
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["author"], "picture", [], "any", false, false, false, 100)), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["author"], "username", [], "any", false, false, false, 100), "html", null, true);
                yield "\" width=\"100\" height=\"100\">
                <p>Author Name: ";
                // line 101
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["author"], "username", [], "any", false, false, false, 101)), "html", null, true);
                yield "</p>
                <p>Contact Email: ";
                // line 102
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["author"], "email", [], "any", false, false, false, 102), "html", null, true);
                yield "</p>
                <p>Total Books Written: ";
                // line 103
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["author"], "nbBooks", [], "any", false, false, false, 103), "html", null, true);
                yield "</p>
            </a>
        </li>
        ";
                // line 106
                $context["totalBooks"] = ((isset($context["totalBooks"]) || array_key_exists("totalBooks", $context) ? $context["totalBooks"] : (function () { throw new RuntimeError('Variable "totalBooks" does not exist.', 106, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["author"], "nbBooks", [], "any", false, false, false, 106));
                // line 107
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['author'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            yield "</ul>

           

            <button class=\"btn\" onclick=\"showCounts()\">Click me !!!</button>
          <p id=\"counts\" style=\"display: none;\" class=\"total\"></p>



        ";
        } else {
            // line 118
            yield "            <p class=\"no-authors\">No authors available at the moment.</p>
        ";
        }
        // line 120
        yield "    </div>

    <script>
       function showCounts() {
            // Get the total number of authors and books from Twig variables
            const totalAuthors = ";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["authors"]) || array_key_exists("authors", $context) ? $context["authors"] : (function () { throw new RuntimeError('Variable "authors" does not exist.', 125, $this->source); })())), "html", null, true);
        yield ";
            const totalBooks = ";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalBooks"]) || array_key_exists("totalBooks", $context) ? $context["totalBooks"] : (function () { throw new RuntimeError('Variable "totalBooks" does not exist.', 126, $this->source); })()), "html", null, true);
        yield ";

            // Display the counts in the counts paragraph
            document.getElementById('counts').innerText = `Total Authors: \${totalAuthors}, Total Books: \${totalBooks}`;
            document.getElementById('counts').style.display = 'block'; // Make it visible
            countsParagraph.className = 'total'; // Add the class 'total'
            countsParagraph.style.display = 'block'; // Make it visible
        }
    </script>
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
        return "author/list.html.twig";
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
        return array (  218 => 126,  214 => 125,  207 => 120,  203 => 118,  191 => 108,  185 => 107,  183 => 106,  177 => 103,  173 => 102,  169 => 101,  163 => 100,  159 => 99,  156 => 98,  152 => 97,  149 => 96,  147 => 95,  143 => 93,  141 => 92,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Author List</title>
    <style>
        /* Base styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #E5D9F2;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column; /* Align items in column */
        }

        h1 {
            color: #A594F9;
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        li {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 15px;
            text-align: center;
            width: 250px;
            transition: transform 0.3s;
        }

        li:hover {
            transform: translateY(-10px);
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

        p:first-of-type {
            font-weight: bold;
            color: #A594F9;
        }

        /* Styles for the button */
        .btn {
            background-color: #A594F9;
            color: white;
            border: none;
            border-radius: 3px; /* Reduced border radius */
            padding: 5px 10px; /* Smaller padding */
            font-size: 0.9rem; /* Smaller font size */
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
            margin-top: 20px;
        }

        .btn:hover {
            background-color: #E5D9F2;
            color: #A594F9;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div>
        <h1>List of Authors</h1>
        {% if authors is defined and authors|length > 0 %}
            <p class=\"total\">Click the button below  the know more Details  </p>

            {% set totalBooks = 0 %}
         <ul>
    {% for author in authors %}
        <li>
            <a href=\"{{ path('author_details', { 'id': author.id }) }}\">
                <img src=\"{{ asset(author.picture) }}\" alt=\"{{ author.username }}\" width=\"100\" height=\"100\">
                <p>Author Name: {{ author.username|upper }}</p>
                <p>Contact Email: {{ author.email }}</p>
                <p>Total Books Written: {{ author.nbBooks }}</p>
            </a>
        </li>
        {% set totalBooks = totalBooks + author.nbBooks %}
    {% endfor %}
</ul>

           

            <button class=\"btn\" onclick=\"showCounts()\">Click me !!!</button>
          <p id=\"counts\" style=\"display: none;\" class=\"total\"></p>



        {% else %}
            <p class=\"no-authors\">No authors available at the moment.</p>
        {% endif %}
    </div>

    <script>
       function showCounts() {
            // Get the total number of authors and books from Twig variables
            const totalAuthors = {{ authors|length }};
            const totalBooks = {{ totalBooks }};

            // Display the counts in the counts paragraph
            document.getElementById('counts').innerText = `Total Authors: \${totalAuthors}, Total Books: \${totalBooks}`;
            document.getElementById('counts').style.display = 'block'; // Make it visible
            countsParagraph.className = 'total'; // Add the class 'total'
            countsParagraph.style.display = 'block'; // Make it visible
        }
    </script>
</body>
</html>
", "author/list.html.twig", "C:\\Users\\21628\\Desktop\\symfony\\secondproject - Copie\\templates\\author\\list.html.twig");
    }
}
