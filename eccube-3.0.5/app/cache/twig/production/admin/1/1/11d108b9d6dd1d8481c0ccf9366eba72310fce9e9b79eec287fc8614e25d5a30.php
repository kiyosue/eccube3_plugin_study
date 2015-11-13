<?php

/* nav.twig */
class __TwigTemplate_395ea2b4cad3a60ef1279fcd03b25e0c52fff20a3774039f0b5bbac37d9dc619 extends Twig_Template
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
        // line 22
        echo "
";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "nav", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["level1"]) {
            // line 24
            echo "    <li class=\"";
            if (($this->getAttribute($this->env->getExtension('eccube')->getActiveMenus((isset($context["menus"]) ? $context["menus"] : null)), 0, array(), "array") == $this->getAttribute($context["level1"], "id", array()))) {
                echo "active";
            }
            echo "\">
        ";
            // line 25
            if (($this->getAttribute($context["level1"], "has_child", array(), "any", true, true) && ($this->getAttribute($context["level1"], "has_child", array()) == true))) {
                // line 26
                echo "            <a class=\"toggle\">
                <svg class=\"cb ";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["level1"], "icon", array()), "html", null, true);
                echo "\"> <use xlink:href=\"#";
                echo twig_escape_filter($this->env, $this->getAttribute($context["level1"], "icon", array()), "html", null, true);
                echo "\" /></svg>
                ";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["level1"], "name", array()), "html", null, true);
                echo "
                <svg class=\"cb cb-angle-down\"> <use xlink:href=\"#cb-angle-down\" /></svg>
            </a>
            <ul ";
                // line 31
                if (($this->getAttribute($this->env->getExtension('eccube')->getActiveMenus((isset($context["menus"]) ? $context["menus"] : null)), 0, array(), "array") == $this->getAttribute($context["level1"], "id", array()))) {
                    echo "class=\"active\" style=\"display: block;\"";
                }
                echo ">
                ";
                // line 32
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["level1"], "child", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["level2"]) {
                    // line 33
                    echo "                    <li class=\"";
                    if (($this->getAttribute($this->env->getExtension('eccube')->getActiveMenus((isset($context["menus"]) ? $context["menus"] : null)), 1, array(), "array") == $this->getAttribute($context["level2"], "id", array()))) {
                        echo "active";
                    }
                    echo "\">
                        ";
                    // line 34
                    if (($this->getAttribute($context["level2"], "has_child", array(), "any", true, true) && ($this->getAttribute($context["level2"], "has_child", array()) == true))) {
                        // line 35
                        echo "                            <a class=\"toggle\">
                                ";
                        // line 36
                        echo twig_escape_filter($this->env, $this->getAttribute($context["level2"], "name", array()), "html", null, true);
                        echo "
                                <svg class=\"cb cb-angle-down\"> <use xlink:href=\"#cb-angle-down\" /></svg>
                            </a>
                            <ul ";
                        // line 39
                        if (($this->getAttribute($this->env->getExtension('eccube')->getActiveMenus((isset($context["menus"]) ? $context["menus"] : null)), 1, array(), "array") == $this->getAttribute($context["level2"], "id", array()))) {
                            echo "class=\"active\" style=\"display: block;\"";
                        }
                        echo ">
                                ";
                        // line 40
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["level2"], "child", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["level3"]) {
                            // line 41
                            echo "                                    <li class=\"";
                            if (($this->getAttribute($this->env->getExtension('eccube')->getActiveMenus((isset($context["menus"]) ? $context["menus"] : null)), 2, array(), "array") == $this->getAttribute($context["level3"], "id", array()))) {
                                echo "active";
                            }
                            echo "\">
                                        <a href=\"";
                            // line 42
                            echo $this->env->getExtension('routing')->getUrl($this->getAttribute($context["level3"], "url", array()));
                            echo "\">
                                            ";
                            // line 43
                            echo twig_escape_filter($this->env, $this->getAttribute($context["level3"], "name", array()), "html", null, true);
                            echo "
                                        </a>
                                    </li>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level3'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 47
                        echo "                            </ul>
                        ";
                    } else {
                        // line 49
                        echo "                            <a href=\"";
                        echo $this->env->getExtension('routing')->getUrl($this->getAttribute($context["level2"], "url", array()));
                        echo "\">
                                ";
                        // line 50
                        echo twig_escape_filter($this->env, $this->getAttribute($context["level2"], "name", array()), "html", null, true);
                        echo "
                            </a>
                        ";
                    }
                    // line 53
                    echo "                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "            </ul>
        ";
            } else {
                // line 57
                echo "            ";
                if ($this->getAttribute($context["level1"], "url", array(), "any", true, true)) {
                    // line 58
                    echo "                <a href=\"";
                    echo $this->env->getExtension('routing')->getUrl($this->getAttribute($context["level1"], "url", array()));
                    echo "\">
                    ";
                    // line 59
                    echo twig_escape_filter($this->env, $this->getAttribute($context["level1"], "name", array()), "html", null, true);
                    echo "
                </a>
            ";
                } else {
                    // line 62
                    echo "                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["level1"], "name", array()), "html", null, true);
                    echo "
            ";
                }
                // line 64
                echo "        ";
            }
            // line 65
            echo "    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "nav.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 65,  155 => 64,  149 => 62,  143 => 59,  138 => 58,  135 => 57,  131 => 55,  124 => 53,  118 => 50,  113 => 49,  109 => 47,  99 => 43,  95 => 42,  88 => 41,  84 => 40,  78 => 39,  72 => 36,  69 => 35,  67 => 34,  60 => 33,  56 => 32,  50 => 31,  44 => 28,  38 => 27,  35 => 26,  33 => 25,  26 => 24,  22 => 23,  19 => 22,);
    }
}
/* {#*/
/* This file is part of EC-CUBE*/
/* */
/* Copyright(c) 2000-2015 LOCKON CO.,LTD. All Rights Reserved.*/
/* */
/* http://www.lockon.co.jp/*/
/* */
/* This program is free software; you can redistribute it and/or*/
/* modify it under the terms of the GNU General Public License*/
/* as published by the Free Software Foundation; either version 2*/
/* of the License, or (at your option) any later version.*/
/* */
/* This program is distributed in the hope that it will be useful,*/
/* but WITHOUT ANY WARRANTY; without even the implied warranty of*/
/* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the*/
/* GNU General Public License for more details.*/
/* */
/* You should have received a copy of the GNU General Public License*/
/* along with this program; if not, write to the Free Software*/
/* Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.*/
/* #}*/
/* */
/* {% for level1 in app.config.nav %}*/
/*     <li class="{% if active_menus(menus)[0] == level1.id %}active{% endif %}">*/
/*         {% if level1.has_child is defined and level1.has_child == true %}*/
/*             <a class="toggle">*/
/*                 <svg class="cb {{ level1.icon }}"> <use xlink:href="#{{ level1.icon }}" /></svg>*/
/*                 {{ level1.name }}*/
/*                 <svg class="cb cb-angle-down"> <use xlink:href="#cb-angle-down" /></svg>*/
/*             </a>*/
/*             <ul {% if active_menus(menus)[0] == level1.id %}class="active" style="display: block;"{% endif %}>*/
/*                 {% for level2 in level1.child %}*/
/*                     <li class="{% if active_menus(menus)[1] == level2.id %}active{% endif %}">*/
/*                         {% if level2.has_child is defined and level2.has_child == true %}*/
/*                             <a class="toggle">*/
/*                                 {{ level2.name }}*/
/*                                 <svg class="cb cb-angle-down"> <use xlink:href="#cb-angle-down" /></svg>*/
/*                             </a>*/
/*                             <ul {% if active_menus(menus)[1] == level2.id %}class="active" style="display: block;"{% endif %}>*/
/*                                 {% for level3 in level2.child %}*/
/*                                     <li class="{% if active_menus(menus)[2] == level3.id %}active{% endif %}">*/
/*                                         <a href="{{ url(level3.url) }}">*/
/*                                             {{ level3.name }}*/
/*                                         </a>*/
/*                                     </li>*/
/*                                 {% endfor %}*/
/*                             </ul>*/
/*                         {% else %}*/
/*                             <a href="{{ url(level2.url) }}">*/
/*                                 {{ level2.name }}*/
/*                             </a>*/
/*                         {% endif %}*/
/*                     </li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         {% else %}*/
/*             {% if level1.url is defined %}*/
/*                 <a href="{{ url(level1.url) }}">*/
/*                     {{ level1.name }}*/
/*                 </a>*/
/*             {% else %}*/
/*                 {{ level1.name }}*/
/*             {% endif %}*/
/*         {% endif %}*/
/*     </li>*/
/* {% endfor %}*/
