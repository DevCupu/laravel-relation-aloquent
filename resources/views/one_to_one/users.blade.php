<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eloquent Relationships : Relasi One to One & Many To Many</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <style>
        body {
            background: #f8fafc;
        }
        .card {
            border: none;
            border-radius: 18px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.07);
        }
        .table {
            border-radius: 12px;
            overflow: hidden;
        }
        .table th {
            background: #f1f5f9;
            color: #334155;
            font-weight: 600;
        }
        .btn-role {
            background: #6366f1;
            color: #fff;
            border: none;
            border-radius: 20px;
            padding: 2px 16px;
            font-size: 0.95rem;
            margin-bottom: 4px;
        }
        .user-name {
            font-weight: 500;
            color: #0f172a;
        }
        .phone-number {
            color: #64748b;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card p-4">
                    <h3 class="text-center mb-4" style="color:#6366f1;">
                        Laravel Eloquent Relationship <br>
                        <small class="text-muted" style="font-size:1rem;">One To One & Many To Many</small>
                    </h3>
                    <div class="table-responsive">
                        <table class="table align-middle mb-0">
                            <thead>
                                <tr>
                                    <th>Nama User</th>
                                    <th>Nomor Telepon</th>
                                    <th>Roles</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td class="user-name">{{ $user->name }}</td>
                                    <td class="phone-number">{{ $user->phone->phone ?? '-' }}</td>
                                    <td>
                                        @foreach ($user->roles as $role)
                                            <span class="btn-role">{{ $role->name }}</span>
                                        @endforeach
                                    </td>
                                </tr>
                                @endforeach
                                @if($users->isEmpty())
                                <tr>
                                    <td colspan="3" class="text-center text-muted">No users found.</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
