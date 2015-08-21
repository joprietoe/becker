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
        $__internal_2bd95d951c1fd60a554d1e0c0e6bc9dd248cb80a8d4bf2c659c1220b6cf65a86 = $this->env->getExtension("native_profiler");
        $__internal_2bd95d951c1fd60a554d1e0c0e6bc9dd248cb80a8d4bf2c659c1220b6cf65a86->enter($__internal_2bd95d951c1fd60a554d1e0c0e6bc9dd248cb80a8d4bf2c659c1220b6cf65a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bd95d951c1fd60a554d1e0c0e6bc9dd248cb80a8d4bf2c659c1220b6cf65a86->leave($__internal_2bd95d951c1fd60a554d1e0c0e6bc9dd248cb80a8d4bf2c659c1220b6cf65a86_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_84e21d4ab22d1d5619f70d526bf440d9aaa810d14a72d106c0dcca62977a26ad = $this->env->getExtension("native_profiler");
        $__internal_84e21d4ab22d1d5619f70d526bf440d9aaa810d14a72d106c0dcca62977a26ad->enter($__internal_84e21d4ab22d1d5619f70d526bf440d9aaa810d14a72d106c0dcca62977a26ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_84e21d4ab22d1d5619f70d526bf440d9aaa810d14a72d106c0dcca62977a26ad->leave($__internal_84e21d4ab22d1d5619f70d526bf440d9aaa810d14a72d106c0dcca62977a26ad_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cfaafc36491e3e87e6ac1088c004a36a39386229b13de55c37d067231ab06c95 = $this->env->getExtension("native_profiler");
        $__internal_cfaafc36491e3e87e6ac1088c004a36a39386229b13de55c37d067231ab06c95->enter($__internal_cfaafc36491e3e87e6ac1088c004a36a39386229b13de55c37d067231ab06c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cfaafc36491e3e87e6ac1088c004a36a39386229b13de55c37d067231ab06c95->leave($__internal_cfaafc36491e3e87e6ac1088c004a36a39386229b13de55c37d067231ab06c95_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a8960cf532255fe4e5d4747d22831b3e247c05915634d8ca8f39f1aa4d543b9 = $this->env->getExtension("native_profiler");
        $__internal_8a8960cf532255fe4e5d4747d22831b3e247c05915634d8ca8f39f1aa4d543b9->enter($__internal_8a8960cf532255fe4e5d4747d22831b3e247c05915634d8ca8f39f1aa4d543b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_8a8960cf532255fe4e5d4747d22831b3e247c05915634d8ca8f39f1aa4d543b9->leave($__internal_8a8960cf532255fe4e5d4747d22831b3e247c05915634d8ca8f39f1aa4d543b9_prof);

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
