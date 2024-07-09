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

/* partials/header.html.twig */
class __TwigTemplate_dc86d0584e8d40d7cc8ebe08bd5945d1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/header.html.twig"));

        // line 1
        yield "<body>
    <div class=\"container text-light bg-dark\">
        <h1 class=\"text-center\">
            Village Green
        </h1>
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_Accueil");
        yield "\">
                    <img src=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo/house.png"), "html", null, true);
        yield "\" alt=\"Home\" style=\"width: 40px; height: 40px;\"></a>
                    <div class=\"d-flex flex-grow-1\">
                        <form class=\"form-inline\" action=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_Accueil");
        yield "\" method=\"GET\">
                            <div class=\"input-group\">
                                <input class=\"form-control\" type=\"search\" placeholder=\"Rechercher de produit\" name=\"recherche\">
                                    <div class=\"input-group-append\" style=\"width: 10px;\"></div>
                                    <button class=\"btn btn-secondary btn-sm\" type=\"submit\">
                                        Entrer
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class=\"d-flex align-items-center ms-auto mb-lg-0\">
                            ";
        // line 22
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22)) {
            // line 23
            yield "                                <a class=\"btn btn-outline-light me-2\" href=\"\">
                                    Profile
                                </a>
                                <a class=\"btn btn-outline-light me-2\" href=\"";
            // line 26
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">
                                    Me deconnecter
                                </a>
                            ";
        } else {
            // line 30
            yield "                                <a class=\"btn btn-outline-light me-2\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">
                                    Se connecter
                                </a>
                                <a class=\"btn btn-outline-light me-2\" href=\"";
            // line 33
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\">
                                    M'inscrire
                                </a>
                            ";
        }
        // line 37
        yield "                            <a href=\"#\">
                                <img src=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo/panier.png"), "html", null, true);
        yield "\" alt=\"Panier\" style=\"width: 45px; height: 36px;\"></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </body>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partials/header.html.twig";
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
        return array (  107 => 38,  104 => 37,  97 => 33,  90 => 30,  83 => 26,  78 => 23,  76 => 22,  62 => 11,  57 => 9,  53 => 8,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<body>
    <div class=\"container text-light bg-dark\">
        <h1 class=\"text-center\">
            Village Green
        </h1>
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"{{ path('app_Accueil') }}\">
                    <img src=\"{{ asset('img/logo/house.png') }}\" alt=\"Home\" style=\"width: 40px; height: 40px;\"></a>
                    <div class=\"d-flex flex-grow-1\">
                        <form class=\"form-inline\" action=\"{{ path('app_Accueil') }}\" method=\"GET\">
                            <div class=\"input-group\">
                                <input class=\"form-control\" type=\"search\" placeholder=\"Rechercher de produit\" name=\"recherche\">
                                    <div class=\"input-group-append\" style=\"width: 10px;\"></div>
                                    <button class=\"btn btn-secondary btn-sm\" type=\"submit\">
                                        Entrer
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class=\"d-flex align-items-center ms-auto mb-lg-0\">
                            {% if app.user %}
                                <a class=\"btn btn-outline-light me-2\" href=\"\">
                                    Profile
                                </a>
                                <a class=\"btn btn-outline-light me-2\" href=\"{{ path('app_logout') }}\">
                                    Me deconnecter
                                </a>
                            {% else %}
                                <a class=\"btn btn-outline-light me-2\" href=\"{{ path('app_login') }}\">
                                    Se connecter
                                </a>
                                <a class=\"btn btn-outline-light me-2\" href=\"{{ path('app_register') }}\">
                                    M'inscrire
                                </a>
                            {% endif %}
                            <a href=\"#\">
                                <img src=\"{{ asset('img/logo/panier.png') }}\" alt=\"Panier\" style=\"width: 45px; height: 36px;\"></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </body>", "partials/header.html.twig", "/home/noname/Documents/Village_Green/templates/partials/header.html.twig");
    }
}
