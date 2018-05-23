<?php
namespace App\Repositories\Eloquent;

use App\Meal;
use App\Contracts\mealsInterface;
use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Http\Controllers\MealsController;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;




    abstract class MealsRepository implements mealsInterface {



        /**
         * MealsRepository constructor.
         * @param null $meal
         */
        /**
         * @var Meal
         */
        public $meals;
        public $para;
        /**
         * MealsRepository constructor.
         * @param Meals $meals
         */
        public function __construct(Meals $meals, Request $request )
        {
            $this->meals = $meals;
            $para = $request->all();
            return $para;
        }

        public function selectAll()
        {
            $this->meals->all();

            $language_id = isset($para['lang']) ? $para['lang'] : 3;
            return $this->meals->where('language_id',$language_id);
        }
        public function checkId($id)
        {
            return $this->meals->findOrFail($id);
        }
        public function checkCat($catid)
        {
            return $this->meals->where('category_id', $catid);
        }
        public function checkTag($tagid)
        {
            return $this->meals->where('category_id', $tagid);
        }
        public function checkWith($meals)
        {
            $kljucne = explode(',', $para['with']);
            $keywords = array('category', 'ingredient', 'tag');

            foreach ($kljucne as $x) {

                if (in_array($x, $keywords, true)) {

                    $this->meals->with($x);
                }
            }
        }
        public function checkDiff_time($timeD)
        {
            if(isset($para['diff_time'])) {

                $time = $para['diff_time'];

                if( is_int($para['diff_time'] > 0)){

                    $this->meals->where('updated_at','>', $time)
                        ->orWhere('created_at','>', $time)
                        ->orWhere('deleted_at','>', $time)->withTrashed();
                }else{
                    $this->meals->where('updated_at','>', $time);
                }
            }
        }
        public function checkPerP($perP)
        {
            $this->meals->paginate($para['per_page']);
        }
        public function returnResults($meals)
        {
            $meals = $meals->get();
            return response()->json([

                'data' => $meals,
            ]);
        }


    }


?>