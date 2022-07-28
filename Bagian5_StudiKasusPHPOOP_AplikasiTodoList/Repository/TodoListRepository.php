<?php

namespace Repository {
    use Entity\TodoList;

    interface TodoListRepository {
        function save(TodoList $todoList): void;

        function remove(int $number): bool;

        function findAll(): array;
    }

    class TodoListRepositoryImpl implements TodoListRepository {
        private array $todoList = array();

        function save(TodoList $todoList): void
        {
            // TODO: Implement save() method.
        }

        function remove(int $number): bool
        {
            // TODO: Implement remove() method.
        }

        function findAll(): array
        {
            return $this->todoList;
        }
    }
}
