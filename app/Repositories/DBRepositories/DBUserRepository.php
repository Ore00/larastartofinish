<?php

namespace RepositoryDB;

use RepositoryInterface\UserRepositoryInterface as UserRepositoryInterface;
use App\Models\User;
use Illuminate\Http\Request;

class DBUserRepository implements UserRepositoryInterface {
    public function all() {
        return User::all();
    }
}
