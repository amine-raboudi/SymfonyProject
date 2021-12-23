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
class __TwigTemplate_9b6ed0e8767d332a4ea8db4fe55bafac06dee50bf08e96c78520a302eb6bd09c extends Template
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
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">


<div class=\"container\" >

   <a class=\"btn btn-outline-light\" href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">S'inscrire</a>
         <a class=\"btn btn-outline-light\" href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Se connecter</a>

        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#mobile-nav\">
            <span class=\"navbar-toggle-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"mobile-nav\">
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item\">
                    <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article");
        echo "\"  class=\"btn btn-outline-light\"> Home</a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new_article");
        echo "\" class=\"btn btn-outline-light\">Ajouter article</a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new_category");
        echo "\" class=\"btn btn-outline-light\">Ajouter catégorie</a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_par_cat");
        echo "\" class=\"btn btn-outline-light\">Recherche par catégorie</a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_list");
        echo "\" class=\"btn btn-outline-light\">Recherche par nom</a>
                </li>


            </ul>
        </div>
    </div>
</nav>";
        
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
        return array (  90 => 28,  84 => 25,  78 => 22,  72 => 19,  66 => 16,  54 => 7,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">


<div class=\"container\" >

   <a class=\"btn btn-outline-light\" href=\"{{ path('app_register') }}\">S'inscrire</a>
         <a class=\"btn btn-outline-light\" href=\"{{ path('app_login') }}\">Se connecter</a>

        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#mobile-nav\">
            <span class=\"navbar-toggle-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"mobile-nav\">
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item\">
                    <a href=\"{{ path('article')}}\"  class=\"btn btn-outline-light\"> Home</a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"{{ path('new_article')}}\" class=\"btn btn-outline-light\">Ajouter article</a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"{{ path('new_category')}}\" class=\"btn btn-outline-light\">Ajouter catégorie</a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"{{ path('article_par_cat')}}\" class=\"btn btn-outline-light\">Recherche par catégorie</a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"{{ path('article_list')}}\" class=\"btn btn-outline-light\">Recherche par nom</a>
                </li>


            </ul>
        </div>
    </div>
</nav>", "inc/navbar.html.twig", "C:\\xampp\\htdocs\\symfony-project-master\\templates\\inc\\navbar.html.twig");
    }
}
