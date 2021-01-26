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

/* espece/index.html.twig */
class __TwigTemplate_413f9205372690e2164d14345d94928b6a1a13f644dc39899bd37be2c9458a2f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espece/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espece/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "espece/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <div class=\"row\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["especes"]) || array_key_exists("especes", $context) ? $context["especes"] : (function () { throw new RuntimeError('Variable "especes" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["espece"]) {
            // line 6
            echo "      <div class=\"card\">
        <img class=\"card-img-top\" src=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/images/especes/" . twig_get_attribute($this->env, $this->source, $context["espece"], "imageName", [], "any", false, false, false, 7))), "html", null, true);
            echo "\" alt=\"fish\">
        <div class=\"card-body\">
          <h3 class=\"card-title\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["espece"], "nom", [], "any", false, false, false, 9), "html", null, true);
            echo "</h3>
          <p class=\"card-text\">Publié par <i>";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["espece"], "auteur", [], "any", false, false, false, 10), "username", [], "any", false, false, false, 10), "html", null, true);
            echo "</i></p>
          <p class=\"card-text\">Taille minimale ";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["espece"], "maille", [], "any", false, false, false, 11), "html", null, true);
            echo " cm</p>
          <p  class=\"card-text\">";
            // line 12
            echo twig_escape_filter($this->env, twig_join_filter(twig_slice($this->env, twig_split_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["espece"], "contenu", [], "any", false, false, false, 12), 0, 50), " "), 0,  -1), " "), "html", null, true);
            echo " ...</p>
          <a class=\"link\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("espece_show", ["id" => twig_get_attribute($this->env, $this->source, $context["espece"], "id", [], "any", false, false, false, 13)]), "html", null, true);
            echo "\">lire la suite</a>
        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['espece'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "  </div>

  <!-- PASSER A LA PAGE SUIVANTE -->

  <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("espece_index", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 21, $this->source); })()) - 1)]), "html", null, true);
        echo "\" class=\"btn\"> << </a>
  <span>Page ";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "</span>
  <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("espece_index", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 23, $this->source); })()) + 1)]), "html", null, true);
        echo "\" class=\"btn\"> >> </a>
  <hr>
  <!-- AJOUTER D UNE ESPECE -->
  ";
        // line 26
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26)) {
            // line 27
            echo "    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("espece_create");
            echo "\" class=\"btn btn-success\">Ajouter une nouvelle espèce</a>
  ";
        } else {
            // line 29
            echo "    <a class=\"link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\"> <strong>Connectez vous pour publier une nouvelle espèce</strong></a>
  ";
        }
        // line 31
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "espece/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 31,  137 => 29,  131 => 27,  129 => 26,  123 => 23,  119 => 22,  115 => 21,  109 => 17,  99 => 13,  95 => 12,  91 => 11,  87 => 10,  83 => 9,  78 => 7,  75 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
  <div class=\"row\">
    {% for espece in especes %}
      <div class=\"card\">
        <img class=\"card-img-top\" src=\"{{ asset('assets/images/especes/' ~ espece.imageName) }}\" alt=\"fish\">
        <div class=\"card-body\">
          <h3 class=\"card-title\">{{ espece.nom }}</h3>
          <p class=\"card-text\">Publié par <i>{{ espece.auteur.username }}</i></p>
          <p class=\"card-text\">Taille minimale {{ espece.maille }} cm</p>
          <p  class=\"card-text\">{{ espece.contenu |slice(0,50) | split(' ') | slice(0,-1) | join(' ') }} ...</p>
          <a class=\"link\" href=\"{{ path('espece_show', {'id' : espece.id}) }}\">lire la suite</a>
        </div>
      </div>
    {% endfor %}
  </div>

  <!-- PASSER A LA PAGE SUIVANTE -->

  <a href=\"{{ path('espece_index', {'page' : page - 1}) }}\" class=\"btn\"> << </a>
  <span>Page {{page}}</span>
  <a href=\"{{ path('espece_index', {'page' : page + 1}) }}\" class=\"btn\"> >> </a>
  <hr>
  <!-- AJOUTER D UNE ESPECE -->
  {% if app.user %}
    <a href=\"{{ path('espece_create') }}\" class=\"btn btn-success\">Ajouter une nouvelle espèce</a>
  {% else %}
    <a class=\"link\" href=\"{{ path('security_login') }}\"> <strong>Connectez vous pour publier une nouvelle espèce</strong></a>
  {% endif %}

{% endblock %}
", "espece/index.html.twig", "/home/christophe/Projects/Symfony/ChasseSousMarine/templates/espece/index.html.twig");
    }
}
