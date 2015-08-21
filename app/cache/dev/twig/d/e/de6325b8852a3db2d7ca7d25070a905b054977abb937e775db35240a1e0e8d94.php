<?php

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_de6325b8852a3db2d7ca7d25070a905b054977abb937e775db35240a1e0e8d94 extends Twig_Template
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
        $__internal_3dbc3d4cc6da4a5ca7f13cba50d2e3226fb08571b1a8f7d359f334bfc581a589 = $this->env->getExtension("native_profiler");
        $__internal_3dbc3d4cc6da4a5ca7f13cba50d2e3226fb08571b1a8f7d359f334bfc581a589->enter($__internal_3dbc3d4cc6da4a5ca7f13cba50d2e3226fb08571b1a8f7d359f334bfc581a589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:logs.html.twig"));

        // line 1
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) ? $context["logs"] : $this->getContext($context, "logs")));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (($this->getAttribute($context["log"], "priority", array()) >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute($context["log"], "priority", array()) >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "priorityName", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "message", array()), "html", null, true);
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ol>
";
        
        $__internal_3dbc3d4cc6da4a5ca7f13cba50d2e3226fb08571b1a8f7d359f334bfc581a589->leave($__internal_3dbc3d4cc6da4a5ca7f13cba50d2e3226fb08571b1a8f7d359f334bfc581a589_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 7,  38 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
