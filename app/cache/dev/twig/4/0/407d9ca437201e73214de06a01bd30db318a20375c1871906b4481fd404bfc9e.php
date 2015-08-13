<?php

/* ReportsBundle:Default:dashboard.html.twig */
class __TwigTemplate_407d9ca437201e73214de06a01bd30db318a20375c1871906b4481fd404bfc9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "ReportsBundle:Default:dashboard.html.twig", 1);
        $this->blocks = array(
            'stylesheets_page' => array($this, 'block_stylesheets_page'),
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
        $__internal_f1b6990e8f269696d2bae19c3d6ef14d1ef28ce1ae933588b668ed102a56eb16 = $this->env->getExtension("native_profiler");
        $__internal_f1b6990e8f269696d2bae19c3d6ef14d1ef28ce1ae933588b668ed102a56eb16->enter($__internal_f1b6990e8f269696d2bae19c3d6ef14d1ef28ce1ae933588b668ed102a56eb16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ReportsBundle:Default:dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1b6990e8f269696d2bae19c3d6ef14d1ef28ce1ae933588b668ed102a56eb16->leave($__internal_f1b6990e8f269696d2bae19c3d6ef14d1ef28ce1ae933588b668ed102a56eb16_prof);

    }

    // line 3
    public function block_stylesheets_page($context, array $blocks = array())
    {
        $__internal_c41472e59b7994453722a3e68f6d5405035a19a9834fc87c496e41e934dfe74f = $this->env->getExtension("native_profiler");
        $__internal_c41472e59b7994453722a3e68f6d5405035a19a9834fc87c496e41e934dfe74f->enter($__internal_c41472e59b7994453722a3e68f6d5405035a19a9834fc87c496e41e934dfe74f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets_page"));

        // line 4
        echo "   <!-- <link href=\"";
        echo "\" rel=\"stylesheet\"> -->
";
        
        $__internal_c41472e59b7994453722a3e68f6d5405035a19a9834fc87c496e41e934dfe74f->leave($__internal_c41472e59b7994453722a3e68f6d5405035a19a9834fc87c496e41e934dfe74f_prof);

    }

    // line 7
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_d5cc4a8c71fd3262b7716011abf360c8d008eda56ff1213374fbaf2ebdcde403 = $this->env->getExtension("native_profiler");
        $__internal_d5cc4a8c71fd3262b7716011abf360c8d008eda56ff1213374fbaf2ebdcde403->enter($__internal_d5cc4a8c71fd3262b7716011abf360c8d008eda56ff1213374fbaf2ebdcde403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        echo " 

    <div class=\"page-content\">
        <div class=\"page-header row\">
            <div class=\"col-md-4 col-sm-4\">
                <h1>
                    Maneje seus pacientes:
                </h1>
            </div>
            <div class=\"col-md-offset-6 col-sm-offset-6 col-md-2 col-sm-3\">
                <a href=\"#\" class=\"btn btn-app btn-info btn-sm no-radius\" >
                    <i class=\"icon-envelope bigger-230\"></i>
                    MailList
                </a>
            </div>

        </div><!-- /.page-header -->

        <div id=\"accordion1\" class=\"accordion-style2 panel-group no-padding-right\">
            <div class=\"panel panel-default\">
                <div class=\"row\">
                    <label class=\"col-md-2 col-sm-2 panel-title  blue  accordion-submenu\" id=\"acoordion-title1\">
                        <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\"> 
                            Criterio Filtragem
                            <i class=\"icon-angle-down bigger-110\" data-icon-hide=\"icon-angle-down \" data-icon-show=\"icon-double-angle-right\"></i>
                        </a>
                    </label>
                    <div id=\"filters\" class=\"col-md-8 col-sm-8\">";
        // line 34
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ReportsBundle:Default:filterPage"));
        echo "</div>
                </div>
                <div class=\"space\" > </div> 
                <div class=\"panel-collapse collapse in\" id=\"collapseOne\">\t

                    <div class=\"col-md-12\">
                        <div class=\"row\">
                            <div class=\"table-responsive\">
                                <table id=\"sample-table-2\" class=\"table table-striped table-bordered table-hover \">
                                    <thead>
                                        <tr>
                                            <!-- <th class=\"center\">Seleccionar</th> -->                                        
                                            <th class=\"center\">Nome Paciente</th>
                                            <th class=\"hidden-480 center\">Responsavels</th>
                                            <th class=\"hidden-480 center\">Endereco</th>                                       
                                            <th class=\"hidden-480 center\">Dado 4</th>
                                            <th class=\"center\">Acciones</th>
                                        </tr>
                                    </thead>

                                    <tbody id=\"mytbody\">
                                        ";
        // line 55
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ReportsBundle:Default:dataPage", array("page" => (isset($context["actPage"]) ? $context["actPage"] : $this->getContext($context, "actPage")))));
        echo "
                                    </tbody>
                                </table>
                            </div>
                            <nav id=\"my-paginator\">
                                ";
        // line 60
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ReportsBundle:Default:page", array("activepage" => (isset($context["actPage"]) ? $context["actPage"] : $this->getContext($context, "actPage")))));
        echo "   
                            </nav>
                        </div>
                    </div>

                </div>

            </div>
        </div>


        <div class=\"space\" > </div> \t

        ";
        // line 74
        echo "    </div><!-- /.page-content -->      

    ";
        // line 76
        $this->displayBlock('javascripts_page', $context, $blocks);
        // line 78
        echo " 

";
        
        $__internal_d5cc4a8c71fd3262b7716011abf360c8d008eda56ff1213374fbaf2ebdcde403->leave($__internal_d5cc4a8c71fd3262b7716011abf360c8d008eda56ff1213374fbaf2ebdcde403_prof);

    }

    // line 76
    public function block_javascripts_page($context, array $blocks = array())
    {
        $__internal_98e049d5a4fc76d454832ae7009f75254b688d6abb814a949723dffe45c7fdf6 = $this->env->getExtension("native_profiler");
        $__internal_98e049d5a4fc76d454832ae7009f75254b688d6abb814a949723dffe45c7fdf6->enter($__internal_98e049d5a4fc76d454832ae7009f75254b688d6abb814a949723dffe45c7fdf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_page"));

        // line 77
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/_others/filter.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_98e049d5a4fc76d454832ae7009f75254b688d6abb814a949723dffe45c7fdf6->leave($__internal_98e049d5a4fc76d454832ae7009f75254b688d6abb814a949723dffe45c7fdf6_prof);

    }

    public function getTemplateName()
    {
        return "ReportsBundle:Default:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 77,  148 => 76,  139 => 78,  137 => 76,  133 => 74,  117 => 60,  109 => 55,  85 => 34,  51 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
