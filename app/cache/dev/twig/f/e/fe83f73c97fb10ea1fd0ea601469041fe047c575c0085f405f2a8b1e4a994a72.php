<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_fe83f73c97fb10ea1fd0ea601469041fe047c575c0085f405f2a8b1e4a994a72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a94fd3977a71529bdf11eb94b79b5647faa86a33e71fa0d8da8d08db44821dfa = $this->env->getExtension("native_profiler");
        $__internal_a94fd3977a71529bdf11eb94b79b5647faa86a33e71fa0d8da8d08db44821dfa->enter($__internal_a94fd3977a71529bdf11eb94b79b5647faa86a33e71fa0d8da8d08db44821dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a94fd3977a71529bdf11eb94b79b5647faa86a33e71fa0d8da8d08db44821dfa->leave($__internal_a94fd3977a71529bdf11eb94b79b5647faa86a33e71fa0d8da8d08db44821dfa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_46c3897329443b210f5c22cb0e66444ac323ed1de072cce4f2a756e06eabe58c = $this->env->getExtension("native_profiler");
        $__internal_46c3897329443b210f5c22cb0e66444ac323ed1de072cce4f2a756e06eabe58c->enter($__internal_46c3897329443b210f5c22cb0e66444ac323ed1de072cce4f2a756e06eabe58c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_46c3897329443b210f5c22cb0e66444ac323ed1de072cce4f2a756e06eabe58c->leave($__internal_46c3897329443b210f5c22cb0e66444ac323ed1de072cce4f2a756e06eabe58c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ccc1914d567694c4d2a2f9da4c1ba2cb6ff34d4513163593c14e0f3a8dd2641 = $this->env->getExtension("native_profiler");
        $__internal_7ccc1914d567694c4d2a2f9da4c1ba2cb6ff34d4513163593c14e0f3a8dd2641->enter($__internal_7ccc1914d567694c4d2a2f9da4c1ba2cb6ff34d4513163593c14e0f3a8dd2641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7ccc1914d567694c4d2a2f9da4c1ba2cb6ff34d4513163593c14e0f3a8dd2641->leave($__internal_7ccc1914d567694c4d2a2f9da4c1ba2cb6ff34d4513163593c14e0f3a8dd2641_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_133faaa3a29b75e9b78672461ccf9bad9c1e2807fd898d20e44bbfd002f2154c = $this->env->getExtension("native_profiler");
        $__internal_133faaa3a29b75e9b78672461ccf9bad9c1e2807fd898d20e44bbfd002f2154c->enter($__internal_133faaa3a29b75e9b78672461ccf9bad9c1e2807fd898d20e44bbfd002f2154c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_133faaa3a29b75e9b78672461ccf9bad9c1e2807fd898d20e44bbfd002f2154c->leave($__internal_133faaa3a29b75e9b78672461ccf9bad9c1e2807fd898d20e44bbfd002f2154c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
