<?php

/* @User/meParticipation.html.twig */
class __TwigTemplate_d33b363f731b952053ab81411e70591d230172a2f7e7eeff8021c0b467aca90d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::Template.html.twig", "@User/meParticipation.html.twig", 1);
        $this->blocks = array(
            'wrapper' => array($this, 'block_wrapper'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UserBundle::Template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7dc3435502b11e9e79072dcb15064c51c59ddc456f226d2824d27276a3fc8eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7dc3435502b11e9e79072dcb15064c51c59ddc456f226d2824d27276a3fc8eb->enter($__internal_c7dc3435502b11e9e79072dcb15064c51c59ddc456f226d2824d27276a3fc8eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/meParticipation.html.twig"));

        $__internal_609118398236d624ea88e9aeddb2a011c436f516dae0c238bbe86ba1f94f5c9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_609118398236d624ea88e9aeddb2a011c436f516dae0c238bbe86ba1f94f5c9a->enter($__internal_609118398236d624ea88e9aeddb2a011c436f516dae0c238bbe86ba1f94f5c9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/meParticipation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7dc3435502b11e9e79072dcb15064c51c59ddc456f226d2824d27276a3fc8eb->leave($__internal_c7dc3435502b11e9e79072dcb15064c51c59ddc456f226d2824d27276a3fc8eb_prof);

        
        $__internal_609118398236d624ea88e9aeddb2a011c436f516dae0c238bbe86ba1f94f5c9a->leave($__internal_609118398236d624ea88e9aeddb2a011c436f516dae0c238bbe86ba1f94f5c9a_prof);

    }

    // line 2
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_c3da36727822ea319315f7c1591d9dd713570e0f8e208452c7cc14dba8d8522b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3da36727822ea319315f7c1591d9dd713570e0f8e208452c7cc14dba8d8522b->enter($__internal_c3da36727822ea319315f7c1591d9dd713570e0f8e208452c7cc14dba8d8522b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_b3f60444524746eb385cde4d94034330c0ea72c8f4adc3032dcf8af49ae8643b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3f60444524746eb385cde4d94034330c0ea72c8f4adc3032dcf8af49ae8643b->enter($__internal_b3f60444524746eb385cde4d94034330c0ea72c8f4adc3032dcf8af49ae8643b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 3
        echo "


<div id=\"mapView\"><div class=\"mapPlaceholder\"><span class=\"fa fa-spin fa-spinner\"></span> Loading map...</div></div>
<div id=\"content\">

    <div class=\"resultsList\">
        <div class=\"row\">
            <h3>Results:</h3>
        </div>
        <div class=\"row\">
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list_rando"]) ? $context["list_rando"] : $this->getContext($context, "list_rando")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 15
            echo "            <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Rando_details", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\" class=\"card\">
                    <div class=\"figure\">
                        <img src=\"";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute($context["item"], "listImages", array()), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
                echo "../../Uploads/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["items"], "path", array()), "html", null, true);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['items'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\" alt=\"image\">
                        <div class=\"figCaption\">
                            <div>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "prix", array()), "html", null, true);
            echo "dt</div>
                            <span class=\"icon-bubble\">0</span>
                        </div>
                        <div class=\"figView\"><span class=\"icon-eye\"></span></div>
                        <div class=\"figType\">exclusive</div>
                    </div>
                    <h2>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "titre", array()), "html", null, true);
            echo "</h2>
                    <div class=\"cardAddress\"><span class=\"icon-pointer\"></span>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "idDestination", array()), "nom", array()), "html", null, true);
            echo "</div>
                    <div class=\"cardRating\">
                        <span class=\"fa fa-star\"></span>
                        <span class=\"fa fa-star\"></span>
                        <span class=\"fa fa-star\"></span>
                        <span class=\"fa fa-star\"></span>
                        <span class=\"fa fa-star-o\"></span>
                        (146)
                    </div>
                    <div class=\"clearfix\"></div>
                </a>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </div>
        <ul class=\"pagination\">
            <li class=\"disabled\"><a href=\"#\"><span class=\"fa fa-angle-left\"></span></a></li>
            <li class=\"active\"><a href=\"#\">1</a></li>
            <li><a href=\"#\">2</a></li>
            <li><a href=\"#\">3</a></li>
            <li><a href=\"#\">4</a></li>
            <li><a href=\"#\">5</a></li>
            <li><a href=\"#\"><span class=\"fa fa-angle-right\"></span></a></li>
        </ul>
    </div>
</div>
<div class=\"clearfix\"></div>
";
        
        $__internal_b3f60444524746eb385cde4d94034330c0ea72c8f4adc3032dcf8af49ae8643b->leave($__internal_b3f60444524746eb385cde4d94034330c0ea72c8f4adc3032dcf8af49ae8643b_prof);

        
        $__internal_c3da36727822ea319315f7c1591d9dd713570e0f8e208452c7cc14dba8d8522b->leave($__internal_c3da36727822ea319315f7c1591d9dd713570e0f8e208452c7cc14dba8d8522b_prof);

    }

    // line 55
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_43aaca4ec5a3c290463d4cb191ea7aded01ce64911a47423116c2199f7333b9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43aaca4ec5a3c290463d4cb191ea7aded01ce64911a47423116c2199f7333b9e->enter($__internal_43aaca4ec5a3c290463d4cb191ea7aded01ce64911a47423116c2199f7333b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_a9bafd0cafb91549770dd9b0d5c10ea3ab18f7843a19a58af6243220aadd038c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9bafd0cafb91549770dd9b0d5c10ea3ab18f7843a19a58af6243220aadd038c->enter($__internal_a9bafd0cafb91549770dd9b0d5c10ea3ab18f7843a19a58af6243220aadd038c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 56
        echo "<script>




    var themeColorPath = \$(\"#app\").attr(\"href\");
    var themeColorFile = themeColorPath.replace(\"css/app-\", \"\");
    var themeColor = themeColorFile.replace(\".css\", \"\");

    console.log(\"custom script started\")
    var map
    // Custom options for map
    var options = {
        zoom : 7,
        center:new google.maps.LatLng(35.975818,9.7004654),
        mapTypeId : 'Styled',
        disableDefaultUI: true,
        mapTypeControlOptions : {
            mapTypeIds : [ 'Styled' ]
        }
    };
    var styles = [
        {
            stylers : [ {
                hue : \"#cccccc\"
            }, {
                saturation : -100
            }]
        }, {
            featureType : \"road\",
            elementType : \"geometry\",
            stylers : [ {
                lightness : 100
            }, {
                visibility : \"simplified\"
            }]
        }, {
            featureType : \"road\",
            elementType : \"labels\",
            stylers : [ {
                visibility : \"on\"
            }]
        }, {
            featureType: \"poi\",
            stylers: [ {
                visibility: \"off\"
            }]
        }];
    var newMarker = null;
    var markers = [

        ];
    // json for properties markers on map
    var props = [

        ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list_rando"]) ? $context["list_rando"] : $this->getContext($context, "list_rando")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 112
            echo "        {
            id:'";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "',
            title : '";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "titre", array()), "html", null, true);
            echo "',
            image :";
            // line 115
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute($context["item"], "listImages", array()), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
                echo "'";
                echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Uploads/") . $this->getAttribute($context["items"], "path", array())), "html", null, true);
                echo "'";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['items'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ",
            type : 'For Rent',
            price : '";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "prix", array()), "html", null, true);
            echo "',
            address : '";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "idDestination", array()), "nom", array()), "html", null, true);
            echo "',
            bedrooms : '2',
            bathrooms : '2',
            area : '4430 Sq Ft',
            position : {
                lat : ";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "idDestination", array()), "idLocalisation", array()), "lattitude", array()), "html", null, true);
            echo "+Math.random()/100,
                lng : ";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "idDestination", array()), "idLocalisation", array()), "longitude", array()), "html", null, true);
            echo "+Math.random()/100
            },
            markerIcon : \"../../UserAssets/images/marker-green.png\"
        },
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "        ];
    // custom infowindow object
    var infobox = new InfoBox({
        disableAutoPan: false,
        maxWidth: 202,
        pixelOffset: new google.maps.Size(-101, -285),
        zIndex: null,
        boxStyle: {
            background: \"url('../../UserAssets/images/infobox-bg.png') no-repeat\",
            opacity: 1,
            width: \"202px\",
            height: \"245px\"
        },
        closeBoxMargin: \"28px 26px 0px 0px\",
        closeBoxURL: \"\",
        infoBoxClearance: new google.maps.Size(1, 1),
        pane: \"floatPane\",
        enableEventPropagation: false
    });
    // function that adds the markers on map
    var addMarkers = function(props, map) {
        console.log(\"creating markers\")
        \$.each(props, function(i,prop) {
            console.log(\"1\")
            var latlng = new google.maps.LatLng(prop.position.lat,prop.position.lng);
            var marker = new google.maps.Marker({
                position: latlng,
                map: map,
                icon: new google.maps.MarkerImage(
                    prop.markerIcon,
                    null,
                    null,
                    null,
                    new google.maps.Size(36, 36)
                ),
                draggable: false,
                animation: google.maps.Animation.DROP,
            });
            console.log(\"2\")
            var infoboxContent = '<div class=\"infoW\">' +
                '<div class=\"propImg\">' +
                '<img src=\"' + prop.image + '\">' +
                '<div class=\"propBg\">' +
                '<div class=\"propPrice\">' + prop.price + '</div>' +
                '<div class=\"propType\">' + prop.type + '</div>' +
                '</div>' +
                '</div>' +
                '<div class=\"paWrapper\">' +
                '<div class=\"propTitle\">' + prop.title + '</div>' +
                '<div class=\"propAddress\">' + prop.address + '</div>' +
                '</div>' +
                '<div class=\"propRating\">' +
                '<span class=\"fa fa-star\"></span>' +
                '<span class=\"fa fa-star\"></span>' +
                '<span class=\"fa fa-star\"></span>' +
                '<span class=\"fa fa-star\"></span>' +
                '<span class=\"fa fa-star-o\"></span>' +
                '</div>' +
                '<ul class=\"propFeat\">' +
                '<li><span class=\"fa fa-moon-o\"></span> ' + prop.bedrooms + '</li>' +
                '<li><span class=\"icon-drop\"></span> ' + prop.bathrooms + '</li>' +
                '<li><span class=\"icon-frame\"></span> ' + prop.area + '</li>' +
                '</ul>' +
                '<div class=\"clearfix\"></div>' +
                '<div class=\"infoButtons\">' +
                '<a class=\"btn btn-sm btn-round btn-gray btn-o closeInfo\">Close</a>' +
                '<a href=\"/rando/details/'+prop.id+'\" class=\"btn btn-sm btn-round btn-green viewInfo btn-' + themeColor + '\">View</a>' +
                '</div>' +
                '</div>';

            console.log(\"adding listener on marker\")
            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                console.log(\"listener on marker added\")
                return function() {
                    console.log(\"marker clicked :infobox is opening\")
                    infobox.setContent(infoboxContent);
                    infobox.open(map, marker);
                }
            })(marker, i));

            \$(document).on('click', '.closeInfo', function() {
                infobox.open(null,null);
            });

            markers.push(marker);
        });
    }
    setTimeout(function() {
        \$('body').removeClass('notransition');

        console.log(\"init map\")
        map = new google.maps.Map(document.getElementById('mapView'), options);
        var styledMapType = new google.maps.StyledMapType(styles, {
            name : 'Styled'
        });

        map.mapTypes.set('Styled', styledMapType);



        addMarkers(props, map);
    }, 300);
</script>
";
        
        $__internal_a9bafd0cafb91549770dd9b0d5c10ea3ab18f7843a19a58af6243220aadd038c->leave($__internal_a9bafd0cafb91549770dd9b0d5c10ea3ab18f7843a19a58af6243220aadd038c_prof);

        
        $__internal_43aaca4ec5a3c290463d4cb191ea7aded01ce64911a47423116c2199f7333b9e->leave($__internal_43aaca4ec5a3c290463d4cb191ea7aded01ce64911a47423116c2199f7333b9e_prof);

    }

    public function getTemplateName()
    {
        return "@User/meParticipation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 129,  254 => 124,  250 => 123,  242 => 118,  238 => 117,  224 => 115,  220 => 114,  216 => 113,  213 => 112,  209 => 111,  152 => 56,  143 => 55,  120 => 40,  101 => 27,  97 => 26,  88 => 20,  75 => 18,  70 => 16,  67 => 15,  63 => 14,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"UserBundle::Template.html.twig\" %}
{% block wrapper %}



<div id=\"mapView\"><div class=\"mapPlaceholder\"><span class=\"fa fa-spin fa-spinner\"></span> Loading map...</div></div>
<div id=\"content\">

    <div class=\"resultsList\">
        <div class=\"row\">
            <h3>Results:</h3>
        </div>
        <div class=\"row\">
            {% for item in list_rando %}
            <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                <a href=\"{{ path('Rando_details', {id:item.id }) }}\" class=\"card\">
                    <div class=\"figure\">
                        <img src=\"{% for items in item.listImages|slice(0,1) %}../../Uploads/{{  items.path }}{% endfor %}\" alt=\"image\">
                        <div class=\"figCaption\">
                            <div>{{ item.prix }}dt</div>
                            <span class=\"icon-bubble\">0</span>
                        </div>
                        <div class=\"figView\"><span class=\"icon-eye\"></span></div>
                        <div class=\"figType\">exclusive</div>
                    </div>
                    <h2>{{ item.titre }}</h2>
                    <div class=\"cardAddress\"><span class=\"icon-pointer\"></span>{{ item.idDestination.nom }}</div>
                    <div class=\"cardRating\">
                        <span class=\"fa fa-star\"></span>
                        <span class=\"fa fa-star\"></span>
                        <span class=\"fa fa-star\"></span>
                        <span class=\"fa fa-star\"></span>
                        <span class=\"fa fa-star-o\"></span>
                        (146)
                    </div>
                    <div class=\"clearfix\"></div>
                </a>
            </div>
            {% endfor %}
        </div>
        <ul class=\"pagination\">
            <li class=\"disabled\"><a href=\"#\"><span class=\"fa fa-angle-left\"></span></a></li>
            <li class=\"active\"><a href=\"#\">1</a></li>
            <li><a href=\"#\">2</a></li>
            <li><a href=\"#\">3</a></li>
            <li><a href=\"#\">4</a></li>
            <li><a href=\"#\">5</a></li>
            <li><a href=\"#\"><span class=\"fa fa-angle-right\"></span></a></li>
        </ul>
    </div>
</div>
<div class=\"clearfix\"></div>
{% endblock %}

{% block scripts %}
<script>




    var themeColorPath = \$(\"#app\").attr(\"href\");
    var themeColorFile = themeColorPath.replace(\"css/app-\", \"\");
    var themeColor = themeColorFile.replace(\".css\", \"\");

    console.log(\"custom script started\")
    var map
    // Custom options for map
    var options = {
        zoom : 7,
        center:new google.maps.LatLng(35.975818,9.7004654),
        mapTypeId : 'Styled',
        disableDefaultUI: true,
        mapTypeControlOptions : {
            mapTypeIds : [ 'Styled' ]
        }
    };
    var styles = [
        {
            stylers : [ {
                hue : \"#cccccc\"
            }, {
                saturation : -100
            }]
        }, {
            featureType : \"road\",
            elementType : \"geometry\",
            stylers : [ {
                lightness : 100
            }, {
                visibility : \"simplified\"
            }]
        }, {
            featureType : \"road\",
            elementType : \"labels\",
            stylers : [ {
                visibility : \"on\"
            }]
        }, {
            featureType: \"poi\",
            stylers: [ {
                visibility: \"off\"
            }]
        }];
    var newMarker = null;
    var markers = [

        ];
    // json for properties markers on map
    var props = [

        {% for item in list_rando %}
        {
            id:'{{ item.id }}',
            title : '{{ item.titre }}',
            image :{% for items in item.listImages|slice(0,1) %}'{{  asset('Uploads/') ~ items.path }}'{% endfor %},
            type : 'For Rent',
            price : '{{ item.prix }}',
            address : '{{ item.idDestination.nom }}',
            bedrooms : '2',
            bathrooms : '2',
            area : '4430 Sq Ft',
            position : {
                lat : {{ item.idDestination.idLocalisation.lattitude }}+Math.random()/100,
                lng : {{ item.idDestination.idLocalisation.longitude }}+Math.random()/100
            },
            markerIcon : \"../../UserAssets/images/marker-green.png\"
        },
        {% endfor %}
        ];
    // custom infowindow object
    var infobox = new InfoBox({
        disableAutoPan: false,
        maxWidth: 202,
        pixelOffset: new google.maps.Size(-101, -285),
        zIndex: null,
        boxStyle: {
            background: \"url('../../UserAssets/images/infobox-bg.png') no-repeat\",
            opacity: 1,
            width: \"202px\",
            height: \"245px\"
        },
        closeBoxMargin: \"28px 26px 0px 0px\",
        closeBoxURL: \"\",
        infoBoxClearance: new google.maps.Size(1, 1),
        pane: \"floatPane\",
        enableEventPropagation: false
    });
    // function that adds the markers on map
    var addMarkers = function(props, map) {
        console.log(\"creating markers\")
        \$.each(props, function(i,prop) {
            console.log(\"1\")
            var latlng = new google.maps.LatLng(prop.position.lat,prop.position.lng);
            var marker = new google.maps.Marker({
                position: latlng,
                map: map,
                icon: new google.maps.MarkerImage(
                    prop.markerIcon,
                    null,
                    null,
                    null,
                    new google.maps.Size(36, 36)
                ),
                draggable: false,
                animation: google.maps.Animation.DROP,
            });
            console.log(\"2\")
            var infoboxContent = '<div class=\"infoW\">' +
                '<div class=\"propImg\">' +
                '<img src=\"' + prop.image + '\">' +
                '<div class=\"propBg\">' +
                '<div class=\"propPrice\">' + prop.price + '</div>' +
                '<div class=\"propType\">' + prop.type + '</div>' +
                '</div>' +
                '</div>' +
                '<div class=\"paWrapper\">' +
                '<div class=\"propTitle\">' + prop.title + '</div>' +
                '<div class=\"propAddress\">' + prop.address + '</div>' +
                '</div>' +
                '<div class=\"propRating\">' +
                '<span class=\"fa fa-star\"></span>' +
                '<span class=\"fa fa-star\"></span>' +
                '<span class=\"fa fa-star\"></span>' +
                '<span class=\"fa fa-star\"></span>' +
                '<span class=\"fa fa-star-o\"></span>' +
                '</div>' +
                '<ul class=\"propFeat\">' +
                '<li><span class=\"fa fa-moon-o\"></span> ' + prop.bedrooms + '</li>' +
                '<li><span class=\"icon-drop\"></span> ' + prop.bathrooms + '</li>' +
                '<li><span class=\"icon-frame\"></span> ' + prop.area + '</li>' +
                '</ul>' +
                '<div class=\"clearfix\"></div>' +
                '<div class=\"infoButtons\">' +
                '<a class=\"btn btn-sm btn-round btn-gray btn-o closeInfo\">Close</a>' +
                '<a href=\"/rando/details/'+prop.id+'\" class=\"btn btn-sm btn-round btn-green viewInfo btn-' + themeColor + '\">View</a>' +
                '</div>' +
                '</div>';

            console.log(\"adding listener on marker\")
            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                console.log(\"listener on marker added\")
                return function() {
                    console.log(\"marker clicked :infobox is opening\")
                    infobox.setContent(infoboxContent);
                    infobox.open(map, marker);
                }
            })(marker, i));

            \$(document).on('click', '.closeInfo', function() {
                infobox.open(null,null);
            });

            markers.push(marker);
        });
    }
    setTimeout(function() {
        \$('body').removeClass('notransition');

        console.log(\"init map\")
        map = new google.maps.Map(document.getElementById('mapView'), options);
        var styledMapType = new google.maps.StyledMapType(styles, {
            name : 'Styled'
        });

        map.mapTypes.set('Styled', styledMapType);



        addMarkers(props, map);
    }, 300);
</script>
{% endblock %}
", "@User/meParticipation.html.twig", "C:\\Users\\SONIC\\Downloads\\PIDev\\PIDev-web\\atef\\untitled\\src\\MyApp\\UserBundle\\Resources\\views\\meParticipation.html.twig");
    }
}
