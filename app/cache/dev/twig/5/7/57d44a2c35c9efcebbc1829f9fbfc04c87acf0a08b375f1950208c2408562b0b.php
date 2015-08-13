<?php

/* AutenticationBundle:Default:ini.html.twig */
class __TwigTemplate_57d44a2c35c9efcebbc1829f9fbfc04c87acf0a08b375f1950208c2408562b0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("layout.html.twig", "AutenticationBundle:Default:ini.html.twig", 2);
        $this->blocks = array(
            'page_content' => array($this, 'block_page_content'),
            'javascripts_page' => array($this, 'block_javascripts_page'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e718b4479bc5e25eda0ceb1852f3a20988feb3c8bd5808eb86a24ea55c9687e5 = $this->env->getExtension("native_profiler");
        $__internal_e718b4479bc5e25eda0ceb1852f3a20988feb3c8bd5808eb86a24ea55c9687e5->enter($__internal_e718b4479bc5e25eda0ceb1852f3a20988feb3c8bd5808eb86a24ea55c9687e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AutenticationBundle:Default:ini.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e718b4479bc5e25eda0ceb1852f3a20988feb3c8bd5808eb86a24ea55c9687e5->leave($__internal_e718b4479bc5e25eda0ceb1852f3a20988feb3c8bd5808eb86a24ea55c9687e5_prof);

    }

    // line 4
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_4cd87830b7fc1dcf2c57967730e48afc50109abffbfdb0b994ff5cd8d4172632 = $this->env->getExtension("native_profiler");
        $__internal_4cd87830b7fc1dcf2c57967730e48afc50109abffbfdb0b994ff5cd8d4172632->enter($__internal_4cd87830b7fc1dcf2c57967730e48afc50109abffbfdb0b994ff5cd8d4172632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 5
        echo "    <div class=\"page-content\">

        <div class=\"row\">
            <div class=\"col-xs-12\">
                <!-- PAGE CONTENT BEGINS -->

                <div class=\"row\">
                    <div class=\"col-xs-6 col-sm-3 pricing-box\">
                        <div class=\"widget-box\">
                            <div class=\"widget-header header-color-dark\">
                                <h5 class=\"bigger lighter\">Criar Ficha Medica</h5>
                            </div>

                            <div class=\"widget-body\">
                                <div class=\"widget-main\">
                                   <!-- <input type=\"image\" class=\"img_crearficha\" src=\"";
        // line 20
        echo "\"> -->
                                    <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("to_dwork");
        echo "\"><img class=\"img_crearficha\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/img/ficha_medica.jpeg"), "html", null, true);
        echo "\"/> </a>
                                    <hr />\t\t\t\t\t\t\t\t\t\t\t\t\t
                                </div>
                                <div>
                                    <a href=\"\" class=\"btn btn-block btn-inverse\">
                                        <i class=\"icon-leaf bigger-110\"></i>\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class=\"col-xs-6 col-sm-3 pricing-box\">
                        <div class=\"widget-box\">
                            <div class=\"widget-header header-color-blue\">
                                <h5 class=\"bigger lighter\">Trabalho Diario</h5>
                            </div>

                            <div class=\"widget-body\">
                                <div class=\"widget-main wm2\">
                                    <!-- <input type=\"image\" class=\"img_trabajod\" src=\"";
        // line 42
        echo "\"> -->
                                    <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("to_dawork");
        echo "\"><img class=\"img_trabajod\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/img/trabajod.jpeg"), "html", null, true);
        echo "\"/> </a>
                                    <hr />\t\t\t\t\t\t\t\t\t\t\t\t\t
                                </div>
                                <div>
                                    <a href=\"#\" class=\"btn btn-block btn-primary\">
                                        <i class=\"icon-cog bigger-110\"></i>\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-xs-6 col-sm-3 pricing-box\">
                        <div class=\"widget-box\">
                            <div class=\"widget-header header-color-green\">
                                <h5 class=\"bigger lighter\">Reportes</h5>
                            </div>

                            <div class=\"widget-body\">
                                <div class=\"widget-main\">
                                    <a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("to_reportes");
        echo "\"><img class=\"img_reporte\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/img/reporte.jpeg"), "html", null, true);
        echo "\"/> </a>
                                    <!--<input type=\"image\" class=\"img_reporte\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/img/reporte.jpeg"), "html", null, true);
        echo "\"> -->
                                    <hr />\t\t\t\t\t\t\t\t\t\t\t\t\t
                                </div>
                                <div>
                                    <a href=\"#\" class=\"btn btn-block btn-success\">
                                        <i class=\"icon-cogs bigger-110\"></i>\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>                                


                </div><!-- /.page-content -->
            ";
        
        $__internal_4cd87830b7fc1dcf2c57967730e48afc50109abffbfdb0b994ff5cd8d4172632->leave($__internal_4cd87830b7fc1dcf2c57967730e48afc50109abffbfdb0b994ff5cd8d4172632_prof);

    }

    // line 81
    public function block_javascripts_page($context, array $blocks = array())
    {
        $__internal_76660b158e04b8cfd8913088c5aeaf12087a8f9287ff97bc2c654fbcd0794c7e = $this->env->getExtension("native_profiler");
        $__internal_76660b158e04b8cfd8913088c5aeaf12087a8f9287ff97bc2c654fbcd0794c7e->enter($__internal_76660b158e04b8cfd8913088c5aeaf12087a8f9287ff97bc2c654fbcd0794c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_page"));

        echo "        
            ";
        
        $__internal_76660b158e04b8cfd8913088c5aeaf12087a8f9287ff97bc2c654fbcd0794c7e->leave($__internal_76660b158e04b8cfd8913088c5aeaf12087a8f9287ff97bc2c654fbcd0794c7e_prof);

    }

    public function getTemplateName()
    {
        return "AutenticationBundle:Default:ini.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 81,  121 => 64,  115 => 63,  90 => 43,  87 => 42,  61 => 21,  58 => 20,  41 => 5,  35 => 4,  11 => 2,);
    }
}
