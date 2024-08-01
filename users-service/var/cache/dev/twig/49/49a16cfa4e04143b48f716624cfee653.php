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

/* @Security/Collector/security.html.twig */
class __TwigTemplate_1f70408f7a67f37d360b96f9b1ebe9cc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_title' => [$this, 'block_page_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Security/Collector/security.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@Security/Collector/security.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        // line 0
        yield "Security";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 6)) {
            // line 7
            yield "        ";
            $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 8
                yield "            ";
                yield Twig\Extension\CoreExtension::source($this->env, "@Security/Collector/icon.svg");
                yield "
            <span class=\"sf-toolbar-value\">";
                // line 9
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "user", [], "any", true, true, false, 9)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "user", [], "any", false, false, false, 9), "n/a")) : ("n/a")), "html", null, true);
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
                yield "            ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "impersonated", [], "any", false, false, false, 13)) {
                    // line 14
                    yield "                <div class=\"sf-toolbar-info-group\">
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Impersonator</b>
                        <span>";
                    // line 17
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "impersonatorUser", [], "any", false, false, false, 17), "html", null, true);
                    yield "</span>
                    </div>
                </div>
            ";
                }
                // line 21
                yield "
            <div class=\"sf-toolbar-info-group\">
                ";
                // line 23
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "enabled", [], "any", false, false, false, 23)) {
                    // line 24
                    yield "                    ";
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "token", [], "any", false, false, false, 24)) {
                        // line 25
                        yield "                        <div class=\"sf-toolbar-info-piece\">
                            <b>Logged in as</b>
                            <span>";
                        // line 27
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "user", [], "any", false, false, false, 27), "html", null, true);
                        yield "</span>
                        </div>

                        <div class=\"sf-toolbar-info-piece\">
                            <b>Authenticated</b>
                            <span class=\"sf-toolbar-status sf-toolbar-status-";
                        // line 32
                        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "authenticated", [], "any", false, false, false, 32)) ? ("green") : ("yellow"));
                        yield "\">";
                        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "authenticated", [], "any", false, false, false, 32)) ? ("Yes") : ("No"));
                        yield "</span>
                        </div>

                        <div class=\"sf-toolbar-info-piece\">
                            <b>Roles</b>
                            <span>
                                ";
                        // line 38
                        $context["remainingRoles"] = Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "roles", [], "any", false, false, false, 38), 1);
                        // line 39
                        yield "                                ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "roles", [], "any", false, false, false, 39)), "html", null, true);
                        yield "
                                ";
                        // line 40
                        if ( !Twig\Extension\CoreExtension::testEmpty(($context["remainingRoles"] ?? null))) {
                            // line 41
                            yield "                                    +
                                    <abbr title=\"";
                            // line 42
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(($context["remainingRoles"] ?? null), ", "), "html", null, true);
                            yield "\">
                                        ";
                            // line 43
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["remainingRoles"] ?? null)), "html", null, true);
                            yield " more
                                    </abbr>
                                ";
                        }
                        // line 46
                        yield "                            </span>
                        </div>

                        ";
                        // line 49
                        if (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "supportsRoleHierarchy", [], "any", false, false, false, 49)) {
                            // line 50
                            yield "                            <div class=\"sf-toolbar-info-piece\">
                                <b>Inherited Roles</b>
                                <span>
                                    ";
                            // line 53
                            if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "inheritedRoles", [], "any", false, false, false, 53))) {
                                // line 54
                                yield "                                        none
                                    ";
                            } else {
                                // line 56
                                yield "                                        ";
                                $context["remainingRoles"] = Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "inheritedRoles", [], "any", false, false, false, 56), 1);
                                // line 57
                                yield "                                        ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "inheritedRoles", [], "any", false, false, false, 57)), "html", null, true);
                                yield "
                                        ";
                                // line 58
                                if ( !Twig\Extension\CoreExtension::testEmpty(($context["remainingRoles"] ?? null))) {
                                    // line 59
                                    yield "                                            +
                                            <abbr title=\"";
                                    // line 60
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(($context["remainingRoles"] ?? null), ", "), "html", null, true);
                                    yield "\">
                                                ";
                                    // line 61
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["remainingRoles"] ?? null)), "html", null, true);
                                    yield " more
                                            </abbr>
                                        ";
                                }
                                // line 64
                                yield "                                    ";
                            }
                            // line 65
                            yield "                                </span>
                            </div>
                        ";
                        }
                        // line 68
                        yield "
                        <div class=\"sf-toolbar-info-piece\">
                            <b>Token class</b>
                            <span>";
                        // line 71
                        yield $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->abbrClass(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "tokenClass", [], "any", false, false, false, 71));
                        yield "</span>
                        </div>
                    ";
                    } else {
                        // line 74
                        yield "                        <div class=\"sf-toolbar-info-piece\">
                            <b>Authenticated</b>
                            <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">No</span>
                        </div>
                    ";
                    }
                    // line 79
                    yield "
                    ";
                    // line 80
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 80)) {
                        // line 81
                        yield "                        <div class=\"sf-toolbar-info-piece\">
                            <b>Firewall name</b>
                            <span>";
                        // line 83
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 83), "name", [], "any", false, false, false, 83), "html", null, true);
                        yield "</span>
                        </div>
                    ";
                    }
                    // line 86
                    yield "
                    ";
                    // line 87
                    if ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "token", [], "any", false, false, false, 87) && CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "logoutUrl", [], "any", false, false, false, 87))) {
                        // line 88
                        yield "                        <div class=\"sf-toolbar-info-piece\">
                            <b>Actions</b>
                            <span>
                                <a href=\"";
                        // line 91
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "logoutUrl", [], "any", false, false, false, 91), "html", null, true);
                        yield "\">Logout</a>
                                ";
                        // line 92
                        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "impersonated", [], "any", false, false, false, 92) && CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "impersonationExitPath", [], "any", false, false, false, 92))) {
                            // line 93
                            yield "                                    | <a href=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "impersonationExitPath", [], "any", false, false, false, 93), "html", null, true);
                            yield "\">Exit impersonation</a>
                                ";
                        }
                        // line 95
                        yield "                            </span>
                        </div>
                    ";
                    }
                    // line 98
                    yield "                ";
                } else {
                    // line 99
                    yield "                    <div class=\"sf-toolbar-info-piece\">
                        <span>The security is disabled.</span>
                    </div>
                ";
                }
                // line 103
                yield "            </div>
        ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 105
            yield "
        ";
            // line 106
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null)]);
            yield "
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 110
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 111
        yield "    <span class=\"label ";
        yield ((( !CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 111) ||  !CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "token", [], "any", false, false, false, 111))) ? ("disabled") : (""));
        yield "\">
        <span class=\"icon\">";
        // line 112
        yield Twig\Extension\CoreExtension::source($this->env, "@Security/Collector/icon.svg");
        yield "</span>
        <strong>Security</strong>
    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 117
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 118
        yield "    <h2>Security</h2>
    ";
        // line 119
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "enabled", [], "any", false, false, false, 119)) {
            // line 120
            yield "        <div class=\"sf-tabs\">
            <div class=\"tab ";
            // line 121
            yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "token", [], "any", false, false, false, 121))) ? ("disabled") : (""));
            yield "\">
                <h3 class=\"tab-title\">Token</h3>

                <div class=\"tab-content\">
                    ";
            // line 125
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "token", [], "any", false, false, false, 125)) {
                // line 126
                yield "                        <div class=\"metrics\">
                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 128
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "user", [], "any", false, false, false, 128), "html", null, true);
                yield "</span>
                                <span class=\"label\">Username</span>
                            </div>

                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 133
                yield Twig\Extension\CoreExtension::source($this->env, (("@WebProfiler/Icon/" . ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "authenticated", [], "any", false, false, false, 133)) ? ("yes") : ("no"))) . ".svg"));
                yield "</span>
                                <span class=\"label\">Authenticated</span>
                            </div>
                        </div>

                        <table>
                            <thead>
                                <tr>
                                    <th scope=\"col\" class=\"key\">Property</th>
                                    <th scope=\"col\">Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Roles</th>
                                    <td>
                                        ";
                // line 149
                yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "roles", [], "any", false, false, false, 149))) ? ("none") : ($this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "roles", [], "any", false, false, false, 149), 1)));
                yield "

                                        ";
                // line 151
                if (( !CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "authenticated", [], "any", false, false, false, 151) && Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "roles", [], "any", false, false, false, 151)))) {
                    // line 152
                    yield "                                            <p class=\"help\">User is not authenticated probably because they have no roles.</p>
                                        ";
                }
                // line 154
                yield "                                    </td>
                                </tr>

                                ";
                // line 157
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "supportsRoleHierarchy", [], "any", false, false, false, 157)) {
                    // line 158
                    yield "                                <tr>
                                    <th>Inherited Roles</th>
                                    <td>";
                    // line 160
                    yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "inheritedRoles", [], "any", false, false, false, 160))) ? ("none") : ($this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "inheritedRoles", [], "any", false, false, false, 160), 1)));
                    yield "</td>
                                </tr>
                                ";
                }
                // line 163
                yield "
                                ";
                // line 164
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "token", [], "any", false, false, false, 164)) {
                    // line 165
                    yield "                                <tr>
                                    <th>Token</th>
                                    <td>";
                    // line 167
                    yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "token", [], "any", false, false, false, 167));
                    yield "</td>
                                </tr>
                                ";
                }
                // line 170
                yield "                            </tbody>
                        </table>
                    ";
            } elseif (CoreExtension::getAttribute($this->env, $this->source,             // line 172
($context["collector"] ?? null), "enabled", [], "any", false, false, false, 172)) {
                // line 173
                yield "                        <div class=\"empty\">
                            <p>There is no security token.</p>
                        </div>
                    ";
            }
            // line 177
            yield "                </div>
            </div>

            <div class=\"tab ";
            // line 180
            yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 180), "security_enabled", [], "any", false, false, false, 180))) ? ("disabled") : (""));
            yield "\">
                <h3 class=\"tab-title\">Firewall</h3>
                <div class=\"tab-content\">
                    ";
            // line 183
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 183)) {
                // line 184
                yield "                        <div class=\"metrics\">
                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 186
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 186), "name", [], "any", false, false, false, 186), "html", null, true);
                yield "</span>
                                <span class=\"label\">Name</span>
                            </div>
                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 190
                yield Twig\Extension\CoreExtension::source($this->env, (("@WebProfiler/Icon/" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 190), "security_enabled", [], "any", false, false, false, 190)) ? ("yes") : ("no"))) . ".svg"));
                yield "</span>
                                <span class=\"label\">Security enabled</span>
                            </div>
                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 194
                yield Twig\Extension\CoreExtension::source($this->env, (("@WebProfiler/Icon/" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 194), "stateless", [], "any", false, false, false, 194)) ? ("yes") : ("no"))) . ".svg"));
                yield "</span>
                                <span class=\"label\">Stateless</span>
                            </div>
                        </div>

                        ";
                // line 199
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 199), "security_enabled", [], "any", false, false, false, 199)) {
                    // line 200
                    yield "                            <h4>Configuration</h4>
                            <table>
                                <thead>
                                    <tr>
                                        <th scope=\"col\" class=\"key\">Key</th>
                                        <th scope=\"col\">Value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>provider</th>
                                        <td>";
                    // line 211
                    ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 211), "provider", [], "any", false, false, false, 211)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 211), "provider", [], "any", false, false, false, 211), "html", null, true)) : (yield "(none)"));
                    yield "</td>
                                    </tr>
                                    <tr>
                                        <th>context</th>
                                        <td>";
                    // line 215
                    ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 215), "context", [], "any", false, false, false, 215)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 215), "context", [], "any", false, false, false, 215), "html", null, true)) : (yield "(none)"));
                    yield "</td>
                                    </tr>
                                    <tr>
                                        <th>entry_point</th>
                                        <td>";
                    // line 219
                    ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 219), "entry_point", [], "any", false, false, false, 219)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 219), "entry_point", [], "any", false, false, false, 219), "html", null, true)) : (yield "(none)"));
                    yield "</td>
                                    </tr>
                                    <tr>
                                        <th>user_checker</th>
                                        <td>";
                    // line 223
                    ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 223), "user_checker", [], "any", false, false, false, 223)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 223), "user_checker", [], "any", false, false, false, 223), "html", null, true)) : (yield "(none)"));
                    yield "</td>
                                    </tr>
                                    <tr>
                                        <th>access_denied_handler</th>
                                        <td>";
                    // line 227
                    ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 227), "access_denied_handler", [], "any", false, false, false, 227)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 227), "access_denied_handler", [], "any", false, false, false, 227), "html", null, true)) : (yield "(none)"));
                    yield "</td>
                                    </tr>
                                    <tr>
                                        <th>access_denied_url</th>
                                        <td>";
                    // line 231
                    ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 231), "access_denied_url", [], "any", false, false, false, 231)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 231), "access_denied_url", [], "any", false, false, false, 231), "html", null, true)) : (yield "(none)"));
                    yield "</td>
                                    </tr>
                                    <tr>
                                        <th>authenticators</th>
                                        <td>";
                    // line 235
                    yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 235), "authenticators", [], "any", false, false, false, 235))) ? ("(none)") : ($this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 235), "authenticators", [], "any", false, false, false, 235), 1)));
                    yield "</td>
                                    </tr>
                                </tbody>
                            </table>
                        ";
                }
                // line 240
                yield "                    ";
            }
            // line 241
            yield "                </div>
            </div>

            <div class=\"tab ";
            // line 244
            yield ((Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "listeners", [], "any", true, true, false, 244)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "listeners", [], "any", false, false, false, 244), [])) : ([])))) ? ("disabled") : (""));
            yield "\">
                <h3 class=\"tab-title\">Listeners</h3>
                <div class=\"tab-content\">
                    ";
            // line 247
            if (Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "listeners", [], "any", true, true, false, 247)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "listeners", [], "any", false, false, false, 247), [])) : ([])))) {
                // line 248
                yield "                        <div class=\"empty\">
                            <p>No security listeners have been recorded. Check that debugging is enabled in the kernel.</p>
                        </div>
                    ";
            } else {
                // line 252
                yield "                        <table>
                            <thead>
                            <tr>
                                <th>Listener</th>
                                <th>Duration</th>
                                <th>Response</th>
                            </tr>
                            </thead>

                            ";
                // line 261
                $context["previous_event"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "listeners", [], "any", false, false, false, 261));
                // line 262
                yield "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "listeners", [], "any", false, false, false, 262));
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
                foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                    // line 263
                    yield "                                ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 263) || ($context["listener"] != ($context["previous_event"] ?? null)))) {
                        // line 264
                        yield "                                    ";
                        if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 264)) {
                            // line 265
                            yield "                                        </tbody>
                                    ";
                        }
                        // line 267
                        yield "                                    <tbody>
                                    ";
                        // line 268
                        $context["previous_event"] = $context["listener"];
                        // line 269
                        yield "                                ";
                    }
                    // line 270
                    yield "
                                <tr>
                                    <td class=\"font-normal\">";
                    // line 272
                    yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["listener"], "stub", [], "any", false, false, false, 272));
                    yield "</td>
                                    <td class=\"no-wrap\">";
                    // line 273
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, $context["listener"], "time", [], "any", false, false, false, 273) * 1000)), "html", null, true);
                    yield " ms</td>
                                    <td class=\"font-normal\">";
                    // line 274
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["listener"], "response", [], "any", false, false, false, 274)) ? ($this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["listener"], "response", [], "any", false, false, false, 274))) : ("(none)"));
                    yield "</td>
                                </tr>

                                ";
                    // line 277
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 277)) {
                        // line 278
                        yield "                                    </tbody>
                                ";
                    }
                    // line 280
                    yield "                            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 281
                yield "                        </table>
                    ";
            }
            // line 283
            yield "                </div>
            </div>

            <div class=\"tab ";
            // line 286
            yield ((Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "authenticators", [], "any", true, true, false, 286)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "authenticators", [], "any", false, false, false, 286), [])) : ([])))) ? ("disabled") : (""));
            yield "\">
                <h3 class=\"tab-title\">Authenticators</h3>
                <div class=\"tab-content\">
                    ";
            // line 289
            if ( !Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "authenticators", [], "any", true, true, false, 289)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "authenticators", [], "any", false, false, false, 289), [])) : ([])))) {
                // line 290
                yield "                        <table>
                            <thead>
                            <tr>
                                <th>Authenticator</th>
                                <th>Supports</th>
                                <th>Duration</th>
                                <th>Passport</th>
                            </tr>
                            </thead>

                            ";
                // line 300
                $context["previous_event"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "listeners", [], "any", false, false, false, 300));
                // line 301
                yield "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "authenticators", [], "any", false, false, false, 301));
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
                foreach ($context['_seq'] as $context["_key"] => $context["authenticator"]) {
                    // line 302
                    yield "                                ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 302) || ($context["authenticator"] != ($context["previous_event"] ?? null)))) {
                        // line 303
                        yield "                                    ";
                        if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 303)) {
                            // line 304
                            yield "                                        </tbody>
                                    ";
                        }
                        // line 306
                        yield "
                                    <tbody>
                                    ";
                        // line 308
                        $context["previous_event"] = $context["authenticator"];
                        // line 309
                        yield "                                ";
                    }
                    // line 310
                    yield "
                                <tr>
                                    <td class=\"font-normal\">";
                    // line 312
                    yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["authenticator"], "stub", [], "any", false, false, false, 312));
                    yield "</td>
                                    <td class=\"no-wrap\">";
                    // line 313
                    yield Twig\Extension\CoreExtension::source($this->env, (("@WebProfiler/Icon/" . ((CoreExtension::getAttribute($this->env, $this->source, $context["authenticator"], "supports", [], "any", false, false, false, 313)) ? ("yes") : ("no"))) . ".svg"));
                    yield "</td>
                                    <td class=\"no-wrap\">";
                    // line 314
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, $context["authenticator"], "duration", [], "any", false, false, false, 314) * 1000)), "html", null, true);
                    yield " ms</td>
                                    <td class=\"font-normal\">";
                    // line 315
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["authenticator"], "passport", [], "any", false, false, false, 315)) ? ($this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["authenticator"], "passport", [], "any", false, false, false, 315))) : ("(none)"));
                    yield "</td>
                                </tr>

                                ";
                    // line 318
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 318)) {
                        // line 319
                        yield "                                    </tbody>
                                ";
                    }
                    // line 321
                    yield "                            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['authenticator'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 322
                yield "                        </table>
                    ";
            } else {
                // line 324
                yield "                        <div class=\"empty\">
                            <p>No authenticators have been recorded. Check previous profiles on your authentication endpoint.</p>
                        </div>
                    ";
            }
            // line 328
            yield "                </div>
            </div>

            <div class=\"tab ";
            // line 331
            yield ((Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "accessDecisionLog", [], "any", true, true, false, 331)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "accessDecisionLog", [], "any", false, false, false, 331), [])) : ([])))) ? ("disabled") : (""));
            yield "\">
                <h3 class=\"tab-title\">Access Decision</h3>
                <div class=\"tab-content\">
                    ";
            // line 334
            if ( !Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "voters", [], "any", true, true, false, 334)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "voters", [], "any", false, false, false, 334), [])) : ([])))) {
                // line 335
                yield "                        <div class=\"metrics\">
                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 337
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "voterStrategy", [], "any", true, true, false, 337)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "voterStrategy", [], "any", false, false, false, 337), "unknown")) : ("unknown")), "html", null, true);
                yield "</span>
                                <span class=\"label\">Strategy</span>
                            </div>
                        </div>

                        <table class=\"voters\">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Voter class</th>
                                </tr>
                            </thead>

                            <tbody>
                                ";
                // line 351
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "voters", [], "any", false, false, false, 351));
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
                foreach ($context['_seq'] as $context["_key"] => $context["voter"]) {
                    // line 352
                    yield "                                    <tr>
                                        <td class=\"font-normal text-small text-muted nowrap\">";
                    // line 353
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 353), "html", null, true);
                    yield "</td>
                                        <td class=\"font-normal\">";
                    // line 354
                    yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["voter"]);
                    yield "</td>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voter'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 357
                yield "                            </tbody>
                        </table>
                    ";
            }
            // line 360
            yield "                    ";
            if ( !Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "accessDecisionLog", [], "any", true, true, false, 360)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "accessDecisionLog", [], "any", false, false, false, 360), [])) : ([])))) {
                // line 361
                yield "                        <h2>Access decision log</h2>

                        <table class=\"decision-log\">
                            <col style=\"width: 30px\">
                            <col style=\"width: 120px\">
                            <col style=\"width: 25%\">
                            <col style=\"width: 60%\">

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Result</th>
                                    <th>Attributes</th>
                                    <th>Object</th>
                                </tr>
                            </thead>

                            <tbody>
                                ";
                // line 379
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "accessDecisionLog", [], "any", false, false, false, 379));
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
                foreach ($context['_seq'] as $context["_key"] => $context["decision"]) {
                    // line 380
                    yield "                                    <tr class=\"voter_result\">
                                        <td class=\"font-normal text-small text-muted nowrap\">";
                    // line 381
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 381), "html", null, true);
                    yield "</td>
                                        <td class=\"font-normal\">
                                            ";
                    // line 383
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["decision"], "result", [], "any", false, false, false, 383)) ? ("<span class=\"label status-success same-width\">GRANTED</span>") : ("<span class=\"label status-error same-width\">DENIED</span>"));
                    // line 386
                    yield "
                                        </td>
                                        <td>
                                            ";
                    // line 389
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["decision"], "attributes", [], "any", false, false, false, 389)) == 1)) {
                        // line 390
                        yield "                                                ";
                        $context["attribute"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["decision"], "attributes", [], "any", false, false, false, 390));
                        // line 391
                        yield "                                                ";
                        if (CoreExtension::getAttribute($this->env, $this->source, ($context["attribute"] ?? null), "expression", [], "any", true, true, false, 391)) {
                            // line 392
                            yield "                                                    Expression: <pre><code>";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["attribute"] ?? null), "expression", [], "any", false, false, false, 392), "html", null, true);
                            yield "</code></pre>
                                                ";
                        } elseif ((CoreExtension::getAttribute($this->env, $this->source,                         // line 393
($context["attribute"] ?? null), "type", [], "any", false, false, false, 393) == "string")) {
                            // line 394
                            yield "                                                    ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["attribute"] ?? null), "html", null, true);
                            yield "
                                                ";
                        } else {
                            // line 396
                            yield "                                                     ";
                            yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, ($context["attribute"] ?? null));
                            yield "
                                                ";
                        }
                        // line 398
                        yield "                                            ";
                    } else {
                        // line 399
                        yield "                                                ";
                        yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["decision"], "attributes", [], "any", false, false, false, 399));
                        yield "
                                            ";
                    }
                    // line 401
                    yield "                                        </td>
                                        <td>";
                    // line 402
                    yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["decision"], "seek", ["object"], "method", false, false, false, 402));
                    yield "</td>
                                    </tr>
                                    <tr class=\"voter_details\">
                                        <td></td>
                                        <td colspan=\"3\">
                                        ";
                    // line 407
                    if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["decision"], "voter_details", [], "any", false, false, false, 407))) {
                        // line 408
                        yield "                                            ";
                        $context["voter_details_id"] = ("voter-details-" . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 408));
                        // line 409
                        yield "                                            <div id=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["voter_details_id"] ?? null), "html", null, true);
                        yield "\" class=\"sf-toggle-content sf-toggle-hidden\">
                                                <table>
                                                   <tbody>
                                                    ";
                        // line 412
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["decision"], "voter_details", [], "any", false, false, false, 412));
                        foreach ($context['_seq'] as $context["_key"] => $context["voter_detail"]) {
                            // line 413
                            yield "                                                        <tr>
                                                            <td class=\"font-normal\">";
                            // line 414
                            yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, (($__internal_compile_0 = $context["voter_detail"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["class"] ?? null) : null));
                            yield "</td>
                                                            ";
                            // line 415
                            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "voterStrategy", [], "any", false, false, false, 415) == "unanimous")) {
                                // line 416
                                yield "                                                            <td class=\"font-normal text-small\">attribute ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_1 = (($__internal_compile_2 = $context["voter_detail"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["attributes"] ?? null) : null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null), "html", null, true);
                                yield "</td>
                                                            ";
                            }
                            // line 418
                            yield "                                                            <td class=\"font-normal text-small\">
                                                                ";
                            // line 419
                            if (((($__internal_compile_3 = $context["voter_detail"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["vote"] ?? null) : null) == Twig\Extension\CoreExtension::constant("Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface::ACCESS_GRANTED"))) {
                                // line 420
                                yield "                                                                    ACCESS GRANTED
                                                                ";
                            } elseif (((($__internal_compile_4 =                             // line 421
$context["voter_detail"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["vote"] ?? null) : null) == Twig\Extension\CoreExtension::constant("Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface::ACCESS_ABSTAIN"))) {
                                // line 422
                                yield "                                                                    ACCESS ABSTAIN
                                                                ";
                            } elseif (((($__internal_compile_5 =                             // line 423
$context["voter_detail"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["vote"] ?? null) : null) == Twig\Extension\CoreExtension::constant("Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface::ACCESS_DENIED"))) {
                                // line 424
                                yield "                                                                    ACCESS DENIED
                                                                ";
                            } else {
                                // line 426
                                yield "                                                                    unknown (";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_6 = $context["voter_detail"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["vote"] ?? null) : null), "html", null, true);
                                yield ")
                                                                ";
                            }
                            // line 428
                            yield "                                                            </td>
                                                        </tr>
                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voter_detail'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 431
                        yield "                                                    </tbody>
                                                </table>
                                            </div>
                                            <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                        // line 434
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["voter_details_id"] ?? null), "html", null, true);
                        yield "\" data-toggle-alt-content=\"Hide voter details\">Show voter details</a>
                                        ";
                    }
                    // line 436
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['decision'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 439
                yield "                            </tbody>
                        </table>
                    </div>
                ";
            }
            // line 443
            yield "            </div>
        </div>
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
        return "@Security/Collector/security.html.twig";
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
        return array (  1051 => 443,  1045 => 439,  1029 => 436,  1024 => 434,  1019 => 431,  1011 => 428,  1005 => 426,  1001 => 424,  999 => 423,  996 => 422,  994 => 421,  991 => 420,  989 => 419,  986 => 418,  980 => 416,  978 => 415,  974 => 414,  971 => 413,  967 => 412,  960 => 409,  957 => 408,  955 => 407,  947 => 402,  944 => 401,  938 => 399,  935 => 398,  929 => 396,  923 => 394,  921 => 393,  916 => 392,  913 => 391,  910 => 390,  908 => 389,  903 => 386,  901 => 383,  896 => 381,  893 => 380,  876 => 379,  856 => 361,  853 => 360,  848 => 357,  831 => 354,  827 => 353,  824 => 352,  807 => 351,  790 => 337,  786 => 335,  784 => 334,  778 => 331,  773 => 328,  767 => 324,  763 => 322,  749 => 321,  745 => 319,  743 => 318,  737 => 315,  733 => 314,  729 => 313,  725 => 312,  721 => 310,  718 => 309,  716 => 308,  712 => 306,  708 => 304,  705 => 303,  702 => 302,  684 => 301,  682 => 300,  670 => 290,  668 => 289,  662 => 286,  657 => 283,  653 => 281,  639 => 280,  635 => 278,  633 => 277,  627 => 274,  623 => 273,  619 => 272,  615 => 270,  612 => 269,  610 => 268,  607 => 267,  603 => 265,  600 => 264,  597 => 263,  579 => 262,  577 => 261,  566 => 252,  560 => 248,  558 => 247,  552 => 244,  547 => 241,  544 => 240,  536 => 235,  529 => 231,  522 => 227,  515 => 223,  508 => 219,  501 => 215,  494 => 211,  481 => 200,  479 => 199,  471 => 194,  464 => 190,  457 => 186,  453 => 184,  451 => 183,  445 => 180,  440 => 177,  434 => 173,  432 => 172,  428 => 170,  422 => 167,  418 => 165,  416 => 164,  413 => 163,  407 => 160,  403 => 158,  401 => 157,  396 => 154,  392 => 152,  390 => 151,  385 => 149,  366 => 133,  358 => 128,  354 => 126,  352 => 125,  345 => 121,  342 => 120,  340 => 119,  337 => 118,  330 => 117,  318 => 112,  313 => 111,  306 => 110,  295 => 106,  292 => 105,  287 => 103,  281 => 99,  278 => 98,  273 => 95,  267 => 93,  265 => 92,  261 => 91,  256 => 88,  254 => 87,  251 => 86,  245 => 83,  241 => 81,  239 => 80,  236 => 79,  229 => 74,  223 => 71,  218 => 68,  213 => 65,  210 => 64,  204 => 61,  200 => 60,  197 => 59,  195 => 58,  190 => 57,  187 => 56,  183 => 54,  181 => 53,  176 => 50,  174 => 49,  169 => 46,  163 => 43,  159 => 42,  156 => 41,  154 => 40,  149 => 39,  147 => 38,  136 => 32,  128 => 27,  124 => 25,  121 => 24,  119 => 23,  115 => 21,  108 => 17,  103 => 14,  100 => 13,  98 => 12,  95 => 11,  89 => 9,  84 => 8,  81 => 7,  78 => 6,  71 => 5,  63 => 0,  56 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Security/Collector/security.html.twig", "C:\\Users\\Arman Saleem\\Desktop\\symfony\\users-service\\vendor\\symfony\\security-bundle\\Resources\\views\\Collector\\security.html.twig");
    }
}
