<?php

namespace webGps\Http\Controllers;

use Illuminate\Http\Request;
use webGps\Http\Controllers\GmapsController;
use GeneaLabs\Providers\Service;

class GmapsController extends Controller
{

  public function index()
{
    //configuaración
    $config = array();
    $config['center'] = 'auto';
    $config['map_width'] = 400;
    $config['map_height'] = 400;
    $config['zoom'] = 15;
    $config['onboundschanged'] = 'if (!centreGot) {
        var mapCentre = map.getCenter();
        marker_0.setOptions({
            position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng())

        });
    }
    centreGot = true;';

    $this->load->library('googlemaps');

$config['center'] = '37.4419, -122.1419';
$config['zoom'] = 'auto';
$this->googlemaps->initialize($config);

$marker = array();
$marker['position'] = '37.429, -122.1419';
$this->googlemaps->add_marker($marker);
$data['map'] = $this->googlemaps->create_map();

$this->load->view('view_file', $data);
}

}
