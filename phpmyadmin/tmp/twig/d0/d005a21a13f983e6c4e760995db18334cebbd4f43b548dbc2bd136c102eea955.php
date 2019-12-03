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

/* table/structure/check_all_table_column.twig */
class __TwigTemplate_6c6382d4a139efd21dd4df4fa94856b0b809ca2a575054d852c2d8e475843277 extends \Twig\Template
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
        echo "<div class=\"print_ignore\">
    ";
        // line 2
        $this->loadTemplate("select_all.twig", "table/structure/check_all_table_column.twig", 2)->display(twig_to_array(["pma_theme_image" =>         // line 3
($context["pma_theme_image"] ?? null), "text_dir" =>         // line 4
($context["text_dir"] ?? null), "form_name" => "fieldsForm"]));
        // line 7
        echo "
    ";
        // line 8
        echo PhpMyAdmin\Util::getButtonOrImage("submit_mult", "mult_submit", _gettext("Browse"), "b_browse", "browse");
        // line 14
        echo "

    ";
        // line 16
        if (( !($context["tbl_is_view"] ?? null) &&  !($context["db_is_system_schema"] ?? null))) {
            // line 17
            echo "        ";
            echo PhpMyAdmin\Util::getButtonOrImage("submit_mult", "mult_submit change_columns_anchor ajax", _gettext("Change"), "b_edit", "change");
            // line 23
            echo "
        ";
            // line 24
            echo PhpMyAdmin\Util::getButtonOrImage("submit_mult", "mult_submit", _gettext("Drop"), "b_drop", "drop");
            // line 30
            echo "

        ";
            // line 32
            if ((($context["tbl_storage_engine"] ?? null) != "ARCHIVE")) {
                // line 33
                echo "            ";
                echo PhpMyAdmin\Util::getButtonOrImage("submit_mult", "mult_submit", _gettext("Primary"), "b_primary", "primary");
                // line 39
                echo "
            ";
                // line 40
                echo PhpMyAdmin\Util::getButtonOrImage("submit_mult", "mult_submit", _gettext("Unique"), "b_unique", "unique");
                // line 46
                echo "
            ";
                // line 47
                echo PhpMyAdmin\Util::getButtonOrImage("submit_mult", "mult_submit", _gettext("Index"), "b_index", "index");
                // line 53
                echo "
            ";
                // line 54
                echo PhpMyAdmin\Util::getButtonOrImage("submit_mult", "mult_submit", _gettext("Fulltext"), "b_ftext", "ftext");
                // line 60
                echo "

            ";
                // line 62
                if (( !twig_test_empty(($context["tbl_storage_engine"] ?? null)) && (((                // line 63
($context["tbl_storage_engine"] ?? null) == "MYISAM") || (                // line 64
($context["tbl_storage_engine"] ?? null) == "ARIA")) || (                // line 65
($context["tbl_storage_engine"] ?? null) == "MARIA")))) {
                    // line 66
                    echo "                ";
                    echo PhpMyAdmin\Util::getButtonOrImage("submit_mult", "mult_submit", _gettext("Fulltext"), "b_ftext", "ftext");
                    // line 72
                    echo "
            ";
                }
                // line 74
                echo "
            ";
                // line 75
                if (($context["central_columns_work"] ?? null)) {
                    // line 76
                    echo "                ";
                    echo PhpMyAdmin\Util::getButtonOrImage("submit_mult", "mult_submit", _gettext("Add to central columns"), "centralColumns_add", "add_to_central_columns");
                    // line 82
                    echo "
                ";
                    // line 83
                    echo PhpMyAdmin\Util::getButtonOrImage("submit_mult", "mult_submit", _gettext("Remove from central columns"), "centralColumns_delete", "remove_from_central_columns");
                    // line 89
                    echo "
            ";
                }
                // line 91
                echo "        ";
            }
            // line 92
            echo "    ";
        }
        // line 93
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "table/structure/check_all_table_column.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 93,  123 => 92,  120 => 91,  116 => 89,  114 => 83,  111 => 82,  108 => 76,  106 => 75,  103 => 74,  99 => 72,  96 => 66,  94 => 65,  93 => 64,  92 => 63,  91 => 62,  87 => 60,  85 => 54,  82 => 53,  80 => 47,  77 => 46,  75 => 40,  72 => 39,  69 => 33,  67 => 32,  63 => 30,  61 => 24,  58 => 23,  55 => 17,  53 => 16,  49 => 14,  47 => 8,  44 => 7,  42 => 4,  41 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/structure/check_all_table_column.twig", "/home/vagrant/code/phpmyadmin/templates/table/structure/check_all_table_column.twig");
    }
}
