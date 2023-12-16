<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use Illuminate\Http\Request;

class ScrapeController extends Controller
{
    //

    public function scrap_data(Request $request){
        $data = $request;

        // foreach ($datas as $data) {
            try {
                $num = $data['num'];
                $title = $data['title'];
                $description = $data['desc'];
                $budget = $data['budget'];
                $post_date = $data['postDate'];
                $deadline = $data['deadline'];

                // $counts = Projects::where('num', $num)->count();

                // if ($counts == 0) {
                    $oneproject = new Projects();
                    $oneproject->num = $num;
                    $oneproject->title = $title;
                    $oneproject->description = $description;
                    $oneproject->budget = $budget;
                    $oneproject->post_date = $post_date;
                    $oneproject->deadline = $deadline;
                    $oneproject->save();
                // }
            } catch (\Exception $e) {
                // Log the error message
                \Log::error($e->getMessage());
            }

        // }
    }
}
