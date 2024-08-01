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

/* @WebProfiler/Collector/notifier.html.twig */
class __TwigTemplate_2eea4b1d663c5aa512c667b40ec9819c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/notifier.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/notifier.html.twig", 1);
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
                yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/notifier.svg");
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
                <b>Sent notifications</b>
                <span class=\"sf-toolbar-status\">";
                // line 15
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "messages", [], "any", false, false, false, 15)), "html", null, true);
                yield "</span>
            </div>

            ";
                // line 18
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "transports", [], "any", false, false, false, 18));
                foreach ($context['_seq'] as $context["_key"] => $context["transport"]) {
                    // line 19
                    yield "                <div class=\"sf-toolbar-info-piece\">
                    <b>";
                    // line 20
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["transport"], "html", null, true);
                    yield "</b>
                    <span class=\"sf-toolbar-status\">";
                    // line 21
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "messages", [$context["transport"]], "method", false, false, false, 21)), "html", null, true);
                    yield "</span>
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transport'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                yield "        ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 25
            yield "
        ";
            // line 26
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null)]);
            yield "
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 30
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 31
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

    // line 67
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 68
        yield "    ";
        $context["events"] = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 68);
        // line 69
        yield "
    <span class=\"label ";
        // line 70
        yield ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "messages", [], "any", false, false, false, 70))) ? ("") : ("disabled"));
        yield "\">
        <span class=\"icon\">";
        // line 71
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/notifier.svg");
        yield "</span>

        <strong>Notifications</strong>
        ";
        // line 74
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "messages", [], "any", false, false, false, 74)) > 0)) {
            // line 75
            yield "            <span class=\"count\">
                <span>";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "messages", [], "any", false, false, false, 76)), "html", null, true);
            yield "</span>
            </span>
        ";
        }
        // line 79
        yield "    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 82
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 83
        yield "    ";
        $context["events"] = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 83);
        // line 84
        yield "
    <h2>Notifications</h2>

    ";
        // line 87
        if ( !Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "messages", [], "any", false, false, false, 87))) {
            // line 88
            yield "        <div class=\"empty\">
            <p>No notifications were sent.</p>
        </div>
    ";
        }
        // line 92
        yield "
    <div class=\"metrics\">
        ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "transports", [], "any", false, false, false, 94));
        foreach ($context['_seq'] as $context["_key"] => $context["transport"]) {
            // line 95
            yield "            <div class=\"metric\">
                <span class=\"value\">";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "messages", [$context["transport"]], "method", false, false, false, 96)), "html", null, true);
            yield "</span>
                <span class=\"label\">";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["transport"], "html", null, true);
            yield "</span>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transport'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        yield "    </div>

    ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "transports", [], "any", false, false, false, 102));
        foreach ($context['_seq'] as $context["_key"] => $context["transport"]) {
            // line 103
            yield "        <h3>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["transport"], "html", null, true);
            yield "</h3>

        <div class=\"card-block\">
            <div class=\"sf-tabs sf-tabs-sm\">
                ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "events", [$context["transport"]], "method", false, false, false, 107));
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
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 108
                yield "                    ";
                $context["message"] = CoreExtension::getAttribute($this->env, $this->source, $context["event"], "message", [], "any", false, false, false, 108);
                // line 109
                yield "                    <div class=\"tab\">
                        <h3 class=\"tab-title\">Message #";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 110), "html", null, true);
                yield " <small>(";
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "isQueued", [], "method", false, false, false, 110)) ? ("queued") : ("sent"));
                yield ")</small></h3>
                        <div class=\"tab-content\">
                            <div class=\"card\">
                                <div class=\"card-block\">
                                    <span class=\"label\">Subject</span>
                                    <h2 class=\"m-t-10\">";
                // line 115
                (((CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "getSubject", [], "method", true, true, false, 115) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "getSubject", [], "method", false, false, false, 115)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "getSubject", [], "method", false, false, false, 115), "html", null, true)) : (yield "(empty)"));
                yield "</h2>
                                </div>
                                ";
                // line 117
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "getNotification", [], "any", true, true, false, 117)) {
                    // line 118
                    yield "                                    <div class=\"card-block\">
                                        <div class=\"row\">
                                            <div class=\"col\">
                                                <span class=\"label\">Content</span>
                                                <pre class=\"prewrap\">";
                    // line 122
                    (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "getNotification", [], "method", false, true, false, 122), "getContent", [], "method", true, true, false, 122) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "getNotification", [], "method", false, true, false, 122), "getContent", [], "method", false, false, false, 122)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "getNotification", [], "method", false, true, false, 122), "getContent", [], "method", false, false, false, 122), "html", null, true)) : (yield "(empty)"));
                    yield "</pre>
                                                <span class=\"label\">Importance</span>
                                                <pre class=\"prewrap\">";
                    // line 124
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "getNotification", [], "method", false, false, false, 124), "getImportance", [], "method", false, false, false, 124), "html", null, true);
                    yield "</pre>
                                            </div>
                                        </div>
                                    </div>
                                ";
                }
                // line 129
                yield "                                    <div class=\"card-block\">
                                        <div class=\"sf-tabs sf-tabs-sm\">
                                            ";
                // line 131
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "getNotification", [], "any", true, true, false, 131)) {
                    // line 132
                    yield "                                                <div class=\"tab\">
                                                    <h3 class=\"tab-title\">Notification</h3>
                                                    ";
                    // line 134
                    $context["notification"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "message", [], "any", false, false, false, 134), "getNotification", [], "method", false, false, false, 134);
                    // line 135
                    yield "                                                    <div class=\"tab-content\">
                                                        <pre class=\"prewrap\" style=\"max-height: 600px\">";
                    // line 137
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("Subject: " . CoreExtension::getAttribute($this->env, $this->source, ($context["notification"] ?? null), "getSubject", [], "method", false, false, false, 137)), "html", null, true);
                    yield "<br/>";
                    // line 138
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("Content: " . CoreExtension::getAttribute($this->env, $this->source, ($context["notification"] ?? null), "getContent", [], "method", false, false, false, 138)), "html", null, true);
                    yield "<br/>";
                    // line 139
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("Importance: " . CoreExtension::getAttribute($this->env, $this->source, ($context["notification"] ?? null), "getImportance", [], "method", false, false, false, 139)), "html", null, true);
                    yield "<br/>";
                    // line 140
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("Emoji: " . ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["notification"] ?? null), "getEmoji", [], "method", false, false, false, 140))) ? ("(empty)") : (CoreExtension::getAttribute($this->env, $this->source, ($context["notification"] ?? null), "getEmoji", [], "method", false, false, false, 140)))), "html", null, true);
                    yield "<br/>";
                    // line 141
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("Exception: " . (((CoreExtension::getAttribute($this->env, $this->source, ($context["notification"] ?? null), "getException", [], "method", true, true, false, 141) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["notification"] ?? null), "getException", [], "method", false, false, false, 141)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["notification"] ?? null), "getException", [], "method", false, false, false, 141)) : ("(empty)"))), "html", null, true);
                    yield "<br/>";
                    // line 142
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("ExceptionAsString: " . ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["notification"] ?? null), "getExceptionAsString", [], "method", false, false, false, 142))) ? ("(empty)") : (CoreExtension::getAttribute($this->env, $this->source, ($context["notification"] ?? null), "getExceptionAsString", [], "method", false, false, false, 142)))), "html", null, true);
                    yield "
                                                        </pre>
                                                    </div>
                                                </div>
                                            ";
                }
                // line 147
                yield "                                                <div class=\"tab\">
                                                    <h3 class=\"tab-title\">Message Options</h3>
                                                    <div class=\"tab-content\">
                                                        <pre class=\"prewrap\" style=\"max-height: 600px\">";
                // line 151
                if ((null === CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "getOptions", [], "method", false, false, false, 151))) {
                    // line 152
                    yield "(empty)";
                } else {
                    // line 154
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "getOptions", [], "method", false, false, false, 154), Twig\Extension\CoreExtension::constant("JSON_PRETTY_PRINT")), "html", null, true);
                }
                // line 156
                yield "                                                        </pre>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                            </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
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
        return "@WebProfiler/Collector/notifier.html.twig";
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
        return array (  427 => 165,  405 => 156,  402 => 154,  399 => 152,  397 => 151,  392 => 147,  384 => 142,  381 => 141,  378 => 140,  375 => 139,  372 => 138,  369 => 137,  366 => 135,  364 => 134,  360 => 132,  358 => 131,  354 => 129,  346 => 124,  341 => 122,  335 => 118,  333 => 117,  328 => 115,  318 => 110,  315 => 109,  312 => 108,  295 => 107,  287 => 103,  283 => 102,  279 => 100,  270 => 97,  266 => 96,  263 => 95,  259 => 94,  255 => 92,  249 => 88,  247 => 87,  242 => 84,  239 => 83,  232 => 82,  223 => 79,  217 => 76,  214 => 75,  212 => 74,  206 => 71,  202 => 70,  199 => 69,  196 => 68,  189 => 67,  145 => 31,  138 => 30,  127 => 26,  124 => 25,  120 => 24,  111 => 21,  107 => 20,  104 => 19,  100 => 18,  94 => 15,  90 => 13,  88 => 12,  85 => 11,  79 => 9,  74 => 8,  71 => 7,  69 => 6,  66 => 5,  63 => 4,  56 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/notifier.html.twig", "C:\\Users\\Arman Saleem\\Desktop\\symfony\\users-service\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\notifier.html.twig");
    }
}
