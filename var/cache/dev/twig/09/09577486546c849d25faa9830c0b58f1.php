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

/* commande/commande.html.twig */
class __TwigTemplate_461246f26c0aeb77733c0f594c21e62f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/commande.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/commande.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "commande/commande.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "<div class=\"parallax\">
    <div class=\"container mt-4\">
        <div class=\"row justify-content-center\">
            <!-- Formulaire de coordonnées -->
            <div class=\"col-lg-6 mx-auto\">
                <div class=\"card no-hover h-100 p-4\">
                    <h2 class=\"mb-4 text-center\">Coordonnées</h2>
                    ";
        // line 11
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => true]]);
        yield "
                    
                    <!-- Email -->
                    <div class=\"form-group mb-3\">
                        ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "mail_facturation", [], "any", false, false, false, 15), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Adresse e-mail"]);
        yield "
                        ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "mail_facturation", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    </div>

                    <!-- Livraison -->
                    <h2 class=\"mb-4 text-center\">Livraison</h2>
                    <div class=\"form-group mb-3\">
                        ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "adresse_livraison", [], "any", false, false, false, 22), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Adresse"]);
        yield "
                        ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "adresse_livraison", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    </div>
                    <div class=\"form-group mb-3\">
                        ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "ville_facturation", [], "any", false, false, false, 26), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Ville"]);
        yield "
                        ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "ville_facturation", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    </div>
                    <div class=\"form-group mb-3\">
                        ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "telephone_facturation", [], "any", false, false, false, 30), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Téléphone"]);
        yield "
                        ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "telephone_facturation", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    </div>

                    <!-- Details Paiement-->
                    <h2 class=\"mb-4 text-center\">Détails de paiement</h2>
                    <div class=\"form-group mb-3\">
                        ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "moyen_paiement", [], "any", false, false, false, 37), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Moyen de paiement"]);
        yield "
                        ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "moyen_paiement", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    </div>

                    <div class=\"form-group mb-3\">
                        ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "adresse_facturation", [], "any", false, false, false, 42), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Adresse de facturation"]);
        yield "
                        ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "adresse_facturation", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    </div>
                    
                    <div class=\"form-group mb-3\">
                        ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "date_commande", [], "any", false, false, false, 47), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date de la prise de commande"]);
        yield "
                        ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "date_commande", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    </div>

                    <!-- Submit Button -->
                    <div class=\"text-center mt-4\">
                        <button type=\"submit\" class=\"btn btn-primary btn-block\">Commander et Payer</button>
                    </div>
                    
                    ";
        // line 56
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>

            <!-- Récapitulatif de commande -->
            <div class=\"col-lg-6 mx-auto\">
                <div class=\"card no-hover h-100 shadow-sm p-4\">
                    <h2 class=\"mb-4 text-center\">Récapitulatif Commande</h2>
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-striped\">
                            <thead class=\"thead-light\">
                                <tr>
                                    <th>Image</th>
                                    <th>Nom</th>
                                    <th>Prix unitaire</th>
                                    <th>Quantité</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 76, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 77
            yield "                                    <tr>
                                        <td>
                                            <div class=\"img-panier\">
                                            <img src=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/article/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["element"], "article", [], "any", false, false, false, 80), "image", [], "any", false, false, false, 80))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["element"], "article", [], "any", false, false, false, 80), "libellecourt", [], "any", false, false, false, 80), "html", null, true);
            yield "\" class=\"img-fluid\" />
                                        </div>
                                        </td>
                                        <td>";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["element"], "article", [], "any", false, false, false, 83), "libellecourt", [], "any", false, false, false, 83), "html", null, true);
            yield "</td>
                                        <td>";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["element"], "article", [], "any", false, false, false, 84), "prixHT", [], "any", false, false, false, 84), "html", null, true);
            yield " €</td>
                                        <td>";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["element"], "quantité", [], "any", false, false, false, 85), "html", null, true);
            yield "</td>
                                        <td>";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["element"], "quantité", [], "any", false, false, false, 86) * CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["element"], "article", [], "any", false, false, false, 86), "prixHT", [], "any", false, false, false, 86)), "html", null, true);
            yield " €</td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 89
            yield "                                    <tr>
                                        <td colspan=\"6\" class=\"text-center\">Aucun article dans le panier</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        yield "                            </tbody>
                            <tfoot class=\"font-weight-bold\">
                                <tr>
                                    <td colspan=\"3\"></td>
                                    <td>HT</td>
                                    <td>";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 98, $this->source); })()), "html", null, true);
        yield " € HT</td>
                                </tr>
                                <tr>
                                    <td colspan=\"3\"></td>
                                    <td>TVA</td>
                                    <td>";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 103, $this->source); })()) * 0.2), "html", null, true);
        yield " €</td>
                                </tr>
                                <tr>
                                    <td colspan=\"3\">Total</td>
                                    <td>
                                        ";
        // line 108
        if ((null === (isset($context["reduction"]) || array_key_exists("reduction", $context) ? $context["reduction"] : (function () { throw new RuntimeError('Variable "reduction" does not exist.', 108, $this->source); })()))) {
            // line 109
            yield "                                            Pas de remise
                                        ";
        } else {
            // line 111
            yield "                                            Remise ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["reduction"]) || array_key_exists("reduction", $context) ? $context["reduction"] : (function () { throw new RuntimeError('Variable "reduction" does not exist.', 111, $this->source); })()), "html", null, true);
            yield " %
                                        ";
        }
        // line 113
        yield "                                    </td>
                                    <td>";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 114, $this->source); })()) * 1.2) - (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 114, $this->source); })()) * (isset($context["reduction"]) || array_key_exists("reduction", $context) ? $context["reduction"] : (function () { throw new RuntimeError('Variable "reduction" does not exist.', 114, $this->source); })())) / 100)), "html", null, true);
        yield " €</td>
                                </tr>
                            </tfoot>
                        </table>
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
        return "commande/commande.html.twig";
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
        return array (  276 => 114,  273 => 113,  267 => 111,  263 => 109,  261 => 108,  253 => 103,  245 => 98,  238 => 93,  229 => 89,  221 => 86,  217 => 85,  213 => 84,  209 => 83,  201 => 80,  196 => 77,  191 => 76,  168 => 56,  157 => 48,  153 => 47,  146 => 43,  142 => 42,  135 => 38,  131 => 37,  122 => 31,  118 => 30,  112 => 27,  108 => 26,  102 => 23,  98 => 22,  89 => 16,  85 => 15,  78 => 11,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"parallax\">
    <div class=\"container mt-4\">
        <div class=\"row justify-content-center\">
            <!-- Formulaire de coordonnées -->
            <div class=\"col-lg-6 mx-auto\">
                <div class=\"card no-hover h-100 p-4\">
                    <h2 class=\"mb-4 text-center\">Coordonnées</h2>
                    {{ form_start(form, { 'attr': {'class': 'needs-validation', 'novalidate': true} }) }}
                    
                    <!-- Email -->
                    <div class=\"form-group mb-3\">
                        {{ form_label(form.mail_facturation, 'Adresse e-mail', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.mail_facturation, {'attr': {'class': 'form-control'}}) }}
                    </div>

                    <!-- Livraison -->
                    <h2 class=\"mb-4 text-center\">Livraison</h2>
                    <div class=\"form-group mb-3\">
                        {{ form_label(form.adresse_livraison, 'Adresse', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.adresse_livraison, {'attr': {'class': 'form-control'}}) }}
                    </div>
                    <div class=\"form-group mb-3\">
                        {{ form_label(form.ville_facturation, 'Ville', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.ville_facturation, {'attr': {'class': 'form-control'}}) }}
                    </div>
                    <div class=\"form-group mb-3\">
                        {{ form_label(form.telephone_facturation, 'Téléphone', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.telephone_facturation, {'attr': {'class': 'form-control'}}) }}
                    </div>

                    <!-- Details Paiement-->
                    <h2 class=\"mb-4 text-center\">Détails de paiement</h2>
                    <div class=\"form-group mb-3\">
                        {{ form_label(form.moyen_paiement, 'Moyen de paiement', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.moyen_paiement, {'attr': {'class': 'form-control'}}) }}
                    </div>

                    <div class=\"form-group mb-3\">
                        {{ form_label(form.adresse_facturation, 'Adresse de facturation', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.adresse_facturation, {'attr': {'class': 'form-control'}}) }}
                    </div>
                    
                    <div class=\"form-group mb-3\">
                        {{ form_label(form.date_commande, 'Date de la prise de commande', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.date_commande, {'attr': {'class': 'form-control'}}) }}
                    </div>

                    <!-- Submit Button -->
                    <div class=\"text-center mt-4\">
                        <button type=\"submit\" class=\"btn btn-primary btn-block\">Commander et Payer</button>
                    </div>
                    
                    {{ form_end(form) }}
                </div>
            </div>

            <!-- Récapitulatif de commande -->
            <div class=\"col-lg-6 mx-auto\">
                <div class=\"card no-hover h-100 shadow-sm p-4\">
                    <h2 class=\"mb-4 text-center\">Récapitulatif Commande</h2>
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-striped\">
                            <thead class=\"thead-light\">
                                <tr>
                                    <th>Image</th>
                                    <th>Nom</th>
                                    <th>Prix unitaire</th>
                                    <th>Quantité</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for element in panier %}
                                    <tr>
                                        <td>
                                            <div class=\"img-panier\">
                                            <img src=\"{{ asset('img/article/' ~ element.article.image) }}\" alt=\"{{ element.article.libellecourt }}\" class=\"img-fluid\" />
                                        </div>
                                        </td>
                                        <td>{{ element.article.libellecourt }}</td>
                                        <td>{{ element.article.prixHT }} €</td>
                                        <td>{{ element.quantité }}</td>
                                        <td>{{ element.quantité * element.article.prixHT }} €</td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"6\" class=\"text-center\">Aucun article dans le panier</td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                            <tfoot class=\"font-weight-bold\">
                                <tr>
                                    <td colspan=\"3\"></td>
                                    <td>HT</td>
                                    <td>{{ total }} € HT</td>
                                </tr>
                                <tr>
                                    <td colspan=\"3\"></td>
                                    <td>TVA</td>
                                    <td>{{ total * 0.2 }} €</td>
                                </tr>
                                <tr>
                                    <td colspan=\"3\">Total</td>
                                    <td>
                                        {% if reduction is null %}
                                            Pas de remise
                                        {% else %}
                                            Remise {{ reduction }} %
                                        {% endif %}
                                    </td>
                                    <td>{{ total * 1.2 - total * reduction / 100 }} €</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "commande/commande.html.twig", "/home/noname/Documents/Village_Green/templates/commande/commande.html.twig");
    }
}
