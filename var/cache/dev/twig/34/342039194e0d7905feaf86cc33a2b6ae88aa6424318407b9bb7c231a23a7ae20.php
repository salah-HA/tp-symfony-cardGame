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

/* card/index.html.twig */
class __TwigTemplate_e0514d6d1ae2110a5512cc9b629e71d18684d2ac5549d023a76ef2e6d5c176ec extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/index.html.twig"));

        // line 1
        echo "
<div class=\"containerCard\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cards"]) || array_key_exists("cards", $context) ? $context["cards"] : (function () { throw new RuntimeError('Variable "cards" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 4
            echo "        <div class=\"card\">
            <div class=\"cardTitle\">
                ";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "name", [], "any", false, false, false, 6), "html", null, true);
            echo "
            </div>
            <div class=\"cardImage\">
                <img src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/cards/" . twig_get_attribute($this->env, $this->source, $context["card"], "image", [], "any", false, false, false, 9))), "html", null, true);
            echo "\" alt=\"cardImage\" class=\"imageCard\">
            </div>
            <div class=\"cardInfo\">
                <div class=\"infoCard\">
                    <img src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/hp.png"), "html", null, true);
            echo "\" alt=\"\" class=\"infoImg\">
                    ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "life", [], "any", false, false, false, 14), "html", null, true);
            echo "
                </div>
                <div class=\"infoCard\">
                    <img src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/poing.png"), "html", null, true);
            echo "\" alt=\"\" class=\"infoImg\">
                    ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "attack", [], "any", false, false, false, 18), "html", null, true);
            echo "
                </div>
            </div>
            <div class=\"cardDescription\">
                <ul>
                    <li>
                        C
                    </li>
                </ul>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</div>
    ";
        // line 31
        $this->displayBlock('stylesheets', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 32
        echo "        <style>
            .containerCard{
                width: 100%;
                display: flex;
                flex-wrap: wrap;
            }
            .card{
                border: solid 2px black;
                width: 20%;
                background-color: #999999;
                margin-left: auto;
                margin-right: auto;
                border-radius: 10px 10px;
            }
            .cardTitle{
                width: 95%;
                margin-right: auto;
                margin-left: auto;
                text-align: center;
                padding-bottom: 2%;
                padding-top: 2%;
                font-family: 'Girassol', cursive;
                font-size: 120%;
            }
            .cardImage{
                border: solid 1px black;
                width: 90%;
                margin-left: auto;
                margin-right: auto;
                background-color: goldenrod;
            }
            .imageCard{
                width: 100%;

            }
            .cardInfo{
                width: 95%;
                margin-right: auto;
                margin-left: auto;
                font-family: 'Ibarra Real Nova', serif;
                font-size: 100%;
                font-weight: bold;
                display: flex;
            }
            .infoImg{
                width: 30%;
                margin-left: 1%;
                margin-right: 2%;
            }
            .infoCard{
                margin-right: auto;
                margin-left: auto;
                width: 30%;
            }
            .cardDescription{
                width: 100%;
                background-color: #5eb5e0;
            }
        </style>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "card/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 32,  104 => 31,  101 => 30,  83 => 18,  79 => 17,  73 => 14,  69 => 13,  62 => 9,  56 => 6,  52 => 4,  48 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"containerCard\">
    {% for card in cards %}
        <div class=\"card\">
            <div class=\"cardTitle\">
                {{ card.name }}
            </div>
            <div class=\"cardImage\">
                <img src=\"{{ asset('/uploads/cards/' ~ card.image) }}\" alt=\"cardImage\" class=\"imageCard\">
            </div>
            <div class=\"cardInfo\">
                <div class=\"infoCard\">
                    <img src=\"{{ asset('/img/hp.png') }}\" alt=\"\" class=\"infoImg\">
                    {{ card.life }}
                </div>
                <div class=\"infoCard\">
                    <img src=\"{{ asset('/img/poing.png') }}\" alt=\"\" class=\"infoImg\">
                    {{ card.attack }}
                </div>
            </div>
            <div class=\"cardDescription\">
                <ul>
                    <li>
                        C
                    </li>
                </ul>
            </div>
        </div>
    {% endfor %}
</div>
    {% block stylesheets %}
        <style>
            .containerCard{
                width: 100%;
                display: flex;
                flex-wrap: wrap;
            }
            .card{
                border: solid 2px black;
                width: 20%;
                background-color: #999999;
                margin-left: auto;
                margin-right: auto;
                border-radius: 10px 10px;
            }
            .cardTitle{
                width: 95%;
                margin-right: auto;
                margin-left: auto;
                text-align: center;
                padding-bottom: 2%;
                padding-top: 2%;
                font-family: 'Girassol', cursive;
                font-size: 120%;
            }
            .cardImage{
                border: solid 1px black;
                width: 90%;
                margin-left: auto;
                margin-right: auto;
                background-color: goldenrod;
            }
            .imageCard{
                width: 100%;

            }
            .cardInfo{
                width: 95%;
                margin-right: auto;
                margin-left: auto;
                font-family: 'Ibarra Real Nova', serif;
                font-size: 100%;
                font-weight: bold;
                display: flex;
            }
            .infoImg{
                width: 30%;
                margin-left: 1%;
                margin-right: 2%;
            }
            .infoCard{
                margin-right: auto;
                margin-left: auto;
                width: 30%;
            }
            .cardDescription{
                width: 100%;
                background-color: #5eb5e0;
            }
        </style>
    {% endblock %}", "card/index.html.twig", "C:\\xampp\\htdocs\\coursIPSSI\\symfony5mars\\templates\\card\\index.html.twig");
    }
}
