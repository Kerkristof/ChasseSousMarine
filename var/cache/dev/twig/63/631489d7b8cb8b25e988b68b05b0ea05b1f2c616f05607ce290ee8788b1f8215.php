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

/* security/registration.html.twig */
class __TwigTemplate_bafb55edd053a0ad67b7f633d9f34ad51340d89754c300c966fc161ca385131d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/registration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/registration.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/registration.html.twig", 1);
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
  <div class=\"login-container\">
    <div class=\"row\">
      <div class=\"col-2\">
        <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icones/masque.png"), "html", null, true);
        echo "\" width=\"80%\" alt=\"masque\">
      </div>
      <div class=\"col-10\">
        <h3>Créez votre compte</h3>
      </div>
    </div>
    <hr>
    ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formRegistration"]) || array_key_exists("formRegistration", $context) ? $context["formRegistration"] : (function () { throw new RuntimeError('Variable "formRegistration" does not exist.', 15, $this->source); })()), 'form_start');
        echo "
    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formRegistration"]) || array_key_exists("formRegistration", $context) ? $context["formRegistration"] : (function () { throw new RuntimeError('Variable "formRegistration" does not exist.', 16, $this->source); })()), "username", [], "any", false, false, false, 16), 'widget', ["attr" => ["placeholder" => "Votre pseudo...", "class" => "form-control"]]);
        echo "
    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formRegistration"]) || array_key_exists("formRegistration", $context) ? $context["formRegistration"] : (function () { throw new RuntimeError('Variable "formRegistration" does not exist.', 17, $this->source); })()), "email", [], "any", false, false, false, 17), 'widget', ["label" => "Email", "attr" => ["placeholder" => "Votre email...", "class" => "form-control"]]);
        echo "
    <small class=\"error\">
      ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formRegistration"]) || array_key_exists("formRegistration", $context) ? $context["formRegistration"] : (function () { throw new RuntimeError('Variable "formRegistration" does not exist.', 19, $this->source); })()), "password", [], "any", false, false, false, 19), 'errors');
        echo "
    </small>
    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formRegistration"]) || array_key_exists("formRegistration", $context) ? $context["formRegistration"] : (function () { throw new RuntimeError('Variable "formRegistration" does not exist.', 21, $this->source); })()), "password", [], "any", false, false, false, 21), 'widget', ["label" => "Mot de passe", "attr" => ["placeholder" => "Votre mot de passe...", "class" => "form-control"]]);
        echo "
    <small class=\"error\">
      ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formRegistration"]) || array_key_exists("formRegistration", $context) ? $context["formRegistration"] : (function () { throw new RuntimeError('Variable "formRegistration" does not exist.', 23, $this->source); })()), "confirm_password", [], "any", false, false, false, 23), 'errors');
        echo "
    </small>
    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formRegistration"]) || array_key_exists("formRegistration", $context) ? $context["formRegistration"] : (function () { throw new RuntimeError('Variable "formRegistration" does not exist.', 25, $this->source); })()), "confirm_password", [], "any", false, false, false, 25), 'widget', ["label" => "Confirmation de votre mot de passe", "attr" => ["placeholder" => "Confirmer votre mot de passe", "class" => "form-control"]]);
        echo "
    <i><small>
        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formRegistration"]) || array_key_exists("formRegistration", $context) ? $context["formRegistration"] : (function () { throw new RuntimeError('Variable "formRegistration" does not exist.', 27, $this->source); })()), "password", [], "any", false, false, false, 27), 'help');
        echo "
    </small></i>
    <button type=\"submit\" class=\"btn btn-success\">Valider</button>
    ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formRegistration"]) || array_key_exists("formRegistration", $context) ? $context["formRegistration"] : (function () { throw new RuntimeError('Variable "formRegistration" does not exist.', 30, $this->source); })()), 'form_end');
        echo "
  </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 30,  117 => 27,  112 => 25,  107 => 23,  102 => 21,  97 => 19,  92 => 17,  88 => 16,  84 => 15,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

  <div class=\"login-container\">
    <div class=\"row\">
      <div class=\"col-2\">
        <img src=\"{{asset(\"assets/images/icones/masque.png\")}}\" width=\"80%\" alt=\"masque\">
      </div>
      <div class=\"col-10\">
        <h3>Créez votre compte</h3>
      </div>
    </div>
    <hr>
    {{ form_start(formRegistration) }}
    {{ form_widget(formRegistration.username, {'attr' : {'placeholder' : \"Votre pseudo...\", 'class':'form-control'}}) }}
    {{ form_widget(formRegistration.email, { 'label' : \"Email\", 'attr' : {'placeholder' : \"Votre email...\", 'class':'form-control'}}) }}
    <small class=\"error\">
      {{ form_errors(formRegistration.password)}}
    </small>
    {{ form_widget(formRegistration.password, { 'label' : \"Mot de passe\", 'attr' : {'placeholder' : \"Votre mot de passe...\", 'class':'form-control'}}) }}
    <small class=\"error\">
      {{ form_errors(formRegistration.confirm_password)}}
    </small>
    {{ form_widget(formRegistration.confirm_password, { 'label' : \"Confirmation de votre mot de passe\", 'attr' : {'placeholder' : \"Confirmer votre mot de passe\", 'class':'form-control'}}) }}
    <i><small>
        {{ form_help(formRegistration.password)}}
    </small></i>
    <button type=\"submit\" class=\"btn btn-success\">Valider</button>
    {{ form_end(formRegistration) }}
  </div>

{% endblock %}
", "security/registration.html.twig", "/home/christophe/Documents/docDev/symfony/ChasseSousMarine/templates/security/registration.html.twig");
    }
}
