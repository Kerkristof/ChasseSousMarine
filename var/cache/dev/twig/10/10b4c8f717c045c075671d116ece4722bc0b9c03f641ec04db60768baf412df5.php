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

/* espece/home.html.twig */
class __TwigTemplate_db582e9cd0e2f0d703ef9b1ef506f243f7b32253c60646afc72bbc4ed92dc512 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espece/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espece/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "espece/home.html.twig", 1);
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
        echo "  <div class=\"home\">
    <div class=\"dashboard-row row\">
      <div class=\"dashboard-container col-12\">
          <h4>Bienvenue sur mon site dédié à la chasse sous marine.</h4>
          <p>Vous pouvez y trouver des informations sur les espèces de poisson et sur les tailles minimum de prélèvements.<br>
          Vous pouvez également vous créer un compte utilisateur pour enrichir le contenu du site<br>
          Décrire les sites sur lesquels vous aimez chasser et enregistrer vos sorties et vos
          prises.<br>
          Une page de blog permet d'échanger entre utilisateurs. N'hésitez pas à me faire par de vos suggestions pour
          améliorer ce site.<br>
          A bientôt<br>
          Christophe </p>
      </div>
    </div>
    <div class=\"dashboard-row row\">
      <div class=\"dashboard-container  col-4\">
        <h3>Dernières sorties publiées</h3>
        <hr>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sorties"]) || array_key_exists("sorties", $context) ? $context["sorties"] : (function () { throw new RuntimeError('Variable "sorties" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sortie"]) {
            // line 23
            echo "        <div class=\"row\">
          <div class=\"col-6\">
            <p>Par <i>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sortie"], "auteur", [], "any", false, false, false, 25), "userName", [], "any", false, false, false, 25), "html", null, true);
            echo "</i><br><small>le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sortie"], "createdAt", [], "any", false, false, false, 25), "d/m/Y"), "html", null, true);
            echo "</small> </p>
          </div>
          <div class=\"col-3\">
            <img src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icones/prise.jpg"), "html", null, true);
            echo "\" width=\"60%\" alt=\"\">
            <small><b>";
            // line 29
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sortie"], "prises", [], "any", false, false, false, 29)), "html", null, true);
            echo "</b></small>
          </div>
          <div class=\"col-3\">
            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sortie_show", ["id" => twig_get_attribute($this->env, $this->source, $context["sortie"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">
              <img src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icones/oeil.png"), "html", null, true);
            echo "\" width=\"60%\" alt=\"\">
            </a>
          </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sortie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "      </div>
      <div class=\"col-4\">
        <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("espece_index");
        echo "\">
          <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icones/vieille.png"), "html", null, true);
        echo "\" style=\"border-radius:100%\" width=\"100%\" alt=\"fish\">
        </a>
      </div>

      <div class=\"dashboard-container  col-4\">
          <h3>Derniers posts sur le blog</h3>
          <hr>
          ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blog_comments"]) || array_key_exists("blog_comments", $context) ? $context["blog_comments"] : (function () { throw new RuntimeError('Variable "blog_comments" does not exist.', 48, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 49
            echo "          <div class=\"row\">
            <div class=\"col-6\">
              <p>De <i>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "auteur", [], "any", false, false, false, 51), "userName", [], "any", false, false, false, 51), "html", null, true);
            echo "</i><br><small>le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 51), "d/m/Y à H\\hi"), "html", null, true);
            echo "</small></p>
            </div>
            <div class=\"col-6\">
              <small>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "contenu", [], "any", false, false, false, 54), "html", null, true);
            echo "</small>
            </div>
          </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "          <a class=\"link\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog");
        echo "\">Voir la suite ...</a>
      </div>
    </div>
      <div class=\"dashboard-row dashboard-container row\">
        <div class=\"col-1\">
          <img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icones/user.png"), "html", null, true);
        echo "\" width=\"70%\" alt=\"\">
        </div>
        <div class=\"col-1\" style=\"font-size:2rem\">
          <p><b>";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 66, $this->source); })()), "html", null, true);
        echo "</b></p>
        </div>

        <div class=\"col-1\">
          <img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icones/prise.jpg"), "html", null, true);
        echo "\" width=\"100%\" alt=\"\">
        </div>
        <div class=\"col-1\" style=\"font-size:2rem\">
          <p><b>";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["especes"]) || array_key_exists("especes", $context) ? $context["especes"] : (function () { throw new RuntimeError('Variable "especes" does not exist.', 73, $this->source); })()), "html", null, true);
        echo "</b></p>
        </div>

        <div class=\"col-1\">
          <img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icones/site.png"), "html", null, true);
        echo "\" width=\"70%\" alt=\"\">
        </div>
        <div class=\"col-1\" style=\"font-size:2rem\">
          <p><b>";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["sites"]) || array_key_exists("sites", $context) ? $context["sites"] : (function () { throw new RuntimeError('Variable "sites" does not exist.', 80, $this->source); })()), "html", null, true);
        echo "</b></p>
        </div>
      </div>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "espece/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 80,  208 => 77,  201 => 73,  195 => 70,  188 => 66,  182 => 63,  173 => 58,  163 => 54,  155 => 51,  151 => 49,  147 => 48,  137 => 41,  133 => 40,  129 => 38,  118 => 33,  114 => 32,  108 => 29,  104 => 28,  96 => 25,  92 => 23,  88 => 22,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
  <div class=\"home\">
    <div class=\"dashboard-row row\">
      <div class=\"dashboard-container col-12\">
          <h4>Bienvenue sur mon site dédié à la chasse sous marine.</h4>
          <p>Vous pouvez y trouver des informations sur les espèces de poisson et sur les tailles minimum de prélèvements.<br>
          Vous pouvez également vous créer un compte utilisateur pour enrichir le contenu du site<br>
          Décrire les sites sur lesquels vous aimez chasser et enregistrer vos sorties et vos
          prises.<br>
          Une page de blog permet d'échanger entre utilisateurs. N'hésitez pas à me faire par de vos suggestions pour
          améliorer ce site.<br>
          A bientôt<br>
          Christophe </p>
      </div>
    </div>
    <div class=\"dashboard-row row\">
      <div class=\"dashboard-container  col-4\">
        <h3>Dernières sorties publiées</h3>
        <hr>
        {% for sortie in sorties %}
        <div class=\"row\">
          <div class=\"col-6\">
            <p>Par <i>{{sortie.auteur.userName}}</i><br><small>le {{ sortie.createdAt|date(\"d/m/Y\") }}</small> </p>
          </div>
          <div class=\"col-3\">
            <img src=\"{{asset(\"assets/images/icones/prise.jpg\")}}\" width=\"60%\" alt=\"\">
            <small><b>{{sortie.prises | length}}</b></small>
          </div>
          <div class=\"col-3\">
            <a href=\"{{path('sortie_show', {'id' : sortie.id}) }}\">
              <img src=\"{{asset(\"assets/images/icones/oeil.png\")}}\" width=\"60%\" alt=\"\">
            </a>
          </div>
        </div>
        {% endfor %}
      </div>
      <div class=\"col-4\">
        <a href=\"{{ path('espece_index') }}\">
          <img src=\"{{ asset(\"assets/images/icones/vieille.png\")}}\" style=\"border-radius:100%\" width=\"100%\" alt=\"fish\">
        </a>
      </div>

      <div class=\"dashboard-container  col-4\">
          <h3>Derniers posts sur le blog</h3>
          <hr>
          {% for comment in blog_comments %}
          <div class=\"row\">
            <div class=\"col-6\">
              <p>De <i>{{ comment.auteur.userName }}</i><br><small>le {{ comment.createdAt|date(\"d/m/Y à H\\\\hi\") }}</small></p>
            </div>
            <div class=\"col-6\">
              <small>{{ comment.contenu }}</small>
            </div>
          </div>
          {% endfor %}
          <a class=\"link\" href=\"{{ path('blog') }}\">Voir la suite ...</a>
      </div>
    </div>
      <div class=\"dashboard-row dashboard-container row\">
        <div class=\"col-1\">
          <img src=\"{{asset(\"assets/images/icones/user.png\")}}\" width=\"70%\" alt=\"\">
        </div>
        <div class=\"col-1\" style=\"font-size:2rem\">
          <p><b>{{ users}}</b></p>
        </div>

        <div class=\"col-1\">
          <img src=\"{{asset(\"assets/images/icones/prise.jpg\")}}\" width=\"100%\" alt=\"\">
        </div>
        <div class=\"col-1\" style=\"font-size:2rem\">
          <p><b>{{ especes}}</b></p>
        </div>

        <div class=\"col-1\">
          <img src=\"{{asset(\"assets/images/icones/site.png\")}}\" width=\"70%\" alt=\"\">
        </div>
        <div class=\"col-1\" style=\"font-size:2rem\">
          <p><b>{{sites}}</b></p>
        </div>
      </div>
  </div>
{% endblock %}
", "espece/home.html.twig", "/home/christophe/Projects/Symfony/ChasseSousMarine/templates/espece/home.html.twig");
    }
}
