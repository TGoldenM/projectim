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

/* table/structure/optional_action_links.twig */
class __TwigTemplate_5ed814eaca7be04817f29276e0803c54c592a16b92a1fa26ac5d45815bf51b7a extends \Twig\Template
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
        echo "<a href=\"#\" id=\"printView\">";
        echo PhpMyAdmin\Util::getIcon("b_print", _gettext("Print"), true);
        echo "</a>
";
        // line 2
        if (( !($context["tbl_is_view"] ?? null) &&  !($context["db_is_system_schema"] ?? null))) {
            // line 3
            echo "    ";
            // line 4
            echo "    ";
            if (((($context["mysql_int_version"] ?? null) < 80000) || ($context["is_mariadb"] ?? null))) {
                // line 5
                echo "        <a href=\"sql.php\" data-post=\"";
                echo ($context["url_query"] ?? null);
                echo "&amp;session_max_rows=all&amp;sql_query=";
                // line 6
                echo twig_escape_filter($this->env, twig_urlencode_filter((("SELECT * FROM " . PhpMyAdmin\Util::backquote(($context["table"] ?? null))) . " PROCEDURE ANALYSE()")), "html", null, true);
                // line 7
                echo "\" style=\"margin-right: 0;\">
            ";
                // line 8
                echo PhpMyAdmin\Util::getIcon("b_tblanalyse", _gettext("Propose table structure"), true);
                // line 12
                echo "
        </a>
        ";
                // line 14
                echo PhpMyAdmin\Util::showMySQLDocu("procedure_analyse");
                echo "
    ";
            }
            // line 16
            echo "    ";
            if (($context["is_active"] ?? null)) {
                // line 17
                echo "        <a href=\"tbl_tracking.php";
                echo ($context["url_query"] ?? null);
                echo "\">
            ";
                // line 18
                echo PhpMyAdmin\Util::getIcon("eye", _gettext("Track table"), true);
                echo "
        </a>
    ";
            }
            // line 21
            echo "    <a href=\"#\" id=\"move_columns_anchor\">
        ";
            // line 22
            echo PhpMyAdmin\Util::getIcon("b_move", _gettext("Move columns"), true);
            echo "
    </a>
    <a href=\"normalization.php";
            // line 24
            echo ($context["url_query"] ?? null);
            echo "\">
        ";
            // line 25
            echo PhpMyAdmin\Util::getIcon("normalize", _gettext("Normalize"), true);
            echo "
    </a>
";
        }
        // line 28
        if ((($context["tbl_is_view"] ?? null) &&  !($context["db_is_system_schema"] ?? null))) {
            // line 29
            echo "    ";
            if (($context["is_active"] ?? null)) {
                // line 30
                echo "        <a href=\"tbl_tracking.php";
                echo ($context["url_query"] ?? null);
                echo "\">
            ";
                // line 31
                echo PhpMyAdmin\Util::getIcon("eye", _gettext("Track view"), true);
                echo "
        </a>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "table/structure/optional_action_links.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 31,  106 => 30,  103 => 29,  101 => 28,  95 => 25,  91 => 24,  86 => 22,  83 => 21,  77 => 18,  72 => 17,  69 => 16,  64 => 14,  60 => 12,  58 => 8,  55 => 7,  53 => 6,  49 => 5,  46 => 4,  44 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/structure/optional_action_links.twig", "/home/vagrant/code/phpmyadmin/templates/table/structure/optional_action_links.twig");
    }
}
