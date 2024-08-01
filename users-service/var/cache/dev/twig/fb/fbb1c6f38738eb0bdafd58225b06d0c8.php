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

/* @WebProfiler/Profiler/layout.html.twig */
class __TwigTemplate_d177245348e9a501f5c5d622dece17c6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'summary' => [$this, 'block_summary'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/layout.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/header.html.twig", array(), false);
        yield "

    <div id=\"summary\">
        ";
        // line 7
        yield from $this->unwrap()->yieldBlock('summary', $context, $blocks);
        // line 93
        yield "    </div>

    <div id=\"content\" class=\"container\">
        <div id=\"main\">
            <div id=\"sidebar\">
                <div id=\"sidebar-shortcuts\">
                    <div class=\"shortcuts\">
                        <a href=\"#\" id=\"sidebarShortcutsMenu\" class=\"visible-small\">
                            <span class=\"icon\">";
        // line 101
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Icon/menu.svg");
        yield "</span>
                        </a>

                        <a class=\"btn btn-sm\" href=\"";
        // line 104
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler_search", ["limit" => 10]);
        yield "\">Last 10</a>
                        <a class=\"btn btn-sm\" href=\"";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", Twig\Extension\CoreExtension::merge(["token" => "latest"], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "query", [], "any", false, false, false, 105), "all", [], "any", false, false, false, 105))), "html", null, true);
        yield "\">Latest</a>

                        <a class=\"sf-toggle btn btn-sm\" data-toggle-selector=\"#sidebar-search\" ";
        // line 107
        if ((array_key_exists("tokens", $context) || array_key_exists("about", $context))) {
            yield "data-toggle-initial=\"display\"";
        }
        yield ">
                            ";
        // line 108
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/search.svg");
        yield " <span class=\"hidden-small\">Search</span>
                        </a>

                        ";
        // line 111
        yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("web_profiler.controller.profiler::searchBarAction", array(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "query", [], "any", false, false, false, 111), "all", [], "any", false, false, false, 111)));
        yield "
                    </div>
                </div>

                ";
        // line 115
        if (array_key_exists("templates", $context)) {
            // line 116
            yield "                    <ul id=\"menu-profiler\">
                        ";
            // line 117
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["templates"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["name"] => $context["template"]) {
                // line 118
                yield "                            ";
                $context["menu"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 119
                    if (                    $this->loadTemplate($context["template"], "@WebProfiler/Profiler/layout.html.twig", 119)->unwrap()->hasBlock("menu", $context)) {
                        // line 120
                        $__internal_compile_0 = $context;
                        $__internal_compile_1 = ["collector" => CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "getcollector", [$context["name"]], "method", false, false, false, 120), "profiler_markup_version" => ($context["profiler_markup_version"] ?? null)];
                        if (!is_iterable($__internal_compile_1)) {
                            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 120, $this->getSourceContext());
                        }
                        $__internal_compile_1 = CoreExtension::toArray($__internal_compile_1);
                        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_1));
                        // line 121
                        yield from                         $this->loadTemplate($context["template"], "@WebProfiler/Profiler/layout.html.twig", 121)->unwrap()->yieldBlock("menu", $context);
                        $context = $__internal_compile_0;
                    }
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 125
                yield "                            ";
                if ( !Twig\Extension\CoreExtension::testEmpty(($context["menu"] ?? null))) {
                    // line 126
                    yield "                                <li class=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                    yield " ";
                    yield ((($context["name"] == ($context["panel"] ?? null))) ? ("selected") : (""));
                    yield "\">
                                    <a href=\"";
                    // line 127
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => ($context["token"] ?? null), "panel" => $context["name"]]), "html", null, true);
                    yield "\">";
                    yield ($context["menu"] ?? null);
                    yield "</a>
                                </li>
                            ";
                }
                // line 130
                yield "                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            yield "                    </ul>
                ";
        }
        // line 133
        yield "
                ";
        // line 134
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/settings.html.twig");
        yield "
            </div>

            <div id=\"collector-wrapper\">
                <div id=\"collector-content\">
                    ";
        // line 139
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/base_js.html.twig");
        yield "
                    ";
        // line 140
        yield from $this->unwrap()->yieldBlock('panel', $context, $blocks);
        // line 141
        yield "                </div>
            </div>
        </div>
    </div>
    <script>
        (function () {
            Sfjs.addEventListener(document.getElementById('sidebarShortcutsMenu'), 'click', function (event) {
                event.preventDefault();
                Sfjs.toggleClass(document.getElementById('sidebar'), 'expanded');
            })
        }());
    </script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 7
    public function block_summary($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "summary"));

        // line 8
        yield "            ";
        if (array_key_exists("profile", $context)) {
            // line 9
            yield "                ";
            $context["request_collector"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "collectors", [], "any", false, true, false, 9), "request", [], "any", true, true, false, 9)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "collectors", [], "any", false, true, false, 9), "request", [], "any", false, false, false, 9), false)) : (false));
            // line 10
            yield "                ";
            $context["status_code"] = ((($context["request_collector"] ?? null)) ? (((CoreExtension::getAttribute($this->env, $this->source, ($context["request_collector"] ?? null), "statuscode", [], "any", true, true, false, 10)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["request_collector"] ?? null), "statuscode", [], "any", false, false, false, 10), 0)) : (0))) : (0));
            // line 11
            yield "                ";
            $context["css_class"] = (((($context["status_code"] ?? null) > 399)) ? ("status-error") : ((((($context["status_code"] ?? null) > 299)) ? ("status-warning") : ("status-success"))));
            // line 12
            yield "
                <div class=\"status ";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["css_class"] ?? null), "html", null, true);
            yield "\">
                    <div class=\"container\">
                        <h2 class=\"break-long-words\">
                            ";
            // line 16
            if (CoreExtension::inFilter(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "method", [], "any", false, false, false, 16)), ["GET", "HEAD"])) {
                // line 17
                yield "                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "url", [], "any", false, false, false, 17), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "url", [], "any", false, false, false, 17), "html", null, true);
                yield "</a>
                            ";
            } else {
                // line 19
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "url", [], "any", false, false, false, 19), "html", null, true);
                yield "
                                ";
                // line 20
                $context["referer"] = ((($context["request_collector"] ?? null)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["request_collector"] ?? null), "requestheaders", [], "any", false, false, false, 20), "get", ["referer"], "method", false, false, false, 20)) : (null));
                // line 21
                yield "                                ";
                if (($context["referer"] ?? null)) {
                    // line 22
                    yield "                                    <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["referer"] ?? null), "html", null, true);
                    yield "\" class=\"referer\">Return to referer URL</a>
                                ";
                }
                // line 24
                yield "                            ";
            }
            // line 25
            yield "                        </h2>

                        ";
            // line 27
            if ((($context["request_collector"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["request_collector"] ?? null), "redirect", [], "any", false, false, false, 27))) {
                // line 28
                $context["redirect"] = CoreExtension::getAttribute($this->env, $this->source, ($context["request_collector"] ?? null), "redirect", [], "any", false, false, false, 28);
                // line 29
                $context["controller"] = CoreExtension::getAttribute($this->env, $this->source, ($context["redirect"] ?? null), "controller", [], "any", false, false, false, 29);
                // line 30
                $context["redirect_route"] = ("@" . CoreExtension::getAttribute($this->env, $this->source, ($context["redirect"] ?? null), "route", [], "any", false, false, false, 30));
                // line 31
                yield "                            <dl class=\"metadata\">
                                <dt>
                                    <span class=\"label\">";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["redirect"] ?? null), "status_code", [], "any", false, false, false, 33), "html", null, true);
                yield "</span>
                                    Redirect from
                                </dt>
                                <dd>
                                    ";
                // line 37
                ((("GET" != CoreExtension::getAttribute($this->env, $this->source, ($context["redirect"] ?? null), "method", [], "any", false, false, false, 37))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["redirect"] ?? null), "method", [], "any", false, false, false, 37), "html", null, true)) : (yield ""));
                yield "
                                    ";
                // line 38
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["redirect"] ?? null), "controller", [], "any", false, true, false, 38), "class", [], "any", true, true, false, 38)) {
                    // line 39
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, ($context["controller"] ?? null), "file", [], "any", false, false, false, 39), CoreExtension::getAttribute($this->env, $this->source, ($context["controller"] ?? null), "line", [], "any", false, false, false, 39));
                    // line 40
                    if (($context["link"] ?? null)) {
                        yield "<a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["link"] ?? null), "html", null, true);
                        yield "\" title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["controller"] ?? null), "file", [], "any", false, false, false, 40), "html", null, true);
                        yield "\">";
                    }
                    // line 41
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["redirect_route"] ?? null), "html", null, true);
                    // line 42
                    if (($context["link"] ?? null)) {
                        yield "</a>";
                    }
                } else {
                    // line 44
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["redirect_route"] ?? null), "html", null, true);
                }
                // line 46
                yield "                                    (<a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => CoreExtension::getAttribute($this->env, $this->source, ($context["redirect"] ?? null), "token", [], "any", false, false, false, 46), "panel" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "query", [], "any", false, false, false, 46), "get", ["panel", "request"], "method", false, false, false, 46)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["redirect"] ?? null), "token", [], "any", false, false, false, 46), "html", null, true);
                yield "</a>)
                                </dd>
                            </dl>";
            }
            // line 50
            yield "
                        ";
            // line 51
            if ((($context["request_collector"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["request_collector"] ?? null), "forwardtoken", [], "any", false, false, false, 51))) {
                // line 52
                $context["forward_profile"] = CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "childByToken", [CoreExtension::getAttribute($this->env, $this->source, ($context["request_collector"] ?? null), "forwardtoken", [], "any", false, false, false, 52)], "method", false, false, false, 52);
                // line 53
                yield "                            ";
                $context["controller"] = ((($context["forward_profile"] ?? null)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["forward_profile"] ?? null), "collector", ["request"], "method", false, false, false, 53), "controller", [], "any", false, false, false, 53)) : ("n/a"));
                // line 54
                yield "                            <dl class=\"metadata\">
                                <dt>Forwarded to</dt>
                                <dd>
                                    ";
                // line 57
                $context["link"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["controller"] ?? null), "file", [], "any", true, true, false, 57)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, ($context["controller"] ?? null), "file", [], "any", false, false, false, 57), CoreExtension::getAttribute($this->env, $this->source, ($context["controller"] ?? null), "line", [], "any", false, false, false, 57))) : (null));
                // line 58
                if (($context["link"] ?? null)) {
                    yield "<a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["link"] ?? null), "html", null, true);
                    yield "\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["controller"] ?? null), "file", [], "any", false, false, false, 58), "html", null, true);
                    yield "\">";
                }
                // line 59
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["controller"] ?? null), "class", [], "any", true, true, false, 59)) {
                    // line 60
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->abbrClass(CoreExtension::getAttribute($this->env, $this->source, ($context["controller"] ?? null), "class", [], "any", false, false, false, 60))), "html", null, true);
                    // line 61
                    ((CoreExtension::getAttribute($this->env, $this->source, ($context["controller"] ?? null), "method", [], "any", false, false, false, 61)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((" :: " . CoreExtension::getAttribute($this->env, $this->source, ($context["controller"] ?? null), "method", [], "any", false, false, false, 61)), "html", null, true)) : (yield ""));
                } else {
                    // line 63
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["controller"] ?? null), "html", null, true);
                }
                // line 65
                if (($context["link"] ?? null)) {
                    yield "</a>";
                }
                // line 66
                yield "                                    (<a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => CoreExtension::getAttribute($this->env, $this->source, ($context["request_collector"] ?? null), "forwardtoken", [], "any", false, false, false, 66)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["request_collector"] ?? null), "forwardtoken", [], "any", false, false, false, 66), "html", null, true);
                yield "</a>)
                                </dd>
                            </dl>";
            }
            // line 70
            yield "
                        <dl class=\"metadata\">
                            <dt>Method</dt>
                            <dd>";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "method", [], "any", false, false, false, 73)), "html", null, true);
            yield "</dd>

                            <dt>HTTP Status</dt>
                            <dd>";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["status_code"] ?? null), "html", null, true);
            yield "</dd>

                            <dt>IP</dt>
                            <dd>
                                <a href=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler_search_results", ["token" => ($context["token"] ?? null), "limit" => 10, "ip" => CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "ip", [], "any", false, false, false, 80)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "ip", [], "any", false, false, false, 80), "html", null, true);
            yield "</a>
                            </dd>

                            <dt>Profiled on</dt>
                            <dd><time datetime=\"";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "time", [], "any", false, false, false, 84), "c"), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "time", [], "any", false, false, false, 84), "r"), "html", null, true);
            yield "</time></dd>

                            <dt>Token</dt>
                            <dd>";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "token", [], "any", false, false, false, 87), "html", null, true);
            yield "</dd>
                        </dl>
                    </div>
                </div>
            ";
        }
        // line 92
        yield "        ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 140
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        yield "";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/layout.html.twig";
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
        return array (  443 => 140,  435 => 92,  427 => 87,  419 => 84,  410 => 80,  403 => 76,  397 => 73,  392 => 70,  383 => 66,  379 => 65,  376 => 63,  373 => 61,  371 => 60,  369 => 59,  361 => 58,  359 => 57,  354 => 54,  351 => 53,  349 => 52,  347 => 51,  344 => 50,  335 => 46,  332 => 44,  327 => 42,  325 => 41,  317 => 40,  315 => 39,  313 => 38,  309 => 37,  302 => 33,  298 => 31,  296 => 30,  294 => 29,  292 => 28,  290 => 27,  286 => 25,  283 => 24,  277 => 22,  274 => 21,  272 => 20,  267 => 19,  259 => 17,  257 => 16,  251 => 13,  248 => 12,  245 => 11,  242 => 10,  239 => 9,  236 => 8,  229 => 7,  209 => 141,  207 => 140,  203 => 139,  195 => 134,  192 => 133,  188 => 131,  174 => 130,  166 => 127,  159 => 126,  156 => 125,  150 => 121,  142 => 120,  140 => 119,  137 => 118,  120 => 117,  117 => 116,  115 => 115,  108 => 111,  102 => 108,  96 => 107,  91 => 105,  87 => 104,  81 => 101,  71 => 93,  69 => 7,  62 => 4,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Profiler/layout.html.twig", "C:\\Users\\Arman Saleem\\Desktop\\symfony\\users-service\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\layout.html.twig");
    }
}
