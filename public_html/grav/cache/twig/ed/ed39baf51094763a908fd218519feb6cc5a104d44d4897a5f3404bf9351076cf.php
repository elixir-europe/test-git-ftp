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

/* item.html.twig */
class __TwigTemplate_a507a5c672fd124def531db70bc3aa3027697516a3f1c83dd7ce1010b565e8f1 extends \Twig\Template
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
        $this->loadTemplate("item.html.twig", "item.html.twig", 1, "75840223")->display($context);
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/base.html.twig' %}

    {% set base_url = page.parent.url %}
    {% set feed_url = base_url %}

    {% if base_url == '/' %}
        {% set base_url = '' %}
    {% endif %}

    {% if base_url == base_url_relative %}
        {% set feed_url = base_url~'/'~page.parent.slug %}
    {% endif  %}

    {% block content %}
        <div class=\"main-content\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-8 blog-main\">
                        {% if config.plugins.breadcrumbs.enabled %}
                            {% include 'partials/breadcrumbs.html.twig' %}
                        {% endif %}

                        {% include 'partials/blog_item.html.twig' with {'blog': page.parent, 'truncate': false, 'big_header': true} %}
                    </div>

                    <div class=\"col-sm-3 offset-sm-1 blog-sidebar\">
                        {% include 'partials/sidebar.html.twig' with {'blog': page.parent} %}
                    </div>
                </div>
            </div>
        </div>
    {% endblock %}

{% endembed %}
", "item.html.twig", "/var/sites/d/dev.elixir-europe.org/public_html/grav/user/themes/bootstrap4/templates/item.html.twig");
    }
}


/* item.html.twig */
class __TwigTemplate_a507a5c672fd124def531db70bc3aa3027697516a3f1c83dd7ce1010b565e8f1___75840223 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["base_url"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "url", []);
        // line 4
        $context["feed_url"] = ($context["base_url"] ?? null);
        // line 6
        if ((($context["base_url"] ?? null) == "/")) {
            // line 7
            $context["base_url"] = "";
        }
        // line 10
        if ((($context["base_url"] ?? null) == ($context["base_url_relative"] ?? null))) {
            // line 11
            $context["feed_url"] = ((($context["base_url"] ?? null) . "/") . $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "slug", []));
        }
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_content($context, array $blocks = [])
    {
        // line 15
        echo "        <div class=\"main-content\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-8 blog-main\">
                        ";
        // line 19
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "breadcrumbs", []), "enabled", [])) {
            // line 20
            echo "                            ";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "item.html.twig", 20)->display($context);
            // line 21
            echo "                        ";
        }
        // line 22
        echo "
                        ";
        // line 23
        $this->loadTemplate("partials/blog_item.html.twig", "item.html.twig", 23)->display(twig_array_merge($context, ["blog" => $this->getAttribute(($context["page"] ?? null), "parent", []), "truncate" => false, "big_header" => true]));
        // line 24
        echo "                    </div>

                    <div class=\"col-sm-3 offset-sm-1 blog-sidebar\">
                        ";
        // line 27
        $this->loadTemplate("partials/sidebar.html.twig", "item.html.twig", 27)->display(twig_array_merge($context, ["blog" => $this->getAttribute(($context["page"] ?? null), "parent", [])]));
        // line 28
        echo "                    </div>
                </div>
            </div>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 28,  158 => 27,  153 => 24,  151 => 23,  148 => 22,  145 => 21,  142 => 20,  140 => 19,  134 => 15,  131 => 14,  126 => 1,  123 => 11,  121 => 10,  118 => 7,  116 => 6,  114 => 4,  112 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/base.html.twig' %}

    {% set base_url = page.parent.url %}
    {% set feed_url = base_url %}

    {% if base_url == '/' %}
        {% set base_url = '' %}
    {% endif %}

    {% if base_url == base_url_relative %}
        {% set feed_url = base_url~'/'~page.parent.slug %}
    {% endif  %}

    {% block content %}
        <div class=\"main-content\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-8 blog-main\">
                        {% if config.plugins.breadcrumbs.enabled %}
                            {% include 'partials/breadcrumbs.html.twig' %}
                        {% endif %}

                        {% include 'partials/blog_item.html.twig' with {'blog': page.parent, 'truncate': false, 'big_header': true} %}
                    </div>

                    <div class=\"col-sm-3 offset-sm-1 blog-sidebar\">
                        {% include 'partials/sidebar.html.twig' with {'blog': page.parent} %}
                    </div>
                </div>
            </div>
        </div>
    {% endblock %}

{% endembed %}
", "item.html.twig", "/var/sites/d/dev.elixir-europe.org/public_html/grav/user/themes/bootstrap4/templates/item.html.twig");
    }
}
