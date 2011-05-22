$(function() {
    $('#map_canvas').gmap({
        'callback': function(map) {
            $('#map_canvas').gmap('loadMetadata', 'microformat', 'vevent', function(index, item, data) {
                var clone = $(item).clone().addClass('ui-dialog-vevent').append('<div id="streetview{0}" class="streetview"></div>'.replace('{0}', index));
                $('#map_canvas').gmap('addMarker', {
                    'bounds':true,
                    'position': new google.maps.LatLng(data.latitude.title, data.longitude.title),
                    'title': data.summary.text,
                    'icon':new google.maps.MarkerImage('http://google-maps-icons.googlecode.com/files/music-rock.png')
                }, function(map, marker) {
                    $(item).find('.summary').click( function() {
                        $(marker).triggerEvent('click');
                        return false;
                    });
                }).click(function() {
                    map.panTo( $(this).get(0).getPosition());
                    $(clone).dialog({
                        'modal': true,
                        'width': 530,
                        'title': data.summary.text,
                        'resizable': false,
                        'draggable': false
                    });
                    $('#map_canvas').gmap('displayStreetView', 'streetview{0}'.replace('{0}', index), {
                        'position': $(this).get(0).getPosition()
                    });
                });
            }
            );
        }
    });
});