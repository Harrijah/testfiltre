
<?php if(!$produits): ?>
    <option>no response</option> 
<?php else: ?>
    <!-- <option value='<?php //echo $rayons[0]['rayon']; ?>' class='retourrayon'>Tous les rayons</option>  -->
    <?php foreach($produits as $produit): ?>
        <option value='<?php echo $produit['id']; ?>'><?php echo $produit['rayon']; ?></option>
    <?php endforeach; ?>
<?php endif; ?>