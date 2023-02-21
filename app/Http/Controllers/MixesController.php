<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Post;
use App\Models\Mixe;

class MixesController extends Controller
{
    /**
     * @OA\GET(
     *     path="/api/mixes",
     *     summary="Get a collection of 10 random posts",
     *     @OA\Response(
     *         response=200,
     *         description="OK"
     *         @OA\Examples(example="result", value={}, summary="collection of 10 random posts")
     *     )
     * )
     */
    public function __invoke(Request $request): Response
    {
        $mixe = Mixe::OrderByRAW("RAND()")->first();
        
        $result = array();

        $post = Post::find($mixe->post_id_a);
        array_push($result, $post);
        $post = Post::find($mixe->post_id_b);
        array_push($result, $post);
        $post = Post::find($mixe->post_id_c);
        array_push($result, $post);
        $post = Post::find($mixe->post_id_d);
        array_push($result, $post);
        $post = Post::find($mixe->post_id_e);
        array_push($result, $post);
        $post = Post::find($mixe->post_id_f);
        array_push($result, $post);
        $post = Post::find($mixe->post_id_g);
        array_push($result, $post);
        $post = Post::find($mixe->post_id_h);
        array_push($result, $post);
        $post = Post::find($mixe->post_id_i);
        array_push($result, $post);
        $post = Post::find($mixe->post_id_j);
        array_push($result, $post);

        return response($result);
    }
}
