<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* table/secondary_tabs.twig */
class __TwigTemplate_2ad138d860590465e8819fe3a3de471387c6eab36242c9ad72f087353a5efd3e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["cfg_relation"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["relwork"] ?? null) : null) || ($context["is_foreign_key_supported"] ?? null))) {
            // line 2
            echo "    <ul id=\"topmenu2\">
        ";
            // line 3
            echo PhpMyAdmin\Util::getHtmlTab(["icon" => "b_props", "link" => "tbl_structure.php", "text" => _gettext("Table structure"), "id" => "table_strucuture_id"],             // line 8
($context["url_params"] ?? null));
            echo "
        ";
            // line 9
            echo PhpMyAdmin\Util::getHtmlTab(["icon" => "b_relations", "link" => "tbl_relation.php", "text" => _gettext("Relation view"), "id" => "table_relation_id"],             // line 14
($context["url_params"] ?? null));
            echo "
    </ul>
    <div class=\"clearfloat\"></div>
";
        }
    }

    public function getTemplateName()
    {
        return "table/secondary_tabs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 14,  47 => 9,  43 => 8,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/secondary_tabs.twig", "/home/vagrant/code/phpmyadmin/templates/table/secondary_tabs.twig");
    }
}
