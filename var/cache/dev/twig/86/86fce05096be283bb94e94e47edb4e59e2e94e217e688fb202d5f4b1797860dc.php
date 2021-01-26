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

/* sortie/sortie_show.html.twig */
class __TwigTemplate_867cb8eb04d5d74159ecabd56d6ff0b8932643fb2b8b4e07a86c5a48f1fcc1c6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sortie/sortie_show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sortie/sortie_show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "sortie/sortie_show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "  <h3>Sortie à ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 3, $this->source); })()), "site", [], "any", false, false, false, 3), "nom", [], "any", false, false, false, 3), "html", null, true);
        echo "</h3>
  <p><i>Le ";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 4, $this->source); })()), "createdAt", [], "any", false, false, false, 4), "d/m/Y"), "html", null, true);
        echo " par ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 4, $this->source); })()), "auteur", [], "any", false, false, false, 4), "userName", [], "any", false, false, false, 4), "html", null, true);
        echo "</i></p>
  <center>
    <img class=\"image\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/images/sites/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 6, $this->source); })()), "site", [], "any", false, false, false, 6), "imageName", [], "any", false, false, false, 6))), "html", null, true);
        echo "\" alt=\"construction\">
  </center>
  <br>
  <p class=\"contenu\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 9, $this->source); })()), "contenu", [], "any", false, false, false, 9), "html", null, true);
        echo "</p>

  <!-- TABLE DES PRISES -->
  <h5>Prises</h5>
  <div class=\"row\">
    <div class=\"col-9\">
      <div class=\"row\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 16, $this->source); })()), "prises", [], "any", false, false, false, 16), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 16, $this->source); })()), "espece", [], "any", false, false, false, 16), "nom", [], "any", false, false, false, 16) <=> twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 16, $this->source); })()), "espece", [], "any", false, false, false, 16), "nom", [], "any", false, false, false, 16)); }));
        foreach ($context['_seq'] as $context["_key"] => $context["prise"]) {
            // line 17
            echo "        <div class=\"card\">
          <div class=\"card-header\">
            <div class=\"row\">
              <div class=\"col-4\">
                <img src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/images/especes/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["prise"], "espece", [], "any", false, false, false, 21), "imageName", [], "any", false, false, false, 21))), "html", null, true);
            echo "\" width=\"30px\" alt=\"\">
              </div>
              <div class=\"col-8\">
                <h5 class=\"card-text\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["prise"], "espece", [], "any", false, false, false, 24), "nom", [], "any", false, false, false, 24), "html", null, true);
            echo "</h5>
              </div>
            </div>
          </div>
          <div class=\"card-body\">
            <p class=\"card-text\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prise"], "taille", [], "any", false, false, false, 29), "html", null, true);
            echo " cm</p>
            <p class=\"card-text\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prise"], "contenu", [], "any", false, false, false, 30), "html", null, true);
            echo "</p>
            ";
            // line 31
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["prise"], "sortie", [], "any", false, false, false, 31), "auteur", [], "any", false, false, false, 31)))) {
                // line 32
                echo "              <a class=\"link\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prise_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["prise"], "id", [], "any", false, false, false, 32)]), "html", null, true);
                echo "\">Supprimer cette prise</a>
            ";
            }
            // line 34
            echo "          </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "      </div>
    </div>
    <div class=\"col-3\">
      <!-- FORMULAIRE D AJOUT D UNE PRISE -->
      ";
        // line 41
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41), twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 41, $this->source); })()), "auteur", [], "any", false, false, false, 41))) {
            // line 42
            echo "      ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPrise"]) || array_key_exists("formPrise", $context) ? $context["formPrise"] : (function () { throw new RuntimeError('Variable "formPrise" does not exist.', 42, $this->source); })()), 'form_start');
            echo "
      ";
            // line 43
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPrise"]) || array_key_exists("formPrise", $context) ? $context["formPrise"] : (function () { throw new RuntimeError('Variable "formPrise" does not exist.', 43, $this->source); })()), "espece", [], "any", false, false, false, 43), 'row', ["label" => "Espece", "attr" => ["class" => "form-control"]]);
            echo "
      ";
            // line 44
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPrise"]) || array_key_exists("formPrise", $context) ? $context["formPrise"] : (function () { throw new RuntimeError('Variable "formPrise" does not exist.', 44, $this->source); })()), "contenu", [], "any", false, false, false, 44), 'row', ["label" => "Description", "attr" => ["class" => "form-control"]]);
            echo "
      ";
            // line 45
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPrise"]) || array_key_exists("formPrise", $context) ? $context["formPrise"] : (function () { throw new RuntimeError('Variable "formPrise" does not exist.', 45, $this->source); })()), "taille", [], "any", false, false, false, 45), 'row', ["label" => "Taille en cm", "attr" => ["class" => "form-control"]]);
            echo "
      <button type=\"submit\" class=\"btn\"><strong>Ajouter une prise</strong></button>
      ";
            // line 47
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPrise"]) || array_key_exists("formPrise", $context) ? $context["formPrise"] : (function () { throw new RuntimeError('Variable "formPrise" does not exist.', 47, $this->source); })()), 'form_end');
            echo "
      ";
        }
        // line 49
        echo "    </div>
  </div>

  <!-- SUPPRESSION OU MODIF DE LA SORTIE -->

  ";
        // line 54
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54), twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 54, $this->source); })()), "auteur", [], "any", false, false, false, 54)) || (isset($context["user_is_admin"]) || array_key_exists("user_is_admin", $context) ? $context["user_is_admin"] : (function () { throw new RuntimeError('Variable "user_is_admin" does not exist.', 54, $this->source); })()))) {
            // line 55
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sortie_edit", ["site_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 55, $this->source); })()), "site", [], "any", false, false, false, 55), "id", [], "any", false, false, false, 55), "id" => twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 55, $this->source); })()), "id", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\" class=\"btn\"><strong>Modifier la sortie</strong></a>
    <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sortie_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["sortie"]) || array_key_exists("sortie", $context) ? $context["sortie"] : (function () { throw new RuntimeError('Variable "sortie" does not exist.', 56, $this->source); })()), "id", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\" class=\"btn\"><strong>Supprimer la sortie</strong></a>
  ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "sortie/sortie_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 56,  184 => 55,  182 => 54,  175 => 49,  170 => 47,  165 => 45,  161 => 44,  157 => 43,  152 => 42,  150 => 41,  144 => 37,  136 => 34,  130 => 32,  128 => 31,  124 => 30,  120 => 29,  112 => 24,  106 => 21,  100 => 17,  96 => 16,  86 => 9,  80 => 6,  73 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
  <h3>Sortie à {{ sortie.site.nom }}</h3>
  <p><i>Le {{ sortie.createdAt | date('d/m/Y') }} par {{sortie.auteur.userName}}</i></p>
  <center>
    <img class=\"image\" src=\"{{ asset(\"assets/images/sites/\" ~ sortie.site.imageName) }}\" alt=\"construction\">
  </center>
  <br>
  <p class=\"contenu\">{{ sortie.contenu }}</p>

  <!-- TABLE DES PRISES -->
  <h5>Prises</h5>
  <div class=\"row\">
    <div class=\"col-9\">
      <div class=\"row\">
        {% for prise in sortie.prises | sort((a,b) => a.espece.nom <=> b.espece.nom) %}
        <div class=\"card\">
          <div class=\"card-header\">
            <div class=\"row\">
              <div class=\"col-4\">
                <img src=\"{{ asset( \"assets/images/especes/\" ~ prise.espece.imageName ) }}\" width=\"30px\" alt=\"\">
              </div>
              <div class=\"col-8\">
                <h5 class=\"card-text\">{{ prise.espece.nom }}</h5>
              </div>
            </div>
          </div>
          <div class=\"card-body\">
            <p class=\"card-text\">{{ prise.taille }} cm</p>
            <p class=\"card-text\">{{ prise.contenu }}</p>
            {% if app.user and (app.user == prise.sortie.auteur) %}
              <a class=\"link\" href=\"{{ path('prise_delete', {'id' : prise.id }) }}\">Supprimer cette prise</a>
            {% endif %}
          </div>
        </div>
        {% endfor %}
      </div>
    </div>
    <div class=\"col-3\">
      <!-- FORMULAIRE D AJOUT D UNE PRISE -->
      {% if app.user == sortie.auteur %}
      {{ form_start(formPrise) }}
      {{ form_row(formPrise.espece, {'label':'Espece', 'attr':{'class':'form-control'}}) }}
      {{ form_row(formPrise.contenu, {'label':'Description', 'attr':{'class':'form-control'}}) }}
      {{ form_row(formPrise.taille, {'label':'Taille en cm', 'attr':{'class':'form-control'}}) }}
      <button type=\"submit\" class=\"btn\"><strong>Ajouter une prise</strong></button>
      {{ form_end(formPrise) }}
      {% endif %}
    </div>
  </div>

  <!-- SUPPRESSION OU MODIF DE LA SORTIE -->

  {% if app.user == sortie.auteur or user_is_admin %}
    <a href=\"{{ path('sortie_edit', {'site_id': sortie.site.id , 'id' : sortie.id}) }}\" class=\"btn\"><strong>Modifier la sortie</strong></a>
    <a href=\"{{ path('sortie_delete', {'id' : sortie.id }) }}\" class=\"btn\"><strong>Supprimer la sortie</strong></a>
  {% endif %}
{% endblock %}
", "sortie/sortie_show.html.twig", "/home/christophe/Projects/Symfony/ChasseSousMarine/templates/sortie/sortie_show.html.twig");
    }
}
