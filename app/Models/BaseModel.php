<?php

namespace App\Models;

use Fomo\Database\DB;
use Illuminate\Support\Str;

abstract class BaseModel
{
    /**
     * Table
     *
     * @var string
     */
    protected static $table = '';

    /**
     * Get the table
     *
     * @return string
     */
    protected static function getTable()
    {
        return static::$table ?: Str::snake(Str::pluralStudly(class_basename(static::class)));
    }

    /**
     * @param string $name
     * @param array $arguments
     * @return mixed
     */
    public static function __callStatic(string $name, array $arguments)
    {
        return DB::table(self::getTable())->{$name}(...$arguments);
    }
}