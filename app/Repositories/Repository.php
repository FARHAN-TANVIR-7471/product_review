<?php

namespace App\Repositories;

use App\Exceptions\RepositoryException;

use Illuminate\Container\Container as App;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Repository
 *
 * @package App\Repositories
 */
abstract class Repository {
    protected $recordPerPage = 20;
    /**
     * @var
     */
    protected $model;
    /**
     * @var
     */
    protected $newModel;
    /**
     * @var App
     */
    private $app;

    /**
     * @param App $app
     * @throws RepositoryException|BindingResolutionException
     */
    public function __construct( App $app ) {
        $this->app = $app;
        $this->makeModel();
    }

    /**
     * @return Model
     * @throws RepositoryException|BindingResolutionException
     */
    public function makeModel() {
        return $this->setModel( $this->model() );
    }

    /**
     * Set Eloquent Model to instantiate
     *
     * @param $eloquentModel
     *
     * @return Model
     * @throws RepositoryException|BindingResolutionException
     */
    public function setModel( $eloquentModel ) {
        $this->newModel = $this->app->make( $eloquentModel );

        if ( !$this->newModel instanceof Model ) {
            throw new RepositoryException(
                "Class {$this->newModel} must be an instance of Illuminate\\Database\\Eloquent\\Model"
            );
        }

        return $this->model = $this->newModel;
    }

    /**
     * Specify Model class name
     *
     * @return mixed
     */
    abstract public function model();

    /**
     * Get paginated filtered data.
     *
     * @param array $filter
     *
     * @return LengthAwarePaginator
     */
    public function getFilterWithPaginatedData( array $filter ): LengthAwarePaginator {
        $query = $this->getQuery();

        return $query->orderBy( 'id', 'DESC' )->paginate( $this->recordPerPage );
    }

    /**
     * @return Builder
     */
    public function getQuery(): Builder {
        return $this->model->newQuery();
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function create( array $data ) {
        return $this->model->create( $data );
    }

    /**
     * @param array $data
     * @param        $id
     * @return mixed
     */
    public function update( array $data, $id ) {
        $model = $this->find( $id );
        $model->fill( $data );
        return $model->save();
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function delete( $id ) {
        return $this->model->destroy( $id );
    }

    /**
     * @param       $id
     * @param array $columns
     *
     * @return mixed
     */
    public function find( $id, $columns = [ '*' ] ) {
        return $this->model->findOrFail( $id, $columns );
    }

    /**
     * Find resource with relational data
     *
     * @param              $id
     * @param array|string $with
     * @param array $columns
     *
     * @return mixed
     */
    public function findWith( $id, $with, $columns = [ '*' ] ) {
        if ( is_string( $with ) ) {
            $with = [$with];
        }

        return $this->model->with( $with )->findOrFail( $id, $columns );
    }

    /**
     * @param array $columns
     *
     * @return mixed
     */
    public function all( $columns = [ '*' ] ) {
        return $this->model->all( $columns );
    }

    /**
     * @param       $attribute
     * @param       $value
     * @param array $columns
     *
     * @return mixed
     */
    public function findBy( $attribute, $value, $columns = [ '*' ] ) {
        return $this->model->where( $attribute, '=', $value )->first( $columns );
    }

    /**
     * @return mixed
     */
    public function getFillable() {
        return $this->model->getFillable();
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function firstOrCreate( array $data ) {
        return $this->model->firstOrCreate( $data );
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function createOrFail( array $data ) {
        return $this->model->newOrFail( $data );
    }

}
