<?php

/* index.html */
class __TwigTemplate_5cd431ce2966381104ba8e4f697db9ffb55bd1521655ac78b803af21e5bddf91 extends Twig_Template
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
            echo "
                ";
            // line 71
            if ((twig_in_filter((isset($context["labelFacet"]) ? $context["labelFacet"] : null), twig_get_array_keys_filter((isset($context["defaultConfig"]) ? $context["defaultConfig"] : null))) && (twig_length_filter($this->env, twig_split_filter($this->getAttribute((isset($context["defaultConfig"]) ? $context["defaultConfig"] : null), (isset($context["labelFacet"]) ? $context["labelFacet"] : null), array(), "array"), ",")) <= 1))) {
                // line 72
                echo "                
                ";
            } else {
                // line 74
                echo "                    ";
                if ((twig_length_filter($this->env, (isset($context["searchFacet"]) ? $context["searchFacet"] : null)) > 0)) {
                    // line 75
                    echo "                        ";
                    if ((((isset($context["labelFacet"]) ? $context["labelFacet"] : null) == "strand") || ((isset($context["labelFacet"]) ? $context["labelFacet"] : null) == "strandunit"))) {
                        // line 76
                        echo "                            ";
                        $context["active"] = "";
                        // line 77
                        echo "                        ";
                    } else {
                        // line 78
                        echo "                            ";
                        $context["active"] = "true";
                        // line 79
                        echo "                        ";
                    }
                    // line 80
                    echo "                        ";
                    $this->displayBlock("facet_checkbox_widget", $context, $blocks);
                    echo "
                    ";
                }
                // line 82
                echo "                ";
            }
            // line 83
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
        // line 84
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
        // line 95
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
            // line 96
            echo "                    <tr>
                        <td  class=\"id_column\">";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "id"), "html", null, true);
            echo "</td>
                        <td>
                                ";
            // line 99
            $this->env->loadTemplate("resource.widget.twig")->display($context);
            // line 100
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
        // line 103
        echo "                </tbody>
            </table>
        </div> 
    </div>
</div>

