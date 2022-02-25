<?php 
include 'database.php';
include 'my-functions.php';
//$products = getQueryData($sqlQueryProducts, $db);

class Item 
{
    protected string $name;
    protected string $description;
    protected int $price;
    protected string $imageUrl;
    protected int $weight;
    protected int $stock;
    protected bool $available; 

    // SETTER GETTER 
    // Name 
    public function setDescription(string $description) 
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
    // Description
    public function setName(string $name) 
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    // Image
    public function setImageUrl(string $imageUrl) 
    {
        $this->imageUrl = $imageUrl;
    }
    public function getImageUrl()
    {
        return $this->imageUrl;
    }
    // Price 
    public function setPrice(string $price) 
    {
        $this->price = $price;
    }
    public function getPrice()
    {
        return $this->price;
    }
}
class Vipitem extends Item
{  
    protected string $sign;
    public function setSign(string $sign){
        $this->sign = $sign;
    }
    public function getSign(){
        return $this->sign;
    }
}

$jcvd = new Vipitem;
    $jcvd->setSign("yo cest jcvd qui signe");
    $jcvd->setName("name de la shoe");
    $jcvd->setDescription("description de la shoe");
    $jcvd->setImageUrl("image de la shoe");
    $jcvd->setPrice(100);

dump($jcvd);

class Catalogue
{
    protected array $arrayItems;

    public function __construct($db)
    {
        $productsStatement = $db->prepare('SELECT * FROM products');
        $productsStatement->execute();
        $this->arrayItems = $productsStatement->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getItems()
    {
        return $this->arrayItems;
    }
}

function displayItem(Item $item) {
    $name = $item->getName();
    $decription = $item->getDescription();
    $image = $item->getImageUrl();
    $price = formatPrice($item->getPrice());
   return 
   '<div style="width:250px; display:flex; flex-direction:column; align-items:center; border:solid 1px black;">' 
   ."<h1 style='text-align:center;'>".$name."</h1>"
   ."<p>".$decription."</p>"
   .'<img style="height:150px;" src='.$image.' alt="">'
   ."<h4>".$price. " €<h4>"
   ."</div>";
}


function displayCatalogue(Catalogue $arrayItems){

    $allCatalogue = "";

    foreach ($arrayItems->getItems() as $key => $element){

        $article = new Item();
        $article->setName($element["name"]);
        $article->setDescription($element["description"]);
        $article->setImageUrl($element["image"]);
        $article->setPrice($element["price"]);

        $allCatalogue .= displayItem($article);
    }
    return $allCatalogue;
}


 $catalogue = new Catalogue($db);
 echo displayCatalogue($catalogue);