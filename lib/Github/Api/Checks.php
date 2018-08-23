<?php

namespace Github\Api;

use Github\Api\Checks\CheckRuns;
//use Github\Api\Checks\CheckSuites;


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
    public function run_check()
    {
/*
{
    "name": "mighty_readme",
    "head_sha": "ce587453ced02b1526dfb4cb910479d431683101",
    "status": "in_progress",
    "external_id": "42",
    "started_at": "2018-05-04T01:14:52Z",
    "output": {
        "title": "Mighty Readme report",
        "summary": "",
        "text": ""
    }
}
*/
        $username           = 'insidenothing';
        $repository         = 'docker';
        $name               = 'php-lint';
        $head_sha           = 'e875735783dcf21cd529b18a9e4760eb26bf4f5a';
        $conclusion         = 'in_progress';
        $started_at         = date('Y-m-d').'T01:14:52Z';
        $output['title']    = 'Code Quality Report';
        $output['summary']  = 'SHORT GOOD';
        $output['text']     = 'LONG GOOD';
        return new run_check($username, $repository, $name, $head_sha, $conclusion, $started_at, $completed_at, $output, $annotations, $images, $actions);
    }

    
}
