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
        return array (  50 => 9,  43 => 8,  37 => 5,  771 => 242,  766 => 240,  763 => 239,  761 => 238,  758 => 237,  755 => 236,  746 => 234,  742 => 233,  739 => 232,  737 => 231,  734 => 230,  731 => 229,  722 => 227,  718 => 226,  715 => 225,  713 => 224,  707 => 222,  698 => 220,  694 => 219,  691 => 218,  689 => 217,  686 => 216,  683 => 215,  674 => 213,  670 => 212,  667 => 211,  665 => 210,  662 => 209,  659 => 208,  650 => 206,  646 => 205,  643 => 204,  641 => 203,  638 => 202,  635 => 201,  626 => 199,  622 => 198,  619 => 197,  617 => 196,  611 => 192,  607 => 190,  601 => 189,  598 => 188,  595 => 187,  592 => 186,  581 => 182,  578 => 181,  576 => 180,  570 => 177,  567 => 176,  565 => 175,  562 => 174,  560 => 173,  557 => 172,  553 => 170,  536 => 168,  532 => 166,  529 => 165,  512 => 164,  508 => 162,  506 => 161,  503 => 160,  497 => 158,  495 => 157,  479 => 146,  470 => 142,  455 => 141,  440 => 139,  435 => 136,  426 => 134,  411 => 127,  408 => 126,  401 => 122,  389 => 116,  384 => 113,  375 => 111,  371 => 110,  364 => 107,  361 => 106,  358 => 105,  355 => 104,  349 => 101,  344 => 99,  338 => 96,  335 => 95,  332 => 94,  326 => 91,  323 => 90,  314 => 86,  292 => 83,  263 => 81,  255 => 77,  233 => 73,  227 => 72,  220 => 71,  203 => 70,  197 => 66,  158 => 50,  154 => 49,  151 => 48,  147 => 47,  100 => 29,  80 => 27,  74 => 24,  69 => 22,  66 => 21,  62 => 19,  53 => 17,  38 => 12,  33 => 9,  24 => 3,  22 => 2,  19 => 1,  156 => 56,  153 => 55,  136 => 43,  133 => 39,  128 => 34,  120 => 36,  118 => 33,  101 => 26,  97 => 28,  94 => 24,  81 => 14,  78 => 13,  72 => 11,  65 => 56,  63 => 55,  59 => 53,  57 => 39,  54 => 38,  45 => 13,  40 => 13,  30 => 4,  25 => 1,  603 => 218,  597 => 217,  594 => 216,  584 => 183,  574 => 212,  571 => 211,  568 => 210,  564 => 209,  555 => 204,  551 => 202,  547 => 200,  545 => 199,  542 => 198,  540 => 197,  537 => 196,  531 => 192,  524 => 190,  514 => 188,  504 => 186,  502 => 185,  499 => 184,  496 => 183,  493 => 182,  490 => 181,  487 => 152,  484 => 179,  481 => 178,  478 => 177,  474 => 176,  465 => 174,  462 => 173,  456 => 172,  453 => 171,  450 => 170,  447 => 169,  444 => 168,  441 => 167,  436 => 166,  433 => 165,  430 => 164,  428 => 163,  425 => 162,  422 => 133,  416 => 129,  414 => 128,  412 => 158,  409 => 157,  404 => 156,  402 => 155,  397 => 152,  395 => 118,  392 => 117,  382 => 142,  376 => 141,  373 => 140,  363 => 138,  353 => 103,  350 => 135,  347 => 100,  343 => 133,  334 => 131,  330 => 129,  324 => 128,  321 => 89,  318 => 88,  315 => 125,  312 => 85,  309 => 84,  304 => 122,  301 => 121,  298 => 120,  296 => 119,  291 => 117,  287 => 115,  285 => 114,  282 => 82,  272 => 103,  256 => 100,  254 => 99,  249 => 97,  246 => 96,  229 => 95,  216 => 84,  202 => 83,  199 => 82,  193 => 65,  190 => 79,  187 => 78,  184 => 77,  181 => 55,  178 => 75,  175 => 74,  171 => 52,  169 => 71,  166 => 70,  149 => 69,  135 => 60,  129 => 59,  125 => 35,  122 => 34,  119 => 55,  116 => 54,  113 => 30,  110 => 52,  107 => 51,  104 => 31,  102 => 49,  91 => 23,  87 => 39,  82 => 36,  61 => 19,  58 => 18,  55 => 10,  52 => 23,  49 => 15,  47 => 20,  34 => 3,  31 => 4,);
    }
}
