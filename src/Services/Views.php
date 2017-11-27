<?php

namespace IN10\Styleguide\Services;

use Symfony\Component\Finder\Finder;

class Views
{
    public function read()
    {
        $finder = new Finder();
        $sections = [];
        $basepath = config('styleguide.view_path');


        foreach ($finder->directories()->in(base_path($basepath))->depth('== 0') as $directory) {
            $items = [];

            $directoryName = $directory->getFileName();

            $dirFinder = new Finder();

            foreach ($dirFinder->files()->in($directory->getPathName())->name('*.blade.php')->notPath('#(^|/)_.+(/|$)#')->sortByName() as $file) {
                $name = str_replace('.blade.php', '', $file->getFileName());
                $styledName = implode(' ', array_map(function ($part) {
                    return ucfirst($part);
                }, explode('-', $name)));
                $items[$directoryName . '.' . $name] = $styledName;
            }

            $sections[] = [
                'name' => $directoryName,
                'items' => $items
            ];
        }

        return $sections;
    }
}
