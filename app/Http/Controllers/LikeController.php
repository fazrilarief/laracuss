<?php

namespace App\Http\Controllers;

use App\Models\Discussion;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function discussionLike(Request $request)
    {
        $discussion = Discussion::where('slug', $request->discussionSlug)->first();

        // Pastikan pengguna sudah login
        if (auth()->check()) {
            // Like diskusi
            $discussion->like();

            return response()->json([
                'status' => 'success',
                'data' => [
                    'likeCount' => $discussion->likeCount,
                ],
            ]);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Please login to like this discussion.',
        ]);
    }

    public function discussionUnlike(string $discussionSlug)
    {
        // get discussion berdasarkan slug dari parameter
        // unlike discussion dengan model tadi
        // return json
        // isi jsonnya adalah likeCount / total semua like dari discussion tsb

        $discussion = Discussion::where('slug', $discussionSlug)->first();

        $discussion->unlike();

        return response()->json([
            'status' => 'success',
            'data' => [
                'likeCount' => $discussion->likeCount,
            ],
        ]);
    }
}
