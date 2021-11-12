<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modular/features.html.twig */
class __TwigTemplate_d88b3d1520282cf290e9125ef532346b81b672699250d2db3c0c2d98946389eb extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"modular-row features ";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "class", []);
        echo "\">
    <div class=\"container\">
        ";
        // line 3
        echo ($context["content"] ?? null);
        echo "

        <div class=\"feature-items\">
            <div class=\"row\">
                ";
        // line 7
        $context["cols"] = ((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "class", []) == "big")) ? ("col-md-6") : ("col-md-3"));
        // line 8
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "features", []));
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 9
            echo "                    <div class=\"feature col-12 ";
            echo ($context["cols"] ?? null);
            echo " ";
            if ($this->getAttribute($context["feature"], "icon", [])) {
                echo "has-icon";
            }
            echo "\">
                        ";
            // line 10
            if ($this->getAttribute($context["feature"], "icon", [])) {
                // line 11
                echo "                            <i class=\"fa fa-fw fa-";
                echo $this->getAttribute($context["feature"], "icon", []);
                echo "\"></i>
                        ";
            }
            // line 13
            echo "
                        <div class=\"feature-content ";
            // line 14
            if ($this->getAttribute($context["feature"], "icon", [])) {
                echo "push";
            }
            echo "\">
                            ";
            // line 15
            if ($this->getAttribute($context["feature"], "header", [])) {
                // line 16
                echo "                                <h4>";
                echo $this->getAttribute($context["feature"], "header", []);
                echo "</h4>
                            ";
            }
            // line 18
            echo "
                            ";
            // line 19
            if ($this->getAttribute($context["feature"], "text", [])) {
                // line 20
                echo "                                <p>";
                echo $this->getAttribute($context["feature"], "text", []);
                echo "</p>
                            ";
            }
            // line 22
            echo "                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/features.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 25,  95 => 22,  89 => 20,  87 => 19,  84 => 18,  78 => 16,  76 => 15,  70 => 14,  67 => 13,  61 => 11,  59 => 10,  50 => 9,  45 => 8,  43 => 7,  36 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modular-row features {{ page.header.class }}\">
    <div class=\"container\">
        {{ content }}

        <div class=\"feature-items\">
            <div class=\"row\">
                {% set cols = page.header.class == 'big' ? 'col-md-6' : 'col-md-3' %}
                {% for feature in page.header.features %}
                    <div class=\"feature col-12 {{ cols }} {% if feature.icon %}has-icon{% endif %}\">
                        {% if feature.icon %}
                            <i class=\"fa fa-fw fa-{{ feature.icon }}\"></i>
                        {% endif %}

                        <div class=\"feature-content {% if feature.icon %}push{% endif %}\">
                            {% if feature.header %}
                                <h4>{{ feature.header }}</h4>
                            {% endif %}

                            {% if feature.text %}
                                <p>{{ feature.text }}</p>
                            {% endif %}
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>
</div>
", "modular/features.html.twig", "/var/sites/d/dev.elixir-europe.org/public_html/grav/user/themes/bootstrap4/templates/modular/features.html.twig");
    }
}
