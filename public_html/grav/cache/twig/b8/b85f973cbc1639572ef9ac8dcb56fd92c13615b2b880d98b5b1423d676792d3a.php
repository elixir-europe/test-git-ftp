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

/* partials/relatedpages.html.twig */
class __TwigTemplate_d66bff73a7e84adfcdbf29bc14b9764883610707739375210288d63a86a3c693 extends \Twig\Template
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
        echo "<ul class=\"related-pages\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["related_pages"] ?? null));
        foreach ($context['_seq'] as $context["related_path"] => $context["score"]) {
            // line 3
            echo "        ";
            $context["related"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "pages", [], "array"), "get", [0 => $context["related_path"]], "method");
            // line 4
            echo "        ";
            if (($context["related"] ?? null)) {
                // line 5
                echo "            <li>
                ";
                // line 6
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "relatedpages", []), "show_score", [])) {
                    // line 7
                    echo "                    <span class=\"score\">";
                    echo $context["score"];
                    echo "</span>
                ";
                }
                // line 9
                echo "                <a href=\"";
                echo $this->getAttribute(($context["related"] ?? null), "url", []);
                echo "\" title=\"";
                echo $this->getAttribute(($context["related"] ?? null), "title", []);
                echo "\">";
                echo $this->getAttribute(($context["related"] ?? null), "title", []);
                echo "</a>
            </li>
        ";
            }
            // line 12
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['related_path'], $context['score'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "partials/relatedpages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 13,  65 => 12,  54 => 9,  48 => 7,  46 => 6,  43 => 5,  40 => 4,  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"related-pages\">
    {% for related_path, score in related_pages %}
        {% set related = grav['pages'].get(related_path) %}
        {% if related %}
            <li>
                {% if config.plugins.relatedpages.show_score %}
                    <span class=\"score\">{{ score }}</span>
                {% endif %}
                <a href=\"{{ related.url }}\" title=\"{{ related.title }}\">{{ related.title }}</a>
            </li>
        {% endif %}
    {% endfor %}
</ul>", "partials/relatedpages.html.twig", "/var/sites/d/dev.elixir-europe.org/public_html/grav/user/plugins/relatedpages/templates/partials/relatedpages.html.twig");
    }
}
