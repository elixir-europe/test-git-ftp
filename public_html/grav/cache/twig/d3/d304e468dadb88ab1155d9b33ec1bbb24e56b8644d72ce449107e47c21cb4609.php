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

/* partials/simplesearch_searchbox.html.twig */
class __TwigTemplate_a78d48bdaac1cc4b81b8c4be6d3eab681d3ceaa843414041a01c2acc5da942a5 extends \Twig\Template
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
        $context["min_chars"] = $this->getAttribute(($context["config"] ?? null), "get", [0 => "plugins.simplesearch.min_query_length", 1 => 3], "method");
        // line 2
        echo "<div class=\"search-wrapper\">
    <form name=\"search\" class=\"form-group\" data-simplesearch-form>
        <input
            name=\"searchfield\"
            ";
        // line 7
        echo "            ";
        // line 8
        echo "            class=\"search-input form-control\"
            type=\"text\"
            ";
        // line 10
        if ((($context["min_chars"] ?? null) > 0)) {
            echo " min=\"";
            echo ($context["min_chars"] ?? null);
            echo "\" ";
        }
        // line 11
        echo "            required
            placeholder=\"";
        // line 12
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "PLUGIN_SIMPLESEARCH.SEARCH_PLACEHOLDER");
        echo "\"
            value=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["query"] ?? null));
        echo "\"
            data-search-invalid=\"";
        // line 14
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "PLUGIN_SIMPLESEARCH.SEARCH_FIELD_MINIMUM_CHARACTERS", ($context["min_chars"] ?? null));
        echo "\"
            data-search-separator=\"";
        // line 15
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []);
        echo "\"
            data-search-input=\"";
        // line 16
        echo ($context["base_url"] ?? null);
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simplesearch", []), "route", []) == "@self")) ? ("") : (((($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simplesearch", []), "route", []) == "/")) ? ("") : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simplesearch", []), "route", [])))));
        echo "/query\"
        />
        ";
        // line 18
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simplesearch", []), "display_button", [])) {
            // line 19
            echo "            <button type=\"submit\" class=\"search-submit btn btn-outline-primary\">
                <i class=\"fa fa-search\"></i>
            </button>
        ";
        }
        // line 23
        echo "    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/simplesearch_searchbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 23,  77 => 19,  75 => 18,  69 => 16,  65 => 15,  61 => 14,  57 => 13,  53 => 12,  50 => 11,  44 => 10,  40 => 8,  38 => 7,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set min_chars = config.get('plugins.simplesearch.min_query_length', 3) %}
<div class=\"search-wrapper\">
    <form name=\"search\" class=\"form-group\" data-simplesearch-form>
        <input
            name=\"searchfield\"
            {# New name for input after next release of SimpleSearch #}
            {# name=\"query\" #}
            class=\"search-input form-control\"
            type=\"text\"
            {% if min_chars > 0 %} min=\"{{- min_chars -}}\" {% endif %}
            required
            placeholder=\"{{\"PLUGIN_SIMPLESEARCH.SEARCH_PLACEHOLDER\"|t}}\"
            value=\"{{ query|e }}\"
            data-search-invalid=\"{{ \"PLUGIN_SIMPLESEARCH.SEARCH_FIELD_MINIMUM_CHARACTERS\"|t(min_chars)|raw }}\"
            data-search-separator=\"{{ config.system.param_sep }}\"
            data-search-input=\"{{ base_url }}{{ config.plugins.simplesearch.route == '@self' ? '' : (config.plugins.simplesearch.route == '/' ? '' : config.plugins.simplesearch.route) }}/query\"
        />
        {% if config.plugins.simplesearch.display_button %}
            <button type=\"submit\" class=\"search-submit btn btn-outline-primary\">
                <i class=\"fa fa-search\"></i>
            </button>
        {% endif %}
    </form>
</div>
", "partials/simplesearch_searchbox.html.twig", "/var/sites/d/dev.elixir-europe.org/public_html/grav/user/themes/bootstrap4/templates/partials/simplesearch_searchbox.html.twig");
    }
}
