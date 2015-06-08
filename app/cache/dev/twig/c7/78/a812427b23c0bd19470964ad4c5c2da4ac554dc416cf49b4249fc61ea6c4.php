<?php

/* FrontBundle::layout.html.twig */
class __TwigTemplate_c778a812427b23c0bd19470964ad4c5c2da4ac554dc416cf49b4249fc61ea6c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'nav' => array($this, 'block_nav'),
            'navv' => array($this, 'block_navv'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
   
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fontend/css/bootstrap.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fontend/css/etalage.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fontend/css/megamenu.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fontend/css/owl.carousel.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fontend/css/style.css"), "html", null, true);
        echo "\" />
    
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fontend/js/easing.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fontend/js/jquery.etalage.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fontend/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fontend/js/jquery.wmuSlider.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fontend/js/megamenu.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fontend/js/jmove-top.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fontend/js/owl.carousel.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fontend/js/simpleCart.js"), "html", null, true);
        echo "\"></script>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<meta name=\"keywords\" content=\"Markito Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design\" />
<script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Amaranth:400,700' rel='stylesheet' type='text/css'>
<!--//fonts-->


<script type=\"text/javascript\">
\t\t\t\t\tjQuery(document).ready(function(\$) {
\t\t\t\t\t\t\$(\".scroll\").click(function(event){\t\t
\t\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\t\t\$('html,body').animate({scrollTop:\$(this.hash).offset().top},1000);
\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t\t</script>
<!-- start menu -->

<script>\$(document).ready(function(){\$(\".megamenu\").megamenu();});</script>
</head>
<body> 
<!--header-->\t
<div class=\"header\" >
\t<div class=\"top-header\" >\t\t
\t\t<div class=\"container\">
\t\t<div class=\"top-head\" >
\t\t\t<div class=\"header-para\">
\t\t\t\t<ul class=\"social-in\">
\t\t\t\t\t<li><a href=\"#\"><i> </i></a></li>\t\t\t\t\t\t
\t\t\t\t\t<li><a href=\"#\"><i class=\"ic\"> </i></a></li>
\t\t\t\t\t<li><a href=\"#\"><i class=\"ic1\"> </i></a></li>
\t\t\t\t\t
\t\t\t\t</ul>\t\t\t
\t\t\t</div>\t
\t\t\t
\t\t\t<ul class=\"header-in\">
\t\t\t\t<li ><a href=\"products.html\" >  brands</a></li>
\t\t\t\t<li><a href=\"404.html\">about us</a> </li>
\t\t\t\t<li><a href=\"contact.html\">   contact us</a></li>
\t\t\t\t<li ><a href=\"#\" >   how to use</a></li>
\t\t\t</ul>
\t\t\t<div class=\"search-top\">
\t\t\t\t<div class=\"search\">
\t\t\t\t\t<form>
\t\t\t\t\t\t<input type=\"text\" value=\"search about something ?\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'search about something ?';}\" >
\t\t\t\t\t\t<input type=\"submit\" value=\"\" >
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<div class=\"world\">
\t\t\t\t\t<ul >
\t\t\t\t\t\t<li><a href=\"#\"><span> </span></a> </li>
\t\t\t\t\t\t<li><select class=\"in-drop\">
\t\t\t\t\t\t\t  <option>EN</option>
\t\t\t\t\t\t\t  <option>DE</option>
\t\t\t\t\t\t\t  <option>ES</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"> </div>
\t\t</div>
\t\t</div>
\t</div>
\t\t<!---->
\t
\t\t<div class=\"header-top\">
\t\t<div class=\"container\">
\t\t<div class=\"head-top\">
\t\t\t<div class=\"logo\">
\t\t\t\t<a href=\"index.html\"><img src=\"images/logo.png\" alt=\"\" ></a>
\t\t\t</div>
\t
         <div class=\"top-nav\">
 <ul class=\"megamenu skyblue\">
     <li class=\"active grid\"><a  href=\"#\">fashion</a>
   <div class=\"megapanel\">
<div class=\"row\">
    ";
        // line 100
        $this->displayBlock('nav', $context, $blocks);
        // line 105
        echo "<div class=\"col1\">
<div class=\"h_nav\">
<ul>
<li><a href=\"products.html\">Shirts</a></li>
<li><a href=\"products.html\">Shoes, Boots & Trainers</a></li>
<li><a href=\"products.html\">Shorts</a></li>
<li><a href=\"products.html\">Suits & Blazers</a></li>
<li><a href=\"products.html\">Sunglasses</a></li>
<li><a href=\"products.html\">Sweatpants</a></li>
<li><a href=\"products.html\">Swimwear</a></li>
<li><a href=\"products.html\">Trousers & Chinos</a></li>
<li><a href=\"products.html\">T-Shirts</a></li>
<li><a href=\"products.html\">Underwear & Socks</a></li>
<li><a href=\"products.html\">Vests</a></li>
</ul>
</div>
</div>
<div class=\"col1\">
<div class=\"h_nav\">
<h4>Popular Brands</h4>
<ul>
<li><a href=\"products.html\">Levis</a></li>
<li><a href=\"products.html\">Persol</a></li>
<li><a href=\"products.html\">Nike</a></li>
<li><a href=\"products.html\">Edwin</a></li>
<li><a href=\"products.html\">New Balance</a></li>
<li><a href=\"products.html\">Jack & Jones</a></li>
<li><a href=\"products.html\">Paul Smith</a></li>
<li><a href=\"products.html\">Ray-Ban</a></li>
<li><a href=\"products.html\">Wood Wood</a></li>
</ul>
</div>
</div>
 </div>
</div>
</li>
<li><a   href=\"#\">furniture & decor</a>
<div class=\"megapanel\">
<div class=\"row\">
    ";
        // line 144
        $this->displayBlock('navv', $context, $blocks);
        // line 146
        echo "
<div class=\"col1\">
<div class=\"h_nav\">
<ul>
<li><a href=\"decor.html\">Armchair</a></li>
<li><a href=\"decor.html\">Reider Bench</a></li>
<li><a href=\"decor.html\">Carpet & Desk</a></li>
<li><a href=\"decor.html\">Wardrobe & Lamp</a></li>
<li><a href=\"decor.html\">Car seat</a></li>
<li><a href=\"decor.html\">Lounger</a></li>
<li><a href=\"decor.html\">Anson</a></li>
<li><a href=\"decor.html\">Karlstad</a></li>
<li><a href=\"decor.html\">Camilla & Wardrobe</a></li>
<li><a href=\"decor.html\">Colton</a></li>
<li><a href=\"decor.html\">Brix</a></li>
</ul>
</div>
</div>
<div class=\"col1\">
<iframe src=\"https://player.vimeo.com/video/16878818\"  webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
</div>
 </div>
</div></li>
   <li class=\"grid\"><a  href=\"#\">mobiles & tablets</a>
  <div class=\"megapanel\">
<div class=\"row\">
<div class=\"col1\">
<div class=\"h_nav\">
<ul>
<li><a href=\"mobile.html\">Lenovo Tablets</a></li>
<li><a href=\"mobile.html\">Motorola</a></li>
<li><a href=\"mobile.html\">Samsung </a></li>
<li><a href=\"mobile.html\">Htc Tab</a></li>
<li><a href=\"mobile.html\">Dell & Compaq</a></li>
<li><a href=\"mobile.html\">Asus Tablets</a></li>
<li><a href=\"mobile.html\">Microsoft</a></li>
<li><a href=\"mobile.html\">Moto E & Moto G</a></li>
<li><a href=\"mobile.html\">Intex</a></li>
<li><a href=\"mobile.html\">Hauwei Lumia</a></li>
<li><a href=\"mobile.html\">Loungewear</a></li>
</ul>
</div>
</div>
<div class=\"col1\">
<div class=\"h_nav\">
<ul>
<li><a href=\"mobile.html\">Asus Zenfone 2</a></li>
<li><a href=\"mobile.html\">Nikon & Sony</a></li>
<li><a href=\"mobile.html\">Shorts</a></li>
<li><a href=\"mobile.html\">Olymplus</a></li>
<li><a href=\"mobile.html\">Sunglasses</a></li>
<li><a href=\"mobile.html\">Samsung Nx</a></li>
<li><a href=\"mobile.html\">Printers & Monitors</a></li>
<li><a href=\"mobile.html\">Routers</a></li>
<li><a href=\"mobile.html\">Data Cards</a></li>
<li><a href=\"mobile.html\">Mouse & Keyboard</a></li>
<li><a href=\"mobile.html\">Ink Cartridges</a></li>
</ul>
</div>
</div>
<div class=\"col1\">
<div class=\"col1\">
<iframe src=\"https://player.vimeo.com/video/8118831\"  webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
</div>
</div>
 </div>
</div>
   </li>
<li class=\"grid\"><a  href=\"health.html\">health & beauty</a>
 
   </li>
<li><a  href=\"#\">tvs, gaming & cameras</a>
 <div class=\"megapanel\">
<div class=\"row\">
<div class=\"col1\">
<div class=\"h_nav\">
<ul>
<li><a href=\"mobile.html\">Lenovo Tablets</a></li>
<li><a href=\"mobile.html\">Motorola</a></li>
<li><a href=\"mobile.html\">Samsung </a></li>
<li><a href=\"mobile.html\">Htc Tab</a></li>
<li><a href=\"mobile.html\">Dell & Compaq</a></li>
<li><a href=\"mobile.html\">Asus Tablets</a></li>
<li><a href=\"mobile.html\">Microsoft</a></li>
<li><a href=\"mobile.html\">Moto E & Moto G</a></li>
<li><a href=\"mobile.html\">Intex</a></li>
<li><a href=\"mobile.html\">Hauwei Lumia</a></li>
<li><a href=\"mobile.html\">Loungewear</a></li>
</ul>
</div>
</div>
<div class=\"col1\">
<div class=\"h_nav\">
<ul>
<li><a href=\"mobile.html\">Asus Zenfone 2</a></li>
<li><a href=\"mobile.html\">Nikon & Sony</a></li>
<li><a href=\"mobile.html\">Shorts</a></li>
<li><a href=\"mobile.html\">Olymplus</a></li>
<li><a href=\"mobile.html\">Sunglasses</a></li>
<li><a href=\"mobile.html\">Samsung Nx</a></li>
<li><a href=\"mobile.html\">Printers & Monitors</a></li>
<li><a href=\"mobile.html\">Routers</a></li>
<li><a href=\"mobile.html\">Data Cards</a></li>
<li><a href=\"mobile.html\">Mouse & Keyboard</a></li>
<li><a href=\"mobile.html\">Ink Cartridges</a></li>
</ul>
</div>
</div>
<div class=\"col1\">
<div class=\"col1\">
<iframe src=\"https://player.vimeo.com/video/8118831\"  webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
</div>
</div>
 </div>
</div></li>
 </ul> 
</div>
                  
\t\t\t<div class=\"cart box_1\">
\t\t\t\t\t\t<a href=\"checkout.html\">
\t\t\t\t\t\t<h3> <div class=\"total\">
\t\t\t\t\t\t\t<span class=\"simpleCart_total\"></span> (<span id=\"simpleCart_quantity\" class=\"simpleCart_quantity\"></span> items)</div>
\t\t\t\t\t\t\t<img src=\"images/cart.png\" alt=\"\"/></h3>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<p><a href=\"javascript:;\" class=\"simpleCart_empty\"><img src=\"images/cart-c.png\"  alt=\"\"></a></p>
\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"> </div>
\t\t</div>
\t\t</div>
\t</div>
</div>
\t ";
        // line 278
        $this->displayBlock('content', $context, $blocks);
        // line 280
        echo "\t<div class=\"footer\">
\t\t<div class=\"container\">
\t\t\t<div class=\"col-md-3 footer-left\">
\t\t\t\t<a href=\"index.html\"><img src=\"images/logo.png\" alt=\"\"></a>
\t\t\t\t<p class=\"footer-class\">© 2015 Markito All Rights Reserved | Template by  <a href=\"http://w3layouts.com/\" target=\"_blank\">W3layouts</a> </p>
\t\t\t</div>
\t\t\t<div class=\"col-md-2 footer-middle\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"404.html\">about us</a> </li>
\t\t\t\t\t<li><a href=\"contact.html\">   contact us</a></li>
\t\t\t\t\t<li ><a href=\"products.html\" >  our stores</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 footer-left\">
\t\t\t\t<ul class=\"term\">
\t\t\t\t\t<li><a href=\"#\">terms and conditions</a> </li>
\t\t\t\t\t<li><a href=\"#\">  markito in the press</a></li>
\t\t\t\t\t<li ><a href=\"#\" >  testimonials</a></li>\t
\t\t\t\t</ul>
\t\t\t\t<ul class=\"term\">
\t\t\t\t\t<li><a href=\"#\">join us</a> </li>
\t\t\t\t\t<li><a href=\"#\">  markito videos</a></li>
\t\t\t\t\t
\t\t\t\t</ul>
\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t</div>
\t\t\t<div class=\"col-md-3 footer-right\">
\t\t\t\t<h5>WE SUPPORT</h5>
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"#\"><i> </i></a> </li>
\t\t\t\t\t<li><a href=\"#\"><i class=\"we\"> </i></a></li>
\t\t\t\t\t<li ><a href=\"#\" ><i class=\"we-in\"> </i></a></li>
\t\t\t\t\t<li ><a href=\"#\" ><i class=\"we-at\"> </i></a></li>
\t\t\t\t\t<li ><a href=\"#\" ><i class=\"we-at-at\"> </i></a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"clearfix\"> </div>
\t\t</div>
\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\$(document).ready(function() {
\t\t\t\t\t\t\t/*
\t\t\t\t\t\t\tvar defaults = {
\t\t\t\t\t  \t\t\tcontainerID: 'toTop', // fading element id
\t\t\t\t\t\t\t\tcontainerHoverID: 'toTopHover', // fading element hover id
\t\t\t\t\t\t\t\tscrollSpeed: 1200,
\t\t\t\t\t\t\t\teasingType: 'linear' 
\t\t\t\t\t \t\t};
\t\t\t\t\t\t\t*/
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\$().UItoTop({ easingType: 'easeOutQuart' });
\t\t\t\t\t\t\t
\t\t\t\t\t\t});
\t\t\t\t\t</script>
\t\t\t\t<a href=\"#\" id=\"toTop\" style=\"display: block;\"> <span id=\"toTopHover\" style=\"opacity: 1;\"> </span></a>
\t</div>

</body>
</html>";
    }

    // line 100
    public function block_nav($context, array $blocks = array())
    {
        // line 101
        echo "
        
        
";
    }

    // line 144
    public function block_navv($context, array $blocks = array())
    {
        // line 145
        echo "    ";
    }

    // line 278
    public function block_content($context, array $blocks = array())
    {
        // line 279
        echo "              ";
    }

    public function getTemplateName()
    {
        return "FrontBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  424 => 279,  421 => 278,  417 => 145,  414 => 144,  407 => 101,  404 => 100,  343 => 280,  341 => 278,  207 => 146,  205 => 144,  164 => 105,  162 => 100,  77 => 18,  73 => 17,  69 => 16,  65 => 15,  61 => 14,  57 => 13,  53 => 12,  49 => 11,  44 => 9,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }
}
