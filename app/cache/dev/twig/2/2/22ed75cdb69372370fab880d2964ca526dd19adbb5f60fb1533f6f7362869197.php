<?php

/* DailyWorkBundle:Default:consulta.html.twig */
class __TwigTemplate_22ed75cdb69372370fab880d2964ca526dd19adbb5f60fb1533f6f7362869197 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "DailyWorkBundle:Default:consulta.html.twig", 1);
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
        $__internal_5e4ddf04390ad361a9eac2ed6de7267bb0bd4ae20801cb8b1450bd90522cf22b = $this->env->getExtension("native_profiler");
        $__internal_5e4ddf04390ad361a9eac2ed6de7267bb0bd4ae20801cb8b1450bd90522cf22b->enter($__internal_5e4ddf04390ad361a9eac2ed6de7267bb0bd4ae20801cb8b1450bd90522cf22b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DailyWorkBundle:Default:consulta.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e4ddf04390ad361a9eac2ed6de7267bb0bd4ae20801cb8b1450bd90522cf22b->leave($__internal_5e4ddf04390ad361a9eac2ed6de7267bb0bd4ae20801cb8b1450bd90522cf22b_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_6a13d6be1b4507f0d3b2c3eaa63a0a30c87e94c56b80df6932be4b3f52adba36 = $this->env->getExtension("native_profiler");
        $__internal_6a13d6be1b4507f0d3b2c3eaa63a0a30c87e94c56b80df6932be4b3f52adba36->enter($__internal_6a13d6be1b4507f0d3b2c3eaa63a0a30c87e94c56b80df6932be4b3f52adba36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
                                    <h4 class=\"lighter\">Fazer consulta</h4>\t\t\t\t\t\t\t\t\t\t\t
                                </div>

                                <div class=\"widget-body\">
                                    <div class=\"widget-main\">
                                       ";
        // line 55
        echo "
                                        <hr /> 
                                        <div class=\"step-content row-fluid position-relative\" id=\"step-container\">
                                            <form class=\"form-horizontal\" id=\"sample-form\">
                                                
                                                   <!-- <h4 class=\"lighter block green\">Registre os dados principais do paciente</h4> -->

                                                    
                                                   <div class=\"form-group\">
                                                       <label class=\"col-sm-3 control-label\"> Nome </label>
                                                       <input type=\"text\" value=";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paciente"]) ? $context["paciente"] : $this->getContext($context, "paciente")), "nome", array()), "html", null, true);
        echo " id=\"form-input-readonly\" class=\"col-xs-10 col-sm-5\" readonly=\"\">
                                                   </div>
                                                        
                                                   <div class=\"form-group\">
                                                        ";
        // line 70
        echo "
                                                        <label class=\"col-sm-3 control-label\"> ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "data", array()), 'label');
        echo " </label>
                                                        <div class=\"input-group\">
                                                            ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "data", array()), 'widget', array("attr" => array("class" => "form-control input-mask-date")));
        echo "
                                                        </div>
                                                    </div>

                                                    <div class=\"form-group\">
                                                        <label class=\"col-sm-3 control-label\"> ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "observacao", array()), 'label');
        echo " </label>
                                                        ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "observacao", array()), 'widget', array("attr" => array("class" => "autosize-transition", "style" => "overflow: hidden; word-wrap: break-word; resize: horizontal;height:92px;width: 60%;")));
        // line 80
        echo "
                                                    </div>
                                                    
                                               

                                              
                                            </form>  
                                        </div>

                                        <hr />
                                        <div class=\"row-fluid wizard-actions\">
                                           ";
        // line 95
        echo "
                                            <button class=\"btn btn-success btn-next\" data-last=\"Finish \">
                                                Salvar
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
                                <div class=\"modal-footer wizard-actions\">
                                     <button class=\"btn btn-success btn-sm btn-next\" data-last=\"Finish \">
                                        Salvar
                                        <i class=\"icon-arrow-right icon-on-right\"></i>
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
        // line 137
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
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/jquery.mobile.custom.min.js"), "html", null, true);
        echo "'>\" + \"<\" + \"/script>\");
</script>
<script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/typeahead-bs2.min.js"), "html", null, true);
        echo "\"></script>

<!-- page specific plugin scripts -->

<script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/fuelux/fuelux.wizard.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/additional-methods.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/bootbox.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/jquery.maskedinput.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/fuelux/fuelux.spinner.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/select2.min.js"), "html", null, true);
        echo "\"></script>

<!-- ace scripts -->

<script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/ace-elements.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 168
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
        // line 323
        $this->displayBlock('javascripts_page', $context, $blocks);
        // line 325
        echo " 

";
        
        $__internal_6a13d6be1b4507f0d3b2c3eaa63a0a30c87e94c56b80df6932be4b3f52adba36->leave($__internal_6a13d6be1b4507f0d3b2c3eaa63a0a30c87e94c56b80df6932be4b3f52adba36_prof);

    }

    // line 323
    public function block_javascripts_page($context, array $blocks = array())
    {
        $__internal_0be929870f82ac2f1dd6f7aec5f23ac601386dba8c962b8a61c34cf4b796d15f = $this->env->getExtension("native_profiler");
        $__internal_0be929870f82ac2f1dd6f7aec5f23ac601386dba8c962b8a61c34cf4b796d15f->enter($__internal_0be929870f82ac2f1dd6f7aec5f23ac601386dba8c962b8a61c34cf4b796d15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_page"));

        // line 324
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/_others/validaciones/geral.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_0be929870f82ac2f1dd6f7aec5f23ac601386dba8c962b8a61c34cf4b796d15f->leave($__internal_0be929870f82ac2f1dd6f7aec5f23ac601386dba8c962b8a61c34cf4b796d15f_prof);

    }

    public function getTemplateName()
    {
        return "DailyWorkBundle:Default:consulta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  406 => 324,  400 => 323,  391 => 325,  389 => 323,  231 => 168,  227 => 167,  220 => 163,  216 => 162,  212 => 161,  208 => 160,  204 => 159,  200 => 158,  196 => 157,  189 => 153,  185 => 152,  180 => 150,  164 => 137,  120 => 95,  107 => 80,  105 => 79,  101 => 78,  93 => 73,  88 => 71,  85 => 70,  78 => 65,  66 => 55,  35 => 3,  11 => 1,);
    }
}
