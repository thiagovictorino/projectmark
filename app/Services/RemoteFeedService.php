<?php


namespace App\Services;


use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;

class RemoteFeedService
{
    /**
     * Request the remove feed content and return a list
     * of posts as an array
     *
     * @return array
     */
    public function import() : array {
        $response = Http::retry(3)->get('https://sq1-api-test.herokuapp.com/posts');
        $posts = [];
        foreach ($response->json()['data'] as $post) {
            $posts[] = [
                'user_id' => $this->getAdminUser()->id,
                'created_at' => Carbon::parse($post['publication_date']),
                'title' => $post['title'],
                'description' => $post['description']
            ];
        }
        return $posts;
    }

    /**
     * Return the admin user to be related to
     * the posts
     *
     * @return User
     */
    private function getAdminUser() : User
    {
        return User::where('email', 'admin@projectmark.com')->first();
    }
}
