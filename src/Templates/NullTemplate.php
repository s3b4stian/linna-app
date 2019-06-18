<?php

/**
 * Linna App.
 *
 * @author Sebastian Rapetti <sebastian.rapetti@alice.it>
 * @copyright (c) 2018, Sebastian Rapetti
 * @license http://opensource.org/licenses/MIT MIT License
 */
declare(strict_types=1);

namespace App\Templates;

use Linna\Mvc\TemplateInterface;

/**
 * Null Template.
 */
class NullTemplate implements TemplateInterface
{
    /**
     * @var object Data for view
     */
    //public $data;

    /**
     * Class Constructor.
     */
    /*public function __construct()
    {
        $this->data = (object) null;
    }*/

    /**
     * Set the output data.
     *
     * @param array $data
     */
    public function setData(array $data): void
    {
        //$this->data = (object) $data;
        unset($data);
    }

    /**
     * Return void string.
     */
    public function getOutput(): string
    {
        return '';
    }
}
