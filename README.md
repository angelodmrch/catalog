# Catalog Plugin

Categories and Products plugin

## Categories

	title = "Categorie"
    url = "/:slug"
    id = "categorie"

    [categories]

    ==
    function onStart(){

    	//Get categorie by slug
        $cat = $this->categories->getBySlug($this->param('slug'));

        //Get categorie by ID
        $cat = $this->categories->getById($id);

        //Get all categories
        $cats = $this->categories->getAll());

        //Get children categories
        $cats = $this->categories->getChildren($cat->id);

        //Get all categories with no parents
        $cats = $this->categories->getNoParents();

    }
    ==

    ...


## Products

	title = "Product"
    url = ":categorie/:slug"
    id = "product"

    [products]

    ==
    function onStart(){

    	//Get product by slug
        $pro = $this->products->getBySlug($this->param('slug'));

        //Get product by ID
        $pro = $this->products->getById($id);

        //Get all products
        $pros = $this->products->getAll());
    }
    ==

    ...