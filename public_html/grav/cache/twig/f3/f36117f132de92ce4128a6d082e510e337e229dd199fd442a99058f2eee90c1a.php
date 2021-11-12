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

/* modular/showcase.html.twig */
class __TwigTemplate_63389528b5ce32629cdc08ab60210dac63f862c590f13b42a858c37c8e1e5f02 extends \Twig\Template
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
        $context["classes"] = "modular-row showcase";
        // line 2
        echo "
";
        // line 3
        $this->loadTemplate("partials/hero.html.twig", "modular/showcase.html.twig", 3)->display(twig_array_merge($context, ["classes" => ($context["classes"] ?? null)]));
    }

    public function getTemplateName()
    {
        return "modular/showcase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set classes = 'modular-row showcase' %}

{% include 'partials/hero.html.twig' with {'classes': classes} %}
", "modular/showcase.html.twig", "/var/sites/d/dev.elixir-europe.org/public_html/grav/user/themes/bootstrap4/templates/modular/showcase.html.twig");
    }
}
