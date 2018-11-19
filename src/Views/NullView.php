<?php

/**
 * Linna App.
 *
 * @author Sebastian Rapetti <sebastian.rapetti@alice.it>
 * @copyright (c) 2018, Sebastian Rapetti
 * @license http://opensource.org/licenses/MIT MIT License
 */
declare(strict_types=1);

namespace App\Views;

use App\Models\NullModel;
use App\Templates\NullTemplate;
use Linna\Mvc\View;

/**
 * Null View.
 */
class NullView extends View
{
    /**
     * Class Constructor.
     */
    public function __construct(NullModel $model, NullTemplate $template)
    {
        parent::__construct($model, $template);
    }

    /**
     * Index.
     */
    public function index(): void
    {
    }
}
