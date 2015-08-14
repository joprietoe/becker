<?php

/* ReportsBundle:Default:filterElements.html.twig */
class __TwigTemplate_a51496fda8894579f2f042d52d359e2c39a974094530a13e8f4b8d816d663e13 extends Twig_Template
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
        $__internal_20915031d0a9e535aba6a59078275ce30efed4c4d77345272c0823090104ce4b = $this->env->getExtension("native_profiler");
        $__internal_20915031d0a9e535aba6a59078275ce30efed4c4d77345272c0823090104ce4b->enter($__internal_20915031d0a9e535aba6a59078275ce30efed4c4d77345272c0823090104ce4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ReportsBundle:Default:filterElements.html.twig"));

        // line 1
        echo "<div id=\"filters\" class=\"btn-group\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filters"]) ? $context["filters"] : $this->getContext($context, "filters")));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 3
            echo "        <a id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "id", array()), "html", null, true);
            echo "\"  class=\"actfilter\" onclick=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "onclick", array()), "html", null, true);
            echo "()\">
            <span  class=\"label label-lg label-grey arrowed-right\" style=\"cursor: hand;\">
                ";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "name", array()), "html", null, true);
            echo "
            </span>
        </a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</div>

<!-- 
<a id=\"";
        // line 12
        echo "\" class=\"actfilter btn\" onclick=\"";
        echo "()\">
            <span class=\"glyphicon glyphicon-remove\"></span>
            <small class=\"text-muted\">
";
        // line 16
        echo "</small>
</a>
-->";
        
        $__internal_20915031d0a9e535aba6a59078275ce30efed4c4d77345272c0823090104ce4b->leave($__internal_20915031d0a9e535aba6a59078275ce30efed4c4d77345272c0823090104ce4b_prof);

    }

    public function getTemplateName()
    {
        return "ReportsBundle:Default:filterElements.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 16,  52 => 12,  47 => 9,  37 => 5,  29 => 3,  25 => 2,  22 => 1,);
    }
}
