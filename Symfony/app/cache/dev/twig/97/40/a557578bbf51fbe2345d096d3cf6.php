<?php

/* RomanLegionGameBundle:Market:available.html.twig */
class __TwigTemplate_9740a557578bbf51fbe2345d096d3cf6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("RomanLegionGameBundle::layout.html.twig");

        $this->blocks = array(
            'extra_styles' => array($this, 'block_extra_styles'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
            'extra_scripts' => array($this, 'block_extra_scripts'),
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
    public function block_extra_styles($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/romanlegion/third-party/jqGrid/css/ui.jqgrid.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/romanlegion/third-party/jqGrid/jqGrid.overrides.css"), "html", null, true);
        echo "\"> 
";
    }

    // line 8
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "<br />
<div class=\"container\">
    <table id=\"availableProperties\"></table>
    <div id=\"availablePropertiesPager\"></div>
</div>
";
    }

    // line 18
    public function block_extra_scripts($context, array $blocks = array())
    {
        // line 19
        echo "<script type=\"text/javascript\">
\$(\"#availableProperties\").jqGrid({
    data: [
        {
            name: 'Dev Property',
            cost: '\$100',
            location: 'Dev location',
            stock: '11',
            action: '(Buy Button)'
        }
    ],
    datatype: \"local\",
    height: 250,
    rowNum: 10,
    rowList: [10,20,30],
    colNames:['Name', 'Cost', 'Location', 'Stock', 'Action'],
    colModel:[
        {name:'name',index:'name', width:200},
        {name:'cost',index:'type', width:50},
        {name:'location',index:'location', width:200},
        {name:'stock',index:'size', width:100, sorttype:\"int\",search:true},
        {name:'action',index:'player', width:200}
    ],
    pager: \"#availablePropertiesPager\",
    viewrecords: true,
    caption: \"Available Properties\",
    hidegrid:false,
    altRows: true                
});
</script>
";
    }

    public function getTemplateName()
    {
        return "RomanLegionGameBundle:Market:available.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 19,  63 => 18,  54 => 11,  51 => 10,  45 => 8,  39 => 5,  34 => 4,  31 => 3,);
    }
}
