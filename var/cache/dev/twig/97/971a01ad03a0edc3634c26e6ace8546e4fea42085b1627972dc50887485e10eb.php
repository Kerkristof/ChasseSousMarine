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

/* blog/index.html.twig */
class __TwigTemplate_4d79371ed3a321b15a4924737bb4f3348d5127a0d57ae452014ca0cda24a43b7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 1);
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

        echo "Hello BlogController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "  <div class=\"blog-container\">
    <!-- AJOUTER UN COMMENTAIRE -->
    ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8)) {
            // line 9
            echo "    ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formBlog"]) || array_key_exists("formBlog", $context) ? $context["formBlog"] : (function () { throw new RuntimeError('Variable "formBlog" does not exist.', 9, $this->source); })()), 'form_start');
            echo "
    <br>
    ";
            // line 11
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formBlog"]) || array_key_exists("formBlog", $context) ? $context["formBlog"] : (function () { throw new RuntimeError('Variable "formBlog" does not exist.', 11, $this->source); })()), "contenu", [], "any", false, false, false, 11), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
    <button type=\"submit\" class=\"btn btn-success\">Publier un commentaire</button>
    ";
            // line 13
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formBlog"]) || array_key_exists("formBlog", $context) ? $context["formBlog"] : (function () { throw new RuntimeError('Variable "formBlog" does not exist.', 13, $this->source); })()), 'form_end');
            echo "
    ";
        } else {
            // line 15
            echo "    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\" class=\"link\"> <strong>Connectez vous pour publier un commentaire</strong></a>
    ";
        }
        // line 17
        echo "    <hr>

    <!-- AFFICHAGE DES COMMENTAIRES -->
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blog_comments"]) || array_key_exists("blog_comments", $context) ? $context["blog_comments"] : (function () { throw new RuntimeError('Variable "blog_comments" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 21
            echo "    <div class=\"row\">
      <p class=\"blog-text col-3\"> <small>De <strong>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "auteur", [], "any", false, false, false, 22), "username", [], "any", false, false, false, 22), "html", null, true);
            echo "</strong>
        <br>le ";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 23), "d/m/Y à H:i"), "html", null, true);
            echo "</small> </p>
        <p class=\"text-blog col-7\"> <small>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "contenu", [], "any", false, false, false, 24), "html", null, true);
            echo "</small></p>
        <!-- SUPPRIMER UN COMMENTAIRE-->
        <div class=\"col-2\">
          ";
            // line 27
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27)) {
                // line 28
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "userRoles", [], "any", false, false, false, 28));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    // line 29
                    echo "          ";
                    if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["role"], "value", [], "any", false, false, false, 29), "ROLE_ADMIN")) {
                        // line 30
                        echo "          <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_comment_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 30)]), "html", null, true);
                        echo "\">supprimer</a>
          ";
                    }
                    // line 32
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "          ";
            }
            // line 34
            echo "        </div>
      </div>
      <hr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
      <!-- PASSER A LA PAGE SUIVANTE -->
      <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 40, $this->source); })()) - 1)]), "html", null, true);
        echo "\" class=\"btn page\"> << </a>
      <span>Page ";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 41, $this->source); })()), "html", null, true);
        echo " </span>
      <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 42, $this->source); })()) + 1)]), "html", null, true);
        echo "\" class=\"btn page\"> >> </a>
      <hr>

  </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 42,  184 => 41,  180 => 40,  176 => 38,  167 => 34,  164 => 33,  158 => 32,  152 => 30,  149 => 29,  144 => 28,  142 => 27,  136 => 24,  132 => 23,  128 => 22,  125 => 21,  121 => 20,  116 => 17,  110 => 15,  105 => 13,  100 => 11,  94 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello BlogController!{% endblock %}

{% block body %}
  <div class=\"blog-container\">
    <!-- AJOUTER UN COMMENTAIRE -->
    {% if app.user %}
    {{ form_start(formBlog) }}
    <br>
    {{ form_widget(formBlog.contenu, { 'attr' : { 'class':'form-control'}}) }}
    <button type=\"submit\" class=\"btn btn-success\">Publier un commentaire</button>
    {{ form_end(formBlog) }}
    {% else %}
    <a href=\"{{ path('security_login') }}\" class=\"link\"> <strong>Connectez vous pour publier un commentaire</strong></a>
    {% endif %}
    <hr>

    <!-- AFFICHAGE DES COMMENTAIRES -->
    {% for comment in blog_comments %}
    <div class=\"row\">
      <p class=\"blog-text col-3\"> <small>De <strong>{{comment.auteur.username}}</strong>
        <br>le {{comment.createdAt | date('d/m/Y à H:i')}}</small> </p>
        <p class=\"text-blog col-7\"> <small>{{comment.contenu}}</small></p>
        <!-- SUPPRIMER UN COMMENTAIRE-->
        <div class=\"col-2\">
          {% if app.user %}
          {% for role in app.user.userRoles %}
          {% if role.value == 'ROLE_ADMIN' %}
          <a href=\"{{ path('blog_comment_delete', {'id' : comment.id })}}\">supprimer</a>
          {% endif %}
          {% endfor %}
          {% endif %}
        </div>
      </div>
      <hr>
      {% endfor %}

      <!-- PASSER A LA PAGE SUIVANTE -->
      <a href=\"{{ path('blog', {'page': page - 1}) }}\" class=\"btn page\"> << </a>
      <span>Page {{ page }} </span>
      <a href=\"{{ path('blog', {'page' :  page + 1 } ) }}\" class=\"btn page\"> >> </a>
      <hr>

  </div>


{% endblock %}
", "blog/index.html.twig", "/home/christophe/Projects/Symfony/ChasseSousMarine/templates/blog/index.html.twig");
    }
}
