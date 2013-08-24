<?php

/* RomanLegionGameBundle:Home:index.html.twig */
class __TwigTemplate_570943408e2a5007f19273b5fe620c95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("RomanLegionGameBundle::layout.html.twig");

        $this->blocks = array(
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "RomanLegionGameBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <!-- Subhead
    ================================================== -->
    <header class=\"jumbotron subhead\" id=\"overview\">
        <div class=\"container\">
            <h1>The Roman Online Gaming Society</h1>
        </div>
    </header>

    <div class=\"container\">
        <!-- Docs nav ================================================== -->
        <div class=\"row\">
            <div class=\"span8\">
                <!-- Download ================================================== -->
                <section id=\"welcome\">
                    <div class=\"row-fluid\">
                        <p class=\"docs-lead\">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque quis eros blandit, rutrum massa in, egestas odio. Proin lacinia sapien id augue tincidunt, eu auctor massa faucibus. Vivamus quis mollis metus. Nulla imperdiet tortor a sapien faucibus rutrum. Sed facilisis eros nec massa rutrum, sit amet tempus risus tempor. Praesent adipiscing orci a elit sagittis commodo. Sed pharetra dictum iaculis. Maecenas fermentum semper odio adipiscing gravida. Sed nulla purus, mollis eget laoreet quis, varius nec massa.
                        </p>
                    </div>
                </section>
            </div>
            <div class=\"span4\">
                <section id=\"login\">
                    <div class=\"alert alert-error\">
                        <span class=\"icon-info-sign\"></span> Login error message
                    </div>
                    <div class=\"row-fluid\">
                        <!-- Demo -->
                        <div id=\"dialog2\" title=\"Login\">
                            <form>
                                <fieldset class=\"ui-helper-reset\">
                                    <label for=\"tab_title\">Username</label>
                                    <input type=\"text\" name=\"tab_title\" id=\"tab_title\" value=\"\" class=\"ui-widget-content ui-corner-all\" />
                                    <label for=\"tab_password\">Password</label>
                                    <input type=\"text\" name=\"tab_password\" id=\"tab_password\" value=\"\" class=\"ui-widget-content ui-corner-all\" />
                                </fieldset>
                            </form>
                        </div>

                        <button id=\"add_tab\" class=\"ui-button-primary\">Login</button>
                    </div>
                </section>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "RomanLegionGameBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,);
    }
}
