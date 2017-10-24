<?php

/* @Admin/template.html.twig */
class __TwigTemplate_1ddadd38cf6192dcb9d71f0a2eaba047d6ad9571db70206f06e034a0bca01adb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'wrapper' => array($this, 'block_wrapper'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_580eb8723fe522226d191d9b8e15e200d89741003a945f77daef1ee87951bc2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_580eb8723fe522226d191d9b8e15e200d89741003a945f77daef1ee87951bc2b->enter($__internal_580eb8723fe522226d191d9b8e15e200d89741003a945f77daef1ee87951bc2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/template.html.twig"));

        $__internal_c8cf96975ee5e7a1eacdec8cb7241b78d8667ff26fd43fed8a6fd399cd5290cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8cf96975ee5e7a1eacdec8cb7241b78d8667ff26fd43fed8a6fd399cd5290cc->enter($__internal_c8cf96975ee5e7a1eacdec8cb7241b78d8667ff26fd43fed8a6fd399cd5290cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/template.html.twig"));

        // line 1
        echo "<html lang=\"en\" class=\"no-js\">
<!--<![endif]-->


<!-- Mirrored from demo.thedevelovers.com/dashboard/kingadmin-v1.6.1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Mar 2017 14:25:35 GMT -->
<head>
    <title>Dashboard | KingAdmin - Admin Dashboard</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"description\" content=\"KingAdmin - Bootstrap Admin Dashboard Theme\">
    <meta name=\"author\" content=\"The Develovers\">
    <!-- CSS -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminAssets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminAssets/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminAssets/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminAssets/css/my-custom-styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <!--[if lte IE 9]>
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminAssets/css/main-ie.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminAssets/css/main-ie-part2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <![endif]-->
    <!-- Fav and touch icons -->
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminAssets/ico/kingadmin-favicon144x144.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminAssets/ico/kingadmin-favicon114x114.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminAssets/ico/kingadmin-favicon72x72.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"57x57\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminAssets/ico/kingadmin-favicon57x57.png"), "html", null, true);
        echo "\">
    <link rel=\"shortcut icon\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminAssets/ico/favicon.png"), "html", null, true);
        echo "\">
</head>

<body class=\"sidebar-fixed topnav-fixed dashboard\">

