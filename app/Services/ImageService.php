<?php

namespace App\Services;

use Illuminate\Support\Collection;

trait ImageService
{
    private array $names;
    private Collection $images;

    public function getImageKeys($images, $slug = ''): Collection
    {
        return collect($images)->map(function($image) use($slug) {
            $this->images->add($image);
            $identifier =  $slug . '-'. $image->getClientOriginalName();
            return $this->names[$identifier] = $identifier;
        });
    }

    public function saveImages(string $path = 'img', string $search = ''): void
    {
        $this->images->each(function($image) use($path, $search) {
            $image->move($path, $this->names[
                strlen($search) > 0
                    ? $search
                    : $this->images->search($image)
            ]);
        });
    }
}
