<?php
namespace App\GraphQL\Query;
use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Query;

class CommentsQuery extends Query {

  protected $attributes = [
    'name' => 'CommentsQuery'
  ];

  public function type()
  {
    return Type::listOf(GraphQL::type('comment'));
  }

  public function resolve($root, $args)
  {
    return $root->comments;
  }

}
