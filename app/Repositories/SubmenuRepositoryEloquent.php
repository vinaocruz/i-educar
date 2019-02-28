<?php

namespace App\Repositories;

use iEducar\Support\Repositories\SubmenuRepository;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\LegacySubmenu;

/**
 * Class SubmenuRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class SubmenuRepositoryEloquent extends BaseRepository implements SubmenuRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return LegacySubmenu::class;
    }



    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

}
