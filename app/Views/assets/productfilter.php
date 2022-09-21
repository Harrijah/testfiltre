<div class="mx-auto pl-5 mt-4">
    <h3 class="d-inline">Trouver un produit</h3>
    <?php echo (\App\Controllers\Assets::filterproducts()); ?>
    <h3>Les catégories disponibles</h3>
                <div class="rowforms2 mt-2">
                    <div class="parentcategorie rayon mt-2">
                        <div class="formcontainer01 pr-3 pl-3">
                            <div id="fer"></div>
                            <select name="rayon" id="testidselect" class="form-control">
                                <?php foreach($rayons as $ray): ?>
                                    <label for="" class="form-control">Catégorie</label>
                                    <option value="<?php echo $ray['id']; ?>">Rayon <?php echo $ray['rayon']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="parentcategorie rayon mt-2">
                        <div class="formcontainer01 pr-3 pl-3">
                            <select name="categorie" class="selectcategory3 form-control"  url="<?php echo base_url('filtre/changerayon2'); ?>" >
                                <?php foreach($categories as $category): ?>
                                    <option value="<?php echo $category['id']; ?>">Catégorie <?php echo $category['categorie']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="parentcategorie rayon mt-2">
                        <div class="formcontainer01 pr-3 pl-3">
                            <select name="souscategorie" class="form-control">
                                <?php foreach($souscategories as $souscategorie): ?>
                                    <label for="" class="form-control">Catégorie</label>
                                    <option value="<?php echo $souscategorie['id']; ?>">Sous-catégorie <?php echo $souscategorie['souscategorie']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
</div>