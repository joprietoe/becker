<?php

/* AutenticationBundle:Default:login.html.twig */
class __TwigTemplate_e34c83924fddc6bec6c2d5b0d4041747ed42895c7c5f57a72edefbfcbc063f90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "AutenticationBundle:Default:login.html.twig", 2);
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

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_18acb2eac5916bed2d77930bac6e40c9661e718b1fcf189f6ed3b08df5012975 = $this->env->getExtension("native_profiler");
        $__internal_18acb2eac5916bed2d77930bac6e40c9661e718b1fcf189f6ed3b08df5012975->enter($__internal_18acb2eac5916bed2d77930bac6e40c9661e718b1fcf189f6ed3b08df5012975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AutenticationBundle:Default:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18acb2eac5916bed2d77930bac6e40c9661e718b1fcf189f6ed3b08df5012975->leave($__internal_18acb2eac5916bed2d77930bac6e40c9661e718b1fcf189f6ed3b08df5012975_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_c2d218b14f42d32784faf5b1a3567295ebc3b41733373eabf7e4fc0ad787376e = $this->env->getExtension("native_profiler");
        $__internal_c2d218b14f42d32784faf5b1a3567295ebc3b41733373eabf7e4fc0ad787376e->enter($__internal_c2d218b14f42d32784faf5b1a3567295ebc3b41733373eabf7e4fc0ad787376e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Registro de Usuario";
        
        $__internal_c2d218b14f42d32784faf5b1a3567295ebc3b41733373eabf7e4fc0ad787376e->leave($__internal_c2d218b14f42d32784faf5b1a3567295ebc3b41733373eabf7e4fc0ad787376e_prof);

    }

    // line 5
    public function block_meta($context, array $blocks = array())
    {
        $__internal_76ff09fd21df39cbceb0ce977fd8552a1efdda9b88a1ee098ea1c53679049502 = $this->env->getExtension("native_profiler");
        $__internal_76ff09fd21df39cbceb0ce977fd8552a1efdda9b88a1ee098ea1c53679049502->enter($__internal_76ff09fd21df39cbceb0ce977fd8552a1efdda9b88a1ee098ea1c53679049502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        echo " 
<meta name=\"description\" content=\"User login page\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    ";
        
        $__internal_76ff09fd21df39cbceb0ce977fd8552a1efdda9b88a1ee098ea1c53679049502->leave($__internal_76ff09fd21df39cbceb0ce977fd8552a1efdda9b88a1ee098ea1c53679049502_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0ba8528dd0561ee819d14b41cfb5d110fbb4710bc9ddc03c75b2e69a3b524414 = $this->env->getExtension("native_profiler");
        $__internal_0ba8528dd0561ee819d14b41cfb5d110fbb4710bc9ddc03c75b2e69a3b524414->enter($__internal_0ba8528dd0561ee819d14b41cfb5d110fbb4710bc9ddc03c75b2e69a3b524414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "<!-- basic styles -->

<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/css/font-awesome.min.css"), "html", null, true);
        echo "\" />



<!--[if IE 7]>
  <link rel=\"stylesheet\" href=\"assets/css/font-awesome-ie7.min.css\" />
<![endif]-->

<!-- page specific plugin styles -->

<!-- fonts -->

<link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/css/ace-fonts.css"), "html", null, true);
        echo "\" />

<!-- ace styles -->

<link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/css/ace.min.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/css/ace-rtl.min.css"), "html", null, true);
        echo "\" />

    ";
        
        $__internal_0ba8528dd0561ee819d14b41cfb5d110fbb4710bc9ddc03c75b2e69a3b524414->leave($__internal_0ba8528dd0561ee819d14b41cfb5d110fbb4710bc9ddc03c75b2e69a3b524414_prof);

    }

    // line 33
    public function block_js_head($context, array $blocks = array())
    {
        $__internal_9c66a1fcaf1e45feb73b6a29e76640c3aae498ed05ad209287b0b73243d1ecc0 = $this->env->getExtension("native_profiler");
        $__internal_9c66a1fcaf1e45feb73b6a29e76640c3aae498ed05ad209287b0b73243d1ecc0->enter($__internal_9c66a1fcaf1e45feb73b6a29e76640c3aae498ed05ad209287b0b73243d1ecc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_head"));

        // line 34
        echo "<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

<!--[if lt IE 9]>
<script src=\"assets/js/html5shiv.js\"></script>
<script src=\"assets/js/respond.min.js\"></script>
<![endif]-->
    ";
        
        $__internal_9c66a1fcaf1e45feb73b6a29e76640c3aae498ed05ad209287b0b73243d1ecc0->leave($__internal_9c66a1fcaf1e45feb73b6a29e76640c3aae498ed05ad209287b0b73243d1ecc0_prof);

    }

    // line 41
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_da6e0ca31569d6cf37bd545dd07f780e47180e7ffb2936cc88d6ab9b095f9093 = $this->env->getExtension("native_profiler");
        $__internal_da6e0ca31569d6cf37bd545dd07f780e47180e7ffb2936cc88d6ab9b095f9093->enter($__internal_da6e0ca31569d6cf37bd545dd07f780e47180e7ffb2936cc88d6ab9b095f9093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "class=\"login-layout\" id=\"login_body\"";
        
        $__internal_da6e0ca31569d6cf37bd545dd07f780e47180e7ffb2936cc88d6ab9b095f9093->leave($__internal_da6e0ca31569d6cf37bd545dd07f780e47180e7ffb2936cc88d6ab9b095f9093_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_71e68b18c0b54d35fe8641486a66b1bae357eb671db2a0770489be5cc05f5341 = $this->env->getExtension("native_profiler");
        $__internal_71e68b18c0b54d35fe8641486a66b1bae357eb671db2a0770489be5cc05f5341->enter($__internal_71e68b18c0b54d35fe8641486a66b1bae357eb671db2a0770489be5cc05f5341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 43
        echo "    
<div class=\"main-container\">
    <div class=\"main-content\">
        <div class=\"row\">
            <div class=\"col-sm-10 col-sm-offset-1\">
                <div class=\"login-container\">
                    <div class=\"center\">
                        <h1>
                            <br />
                            <i class=\"icon-leaf white\"></i>
                            <span class=\"white\">Sistema</span>
                            <span class=\"white\">Ficha Medica</span>
                        </h1>
                        <h4 class=\"grey\">&copy; Becker</h4>
                    </div>

                    <div class=\"space-6\"></div>

                    <div class=\"position-relative\">
                        <div id=\"login-box\" class=\"login-box  widget-box no-border
                             ";
        // line 63
        if ( !array_key_exists("showInRegister", $context)) {
            // line 64
            echo "                             visible\"
                             ";
        } else {
            // line 66
            echo "                             \"
                             ";
        }
        // line 68
        echo "                             >
                            <div class=\"widget-body\">
                                <div class=\"widget-main\">
                                    <h4 class=\"header blue lighter bigger\">

                                        Por favor entre seus dados:
                                    </h4>

                                    <div class=\"space-6\"></div>

                                    <form action=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("user_login_check");
        echo "\" method=\"post\">
                                        <fieldset>
                                            <label class=\"block clearfix\">
                                                <span class=\"block input-icon input-icon-right\">
                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Usuario\" id=\"username\" name=\"_username\" />
                                                    <i class=\"icon-user\"></i>
                                                </span>
                                            </label>

                                            <label class=\"block clearfix\">
                                                <span class=\"block input-icon input-icon-right\">
                                                    <input type=\"password\" class=\"form-control\" placeholder=\"Senha\" id=\"password\" name=\"_password\" />
                                                    <i class=\"icon-lock\"></i>
                                                </span>
                                            </label>

                                            <div class=\"space\"></div>

                                            <div class=\"clearfix\">
                                                <label class=\"inline\">
                                                    <input type=\"checkbox\" class=\"ace\" name=\"_remember_me\"/>
                                                    <span class=\"lbl\"> Lembrar</span>
                                                </label>

                                                    <button type=\"submit\" class=\"width-35 pull-right btn btn-sm btn-primary\" name=\"login\">
                                                    <i class=\"icon-key\"></i>
                                                    Aceitar
                                                </button>
                                            </div>

                                            <div class=\"space-4\"></div>
                                        </fieldset>
                                    </form>

                                    
                                    
                                </div><!-- /widget-main -->

                                <div class=\"toolbar clearfix\">
                                    <div> <!-- mantuve este div para mantener la estetica -->                                       
                                    </div>

                                    <div>
                                        <a href=\"#\" onclick=\"show_box('signup-box');
                                                return false;\" class=\"user-signup-link\">
                                            Usuario novo
                                            <i class=\"icon-arrow-right\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- /widget-body -->
                        </div><!-- /login-box -->

                       <!-- <div id=\"forgot-box\" class=\"forgot-box widget-box no-border\">
                            <div class=\"widget-body\">
                                <div class=\"widget-main\">
                                    <h4 class=\"header red lighter bigger\">
                                        <i class=\"icon-key\"></i>
                                        Recupere su password
                                    </h4>

                                    <div class=\"space-6\"></div>
                                    <p>
                                        Entre a su email y recibir&aacute; instrucciones
                                    </p>

                                    <form>
                                        <fieldset>
                                            <label class=\"block clearfix\">
                                                <span class=\"block input-icon input-icon-right\">
                                                    <input type=\"email\" class=\"form-control\" placeholder=\"Email\" />
                                                    <i class=\"icon-envelope\"></i>
                                                </span>
                                            </label>

                                            <div class=\"clearfix\">
                                                <button type=\"button\" class=\"width-35 pull-right btn btn-sm btn-danger\">
                                                    <i class=\"icon-lightbulb\"></i>
                                                    Enviar!
                                                </button>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div><!-- /widget-main -->
                                <!--
                                <div class=\"toolbar center\">
                                    <a href=\"#\" onclick=\"show_box('login-box');
                                                return false;\" class=\"back-to-login-link\">
                                        Atr&aacute;s para registrarme
                                        <i class=\"icon-arrow-right\"></i>
                                    </a>
                                </div>
                            </div><!-- /widget-body -->
                        <!--</div><!-- /forgot-box -->

                        <div id=\"signup-box\" class=\"signup-box widget-box no-border
                             ";
        // line 174
        if (array_key_exists("showInRegister", $context)) {
            // line 175
            echo "                             visible\"
                             ";
        } else {
            // line 177
            echo "                             \"
                             ";
        }
        // line 179
        echo "                             >
                            <div class=\"widget-body\">
                                <div class=\"widget-main\">
                                    <h4 class=\"header green lighter bigger\">
                                        <i class=\"icon-group blue\"></i>
                                        Registro de novo usuario
                                    </h4>

                                    <div class=\"space-6\"></div>
                                    <p> Entre seus datos: </p>

                                    <form action=\"";
        // line 190
        echo $this->env->getExtension('routing')->getPath("user_add");
        echo "\" method=\"post\">
                                        <fieldset>
                                            <label class=\"block clearfix\">
                                                <span class=\"block input-icon input-icon-right\">
                                                    <input type=\"text\" class=\"form-control r_nombre\" placeholder=\"Usuario\" name=\"username\" />
                                                    <i class=\"icon-user\"></i>
                                                </span>
                                            </label>

                                            <label class=\"block clearfix\">
                                                <span class=\"block input-icon input-icon-right\">
                                                    <input type=\"password\" class=\"form-control r_pass\" placeholder=\"Senha\"  name=\"pass\"/>
                                                    <i class=\"icon-lock\"></i>
                                                </span>
                                            </label>

                                           <!-- <label class=\"block clearfix\">
                                                <span class=\"block input-icon input-icon-right\">
                                                   <input type=\"text\" class=\"form-control input-mask-phone r_phone\" placeholder=\"Tel&eacute;fono\" id=\"form-field-mask\" name=\"telefono\" />
                                                   
                                                    <i class=\"icon-phone\"></i>
                                                </span> -->

                                               
                                            </label>


                                            <label class=\"block\">
                                                <input type=\"checkbox\" class=\"ace\" />
                                                <span class=\"lbl\">
                                                    Aceipto os
                                                    <a href=\"#\">T&eacute;rminos de uso</a>
                                                </span>
                                            </label>

                                            <div class=\"space-4\"></div>

                                            
                                                <div class=\"clearfix\">
                                                    <button type=\"reset\" class=\"width-30 pull-left btn btn-sm\">
                                                        <i class=\"icon-refresh\"></i>
                                                        Limpar
                                                    </button>

                                                        <button type=\"submit\" class=\"width-65 pull-right btn btn-sm btn-success registro\" >
                                                        Cadastrar
                                                        <i class=\"icon-arrow-right icon-on-right\"></i>
                                                    </button>
                                                </div>
                                            
                                            <div class=\"space-4\"></div>
                                            <p>
                                                Precisa entrar em seu email e verificar sua conta.
                                            </p>
                                        </fieldset>
                                    </form>
                                </div>

                                <div class=\"toolbar center\">
                                    <a href=\"#\" onclick=\"show_box('login-box');
                                                return false;\" class=\"back-to-login-link\">
                                        <i class=\"icon-arrow-left\"></i>
                                        Atr&aacute;s al registro
                                    </a>
                                </div>
                            </div><!-- /widget-body -->
                        </div><!-- /signup-box -->
                    </div><!-- /position-relative -->
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
</div><!-- /.main-container -->
    
    ";
        
        $__internal_71e68b18c0b54d35fe8641486a66b1bae357eb671db2a0770489be5cc05f5341->leave($__internal_71e68b18c0b54d35fe8641486a66b1bae357eb671db2a0770489be5cc05f5341_prof);

    }

    // line 265
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cc1a5219db1bbd2c851f722f70d97fbcac5a997da3f22ca7e7c97a036f6f5e3e = $this->env->getExtension("native_profiler");
        $__internal_cc1a5219db1bbd2c851f722f70d97fbcac5a997da3f22ca7e7c97a036f6f5e3e->enter($__internal_cc1a5219db1bbd2c851f722f70d97fbcac5a997da3f22ca7e7c97a036f6f5e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 266
        echo "<!-- basic scripts -->

<!--[if !IE]> -->

<script type=\"text/javascript\">
    window.jQuery || document.write(\"<script src='";
        // line 271
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
        // line 284
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/jquery.mobile.custom.min.js"), "html", null, true);
        echo "'>\" + \"<\" + \"/script>\");
        </script>


        <!-- Script form userregister-->
        <script src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/jquery-ui-1.10.3.custom.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/jquery.ui.touch-punch.min.js"), "html", null, true);
        echo "\"></script>
      
        <script src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/fuelux/fuelux.spinner.min.js"), "html", null, true);
        echo "\"></script>
       
        <script src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/jquery.autosize.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/jquery.inputlimiter.1.3.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/bootstrap-tag.min.js"), "html", null, true);
        echo "\"></script>
        
        <script src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/jquery.maskedinput.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>


        <!-- ace scripts -->

        <script src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/ace-elements.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/ace.min.js"), "html", null, true);
        echo "\"></script>


        <script src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/jquery.maskedinput.min.js"), "html", null, true);
        echo "\"></script>
        <!-- inline scripts related to this page -->
        <script src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/general/js/_others/validaciones/registro.js"), "html", null, true);
        echo "\"></script>

        <script type=\"text/javascript\">
            jQuery(function(\$) {
           
            \$('.input-mask-phone').mask('(999) 999-9999');
            \$('.input-mask-username').mask('********');//numero o letras solamente que tiene que ser obligado esta cantidad
            \$('.input-mask-name').mask('aaaaaaaaaaaaaaaaaaaaa');//letras solamente pero tiene que ser obligado esta cantidad
            
        });
        function show_box(id) {
            jQuery('.widget-box.visible').removeClass('visible');
            jQuery('#' + id).addClass('visible');
        }

        

       /* function registrar() {
           \$.post('";
        // line 328
        echo "', {datos:'Liester'});
           // location.href = '";
        // line 329
        echo "';
        }*/

       </script>

    ";
        
        $__internal_cc1a5219db1bbd2c851f722f70d97fbcac5a997da3f22ca7e7c97a036f6f5e3e->leave($__internal_cc1a5219db1bbd2c851f722f70d97fbcac5a997da3f22ca7e7c97a036f6f5e3e_prof);

    }

    public function getTemplateName()
    {
        return "AutenticationBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  517 => 329,  514 => 328,  493 => 310,  488 => 308,  482 => 305,  478 => 304,  470 => 299,  466 => 298,  461 => 296,  457 => 295,  453 => 294,  448 => 292,  443 => 290,  439 => 289,  431 => 284,  415 => 271,  408 => 266,  402 => 265,  320 => 190,  307 => 179,  303 => 177,  299 => 175,  297 => 174,  198 => 78,  186 => 68,  182 => 66,  178 => 64,  176 => 63,  154 => 43,  148 => 42,  136 => 41,  123 => 34,  117 => 33,  107 => 30,  103 => 29,  96 => 25,  81 => 13,  77 => 12,  73 => 10,  67 => 9,  52 => 5,  40 => 4,  11 => 2,);
    }
}
