<?php namespace Dmrch\Catalog\Components;

use Cms\Classes\ComponentBase;
use Dmrch\Catalog\Models\Product as ProductModel;
use Dmrch\Catalog\Models\Category as CategoryModel;

class Product extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Product Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function getAll() {
        return ProductModel::where('status',1)->get();
    }

    public function getById($id) {
        return ProductModel::find($id);
    }

    public function getBySlug($slug) {
        return ProductModel::where('slug',$slug)->first();
    }
}