<!-- WRAPPER -->
<div id=\"wrapper\" class=\"wrapper\">
    <!-- TOP BAR -->
    <div class=\"top-bar navbar-fixed-top\">
        <div class=\"container\">
            <div class=\"clearfix\">
                <a href=\"#\" class=\"pull-left toggle-sidebar-collapse\"><i class=\"fa fa-bars\"></i></a>
                <!-- logo -->
                <div class=\"pull-left left logo\">
                    <a href=\"index-2.html\"><img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminAssets/img/kingadmin-logo-white.png"), "html", null, true);
        echo "\" alt=\"KingAdmin - Admin Dashboard\" /></a>
                    <h1 class=\"sr-only\">KingAdmin Admin Dashboard</h1>
                </div>
                <!-- end logo -->
                <div class=\"pull-right right\">
                    <!-- top-bar-right -->
                    <div class=\"top-bar-right\">
                        <button type=\"button\" id=\"global-volume\" class=\"btn btn-link btn-global-volume\"><i class=\"fa\"></i></button>
                        <div class=\"notifications\">
                            <ul>
                                <!-- notification: inbox -->
                                <li class=\"notification-item inbox\">
                                    <div class=\"btn-group\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                            <i class=\"fa fa-envelope\"></i><span class=\"count\">2</span>
                                            <span class=\"circle\"></span>
                                        </a>
                                        <ul class=\"dropdown-menu\" role=\"menu\">
                                            <li class=\"notification-header\">
                                                <em>You have 2 unread messages</em>
                                            </li>
                                            <li class=\"inbox-item clearfix\">
                                                <a href=\"#\">
                                                    <div class=\"media\">
                                                        <div class=\"media-left\">
                                                            <img class=\"media-object\" src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminAssets/img/user1.png"), "html", null, true);
        echo "\" alt=\"Antonio\">
                                                        </div>
                                                        <div class=\"media-body\">
                                                            <h5 class=\"media-heading name\">Antonius</h5>
                                                            <p class=\"text\">The problem just happened this morning. I can't see ...</p>
                                                            <span class=\"timestamp\">4 minutes ago</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class=\"inbox-item unread clearfix\">
                                                <a href=\"#\">
                                                    <div class=\"media\">
                                                        <div class=\"media-left\">
                                                            <img class=\"media-object\" src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminAssets/img/user2.png"), "html", null, true);
        echo "\" alt=\"Antonio\">
                                                        </div>
                                                        <div class=\"media-body\">
                                                            <h5 class=\"media-heading name\">Michael</h5>
                                                            <p class=\"text\">Hey dude, cool theme!</p>
                                                            <span class=\"timestamp\">2 hours ago</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class=\"inbox-item unread clearfix\">
                                                <a href=\"#\">
                                                    <div class=\"media\">
                                                        <div class=\"media-left\">
                                                            <img class=\"media-object\" src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminAssets/img/user3.png"), "html", null, true);
        echo "\" alt=\"Antonio\">
                                                        </div>
                                                        <div class=\"media-body\">
                                                            <h5 class=\"media-heading name\">Stella</h5>
                                                            <p class=\"text\">Ok now I can see the status for each item. Thanks! :D</p>
                                                            <span class=\"timestamp\">Oct 6</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class=\"inbox-item clearfix\">
                                                <a href=\"#\">
                                                    <div class=\"media\">
                                                        <div class=\"media-left\">
                                                            <img class=\"media-object\" src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminAssets/img/user4.png"), "html", null, true);
        echo "\" alt=\"Antonio\">
                                                        </div>
                                                        <div class=\"media-body\">
                                                            <h5 class=\"media-heading name\">Jane Doe</h5>
                                                            <p class=\"text\"><i class=\"fa fa-reply\"></i> Please check the status of your ...</p>
                                                            <span class=\"timestamp\">Oct 2</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class=\"inbox-item clearfix\">
                                                <a href=\"#\">
                                                    <div class=\"media\">
                                                        <div class=\"media-left\">
                                                            <img class=\"media-object\" src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminAssets/img/user5.png"), "html", null, true);
        echo "\" alt=\"Antonio\">
                                                        </div>
                                                        <div class=\"media-body\">
                                                            <h5 class=\"media-heading name\">John Simmons</h5>
                                                            <p class=\"text\"><i class=\"fa fa-reply\"></i> I've fixed the problem :)</p>
                                                            <span class=\"timestamp\">Sep 12</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class=\"notification-footer\">
                                                <a href=\"#\">View All Messages</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <!-- end notification: inbox -->
                                <!-- notification: general -->
                                <li class=\"notification-item general\">
                                    <div class=\"btn-group\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                            <i class=\"fa fa-bell\"></i><span class=\"count\">8</span>
                                            <span class=\"circle\"></span>
                                        </a>
                                        <ul class=\"dropdown-menu\" role=\"menu\">
                                            <li class=\"notification-header\">
                                                <em>You have 8 notifications</em>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <i class=\"fa fa-comment green-font\"></i>
                                                    <span class=\"text\">New comment on the blog post</span>
                                                    <span class=\"timestamp\">1 minute ago</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <i class=\"fa fa-user green-font\"></i>
                                                    <span class=\"text\">New registered user</span>
                                                    <span class=\"timestamp\">12 minutes ago</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <i class=\"fa fa-comment green-font\"></i>
                                                    <span class=\"text\">New comment on the blog post</span>
                                                    <span class=\"timestamp\">18 minutes ago</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <i class=\"fa fa-shopping-cart red-font\"></i>
                                                    <span class=\"text\">4 new sales order</span>
                                                    <span class=\"timestamp\">4 hours ago</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <i class=\"fa fa-edit yellow-font\"></i>
                                                    <span class=\"text\">3 product reviews awaiting moderation</span>
                                                    <span class=\"timestamp\">1 day ago</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <i class=\"fa fa-comment green-font\"></i>
                                                    <span class=\"text\">New comment on the blog post</span>
                                                    <span class=\"timestamp\">3 days ago</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <i class=\"fa fa-comment green-font\"></i>
                                                    <span class=\"text\">New comment on the blog post</span>
                                                    <span class=\"timestamp\">Oct 15</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <i class=\"fa fa-warning red-font\"></i>
                                                    <span class=\"text red-font\">Low disk space!</span>
                                                    <span class=\"timestamp\">Oct 11</span>
                                                </a>
                                            </li>
                                            <li class=\"notification-footer\">
                                                <a href=\"#\">View All Notifications</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <!-- end notification: general -->
                            </ul>
                        </div>
                        <!-- logged user and the menu -->
                        <div class=\"logged-user\">
                            <div class=\"btn-group\">
                                <a href=\"#\" class=\"btn btn-link dropdown-toggle\" data-toggle=\"dropdown\">
                                    <img src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminAssets/img/user-avatar.png"), "html", null, true);
        echo "\" alt=\"User Avatar\" />
                                    <span class=\"name\">";
        // line 220
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</span> <span class=\"caret\"></span>
                                </a>
                                <ul class=\"dropdown-menu\" role=\"menu\">
                                    <li>
                                        <a href=\"";
        // line 224
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_profile");
        echo "\">
                                            <i class=\"fa fa-user\"></i>
                                            <span class=\"text\">Profile</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href=\"";
        // line 231
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">
                                            <i class=\"fa fa-power-off\"></i>
                                            <span class=\"text\">Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- end logged user and the menu -->
                    </div>
                    <!-- end top-bar-right -->
                </div>
            </div>
        </div>
        <!-- /container -->
    </div>
    <!-- END TOP BAR -->
    <!-- LEFT SIDEBAR -->
    <div id=\"left-sidebar\" class=\"left-sidebar \">
        <!-- main-nav -->
        <div class=\"sidebar-scroll\">
            <nav class=\"main-nav\">
                <ul class=\"main-menu\">
                    <li><a href=\"#\" class=\"js-sub-menu-toggle\"><i class=\"fa fa-clipboard fa-fw\"></i><span class=\"text\">users</span>
                            <i class=\"toggle-icon fa fa-angle-left\"></i></a>
                        <ul class=\"sub-menu \">
                            <li><a href=\"";
        // line 257
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_list_users");
        echo "\"><span class=\"text\">Simple Utilisateurs</span></a></li>
                            <li><a href=\"";
        // line 258
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_list_users");
        echo "\"><span class=\"text\">Guide</span></a></li>
                        </ul>
                    </li>

                    <li><a href=\"#\" class=\"js-sub-menu-toggle\"><i class=\"fa fa-clipboard fa-fw\"></i><span class=\"text\">Randonnees</span>
                            <i class=\"toggle-icon fa fa-angle-left\"></i></a>
                        <ul class=\"sub-menu \">
                            <li><a href=\"";
        // line 265
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_type_rando");
        echo "\"><span class=\"text\">Type Randonnee</span></a></li>
                        </ul>
                    </li>

                    <li><a href=\"#\" class=\"js-sub-menu-toggle\"><i class=\"fa fa-clipboard fa-fw\"></i><span class=\"text\">Boutique</span>
                            <i class=\"toggle-icon fa fa-angle-left\"></i></a>
                        <ul class=\"sub-menu \">
                            <li><a href=\"#\"><span class=\"text\">Ajouter un produit</span></a></li>
                            <li><a href=\"#\"><span class=\"text\">lister les Produit</span></a></li>
                        </ul>
                    </li>

                    <li><a href=\"#\" class=\"js-sub-menu-toggle\"><i class=\"fa fa-clipboard fa-fw\"></i><span class=\"text\">Statistique</span>
                            <i class=\"toggle-icon fa fa-angle-left\"></i></a>
                        <ul class=\"sub-menu \">
                            <li><a href=\"#\"><span class=\"text\">statistique boutique</span></a></li>
                            <li><a href=\"#\"><span class=\"text\">statistique randonnee</span></a></li>
                        </ul>
                    </li>
                    <li><a href=\"#\" class=\"js-sub-menu-toggle\"><i class=\"fa fa-clipboard fa-fw\"></i><span class=\"text\">Reclamation</span>
                            <i class=\"toggle-icon fa fa-angle-left\"></i></a>
                        <ul class=\"sub-menu \">
                            <li><a href=\"";
        // line 287
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_recalam");
        echo "\"><span class=\"text\">liste des reclamation</span></a></li>

                        </ul>
                    </li>

                </ul>
            </nav>
            <!-- /main-nav -->
        </div>
    </div>
    <!-- END LEFT SIDEBAR -->
    <!-- MAIN CONTENT WRAPPER -->
    <div id=\"main-content-wrapper\" class=\"content-wrapper \">


        ";
        // line 302
        $this->displayBlock('wrapper', $context, $blocks);
        // line 304
        echo "

    </div>

