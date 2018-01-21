$(function() {
    var graphwidth = $('.widget_graph .inner').width();
    $('.widget_graph .graph').css('height', parseInt(graphwidth/1.7));
    $(window).resize(function() {
        graphwidth = $('.widget_graph .inner').width();
        $('.widget_graph .graph').css('height', parseInt(graphwidth/1.7));
    });

    var d1 = [[0, 9], [1, 23], [1.8, 7], [2.2, 24], [2.8, 18], [4, 36]];
    var graphholder = $("#graph");
    var plot = $.plot(graphholder, [d1], {
        colors: ["#c06030", "#afd8f8", "#cb4b4b", "#4da74d", "#9440ed"],
        xaxis: {
            min: null,
            max: null
        },
        yaxis: {
            autoscaleMargin: 0.02
        },
        series: {
            lines: {
                show: true,
                lineWidth: 5,
                fill: true,
                fillColor: "rgba(69,144,161,0.1)"
            },
            points: {
                show: true,
                radius: 5,
                lineWidth: 3,
                fillColor: "#f3d4a4"
            }
        },
        grid: {
            hoverable: true,
            clickable: true,
            margin: 12,
            color: "#79889a",
            borderColor: "#79889a"
        }
    });

    function showTooltip(x, y, contents) {
        $("<div id='graph-tooltip'>" + contents + "</div>").css({top: y - 40, left: x - 22}).appendTo("body").fadeIn(200);
    };

    var previousPoint = null;
    $("#graph").bind("plothover", function (event, pos, item) {

        if (item) {
            if (previousPoint != item.dataIndex) {

                previousPoint = item.dataIndex;

                $("#graph-tooltip").remove();
                var x = item.datapoint[0].toFixed(2),
                    y = item.datapoint[1].toFixed(2);

                showTooltip(item.pageX, item.pageY, '$' + y*100);
            }
        } else {
            $("#graph-tooltip").remove();
            previousPoint = null;
        }
    });
});

$(document).ready(function(){

    new jPlayerPlaylist({
        jPlayer: "#jquery_jplayer_1",
        cssSelectorAncestor: "#jp_container_1"
    }, [
        {
            title:"<img src='images/temp/music-player1.png' alt='' /><ul><li class='item-artist'><span>01.</span>Rudimental</li><li class='item-song'>Waiting All Night (feat. Ella Eyre)</li><li class='item-album'>Folllow Your Heart | 2013</li></ul>",
            mp3:"http://www.jplayer.org/audio/mp3/TSP-05-Your_face.mp3",
            oga:"http://www.jplayer.org/audio/ogg/TSP-05-Your_face.ogg"
        },
        {
            title:"<img src='images/temp/music-player2.png' alt='' /><ul><li class='item-artist'><span>02.</span>Daft Punk</li><li class='item-song'>Get Lucky (ft. Pharell Williams)</li><li class='item-album'>Tron Legacy | 2013</li></ul>",
            mp3:"http://www.jplayer.org/audio/mp3/TSP-07-Cybersonnet.mp3",
            oga:"http://www.jplayer.org/audio/ogg/TSP-07-Cybersonnet.ogg"
        },
        {
            title:"<img src='images/temp/music-player3.png' alt='' /><ul><li class='item-artist'><span>03.</span>Justin Timberlake</li><li class='item-song'>Mirrors</li><li class='item-album'>20/20 Experience | 2013</li></ul>",
            mp3:"http://www.jplayer.org/audio/mp3/Miaow-07-Bubble.mp3",
            oga:"http://www.jplayer.org/audio/ogg/Miaow-07-Bubble.ogg"
        }
    ], {
        swfPath: "js",
        supplied: "oga, mp3",
        wmode: "window",
        smoothPlayBar: false,
        keyEnabled: false
    });
});

jQuery(function()
{
    jQuery('.scrollbar').jScrollPane({
        verticalDragMaxHeight: 39,
        verticalDragMinHeight: 39
    });

    jQuery('.scrollbar.style2').jScrollPane({
        verticalDragMaxHeight: 36,
        verticalDragMinHeight: 36
    });
});
jQuery(document).ready(function() {
    jQuery('#contact_name').chosen({ width: "100%" });

});




