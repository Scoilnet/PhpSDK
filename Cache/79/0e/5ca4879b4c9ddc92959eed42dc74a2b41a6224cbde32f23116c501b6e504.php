<?php

/* base.html.twig */
class __TwigTemplate_790e5ca4879b4c9ddc92959eed42dc74a2b41a6224cbde32f23116c501b6e504 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'footerJS' => array($this, 'block_footerJS'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if IE 8]><html class=\"no-js lt-ie9\" lang=\"en\" > <![endif]-->
<!--[if gt IE 8]><!--> 
<html class=\"no-js\" lang=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "get", array(0 => "_locale"), "method"), "html", null, true);
        echo "\" > 
<!--<![endif]-->

<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width\">

  <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  
    ";
        // line 13
        $this->displayBlock('head', $context, $blocks);
        // line 20
        echo "    
</head>
<body>
        ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "
        ";
        // line 39
        $this->displayBlock('footer', $context, $blocks);
        // line 53
        echo " 
            
        ";
        // line 55
        $this->displayBlock('footerJS', $context, $blocks);
        // line 56
        echo " 
            
</body>
</html>";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        echo "Resource Metadata";
    }

    // line 13
    public function block_head($context, array $blocks = array())
    {
        // line 14
        echo "        <link rel=\"icon\" sizes=\"16x16\" href=\"/favicon.ico\" />
        <link rel=\"stylesheet\" href=\"/css/foundation.css\" />
        <link rel=\"stylesheet\" href=\"/css/lre.css\" />
        <link rel=\"stylesheet\" href=\"/css/search.css\" />
        <script src=\"/js/custom.modernizr.js\"></script>
         \t
    ";
    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        // line 24
        echo "            <div class=\"block row\">                
                    ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 26
            echo "                        <div class=\"flash-message\">
                            <em>Notice</em>: ";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : null), "html", null, true);
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "

            
                    ";
        // line 33
        $this->displayBlock('content', $context, $blocks);
        // line 36
        echo "            </div>
        ";
    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        // line 34
        echo "
\t\t    ";
    }

    // line 39
    public function block_footer($context, array $blocks = array())
    {
        // line 40
        echo "            <script src=\"//codeorigin.jquery.com/jquery-2.0.3.min.js\"></script> 
            <script src=\"/js/foundation.min.js\"></script>
            <script src=\"/js/search.js\"></script>
            <script>
                var lreDir = '';
                                  var locale = 'en';
                 if(locale != 'en'){
                     lreDir += '/'+locale;
                 }
                 lreDir += '/lre/backend/';
                \$(document).foundation();
            </script>
         
        ";
    }

    // line 55
    public function block_footerJS($context, array $blocks = array())
    {
        // line 56
        echo "        ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 56,  153 => 55,  136 => 40,  133 => 39,  128 => 34,  120 => 36,  118 => 33,  101 => 26,  97 => 25,  94 => 24,  81 => 14,  78 => 13,  72 => 11,  65 => 56,  63 => 55,  59 => 53,  57 => 39,  54 => 38,  45 => 13,  40 => 11,  30 => 4,  25 => 1,  603 => 218,  597 => 217,  594 => 216,  584 => 214,  574 => 212,  571 => 211,  568 => 210,  564 => 209,  555 => 204,  551 => 202,  547 => 200,  545 => 199,  542 => 198,  540 => 197,  537 => 196,  531 => 192,  524 => 190,  514 => 188,  504 => 186,  502 => 185,  499 => 184,  496 => 183,  493 => 182,  490 => 181,  487 => 180,  484 => 179,  481 => 178,  478 => 177,  474 => 176,  465 => 174,  462 => 173,  456 => 172,  453 => 171,  450 => 170,  447 => 169,  444 => 168,  441 => 167,  436 => 166,  433 => 165,  430 => 164,  428 => 163,  425 => 162,  422 => 161,  416 => 160,  414 => 159,  412 => 158,  409 => 157,  404 => 156,  402 => 155,  397 => 152,  395 => 151,  392 => 150,  382 => 142,  376 => 141,  373 => 140,  363 => 138,  353 => 136,  350 => 135,  347 => 134,  343 => 133,  334 => 131,  330 => 129,  324 => 128,  321 => 127,  318 => 126,  315 => 125,  312 => 124,  309 => 123,  304 => 122,  301 => 121,  298 => 120,  296 => 119,  291 => 117,  287 => 115,  285 => 114,  282 => 113,  272 => 103,  256 => 100,  254 => 99,  249 => 97,  246 => 96,  229 => 95,  216 => 84,  202 => 83,  199 => 82,  193 => 80,  190 => 79,  187 => 78,  184 => 77,  181 => 76,  178 => 75,  175 => 74,  171 => 72,  169 => 71,  166 => 70,  149 => 69,  135 => 60,  129 => 59,  125 => 33,  122 => 56,  119 => 55,  116 => 54,  113 => 30,  110 => 52,  107 => 51,  104 => 27,  102 => 49,  91 => 23,  87 => 39,  82 => 36,  61 => 19,  58 => 18,  55 => 17,  52 => 23,  49 => 15,  47 => 20,  34 => 3,  31 => 2,);
    }
}
