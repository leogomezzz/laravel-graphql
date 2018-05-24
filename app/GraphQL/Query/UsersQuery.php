<?php

namespace App\GraphQL\Query;

use App\User;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;
use Rebing\GraphQL\Support\SelectFields;

class UsersQuery extends Query
{
    protected $attributes = [
        'name' => 'Users Query',
        'description' => 'A query of users'
    ];

    public function type()
    {
        return GraphQL::paginate('users');
    }

    public function args()
    {
        return [
            'id' => [
                'name' => 'id',
                'type' => Type::int()
            ],
            'email' => [
                'name' => 'email',
                'type' => Type::string()
            ]
        ];
    }

    public function resolve($root, $args, SelectFields $fields)
    {
        $user = User::with(array_keys($fields->getRelations()));

        if (isset($args['id'])) {
            $user->where('id', $args['id']);
        }

        if (isset($args['email'])) {
            $user->where('email', $args['email']);
        }

        $user = $user->select($fields->getSelect())
            ->paginate();
        return $user;
    }
}
