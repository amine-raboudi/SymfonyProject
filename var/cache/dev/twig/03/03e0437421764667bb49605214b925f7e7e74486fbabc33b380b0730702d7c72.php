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

/* inc/navbar.html.twig */
class __TwigTemplate_f48ff9735df00e08833692b577b40cb1d76fdca730b51ce9beb694d33f5a2a23 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/navbar.html.twig"));

        // line 1
        echo "

<nav style=\"background-color: #0f172a\" class=\"navbar navbar-expand-sm bg-dark navbar-dark\">
    <div class=\"container\" >

        <div class=\"collapse navbar-collapse\" id=\"mobile-nav\">
            <ul class=\"navbar-nav\">
                <li class=\"nav-link active\">
                    <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article");
        echo "\"  class=\"nav-link active\"> Home</a>
                </li>
            </ul>
            <form class=\"form-inline my-2 my-lg-0\">
                <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                <button class=\"btn btn-outline-light\" type=\"submit\" >Search</button>
            </form>
        </div>
        <div>
            <a class=\"btn btn-outline-light\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">S'inscrire</a>
        </div>
       <div>
           <a class=\"btn btn-outline-light\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Se connecter</a>
       </div>

        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#mobile-nav\">
            <span class=\"navbar-toggle-icon\"></span>
        </button>
    </div>
</nav>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "inc/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 21,  65 => 18,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<nav style=\"background-color: #0f172a\" class=\"navbar navbar-expand-sm bg-dark navbar-dark\">
    <div class=\"container\" >

        <div class=\"collapse navbar-collapse\" id=\"mobile-nav\">
            <ul class=\"navbar-nav\">
                <li class=\"nav-link active\">
                    <a href=\"{{ path('article')}}\"  class=\"nav-link active\"> Home</a>
                </li>
            </ul>
            <form class=\"form-inline my-2 my-lg-0\">
                <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                <button class=\"btn btn-outline-light\" type=\"submit\" >Search</button>
            </form>
        </div>
        <div>
            <a class=\"btn btn-outline-light\" href=\"{{ path('app_register') }}\">S'inscrire</a>
        </div>
       <div>
           <a class=\"btn btn-outline-light\" href=\"{{ path('app_login') }}\">Se connecter</a>
       </div>

        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#mobile-nav\">
            <span class=\"navbar-toggle-icon\"></span>
        </button>
    </div>
</nav>

", "inc/navbar.html.twig", "C:\\xampp\\htdocs\\symfony-project-master\\templates\\inc\\navbar.html.twig");
    }
}
