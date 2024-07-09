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

/* security/login.html.twig */
class __TwigTemplate_5fbf122e4973e7ae2a3bd1e48410e6d0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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
        yield "    Me connecter
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
        yield "    <form method=\"post\">
        ";
        // line 9
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 9, $this->source); })())) {
            // line 10
            yield "            <div class=\"alert alert-danger text-center\">Adresse mail ou mot de passe invalide</div>
        ";
        }
        // line 12
        yield "
        ";
        // line 13
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13)) {
            // line 14
            yield "            <div class=\"alert alert-warning text-center\">
                Vous êtes déjà connecté(e) en tant que
                ";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "userIdentifier", [], "any", false, false, false, 16), "html", null, true);
            yield "
                ,
                <a href=\"";
            // line 18
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">
                    Me déconnecter
                </a>
            </div>
        ";
        }
        // line 23
        yield "
        <div class=\"container mt-5 my-5\">
            <div class=\"row justify-content-center\">
                <div class=\"col-md-6\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h1 class=\"h3 mb-3\">
                                Me connecter
                            </h1>
                            <div class=\"mb-3\">
                                <label for=\"inputEmail\">
                                    Email
                                </label>
                                <input type=\"email\" value=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 36, $this->source); })()), "html", null, true);
        yield "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"inputPassword\">
                                    Mot de passe
                                </label>
                                <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">
                            </div>
                            <div class=\"mb-3\">
                                <button class=\"btn btn-lg btn-primary\" type=\"submit\">
                                    Me connecter
                                </button>
                            </div>
                            <p>
                                <a href=\"#\">
                                    Mot de passe oublié
                                </a>
                            </p>
                            <p>
                                Pas encore inscrit(e) ?
                                <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\">
                                    M'inscrire
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
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
        return "security/login.html.twig";
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
        return array (  165 => 57,  148 => 43,  138 => 36,  123 => 23,  115 => 18,  110 => 16,  106 => 14,  104 => 13,  101 => 12,  97 => 10,  95 => 9,  92 => 8,  82 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    Me connecter
{% endblock %}

{% block body %}
    <form method=\"post\">
        {% if error %}
            <div class=\"alert alert-danger text-center\">Adresse mail ou mot de passe invalide</div>
        {% endif %}

        {% if app.user %}
            <div class=\"alert alert-warning text-center\">
                Vous êtes déjà connecté(e) en tant que
                {{ app.user.userIdentifier }}
                ,
                <a href=\"{{ path('app_logout') }}\">
                    Me déconnecter
                </a>
            </div>
        {% endif %}

        <div class=\"container mt-5 my-5\">
            <div class=\"row justify-content-center\">
                <div class=\"col-md-6\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h1 class=\"h3 mb-3\">
                                Me connecter
                            </h1>
                            <div class=\"mb-3\">
                                <label for=\"inputEmail\">
                                    Email
                                </label>
                                <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"inputPassword\">
                                    Mot de passe
                                </label>
                                <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                            </div>
                            <div class=\"mb-3\">
                                <button class=\"btn btn-lg btn-primary\" type=\"submit\">
                                    Me connecter
                                </button>
                            </div>
                            <p>
                                <a href=\"#\">
                                    Mot de passe oublié
                                </a>
                            </p>
                            <p>
                                Pas encore inscrit(e) ?
                                <a href=\"{{ path('app_register') }}\">
                                    M'inscrire
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
{% endblock %}
", "security/login.html.twig", "/home/noname/Documents/Village_Green/templates/security/login.html.twig");
    }
}
