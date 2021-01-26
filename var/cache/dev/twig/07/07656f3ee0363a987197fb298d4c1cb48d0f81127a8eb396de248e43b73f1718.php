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

/* site/index.html.twig */
class __TwigTemplate_09edcf3d27e99aed448a14766147d2c6a56bffe4260f6ae19378d03f5249f591 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "site/index.html.twig", 1);
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

        echo "Hello SiteController!";
        
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
        echo "  <div class=\"row\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sites"]) || array_key_exists("sites", $context) ? $context["sites"] : (function () { throw new RuntimeError('Variable "sites" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["site"]) {
            // line 8
            echo "      <div class=\"card\">
        <img class=\"card-img-top\" src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/images/sites/" . twig_get_attribute($this->env, $this->source, $context["site"], "imageName", [], "any", false, false, false, 9))), "html", null, true);
            echo "\" alt=\"fish\">
        <div class=\"card-body\">
          <h3>";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["site"], "nom", [], "any", false, false, false, 11), "html", null, true);
            echo "</h3>
          <p>Publié par <i>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["site"], "user", [], "any", false, false, false, 12), "username", [], "any", false, false, false, 12), "html", null, true);
            echo "</i></p>
            <p>";
            // line 13
            echo twig_escape_filter($this->env, twig_join_filter(twig_slice($this->env, twig_split_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["site"], "contenu", [], "any", false, false, false, 13), 0, 50), " "), 0,  -1), " "), "html", null, true);
            echo " ...</p>
            <a class=\"link\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sortie_index", ["site_id" => twig_get_attribute($this->env, $this->source, $context["site"], "id", [], "any", false, false, false, 14)]), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["site"], "sorties", [], "any", false, false, false, 14)), "html", null, true);
            echo " sortie(s) à ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["site"], "nom", [], "any", false, false, false, 14), "html", null, true);
            echo "</a>
            <br>
            ";
            // line 16
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16)) {
                // line 17
                echo "            <a class=\"link\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sortie_new", ["site_id" => twig_get_attribute($this->env, $this->source, $context["site"], "id", [], "any", false, false, false, 17)]), "html", null, true);
                echo "\">Ajout d'une sortie</a>
            ";
            }
            // line 19
            echo "            <br>
            <a class=\"link\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site_show", ["id" => twig_get_attribute($this->env, $this->source, $context["site"], "id", [], "any", false, false, false, 20)]), "html", null, true);
            echo "\">Lire la suite</a>
        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['site'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "  </div>

  <!-- PASSER A LA PAGE SUIVANTE -->
  <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site_index", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 27, $this->source); })()) - 1)]), "html", null, true);
        echo "\" class=\"btn page\"> << </a>
  <span>Page ";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 28, $this->source); })()), "html", null, true);
        echo " </span>
  <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site_index", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 29, $this->source); })()) + 1)]), "html", null, true);
        echo "\" class=\"btn page\"> >> </a>
  <hr>

  <!-- AJOUT D UN NOUVEAU SITE -->
  ";
        // line 33
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33)) {
            // line 34
            echo "    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site_new");
            echo "\" class=\"btn btn-success\">Ajout d'un nouveau site</a>
  ";
        } else {
            // line 36
            echo "    <a class=\"link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\">Connectez vous pour publier un nouveau site</a>
  ";
        }
        // line 38
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "site/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 38,  173 => 36,  167 => 34,  165 => 33,  158 => 29,  154 => 28,  150 => 27,  145 => 24,  135 => 20,  132 => 19,  126 => 17,  124 => 16,  115 => 14,  111 => 13,  107 => 12,  103 => 11,  98 => 9,  95 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello SiteController!{% endblock %}

{% block body %}
  <div class=\"row\">
    {% for site in sites %}
      <div class=\"card\">
        <img class=\"card-img-top\" src=\"{{ asset('assets/images/sites/' ~ site.imageName) }}\" alt=\"fish\">
        <div class=\"card-body\">
          <h3>{{ site.nom }}</h3>
          <p>Publié par <i>{{ site.user.username }}</i></p>
            <p>{{ site.contenu |slice(0,50) | split(' ') | slice(0,-1) | join(' ') }} ...</p>
            <a class=\"link\" href=\"{{ path('sortie_index', {'site_id' : site.id}) }}\"> {{ site.sorties | length }} sortie(s) à {{ site.nom}}</a>
            <br>
            {% if app.user %}
            <a class=\"link\" href=\"{{ path('sortie_new', {'site_id' : site.id}) }}\">Ajout d'une sortie</a>
            {% endif %}
            <br>
            <a class=\"link\" href=\"{{ path('site_show', {'id' : site.id}) }}\">Lire la suite</a>
        </div>
      </div>
    {% endfor %}
  </div>

  <!-- PASSER A LA PAGE SUIVANTE -->
  <a href=\"{{ path('site_index', {'page': page - 1}) }}\" class=\"btn page\"> << </a>
  <span>Page {{ page }} </span>
  <a href=\"{{ path('site_index', {'page' :  page + 1 } ) }}\" class=\"btn page\"> >> </a>
  <hr>

  <!-- AJOUT D UN NOUVEAU SITE -->
  {% if app.user %}
    <a href=\"{{ path('site_new') }}\" class=\"btn btn-success\">Ajout d'un nouveau site</a>
  {% else %}
    <a class=\"link\" href=\"{{ path('security_login') }}\">Connectez vous pour publier un nouveau site</a>
  {% endif %}

{% endblock %}
", "site/index.html.twig", "/home/christophe/Projects/Symfony/ChasseSousMarine/templates/site/index.html.twig");
    }
}
