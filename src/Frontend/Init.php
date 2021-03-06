<?php

namespace Frontend;

/*
 * This file is part of Fork CMS.
 *
 * For the full copyright and license information, please view the license
 * file that was distributed with this source code.
 */

/**
 * This class will initiate the frontend-application
 */
class Init extends \Common\Core\Init
{
    /**
     * {@inheritdoc}
     */
    protected $allowedTypes = array('Frontend', 'FrontendAjax');

    /**
     * @param string $type The type of init to load, possible values are: frontend, frontend_ajax, frontend_js.
     */
    public function initialize($type)
    {
        parent::initialize($type);

        \SpoonFilter::disableMagicQuotes();
    }
}
