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

/* modular/text.html.twig */
class __TwigTemplate_b06898c57e9fa4dc41efebf793d2411f0690ab687d29d64775d8d3c9542fafbe extends \Twig\Template
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
        echo "<div class=\"modular-row callout\">
    <div class=\"container\">
        ";
        // line 3
        $context["image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
        // line 4
        echo "        ";
        if (($context["image"] ?? null)) {
            // line 5
            echo "            ";
            echo $this->getAttribute($this->getAttribute(($context["image"] ?? null), "cropResize", [0 => 400, 1 => 400], "method"), "html", [0 => "", 1 => "", 2 => ("d-block rounded float-md-" . $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "image_align", []))], "method");
            echo "
        ";
        }
        // line 7
        echo "
        ";
        // line 8
        echo ($context["content"] ?? null);
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 8,  45 => 7,  39 => 5,  36 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modular-row callout\">
    <div class=\"container\">
        {% set image = page.media.images|first %}
        {% if image %}
            {{ image.cropResize(400,400).html('','','d-block rounded float-md-'~page.header.image_align) }}
        {% endif %}

        {{ content }}
    </div>
</div>
", "modular/text.html.twig", "/var/sites/d/dev.elixir-europe.org/public_html/grav/user/themes/bootstrap4/templates/modular/text.html.twig");
    }
}
