<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Posts & Comments - One to Many</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        referrerpolicy="no-referrer" />
    <style>
        body {
            background: linear-gradient(135deg, #e0e7ff 0%, #f8fafc 100%);
            min-height: 100vh;
        }

        .post-card {
            border-radius: 1.25rem;
            border: none;
            margin-bottom: 2.5rem;
            background: #fff;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.12);
            transition: transform 0.15s;
        }

        .post-card:hover {
            transform: translateY(-4px) scale(1.01);
            box-shadow: 0 16px 40px 0 rgba(31, 38, 135, 0.18);
        }

        .comment-card {
            border-radius: 0.75rem;
            background: #f1f5f9;
            margin-bottom: 0.75rem;
            border: none;
            box-shadow: 0 2px 8px 0 rgba(31, 38, 135, 0.06);
        }

        .no-comments {
            color: #64748b;
            font-style: italic;
            margin-left: 0.5rem;
        }

        .field-label {
            font-weight: 600;
            color: #6366f1;
        }

        .post-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 0.5rem;
        }

        .post-meta {
            font-size: 0.95rem;
            color: #64748b;
        }

        .comment-user {
            color: #0ea5e9;
            font-weight: 500;
        }

        .icon {
            color: #6366f1;
            margin-right: 0.5rem;
        }

        .add-comment-btn {
            background: #6366f1;
            color: #fff;
            border-radius: 0.5rem;
            padding: 0.3rem 1rem;
            font-size: 0.95rem;
            border: none;
            transition: background 0.15s;
        }

        .add-comment-btn:hover {
            background: #4f46e5;
        }
    </style>
</head>

<body>
    <div class="container py-5">
        <h2 class="text-center mb-5 fw-bold" style="color:#6366f1;">
            <i class="fa-solid fa-comments icon"></i>Posts & Comments
        </h2>
        @forelse($posts as $post)
            <div class="card post-card shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <div class="post-title">
                            <i class="fa-solid fa-thumbtack icon"></i>{{ $post->title }}
                        </div>
                        <span class="post-meta">
                            <i class="fa-regular fa-clock"></i>
                            {{ $post->created_at }}
                        </span>
                    </div>
                    <div class="mb-3 text-secondary">
                        {{ $post->content ?? '-' }}
                    </div>
                    <div class="row mb-2">
                        <div class="col-auto">
                            <span class="field-label">ID:</span> {{ $post->id }}
                        </div>
                        <div class="col-auto">
                            <span class="field-label">Updated:</span> {{ $post->updated_at }}
                        </div>
                    </div>
                    <div class="mt-4">
                        <span class="field-label"><i class="fa-solid fa-message icon"></i>Comments:</span>
                        @forelse($post->comments as $comment)
                            <div class="card comment-card">
                                <div class="card-body py-2 px-3">
                                    <div class="d-flex justify-content-between align-items-center mb-1">
                                        <span class="comment-user">
                                            <i
                                                class="fa-solid fa-user icon"></i>{{ $comment->user->name ?? 'Anonymous' }}
                                        </span>
                                        <span class="text-muted" style="font-size:0.9em;">
                                            {{ $comment->created_at }}
                                        </span>
                                    </div>
                                    <div>
                                        <span class="field-label">Comment:</span> {{ $comment->comment }}
                                    </div>
                                </div>
                            </div>
                        @empty
                            <span class="no-comments">No comments yet.</span>
                        @endforelse
                    </div>
                </div>
            </div>
        @empty
            <div class="text-center text-muted">No posts available.</div>
        @endforelse
    </div>
</body>

</html>
