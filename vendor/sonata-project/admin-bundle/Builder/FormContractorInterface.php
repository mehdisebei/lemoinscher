<?php

/*
 * This file is part of the Sonata package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\AdminBundle\Builder;

use Sonata\AdminBundle\Admin\FieldDescriptionInterface;
use Sonata\AdminBundle\Admin\AdminInterface;

use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\FormFactoryInterface;

interface FormContractorInterface extends BuilderInterface
{

    /**
     * @abstract
     *
     * @param \Symfony\Component\Form\FormFactoryInterface $formFactory
     */
    public function __construct(FormFactoryInterface $formFactory);

    /**
     * @abstract
     *
     * @param string $name
     * @param array  $options
     *
     * @return FormBuilder
     */
    public function getFormBuilder($name, array $options = array());

    /**
     * @abstract
     *
     * @param string                                              $type
     * @param \Sonata\AdminBundle\Admin\FieldDescriptionInterface $fieldDescription
     *
     * @return array
     */
    public function getDefaultOptions($type, FieldDescriptionInterface $fieldDescription);
}
