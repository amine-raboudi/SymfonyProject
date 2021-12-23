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

/* cart/index.html.twig */
class __TwigTemplate_ebfa0e542d53d2425ea917a60b104789a16ac491d32288c2bbe9d0f18dffb2a4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6\" crossorigin=\"anonymous\">
    <title>Panier</title>


    ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "</head>


";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
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
        // line 27
        echo "http://localhost:8000/home";
        echo "\"  class=\"nav-link active\"> Home</a>
                    </li>


                    <li class=\"nav-link active\">
                        <a href=\"";
        // line 32
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
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Log Out</a>
        </div>
    </nav>

    <section class=\"w-25 p-3\">
        <h1>Votre panier</h1>
    </section>

    <table class=\"table\">
        <thead>
        <tr>
            <th>Produit</th>
            <th>Prix</th>
            <th>Quantité</th>
            <th>Total</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dataPanier"]) || array_key_exists("dataPanier", $context) ? $context["dataPanier"] : (function () { throw new RuntimeError('Variable "dataPanier" does not exist.', 64, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 65
            echo "            <tr>
                <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "produit", [], "any", false, false, false, 66), "nom", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>
                <td >";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "produit", [], "any", false, false, false, 67), "prix", [], "any", false, false, false, 67), "html", null, true);
            echo " €</td>
                <td >";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "quantite", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
                <td >";
            // line 69
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["element"], "quantite", [], "any", false, false, false, 69) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "produit", [], "any", false, false, false, 69), "prix", [], "any", false, false, false, 69)), "html", null, true);
            echo " €</td>
                <td>


                    <a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "produit", [], "any", false, false, false, 73), "id", [], "any", false, false, false, 73)]), "html", null, true);
            echo "\" class=\"btn btn-success\">
                        <i class=\"bi bi-cart-plus\"></i>
                    </a>


                    <a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_remove", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "produit", [], "any", false, false, false, 78), "id", [], "any", false, false, false, 78)]), "html", null, true);
            echo "\" class=\"btn btn-warning\">
                        <i class=\"bi bi-cart-dash\"></i>
                    </a>
                    <a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_delete", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "produit", [], "any", false, false, false, 81), "id", [], "any", false, false, false, 81)]), "html", null, true);
            echo "\" class=\"btn btn-danger\">
                        <i class=\"bi bi-cart-x\"></i>
                    </a>
                </td>
            </tr>



        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 90
            echo "            <tr>
                <td colspan=\"5\" class=\"text-center\">Votre panier est vide</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "        </tbody>
        <tfoot>
        <tr>
            <td colspan=\"3\"><b>Total</b></td>
            <td class=\"text-end\"><b>";
        // line 98
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 98, $this->source); })()), "html", null, true);
        echo " €</b></td>

        </tr>
        </tfoot>
    </table>
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
        return "cart/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  231 => 98,  225 => 94,  216 => 90,  202 => 81,  196 => 78,  188 => 73,  181 => 69,  177 => 68,  173 => 67,  169 => 66,  166 => 65,  161 => 64,  139 => 45,  123 => 32,  115 => 27,  105 => 19,  95 => 18,  77 => 14,  67 => 18,  62 => 15,  60 => 14,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6\" crossorigin=\"anonymous\">
    <title>Panier</title>


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

    <section class=\"w-25 p-3\">
        <h1>Votre panier</h1>
    </section>

    <table class=\"table\">
        <thead>
        <tr>
            <th>Produit</th>
            <th>Prix</th>
            <th>Quantité</th>
            <th>Total</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        {% for element in dataPanier %}
            <tr>
                <td>{{ element.produit.nom }}</td>
                <td >{{ element.produit.prix }} €</td>
                <td >{{ element.quantite }}</td>
                <td >{{ element.quantite * element.produit.prix }} €</td>
                <td>


                    <a href=\"{{path(\"cart_add\", {id: element.produit.id})}}\" class=\"btn btn-success\">
                        <i class=\"bi bi-cart-plus\"></i>
                    </a>


                    <a href=\"{{path(\"cart_remove\", {id: element.produit.id})}}\" class=\"btn btn-warning\">
                        <i class=\"bi bi-cart-dash\"></i>
                    </a>
                    <a href=\"{{path(\"cart_delete\", {id: element.produit.id})}}\" class=\"btn btn-danger\">
                        <i class=\"bi bi-cart-x\"></i>
                    </a>
                </td>
            </tr>



        {% else %}
            <tr>
                <td colspan=\"5\" class=\"text-center\">Votre panier est vide</td>
            </tr>
        {% endfor %}
        </tbody>
        <tfoot>
        <tr>
            <td colspan=\"3\"><b>Total</b></td>
            <td class=\"text-end\"><b>{{ total }} €</b></td>

        </tr>
        </tfoot>
    </table>
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
", "cart/index.html.twig", "C:\\xampp\\htdocs\\symfony-project-master\\templates\\cart\\index.html.twig");
    }
}
