<?php

namespace Interview\Challenge3\App;

use Interview\Challenge3\Vendor\Address;

interface AvailableStateRepositoryInterface
{
    /**
     * @return string[]
     */
    public function all(): array;

    public function load(string $addressId): Address;

    /**
     * @return Address
     */
    public function update(): Address;
}