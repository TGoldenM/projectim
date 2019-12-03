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

/* table/structure/actions_in_table_structure.twig */
class __TwigTemplate_894504a96a1241202821cbcbe579a03a64fded252177ea6cb5d85cc989ade7ac extends \Twig\Template
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
        echo "<td class=\"print_ignore\"><ul class=\"table-structure-actions resizable-menu\">
    ";
        // line 2
        if (($context["hide_structure_actions"] ?? null)) {
            // line 3
            echo "        <li class=\"submenu shown\">
            <a href=\"#\" class=\"tab nowrap\">";
            // line 4
            echo PhpMyAdmin\Util::getIcon("b_more", _gettext("More"));
            echo "</a>
            <ul>
    ";
        }
        // line 7
        echo "    ";
        // line 8
        echo "    ";
        $this->loadTemplate("table/structure/action_row_in_structure_table.twig", "table/structure/actions_in_table_structure.twig", 8)->display(twig_to_array(["type" =>         // line 9
($context["type"] ?? null), "tbl_storage_engine" =>         // line 10
($context["tbl_storage_engine"] ?? null), "class" => "primary nowrap", "has_field" => (        // line 12
($context["primary"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["primary"] ?? null), "hasColumn", [0 => ($context["field_name"] ?? null)], "method", false, false, false, 12)), "has_link_class" => true, "url_query" =>         // line 14
($context["url_query"] ?? null), "primary" =>         // line 15
($context["primary"] ?? null), "syntax" => "ADD PRIMARY KEY", "message" => _gettext("A primary key has been added on %s."), "action" => "Primary", "titles" =>         // line 19
($context["titles"] ?? null), "row" =>         // line 20
($context["row"] ?? null), "is_primary" => true, "table" =>         // line 22
($context["table"] ?? null)]));
        // line 24
        echo "
    ";
        // line 26
        echo "    ";
        $this->loadTemplate("table/structure/action_row_in_structure_table.twig", "table/structure/actions_in_table_structure.twig", 26)->display(twig_to_array(["type" =>         // line 27
($context["type"] ?? null), "tbl_storage_engine" =>         // line 28
($context["tbl_storage_engine"] ?? null), "class" => "add_unique unique nowrap", "has_field" => twig_in_filter(        // line 30
($context["field_name"] ?? null), ($context["columns_with_unique_index"] ?? null)), "has_link_class" => false, "url_query" =>         // line 32
($context["url_query"] ?? null), "primary" =>         // line 33
($context["primary"] ?? null), "syntax" => "ADD UNIQUE", "message" => _gettext("An index has been added on %s."), "action" => "Unique", "titles" =>         // line 37
($context["titles"] ?? null), "row" =>         // line 38
($context["row"] ?? null), "is_primary" => false, "table" =>         // line 40
($context["table"] ?? null)]));
        // line 42
        echo "
    ";
        // line 44
        echo "    ";
        $this->loadTemplate("table/structure/action_row_in_structure_table.twig", "table/structure/actions_in_table_structure.twig", 44)->display(twig_to_array(["type" =>         // line 45
($context["type"] ?? null), "tbl_storage_engine" =>         // line 46
($context["tbl_storage_engine"] ?? null), "class" => "add_index nowrap", "has_field" => false, "has_link_class" => false, "url_query" =>         // line 50
($context["url_query"] ?? null), "primary" =>         // line 51
($context["primary"] ?? null), "syntax" => "ADD INDEX", "message" => _gettext("An index has been added on %s."), "action" => "Index", "titles" =>         // line 55
($context["titles"] ?? null), "row" =>         // line 56
($context["row"] ?? null), "is_primary" => false, "table" =>         // line 58
($context["table"] ?? null)]));
        // line 60
        echo "
    ";
        // line 62
        echo "    ";
        $context["spatial_types"] = [0 => "geometry", 1 => "point", 2 => "linestring", 3 => "polygon", 4 => "multipoint", 5 => "multilinestring", 6 => "multipolygon", 7 => "geomtrycollection"];
        // line 72
        echo "    ";
        $this->loadTemplate("table/structure/action_row_in_structure_table.twig", "table/structure/actions_in_table_structure.twig", 72)->display(twig_to_array(["type" =>         // line 73
($context["type"] ?? null), "tbl_storage_engine" =>         // line 74
($context["tbl_storage_engine"] ?? null), "class" => "spatial nowrap", "has_field" => (!twig_in_filter(        // line 76
($context["type"] ?? null), ($context["spatial_types"] ?? null)) && ((        // line 77
($context["tbl_storage_engine"] ?? null) == "MYISAM") || (($context["mysql_int_version"] ?? null) >= 50705))), "has_link_class" => false, "url_query" =>         // line 79
($context["url_query"] ?? null), "primary" =>         // line 80
($context["primary"] ?? null), "syntax" => "ADD SPATIAL", "message" => _gettext("An index has been added on %s."), "action" => "Spatial", "titles" =>         // line 84
($context["titles"] ?? null), "row" =>         // line 85
($context["row"] ?? null), "is_primary" => false, "table" =>         // line 87
($context["table"] ?? null)]));
        // line 89
        echo "
    ";
        // line 91
        echo "    <li class=\"fulltext nowrap\">
    ";
        // line 92
        if ((( !twig_test_empty(($context["tbl_storage_engine"] ?? null)) && ((((        // line 93
($context["tbl_storage_engine"] ?? null) == "MYISAM") || (        // line 94
($context["tbl_storage_engine"] ?? null) == "ARIA")) || (        // line 95
($context["tbl_storage_engine"] ?? null) == "MARIA")) || ((        // line 96
($context["tbl_storage_engine"] ?? null) == "INNODB") && (($context["mysql_int_version"] ?? null) >= 50604)))) && (twig_in_filter("text",         // line 97
($context["type"] ?? null)) || twig_in_filter("char", ($context["type"] ?? null))))) {
            // line 98
            echo "        <a rel=\"samepage\" class=\"ajax add_key add_fulltext_anchor\" href=\"tbl_structure.php\"
            data-post=\"";
            // line 99
            echo ($context["url_query"] ?? null);
            echo "&amp;add_key=1&amp;sql_query=";
            // line 100
            echo twig_escape_filter($this->env, twig_urlencode_filter((((("ALTER TABLE " . PhpMyAdmin\Util::backquote(($context["table"] ?? null))) . " ADD FULLTEXT(") . PhpMyAdmin\Util::backquote((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =             // line 101
($context["row"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["Field"] ?? null) : null))) . ");")), "html", null, true);
            // line 102
            echo "&amp;message_to_show=";
            // line 103
            echo twig_escape_filter($this->env, twig_urlencode_filter(sprintf(_gettext("An index has been added on %s."), twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["row"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["Field"] ?? null) : null)))), "html", null, true);
            echo "\">
            ";
            // line 104
            echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["titles"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["IdxFulltext"] ?? null) : null);
            echo "
        </a>
    ";
        } else {
            // line 107
            echo "        ";
            echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["titles"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["NoIdxFulltext"] ?? null) : null);
            echo "
    ";
        }
        // line 109
        echo "    </li>

    ";
        // line 112
        echo "    <li class=\"browse nowrap\">
        <a href=\"sql.php\" data-post=\"";
        // line 113
        echo ($context["url_query"] ?? null);
        echo "&amp;sql_query=";
        // line 114
        echo twig_escape_filter($this->env, twig_urlencode_filter(((((((((("SELECT COUNT(*) AS " . PhpMyAdmin\Util::backquote(_gettext("Rows"))) . ", ") . PhpMyAdmin\Util::backquote((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 =         // line 115
($context["row"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["Field"] ?? null) : null))) . " FROM ") . PhpMyAdmin\Util::backquote(        // line 116
($context["table"] ?? null))) . " GROUP BY ") . PhpMyAdmin\Util::backquote((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 =         // line 117
($context["row"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["Field"] ?? null) : null))) . " ORDER BY ") . PhpMyAdmin\Util::backquote((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e =         // line 118
($context["row"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["Field"] ?? null) : null)))), "html", null, true);
        // line 119
        echo "&amp;is_browse_distinct=1\">
            ";
        // line 120
        echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["titles"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["DistinctValues"] ?? null) : null);
        echo "
        </a>
    </li>
    ";
        // line 123
        if (($context["central_columns_work"] ?? null)) {
            // line 124
            echo "        <li class=\"browse nowrap\">
        ";
            // line 125
            if (($context["is_in_central_columns"] ?? null)) {
                // line 126
                echo "            <a href=\"#\" class=\"central_columns remove_button\">
                ";
                // line 127
                echo PhpMyAdmin\Util::getIcon("centralColumns_delete", _gettext("Remove from central columns"));
                echo "
            </a>
        ";
            } else {
                // line 130
                echo "            <a href=\"#\" class=\"central_columns add_button\">
                ";
                // line 131
                echo PhpMyAdmin\Util::getIcon("centralColumns_add", _gettext("Add to central columns"));
                echo "
            </a>
        ";
            }
            // line 134
            echo "        </li>
    ";
        }
        // line 136
        echo "    ";
        if (($context["hide_structure_actions"] ?? null)) {
            // line 137
            echo "            </ul>
        </li>
    ";
        }
        // line 140
        echo "</ul></td>
";
    }

    public function getTemplateName()
    {
        return "table/structure/actions_in_table_structure.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 140,  206 => 137,  203 => 136,  199 => 134,  193 => 131,  190 => 130,  184 => 127,  181 => 126,  179 => 125,  176 => 124,  174 => 123,  168 => 120,  165 => 119,  163 => 118,  162 => 117,  161 => 116,  160 => 115,  159 => 114,  156 => 113,  153 => 112,  149 => 109,  143 => 107,  137 => 104,  133 => 103,  131 => 102,  129 => 101,  128 => 100,  125 => 99,  122 => 98,  120 => 97,  119 => 96,  118 => 95,  117 => 94,  116 => 93,  115 => 92,  112 => 91,  109 => 89,  107 => 87,  106 => 85,  105 => 84,  104 => 80,  103 => 79,  102 => 77,  101 => 76,  100 => 74,  99 => 73,  97 => 72,  94 => 62,  91 => 60,  89 => 58,  88 => 56,  87 => 55,  86 => 51,  85 => 50,  84 => 46,  83 => 45,  81 => 44,  78 => 42,  76 => 40,  75 => 38,  74 => 37,  73 => 33,  72 => 32,  71 => 30,  70 => 28,  69 => 27,  67 => 26,  64 => 24,  62 => 22,  61 => 20,  60 => 19,  59 => 15,  58 => 14,  57 => 12,  56 => 10,  55 => 9,  53 => 8,  51 => 7,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/structure/actions_in_table_structure.twig", "/home/vagrant/code/phpmyadmin/templates/table/structure/actions_in_table_structure.twig");
    }
}
