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

/* account/index.html.twig */
class __TwigTemplate_dd0f3821633f5c141ca571f405b4922dcd6b30b9960cc874ea0d471c46497668 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Home</title>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
    <link rel=\"stylesheet\" href=\"css/style.css\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "</head>
";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
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

    // line 18
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "    <nav class=\"navbar navbar-expand-sm bg-dark navbar-dark\">
        <div class=\"container\" >
            <div class=\"collapse navbar-collapse\" id=\"mobile-nav\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-link active\">
                        <a href=\"";
        // line 24
        echo "http://localhost:8000/home";
        echo "\"  class=\"nav-link active\"> Home</a>
                    </li>
                    <li class=\"nav-link active\">
                        <a href=\"";
        // line 27
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
            <a class=\"btn btn-outline-light\" href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Log Out</a>
        </div>
    </nav>
    <section class=\"row\">
        <div class=\"row\">
        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 45
            echo "            <div class=\"col-3 mt-3\">
                <div class=\"border border-dark rounded p-2 clearfix\">
                    <h2 style=\"color: darkblue \">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "nom", [], "any", false, false, false, 47), "html", null, true);
            echo "</h2>
                    <hr>
                    <img class=\"w-75 p-3\" src=\"";
            // line 49
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/") . twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 49)), "html", null, true);
            echo "\" alt=\"Image de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "nom", [], "any", false, false, false, 49), "html", null, true);
            echo "\">
                    <hr>
                    <h4 style=\"color: red\">";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "prix", [], "any", false, false, false, 51), "html", null, true);
            echo " €</h4>
                    <hr>
                    <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\" class=\"btn btn-success\">
                        <i class=\"bi bi-cart-plus\"></i> Ajouter
                    </a>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "    </div>
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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "account/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  178 => 59,  166 => 53,  161 => 51,  154 => 49,  149 => 47,  145 => 45,  141 => 44,  133 => 39,  118 => 27,  112 => 24,  105 => 19,  95 => 18,  77 => 16,  67 => 18,  64 => 17,  62 => 16,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Home</title>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
    <link rel=\"stylesheet\" href=\"css/style.css\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    {% block stylesheets %}{% endblock %}
</head>
{% block body %}
    <nav class=\"navbar navbar-expand-sm bg-dark navbar-dark\">
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
            <a class=\"btn btn-outline-light\" href=\"{{ path('app_logout') }}\">Log Out</a>
        </div>
    </nav>
    <section class=\"row\">
        <div class=\"row\">
        {% for product in article %}
            <div class=\"col-3 mt-3\">
                <div class=\"border border-dark rounded p-2 clearfix\">
                    <h2 style=\"color: darkblue \">{{ product.nom }}</h2>
                    <hr>
                    <img class=\"w-75 p-3\" src=\"{{ asset('uploads/') ~ product.image }}\" alt=\"Image de {{ product.nom }}\">
                    <hr>
                    <h4 style=\"color: red\">{{ product.prix }} €</h4>
                    <hr>
                    <a href=\"{{path(\"cart_add\", {id: product.id})}}\" class=\"btn btn-success\">
                        <i class=\"bi bi-cart-plus\"></i> Ajouter
                    </a>
                </div>
            </div>
        {% endfor %}
    </div>
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
{% endblock %}
", "account/index.html.twig", "C:\\xampp\\htdocs\\symfony-project-master\\templates\\account\\index.html.twig");
    }
}
