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

/* site/site_edit.html.twig */
class __TwigTemplate_d3140dabf2513dcb8ffe12e0199cbe26f4f31aa0e821b4d40ff90d07a8f370c0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/site_edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/site_edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "site/site_edit.html.twig", 1);
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
        echo "  <h3>Formulaire d'enregistrement d'un nouveau site</h3>
  ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formSite"]) || array_key_exists("formSite", $context) ? $context["formSite"] : (function () { throw new RuntimeError('Variable "formSite" does not exist.', 5, $this->source); })()), 'form_start');
        echo "
    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formSite"]) || array_key_exists("formSite", $context) ? $context["formSite"] : (function () { throw new RuntimeError('Variable "formSite" does not exist.', 6, $this->source); })()), "nom", [], "any", false, false, false, 6), 'row', ["label" => "Nom du site", "attr" => ["placeholder" => "Nom du site...", "class" => "form-control"]]);
        echo "
    <br>
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formSite"]) || array_key_exists("formSite", $context) ? $context["formSite"] : (function () { throw new RuntimeError('Variable "formSite" does not exist.', 8, $this->source); })()), "contenu", [], "any", false, false, false, 8), 'row', ["label" => "Description", "attr" => ["class" => "form-control"]]);
        echo "
    <br>
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formSite"]) || array_key_exists("formSite", $context) ? $context["formSite"] : (function () { throw new RuntimeError('Variable "formSite" does not exist.', 10, $this->source); })()), "gps", [], "any", false, false, false, 10), 'row', ["label" => "Coordonées GPS", "attr" => ["placeholder" => "eg. 47.332530 -3.145908 ", "class" => "form-control"]]);
        echo "
    <br>
    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formSite"]) || array_key_exists("formSite", $context) ? $context["formSite"] : (function () { throw new RuntimeError('Variable "formSite" does not exist.', 12, $this->source); })()), "imageFile", [], "any", false, false, false, 12), 'row', ["label" => "Image", "attr" => ["class" => "form-control"]]);
        echo "
    <br>
    <button type=\"submit\" class=\"btn btn-success\">
      ";
        // line 15
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 15, $this->source); })())) {
            // line 16
            echo "        Enregistrer les modifications
      ";
        } else {
            // line 18
            echo "        Ajouter le site
      ";
        }
        // line 20
        echo "    </button>
  ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formSite"]) || array_key_exists("formSite", $context) ? $context["formSite"] : (function () { throw new RuntimeError('Variable "formSite" does not exist.', 21, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "site/site_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 21,  106 => 20,  102 => 18,  98 => 16,  96 => 15,  90 => 12,  85 => 10,  80 => 8,  75 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
  <h3>Formulaire d'enregistrement d'un nouveau site</h3>
  {{ form_start(formSite) }}
    {{ form_row(formSite.nom, {'label' : 'Nom du site', 'attr' : { 'placeholder' : 'Nom du site...', 'class' : 'form-control'}} )}}
    <br>
    {{ form_row(formSite.contenu, {'label' : 'Description', 'attr' : {'class' : 'form-control'}} )}}
    <br>
    {{ form_row(formSite.gps, {'label' : 'Coordonées GPS', 'attr' : { 'placeholder' : 'eg. 47.332530 -3.145908 ', 'class' : 'form-control'}} )}}
    <br>
    {{ form_row(formSite.imageFile, { 'label' :\"Image\", 'attr' : { 'class':'form-control'}}) }}
    <br>
    <button type=\"submit\" class=\"btn btn-success\">
      {% if editMode %}
        Enregistrer les modifications
      {% else %}
        Ajouter le site
      {% endif %}
    </button>
  {{ form_end(formSite) }}
{% endblock %}
", "site/site_edit.html.twig", "/home/christophe/Projects/Symfony/ChasseSousMarine/templates/site/site_edit.html.twig");
    }
}
