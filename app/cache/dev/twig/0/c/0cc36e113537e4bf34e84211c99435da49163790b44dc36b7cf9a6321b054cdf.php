<?php

/* DailyWorkBundle:Default:dailywork.html.twig */
class __TwigTemplate_0cc36e113537e4bf34e84211c99435da49163790b44dc36b7cf9a6321b054cdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("layout.html.twig", "DailyWorkBundle:Default:dailywork.html.twig", 2);
        $this->blocks = array(
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_32aecb5d4d25ab9175cac6e2a417ebc947a61032384ca40a3f8392050b4d5a1b = $this->env->getExtension("native_profiler");
        $__internal_32aecb5d4d25ab9175cac6e2a417ebc947a61032384ca40a3f8392050b4d5a1b->enter($__internal_32aecb5d4d25ab9175cac6e2a417ebc947a61032384ca40a3f8392050b4d5a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DailyWorkBundle:Default:dailywork.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32aecb5d4d25ab9175cac6e2a417ebc947a61032384ca40a3f8392050b4d5a1b->leave($__internal_32aecb5d4d25ab9175cac6e2a417ebc947a61032384ca40a3f8392050b4d5a1b_prof);

    }

    // line 4
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_e6e179b0c672eea911ed96659b9db90d82a938aa1083e8bcee85f751505049f5 = $this->env->getExtension("native_profiler");
        $__internal_e6e179b0c672eea911ed96659b9db90d82a938aa1083e8bcee85f751505049f5->enter($__internal_e6e179b0c672eea911ed96659b9db90d82a938aa1083e8bcee85f751505049f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 5
        echo "<div class=\"page-content\">
    <div class=\"page-header\">

        <h1>
            Maneje seus pacientes:
        </h1>
    </div><!-- /.page-header -->
    
    <div id=\"accordion1\" class=\"accordion-style2 panel-group no-padding-right\">
        <div class=\"panel panel-default\">

            <label class=\"panel-title  blue  accordion-submenu\" id=\"acoordion-title1\">
                <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\"> 
                    Seleccionar paciente
                    <i class=\"icon-angle-down bigger-110\" data-icon-hide=\"icon-angle-down \" data-icon-show=\"icon-double-angle-right\"></i>
                </a>
            </label>
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

                                <tbody>

                                    ";
        // line 45
        echo "                                    <tr>
                                        <td class=\"center\">
                                            <ul class=\"list-unstyled spaced2 pnome\">
                                                <li class=\"muted align-left align-middle\">
                                                    <i class=\"icon-angle-right bigger-110\"></i>
                                                    <a>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paciente"]) ? $context["paciente"] : $this->getContext($context, "paciente")), "nome", array()), "html", null, true);
        echo "</a>                                            
                                                </li>
                                            </ul>
                                        </td>
                                        <td class=\"center\">
                                            <ul class=\"list-unstyled spaced2\">
                                                ";
        // line 56
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["paciente"]) ? $context["paciente"] : $this->getContext($context, "paciente")), "responsavel", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 57
            echo "                                                    <li class=\"muted align-left\">
                                                        <i class=\"icon-angle-right bigger-110\"></i>
                                                        ";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "nome", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "email", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "telefContato", array()), "html", null, true);
            echo "  </li>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                                            </ul>
                                        </td>

                                        <td class=\"hidden-480 center\">                                            
                                            <ul class=\"list-unstyled spaced2\">                                              
                                                    <li class=\"muted align-left\">
                                                        <i class=\"icon-angle-right bigger-110\"></i>
                                                        ";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paciente"]) ? $context["paciente"] : $this->getContext($context, "paciente")), "endereco", array()), "html", null, true);
        echo "
                                                    </li>                                               
                                            </ul>
                                        </td>
                                        
                                        
                                            <td class=\"hidden-480 center\">";
        // line 74
        echo "</td> <!--debe ser un nombre de tipo usuario-->
                                            <td class=\"center\">
                                                <div class=\"visible-md visible-lg hidden-sm hidden-xs action-buttons\">

                                                    <button  name=\"";
        // line 78
        echo "\" value=\"";
        echo "\" onclick=\"//mostrar_proyecto(this)\" class=\"btn btn-link btn-link-ajustado tooltip-info \" data-placement=\"bottom\" data-rel=\"tooltip\" data-original-title=\"Ver\">
                                                        <i class=\"icon-zoom-in bigger-130 blue\"></i>
                                                    </button>                                                        


                                                    <form action=\"";
        // line 83
        echo "\" method=\"post\">
                                                        <button name= \"fase\" value=\"";
        // line 84
        echo "\" class=\"btn btn-link btn-link-ajustado tooltip-info\" data-rel=\"tooltip\" data-placement=\"bottom\" type=\"submit\"
                                                                title=\"Atualizar\">
                                                            <i class=\"icon-pencil bigger-130 blue green\"></i>
                                                        </button>

                                                        <button name=\"tarea\" value=\"";
        // line 89
        echo "\" class=\"btn btn-link btn-link-ajustado tooltip-light\" data-rel=\"tooltip\" data-placement=\"bottom\" type=\"submit\"
                                                                title=\"Fazer Consulta\">
                                                            <i class=\"icon-sort-by-attributes-alt bigger-130 light-blue\"></i>
                                                        </button>


                                                        <button name=\"subtarea\" value=\"";
        // line 95
        echo "\" class=\"btn btn-link btn-link-ajustado tooltip-default\" data-rel=\"tooltip\" data-placement=\"bottom\"  type=\"submit\"
                                                                title=\"Apagar\">
                                                            <i class=\"icon-trash bigger-130 red\"></i>
                                                        </button>
                                                    </form>     

                                                </div>

                                                <div class=\"visible-xs visible-sm hidden-md hidden-lg\">
                                                    <div class=\"inline position-relative\">
                                                        <button class=\"btn btn-minier btn-yellow dropdown-toggle\" data-toggle=\"dropdown\">
                                                            <i class=\"icon-caret-down icon-only bigger-120\"></i>
                                                        </button>

                                                        <ul class=\"dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close\">
                                                            <li>
                                                                <button  name=\"";
        // line 111
        echo "\" value=\"";
        echo "\" onclick=\"mostrar_proyecto(this)\" class=\"btn btn-link btn-link-ajustado tooltip-info \" data-placement=\"bottom\" data-rel=\"tooltip\" data-original-title=\"Ver\">
                                                                    <i class=\"icon-zoom-in bigger-130 blue\"></i>
                                                                </button>
                                                            </li>
                                                            
                                                            <form action=\"";
        // line 116
        echo "\" method=\"post\">

                                                                <li>  
                                                                    <button name= \"fase\" value=\"";
        // line 119
        echo "\" class=\"btn btn-link btn-link-ajustado tooltip-info\" data-rel=\"tooltip\" data-placement=\"bottom\" type=\"submit\"
                                                                            title=\"Fases\">
                                                                        <i class=\"icon-cog bigger-130 blue\"></i>
                                                                    </button> 
                                                                </li>
                                                                <li>  

                                                                    <button name=\"tarea\" value=\"";
        // line 126
        echo "\" class=\"btn btn-link btn-link-ajustado tooltip-light\" data-rel=\"tooltip\" data-placement=\"bottom\" type=\"submit\"
                                                                            title=\"Tareas\">
                                                                        <i class=\"icon-cogs bigger-130 light-blue\"></i>
                                                                    </button>
                                                                </li>
                                                                <li>  
                                                                    <button name=\"subtarea\" value=\"";
        // line 132
        echo "\" class=\"btn btn-link btn-link-ajustado tooltip-default\" data-rel=\"tooltip\" data-placement=\"bottom\"  type=\"submit\"
                                                                            title=\"Subtareas\">
                                                                        <i class=\"icon-align-center bigger-130 grey\"></i>
                                                                    </button>

                                                                </li>
                                                            </form>   

                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                        ";
        // line 147
        echo "


                                    </tbody>
                                </table>


                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>


        <div class=\"space\" > </div> \t

        ";
        // line 167
        echo "    </div><!-- /.page-content -->
";
        
        $__internal_e6e179b0c672eea911ed96659b9db90d82a938aa1083e8bcee85f751505049f5->leave($__internal_e6e179b0c672eea911ed96659b9db90d82a938aa1083e8bcee85f751505049f5_prof);

    }

    public function getTemplateName()
    {
        return "DailyWorkBundle:Default:dailywork.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 167,  231 => 147,  215 => 132,  207 => 126,  198 => 119,  193 => 116,  185 => 111,  167 => 95,  159 => 89,  152 => 84,  149 => 83,  141 => 78,  135 => 74,  126 => 68,  117 => 61,  105 => 59,  101 => 57,  97 => 56,  88 => 50,  81 => 45,  40 => 5,  34 => 4,  11 => 2,);
    }
}
