<?php

/* DailyWorkBundle:Default:ins_ficha.html.twig */
class __TwigTemplate_1850478f2407391c8cbfd9dfce6bab2449c244c9f3414414fbdf32bdb15ae846 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "DailyWorkBundle:Default:ins_ficha.html.twig", 1);
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
        $__internal_f570685b05ea47d9ca328a481e411fa004abe224295fd4b8b5b8a819e8db2f16 = $this->env->getExtension("native_profiler");
        $__internal_f570685b05ea47d9ca328a481e411fa004abe224295fd4b8b5b8a819e8db2f16->enter($__internal_f570685b05ea47d9ca328a481e411fa004abe224295fd4b8b5b8a819e8db2f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DailyWorkBundle:Default:ins_ficha.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f570685b05ea47d9ca328a481e411fa004abe224295fd4b8b5b8a819e8db2f16->leave($__internal_f570685b05ea47d9ca328a481e411fa004abe224295fd4b8b5b8a819e8db2f16_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_730ef50232fb17b32ba2a77569117af76be790d1f2cda57652c213a537680374 = $this->env->getExtension("native_profiler");
        $__internal_730ef50232fb17b32ba2a77569117af76be790d1f2cda57652c213a537680374->enter($__internal_730ef50232fb17b32ba2a77569117af76be790d1f2cda57652c213a537680374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        echo " 
    <div class=\"page-content\">        
        <div class=\"row\">
            <div class=\"col-xs-12\">


                <div class=\"navbar navbar-default\" id=\"navbar\">
                    <script type=\"text/javascript\">
                        try {
                            ace.settings.check('navbar', 'fixed')
                        } catch (e) {
                        }
                    </script>


                    <div class=\"row-fluid\">
                        <div class=\"span12\">
                            <div class=\"widget-box\">
                                <div class=\"widget-header widget-header-blue widget-header-flat\">
                                    <h4 class=\"lighter\">Fazer nova ficha medica</h4>\t\t\t\t\t\t\t\t\t\t\t
                                </div>

                                <div class=\"widget-body\">
                                    <div class=\"widget-main\">
                                        <div id=\"fuelux-wizard\" class=\"row-fluid\" data-target=\"#step-container\">
                                            <ul class=\"wizard-steps\">
                                                <li data-target=\"#step1\" class=\"active\">
                                                    <span class=\"step\">1</span>
                                                    <span class=\"title\">Dados Gerais</span>
                                                </li>

                                                <li data-target=\"#step2\">
                                                    <span class=\"step\">2</span>
                                                    <span class=\"title\">Gravidez e Maternidade</span>
                                                </li>

                                                <li data-target=\"#step3\">
                                                    <span class=\"step\">3</span>
                                                    <span class=\"title\">Dados Responsavel</span>
                                                </li>

                                                <li data-target=\"#step4\">
                                                    <span class=\"step\">4</span>
                                                    <span class=\"title\">Problemas de saude</span>
                                                </li>
                                                
                                                <li data-target=\"#step5\">
                                                    <span class=\"step\">5</span>
                                                    <span class=\"title\">Cuidados</span>
                                                </li>
                                            </ul>
                                        </div>

                                        <hr />
                                        <div class=\"step-content row-fluid position-relative\" id=\"step-container\">
                                            <form class=\"form-horizontal\" id=\"sample-form\">
                                                <div class=\"step-pane active\" id=\"step1\">
                                                   <!-- <h4 class=\"lighter block green\">Registre os dados principais do paciente</h4> -->

                                                    <div class=\"form-group\">
                                                        <label class=\"col-sm-3 control-label\"> ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "nome", array()), 'label');
        echo " </label>
                                                        ";
        // line 65
        echo "                                                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "nome", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo "
                                                    </div>

                                                    <div class=\"form-group\">
                                                        ";
        // line 70
        echo "
                                                        <label class=\"col-sm-3 control-label\"> ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "data_nascimento", array()), 'label');
        echo " </label>
                                                        <div class=\"input-group\">
                                                            ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "data_nascimento", array()), 'widget', array("attr" => array("class" => "form-control input-mask-date")));
        echo "
                                                        </div>
                                                    </div>

                                                    <div class=\"form-group\">
                                                        <label class=\"col-sm-3 control-label\"> ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "endereco", array()), 'label');
        echo " </label>
                                                        ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "endereco", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo "
                                                    </div>

                                                    <div class=\"form-group\">
                                                        <label class=\"col-sm-3 control-label\"> ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "factor_rh", array()), 'label');
        echo " </label>
                                                        ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "factor_rh", array()), 'widget', array("attr" => array("class" => "col-xs-1", "size" => 2)));
        echo "
                                                    </div>


                                                    ";
        // line 89
        echo "                                                    ";
        // line 90
        echo "

                                                </div>

                                                <div class=\"step-pane\" id=\"step2\">
                                                    <div class=\"form-group\">
                                                        <label class=\"col-sm-3 control-label\"> ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "problemas_gravidez", array()), 'label');
        echo " </label>
                                                        ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "problemas_gravidez", array()), 'widget', array("attr" => array("class" => "autosize-transition", "style" => "overflow: hidden; word-wrap: break-word; resize: horizontal;height:92px;width: 60%;")));
        // line 98
        echo "
                                                    </div>
                                                    
                                                    <div class=\"form-group\">
                                                        <label class=\"col-sm-3 control-label\"> ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "nTipoParto", array()), 'label');
        echo " </label>
                                                        ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "nTipoParto", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo "
                                                    </div>
                                                    
                                                    <div class=\"form-group\">
                                                        <label class=\"col-sm-3 control-label\"> ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "problemas_posparto", array()), 'label');
        echo " </label>
                                                        ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "problemas_posparto", array()), 'widget', array("attr" => array("class" => "autosize-transition", "style" => "overflow: hidden; word-wrap: break-word; resize: horizontal;height:92px;width: 60%;")));
        echo "
                                                    </div>

                                                    <div class=\"form-group\">
                                                        <label class=\"col-sm-3 control-label\"> ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "depressao_puerperal", array()), 'label');
        echo " </label>
                                                        ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "depressao_puerperal", array()), 'widget', array("attr" => array("class" => "autosize-transition", "style" => "overflow: hidden; word-wrap: break-word; resize: horizontal;height:92px;width: 60%;")));
        echo "
                                                    </div>


                                                    <div class=\"form-group\">
                                                        <div class=\"checkbox\">  
                                                            <label class=\"col-sm-4 control-label l_artif\">
                                                                ";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "leite_artificial", array()), 'widget', array("attr" => array("class" => "ace ")));
        echo "
                                                                <!--<input type=\"checkbox\" class=\"ace\" name=\"form-field-checkbox\">-->
                                                                <span class=\"lbl\">";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "leite_artificial", array()), 'label');
        echo "</span>
                                                            </label>
                                                            <label class=\"col-sm-2 control-label l_mat_ex\">
                                                                ";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "leite_materno_exclusivo", array()), 'widget', array("attr" => array("class" => "ace")));
        echo "
                                                                <!--<input type=\"checkbox\" class=\"ace\" name=\"form-field-checkbox\">-->
                                                                <span class=\"lbl\">";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "leite_materno_exclusivo", array()), 'label');
        echo "</span>
                                                            </label>
                                                        </div>
                                                    </div>                                                 


                                                    <div class=\"form-group\">
                                                        <label class=\"col-sm-3 control-label\">  ";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "leite_materno_idade", array()), 'label');
        echo "   </label>
                                                        <div class=\"ace-spinner\" style=\"width: 70px;\">
                                                            <div class=\"input-group\">
                                                                ";
        // line 137
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "leite_materno_idade", array()), 'widget', array("attr" => array("class" => "input-mini spinner-input form-control")));
        echo " 
                                                            </div>
                                                        </div>                   
                                                    </div>
                                                </div>
                                                            
                                                <div class=\"step-pane\" id=\"step3\">
                                                    <h4 class=\"lighter block green\">Registre os dados do primeiro responsavel</h4>
                                                    <div class=\"form-group\">
                                                        <label class=\"col-sm-3 control-label\"> ";
        // line 146
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "responsavel", array()), "nome", array()), 'label');
        echo " </label>
                                                        ";
        // line 148
        echo "                                                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "responsavel", array()), "nome", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo "
                                                    </div>
                                                    <div class=\"form-group\">
                                                        <label class=\"col-sm-3 control-label\"> ";
        // line 151
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "responsavel", array()), "ocupacao", array()), 'label');
        echo " </label>
                                                        ";
        // line 153
        echo "                                                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "responsavel", array()), "ocupacao", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo "
                                                    </div>                                                    
                                                    <div class=\"form-group tl\">
                                                        <label class=\"col-sm-3 control-label no-padding-right\" for=\"form-field-phone\" >";
        // line 156
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "responsavel", array()), "telefContato", array()), 'label');
        echo " </label>

                                                        <div class=\"col-sm-9\">
                                                            <span class=\"input-icon input-icon-right\">
                                                                ";
        // line 160
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "responsavel", array()), "telefContato", array()), 'widget', array("attr" => array("class" => "input-mask-phone")));
        echo "
                                                                <i class=\"icon-phone\"></i>
                                                            </span>
                                                        </div>
                                                    </div>

                                                   <div class=\"form-group tl\">
                                                               <label class=\"col-sm-3 control-label no-padding-right\" for=\"form-field-email\" > ";
        // line 167
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "responsavel", array()), "email", array()), 'label');
        echo "                                                                   <i class=\"smaller-60 icon-vertical-aling-bottom tooltip-obligatorio\" data-placement=\"right\" data-rel=\"tooltip\"></i>
                                                       </label>
             
                                                    <div class=\"col-sm-9\">
                                                        <span class=\"input-icon input-icon-right\">
                                                            ";
        // line 172
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "responsavel", array()), "email", array()), 'widget', array("attr" => array("class" => "p_email")));
        echo "
                                                            <i class=\"icon-envelope\"></i>
                                                        </span>
                                                    </div>
                                                   </div>
                                                            
                                                   <hr> 
                                                   <h4 class=\"lighter block green\">Registre os dados do segundo responsavel</h4>
                                                   <div class=\"form-group\">
                                                        <label class=\"col-sm-3 control-label\"> ";
        // line 181
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "responsavel", array()), "nome", array()), 'label');
        echo " </label>
                                                        ";
        // line 183
        echo "                                                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "responsavel", array()), "nome1", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo "
                                                    </div>
                                                    <div class=\"form-group\">
                                                        <label class=\"col-sm-3 control-label\"> ";
        // line 186
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "responsavel", array()), "ocupacao", array()), 'label');
        echo " </label>
                                                        ";
        // line 188
        echo "                                                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "responsavel", array()), "ocupacao1", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo "
                                                    </div>                                                    
                                                    <div class=\"form-group tl\">
                                                        <label class=\"col-sm-3 control-label no-padding-right\" for=\"form-field-phone\" >";
        // line 191
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "responsavel", array()), "telefContato", array()), 'label');
        echo " </label>

                                                        <div class=\"col-sm-9\">
                                                            <span class=\"input-icon input-icon-right\">
                                                                ";
        // line 195
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "responsavel", array()), "telefContato1", array()), 'widget', array("attr" => array("class" => "input-mask-phone")));
        echo "
                                                                <i class=\"icon-phone\"></i>
                                                            </span>
                                                        </div>
                                                    </div>

                                                   <div class=\"form-group tl\">
                                                               <label class=\"col-sm-3 control-label no-padding-right\" for=\"form-field-email\" > ";
        // line 202
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "responsavel", array()), "email", array()), 'label');
        echo "                                                                   <i class=\"smaller-60 icon-vertical-aling-bottom tooltip-obligatorio\" data-placement=\"right\" data-rel=\"tooltip\"></i>
                                                       </label>
             
                                                    <div class=\"col-sm-9\">
                                                        <span class=\"input-icon input-icon-right\">
                                                            ";
        // line 207
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "responsavel", array()), "email1", array()), 'widget', array("attr" => array("class" => "p_email")));
        echo "
                                                            <i class=\"icon-envelope\"></i>
                                                        </span>
                                                    </div>
                                                   </div>         
                                                            
                                                </div>

                                                <div class=\"step-pane\" id=\"step4\">
                                                     
                                                   
                                                    <label for=\"form-field-select-4\">Problemas de saude: <i class=\"icon-asterisk red smaller-60 icon-vertical-aling-bottom tooltip-obligatorio\" data-placement=\"right\" data-rel=\"tooltip\" data-original-title=\"Campo obligatorio\"></i></label>
                                                            &nbsp;&nbsp;&nbsp;";
        // line 219
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "nProblemasSaude", array()), 'widget', array("id" => "form-field-select-4", "attr" => array("class" => "chosen-select", "placeholder" => "Horas en la crece")));
        echo "
                                                            
                                                </div>
                                                            
                                                <div class=\"step-pane \" id=\"step5\">
                                                    
                                                    <div class=\"form-group\">
                                                    <label for=\"form-field-select-4\" class=\"col-sm-3 control-label\">Cuidados <i class=\"icon-asterisk red smaller-60 icon-vertical-aling-bottom tooltip-obligatorio\" data-placement=\"right\" data-rel=\"tooltip\" data-original-title=\"Campo obligatorio\"></i></label>
                                                    &nbsp;&nbsp;&nbsp;";
        // line 227
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "nCuidados", array()), 'widget', array("id" => "form-field-select-4-1", "attr" => array("class" => "chosen-select")));
        echo "
                                                    </div>
                                                    
                                                        
                                                    <div class=\"form-group \">
                                                        <label for=\"form-field-select-4\" class=\"col-sm-3 control-label\">Horas en la crece </label>
                                                        <input type=\"text\" class=\"col-xs-10 col-sm-5\" placeholder=\"Horas en la crece\" id=\"ncuidades_crece\">
                                                    </div>
                                                </div>
                                            </form>  
                                        </div>

                                        <hr />
                                        <div class=\"row-fluid wizard-actions\">
                                            <button class=\"btn btn-prev\">
                                                <i class=\"icon-arrow-left\"></i>
                                                Prev
                                            </button>

                                            <button class=\"btn btn-success btn-next\" data-last=\"Finish \">
                                                Next
                                                <i class=\"icon-arrow-right icon-on-right\"></i>
                                            </button>
                                        </div>
                                    </div><!-- /widget-main -->
                                </div><!-- /widget-body -->
                            </div>
                        </div>
                    </div>

                    <div id=\"modal-wizard\" class=\"modal\">
                        <div class=\"modal-dialog\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\" data-target=\"#modal-step-contents\">
                                    <ul class=\"wizard-steps\">
                                        <li data-target=\"#modal-step1\" class=\"active\">
                                            <span class=\"step\">1</span>
                                            <span class=\"title\">Validation states</span>
                                        </li>

                                        <li data-target=\"#modal-step2\">
                                            <span class=\"step\">2</span>
                                            <span class=\"title\">Alerts</span>
                                        </li>

                                        <li data-target=\"#modal-step3\">
                                            <span class=\"step\">3</span>
                                            <span class=\"title\">Payment Info</span>
                                        </li>

                                        <li data-target=\"#modal-step4\">
                                            <span class=\"step\">4</span>
                                            <span class=\"title\">Other Info</span>
                                        </li>
                                    </ul>
                                </div>

                                <div class=\"modal-body step-content\" id=\"modal-step-contents\">
                                    <div class=\"step-pane active\" id=\"modal-step1\">
                                        <div class=\"center\">
                                            <h4 class=\"blue\">Step 1</h4>
                                        </div>
                                    </div>

                                    <div class=\"step-pane\" id=\"modal-step2\">
                                        <div class=\"center\">
                                            <h4 class=\"blue\">Step 2</h4>
                                        </div>
                                    </div>

                                    <div class=\"step-pane\" id=\"modal-step3\">
                                        <div class=\"center\">
                                            <h4 class=\"blue\">Step 3</h4>
                                        </div>
                                    </div>

                                    <div class=\"step-pane\" id=\"modal-step4\">
                                        <div class=\"center\">
                                            <h4 class=\"blue\">Step 4</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"modal-footer wizard-actions\">
                                    <button class=\"btn btn-sm btn-prev\">
                                        <i class=\"icon-arrow-left\"></i>
                                        Prev
                                    </button>

                                    <button class=\"btn btn-success btn-sm btn-next\" data-last=\"Finish \">
                                        Next
                                        <i class=\"icon-arrow-right icon-on-right\"></i>
                                    </button>

                                    <button class=\"btn btn-danger btn-sm pull-left\" data-dismiss=\"modal\">
                                        <i class=\"icon-remove\"></i>
                                        Cancel
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div><!-- PAGE CONTENT ENDS -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->\t\t


    </div><!-- /.main-container-inner -->

    <a href=\"#\" id=\"btn-scroll-up\" class=\"btn-scroll-up btn btn-sm btn-inverse\">
        <i class=\"icon-double-angle-up icon-only bigger-110\"></i>
    </a>
