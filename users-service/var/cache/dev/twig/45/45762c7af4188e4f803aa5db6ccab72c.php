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

/* @WebProfiler/Collector/messenger.html.twig */
class __TwigTemplate_e50ae6ba69c0da9f3f15a52abd57ef22 extends Template
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
            'head' => [$this, 'block_head'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/messenger.html.twig"));

        // line 3
        $macros["helper"] = $this->macros["helper"] = $this;
        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/messenger.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
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
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "messages", [], "any", false, false, false, 6)) > 0)) {
            // line 7
            yield "        ";
            $context["status_color"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "exceptionsCount", [], "any", false, false, false, 7)) ? ("red") : (""));
            // line 8
            yield "        ";
            $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 9
                yield "            ";
                yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/messenger.svg");
                yield "
            <span class=\"sf-toolbar-value\">";
                // line 10
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "messages", [], "any", false, false, false, 10)), "html", null, true);
                yield "</span>
        ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 12
            yield "
        ";
            // line 13
            $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 14
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "buses", [], "any", false, false, false, 14));
                foreach ($context['_seq'] as $context["_key"] => $context["bus"]) {
                    // line 15
                    yield "                ";
                    $context["exceptionsCount"] = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "exceptionsCount", [$context["bus"]], "method", false, false, false, 15);
                    // line 16
                    yield "                <div class=\"sf-toolbar-info-piece\">
                    <b>";
                    // line 17
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["bus"], "html", null, true);
                    yield "</b>
                    <span
                        title=\"";
                    // line 19
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["exceptionsCount"] ?? null), "html", null, true);
                    yield " message(s) with exceptions\"
                        class=\"sf-toolbar-status sf-toolbar-status-";
                    // line 20
                    yield ((($context["exceptionsCount"] ?? null)) ? ("red") : (""));
                    yield "\"
                    >
                        ";
                    // line 22
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "messages", [$context["bus"]], "method", false, false, false, 22)), "html", null, true);
                    yield "
                    </span>
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bus'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                yield "        ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 27
            yield "
        ";
            // line 28
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => "messenger", "status" => ($context["status_color"] ?? null)]);
            yield "
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 32
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 33
        yield "    <span class=\"label";
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "exceptionsCount", [], "any", false, false, false, 33)) ? (" label-status-error") : (""));
        yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "messages", [], "any", false, false, false, 33))) ? (" disabled") : (""));
        yield "\">
        <span class=\"icon\">";
        // line 34
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/messenger.svg");
        yield "</span>
        <strong>Messages</strong>
        ";
        // line 36
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "exceptionsCount", [], "any", false, false, false, 36) > 0)) {
            // line 37
            yield "            <span class=\"count\">
                <span>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "exceptionsCount", [], "any", false, false, false, 38), "html", null, true);
            yield "</span>
            </span>
        ";
        }
        // line 41
        yield "    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 44
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 45
        yield "    ";
        yield from $this->yieldParentBlock("head", $context, $blocks);
        yield "
    <style>
        .message-item thead th { position: relative; cursor: pointer; user-select: none; padding-right: 35px; }
        .message-item tbody tr td:first-child { width: 170px; }

        .message-item .label { float: right; padding: 1px 5px; opacity: .75; margin-left: 5px; }
        .message-item .toggle-button { position: absolute; right: 6px; top: 6px; opacity: .5; pointer-events: none }
        .message-item .icon svg { height: 24px; width: 24px; }

        .message-item .sf-toggle-off .icon-close, .sf-toggle-on .icon-open { display: none; }
        .message-item .sf-toggle-off .icon-open, .sf-toggle-on .icon-close { display: block; }

        .message-bus .badge.status-some-errors { line-height: 16px; border-bottom: 2px solid #B0413E; }

        .message-item tbody.sf-toggle-content.sf-toggle-visible { display: table-row-group; }
        td.message-bus-dispatch-caller { background: #f1f2f3; }
        .theme-dark td.message-bus-dispatch-caller { background: var(--base-1); }
    </style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 65
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 66
        yield "    ";
        $macros["helper"] = $this;
        // line 67
        yield "
    <h2>Messages</h2>

    ";
        // line 70
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "messages", [], "any", false, false, false, 70))) {
            // line 71
            yield "        <div class=\"empty\">
            <p>No messages have been collected.</p>
        </div>
    ";
        } else {
            // line 75
            yield "        <div class=\"sf-tabs message-bus\">
            <div class=\"tab\">
                ";
            // line 77
            $context["messages"] = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "messages", [], "any", false, false, false, 77);
            // line 78
            yield "                ";
            $context["exceptionsCount"] = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "exceptionsCount", [], "any", false, false, false, 78);
            // line 79
            yield "                <h3 class=\"tab-title\">All<span class=\"badge ";
            yield ((($context["exceptionsCount"] ?? null)) ? ((((($context["exceptionsCount"] ?? null) == Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["messages"] ?? null)))) ? ("status-error") : ("status-some-errors"))) : (""));
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["messages"] ?? null)), "html", null, true);
            yield "</span></h3>

                <div class=\"tab-content\">
                    <p class=\"text-muted\">Ordered list of dispatched messages across all your buses</p>
                    ";
            // line 83
            yield CoreExtension::callMacro($macros["helper"], "macro_render_bus_messages", [($context["messages"] ?? null), true], 83, $context, $this->getSourceContext());
            yield "
                </div>
            </div>

            ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "buses", [], "any", false, false, false, 87));
            foreach ($context['_seq'] as $context["_key"] => $context["bus"]) {
                // line 88
                yield "                <div class=\"tab message-bus\">
                    ";
                // line 89
                $context["messages"] = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "messages", [$context["bus"]], "method", false, false, false, 89);
                // line 90
                yield "                    ";
                $context["exceptionsCount"] = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "exceptionsCount", [$context["bus"]], "method", false, false, false, 90);
                // line 91
                yield "                    <h3 class=\"tab-title\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["bus"], "html", null, true);
                yield "<span class=\"badge ";
                yield ((($context["exceptionsCount"] ?? null)) ? ((((($context["exceptionsCount"] ?? null) == Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["messages"] ?? null)))) ? ("status-error") : ("status-some-errors"))) : (""));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["messages"] ?? null)), "html", null, true);
                yield "</span></h3>

                    <div class=\"tab-content\">
                        <p class=\"text-muted\">Ordered list of messages dispatched on the <code>";
                // line 94
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["bus"], "html", null, true);
                yield "</code> bus</p>
                        ";
                // line 95
                yield CoreExtension::callMacro($macros["helper"], "macro_render_bus_messages", [($context["messages"] ?? null)], 95, $context, $this->getSourceContext());
                yield "
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bus'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            yield "        </div>
    ";
        }
        // line 101
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 104
    public function macro_render_bus_messages($__messages__ = null, $__showBus__ = false, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "messages" => $__messages__,
            "showBus" => $__showBus__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_bus_messages"));

            // line 105
            yield "    ";
            $context["discr"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
            // line 106
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["messages"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["dispatchCall"]) {
                // line 107
                yield "    <table class=\"message-item\">
        <thead>
            <tr>
                <th colspan=\"2\" class=\"sf-toggle\"
                    data-toggle-selector=\"#message-item-";
                // line 111
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["discr"] ?? null), "html", null, true);
                yield "-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 111), "html", null, true);
                yield "-details\"
                    data-toggle-initial=\"";
                // line 112
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 112)) ? ("display") : (""));
                yield "\"
                >
                    <span class=\"dump-inline\">";
                // line 114
                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["dispatchCall"], "message", [], "any", false, false, false, 114), "type", [], "any", false, false, false, 114));
                yield "</span>
                    ";
                // line 115
                if (($context["showBus"] ?? null)) {
                    // line 116
                    yield "                        <span class=\"label\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dispatchCall"], "bus", [], "any", false, false, false, 116), "html", null, true);
                    yield "</span>
                    ";
                }
                // line 118
                yield "                    ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["dispatchCall"], "exception", [], "any", true, true, false, 118)) {
                    // line 119
                    yield "                        <span class=\"label status-error\">exception</span>
                    ";
                }
                // line 121
                yield "                    <a class=\"toggle-button\">
                        <span class=\"icon icon-close\">";
                // line 122
                yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/images/icon-minus-square.svg");
                yield "</span>
                        <span class=\"icon icon-open\">";
                // line 123
                yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/images/icon-plus-square.svg");
                yield "</span>
                    </a>
                </th>
            </tr>
        </thead>
        <tbody id=\"message-item-";
                // line 128
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["discr"] ?? null), "html", null, true);
                yield "-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 128), "html", null, true);
                yield "-details\" class=\"sf-toggle-content\">
            <tr>
                <td colspan=\"2\" class=\"message-bus-dispatch-caller\">
                    <span class=\"metadata\">In
                        ";
                // line 132
                $context["caller"] = CoreExtension::getAttribute($this->env, $this->source, $context["dispatchCall"], "caller", [], "any", false, false, false, 132);
                // line 133
                yield "                        ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["caller"] ?? null), "line", [], "any", false, false, false, 133)) {
                    // line 134
                    yield "                            ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, ($context["caller"] ?? null), "file", [], "any", false, false, false, 134), CoreExtension::getAttribute($this->env, $this->source, ($context["caller"] ?? null), "line", [], "any", false, false, false, 134));
                    // line 135
                    yield "                            ";
                    if (($context["link"] ?? null)) {
                        // line 136
                        yield "                                <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["link"] ?? null), "html", null, true);
                        yield "\" title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["caller"] ?? null), "file", [], "any", false, false, false, 136), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["caller"] ?? null), "name", [], "any", false, false, false, 136), "html", null, true);
                        yield "</a>
                            ";
                    } else {
                        // line 138
                        yield "                                <abbr title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["caller"] ?? null), "file", [], "any", false, false, false, 138), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["caller"] ?? null), "name", [], "any", false, false, false, 138), "html", null, true);
                        yield "</abbr>
                            ";
                    }
                    // line 140
                    yield "                        ";
                } else {
                    // line 141
                    yield "                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["caller"] ?? null), "name", [], "any", false, false, false, 141), "html", null, true);
                    yield "
                        ";
                }
                // line 143
                yield "                        line <a class=\"text-small sf-toggle\" data-toggle-selector=\"#sf-trace-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["discr"] ?? null), "html", null, true);
                yield "-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 143), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["caller"] ?? null), "line", [], "any", false, false, false, 143), "html", null, true);
                yield "</a>
                    </span>

                    <div class=\"hidden\" id=\"sf-trace-";
                // line 146
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["discr"] ?? null), "html", null, true);
                yield "-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 146), "html", null, true);
                yield "\">
                        <div class=\"trace\">
                            ";
                // line 148
                yield Twig\Extension\CoreExtension::replace($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->fileExcerpt(CoreExtension::getAttribute($this->env, $this->source, ($context["caller"] ?? null), "file", [], "any", false, false, false, 148), CoreExtension::getAttribute($this->env, $this->source, ($context["caller"] ?? null), "line", [], "any", false, false, false, 148)), ["#DD0000" => "var(--highlight-string)", "#007700" => "var(--highlight-keyword)", "#0000BB" => "var(--highlight-default)", "#FF8000" => "var(--highlight-comment)"]);
                // line 153
                yield "
                        </div>
                    </div>
                </td>
            </tr>
            ";
                // line 158
                if (($context["showBus"] ?? null)) {
                    // line 159
                    yield "                <tr>
                    <td class=\"text-bold\">Bus</td>
                    <td>";
                    // line 161
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dispatchCall"], "bus", [], "any", false, false, false, 161), "html", null, true);
                    yield "</td>
                </tr>
            ";
                }
                // line 164
                yield "            <tr>
                <td class=\"text-bold\">Message</td>
                <td>";
                // line 166
                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["dispatchCall"], "message", [], "any", false, false, false, 166), "value", [], "any", false, false, false, 166), 2);
                yield "</td>
            </tr>
            <tr>
                <td class=\"text-bold\">Envelope stamps <span class=\"text-muted\">when dispatching</span></td>
                <td>
                    ";
                // line 171
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["dispatchCall"], "stamps", [], "any", false, false, false, 171));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 172
                    yield "                        ";
                    yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["item"]);
                    yield "
                    ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 174
                    yield "                        <span class=\"text-muted\">No items</span>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 176
                yield "                </td>
            </tr>
            ";
                // line 178
                if (CoreExtension::getAttribute($this->env, $this->source, $context["dispatchCall"], "stamps_after_dispatch", [], "any", true, true, false, 178)) {
                    // line 179
                    yield "                <tr>
                    <td class=\"text-bold\">Envelope stamps <span class=\"text-muted\">after dispatch</span></td>
                    <td>
                        ";
                    // line 182
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["dispatchCall"], "stamps_after_dispatch", [], "any", false, false, false, 182));
                    $context['_iterated'] = false;
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 183
                        yield "                            ";
                        yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["item"]);
                        yield "
                        ";
                        $context['_iterated'] = true;
                    }
                    if (!$context['_iterated']) {
                        // line 185
                        yield "                            <span class=\"text-muted\">No items</span>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 187
                    yield "                    </td>
                </tr>
            ";
                }
                // line 190
                yield "            ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["dispatchCall"], "exception", [], "any", true, true, false, 190)) {
                    // line 191
                    yield "                <tr>
                    <td class=\"text-bold\">Exception</td>
                    <td>
                        ";
                    // line 194
                    yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["dispatchCall"], "exception", [], "any", false, false, false, 194), "value", [], "any", false, false, false, 194), 1);
                    yield "
                    </td>
                </tr>
            ";
                }
                // line 198
                yield "        </tbody>
    </table>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dispatchCall'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@WebProfiler/Collector/messenger.html.twig";
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
        return array (  573 => 198,  566 => 194,  561 => 191,  558 => 190,  553 => 187,  546 => 185,  538 => 183,  533 => 182,  528 => 179,  526 => 178,  522 => 176,  515 => 174,  507 => 172,  502 => 171,  494 => 166,  490 => 164,  484 => 161,  480 => 159,  478 => 158,  471 => 153,  469 => 148,  462 => 146,  451 => 143,  445 => 141,  442 => 140,  434 => 138,  424 => 136,  421 => 135,  418 => 134,  415 => 133,  413 => 132,  404 => 128,  396 => 123,  392 => 122,  389 => 121,  385 => 119,  382 => 118,  376 => 116,  374 => 115,  370 => 114,  365 => 112,  359 => 111,  353 => 107,  335 => 106,  332 => 105,  316 => 104,  307 => 101,  303 => 99,  293 => 95,  289 => 94,  278 => 91,  275 => 90,  273 => 89,  270 => 88,  266 => 87,  259 => 83,  249 => 79,  246 => 78,  244 => 77,  240 => 75,  234 => 71,  232 => 70,  227 => 67,  224 => 66,  217 => 65,  189 => 45,  182 => 44,  173 => 41,  167 => 38,  164 => 37,  162 => 36,  157 => 34,  151 => 33,  144 => 32,  133 => 28,  130 => 27,  126 => 26,  116 => 22,  111 => 20,  107 => 19,  102 => 17,  99 => 16,  96 => 15,  91 => 14,  89 => 13,  86 => 12,  80 => 10,  75 => 9,  72 => 8,  69 => 7,  66 => 6,  59 => 5,  51 => 1,  49 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/messenger.html.twig", "C:\\Users\\Arman Saleem\\Desktop\\symfony\\users-service\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\messenger.html.twig");
    }
}
