<?php

namespace Service {

    use Repository\TodoListRepository;

    interface TodoListService {
        function showTodoList(): void;

        function addTodoList(string $todo): void;

        function removeTodolist(int $number): void;
    }

    class TodoListServiceImpl implements TodoListService {

        private TodoListRepository $todoListRepository;

        public function __construct(TodoListRepository $todoListRepository) {
            $this->todoListRepository = $todoListRepository;
        }

        function showTodoList(): void
        {
            echo "TODOLIST" . PHP_EOL;
            $todoList = $this->todoListRepository->findAll();
            foreach ($todoList as $number => $value) {
                echo "$number. $value" .PHP_EOL;
            }
        }

        function addTodoList(string $todo): void
        {
            // TODO: Implement addTodoList() method.
        }

        function removeTodolist(int $number): void
        {
            // TODO: Implement removeTodolist() method.
        }
    }
}
