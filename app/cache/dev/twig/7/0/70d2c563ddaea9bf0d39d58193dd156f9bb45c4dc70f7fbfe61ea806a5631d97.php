<?php

/* base.html.twig */
class __TwigTemplate_70d2c563ddaea9bf0d39d58193dd156f9bb45c4dc70f7fbfe61ea806a5631d97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'meta' => array($this, 'block_meta'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'js_head' => array($this, 'block_js_head'),
            'body_id' => array($this, 'block_body_id'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be1d8928b1b75bc579c2ecf047efc39cc6ed799bce4f455ff2610c3c979f47de = $this->env->getExtension("native_profiler");
        $__internal_be1d8928b1b75bc579c2ecf047efc39cc6ed799bce4f455ff2610c3c979f47de->enter($__internal_be1d8928b1b75bc579c2ecf047efc39cc6ed799bce4f455ff2610c3c979f47de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
               ";
        // line 6
        $this->displayBlock('meta', $context, $blocks);
        // line 7
        echo "               ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "               ";
        $this->displayBlock('js_head', $context, $blocks);
        // line 9
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body ";
        // line 12
        $this->displayBlock('body_id', $context, $blocks);
        echo ">
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "    </body>
</html>
";
        
        $__internal_be1d8928b1b75bc579c2ecf047efc39cc6ed799bce4f455ff2610c3c979f47de->leave($__internal_be1d8928b1b75bc579c2ecf047efc39cc6ed799bce4f455ff2610c3c979f47de_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_407fe7cf7b2558c60ea4511b02d93eb7f13f16dce80c05ee012f6d10b8bd5ca9 = $this->env->getExtension("native_profiler");
        $__internal_407fe7cf7b2558c60ea4511b02d93eb7f13f16dce80c05ee012f6d10b8bd5ca9->enter($__internal_407fe7cf7b2558c60ea4511b02d93eb7f13f16dce80c05ee012f6d10b8bd5ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sistema Ficha Medica";
        
        $__internal_407fe7cf7b2558c60ea4511b02d93eb7f13f16dce80c05ee012f6d10b8bd5ca9->leave($__internal_407fe7cf7b2558c60ea4511b02d93eb7f13f16dce80c05ee012f6d10b8bd5ca9_prof);

    }

    // line 6
    public function block_meta($context, array $blocks = array())
    {
        $__internal_a2e930307deff432c9cf4b4a1e699e8b1843004ee916ba2332d9ce3b1e5dbb74 = $this->env->getExtension("native_profiler");
        $__internal_a2e930307deff432c9cf4b4a1e699e8b1843004ee916ba2332d9ce3b1e5dbb74->enter($__internal_a2e930307deff432c9cf4b4a1e699e8b1843004ee916ba2332d9ce3b1e5dbb74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        echo " ";
        
        $__internal_a2e930307deff432c9cf4b4a1e699e8b1843004ee916ba2332d9ce3b1e5dbb74->leave($__internal_a2e930307deff432c9cf4b4a1e699e8b1843004ee916ba2332d9ce3b1e5dbb74_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ba2f050cdcdf22cb7a6e1e09a10dc951ae79a65c13c0da123e57da43bd09d2a0 = $this->env->getExtension("native_profiler");
        $__internal_ba2f050cdcdf22cb7a6e1e09a10dc951ae79a65c13c0da123e57da43bd09d2a0->enter($__internal_ba2f050cdcdf22cb7a6e1e09a10dc951ae79a65c13c0da123e57da43bd09d2a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ba2f050cdcdf22cb7a6e1e09a10dc951ae79a65c13c0da123e57da43bd09d2a0->leave($__internal_ba2f050cdcdf22cb7a6e1e09a10dc951ae79a65c13c0da123e57da43bd09d2a0_prof);

    }

    // line 8
    public function block_js_head($context, array $blocks = array())
    {
        $__internal_868145119f30e04d8c688289cd05a088bda8ab386af6505b0f203566d4336372 = $this->env->getExtension("native_profiler");
        $__internal_868145119f30e04d8c688289cd05a088bda8ab386af6505b0f203566d4336372->enter($__internal_868145119f30e04d8c688289cd05a088bda8ab386af6505b0f203566d4336372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_head"));

        
        $__internal_868145119f30e04d8c688289cd05a088bda8ab386af6505b0f203566d4336372->leave($__internal_868145119f30e04d8c688289cd05a088bda8ab386af6505b0f203566d4336372_prof);

    }

    // line 12
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_25ad113fca8ad2eb2788fbcb2803d51aff0ab819c1b9eaf82a8e4d21efff882b = $this->env->getExtension("native_profiler");
        $__internal_25ad113fca8ad2eb2788fbcb2803d51aff0ab819c1b9eaf82a8e4d21efff882b->enter($__internal_25ad113fca8ad2eb2788fbcb2803d51aff0ab819c1b9eaf82a8e4d21efff882b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_25ad113fca8ad2eb2788fbcb2803d51aff0ab819c1b9eaf82a8e4d21efff882b->leave($__internal_25ad113fca8ad2eb2788fbcb2803d51aff0ab819c1b9eaf82a8e4d21efff882b_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7dcd10b7763be4b0001c1cb88c6f130a4cf60bcfb6dd19959ba537723cbe551 = $this->env->getExtension("native_profiler");
        $__internal_c7dcd10b7763be4b0001c1cb88c6f130a4cf60bcfb6dd19959ba537723cbe551->enter($__internal_c7dcd10b7763be4b0001c1cb88c6f130a4cf60bcfb6dd19959ba537723cbe551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c7dcd10b7763be4b0001c1cb88c6f130a4cf60bcfb6dd19959ba537723cbe551->leave($__internal_c7dcd10b7763be4b0001c1cb88c6f130a4cf60bcfb6dd19959ba537723cbe551_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_660a98cae31efaf5410389adb7d2469316e6e46860dce446ba8a97c20b48096f = $this->env->getExtension("native_profiler");
        $__internal_660a98cae31efaf5410389adb7d2469316e6e46860dce446ba8a97c20b48096f->enter($__internal_660a98cae31efaf5410389adb7d2469316e6e46860dce446ba8a97c20b48096f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_660a98cae31efaf5410389adb7d2469316e6e46860dce446ba8a97c20b48096f->leave($__internal_660a98cae31efaf5410389adb7d2469316e6e46860dce446ba8a97c20b48096f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 14,  130 => 13,  119 => 12,  108 => 8,  97 => 7,  85 => 6,  73 => 5,  64 => 15,  61 => 14,  59 => 13,  55 => 12,  50 => 10,  47 => 9,  44 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }
}
