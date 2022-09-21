<?php namespace App\Controllers;
    use App\Controllers\Addons;
    use App\Models\RayonModel;
    use App\Models\CategorieModel;
    use App\Models\SouscategorieModel;
    
class Accueil extends BaseController
{
    public function accueil()
    {
        $assets = model(Assets::class);
        $rayon = model(RayonModel::class); 
        $products = model(Produit::class);
        $categories = model(CategorieModel::class);
        $souscategories = model(SouscategorieModel::class);
        $data = 
        [
            'pagetitle' => 'Marketplace',
            'rayons' => $rayon->getRayon(),
            'rayon' => $rayon->getSelectedRayon(),
            'categories' => $categories->getCategory(),
            'souscategories' => $souscategories->getSouscategory(),
            'products' => $products->getSelectedProduct(null, 6)
        ];
        return view('Templates/header', $data)
        . view('accueil')
        . $assets->productfilter()
        . $assets->allproducts()
        . view('Templates/footer');
    }

}