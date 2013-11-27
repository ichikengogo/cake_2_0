<?php
class RakutenClient
{
	public function getApi($query){
		$client = new RakutenRws_Client();
		// アプリID (デベロッパーID) をセットします
		$client->setApplicationId('1068287334310088327');

		// アフィリエイトID をセットします(任意)
		$client->setAffiliateId('120c9c6d.8eaae8c3.120c9c6e.ebb6907c');

		$response = $client->execute('IchibaItemSearch', array(
		  'keyword' => $query,
      'page' => 100
		));

	  return $response;

	}
}