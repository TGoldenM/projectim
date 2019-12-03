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

/* table/structure/display_table_stats.twig */
class __TwigTemplate_f20e2e950bd8fdcf190925203e01897f74f402e3451e48d33e8c6dd9189a0a6a extends \Twig\Template
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
        echo "<div id=\"tablestatistics\">
    <fieldset>
        <legend>";
        // line 3
        echo _gettext("Information");
        echo "</legend>
        ";
        // line 4
        if ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["showtable"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["TABLE_COMMENT"] ?? null) : null)) {
            // line 5
            echo "            <p>
                <strong>";
            // line 6
            echo _gettext("Table comments:");
            echo "</strong>
                ";
            // line 7
            echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["showtable"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["TABLE_COMMENT"] ?? null) : null), "html", null, true);
            echo "
            </p>
        ";
        }
        // line 10
        echo "        <a id=\"showusage\"></a>

        ";
        // line 12
        if (( !($context["tbl_is_view"] ?? null) &&  !($context["db_is_system_schema"] ?? null))) {
            // line 13
            echo "            <table id=\"tablespaceusage\" class=\"width100 data\">
                <caption class=\"tblHeaders\">";
            // line 14
            echo _gettext("Space usage");
            echo "</caption>
                <tbody>
                    <tr>
                        <th class=\"name\">";
            // line 17
            echo _gettext("Data");
            echo "</th>
                        <td class=\"value\">";
            // line 18
            echo twig_escape_filter($this->env, ($context["data_size"] ?? null), "html", null, true);
            echo "</td>
                        <td class=\"unit\">";
            // line 19
            echo twig_escape_filter($this->env, ($context["data_unit"] ?? null), "html", null, true);
            echo "</td>
                    </tr>

                ";
            // line 22
            if ((isset($context["index_size"]) || array_key_exists("index_size", $context))) {
                // line 23
                echo "                    <tr>
                        <th class=\"name\">";
                // line 24
                echo _gettext("Index");
                echo "</th>
                        <td class=\"value\">";
                // line 25
                echo twig_escape_filter($this->env, ($context["index_size"] ?? null), "html", null, true);
                echo "</td>
                        <td class=\"unit\">";
                // line 26
                echo twig_escape_filter($this->env, ($context["index_unit"] ?? null), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            // line 29
            echo "
                ";
            // line 30
            if ((isset($context["free_size"]) || array_key_exists("free_size", $context))) {
                // line 31
                echo "                    <tr>
                        <th class=\"name\">";
                // line 32
                echo _gettext("Overhead");
                echo "</th>
                        <td class=\"value\">";
                // line 33
                echo twig_escape_filter($this->env, ($context["free_size"] ?? null), "html", null, true);
                echo "</td>
                        <td class=\"unit\">";
                // line 34
                echo twig_escape_filter($this->env, ($context["free_unit"] ?? null), "html", null, true);
                echo "</td>
                    </tr>
                    <tr>
                        <th class=\"name\">";
                // line 37
                echo _gettext("Effective");
                echo "</th>
                        <td class=\"value\">";
                // line 38
                echo twig_escape_filter($this->env, ($context["effect_size"] ?? null), "html", null, true);
                echo "</td>
                        <td class=\"unit\">";
                // line 39
                echo twig_escape_filter($this->env, ($context["effect_unit"] ?? null), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            // line 42
            echo "
                ";
            // line 43
            if (((isset($context["tot_size"]) || array_key_exists("tot_size", $context)) && (($context["mergetable"] ?? null) == false))) {
                // line 44
                echo "                    <tr>
                        <th class=\"name\">";
                // line 45
                echo _gettext("Total");
                echo "</th>
                        <td class=\"value\">";
                // line 46
                echo twig_escape_filter($this->env, ($context["tot_size"] ?? null), "html", null, true);
                echo "</td>
                        <td class=\"unit\">";
                // line 47
                echo twig_escape_filter($this->env, ($context["tot_unit"] ?? null), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            // line 50
            echo "
                ";
            // line 52
            echo "                ";
            if (((isset($context["free_size"]) || array_key_exists("free_size", $context)) && ((((            // line 53
($context["tbl_storage_engine"] ?? null) == "MYISAM") || (            // line 54
($context["tbl_storage_engine"] ?? null) == "ARIA")) || (            // line 55
($context["tbl_storage_engine"] ?? null) == "MARIA")) || (            // line 56
($context["tbl_storage_engine"] ?? null) == "BDB")))) {
                // line 57
                echo "                    <tr class=\"tblFooters print_ignore\">
                        <td colspan=\"3\" class=\"center\">
                            <a href=\"sql.php\" data-post=\"";
                // line 59
                echo twig_escape_filter($this->env, ($context["url_query"] ?? null), "html", null, true);
                echo "&amp;pos=0&amp;sql_query=";
                // line 60
                echo twig_escape_filter($this->env, twig_urlencode_filter(("OPTIMIZE TABLE " . PhpMyAdmin\Util::backquote(($context["table"] ?? null)))), "html", null, true);
                echo "\">
                                ";
                // line 61
                echo PhpMyAdmin\Util::getIcon("b_tbloptimize", _gettext("Optimize table"));
                echo "
                            </a>
                        </td>
                    </tr>
                ";
            }
            // line 66
            echo "                </tbody>
            </table>
        ";
        }
        // line 69
        echo "
        ";
        // line 70
        $this->loadTemplate("table/structure/row_stats_table.twig", "table/structure/display_table_stats.twig", 70)->display(twig_to_array(["showtable" =>         // line 71
($context["showtable"] ?? null), "tbl_collation" =>         // line 72
($context["tbl_collation"] ?? null), "is_innodb" =>         // line 73
($context["is_innodb"] ?? null), "mergetable" =>         // line 74
($context["mergetable"] ?? null), "avg_size" => ((        // line 75
(isset($context["avg_size"]) || array_key_exists("avg_size", $context))) ? (($context["avg_size"] ?? null)) : (null)), "avg_unit" => ((        // line 76
(isset($context["avg_unit"]) || array_key_exists("avg_unit", $context))) ? (($context["avg_unit"] ?? null)) : (null))]));
        // line 78
        echo "    </fieldset>
</div>
";
    }

    public function getTemplateName()
    {
        return "table/structure/display_table_stats.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 78,  209 => 76,  208 => 75,  207 => 74,  206 => 73,  205 => 72,  204 => 71,  203 => 70,  200 => 69,  195 => 66,  187 => 61,  183 => 60,  180 => 59,  176 => 57,  174 => 56,  173 => 55,  172 => 54,  171 => 53,  169 => 52,  166 => 50,  160 => 47,  156 => 46,  152 => 45,  149 => 44,  147 => 43,  144 => 42,  138 => 39,  134 => 38,  130 => 37,  124 => 34,  120 => 33,  116 => 32,  113 => 31,  111 => 30,  108 => 29,  102 => 26,  98 => 25,  94 => 24,  91 => 23,  89 => 22,  83 => 19,  79 => 18,  75 => 17,  69 => 14,  66 => 13,  64 => 12,  60 => 10,  54 => 7,  50 => 6,  47 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/structure/display_table_stats.twig", "/home/vagrant/code/phpmyadmin/templates/table/structure/display_table_stats.twig");
    }
}
