<?php

/* Block/news.twig */
class __TwigTemplate_33fb2ecf582ccdd7ce93e7471d78472f777330c53ee323113ef7ad32c5ebb558 extends Twig_Template
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
        echo "        <div class=\"col-sm-9 news_contents\">
            <!-- ▼news_area▼ -->
            <div id=\"news_area\">
                <h2 class=\"heading01\">新着情報</h2>
                <div class=\"accordion\">
                    <div class=\"newslist\">

                        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["NewsList"]) ? $context["NewsList"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["News"]) {
            // line 30
            echo "                        <dl>
                            <dt>
                                <span class=\"date\">";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["News"], "date", array()), "Y.m.d"), "html", null, true);
            echo "</span>
                                <span class=\"news_title\">
                                    ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["News"], "title", array()), "html", null, true);
            echo "
                                </span>
                                <span class=\"angle-circle\"><svg class=\"cb cb-angle-down\"><use xlink:href=\"#cb-angle-down\" /></svg></span>
                            </dt>
                            <dd>";
            // line 38
            echo nl2br($this->getAttribute($context["News"], "comment", array()));
            echo "
                            ";
            // line 39
            if ($this->getAttribute($context["News"], "url", array())) {
                echo "<br><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["News"], "url", array()), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($context["News"], "link_method", array()) == "1")) {
                    echo "target=\"_blank\"";
                }
                echo ">
                            詳しくはこちら
                            </a>";
            }
            // line 42
            echo "                            </dd>
                        </dl>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['News'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "
                    </div>
                </div>
            </div>
            <!-- ▲news_area▲ -->
        </div>
";
    }

    public function getTemplateName()
    {
        return "Block/news.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 45,  64 => 42,  52 => 39,  48 => 38,  41 => 34,  36 => 32,  32 => 30,  28 => 29,  19 => 22,);
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
/*         <div class="col-sm-9 news_contents">*/
/*             <!-- ▼news_area▼ -->*/
/*             <div id="news_area">*/
/*                 <h2 class="heading01">新着情報</h2>*/
/*                 <div class="accordion">*/
/*                     <div class="newslist">*/
/* */
/*                         {% for News in NewsList %}*/
/*                         <dl>*/
/*                             <dt>*/
/*                                 <span class="date">{{ News.date|date("Y.m.d") }}</span>*/
/*                                 <span class="news_title">*/
/*                                     {{ News.title }}*/
/*                                 </span>*/
/*                                 <span class="angle-circle"><svg class="cb cb-angle-down"><use xlink:href="#cb-angle-down" /></svg></span>*/
/*                             </dt>*/
/*                             <dd>{{ News.comment|raw|nl2br}}*/
/*                             {% if News.url %}<br><a href="{{ News.url }}" {% if News.link_method == '1' %}target="_blank"{% endif %}>*/
/*                             詳しくはこちら*/
/*                             </a>{% endif %}*/
/*                             </dd>*/
/*                         </dl>*/
/*                         {% endfor %}*/
/* */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <!-- ▲news_area▲ -->*/
/*         </div>*/
/* */
