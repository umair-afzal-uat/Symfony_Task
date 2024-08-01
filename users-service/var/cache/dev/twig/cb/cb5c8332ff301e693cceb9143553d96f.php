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

/* @Doctrine/Collector/db.html.twig */
class __TwigTemplate_01f47683da7ae2fbd5b3ad9b41228c3a extends Template
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
            'queries' => [$this, 'block_queries'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "isXmlHttpRequest", [], "any", false, false, false, 1)) ? ("@WebProfiler/Profiler/ajax_layout.html.twig") : ("@WebProfiler/Profiler/layout.html.twig")), "@Doctrine/Collector/db.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Doctrine/Collector/db.html.twig"));

        // line 3
        $macros["helper"] = $this->macros["helper"] = $this;
        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        yield "    ";
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", [], "any", false, false, false, 6) > 0) || (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", [], "any", false, false, false, 6) > 0))) {
            // line 7
            yield "
        ";
            // line 8
            $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 9
                yield "            ";
                $context["status"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", [], "any", false, false, false, 9) > 0)) ? ("red") : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", [], "any", false, false, false, 9) > 50)) ? ("yellow") : (""))));
                // line 10
                yield "
            ";
                // line 11
                if ((($context["profiler_markup_version"] ?? null) >= 3)) {
                    // line 12
                    yield "                ";
                    yield Twig\Extension\CoreExtension::include($this->env, $context, "@Doctrine/Collector/database.svg");
                    yield "
            ";
                } else {
                    // line 14
                    yield "                <span class=\"icon\">";
                    yield Twig\Extension\CoreExtension::include($this->env, $context, "@Doctrine/Collector/icon.svg");
                    yield "</span>
            ";
                }
                // line 16
                yield "
            ";
                // line 17
                if (((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", [], "any", false, false, false, 17) == 0) && (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", [], "any", false, false, false, 17) > 0))) {
                    // line 18
                    yield "                <span class=\"sf-toolbar-value\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", [], "any", false, false, false, 18), "html", null, true);
                    yield "</span>
                <span class=\"sf-toolbar-label\">errors</span>
            ";
                } else {
                    // line 21
                    yield "                <span class=\"sf-toolbar-value\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", [], "any", false, false, false, 21), "html", null, true);
                    yield "</span>
                <span class=\"sf-toolbar-info-piece-additional-detail\">
                    <span class=\"sf-toolbar-label\">in</span>
                    <span class=\"sf-toolbar-value\">";
                    // line 24
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "time", [], "any", false, false, false, 24) * 1000)), "html", null, true);
                    yield "</span>
                    <span class=\"sf-toolbar-label\">ms</span>
                </span>
            ";
                }
                // line 28
                yield "        ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 29
            yield "
        ";
            // line 30
            $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 31
                yield "            <div class=\"sf-toolbar-info-piece\">
                <b>Database Queries</b>
                <span class=\"sf-toolbar-status ";
                // line 33
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", [], "any", false, false, false, 33) > 50)) ? ("sf-toolbar-status-yellow") : (""));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", [], "any", false, false, false, 33), "html", null, true);
                yield "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Different statements</b>
                <span class=\"sf-toolbar-status\">";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "groupedQueryCount", [], "any", false, false, false, 37), "html", null, true);
                yield "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Query time</b>
                <span>";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "time", [], "any", false, false, false, 41) * 1000)), "html", null, true);
                yield " ms</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Invalid entities</b>
                <span class=\"sf-toolbar-status ";
                // line 45
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", [], "any", false, false, false, 45) > 0)) ? ("sf-toolbar-status-red") : (""));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", [], "any", false, false, false, 45), "html", null, true);
                yield "</span>
            </div>
            ";
                // line 47
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "cacheEnabled", [], "any", false, false, false, 47)) {
                    // line 48
                    yield "                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache hits</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
                    // line 50
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "cacheHitsCount", [], "any", false, false, false, 50), "html", null, true);
                    yield "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache misses</b>
                    <span class=\"sf-toolbar-status ";
                    // line 54
                    yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "cacheMissesCount", [], "any", false, false, false, 54) > 0)) ? ("sf-toolbar-status-yellow") : (""));
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "cacheMissesCount", [], "any", false, false, false, 54), "html", null, true);
                    yield "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache puts</b>
                    <span class=\"sf-toolbar-status ";
                    // line 58
                    yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "cachePutsCount", [], "any", false, false, false, 58) > 0)) ? ("sf-toolbar-status-yellow") : (""));
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "cachePutsCount", [], "any", false, false, false, 58), "html", null, true);
                    yield "</span>
                </div>
            ";
                } else {
                    // line 61
                    yield "                <div class=\"sf-toolbar-info-piece\">
                    <b>Second Level Cache</b>
                    <span class=\"sf-toolbar-status\">disabled</span>
                </div>
            ";
                }
                // line 66
                yield "        ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 67
            yield "
        ";
            // line 68
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null), "status" => ((array_key_exists("status", $context)) ? (Twig\Extension\CoreExtension::default(($context["status"] ?? null), "")) : (""))]);
            yield "

    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 73
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 74
        yield "    <span class=\"label ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", [], "any", false, false, false, 74) > 0)) ? ("label-status-error") : (""));
        yield " ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", [], "any", false, false, false, 74) == 0)) ? ("disabled") : (""));
        yield "\">
        <span class=\"icon\">";
        // line 75
        yield Twig\Extension\CoreExtension::include($this->env, $context, (("@Doctrine/Collector/" . (((($context["profiler_markup_version"] ?? null) < 3)) ? ("icon") : ("database"))) . ".svg"));
        yield "</span>
        <strong>Doctrine</strong>
        ";
        // line 77
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", [], "any", false, false, false, 77)) {
            // line 78
            yield "            <span class=\"count\">
                <span>";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", [], "any", false, false, false, 79), "html", null, true);
            yield "</span>
            </span>
        ";
        }
        // line 82
        yield "    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 85
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 86
        yield "    ";
        if (("explain" == ($context["page"] ?? null))) {
            // line 87
            yield "        ";
            yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("Doctrine\\Bundle\\DoctrineBundle\\Controller\\ProfilerController::explainAction", ["token" =>             // line 88
($context["token"] ?? null), "panel" => "db", "connectionName" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 90
($context["request"] ?? null), "query", [], "any", false, false, false, 90), "get", ["connection"], "method", false, false, false, 90), "query" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 91
($context["request"] ?? null), "query", [], "any", false, false, false, 91), "get", ["query"], "method", false, false, false, 91)]));
            // line 92
            yield "
    ";
        } else {
            // line 94
            yield "        ";
            yield from             $this->unwrap()->yieldBlock("queries", $context, $blocks);
            yield "
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 98
    public function block_queries($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "queries"));

        // line 99
        yield "    <style>
        .time-container { position: relative; }
        .time-container .nowrap { position: relative; z-index: 1; text-shadow: 0 0 2px #fff; }
        .time-bar { display: block; position: absolute; top: 0; left: 0; bottom: 0; background: #e0e0e0; }
        .sql-runnable.sf-toggle-content.sf-toggle-visible { display: flex; flex-direction: column; }
        .sql-runnable button { align-self: end; }
        ";
        // line 105
        if ((($context["profiler_markup_version"] ?? null) >= 3)) {
            // line 106
            yield "        .highlight .keyword   { color: var(--highlight-keyword); font-weight: bold; }
        .highlight .word      { color: var(--color-text); }
        .highlight .variable  { color: var(--highlight-variable); }
        .highlight .symbol    { color: var(--color-text); }
        .highlight .comment   { color: var(--highlight-comment); }
        .highlight .string    { color: var(--highlight-string); }
        .highlight .number    { color: var(--highlight-constant); font-weight: bold; }
        .highlight .error     { color: var(--highlight-error); }
        ";
        }
        // line 115
        yield "    </style>

    <h2>Query Metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric-group\">
            <div class=\"metric\">
                <span class=\"value\">";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", [], "any", false, false, false, 122), "html", null, true);
        yield "</span>
                <span class=\"label\">Database Queries</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "groupedQueryCount", [], "any", false, false, false, 127), "html", null, true);
        yield "</span>
                <span class=\"label\">Different statements</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "time", [], "any", false, false, false, 132) * 1000)), "html", null, true);
        yield " ms</span>
                <span class=\"label\">Query time</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", [], "any", false, false, false, 137), "html", null, true);
        yield "</span>
                <span class=\"label\">Invalid entities</span>
            </div>
        </div>

        ";
        // line 142
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "cacheEnabled", [], "any", false, false, false, 142)) {
            // line 143
            yield "            <div class=\"metric-group\">
                <div class=\"metric\">
                    <span class=\"value\">";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "cacheHitsCount", [], "any", false, false, false, 145), "html", null, true);
            yield "</span>
                    <span class=\"label\">Cache hits</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "cacheMissesCount", [], "any", false, false, false, 149), "html", null, true);
            yield "</span>
                    <span class=\"label\">Cache misses</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "cachePutsCount", [], "any", false, false, false, 153), "html", null, true);
            yield "</span>
                    <span class=\"label\">Cache puts</span>
                </div>
            </div>
        ";
        }
        // line 158
        yield "    </div>

    <div class=\"sf-tabs\" style=\"margin-top: 20px;\">
        <div class=\"tab ";
        // line 161
        yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "queries", [], "any", false, false, false, 161))) ? ("disabled") : (""));
        yield "\">
            ";
        // line 162
        $context["group_queries"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "query", [], "any", false, false, false, 162), "getBoolean", ["group"], "method", false, false, false, 162);
        // line 163
        yield "            <h3 class=\"tab-title\">
                ";
        // line 164
        if (($context["group_queries"] ?? null)) {
            // line 165
            yield "                    Grouped Statements
                ";
        } else {
            // line 167
            yield "                    Queries
                ";
        }
        // line 169
        yield "            </h3>

            <div class=\"tab-content\">
                ";
        // line 172
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "queries", [], "any", false, false, false, 172)) {
            // line 173
            yield "                    <div class=\"empty\">
                        <p>No executed queries.</p>
                    </div>
                ";
        } else {
            // line 177
            yield "                    ";
            if (($context["group_queries"] ?? null)) {
                // line 178
                yield "                        <p><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["panel" => "db", "token" => ($context["token"] ?? null)]), "html", null, true);
                yield "\">Show all queries</a></p>
                    ";
            } else {
                // line 180
                yield "                        <p><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["panel" => "db", "token" => ($context["token"] ?? null), "group" => true]), "html", null, true);
                yield "\">Group similar statements</a></p>
                    ";
            }
            // line 182
            yield "
                    ";
            // line 183
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "queries", [], "any", false, false, false, 183));
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
            foreach ($context['_seq'] as $context["connection"] => $context["queries"]) {
                // line 184
                yield "                        ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "connections", [], "any", false, false, false, 184)) > 1)) {
                    // line 185
                    yield "                            <h3>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["connection"], "html", null, true);
                    yield " <small>connection</small></h3>
                        ";
                }
                // line 187
                yield "
                        ";
                // line 188
                if (Twig\Extension\CoreExtension::testEmpty($context["queries"])) {
                    // line 189
                    yield "                            <div class=\"empty\">
                                <p>No database queries were performed.</p>
                            </div>
                        ";
                } else {
                    // line 193
                    yield "                            ";
                    if (($context["group_queries"] ?? null)) {
                        // line 194
                        yield "                                ";
                        $context["queries"] = (($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "groupedQueries", [], "any", false, false, false, 194)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["connection"]] ?? null) : null);
                        // line 195
                        yield "                            ";
                    }
                    // line 196
                    yield "                            <table class=\"alt queries-table\">
                                <thead>
                                <tr>
                                    ";
                    // line 199
                    if (($context["group_queries"] ?? null)) {
                        // line 200
                        yield "                                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 0, 'queries-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 200), "html", null, true);
                        yield "')\" data-sort-direction=\"1\" style=\"cursor: pointer;\">Time<span class=\"text-muted\">&#9660;</span></th>
                                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 1, 'queries-";
                        // line 201
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 201), "html", null, true);
                        yield "')\" style=\"cursor: pointer;\">Count<span></span></th>
                                    ";
                    } else {
                        // line 203
                        yield "                                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 0, 'queries-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 203), "html", null, true);
                        yield "')\" data-sort-direction=\"-1\" style=\"cursor: pointer;\">#<span class=\"text-muted\">&#9650;</span></th>
                                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 1, 'queries-";
                        // line 204
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 204), "html", null, true);
                        yield "')\" style=\"cursor: pointer;\">Time<span></span></th>
                                    ";
                    }
                    // line 206
                    yield "                                    <th style=\"width: 100%;\">Info</th>
                                </tr>
                                </thead>
                                <tbody id=\"queries-";
                    // line 209
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 209), "html", null, true);
                    yield "\">
                                ";
                    // line 210
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable($context["queries"]);
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
                    foreach ($context['_seq'] as $context["i"] => $context["query"]) {
                        // line 211
                        yield "                                    ";
                        $context["i"] = ((($context["group_queries"] ?? null)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["query"], "index", [], "any", false, false, false, 211)) : ($context["i"]));
                        // line 212
                        yield "                                    <tr id=\"queryNo-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                        yield "-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 212), "loop", [], "any", false, false, false, 212), "index", [], "any", false, false, false, 212), "html", null, true);
                        yield "\">
                                        ";
                        // line 213
                        if (($context["group_queries"] ?? null)) {
                            // line 214
                            yield "                                            <td class=\"time-container\">
                                                <span class=\"time-bar\" style=\"width:";
                            // line 215
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", CoreExtension::getAttribute($this->env, $this->source, $context["query"], "executionPercent", [], "any", false, false, false, 215)), "html", null, true);
                            yield "%\"></span>
                                                <span class=\"nowrap\">";
                            // line 216
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, $context["query"], "executionMS", [], "any", false, false, false, 216) * 1000)), "html", null, true);
                            yield "&nbsp;ms<br />(";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", CoreExtension::getAttribute($this->env, $this->source, $context["query"], "executionPercent", [], "any", false, false, false, 216)), "html", null, true);
                            yield "%)</span>
                                            </td>
                                            <td class=\"nowrap\">";
                            // line 218
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["query"], "count", [], "any", false, false, false, 218), "html", null, true);
                            yield "</td>
                                        ";
                        } else {
                            // line 220
                            yield "                                            <td class=\"nowrap\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 220), "html", null, true);
                            yield "</td>
                                            <td class=\"nowrap\">";
                            // line 221
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, $context["query"], "executionMS", [], "any", false, false, false, 221) * 1000)), "html", null, true);
                            yield "&nbsp;ms</td>
                                        ";
                        }
                        // line 223
                        yield "                                        <td>
                                            ";
                        // line 224
                        yield $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->prettifySql(CoreExtension::getAttribute($this->env, $this->source, $context["query"], "sql", [], "any", false, false, false, 224));
                        yield "

                                            <div>
                                                <strong class=\"font-normal text-small\">Parameters</strong>: ";
                        // line 227
                        yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["query"], "params", [], "any", false, false, false, 227), 2);
                        yield "
                                            </div>

                                            <div class=\"text-small font-normal\">
                                                <a href=\"#\" class=\"sf-toggle link-inverse\" data-toggle-selector=\"#formatted-query-";
                        // line 231
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                        yield "-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 231), "loop", [], "any", false, false, false, 231), "index", [], "any", false, false, false, 231), "html", null, true);
                        yield "\" data-toggle-alt-content=\"Hide formatted query\">View formatted query</a>

                                                ";
                        // line 233
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["query"], "runnable", [], "any", false, false, false, 233)) {
                            // line 234
                            yield "                                                    &nbsp;&nbsp;
                                                    <a href=\"#\" class=\"sf-toggle link-inverse\" data-toggle-selector=\"#original-query-";
                            // line 235
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                            yield "-";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 235), "loop", [], "any", false, false, false, 235), "index", [], "any", false, false, false, 235), "html", null, true);
                            yield "\" data-toggle-alt-content=\"Hide runnable query\">View runnable query</a>
                                                ";
                        }
                        // line 237
                        yield "
                                                ";
                        // line 238
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["query"], "explainable", [], "any", false, false, false, 238)) {
                            // line 239
                            yield "                                                    &nbsp;&nbsp;
                                                    <a class=\"link-inverse\" href=\"";
                            // line 240
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["panel" => "db", "token" => ($context["token"] ?? null), "page" => "explain", "connection" => $context["connection"], "query" => $context["i"]]), "html", null, true);
                            yield "\" onclick=\"return explain(this);\" data-target-id=\"explain-";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                            yield "-";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 240), "loop", [], "any", false, false, false, 240), "index", [], "any", false, false, false, 240), "html", null, true);
                            yield "\">Explain query</a>
                                                ";
                        }
                        // line 242
                        yield "
                                                ";
                        // line 243
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["query"], "backtrace", [], "any", true, true, false, 243)) {
                            // line 244
                            yield "                                                    &nbsp;&nbsp;
                                                    <a href=\"#\" class=\"sf-toggle link-inverse\" data-toggle-selector=\"#backtrace-";
                            // line 245
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                            yield "-";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 245), "loop", [], "any", false, false, false, 245), "index", [], "any", false, false, false, 245), "html", null, true);
                            yield "\" data-toggle-alt-content=\"Hide query backtrace\">View query backtrace</a>
                                                ";
                        }
                        // line 247
                        yield "                                            </div>

                                            <div id=\"formatted-query-";
                        // line 249
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                        yield "-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 249), "loop", [], "any", false, false, false, 249), "index", [], "any", false, false, false, 249), "html", null, true);
                        yield "\" class=\"sql-runnable hidden\">
                                                ";
                        // line 250
                        yield $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->formatSql(CoreExtension::getAttribute($this->env, $this->source, $context["query"], "sql", [], "any", false, false, false, 250), true);
                        yield "
                                                <button class=\"btn btn-sm hidden\" data-clipboard-text=\"";
                        // line 251
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->formatSql(CoreExtension::getAttribute($this->env, $this->source, $context["query"], "sql", [], "any", false, false, false, 251), false), "html_attr");
                        yield "\">Copy</button>
                                            </div>

                                            ";
                        // line 254
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["query"], "runnable", [], "any", false, false, false, 254)) {
                            // line 255
                            yield "                                                <div id=\"original-query-";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                            yield "-";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 255), "loop", [], "any", false, false, false, 255), "index", [], "any", false, false, false, 255), "html", null, true);
                            yield "\" class=\"sql-runnable hidden\">
                                                    ";
                            // line 256
                            $context["runnable_sql"] = $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->replaceQueryParameters((CoreExtension::getAttribute($this->env, $this->source, $context["query"], "sql", [], "any", false, false, false, 256) . ";"), CoreExtension::getAttribute($this->env, $this->source, $context["query"], "params", [], "any", false, false, false, 256));
                            // line 257
                            yield "                                                    ";
                            yield $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->prettifySql(($context["runnable_sql"] ?? null));
                            yield "
                                                    <button class=\"btn btn-sm hidden\" data-clipboard-text=\"";
                            // line 258
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["runnable_sql"] ?? null), "html_attr");
                            yield "\">Copy</button>
                                                </div>
                                            ";
                        }
                        // line 261
                        yield "
                                            ";
                        // line 262
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["query"], "explainable", [], "any", false, false, false, 262)) {
                            // line 263
                            yield "                                                <div id=\"explain-";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                            yield "-";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 263), "loop", [], "any", false, false, false, 263), "index", [], "any", false, false, false, 263), "html", null, true);
                            yield "\" class=\"sql-explain\"></div>
                                            ";
                        }
                        // line 265
                        yield "
                                            ";
                        // line 266
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["query"], "backtrace", [], "any", true, true, false, 266)) {
                            // line 267
                            yield "                                                <div id=\"backtrace-";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                            yield "-";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 267), "loop", [], "any", false, false, false, 267), "index", [], "any", false, false, false, 267), "html", null, true);
                            yield "\" class=\"hidden\">
                                                    <table>
                                                        <thead>
                                                        <tr>
                                                            <th scope=\"col\">#</th>
                                                            <th scope=\"col\">File/Call</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        ";
                            // line 276
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["query"], "backtrace", [], "any", false, false, false, 276));
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
                            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                                // line 277
                                yield "                                                            <tr>
                                                                <td>";
                                // line 278
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 278), "html", null, true);
                                yield "</td>
                                                                <td>
                                                                            <span class=\"text-small\">
                                                                                ";
                                // line 281
                                $context["line_number"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "line", [], "any", true, true, false, 281)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "line", [], "any", false, false, false, 281), 1)) : (1));
                                // line 282
                                yield "                                                                                ";
                                if (CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "file", [], "any", true, true, false, 282)) {
                                    // line 283
                                    yield "                                                                                    <a href=\"";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "file", [], "any", false, false, false, 283), ($context["line_number"] ?? null)), "html", null, true);
                                    yield "\">
                                                                                ";
                                }
                                // line 285
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "class", [], "any", true, true, false, 285)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "class", [], "any", false, false, false, 285))) : ("")) . ((CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "class", [], "any", true, true, false, 285)) ? (((CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "type", [], "any", true, true, false, 285)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "type", [], "any", false, false, false, 285), "::")) : ("::"))) : (""))), "html", null, true);
                                // line 286
                                yield "<span class=\"status-warning\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "function", [], "any", false, false, false, 286), "html", null, true);
                                yield "</span>
                                                                                ";
                                // line 287
                                if (CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "file", [], "any", true, true, false, 287)) {
                                    // line 288
                                    yield "                                                                                    </a>
                                                                                ";
                                }
                                // line 290
                                yield "                                                                                (line ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["line_number"] ?? null), "html", null, true);
                                yield ")
                                                                            </span>
                                                                </td>
                                                            </tr>
                                                        ";
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
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 295
                            yield "                                                        </tbody>
                                                    </table>
                                                </div>
                                            ";
                        }
                        // line 299
                        yield "                                        </td>
                                    </tr>
                                ";
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
                    unset($context['_seq'], $context['_iterated'], $context['i'], $context['query'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 302
                    yield "                                </tbody>
                            </table>
                        ";
                }
                // line 305
                yield "                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['connection'], $context['queries'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 306
            yield "                ";
        }
        // line 307
        yield "            </div>
        </div>

        <div class=\"tab ";
        // line 310
        yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "connections", [], "any", false, false, false, 310))) ? ("disabled") : (""));
        yield "\">
            <h3 class=\"tab-title\">Database Connections</h3>
            <div class=\"tab-content\">
                ";
        // line 313
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "connections", [], "any", false, false, false, 313)) {
            // line 314
            yield "                    <div class=\"empty\">
                        <p>There are no configured database connections.</p>
                    </div>
                ";
        } else {
            // line 318
            yield "                    ";
            yield CoreExtension::callMacro($macros["helper"], "macro_render_simple_table", ["Name", "Service", CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "connections", [], "any", false, false, false, 318)], 318, $context, $this->getSourceContext());
            yield "
                ";
        }
        // line 320
        yield "            </div>
        </div>

        <div class=\"tab ";
        // line 323
        yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "managers", [], "any", false, false, false, 323))) ? ("disabled") : (""));
        yield "\">
            <h3 class=\"tab-title\">Entity Managers</h3>
            <div class=\"tab-content\">

                ";
        // line 327
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "managers", [], "any", false, false, false, 327)) {
            // line 328
            yield "                    <div class=\"empty\">
                        <p>There are no configured entity managers.</p>
                    </div>
                ";
        } else {
            // line 332
            yield "                    ";
            yield CoreExtension::callMacro($macros["helper"], "macro_render_simple_table", ["Name", "Service", CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "managers", [], "any", false, false, false, 332)], 332, $context, $this->getSourceContext());
            yield "
                ";
        }
        // line 334
        yield "            </div>
        </div>

        <div class=\"tab ";
        // line 337
        yield (( !CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "cacheEnabled", [], "any", false, false, false, 337)) ? ("disabled") : (""));
        yield "\">
            <h3 class=\"tab-title\">Second Level Cache</h3>
            <div class=\"tab-content\">

                ";
        // line 341
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "cacheEnabled", [], "any", false, false, false, 341)) {
            // line 342
            yield "                    <div class=\"empty\">
                        <p>Second Level Cache is not enabled.</p>
                    </div>
                ";
        } else {
            // line 346
            yield "                    ";
            if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "cacheCounts", [], "any", false, false, false, 346)) {
                // line 347
                yield "                        <div class=\"empty\">
                            <p>Second level cache information is not available.</p>
                        </div>
                    ";
            } else {
                // line 351
                yield "                        <div class=\"metrics\">
                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 353
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "cacheCounts", [], "any", false, false, false, 353), "hits", [], "any", false, false, false, 353), "html", null, true);
                yield "</span>
                                <span class=\"label\">Hits</span>
                            </div>

                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 358
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "cacheCounts", [], "any", false, false, false, 358), "misses", [], "any", false, false, false, 358), "html", null, true);
                yield "</span>
                                <span class=\"label\">Misses</span>
                            </div>

                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 363
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "cacheCounts", [], "any", false, false, false, 363), "puts", [], "any", false, false, false, 363), "html", null, true);
                yield "</span>
                                <span class=\"label\">Puts</span>
                            </div>
                        </div>

                        ";
                // line 368
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "cacheRegions", [], "any", false, false, false, 368), "hits", [], "any", false, false, false, 368)) {
                    // line 369
                    yield "                            <h3>Number of cache hits</h3>
                            ";
                    // line 370
                    yield CoreExtension::callMacro($macros["helper"], "macro_render_simple_table", ["Region", "Hits", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "cacheRegions", [], "any", false, false, false, 370), "hits", [], "any", false, false, false, 370)], 370, $context, $this->getSourceContext());
                    yield "
                        ";
                }
                // line 372
                yield "
                        ";
                // line 373
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "cacheRegions", [], "any", false, false, false, 373), "misses", [], "any", false, false, false, 373)) {
                    // line 374
                    yield "                            <h3>Number of cache misses</h3>
                            ";
                    // line 375
                    yield CoreExtension::callMacro($macros["helper"], "macro_render_simple_table", ["Region", "Misses", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "cacheRegions", [], "any", false, false, false, 375), "misses", [], "any", false, false, false, 375)], 375, $context, $this->getSourceContext());
                    yield "
                        ";
                }
                // line 377
                yield "
                        ";
                // line 378
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "cacheRegions", [], "any", false, false, false, 378), "puts", [], "any", false, false, false, 378)) {
                    // line 379
                    yield "                            <h3>Number of cache puts</h3>
                            ";
                    // line 380
                    yield CoreExtension::callMacro($macros["helper"], "macro_render_simple_table", ["Region", "Puts", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "cacheRegions", [], "any", false, false, false, 380), "puts", [], "any", false, false, false, 380)], 380, $context, $this->getSourceContext());
                    yield "
                        ";
                }
                // line 382
                yield "                    ";
            }
            // line 383
            yield "                ";
        }
        // line 384
        yield "            </div>
        </div>

        <div class=\"tab ";
        // line 387
        yield (( !CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "entities", [], "any", false, false, false, 387)) ? ("disabled") : (""));
        yield "\">
            <h3 class=\"tab-title\">Entities Mapping</h3>
            <div class=\"tab-content\">

                ";
        // line 391
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "entities", [], "any", false, false, false, 391)) {
            // line 392
            yield "                    <div class=\"empty\">
                        <p>No mapped entities.</p>
                    </div>
                ";
        } else {
            // line 396
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "entities", [], "any", false, false, false, 396));
            foreach ($context['_seq'] as $context["manager"] => $context["classes"]) {
                // line 397
                yield "                        ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "managers", [], "any", false, false, false, 397)) > 1)) {
                    // line 398
                    yield "                            <h3>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["manager"], "html", null, true);
                    yield " <small>entity manager</small></h3>
                        ";
                }
                // line 400
                yield "
                        ";
                // line 401
                if (Twig\Extension\CoreExtension::testEmpty($context["classes"])) {
                    // line 402
                    yield "                            <div class=\"empty\">
                                <p>No loaded entities.</p>
                            </div>
                        ";
                } else {
                    // line 406
                    yield "                            <table>
                                <thead>
                                <tr>
                                    <th scope=\"col\">Class</th>
                                    <th scope=\"col\">Mapping errors</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
                    // line 414
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable($context["classes"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
                        // line 415
                        yield "                                    ";
                        $context["contains_errors"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "mappingErrors", [], "any", false, true, false, 415), $context["manager"], [], "array", true, true, false, 415) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "mappingErrors", [], "any", false, true, false, 415), $context["manager"], [], "array", false, true, false, 415), CoreExtension::getAttribute($this->env, $this->source, $context["class"], "class", [], "any", false, false, false, 415), [], "array", true, true, false, 415));
                        // line 416
                        yield "                                    <tr class=\"";
                        yield ((($context["contains_errors"] ?? null)) ? ("status-error") : (""));
                        yield "\">
                                        <td>
                                <a href=\"";
                        // line 418
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, $context["class"], "file", [], "any", false, false, false, 418), CoreExtension::getAttribute($this->env, $this->source, $context["class"], "line", [], "any", false, false, false, 418)), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["class"], "class", [], "any", false, false, false, 418), "html", null, true);
                        yield "</a>
                            </td>
                                        <td class=\"font-normal\">
                                            ";
                        // line 421
                        if (($context["contains_errors"] ?? null)) {
                            // line 422
                            yield "                                                <ul>
                                                    ";
                            // line 423
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable((($__internal_compile_1 = (($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "mappingErrors", [], "any", false, false, false, 423)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["manager"]] ?? null) : null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[CoreExtension::getAttribute($this->env, $this->source, $context["class"], "class", [], "any", false, false, false, 423)] ?? null) : null));
                            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                                // line 424
                                yield "                                                        <li>";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["error"], "html", null, true);
                                yield "</li>
                                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 426
                            yield "                                                </ul>
                                            ";
                        } else {
                            // line 428
                            yield "                                                No errors.
                                            ";
                        }
                        // line 430
                        yield "                                        </td>
                                    </tr>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 433
                    yield "                                </tbody>
                            </table>
                        ";
                }
                // line 436
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['manager'], $context['classes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 437
            yield "                ";
        }
        // line 438
        yield "            </div>
        </div>
    </div>

    <script type=\"text/javascript\">//<![CDATA[
        function explain(link) {
            \"use strict\";

            var targetId = link.getAttribute('data-target-id');
            var targetElement = document.getElementById(targetId);

            if (targetElement.style.display != 'block') {
                if (targetElement.getAttribute('data-sfurl') !== link.href) {
                    fetch(link.href, {
                        headers: {'X-Requested-With': 'XMLHttpRequest'}
                    }).then(async function (response) {
                        targetElement.innerHTML = await response.text()
                        targetElement.setAttribute('data-sfurl', link.href)
                    }, function () {
                        targetElement.innerHTML = 'An error occurred while loading the query explanation.';
                    })
                }

                targetElement.style.display = 'block';
                link.innerHTML = 'Hide query explanation';
            } else {
                targetElement.style.display = 'none';
                link.innerHTML = 'Explain query';
            }

            return false;
        }

        function sortTable(header, column, targetId) {
            \"use strict\";

            var direction = parseInt(header.getAttribute('data-sort-direction')) || 1,
                items = [],
                target = document.getElementById(targetId),
                rows = target.children,
                headers = header.parentElement.children,
                i;

            for (i = 0; i < rows.length; ++i) {
                items.push(rows[i]);
            }

            for (i = 0; i < headers.length; ++i) {
                headers[i].removeAttribute('data-sort-direction');
                if (headers[i].children.length > 0) {
                    headers[i].children[0].innerHTML = '';
                }
            }

            header.setAttribute('data-sort-direction', (-1*direction).toString());
            header.children[0].innerHTML = direction > 0 ? '<span class=\"text-muted\">&#9650;</span>' : '<span class=\"text-muted\">&#9660;</span>';

            items.sort(function(a, b) {
                return direction * (parseFloat(a.children[column].innerHTML) - parseFloat(b.children[column].innerHTML));
            });

            for (i = 0; i < items.length; ++i) {
                target.appendChild(items[i]);
            }
        }

        if (navigator.clipboard) {
            document.querySelectorAll('[data-clipboard-text]').forEach(function(button) {
                button.classList.remove('hidden');
                button.addEventListener('click', function() {
                    navigator.clipboard.writeText(button.getAttribute('data-clipboard-text'));
                })
            });
        }

        //]]></script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 516
    public function macro_render_simple_table($__label1__ = null, $__label2__ = null, $__data__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label1" => $__label1__,
            "label2" => $__label2__,
            "data" => $__data__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_simple_table"));

            // line 517
            yield "    <table>
        <thead>
        <tr>
            <th scope=\"col\" class=\"key\">";
            // line 520
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label1"] ?? null), "html", null, true);
            yield "</th>
            <th scope=\"col\">";
            // line 521
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label2"] ?? null), "html", null, true);
            yield "</th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 525
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["data"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 526
                yield "            <tr>
                <th scope=\"row\">";
                // line 527
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "</th>
                <td>";
                // line 528
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                yield "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 531
            yield "        </tbody>
    </table>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Doctrine/Collector/db.html.twig";
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
        return array (  1248 => 531,  1239 => 528,  1235 => 527,  1232 => 526,  1228 => 525,  1221 => 521,  1217 => 520,  1212 => 517,  1195 => 516,  1111 => 438,  1108 => 437,  1102 => 436,  1097 => 433,  1089 => 430,  1085 => 428,  1081 => 426,  1072 => 424,  1068 => 423,  1065 => 422,  1063 => 421,  1055 => 418,  1049 => 416,  1046 => 415,  1042 => 414,  1032 => 406,  1026 => 402,  1024 => 401,  1021 => 400,  1015 => 398,  1012 => 397,  1007 => 396,  1001 => 392,  999 => 391,  992 => 387,  987 => 384,  984 => 383,  981 => 382,  976 => 380,  973 => 379,  971 => 378,  968 => 377,  963 => 375,  960 => 374,  958 => 373,  955 => 372,  950 => 370,  947 => 369,  945 => 368,  937 => 363,  929 => 358,  921 => 353,  917 => 351,  911 => 347,  908 => 346,  902 => 342,  900 => 341,  893 => 337,  888 => 334,  882 => 332,  876 => 328,  874 => 327,  867 => 323,  862 => 320,  856 => 318,  850 => 314,  848 => 313,  842 => 310,  837 => 307,  834 => 306,  820 => 305,  815 => 302,  799 => 299,  793 => 295,  773 => 290,  769 => 288,  767 => 287,  762 => 286,  760 => 285,  754 => 283,  751 => 282,  749 => 281,  743 => 278,  740 => 277,  723 => 276,  708 => 267,  706 => 266,  703 => 265,  695 => 263,  693 => 262,  690 => 261,  684 => 258,  679 => 257,  677 => 256,  670 => 255,  668 => 254,  662 => 251,  658 => 250,  652 => 249,  648 => 247,  641 => 245,  638 => 244,  636 => 243,  633 => 242,  624 => 240,  621 => 239,  619 => 238,  616 => 237,  609 => 235,  606 => 234,  604 => 233,  597 => 231,  590 => 227,  584 => 224,  581 => 223,  576 => 221,  571 => 220,  566 => 218,  559 => 216,  555 => 215,  552 => 214,  550 => 213,  543 => 212,  540 => 211,  523 => 210,  519 => 209,  514 => 206,  509 => 204,  504 => 203,  499 => 201,  494 => 200,  492 => 199,  487 => 196,  484 => 195,  481 => 194,  478 => 193,  472 => 189,  470 => 188,  467 => 187,  461 => 185,  458 => 184,  441 => 183,  438 => 182,  432 => 180,  426 => 178,  423 => 177,  417 => 173,  415 => 172,  410 => 169,  406 => 167,  402 => 165,  400 => 164,  397 => 163,  395 => 162,  391 => 161,  386 => 158,  378 => 153,  371 => 149,  364 => 145,  360 => 143,  358 => 142,  350 => 137,  342 => 132,  334 => 127,  326 => 122,  317 => 115,  306 => 106,  304 => 105,  296 => 99,  289 => 98,  277 => 94,  273 => 92,  271 => 91,  270 => 90,  269 => 88,  267 => 87,  264 => 86,  257 => 85,  248 => 82,  242 => 79,  239 => 78,  237 => 77,  232 => 75,  225 => 74,  218 => 73,  206 => 68,  203 => 67,  199 => 66,  192 => 61,  184 => 58,  175 => 54,  168 => 50,  164 => 48,  162 => 47,  155 => 45,  148 => 41,  141 => 37,  132 => 33,  128 => 31,  126 => 30,  123 => 29,  119 => 28,  112 => 24,  105 => 21,  98 => 18,  96 => 17,  93 => 16,  87 => 14,  81 => 12,  79 => 11,  76 => 10,  73 => 9,  71 => 8,  68 => 7,  65 => 6,  58 => 5,  51 => 1,  49 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Doctrine/Collector/db.html.twig", "C:\\Users\\Arman Saleem\\Desktop\\symfony\\users-service\\vendor\\doctrine\\doctrine-bundle\\templates\\Collector\\db.html.twig");
    }
}
