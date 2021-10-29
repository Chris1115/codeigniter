<h1 class="text-center">Item Catalog</h1>
<div class="container bg-purple-500 grid grid-cols-5 mx-auto">
    <?php foreach($details as $item):?>
      <div class="container bg-blue-200 hover:bg-blue-100 text-center items-center py-4">
        <p><?=$item['item_name'];?></p>
        <p>Price : <?=$item['price'];?></p>
        <p>StocK : <?=$item['stock'];?></p>
      </div>
    <?php endforeach;?>
</div>
<br><br>

<form action="" method="post" class="mx-auto bg-blue-300 flex flex-col w-1/2 p-10">
  <label for="item"><b>Item</b></label>
  <br><br>
    <select name="item" id="item"class="my-2">
        <?php foreach($details as $item):?>
        <option value="<?=$item['item_id'];?>"><?=$item['item_name'];?></option>
        <?php endforeach;?>
    </select>
  <br><br>
  <label for="quantity"class="my-2">quantity</label>
  <input type="text" name="quantity"class="my-2" placeholder="type the quantity here">
  <br><br>
  <button type="submit" class="bg-red-200 rounded px-2 py-1">Buy</button>
</form>

<br><br>
<?=var_dump($user)?>