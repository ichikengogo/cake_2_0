<?php
App::uses('AppShell', 'Console/Command');
App::uses('AutoLoad','Vendor/rws-php-sdk/');
App::uses('RakutenClient','Vendor/rws-php-sdk/');

class RakutenNewItemSearchShell extends AppShell {
 
  public function startup()
  {
    parent::startup();
    $this->cleanup();
    AutoLoad::register();
  }

  public function main() {
    $this->out("start!");
    $this->log('バッチスタート');
    $client = new RakutenClient();
    $response = $client->getApi("うどん");
    
    $this->log('件数 '.$response['count']);
    $this->log('ページ数 '.$response['page']);
    $i = 0;
    foreach($response as $item)
    {
      $this->log('**************'.$i++ .'**************');
      $this->log('商品名 '.$item['itemName']);
      $this->log('価格 '.$item['itemPrice']);
      $this->log('レビュー数 '.$item['reviewCount']);
      $this->log('レビュー平均 '.$item['reviewAverage']);
    
    }
    
    
    $this->log('バッチエンド！');

  }
 
  public function cleanup() {
  }
}