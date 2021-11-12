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

/* partials/blog_item.html.twig */
class __TwigTemplate_29ba670f924928e70e3a8e673273c15b4e4866afdc9070e3dccfd119e51e865c extends \Twig\Template
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
        echo "<div class=\"list-item\">

    ";
        // line 3
        $context["header_image"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image", []), true);
        // line 4
        echo "    ";
        $context["header_image_width"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image_width", []), 900);
        // line 5
        echo "    ";
        $context["header_image_height"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image_height", []), 300);
        // line 6
        echo "    ";
        $context["header_image_file"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image_file", []);
        // line 7
        echo "
    <div class=\"list-blog-header\">

        ";
        // line 10
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "link", [])) {
            // line 11
            echo "            <h3>
                ";
            // line 12
            if ( !($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "continue_link", []) === false)) {
                // line 13
                echo "                    <a href=\"";
                echo $this->getAttribute(($context["page"] ?? null), "url", []);
                echo "\"><i class=\"fa fa-angle-double-right\"></i></a>
                ";
            }
            // line 15
            echo "                <a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "link", []);
            echo "\">";
            echo $this->getAttribute(($context["page"] ?? null), "title", []);
            echo "</a>
            </h3>
        ";
        } else {
            // line 18
            echo "            <h3><a href=\"";
            echo $this->getAttribute(($context["page"] ?? null), "url", []);
            echo "\">";
            echo $this->getAttribute(($context["page"] ?? null), "title", []);
            echo "</a></h3>
        ";
        }
        // line 20
        echo "
        <div class=\"list-blog-meta my-3\">
            <span class=\"list-blog-date\">
                <i class=\"fa fa-calendar\"></i> <span>";
        // line 23
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "F j, Y, g:i a");
        echo "</span>
            </span>

            ";
        // line 26
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", [])) {
            // line 27
            echo "                <span class=\"list-blog-tags float-right\">
                    ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", []));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 29
                echo "                        <a class=\"badge badge-primary\" href=\"";
                echo $this->getAttribute(($context["blog"] ?? null), "url", []);
                echo "/tag";
                echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []);
                echo $context["tag"];
                echo "\">";
                echo $context["tag"];
                echo "</a>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "                </span>
            ";
        }
        // line 33
        echo "        </div>

        ";
        // line 35
        if (($context["big_header"] ?? null)) {
            // line 36
            echo "            ";
            echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", [])), "cropResize", [0 => 900, 1 => 600], "method"), "html", [0 => "", 1 => "blog-header-image"], "method");
            echo "
        ";
        } else {
            // line 38
            echo "            ";
            if (($context["header_image"] ?? null)) {
                // line 39
                echo "                ";
                if (($context["header_image_file"] ?? null)) {
                    // line 40
                    echo "                    ";
                    $context["header_image_media"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), ($context["header_image_file"] ?? null), [], "array");
                    // line 41
                    echo "                ";
                } else {
                    // line 42
                    echo "                    ";
                    $context["header_image_media"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
                    // line 43
                    echo "                ";
                }
                // line 44
                echo "                ";
                echo $this->getAttribute($this->getAttribute(($context["header_image_media"] ?? null), "cropZoom", [0 => ($context["header_image_width"] ?? null), 1 => ($context["header_image_height"] ?? null)], "method"), "html", []);
                echo "
            ";
            }
            // line 46
            echo "        ";
        }
        // line 47
        echo "    </div>

    <div class=\"list-blog-padding\">

        ";
        // line 51
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "continue_link", []) === false)) {
            // line 52
            echo "            <p>";
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "</p>
            ";
            // line 53
            if ( !($context["truncate"] ?? null)) {
                // line 54
                echo "                ";
                $context["show_prev_next"] = true;
                // line 55
                echo "            ";
            }
            // line 56
            echo "        ";
        } elseif ((($context["truncate"] ?? null) && ($this->getAttribute(($context["page"] ?? null), "summary", []) != $this->getAttribute(($context["page"] ?? null), "content", [])))) {
            // line 57
            echo "            <p>";
            echo $this->getAttribute(($context["page"] ?? null), "summary", []);
            echo "</p>
            <p><a href=\"";
            // line 58
            echo $this->getAttribute(($context["page"] ?? null), "url", []);
            echo "\">Continue Reading...</a></p>
        ";
        } elseif (        // line 59
($context["truncate"] ?? null)) {
            // line 60
            echo "            ";
            if (($this->getAttribute(($context["page"] ?? null), "summary", []) != $this->getAttribute(($context["page"] ?? null), "content", []))) {
                // line 61
                echo "                <p>";
                echo \Grav\Common\Utils::truncate($this->getAttribute(($context["page"] ?? null), "content", []), 550);
                echo "</p>
            ";
            } else {
                // line 63
                echo "                <p>";
                echo $this->getAttribute(($context["page"] ?? null), "content", []);
                echo "</p>
            ";
            }
            // line 65
            echo "            <p><a href=\"";
            echo $this->getAttribute(($context["page"] ?? null), "url", []);
            echo "\">Continue Reading...</a></p>
        ";
        } else {
            // line 67
            echo "            <p>";
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "</p>
            ";
            // line 68
            $context["show_prev_next"] = true;
            // line 69
            echo "        ";
        }
        // line 70
        echo "
        ";
        // line 71
        if (($context["show_prev_next"] ?? null)) {
            // line 72
            echo "            <p class=\"text-center mt-4\">
                ";
            // line 73
            if ( !$this->getAttribute(($context["page"] ?? null), "isFirst", [])) {
                // line 74
                echo "                    <a class=\"btn btn-primary\" href=\"";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", []), "url", []);
                echo "\"><i class=\"fa fa-chevron-left\"></i> Next Post</a>
                ";
            }
            // line 76
            echo "
                ";
            // line 77
            if ( !$this->getAttribute(($context["page"] ?? null), "isLast", [])) {
                // line 78
                echo "                    <a class=\"btn btn-primary\" href=\"";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", []), "url", []);
                echo "\">Previous Post <i class=\"fa fa-chevron-right\"></i></a>
                ";
            }
            // line 80
            echo "            </p>
        ";
        }
        // line 82
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/blog_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 82,  250 => 80,  244 => 78,  242 => 77,  239 => 76,  233 => 74,  231 => 73,  228 => 72,  226 => 71,  223 => 70,  220 => 69,  218 => 68,  213 => 67,  207 => 65,  201 => 63,  195 => 61,  192 => 60,  190 => 59,  186 => 58,  181 => 57,  178 => 56,  175 => 55,  172 => 54,  170 => 53,  165 => 52,  163 => 51,  157 => 47,  154 => 46,  148 => 44,  145 => 43,  142 => 42,  139 => 41,  136 => 40,  133 => 39,  130 => 38,  124 => 36,  122 => 35,  118 => 33,  114 => 31,  100 => 29,  96 => 28,  93 => 27,  91 => 26,  85 => 23,  80 => 20,  72 => 18,  63 => 15,  57 => 13,  55 => 12,  52 => 11,  50 => 10,  45 => 7,  42 => 6,  39 => 5,  36 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"list-item\">

    {% set header_image = page.header.header_image|defined(true) %}
    {% set header_image_width  = page.header.header_image_width|defined(900) %}
    {% set header_image_height = page.header.header_image_height|defined(300) %}
    {% set header_image_file = page.header.header_image_file %}

    <div class=\"list-blog-header\">

        {% if page.header.link %}
            <h3>
                {% if page.header.continue_link is not same as(false) %}
                    <a href=\"{{ page.url }}\"><i class=\"fa fa-angle-double-right\"></i></a>
                {% endif %}
                <a href=\"{{ page.header.link }}\">{{ page.title }}</a>
            </h3>
        {% else %}
            <h3><a href=\"{{ page.url }}\">{{ page.title }}</a></h3>
        {% endif %}

        <div class=\"list-blog-meta my-3\">
            <span class=\"list-blog-date\">
                <i class=\"fa fa-calendar\"></i> <span>{{ page.date|date(\"F j, Y, g:i a\") }}</span>
            </span>

            {% if page.taxonomy.tag %}
                <span class=\"list-blog-tags float-right\">
                    {% for tag in page.taxonomy.tag %}
                        <a class=\"badge badge-primary\" href=\"{{ blog.url }}/tag{{ config.system.param_sep }}{{ tag }}\">{{ tag }}</a>
                    {% endfor %}
                </span>
            {% endif %}
        </div>

        {% if big_header %}
            {{ page.media.images|first.cropResize(900,600).html('','blog-header-image')|raw }}
        {% else %}
            {% if header_image %}
                {% if header_image_file %}
                    {% set header_image_media = page.media.images[header_image_file] %}
                {% else %}
                    {% set header_image_media = page.media.images|first %}
                {% endif %}
                {{ header_image_media.cropZoom(header_image_width, header_image_height).html|raw }}
            {% endif %}
        {% endif %}
    </div>

    <div class=\"list-blog-padding\">

        {% if page.header.continue_link is same as(false) %}
            <p>{{ page.content|raw }}</p>
            {% if not truncate %}
                {% set show_prev_next = true %}
            {% endif %}
        {% elseif truncate and page.summary != page.content %}
            <p>{{ page.summary|raw }}</p>
            <p><a href=\"{{ page.url }}\">Continue Reading...</a></p>
        {% elseif truncate %}
            {% if page.summary != page.content %}
                <p>{{ page.content|truncate(550) }}</p>
            {% else %}
                <p>{{ page.content|raw }}</p>
            {% endif %}
            <p><a href=\"{{ page.url }}\">Continue Reading...</a></p>
        {% else %}
            <p>{{ page.content|raw }}</p>
            {% set show_prev_next = true %}
        {% endif %}

        {% if show_prev_next %}
            <p class=\"text-center mt-4\">
                {% if not page.isFirst %}
                    <a class=\"btn btn-primary\" href=\"{{ page.nextSibling.url }}\"><i class=\"fa fa-chevron-left\"></i> Next Post</a>
                {% endif %}

                {% if not page.isLast %}
                    <a class=\"btn btn-primary\" href=\"{{ page.prevSibling.url }}\">Previous Post <i class=\"fa fa-chevron-right\"></i></a>
                {% endif %}
            </p>
        {% endif %}

    </div>
</div>
", "partials/blog_item.html.twig", "/var/sites/d/dev.elixir-europe.org/public_html/grav/user/themes/bootstrap4/templates/partials/blog_item.html.twig");
    }
}
