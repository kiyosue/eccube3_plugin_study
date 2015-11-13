<?php

/* Help/tradelaw.twig */
class __TwigTemplate_4de5ae0b48129f621d9398d52590871881737c257e300b1f6410763f6e8a41cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "Help/tradelaw.twig", 22);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 24
    public function block_main($context, array $blocks = array())
    {
        // line 25
        echo "<div id=\"contents\" class=\"main_only\">
    <div class=\"container-fluid inner no-padding\">
        <div id=\"main\">
            <h1 class=\"page-heading\">特定商取引法に基づく表記</h1>
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-md-10 col-md-offset-1\">
                        <div class=\"dl_table\">

                            ";
        // line 34
        if ($this->getAttribute((isset($context["help"]) ? $context["help"] : null), "law_company", array(), "any", true, true)) {
            // line 35
            echo "                            <dl>
                                <dt>販売業者</dt>
                                <dd>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["help"]) ? $context["help"] : null), "law_company", array()), "html", null, true);
            echo "</dd>
                            </dl>
                            ";
        }
        // line 40
        echo "
                            ";
        // line 41
        if ($this->getAttribute((isset($context["help"]) ? $context["help"] : null), "law_manager", array(), "any", true, true)) {
            // line 42
            echo "                            <dl>
                                <dt>運営責任者</dt>
                                <dd>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["help"]) ? $context["help"] : null), "law_manager", array()), "html", null, true);
            echo "</dd>
                            </dl>
                            ";
        }
        // line 47
        echo "
                            ";
        // line 48
        if ($this->getAttribute((isset($context["help"]) ? $context["help"] : null), "law_zip01", array(), "any", true, true)) {
            // line 49
            echo "                            <dl>
                                <dt>住所</dt>
                                <dd>〒";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["help"]) ? $context["help"] : null), "law_zip01", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["help"]) ? $context["help"] : null), "law_zip02", array()), "html", null, true);
            echo "<br />
                                    ";
            // line 52
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["help"]) ? $context["help"] : null), "law_pref", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["help"]) ? $context["help"] : null), "law_pref", array()), "")) : ("")), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["help"]) ? $context["help"] : null), "law_addr01", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["help"]) ? $context["help"] : null), "law_addr02", array()), "html", null, true);
            echo "
                                </dd>
                            </dl>
                            ";
        }
        // line 56
        echo "
                            ";
        // line 57
        if ($this->getAttribute((isset($context["help"]) ? $context["help"] : null), "law_tel01", array(), "any", true, true)) {
            // line 58
            echo "                            <dl>
                                <dt>電話番号</dt>
                                <dd>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["help"]) ? $context["help"] : null), "law_tel01", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["help"]) ? $context["help"] : null), "law_tel02", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["help"]) ? $context["help"] : null), "law_tel03", array()), "html", null, true);
            echo "</dd>
                            </dl>
                            ";
        }
        // line 63
        echo "
                            ";
        // line 64
        if (($this->getAttribute((isset($context["help"]) ? $context["help"] : null), "law_fax01", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["help"]) ? $context["help"] : null), "law_fax01", array())))) {
            // line 65
            echo "                            <dl>
                                <dt>FAX番号</dt>
                                <dd>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["help"]) ? $context["help"] : null), "law_fax01", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["help"]) ? $context["help"] : null), "law_fax02", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["help"]) ? $context["help"] : null), "law_fax03", array()), "html", null, true);
            echo "</dd>
                            </dl>
                            ";
        }
        // line 70
        echo "
                            ";
        // line 71
        if ($this->getAttribute((isset($context["help"]) ? $context["help"] : null), "law_email", array(), "any", true, true)) {
            // line 72
            echo "                            <dl>
                                <dt>メールアドレス</dt>
                                <dd><a href=\"mailto:";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["help"]) ? $context["help"] : null), "law_email", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["help"]) ? $context["help"] : null), "law_email", array()), "html", null, true);
            echo "</a></dd>
                            </dl>
                            ";
        }
        // line 77
        echo "
                            ";
        // line 78
        if ($this->getAttribute((isset($context["help"]) ? $context["help"] : null), "law_url", array(), "any", true, true)) {
            // line 79
            echo "                            <dl>
                                <dt>URL</dt>
                                <dd><a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["help"]) ? $context["help"] : null), "law_url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["help"]) ? $context["help"] : null), "law_url", array()), "html", null, true);
            echo "</a></dd>
                            </dl>
                            ";
        }
        // line 84
        echo "
                            ";
        // line 85
        if ($this->getAttribute((isset($context["help"]) ? $context["help"] : null), "law_term01", array(), "any", true, true)) {
            // line 86
            echo "                            <dl>
                                <dt>商品以外の必要代金</dt>
                                <dd>";
            // line 88
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["help"]) ? $context["help"] : null), "law_term01", array()), "html", null, true));
            echo "</dd>
                            </dl>
                            ";
        }
        // line 91
        echo "
                            ";
        // line 92
        if ($this->getAttribute((isset($context["help"]) ? $context["help"] : null), "law_term02", array(), "any", true, true)) {
            // line 93
            echo "                            <dl>
                                <dt>注文方法</dt>
                                <dd>";
            // line 95
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["help"]) ? $context["help"] : null), "law_term02", array()), "html", null, true));
            echo "</dd>
                            </dl>
                            ";
        }
        // line 98
        echo "
                            ";
        // line 99
        if ($this->getAttribute((isset($context["help"]) ? $context["help"] : null), "law_term03", array(), "any", true, true)) {
            // line 100
            echo "                            <dl>
                                <dt>支払方法</dt>
                                <dd>";
            // line 102
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["help"]) ? $context["help"] : null), "law_term03", array()), "html", null, true));
            echo "</dd>
                            </dl>
                            ";
        }
        // line 105
        echo "
                            ";
        // line 106
        if ($this->getAttribute((isset($context["help"]) ? $context["help"] : null), "law_term04", array(), "any", true, true)) {
            // line 107
            echo "                            <dl>
                                <dt>支払期限</dt>
                                <dd>";
            // line 109
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["help"]) ? $context["help"] : null), "law_term04", array()), "html", null, true));
            echo "</dd>
                            </dl>
                            ";
        }
        // line 112
        echo "
                            ";
        // line 113
        if ($this->getAttribute((isset($context["help"]) ? $context["help"] : null), "law_term05", array(), "any", true, true)) {
            // line 114
            echo "                            <dl>
                                <dt>引渡し時期</dt>
                                <dd>";
            // line 116
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["help"]) ? $context["help"] : null), "law_term05", array()), "html", null, true));
            echo "</dd>
                            </dl>
                            ";
        }
        // line 119
        echo "
                            ";
        // line 120
        if ($this->getAttribute((isset($context["help"]) ? $context["help"] : null), "law_term06", array(), "any", true, true)) {
            // line 121
            echo "                            <dl>
                                <dt>返品・交換について</dt>
                                <dd>";
            // line 123
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["help"]) ? $context["help"] : null), "law_term06", array()), "html", null, true));
            echo "</dd>
                            </dl>
                            ";
        }
        // line 126
        echo "                        </div>
                    </div><!-- /.col -->
                </div><!-- /.row -->

            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "Help/tradelaw.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 126,  249 => 123,  245 => 121,  243 => 120,  240 => 119,  234 => 116,  230 => 114,  228 => 113,  225 => 112,  219 => 109,  215 => 107,  213 => 106,  210 => 105,  204 => 102,  200 => 100,  198 => 99,  195 => 98,  189 => 95,  185 => 93,  183 => 92,  180 => 91,  174 => 88,  170 => 86,  168 => 85,  165 => 84,  157 => 81,  153 => 79,  151 => 78,  148 => 77,  140 => 74,  136 => 72,  134 => 71,  131 => 70,  121 => 67,  117 => 65,  115 => 64,  112 => 63,  102 => 60,  98 => 58,  96 => 57,  93 => 56,  84 => 52,  78 => 51,  74 => 49,  72 => 48,  69 => 47,  63 => 44,  59 => 42,  57 => 41,  54 => 40,  48 => 37,  44 => 35,  42 => 34,  31 => 25,  28 => 24,  11 => 22,);
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
/* {% extends 'default_frame.twig' %}*/
/* */
/* {% block main %}*/
/* <div id="contents" class="main_only">*/
/*     <div class="container-fluid inner no-padding">*/
/*         <div id="main">*/
/*             <h1 class="page-heading">特定商取引法に基づく表記</h1>*/
/*             <div class="container-fluid">*/
/*                 <div class="row">*/
/*                     <div class="col-md-10 col-md-offset-1">*/
/*                         <div class="dl_table">*/
/* */
/*                             {% if help.law_company is defined %}*/
/*                             <dl>*/
/*                                 <dt>販売業者</dt>*/
/*                                 <dd>{{ help.law_company }}</dd>*/
/*                             </dl>*/
/*                             {% endif %}*/
/* */
/*                             {% if help.law_manager is defined %}*/
/*                             <dl>*/
/*                                 <dt>運営責任者</dt>*/
/*                                 <dd>{{ help.law_manager }}</dd>*/
/*                             </dl>*/
/*                             {% endif %}*/
/* */
/*                             {% if help.law_zip01 is defined %}*/
/*                             <dl>*/
/*                                 <dt>住所</dt>*/
/*                                 <dd>〒{{ help.law_zip01 }}-{{ help.law_zip02 }}<br />*/
/*                                     {{ help.law_pref|default('') }}{{ help.law_addr01 }}{{ help.law_addr02 }}*/
/*                                 </dd>*/
/*                             </dl>*/
/*                             {% endif %}*/
/* */
/*                             {% if help.law_tel01 is defined %}*/
/*                             <dl>*/
/*                                 <dt>電話番号</dt>*/
/*                                 <dd>{{ help.law_tel01 }}-{{ help.law_tel02 }}-{{ help.law_tel03 }}</dd>*/
/*                             </dl>*/
/*                             {% endif %}*/
/* */
/*                             {% if help.law_fax01 is defined and help.law_fax01 is not empty %}*/
/*                             <dl>*/
/*                                 <dt>FAX番号</dt>*/
/*                                 <dd>{{ help.law_fax01 }}-{{ help.law_fax02 }}-{{ help.law_fax03 }}</dd>*/
/*                             </dl>*/
/*                             {% endif %}*/
/* */
/*                             {% if help.law_email is defined %}*/
/*                             <dl>*/
/*                                 <dt>メールアドレス</dt>*/
/*                                 <dd><a href="mailto:{{ help.law_email }}">{{ help.law_email }}</a></dd>*/
/*                             </dl>*/
/*                             {% endif %}*/
/* */
/*                             {% if help.law_url is defined %}*/
/*                             <dl>*/
/*                                 <dt>URL</dt>*/
/*                                 <dd><a href="{{ help.law_url }}">{{ help.law_url }}</a></dd>*/
/*                             </dl>*/
/*                             {% endif %}*/
/* */
/*                             {% if help.law_term01 is defined %}*/
/*                             <dl>*/
/*                                 <dt>商品以外の必要代金</dt>*/
/*                                 <dd>{{ help.law_term01|nl2br }}</dd>*/
/*                             </dl>*/
/*                             {% endif %}*/
/* */
/*                             {% if help.law_term02 is defined %}*/
/*                             <dl>*/
/*                                 <dt>注文方法</dt>*/
/*                                 <dd>{{ help.law_term02|nl2br }}</dd>*/
/*                             </dl>*/
/*                             {% endif %}*/
/* */
/*                             {% if help.law_term03 is defined %}*/
/*                             <dl>*/
/*                                 <dt>支払方法</dt>*/
/*                                 <dd>{{ help.law_term03|nl2br }}</dd>*/
/*                             </dl>*/
/*                             {% endif %}*/
/* */
/*                             {% if help.law_term04 is defined %}*/
/*                             <dl>*/
/*                                 <dt>支払期限</dt>*/
/*                                 <dd>{{ help.law_term04|nl2br }}</dd>*/
/*                             </dl>*/
/*                             {% endif %}*/
/* */
/*                             {% if help.law_term05 is defined %}*/
/*                             <dl>*/
/*                                 <dt>引渡し時期</dt>*/
/*                                 <dd>{{ help.law_term05|nl2br }}</dd>*/
/*                             </dl>*/
/*                             {% endif %}*/
/* */
/*                             {% if help.law_term06 is defined %}*/
/*                             <dl>*/
/*                                 <dt>返品・交換について</dt>*/
/*                                 <dd>{{ help.law_term06|nl2br }}</dd>*/
/*                             </dl>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     </div><!-- /.col -->*/
/*                 </div><!-- /.row -->*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
