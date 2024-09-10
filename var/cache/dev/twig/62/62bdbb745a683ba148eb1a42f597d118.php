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

/* sousRubrique/sousRubrique.html.twig */
class __TwigTemplate_9cb47241a01c04846b3fa67f9c277c91 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sousRubrique/sousRubrique.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sousRubrique/sousRubrique.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "sousRubrique/sousRubrique.html.twig", 1);
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
        yield "    sousRubrique
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
        yield "<div class=\"container my-4\">
    <a href=\"javascript:history.back()\" class=\"btn btn-dark\"><</a>
    <div class=\"row justify-content-center\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sousRubriques"]) || array_key_exists("sousRubriques", $context) ? $context["sousRubriques"] : (function () { throw new RuntimeError('Variable "sousRubriques" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sousRubrique"]) {
            // line 12
            yield "            <div class=\"col-12 col-sm-6 col-md-4 col-lg-3 mb-4\">
                <a href=\"";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article", ["sous_rubrique_id" => CoreExtension::getAttribute($this->env, $this->source, $context["sousRubrique"], "id", [], "any", false, false, false, 13)]), "html", null, true);
            yield "\">
                    <div class=\"card bg-dark text-white\">
                        <img class=\"card-img-top\" src=\"";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/sousimg/" . CoreExtension::getAttribute($this->env, $this->source, $context["sousRubrique"], "getImage", [], "method", false, false, false, 15))), "html", null, true);
            yield "\" alt=\"sous-image\" style=\"height: 200px; object-fit: cover;\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sousRubrique"], "getLibelleCourt", [], "method", false, false, false, 17), "html", null, true);
            yield "</h5>
                            <h6 class=\"card-subtitle mb-2 text-muted\">";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sousRubrique"], "getLibelle", [], "method", false, false, false, 18), "html", null, true);
            yield "</h6>
                        </div>
                    </div>
                </a>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sousRubrique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        yield "    </div>
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
        return "sousRubrique/sousRubrique.html.twig";
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
        return array (  130 => 24,  118 => 18,  114 => 17,  109 => 15,  104 => 13,  101 => 12,  97 => 11,  92 => 8,  82 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    sousRubrique
{% endblock %}

{% block body %}
<div class=\"container my-4\">
    <a href=\"javascript:history.back()\" class=\"btn btn-dark\"><</a>
    <div class=\"row justify-content-center\">
        {% for sousRubrique in sousRubriques %}
            <div class=\"col-12 col-sm-6 col-md-4 col-lg-3 mb-4\">
                <a href=\"{{ path('app_article', {'sous_rubrique_id': sousRubrique.id}) }}\">
                    <div class=\"card bg-dark text-white\">
                        <img class=\"card-img-top\" src=\"{{ asset('img/sousimg/' ~ sousRubrique.getImage()) }}\" alt=\"sous-image\" style=\"height: 200px; object-fit: cover;\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">{{ sousRubrique.getLibelleCourt() }}</h5>
                            <h6 class=\"card-subtitle mb-2 text-muted\">{{ sousRubrique.getLibelle() }}</h6>
                        </div>
                    </div>
                </a>
            </div>
        {% endfor %}
    </div>
</div>
{% endblock %}", "sousRubrique/sousRubrique.html.twig", "/home/noname/Documents/Village_Green/templates/sousRubrique/sousRubrique.html.twig");
    }
}
