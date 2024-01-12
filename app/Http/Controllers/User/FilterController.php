<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\User\AverageResource;
use App\Http\Resources\User\DetailResource;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    protected $restaurantsRef;
    protected $menusRef;
    protected $componentsRef;
    protected $categoryRef;

    public function __construct()
    {
        $this->restaurantsRef = app('firebase.firestore')->database()->collection('restaurants');
        $this->menusRef = app('firebase.firestore')->database()->collection('menus');
        $this->componentsRef = app('firebase.firestore')->database()->collection('components');
        $this->categoryRef = app('firebase.firestore')->database()->collection('categories');
    }

    public function getAverage(Request $request){
        $inputHarga = $request->budget;
        $data = [];
        $componentQueries = $this->categoryRef
        ->documents();
        foreach ($componentQueries as $document) {
            $harga = 0;
            $count = 0;
            if ($document->exists()) {
                $menus = app('firebase.firestore')->database()->collection('categories')->document($document->id())->collection('menus')->documents();
                foreach ($menus as $menu) {
                    if ($menu->exists()) {
                        $harga += $menu->data()['harga'];
                        $count++;
                    } else {
                        printf('Document %s does not exist!' . PHP_EOL, $menu->id());
                    }
                }
            } else {
                printf('Document %s does not exist!' . PHP_EOL, $document->id());
            }
            if ($harga/$count >= $inputHarga-2000 && $harga/$count <= $inputHarga+2000) {
                $data[] = [
                    'category_id' => $document->id(),
                    'nama' => $document->data()['nama'],
                    'harga_rata_rata' => $harga/$count,
                ];
            }
        }
        $menus = AverageResource::collection($data);
        return view('result', compact('menus'));
    }

    public function getFilter(String $categoryId){
        $inputBahan = ['Mie'];
        $inputAlergi = [];
        $idBahan = [];
        $idAlergi = [];
        $data = [];
        if (!empty($inputBahan)) {
            $idBahan = $this->getIdBahan($inputBahan);
        }
        if (!empty($inputAlergi)) {
            $idAlergi = $this->getIdBahan($inputAlergi);
        }
        $rangeQueries = $this->menusRef->documents();
        foreach ($rangeQueries as $document) {
            $categoriQueries = $this->menusRef->document($document->id())->collection('categories')->documents();
            foreach ($categoriQueries as $category) {
                if ($category->id() == $categoryId) {
                    if (!empty($inputBahan) && empty($inputAlergi)) {
                        $idBahan = $this->getIdBahan($inputBahan);
                        if (!empty(array_intersect($document->data()['components'], $idBahan))) {
                            $data[] = [
                                'menu_id' => $document->id(),
                                'nama' => $document->data()['nama'],
                                'harga' => $document->data()['harga'],
                                'restaurant_id' => $document->data()['restaurant']->snapshot()->id(),
                                'nama_restaurant' => $document->data()['restaurant']->snapshot()->data()['nama'],
                                'alamat_restaurant' => $document->data()['restaurant']->snapshot()->data()['lokasi'],
                            ];
                        } else {
                            print_r('Data Tidak Sesuai dengan komponen yang dipilih');
                        }
                    }
                    if (empty($inputBahan) && !empty($inputAlergi)) {
                        $idAlergi = $this->getIdBahan($inputAlergi);
                        if (empty(array_intersect($document->data()['components'], $idAlergi))) {
                            $data[] = [
                                'menu_id' => $document->id(),
                                'nama' => $document->data()['nama'],
                                'harga' => $document->data()['harga'],
                                'restaurant_id' => $document->data()['restaurant']->snapshot()->id(),
                                'nama_restaurant' => $document->data()['restaurant']->snapshot()->data()['nama'],
                                'alamat_restaurant' => $document->data()['restaurant']->snapshot()->data()['lokasi'],
                            ];
                        } else {
                            print_r('DataTidak Sesuai dengan Alergi yang dipilih');
                        }
                    }
                    if (!empty($inputBahan) && !empty($inputAlergi)) {
                        $idBahan = $this->getIdBahan($inputBahan);
                        $idAlergi = $this->getIdBahan($inputAlergi);
                        if (!empty(array_intersect($document->data()['components'], $idBahan)) && empty(array_intersect($document->data()['components'], $idAlergi))) {
                            $data[] = [
                                'menu_id' => $document->id(),
                                'nama' => $document->data()['nama'],
                                'harga' => $document->data()['harga'],
                                'restaurant_id' => $document->data()['restaurant']->snapshot()->id(),
                                'nama_restaurant' => $document->data()['restaurant']->snapshot()->data()['nama'],
                                'alamat_restaurant' => $document->data()['restaurant']->snapshot()->data()['lokasi'],
                            ];
                        } else {
                            print_r('Data  Tidak Sesuai dengan komponen dan alergi yang dipilih');
                        }
                    }if (empty($inputBahan) && empty($inputAlergi)) {
                        $data[] = [
                            'menu_id' => $document->id(),
                            'nama' => $document->data()['nama'],
                            'harga' => $document->data()['harga'],
                            'restaurant_id' => $document->data()['restaurant']->snapshot()->id(),
                            'nama_restaurant' => $document->data()['restaurant']->snapshot()->data()['nama'],
                            'alamat_restaurant' => $document->data()['restaurant']->snapshot()->data()['lokasi'],
                        ];
                    }
                }
            }
        }
        $menus = DetailResource::collection($data);
        return view('nutrimeal-trial.index', compact('menus'));
    }

    public function getIdBahan(Array $inputBahan){
        $idMenu = [];
        $componentQueries = $this->componentsRef
        ->where('nama', 'in', $inputBahan)
        ->documents();
        foreach ($componentQueries as $document) {
            if ($document->exists()) {
                array_push($idMenu, $document->id());
            } else {
                printf('Document %s does not exist!' . PHP_EOL, $document->id());
            }
        }
        return $idMenu;
    }

}
