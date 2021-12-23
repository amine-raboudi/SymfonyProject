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

/* article/index.html.twig */
class __TwigTemplate_285eb27782ae40fb3a8ce9973999dfacdf9e479c7d1ccc1e4c91b41d8d910b95 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "E-COMMERCE
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    <section  class=\"row\">

    </section>
    <section class=\"row\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 13
            echo "            <div class=\"col-3 mt-3\">
                <div class=\"border border-dark rounded p-2 clearfix\">
                    <h2 style=\"color: darkblue\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "nom", [], "any", false, false, false, 15), "html", null, true);
            echo "</h2>
                    <hr>
                    <img class=\"w-75 p-3\" src=\"";
            // line 17
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/") . twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 17)), "html", null, true);
            echo "\" alt=\"Image de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "nom", [], "any", false, false, false, 17), "html", null, true);
            echo "\">
                    <hr>
                    <h4 style=\"color: red\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "prix", [], "any", false, false, false, 19), "html", null, true);
            echo " €</h4>


                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </section>
    <footer class=\"bg-dark text-center text-white\">
        <!-- Grid container -->
        <div class=\"container p-4 pb-0\">
            <!-- Section: Social media -->
            <section class=\"mb-4\">
                <h4>Contact Us</h4>
                <!-- Facebook -->
                <a class=\"btn btn-outline-light btn-floating m-1\" href=\"#\" role=\"button\"
                ><i class=\"fa fa-facebook-f\" style=\"font-size:24px\"></i></a>

                <!-- Twitter -->
                <a class=\"btn btn-outline-light btn-floating m-1\" href=\"#\" role=\"button\"
                ><i class=\"fa fa-twitter\" style=\"font-size:24px\"></i></a>

                <!-- Google -->
                <a class=\"btn btn-outline-light btn-floating m-1\" href=\"#\" role=\"button\"
                ><i class=\"fa fa-google\" style=\"font-size:24px\"></i></a>

                <!-- Instagram -->
                <a class=\"btn btn-outline-light btn-floating m-1\" href=\"#\" role=\"button\"
                ><i class=\"fa fa-instagram\" style=\"font-size:24px\"></i></a>

                <!-- Github -->
                <a class=\"btn btn-outline-light btn-floating m-1\" href=\"#\" role=\"button\"
                ><i class=\"fa fa-github\" style=\"font-size:24px\"></i></a>
            </section>
            <!-- Section: Social media -->
        </div>
        <div class=\"row\">
            <div class=\"col-4\">
                <h3>What is E-commerce ?</h3>
                <p>
                    eCommerce is the buying and selling of goods and services online. The main root of the word “commerce” is defined as the exchange of goods and services between businesses, people, or entities.
                </p>
            </div>
            <div class=\"col-4\">
                <h3>Services</h3>

                <p >Web design</p>
                <p>Development</p>
                <p>Hosting</p>

            </div>
            <div class=\"col-4\">
                <h3 class=\"text-center\">About</h3>

                <p>Company</p>
                <p>Team</p>
                <p>Careers</p>

            </div>


        </div>
        <!-- Grid container -->

        <!-- Copyright -->

        <!-- Copyright -->
    </footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "article/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 25,  116 => 19,  109 => 17,  104 => 15,  100 => 13,  96 => 12,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}E-COMMERCE
{% endblock %}

{% block body %}

    <section  class=\"row\">

    </section>
    <section class=\"row\">
        {% for product in article %}
            <div class=\"col-3 mt-3\">
                <div class=\"border border-dark rounded p-2 clearfix\">
                    <h2 style=\"color: darkblue\">{{ product.nom }}</h2>
                    <hr>
                    <img class=\"w-75 p-3\" src=\"{{ asset('uploads/') ~ product.image }}\" alt=\"Image de {{ product.nom }}\">
                    <hr>
                    <h4 style=\"color: red\">{{ product.prix }} €</h4>


                </div>
            </div>
        {% endfor %}
    </section>
    <footer class=\"bg-dark text-center text-white\">
        <!-- Grid container -->
        <div class=\"container p-4 pb-0\">
            <!-- Section: Social media -->
            <section class=\"mb-4\">
                <h4>Contact Us</h4>
                <!-- Facebook -->
                <a class=\"btn btn-outline-light btn-floating m-1\" href=\"#\" role=\"button\"
                ><i class=\"fa fa-facebook-f\" style=\"font-size:24px\"></i></a>

                <!-- Twitter -->
                <a class=\"btn btn-outline-light btn-floating m-1\" href=\"#\" role=\"button\"
                ><i class=\"fa fa-twitter\" style=\"font-size:24px\"></i></a>

                <!-- Google -->
                <a class=\"btn btn-outline-light btn-floating m-1\" href=\"#\" role=\"button\"
                ><i class=\"fa fa-google\" style=\"font-size:24px\"></i></a>

                <!-- Instagram -->
                <a class=\"btn btn-outline-light btn-floating m-1\" href=\"#\" role=\"button\"
                ><i class=\"fa fa-instagram\" style=\"font-size:24px\"></i></a>

                <!-- Github -->
                <a class=\"btn btn-outline-light btn-floating m-1\" href=\"#\" role=\"button\"
                ><i class=\"fa fa-github\" style=\"font-size:24px\"></i></a>
            </section>
            <!-- Section: Social media -->
        </div>
        <div class=\"row\">
            <div class=\"col-4\">
                <h3>What is E-commerce ?</h3>
                <p>
                    eCommerce is the buying and selling of goods and services online. The main root of the word “commerce” is defined as the exchange of goods and services between businesses, people, or entities.
                </p>
            </div>
            <div class=\"col-4\">
                <h3>Services</h3>

                <p >Web design</p>
                <p>Development</p>
                <p>Hosting</p>

            </div>
            <div class=\"col-4\">
                <h3 class=\"text-center\">About</h3>

                <p>Company</p>
                <p>Team</p>
                <p>Careers</p>

            </div>


        </div>
        <!-- Grid container -->

        <!-- Copyright -->

        <!-- Copyright -->
    </footer>
{% endblock %}", "article/index.html.twig", "C:\\xampp\\htdocs\\symfony-project-master\\templates\\article\\index.html.twig");
    }
}
