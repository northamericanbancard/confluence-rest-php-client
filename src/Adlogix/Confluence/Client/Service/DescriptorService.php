<?php
/*
 * This file is part of the Adlogix package.
 *
 * (c) Allan Segebarth <allan@adlogix.eu>
 * (c) Jean-Jacques Courtens <jjc@adlogix.eu>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Adlogix\Confluence\Client\Service;


use Adlogix\Confluence\Client\Security\Authentication\AuthenticationInterface;
use JMS\Serializer\SerializerInterface;

/**
 * Class DescriptorService
 * @package Adlogix\Confluence\Client\Service
 * @author  Cedric Michaux <cedric@adlogix.eu>
 */
class DescriptorService extends AbstractService
{
    /**
     * @var AuthenticationInterface
     */
    private $authentication;


    /**
     * DescriptorService constructor.
     *
     * @param SerializerInterface     $serializer
     * @param AuthenticationInterface $authentication
     */
    public function __construct(SerializerInterface $serializer, AuthenticationInterface $authentication)
    {
        parent::__construct($serializer);
        $this->authentication = $authentication;
    }

    /**
     * @return string
     */
    public function get()
    {
        return $this->serialize($this->authentication->getDescriptor());
    }

}
