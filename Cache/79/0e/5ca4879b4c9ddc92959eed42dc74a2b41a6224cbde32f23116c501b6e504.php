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
        return array (  156 => 56,  153 => 55,  136 => 40,  133 => 39,  128 => 34,  120 => 36,  118 => 33,  101 => 26,  97 => 25,  94 => 24,  81 => 14,  78 => 13,  72 => 11,  65 => 56,  63 => 55,  59 => 53,  57 => 39,  54 => 38,  45 => 13,  40 => 11,  30 => 4,  25 => 1,  591 => 213,  585 => 212,  582 => 211,  572 => 209,  562 => 207,  559 => 206,  556 => 205,  552 => 204,  543 => 199,  539 => 197,  535 => 195,  533 => 194,  530 => 193,  528 => 192,  525 => 191,  519 => 187,  512 => 185,  502 => 183,  492 => 181,  490 => 180,  487 => 179,  484 => 178,  481 => 177,  478 => 176,  475 => 175,  472 => 174,  469 => 173,  466 => 172,  462 => 171,  453 => 169,  450 => 168,  444 => 167,  441 => 166,  438 => 165,  435 => 164,  432 => 163,  429 => 162,  424 => 161,  421 => 160,  418 => 159,  416 => 158,  413 => 157,  410 => 156,  404 => 155,  402 => 154,  400 => 153,  397 => 152,  392 => 151,  390 => 150,  385 => 147,  383 => 146,  380 => 145,  370 => 137,  364 => 136,  361 => 135,  351 => 133,  341 => 131,  338 => 130,  335 => 129,  331 => 128,  322 => 126,  318 => 124,  312 => 123,  309 => 122,  306 => 121,  303 => 120,  300 => 119,  297 => 118,  292 => 117,  289 => 116,  286 => 115,  284 => 114,  279 => 112,  275 => 110,  273 => 109,  270 => 108,  260 => 98,  244 => 95,  242 => 94,  237 => 92,  234 => 91,  217 => 90,  204 => 79,  190 => 78,  184 => 76,  181 => 75,  178 => 74,  175 => 73,  172 => 72,  169 => 71,  166 => 70,  149 => 69,  135 => 60,  129 => 59,  125 => 33,  122 => 56,  119 => 55,  116 => 54,  113 => 30,  110 => 52,  107 => 51,  104 => 27,  102 => 49,  91 => 23,  87 => 39,  82 => 36,  61 => 19,  58 => 18,  55 => 17,  52 => 23,  49 => 15,  47 => 20,  34 => 3,  31 => 2,);
    }
}
