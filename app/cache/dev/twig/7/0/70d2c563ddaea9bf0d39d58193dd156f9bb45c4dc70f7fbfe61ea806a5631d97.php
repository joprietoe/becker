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
        $__internal_2a179afe69dfdb8fa229b398078548bf0f50bee8723367f68c944c12c98dcc9b = $this->env->getExtension("native_profiler");
        $__internal_2a179afe69dfdb8fa229b398078548bf0f50bee8723367f68c944c12c98dcc9b->enter($__internal_2a179afe69dfdb8fa229b398078548bf0f50bee8723367f68c944c12c98dcc9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_2a179afe69dfdb8fa229b398078548bf0f50bee8723367f68c944c12c98dcc9b->leave($__internal_2a179afe69dfdb8fa229b398078548bf0f50bee8723367f68c944c12c98dcc9b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7cc2dbe574ffefc2f462255d630d92ae888a7ce83ca2dc0e4a4ce3afb576d7d = $this->env->getExtension("native_profiler");
        $__internal_f7cc2dbe574ffefc2f462255d630d92ae888a7ce83ca2dc0e4a4ce3afb576d7d->enter($__internal_f7cc2dbe574ffefc2f462255d630d92ae888a7ce83ca2dc0e4a4ce3afb576d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sistema Ficha Medica";
        
        $__internal_f7cc2dbe574ffefc2f462255d630d92ae888a7ce83ca2dc0e4a4ce3afb576d7d->leave($__internal_f7cc2dbe574ffefc2f462255d630d92ae888a7ce83ca2dc0e4a4ce3afb576d7d_prof);

    }

    // line 6
    public function block_meta($context, array $blocks = array())
    {
        $__internal_172a209adc670dc0d6e35dff513d5263e7a59da4b2179e9a7b3abc4fb3e74ccd = $this->env->getExtension("native_profiler");
        $__internal_172a209adc670dc0d6e35dff513d5263e7a59da4b2179e9a7b3abc4fb3e74ccd->enter($__internal_172a209adc670dc0d6e35dff513d5263e7a59da4b2179e9a7b3abc4fb3e74ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        echo " ";
        
        $__internal_172a209adc670dc0d6e35dff513d5263e7a59da4b2179e9a7b3abc4fb3e74ccd->leave($__internal_172a209adc670dc0d6e35dff513d5263e7a59da4b2179e9a7b3abc4fb3e74ccd_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c1e4662a01db6d0756ac15eca33834d2f3aadbf40fc0fd68b7b8dab13e1420db = $this->env->getExtension("native_profiler");
        $__internal_c1e4662a01db6d0756ac15eca33834d2f3aadbf40fc0fd68b7b8dab13e1420db->enter($__internal_c1e4662a01db6d0756ac15eca33834d2f3aadbf40fc0fd68b7b8dab13e1420db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c1e4662a01db6d0756ac15eca33834d2f3aadbf40fc0fd68b7b8dab13e1420db->leave($__internal_c1e4662a01db6d0756ac15eca33834d2f3aadbf40fc0fd68b7b8dab13e1420db_prof);

    }

    // line 8
    public function block_js_head($context, array $blocks = array())
    {
        $__internal_78c9cba347e8c1a87eb76d1548d4fe5acee81f8ea0c716b72ef0e8f17ffd4930 = $this->env->getExtension("native_profiler");
        $__internal_78c9cba347e8c1a87eb76d1548d4fe5acee81f8ea0c716b72ef0e8f17ffd4930->enter($__internal_78c9cba347e8c1a87eb76d1548d4fe5acee81f8ea0c716b72ef0e8f17ffd4930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_head"));

        
        $__internal_78c9cba347e8c1a87eb76d1548d4fe5acee81f8ea0c716b72ef0e8f17ffd4930->leave($__internal_78c9cba347e8c1a87eb76d1548d4fe5acee81f8ea0c716b72ef0e8f17ffd4930_prof);

    }

    // line 12
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_4b4ce549792f1c373a7b0b2f5c42d388bfe02f11b10fc5eb1f1459b24f67af25 = $this->env->getExtension("native_profiler");
        $__internal_4b4ce549792f1c373a7b0b2f5c42d388bfe02f11b10fc5eb1f1459b24f67af25->enter($__internal_4b4ce549792f1c373a7b0b2f5c42d388bfe02f11b10fc5eb1f1459b24f67af25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_4b4ce549792f1c373a7b0b2f5c42d388bfe02f11b10fc5eb1f1459b24f67af25->leave($__internal_4b4ce549792f1c373a7b0b2f5c42d388bfe02f11b10fc5eb1f1459b24f67af25_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f2e9aa11ad6e9fd381849db8647d68a5303809e236a687e82c6e52b49638e1b = $this->env->getExtension("native_profiler");
        $__internal_2f2e9aa11ad6e9fd381849db8647d68a5303809e236a687e82c6e52b49638e1b->enter($__internal_2f2e9aa11ad6e9fd381849db8647d68a5303809e236a687e82c6e52b49638e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2f2e9aa11ad6e9fd381849db8647d68a5303809e236a687e82c6e52b49638e1b->leave($__internal_2f2e9aa11ad6e9fd381849db8647d68a5303809e236a687e82c6e52b49638e1b_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eb20f41c4f2b1ccc315eefeb33a4cda89df6de475b5fd7bd2f0d149aab726bdb = $this->env->getExtension("native_profiler");
        $__internal_eb20f41c4f2b1ccc315eefeb33a4cda89df6de475b5fd7bd2f0d149aab726bdb->enter($__internal_eb20f41c4f2b1ccc315eefeb33a4cda89df6de475b5fd7bd2f0d149aab726bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_eb20f41c4f2b1ccc315eefeb33a4cda89df6de475b5fd7bd2f0d149aab726bdb->leave($__internal_eb20f41c4f2b1ccc315eefeb33a4cda89df6de475b5fd7bd2f0d149aab726bdb_prof);

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
