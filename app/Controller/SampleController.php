<?php
App::uses('AppController', 'Controller');
App::uses('AutoLoad','Vendor/rws-php-sdk/');
App::uses('RakutenClient','Vendor/rws-php-sdk/');

class SampleController extends AppController {
 
    public function index() {
      AutoLoad::register();
      $client = new RakutenClient();
      $response = $client->getApi("うどん");
      $this->set('response', $response);
      $this->log('カウント'.$response['count']);
      $this->log($response);

    }
 
}