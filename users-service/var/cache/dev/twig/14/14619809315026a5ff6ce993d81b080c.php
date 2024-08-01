<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @WebProfiler/Collector/config.html.twig */
class __TwigTemplate_3304cc000e072bba70fead6d00d527e0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/config.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/config.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        yield "    ";
        if (("unknown" == CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyState", [], "any", false, false, false, 4))) {
            // line 5
            yield "        ";
            $context["block_status"] = "";
            // line 6
            yield "        ";
            $context["symfony_version_status"] = "Unable to retrieve information about the Symfony version.";
            // line 7
            yield "    ";
        } elseif (("eol" == CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyState", [], "any", false, false, false, 7))) {
            // line 8
            yield "        ";
            $context["block_status"] = "red";
            // line 9
            yield "        ";
            $context["symfony_version_status"] = "This Symfony version will no longer receive security fixes.";
            // line 10
            yield "    ";
        } elseif (("eom" == CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyState", [], "any", false, false, false, 10))) {
            // line 11
            yield "        ";
            $context["block_status"] = "yellow";
            // line 12
            yield "        ";
            $context["symfony_version_status"] = "This Symfony version will only receive security fixes.";
            // line 13
            yield "    ";
        } elseif (("dev" == CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyState", [], "any", false, false, false, 13))) {
            // line 14
            yield "        ";
            $context["block_status"] = "yellow";
            // line 15
            yield "        ";
            $context["symfony_version_status"] = "This Symfony version is still in the development phase.";
            // line 16
            yield "    ";
        } else {
            // line 17
            yield "        ";
            $context["block_status"] = "";
            // line 18
            yield "        ";
            $context["symfony_version_status"] = "";
            // line 19
            yield "    ";
        }
        // line 20
        yield "
    ";
        // line 21
        $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 22
            yield "        <span class=\"sf-toolbar-label\">
            ";
            // line 23
            yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/symfony.svg");
            yield "
        </span>
        <span class=\"sf-toolbar-value\">";
            // line 25
            ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyState", [], "any", true, true, false, 25)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyversion", [], "any", false, false, false, 25), "html", null, true)) : (yield "n/a"));
            yield "</span>
    ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 27
        yield "
    ";
        // line 28
        $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 29
            yield "        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece\">
                <b>Profiler token</b>
                <span>
                    ";
            // line 33
            if (($context["profiler_url"] ?? null)) {
                // line 34
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["profiler_url"] ?? null), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "token", [], "any", false, false, false, 34), "html", null, true);
                yield "</a>
                    ";
            } else {
                // line 36
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "token", [], "any", false, false, false, 36), "html", null, true);
                yield "
                    ";
            }
            // line 38
            yield "                </span>
            </div>

            ";
            // line 41
            if ( !("n/a" === CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "env", [], "any", false, false, false, 41))) {
                // line 42
                yield "                <div class=\"sf-toolbar-info-piece\">
                    <b>Environment</b>
                    <span>";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "env", [], "any", false, false, false, 44), "html", null, true);
                yield "</span>
                </div>
            ";
            }
            // line 47
            yield "
            ";
            // line 48
            if ( !("n/a" === CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "debug", [], "any", false, false, false, 48))) {
                // line 49
                yield "                <div class=\"sf-toolbar-info-piece\">
                    <b>Debug</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-";
                // line 51
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "debug", [], "any", false, false, false, 51)) ? ("green") : ("red"));
                yield "\">";
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "debug", [], "any", false, false, false, 51)) ? ("enabled") : ("disabled"));
                yield "</span>
                </div>
            ";
            }
            // line 54
            yield "        </div>

        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php\">
                <b>PHP version</b>
                <span";
            // line 59
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "phpversionextra", [], "any", false, false, false, 59)) {
                yield " title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "phpversion", [], "any", false, false, false, 59) . CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "phpversionextra", [], "any", false, false, false, 59)), "html", null, true);
                yield "\"";
            }
            yield ">
                    ";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "phpversion", [], "any", false, false, false, 60), "html", null, true);
            yield "
                    &nbsp; <a href=\"";
            // line 61
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler_phpinfo");
            yield "\">View phpinfo()</a>
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php-ext\">
                <b>PHP Extensions</b>
                ";
            // line 67
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "hasXdebugInfo", [], "any", false, false, false, 67)) {
                // line 68
                yield "                    <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler_xdebug");
                yield "\" title=\"View xdebug_info()\">
                ";
            }
            // line 70
            yield "                <span class=\"sf-toolbar-status sf-toolbar-status-";
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "hasXdebug", [], "any", false, false, false, 70)) ? ("green") : ("gray"));
            yield "\">Xdebug ";
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "hasXdebug", [], "any", false, false, false, 70)) ? ("✓") : ("✗"));
            yield "</span>
                ";
            // line 71
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "hasXdebugInfo", [], "any", false, false, false, 71)) {
                // line 72
                yield "                    </a>
                ";
            }
            // line 74
            yield "                <span class=\"sf-toolbar-status sf-toolbar-status-";
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "hasapcu", [], "any", false, false, false, 74)) ? ("green") : ("gray"));
            yield "\">APCu ";
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "hasapcu", [], "any", false, false, false, 74)) ? ("✓") : ("✗"));
            yield "</span>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 75
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "haszendopcache", [], "any", false, false, false, 75)) ? ("green") : ("red"));
            yield "\">OPcache ";
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "haszendopcache", [], "any", false, false, false, 75)) ? ("✓") : ("✗"));
            yield "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>PHP SAPI</b>
                <span>";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "sapiName", [], "any", false, false, false, 80), "html", null, true);
            yield "</span>
            </div>
        </div>

        <div class=\"sf-toolbar-info-group\">
            ";
            // line 85
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyversion", [], "any", true, true, false, 85)) {
                // line 86
                yield "                <div class=\"sf-toolbar-info-piece\">
                    <b>Resources</b>
                    <span>
                        <a href=\"https://symfony.com/doc/";
                // line 89
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyversion", [], "any", false, false, false, 89), "html", null, true);
                yield "/index.html\" rel=\"help\">
                            Read Symfony ";
                // line 90
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyversion", [], "any", false, false, false, 90), "html", null, true);
                yield " Docs
                        </a>
                    </span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Help</b>
                    <span>
                        <a href=\"https://symfony.com/support\">
                            Symfony Support Channels
                        </a>
                    </span>
                </div>
            ";
            }
            // line 103
            yield "        </div>
    ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 105
        yield "
    ";
        // line 106
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => true, "name" => "config", "status" => ($context["block_status"] ?? null), "additional_classes" => "sf-toolbar-block-right", "block_attrs" => (("title=\"" . ($context["symfony_version_status"] ?? null)) . "\"")]);
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 109
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 110
        yield "    <span class=\"label label-status-";
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyState", [], "any", false, false, false, 110) == "eol")) ? ("red") : (((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyState", [], "any", false, false, false, 110), ["eom", "dev"])) ? ("yellow") : (""))));
        yield "\">
        <span class=\"icon\">";
        // line 111
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/config.svg");
        yield "</span>
        <strong>Configuration</strong>
    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 116
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 117
        yield "    <h2>Symfony Configuration</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyversion", [], "any", false, false, false, 121), "html", null, true);
        yield "</span>
            <span class=\"label\">Symfony version</span>
        </div>

        ";
        // line 125
        if ( !("n/a" === CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "env", [], "any", false, false, false, 125))) {
            // line 126
            yield "            <div class=\"metric\">
                <span class=\"value\">";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "env", [], "any", false, false, false, 127), "html", null, true);
            yield "</span>
                <span class=\"label\">Environment</span>
            </div>
        ";
        }
        // line 131
        yield "
        ";
        // line 132
        if ( !("n/a" === CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "debug", [], "any", false, false, false, 132))) {
            // line 133
            yield "            <div class=\"metric\">
                <span class=\"value\">";
            // line 134
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "debug", [], "any", false, false, false, 134)) ? ("enabled") : ("disabled"));
            yield "</span>
                <span class=\"label\">Debug</span>
            </div>
        ";
        }
        // line 138
        yield "    </div>

    ";
        // line 140
        $context["symfony_status"] = ["dev" => "Unstable Version", "stable" => "Stable Version", "eom" => "Maintenance Ended", "eol" => "Version Expired"];
        // line 141
        yield "    ";
        $context["symfony_status_class"] = ["dev" => "warning", "stable" => "success", "eom" => "warning", "eol" => "error"];
        // line 142
        yield "    <table>
        <thead class=\"small\">
            <tr>
                <th>Symfony Status</th>
                <th>Bugs ";
        // line 146
        yield ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonystate", [], "any", false, false, false, 146), ["eom", "eol"])) ? ("were") : ("are"));
        yield " fixed until</th>
                <th>Security issues ";
        // line 147
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonystate", [], "any", false, false, false, 147) == "eol")) ? ("were") : ("are"));
        yield " fixed until</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class=\"font-normal\">
                    <span class=\"label status-";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_0 = ($context["symfony_status_class"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonystate", [], "any", false, false, false, 154)] ?? null) : null), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), (($__internal_compile_1 = ($context["symfony_status"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonystate", [], "any", false, false, false, 154)] ?? null) : null)), "html", null, true);
        yield "</span>
                    ";
        // line 155
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonylts", [], "any", false, false, false, 155)) {
            // line 156
            yield "                        &nbsp; <span class=\"label status-success\">Long-Term Support</span>
                    ";
        }
        // line 158
        yield "                </td>
                <td class=\"font-normal\">";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyeom", [], "any", false, false, false, 159), "html", null, true);
        yield "</td>
                <td class=\"font-normal\">";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyeol", [], "any", false, false, false, 160), "html", null, true);
        yield "</td>
                <td class=\"font-normal\">
                    <a href=\"https://symfony.com/releases/";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyminorversion", [], "any", false, false, false, 162), "html", null, true);
        yield "#release-checker\">View roadmap</a>
                </td>
            </tr>
        </tbody>
    </table>

    <h2>PHP Configuration</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "phpversion", [], "any", false, false, false, 172), "html", null, true);
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "phpversionextra", [], "any", false, false, false, 172)) {
            yield " <span class=\"unit\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "phpversionextra", [], "any", false, false, false, 172), "html", null, true);
            yield "</span>";
        }
        yield "</span>
            <span class=\"label\">PHP version</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "phparchitecture", [], "any", false, false, false, 177), "html", null, true);
        yield " <span class=\"unit\">bits</span></span>
            <span class=\"label\">Architecture</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "phpintllocale", [], "any", false, false, false, 182), "html", null, true);
        yield "</span>
            <span class=\"label\">Intl locale</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "phptimezone", [], "any", false, false, false, 187), "html", null, true);
        yield "</span>
            <span class=\"label\">Timezone</span>
        </div>
    </div>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 194
        yield Twig\Extension\CoreExtension::source($this->env, (("@WebProfiler/Icon/" . ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "haszendopcache", [], "any", false, false, false, 194)) ? ("yes") : ("no"))) . ".svg"));
        yield "</span>
            <span class=\"label\">OPcache</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 199
        yield Twig\Extension\CoreExtension::source($this->env, (("@WebProfiler/Icon/" . ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "hasapcu", [], "any", false, false, false, 199)) ? ("yes") : ("no-gray"))) . ".svg"));
        yield "</span>
            <span class=\"label\">APCu</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 204
        yield Twig\Extension\CoreExtension::source($this->env, (("@WebProfiler/Icon/" . ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "hasxdebug", [], "any", false, false, false, 204)) ? ("yes") : ("no-gray"))) . ".svg"));
        yield "</span>
            <span class=\"label\">Xdebug</span>
        </div>
    </div>

    <p>
        <a href=\"";
        // line 210
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler_phpinfo");
        yield "\">View full PHP configuration</a>
    </p>

    ";
        // line 213
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "bundles", [], "any", false, false, false, 213)) {
            // line 214
            yield "        <h2>Enabled Bundles <small>(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "bundles", [], "any", false, false, false, 214)), "html", null, true);
            yield ")</small></h2>
        <table>
            <thead>
                <tr>
                    <th class=\"key\">Name</th>
                    <th>Class</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 223
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::sort($this->env, Twig\Extension\CoreExtension::keys(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "bundles", [], "any", false, false, false, 223))));
            foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                // line 224
                yield "                <tr>
                    <th scope=\"row\" class=\"font-normal\">";
                // line 225
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                yield "</th>
                    <td class=\"font-normal\">";
                // line 226
                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, (($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "bundles", [], "any", false, false, false, 226)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["name"]] ?? null) : null));
                yield "</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 229
            yield "            </tbody>
        </table>
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@WebProfiler/Collector/config.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  551 => 229,  542 => 226,  538 => 225,  535 => 224,  531 => 223,  518 => 214,  516 => 213,  510 => 210,  501 => 204,  493 => 199,  485 => 194,  475 => 187,  467 => 182,  459 => 177,  446 => 172,  433 => 162,  428 => 160,  424 => 159,  421 => 158,  417 => 156,  415 => 155,  409 => 154,  399 => 147,  395 => 146,  389 => 142,  386 => 141,  384 => 140,  380 => 138,  373 => 134,  370 => 133,  368 => 132,  365 => 131,  358 => 127,  355 => 126,  353 => 125,  346 => 121,  340 => 117,  333 => 116,  321 => 111,  316 => 110,  309 => 109,  299 => 106,  296 => 105,  291 => 103,  275 => 90,  271 => 89,  266 => 86,  264 => 85,  256 => 80,  246 => 75,  239 => 74,  235 => 72,  233 => 71,  226 => 70,  220 => 68,  218 => 67,  209 => 61,  205 => 60,  197 => 59,  190 => 54,  182 => 51,  178 => 49,  176 => 48,  173 => 47,  167 => 44,  163 => 42,  161 => 41,  156 => 38,  150 => 36,  142 => 34,  140 => 33,  134 => 29,  132 => 28,  129 => 27,  123 => 25,  118 => 23,  115 => 22,  113 => 21,  110 => 20,  107 => 19,  104 => 18,  101 => 17,  98 => 16,  95 => 15,  92 => 14,  89 => 13,  86 => 12,  83 => 11,  80 => 10,  77 => 9,  74 => 8,  71 => 7,  68 => 6,  65 => 5,  62 => 4,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/config.html.twig", "C:\\Users\\Arman Saleem\\Desktop\\symfony\\users-service\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\config.html.twig");
    }
}
