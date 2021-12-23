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

/* articles/index.html.twig */
class __TwigTemplate_05f1e1720c7902b58ddf9d9082ed070f4463e476fa170e20ac5f0d9fbb82f443 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "articles/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Liste des Articles";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), 'form_start');
        echo "

    <div class=\"form-row align-items-end\" >
        <div class=\"col\">
            ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "nom", [], "any", false, false, false, 9), 'row');
        echo "
        </div>
        <div class=\"col\">
            <div class=\"form-group\">
                  <button type=\"submit\" class=\"btn btn-success\">Rechercher</button>
            </div>
        </div>
    </div>
    ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'form_end');
        echo "


    ";
        // line 20
        if ((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 20, $this->source); })())) {
            // line 21
            echo "        <table id=\"articles\" class=\"table table-striped\">
            <thead>
            <tr>
                <th>Nom</th>
                <th>Prix</th>
                <th>Categorie</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 31, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 32
                echo "                <tr>
                    <td>";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nom", [], "any", false, false, false, 33), "html", null, true);
                echo "</td>
                    <td>";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "prix", [], "any", false, false, false, 34), "html", null, true);
                echo "</td>
                    <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "categorie", [], "any", false, false, false, 35), "titre", [], "any", false, false, false, 35), "html", null, true);
                echo "</td>



                    <td>
                        <a href=\"/copie/public/index.php/article/";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 40), "html", null, true);
                echo "\" class=\"btn btn-primary\">Détails</a>
                        <a href=\"/copie/public/index.php/article/edit/";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 41), "html", null, true);
                echo "\" class=\"btn btn-dark\">Modifier</a>
                        <a href=\"/copie/public/index.php/article/delete/";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 42), "html", null, true);
                echo "\" class=\"btn btn-danger\"
                           onclick=\"return confirm('Etes-vous sûr de supprimer cet article?');\">Supprimer</a>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 50
            echo "        <p>Aucun articles</p>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "articles/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 50,  169 => 47,  158 => 42,  154 => 41,  150 => 40,  142 => 35,  138 => 34,  134 => 33,  131 => 32,  127 => 31,  115 => 21,  113 => 20,  107 => 17,  96 => 9,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title%} Liste des Articles{% endblock %}

{% block body %}
    {{ form_start(form) }}

    <div class=\"form-row align-items-end\" >
        <div class=\"col\">
            {{ form_row(form.nom) }}
        </div>
        <div class=\"col\">
            <div class=\"form-group\">
                  <button type=\"submit\" class=\"btn btn-success\">Rechercher</button>
            </div>
        </div>
    </div>
    {{ form_end(form) }}


    {% if articles %}
        <table id=\"articles\" class=\"table table-striped\">
            <thead>
            <tr>
                <th>Nom</th>
                <th>Prix</th>
                <th>Categorie</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            {% for article in articles %}
                <tr>
                    <td>{{ article.nom }}</td>
                    <td>{{ article.prix }}</td>
                    <td>{{ article.categorie.titre }}</td>



                    <td>
                        <a href=\"/copie/public/index.php/article/{{ article.id }}\" class=\"btn btn-primary\">Détails</a>
                        <a href=\"/copie/public/index.php/article/edit/{{ article.id }}\" class=\"btn btn-dark\">Modifier</a>
                        <a href=\"/copie/public/index.php/article/delete/{{ article.id }}\" class=\"btn btn-danger\"
                           onclick=\"return confirm('Etes-vous sûr de supprimer cet article?');\">Supprimer</a>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    {% else %}
        <p>Aucun articles</p>
    {% endif %}
{% endblock %}", "articles/index.html.twig", "C:\\xampp\\htdocs\\untitled\\templates\\articles\\index.html.twig");
    }
}
