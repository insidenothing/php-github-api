<?php

namespace Github\Api;

use Github\Api\Checks\CheckRuns;
use Github\Api\Checks\CheckSuites;


/**
 * Getting information about a GitHub Checks.
 *
 * @link   https://developer.github.com/v3/checks/
 *
 * @author Joseph Bielawski <stloyd@gmail.com>
 * @author Guillermo A. Fisher <guillermoandraefisher@gmail.com>
 * @author Patrick McGuire <baltimorehacker@gmail.com>
 */
class Checks extends AbstractApi
{
    /**
     * @return Stats
     */
    public function stats()
    {
        return new Stats($this->client);
    }

    /**
     * @return License
     */
    public function license()
    {
        return new License($this->client);
    }

    /**
     * @return ManagementConsole
     */
    public function console()
    {
        return new ManagementConsole($this->client);
    }

    /**
     * @return UserAdmin
     */
    public function userAdmin()
    {
        return new UserAdmin($this->client);
    }
}
