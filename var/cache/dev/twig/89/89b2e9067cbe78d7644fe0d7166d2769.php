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

/* partials/footer.html.twig */
class __TwigTemplate_82e27e97dae1c4d97e2c7b072ce35dfd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/footer.html.twig"));

        yield "<footer class=\"text-light bg-dark py-4\">
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-4\">
            <h5>Contacts</h5>
            <p>Conseil et commande par téléphone : 06.06.06.06.06</p>
            <p>
                Du lundi au vendredi de 9:00 à 18:00<br>
                Samedi de 10:00 à 18:00<br>
                France Métropolitaine : 03.18.19.63.20
            </p>
        </div>
        <div class=\"col-md-4\">
            <h5>Utiles !</h5>
            <ul class=\"list-unstyled\">
                <li><a href=\"#\" class=\"text-white\">Qui sommes nous ?</a></li>
                <li><a href=\"#\" class=\"text-white\">Vous avez un blog ?</a></li>
                <li><a href=\"#\" class=\"text-white\">FAQ. Questions Fréquentes.</a></li>
                <li><a href=\"#\" class=\"text-white\">Conditions Générales de Vente</a></li>
                <li><a href=\"#\" class=\"text-white\">Mentions légales</a></li>
                <li><a href=\"#\" class=\"text-white\">Plan du site</a></li>
            </ul>
        </div>
        <div class=\"col-md-4\">
            <h5>Suivez-nous sur</h5>
            <div class=\"d-flex\">
                <a href=\"https://www.facebook.com/\" class=\"text-white me-3\">
                    <img src=\"/img/logo/facebook.png\" alt=\"Facebook\" style=\"width: 24px; height: 24px;\">
                </a>
                <a href=\"https://www.instagram.com/\" class=\"text-white me-3\">
                    <img src=\"/img/logo/insta.png\" alt=\"Instagram\" style=\"width: 24px; height: 24px;\">
                </a>
                <a href=\"https://x.com/\" class=\"text-white me-3\">
                    <img src=\"/img/logo/X.png\" alt=\"X\" style=\"width: 24px; height: 24px;\">
                </a>
                <a href\"https://www.linkedin.com/\" class=\"text-white me-3\">
                    <img src=\"/img/logo/linkedin.png\" alt=\"Linkedin\" style=\"width: 24px; height: 24px;\">
                </a>
                <a href=\"https://www.youtube.com/\" class=\"text-white\">
                    <img src=\"/img/logo/youtube.jpg\" alt=\"Youtube\" style=\"width: 24px; height: 24px;\">
                </a>
            </div>
        </div>
    </div>
</div>
</footer>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array ();
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"text-light bg-dark py-4\">
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-4\">
            <h5>Contacts</h5>
            <p>Conseil et commande par téléphone : 06.06.06.06.06</p>
            <p>
                Du lundi au vendredi de 9:00 à 18:00<br>
                Samedi de 10:00 à 18:00<br>
                France Métropolitaine : 03.18.19.63.20
            </p>
        </div>
        <div class=\"col-md-4\">
            <h5>Utiles !</h5>
            <ul class=\"list-unstyled\">
                <li><a href=\"#\" class=\"text-white\">Qui sommes nous ?</a></li>
                <li><a href=\"#\" class=\"text-white\">Vous avez un blog ?</a></li>
                <li><a href=\"#\" class=\"text-white\">FAQ. Questions Fréquentes.</a></li>
                <li><a href=\"#\" class=\"text-white\">Conditions Générales de Vente</a></li>
                <li><a href=\"#\" class=\"text-white\">Mentions légales</a></li>
                <li><a href=\"#\" class=\"text-white\">Plan du site</a></li>
            </ul>
        </div>
        <div class=\"col-md-4\">
            <h5>Suivez-nous sur</h5>
            <div class=\"d-flex\">
                <a href=\"https://www.facebook.com/\" class=\"text-white me-3\">
                    <img src=\"/img/logo/facebook.png\" alt=\"Facebook\" style=\"width: 24px; height: 24px;\">
                </a>
                <a href=\"https://www.instagram.com/\" class=\"text-white me-3\">
                    <img src=\"/img/logo/insta.png\" alt=\"Instagram\" style=\"width: 24px; height: 24px;\">
                </a>
                <a href=\"https://x.com/\" class=\"text-white me-3\">
                    <img src=\"/img/logo/X.png\" alt=\"X\" style=\"width: 24px; height: 24px;\">
                </a>
                <a href\"https://www.linkedin.com/\" class=\"text-white me-3\">
                    <img src=\"/img/logo/linkedin.png\" alt=\"Linkedin\" style=\"width: 24px; height: 24px;\">
                </a>
                <a href=\"https://www.youtube.com/\" class=\"text-white\">
                    <img src=\"/img/logo/youtube.jpg\" alt=\"Youtube\" style=\"width: 24px; height: 24px;\">
                </a>
            </div>
        </div>
    </div>
</div>
</footer>", "partials/footer.html.twig", "/home/noname/Documents/Village_Green/templates/partials/footer.html.twig");
    }
}
