<?php

/* resource.title.format.twig */
class __TwigTemplate_37c8fd933e12972f4265b473a6694f8d1672cbd0e032244d471075125a43dff3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        if ($this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "urls")) {
            // line 3
            echo "<a class=\"pageview\"  href=\"";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "urls")), "html", null, true);
            echo "\" title=\"Link to ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "title"), "html", null, true);
            echo "\" target=\"_blank\">
    <span class=\"r_format_";
            // line 4
            if ($this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "format")) {
                echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "format"), "id")), "html", null, true);
            }
            echo " r_format\"></span> 
    ";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "title"), "html", null, true);
            echo "
</a>
";
        } else {
            // line 8
            echo "    <span class=\"r_format_";
            if ($this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "format")) {
                echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "format"), "id")), "html", null, true);
            }
            echo " r_format\"></span> 
    ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "title"), "html", null, true);
            echo "
";
        }
        // line 10
        echo " ";
    }

    public function getTemplateName()
    {
        return "resource.title.format.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 9,  43 => 8,  37 => 5,  769 => 241,  764 => 239,  761 => 238,  759 => 237,  756 => 236,  753 => 235,  744 => 233,  740 => 232,  737 => 231,  735 => 230,  732 => 229,  729 => 228,  720 => 226,  716 => 225,  713 => 224,  711 => 223,  705 => 221,  696 => 219,  692 => 218,  689 => 217,  687 => 216,  684 => 215,  681 => 214,  672 => 212,  668 => 211,  665 => 210,  663 => 209,  660 => 208,  657 => 207,  648 => 205,  644 => 204,  641 => 203,  639 => 202,  636 => 201,  633 => 200,  624 => 198,  620 => 197,  617 => 196,  615 => 195,  611 => 194,  605 => 190,  601 => 188,  595 => 187,  592 => 186,  589 => 185,  586 => 184,  578 => 181,  575 => 180,  570 => 178,  564 => 175,  561 => 174,  554 => 171,  551 => 170,  547 => 168,  526 => 164,  523 => 163,  506 => 162,  500 => 159,  497 => 158,  491 => 156,  489 => 155,  473 => 144,  464 => 140,  449 => 139,  434 => 137,  420 => 132,  408 => 126,  405 => 125,  398 => 121,  389 => 116,  384 => 113,  375 => 111,  371 => 110,  358 => 105,  355 => 104,  353 => 103,  349 => 101,  347 => 100,  344 => 99,  332 => 94,  326 => 91,  323 => 90,  321 => 89,  314 => 86,  282 => 82,  263 => 81,  255 => 77,  233 => 73,  227 => 72,  220 => 71,  203 => 70,  197 => 66,  193 => 65,  171 => 52,  158 => 50,  154 => 49,  151 => 48,  147 => 47,  100 => 29,  80 => 27,  74 => 24,  69 => 22,  66 => 21,  62 => 19,  53 => 17,  38 => 12,  33 => 9,  24 => 3,  22 => 2,  19 => 1,  156 => 56,  153 => 55,  136 => 43,  133 => 39,  128 => 34,  120 => 36,  118 => 33,  101 => 26,  97 => 28,  94 => 24,  81 => 14,  78 => 13,  72 => 11,  65 => 56,  63 => 55,  59 => 53,  57 => 39,  54 => 38,  45 => 13,  40 => 13,  30 => 4,  25 => 1,  591 => 213,  585 => 212,  582 => 211,  572 => 179,  562 => 207,  559 => 173,  556 => 172,  552 => 204,  543 => 199,  539 => 197,  535 => 195,  533 => 194,  530 => 166,  528 => 192,  525 => 191,  519 => 187,  512 => 185,  502 => 160,  492 => 181,  490 => 180,  487 => 179,  484 => 178,  481 => 150,  478 => 176,  475 => 175,  472 => 174,  469 => 173,  466 => 172,  462 => 171,  453 => 169,  450 => 168,  444 => 167,  441 => 166,  438 => 165,  435 => 164,  432 => 163,  429 => 134,  424 => 161,  421 => 160,  418 => 159,  416 => 131,  413 => 157,  410 => 127,  404 => 155,  402 => 154,  400 => 153,  397 => 152,  392 => 117,  390 => 150,  385 => 147,  383 => 146,  380 => 145,  370 => 137,  364 => 107,  361 => 106,  351 => 133,  341 => 131,  338 => 96,  335 => 95,  331 => 128,  322 => 126,  318 => 88,  312 => 85,  309 => 84,  306 => 121,  303 => 120,  300 => 119,  297 => 118,  292 => 83,  289 => 116,  286 => 115,  284 => 114,  279 => 112,  275 => 110,  273 => 109,  270 => 108,  260 => 98,  244 => 95,  242 => 94,  237 => 92,  234 => 91,  217 => 90,  204 => 79,  190 => 78,  184 => 76,  181 => 55,  178 => 74,  175 => 73,  172 => 72,  169 => 71,  166 => 70,  149 => 69,  135 => 60,  129 => 59,  125 => 35,  122 => 34,  119 => 55,  116 => 54,  113 => 30,  110 => 52,  107 => 51,  104 => 31,  102 => 49,  91 => 23,  87 => 39,  82 => 36,  61 => 19,  58 => 18,  55 => 10,  52 => 23,  49 => 15,  47 => 20,  34 => 3,  31 => 4,);
    }
}
