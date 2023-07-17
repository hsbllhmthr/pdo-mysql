<?php

interface TouristdestinationDao {
    public function insert(Touristdestination $f): void;
    public function update(Touristdestination $f): void;
    public function delete(int $id): void;
    public function getATouristdestinationById(int $id): ?Touristdestination;
    public function getAllTouristdestination(): array;
}
