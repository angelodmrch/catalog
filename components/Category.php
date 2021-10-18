<?php namespace Dmrch\Catalog\Components;

use Cms\Classes\ComponentBase;
use Dmrch\Catalog\Models\Category as CategoryModel;

class Category extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Category Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function getAll() {
        return CategoryModel::where('status',1)->get();
    }

    public function getById($id) {
        return CategoryModel::find($id);
    }

    public function getBySlug($slug) {
        return CategoryModel::where('slug',$slug)->first();
    }

    public function getNoParents() {
        return CategoryModel::where('status',1)->where('parent_id',NULL)->get();
    }

    public function getChildren($id) {
        return CategoryModel::where('status',1)->where('parent_id',$id)->get();
    }
}