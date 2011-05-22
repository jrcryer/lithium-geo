<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2010, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

namespace app\controllers;

use app\models\Region;
use app\models\Store;

class StoresController extends \lithium\action\Controller {

    /**
     * Display post code search form
     */
    public function search() {}

    public function show() {
        $store = Store::find('first', array(
            'conditions' => array (
                'title' => array( $this->request->id )
            )
        ));
        return compact('store');
    }
    
    /**
     * Display regions with number of associated stores
     */
    public function regions() {
        $regions = Region::all();

        return compact('regions');
    }

    /**
     * Display a region with a list of stores
     */
    public function region() {
        $region    = $this->request->id;
        $showrooms = Store::find('all', array(
            'conditions' => array(
                'region' => array($region)
            )
        ));
        return compact('region', 'showrooms');
    }
}
