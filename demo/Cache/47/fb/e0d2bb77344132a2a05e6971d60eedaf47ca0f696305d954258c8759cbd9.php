<?php

/* resource.widget.twig */
class __TwigTemplate_47fbe0d2bb77344132a2a05e6971d60eedaf47ca0f696305d954258c8759cbd9 extends Twig_Template
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
        $context["resourceCurriculumGrouped"] = $this->env->getExtension('scoilnet_groupcurriculum')->groupCurriculumByGradeAndDiscipline($this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "curriculum"));
        // line 3
        echo "<div class=\"resource\">
    <div class=\"row\">
        <div class=\"large-8 columns\">                                
            <div class=\"r_text\">
                <h3 class=\"r_title\">
                        ";
        // line 8
        $this->env->loadTemplate("resource.title.format.twig")->display($context);
        // line 9
        echo "                       
                </h3>
                <small class=\"r_url\">
                    ";
        // line 12
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "resourceGeneralDescriptionByLanguage", array(0 => (isset($context["lang"]) ? $context["lang"] : null)), "method"), "firstResourceItem"), "resourceUri")) {
            // line 13
            echo "                        <a class=\"pageview\" data-resid=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "id"), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "resourceGeneralDescriptionByLanguage", array(0 => (isset($context["lang"]) ? $context["lang"] : null)), "method"), "firstResourceItem"), "resourceUri"), "html", null, true);
            echo "\" title=\"Link to ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "resourceGeneralDescriptionByLanguage", array(0 => (isset($context["lang"]) ? $context["lang"] : null)), "method"), "title"), "html", null, true);
            echo "\" target=\"_blank\">
                          ";
            // line 15
            echo "                        </a>
                   ";
        } elseif ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "resourceGeneralDescriptionByLanguage", array(0 => (isset($context["lang"]) ? $context["lang"] : null)), "method"), "firstResourceItem"), "resourceFile")) {
            // line 17
            echo "                        <a class=\"pageview\" data-resid=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "id"), "html", null, true);
            echo "\"  href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "resourceGeneralDescriptionByLanguage", array(0 => (isset($context["lang"]) ? $context["lang"] : null)), "method"), "firstResourceItem"), "webPath"), "html", null, true);
            echo "\" title=\"Link to ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "resourceGeneralDescriptionByLanguage", array(0 => (isset($context["lang"]) ? $context["lang"] : null)), "method"), "title"), "html", null, true);
            echo "\">
                           ";
            // line 19
            echo "                        </a>
                   ";
        }
        // line 21
        echo "                </small>            
                <small class=\"r_date\">Added: ";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "creation_date"), "d M Y"), "html", null, true);
        echo "</small> 
                <small class=\"r_author\">Contributor: 
                    ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "author"), "html", null, true);
        echo "
                </small>
                <small class=\"r_type\">Resource type:
                    ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "types"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["resourceType"]) {
            // line 28
            echo "                        ";
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first") == false)) {
                // line 29
                echo "                            /
                        ";
            }
            // line 31
            echo "                        ";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["resourceType"]) ? $context["resourceType"] : null), "title")), "html", null, true);
            echo "
                        
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resourceType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                </small>
                <p class=\"r_excerpt short\">";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "description"), "html", null, true);
        echo "</p>
                <a class=\"r_viewfull-button\">View full description <span class=\"icon icon-caret-down\"></span></a>

            </div>
        </div>
        <div class=\"large-4 columns\">

            <div class=\"r_meta\"> 
                <div id=\"r_sharing_";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "id"), "html", null, true);
        echo "\" class=\"r_sharing_";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "id"), "html", null, true);
        echo "\" data-resid=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "id"), "html", null, true);
        echo "\">
                    
                </div>
                <div class=\"r_curriculum curr_compact\">
                     ";
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resourceCurriculumGrouped"]) ? $context["resourceCurriculumGrouped"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["resourceCurriculumDisciplineGrade"]) {
            // line 48
            echo "                        <div class=\"r-curr-item\">
                            ";
            // line 49
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["resourceCurriculumDisciplineGrade"]) ? $context["resourceCurriculumDisciplineGrade"] : null), "grade"));
            foreach ($context['_seq'] as $context["_key"] => $context["grade"]) {
                // line 50
                echo "                                <span class=\"curr_level curr_";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute((isset($context["grade"]) ? $context["grade"] : null), "abbr")), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grade"]) ? $context["grade"] : null), "title"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grade"]) ? $context["grade"] : null), "abbr"), "html", null, true);
                echo "</span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grade'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                            <span class=\"curr_subject\" title=\"Subject\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["resourceCurriculumDisciplineGrade"]) ? $context["resourceCurriculumDisciplineGrade"] : null), "subject"), "title"), "html", null, true);
            echo "</span>
                        </div>
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resourceCurriculumDisciplineGrade'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                </div>
                
            </div>
        </div>
    </div>                        
    <div class=\"row r_fulldescription is_closed\">
        <div class=\"large-8 columns\">
            <div class=\"r_fullcurriculum\">
                <div class=\"r_curriculum\">
                    <h4 class=\"r_curr-heading\">How it maps to the curriculum</h4>
                    ";
        // line 65
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resourceCurriculumGrouped"]) ? $context["resourceCurriculumGrouped"] : null));
        foreach ($context['_seq'] as $context["disciplineId"] => $context["resourceCurriculumDisciplineGrade"]) {
            // line 66
            echo "                        <div class=\"r-curr-item is_open\">
                            <div class=\"r_accordion_header\">
                                <span class=\"icon icon-caret-down\" title=\"Hide\"></span><span class=\"icon icon-caret-right hide\" title=\"Show\"></span>
                                <dl class=\"tabs\" data-tab>
                                  ";
            // line 70
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["resourceCurriculumDisciplineGrade"]) ? $context["resourceCurriculumDisciplineGrade"] : null), "grade"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["grade"]) {
                // line 71
                echo "                                        <dd class=\"";
                if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) {
                    echo "active";
                }
                echo "\">
                                            <a href=\"#panel";
                // line 72
                echo twig_escape_filter($this->env, (isset($context["disciplineId"]) ? $context["disciplineId"] : null), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grade"]) ? $context["grade"] : null), "id"), "html", null, true);
                echo "\">
                                                <span title=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grade"]) ? $context["grade"] : null), "title"), "html", null, true);
                echo "\" class=\"curr_level curr_";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute((isset($context["grade"]) ? $context["grade"] : null), "abbr")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grade"]) ? $context["grade"] : null), "abbr"), "html", null, true);
                echo "</span>
                                            </a>
                                        </dd>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grade'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "                                  <dd><span title=\"Subject\" class=\"curr_subject\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["resourceCurriculumDisciplineGrade"]) ? $context["resourceCurriculumDisciplineGrade"] : null), "subject"), "title"), "html", null, true);
            echo "</span></dd>
                                </dl>
                            </div>
                            <div class=\"tabs-content\">
                             ";
            // line 81
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["resourceCurriculumDisciplineGrade"]) ? $context["resourceCurriculumDisciplineGrade"] : null), "curriculum"));
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
            foreach ($context['_seq'] as $context["gradeid"] => $context["gradeCurriculum"]) {
                echo "   
                                <div class=\"content ";
                // line 82
                if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) {
                    echo "active";
                }
                echo "\" id=\"panel";
                echo twig_escape_filter($this->env, (isset($context["disciplineId"]) ? $context["disciplineId"] : null), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, (isset($context["gradeid"]) ? $context["gradeid"] : null), "html", null, true);
                echo "\">
                                    ";
                // line 83
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["gradeCurriculum"]) ? $context["gradeCurriculum"] : null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["curriculum"]) {
                    // line 84
                    echo "                                        
                                      ";
                    // line 85
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first") == false)) {
                        // line 86
                        echo "                                         <hr />
                                      ";
                    }
                    // line 88
                    echo "                                            
                                      ";
                    // line 89
                    if ($this->getAttribute((isset($context["curriculum"]) ? $context["curriculum"] : null), "strand")) {
                        // line 90
                        echo "                                        <div title=\"Strand\" class=\"curr_strand\">
                                          <p><strong class=\"r_term\">Strand:</strong> ";
                        // line 91
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["curriculum"]) ? $context["curriculum"] : null), "strand"), "title"), "html", null, true);
                        echo "</p>
                                        </div>
                                       ";
                    }
                    // line 94
                    echo "                                       ";
                    if ($this->getAttribute((isset($context["curriculum"]) ? $context["curriculum"] : null), "strandunit")) {
                        // line 95
                        echo "                                            <div title=\"Strand Unit\" class=\"curr_strand\">
                                                <p><strong class=\"r_term\">Strand unit:</strong> ";
                        // line 96
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["curriculum"]) ? $context["curriculum"] : null), "strandunit"), "title"), "html", null, true);
                        echo "</p>
                                            </div>
                                        ";
                    }
                    // line 99
                    echo "                                        
                                        ";
                    // line 100
                    if ((twig_length_filter($this->env, $this->getAttribute((isset($context["curriculum"]) ? $context["curriculum"] : null), "content_objective")) > 0)) {
                        // line 101
                        echo "                                            <div class=\"curr_contentobjective\">
                                                <p><strong class=\"r_term\">Content objective:</strong></br>
                                                       ";
                        // line 103
                        if ($this->getAttribute((isset($context["curriculum"]) ? $context["curriculum"] : null), "contentObjectiveType")) {
                            // line 104
                            echo "                                                           ";
                            $context["objectiveType"] = twig_lower_filter($this->env, $this->getAttribute((isset($context["curriculum"]) ? $context["curriculum"] : null), "contentObjectiveType"));
                            // line 105
                            echo "                                                       ";
                        } else {
                            // line 106
                            echo "                                                           ";
                            $context["objectiveType"] = "enables";
                            // line 107
                            echo "                                                       ";
                        }
                        echo " 
                                                     Objective Type</p>
                                                <ul>
                                                    ";
                        // line 110
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["curriculum"]) ? $context["curriculum"] : null), "content_objective"));
                        foreach ($context['_seq'] as $context["_key"] => $context["resourceContentObjective"]) {
                            // line 111
                            echo "                                                        <li>";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resourceContentObjective"]) ? $context["resourceContentObjective"] : null), "title"), "html", null, true);
                            echo "</li>
                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resourceContentObjective'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 113
                        echo "                                                </ul>
                                           </div>
                                        ";
                    }
                    // line 116
                    echo "                                        ";
                    if ((twig_length_filter($this->env, $this->getAttribute((isset($context["curriculum"]) ? $context["curriculum"] : null), "suggestions_for_use")) > 0)) {
                        // line 117
                        echo "                                            ";
                        if ($this->getAttribute($this->getAttribute((isset($context["curriculum"]) ? $context["curriculum"] : null), "suggestions_for_use"), "title")) {
                            // line 118
                            echo "                                                <div class=\"curr_suggested_use\">
                                                    <p>
                                                        <strong class=\"r_term\">Suggestions for use: </strong>

                                                        ";
                            // line 122
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["curriculum"]) ? $context["curriculum"] : null), "suggestions_for_use"), "title"), "html", null, true);
                            echo "
                                                    </p>
                                                </div> 
                                            ";
                        }
                        // line 126
                        echo "                                        ";
                    }
                    // line 127
                    echo "                                        
                                        ";
                    // line 128
                    if ((twig_length_filter($this->env, $this->getAttribute((isset($context["curriculum"]) ? $context["curriculum"] : null), "key_skills")) > 0)) {
                        // line 129
                        echo "                                                <div class=\"curr_key_skills\">
                                                    <p>
                                                        <span class=\"icon icon-comment-alt\"></span> 
                                                        <strong class=\"r_term\">Key Skills:</strong>
                                                             ";
                        // line 133
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["curriculum"]) ? $context["curriculum"] : null), "key_skills"));
                        foreach ($context['_seq'] as $context["_key"] => $context["resourceKeySkills"]) {
                            // line 134
                            echo "                                                                ";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resourceKeySkills"]) ? $context["resourceKeySkills"] : null), "title"), "html", null, true);
                            echo "
                                                             ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resourceKeySkills'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 136
                        echo "                                                    </p>
                                                </div> 
                                        ";
                    }
                    // line 139
                    echo "                                        
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['curriculum'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 141
                echo "                                </div> 
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
            unset($context['_seq'], $context['_iterated'], $context['gradeid'], $context['gradeCurriculum'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo " 
                            </div>
                        </div><!-- END -->
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['disciplineId'], $context['resourceCurriculumDisciplineGrade'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "                </div>

            </div>

        </div>
        <div class=\"large-4 columns\">
            <div class=\"r_report_link\"><a href=\"mailto:report@scoilnet.ie?subject=Report resource id ";
        // line 152
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "id"), "html", null, true);
        echo "\" target=\"_blank\"><span class=\"icon icon-ban-circle\"></span> Report this resource</a></div>

            <div class=\"r_meta\">
                    <div class=\"r_asset r_meta_item\">
                        <strong class=\"r_term\">Asset type:</strong> 
                        ";
        // line 157
        if ($this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "format")) {
            // line 158
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "format"), "title"), "html", null, true);
            echo "
                        ";
        }
        // line 160
        echo "                    </div>
                    ";
        // line 161
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "language")) > 0)) {
            // line 162
            echo "                    <div class=\"r_language r_meta_item\">
                        <strong class=\"r_term\">Language:</strong> 
                        ";
            // line 164
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "language"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["resourceLanguage"]) {
                // line 165
                echo "                            ";
                if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first") == false)) {
                    // line 166
                    echo "                                ,
                            ";
                }
                // line 168
                echo "                            ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resourceLanguage"]) ? $context["resourceLanguage"] : null), "title"), "html", null, true);
                echo "
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resourceLanguage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 170
            echo "                    </div>
                    ";
        }
        // line 172
        echo "                    
                    ";
        // line 173
        if ($this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "rights")) {
            // line 174
            echo "
                        ";
            // line 175
            if ($this->getAttribute($this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "rights"), "licence")) {
                // line 176
                echo "                            <div class=\"r_rights r_meta_item\">
                                <strong class=\"r_term\">Rights:</strong> ";
                // line 177
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "rights"), "licence"), "title"), "html", null, true);
                echo "
                            </div>
                        
                            ";
                // line 180
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "rights"), "licence"), "id") == 1)) {
                    // line 181
                    echo "                                ";
                    if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "rights"), "licence"), "url")) {
                        // line 182
                        echo "                                    <div class=\"r_rights r_meta_item\">
                                        <strong class=\"r_term\">Rights Url:</strong> <a href=\"";
                        // line 183
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "rights"), "licence"), "url"), "html", null, true);
                        echo "\" alt=\"Resources rights url\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "rights"), "licence"), "url"), "html", null, true);
                        echo "</a>
                                    </div>
                                ";
                    }
                    // line 186
                    echo "                            ";
                }
                // line 187
                echo "                        ";
            }
            // line 188
            echo "                        <div class=\"r_cost r_meta_item\">
                            <strong class=\"r_term\">Cost:</strong> ";
            // line 189
            if (($this->getAttribute($this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "rights"), "cost") > 0)) {
                echo "Yes";
            } else {
                echo "No";
            }
            // line 190
            echo "                        </div>
                    ";
        }
        // line 192
        echo "                    
                        <div class=\"r_sen r_meta_item\">
                            <strong class=\"r_term\">Special Needs:</strong>
                            <br />
                            ";
        // line 196
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "special_needs"), "access_mode")) > 0)) {
            // line 197
            echo "                              Access Mode
                              ";
            // line 198
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "special_needs"), "access_mode"));
            foreach ($context['_seq'] as $context["_key"] => $context["resourceSenAccessMode"]) {
                // line 199
                echo "                                      ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resourceSenAccessMode"]) ? $context["resourceSenAccessMode"] : null), "title"), "html", null, true);
                echo " <br />
                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resourceSenAccessMode'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 201
            echo "                            ";
        }
        // line 202
        echo "
                            ";
        // line 203
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "special_needs"), "adaptation_media_type")) > 0)) {
            // line 204
            echo "                                Adaptation Media Type
                                ";
            // line 205
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "special_needs"), "adaptation_media_type"));
            foreach ($context['_seq'] as $context["_key"] => $context["resourceSenAdaptationMediaType"]) {
                // line 206
                echo "                                        ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resourceSenAdaptationMediaType"]) ? $context["resourceSenAdaptationMediaType"] : null), "title"), "html", null, true);
                echo " <br />
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resourceSenAdaptationMediaType'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 208
            echo "                            ";
        }
        // line 209
        echo "
                            ";
        // line 210
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "special_needs"), "adaptation_type")) > 0)) {
            // line 211
            echo "                                Adaptation Type
                                ";
            // line 212
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "special_needs"), "adaptation_type"));
            foreach ($context['_seq'] as $context["_key"] => $context["resourceSenAdaptationType"]) {
                // line 213
                echo "                                        ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resourceSenAdaptationType"]) ? $context["resourceSenAdaptationType"] : null), "title"), "html", null, true);
                echo " <br />
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resourceSenAdaptationType'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 215
            echo "                            ";
        }
        // line 216
        echo "
                            ";
        // line 217
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "special_needs"), "control_flexibility")) > 0)) {
            // line 218
            echo "                                Control Flexibility
                                ";
            // line 219
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "special_needs"), "control_flexibility"));
            foreach ($context['_seq'] as $context["_key"] => $context["resourceSenControlFlexibility"]) {
                // line 220
                echo "                                        ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resourceSenControlFlexibility"]) ? $context["resourceSenControlFlexibility"] : null), "title"), "html", null, true);
                echo " <br />
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resourceSenControlFlexibility'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 222
            echo "                            ";
        }
        echo " 

                            ";
        // line 224
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "special_needs"), "display_transformability")) > 0)) {
            // line 225
            echo "                                Display Transformability
                                ";
            // line 226
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "special_needs"), "display_transformability"));
            foreach ($context['_seq'] as $context["_key"] => $context["resourceSenDisplayTransformability"]) {
                // line 227
                echo "                                        ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resourceSenDisplayTransformability"]) ? $context["resourceSenDisplayTransformability"] : null), "title"), "html", null, true);
                echo " <br />
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resourceSenDisplayTransformability'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 229
            echo "                            ";
        }
        // line 230
        echo "
                            ";
        // line 231
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "special_needs"), "hazard")) > 0)) {
            // line 232
            echo "                                Hazard
                                ";
            // line 233
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "special_needs"), "hazard"));
            foreach ($context['_seq'] as $context["_key"] => $context["resourceSenHazard"]) {
                // line 234
                echo "                                        ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resourceSenHazard"]) ? $context["resourceSenHazard"] : null), "title"), "html", null, true);
                echo " <br />
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resourceSenHazard'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 236
            echo "                            ";
        }
        // line 237
        echo "                            <br />
                            ";
        // line 238
        if ($this->getAttribute($this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "special_needs"), "educational_complexity")) {
            // line 239
            echo "                                  Educational Complexity 
                                  ";
            // line 240
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "special_needs"), "educational_complexity"), "title"), "html", null, true);
            echo "
                            ";
        }
        // line 242
        echo "

                        </div>
                    
                    
            </div>
        </div>
        <div class=\"medium-12 columns\">
            <a href=\"#\" class=\"r_closefull-button\">Close full description <span class=\"icon icon-caret-up\"></span></a>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "resource.widget.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  771 => 242,  766 => 240,  763 => 239,  761 => 238,  758 => 237,  755 => 236,  746 => 234,  742 => 233,  739 => 232,  737 => 231,  734 => 230,  731 => 229,  722 => 227,  718 => 226,  715 => 225,  713 => 224,  707 => 222,  698 => 220,  694 => 219,  691 => 218,  689 => 217,  686 => 216,  683 => 215,  674 => 213,  670 => 212,  667 => 211,  665 => 210,  662 => 209,  659 => 208,  650 => 206,  646 => 205,  643 => 204,  641 => 203,  638 => 202,  635 => 201,  626 => 199,  622 => 198,  619 => 197,  617 => 196,  611 => 192,  607 => 190,  601 => 189,  598 => 188,  595 => 187,  592 => 186,  584 => 183,  581 => 182,  578 => 181,  576 => 180,  570 => 177,  567 => 176,  565 => 175,  562 => 174,  560 => 173,  557 => 172,  553 => 170,  536 => 168,  532 => 166,  529 => 165,  512 => 164,  508 => 162,  506 => 161,  503 => 160,  497 => 158,  495 => 157,  487 => 152,  479 => 146,  470 => 142,  455 => 141,  440 => 139,  435 => 136,  426 => 134,  422 => 133,  416 => 129,  414 => 128,  411 => 127,  408 => 126,  401 => 122,  395 => 118,  392 => 117,  389 => 116,  384 => 113,  375 => 111,  371 => 110,  364 => 107,  361 => 106,  358 => 105,  355 => 104,  353 => 103,  349 => 101,  347 => 100,  344 => 99,  338 => 96,  335 => 95,  332 => 94,  326 => 91,  323 => 90,  321 => 89,  318 => 88,  314 => 86,  312 => 85,  309 => 84,  292 => 83,  282 => 82,  263 => 81,  255 => 77,  233 => 73,  227 => 72,  220 => 71,  203 => 70,  197 => 66,  193 => 65,  181 => 55,  171 => 52,  158 => 50,  154 => 49,  151 => 48,  147 => 47,  136 => 43,  125 => 35,  122 => 34,  104 => 31,  100 => 29,  97 => 28,  80 => 27,  74 => 24,  69 => 22,  66 => 21,  62 => 19,  53 => 17,  49 => 15,  40 => 13,  38 => 12,  33 => 9,  31 => 8,  24 => 3,  22 => 2,  19 => 1,);
    }
}
