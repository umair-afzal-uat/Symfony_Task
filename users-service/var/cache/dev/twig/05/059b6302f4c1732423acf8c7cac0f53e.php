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

/* @WebProfiler/Collector/mailer.html.twig */
class __TwigTemplate_13c2f5e4e06ad9fc5c1d87c6356a919c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'head' => [$this, 'block_head'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/mailer.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/mailer.html.twig", 1);
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
        $context["events"] = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 4);
        // line 5
        yield "
    ";
        // line 6
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "messages", [], "any", false, false, false, 6))) {
            // line 7
            yield "        ";
            $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 8
                yield "            ";
                yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/mailer.svg");
                yield "
            <span class=\"sf-toolbar-value\">";
                // line 9
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "messages", [], "any", false, false, false, 9)), "html", null, true);
                yield "</span>
        ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 11
            yield "
        ";
            // line 12
            $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 13
                yield "            <div class=\"sf-toolbar-info-piece\">
                <b>Queued messages</b>
                <span class=\"sf-toolbar-status\">";
                // line 15
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "events", [], "any", false, false, false, 15), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return CoreExtension::getAttribute($this->env, $this->source, ($context["e"] ?? null), "isQueued", [], "method", false, false, false, 15); })), "html", null, true);
                yield "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Sent messages</b>
                <span class=\"sf-toolbar-status\">";
                // line 19
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "events", [], "any", false, false, false, 19), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return  !CoreExtension::getAttribute($this->env, $this->source, ($context["e"] ?? null), "isQueued", [], "method", false, false, false, 19); })), "html", null, true);
                yield "</span>
            </div>
        ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 22
            yield "
        ";
            // line 23
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null)]);
            yield "
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 27
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 28
        yield "    ";
        yield from $this->yieldParentBlock("head", $context, $blocks);
        yield "
    <style type=\"text/css\">
        /* utility classes */
        .m-t-0 { margin-top: 0 !important; }
        .m-t-10 { margin-top: 10px !important; }

        /* basic grid */
        .row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }
        .col {
            flex-basis: 0;
            flex-grow: 1;
            max-width: 100%;
            position: relative;
            width: 100%;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
        }
        .col-4 {
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }

        /* small tabs */
        .sf-tabs-sm .tab-navigation li {
            font-size: 14px;
            padding: .3em .5em;
        }
    </style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 64
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 65
        yield "    ";
        $context["events"] = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 65);
        // line 66
        yield "
    <span class=\"label ";
        // line 67
        yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "messages", [], "any", false, false, false, 67))) ? ("disabled") : (""));
        yield "\">
        <span class=\"icon\">";
        // line 68
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/mailer.svg");
        yield "</span>

        <strong>E-mails</strong>
        ";
        // line 71
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "messages", [], "any", false, false, false, 71)) > 0)) {
            // line 72
            yield "            <span class=\"count\">
                <span>";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "messages", [], "any", false, false, false, 73)), "html", null, true);
            yield "</span>
            </span>
        ";
        }
        // line 76
        yield "    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 79
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 80
        yield "    ";
        $context["events"] = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 80);
        // line 81
        yield "
    <h2>Emails</h2>

    ";
        // line 84
        if ( !Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "messages", [], "any", false, false, false, 84))) {
            // line 85
            yield "        <div class=\"empty\">
            <p>No emails were sent.</p>
        </div>
    ";
        }
        // line 89
        yield "
    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "events", [], "any", false, false, false, 92), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return CoreExtension::getAttribute($this->env, $this->source, ($context["e"] ?? null), "isQueued", [], "method", false, false, false, 92); })), "html", null, true);
        yield "</span>
            <span class=\"label\">Queued</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "events", [], "any", false, false, false, 97), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return  !CoreExtension::getAttribute($this->env, $this->source, ($context["e"] ?? null), "isQueued", [], "method", false, false, false, 97); })), "html", null, true);
        yield "</span>
            <span class=\"label\">Sent</span>
        </div>
    </div>

    ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "transports", [], "any", false, false, false, 102));
        foreach ($context['_seq'] as $context["_key"] => $context["transport"]) {
            // line 103
            yield "        <div class=\"card-block\">
            <div class=\"sf-tabs sf-tabs-sm\">
                ";
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "events", [$context["transport"]], "method", false, false, false, 105));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 106
                yield "                    ";
                $context["message"] = CoreExtension::getAttribute($this->env, $this->source, $context["event"], "message", [], "any", false, false, false, 106);
                // line 107
                yield "                    <div class=\"tab\">
                        <h3 class=\"tab-title\">Email ";
                // line 108
                ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "isQueued", [], "method", false, false, false, 108)) ? (yield "queued") : (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("sent via " . $context["transport"]), "html", null, true)));
                yield "</h3>
                        <div class=\"tab-content\">
                            <div class=\"card\">
                                ";
                // line 111
                if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", true, true, false, 111)) {
                    // line 112
                    yield "                                    ";
                    // line 113
                    yield "                                    <div class=\"card-block\">
                                        <pre class=\"prewrap\" style=\"max-height: 600px\">";
                    // line 114
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "toString", [], "method", false, false, false, 114), "html", null, true);
                    yield "</pre>
                                    </div>
                                ";
                } else {
                    // line 117
                    yield "                                    ";
                    // line 118
                    yield "                                    <div class=\"card-block\">
                                        <div class=\"sf-tabs sf-tabs-sm\">
                                            <div class=\"tab\">
                                                <h3 class=\"tab-title\">Headers</h3>
                                                <div class=\"tab-content\">
                                                    <span class=\"label\">Subject</span>
                                                    <h2 class=\"m-t-10\">";
                    // line 124
                    (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, true, false, 124), "get", ["subject"], "method", false, true, false, 124), "bodyAsString", [], "method", true, true, false, 124) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, true, false, 124), "get", ["subject"], "method", false, true, false, 124), "bodyAsString", [], "method", false, false, false, 124)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, true, false, 124), "get", ["subject"], "method", false, true, false, 124), "bodyAsString", [], "method", false, false, false, 124), "html", null, true)) : (yield "(empty)"));
                    yield "</h2>
                                                    <div class=\"row\">
                                                        <div class=\"col col-4\">
                                                            <span class=\"label\">From</span>
                                                            <pre class=\"prewrap\">";
                    // line 128
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, true, false, 128), "get", ["from"], "method", false, true, false, 128), "bodyAsString", [], "method", true, true, false, 128) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, true, false, 128), "get", ["from"], "method", false, true, false, 128), "bodyAsString", [], "method", false, false, false, 128)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, true, false, 128), "get", ["from"], "method", false, true, false, 128), "bodyAsString", [], "method", false, false, false, 128)) : ("(empty)")), ["From:" => ""]), "html", null, true);
                    yield "</pre>

                                                            <span class=\"label\">To</span>
                                                            <pre class=\"prewrap\">";
                    // line 131
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, true, false, 131), "get", ["to"], "method", false, true, false, 131), "bodyAsString", [], "method", true, true, false, 131) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, true, false, 131), "get", ["to"], "method", false, true, false, 131), "bodyAsString", [], "method", false, false, false, 131)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, true, false, 131), "get", ["to"], "method", false, true, false, 131), "bodyAsString", [], "method", false, false, false, 131)) : ("(empty)")), ["To:" => ""]), "html", null, true);
                    yield "</pre>

                                                            ";
                    // line 133
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "envelope", [], "any", false, false, false, 133), "recipients", [], "any", false, false, false, 133)) > 0)) {
                        // line 134
                        yield "                                                                <span class=\"label\">Recipients</span>
                                                                ";
                        // line 135
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "envelope", [], "any", false, false, false, 135), "recipients", [], "any", false, false, false, 135));
                        foreach ($context['_seq'] as $context["_key"] => $context["recipient"]) {
                            // line 136
                            yield "                                                                    <pre class=\"prewrap\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipient"], "address", [], "any", false, false, false, 136), "html", null, true);
                            yield "</pre>
                                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipient'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 138
                        yield "                                                            ";
                    }
                    // line 139
                    yield "                                                        </div>
                                                        <div class=\"col\">
                                                            <span class=\"label\">Headers</span>
                                                            <pre class=\"prewrap\">";
                    // line 142
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, false, false, 142), "all", [], "any", false, false, false, 142), function ($__header__) use ($context, $macros) { $context["header"] = $__header__; return !CoreExtension::inFilter((((CoreExtension::getAttribute($this->env, $this->source, $context["header"], "name", [], "any", true, true, false, 142) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["header"], "name", [], "any", false, false, false, 142)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["header"], "name", [], "any", false, false, false, 142)) : ("")), ["Subject", "From", "To"]); }));
                    foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
                        // line 143
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["header"], "toString", [], "any", false, false, false, 143), "html", null, true);
                        yield "
