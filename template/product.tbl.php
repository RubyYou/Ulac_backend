<?php
function getProductDetail($id,$productName,$description,$productCode,$Specs,$Weight,$security,$thumbImgUrl,$Intro,$BigImgUrl)
{
?>
    <div class="thumb">
        <h1>Here is the product thumb area</h1>
        <em>ID name: <?php echo $id;?></em>
        <img src="<?php echo $thumbImgUrl; ?>"/>
        <p><?php echo $Intro; ?></p>
    </div>
    <hr/>
    <div class="details">
        <img class="slides" src="<?php echo $BigImgUrl; ?>"/>
        <h1>Here is the detail of the product</h1>
        <h3><?php echo $productName;?></h3>
        <p><?php echo $description;?></p>
        <p><b>Product Code: </b> <?php echo $productCode;?></p>
        <p><b>Specs: </b><?php echo $Specs;?></p>
        <p><b>Weight:</b> <?php echo $Weight;?></p>
        <img src="http://www.ulaclock.com/images/security/level<?php echo $security; ?>.png" />
    </div>
<?php
}

?>