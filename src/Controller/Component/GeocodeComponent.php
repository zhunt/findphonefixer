<?php

// GeocodeComponent.php
namespace App\Controller\Component;

use Cake\Controller\Component;

use Cake\Network\Http\Client;

class GeocodeComponent extends Component
{
    public function doComplexOperation($amount1, $amount2)
    {
        return $amount1 + $amount2;
    }

    public function geocodeAdress($address) { debug($address); 
    	// call https://maps.googleapis.com/maps/api/geocode/json?address=
    	$http = new Client();
    	$response = $http->get('https://maps.googleapis.com/maps/api/geocode/json', ['address' => $address ]);



    	//debug($response->json);

    	$response = $response->json;

    	if ( $response['status'] != 'OK' ) return false;

    	$formattedAddress = $response['results'][0]['formatted_address'];
    	$geoCords = $response['results'][0]['geometry']['location']['lat'] . ' ' . $response['results'][0]['geometry']['location']['lng'];
    	//debug($geoCords); debug($formattedAddress);

    	//debug($response);

    	return( [
    		'address' => $formattedAddress,
    		'lnglat' => $geoCords,
    		'longitude' => $response['results'][0]['geometry']['location']['lng'],
    		'latitude'  => $response['results'][0]['geometry']['location']['lat']
    		] );

    }
}

?>