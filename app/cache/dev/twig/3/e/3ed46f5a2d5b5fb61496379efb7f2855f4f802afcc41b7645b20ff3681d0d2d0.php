<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_3ed46f5a2d5b5fb61496379efb7f2855f4f802afcc41b7645b20ff3681d0d2d0 extends Twig_Template
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
        $__internal_22726d2d9d610703dd1130a3cbde74a1e6185d57dd369acdb1c540cfac456f7c = $this->env->getExtension("native_profiler");
        $__internal_22726d2d9d610703dd1130a3cbde74a1e6185d57dd369acdb1c540cfac456f7c->enter($__internal_22726d2d9d610703dd1130a3cbde74a1e6185d57dd369acdb1c540cfac456f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22726d2d9d610703dd1130a3cbde74a1e6185d57dd369acdb1c540cfac456f7c->leave($__internal_22726d2d9d610703dd1130a3cbde74a1e6185d57dd369acdb1c540cfac456f7c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_987fd6ec63752bce37c3f84a1b35561371406ba231091922b962889682791b3d = $this->env->getExtension("native_profiler");
        $__internal_987fd6ec63752bce37c3f84a1b35561371406ba231091922b962889682791b3d->enter($__internal_987fd6ec63752bce37c3f84a1b35561371406ba231091922b962889682791b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_987fd6ec63752bce37c3f84a1b35561371406ba231091922b962889682791b3d->leave($__internal_987fd6ec63752bce37c3f84a1b35561371406ba231091922b962889682791b3d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a35820fb2937fcaf8b7cf6b2108f40276ba0131419a589e5930d6ff92c219ac4 = $this->env->getExtension("native_profiler");
        $__internal_a35820fb2937fcaf8b7cf6b2108f40276ba0131419a589e5930d6ff92c219ac4->enter($__internal_a35820fb2937fcaf8b7cf6b2108f40276ba0131419a589e5930d6ff92c219ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a35820fb2937fcaf8b7cf6b2108f40276ba0131419a589e5930d6ff92c219ac4->leave($__internal_a35820fb2937fcaf8b7cf6b2108f40276ba0131419a589e5930d6ff92c219ac4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b230b5fe6d62935e97015306356d69127fcbeec66b466bb33d4d6394c69c4440 = $this->env->getExtension("native_profiler");
        $__internal_b230b5fe6d62935e97015306356d69127fcbeec66b466bb33d4d6394c69c4440->enter($__internal_b230b5fe6d62935e97015306356d69127fcbeec66b466bb33d4d6394c69c4440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b230b5fe6d62935e97015306356d69127fcbeec66b466bb33d4d6394c69c4440->leave($__internal_b230b5fe6d62935e97015306356d69127fcbeec66b466bb33d4d6394c69c4440_prof);

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
