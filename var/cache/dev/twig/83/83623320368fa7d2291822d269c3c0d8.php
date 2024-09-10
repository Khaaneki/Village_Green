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

/* Accueil/Accueil.html.twig */
class __TwigTemplate_8c8f2153801dbf26c0094f69d2cab7dd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Accueil/Accueil.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Accueil/Accueil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Accueil/Accueil.html.twig", 1);
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
        yield "    Village Green
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
        yield "    <div class=\"container my-4\">
        <div class=\"row\">
            <img src=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/background/banner.png"), "html", null, true);
        yield "\" alt=\"banner\"></div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["rubriques"]) || array_key_exists("rubriques", $context) ? $context["rubriques"] : (function () { throw new RuntimeError('Variable "rubriques" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Rubrique"]) {
            // line 15
            yield "                    <div class=\"col-12 col-sm-6 col-md-4 col-lg-3 mb-4\">
                        <a href=\"";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sous_rubrique", ["Id_rubrique" => CoreExtension::getAttribute($this->env, $this->source, $context["Rubrique"], "id", [], "any", false, false, false, 16)]), "html", null, true);
            yield "\">
                            <div class=\"card card-c bg-dark text-white\">
                                <img class=\"card-img-top\" src=\"";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/cat/" . CoreExtension::getAttribute($this->env, $this->source, $context["Rubrique"], "getImage", [], "method", false, false, false, 18))), "html", null, true);
            yield "\" alt=\"cat-image\">
                                    <div class=\"card-body\">
                                        <h5 class=\"card-title text-center\">
                                            ";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["Rubrique"], "getLibelleCourt", [], "method", false, false, false, 21), "html", null, true);
            yield "
                                        </h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Rubrique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "                </div>
            </div>

            <div class=\"container\" style=\"background-color: white; color: black; margin-bottom: 20px;\">
                <div class=\"row\">
                    <h3>
                        Nos marques
                    </h3>
                    <div class=\"d-flex col-12 flex-wrap\">
                        <a href=\"#\" class=\"me-5\">
                            <img src=\"img/marque/yamaha.png\" alt=\"marque\" style=\"width: 240px; height: 60px;\">
                        </a>
                        <a href=\"#\" class=\"me-5\">
                            <img src=\"img/marque/wb.png\" alt=\"marque\" style=\"width: 160px; height: 90px;\">
                        </a>
                        <a href=\"#\" class=\"me-5\">
                            <img src=\"img/marque/bergerault.png\" alt=\"marque\" style=\"width: 160px; height: 60px;\">
                        </a>
                        <a href=\"#\" class=\"me-5\">
                            <img src=\"img/marque/buffet.png\" alt=\"marque\" style=\"width: 160px; height: 60px;\">
                        </a>
                       <a href=\"#\" class=\"me-5\">
                            <img src=\"img/marque/eagletone.png\" alt=\"marque\" style=\"width: 120px; height: 60px;\">
                        </a>
                        <a href=\"#\" class=\"me-5\">
                            <img src=\"img/marque/gewa.png\" alt=\"marque\" style=\"width: 120px; height: 60px;\">
                        </a>
                        <a href=\"#\" class=\"me-5\">
                            <img src=\"img/marque/herald.jpg\" alt=\"marque\" style=\"width: 120px; height: 60px;\">
                        </a>
                        <a href=\"#\" class=\"me-5\">
                            <img src=\"img/marque/lag.png\" alt=\"marque\" style=\"width: 120px; height: 60px;\">
                        </a>
                        <a href=\"#\" class=\"me-5\">
                            <img src=\"img/marque/lp.png\" alt=\"marque\" style=\"width: 160px; height: 60px;\">
                        </a>
                        <a href=\"#\" class=\"me-5\">
                            <img src=\"img/marque/moog.png\" alt=\"marque\" style=\"width: 120px; height: 60px;\">
                        </a>
                        <a href=\"#\" class=\"me-5\">
                            <img src=\"img/marque/muramatsu.png\" alt=\"marque\" style=\"width: 120px; height: 60px;\">
                        </a>
                        <a href=\"#\" class=\"me-5\">
                            <img src=\"img/marque/pearl.png\" alt=\"marque\" style=\"width: 120px; height: 60px;\">
                        </a>
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
        return "Accueil/Accueil.html.twig";
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
        return array (  134 => 28,  121 => 21,  115 => 18,  110 => 16,  107 => 15,  103 => 14,  96 => 10,  92 => 8,  82 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    Village Green
{% endblock %}

{% block body %}
    <div class=\"container my-4\">
        <div class=\"row\">
            <img src=\"{{ asset('img/background/banner.png') }}\" alt=\"banner\"></div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                {% for Rubrique in rubriques %}
                    <div class=\"col-12 col-sm-6 col-md-4 col-lg-3 mb-4\">
                        <a href=\"{{ path('app_sous_rubrique', {'Id_rubrique': Rubrique.id}) }}\">
                            <div class=\"card card-c bg-dark text-white\">
                                <img class=\"card-img-top\" src=\"{{ asset('img/cat/' ~ Rubrique.getImage()) }}\" alt=\"cat-image\">
                                    <div class=\"card-body\">
                                        <h5 class=\"card-title text-center\">
                                            {{ Rubrique.getLibelleCourt() }}
                                        </h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    {% endfor %}
                </div>
            </div>

            <div class=\"container\" style=\"background-color: white; color: black; margin-bottom: 20px;\">
                <div class=\"row\">
                    <h3>
                        Nos marques
                    </h3>
                    <div class=\"d-flex col-12 flex-wrap\">
                        <a href=\"#\" class=\"me-5\">
                            <img src=\"img/marque/yamaha.png\" alt=\"marque\" style=\"width: 240px; height: 60px;\">
                        </a>
                        <a href=\"#\" class=\"me-5\">
                            <img src=\"img/marque/wb.png\" alt=\"marque\" style=\"width: 160px; height: 90px;\">
                        </a>
                        <a href=\"#\" class=\"me-5\">
                            <img src=\"img/marque/bergerault.png\" alt=\"marque\" style=\"width: 160px; height: 60px;\">
                        </a>
                        <a href=\"#\" class=\"me-5\">
                            <img src=\"img/marque/buffet.png\" alt=\"marque\" style=\"width: 160px; height: 60px;\">
                        </a>
                       <a href=\"#\" class=\"me-5\">
                            <img src=\"img/marque/eagletone.png\" alt=\"marque\" style=\"width: 120px; height: 60px;\">
                        </a>
                        <a href=\"#\" class=\"me-5\">
                            <img src=\"img/marque/gewa.png\" alt=\"marque\" style=\"width: 120px; height: 60px;\">
                        </a>
                        <a href=\"#\" class=\"me-5\">
                            <img src=\"img/marque/herald.jpg\" alt=\"marque\" style=\"width: 120px; height: 60px;\">
                        </a>
                        <a href=\"#\" class=\"me-5\">
                            <img src=\"img/marque/lag.png\" alt=\"marque\" style=\"width: 120px; height: 60px;\">
                        </a>
                        <a href=\"#\" class=\"me-5\">
                            <img src=\"img/marque/lp.png\" alt=\"marque\" style=\"width: 160px; height: 60px;\">
                        </a>
                        <a href=\"#\" class=\"me-5\">
                            <img src=\"img/marque/moog.png\" alt=\"marque\" style=\"width: 120px; height: 60px;\">
                        </a>
                        <a href=\"#\" class=\"me-5\">
                            <img src=\"img/marque/muramatsu.png\" alt=\"marque\" style=\"width: 120px; height: 60px;\">
                        </a>
                        <a href=\"#\" class=\"me-5\">
                            <img src=\"img/marque/pearl.png\" alt=\"marque\" style=\"width: 120px; height: 60px;\">
                        </a>
                    </div>
                </div>
            </div>
{% endblock %}", "Accueil/Accueil.html.twig", "/home/noname/Documents/Village_Green/templates/Accueil/Accueil.html.twig");
    }
}