";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 144
                    yield "</pre>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            ";
                    // line 149
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "htmlBody", [], "any", true, true, false, 149)) {
                        // line 150
                        yield "                                                ";
                        // line 151
                        yield "                                                ";
                        $context["htmlBody"] = CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "htmlBody", [], "method", false, false, false, 151);
                        // line 152
                        yield "                                                ";
                        if ( !(null === ($context["htmlBody"] ?? null))) {
                            // line 153
                            yield "                                                    <div class=\"tab\">
                                                        <h3 class=\"tab-title\">HTML Preview</h3>
                                                        <div class=\"tab-content\">
                                                            <pre class=\"prewrap\" style=\"max-height: 600px\">
                                                                <iframe
                                                                    src=\"data:text/html;charset=utf-8;base64,";
                            // line 158
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "base64Encode", [($context["htmlBody"] ?? null)], "method", false, false, false, 158), "html", null, true);
                            yield "\"
                                                                    style=\"height: 80vh;width: 100%;\"
                                                                >
                                                                </iframe>
                                                            </pre>
                                                        </div>
                                                    </div>
                                                    <div class=\"tab\">
                                                        <h3 class=\"tab-title\">HTML Content</h3>
                                                        <div class=\"tab-content\">
                                                            <pre class=\"prewrap\" style=\"max-height: 600px\">";
                            // line 169
                            if (CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "htmlCharset", [], "method", false, false, false, 169)) {
                                // line 170
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::convertEncoding(($context["htmlBody"] ?? null), "UTF-8", CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "htmlCharset", [], "method", false, false, false, 170)), "html", null, true);
                            } else {
                                // line 172
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["htmlBody"] ?? null), "html", null, true);
                            }
                            // line 174
                            yield "</pre>
                                                        </div>
                                                    </div>
                                                ";
                        }
                        // line 178
                        yield "                                                ";
                        $context["textBody"] = CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "textBody", [], "method", false, false, false, 178);
                        // line 179
                        yield "                                                ";
                        if ( !(null === ($context["textBody"] ?? null))) {
                            // line 180
                            yield "                                                    <div class=\"tab\">
                                                        <h3 class=\"tab-title\">Text Content</h3>
                                                        <div class=\"tab-content\">
                                                            <pre class=\"prewrap\" style=\"max-height: 600px\">";
                            // line 184
                            if (CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "textCharset", [], "method", false, false, false, 184)) {
                                // line 185
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::convertEncoding(($context["textBody"] ?? null), "UTF-8", CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "textCharset", [], "method", false, false, false, 185)), "html", null, true);
                            } else {
                                // line 187
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["textBody"] ?? null), "html", null, true);
                            }
                            // line 189
                            yield "</pre>
                                                        </div>
                                                    </div>
                                                ";
                        }
                        // line 193
                        yield "                                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "attachments", [], "any", false, false, false, 193));
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
                        foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                            // line 194
                            yield "                                                    <div class=\"tab\">
                                                        <h3 class=\"tab-title\">Attachment #";
                            // line 195
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 195), "html", null, true);
                            yield "</h3>
                                                        <div class=\"tab-content\">
                                                            <p>
                                                                <a href=\"data:";
                            // line 198
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "contentType", [], "any", true, true, false, 198)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "contentType", [], "any", false, false, false, 198), "application/octet-stream")) : ("application/octet-stream")), "html", null, true);
                            yield ";base64,";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "base64Encode", [CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "body", [], "any", false, false, false, 198)], "method", false, false, false, 198), "html", null, true);
                            yield "\" download=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "filename", [], "any", true, true, false, 198)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "filename", [], "any", false, false, false, 198), "attachment")) : ("attachment")), "html", null, true);
                            yield "\">
                                                                    ";
                            // line 199
                            if (((CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "filename", [], "any", true, true, false, 199)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "filename", [], "any", false, false, false, 199))) : (""))) {
                                // line 200
                                yield "                                                                        ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "filename", [], "any", false, false, false, 200), "html", null, true);
                                yield "
                                                                    ";
                            } else {
                                // line 202
                                yield "                                                                        <em>(no filename)</em>
                                                                    ";
                            }
                            // line 204
                            yield "                                                                </a>
                                                            </p>
                                                            <pre class=\"prewrap\" style=\"max-height: 600px\">";
                            // line 206
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "toString", [], "method", false, false, false, 206), "html", null, true);
                            yield "</pre>
                                                        </div>
                                                    </div>
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
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 210
                        yield "                                            ";
                    }
                    // line 211
                    yield "                                            <div class=\"tab\">
                                                <h3 class=\"tab-title\">Parts Hierarchy</h3>
                                                <div class=\"tab-content\">
                                                    <pre class=\"prewrap\" style=\"max-height: 600px\">";
                    // line 214
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "body", [], "method", false, false, false, 214), "asDebugString", [], "method", false, false, false, 214), "html", null, true);
                    yield "</pre>
                                                </div>
                                            </div>
                                            <div class=\"tab\">
                                                <h3 class=\"tab-title\">Raw</h3>
                                                <div class=\"tab-content\">
                                                    <pre class=\"prewrap\" style=\"max-height: 600px\">";
                    // line 220
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "toString", [], "method", false, false, false, 220), "html", null, true);
                    yield "</pre>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ";
                }
                // line 226
                yield "                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 230
            yield "            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transport'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@WebProfiler/Collector/mailer.html.twig";
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
        return array (  543 => 230,  534 => 226,  525 => 220,  516 => 214,  511 => 211,  508 => 210,  490 => 206,  486 => 204,  482 => 202,  476 => 200,  474 => 199,  466 => 198,  460 => 195,  457 => 194,  439 => 193,  433 => 189,  430 => 187,  427 => 185,  425 => 184,  420 => 180,  417 => 179,  414 => 178,  408 => 174,  405 => 172,  402 => 170,  400 => 169,  387 => 158,  380 => 153,  377 => 152,  374 => 151,  372 => 150,  370 => 149,  363 => 144,  355 => 143,  351 => 142,  346 => 139,  343 => 138,  334 => 136,  330 => 135,  327 => 134,  325 => 133,  320 => 131,  314 => 128,  307 => 124,  299 => 118,  297 => 117,  291 => 114,  288 => 113,  286 => 112,  284 => 111,  278 => 108,  275 => 107,  272 => 106,  268 => 105,  264 => 103,  260 => 102,  252 => 97,  244 => 92,  239 => 89,  233 => 85,  231 => 84,  226 => 81,  223 => 80,  216 => 79,  207 => 76,  201 => 73,  198 => 72,  196 => 71,  190 => 68,  186 => 67,  183 => 66,  180 => 65,  173 => 64,  129 => 28,  122 => 27,  111 => 23,  108 => 22,  101 => 19,  94 => 15,  90 => 13,  88 => 12,  85 => 11,  79 => 9,  74 => 8,  71 => 7,  69 => 6,  66 => 5,  63 => 4,  56 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/mailer.html.twig", "C:\\Users\\Arman Saleem\\Desktop\\symfony\\users-service\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\mailer.html.twig");
    }
}
