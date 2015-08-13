<?php

/* layout.html.twig */
class __TwigTemplate_42e75e67aa5c21f98bcacc279a654572c26d759e14b72602a8c3f53da88cd6e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "layout.html.twig", 2);
        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'stylesheets_layout' => array($this, 'block_stylesheets_layout'),
            'stylesheets_page' => array($this, 'block_stylesheets_page'),
            'js_head' => array($this, 'block_js_head'),
            'js_head_layout' => array($this, 'block_js_head_layout'),
            'js_head_page' => array($this, 'block_js_head_page'),
            'body' => array($this, 'block_body'),
            'navbar' => array($this, 'block_navbar'),
            'maincontainer' => array($this, 'block_maincontainer'),
            'nav_list' => array($this, 'block_nav_list'),
            'page_content' => array($this, 'block_page_content'),
            'javascripts' => array($this, 'block_javascripts'),
            'javascripts_layout1' => array($this, 'block_javascripts_layout1'),
            'javascripts_page' => array($this, 'block_javascripts_page'),
            'javascripts_layout2' => array($this, 'block_javascripts_layout2'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db454b74ef521bcb0afdc9b334962394c168d96cef0b52671782ed1ac922112b = $this->env->getExtension("native_profiler");
        $__internal_db454b74ef521bcb0afdc9b334962394c168d96cef0b52671782ed1ac922112b->enter($__internal_db454b74ef521bcb0afdc9b334962394c168d96cef0b52671782ed1ac922112b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db454b74ef521bcb0afdc9b334962394c168d96cef0b52671782ed1ac922112b->leave($__internal_db454b74ef521bcb0afdc9b334962394c168d96cef0b52671782ed1ac922112b_prof);

    }

    // line 5
    public function block_meta($context, array $blocks = array())
    {
        $__internal_a75f58d9002722955d330e473a7a065fe4a7a9f418df92580e68c71a068fdc45 = $this->env->getExtension("native_profiler");
        $__internal_a75f58d9002722955d330e473a7a065fe4a7a9f418df92580e68c71a068fdc45->enter($__internal_a75f58d9002722955d330e473a7a065fe4a7a9f418df92580e68c71a068fdc45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        echo " 
<meta name=\"description\" content=\"\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
<title>Sistema Ficha Medica</title>

    ";
        
        $__internal_a75f58d9002722955d330e473a7a065fe4a7a9f418df92580e68c71a068fdc45->leave($__internal_a75f58d9002722955d330e473a7a065fe4a7a9f418df92580e68c71a068fdc45_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d399ad9affc75d9b6e756ddf2856f986351f7f8a06b82b68719c6d468bb81953 = $this->env->getExtension("native_profiler");
        $__internal_d399ad9affc75d9b6e756ddf2856f986351f7f8a06b82b68719c6d468bb81953->enter($__internal_d399ad9affc75d9b6e756ddf2856f986351f7f8a06b82b68719c6d468bb81953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        $this->displayBlock('stylesheets_layout', $context, $blocks);
        // line 43
        echo "   
";
        // line 45
        $this->displayBlock('stylesheets_page', $context, $blocks);
        
        $__internal_d399ad9affc75d9b6e756ddf2856f986351f7f8a06b82b68719c6d468bb81953->leave($__internal_d399ad9affc75d9b6e756ddf2856f986351f7f8a06b82b68719c6d468bb81953_prof);

    }

    // line 15
    public function block_stylesheets_layout($context, array $blocks = array())
    {
        $__internal_c8c50a6449d45341b09076097ed2df3f578acb1083e6a4942bfa977f51edbdf5 = $this->env->getExtension("native_profiler");
        $__internal_c8c50a6449d45341b09076097ed2df3f578acb1083e6a4942bfa977f51edbdf5->enter($__internal_c8c50a6449d45341b09076097ed2df3f578acb1083e6a4942bfa977f51edbdf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets_layout"));

        // line 16
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/css/font-awesome.min.css"), "html", null, true);
        echo "\" />

<!--<link rel=\"stylesheet\" href=\"";
        // line 20
        echo "\" />-->
<link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/css/chosen.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/css/datepicker.css"), "html", null, true);
        echo "\" />

<link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/css/_other.utils.css"), "html", null, true);
        echo "\" />

<link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/css/ace-fonts.css"), "html", null, true);
        echo "\" />

<link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/css/ace.min.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/css/ace-rtl.min.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/css/ace-skins.min.css"), "html", null, true);
        echo "\" />


";
        // line 34
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/css/jquery.gritter.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/css/select2.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/css/bootstrap-editable.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/css/bootstrap-timepicker.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/css/daterangepicker.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/css/colorpicker.css"), "html", null, true);
        echo "\" />


";
        
        $__internal_c8c50a6449d45341b09076097ed2df3f578acb1083e6a4942bfa977f51edbdf5->leave($__internal_c8c50a6449d45341b09076097ed2df3f578acb1083e6a4942bfa977f51edbdf5_prof);

    }

    // line 45
    public function block_stylesheets_page($context, array $blocks = array())
    {
        $__internal_ec143ce2313d9a43fdc432d5bc6ad271f94650d2f5916327f7c004bc43c7e7ad = $this->env->getExtension("native_profiler");
        $__internal_ec143ce2313d9a43fdc432d5bc6ad271f94650d2f5916327f7c004bc43c7e7ad->enter($__internal_ec143ce2313d9a43fdc432d5bc6ad271f94650d2f5916327f7c004bc43c7e7ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets_page"));

        
        $__internal_ec143ce2313d9a43fdc432d5bc6ad271f94650d2f5916327f7c004bc43c7e7ad->leave($__internal_ec143ce2313d9a43fdc432d5bc6ad271f94650d2f5916327f7c004bc43c7e7ad_prof);

    }

    // line 49
    public function block_js_head($context, array $blocks = array())
    {
        $__internal_19d7bcf9f017f1299a1d5c4c071975a7f7be1e165d5c186dba07854ed1325e88 = $this->env->getExtension("native_profiler");
        $__internal_19d7bcf9f017f1299a1d5c4c071975a7f7be1e165d5c186dba07854ed1325e88->enter($__internal_19d7bcf9f017f1299a1d5c4c071975a7f7be1e165d5c186dba07854ed1325e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_head"));

        // line 51
        $this->displayBlock('js_head_layout', $context, $blocks);
        // line 61
        echo "  
";
        // line 63
        $this->displayBlock('js_head_page', $context, $blocks);
        
        $__internal_19d7bcf9f017f1299a1d5c4c071975a7f7be1e165d5c186dba07854ed1325e88->leave($__internal_19d7bcf9f017f1299a1d5c4c071975a7f7be1e165d5c186dba07854ed1325e88_prof);

    }

    // line 51
    public function block_js_head_layout($context, array $blocks = array())
    {
        $__internal_9d1923499aaa2299005ad43e448c41ecbf6d434f386d3db0e620174f203e8cd0 = $this->env->getExtension("native_profiler");
        $__internal_9d1923499aaa2299005ad43e448c41ecbf6d434f386d3db0e620174f203e8cd0->enter($__internal_9d1923499aaa2299005ad43e448c41ecbf6d434f386d3db0e620174f203e8cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_head_layout"));

        // line 52
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/ace-extra.min.js"), "html", null, true);
        echo "\"></script>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

<!--[if lt IE 9]>
<script src=\"assets/js/html5shiv.js\"></script>
<script src=\"assets/js/respond.min.js\"></script>
<![endif]-->    

";
        
        $__internal_9d1923499aaa2299005ad43e448c41ecbf6d434f386d3db0e620174f203e8cd0->leave($__internal_9d1923499aaa2299005ad43e448c41ecbf6d434f386d3db0e620174f203e8cd0_prof);

    }

    // line 63
    public function block_js_head_page($context, array $blocks = array())
    {
        $__internal_5ee0c635d887c58b44c6f4a9bf4472a1c38ca74c864d5e1b0fbcde9aab1f2a84 = $this->env->getExtension("native_profiler");
        $__internal_5ee0c635d887c58b44c6f4a9bf4472a1c38ca74c864d5e1b0fbcde9aab1f2a84->enter($__internal_5ee0c635d887c58b44c6f4a9bf4472a1c38ca74c864d5e1b0fbcde9aab1f2a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_head_page"));

        
        $__internal_5ee0c635d887c58b44c6f4a9bf4472a1c38ca74c864d5e1b0fbcde9aab1f2a84->leave($__internal_5ee0c635d887c58b44c6f4a9bf4472a1c38ca74c864d5e1b0fbcde9aab1f2a84_prof);

    }

    // line 67
    public function block_body($context, array $blocks = array())
    {
        $__internal_722274dcf4f3cf7c5393e90d8abe81ff5ca9c51b6fa2e027a35daaa4a164baf0 = $this->env->getExtension("native_profiler");
        $__internal_722274dcf4f3cf7c5393e90d8abe81ff5ca9c51b6fa2e027a35daaa4a164baf0->enter($__internal_722274dcf4f3cf7c5393e90d8abe81ff5ca9c51b6fa2e027a35daaa4a164baf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 69
        echo "    ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 136
        echo "    ";
        $this->displayBlock('maincontainer', $context, $blocks);
        // line 351
        echo "    ";
        
        $__internal_722274dcf4f3cf7c5393e90d8abe81ff5ca9c51b6fa2e027a35daaa4a164baf0->leave($__internal_722274dcf4f3cf7c5393e90d8abe81ff5ca9c51b6fa2e027a35daaa4a164baf0_prof);

    }

    // line 69
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_12ecb3471980fdb60290b389bd5061ede4f85c3dc851b6bc22e9e17c3bc0341f = $this->env->getExtension("native_profiler");
        $__internal_12ecb3471980fdb60290b389bd5061ede4f85c3dc851b6bc22e9e17c3bc0341f->enter($__internal_12ecb3471980fdb60290b389bd5061ede4f85c3dc851b6bc22e9e17c3bc0341f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 70
        echo "<div class=\"navbar navbar-default\" id=\"navbar\">
    <script type=\"text/javascript\">
        try {
            ace.settings.check('navbar', 'fixed')
        } catch (e) {
        }
        </script>

        <div class=\"navbar-container\" id=\"navbar-container\">
            <div class=\"navbar-header pull-left\">
                <a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("inicio");
        echo "\" class=\"navbar-brand\">
                    <small>
                        <i class=\"icon-leaf\"></i>&nbsp;&nbsp;
                        Sistema Ficha Medica
                    </small>
                </a><!-- /.brand -->
            </div><!-- /.navbar-header -->

            <div class=\"navbar-header pull-right\" role=\"navigation\">
                <input type=\"hidden\" id=\"url\" value=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "BaseUrl", array()), "html", null, true);
        echo "\" >
                <ul class=\"nav ace-nav\">
                    
                    <li class=\"light-blue\">
                        <a data-toggle=\"dropdown\" href=\"#\" class=\"dropdown-toggle\">
                            <img class=\"nav-user-photo\" src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/avatars/user.jpg"), "html", null, true);
        echo "\" />
                            <span class=\"user-info\">
                                <small>Bienvenido,</small>
                                 ";
        // line 97
        if (($this->env->getExtension('security')->isGranted("ROLE_MEDICO") || $this->env->getExtension('security')->isGranted("ROLE_SECRETARIA"))) {
            // line 98
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nombre", array()), "html", null, true);
            echo "
                                ";
        }
        // line 100
        echo "                            </span>

                            <i class=\"icon-caret-down\"></i>
                        </a>

                        <ul class=\"user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close\">
                           <!-- <li>
                                <a href=\"#\">
                                    <i class=\"icon-leaf\"></i>
                                    Crear Ficha Médica
                                </a>
                            </li>-->

                            <li>
                                <a href=\"#\">
                                    <i class=\"icon-user\"></i>
                                    Perfil
                                </a>
                            </li>

                            <li class=\"divider\"></li>

                            <li>
                                <a href=\"";
        // line 123
        echo $this->env->getExtension('routing')->getPath("user_logout");
        echo "\">
                                    <i class=\"icon-off\"></i>
                                    Salir
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul><!-- /.ace-nav -->
            </div><!-- /.navbar-header -->
        </div><!-- /.container -->
    </div>
    ";
        
        $__internal_12ecb3471980fdb60290b389bd5061ede4f85c3dc851b6bc22e9e17c3bc0341f->leave($__internal_12ecb3471980fdb60290b389bd5061ede4f85c3dc851b6bc22e9e17c3bc0341f_prof);

    }

    // line 136
    public function block_maincontainer($context, array $blocks = array())
    {
        $__internal_c3547ec7fc0d9018c705fc3b9ec2e775b7acd8cfd83b43cae114880953b75784 = $this->env->getExtension("native_profiler");
        $__internal_c3547ec7fc0d9018c705fc3b9ec2e775b7acd8cfd83b43cae114880953b75784->enter($__internal_c3547ec7fc0d9018c705fc3b9ec2e775b7acd8cfd83b43cae114880953b75784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "maincontainer"));

        // line 137
        echo "    <div class=\"main-container\" id=\"main-container\">
        <script type=\"text/javascript\">
            try {
                ace.settings.check('main-container', 'fixed')
            } catch (e) {
            }
            </script>

            <div class=\"main-container-inner\">
                <a class=\"menu-toggler\" id=\"menu-toggler\" href=\"#\">
                    <span class=\"menu-text\"></span>
                </a>

                <div class=\"sidebar\" id=\"sidebar\">
                    <script type=\"text/javascript\">
                        try {
                            ace.settings.check('sidebar', 'fixed')
                        } catch (e) {
                        }
                        </script>                    

                        ";
        // line 158
        $this->displayBlock('nav_list', $context, $blocks);
        // line 302
        echo "             

                        <script type=\"text/javascript\">
                            try {
                                ace.settings.check('sidebar', 'collapsed')
                            } catch (e) {
                            }
                            </script>
                        </div>

                        <div class=\"main-content\">

                            <div class=\"breadcrumbs\" id=\"breadcrumbs\">
                                <script type=\"text/javascript\">
                                    try {
                                        ace.settings.check('breadcrumbs', 'fixed')
                                    } catch (e) {
                                    }
                                    </script>

                                    <ul class=\"breadcrumb\">
                                        <li>
                                            <i class=
                                               \"icon-home home-icon\">
                                            </i>
                                            <a href=\"#\">Home</a>
                                        </li>
                                    </ul>               
                            </div>

                                    <div class=\"page-content\">
                                        <div class=\"row\">
                                            <div class=\"col-xs-12\">
                                                <!-- PAGE CONTENT BEGINS -->

                                             ";
        // line 337
        $this->displayBlock('page_content', $context, $blocks);
        // line 338
        echo "
                                                <!-- PAGE CONTENT ENDS -->
                                            </div><!-- /.col -->
                                        </div><!-- /.row -->
                                    </div><!-- /.page-content -->
                                </div><!-- /.main-content -->                                
                            </div><!-- /.main-container-inner -->

                            <a href=\"#\" id=\"btn-scroll-up\" class=\"btn-scroll-up btn btn-sm btn-inverse\">
                                <i class=\"icon-double-angle-up icon-only bigger-110\"></i>
                            </a>
                        </div><!-- /.main-container -->
                ";
        
        $__internal_c3547ec7fc0d9018c705fc3b9ec2e775b7acd8cfd83b43cae114880953b75784->leave($__internal_c3547ec7fc0d9018c705fc3b9ec2e775b7acd8cfd83b43cae114880953b75784_prof);

    }

    // line 158
    public function block_nav_list($context, array $blocks = array())
    {
        $__internal_3c0b807a3c0ae676c5f256844c5a59f64edf8cfcfa845bb652a11b498ee26841 = $this->env->getExtension("native_profiler");
        $__internal_3c0b807a3c0ae676c5f256844c5a59f64edf8cfcfa845bb652a11b498ee26841->enter($__internal_3c0b807a3c0ae676c5f256844c5a59f64edf8cfcfa845bb652a11b498ee26841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav_list"));

        // line 159
        echo "                        <ul class=\"nav nav-list\"> 
                           <!-- <div id=\"filters\">";
        // line 160
        echo "</div>-->
                            
                            <li>
                                <a href=\"";
        // line 163
        echo $this->env->getExtension('routing')->getPath("to_dwork");
        echo "\" class=\"dropdown-toggle\">
                                    <i class=\"icon-leaf dark\"></i>
                                    <span class=\"menu-text\"> Criar Ficha Medica </span>
                                    <b class=\"arrow\"></b>
                                </a>
                               <!-- <ul class=\"submenu\">
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"icon-double-angle-right\"></i>
                                            Administar mis proyectos
                                        </a>
                                    </li>

                                    <li>
                                        <a href=\"#\">
                                            <i class=\"icon-double-angle-right\"></i>
                                            Vista general
                                        </a>
                                    </li>

                                </ul>-->

                            </li>

                            <li>
                                <a href=\"";
        // line 188
        echo $this->env->getExtension('routing')->getPath("to_dawork");
        echo "\">
                                    <i class=\"icon-cog blue\"></i>
                                    <span class=\"menu-text\"> Trabalho Diario </span>
                                </a>
                            </li>

                            <li>
                                <a href=\"";
        // line 195
        echo $this->env->getExtension('routing')->getPath("to_reportes");
        echo "\" class=\"dropdown-toggle\">
                                    <i class=\"icon-cogs light-blue\"></i>
                                    <span class=\"menu-text grey\"> Reportes </span>
                                     <b class=\"arrow icon-angle-down\"></b>
                                </a>
                                
                                <ul class=\"submenu\">
                                    <li class=\"disabled\">
                                        <a href=\"#\" class=\"dropdown-toggle\">
                                            <i class=\"icon-double-angle-right\"></i>
                                            Reporte por edad
                                        </a>
                                         <ul class=\"submenu\">
                                            <li class=\"disabled\">
                                                <a href=\"#\">
                                                    <i class=\"icon-double-angle-right\"></i>
                                                    Ate 1 ano 
                                                </a>
                                            </li>

                                            <li class=\"disabled\">
                                                <a href=\"#\">
                                                    <i class=\"icon-double-angle-right\"></i>
                                                      1 ate 3 anos                                     
                                                </a>
                                            </li>
                                            <li class=\"disabled\">
                                                <a href=\"#\">
                                                    <i class=\"icon-double-angle-right\"></i>
                                                      3 ate 7 anos                                   
                                                </a>
                                            </li>
                                            <li class=\"disabled\">
                                                <a href=\"#\">
                                                    <i class=\"icon-double-angle-right\"></i>
                                                      7 ate 14 anos                                   
                                                </a>
                                            </li>

                                         </ul>
                                    </li>

                                    <li class=\"disabled\">
                                        <a href=\"#\" class=\"dropdown-toggle\">
                                            <i class=\"icon-double-angle-right\"></i>
                                            Tipo de sangue                                          
                                        </a>
                                        <ul class=\"submenu\">
                                            <li class=\"disabled\">
                                                <a href=\"#\">
                                                    <i class=\"icon-double-angle-right\"></i>
                                                    A+ 
                                                </a>
                                            </li>

                                            <li class=\"disabled\">
                                                <a href=\"#\">
                                                    <i class=\"icon-double-angle-right\"></i>
                                                      A-
                                                </a>
                                            </li>
                                            <li class=\"disabled\">
                                                <a href=\"#\">
                                                    <i class=\"icon-double-angle-right\"></i>
                                                      AB+                                  
                                                </a>
                                            </li>
                                            <li class=\"disabled\">
                                                <a href=\"#\">
                                                    <i class=\"icon-double-angle-right\"></i>
                                                      AB-                                  
                                                </a>
                                            </li>

                                         </ul>
                                    </li>                                
                                    
                                    <li class=\"disabled\">
                                        <a href=\"#\" class=\"dropdown-toggle\">
                                            <i class=\"icon-double-angle-right\"></i>
                                            Nome                                          
                                        </a>
                                        
                                        <ul class=\"submenu\">
                                           
                                              <a id=\"nome-id\" href=\"#\">
                                                <input type=\"text\" id=\"filtername\" placeholder=\"nome\" class=\"col-xs-10 fnome\" />                                            
                                                  <i class=\"icon-zoom-in bigger-130 blue isearch\"></i>
                                              </a>                                           
                                            
                                            <br />
                                        </ul>
                                        
                                    </li>
                                </ul>
                                
                            </li>                                 
 
                        </ul>                           


                        </ul><!-- /.nav-list -->

                        <div class=\"sidebar-collapse\" id=\"sidebar-collapse\">
                            <i class=\"icon-double-angle-left\" data-icon1=\"icon-double-angle-left\" data-icon2=\"icon-double-angle-right\"></i>
                        </div>
                       ";
        
        $__internal_3c0b807a3c0ae676c5f256844c5a59f64edf8cfcfa845bb652a11b498ee26841->leave($__internal_3c0b807a3c0ae676c5f256844c5a59f64edf8cfcfa845bb652a11b498ee26841_prof);

    }

    // line 337
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_75819c935dcc55052329b028d70ac082a8fb6344590c7183b5983ded50c2a436 = $this->env->getExtension("native_profiler");
        $__internal_75819c935dcc55052329b028d70ac082a8fb6344590c7183b5983ded50c2a436->enter($__internal_75819c935dcc55052329b028d70ac082a8fb6344590c7183b5983ded50c2a436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        
        $__internal_75819c935dcc55052329b028d70ac082a8fb6344590c7183b5983ded50c2a436->leave($__internal_75819c935dcc55052329b028d70ac082a8fb6344590c7183b5983ded50c2a436_prof);

    }

    // line 354
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8ed9e2419d58f21aea0c11e07cf61786144011ddd63d6f2067e33c9defa108ec = $this->env->getExtension("native_profiler");
        $__internal_8ed9e2419d58f21aea0c11e07cf61786144011ddd63d6f2067e33c9defa108ec->enter($__internal_8ed9e2419d58f21aea0c11e07cf61786144011ddd63d6f2067e33c9defa108ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo "                  
 ";
        // line 356
        echo "    ";
        $this->displayBlock('javascripts_layout1', $context, $blocks);
        // line 403
        echo " 
                  ";
        // line 404
        $this->displayBlock('javascripts_page', $context, $blocks);
        echo "          
                  ";
        // line 405
        $this->displayBlock('javascripts_layout2', $context, $blocks);
        // line 512
        echo " ";
        
        $__internal_8ed9e2419d58f21aea0c11e07cf61786144011ddd63d6f2067e33c9defa108ec->leave($__internal_8ed9e2419d58f21aea0c11e07cf61786144011ddd63d6f2067e33c9defa108ec_prof);

    }

    // line 356
    public function block_javascripts_layout1($context, array $blocks = array())
    {
        $__internal_6abfce259a0a80285a59dbef401dce497d3a14139dbd679838321cefe2b3258a = $this->env->getExtension("native_profiler");
        $__internal_6abfce259a0a80285a59dbef401dce497d3a14139dbd679838321cefe2b3258a->enter($__internal_6abfce259a0a80285a59dbef401dce497d3a14139dbd679838321cefe2b3258a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_layout1"));

        // line 357
        echo "                    <!-- basic scripts -->

                    <!--[if !IE]> -->

                    <script type=\"text/javascript\">
                        window.jQuery || document.write(\"<script src='";
        // line 362
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/jquery-2.0.3.min.js"), "html", null, true);
        echo "'>\" + \"<\" + \"/script>\");
                        </script>

                        <!-- <![endif]-->

                        <!--[if IE]>
        <script type=\"text/javascript\">
         window.jQuery || document.write(\"<script src='assets/js/jquery-1.10.2.min.js'>\"+\"<\"+\"/script>\");
        </script>
        <![endif]-->

                        <script type=\"text/javascript\">
                            if (\"ontouchend\" in document)
                                document.write(\"<script src='";
        // line 375
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/jquery.mobile.custom.min.js"), "html", null, true);
        echo "'>\" + \"<\" + \"/script>\");
                            </script>
                            <script src=\"";
        // line 377
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
                            <script src=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/typeahead-bs2.min.js"), "html", null, true);
        echo "\"></script>

                            <!-- page specific plugin scripts -->
                          <!--  <script src=\"";
        // line 381
        echo "\"></script>
                            <script src=\"";
        // line 382
        echo "\"></script> -->
                            <script src=\"";
        // line 383
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/jquery-ui-1.10.3.custom.min.js"), "html", null, true);
        echo "\"></script>
                            <script src=\"";
        // line 384
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/jquery.ui.touch-punch.min.js"), "html", null, true);
        echo "\"></script>
                            <script src=\"";
        // line 385
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
                            <script src=\"";
        // line 386
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/fuelux/fuelux.spinner.min.js"), "html", null, true);
        echo "\"></script>
                            <script src=\"";
        // line 387
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/date-time/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
                            <script src=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/jquery.autosize.min.js"), "html", null, true);
        echo "\"></script>
                            <script src=\"";
        // line 389
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/jquery.inputlimiter.1.3.1.min.js"), "html", null, true);
        echo "\"></script>
                            <script src=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/jquery.maskedinput.min.js"), "html", null, true);
        echo "\"></script>
                            <script src=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/bootstrap-tag.min.js"), "html", null, true);
        echo "\"></script>

                            <script src=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
                            <script src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/jquery.dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>

                            <!-- ace scripts -->

                            <script src=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/ace-elements.min.js"), "html", null, true);
        echo "\"></script>
                            <script src=\"";
        // line 399
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/ace.min.js"), "html", null, true);
        echo "\"></script>

                            <!-- inline scripts related to this page by Armando -->                        
                            <script src=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/_others/validaciones/nuevoregistro.js"), "html", null, true);
        echo "\"></script>                                                       
                  ";
        
        $__internal_6abfce259a0a80285a59dbef401dce497d3a14139dbd679838321cefe2b3258a->leave($__internal_6abfce259a0a80285a59dbef401dce497d3a14139dbd679838321cefe2b3258a_prof);

    }

    // line 404
    public function block_javascripts_page($context, array $blocks = array())
    {
        $__internal_552bf7747c83e402c7a9ecd87587cf851d001a127f21660d944648ab6fe1efd8 = $this->env->getExtension("native_profiler");
        $__internal_552bf7747c83e402c7a9ecd87587cf851d001a127f21660d944648ab6fe1efd8->enter($__internal_552bf7747c83e402c7a9ecd87587cf851d001a127f21660d944648ab6fe1efd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_page"));

        
        $__internal_552bf7747c83e402c7a9ecd87587cf851d001a127f21660d944648ab6fe1efd8->leave($__internal_552bf7747c83e402c7a9ecd87587cf851d001a127f21660d944648ab6fe1efd8_prof);

    }

    // line 405
    public function block_javascripts_layout2($context, array $blocks = array())
    {
        $__internal_a65c010c0fca43aa5d9979985ddb5f13a2e3b87f72658aebe978abce1f71388c = $this->env->getExtension("native_profiler");
        $__internal_a65c010c0fca43aa5d9979985ddb5f13a2e3b87f72658aebe978abce1f71388c->enter($__internal_a65c010c0fca43aa5d9979985ddb5f13a2e3b87f72658aebe978abce1f71388c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_layout2"));

        echo "          
                            <script type=\"text/javascript\">
                            
                         
                            
                            jQuery(function(\$) {
                                
                                //jquery de la pagina homeuser idem a la de fases
\t\t\t\t\$('#loading-btn').on(ace.click_event, function () {
\t\t\t\t\tvar btn = \$(this);
\t\t\t\t\tbtn.button('loading')
\t\t\t\t\tsetTimeout(function () {
\t\t\t\t\t\tbtn.button('reset')
\t\t\t\t\t}, 2000)
\t\t\t\t});
\t\t\t\t
                               
\t\t\t\t//modal-form
\t\t\t\t\$('#modal-form input[type=file]').ace_file_input({
\t\t\t\t\tstyle:'well',
\t\t\t\t\tbtn_choose:'Drop files here or click to choose',
\t\t\t\t\tbtn_change:null,
\t\t\t\t\tno_icon:'icon-cloud-upload',
\t\t\t\t\tdroppable:true,
\t\t\t\t\tthumbnail:'large'
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t//chosen plugin inside a modal will have a zero width because the select element is originally hidden
\t\t\t\t//and its width cannot be determined.
\t\t\t\t//so we set the width after modal is show
\t\t\t\t/*\$('#modal-form').on('shown.bs.modal', function () {
\t\t\t\t\t\$(this).find('.chosen-container').each(function(){
\t\t\t\t\t\t\$(this).find('a:first-child').css('width' , '210px');
\t\t\t\t\t\t\$(this).find('.chosen-drop').css('width' , '210px');
\t\t\t\t\t\t\$(this).find('.chosen-search input').css('width' , '200px');
\t\t\t\t\t});
\t\t\t\t});*/
\t\t\t\t/**
\t\t\t\t//or you can activate the chosen plugin after modal is shown
\t\t\t\t//this way select element becomes visible with dimensions and chosen works as expected
\t\t\t\t*/
\t\t\t\t/*
\t\t\t\t\$('#modal-form').on('shown', function () {
\t\t\t\t\t\$(this).find('.modal-chosen').chosen();
\t\t\t\t\t\$(\".chosen-select\").chosen();
\t\t\t\t})*/
\t
\t\t\t\t//jquery for Chosen
\t\t\t\t\$(\".chosen-select\").chosen(); 
                                //\$(\".chosen-select\").chosen({display_selected_options: true, no_results_text: \"No se ha encontrado nada!\", width: '500px'});
\t\t\t\t//\$(\".chosen-select\").chosen({disable_search_threshold: 10});
                                
\t\t\t\t//jquery tooltip
\t\t\t\t\$('[data-rel=tooltip]').tooltip();
\t\t\t\t\$('[data-rel=popover]').popover({html:true});
                                
\t\t\t\t
\t\t\t\t//jquery datepicker
\t\t\t\t\t\$('.date-picker').datepicker({autoclose:true}).next().on(ace.click_event, function(){
\t\t\t\t\t\$(this).prev().focus();
\t\t\t\t});
\t\t\t\t
\t\t\t\t//jqueryTable
\t\t\t\t/*var oTable1 = \$('#sample-table-2').dataTable( {
\t\t\t\t\"aoColumns\": [
\t\t\t      { \"bSortable\": false },
\t\t\t      null, null,null, null, null,
\t\t\t\t  { \"bSortable\": false }
\t\t\t\t] } );*/
\t\t\t\t
\t\t\t\t
\t\t\t\t/*\$('table th input:checkbox').on('click' , function(){
\t\t\t\t\tvar that = this;
\t\t\t\t\t\$(this).closest('table').find('tr > td:first-child input:checkbox')
\t\t\t\t\t.each(function(){
\t\t\t\t\t\tthis.checked = that.checked;
\t\t\t\t\t\t\$(this).closest('tr').toggleClass('selected');
\t\t\t\t\t});
\t\t\t\t\t\t
\t\t\t\t});*/
\t\t\t
\t\t\t\t
                               
                                \$('.input-mask-phone').mask('(999) 999-9999');
\t\t\t
\t\t\t
\t\t\t\t//jquery accordion
\t\t\t\t\$( \"#accordion\" ).accordion({
\t\t\t\t\tcollapsible: true ,
\t\t\t\t\theightStyle: \"content\",
\t\t\t\t\tanimate: 250,
\t\t\t\t\theader: \".accordion-header\"
\t\t\t\t}).sortable({
\t\t\t\t\taxis: \"y\",
\t\t\t\t\thandle: \".accordion-header\",
\t\t\t\t\tstop: function( event, ui ) {
\t\t\t\t\t\t// IE doesn't register the blur when sorting
\t\t\t\t\t\t// so trigger focusout handlers to remove .ui-state-focus
\t\t\t\t\t\tui.item.children( \".accordion-header\" ).triggerHandler( \"focusout\" );
\t\t\t\t\t}
\t\t\t\t});
                            });
                     
                              
       </script>
    ";
        
        $__internal_a65c010c0fca43aa5d9979985ddb5f13a2e3b87f72658aebe978abce1f71388c->leave($__internal_a65c010c0fca43aa5d9979985ddb5f13a2e3b87f72658aebe978abce1f71388c_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  772 => 405,  761 => 404,  752 => 402,  746 => 399,  742 => 398,  735 => 394,  731 => 393,  726 => 391,  722 => 390,  718 => 389,  714 => 388,  710 => 387,  706 => 386,  702 => 385,  698 => 384,  694 => 383,  691 => 382,  688 => 381,  682 => 378,  678 => 377,  673 => 375,  657 => 362,  650 => 357,  644 => 356,  637 => 512,  635 => 405,  631 => 404,  628 => 403,  625 => 356,  617 => 354,  606 => 337,  492 => 195,  482 => 188,  454 => 163,  449 => 160,  446 => 159,  440 => 158,  421 => 338,  419 => 337,  382 => 302,  380 => 158,  357 => 137,  351 => 136,  332 => 123,  307 => 100,  301 => 98,  299 => 97,  293 => 94,  285 => 89,  273 => 80,  261 => 70,  255 => 69,  248 => 351,  245 => 136,  242 => 69,  236 => 67,  225 => 63,  207 => 52,  201 => 51,  194 => 63,  191 => 61,  189 => 51,  183 => 49,  172 => 45,  161 => 40,  157 => 39,  153 => 38,  149 => 37,  145 => 36,  141 => 35,  138 => 34,  132 => 30,  128 => 29,  124 => 28,  119 => 26,  114 => 24,  109 => 22,  105 => 21,  102 => 20,  97 => 18,  93 => 17,  90 => 16,  84 => 15,  77 => 45,  74 => 43,  72 => 15,  66 => 13,  49 => 5,  11 => 2,);
    }
}
