<?php

/* resource.title.format.twig */
class __TwigTemplate_51b35a88bf86eae4364054c5fab0ce6f9b2d64d7ad73d3625629562c1375a9a7 extends Twig_Template
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
        return array (  55 => 10,  50 => 9,  43 => 8,  37 => 5,  771 => 242,  766 => 240,  763 => 239,  761 => 238,  758 => 237,  755 => 236,  746 => 234,  742 => 233,  739 => 232,  737 => 231,  734 => 230,  731 => 229,  722 => 227,  718 => 226,  715 => 225,  713 => 224,  707 => 222,  698 => 220,  694 => 219,  691 => 218,  689 => 217,  686 => 216,  683 => 215,  674 => 213,  670 => 212,  667 => 211,  665 => 210,  662 => 209,  659 => 208,  650 => 206,  646 => 205,  643 => 204,  641 => 203,  638 => 202,  635 => 201,  626 => 199,  622 => 198,  619 => 197,  617 => 196,  611 => 192,  607 => 190,  601 => 189,  598 => 188,  595 => 187,  592 => 186,  584 => 183,  581 => 182,  578 => 181,  576 => 180,  570 => 177,  567 => 176,  565 => 175,  562 => 174,  560 => 173,  557 => 172,  553 => 170,  536 => 168,  532 => 166,  529 => 165,  512 => 164,  508 => 162,  506 => 161,  503 => 160,  497 => 158,  495 => 157,  487 => 152,  479 => 146,  470 => 142,  455 => 141,  440 => 139,  435 => 136,  426 => 134,  422 => 133,  416 => 129,  414 => 128,  411 => 127,  408 => 126,  401 => 122,  395 => 118,  392 => 117,  389 => 116,  384 => 113,  375 => 111,  371 => 110,  364 => 107,  361 => 106,  358 => 105,  355 => 104,  353 => 103,  349 => 101,  347 => 100,  344 => 99,  338 => 96,  335 => 95,  332 => 94,  326 => 91,  323 => 90,  321 => 89,  318 => 88,  314 => 86,  312 => 85,  309 => 84,  292 => 83,  282 => 82,  263 => 81,  255 => 77,  233 => 73,  227 => 72,  220 => 71,  203 => 70,  197 => 66,  193 => 65,  181 => 55,  171 => 52,  158 => 50,  154 => 49,  151 => 48,  147 => 47,  136 => 43,  125 => 35,  122 => 34,  104 => 31,  100 => 29,  97 => 28,  80 => 27,  74 => 24,  69 => 22,  66 => 21,  62 => 19,  53 => 17,  49 => 15,  40 => 13,  38 => 12,  33 => 9,  31 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
