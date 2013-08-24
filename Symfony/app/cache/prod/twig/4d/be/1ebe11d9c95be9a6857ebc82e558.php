<?php

/* RomanLegionGameBundle:Senatus:list.html.twig */
class __TwigTemplate_4dbe1ebe11d9c95be9a6857ebc82e558 extends Twig_Template
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
    <table id=\"senatus\"></table>
    <div id=\"senatusPager\"></div>
</div>
";
    }

    // line 18
    public function block_extra_scripts($context, array $blocks = array())
    {
        // line 19
        echo "<script type=\"text/javascript\">
\$(\"#senatus\").jqGrid({
    data: [
        {position: 1, displayName: 'Jonathan', rank: 'Senatus'}
    ],
    datatype: \"local\",
    height: 250,
    rowNum: 10,
    rowList: [10,20,30],
    colNames:['Position', 'Name', 'Rank'],
    colModel:[
        {name:'position',index:'position', width:100, sorttype:\"int\",search:true},
        {name:'displayName',index:'displayName', width:200},
        {name:'rank',index:'rank', width:250}
    ],
    pager: \"#senatusPager\",
    viewrecords: true,
    caption: \"Senatus\",
    hidegrid:false,
    altRows: true                
});
\$(\"#senatus\").jqGrid('filterToolbar',{defaultSearch:true,stringResult:true});
</script>
";
    }

    public function getTemplateName()
    {
        return "RomanLegionGameBundle:Senatus:list.html.twig";
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
