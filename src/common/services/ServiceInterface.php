<?php
/**
 * @link https://github.com/yiimaker/yii2-newsletter
 * @copyright Copyright (c) 2017 Yii Maker
 * @license BSD 3-Clause License
 */

namespace ymaker\newsletter\common\services;

/**
 * Interface for services
 *
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 * @since 1.0
 */
interface ServiceInterface
{
    /**
     * Returns model object
     *
     * @return mixed
     */
    public function getModel();

    /**
     * Creates newsletter client
     *
     * @param array $data Array with client contacts
     * @return bool
     */
    public function create(array $data);
}