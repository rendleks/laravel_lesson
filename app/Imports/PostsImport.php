<?php

namespace App\Imports;

use App\Models\Post;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PostsImport implements ToCollection, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
       foreach ($collection as $row) {
           if (isset($row['naimenovanie']) && $row['naimenovanie'] !== null) {

               Post::firstOrCreate([
                   'title' => $row['naimenovanie'],
               ],
                   [
                   'title' => $row['naimenovanie'],
                   'content' => $row['opisanie'],
                   'image' => $row['url'],
                   'category_id' => 3,
               ]);
           }
       }
    }
}
