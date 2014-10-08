<?php

/* index.html */
class __TwigTemplate_0098d912be7e871820e4f217eef0a3c333892bbc79e700099dac1fafd362a625 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'facet_radio_widget' => array($this, 'block_facet_radio_widget'),
            'facet_radio_horizontal_widget' => array($this, 'block_facet_radio_horizontal_widget'),
            'facet_checkbox_widget' => array($this, 'block_facet_checkbox_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "

        <header class=\"listing\">
            <div class=\"row collapse\">
                <div class=\"large-2 columns\"><h2>Resource List</h2></div>
                <div class=\"large-8 columns\">
                    <div class=\"mainsearch\">
                     <form method=\"get\" action=\"/\">
                        <div class=\"row hidden\"></div>
                        <div class=\"row collapse\">        
                        <div class=\"large-8 columns\"><label for=\"form_q\">Search</label>
                        ";
        // line 14
        if ($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "q")) {
            // line 15
            echo "                            ";
            $context["searchValue"] = $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "q");
            // line 16
            echo "                        ";
        } else {
            // line 17
            echo "                            ";
            $context["searchValue"] = "";
            // line 18
            echo "                        ";
        }
        // line 19
        echo "                        <input type=\"text\" id=\"form_q\" name=\"q\" placeholder=\"Type here to search\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["searchValue"]) ? $context["searchValue"] : null), "html", null, true);
        echo "\"/></div>
                           
                        <div class=\"large-4 columns\"><button type=\"submit\" id=\"form_search\" name=\"search\" class=\"tiny button secondary\">Search Resources</button></div>                        
                        </div>
                    </form>
                    </div>                    
                </div>
                <div class=\"large-2 columns\"></div>
            </div>
        </header>

    <div class=\"main\">

        
    <div class=\"panel\">
        <div class=\"row\">            
            <div class=\"count large-6 columns\">
                <p>Total Count: ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["results"]) ? $context["results"] : null), "totalResults"), "html", null, true);
        echo "</p>
            </div>
            ";
        // line 39
        echo "            <div class=\"navigation large-6 columns text-right\">
                
                 ";
        // line 41
        echo $this->env->getExtension('lre_pagination')->paginationFilter($this->getAttribute((isset($context["results"]) ? $context["results"] : null), "totalResults"), (isset($context["currentPage"]) ? $context["currentPage"] : null));
        echo "
               
            </div>
        </div>
    </div>  
    <div class=\"row\">
        <div class=\"large-12 columns\">
            <div class=\"right\">
                ";
        // line 49
        $context["sortValue"] = $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "sort");
        // line 50
        echo "                ";
        if (((isset($context["sortValue"]) ? $context["sortValue"] : null) == "score")) {
            // line 51
            echo "                    ";
            $context["creationDateClsClass"] = "";
            // line 52
            echo "                    ";
            $context["relevenceClsClass"] = "selected";
            // line 53
            echo "                ";
        } else {
            // line 54
            echo "                    ";
            $context["creationDateClsClass"] = "selected";
            // line 55
            echo "                    ";
            $context["relevenceClsClass"] = "";
            // line 56
            echo "                ";
        }
        // line 57
        echo "                <ul class=\"inline-list\">
                    <li>Sort By:</li>
                    <li class=\"";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["relevenceClsClass"]) ? $context["relevenceClsClass"] : null), "html", null, true);
        echo "\"><a  href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), array((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["params"]) ? $context["params"] : null), array("sort" => "score")))), "html", null, true);
        echo "\">Relevance</a></li>
                    <li class=\"";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["creationDateClsClass"]) ? $context["creationDateClsClass"] : null), "html", null, true);
        echo "\"><a  href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), array((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["params"]) ? $context["params"] : null), array("sort" => "creation_date")))), "html", null, true);
        echo "\">Date Created</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"large-2 columns\">
            <div class=\"facets\">
                    
            ";
        // line 69
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["results"]) ? $context["results"] : null), "facets"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["labelFacet"] => $context["searchFacet"]) {
            // line 70
            echo "                ";
            if ((twig_length_filter($this->env, (isset($context["searchFacet"]) ? $context["searchFacet"] : null)) > 0)) {
                // line 71
                echo "                    ";
                if ((((isset($context["labelFacet"]) ? $context["labelFacet"] : null) == "strand") || ((isset($context["labelFacet"]) ? $context["labelFacet"] : null) == "strandunit"))) {
                    // line 72
                    echo "                        ";
                    $context["active"] = "";
                    // line 73
                    echo "                    ";
                } else {
                    // line 74
                    echo "                        ";
                    $context["active"] = "true";
                    // line 75
                    echo "                    ";
                }
                // line 76
                echo "                    ";
                $this->displayBlock("facet_checkbox_widget", $context, $blocks);
                echo "
                ";
            }
            // line 78
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['labelFacet'], $context['searchFacet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "            </div>
        </div>   
        <div class=\"large-10 columns\">
            <table class=\"records_list\">
                <thead>
                    <tr>
                        <th  class=\"id_column\">ID</th>
                        <th>Record</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 90
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["results"]) ? $context["results"] : null), "results"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["resource"]) {
            // line 91
            echo "                    <tr>
                        <td  class=\"id_column\">";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "id"), "html", null, true);
            echo "</td>
                        <td>
                                ";
            // line 94
            $this->env->loadTemplate("resource.widget.twig")->display($context);
            // line 95
            echo "                        </td>
                    </tr>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resource'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "                </tbody>
            </table>
        </div> 
    </div>
