<?php

/* Block/logo.twig */
class __TwigTemplate_f7e4bbf19d32077f03b732d235b8f4f5c444ec242eb4d6db6f92023fff9744f9 extends Twig_Template
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
        echo "             <div class=\"header_logo_area\">
                <p class=\"copy\">くらしを楽しむライフスタイルグッズ</p>
                <h1 class=\"header_logo\"><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getUrl("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "shop_name", array()), "html", null, true);
        echo "</a></h1>
            </div>
";
    }

    public function getTemplateName()
    {
        return "Block/logo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 24,  19 => 22,);
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
/*              <div class="header_logo_area">*/
/*                 <p class="copy">くらしを楽しむライフスタイルグッズ</p>*/
/*                 <h1 class="header_logo"><a href="{{ url('homepage') }}">{{ BaseInfo.shop_name }}</a></h1>*/
/*             </div>*/
/* */
