<h1>「うどん」　の検索結果</h1>
<h2>総件数：<?php echo $response['count'] ?></h2>
<h2><?php echo $response['page'] ?>ページ目を表示</h2>

<table>
    <tr>
        <th>画像</th>
        <th>商品名</th>
        <th>価格</th>
        <th>Created</th>
    </tr>

    <?php foreach ($response as $item): ?>
    <tr>
        <td><img src ='<?php echo $item['smallImageUrls'][0]['imageUrl']; ?>'></td>
        <td><?php echo $item['itemName']; ?></td>
        <td><?php echo $item['itemPrice']; ?></td>
        <td>
            <?php echo $this->Html->link('楽天で購入',$item['affiliateUrl']); ?>
        </td>
    </tr>
    <?php endforeach; ?>
    <?php unset($item); ?>
</table>