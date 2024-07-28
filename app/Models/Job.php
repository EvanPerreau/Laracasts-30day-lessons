<?php

namespace App\Models;

class Job {
    public static function all(): array {
        return [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '$100,000',
            ],
            [
                'id' => 2,
                'title' => 'Manager',
                'salary' => '$80,000',
            ],
            [
                'id' => 3,
                'title' => 'Employee',
                'salary' => '$50,000',
            ]
        ];
    }

    public static function find($id): array {
        $job = collect(self::all())->firstWhere('id', $id);
        if($job == null) {
            abort(404);
        }
        return $job;
    }
}
