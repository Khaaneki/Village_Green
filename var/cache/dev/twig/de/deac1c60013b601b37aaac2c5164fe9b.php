<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* registration/register.html.twig */
class __TwigTemplate_98658de1918b6c23e1832665ca740c25 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        yield "    Inscription
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        yield "<div class=\"parallax\">
    <div class=\"container mt-5 my-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <div class=\"card no-hover\">
                    <div class=\"card-body\">
                        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "flashes", ["verify_email_error"], "method", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 15
            yield "                            <div class=\"alert alert-danger\" role=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash_error"], "html", null, true);
            yield "</div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        yield "                        
                        <h1 class=\"text-center mb-4\" style=\"color: Black;\">
                            M'inscrire
                        </h1>

                        ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 22, $this->source); })()), 'errors');
        yield "

                        ";
        // line 24
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 24, $this->source); })()), 'form_start', ["attr" => ["id" => "registrationForm", "novalidate" => "novalidate"]]);
        yield "

                        <fieldset class=\"mb-3\">
                            <legend>Mon identité</legend>
                            <div class=\"mb-3\">
                                ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 29, $this->source); })()), "nom", [], "any", false, false, false, 29), 'row', ["attr" => ["class" => "form-control", "id" => "nom"]]);
        yield "
                                <span id=\"nom-error\" class=\"text-danger\"></span>
                            </div>
                            <div class=\"mb-3\">
                                ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 33, $this->source); })()), "prenom", [], "any", false, false, false, 33), 'row', ["attr" => ["class" => "form-control", "id" => "prenom"]]);
        yield "
                                <span id=\"prenom-error\" class=\"text-danger\"></span>
                            </div>
                            <div class=\"mb-3\">
                                ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 37, $this->source); })()), "email", [], "any", false, false, false, 37), 'row', ["attr" => ["class" => "form-control", "id" => "mail"]]);
        yield "
                                <span id=\"mail-error\" class=\"text-danger\"></span>
                            </div>
                            <div class=\"mb-3\">
                                ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 41, $this->source); })()), "plainPassword", [], "any", false, false, false, 41), 'row', ["attr" => ["class" => "form-control", "id" => "password"]]);
        yield "
                                <span id=\"password-error\" class=\"text-danger\"></span>
                            </div>
                            <div class=\"mb-3\">
                                <input type=\"password\" name=\"confirmPassword\" id=\"confirmPassword\" class=\"form-control\" placeholder=\"Confirmer le mot de passe\">
                                <span id=\"confirm-password-error\" class=\"text-danger\"></span>
                            </div>
                        </fieldset>

                        <fieldset class=\"mb-3\">
                            <legend>Mes coordonnées</legend>
                            <div class=\"mb-3\">
                                ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 53, $this->source); })()), "pays", [], "any", false, false, false, 53), 'row', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                            <div class=\"mb-3\">
                                ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 56, $this->source); })()), "ville", [], "any", false, false, false, 56), 'row', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                            <div class=\"mb-3\">
                                ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 59, $this->source); })()), "adresse", [], "any", false, false, false, 59), 'row', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                            <div class=\"mb-3\">
                                ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 62, $this->source); })()), "cp", [], "any", false, false, false, 62), 'row', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                            <div class=\"mb-3\">
                                ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 65, $this->source); })()), "telephone", [], "any", false, false, false, 65), 'row', ["attr" => ["class" => "form-control", "id" => "telephone"]]);
        yield "
                                <span id=\"telephone-error\" class=\"text-danger\"></span>
                            </div>
                        </fieldset>

                        <div class=\"mb-3\">
                            ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 71, $this->source); })()), "agreeTerms", [], "any", false, false, false, 71), 'row');
        yield "
                        </div>

                        <div class=\"text-center\">
                            <button type=\"submit\" id=\"button1\" class=\"btn btn-secondary\">
                                M'inscrire
                            </button>
                        </div>

                        ";
        // line 80
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 80, $this->source); })()), 'form_end');
        yield "

                        <p class=\"text-center mt-3\">
                            Déjà inscrit ?
                            <a href=\"";
        // line 84
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">
                                Me connecter
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  221 => 84,  214 => 80,  202 => 71,  193 => 65,  187 => 62,  181 => 59,  175 => 56,  169 => 53,  154 => 41,  147 => 37,  140 => 33,  133 => 29,  125 => 24,  120 => 22,  113 => 17,  104 => 15,  100 => 14,  92 => 8,  82 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    Inscription
{% endblock %}