</div><!-- /.main-container -->

<!-- basic scripts -->

<!--[if !IE]> -->

<script type=\"text/javascript\">
    window.jQuery || document.write(\"<script src='";
        // line 346
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
        // line 359
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/jquery.mobile.custom.min.js"), "html", null, true);
        echo "'>\" + \"<\" + \"/script>\");
</script>
<script src=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/typeahead-bs2.min.js"), "html", null, true);
        echo "\"></script>

<!-- page specific plugin scripts -->

<script src=\"";
        // line 366
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/fuelux/fuelux.wizard.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 368
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/additional-methods.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 369
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/bootbox.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 370
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/jquery.maskedinput.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/fuelux/fuelux.spinner.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 372
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/select2.min.js"), "html", null, true);
        echo "\"></script>

<!-- ace scripts -->

<script src=\"";
        // line 376
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/ace-elements.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 377
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/ace.min.js"), "html", null, true);
        echo "\"></script>

<!-- inline scripts related to this page -->

<script type=\"text/javascript\">
    jQuery(function (\$) {

        \$('[data-rel=tooltip]').tooltip();

        \$(\".select2\").css('width', '200px').select2({allowClear: true})
                .on('change', function () {
                    \$(this).closest('form').validate().element(\$(this));
                });


        var \$validation = false;
        \$('#fuelux-wizard').ace_wizard().on('change', function (e, info) {
            if (info.step == 1 && \$validation) {
                if (!\$('#validation-form').valid())
                    return false;
            }
        }).on('finished', function (e) {
            bootbox.dialog({
                message: \"Thank you! Your information was successfully saved!\",
                buttons: {
                    \"success\": {
                        \"label\": \"OK\",
                        \"className\": \"btn-sm btn-primary\"
                    }
                }
            });
        }).on('stepclick', function (e) {
            //return false;//prevent clicking on steps
        });


        \$('#skip-validation').removeAttr('checked').on('click', function () {
            \$validation = this.checked;
            if (this.checked) {
                \$('#sample-form').hide();
                \$('#validation-form').removeClass('hide');
            }
            else {
                \$('#validation-form').addClass('hide');
                \$('#sample-form').show();
            }
        });

        \$('#becker_entitybundle_pacientetype_leite_materno_idade').ace_spinner({value: 0, min: 0, max: 12, step: 1, btn_up_class: 'btn-info', btn_down_class: 'btn-info'})
                .on('change', function () {
                    //alert(this.value)
                });

        \$.mask.definitions['~'] = '[+-]';
        \$('.input-mask-date').mask('99/99/9999');
        \$('.input-mask-phone').mask('(99) 999999999');




        //documentation : http://docs.jquery.com/Plugins/Validation/validate


        \$.mask.definitions['~'] = '[+-]';
        \$('#phone').mask('(99) 999999999');

        jQuery.validator.addMethod(\"phone\", function (value, element) {
            return this.optional(element) || /^\\(\\d{2}\\) \\d{9}( x\\d{1,9})?\$/.test(value);
        }, \"Enter a valid phone number.\");

        \$('#validation-form').validate({
            errorElement: 'div',
            errorClass: 'help-block',
            focusInvalid: false,
            rules: {
                email: {
                    required: true,
                    email: true
                },
                name: {
                    required: true
                },
                phone: {
                    required: true,
                    phone: 'required'
                },
                comment: {
                    required: true
                },
                state: {
                    required: true
                },
                platform: {
                    required: true
                },
                subscription: {
                    required: true
                },
                gender: 'required',
                agree: 'required'
            },
            messages: {
                email: {
                    required: \"Please provide a valid email.\",
                    email: \"Please provide a valid email.\"
                },
                password: {
                    required: \"Please specify a password.\",
                    minlength: \"Please specify a secure password.\"
                },
                subscription: \"Please choose at least one option\",
                gender: \"Please choose gender\",
                agree: \"Please accept our policy\"
            },
            invalidHandler: function (event, validator) { //display error alert on form submit   
                \$('.alert-danger', \$('.login-form')).show();
            },
            highlight: function (e) {
                \$(e).closest('.form-group').removeClass('has-info').addClass('has-error');
            },
            success: function (e) {
                \$(e).closest('.form-group').removeClass('has-error').addClass('has-info');
                \$(e).remove();
            },
            errorPlacement: function (error, element) {
                if (element.is(':checkbox') || element.is(':radio')) {
                    var controls = element.closest('div[class*=\"col-\"]');
                    if (controls.find(':checkbox,:radio').length > 1)
                        controls.append(error);
                    else
                        error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
                }
                else if (element.is('.select2')) {
                    error.insertAfter(element.siblings('[class*=\"select2-container\"]:eq(0)'));
                }
                else if (element.is('.chosen-select')) {
                    error.insertAfter(element.siblings('[class*=\"chosen-container\"]:eq(0)'));
                }
                else
                    error.insertAfter(element.parent());
            },
            submitHandler: function (form) {
            },
            invalidHandler: function (form) {
            }
        });




        \$('#modal-wizard .modal-header').ace_wizard();
        \$('#modal-wizard .wizard-actions .btn[data-dismiss=modal]').removeAttr('disabled');
    })
</script>

";
        // line 532
        $this->displayBlock('javascripts_page', $context, $blocks);
        // line 534
        echo " 

";
        
        $__internal_730ef50232fb17b32ba2a77569117af76be790d1f2cda57652c213a537680374->leave($__internal_730ef50232fb17b32ba2a77569117af76be790d1f2cda57652c213a537680374_prof);

    }

    // line 532
    public function block_javascripts_page($context, array $blocks = array())
    {
        $__internal_5d426e08eb14541aa0094dbf0180bfb5a29c3652b7b37f6c7292539e7756f669 = $this->env->getExtension("native_profiler");
        $__internal_5d426e08eb14541aa0094dbf0180bfb5a29c3652b7b37f6c7292539e7756f669->enter($__internal_5d426e08eb14541aa0094dbf0180bfb5a29c3652b7b37f6c7292539e7756f669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_page"));

        // line 533
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/_others/validaciones/geral.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_5d426e08eb14541aa0094dbf0180bfb5a29c3652b7b37f6c7292539e7756f669->leave($__internal_5d426e08eb14541aa0094dbf0180bfb5a29c3652b7b37f6c7292539e7756f669_prof);

    }

    public function getTemplateName()
    {
        return "DailyWorkBundle:Default:ins_ficha.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  750 => 533,  744 => 532,  735 => 534,  733 => 532,  575 => 377,  571 => 376,  564 => 372,  560 => 371,  556 => 370,  552 => 369,  548 => 368,  544 => 367,  540 => 366,  533 => 362,  529 => 361,  524 => 359,  508 => 346,  386 => 227,  375 => 219,  360 => 207,  352 => 202,  342 => 195,  335 => 191,  328 => 188,  324 => 186,  317 => 183,  313 => 181,  301 => 172,  293 => 167,  283 => 160,  276 => 156,  269 => 153,  265 => 151,  258 => 148,  254 => 146,  242 => 137,  236 => 134,  226 => 127,  221 => 125,  215 => 122,  210 => 120,  200 => 113,  196 => 112,  189 => 108,  185 => 107,  178 => 103,  174 => 102,  168 => 98,  166 => 97,  162 => 96,  154 => 90,  152 => 89,  145 => 84,  141 => 83,  134 => 79,  130 => 78,  122 => 73,  117 => 71,  114 => 70,  106 => 65,  102 => 63,  35 => 3,  11 => 1,);
    }
}
