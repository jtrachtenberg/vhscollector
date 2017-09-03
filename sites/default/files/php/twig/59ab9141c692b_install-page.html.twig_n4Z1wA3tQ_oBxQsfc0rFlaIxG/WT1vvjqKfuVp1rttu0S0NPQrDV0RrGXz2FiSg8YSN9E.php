<?php

/* profiles/varbase/themes/vartheme_admin/templates/install/install-page.html.twig */
class __TwigTemplate_7d7cb86423d9f1e359ef820b9d9297f2e7149fae9582509c59a47a330def9b27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 15);
        $filters = array();
        $functions = array("active_theme_path" => 17);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
                array('active_theme_path')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 12
        echo "<div class=\"layout-container\">

  <header role=\"banner\">
    ";
        // line 15
        if ((isset($context["site_name"]) ? $context["site_name"] : null)) {
            // line 16
            echo "      <h1 class=\"page-title\">
        <img src=\"../";
            // line 17
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getActiveThemePath(), "html", null, true));
            echo "/images/varbase-medium-logo.png\" class=\"installer-logo\">
        ";
            // line 18
            if ((isset($context["site_version"]) ? $context["site_version"] : null)) {
                // line 19
                echo "          <span class=\"site-version\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_version"]) ? $context["site_version"] : null), "html", null, true));
                echo "</span>
        ";
            }
            // line 21
            echo "      </h1>
    ";
        }
        // line 23
        echo "  </header>

  ";
        // line 25
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 26
            echo "    <aside class=\"layout-sidebar-first\" role=\"complementary\">
      ";
            // line 27
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
    </aside>";
            // line 29
            echo "  ";
        }
        // line 30
        echo "
  <main role=\"main\">
    ";
        // line 32
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 33
            echo "      <h2>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</h2>
    ";
        }
        // line 35
        echo "    ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "
    ";
        // line 36
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
  </main>

  ";
        // line 39
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 40
            echo "    <aside class=\"layout-sidebar-second\" role=\"complementary\">
      ";
            // line 41
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
    </aside>";
            // line 43
            echo "  ";
        }
        // line 44
        echo "
</div>";
        // line 46
        echo "
<footer class=\"installer-footer clearfix\">
      <div id=\"credit\" class=\"clearfix\">
        <div class=\"message\">Proudly built by</div>
        <div class=\"logo\">
          <a href=\"http://www.vardot.com\" target=\"_blank\">Vardot Company</a>
        </div>
      </div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "profiles/varbase/themes/vartheme_admin/templates/install/install-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 46,  120 => 44,  117 => 43,  113 => 41,  110 => 40,  108 => 39,  102 => 36,  97 => 35,  91 => 33,  89 => 32,  85 => 30,  82 => 29,  78 => 27,  75 => 26,  73 => 25,  69 => 23,  65 => 21,  59 => 19,  57 => 18,  53 => 17,  50 => 16,  48 => 15,  43 => 12,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme implementation to display a Drupal installation page.
 *
 * All available variables are mirrored in page.html.twig.
 * Some may be blank but they are provided for consistency.
 *
 * @see template_preprocess_install_page()
 */
#}
<div class=\"layout-container\">

  <header role=\"banner\">
    {% if site_name %}
      <h1 class=\"page-title\">
        <img src=\"../{{ active_theme_path() }}/images/varbase-medium-logo.png\" class=\"installer-logo\">
        {% if site_version %}
          <span class=\"site-version\">{{ site_version }}</span>
        {% endif %}
      </h1>
    {% endif %}
  </header>

  {% if page.sidebar_first %}
    <aside class=\"layout-sidebar-first\" role=\"complementary\">
      {{ page.sidebar_first }}
    </aside>{# /.layout-sidebar-first #}
  {% endif %}

  <main role=\"main\">
    {% if title %}
      <h2>{{ title }}</h2>
    {% endif %}
    {{ page.highlighted }}
    {{ page.content }}
  </main>

  {% if page.sidebar_second %}
    <aside class=\"layout-sidebar-second\" role=\"complementary\">
      {{ page.sidebar_second }}
    </aside>{# /.layout-sidebar-second #}
  {% endif %}

</div>{# /.layout-container #}

<footer class=\"installer-footer clearfix\">
      <div id=\"credit\" class=\"clearfix\">
        <div class=\"message\">Proudly built by</div>
        <div class=\"logo\">
          <a href=\"http://www.vardot.com\" target=\"_blank\">Vardot Company</a>
        </div>
      </div>
</footer>
";
    }
}
