<?php 
namespace App\Model;

use App\Exception\NotFoundException;
use Illuminate\Database\Connection;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

abstract class BaseModel extends Model
{
    /** @var \DI\Container  */
    public $container;
    public function __construct(array $attributes = [])
    {
        global $c;
        $this->container = $c;
        parent::__construct($attributes);
    }
    /**
     * @return Builder|Model|\Illuminate\Database\Query\Builder
     */
    public static function builder()
    {
        global $c;
        $self = new static();
        $builder = new Builder(new \Illuminate\Database\Query\Builder($c->get(Connection::class)));
        $builder->setModel($self);
        return $builder;
    }
    /**
     * @param $id
     * @return $this
     */
    public static function find($id)
    {
        $builder = self::builder();
        return $builder->find($id);
    }
    /**
     * @param $id
     * @return $this
     * @throws NotFoundException
     */
    public static function findOrFail($id)
    {
        $model = self::find($id);
        if (!$model instanceof Model) {
            throw new NotFoundException;
        }
        return $model;
    }
}