{% block body %}
<div class=\"parallax\">
    <div class=\"container mt-5 my-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <div class=\"card no-hover\">
                    <div class=\"card-body\">
                        {% for flash_error in app.flashes('verify_email_error') %}
                            <div class=\"alert alert-danger\" role=\"alert\">{{ flash_error }}</div>
                        {% endfor %}
                        
                        <h1 class=\"text-center mb-4\" style=\"color: Black;\">
                            M'inscrire
                        </h1>

                        {{ form_errors(registrationForm) }}

                        {{ form_start(registrationForm, {'attr': {'id': 'registrationForm', 'novalidate': 'novalidate'}}) }}

                        <fieldset class=\"mb-3\">
                            <legend>Mon identité</legend>
                            <div class=\"mb-3\">
                                {{ form_row(registrationForm.nom, {'attr': {'class': 'form-control', 'id': 'nom'}}) }}
                                <span id=\"nom-error\" class=\"text-danger\"></span>
                            </div>
                            <div class=\"mb-3\">
                                {{ form_row(registrationForm.prenom, {'attr': {'class': 'form-control', 'id': 'prenom'}}) }}
                                <span id=\"prenom-error\" class=\"text-danger\"></span>
                            </div>
                            <div class=\"mb-3\">
                                {{ form_row(registrationForm.email, {'attr': {'class': 'form-control', 'id': 'mail'}}) }}
                                <span id=\"mail-error\" class=\"text-danger\"></span>
                            </div>
                            <div class=\"mb-3\">
                                {{ form_row(registrationForm.plainPassword, {'attr': {'class': 'form-control', 'id': 'password'}}) }}
                                <span id=\"password-error\" class=\"text-danger\"></span>
                            </div>
                            <div class=\"mb-3\">
                                <input type=\"password\" name=\"confirmPassword\" id=\"confirmPassword\" class=\"form-control\" placeholder=\"Confirmer le mot de passe\">
                                <span id=\"confirm-password-error\" class=\"text-danger\"></span>
                            </div>
                        </fieldset>

                        <fieldset class=\"mb-3\">
                            <legend>Mes coordonnées</legend>
                            <div class=\"mb-3\">
                                {{ form_row(registrationForm.pays, {'attr': {'class': 'form-control'}}) }}
                            </div>
                            <div class=\"mb-3\">
                                {{ form_row(registrationForm.ville, {'attr': {'class': 'form-control'}}) }}
                            </div>
                            <div class=\"mb-3\">
                                {{ form_row(registrationForm.adresse, {'attr': {'class': 'form-control'}}) }}
                            </div>
                            <div class=\"mb-3\">
                                {{ form_row(registrationForm.cp, {'attr': {'class': 'form-control'}}) }}
                            </div>
                            <div class=\"mb-3\">
                                {{ form_row(registrationForm.telephone, {'attr': {'class': 'form-control', 'id': 'telephone'}}) }}
                                <span id=\"telephone-error\" class=\"text-danger\"></span>
                            </div>
                        </fieldset>

                        <div class=\"mb-3\">
                            {{ form_row(registrationForm.agreeTerms) }}
                        </div>

                        <div class=\"text-center\">
                            <button type=\"submit\" id=\"button1\" class=\"btn btn-secondary\">
                                M'inscrire
                            </button>
                        </div>

                        {{ form_end(registrationForm) }}

                        <p class=\"text-center mt-3\">
                            Déjà inscrit ?
                            <a href=\"{{ path('app_login') }}\">
                                Me connecter
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "registration/register.html.twig", "/home/noname/Documents/Village_Green/templates/registration/register.html.twig");
    }
}
