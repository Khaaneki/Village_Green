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

/* panier/index.html.twig */
class __TwigTemplate_761388a90e5ab66a2238d6ab404f92c8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "panier/index.html.twig", 1);
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

        yield "Votre panier";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"parallax\">
    <div class=\"container\">
        <section class=\"row\" style=\"background-color: white; color: black; margin-top: 20px;\">
            <div class=\"col-12\">
                <h1 class=\"text-center\">Panier</h1>
                <table class=\"table table-bordered table-striped table-hover\">
                    <thead class=\"thead-dark\">
                        <tr>
                            <th>Image</th>
                            <th>Produit</th>
                            <th>Prix Hors Taxe</th>
                            <th>Quantité</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 23, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 24
            yield "                            <tr>
                                <td>
                                    <div class=\"img-panier\">
                                        <img src=\"";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/article/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "article", [], "any", false, false, false, 27), "image", [], "any", false, false, false, 27))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "article", [], "any", false, false, false, 27), "libelle", [], "any", false, false, false, 27), "html", null, true);
            yield "\">
                                    </div>
                                </td>
                                <td>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "article", [], "any", false, false, false, 30), "libelleCourt", [], "any", false, false, false, 30), "html", null, true);
            yield " <br> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "article", [], "any", false, false, false, 30), "libelle", [], "any", false, false, false, 30), "html", null, true);
            yield "</td>
                                <td>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "article", [], "any", false, false, false, 31), "prixHT", [], "any", false, false, false, 31), "html", null, true);
            yield " €</td>
                                <td>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantite", [], "any", false, false, false, 32), "html", null, true);
            yield "</td>
                                <td>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantite", [], "any", false, false, false, 33) * CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "article", [], "any", false, false, false, 33), "prixHT", [], "any", false, false, false, 33)), "html", null, true);
            yield " €</td>
                                <td>
                                    <a href=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "article", [], "any", false, false, false, 35), "id", [], "any", false, false, false, 35)]), "html", null, true);
            yield "\" class=\"btn btn-secondary\">+</a>
                                    <a href=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_remove", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "article", [], "any", false, false, false, 36), "id", [], "any", false, false, false, 36)]), "html", null, true);
            yield "\" class=\"btn btn-secondary\">-</a>
                                    <a href=\"";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_del", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "article", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37)]), "html", null, true);
            yield "\" class=\"btn btn-secondary\">Supprimer</a>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 41
            yield "                            <tr>
                                <td colspan=\"6\">Votre panier est vide</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan=\"4\" class=\"text-right font-weight-bold\">Total</td>
                            <td>";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 49, $this->source); })()), "html", null, true);
        yield " €</td>
                            <td>
                                <a href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_empty");
        yield "\" class=\"btn btn-secondary\">Vider</a>
                            </td>
                        </tr>
                    </tfoot>
                </table>
                <br>
                <div class=\"text-center\">
                    <a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_Accueil");
        yield "\" class=\"btn btn-secondary\">Continuer mes achats</a>
                    ";
        // line 59
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 60
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_ajout");
            yield "\" class=\"btn btn-secondary\">Valider le panier</a>
                    ";
        } else {
            // line 62
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"btn btn-secondary\">Connectez-vous pour valider le panier</a>
                    ";
        }
        // line 64
        yield "
                    ";
        // line 66
        yield "                    <p>Connecté: ";
        yield (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) ? ("Oui") : ("Non"));
        yield "</p>
                        
                </div>
            </div>
        </section>
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
        return "panier/index.html.twig";
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
        return array (  214 => 66,  211 => 64,  205 => 62,  199 => 60,  197 => 59,  193 => 58,  183 => 51,  178 => 49,  172 => 45,  163 => 41,  154 => 37,  150 => 36,  146 => 35,  141 => 33,  137 => 32,  133 => 31,  127 => 30,  119 => 27,  114 => 24,  109 => 23,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Votre panier{% endblock %}

{% block body %}
<div class=\"parallax\">
    <div class=\"container\">
        <section class=\"row\" style=\"background-color: white; color: black; margin-top: 20px;\">
            <div class=\"col-12\">
                <h1 class=\"text-center\">Panier</h1>
                <table class=\"table table-bordered table-striped table-hover\">
                    <thead class=\"thead-dark\">
                        <tr>
                            <th>Image</th>
                            <th>Produit</th>
                            <th>Prix Hors Taxe</th>
                            <th>Quantité</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for item in data %}
                            <tr>
                                <td>
                                    <div class=\"img-panier\">
                                        <img src=\"{{ asset('img/article/' ~ item.article.image) }}\" alt=\"{{ item.article.libelle }}\">
                                    </div>
                                </td>
                                <td>{{ item.article.libelleCourt }} <br> {{ item.article.libelle }}</td>
                                <td>{{ item.article.prixHT }} €</td>
                                <td>{{ item.quantite }}</td>
                                <td>{{ item.quantite * item.article.prixHT }} €</td>
                                <td>
                                    <a href=\"{{ path('panier_add', {id: item.article.id}) }}\" class=\"btn btn-secondary\">+</a>
                                    <a href=\"{{ path('panier_remove', {id: item.article.id}) }}\" class=\"btn btn-secondary\">-</a>
                                    <a href=\"{{ path('panier_del', {id: item.article.id}) }}\" class=\"btn btn-secondary\">Supprimer</a>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"6\">Votre panier est vide</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan=\"4\" class=\"text-right font-weight-bold\">Total</td>
                            <td>{{ total }} €</td>
                            <td>
                                <a href=\"{{ path('panier_empty') }}\" class=\"btn btn-secondary\">Vider</a>
                            </td>
                        </tr>
                    </tfoot>
                </table>
                <br>
                <div class=\"text-center\">
                    <a href=\"{{ path('app_Accueil') }}\" class=\"btn btn-secondary\">Continuer mes achats</a>
                    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                        <a href=\"{{ path('app_commande_ajout') }}\" class=\"btn btn-secondary\">Valider le panier</a>
                    {% else %}
                        <a href=\"{{ path('app_login') }}\" class=\"btn btn-secondary\">Connectez-vous pour valider le panier</a>
                    {% endif %}

                    {# Debug info #}
                    <p>Connecté: {{ is_granted('IS_AUTHENTICATED_FULLY') ? 'Oui' : 'Non' }}</p>
                        
                </div>
            </div>
        </section>
    </div>
</div>
{% endblock %}", "panier/index.html.twig", "/home/noname/Documents/Village_Green/templates/panier/index.html.twig");
    }
}
