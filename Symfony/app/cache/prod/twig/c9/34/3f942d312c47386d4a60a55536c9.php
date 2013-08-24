<?php

/* RomanLegionGameBundle:Garrison:mapUnits.html.twig */
class __TwigTemplate_c9343f942d312c47386d4a60a55536c9 extends Twig_Template
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
    <style type=\"text/css\">@import \"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/romanlegion/third-party/jquery-svg/jquery.svg.css"), "html", null, true);
        echo "\";</style>
    <style>
    #draggable { 
        width: 70%; height: 300px; padding: 0.5em; 
        overflow: hidden;
    }
    </style>
";
    }

    // line 15
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo "<br />
<div class=\"container zoomViewport\">
    <div class=\"row\">
        <div class=\"span2\">
            <div id=\"layers\">
                <input type=\"checkbox\" id=\"map_blank\" /><label for=\"map_blank\">Nations</label>
                <input type=\"checkbox\" id=\"map_county_names\" /><label for=\"map_county_names\">Cities</label>
            </div>
        </div>
        <div class=\"span10\">
            <div class=\"zoomContainer\">
                <div id=\"draggable\" class=\"ui-widget-content zoomTarget\">
                    <div class=\"draggable-image\" id=\"svg-builder\"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"container\">
    <table id=\"units\"></table>
    <div id=\"unitsPager\"></div>
</div>
";
    }

    // line 42
    public function block_extra_scripts($context, array $blocks = array())
    {
        // line 43
        echo "<script type=\"text/javascript\">
\$(\"#units\").jqGrid({
    data: [
        {
            name: 'Dev garrison',
            type: 'devtype',
            mentality: 'determined',
            experience: 'seasoned',
            location: 'Dev location',
            size: 98,
            player: 'Jonathan'
        }
    ],
    datatype: \"local\",
    height: 250,
    rowNum: 10,
    rowList: [10,20,30],
    colNames:['Name', 'Type', 'Mentality', 'Experience', 'Location', 'Size', 'Player'],
    colModel:[
        {name:'name',index:'name', width:150},
        {name:'type',index:'type', width:50},
        {name:'mentality',index:'mentality', width:100},
        {name:'experience',index:'experience', width:100},
        {name:'location',index:'location', width:200},
        {name:'size',index:'size', width:100, sorttype:\"int\",search:true},
        {name:'player',index:'player', width:200}
    ],
    pager: \"#unitsPager\",
    viewrecords: true,
    caption: \"Military Units\",
    hidegrid:false,
    altRows: true                
});
</script>
<script type=\"text/javascript\" src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/romanlegion/third-party/zoomooz/src/js/jquery.zoomooz-helpers.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/romanlegion/third-party/zoomooz/src/js/jquery.zoomooz-anim.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/romanlegion/third-party/zoomooz/src/js/jquery.zoomooz-core.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/romanlegion/third-party/zoomooz/src/js/jquery.zoomooz-zoomTarget.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/romanlegion/third-party/zoomooz/src/js/jquery.zoomooz-zoomButton.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/romanlegion/third-party/zoomooz/src/js/jquery.zoomooz-zoomContainer.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/romanlegion/third-party/zoomooz/src/js/purecssmatrix.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/romanlegion/third-party/zoomooz/src/js/sylvester.src.stripped.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\" src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/romanlegion/third-party/jquery-svg/jquery.svg.js"), "html", null, true);
        echo "\"></script><script>
(function( \$ ){
//plugin buttonset vertical
\$.fn.buttonsetv = function() {
  \$(':radio, :checkbox', this).wrap('<div style=\"margin: 1px\"/>');
  \$(this).buttonset();
  \$('label:first', this).removeClass('ui-corner-left').addClass('ui-corner-top');
  \$('label:last', this).removeClass('ui-corner-right').addClass('ui-corner-bottom');
  mw = 0; // max witdh
  \$('label', this).each(function(index){
     w = \$(this).width();
     if (w > mw) mw = w; 
  })
  \$('label', this).each(function(index){
    \$(this).width(mw);
  })
};
})( jQuery );
    
\$(document).ready(function() {

    \$(function() {
//            \$( \"#draggable\" ).draggable();
        \$( \".draggable-image\" ).draggable();
    });

    \$('#layers').buttonsetv();

    \$('#svg-builder').svg();
    var svg = \$('#svg-builder').svg('get');
    svg.describe('This graphic links to an external image'); 
    
    var mapLayers = {
        map_blank: '";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/romanlegion/assets/img/map/blank.PNG"), "html", null, true);
        echo "',
        map_county_names: '";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/romanlegion/assets/img/map/county_names.PNG"), "html", null, true);
        echo "'
    };
    var refLayers = {};
    
    \$('#layers input').change(function() {
        var id = \$(this).attr('id');
        if (\$(this).is(':checked')) {
            var img = svg.image(5, 5, 350, 290, mapLayers[\$(this).attr('id')]);
            svg.title(img, \$(this).attr('id'));
            refLayers[id] = img;
        } else {
            if (id in refLayers && refLayers[id]) {
                svg.remove(refLayers[id]);
            }
        }
    });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "RomanLegionGameBundle:Garrison:mapUnits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 120,  198 => 119,  162 => 86,  157 => 84,  153 => 83,  149 => 82,  145 => 81,  141 => 80,  137 => 79,  133 => 78,  129 => 77,  93 => 43,  90 => 42,  64 => 18,  61 => 17,  55 => 15,  43 => 6,  39 => 5,  34 => 4,  31 => 3,);
    }
}
