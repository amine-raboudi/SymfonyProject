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

/* home/index.html.twig */
class __TwigTemplate_9f770f4cad96526ac27947f8f1fb1bd0339d15aeef77d723b6fcab0cd722e2cf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">

    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6\" crossorigin=\"anonymous\">



    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "</head>


";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 65
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "<nav class=\"navbar navbar-expand-sm bg-primary navbar-dark\">
    <div class=\"container\" >



        <div class=\"collapse navbar-collapse\" id=\"mobile-nav\">
            <ul class=\"navbar-nav\">
                <li class=\"nav-link active\">
                    <a href=\"";
        // line 26
        echo "http://localhost:8000/home";
        echo "\"  class=\"nav-link active\"> Home</a>
                </li>


                <li class=\"nav-link active\">
                    <a href=\"";
        // line 31
        echo "http://localhost:8000/cart/";
        echo "\" class=\"nav-link active\">Votre Panier</a>
                </li>
            </ul>
            <form class=\"form-inline my-2 my-lg-0\">
                <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                <button class=\"btn btn-outline-light\" type=\"submit\" >Search</button>
            </form>
        </div>

        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#mobile-nav\">
            <span class=\"navbar-toggle-icon\"></span>
        </button>
    </div>
</nav>



    <section class=\"w-25 p-3\">
        <h1>Les articles</h1>
    </section>

    <section class=\"row\">
        ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 53, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 54
            echo "            <div class=\"col-3 mt-3\">
                <div class=\"border border-dark rounded p-2 clearfix\">
                    <h2>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "nom", [], "any", false, false, false, 56), "html", null, true);
            echo "</h2>
                    <p>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "prix", [], "any", false, false, false, 57), "html", null, true);
            echo " €</p>
                    <img class=\"w-50 p-3\" src=\"";
            // line 58
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/") . twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 58)), "html", null, true);
            echo "\" alt=\"Image de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "nom", [], "any", false, false, false, 58), "html", null, true);
            echo "\">

                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  179 => 63,  166 => 58,  162 => 57,  158 => 56,  154 => 54,  150 => 53,  125 => 31,  117 => 26,  107 => 18,  97 => 17,  79 => 13,  68 => 65,  66 => 17,  61 => 14,  59 => 13,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">

    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6\" crossorigin=\"anonymous\">



    {% block stylesheets %}{% endblock %}
</head>


{% block body %}
<nav class=\"navbar navbar-expand-sm bg-primary navbar-dark\">
    <div class=\"container\" >



        <div class=\"collapse navbar-collapse\" id=\"mobile-nav\">
            <ul class=\"navbar-nav\">
                <li class=\"nav-link active\">
                    <a href=\"{{ \"http://localhost:8000/home\"}}\"  class=\"nav-link active\"> Home</a>
                </li>


                <li class=\"nav-link active\">
                    <a href=\"{{ \"http://localhost:8000/cart/\"}}\" class=\"nav-link active\">Votre Panier</a>
                </li>
            </ul>
            <form class=\"form-inline my-2 my-lg-0\">
                <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                <button class=\"btn btn-outline-light\" type=\"submit\" >Search</button>
            </form>
        </div>

        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#mobile-nav\">
            <span class=\"navbar-toggle-icon\"></span>
        </button>
    </div>
</nav>



    <section class=\"w-25 p-3\">
        <h1>Les articles</h1>
    </section>

    <section class=\"row\">
        {% for product in article %}
            <div class=\"col-3 mt-3\">
                <div class=\"border border-dark rounded p-2 clearfix\">
                    <h2>{{ product.nom }}</h2>
                    <p>{{ product.prix }} €</p>
                    <img class=\"w-50 p-3\" src=\"{{ asset('uploads/') ~ product.image }}\" alt=\"Image de {{ product.nom }}\">

                </div>
            </div>
        {% endfor %}
    </section>
{% endblock %}

", "home/index.html.twig", "C:\\xampp\\htdocs\\symfony-project-master\\templates\\home\\index.html.twig");
    }
}
