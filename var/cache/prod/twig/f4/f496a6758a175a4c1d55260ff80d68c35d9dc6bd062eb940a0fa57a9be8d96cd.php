<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Improve/International/Currency/create.html.twig */
class __TwigTemplate_36623e7156822c5c9e65b72cc8702d27d1421ff719968d11c5f21bfe66f3dad6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 26
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Improve/International/Currency/create.html.twig", 26);
        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        // line 29
        echo "    <div class=\"row justify-content-center\">
      <div class=\"col\">
        ";
        // line 31
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Improve/International/Currency/Blocks/form.html.twig", ["currencyForm" => ($context["currencyForm"] ?? null)]);
        echo "
      </div>
    </div>
  ";
    }

    // line 36
    public function block_javascripts($context, array $blocks = [])
    {
        // line 37
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/currency.bundle.js"), "html", null, true);
        echo "\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/International/Currency/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 38,  58 => 37,  55 => 36,  47 => 31,  43 => 29,  40 => 28,  22 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/International/Currency/create.html.twig", "D:\\xamppp\\htdocs\\jms_haza\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Improve\\International\\Currency\\create.html.twig");
    }
}
