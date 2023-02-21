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
     *         @OA\Examples(example="result", value=[{\"id\":2,\"created_at\":null,\"updated_at\":null,\"title\":\"L1JAv1Ixf1Uhto8d\",\"description\":\"vAGcwJVNZ6VlcjGQ\",\"additional\":\"hcysfc9Rs98NLl2w\",\"date\":\"2023-02-2004:53:00\"},{\"id\":1,\"created_at\":null,\"updated_at\":null,\"title\":\"tGvzcXWbEWCyXMnO\",\"description\":\"6bChYupmMHwKa81i\",\"additional\":\"cPI5SzKgJ6tezeRb\",\"date\":\"2023-02-2023:24:00\"},{\"id\":3,\"created_at\":null,\"updated_at\":null,\"title\":\"RUzcn7c4odeCYtcV\",\"description\":\"zqNQjTVEf9i9sZLq\",\"additional\":\"llXYkh5vKoueNbQ0\",\"date\":\"2023-02-2005:32:00\"},{\"id\":4,\"created_at\":null,\"updated_at\":null,\"title\":\"UeaJUXiOSrff78Rr\",\"description\":\"SD11oE3IBlbYJEMQ\",\"additional\":\"AISZyA01Sm0s42Vm\",\"date\":\"2023-02-2015:44:00\"},{\"id\":5,\"created_at\":null,\"updated_at\":null,\"title\":\"qrjQTAgHphPeOR1O\",\"description\":\"LG2fB2ZvcdOQH87U\",\"additional\":\"R8Q3cEUu4uZxrvI8\",\"date\":\"2023-02-2007:55:00\"},{\"id\":6,\"created_at\":null,\"updated_at\":null,\"title\":\"ASE6f2csb82eu3Q3\",\"description\":\"nZPG8wv5A5D7HiXk\",\"additional\":\"UkjFLrZfrYk1bqkV\",\"date\":\"2023-02-2008:30:00\"},{\"id\":7,\"created_at\":null,\"updated_at\":null,\"title\":\"TMdfmwPp81YC4DaS\",\"description\":\"g2KHXos966ADA8IB\",\"additional\":\"Xi2IHQf3F7E705HE\",\"date\":\"2023-02-2012:20:00\"},{\"id\":42,\"created_at\":null,\"updated_at\":null,\"title\":\"rZht9YfgeLMJ2FfU\",\"description\":\"pq7tuRk2UycJ3JVB\",\"additional\":\"eXAXvfEGD5a2NOvP\",\"date\":\"2023-02-2022:35:00\"},{\"id\":92,\"created_at\":null,\"updated_at\":null,\"title\":\"Ftj7iG3xBdwElF8d\",\"description\":\"qI3QlBbMlpJ93FUV\",\"additional\":\"1C26OoETMYpzX8yt\",\"date\":\"2023-02-2007:34:00\"},{\"id\":98,\"created_at\":null,\"updated_at\":null,\"title\":\"AjPPHntvAib6KcMX\",\"description\":\"1BoAmOzyTd6LItj9\",\"additional\":\"jfWJVbvoXfmE0RX2\",\"date\":\"2023-02-2018:52:00\"}]", summary="collection of 10 random posts")
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


        //dd(response($mixe));
        return response($result);
    }
}
