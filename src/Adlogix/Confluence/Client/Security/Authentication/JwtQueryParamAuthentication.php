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

namespace Adlogix\Confluence\Client\Security\Authentication;

/**
 * Class JwtQueryParamAuthentication
 * @package Adlogix\Confluence\Client\Security\Authentication
 * @author  Cedric Michaux <cedric@adlogix.eu>
 */
class JwtQueryParamAuthentication extends AbstractJwtAuthentication
{
    /**
     * {@inheritdoc}
     */
    public function getQueryParameters()
    {
        return [
            "jwt" => $this->token->sign()
        ];
    }
}
