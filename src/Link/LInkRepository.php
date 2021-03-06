<?php namespace Anomaly\NavigationModule\Link;

use Anomaly\NavigationModule\Link\Contract\LinkInterface;
use Anomaly\NavigationModule\Link\Contract\LinkRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryModel;

/**
 * Class LinkRepository
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\NavigationModule\Link
 */
class LinkRepository implements LinkRepositoryInterface
{

    /**
     * The link model.
     *
     * @var LinkModel
     */
    protected $model;

    /**
     * Create a new LinkRepository instance.
     *
     * @param LinkModel $model
     */
    public function __construct(LinkModel $model)
    {
        $this->model = $model;
    }

    /**
     * Find a link by it's ID.
     *
     * @param $id
     * @return null|LinkInterface
     */
    public function find($id)
    {
        return $this->model->find($id);
    }

    /**
     * Delete a link.
     *
     * @param LinkInterface|EntryModel $link
     * @return bool
     */
    public function delete(LinkInterface $link)
    {
        return $link->delete();
    }
}
