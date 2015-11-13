<?php

/* Cart/index.twig */
class __TwigTemplate_c1046de31204ebd7a6385143b2671706db94ea487f4ceef53ae4c3007e66b480 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "Cart/index.twig", 22);
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
        // line 24
        $context["body_class"] = "cart_page";
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_main($context, array $blocks = array())
    {
        // line 27
        echo "    <h1 class=\"page-heading\">ショッピングカート</h1>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-10 col-md-offset-1\">
                ";
        // line 31
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 32
            echo "                <div class=\"flowline step3\">
                ";
        } else {
            // line 34
            echo "                <div class=\"flowline step4\">
                ";
        }
        // line 36
        echo "                    <ul class=\"clearfix\">
                        <li class=\"active\"><span class=\"flow_number\">1</span><br>カートの商品</li>
                    ";
        // line 38
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 39
            echo "                        <li><span class=\"flow_number\">2</span><br>ご注文内容確認</li>
                        <li><span class=\"flow_number\">3</span><br>完了</li>
                    ";
        } else {
            // line 42
            echo "                        <li><span class=\"flow_number\">2</span><br>お客様情報</li>
                        <li><span class=\"flow_number\">3</span><br>ご注文内容確認</li>
                        <li><span class=\"flow_number\">4</span><br>完了</li>
                    ";
        }
        // line 46
        echo "                    </ul>
                </div>

                ";
        // line 49
        $context["productStr"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "eccube.front.request.product"), "method");
        // line 50
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "eccube.front.request.error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 51
            echo "                    ";
            if ($this->getAttribute((isset($context["productStr"]) ? $context["productStr"] : null), 0, array(), "array", true, true)) {
                // line 52
                echo "                    <div class=\"message\">
                        <p class=\"errormsg bg-danger\">
                            <svg class=\"cb cb-warning\"><use xlink:href=\"#cb-warning\" /></svg>
                            ";
                // line 55
                echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["error"], array("%product%" => $this->getAttribute((isset($context["productStr"]) ? $context["productStr"] : null), 0, array(), "array"))), "html", null, true));
                echo "
                        </p>
                    </div>
                    ";
            } else {
                // line 59
                echo "                    <div class=\"message\">
                        <p class=\"errormsg bg-danger\">
                            <svg class=\"cb cb-warning\"><use xlink:href=\"#cb-warning\" /></svg>";
                // line 61
                echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["error"]), "html", null, true));
                echo "
                        </p>
                    </div>
                    ";
            }
            // line 65
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "eccube.front.cart.error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 67
            echo "                    <div class=\"message\">
                        <p class=\"errormsg bg-danger\">
                            <svg class=\"cb cb-warning\"><use xlink:href=\"#cb-warning\" /></svg>";
            // line 69
            echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["error"]), "html", null, true));
            echo "
                        </p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "
                ";
        // line 74
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["Cart"]) ? $context["Cart"] : null), "CartItems", array())) > 0)) {
            // line 75
            echo "                <form name=\"form\" id=\"form_cart\" method=\"post\" action=\"";
            echo $this->env->getExtension('routing')->getUrl("cart");
            echo "\">
                    <p class=\"message\">
                        商品の合計金額は「<strong>";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute((isset($context["Cart"]) ? $context["Cart"] : null), "total_price", array())), "html", null, true);
            echo "</strong>」です。
                        ";
            // line 78
            if (($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "delivery_free_amount", array()) && $this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "delivery_free_quantity", array()))) {
                // line 79
                echo "                            <br />
                            ";
                // line 80
                if ((isset($context["is_delivery_free"]) ? $context["is_delivery_free"] : null)) {
                    // line 81
                    echo "                                現在送料無料です。
                            ";
                } else {
                    // line 83
                    echo "                                あと「<strong>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter((isset($context["least"]) ? $context["least"] : null)), "html", null, true);
                    echo "</strong>」または「<strong>";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["quantity"]) ? $context["quantity"] : null)), "html", null, true);
                    echo "個</strong>」のお買い上げで<strong class=\"text-primary\">送料無料</strong>になります。
                            ";
                }
                // line 85
                echo "                        ";
            } elseif ($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "delivery_free_amount", array())) {
                // line 86
                echo "                            <br />
                            ";
                // line 87
                if ((isset($context["is_delivery_free"]) ? $context["is_delivery_free"] : null)) {
                    // line 88
                    echo "                                現在送料無料です。
                            ";
                } else {
                    // line 90
                    echo "                                あと「<strong>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter((isset($context["least"]) ? $context["least"] : null)), "html", null, true);
                    echo "</strong>」のお買い上げで<strong class=\"text-primary\">送料無料</strong>になります。
                            ";
                }
                // line 92
                echo "                        ";
            } elseif ($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "delivery_free_quantity", array())) {
                // line 93
                echo "                            <br />
                            ";
                // line 94
                if ((isset($context["is_delivery_free"]) ? $context["is_delivery_free"] : null)) {
                    // line 95
                    echo "                                現在送料無料です。
                            ";
                } else {
                    // line 97
                    echo "                                あと「<strong>";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["quantity"]) ? $context["quantity"] : null)), "html", null, true);
                    echo "個</strong>」のお買い上げで<strong class=\"text-primary\">送料無料</strong>になります。
                            ";
                }
                // line 99
                echo "                        ";
            }
            // line 100
            echo "                    </p>
                    <div class=\"cart_item table\">
                        <div class=\"thead\">
                            <ol>
                                <li>削除</li>
                                <li>商品内容</li>
                                <li>数量</li>
                                <li>小計</li>
                            </ol>
                        </div>
                        <div class=\"tbody\">

                            ";
            // line 112
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Cart"]) ? $context["Cart"] : null), "CartItems", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["CartItem"]) {
                // line 113
                echo "                                ";
                $context["ProductClass"] = $this->getAttribute($context["CartItem"], "Object", array());
                // line 114
                echo "                                ";
                $context["Product"] = $this->getAttribute((isset($context["ProductClass"]) ? $context["ProductClass"] : null), "Product", array());
                // line 115
                echo "
                                <div class=\"item_box tr\">
                                    <div class=\"icon_edit td\">
                                        <a href=\"";
                // line 118
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("cart_remove", array("productClassId" => $this->getAttribute((isset($context["ProductClass"]) ? $context["ProductClass"] : null), "id", array()))), "html", null, true);
                echo "\" ";
                echo $this->env->getExtension('eccube')->getCsrfTokenForAnchor();
                echo " data-method=\"put\" data-message=\"カートから商品を削除してもよろしいですか?\">
                                            <svg class=\"cb cb-close\"><use xlink:href=\"#cb-close\" /></svg>
                                        </a>
                                    </div>
                                    <div class=\"td table\">
                                        <div class=\"item_photo\">
                                            <a target=\"_blank\" href=\"";
                // line 124
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("product_detail", array("id" => $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "id", array()))), "html", null, true);
                echo "\">
                                                <img src=\"";
                // line 125
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "image_save_urlpath", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getNoImageProduct($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "MainListImage", array())), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "name", array()), "html", null, true);
                echo "\" />
                                            </a>
                                        </div>
                                        <dl class=\"item_detail\">
                                            <dt class=\"item_name text-default\">
                                                <a target=\"_blank\" href=\"";
                // line 130
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("product_detail", array("id" => $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "name", array()), "html", null, true);
                echo "</a>
                                            </dt>
                                            <dd class=\"item_pattern small\">
                                                ";
                // line 133
                if (($this->getAttribute((isset($context["ProductClass"]) ? $context["ProductClass"] : null), "ClassCategory1", array()) && $this->getAttribute($this->getAttribute((isset($context["ProductClass"]) ? $context["ProductClass"] : null), "ClassCategory1", array()), "id", array()))) {
                    // line 134
                    echo "                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ProductClass"]) ? $context["ProductClass"] : null), "ClassCategory1", array()), "ClassName", array()), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ProductClass"]) ? $context["ProductClass"] : null), "ClassCategory1", array()), "html", null, true);
                    echo "
                                                ";
                }
                // line 136
                echo "                                                ";
                if (($this->getAttribute((isset($context["ProductClass"]) ? $context["ProductClass"] : null), "ClassCategory2", array()) && $this->getAttribute($this->getAttribute((isset($context["ProductClass"]) ? $context["ProductClass"] : null), "ClassCategory2", array()), "id", array()))) {
                    // line 137
                    echo "                                                    <br>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ProductClass"]) ? $context["ProductClass"] : null), "ClassCategory2", array()), "ClassName", array()), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ProductClass"]) ? $context["ProductClass"] : null), "ClassCategory2", array()), "html", null, true);
                    echo "
                                                ";
                }
                // line 139
                echo "                                            </dd>
                                            <dd class=\"item_price\">￥";
                // line 140
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["CartItem"], "price", array())), "html", null, true);
                echo "</dd>
                                            <dd class=\"item_subtotal\">小計：￥";
                // line 141
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["CartItem"], "total_price", array())), "html", null, true);
                echo "</dd>
                                        </dl>
                                    </div>
                                    <div class=\"item_quantity td\">
                                        ";
                // line 145
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["CartItem"], "quantity", array())), "html", null, true);
                echo "
                                        <ul>
                                            <li>
                                                ";
                // line 148
                if (($this->getAttribute($context["CartItem"], "quantity", array()) > 1)) {
                    // line 149
                    echo "                                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("cart_down", array("productClassId" => $this->getAttribute((isset($context["ProductClass"]) ? $context["ProductClass"] : null), "id", array()))), "html", null, true);
                    echo "\" ";
                    echo $this->env->getExtension('eccube')->getCsrfTokenForAnchor();
                    echo " data-method=\"put\" data-confirm=\"false\"><svg class=\"cb cb-minus\"><use xlink:href=\"#cb-minus\" /></svg></a>
                                                ";
                } else {
                    // line 151
                    echo "                                                    <span><svg class=\"cb cb-minus\"><use xlink:href=\"#cb-minus\" /></svg></span>
                                                ";
                }
                // line 153
                echo "                                            </li>
                                            <li>
                                                <a href=\"";
                // line 155
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("cart_up", array("productClassId" => $this->getAttribute((isset($context["ProductClass"]) ? $context["ProductClass"] : null), "id", array()))), "html", null, true);
                echo "\" ";
                echo $this->env->getExtension('eccube')->getCsrfTokenForAnchor();
                echo " data-method=\"put\" data-confirm=\"false\"><svg class=\"cb cb-plus\"><use xlink:href=\"#cb-plus\" /></svg></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"item_subtotal td\">￥";
                // line 159
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["CartItem"], "total_price", array())), "html", null, true);
                echo "</div>
                                </div><!--/item_box-->
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['CartItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 162
            echo "
                        </div>
                    </div><!--/cart_item-->

                    <div class=\"total_box\">
                        <dl class=\"total_price\">
                            <dt>合計：</dt>
                            <dd class=\"text-primary\">￥";
            // line 169
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["Cart"]) ? $context["Cart"] : null), "total_price", array())), "html", null, true);
            echo "</dd>
                        </dl>
                        <div class=\"btn_group\">

                            <p>
                                <a href=\"";
            // line 174
            echo $this->env->getExtension('routing')->getPath("cart_buystep");
            echo "\" class=\"btn btn-primary btn-block\">レジに進む</a>
                            </p>
                            <p>
                                <a href=\"";
            // line 177
            echo $this->env->getExtension('routing')->getUrl("top");
            echo "\" class=\"btn btn-info btn-block\">お買い物を続ける</a>
                            </p>
                        </div>
                    </div>

                </form>
                ";
        } else {
            // line 184
            echo "                <div class=\"message\">
                    <p class=\"errormsg bg-danger\">
                        <svg class=\"cb cb-warning\"><use xlink:href=\"#cb-warning\" /></svg>現在カート内に商品はございません。
                    </p>
                </div>
                ";
        }
        // line 190
        echo "
            </div><!-- /.col -->
        </div><!-- /.row -->

    </div>
