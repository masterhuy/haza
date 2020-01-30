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

/* @PrestaShop/Admin/Improve/International/Currency/Blocks/form.html.twig */
class __TwigTemplate_1334aee222e46c5bdabb64b3667a8b3cf48a3e84a1522a8bc97f962988e4920f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'form' => [$this, 'block_form'],
            'currency_form_rest' => [$this, 'block_currency_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 26
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Improve/International/Currency/Blocks/form.html.twig", 26);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('form', $context, $blocks);
    }

    public function block_form($context, array $blocks = [])
    {
        // line 29
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["currencyForm"] ?? null), 'form_start');
        echo "

  <div class=\"card\">
    <div class=\"card-header\">
      ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Currencies", [], "Admin.Global"), "html", null, true);
        echo "
    </div>
    <div class=\"card-block row\">
      <div class=\"card-text\">
        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["currencyForm"] ?? null), 'errors');
        echo "

        ";
        // line 39
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["currencyForm"] ?? null), "iso_code", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Currency", [], "Admin.Global"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ISO code (e.g. USD for Dollars, EUR for Euros, etc.).", [], "Admin.International.Help")]);
        // line 42
        echo "

        ";
        // line 44
        ob_start();
        // line 45
        echo "          ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Exchange rates are calculated from one unit of your shop's default currency. For example, if the default currency is euros and your chosen currency is dollars, type \"1.20\" (1&euro; = \$1.20).", [], "Admin.International.Help"), "html", null, true);
        echo "
        ";
        $context["exchangeRateLabel"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 47
        echo "
        ";
        // line 48
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["currencyForm"] ?? null), "exchange_rate", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Exchange rate", [], "Admin.International.Feature"), "help" =>         // line 50
($context["exchangeRateLabel"] ?? null)]);
        // line 51
        echo "

        ";
        // line 53
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["currencyForm"] ?? null), "active", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status", [], "Admin.Global")]);
        // line 55
        echo "

        ";
        // line 57
        if (($context["isShopFeatureEnabled"] ?? null)) {
            // line 58
            echo "          ";
            echo $context["ps"]->getform_group_row($this->getAttribute(($context["currencyForm"] ?? null), "shop_association", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shop association", [], "Admin.Global")]);
            // line 60
            echo "
        ";
        }
        // line 62
        echo "
        ";
        // line 63
        $this->displayBlock('currency_form_rest', $context, $blocks);
        // line 66
        echo "      </div>
    </div>

    <div class=\"card-footer\">
      <div class=\"d-inline-flex\">
        <a href=\"";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_currencies_index");
        echo "\" class=\"btn btn-outline-secondary\">
          ";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
        </a>
      </div>
      <div class=\"d-inline-flex float-right\">
        <button class=\"btn btn-primary\">";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
      </div>
    </div>

  </div>
  ";
        // line 81
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["currencyForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 63
    public function block_currency_form_rest($context, array $blocks = [])
    {
        // line 64
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["currencyForm"] ?? null), 'rest');
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/International/Currency/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 64,  142 => 63,  136 => 81,  128 => 76,  121 => 72,  117 => 71,  110 => 66,  108 => 63,  105 => 62,  101 => 60,  98 => 58,  96 => 57,  92 => 55,  90 => 53,  86 => 51,  84 => 50,  83 => 48,  80 => 47,  74 => 45,  72 => 44,  68 => 42,  66 => 39,  61 => 37,  54 => 33,  46 => 29,  40 => 28,  37 => 27,  35 => 26,  32 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/International/Currency/Blocks/form.html.twig", "D:\\xamppp\\htdocs\\jms_haza\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Improve\\International\\Currency\\Blocks\\form.html.twig");
    }
}