</div>

";
    }

    // line 108
    public function block_facet_radio_widget($context, array $blocks = array())
    {
        // line 109
        ob_start();
        // line 110
        echo "    <div class=\"section-container accordion keyskills-wrapper\" data-section=\"accordion\">
         <section class=\"active\">
          <p class=\"title\" data-section-title><a href=\"#\">";
        // line 112
        echo twig_escape_filter($this->env, (isset($context["labelFacet"]) ? $context["labelFacet"] : null), "html", null, true);
        echo "</a></p>
             <div class=\"content\" data-section-content>
                    ";
        // line 114
        $context["allFacetSelected"] = "selected";
        // line 115
        echo "                    ";
        $context["allFacetKey"] = "";
        // line 116
        echo "                    ";
        $context["allCount"] = 0;
        // line 117
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["searchFacet"]) ? $context["searchFacet"] : null));
        foreach ($context['_seq'] as $context["facetKey"] => $context["facet"]) {
            // line 118
            echo "                        ";
            $context["allCount"] = ((isset($context["allCount"]) ? $context["allCount"] : null) + $this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "count"));
            // line 119
            echo "                        ";
            $context["allFacetKey"] = $this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "facetKey");
            // line 120
            echo "                        ";
            if ($this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "selected")) {
                // line 121
                echo "                             ";
                $context["allFacetSelected"] = "";
                // line 122
                echo "                        ";
            }
            // line 123
            echo "                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['facetKey'], $context['facet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "                     <ul class=\"no-bullet\">
                         <li>
                            <a class=\"radio_facet ";
        // line 126
        echo twig_escape_filter($this->env, (isset($context["allFacetSelected"]) ? $context["allFacetSelected"] : null), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), array((isset($context["route"]) ? $context["route"] : null), (isset($context["params"]) ? $context["params"] : null))), "html", null, true);
        echo "\">All (";
        echo twig_escape_filter($this->env, (isset($context["allCount"]) ? $context["allCount"] : null), "html", null, true);
        echo ")</a>
                        </li>
                        ";
        // line 128
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["searchFacet"]) ? $context["searchFacet"] : null));
        foreach ($context['_seq'] as $context["facetKey"] => $context["facet"]) {
            // line 129
            echo "                             ";
            if ($this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "entity")) {
                // line 130
                echo "                                 ";
                if ($this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "selected")) {
                    // line 131
                    echo "                                     <li><a class=\"radio_facet selected\" href=\"";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), array((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["params"]) ? $context["params"] : null), array($this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "facetKey") => $this->getAttribute($this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "entity"), "id"))))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "entity"), "title"), "html", null, true);
                    echo " (";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "count"), "html", null, true);
                    echo ")</a></li>
                                ";
                } else {
                    // line 133
                    echo "                                     <li><a class=\"radio_facet\" href=\"";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), array((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["params"]) ? $context["params"] : null), array($this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "facetKey") => $this->getAttribute($this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "entity"), "id"))))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "entity"), "title"), "html", null, true);
                    echo " (";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "count"), "html", null, true);
                    echo ")</a></li>
                                ";
                }
                // line 135
                echo "                              ";
            }
            // line 136
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['facetKey'], $context['facet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "                    </ul>
            </div>
         </section>
        </div>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 145
    public function block_facet_radio_horizontal_widget($context, array $blocks = array())
    {
        // line 146
        ob_start();
        // line 147
        echo "    <ul class=\"inline-list filters\">
        <li><strong>Label Facet</strong></li>

        ";
        // line 150
        if (array_key_exists("removeParams", $context)) {
            // line 151
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["removeParams"]) ? $context["removeParams"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["paramName"]) {
                // line 152
                echo "                
                ";
                // line 153
                $context["params"] = (isset($context["params"]) ? $context["params"] : null);
                // line 154
                echo "                ";
                // line 155
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paramName'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 156
            echo "        ";
        }
        // line 157
        echo "        
        ";
        // line 158
        $context["allFacetSelected"] = "selected";
        // line 159
        echo "        ";
        $context["allFacetKey"] = "";
        // line 160
        echo "        ";
        $context["allCount"] = 0;
        // line 161
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["searchFacet"]) ? $context["searchFacet"] : null));
        foreach ($context['_seq'] as $context["facetKey"] => $context["facet"]) {
            // line 162
            echo "            ";
            $context["allCount"] = ((isset($context["allCount"]) ? $context["allCount"] : null) + $this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "count"));
            // line 163
            echo "            ";
            $context["allFacetKey"] = $this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "facetKey");
            // line 164
            echo "            ";
            if ($this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "selected")) {
                // line 165
                echo "                 ";
                $context["allFacetSelected"] = "";
                // line 166
                echo "            ";
            }
            // line 167
            echo "       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['facetKey'], $context['facet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        echo "        <li>
            <a class=\"radio_facet ";
        // line 169
        echo twig_escape_filter($this->env, (isset($context["allFacetSelected"]) ? $context["allFacetSelected"] : null), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), array((isset($context["route"]) ? $context["route"] : null), (isset($context["params"]) ? $context["params"] : null))), "html", null, true);
        echo "\">Facet Label (";
        echo twig_escape_filter($this->env, (isset($context["allCount"]) ? $context["allCount"] : null), "html", null, true);
        echo ")</a>
        </li>
        ";
        // line 171
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["searchFacet"]) ? $context["searchFacet"] : null));
        foreach ($context['_seq'] as $context["facetKey"] => $context["facet"]) {
            // line 172
            echo "             ";
            if ($this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "entity")) {
                // line 173
                echo "                ";
                $context["facetTitle"] = $this->getAttribute($this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "entity"), "title");
                // line 174
                echo "                ";
                $context["facetValue"] = $this->getAttribute($this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "entity"), "id");
                // line 175
                echo "             ";
            } else {
                // line 176
                echo "                ";
                $context["facetTitle"] = $this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "label");
                // line 177
                echo "                ";
                $context["facetValue"] = $this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "value");
                // line 178
                echo "             ";
            }
            // line 179
            echo "        
            ";
            // line 180
            if ($this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "selected")) {
                // line 181
                echo "                 <li><a class=\"radio_facet selected\" href=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), array((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["params"]) ? $context["params"] : null), array($this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "facetKey") => (isset($context["facetValue"]) ? $context["facetValue"] : null))))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["facetTitle"]) ? $context["facetTitle"] : null), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "count"), "html", null, true);
                echo ")</a></li>
            ";
            } else {
                // line 183
                echo "                 <li><a class=\"radio_facet\" href=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), array((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["params"]) ? $context["params"] : null), array($this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "facetKey") => (isset($context["facetValue"]) ? $context["facetValue"] : null))))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["facetTitle"]) ? $context["facetTitle"] : null), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "count"), "html", null, true);
                echo ")</a></li>
            ";
            }
            // line 185
            echo "              
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['facetKey'], $context['facet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        echo "    </ul>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 191
    public function block_facet_checkbox_widget($context, array $blocks = array())
    {
        // line 192
        ob_start();
        // line 193
        echo "    <div class=\"section-container accordion keyskills-wrapper\" data-section=\"accordion\">
        ";
        // line 194
        if ((isset($context["active"]) ? $context["active"] : null)) {
            // line 195
            echo "            <section class=\"active\">
        ";
        } else {
            // line 197
            echo "            <section class=\"\">
        ";
        }
        // line 199
        echo "          <p class=\"title\" data-section-title><a href=\"#\">";
        echo twig_escape_filter($this->env, (isset($context["labelFacet"]) ? $context["labelFacet"] : null), "html", null, true);
        echo "</a></p>
             <div class=\"content\" data-section-content>
                     
                     <ul class=\"no-bullet\">
                     
                        ";
        // line 204
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["searchFacet"]) ? $context["searchFacet"] : null));
        foreach ($context['_seq'] as $context["facetKey"] => $context["facet"]) {
            // line 205
            echo "                             ";
            if ($this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "entity")) {
                // line 206
                echo "                                ";
                if ($this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "selected")) {
                    // line 207
                    echo "                                    <li><a class=\"f_label selected\" href=\"";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), array((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["params"]) ? $context["params"] : null), array($this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "facetKey") => $this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "value"))))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "entity"), "title"), "html", null, true);
                    echo " (";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "count"), "html", null, true);
                    echo ")</a></li>
                                ";
                } else {
                    // line 209
                    echo "                                    <li><a  class=\"f_label\" href=\"";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), array((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["params"]) ? $context["params"] : null), array($this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "facetKey") => $this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "value"))))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "entity"), "title"), "html", null, true);
                    echo " (";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "count"), "html", null, true);
                    echo ")</a></li>
                                ";
                }
                // line 211
                echo "                              ";
            }
            // line 212
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['facetKey'], $context['facet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 213
        echo "                    </ul>
            </div>
         </section>
        </div>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  591 => 213,  585 => 212,  582 => 211,  572 => 209,  562 => 207,  559 => 206,  556 => 205,  552 => 204,  543 => 199,  539 => 197,  535 => 195,  533 => 194,  530 => 193,  528 => 192,  525 => 191,  519 => 187,  512 => 185,  502 => 183,  492 => 181,  490 => 180,  487 => 179,  484 => 178,  481 => 177,  478 => 176,  475 => 175,  472 => 174,  469 => 173,  466 => 172,  462 => 171,  453 => 169,  450 => 168,  444 => 167,  441 => 166,  438 => 165,  435 => 164,  432 => 163,  429 => 162,  424 => 161,  421 => 160,  418 => 159,  416 => 158,  413 => 157,  410 => 156,  404 => 155,  402 => 154,  400 => 153,  397 => 152,  392 => 151,  390 => 150,  385 => 147,  383 => 146,  380 => 145,  370 => 137,  364 => 136,  361 => 135,  351 => 133,  341 => 131,  338 => 130,  335 => 129,  331 => 128,  322 => 126,  318 => 124,  312 => 123,  309 => 122,  306 => 121,  303 => 120,  300 => 119,  297 => 118,  292 => 117,  289 => 116,  286 => 115,  284 => 114,  279 => 112,  275 => 110,  273 => 109,  270 => 108,  260 => 98,  244 => 95,  242 => 94,  237 => 92,  234 => 91,  217 => 90,  204 => 79,  190 => 78,  184 => 76,  181 => 75,  178 => 74,  175 => 73,  172 => 72,  169 => 71,  166 => 70,  149 => 69,  135 => 60,  129 => 59,  125 => 57,  122 => 56,  119 => 55,  116 => 54,  113 => 53,  110 => 52,  107 => 51,  104 => 50,  102 => 49,  91 => 41,  87 => 39,  82 => 36,  61 => 19,  58 => 18,  55 => 17,  52 => 16,  49 => 15,  47 => 14,  34 => 3,  31 => 2,);
    }
}
