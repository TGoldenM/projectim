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

/* database/structure/print_view_data_dictionary_link.twig */
class __TwigTemplate_c2d675e9c9734ad31f9921913b7412ba3e27a5df39c665abc87d5bff35551720 extends \Twig\Template
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
        echo "<p class=\"print_ignore\">
    <a href=\"#\" id=\"printView\">
        ";
        // line 3
        echo PhpMyAdmin\Util::getIcon("b_print", _gettext("Print"), true);
        echo "
    </a>
    <a href=\"db_datadict.php";
        // line 5
        echo twig_escape_filter($this->env, ($context["url_query"] ?? null), "html", null, true);
        echo "\" target=\"print_view\">
        ";
        // line 6
        echo PhpMyAdmin\Util::getIcon("b_tblanalyse", _gettext("Data dictionary"), true);
        echo "
    </a>
</p>
";
    }

    public function getTemplateName()
    {
        return "database/structure/print_view_data_dictionary_link.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 6,  46 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "database/structure/print_view_data_dictionary_link.twig", "/home/vagrant/code/phpmyadmin/templates/database/structure/print_view_data_dictionary_link.twig");
    }
}
