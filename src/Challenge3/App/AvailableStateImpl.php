<?php

namespace Interview\Challenge3\App;

use Interview\Challenge3\App\AvailableStateRepositoryInterface;
use Interview\Challenge3\Vendor\Address;

class AvailableStateImpl implements AvailableStateRepositoryInterface {

    public function all(): array
    {
        return [];
    }

    public function load(string $addressId): Address
    {
        return new Address($addressId);
    }

    public function update(): Address
    {
        return new Address();
    }
}