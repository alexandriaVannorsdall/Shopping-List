<?php
declare(strict_types=1);

namespace Lindyhopchris\ShoppingList\Persistance;

use Lindyhopchris\ShoppingList\Domain\ShoppingList;
use Lindyhopchris\ShoppingList\Domain\ValueObjects\Slug;

interface ShoppingListRepositoryInterface
{
    /**
     * Does a shopping list identified by the supplied slug exist?
     *
     * @param string $slug
     * @return bool
     */
    public function exists(string $slug): bool;

    /**
     * Retrieve a shopping list by its slug.
     *
     * @param string $slug
     * @return ShoppingList|null
     */
    public function find(string $slug): ?ShoppingList;

    /**
     * Retrieve a shopping list by its slug, throwing an exception if the list does not exist.
     *
     * @param string $slug
     * @return ShoppingList
     * @throws ShoppingListNotFoundException
     */
    public function findOrFail(string $slug): ShoppingList;

    /**
     * Store (create or update) a shopping list.
     *
     * @param ShoppingList $list
     * @return void
     */
    public function store(ShoppingList $list): void;

    /**
     * Find a shopping list by its slug and delete it.
     *
     * @param string $slug
     * @throws ShoppingListNotFoundException
     * @return void
     */
    public function delete(string $slug): void;
}
