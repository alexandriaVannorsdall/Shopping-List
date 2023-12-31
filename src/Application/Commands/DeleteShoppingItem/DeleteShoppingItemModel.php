<?php

namespace Lindyhopchris\ShoppingList\Application\Commands\DeleteShoppingItem;

class DeleteShoppingItemModel
{
    /**
     * @var string
     */
    private string $list;

    /**
     * @var string|int
     */
    private string|int $item;

    /**
     * DeleteShoppingItemModel constructor.
     *
     * @param string $list
     * @param int|string $item
     */
    public function __construct(string $list, int|string $item)
    {
        if (is_string($item) && preg_match('/^\d+$/', $item)) {
            $item = (int) $item;
        }

        $this->list = $list;
        $this->item = $item;
    }

    /**
     * @return string
     */
    public function getList(): string
    {
        return $this->list;
    }

    /**
     * @return string|int
     */
    public function getItem(): string|int
    {
        return $this->item;
    }
}
