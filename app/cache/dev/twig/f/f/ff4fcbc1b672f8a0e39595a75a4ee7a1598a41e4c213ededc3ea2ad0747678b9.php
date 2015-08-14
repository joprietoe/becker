<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_ff4fcbc1b672f8a0e39595a75a4ee7a1598a41e4c213ededc3ea2ad0747678b9 extends Twig_Template
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
        $__internal_854772e076044d77409b5cad6bc97ff504791ba1cdd4f858484e81808de66188 = $this->env->getExtension("native_profiler");
        $__internal_854772e076044d77409b5cad6bc97ff504791ba1cdd4f858484e81808de66188->enter($__internal_854772e076044d77409b5cad6bc97ff504791ba1cdd4f858484e81808de66188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_854772e076044d77409b5cad6bc97ff504791ba1cdd4f858484e81808de66188->leave($__internal_854772e076044d77409b5cad6bc97ff504791ba1cdd4f858484e81808de66188_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
