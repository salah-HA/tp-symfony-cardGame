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

/* base.html.twig */
class __TwigTemplate_6ddc216faa59a07abe95bc8b7a0881f5557b0706db83acd786cf3af7f8d6ad1e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\"
          integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    <link href=\"https://fonts.googleapis.com/css?family=Girassol|Ibarra+Real+Nova&display=swap\" rel=\"stylesheet\">
    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "</head>
<body>
<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("card");
        echo "\" class=\"nav-link\">Form Card</a>
    <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category");
        echo "\" class=\"nav-link\">Form Category</a>
    <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("carte");
        echo "\" class=\"nav-link\">Card List</a>
    <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("faction");
        echo "\" class=\"nav-link\">Faction List</a>
</nav>

<div id=\"pageContent\"></div>
<canvas id=\"c\"></canvas>
";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 23
        $this->displayBlock('javascripts', $context, $blocks);
        // line 271
        echo "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 24
        echo "    <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\"
            integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\"
            crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\"
            integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\"
            crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\"
            integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\"
            crossorigin=\"anonymous\"></script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
    <script src=\"https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/animejs/1.0.0/anime.min.js\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$('nav a').click(function (e) {
                e.preventDefault();
                \$('nav a').removeClass('active');
                \$(this).addClass('active');
                \$(\"#pageContent\").load(\$(this).attr('href'));
            });
        });

        \$('#pageContent').on('submit', 'form', function (e) {
            e.preventDefault();
            var form = \$(this);
            \$.ajax({
                type: \"POST\",
                url: form.attr('action'),
                data: new FormData(this),
                contentType: false,
                processData: false,
                success: function success(response) {
                    \$(\"#pageContent\").load(\$('.active').attr('href'));
                }
            });
        });
        /*
        var c = document.getElementById(\"c\");
        var ctx = c.getContext(\"2d\");
        var cH;
        var cW;
        var bgColor = \"#FF6138\";
        var animations = [];
        var circles = [];

        var colorPicker = (function() {
            var colors = [\"#FF6138\", \"#FFBE53\", \"#2980B9\", \"#282741\"];
            var index = 0;
            function next() {
                index = index++ < colors.length-1 ? index : 0;
                return colors[index];
            }
            function current() {
                return colors[index]
            }
            return {
                next: next,
                current: current
            }
        })();

        function removeAnimation(animation) {
            var index = animations.indexOf(animation);
            if (index > -1) animations.splice(index, 1);
        }

        function calcPageFillRadius(x, y) {
            var l = Math.max(x - 0, cW - x);
            var h = Math.max(y - 0, cH - y);
            return Math.sqrt(Math.pow(l, 2) + Math.pow(h, 2));
        }

        function addClickListeners() {
            document.addEventListener(\"touchstart\", handleEvent);
            document.addEventListener(\"mousedown\", handleEvent);
        };

        function handleEvent(e) {
            if (e.touches) {
                e.preventDefault();
                e = e.touches[0];
            }
            var currentColor = colorPicker.current();
            var nextColor = colorPicker.next();
            var targetR = calcPageFillRadius(e.pageX, e.pageY);
            var rippleSize = Math.min(200, (cW * .4));
            var minCoverDuration = 750;

            var pageFill = new Circle({
                x: e.pageX,
                y: e.pageY,
                r: 0,
                fill: nextColor
            });
            var fillAnimation = anime({
                targets: pageFill,
                r: targetR,
                duration:  Math.max(targetR / 2 , minCoverDuration ),
                easing: \"easeOutQuart\",
                complete: function(){
                    bgColor = pageFill.fill;
                    removeAnimation(fillAnimation);
                }
            });

            var ripple = new Circle({
                x: e.pageX,
                y: e.pageY,
                r: 0,
                fill: currentColor,
                stroke: {
                    width: 3,
                    color: currentColor
                },
                opacity: 1
            });
            var rippleAnimation = anime({
                targets: ripple,
                r: rippleSize,
                opacity: 0,
                easing: \"easeOutExpo\",
                duration: 900,
                complete: removeAnimation
            });

            var particles = [];
            for (var i=0; i<32; i++) {
                var particle = new Circle({
                    x: e.pageX,
                    y: e.pageY,
                    fill: currentColor,
                    r: anime.random(24, 48)
                })
                particles.push(particle);
            }
            var particlesAnimation = anime({
                targets: particles,
                x: function(particle){
                    return particle.x + anime.random(rippleSize, -rippleSize);
                },
                y: function(particle){
                    return particle.y + anime.random(rippleSize * 1.15, -rippleSize * 1.15);
                },
                r: 0,
                easing: \"easeOutExpo\",
                duration: anime.random(1000,1300),
                complete: removeAnimation
            });
            animations.push(fillAnimation, rippleAnimation, particlesAnimation);
        }

        function extend(a, b){
            for(var key in b) {
                if(b.hasOwnProperty(key)) {
                    a[key] = b[key];
                }
            }
            return a;
        }

        var Circle = function(opts) {
            extend(this, opts);
        }

        Circle.prototype.draw = function() {
            ctx.globalAlpha = this.opacity || 1;
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.r, 0, 2 * Math.PI, false);
            if (this.stroke) {
                ctx.strokeStyle = this.stroke.color;
                ctx.lineWidth = this.stroke.width;
                ctx.stroke();
            }
            if (this.fill) {
                ctx.fillStyle = this.fill;
                ctx.fill();
            }
            ctx.closePath();
            ctx.globalAlpha = 1;
        }

        var animate = anime({
            duration: Infinity,
            update: function() {
                ctx.fillStyle = bgColor;
                ctx.fillRect(0, 0, cW, cH);
                animations.forEach(function(anim) {
                    anim.animatables.forEach(function(animatable) {
                        animatable.target.draw();
                    });
                });
            }
        });

        var resizeCanvas = function() {
            cW = window.innerWidth;
            cH = window.innerHeight;
            c.width = cW * devicePixelRatio;
            c.height = cH * devicePixelRatio;
            ctx.scale(devicePixelRatio, devicePixelRatio);
        };

        (function init() {
            resizeCanvas();
            if (window.CP) {
                // CodePen's loop detection was causin' problems
                // and I have no idea why, so...
                window.CP.PenTimer.MAX_TIME_IN_LOOP_WO_EXIT = 6000;
            }
            window.addEventListener(\"resize\", resizeCanvas);
            addClickListeners();
            if (!!window.location.pathname.match(/fullcpgrid/)) {
                startFauxClicking();
            }
            handleInactiveUser();
        })();

        function handleInactiveUser() {
            var inactive = setTimeout(function(){
                fauxClick(cW/2, cH/2);
            }, 2000);

            function clearInactiveTimeout() {
                clearTimeout(inactive);
                document.removeEventListener(\"mousedown\", clearInactiveTimeout);
                document.removeEventListener(\"touchstart\", clearInactiveTimeout);
            }

            document.addEventListener(\"mousedown\", clearInactiveTimeout);
            document.addEventListener(\"touchstart\", clearInactiveTimeout);
        }

        function startFauxClicking() {
            setTimeout(function(){
                fauxClick(anime.random( cW * .2, cW * .8), anime.random(cH * .2, cH * .8));
                startFauxClicking();
            }, anime.random(200, 900));
        }

        function fauxClick(x, y) {
            var fauxClick = new Event(\"mousedown\");
            fauxClick.pageX = x;
            fauxClick.pageY = y;
            document.dispatchEvent(fauxClick);
        }*/
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 24,  158 => 23,  140 => 21,  122 => 9,  103 => 5,  91 => 271,  89 => 23,  87 => 21,  79 => 16,  75 => 15,  71 => 14,  67 => 13,  62 => 10,  60 => 9,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Welcome!{% endblock %}</title>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\"
          integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    <link href=\"https://fonts.googleapis.com/css?family=Girassol|Ibarra+Real+Nova&display=swap\" rel=\"stylesheet\">
    {% block stylesheets %}{% endblock %}
</head>
<body>
<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <a href=\"{{ path('card') }}\" class=\"nav-link\">Form Card</a>
    <a href=\"{{ path('category') }}\" class=\"nav-link\">Form Category</a>
    <a href=\"{{ path('carte') }}\" class=\"nav-link\">Card List</a>
    <a href=\"{{ path('faction') }}\" class=\"nav-link\">Faction List</a>
</nav>

<div id=\"pageContent\"></div>
<canvas id=\"c\"></canvas>
{% block body %}
{% endblock %}
{% block javascripts %}
    <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\"
            integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\"
            crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\"
            integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\"
            crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\"
            integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\"
            crossorigin=\"anonymous\"></script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
    <script src=\"https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/animejs/1.0.0/anime.min.js\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$('nav a').click(function (e) {
                e.preventDefault();
                \$('nav a').removeClass('active');
                \$(this).addClass('active');
                \$(\"#pageContent\").load(\$(this).attr('href'));
            });
        });

        \$('#pageContent').on('submit', 'form', function (e) {
            e.preventDefault();
            var form = \$(this);
            \$.ajax({
                type: \"POST\",
                url: form.attr('action'),
                data: new FormData(this),
                contentType: false,
                processData: false,
                success: function success(response) {
                    \$(\"#pageContent\").load(\$('.active').attr('href'));
                }
            });
        });
        /*
        var c = document.getElementById(\"c\");
        var ctx = c.getContext(\"2d\");
        var cH;
        var cW;
        var bgColor = \"#FF6138\";
        var animations = [];
        var circles = [];

        var colorPicker = (function() {
            var colors = [\"#FF6138\", \"#FFBE53\", \"#2980B9\", \"#282741\"];
            var index = 0;
            function next() {
                index = index++ < colors.length-1 ? index : 0;
                return colors[index];
            }
            function current() {
                return colors[index]
            }
            return {
                next: next,
                current: current
            }
        })();

        function removeAnimation(animation) {
            var index = animations.indexOf(animation);
            if (index > -1) animations.splice(index, 1);
        }

        function calcPageFillRadius(x, y) {
            var l = Math.max(x - 0, cW - x);
            var h = Math.max(y - 0, cH - y);
            return Math.sqrt(Math.pow(l, 2) + Math.pow(h, 2));
        }

        function addClickListeners() {
            document.addEventListener(\"touchstart\", handleEvent);
            document.addEventListener(\"mousedown\", handleEvent);
        };

        function handleEvent(e) {
            if (e.touches) {
                e.preventDefault();
                e = e.touches[0];
            }
            var currentColor = colorPicker.current();
            var nextColor = colorPicker.next();
            var targetR = calcPageFillRadius(e.pageX, e.pageY);
            var rippleSize = Math.min(200, (cW * .4));
            var minCoverDuration = 750;

            var pageFill = new Circle({
                x: e.pageX,
                y: e.pageY,
                r: 0,
                fill: nextColor
            });
            var fillAnimation = anime({
                targets: pageFill,
                r: targetR,
                duration:  Math.max(targetR / 2 , minCoverDuration ),
                easing: \"easeOutQuart\",
                complete: function(){
                    bgColor = pageFill.fill;
                    removeAnimation(fillAnimation);
                }
            });

            var ripple = new Circle({
                x: e.pageX,
                y: e.pageY,
                r: 0,
                fill: currentColor,
                stroke: {
                    width: 3,
                    color: currentColor
                },
                opacity: 1
            });
            var rippleAnimation = anime({
                targets: ripple,
                r: rippleSize,
                opacity: 0,
                easing: \"easeOutExpo\",
                duration: 900,
                complete: removeAnimation
            });

            var particles = [];
            for (var i=0; i<32; i++) {
                var particle = new Circle({
                    x: e.pageX,
                    y: e.pageY,
                    fill: currentColor,
                    r: anime.random(24, 48)
                })
                particles.push(particle);
            }
            var particlesAnimation = anime({
                targets: particles,
                x: function(particle){
                    return particle.x + anime.random(rippleSize, -rippleSize);
                },
                y: function(particle){
                    return particle.y + anime.random(rippleSize * 1.15, -rippleSize * 1.15);
                },
                r: 0,
                easing: \"easeOutExpo\",
                duration: anime.random(1000,1300),
                complete: removeAnimation
            });
            animations.push(fillAnimation, rippleAnimation, particlesAnimation);
        }

        function extend(a, b){
            for(var key in b) {
                if(b.hasOwnProperty(key)) {
                    a[key] = b[key];
                }
            }
            return a;
        }

        var Circle = function(opts) {
            extend(this, opts);
        }

        Circle.prototype.draw = function() {
            ctx.globalAlpha = this.opacity || 1;
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.r, 0, 2 * Math.PI, false);
            if (this.stroke) {
                ctx.strokeStyle = this.stroke.color;
                ctx.lineWidth = this.stroke.width;
                ctx.stroke();
            }
            if (this.fill) {
                ctx.fillStyle = this.fill;
                ctx.fill();
            }
            ctx.closePath();
            ctx.globalAlpha = 1;
        }

        var animate = anime({
            duration: Infinity,
            update: function() {
                ctx.fillStyle = bgColor;
                ctx.fillRect(0, 0, cW, cH);
                animations.forEach(function(anim) {
                    anim.animatables.forEach(function(animatable) {
                        animatable.target.draw();
                    });
                });
            }
        });

        var resizeCanvas = function() {
            cW = window.innerWidth;
            cH = window.innerHeight;
            c.width = cW * devicePixelRatio;
            c.height = cH * devicePixelRatio;
            ctx.scale(devicePixelRatio, devicePixelRatio);
        };

        (function init() {
            resizeCanvas();
            if (window.CP) {
                // CodePen's loop detection was causin' problems
                // and I have no idea why, so...
                window.CP.PenTimer.MAX_TIME_IN_LOOP_WO_EXIT = 6000;
            }
            window.addEventListener(\"resize\", resizeCanvas);
            addClickListeners();
            if (!!window.location.pathname.match(/fullcpgrid/)) {
                startFauxClicking();
            }
            handleInactiveUser();
        })();

        function handleInactiveUser() {
            var inactive = setTimeout(function(){
                fauxClick(cW/2, cH/2);
            }, 2000);

            function clearInactiveTimeout() {
                clearTimeout(inactive);
                document.removeEventListener(\"mousedown\", clearInactiveTimeout);
                document.removeEventListener(\"touchstart\", clearInactiveTimeout);
            }

            document.addEventListener(\"mousedown\", clearInactiveTimeout);
            document.addEventListener(\"touchstart\", clearInactiveTimeout);
        }

        function startFauxClicking() {
            setTimeout(function(){
                fauxClick(anime.random( cW * .2, cW * .8), anime.random(cH * .2, cH * .8));
                startFauxClicking();
            }, anime.random(200, 900));
        }

        function fauxClick(x, y) {
            var fauxClick = new Event(\"mousedown\");
            fauxClick.pageX = x;
            fauxClick.pageY = y;
            document.dispatchEvent(fauxClick);
        }*/
    </script>
{% endblock %}
</body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\coursIPSSI\\symfony5mars\\templates\\base.html.twig");
    }
}
