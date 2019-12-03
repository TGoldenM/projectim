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

/* table/structure/display_structure.twig */
class __TwigTemplate_ffdc838ffb3880b3b4dae6a8bc4cdf4b50ede7685d90b30260982c3c2b301ba3 extends \Twig\Template
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
        echo "<form method=\"post\" action=\"tbl_structure.php\" name=\"fieldsForm\" id=\"fieldsForm\"
    class=\"ajax";
        // line 2
        echo ((($context["hide_structure_actions"] ?? null)) ? (" HideStructureActions") : (""));
        echo "\">
    ";
        // line 3
        echo PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
        echo "
    <input type=\"hidden\" name=\"table_type\" value=";
        // line 5
        if (($context["db_is_system_schema"] ?? null)) {
            // line 6
            echo "\"information_schema\"";
        } elseif (        // line 7
($context["tbl_is_view"] ?? null)) {
            // line 8
            echo "\"view\"";
        } else {
            // line 10
            echo "\"table\"";
        }
        // line 11
        echo " />
    <div class=\"responsivetable\">
    <table id=\"tablestructure\" class=\"data topmargin\">
        ";
        // line 15
        echo "        ";
        $this->loadTemplate("table/structure/table_structure_header.twig", "table/structure/display_structure.twig", 15)->display(twig_to_array(["db_is_system_schema" =>         // line 16
($context["db_is_system_schema"] ?? null), "tbl_is_view" =>         // line 17
($context["tbl_is_view"] ?? null), "show_column_comments" =>         // line 18
($context["show_column_comments"] ?? null)]));
        // line 20
        echo "        <tbody>
        ";
        // line 22
        echo "        ";
        $context["rownum"] = 0;
        // line 23
        echo "        ";
        $context["columns_list"] = [];
        // line 24
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 25
            echo "            ";
            $context["rownum"] = (($context["rownum"] ?? null) + 1);
            // line 26
            echo "            ";
            $context["columns_list"] = twig_array_merge(($context["columns_list"] ?? null), [0 => (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["row"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["Field"] ?? null) : null)]);
            // line 27
            echo "            ";
            $context["field_charset"] = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["row"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["Collation"] ?? null) : null);
            // line 28
            echo "
            ";
            // line 29
            $context["extracted_columnspec"] = PhpMyAdmin\Util::extractColumnSpec((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["row"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["Type"] ?? null) : null));
            // line 30
            echo "            ";
            $context["attribute"] = (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["extracted_columnspec"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["attribute"] ?? null) : null);
            // line 31
            echo "            ";
            if ( !(strpos((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["row"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["Extra"] ?? null) : null), "on update CURRENT_TIMESTAMP") === false)) {
                // line 33
                echo "                ";
                $context["attribute"] = "on update CURRENT_TIMESTAMP";
                // line 34
                echo "            ";
            }
            // line 35
            echo "
            ";
            // line 36
            if ((null === (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["row"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["Default"] ?? null) : null))) {
                // line 37
                echo "                ";
                if (((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["row"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["Null"] ?? null) : null) == "YES")) {
                    // line 38
                    echo "                    ";
                    $context["row"] = twig_array_merge($context["row"], ["Default" => "<em>NULL</em>"]);
                    // line 39
                    echo "                ";
                }
                // line 40
                echo "            ";
            } else {
                // line 41
                echo "                ";
                $context["row"] = twig_array_merge($context["row"], ["Default" => twig_escape_filter($this->env, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["row"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["Default"] ?? null) : null))]);
                // line 42
                echo "            ";
            }
            // line 43
            echo "
            ";
            // line 44
            $context["field_name"] = twig_escape_filter($this->env, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["row"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["Field"] ?? null) : null));
            // line 45
            echo "            ";
            $context["displayed_field_name"] = ($context["field_name"] ?? null);
            // line 46
            echo "            ";
            // line 47
            echo "            ";
            $context["comments"] = "";
            // line 48
            echo "            ";
            // line 49
            echo "
            ";
            // line 50
            if (twig_get_attribute($this->env, $this->source, ($context["comments_map"] ?? null), (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["row"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["Field"] ?? null) : null), [], "array", true, true, false, 50)) {
                // line 51
                echo "                ";
                ob_start(function () { return ''; });
                // line 52
                echo "<span class=\"commented_column\" title=\"";
                // line 53
                echo twig_escape_filter($this->env, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["comments_map"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[(($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["row"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["Field"] ?? null) : null)] ?? null) : null), "html", null, true);
                echo "\">";
                // line 54
                echo ($context["field_name"] ?? null);
                // line 55
                echo "</span>";
                $context["displayed_field_name"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 57
                echo "                ";
                $context["comments"] = (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["comments_map"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[(($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["row"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["Field"] ?? null) : null)] ?? null) : null);
                // line 58
                echo "            ";
            }
            // line 59
            echo "
            ";
            // line 60
            if ((($context["primary"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["primary"] ?? null), "hasColumn", [0 => ($context["field_name"] ?? null)], "method", false, false, false, 60))) {
                // line 61
                echo "                ";
                $context["displayed_field_name"] = (($context["displayed_field_name"] ?? null) . PhpMyAdmin\Util::getImage("b_primary", _gettext("Primary")));
                // line 64
                echo "            ";
            }
            // line 65
            echo "            ";
            if (twig_in_filter(($context["field_name"] ?? null), ($context["columns_with_index"] ?? null))) {
                // line 66
                echo "                ";
                $context["displayed_field_name"] = (($context["displayed_field_name"] ?? null) . PhpMyAdmin\Util::getImage("bd_primary", _gettext("Index")));
                // line 69
                echo "            ";
            }
            // line 70
            echo "        <tr>
            ";
            // line 71
            $this->loadTemplate("table/structure/table_structure_row.twig", "table/structure/display_structure.twig", 71)->display(twig_to_array(["row" =>             // line 72
$context["row"], "rownum" =>             // line 73
($context["rownum"] ?? null), "displayed_field_name" => preg_replace("/[\\x00-\\x1F]/", "&#x2051;",             // line 77
($context["displayed_field_name"] ?? null)), "type_nowrap" => PhpMyAdmin\Util::getClassForType((($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f =             // line 79
($context["extracted_columnspec"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["type"] ?? null) : null)), "extracted_columnspec" =>             // line 80
($context["extracted_columnspec"] ?? null), "attribute" =>             // line 81
($context["attribute"] ?? null), "tbl_is_view" =>             // line 82
($context["tbl_is_view"] ?? null), "db_is_system_schema" =>             // line 83
($context["db_is_system_schema"] ?? null), "url_query" =>             // line 84
($context["url_query"] ?? null), "titles" =>             // line 85
($context["titles"] ?? null), "table" =>             // line 86
($context["table"] ?? null), "tbl_storage_engine" =>             // line 87
($context["tbl_storage_engine"] ?? null), "field_charset" =>             // line 88
($context["field_charset"] ?? null), "comments" =>             // line 89
($context["comments"] ?? null), "show_column_comments" =>             // line 90
($context["show_column_comments"] ?? null), "relation_commwork" =>             // line 91
($context["relation_commwork"] ?? null), "relation_mimework" =>             // line 92
($context["relation_mimework"] ?? null), "browse_mime" =>             // line 93
($context["browse_mime"] ?? null)]));
            // line 95
            echo "            ";
            if (( !($context["tbl_is_view"] ?? null) &&  !($context["db_is_system_schema"] ?? null))) {
                // line 96
                echo "                ";
                $this->loadTemplate("table/structure/actions_in_table_structure.twig", "table/structure/display_structure.twig", 96)->display(twig_to_array(["row" =>                 // line 97
$context["row"], "rownum" =>                 // line 98
($context["rownum"] ?? null), "extracted_columnspec" =>                 // line 99
($context["extracted_columnspec"] ?? null), "type" => (( !twig_test_empty((($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 =                 // line 100
($context["extracted_columnspec"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["print_type"] ?? null) : null))) ? ((($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["extracted_columnspec"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["print_type"] ?? null) : null)) : ("")), "tbl_storage_engine" =>                 // line 101
($context["tbl_storage_engine"] ?? null), "primary" =>                 // line 102
($context["primary"] ?? null), "field_name" =>                 // line 103
($context["field_name"] ?? null), "url_query" =>                 // line 104
($context["url_query"] ?? null), "titles" =>                 // line 105
($context["titles"] ?? null), "columns_with_unique_index" =>                 // line 106
($context["columns_with_unique_index"] ?? null), "is_in_central_columns" => ((twig_in_filter((($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b =                 // line 107
$context["row"]) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["Field"] ?? null) : null), ($context["central_list"] ?? null))) ? (true) : (false)), "central_columns_work" =>                 // line 108
($context["central_columns_work"] ?? null), "table" =>                 // line 109
($context["table"] ?? null), "hide_structure_actions" =>                 // line 110
($context["hide_structure_actions"] ?? null), "mysql_int_version" =>                 // line 111
($context["mysql_int_version"] ?? null)]));
                // line 113
                echo "            ";
            }
            // line 114
            echo "        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "        </tbody>
    </table>
    </div>
    ";
        // line 119
        $this->loadTemplate("table/structure/check_all_table_column.twig", "table/structure/display_structure.twig", 119)->display(twig_to_array(["pma_theme_image" =>         // line 120
($context["pma_theme_image"] ?? null), "text_dir" =>         // line 121
($context["text_dir"] ?? null), "tbl_is_view" =>         // line 122
($context["tbl_is_view"] ?? null), "db_is_system_schema" =>         // line 123
($context["db_is_system_schema"] ?? null), "tbl_storage_engine" =>         // line 124
($context["tbl_storage_engine"] ?? null), "central_columns_work" =>         // line 125
($context["central_columns_work"] ?? null)]));
        // line 127
        echo "</form>
<hr class=\"print_ignore\"/>
";
        // line 129
        $this->loadTemplate("table/structure/move_columns_dialog.twig", "table/structure/display_structure.twig", 129)->display(twig_to_array(["db" =>         // line 130
($context["db"] ?? null), "table" =>         // line 131
($context["table"] ?? null)]));
        // line 134
        echo "<div id=\"structure-action-links\">
    ";
        // line 135
        if ((($context["tbl_is_view"] ?? null) &&  !($context["db_is_system_schema"] ?? null))) {
            // line 136
            echo "        ";
            $context["edit_view_url"] = ("view_create.php" . ($context["edit_view_url"] ?? null));
            // line 137
            echo "        ";
            echo PhpMyAdmin\Util::linkOrButton(            // line 138
($context["edit_view_url"] ?? null), PhpMyAdmin\Util::getIcon("b_edit", _gettext("Edit view"), true));
            // line 140
            echo "
    ";
        }
        // line 142
        echo "    ";
        $this->loadTemplate("table/structure/optional_action_links.twig", "table/structure/display_structure.twig", 142)->display(twig_to_array(["url_query" =>         // line 143
($context["url_query"] ?? null), "tbl_is_view" =>         // line 144
($context["tbl_is_view"] ?? null), "db_is_system_schema" =>         // line 145
($context["db_is_system_schema"] ?? null), "table" =>         // line 146
($context["table"] ?? null), "is_active" =>         // line 147
($context["is_active"] ?? null), "mysql_int_version" =>         // line 148
($context["mysql_int_version"] ?? null), "is_mariadb" =>         // line 149
($context["is_mariadb"] ?? null)]));
        // line 151
        echo "</div>
";
        // line 152
        if (( !($context["tbl_is_view"] ?? null) &&  !($context["db_is_system_schema"] ?? null))) {
            // line 153
            echo "    ";
            $this->loadTemplate("table/structure/add_column.twig", "table/structure/display_structure.twig", 153)->display(twig_to_array(["columns_list" =>             // line 154
($context["columns_list"] ?? null), "db" =>             // line 155
($context["db"] ?? null), "table" =>             // line 156
($context["table"] ?? null)]));
        }
        // line 159
        echo "
";
        // line 161
        if ((( !($context["tbl_is_view"] ?? null) &&  !($context["db_is_system_schema"] ?? null)) && ("ARCHIVE" !=         // line 162
($context["tbl_storage_engine"] ?? null)))) {
            // line 163
            echo "    ";
            echo PhpMyAdmin\Index::getHtmlForDisplayIndexes();
            echo "
";
        }
        // line 165
        echo "
";
        // line 167
        if (($context["have_partitioning"] ?? null)) {
            // line 168
            echo "    ";
            // line 169
            echo "    ";
            if (( !twig_test_empty(($context["partition_names"] ?? null)) &&  !(null === (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["partition_names"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[0] ?? null) : null)))) {
                // line 170
                echo "        ";
                $context["partitions"] = PhpMyAdmin\Partition::getPartitions(($context["db"] ?? null), ($context["table"] ?? null));
                // line 171
                echo "        ";
                $context["first_partition"] = (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["partitions"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[0] ?? null) : null);
                // line 172
                echo "        ";
                $context["range_or_list"] = ((((twig_get_attribute($this->env, $this->source, ($context["first_partition"] ?? null), "getMethod", [], "method", false, false, false, 172) == "RANGE") || (twig_get_attribute($this->env, $this->source,                 // line 173
($context["first_partition"] ?? null), "getMethod", [], "method", false, false, false, 173) == "RANGE COLUMNS")) || (twig_get_attribute($this->env, $this->source,                 // line 174
($context["first_partition"] ?? null), "getMethod", [], "method", false, false, false, 174) == "LIST")) || (twig_get_attribute($this->env, $this->source,                 // line 175
($context["first_partition"] ?? null), "getMethod", [], "method", false, false, false, 175) == "LIST COLUMNS"));
                // line 176
                echo "        ";
                $context["sub_partitions"] = twig_get_attribute($this->env, $this->source, ($context["first_partition"] ?? null), "getSubPartitions", [], "method", false, false, false, 176);
                // line 177
                echo "        ";
                $context["has_sub_partitions"] = twig_get_attribute($this->env, $this->source, ($context["first_partition"] ?? null), "hasSubPartitions", [], "method", false, false, false, 177);
                // line 178
                echo "        ";
                if (($context["has_sub_partitions"] ?? null)) {
                    // line 179
                    echo "            ";
                    $context["first_sub_partition"] = (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["sub_partitions"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[0] ?? null) : null);
                    // line 180
                    echo "        ";
                }
                // line 181
                echo "
        ";
                // line 182
                $context["action_icons"] = ["ANALYZE" => PhpMyAdmin\Util::getIcon("b_search", _gettext("Analyze")), "CHECK" => PhpMyAdmin\Util::getIcon("eye", _gettext("Check")), "OPTIMIZE" => PhpMyAdmin\Util::getIcon("normalize", _gettext("Optimize")), "REBUILD" => PhpMyAdmin\Util::getIcon("s_tbl", _gettext("Rebuild")), "REPAIR" => PhpMyAdmin\Util::getIcon("b_tblops", _gettext("Repair")), "TRUNCATE" => PhpMyAdmin\Util::getIcon("b_empty", _gettext("Truncate"))];
                // line 190
                echo "        ";
                if (($context["range_or_list"] ?? null)) {
                    // line 191
                    echo "            ";
                    $context["action_icons"] = twig_array_merge(($context["action_icons"] ?? null), ["DROP" => PhpMyAdmin\Util::getIcon("b_drop", _gettext("Drop"))]);
                    // line 192
                    echo "        ";
                }
                // line 193
                echo "
        ";
                // line 194
                echo PhpMyAdmin\Util::getDivForSliderEffect("partitions", _gettext("Partitions"));
                echo "

        ";
                // line 196
                $context["remove_sql"] = (("ALTER TABLE " . PhpMyAdmin\Util::backquote(($context["table"] ?? null))) . " REMOVE PARTITIONING");
                // line 197
                echo "        ";
                $context["remove_url"] = ((("sql.php" . ($context["url_query"] ?? null)) . "&sql_query=") . twig_urlencode_filter(($context["remove_sql"] ?? null)));
                // line 198
                echo "
        ";
                // line 199
                $this->loadTemplate("table/structure/display_partitions.twig", "table/structure/display_structure.twig", 199)->display(twig_to_array(["db" =>                 // line 200
($context["db"] ?? null), "table" =>                 // line 201
($context["table"] ?? null), "url_query" =>                 // line 202
($context["url_query"] ?? null), "partitions" =>                 // line 203
($context["partitions"] ?? null), "partition_method" => twig_get_attribute($this->env, $this->source,                 // line 204
($context["first_partition"] ?? null), "getMethod", [], "method", false, false, false, 204), "partition_expression" => twig_get_attribute($this->env, $this->source,                 // line 205
($context["first_partition"] ?? null), "getExpression", [], "method", false, false, false, 205), "has_description" =>  !twig_test_empty(twig_get_attribute($this->env, $this->source,                 // line 206
($context["first_partition"] ?? null), "getDescription", [], "method", false, false, false, 206)), "has_sub_partitions" =>                 // line 207
($context["has_sub_partitions"] ?? null), "sub_partition_method" => ((                // line 208
($context["has_sub_partitions"] ?? null)) ? (twig_get_attribute($this->env, $this->source, ($context["first_sub_partition"] ?? null), "getMethod", [], "method", false, false, false, 208)) : ("")), "sub_partition_expression" => ((                // line 209
($context["has_sub_partitions"] ?? null)) ? (twig_get_attribute($this->env, $this->source, ($context["first_sub_partition"] ?? null), "getExpression", [], "method", false, false, false, 209)) : ("")), "action_icons" =>                 // line 210
($context["action_icons"] ?? null), "range_or_list" =>                 // line 211
($context["range_or_list"] ?? null), "remove_url" =>                 // line 212
($context["remove_url"] ?? null)]));
                // line 214
                echo "    ";
            } else {
                // line 215
                echo "        ";
                $this->loadTemplate("table/structure/display_partitions.twig", "table/structure/display_structure.twig", 215)->display(twig_to_array(["db" =>                 // line 216
($context["db"] ?? null), "table" =>                 // line 217
($context["table"] ?? null)]));
                // line 219
                echo "    ";
            }
            // line 220
            echo "    ";
            // line 221
            echo "    </div>
";
        }
        // line 223
        echo "
";
        // line 225
        if (($context["show_stats"] ?? null)) {
            // line 226
            echo "    ";
            echo ($context["table_stats"] ?? null);
            echo "
";
        }
        // line 228
        echo "<div class=\"clearfloat\"></div>
";
    }

    public function getTemplateName()
    {
        return "table/structure/display_structure.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  428 => 228,  422 => 226,  420 => 225,  417 => 223,  413 => 221,  411 => 220,  408 => 219,  406 => 217,  405 => 216,  403 => 215,  400 => 214,  398 => 212,  397 => 211,  396 => 210,  395 => 209,  394 => 208,  393 => 207,  392 => 206,  391 => 205,  390 => 204,  389 => 203,  388 => 202,  387 => 201,  386 => 200,  385 => 199,  382 => 198,  379 => 197,  377 => 196,  372 => 194,  369 => 193,  366 => 192,  363 => 191,  360 => 190,  358 => 182,  355 => 181,  352 => 180,  349 => 179,  346 => 178,  343 => 177,  340 => 176,  338 => 175,  337 => 174,  336 => 173,  334 => 172,  331 => 171,  328 => 170,  325 => 169,  323 => 168,  321 => 167,  318 => 165,  312 => 163,  310 => 162,  309 => 161,  306 => 159,  303 => 156,  302 => 155,  301 => 154,  299 => 153,  297 => 152,  294 => 151,  292 => 149,  291 => 148,  290 => 147,  289 => 146,  288 => 145,  287 => 144,  286 => 143,  284 => 142,  280 => 140,  278 => 138,  276 => 137,  273 => 136,  271 => 135,  268 => 134,  266 => 131,  265 => 130,  264 => 129,  260 => 127,  258 => 125,  257 => 124,  256 => 123,  255 => 122,  254 => 121,  253 => 120,  252 => 119,  247 => 116,  240 => 114,  237 => 113,  235 => 111,  234 => 110,  233 => 109,  232 => 108,  231 => 107,  230 => 106,  229 => 105,  228 => 104,  227 => 103,  226 => 102,  225 => 101,  224 => 100,  223 => 99,  222 => 98,  221 => 97,  219 => 96,  216 => 95,  214 => 93,  213 => 92,  212 => 91,  211 => 90,  210 => 89,  209 => 88,  208 => 87,  207 => 86,  206 => 85,  205 => 84,  204 => 83,  203 => 82,  202 => 81,  201 => 80,  200 => 79,  199 => 77,  198 => 73,  197 => 72,  196 => 71,  193 => 70,  190 => 69,  187 => 66,  184 => 65,  181 => 64,  178 => 61,  176 => 60,  173 => 59,  170 => 58,  167 => 57,  164 => 55,  162 => 54,  159 => 53,  157 => 52,  154 => 51,  152 => 50,  149 => 49,  147 => 48,  144 => 47,  142 => 46,  139 => 45,  137 => 44,  134 => 43,  131 => 42,  128 => 41,  125 => 40,  122 => 39,  119 => 38,  116 => 37,  114 => 36,  111 => 35,  108 => 34,  105 => 33,  102 => 31,  99 => 30,  97 => 29,  94 => 28,  91 => 27,  88 => 26,  85 => 25,  80 => 24,  77 => 23,  74 => 22,  71 => 20,  69 => 18,  68 => 17,  67 => 16,  65 => 15,  60 => 11,  57 => 10,  54 => 8,  52 => 7,  50 => 6,  48 => 5,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/structure/display_structure.twig", "/home/vagrant/code/phpmyadmin/templates/table/structure/display_structure.twig");
    }
}
