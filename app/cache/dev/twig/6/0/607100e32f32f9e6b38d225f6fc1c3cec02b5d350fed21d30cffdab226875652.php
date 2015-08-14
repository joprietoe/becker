<?php

/* ReportsBundle:Default:data.html.twig */
class __TwigTemplate_607100e32f32f9e6b38d225f6fc1c3cec02b5d350fed21d30cffdab226875652 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55e2156312efec0191b931eff1e9ef03af5db1eac3e7b24f68eabb834b20b1f8 = $this->env->getExtension("native_profiler");
        $__internal_55e2156312efec0191b931eff1e9ef03af5db1eac3e7b24f68eabb834b20b1f8->enter($__internal_55e2156312efec0191b931eff1e9ef03af5db1eac3e7b24f68eabb834b20b1f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ReportsBundle:Default:data.html.twig"));

        // line 1
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 2
            echo "    <tr>
        <td class=\"center\">
            <ul class=\"list-unstyled spaced2 pnome\">
                <li class=\"muted align-left align-middle\">
                    <i class=\"icon-angle-right bigger-110\"></i>
                    <a href=\"";
            // line 7
            echo $this->env->getExtension('routing')->getPath("reports_homepage");
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "idPaciente", array()), "html", null, true);
            echo "/patient\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "nome", array()), "html", null, true);
            echo "</a>                                            
                </li>
            </ul>
        </td>
        <td class=\"center\">
            <ul class=\"list-unstyled spaced2\">
                ";
            // line 13
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["d"], "responsavel", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 14
                echo "                    <li class=\"muted align-left\">
                        <i class=\"icon-angle-right bigger-110\"></i>
                        ";
                // line 16
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
            // line 18
            echo "            </ul>
        </td>

        <td class=\"hidden-480 center\">                                            
            <ul class=\"list-unstyled spaced2\">                                              
                <li class=\"muted align-left\">
                    <i class=\"icon-angle-right bigger-110\"></i>
                    ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "endereco", array()), "html", null, true);
            echo "
                </li>                                               
            </ul>
        </td>


        <td class=\"hidden-480 center\">";
            // line 31
            echo "</td> <!--debe ser un nombre de tipo usuario-->
        <td class=\"center\">
            <div class=\"visible-md visible-lg hidden-sm hidden-xs action-buttons\">

                <button  name=\"";
            // line 35
            echo "\" value=\"";
            echo "\" onclick=\"window.location.replace('";
            echo $this->env->getExtension('routing')->getPath("reports_homepage");
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "idPaciente", array()), "html", null, true);
            echo "/patient');\" class=\"btn btn-link btn-link-ajustado tooltip-info \" data-placement=\"bottom\" data-rel=\"tooltip\" data-original-title=\"Editar\">
                    <i class=\"icon-edit bigger-230 blue\"></i>
                </button>    
                <button name=\"subtarea\" value=\"";
            // line 38
            echo "\" class=\"btn btn-link btn-link-ajustado tooltip-default\" data-rel=\"tooltip\" data-placement=\"bottom\"  type=\"submit\"
                        title=\"Apagar\">
                    <i class=\"icon-trash bigger-230 red\"></i>
                </button>


                        <!--<form action=\"";
            // line 44
            echo "\" method=\"post\">
                            <button name= \"fase\" value=\"";
            // line 45
            echo "\" class=\"btn btn-link btn-link-ajustado tooltip-info\" data-rel=\"tooltip\" data-placement=\"bottom\" type=\"submit\"
                                    title=\"Atualizar\">
                                <i class=\"icon-pencil bigger-130 blue green\"></i>
                            </button>

                            <button name=\"tarea\" value=\"";
            // line 50
            echo "\" class=\"btn btn-link btn-link-ajustado tooltip-light\" data-rel=\"tooltip\" data-placement=\"bottom\" type=\"submit\"
                                    title=\"Fazer Consulta\">
                                <i class=\"icon-sort-by-attributes-alt bigger-130 light-blue\"></i>
                            </button>


                            <button name=\"subtarea\" value=\"";
            // line 56
            echo "\" class=\"btn btn-link btn-link-ajustado tooltip-default\" data-rel=\"tooltip\" data-placement=\"bottom\"  type=\"submit\"
                                    title=\"Apagar\">
                                <i class=\"icon-trash bigger-130 red\"></i>
                            </button>
                        </form> -->    

            </div>

            <div class=\"visible-xs visible-sm hidden-md hidden-lg\">
                <div class=\"inline position-relative\">
                    <button class=\"btn btn-minier btn-yellow dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"icon-caret-down icon-only bigger-120\"></i>
                    </button>

                    <ul class=\"dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close\">
                        <li>
                            <button  name=\"";
            // line 72
            echo "\" value=\"";
            echo "\" onclick=\"mostrar_proyecto(this)\" class=\"btn btn-link btn-link-ajustado tooltip-info \" data-placement=\"bottom\" data-rel=\"tooltip\" data-original-title=\"Ver\">
                                <i class=\"icon-zoom-in bigger-130 blue\"></i>
                            </button>
                        </li>

                        <form action=\"";
            // line 77
            echo "\" method=\"post\">

                            <li>  
                                <button name= \"fase\" value=\"";
            // line 80
            echo "\" class=\"btn btn-link btn-link-ajustado tooltip-info\" data-rel=\"tooltip\" data-placement=\"bottom\" type=\"submit\"
                                        title=\"Fases\">
                                    <i class=\"icon-cog bigger-130 blue\"></i>
                                </button> 
                            </li>
                            <li>  

                                <button name=\"tarea\" value=\"";
            // line 87
            echo "\" class=\"btn btn-link btn-link-ajustado tooltip-light\" data-rel=\"tooltip\" data-placement=\"bottom\" type=\"submit\"
                                        title=\"Tareas\">
                                    <i class=\"icon-cogs bigger-130 light-blue\"></i>
                                </button>
                            </li>
                            <li>  
                                <button name=\"subtarea\" value=\"";
            // line 93
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
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "




";
        
        $__internal_55e2156312efec0191b931eff1e9ef03af5db1eac3e7b24f68eabb834b20b1f8->leave($__internal_55e2156312efec0191b931eff1e9ef03af5db1eac3e7b24f68eabb834b20b1f8_prof);

    }

    public function getTemplateName()
    {
        return "ReportsBundle:Default:data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 108,  172 => 93,  164 => 87,  155 => 80,  150 => 77,  142 => 72,  124 => 56,  116 => 50,  109 => 45,  106 => 44,  98 => 38,  89 => 35,  83 => 31,  74 => 25,  65 => 18,  53 => 16,  49 => 14,  45 => 13,  33 => 7,  26 => 2,  22 => 1,);
    }
}
