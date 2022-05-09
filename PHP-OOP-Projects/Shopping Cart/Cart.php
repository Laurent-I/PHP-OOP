<?php


use JetBrains\PhpStorm\Pure;

class Cart
{
    /**
     * @var CartItem[]
     */
    private array $items = [];

    /**
     * @return CartItem[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param CartItem[] $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }




    /**
     * Add Product $product into cart. If product already exists inside cart
     * it must update quantity.
     * This must create CartItem and return CartItem from method
     * Bonus: $quantity must not become more than whatever
     * is $availableQuantity of the Product
     *
     * @param Product $product
     * @param int $quantity
     * @return CartItem
     * @throws Exception
     */
    public function addProduct(Product $product, int $quantity): CartItem
    {
        $cartItem = $this->findCartItem($product->getId());
        if ($cartItem === null){
            $cartItem = new cartItem($product,0);
            $this->items[ $product->getId()]= $cartItem;
        }
        //Find product in cart
         $cartItem->increaseQuantity( $quantity);
        return $cartItem;
    }

    private function findCartItem(int $productId)
    {
        return $this->items[$productId] ?? null;
//        foreach ($this->items as $item) {
//            if ($item->getProduct()->getId()=== $productId){
//                return $item->getProduct();
//            }
//        }
      }

    /**
     * Remove product from cart
     *
     * @param Product $product
     */
    public function removeProduct(Product $product): void
    {
        unset($this->items[$product->getId()]);
//        foreach ($this->items as $index=> $item) {
//            if ($item->getProduct()->getId() === $product->getId()){
//                unset($this->items[$index]);
//                break;
//            }
//        }
    }

    /**
     * These returns total number of products added in cart
     *
     * @return int
     */
    #[Pure] public function getTotalQuantity(): int
    {
         $sum = 0;
        foreach ($this->items as $item) {
            $sum += $item->getQuantity();
         }
        return $sum;
    }

    /**
     * These returns total price of products added in cart
     *
     * @return float
     */
    #[Pure] public function getTotalSum(): float
    {
        $totalSum = 0;
        foreach ($this->items as $item){
            $totalSum += $item->getQuantity() * $item->getProduct()->getPrice();
    }
        return $totalSum;
    }
}

//$item = $this->items;
//print_r($item);