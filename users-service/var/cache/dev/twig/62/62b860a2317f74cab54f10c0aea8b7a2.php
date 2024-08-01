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

/* @WebProfiler/Collector/request.html.twig */
class __TwigTemplate_a13907a0acf44d084819cbfdd2855864 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/request.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/request.html.twig", 1);
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
        $macros["helper"] = $this;
        // line 5
        yield "    ";
        $context["request_handler"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 6
            yield "        ";
            yield CoreExtension::callMacro($macros["helper"], "macro_set_handler", [CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "controller", [], "any", false, false, false, 6)], 6, $context, $this->getSourceContext());
            yield "
    ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 8
        yield "
    ";
        // line 9
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, false, 9)) {
            // line 10
            yield "        ";
            $context["redirect_handler"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 11
                yield "            ";
                yield CoreExtension::callMacro($macros["helper"], "macro_set_handler", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, false, 11), "controller", [], "any", false, false, false, 11), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, false, 11), "route", [], "any", false, false, false, 11), ((("GET" != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, false, 11), "method", [], "any", false, false, false, 11))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, false, 11), "method", [], "any", false, false, false, 11)) : (""))], 11, $context, $this->getSourceContext());
                yield "
        ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 13
            yield "    ";
        }
        // line 14
        yield "
    ";
        // line 15
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "forwardtoken", [], "any", false, false, false, 15)) {
            // line 16
            yield "        ";
            $context["forward_profile"] = CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "childByToken", [CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "forwardtoken", [], "any", false, false, false, 16)], "method", false, false, false, 16);
            // line 17
            yield "        ";
            $context["forward_handler"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 18
                yield "            ";
                yield CoreExtension::callMacro($macros["helper"], "macro_set_handler", [((($context["forward_profile"] ?? null)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["forward_profile"] ?? null), "collector", ["request"], "method", false, false, false, 18), "controller", [], "any", false, false, false, 18)) : ("n/a"))], 18, $context, $this->getSourceContext());
                yield "
        ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 20
            yield "    ";
        }
        // line 21
        yield "
    ";
        // line 22
        $context["request_status_code_color"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "statuscode", [], "any", false, false, false, 22) >= 400)) ? ("red") : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "statuscode", [], "any", false, false, false, 22) >= 300)) ? ("yellow") : ("green"))));
        // line 23
        yield "
    ";
        // line 24
        $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 25
            yield "        <span class=\"sf-toolbar-status sf-toolbar-status-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["request_status_code_color"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "statuscode", [], "any", false, false, false, 25), "html", null, true);
            yield "</span>
        ";
            // line 26
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "route", [], "any", false, false, false, 26)) {
                // line 27
                yield "            ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, false, 27)) {
                    yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/redirect.svg");
                }
                // line 28
                yield "            ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "forwardtoken", [], "any", false, false, false, 28)) {
                    yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/forward.svg");
                }
                // line 29
                yield "            <span class=\"sf-toolbar-label\">";
                ((("GET" != CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "method", [], "any", false, false, false, 29))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "method", [], "any", false, false, false, 29), "html", null, true)) : (yield ""));
                yield " @</span>
            <span class=\"sf-toolbar-value sf-toolbar-info-piece-additional\">";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "route", [], "any", false, false, false, 30), "html", null, true);
                yield "</span>
        ";
            }
            // line 32
            yield "    ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 33
        yield "
    ";
        // line 34
        $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 35
            yield "        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece\">
                <b>HTTP status</b>
                <span>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "statuscode", [], "any", false, false, false, 38), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "statustext", [], "any", false, false, false, 38), "html", null, true);
            yield "</span>
            </div>

            ";
            // line 41
            if (("GET" != CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "method", [], "any", false, false, false, 41))) {
                // line 42
                yield "<div class=\"sf-toolbar-info-piece\">
                    <b>Method</b>
                    <span>";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "method", [], "any", false, false, false, 44), "html", null, true);
                yield "</span>
                </div>";
            }
            // line 47
            yield "
            <div class=\"sf-toolbar-info-piece\">
                <b>Controller</b>
                <span>";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["request_handler"] ?? null), "html", null, true);
            yield "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Route name</b>
                <span>";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "route", [], "any", true, true, false, 55)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "route", [], "any", false, false, false, 55), "n/a")) : ("n/a")), "html", null, true);
            yield "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Has session</b>
                <span>";
            // line 60
            if (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "sessionmetadata", [], "any", false, false, false, 60))) {
                yield "yes";
            } else {
                yield "no";
            }
            yield "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Stateless Check</b>
                <span>";
            // line 65
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "statelesscheck", [], "any", false, false, false, 65)) {
                yield "yes";
            } else {
                yield "no";
            }
            yield "</span>
            </div>
        </div>

        ";
            // line 69
            if (array_key_exists("redirect_handler", $context)) {
                // line 70
                yield "<div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>
                        <span class=\"sf-toolbar-redirection-status sf-toolbar-status-yellow\">";
                // line 73
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, false, 73), "status_code", [], "any", false, false, false, 73), "html", null, true);
                yield "</span>
                        Redirect from
                    </b>
                    <span>
                        ";
                // line 77
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["redirect_handler"] ?? null), "html", null, true);
                yield "
                        (<a href=\"";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, false, 78), "token", [], "any", false, false, false, 78)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, false, 78), "token", [], "any", false, false, false, 78), "html", null, true);
                yield "</a>)
                    </span>
                </div>
            </div>
        ";
            }
            // line 83
            yield "
        ";
            // line 84
            if (array_key_exists("forward_handler", $context)) {
                // line 85
                yield "            <div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>Forwarded to</b>
                    <span>
                        ";
                // line 89
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["forward_handler"] ?? null), "html", null, true);
                yield "
                        (<a href=\"";
                // line 90
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "forwardtoken", [], "any", false, false, false, 90)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "forwardtoken", [], "any", false, false, false, 90), "html", null, true);
                yield "</a>)
                    </span>
                </div>
            </div>
        ";
            }
            // line 95
            yield "    ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 96
        yield "
    ";
        // line 97
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null)]);
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 100
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 101
        yield "    <span class=\"label\">
        <span class=\"icon\">";
        // line 102
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/request.svg");
        yield "</span>
        <strong>Request / Response</strong>
    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 107
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 108
        yield "    ";
        $macros["helper"] = $this;
        // line 109
        yield "
    <h2>
        ";
        // line 111
        yield CoreExtension::callMacro($macros["helper"], "macro_set_handler", [CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "controller", [], "any", false, false, false, 111)], 111, $context, $this->getSourceContext());
        yield "
    </h2>

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Request</h3>

            <div class=\"tab-content\">
                <h3>GET Parameters</h3>

                ";
        // line 121
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "requestquery", [], "any", false, false, false, 121), "all", [], "any", false, false, false, 121))) {
            // line 122
            yield "                    <div class=\"empty\">
                        <p>No GET parameters</p>
                    </div>
                ";
        } else {
            // line 126
            yield "                    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "requestquery", [], "any", false, false, false, 126), "maxDepth" => 1], false);
            yield "
                ";
        }
        // line 128
        yield "
                <h3>POST Parameters</h3>

                ";
        // line 131
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "requestrequest", [], "any", false, false, false, 131), "all", [], "any", false, false, false, 131))) {
            // line 132
            yield "                    <div class=\"empty\">
                        <p>No POST parameters</p>
                    </div>
                ";
        } else {
            // line 136
            yield "                    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "requestrequest", [], "any", false, false, false, 136), "maxDepth" => 1], false);
            yield "
                ";
        }
        // line 138
        yield "
                <h4>Uploaded Files</h4>

                ";
        // line 141
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "requestfiles", [], "any", false, false, false, 141))) {
            // line 142
            yield "                    <div class=\"empty\">
                        <p>No files were uploaded</p>
                    </div>
                ";
        } else {
            // line 146
            yield "                    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "requestfiles", [], "any", false, false, false, 146), "maxDepth" => 1], false);
            yield "
                ";
        }
        // line 148
        yield "
                <h3>Request Attributes</h3>

                ";
        // line 151
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "requestattributes", [], "any", false, false, false, 151), "all", [], "any", false, false, false, 151))) {
            // line 152
            yield "                    <div class=\"empty\">
                        <p>No attributes</p>
                    </div>
                ";
        } else {
            // line 156
            yield "                    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "requestattributes", [], "any", false, false, false, 156)], false);
            yield "
                ";
        }
        // line 158
        yield "
                <h3>Request Headers</h3>
                ";
        // line 160
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "requestheaders", [], "any", false, false, false, 160), "labels" => ["Header", "Value"], "maxDepth" => 1], false);
        yield "

                <h3>Request Content</h3>

                ";
        // line 164
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "content", [], "any", false, false, false, 164) == false)) {
            // line 165
            yield "                    <div class=\"empty\">
                        <p>Request content not available (it was retrieved as a resource).</p>
                    </div>
                ";
        } elseif (CoreExtension::getAttribute($this->env, $this->source,         // line 168
($context["collector"] ?? null), "content", [], "any", false, false, false, 168)) {
            // line 169
            yield "                    <div class=\"sf-tabs\">
                        ";
            // line 170
            $context["prettyJson"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "isJsonRequest", [], "any", false, false, false, 170)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "prettyJson", [], "any", false, false, false, 170)) : (null));
            // line 171
            yield "                        ";
            if ( !(null === ($context["prettyJson"] ?? null))) {
                // line 172
                yield "                        <div class=\"tab\">
                            <h3 class=\"tab-title\">Pretty</h3>
                            <div class=\"tab-content\">
                                <div class=\"card\" style=\"max-height: 500px; overflow-y: auto;\">
                                    <pre class=\"break-long-words\">";
                // line 176
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["prettyJson"] ?? null), "html", null, true);
                yield "</pre>
                                </div>
                            </div>
                        </div>
                        ";
            }
            // line 181
            yield "
                        <div class=\"tab\">
                            <h3 class=\"tab-title\">Raw</h3>
                            <div class=\"tab-content\">
                                <div class=\"card\">
                                    <pre class=\"break-long-words\">";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "content", [], "any", false, false, false, 186), "html", null, true);
            yield "</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        } else {
            // line 192
            yield "                    <div class=\"empty\">
                        <p>No content</p>
                    </div>
                ";
        }
        // line 196
        yield "            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Response</h3>

            <div class=\"tab-content\">
                <h3>Response Headers</h3>

                ";
        // line 205
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "responseheaders", [], "any", false, false, false, 205), "labels" => ["Header", "Value"], "maxDepth" => 1], false);
        yield "
            </div>
        </div>

        <div class=\"tab ";
        // line 209
        yield (((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "requestcookies", [], "any", false, false, false, 209), "all", [], "any", false, false, false, 209)) && Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "responsecookies", [], "any", false, false, false, 209), "all", [], "any", false, false, false, 209)))) ? ("disabled") : (""));
        yield "\">
            <h3 class=\"tab-title\">Cookies</h3>

            <div class=\"tab-content\">
                <h3>Request Cookies</h3>

                ";
        // line 215
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "requestcookies", [], "any", false, false, false, 215), "all", [], "any", false, false, false, 215))) {
            // line 216
            yield "                    <div class=\"empty\">
                        <p>No request cookies</p>
                    </div>
                ";
        } else {
            // line 220
            yield "                    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "requestcookies", [], "any", false, false, false, 220)], false);
            yield "
                ";
        }
        // line 222
        yield "
                <h3>Response Cookies</h3>

                ";
        // line 225
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "responsecookies", [], "any", false, false, false, 225), "all", [], "any", false, false, false, 225))) {
            // line 226
            yield "                    <div class=\"empty\">
                        <p>No response cookies</p>
                    </div>
                ";
        } else {
            // line 230
            yield "                    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "responsecookies", [], "any", false, false, false, 230)], true);
            yield "
                ";
        }
        // line 232
        yield "            </div>
        </div>

        <div class=\"tab ";
        // line 235
        yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "sessionmetadata", [], "any", false, false, false, 235))) ? ("disabled") : (""));
        yield "\">
            <h3 class=\"tab-title\">Session";
        // line 236
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "sessionusages", [], "any", false, false, false, 236))) {
            yield " <span class=\"badge\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "sessionusages", [], "any", false, false, false, 236)), "html", null, true);
            yield "</span>";
        }
        yield "</h3>

            <div class=\"tab-content\">
                <h3>Session Metadata</h3>

                ";
        // line 241
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "sessionmetadata", [], "any", false, false, false, 241))) {
            // line 242
            yield "                    <div class=\"empty\">
                        <p>No session metadata</p>
                    </div>
                ";
        } else {
            // line 246
            yield "                    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "sessionmetadata", [], "any", false, false, false, 246)], false);
            yield "
                ";
        }
        // line 248
        yield "
                <h3>Session Attributes</h3>

                ";
        // line 251
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "sessionattributes", [], "any", false, false, false, 251))) {
            // line 252
            yield "                    <div class=\"empty\">
                        <p>No session attributes</p>
                    </div>
                ";
        } else {
            // line 256
            yield "                    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "sessionattributes", [], "any", false, false, false, 256), "labels" => ["Attribute", "Value"]], false);
            yield "
                ";
        }
        // line 258
        yield "
                <h3>Session Usage</h3>

                <div class=\"metrics\">
                    <div class=\"metric\">
                        <span class=\"value\">";
        // line 263
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "sessionusages", [], "any", false, false, false, 263)), "html", null, true);
        yield "</span>
                        <span class=\"label\">Usages</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">";
        // line 268
        yield Twig\Extension\CoreExtension::source($this->env, (("@WebProfiler/Icon/" . ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "statelesscheck", [], "any", false, false, false, 268)) ? ("yes") : ("no"))) . ".svg"));
        yield "</span>
                        <span class=\"label\">Stateless check enabled</span>
                    </div>
                </div>

                ";
        // line 273
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "sessionusages", [], "any", false, false, false, 273))) {
            // line 274
            yield "                    <div class=\"empty\">
                        <p>Session not used.</p>
                    </div>
                ";
        } else {
            // line 278
            yield "                    <table class=\"session_usages\">
                        <thead>
                        <tr>
                            <th class=\"full-width\">Usage</th>
                        </tr>
                        </thead>

                        <tbody>
                        ";
            // line 286
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "sessionusages", [], "any", false, false, false, 286));
            foreach ($context['_seq'] as $context["key"] => $context["usage"]) {
                // line 287
                yield "                            <tr>
                                <td class=\"font-normal\">";
                // line 289
                $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, $context["usage"], "file", [], "any", false, false, false, 289), CoreExtension::getAttribute($this->env, $this->source, $context["usage"], "line", [], "any", false, false, false, 289));
                // line 290
                if (($context["link"] ?? null)) {
                    yield "<a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["link"] ?? null), "html", null, true);
                    yield "\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["usage"], "name", [], "any", false, false, false, 290), "html", null, true);
                    yield "\">";
                } else {
                    yield "<span title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["usage"], "name", [], "any", false, false, false, 290), "html", null, true);
                    yield "\">";
                }
                // line 291
                yield "                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["usage"], "name", [], "any", false, false, false, 291), "html", null, true);
                // line 292
                if (($context["link"] ?? null)) {
                    yield "</a>";
                } else {
                    yield "</span>";
                }
                // line 293
                yield "                                    <div class=\"text-small font-normal\">
                                        ";
                // line 294
                $context["usage_id"] = ("session-usage-trace-" . $context["key"]);
                // line 295
                yield "                                        <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["usage_id"] ?? null), "html", null, true);
                yield "\" data-toggle-alt-content=\"Hide trace\">Show trace</a>
                                    </div>
                                    <div id=\"";
                // line 297
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["usage_id"] ?? null), "html", null, true);
                yield "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                                        ";
                // line 298
                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["usage"], "trace", [], "any", false, false, false, 298), 2);
                yield "
                                    </div>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['usage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 303
            yield "                        </tbody>
                    </table>
                ";
        }
        // line 306
        yield "            </div>
        </div>

        <div class=\"tab ";
        // line 309
        yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "flashes", [], "any", false, false, false, 309))) ? ("disabled") : (""));
        yield "\">
            <h3 class=\"tab-title\">Flashes</h3>

            <div class=\"tab-content\">
                <h3>Flashes</h3>

                ";
        // line 315
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "flashes", [], "any", false, false, false, 315))) {
            // line 316
            yield "                    <div class=\"empty\">
                        <p>No flash messages were created.</p>
                    </div>
                ";
        } else {
            // line 320
            yield "                    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "flashes", [], "any", false, false, false, 320)], false);
            yield "
                ";
        }
        // line 322
        yield "            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Server Parameters</h3>
            <div class=\"tab-content\">
                <h3>Server Parameters</h3>
                <h4>Defined in .env</h4>
                ";
        // line 330
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "dotenvvars", [], "any", false, false, false, 330)], false);
        yield "

                <h4>Defined as regular env variables</h4>
                ";
        // line 333
        $context["requestserver"] = [];
        // line 334
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "requestserver", [], "any", false, false, false, 334), function ($_____, $__key__) use ($context, $macros) { $context["_"] = $_____; $context["key"] = $__key__; return !CoreExtension::inFilter($context["key"], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "dotenvvars", [], "any", false, false, false, 334), "keys", [], "any", false, false, false, 334)); }));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 335
            yield "                    ";
            $context["requestserver"] = Twig\Extension\CoreExtension::merge(($context["requestserver"] ?? null), [$context["key"] => $context["value"]]);
            // line 336
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 337
        yield "                ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => ($context["requestserver"] ?? null)], false);
        yield "
            </div>
        </div>

        ";
        // line 341
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "parent", [], "any", false, false, false, 341)) {
            // line 342
            yield "        <div class=\"tab\">
            <h3 class=\"tab-title\">Parent Request</h3>

            <div class=\"tab-content\">
                <h3>
                    <a href=\"";
            // line 347
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "parent", [], "any", false, false, false, 347), "token", [], "any", false, false, false, 347)]), "html", null, true);
            yield "\">Return to parent request</a>
                    <small>(token = ";
            // line 348
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "parent", [], "any", false, false, false, 348), "token", [], "any", false, false, false, 348), "html", null, true);
            yield ")</small>
                </h3>

                ";
            // line 351
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "parent", [], "any", false, false, false, 351), "getcollector", ["request"], "method", false, false, false, 351), "requestattributes", [], "any", false, false, false, 351)], false);
            yield "
            </div>
        </div>
        ";
        }
        // line 355
        yield "
        ";
        // line 356
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 356))) {
            // line 357
            yield "        <div class=\"tab\">
            <h3 class=\"tab-title\">Sub Requests <span class=\"badge\">";
            // line 358
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 358)), "html", null, true);
            yield "</span></h3>

            <div class=\"tab-content\">
                ";
            // line 361
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 361));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 362
                yield "                    <h3>
                        ";
                // line 363
                yield CoreExtension::callMacro($macros["helper"], "macro_set_handler", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "getcollector", ["request"], "method", false, false, false, 363), "controller", [], "any", false, false, false, 363)], 363, $context, $this->getSourceContext());
                yield "
                        <small>(token = <a href=\"";
                // line 364
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => CoreExtension::getAttribute($this->env, $this->source, $context["child"], "token", [], "any", false, false, false, 364)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "token", [], "any", false, false, false, 364), "html", null, true);
                yield "</a>)</small>
                    </h3>

                    ";
                // line 367
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "getcollector", ["request"], "method", false, false, false, 367), "requestattributes", [], "any", false, false, false, 367)], false);
                yield "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 369
            yield "            </div>
        </div>
        ";
        }
        // line 372
        yield "    </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 375
    public function macro_set_handler($__controller__ = null, $__route__ = null, $__method__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "controller" => $__controller__,
            "route" => $__route__,
            "method" => $__method__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "set_handler"));

            // line 376
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["controller"] ?? null), "class", [], "any", true, true, false, 376)) {
                // line 377
                if (((array_key_exists("method", $context)) ? (Twig\Extension\CoreExtension::default(($context["method"] ?? null), false)) : (false))) {
                    yield "<span class=\"sf-toolbar-status sf-toolbar-redirection-method\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["method"] ?? null), "html", null, true);
                    yield "</span>";
                }
                // line 378
                $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, ($context["controller"] ?? null), "file", [], "any", false, false, false, 378), CoreExtension::getAttribute($this->env, $this->source, ($context["controller"] ?? null), "line", [], "any", false, false, false, 378));
                // line 379
                if (($context["link"] ?? null)) {
                    yield "<a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["link"] ?? null), "html", null, true);
                    yield "\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["controller"] ?? null), "class", [], "any", false, false, false, 379), "html", null, true);
                    yield "\">";
                } else {
                    yield "<span title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["controller"] ?? null), "class", [], "any", false, false, false, 379), "html", null, true);
                    yield "\">";
                }
                // line 381
                if (((array_key_exists("route", $context)) ? (Twig\Extension\CoreExtension::default(($context["route"] ?? null), false)) : (false))) {
                    // line 382
                    yield "@";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["route"] ?? null), "html", null, true);
                } else {
                    // line 384
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->abbrClass(CoreExtension::getAttribute($this->env, $this->source, ($context["controller"] ?? null), "class", [], "any", false, false, false, 384))), "html", null, true);
                    // line 385
                    ((CoreExtension::getAttribute($this->env, $this->source, ($context["controller"] ?? null), "method", [], "any", false, false, false, 385)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((" :: " . CoreExtension::getAttribute($this->env, $this->source, ($context["controller"] ?? null), "method", [], "any", false, false, false, 385)), "html", null, true)) : (yield ""));
                }
                // line 388
                if (($context["link"] ?? null)) {
                    yield "</a>";
                } else {
                    yield "</span>";
                }
            } else {
                // line 390
                yield "<span>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("route", $context)) ? (Twig\Extension\CoreExtension::default(($context["route"] ?? null), ($context["controller"] ?? null))) : (($context["controller"] ?? null))), "html", null, true);
                yield "</span>";
            }
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@WebProfiler/Collector/request.html.twig";
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
        return array (  907 => 390,  900 => 388,  897 => 385,  895 => 384,  891 => 382,  889 => 381,  877 => 379,  875 => 378,  869 => 377,  866 => 376,  849 => 375,  840 => 372,  835 => 369,  827 => 367,  819 => 364,  815 => 363,  812 => 362,  808 => 361,  802 => 358,  799 => 357,  797 => 356,  794 => 355,  787 => 351,  781 => 348,  777 => 347,  770 => 342,  768 => 341,  760 => 337,  754 => 336,  751 => 335,  746 => 334,  744 => 333,  738 => 330,  728 => 322,  722 => 320,  716 => 316,  714 => 315,  705 => 309,  700 => 306,  695 => 303,  684 => 298,  680 => 297,  674 => 295,  672 => 294,  669 => 293,  663 => 292,  660 => 291,  648 => 290,  646 => 289,  643 => 287,  639 => 286,  629 => 278,  623 => 274,  621 => 273,  613 => 268,  605 => 263,  598 => 258,  592 => 256,  586 => 252,  584 => 251,  579 => 248,  573 => 246,  567 => 242,  565 => 241,  553 => 236,  549 => 235,  544 => 232,  538 => 230,  532 => 226,  530 => 225,  525 => 222,  519 => 220,  513 => 216,  511 => 215,  502 => 209,  495 => 205,  484 => 196,  478 => 192,  469 => 186,  462 => 181,  454 => 176,  448 => 172,  445 => 171,  443 => 170,  440 => 169,  438 => 168,  433 => 165,  431 => 164,  424 => 160,  420 => 158,  414 => 156,  408 => 152,  406 => 151,  401 => 148,  395 => 146,  389 => 142,  387 => 141,  382 => 138,  376 => 136,  370 => 132,  368 => 131,  363 => 128,  357 => 126,  351 => 122,  349 => 121,  336 => 111,  332 => 109,  329 => 108,  322 => 107,  310 => 102,  307 => 101,  300 => 100,  290 => 97,  287 => 96,  283 => 95,  273 => 90,  269 => 89,  263 => 85,  261 => 84,  258 => 83,  248 => 78,  244 => 77,  237 => 73,  232 => 70,  230 => 69,  219 => 65,  207 => 60,  199 => 55,  191 => 50,  186 => 47,  181 => 44,  177 => 42,  175 => 41,  167 => 38,  162 => 35,  160 => 34,  157 => 33,  153 => 32,  148 => 30,  143 => 29,  138 => 28,  133 => 27,  131 => 26,  124 => 25,  122 => 24,  119 => 23,  117 => 22,  114 => 21,  111 => 20,  104 => 18,  101 => 17,  98 => 16,  96 => 15,  93 => 14,  90 => 13,  83 => 11,  80 => 10,  78 => 9,  75 => 8,  68 => 6,  65 => 5,  62 => 4,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/request.html.twig", "C:\\Users\\Arman Saleem\\Desktop\\symfony\\users-service\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\request.html.twig");
    }
}
