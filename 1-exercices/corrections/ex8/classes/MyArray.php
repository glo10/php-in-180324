<?php

class MyArray
{
    public function findValue(mixed $keySearch, array $data): ?string
    {
        foreach ($data as $key => $value) {
            if ($key === $keySearch) {
                return $value;
            }
        }
        throw new Error("value not found");
    }

    public function findKey(mixed $valueSearch, array $data): ?string
    {
        $result = null;
        foreach ($data as $key => $value) {
            if ($value === $valueSearch) {
                $result = $key;
                break;
            }
        }
        if($result === null) {
            throw new MyNotFoundException('Aucun résultat');
        }
        return $result;
    }

    public function countPopulation(array $countries)
    {
        $i = 0;
        $sum = 0;
        foreach ($countries as $key => $value) {
            $sum += $value;
            $i++;
        }
        return [
            'population' => $sum,
            'countries' => $i
        ];
    }

    public function fromTwoDimToOne(array $tables): array
    {
        $results = [];
        foreach ($tables as $tab) {
            foreach ($tab as $v) {
                $results[] = $v;
            }
        }
        return $results;
    }
}