</div>






<!-- Javascript -->
<script src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminAssets/js/jquery/jquery-2.1.0.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminAssets/js/bootstrap/bootstrap.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminAssets/js/plugins/modernizr/modernizr.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminAssets/js/plugins/bootstrap-tour/bootstrap-tour.custom.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminAssets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminAssets/js/king-common.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminAssets/demo-style-switcher/assets/js/deliswitch.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminAssets/js/plugins/stat/jquery.easypiechart.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminAssets/js/plugins/raphael/raphael-2.1.0.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminAssets/js/plugins/stat/flot/jquery.flot.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminAssets/js/plugins/stat/flot/jquery.flot.resize.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminAssets/js/plugins/stat/flot/jquery.flot.time.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminAssets/js/plugins/stat/flot/jquery.flot.pie.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminAssets/js/plugins/stat/flot/jquery.flot.tooltip.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminAssets/js/plugins/jquery-sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminAssets/js/plugins/datatable/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminAssets/js/plugins/datatable/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminAssets/js/plugins/jquery-mapael/jquery.mapael.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminAssets/js/plugins/raphael/maps/usa_states.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminAssets/js/king-chart-stat.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminAssets/js/king-table.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminAssets/js/king-components.js"), "html", null, true);
        echo "\"></script>
</body>


