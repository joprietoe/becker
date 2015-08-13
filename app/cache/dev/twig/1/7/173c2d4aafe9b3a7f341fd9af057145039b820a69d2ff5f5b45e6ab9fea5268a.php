<?php

/* ReportsBundle:Default:page.html.twig */
class __TwigTemplate_173c2d4aafe9b3a7f341fd9af057145039b820a69d2ff5f5b45e6ab9fea5268a extends Twig_Template
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
        $__internal_0baedcf6288623a1b11d13b6c7f5ceb627fe7eeb114a0dedffa5dfe53c5ad239 = $this->env->getExtension("native_profiler");
        $__internal_0baedcf6288623a1b11d13b6c7f5ceb627fe7eeb114a0dedffa5dfe53c5ad239->enter($__internal_0baedcf6288623a1b11d13b6c7f5ceb627fe7eeb114a0dedffa5dfe53c5ad239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ReportsBundle:Default:page.html.twig"));

        // line 1
        echo "<ul class=\"pagination\">
    <li>
        <a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("reports_homepage");
        echo "\" aria-label=\"Previous\">
            <span aria-hidden=\"true\">&laquo;</span>
        </a>
    </li>
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 8
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reports_page", array("actualPage" => $this->getAttribute($context["p"], "pos", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "pos", array()), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    <li>
        <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reports_page", array("actualPage" => (isset($context["pageNumber"]) ? $context["pageNumber"] : $this->getContext($context, "pageNumber")))), "html", null, true);
        echo "\" aria-label=\"Next\">
            <span aria-hidden=\"true\">&raquo;</span>
        </a>
    </li>
</ul>

";
        
        $__internal_0baedcf6288623a1b11d13b6c7f5ceb627fe7eeb114a0dedffa5dfe53c5ad239->leave($__internal_0baedcf6288623a1b11d13b6c7f5ceb627fe7eeb114a0dedffa5dfe53c5ad239_prof);

    }

    public function getTemplateName()
    {
        return "ReportsBundle:Default:page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 11,  48 => 10,  37 => 8,  33 => 7,  26 => 3,  22 => 1,);
    }
}
