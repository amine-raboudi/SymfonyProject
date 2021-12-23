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

/* bundles/EasyAdminBundle/welcome.html.twig */
class __TwigTemplate_44490f1d47f5b4d030565c989179786e6022382c071de476d392835027790c53 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content_title' => [$this, 'block_content_title'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@EasyAdmin/page/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bundles/EasyAdminBundle/welcome.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bundles/EasyAdminBundle/welcome.html.twig"));

        $this->parent = $this->loadTemplate("@EasyAdmin/page/content.html.twig", "bundles/EasyAdminBundle/welcome.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        echo "Admin Interface";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 7
        echo "   <div class=\"container\">
       <div class=\"row\">
           <div class=\"col-3 alert-primary\" >
               <span class=\"display-3\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["countAllUser"]) || array_key_exists("countAllUser", $context) ? $context["countAllUser"] : (function () { throw new RuntimeError('Variable "countAllUser" does not exist.', 10, $this->source); })()), "value", [], "array", false, false, false, 10), "html", null, true);
        echo "</span> Accounts

           </div>
           <div class=\"col-3 alert-success\" >
               <span class=\"display-3\"> ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["countAllArticle"]) || array_key_exists("countAllArticle", $context) ? $context["countAllArticle"] : (function () { throw new RuntimeError('Variable "countAllArticle" does not exist.', 14, $this->source); })()), "value", [], "array", false, false, false, 14), "html", null, true);
        echo " </span> Articles

           </div>
           <div class=\"col-3 alert-info\" >
               <span class=\"display-3\"> ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["countAllCategory"]) || array_key_exists("countAllCategory", $context) ? $context["countAllCategory"] : (function () { throw new RuntimeError('Variable "countAllCategory" does not exist.', 18, $this->source); })()), "value", [], "array", false, false, false, 18), "html", null, true);
        echo " </span> Categories

           </div>

       </div>
   </div>
         <div class=\"container\">
             <div class=\"row mt-3\">
                 <div class=\"col-3\">
                     <p class=\"h3\"> All Users</p>
                     <ul class=\"list-group\">
                         ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["AllUsers"]) || array_key_exists("AllUsers", $context) ? $context["AllUsers"] : (function () { throw new RuntimeError('Variable "AllUsers" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 30
            echo "                             <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                                 ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 31), "html", null, true);
            echo "
                                 <span class=\"badge badge-primary badge-pill\"><i class=\"fa fa-maps\"></i></span>
                             </li>
                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                     </ul>
                 </div>
                 <div class=\"col-3\">
                     <p class=\"h3\"> All Articles</p>
                     <ul class=\"list-group\">
                         ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["AllArticles"]) || array_key_exists("AllArticles", $context) ? $context["AllArticles"] : (function () { throw new RuntimeError('Variable "AllArticles" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 41
            echo "                             <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                                 ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "Nom", [], "any", false, false, false, 42), "html", null, true);
            echo "
                                 <span class=\"badge badge-primary badge-pill\"><i class=\"fa fa-maps\"></i></span>
                             </li>
                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                     </ul>
                 </div>
                 <div class=\"col-3\">
                     <p class=\"h3\"> All Categories</p>
                     <ul class=\"list-group\">
                         ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["AllCategories"]) || array_key_exists("AllCategories", $context) ? $context["AllCategories"] : (function () { throw new RuntimeError('Variable "AllCategories" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 52
            echo "                             <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                                 ";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "titre", [], "any", false, false, false, 53), "html", null, true);
            echo "
                                 <span class=\"badge badge-primary badge-pill\"><i class=\"fa fa-maps\"></i></span>
                             </li>
                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                     </ul>
                 </div>
             </div>
         </div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "bundles/EasyAdminBundle/welcome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 57,  176 => 53,  173 => 52,  169 => 51,  162 => 46,  152 => 42,  149 => 41,  145 => 40,  138 => 35,  128 => 31,  125 => 30,  121 => 29,  107 => 18,  100 => 14,  93 => 10,  88 => 7,  78 => 6,  59 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% extends '@EasyAdmin/page/content.html.twig' %}

{% block content_title 'Admin Interface' %}

{% block main %}
   <div class=\"container\">
       <div class=\"row\">
           <div class=\"col-3 alert-primary\" >
               <span class=\"display-3\">{{ countAllUser['value'] }}</span> Accounts

           </div>
           <div class=\"col-3 alert-success\" >
               <span class=\"display-3\"> {{ countAllArticle['value'] }} </span> Articles

           </div>
           <div class=\"col-3 alert-info\" >
               <span class=\"display-3\"> {{ countAllCategory['value'] }} </span> Categories

           </div>

       </div>
   </div>
         <div class=\"container\">
             <div class=\"row mt-3\">
                 <div class=\"col-3\">
                     <p class=\"h3\"> All Users</p>
                     <ul class=\"list-group\">
                         {% for user in AllUsers %}
                             <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                                 {{ user.email }}
                                 <span class=\"badge badge-primary badge-pill\"><i class=\"fa fa-maps\"></i></span>
                             </li>
                         {%  endfor %}
                     </ul>
                 </div>
                 <div class=\"col-3\">
                     <p class=\"h3\"> All Articles</p>
                     <ul class=\"list-group\">
                         {% for article in AllArticles %}
                             <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                                 {{ article.Nom }}
                                 <span class=\"badge badge-primary badge-pill\"><i class=\"fa fa-maps\"></i></span>
                             </li>
                         {%  endfor %}
                     </ul>
                 </div>
                 <div class=\"col-3\">
                     <p class=\"h3\"> All Categories</p>
                     <ul class=\"list-group\">
                         {% for category in AllCategories %}
                             <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                                 {{ category.titre}}
                                 <span class=\"badge badge-primary badge-pill\"><i class=\"fa fa-maps\"></i></span>
                             </li>
                         {%  endfor %}
                     </ul>
                 </div>
             </div>
         </div>



{% endblock %}
", "bundles/EasyAdminBundle/welcome.html.twig", "C:\\xampp\\htdocs\\symfony-project-master\\templates\\bundles\\EasyAdminBundle\\welcome.html.twig");
    }
}