<!-- Mirrored from demo.thedevelovers.com/dashboard/kingadmin-v1.6.1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Mar 2017 14:25:35 GMT -->
</html>";
        
        $__internal_580eb8723fe522226d191d9b8e15e200d89741003a945f77daef1ee87951bc2b->leave($__internal_580eb8723fe522226d191d9b8e15e200d89741003a945f77daef1ee87951bc2b_prof);

        
        $__internal_c8cf96975ee5e7a1eacdec8cb7241b78d8667ff26fd43fed8a6fd399cd5290cc->leave($__internal_c8cf96975ee5e7a1eacdec8cb7241b78d8667ff26fd43fed8a6fd399cd5290cc_prof);

    }

    // line 302
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_818d3da8ab5cccfefd2056b90928c1e5210d1de4e618e8eb721b496b18bc00be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_818d3da8ab5cccfefd2056b90928c1e5210d1de4e618e8eb721b496b18bc00be->enter($__internal_818d3da8ab5cccfefd2056b90928c1e5210d1de4e618e8eb721b496b18bc00be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_a637b384c1a9a3c4356ae2968cba720b62a10b95adf3d10f2b9d4e092b704e9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a637b384c1a9a3c4356ae2968cba720b62a10b95adf3d10f2b9d4e092b704e9c->enter($__internal_a637b384c1a9a3c4356ae2968cba720b62a10b95adf3d10f2b9d4e092b704e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 303
        echo "        ";
        
        $__internal_a637b384c1a9a3c4356ae2968cba720b62a10b95adf3d10f2b9d4e092b704e9c->leave($__internal_a637b384c1a9a3c4356ae2968cba720b62a10b95adf3d10f2b9d4e092b704e9c_prof);

        
        $__internal_818d3da8ab5cccfefd2056b90928c1e5210d1de4e618e8eb721b496b18bc00be->leave($__internal_818d3da8ab5cccfefd2056b90928c1e5210d1de4e618e8eb721b496b18bc00be_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  529 => 303,  520 => 302,  504 => 337,  500 => 336,  496 => 335,  492 => 334,  488 => 333,  484 => 332,  480 => 331,  476 => 330,  472 => 329,  468 => 328,  464 => 327,  460 => 326,  456 => 325,  452 => 324,  448 => 323,  444 => 322,  440 => 321,  436 => 320,  432 => 319,  428 => 318,  424 => 317,  420 => 316,  406 => 304,  404 => 302,  386 => 287,  361 => 265,  351 => 258,  347 => 257,  318 => 231,  308 => 224,  301 => 220,  297 => 219,  197 => 122,  180 => 108,  163 => 94,  146 => 80,  129 => 66,  101 => 41,  84 => 27,  80 => 26,  76 => 25,  72 => 24,  68 => 23,  62 => 20,  58 => 19,  53 => 17,  49 => 16,  45 => 15,  41 => 14,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html lang=\"en\" class=\"no-js\">
<!--<![endif]-->


<!-- Mirrored from demo.thedevelovers.com/dashboard/kingadmin-v1.6.1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Mar 2017 14:25:35 GMT -->
<head>
    <title>Dashboard | KingAdmin - Admin Dashboard</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"description\" content=\"KingAdmin - Bootstrap Admin Dashboard Theme\">
    <meta name=\"author\" content=\"The Develovers\">
    <!-- CSS -->
    <link href=\"{{asset('AdminAssets/css/bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{asset('AdminAssets/css/font-awesome.min.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{asset('AdminAssets/css/main.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{asset('AdminAssets/css/my-custom-styles.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    <!--[if lte IE 9]>
    <link href=\"{{asset('AdminAssets/css/main-ie.css')}}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{asset('AdminAssets/css/main-ie-part2.css')}}\" rel=\"stylesheet\" type=\"text/css\"/>
    <![endif]-->
    <!-- Fav and touch icons -->
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"{{asset('AdminAssets/ico/kingadmin-favicon144x144.png')}}\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"{{asset('AdminAssets/ico/kingadmin-favicon114x114.png')}}\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"{{asset('AdminAssets/ico/kingadmin-favicon72x72.png')}}\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"57x57\" href=\"{{asset('AdminAssets/ico/kingadmin-favicon57x57.png')}}\">
    <link rel=\"shortcut icon\" href=\"{{asset('AdminAssets/ico/favicon.png')}}\">
</head>

<body class=\"sidebar-fixed topnav-fixed dashboard\">

<!-- WRAPPER -->
<div id=\"wrapper\" class=\"wrapper\">
    <!-- TOP BAR -->
    <div class=\"top-bar navbar-fixed-top\">
        <div class=\"container\">
            <div class=\"clearfix\">
                <a href=\"#\" class=\"pull-left toggle-sidebar-collapse\"><i class=\"fa fa-bars\"></i></a>
                <!-- logo -->
                <div class=\"pull-left left logo\">
                    <a href=\"index-2.html\"><img src=\"{{asset('AdminAssets/img/kingadmin-logo-white.png')}}\" alt=\"KingAdmin - Admin Dashboard\" /></a>
                    <h1 class=\"sr-only\">KingAdmin Admin Dashboard</h1>
                </div>
                <!-- end logo -->
                <div class=\"pull-right right\">
                    <!-- top-bar-right -->
                    <div class=\"top-bar-right\">
                        <button type=\"button\" id=\"global-volume\" class=\"btn btn-link btn-global-volume\"><i class=\"fa\"></i></button>
                        <div class=\"notifications\">
                            <ul>
                                <!-- notification: inbox -->
                                <li class=\"notification-item inbox\">
                                    <div class=\"btn-group\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                            <i class=\"fa fa-envelope\"></i><span class=\"count\">2</span>
                                            <span class=\"circle\"></span>
                                        </a>
                                        <ul class=\"dropdown-menu\" role=\"menu\">
                                            <li class=\"notification-header\">
                                                <em>You have 2 unread messages</em>
                                            </li>
                                            <li class=\"inbox-item clearfix\">
                                                <a href=\"#\">
                                                    <div class=\"media\">
                                                        <div class=\"media-left\">
                                                            <img class=\"media-object\" src=\"{{asset('AdminAssets/img/user1.png')}}\" alt=\"Antonio\">
                                                        </div>
                                                        <div class=\"media-body\">
                                                            <h5 class=\"media-heading name\">Antonius</h5>
                                                            <p class=\"text\">The problem just happened this morning. I can't see ...</p>
                                                            <span class=\"timestamp\">4 minutes ago</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class=\"inbox-item unread clearfix\">
                                                <a href=\"#\">
                                                    <div class=\"media\">
                                                        <div class=\"media-left\">
                                                            <img class=\"media-object\" src=\"{{asset('AdminAssets/img/user2.png')}}\" alt=\"Antonio\">
                                                        </div>
                                                        <div class=\"media-body\">
                                                            <h5 class=\"media-heading name\">Michael</h5>
                                                            <p class=\"text\">Hey dude, cool theme!</p>
                                                            <span class=\"timestamp\">2 hours ago</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class=\"inbox-item unread clearfix\">
                                                <a href=\"#\">
                                                    <div class=\"media\">
                                                        <div class=\"media-left\">
                                                            <img class=\"media-object\" src=\"{{asset('AdminAssets/img/user3.png')}}\" alt=\"Antonio\">
                                                        </div>
                                                        <div class=\"media-body\">
                                                            <h5 class=\"media-heading name\">Stella</h5>
                                                            <p class=\"text\">Ok now I can see the status for each item. Thanks! :D</p>
                                                            <span class=\"timestamp\">Oct 6</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class=\"inbox-item clearfix\">
                                                <a href=\"#\">
                                                    <div class=\"media\">
                                                        <div class=\"media-left\">
                                                            <img class=\"media-object\" src=\"{{asset('AdminAssets/img/user4.png')}}\" alt=\"Antonio\">
                                                        </div>
                                                        <div class=\"media-body\">
                                                            <h5 class=\"media-heading name\">Jane Doe</h5>
                                                            <p class=\"text\"><i class=\"fa fa-reply\"></i> Please check the status of your ...</p>
                                                            <span class=\"timestamp\">Oct 2</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class=\"inbox-item clearfix\">
                                                <a href=\"#\">
                                                    <div class=\"media\">
                                                        <div class=\"media-left\">
                                                            <img class=\"media-object\" src=\"{{asset('AdminAssets/img/user5.png')}}\" alt=\"Antonio\">
                                                        </div>
                                                        <div class=\"media-body\">
                                                            <h5 class=\"media-heading name\">John Simmons</h5>
                                                            <p class=\"text\"><i class=\"fa fa-reply\"></i> I've fixed the problem :)</p>
                                                            <span class=\"timestamp\">Sep 12</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class=\"notification-footer\">
                                                <a href=\"#\">View All Messages</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <!-- end notification: inbox -->
                                <!-- notification: general -->
                                <li class=\"notification-item general\">
                                    <div class=\"btn-group\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                            <i class=\"fa fa-bell\"></i><span class=\"count\">8</span>
                                            <span class=\"circle\"></span>
                                        </a>
                                        <ul class=\"dropdown-menu\" role=\"menu\">
                                            <li class=\"notification-header\">
                                                <em>You have 8 notifications</em>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <i class=\"fa fa-comment green-font\"></i>
                                                    <span class=\"text\">New comment on the blog post</span>
                                                    <span class=\"timestamp\">1 minute ago</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <i class=\"fa fa-user green-font\"></i>
                                                    <span class=\"text\">New registered user</span>
                                                    <span class=\"timestamp\">12 minutes ago</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <i class=\"fa fa-comment green-font\"></i>
                                                    <span class=\"text\">New comment on the blog post</span>
                                                    <span class=\"timestamp\">18 minutes ago</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <i class=\"fa fa-shopping-cart red-font\"></i>
                                                    <span class=\"text\">4 new sales order</span>
                                                    <span class=\"timestamp\">4 hours ago</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <i class=\"fa fa-edit yellow-font\"></i>
                                                    <span class=\"text\">3 product reviews awaiting moderation</span>
                                                    <span class=\"timestamp\">1 day ago</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <i class=\"fa fa-comment green-font\"></i>
                                                    <span class=\"text\">New comment on the blog post</span>
                                                    <span class=\"timestamp\">3 days ago</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <i class=\"fa fa-comment green-font\"></i>
                                                    <span class=\"text\">New comment on the blog post</span>
                                                    <span class=\"timestamp\">Oct 15</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <i class=\"fa fa-warning red-font\"></i>
                                                    <span class=\"text red-font\">Low disk space!</span>
                                                    <span class=\"timestamp\">Oct 11</span>
                                                </a>
                                            </li>
                                            <li class=\"notification-footer\">
                                                <a href=\"#\">View All Notifications</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <!-- end notification: general -->
                            </ul>
                        </div>
                        <!-- logged user and the menu -->
                        <div class=\"logged-user\">
                            <div class=\"btn-group\">
                                <a href=\"#\" class=\"btn btn-link dropdown-toggle\" data-toggle=\"dropdown\">
                                    <img src=\"{{asset('AdminAssets/img/user-avatar.png')}}\" alt=\"User Avatar\" />
                                    <span class=\"name\">{{ app.user.username }}</span> <span class=\"caret\"></span>
                                </a>
                                <ul class=\"dropdown-menu\" role=\"menu\">
                                    <li>
                                        <a href=\"{{ path(\"admin_profile\") }}\">
                                            <i class=\"fa fa-user\"></i>
                                            <span class=\"text\">Profile</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href=\"{{ path('fos_user_security_logout') }}\">
                                            <i class=\"fa fa-power-off\"></i>
                                            <span class=\"text\">Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- end logged user and the menu -->
                    </div>
                    <!-- end top-bar-right -->
                </div>
            </div>
        </div>
        <!-- /container -->
    </div>
    <!-- END TOP BAR -->
    <!-- LEFT SIDEBAR -->
    <div id=\"left-sidebar\" class=\"left-sidebar \">
        <!-- main-nav -->
        <div class=\"sidebar-scroll\">
            <nav class=\"main-nav\">
                <ul class=\"main-menu\">
                    <li><a href=\"#\" class=\"js-sub-menu-toggle\"><i class=\"fa fa-clipboard fa-fw\"></i><span class=\"text\">users</span>
                            <i class=\"toggle-icon fa fa-angle-left\"></i></a>
                        <ul class=\"sub-menu \">
                            <li><a href=\"{{ path(\"admin_list_users\") }}\"><span class=\"text\">Simple Utilisateurs</span></a></li>
                            <li><a href=\"{{ path(\"admin_list_users\") }}\"><span class=\"text\">Guide</span></a></li>
                        </ul>
                    </li>

                    <li><a href=\"#\" class=\"js-sub-menu-toggle\"><i class=\"fa fa-clipboard fa-fw\"></i><span class=\"text\">Randonnees</span>
                            <i class=\"toggle-icon fa fa-angle-left\"></i></a>
                        <ul class=\"sub-menu \">
                            <li><a href=\"{{ path('admin_type_rando') }}\"><span class=\"text\">Type Randonnee</span></a></li>
                        </ul>
                    </li>

                    <li><a href=\"#\" class=\"js-sub-menu-toggle\"><i class=\"fa fa-clipboard fa-fw\"></i><span class=\"text\">Boutique</span>
                            <i class=\"toggle-icon fa fa-angle-left\"></i></a>
                        <ul class=\"sub-menu \">
                            <li><a href=\"#\"><span class=\"text\">Ajouter un produit</span></a></li>
                            <li><a href=\"#\"><span class=\"text\">lister les Produit</span></a></li>
                        </ul>
                    </li>

                    <li><a href=\"#\" class=\"js-sub-menu-toggle\"><i class=\"fa fa-clipboard fa-fw\"></i><span class=\"text\">Statistique</span>
                            <i class=\"toggle-icon fa fa-angle-left\"></i></a>
                        <ul class=\"sub-menu \">
                            <li><a href=\"#\"><span class=\"text\">statistique boutique</span></a></li>
                            <li><a href=\"#\"><span class=\"text\">statistique randonnee</span></a></li>
                        </ul>
                    </li>
                    <li><a href=\"#\" class=\"js-sub-menu-toggle\"><i class=\"fa fa-clipboard fa-fw\"></i><span class=\"text\">Reclamation</span>
                            <i class=\"toggle-icon fa fa-angle-left\"></i></a>
                        <ul class=\"sub-menu \">
                            <li><a href=\"{{ path('admin_recalam') }}\"><span class=\"text\">liste des reclamation</span></a></li>

                        </ul>
                    </li>

                </ul>
            </nav>
            <!-- /main-nav -->
        </div>
    </div>
    <!-- END LEFT SIDEBAR -->
    <!-- MAIN CONTENT WRAPPER -->
    <div id=\"main-content-wrapper\" class=\"content-wrapper \">


        {% block wrapper %}
        {% endblock %}


    </div>

</div>






<!-- Javascript -->
<script src=\"{{asset('AdminAssets/js/jquery/jquery-2.1.0.min.js')}}\"></script>
<script src=\"{{asset('AdminAssets/js/bootstrap/bootstrap.js')}}\"></script>
<script src=\"{{asset('AdminAssets/js/plugins/modernizr/modernizr.js')}}\"></script>
<script src=\"{{asset('AdminAssets/js/plugins/bootstrap-tour/bootstrap-tour.custom.js')}}\"></script>
<script src=\"{{asset('AdminAssets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}\"></script>
<script src=\"{{asset('AdminAssets/js/king-common.js')}}\"></script>
<script src=\"{{asset('AdminAssets/demo-style-switcher/assets/js/deliswitch.js')}}\"></script>
<script src=\"{{asset('AdminAssets/js/plugins/stat/jquery.easypiechart.min.js')}}\"></script>
<script src=\"{{asset('AdminAssets/js/plugins/raphael/raphael-2.1.0.min.js')}}\"></script>
<script src=\"{{asset('AdminAssets/js/plugins/stat/flot/jquery.flot.min.js')}}\"></script>
<script src=\"{{asset('AdminAssets/js/plugins/stat/flot/jquery.flot.resize.min.js')}}\"></script>
<script src=\"{{asset('AdminAssets/js/plugins/stat/flot/jquery.flot.time.min.js')}}\"></script>
<script src=\"{{asset('AdminAssets/js/plugins/stat/flot/jquery.flot.pie.min.js')}}\"></script>
<script src=\"{{asset('AdminAssets/js/plugins/stat/flot/jquery.flot.tooltip.min.js')}}\"></script>
<script src=\"{{asset('AdminAssets/js/plugins/jquery-sparkline/jquery.sparkline.min.js')}}\"></script>
<script src=\"{{asset('AdminAssets/js/plugins/datatable/jquery.dataTables.min.js')}}\"></script>
<script src=\"{{asset('AdminAssets/js/plugins/datatable/dataTables.bootstrap.js')}}\"></script>
<script src=\"{{asset('AdminAssets/js/plugins/jquery-mapael/jquery.mapael.js')}}\"></script>
<script src=\"{{asset('AdminAssets/js/plugins/raphael/maps/usa_states.js')}}\"></script>
<script src=\"{{asset('AdminAssets/js/king-chart-stat.js')}}\"></script>
<script src=\"{{asset('AdminAssets/js/king-table.js')}}\"></script>
<script src=\"{{asset('AdminAssets/js/king-components.js')}}\"></script>
</body>


<!-- Mirrored from demo.thedevelovers.com/dashboard/kingadmin-v1.6.1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Mar 2017 14:25:35 GMT -->
</html>", "@Admin/template.html.twig", "C:\\Users\\SONIC\\Downloads\\PIDev\\PIDev-web\\atef\\untitled\\src\\MyApp\\AdminBundle\\Resources\\views\\template.html.twig");
    }
}
