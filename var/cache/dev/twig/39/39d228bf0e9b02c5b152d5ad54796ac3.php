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
class __TwigTemplate_6805445e964623f678c836bddfe533c7 extends Template
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
        yield "    <div class=\"container mt-5 my-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h1 class=\"text-center mb-4\" style=\"color: Black;\">
                            M'inscrire
                        </h1>

                        ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 17, $this->source); })()), 'errors');
        yield "

                        ";
        // line 19
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 19, $this->source); })()), 'form_start');
        yield "

                        <div class=\"mb-3\">
                            ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 22, $this->source); })()), "nom", [], "any", false, false, false, 22), 'label');
        yield "
                            ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 23, $this->source); })()), "nom", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 24
        yield "
                        </div>

                        <div class=\"mb-3\">
                            ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 28, $this->source); })()), "prenom", [], "any", false, false, false, 28), 'label');
        yield "
                            ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 29, $this->source); })()), "prenom", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 30
        yield "
                        </div>

                        <div class=\"mb-3\">
                            ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 34, $this->source); })()), "email", [], "any", false, false, false, 34), 'label');
        yield "
                            ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 35, $this->source); })()), "email", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 36
        yield "
                        </div>

                        <div class=\"mb-3\">
                            ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 40, $this->source); })()), "plainPassword", [], "any", false, false, false, 40), 'label');
        yield "
                            ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 41, $this->source); })()), "plainPassword", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 42
        yield "
                        </div>

                        <div class=\"mb-3\">
                            ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 46, $this->source); })()), "adresse", [], "any", false, false, false, 46), 'label');
        yield "
                            ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 47, $this->source); })()), "adresse", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 48
        yield "
                        </div>

                        <div class=\"mb-3\">
                            ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 52, $this->source); })()), "cp", [], "any", false, false, false, 52), 'label');
        yield "
                            ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 53, $this->source); })()), "cp", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 54
        yield "
                        </div>

                        <div class=\"mb-3\">
                            ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 58, $this->source); })()), "pays", [], "any", false, false, false, 58), 'label');
        yield "
                            ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 59, $this->source); })()), "pays", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 60
        yield "
                        </div>

                        <div class=\"mb-3\">
                            ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 64, $this->source); })()), "ville", [], "any", false, false, false, 64), 'label');
        yield "
                            ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 65, $this->source); })()), "ville", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 66
        yield "
                        </div>

                        <div class=\"mb-3\">
                            ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 70, $this->source); })()), "telephone", [], "any", false, false, false, 70), 'label');
        yield "
                            ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 71, $this->source); })()), "telephone", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 72
        yield "
                        </div>

                        <div class=\"mb-3\">
                            ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 76, $this->source); })()), "agreeTerms", [], "any", false, false, false, 76), 'label');
        yield "
                            ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 77, $this->source); })()), "agreeTerms", [], "any", false, false, false, 77), 'widget');
        yield "
                        </div>

                        <div class=\"text-center\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                M'inscrire
                            </button>
                        </div>

                        ";
        // line 86
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 86, $this->source); })()), 'form_end');
        yield "

                        <p class=\"text-center mt-3\">
                            Déjà inscrit ?
                            <a href=\"";
        // line 90
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
        return array (  245 => 90,  238 => 86,  226 => 77,  222 => 76,  216 => 72,  214 => 71,  210 => 70,  204 => 66,  202 => 65,  198 => 64,  192 => 60,  190 => 59,  186 => 58,  180 => 54,  178 => 53,  174 => 52,  168 => 48,  166 => 47,  162 => 46,  156 => 42,  154 => 41,  150 => 40,  144 => 36,  142 => 35,  138 => 34,  132 => 30,  130 => 29,  126 => 28,  120 => 24,  118 => 23,  114 => 22,  108 => 19,  103 => 17,  92 => 8,  82 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    Inscription
{% endblock %}

{% block body %}
    <div class=\"container mt-5 my-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h1 class=\"text-center mb-4\" style=\"color: Black;\">
                            M'inscrire
                        </h1>

                        {{ form_errors(registrationForm) }}

                        {{ form_start(registrationForm) }}

                        <div class=\"mb-3\">
                            {{ form_label(registrationForm.nom) }}
                            {{ form_widget(registrationForm.nom, {'attr': {'class': 'form-control' }}
                            ) }}
                        </div>

                        <div class=\"mb-3\">
                            {{ form_label(registrationForm.prenom) }}
                            {{ form_widget(registrationForm.prenom, {'attr': {'class': 'form-control' }}
                            ) }}
                        </div>

                        <div class=\"mb-3\">
                            {{ form_label(registrationForm.email) }}
                            {{ form_widget(registrationForm.email, {'attr': {'class': 'form-control' }}
                            ) }}
                        </div>

                        <div class=\"mb-3\">
                            {{ form_label(registrationForm.plainPassword) }}
                            {{ form_widget(registrationForm.plainPassword, {'attr': {'class': 'form-control' }}
                            ) }}
                        </div>

                        <div class=\"mb-3\">
                            {{ form_label(registrationForm.adresse) }}
                            {{ form_widget(registrationForm.adresse, {'attr': {'class': 'form-control' }}
                            ) }}
                        </div>

                        <div class=\"mb-3\">
                            {{ form_label(registrationForm.cp) }}
                            {{ form_widget(registrationForm.cp, {'attr': {'class': 'form-control' }}
                            ) }}
                        </div>

                        <div class=\"mb-3\">
                            {{ form_label(registrationForm.pays) }}
                            {{ form_widget(registrationForm.pays, {'attr': {'class': 'form-control' }}
                            ) }}
                        </div>

                        <div class=\"mb-3\">
                            {{ form_label(registrationForm.ville) }}
                            {{ form_widget(registrationForm.ville, {'attr': {'class': 'form-control' }}
                            ) }}
                        </div>

                        <div class=\"mb-3\">
                            {{ form_label(registrationForm.telephone) }}
                            {{ form_widget(registrationForm.telephone, {'attr': {'class': 'form-control' }}
                            ) }}
                        </div>

                        <div class=\"mb-3\">
                            {{ form_label(registrationForm.agreeTerms) }}
                            {{ form_widget(registrationForm.agreeTerms) }}
                        </div>

                        <div class=\"text-center\">
                            <button type=\"submit\" class=\"btn btn-primary\">
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
{% endblock %}
", "registration/register.html.twig", "/home/noname/Documents/Village_Green/templates/registration/register.html.twig");
    }
}
