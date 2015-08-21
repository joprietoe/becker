<?php

/* base.html.twig */
class __TwigTemplate_7ee514364a60375b9e3f45e0eae5dc5a2480304234062c7d161397058200d119 extends Twig_Template
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
        $__internal_561e008a281ca2a91f7f9ab66ec407e953d9c7d450882cd2a5f5bef391650d40 = $this->env->getExtension("native_profiler");
        $__internal_561e008a281ca2a91f7f9ab66ec407e953d9c7d450882cd2a5f5bef391650d40->enter($__internal_561e008a281ca2a91f7f9ab66ec407e953d9c7d450882cd2a5f5bef391650d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_561e008a281ca2a91f7f9ab66ec407e953d9c7d450882cd2a5f5bef391650d40->leave($__internal_561e008a281ca2a91f7f9ab66ec407e953d9c7d450882cd2a5f5bef391650d40_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_832459d5a7f7e625045229632fb5a58382e7d43d425db28366d93a948de6f9f2 = $this->env->getExtension("native_profiler");
        $__internal_832459d5a7f7e625045229632fb5a58382e7d43d425db28366d93a948de6f9f2->enter($__internal_832459d5a7f7e625045229632fb5a58382e7d43d425db28366d93a948de6f9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sistema Ficha Medica";
        
        $__internal_832459d5a7f7e625045229632fb5a58382e7d43d425db28366d93a948de6f9f2->leave($__internal_832459d5a7f7e625045229632fb5a58382e7d43d425db28366d93a948de6f9f2_prof);

    }

    // line 6
    public function block_meta($context, array $blocks = array())
    {
        $__internal_32f55d1ff668c5eeeb871b7e12fd2ed96f5ec4635693639ad0c62312ae0d16f8 = $this->env->getExtension("native_profiler");
        $__internal_32f55d1ff668c5eeeb871b7e12fd2ed96f5ec4635693639ad0c62312ae0d16f8->enter($__internal_32f55d1ff668c5eeeb871b7e12fd2ed96f5ec4635693639ad0c62312ae0d16f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        echo " ";
        
        $__internal_32f55d1ff668c5eeeb871b7e12fd2ed96f5ec4635693639ad0c62312ae0d16f8->leave($__internal_32f55d1ff668c5eeeb871b7e12fd2ed96f5ec4635693639ad0c62312ae0d16f8_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bbae11aedede29288c94287ff01e99142bf4007dbf8c26d3613d2d2cbbe14b00 = $this->env->getExtension("native_profiler");
        $__internal_bbae11aedede29288c94287ff01e99142bf4007dbf8c26d3613d2d2cbbe14b00->enter($__internal_bbae11aedede29288c94287ff01e99142bf4007dbf8c26d3613d2d2cbbe14b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_bbae11aedede29288c94287ff01e99142bf4007dbf8c26d3613d2d2cbbe14b00->leave($__internal_bbae11aedede29288c94287ff01e99142bf4007dbf8c26d3613d2d2cbbe14b00_prof);

    }

    // line 8
    public function block_js_head($context, array $blocks = array())
    {
        $__internal_b9a0dc7947fe83500b358aed2e3b9196d0cd81a409065893c61cb817bf3dcfb9 = $this->env->getExtension("native_profiler");
        $__internal_b9a0dc7947fe83500b358aed2e3b9196d0cd81a409065893c61cb817bf3dcfb9->enter($__internal_b9a0dc7947fe83500b358aed2e3b9196d0cd81a409065893c61cb817bf3dcfb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_head"));

        
        $__internal_b9a0dc7947fe83500b358aed2e3b9196d0cd81a409065893c61cb817bf3dcfb9->leave($__internal_b9a0dc7947fe83500b358aed2e3b9196d0cd81a409065893c61cb817bf3dcfb9_prof);

    }

    // line 12
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_d30a948a1db6c19f7426bed910bed06547ead76df1a1fb636aee68e79255fdb6 = $this->env->getExtension("native_profiler");
        $__internal_d30a948a1db6c19f7426bed910bed06547ead76df1a1fb636aee68e79255fdb6->enter($__internal_d30a948a1db6c19f7426bed910bed06547ead76df1a1fb636aee68e79255fdb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_d30a948a1db6c19f7426bed910bed06547ead76df1a1fb636aee68e79255fdb6->leave($__internal_d30a948a1db6c19f7426bed910bed06547ead76df1a1fb636aee68e79255fdb6_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_21636cca3f743ec7ba63ea99aab3155214131728f7030865fb9d35c8d8fff588 = $this->env->getExtension("native_profiler");
        $__internal_21636cca3f743ec7ba63ea99aab3155214131728f7030865fb9d35c8d8fff588->enter($__internal_21636cca3f743ec7ba63ea99aab3155214131728f7030865fb9d35c8d8fff588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_21636cca3f743ec7ba63ea99aab3155214131728f7030865fb9d35c8d8fff588->leave($__internal_21636cca3f743ec7ba63ea99aab3155214131728f7030865fb9d35c8d8fff588_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7641cedddd873714c4c330dfbd6344ad2cc088c1a3eb2bbf5988c89e737b0bff = $this->env->getExtension("native_profiler");
        $__internal_7641cedddd873714c4c330dfbd6344ad2cc088c1a3eb2bbf5988c89e737b0bff->enter($__internal_7641cedddd873714c4c330dfbd6344ad2cc088c1a3eb2bbf5988c89e737b0bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7641cedddd873714c4c330dfbd6344ad2cc088c1a3eb2bbf5988c89e737b0bff->leave($__internal_7641cedddd873714c4c330dfbd6344ad2cc088c1a3eb2bbf5988c89e737b0bff_prof);

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
