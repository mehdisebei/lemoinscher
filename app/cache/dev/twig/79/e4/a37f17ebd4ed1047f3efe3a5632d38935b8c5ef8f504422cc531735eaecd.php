<?php

/* FrontBundle:Default:index.html.twig */
class __TwigTemplate_79e4a37f17ebd4ed1047f3efe3a5632d38935b8c5ef8f504422cc531735eaecd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'nav' => array($this, 'block_nav'),
            'navv' => array($this, 'block_navv'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_nav($context, array $blocks = array())
    {
        // line 3
        echo "
        
        

<div class=\"col1\">
<div class=\"h_nav\">
<ul>
<li><a href=\"products.html\">Accessories</a></li>
";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 12
            echo "<li><a href=\"products.html\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["x"], "subsubcategory", array()), "html", null, true);
            echo "</a></li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</ul>
</div>
</div>
    ";
    }

    // line 18
    public function block_navv($context, array $blocks = array())
    {
        // line 19
        echo "    <div class=\"col1\">
<div class=\"h_nav\">
<ul>
<li><a href=\"decor.html\">Bed</a></li>
    ";
        // line 26
        echo "</ul>
</div>
</div>
    ";
    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        // line 31
        echo "    <div class=\"container\">
        <div class=\"product\">
            <h2 class=\"new\">NEW ARRIVALS</h2>
            <div class=\"pink\">
                <div class=\"col-md-3 box-in-at\">
                    <div class=\" grid_box portfolio-wrapper\">\t\t
                        <a href=\"single.html\" > <img src=\"images/fa.jpg\" class=\"img-responsive\" alt=\"\">
                            <div class=\"zoom-icon\">

                                <ul class=\"in-by\">
                                    <li><h5>sizes:</h5></li>                     
                                    <li><span>S</span></li>
                                    <li><span>XS</span></li>
                                    <li><span>M</span></li>
                                    <li><span> L</span></li>
                                    <li><span>XL</span></li>
                                    <li><span> XXL</span></li>
                                </ul>


                                <ul class=\"in-by-color\">
                                    <li><h5>colors:</h5></li>                   
                                    <li><span > </span></li>
                                    <li><span class=\"color\"> </span></li>
                                    <li><span class=\"color1\"> </span></li>
                                    <li><span class=\"color2\"> </span></li>
                                    <li><span class=\"color3\"> </span></li>

                                </ul>

                            </div> </a> \t
                    </div>
                    <!---->
                    <div class=\"grid_1 simpleCart_shelfItem\">
                        <a href=\"#\" class=\"cup item_add\"><span class=\" item_price\" >123 \$ <i> </i> </span></a>\t\t\t\t\t
                    </div>
                    <!---->
                </div>


                <div class=\"col-md-3 box-in-at\">
                    <div class=\" grid_box portfolio-wrapper\">\t\t
                        <a href=\"single.html\" > <img src=\"images/fa1.jpg\" class=\"img-responsive\" alt=\"\">
                            <div class=\"zoom-icon\">

                                <ul class=\"in-by\">
                                    <li><h5>sizes:</h5></li>                     
                                    <li><span>S</span></li>
                                    <li><span>XS</span></li>
                                    <li><span>M</span></li>
                                    <li><span> L</span></li>
                                    <li><span>XL</span></li>
                                    <li><span> XXL</span></li>
                                </ul>


                                <ul class=\"in-by-color\">
                                    <li><h5>colors:</h5></li>                   
                                    <li><span > </span></li>
                                    <li><span class=\"color\"> </span></li>
                                    <li><span class=\"color1\"> </span></li>
                                    <li><span class=\"color2\"> </span></li>
                                    <li><span class=\"color3\"> </span></li>

                                </ul>

                            </div> </a> \t
                    </div>
                    <!---->
                    <div class=\"grid_1 simpleCart_shelfItem\">
                        <a href=\"#\" class=\"cup item_add\"><span class=\" item_price\" >123 \$ <i> </i> </span></a>\t\t\t\t\t
                    </div>
                    <!---->
                </div>


                <div class=\"col-md-3 box-in-at\">
                    <div class=\" grid_box portfolio-wrapper\">\t\t
                        <a href=\"single.html\" > <img src=\"images/fa2.jpg\" class=\"img-responsive\" alt=\"\">
                            <div class=\"zoom-icon\">

                                <ul class=\"in-by\">
                                    <li><h5>sizes:</h5></li>                     
                                    <li><span>S</span></li>
                                    <li><span>XS</span></li>
                                    <li><span>M</span></li>
                                    <li><span> L</span></li>
                                    <li><span>XL</span></li>
                                    <li><span> XXL</span></li>
                                </ul>


                                <ul class=\"in-by-color\">
                                    <li><h5>colors:</h5></li>                   
                                    <li><span > </span></li>
                                    <li><span class=\"color\"> </span></li>
                                    <li><span class=\"color1\"> </span></li>
                                    <li><span class=\"color2\"> </span></li>
                                    <li><span class=\"color3\"> </span></li>

                                </ul>

                            </div> </a> \t
                    </div>
                    <!---->
                    <div class=\"grid_1 simpleCart_shelfItem\">
                        <a href=\"#\" class=\"cup item_add\"><span class=\" item_price\" >123 \$ <i> </i> </span></a>\t\t\t\t\t
                    </div>
                    <!---->
                </div>


                <div class=\"col-md-3 box-in-at\">
                    <div class=\" grid_box portfolio-wrapper\">\t\t
                        <a href=\"single.html\" > <img src=\"images/fa3.jpg\" class=\"img-responsive\" alt=\"\">
                            <div class=\"zoom-icon\">

                                <ul class=\"in-by\">
                                    <li><h5>sizes:</h5></li>                     
                                    <li><span>S</span></li>
                                    <li><span>XS</span></li>
                                    <li><span>M</span></li>
                                    <li><span> L</span></li>
                                    <li><span>XL</span></li>
                                    <li><span> XXL</span></li>
                                </ul>


                                <ul class=\"in-by-color\">
                                    <li><h5>colors:</h5></li>                   
                                    <li><span > </span></li>
                                    <li><span class=\"color\"> </span></li>
                                    <li><span class=\"color1\"> </span></li>
                                    <li><span class=\"color2\"> </span></li>
                                    <li><span class=\"color3\"> </span></li>

                                </ul>

                            </div> </a> \t
                    </div>
                    <!---->
                    <div class=\"grid_1 simpleCart_shelfItem\">
                        <a href=\"#\" class=\"cup item_add\"><span class=\" item_price\" >123 \$ <i> </i> </span></a>\t\t\t\t\t
                    </div>
                    <!---->
                </div>
                <div class=\"clearfix\"> </div>
            </div>
            <div class=\"pink\">
                <div class=\"col-md-3 box-in-at\">
                    <div class=\" grid_box portfolio-wrapper\">\t\t
                        <a href=\"single.html\" > <img src=\"images/fa4.jpg\" class=\"img-responsive\" alt=\"\">
                            <div class=\"zoom-icon\">

                                <ul class=\"in-by\">
                                    <li><h5>sizes:</h5></li>                     
                                    <li><span>S</span></li>
                                    <li><span>XS</span></li>
                                    <li><span>M</span></li>
                                    <li><span> L</span></li>
                                    <li><span>XL</span></li>
                                    <li><span> XXL</span></li>
                                </ul>


                                <ul class=\"in-by-color\">
                                    <li><h5>colors:</h5></li>                   
                                    <li><span > </span></li>
                                    <li><span class=\"color\"> </span></li>
                                    <li><span class=\"color1\"> </span></li>
                                    <li><span class=\"color2\"> </span></li>
                                    <li><span class=\"color3\"> </span></li>

                                </ul>

                            </div> </a> \t
                    </div>
                    <!---->
                    <div class=\"grid_1 simpleCart_shelfItem\">
                        <a href=\"#\" class=\"cup item_add\"><span class=\" item_price\" >123 \$ <i> </i> </span></a>\t\t\t\t\t
                    </div>
                    <!---->
                </div>


                <div class=\"col-md-3 box-in-at\">
                    <div class=\" grid_box portfolio-wrapper\">\t\t
                        <a href=\"single.html\" > <img src=\"images/fa5.jpg\" class=\"img-responsive\" alt=\"\">
                            <div class=\"zoom-icon\">

                                <ul class=\"in-by\">
                                    <li><h5>sizes:</h5></li>                     
                                    <li><span>S</span></li>
                                    <li><span>XS</span></li>
                                    <li><span>M</span></li>
                                    <li><span> L</span></li>
                                    <li><span>XL</span></li>
                                    <li><span> XXL</span></li>
                                </ul>


                                <ul class=\"in-by-color\">
                                    <li><h5>colors:</h5></li>                   
                                    <li><span > </span></li>
                                    <li><span class=\"color\"> </span></li>
                                    <li><span class=\"color1\"> </span></li>
                                    <li><span class=\"color2\"> </span></li>
                                    <li><span class=\"color3\"> </span></li>

                                </ul>

                            </div> </a> \t
                    </div>
                    <!---->
                    <div class=\"grid_1 simpleCart_shelfItem\">
                        <a href=\"#\" class=\"cup item_add\"><span class=\" item_price\" >123 \$ <i> </i> </span></a>\t\t\t\t\t
                    </div>
                    <!---->
                </div>


                <div class=\"col-md-3 box-in-at\">
                    <div class=\" grid_box portfolio-wrapper\">\t\t
                        <a href=\"single.html\" > <img src=\"images/fa6.jpg\" class=\"img-responsive\" alt=\"\">
                            <div class=\"zoom-icon\">

                                <ul class=\"in-by\">
                                    <li><h5>sizes:</h5></li>                     
                                    <li><span>S</span></li>
                                    <li><span>XS</span></li>
                                    <li><span>M</span></li>
                                    <li><span> L</span></li>
                                    <li><span>XL</span></li>
                                    <li><span> XXL</span></li>
                                </ul>


                                <ul class=\"in-by-color\">
                                    <li><h5>colors:</h5></li>                   
                                    <li><span > </span></li>
                                    <li><span class=\"color\"> </span></li>
                                    <li><span class=\"color1\"> </span></li>
                                    <li><span class=\"color2\"> </span></li>
                                    <li><span class=\"color3\"> </span></li>

                                </ul>

                            </div> </a> \t
                    </div>
                    <!---->
                    <div class=\"grid_1 simpleCart_shelfItem\">
                        <a href=\"#\" class=\"cup item_add\"><span class=\" item_price\" >123 \$ <i> </i> </span></a>\t\t\t\t\t
                    </div>
                    <!---->
                </div>


                <div class=\"col-md-3 box-in-at\">
                    <div class=\" grid_box portfolio-wrapper\">\t\t
                        <a href=\"single.html\" > <img src=\"images/fa7.jpg\" class=\"img-responsive\" alt=\"\">
                            <div class=\"zoom-icon\">

                                <ul class=\"in-by\">
                                    <li><h5>sizes:</h5></li>                     
                                    <li><span>S</span></li>
                                    <li><span>XS</span></li>
                                    <li><span>M</span></li>
                                    <li><span> L</span></li>
                                    <li><span>XL</span></li>
                                    <li><span> XXL</span></li>
                                </ul>


                                <ul class=\"in-by-color\">
                                    <li><h5>colors:</h5></li>                   
                                    <li><span > </span></li>
                                    <li><span class=\"color\"> </span></li>
                                    <li><span class=\"color1\"> </span></li>
                                    <li><span class=\"color2\"> </span></li>
                                    <li><span class=\"color3\"> </span></li>

                                </ul>

                            </div> </a> \t
                    </div>
                    <!---->
                    <div class=\"grid_1 simpleCart_shelfItem\">
                        <a href=\"#\" class=\"cup item_add\"><span class=\" item_price\" >123 \$ <i> </i> </span></a>\t\t\t\t\t
                    </div>
                    <!---->
                </div>
                <div class=\"clearfix\"> </div>
            </div>
            <div class=\"pink\">
                <div class=\"col-md-3 box-in-at\">
                    <div class=\" grid_box portfolio-wrapper\">\t\t
                        <a href=\"single.html\" > <img src=\"images/fa8.jpg\" class=\"img-responsive\" alt=\"\">
                            <div class=\"zoom-icon\">

                                <ul class=\"in-by\">
                                    <li><h5>sizes:</h5></li>                     
                                    <li><span>S</span></li>
                                    <li><span>XS</span></li>
                                    <li><span>M</span></li>
                                    <li><span> L</span></li>
                                    <li><span>XL</span></li>
                                    <li><span> XXL</span></li>
                                </ul>


                                <ul class=\"in-by-color\">
                                    <li><h5>colors:</h5></li>                   
                                    <li><span > </span></li>
                                    <li><span class=\"color\"> </span></li>
                                    <li><span class=\"color1\"> </span></li>
                                    <li><span class=\"color2\"> </span></li>
                                    <li><span class=\"color3\"> </span></li>

                                </ul>

                            </div> </a> \t
                    </div>
                    <!---->
                    <div class=\"grid_1 simpleCart_shelfItem\">
                        <a href=\"#\" class=\"cup item_add\"><span class=\" item_price\" >123 \$ <i> </i> </span></a>\t\t\t\t\t
                    </div>
                    <!---->
                </div>


                <div class=\"col-md-3 box-in-at\">
                    <div class=\" grid_box portfolio-wrapper\">\t\t
                        <a href=\"single.html\" > <img src=\"images/fa.jpg\" class=\"img-responsive\" alt=\"\">
                            <div class=\"zoom-icon\">

                                <ul class=\"in-by\">
                                    <li><h5>sizes:</h5></li>                     
                                    <li><span>S</span></li>
                                    <li><span>XS</span></li>
                                    <li><span>M</span></li>
                                    <li><span> L</span></li>
                                    <li><span>XL</span></li>
                                    <li><span> XXL</span></li>
                                </ul>


                                <ul class=\"in-by-color\">
                                    <li><h5>colors:</h5></li>                   
                                    <li><span > </span></li>
                                    <li><span class=\"color\"> </span></li>
                                    <li><span class=\"color1\"> </span></li>
                                    <li><span class=\"color2\"> </span></li>
                                    <li><span class=\"color3\"> </span></li>

                                </ul>

                            </div> </a> \t
                    </div>
                    <!---->
                    <div class=\"grid_1 simpleCart_shelfItem\">
                        <a href=\"#\" class=\"cup item_add\"><span class=\" item_price\" >123 \$ <i> </i> </span></a>\t\t\t\t\t
                    </div>
                    <!---->
                </div>


                <div class=\"col-md-3 box-in-at\">
                    <div class=\" grid_box portfolio-wrapper\">\t\t
                        <a href=\"single.html\" > <img src=\"images/fa3.jpg\" class=\"img-responsive\" alt=\"\">
                            <div class=\"zoom-icon\">

                                <ul class=\"in-by\">
                                    <li><h5>sizes:</h5></li>                     
                                    <li><span>S</span></li>
                                    <li><span>XS</span></li>
                                    <li><span>M</span></li>
                                    <li><span> L</span></li>
                                    <li><span>XL</span></li>
                                    <li><span> XXL</span></li>
                                </ul>


                                <ul class=\"in-by-color\">
                                    <li><h5>colors:</h5></li>                   
                                    <li><span > </span></li>
                                    <li><span class=\"color\"> </span></li>
                                    <li><span class=\"color1\"> </span></li>
                                    <li><span class=\"color2\"> </span></li>
                                    <li><span class=\"color3\"> </span></li>

                                </ul>

                            </div> </a> \t
                    </div>
                    <!---->
                    <div class=\"grid_1 simpleCart_shelfItem\">
                        <a href=\"#\" class=\"cup item_add\"><span class=\" item_price\" >123 \$ <i> </i> </span></a>\t\t\t\t\t
                    </div>
                    <!---->
                </div>


                <div class=\"col-md-3 box-in-at\">
                    <div class=\" grid_box portfolio-wrapper\">\t\t
                        <a href=\"single.html\" > <img src=\"images/fa6.jpg\" class=\"img-responsive\" alt=\"\">
                            <div class=\"zoom-icon\">

                                <ul class=\"in-by\">
                                    <li><h5>sizes:</h5></li>                     
                                     ";
        // line 440
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")));
        foreach ($context['_seq'] as $context["_key"] => $context["entities"]) {
            // line 441
            echo "                                    <li><span>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entities"], "category", array()), "html", null, true);
            echo "</span></li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entities'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 443
        echo "                                </ul>


                                <ul class=\"in-by-color\">
                                    <li><h5>colors:</h5></li>                   
                                    <li><span > </span></li>
                                    <li><span class=\"color\"> </span></li>
                                    <li><span class=\"color1\"> </span></li>
                                    <li><span class=\"color2\"> </span></li>
                                    <li><span class=\"color3\"> </span></li>

                                </ul>

                            </div> </a> \t
                    </div>
                    <!---->
                    <div class=\"grid_1 simpleCart_shelfItem\">
                        <a href=\"#\" class=\"cup item_add\"><span class=\" item_price\" >123 \$ <i> </i> </span></a>\t\t\t\t\t
                    </div>
                    <!---->
                </div>
                <div class=\"clearfix\"> </div>
            </div>
        </div>
        <!---->\t
    </div>
    <!--footer-->
";
    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  506 => 443,  497 => 441,  493 => 440,  82 => 31,  79 => 30,  72 => 26,  66 => 19,  63 => 18,  56 => 14,  47 => 12,  43 => 11,  33 => 3,  30 => 2,  11 => 1,);
    }
}
