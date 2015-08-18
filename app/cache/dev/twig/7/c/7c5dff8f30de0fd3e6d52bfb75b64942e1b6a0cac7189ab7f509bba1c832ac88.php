<?php

/* ReportsBundle:Default:bloodFilter.html.twig */
class __TwigTemplate_7c5dff8f30de0fd3e6d52bfb75b64942e1b6a0cac7189ab7f509bba1c832ac88 extends Twig_Template
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
        $__internal_c1163754d0e4d1281a554d1d1a36e672ce0044b5a7e9e9ea63c91155a4ffe018 = $this->env->getExtension("native_profiler");
        $__internal_c1163754d0e4d1281a554d1d1a36e672ce0044b5a7e9e9ea63c91155a4ffe018->enter($__internal_c1163754d0e4d1281a554d1d1a36e672ce0044b5a7e9e9ea63c91155a4ffe018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ReportsBundle:Default:bloodFilter.html.twig"));

        // line 1
        echo "<ul class=\"submenu\">
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["elems"]) ? $context["elems"] : $this->getContext($context, "elems")));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 3
            echo "    <li class=\"disabled\">
        <a id=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "id", array()), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "text", array()), "html", null, true);
            echo "\" class=\"blood\">
            <i class=\"icon-double-angle-right\"></i>
            ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "text", array()), "html", null, true);
            echo "
        </a>
    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</ul>



";
        
        $__internal_c1163754d0e4d1281a554d1d1a36e672ce0044b5a7e9e9ea63c91155a4ffe018->leave($__internal_c1163754d0e4d1281a554d1d1a36e672ce0044b5a7e9e9ea63c91155a4ffe018_prof);

    }

    public function getTemplateName()
    {
        return "ReportsBundle:Default:bloodFilter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 10,  39 => 6,  32 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
