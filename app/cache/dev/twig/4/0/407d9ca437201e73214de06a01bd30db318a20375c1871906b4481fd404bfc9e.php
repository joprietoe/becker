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
        $__internal_2b1b7675908df2d4f4019b58dae109ae51dd7a10a1d7cb1eba4c6c1b4f4bfb37 = $this->env->getExtension("native_profiler");
        $__internal_2b1b7675908df2d4f4019b58dae109ae51dd7a10a1d7cb1eba4c6c1b4f4bfb37->enter($__internal_2b1b7675908df2d4f4019b58dae109ae51dd7a10a1d7cb1eba4c6c1b4f4bfb37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ReportsBundle:Default:dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b1b7675908df2d4f4019b58dae109ae51dd7a10a1d7cb1eba4c6c1b4f4bfb37->leave($__internal_2b1b7675908df2d4f4019b58dae109ae51dd7a10a1d7cb1eba4c6c1b4f4bfb37_prof);

    }

    // line 3
    public function block_stylesheets_page($context, array $blocks = array())
    {
        $__internal_80df30f5ecaf9645a8185e228d815fcacea4e93e1e53b5c49396c6cb7782ae1d = $this->env->getExtension("native_profiler");
        $__internal_80df30f5ecaf9645a8185e228d815fcacea4e93e1e53b5c49396c6cb7782ae1d->enter($__internal_80df30f5ecaf9645a8185e228d815fcacea4e93e1e53b5c49396c6cb7782ae1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets_page"));

        // line 4
        echo "   <!-- <link href=\"";
        echo "\" rel=\"stylesheet\"> -->
";
        
        $__internal_80df30f5ecaf9645a8185e228d815fcacea4e93e1e53b5c49396c6cb7782ae1d->leave($__internal_80df30f5ecaf9645a8185e228d815fcacea4e93e1e53b5c49396c6cb7782ae1d_prof);

    }

    // line 7
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_0fd2c0bf93247e2048025caf7199a2fa9e8824fcfa61b84a3e0953b5ac6604d6 = $this->env->getExtension("native_profiler");
        $__internal_0fd2c0bf93247e2048025caf7199a2fa9e8824fcfa61b84a3e0953b5ac6604d6->enter($__internal_0fd2c0bf93247e2048025caf7199a2fa9e8824fcfa61b84a3e0953b5ac6604d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_0fd2c0bf93247e2048025caf7199a2fa9e8824fcfa61b84a3e0953b5ac6604d6->leave($__internal_0fd2c0bf93247e2048025caf7199a2fa9e8824fcfa61b84a3e0953b5ac6604d6_prof);

    }

    // line 76
    public function block_javascripts_page($context, array $blocks = array())
    {
        $__internal_8baf81444ec82edbf13c276729b8fa78b7f44707c5804f5a1708a45947f14bda = $this->env->getExtension("native_profiler");
        $__internal_8baf81444ec82edbf13c276729b8fa78b7f44707c5804f5a1708a45947f14bda->enter($__internal_8baf81444ec82edbf13c276729b8fa78b7f44707c5804f5a1708a45947f14bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_page"));

        // line 77
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/_others/filter.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_8baf81444ec82edbf13c276729b8fa78b7f44707c5804f5a1708a45947f14bda->leave($__internal_8baf81444ec82edbf13c276729b8fa78b7f44707c5804f5a1708a45947f14bda_prof);

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
