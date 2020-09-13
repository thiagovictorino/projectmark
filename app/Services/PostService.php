<?php


namespace App\Services;


use App\Http\Requests\CreatePostRequest;
use App\Http\Resources\PostCollection;
use App\Models\Post;
use Illuminate\Http\Request;

class PostService
{
    /**
     * Return all posts created by the authenticated user
     *
     * @param Request $request
     * @return PostCollection
     */
    public function getUserPosts(Request $request): PostCollection {
        return new PostCollection(
            Post::orderBy($this->getValidSortableColumn($request), $this->getValidOrder($request))
                ->onlyMyUser()
                ->paginate(10)
        );
    }


    /**
     * Create a post using the authenticated user
     *
     * @param CreatePostRequest $request
     * @return Post
     */
    public function create(CreatePostRequest $request) : Post
    {
        return Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id'=> $request->user()->id
        ]);
    }

    /**
     * Return a valid sortable column - Currently the only column sortable is column_at but
     * it is easy to expand by incrementing the array $sortable_columns
     *
     * @param Request $request
     * @return string
     */
    private function getValidSortableColumn(Request $request) : string
    {
        $sortable_columns = ['created_at'];
        if(!in_array($request->get('column', ''), $sortable_columns)) {
            return 'created_at';
        }

        return $request->get('column');
    }

    /**
     * Return a valid ordering, ASC or DESC
     *
     * @param Request $request
     * @return string
     */
    private function getValidOrder(Request $request) : string {
        return $request->get('order', 'desc') == 'desc'?'desc':'asc';
    }

}
