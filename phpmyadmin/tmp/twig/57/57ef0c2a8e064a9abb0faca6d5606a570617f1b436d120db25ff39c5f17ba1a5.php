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

/* table/structure/row_stats_table.twig */
class __TwigTemplate_e4ed538907e2722591581bc5446bd83cb94c0e7263d5efae3f34e5166a213fae extends \Twig\Template
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
        echo "<table id=\"tablerowstats\" class=\"width100 data\">
<caption class=\"tblHeaders\">";
        // line 2
        echo _gettext("Row statistics");
        echo "</caption>
<tbody>
    ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["showtable"] ?? null), "Row_format", [], "array", true, true, false, 4)) {
            // line 5
            echo "        <tr>
        <th class=\"name\">";
            // line 6
            echo _gettext("Format");
            echo "</th>
        ";
            // line 7
            if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["showtable"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["Row_format"] ?? null) : null) == "Fixed")) {
                // line 8
                echo "            <td class=\"value\">";
                echo _gettext("static");
                echo "</td>
        ";
            } elseif (((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 =             // line 9
($context["showtable"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["Row_format"] ?? null) : null) == "Dynamic")) {
                // line 10
                echo "            <td class=\"value\">";
                echo _gettext("dynamic");
                echo "</td>
        ";
            } else {
                // line 12
                echo "            <td class=\"value\">";
                echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["showtable"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["Row_format"] ?? null) : null), "html", null, true);
                echo "</td>
        ";
            }
            // line 14
            echo "        </tr>
    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if ( !twig_test_empty((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["showtable"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["Create_options"] ?? null) : null))) {
            // line 18
            echo "        <tr>
        <th class=\"name\">";
            // line 19
            echo _gettext("Options");
            echo "</th>
        ";
            // line 20
            if (((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["showtable"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["Create_options"] ?? null) : null) == "partitioned")) {
                // line 21
                echo "            <td class=\"value\">";
                echo _gettext("partitioned");
                echo "</td>
        ";
            } else {
                // line 23
                echo "            <td class=\"value\">";
                echo twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["showtable"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["Create_options"] ?? null) : null), "html", null, true);
                echo "</td>
        ";
            }
            // line 25
            echo "        </tr>
    ";
        }
        // line 27
        echo "
    ";
        // line 28
        if ( !twig_test_empty(($context["tbl_collation"] ?? null))) {
            // line 29
            echo "        <tr>
        <th class=\"name\">";
            // line 30
            echo _gettext("Collation");
            echo "</th>
        <td class=\"value\">
            <dfn title=\"";
            // line 32
            echo twig_escape_filter($this->env, PhpMyAdmin\Charsets::getCollationDescr(($context["tbl_collation"] ?? null)), "html", null, true);
            echo "\">
                ";
            // line 33
            echo twig_escape_filter($this->env, ($context["tbl_collation"] ?? null), "html", null, true);
            echo "
            </dfn>
        </td>
        </tr>
    ";
        }
        // line 38
        echo "
    ";
        // line 39
        if (( !($context["is_innodb"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["showtable"] ?? null), "Rows", [], "array", true, true, false, 39))) {
            // line 40
            echo "        <tr>
        <th class=\"name\">";
            // line 41
            echo _gettext("Rows");
            echo "</th>
        <td class=\"value\">";
            // line 42
            echo twig_escape_filter($this->env, PhpMyAdmin\Util::formatNumber((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["showtable"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["Rows"] ?? null) : null), 0), "html", null, true);
            echo "</td>
        </tr>
    ";
        }
        // line 45
        echo "
    ";
        // line 46
        if ((( !($context["is_innodb"] ?? null) && twig_get_attribute($this->env, $this->source,         // line 47
($context["showtable"] ?? null), "Avg_row_length", [], "array", true, true, false, 47)) && ((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 =         // line 48
($context["showtable"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["Avg_row_length"] ?? null) : null) > 0))) {
            // line 49
            echo "        <tr>
        <th class=\"name\">";
            // line 50
            echo _gettext("Row length");
            echo "</th>
        ";
            // line 51
            $context["avg_row_length"] = PhpMyAdmin\Util::formatByteDown((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["showtable"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["Avg_row_length"] ?? null) : null), 6, 1);
            // line 52
            echo "        <td class=\"value\">";
            echo twig_escape_filter($this->env, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["avg_row_length"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[0] ?? null) : null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["avg_row_length"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[1] ?? null) : null), "html", null, true);
            echo "</td>
        </tr>
    ";
        }
        // line 55
        echo "
    ";
        // line 56
        if ((((( !($context["is_innodb"] ?? null) && twig_get_attribute($this->env, $this->source,         // line 57
($context["showtable"] ?? null), "Data_length", [], "array", true, true, false, 57)) && twig_get_attribute($this->env, $this->source,         // line 58
($context["showtable"] ?? null), "Rows", [], "array", true, true, false, 58)) && ((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae =         // line 59
($context["showtable"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["Rows"] ?? null) : null) > 0)) && (        // line 60
($context["mergetable"] ?? null) == false))) {
            // line 61
            echo "        <tr>
        <th class=\"name\">";
            // line 62
            echo _gettext("Row size");
            echo "</th>
        <td class=\"value\">";
            // line 63
            echo twig_escape_filter($this->env, ($context["avg_size"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["avg_unit"] ?? null), "html", null, true);
            echo "</td>
        </tr>
    ";
        }
        // line 66
        echo "
    ";
        // line 67
        if (twig_get_attribute($this->env, $this->source, ($context["showtable"] ?? null), "Auto_increment", [], "array", true, true, false, 67)) {
            // line 68
            echo "        <tr>
        <th class=\"name\">";
            // line 69
            echo _gettext("Next autoindex");
            echo "</th>
        <td class=\"value\">";
            // line 70
            echo twig_escape_filter($this->env, PhpMyAdmin\Util::formatNumber((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["showtable"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["Auto_increment"] ?? null) : null), 0), "html", null, true);
            echo "</td>
        </tr>
    ";
        }
        // line 73
        echo "
    ";
        // line 74
        if (twig_get_attribute($this->env, $this->source, ($context["showtable"] ?? null), "Create_time", [], "array", true, true, false, 74)) {
            // line 75
            echo "        <tr>
        <th class=\"name\">";
            // line 76
            echo _gettext("Creation");
            echo "</th>
        <td class=\"value\">";
            // line 77
            echo twig_escape_filter($this->env, PhpMyAdmin\Util::localisedDate(twig_date_format_filter($this->env, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["showtable"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["Create_time"] ?? null) : null), "U")), "html", null, true);
            echo "</td>
        </tr>
    ";
        }
        // line 80
        echo "
    ";
        // line 81
        if (twig_get_attribute($this->env, $this->source, ($context["showtable"] ?? null), "Update_time", [], "array", true, true, false, 81)) {
            // line 82
            echo "        <tr>
        <th class=\"name\">";
            // line 83
            echo _gettext("Last update");
            echo "</th>
        <td class=\"value\">";
            // line 84
            echo twig_escape_filter($this->env, PhpMyAdmin\Util::localisedDate(twig_date_format_filter($this->env, (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["showtable"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["Update_time"] ?? null) : null), "U")), "html", null, true);
            echo "</td>
        </tr>
    ";
        }
        // line 87
        echo "
    ";
        // line 88
        if (twig_get_attribute($this->env, $this->source, ($context["showtable"] ?? null), "Check_time", [], "array", true, true, false, 88)) {
            // line 89
            echo "        <tr>
        <th class=\"name\">";
            // line 90
            echo _gettext("Last check");
            echo "</th>
        <td class=\"value\">";
            // line 91
            echo twig_escape_filter($this->env, PhpMyAdmin\Util::localisedDate(twig_date_format_filter($this->env, (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["showtable"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["Check_time"] ?? null) : null), "U")), "html", null, true);
            echo "</td>
        </tr>
    ";
        }
        // line 94
        echo "</tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "table/structure/row_stats_table.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 94,  267 => 91,  263 => 90,  260 => 89,  258 => 88,  255 => 87,  249 => 84,  245 => 83,  242 => 82,  240 => 81,  237 => 80,  231 => 77,  227 => 76,  224 => 75,  222 => 74,  219 => 73,  213 => 70,  209 => 69,  206 => 68,  204 => 67,  201 => 66,  193 => 63,  189 => 62,  186 => 61,  184 => 60,  183 => 59,  182 => 58,  181 => 57,  180 => 56,  177 => 55,  168 => 52,  166 => 51,  162 => 50,  159 => 49,  157 => 48,  156 => 47,  155 => 46,  152 => 45,  146 => 42,  142 => 41,  139 => 40,  137 => 39,  134 => 38,  126 => 33,  122 => 32,  117 => 30,  114 => 29,  112 => 28,  109 => 27,  105 => 25,  99 => 23,  93 => 21,  91 => 20,  87 => 19,  84 => 18,  82 => 17,  79 => 16,  75 => 14,  69 => 12,  63 => 10,  61 => 9,  56 => 8,  54 => 7,  50 => 6,  47 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/structure/row_stats_table.twig", "/home/vagrant/code/phpmyadmin/templates/table/structure/row_stats_table.twig");
    }
}
