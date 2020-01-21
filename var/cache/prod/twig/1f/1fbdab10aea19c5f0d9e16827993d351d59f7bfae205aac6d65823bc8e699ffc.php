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

/* @PrestaShop/Admin/Module/Includes/grid_manage_empty.html.twig */
class __TwigTemplate_602f9362f155bc5b89348b143c8a52e423008fa0d7a76019f9409e319d0a2af9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'catalog_category_empty' => [$this, 'block_catalog_category_empty'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('catalog_category_empty', $context, $blocks);
    }

    public function block_catalog_category_empty($context, array $blocks = [])
    {
        // line 27
        echo "  <div class=\"modules-list module-list-empty\" data-name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? null), "refMenu", []), "html", null, true);
        echo "\">
    <p>
      ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You do not have module in « %categoryName% ».", ["%categoryName%" => $this->getAttribute(($context["category"] ?? null), "name", [])], "Admin.Modules.Feature"), "html", null, true);
        echo "<br/>
      ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Discover the best-selling modules of this category in the %link% page.", ["%link%" => (((((("<a href=\"" . $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminPsMboModule", true)) . "&filterCategoryTab=") . $this->getAttribute(($context["category"] ?? null), "refMenu", [])) . "\">") . $this->getAttribute(($context["category"] ?? null), "name", [])) . "</a>")], "Admin.Modules.Feature");
        echo "
    </p>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/Includes/grid_manage_empty.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  50 => 30,  46 => 29,  40 => 27,  34 => 26,  31 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Module/Includes/grid_manage_empty.html.twig", "/Applications/MAMP/htdocs/prestashop17/pagebuilder40/modules/ps_mbo/views/PrestaShop/Admin/Module/Includes/grid_manage_empty.html.twig");
    }
}