";
    }

    // line 113
    public function block_facet_radio_widget($context, array $blocks = array())
    {
        // line 114
        ob_start();
        // line 115
        echo "    <div class=\"section-container accordion keyskills-wrapper\" data-section=\"accordion\">
         <section class=\"active\">
          <p class=\"title\" data-section-title><a href=\"#\">";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["labelFacet"]) ? $context["labelFacet"] : null), "html", null, true);
        echo "</a></p>
             <div class=\"content\" data-section-content>
                    ";
        // line 119
        $context["allFacetSelected"] = "selected";
        // line 120
        echo "                    ";
        $context["allFacetKey"] = "";
        // line 121
        echo "                    ";
        $context["allCount"] = 0;
        // line 122
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["searchFacet"]) ? $context["searchFacet"] : null));
        foreach ($context['_seq'] as $context["facetKey"] => $context["facet"]) {
            // line 123
            echo "                        ";
            $context["allCount"] = ((isset($context["allCount"]) ? $context["allCount"] : null) + $this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "count"));
            // line 124
            echo "                        ";
            $context["allFacetKey"] = $this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "facetKey");
            // line 125
            echo "                        ";
            if ($this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "selected")) {
                // line 126
                echo "                             ";
                $context["allFacetSelected"] = "";
                // line 127
                echo "                        ";
            }
            // line 128
            echo "                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['facetKey'], $context['facet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "                     <ul class=\"no-bullet\">
                         <li>
                            <a class=\"radio_facet ";
        // line 131
        echo twig_escape_filter($this->env, (isset($context["allFacetSelected"]) ? $context["allFacetSelected"] : null), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), array((isset($context["route"]) ? $context["route"] : null), (isset($context["params"]) ? $context["params"] : null))), "html", null, true);
        echo "\">All (";
        echo twig_escape_filter($this->env, (isset($context["allCount"]) ? $context["allCount"] : null), "html", null, true);
        echo ")</a>
                        </li>
                        ";
        // line 133
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["searchFacet"]) ? $context["searchFacet"] : null));
        foreach ($context['_seq'] as $context["facetKey"] => $context["facet"]) {
            // line 134
            echo "                             ";
            if ($this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "entity")) {
                // line 135
                echo "                                 ";
                if ($this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "selected")) {
                    // line 136
                    echo "                                     <li><a class=\"radio_facet selected\" href=\"";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), array((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["params"]) ? $context["params"] : null), array($this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "facetKey") => $this->getAttribute($this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "entity"), "id"))))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "entity"), "title"), "html", null, true);
                    echo " (";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "count"), "html", null, true);
                    echo ")</a></li>
                                ";
                } else {
                    // line 138
                    echo "                                     <li><a class=\"radio_facet\" href=\"";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), array((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["params"]) ? $context["params"] : null), array($this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "facetKey") => $this->getAttribute($this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "entity"), "id"))))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "entity"), "title"), "html", null, true);
                    echo " (";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "count"), "html", null, true);
                    echo ")</a></li>
                                ";
                }
                // line 140
                echo "                              ";
            }
            // line 141
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['facetKey'], $context['facet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "                    </ul>
            </div>
         </section>
        </div>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 150
    public function block_facet_radio_horizontal_widget($context, array $blocks = array())
    {
        // line 151
        ob_start();
        // line 152
        echo "    <ul class=\"inline-list filters\">
        <li><strong>Label Facet</strong></li>

        ";
        // line 155
        if (array_key_exists("removeParams", $context)) {
            // line 156
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["removeParams"]) ? $context["removeParams"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["paramName"]) {
                // line 157
                echo "                
                ";
                // line 158
                $context["params"] = (isset($context["params"]) ? $context["params"] : null);
                // line 159
                echo "                ";
                // line 160
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paramName'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 161
            echo "        ";
        }
        // line 162
        echo "        
        ";
        // line 163
        $context["allFacetSelected"] = "selected";
        // line 164
        echo "        ";
        $context["allFacetKey"] = "";
        // line 165
        echo "        ";
        $context["allCount"] = 0;
        // line 166
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["searchFacet"]) ? $context["searchFacet"] : null));
        foreach ($context['_seq'] as $context["facetKey"] => $context["facet"]) {
            // line 167
            echo "            ";
            $context["allCount"] = ((isset($context["allCount"]) ? $context["allCount"] : null) + $this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "count"));
            // line 168
            echo "            ";
            $context["allFacetKey"] = $this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "facetKey");
            // line 169
            echo "            ";
            if ($this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "selected")) {
                // line 170
                echo "                 ";
                $context["allFacetSelected"] = "";
                // line 171
                echo "            ";
            }
            // line 172
            echo "       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['facetKey'], $context['facet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "        <li>
            <a class=\"radio_facet ";
        // line 174
        echo twig_escape_filter($this->env, (isset($context["allFacetSelected"]) ? $context["allFacetSelected"] : null), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), array((isset($context["route"]) ? $context["route"] : null), (isset($context["params"]) ? $context["params"] : null))), "html", null, true);
        echo "\">Facet Label (";
        echo twig_escape_filter($this->env, (isset($context["allCount"]) ? $context["allCount"] : null), "html", null, true);
        echo ")</a>
        </li>
        ";
        // line 176
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["searchFacet"]) ? $context["searchFacet"] : null));
        foreach ($context['_seq'] as $context["facetKey"] => $context["facet"]) {
            // line 177
            echo "             ";
            if ($this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "entity")) {
                // line 178
                echo "                ";
                $context["facetTitle"] = $this->getAttribute($this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "entity"), "title");
                // line 179
                echo "                ";
                $context["facetValue"] = $this->getAttribute($this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "entity"), "id");
                // line 180
                echo "             ";
            } else {
                // line 181
                echo "                ";
                $context["facetTitle"] = $this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "label");
                // line 182
                echo "                ";
                $context["facetValue"] = $this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "value");
                // line 183
                echo "             ";
            }
            // line 184
            echo "        
            ";
            // line 185
            if ($this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "selected")) {
                // line 186
                echo "                 <li><a class=\"radio_facet selected\" href=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), array((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["params"]) ? $context["params"] : null), array($this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "facetKey") => (isset($context["facetValue"]) ? $context["facetValue"] : null))))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["facetTitle"]) ? $context["facetTitle"] : null), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "count"), "html", null, true);
                echo ")</a></li>
            ";
            } else {
                // line 188
                echo "                 <li><a class=\"radio_facet\" href=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), array((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["params"]) ? $context["params"] : null), array($this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "facetKey") => (isset($context["facetValue"]) ? $context["facetValue"] : null))))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["facetTitle"]) ? $context["facetTitle"] : null), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "count"), "html", null, true);
                echo ")</a></li>
            ";
            }
            // line 190
            echo "              
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['facetKey'], $context['facet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        echo "    </ul>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 196
    public function block_facet_checkbox_widget($context, array $blocks = array())
    {
        // line 197
        ob_start();
        // line 198
        echo "    <div class=\"section-container accordion keyskills-wrapper\" data-section=\"accordion\">
        ";
        // line 199
        if ((isset($context["active"]) ? $context["active"] : null)) {
            // line 200
            echo "            <section class=\"active\">
        ";
        } else {
            // line 202
            echo "            <section class=\"\">
        ";
        }
        // line 204
        echo "          <p class=\"title\" data-section-title><a href=\"#\">";
        echo twig_escape_filter($this->env, (isset($context["labelFacet"]) ? $context["labelFacet"] : null), "html", null, true);
        echo "</a></p>
             <div class=\"content\" data-section-content>
                     
                     <ul class=\"no-bullet\">
                     
                        ";
        // line 209
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["searchFacet"]) ? $context["searchFacet"] : null));
        foreach ($context['_seq'] as $context["facetKey"] => $context["facet"]) {
            // line 210
            echo "                             ";
            if ($this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "entity")) {
                // line 211
                echo "                                ";
                if ($this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "selected")) {
                    // line 212
                    echo "                                    <li><a class=\"f_label selected\" href=\"";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), array((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["params"]) ? $context["params"] : null), array($this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "facetKey") => $this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "value"))))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "entity"), "title"), "html", null, true);
                    echo " (";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "count"), "html", null, true);
                    echo ")</a></li>
                                ";
                } else {
                    // line 214
                    echo "                                    <li><a  class=\"f_label\" href=\"";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), array((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["params"]) ? $context["params"] : null), array($this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "facetKey") => $this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "value"))))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "entity"), "title"), "html", null, true);
                    echo " (";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facet"]) ? $context["facet"] : null), "count"), "html", null, true);
                    echo ")</a></li>
                                ";
                }
                // line 216
                echo "                              ";
            }
            // line 217
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['facetKey'], $context['facet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 218
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
        return array (  603 => 218,  597 => 217,  594 => 216,  584 => 214,  574 => 212,  571 => 211,  568 => 210,  564 => 209,  555 => 204,  551 => 202,  547 => 200,  545 => 199,  542 => 198,  540 => 197,  537 => 196,  531 => 192,  524 => 190,  514 => 188,  504 => 186,  502 => 185,  499 => 184,  496 => 183,  493 => 182,  490 => 181,  487 => 180,  484 => 179,  481 => 178,  478 => 177,  474 => 176,  465 => 174,  462 => 173,  456 => 172,  453 => 171,  450 => 170,  447 => 169,  444 => 168,  441 => 167,  436 => 166,  433 => 165,  430 => 164,  428 => 163,  425 => 162,  422 => 161,  416 => 160,  414 => 159,  412 => 158,  409 => 157,  404 => 156,  402 => 155,  397 => 152,  395 => 151,  392 => 150,  382 => 142,  376 => 141,  373 => 140,  363 => 138,  353 => 136,  350 => 135,  347 => 134,  343 => 133,  334 => 131,  330 => 129,  324 => 128,  321 => 127,  318 => 126,  315 => 125,  312 => 124,  309 => 123,  304 => 122,  301 => 121,  298 => 120,  296 => 119,  291 => 117,  287 => 115,  285 => 114,  282 => 113,  272 => 103,  256 => 100,  254 => 99,  249 => 97,  246 => 96,  229 => 95,  216 => 84,  202 => 83,  199 => 82,  193 => 80,  190 => 79,  187 => 78,  184 => 77,  181 => 76,  178 => 75,  175 => 74,  171 => 72,  169 => 71,  166 => 70,  149 => 69,  135 => 60,  129 => 59,  125 => 57,  122 => 56,  119 => 55,  116 => 54,  113 => 53,  110 => 52,  107 => 51,  104 => 50,  102 => 49,  91 => 41,  87 => 39,  82 => 36,  61 => 19,  58 => 18,  55 => 17,  52 => 16,  49 => 15,  47 => 14,  34 => 3,  31 => 2,);
    }
}
