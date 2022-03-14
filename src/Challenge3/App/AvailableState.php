<?php

namespace Interview\Challenge3\App;

class AvailableState
{
    private AvailableStateRepositoryInterface $availableStateRepository;

    public function __construct()
    {

    }

    public function something(string $addressId): array
    {
        $this->availableStateRepository = new AvailableStateImpl();
        $this->availableStateRepository->load($addressId);
        return $this->availableStateRepository->all();
    }
}