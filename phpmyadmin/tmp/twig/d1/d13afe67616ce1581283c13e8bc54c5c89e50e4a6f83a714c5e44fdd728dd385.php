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

/* table/structure/table_structure_row.twig */
class __TwigTemplate_db03ff54063fd110515fe24b7b0528b25c932c539c844910ab92ef1db95142da extends \Twig\Template
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
        echo "<td class=\"center print_ignore\">
    <input type=\"checkbox\" class=\"checkall\" name=\"selected_fld[]\" value=\"";
        // line 2
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["row"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["Field"] ?? null) : null), "html", null, true);
        echo "\" id=\"checkbox_row_";
        echo twig_escape_filter($this->env, ($context["rownum"] ?? null), "html", null, true);
        echo "\"/>
</td>
<td class=\"right\">";
        // line 4
        echo twig_escape_filter($this->env, ($context["rownum"] ?? null), "html", null, true);
        echo "</td>
<th class=\"nowrap\">
    <label for=\"checkbox_row_";
        // line 6
        echo twig_escape_filter($this->env, ($context["rownum"] ?? null), "html", null, true);
        echo "\">
        ";
        // line 7
        echo ($context["displayed_field_name"] ?? null);
        echo "
    </label>
</th>
<td ";
        // line 10
        echo twig_escape_filter($this->env, ($context["type_nowrap"] ?? null), "html", null, true);
        echo ">
    <bdo dir=\"ltr\" lang=\"en\">
        ";
        // line 12
        echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["extracted_columnspec"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["displayed_type"] ?? null) : null);
        echo "
        ";
        // line 13
        if ((((($context["relation_commwork"] ?? null) && ($context["relation_mimework"] ?? null)) && ($context["browse_mime"] ?? null)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 14
($context["mime_map"] ?? null), (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["row"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["Field"] ?? null) : null), [], "array", false, true, false, 14), "mimetype", [], "array", true, true, false, 14))) {
            // line 15
            echo "            <br />MIME: ";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_replace_filter((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["mime_map"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[(($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["row"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["Field"] ?? null) : null)] ?? null) : null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["mimetype"] ?? null) : null), ["_" => "/"])), "html", null, true);
            echo "
        ";
        }
        // line 17
        echo "    </bdo>
</td>
<td>
";
        // line 20
        if ( !twig_test_empty(($context["field_charset"] ?? null))) {
            // line 21
            echo "    <dfn title=\"";
            echo twig_escape_filter($this->env, PhpMyAdmin\Charsets::getCollationDescr(($context["field_charset"] ?? null)), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["field_charset"] ?? null), "html", null, true);
            echo "</dfn>
";
        }
        // line 23
        echo "</td>
<td class=\"column_attribute nowrap\">";
        // line 24
        echo twig_escape_filter($this->env, ($context["attribute"] ?? null), "html", null, true);
        echo "</td>
<td>";
        // line 25
        echo twig_escape_filter($this->env, ((((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["row"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["Null"] ?? null) : null) == "YES")) ? (_gettext("Yes")) : (_gettext("No"))), "html", null, true);
        echo "</td>
<td class=\"nowrap\">
    ";
        // line 27
        if ( !(null === (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["row"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["Default"] ?? null) : null))) {
            // line 28
            echo "        ";
            if (((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["extracted_columnspec"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["type"] ?? null) : null) == "bit")) {
                // line 29
                echo "            ";
                echo twig_escape_filter($this->env, PhpMyAdmin\Util::convertBitDefaultValue((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["row"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["Default"] ?? null) : null)), "html", null, true);
                echo "
        ";
            } else {
                // line 31
                echo "            ";
                echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["row"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["Default"] ?? null) : null);
                echo "
        ";
            }
            // line 33
            echo "    ";
        } else {
            // line 34
            echo "        <em>";
            echo _pgettext(            "None for default", "None");
            echo "</em>
    ";
        }
        // line 36
        echo "</td>
";
        // line 37
        if (($context["show_column_comments"] ?? null)) {
            // line 38
            echo "    <td>
        ";
            // line 39
            echo twig_escape_filter($this->env, ($context["comments"] ?? null), "html", null, true);
            echo "
    </td>
";
        }
        // line 42
        echo "<td class=\"nowrap\">";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["row"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["Extra"] ?? null) : null)), "html", null, true);
        echo "</td>
";
        // line 43
        if (( !($context["tbl_is_view"] ?? null) &&  !($context["db_is_system_schema"] ?? null))) {
            // line 44
            echo "    <td class=\"edit center print_ignore\">
        <a class=\"change_column_anchor ajax\" href=\"tbl_structure.php";
            // line 46
            echo twig_escape_filter($this->env, ($context["url_query"] ?? null), "html", null, true);
            echo "&amp;field=";
            echo twig_escape_filter($this->env, twig_urlencode_filter((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["row"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["Field"] ?? null) : null)), "html", null, true);
            echo "&amp;change_column=1\">
            ";
            // line 47
            echo (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["titles"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["Change"] ?? null) : null);
            echo "
        </a>
    </td>
    <td class=\"drop center print_ignore\">
        <a class=\"drop_column_anchor ajax\" href=\"sql.php\" data-post=\"";
            // line 51
            echo twig_escape_filter($this->env, ($context["url_query"] ?? null), "html", null, true);
            echo "&amp;sql_query=";
            // line 52
            echo twig_escape_filter($this->env, twig_urlencode_filter((((("ALTER TABLE " . PhpMyAdmin\Util::backquote(($context["table"] ?? null))) . " DROP ") . PhpMyAdmin\Util::backquote((($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f =             // line 53
($context["row"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["Field"] ?? null) : null))) . ";")), "html", null, true);
            // line 54
            echo "&amp;dropped_column=";
            echo twig_escape_filter($this->env, twig_urlencode_filter((($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["row"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["Field"] ?? null) : null)), "html", null, true);
            echo "&amp;purge=1&amp;message_to_show=";
            // line 55
            echo twig_escape_filter($this->env, twig_urlencode_filter(sprintf(_gettext("Column %s has been dropped."), twig_escape_filter($this->env, (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["row"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["Field"] ?? null) : null)))), "html", null, true);
            echo "\">
            ";
            // line 56
            echo (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["titles"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["Drop"] ?? null) : null);
            echo "
        </a>
    </td>
";
        }
    }

    public function getTemplateName()
    {
        return "table/structure/table_structure_row.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 56,  180 => 55,  176 => 54,  174 => 53,  173 => 52,  170 => 51,  163 => 47,  157 => 46,  154 => 44,  152 => 43,  147 => 42,  141 => 39,  138 => 38,  136 => 37,  133 => 36,  127 => 34,  124 => 33,  118 => 31,  112 => 29,  109 => 28,  107 => 27,  102 => 25,  98 => 24,  95 => 23,  87 => 21,  85 => 20,  80 => 17,  74 => 15,  72 => 14,  71 => 13,  67 => 12,  62 => 10,  56 => 7,  52 => 6,  47 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/structure/table_structure_row.twig", "/home/vagrant/code/phpmyadmin/templates/table/structure/table_structure_row.twig");
    }
}
