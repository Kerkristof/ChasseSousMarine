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

/* /sortie/sortie_mine.html.twig */
class __TwigTemplate_bebdc22b58631bf9a4423bfc1d9a62f70cf3f5b63e77e03b677d9feeec16031b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/sortie/sortie_mine.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/sortie/sortie_mine.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "/sortie/sortie_mine.html.twig", 1);
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
        echo "
  <div class=\"row\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sorties"]) || array_key_exists("sorties", $context) ? $context["sorties"] : (function () { throw new RuntimeError('Variable "sorties" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sortie"]) {
            // line 7
            echo "        <div class=\"card\">
          <img src=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/images/sites/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sortie"], "site", [], "any", false, false, false, 8), "imageName", [], "any", false, false, false, 8))), "html", null, true);
            echo "\" class=\"card-img-top\">
          <div class=\"card-body\">
            <h5 class=\"card-text\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sortie"], "auteur", [], "any", false, false, false, 10), "username", [], "any", false, false, false, 10), "html", null, true);
            echo "</h5>
            <p class=\"card-text\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sortie"], "site", [], "any", false, false, false, 11), "nom", [], "any", false, false, false, 11), "html", null, true);
            echo " le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sortie"], "createdAt", [], "any", false, false, false, 11), "d/m/Y"), "html", null, true);
            echo "</p>
            <p style=\"height:40px\" class=\"card-text\">";
            // line 12
            echo twig_escape_filter($this->env, twig_join_filter(twig_slice($this->env, twig_split_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["sortie"], "contenu", [], "any", false, false, false, 12), 0, 50), " "), 0,  -1), " "), "html", null, true);
            echo " ...</p>
            <div class=\"row\">
              <div class=\"col-3\">
                <img src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icones/prise.jpg"), "html", null, true);
            echo "\" width=\"100%\" alt=\"\">
              </div>
              <div class=\"col-2\">
                <p>";
            // line 18
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sortie"], "prises", [], "any", false, false, false, 18)), "html", null, true);
            echo "</p>
              </div>
            </div>
            <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sortie_show", ["id" => twig_get_attribute($this->env, $this->source, $context["sortie"], "id", [], "any", false, false, false, 21)]), "html", null, true);
            echo "\" class=\"link\">Lire la suite</a>
          </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sortie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/sortie/sortie_mine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 25,  112 => 21,  106 => 18,  100 => 15,  94 => 12,  88 => 11,  84 => 10,  79 => 8,  76 => 7,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

  <div class=\"row\">
    {% for sortie in sorties %}
        <div class=\"card\">
          <img src=\"{{ asset('assets/images/sites/'~ sortie.site.imageName) }}\" class=\"card-img-top\">
          <div class=\"card-body\">
            <h5 class=\"card-text\">{{ sortie.auteur.username}}</h5>
            <p class=\"card-text\">{{sortie.site.nom}} le {{ sortie.createdAt | date('d/m/Y')}}</p>
            <p style=\"height:40px\" class=\"card-text\">{{ sortie.contenu |slice(0,50) | split(' ') | slice(0,-1) | join(' ')}} ...</p>
            <div class=\"row\">
              <div class=\"col-3\">
                <img src=\"{{ asset('assets/images/icones/prise.jpg') }}\" width=\"100%\" alt=\"\">
              </div>
              <div class=\"col-2\">
                <p>{{ sortie.prises | length }}</p>
              </div>
            </div>
            <a href=\"{{ path('sortie_show', {'id' : sortie.id}) }}\" class=\"link\">Lire la suite</a>
          </div>
        </div>
    {% endfor %}
  </div>
{% endblock %}
", "/sortie/sortie_mine.html.twig", "/home/christophe/Projects/Symfony/ChasseSousMarine/templates/sortie/sortie_mine.html.twig");
    }
}