";
    }

    public function getTemplateName()
    {
        return "Cart/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 190,  377 => 184,  367 => 177,  361 => 174,  353 => 169,  344 => 162,  335 => 159,  326 => 155,  322 => 153,  318 => 151,  310 => 149,  308 => 148,  302 => 145,  295 => 141,  291 => 140,  288 => 139,  280 => 137,  277 => 136,  269 => 134,  267 => 133,  259 => 130,  247 => 125,  243 => 124,  232 => 118,  227 => 115,  224 => 114,  221 => 113,  217 => 112,  203 => 100,  200 => 99,  194 => 97,  190 => 95,  188 => 94,  185 => 93,  182 => 92,  176 => 90,  172 => 88,  170 => 87,  167 => 86,  164 => 85,  156 => 83,  152 => 81,  150 => 80,  147 => 79,  145 => 78,  141 => 77,  135 => 75,  133 => 74,  130 => 73,  120 => 69,  116 => 67,  111 => 66,  105 => 65,  98 => 61,  94 => 59,  87 => 55,  82 => 52,  79 => 51,  74 => 50,  72 => 49,  67 => 46,  61 => 42,  56 => 39,  54 => 38,  50 => 36,  46 => 34,  42 => 32,  40 => 31,  34 => 27,  31 => 26,  27 => 22,  25 => 24,  11 => 22,);
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
/* {% set body_class = 'cart_page' %}*/
/* */
/* {% block main %}*/
/*     <h1 class="page-heading">ショッピングカート</h1>*/
/*     <div class="container-fluid">*/
/*         <div class="row">*/
/*             <div class="col-md-10 col-md-offset-1">*/
/*                 {% if is_granted('ROLE_USER') %}*/
/*                 <div class="flowline step3">*/
/*                 {% else %}*/
/*                 <div class="flowline step4">*/
/*                 {% endif %}*/
/*                     <ul class="clearfix">*/
/*                         <li class="active"><span class="flow_number">1</span><br>カートの商品</li>*/
/*                     {% if is_granted('ROLE_USER') %}*/
/*                         <li><span class="flow_number">2</span><br>ご注文内容確認</li>*/
/*                         <li><span class="flow_number">3</span><br>完了</li>*/
/*                     {% else %}*/
/*                         <li><span class="flow_number">2</span><br>お客様情報</li>*/
/*                         <li><span class="flow_number">3</span><br>ご注文内容確認</li>*/
/*                         <li><span class="flow_number">4</span><br>完了</li>*/
/*                     {% endif %}*/
/*                     </ul>*/
/*                 </div>*/
/* */
/*                 {% set productStr = app.session.flashbag.get('eccube.front.request.product') %}*/
/*                 {% for error in app.session.flashbag.get('eccube.front.request.error')  %}*/
/*                     {% if productStr[0] is defined %}*/
/*                     <div class="message">*/
/*                         <p class="errormsg bg-danger">*/
/*                             <svg class="cb cb-warning"><use xlink:href="#cb-warning" /></svg>*/
/*                             {{ error|trans({'%product%':productStr[0]})|nl2br }}*/
/*                         </p>*/
/*                     </div>*/
/*                     {% else %}*/
/*                     <div class="message">*/
/*                         <p class="errormsg bg-danger">*/
/*                             <svg class="cb cb-warning"><use xlink:href="#cb-warning" /></svg>{{ error|trans|nl2br }}*/
/*                         </p>*/
/*                     </div>*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/*                 {% for error in app.session.flashbag.get('eccube.front.cart.error')  %}*/
/*                     <div class="message">*/
/*                         <p class="errormsg bg-danger">*/
/*                             <svg class="cb cb-warning"><use xlink:href="#cb-warning" /></svg>{{ error|trans|nl2br }}*/
/*                         </p>*/
/*                     </div>*/
/*                 {% endfor %}*/
/* */
/*                 {% if Cart.CartItems|length > 0 %}*/
/*                 <form name="form" id="form_cart" method="post" action="{{ url('cart') }}">*/
/*                     <p class="message">*/
/*                         商品の合計金額は「<strong>{{ Cart.total_price|price }}</strong>」です。*/
/*                         {% if BaseInfo.delivery_free_amount and BaseInfo.delivery_free_quantity %}*/
/*                             <br />*/
/*                             {% if is_delivery_free %}*/
/*                                 現在送料無料です。*/
/*                             {% else %}*/
/*                                 あと「<strong>{{ least|price }}</strong>」または「<strong>{{ quantity|number_format }}個</strong>」のお買い上げで<strong class="text-primary">送料無料</strong>になります。*/
/*                             {% endif %}*/
/*                         {% elseif BaseInfo.delivery_free_amount %}*/
/*                             <br />*/
/*                             {% if is_delivery_free %}*/
/*                                 現在送料無料です。*/
/*                             {% else %}*/
/*                                 あと「<strong>{{ least|price }}</strong>」のお買い上げで<strong class="text-primary">送料無料</strong>になります。*/
/*                             {% endif %}*/
/*                         {% elseif BaseInfo.delivery_free_quantity %}*/
/*                             <br />*/
/*                             {% if is_delivery_free %}*/
/*                                 現在送料無料です。*/
/*                             {% else %}*/
/*                                 あと「<strong>{{ quantity|number_format }}個</strong>」のお買い上げで<strong class="text-primary">送料無料</strong>になります。*/
/*                             {% endif %}*/
/*                         {% endif %}*/
/*                     </p>*/
/*                     <div class="cart_item table">*/
/*                         <div class="thead">*/
/*                             <ol>*/
/*                                 <li>削除</li>*/
/*                                 <li>商品内容</li>*/
/*                                 <li>数量</li>*/
/*                                 <li>小計</li>*/
/*                             </ol>*/
/*                         </div>*/
/*                         <div class="tbody">*/
/* */
/*                             {% for CartItem in Cart.CartItems %}*/
/*                                 {% set ProductClass = CartItem.Object %}*/
/*                                 {% set Product = ProductClass.Product %}*/
/* */
/*                                 <div class="item_box tr">*/
/*                                     <div class="icon_edit td">*/
/*                                         <a href="{{ url('cart_remove', {'productClassId': ProductClass.id }) }}" {{ csrf_token_for_anchor() }} data-method="put" data-message="カートから商品を削除してもよろしいですか?">*/
/*                                             <svg class="cb cb-close"><use xlink:href="#cb-close" /></svg>*/
/*                                         </a>*/
/*                                     </div>*/
/*                                     <div class="td table">*/
/*                                         <div class="item_photo">*/
/*                                             <a target="_blank" href="{{ url('product_detail', {id : Product.id} ) }}">*/
/*                                                 <img src="{{ app.config.image_save_urlpath }}/{{ Product.MainListImage|no_image_product }}" alt="{{ Product.name }}" />*/
/*                                             </a>*/
/*                                         </div>*/
/*                                         <dl class="item_detail">*/
/*                                             <dt class="item_name text-default">*/
/*                                                 <a target="_blank" href="{{ url('product_detail', {id : Product.id} ) }}">{{ Product.name }}</a>*/
/*                                             </dt>*/
/*                                             <dd class="item_pattern small">*/
/*                                                 {% if ProductClass.ClassCategory1 and ProductClass.ClassCategory1.id %}*/
/*                                                     {{ ProductClass.ClassCategory1.ClassName }}：{{ ProductClass.ClassCategory1 }}*/
/*                                                 {% endif %}*/
/*                                                 {% if ProductClass.ClassCategory2 and ProductClass.ClassCategory2.id %}*/
/*                                                     <br>{{ ProductClass.ClassCategory2.ClassName }}：{{ ProductClass.ClassCategory2 }}*/
/*                                                 {% endif %}*/
/*                                             </dd>*/
/*                                             <dd class="item_price">￥{{ CartItem.price|number_format }}</dd>*/
/*                                             <dd class="item_subtotal">小計：￥{{ CartItem.total_price|number_format }}</dd>*/
/*                                         </dl>*/
/*                                     </div>*/
/*                                     <div class="item_quantity td">*/
/*                                         {{ CartItem.quantity|number_format }}*/
/*                                         <ul>*/
/*                                             <li>*/
/*                                                 {% if CartItem.quantity > 1 %}*/
/*                                                     <a href="{{ url('cart_down', {'productClassId': ProductClass.id}) }}" {{ csrf_token_for_anchor() }} data-method="put" data-confirm="false"><svg class="cb cb-minus"><use xlink:href="#cb-minus" /></svg></a>*/
/*                                                 {% else %}*/
/*                                                     <span><svg class="cb cb-minus"><use xlink:href="#cb-minus" /></svg></span>*/
/*                                                 {% endif %}*/
/*                                             </li>*/
/*                                             <li>*/
/*                                                 <a href="{{ url('cart_up', {'productClassId': ProductClass.id}) }}" {{ csrf_token_for_anchor() }} data-method="put" data-confirm="false"><svg class="cb cb-plus"><use xlink:href="#cb-plus" /></svg></a>*/
/*                                             </li>*/
/*                                         </ul>*/
/*                                     </div>*/
/*                                     <div class="item_subtotal td">￥{{ CartItem.total_price|number_format }}</div>*/
/*                                 </div><!--/item_box-->*/
/*                             {% endfor %}*/
/* */
/*                         </div>*/
/*                     </div><!--/cart_item-->*/
/* */
/*                     <div class="total_box">*/
/*                         <dl class="total_price">*/
/*                             <dt>合計：</dt>*/
/*                             <dd class="text-primary">￥{{ Cart.total_price|number_format }}</dd>*/
/*                         </dl>*/
/*                         <div class="btn_group">*/
/* */
/*                             <p>*/
/*                                 <a href="{{ path('cart_buystep') }}" class="btn btn-primary btn-block">レジに進む</a>*/
/*                             </p>*/
/*                             <p>*/
/*                                 <a href="{{ url('top') }}" class="btn btn-info btn-block">お買い物を続ける</a>*/
/*                             </p>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                 </form>*/
/*                 {% else %}*/
/*                 <div class="message">*/
/*                     <p class="errormsg bg-danger">*/
/*                         <svg class="cb cb-warning"><use xlink:href="#cb-warning" /></svg>現在カート内に商品はございません。*/
/*                     </p>*/
/*                 </div>*/
/*                 {% endif %}*/
/* */
/*             </div><!-- /.col -->*/
/*         </div><!-- /.row -->*/
/* */
/*     </div>*/
/* {% endblock %}*/
/* */
