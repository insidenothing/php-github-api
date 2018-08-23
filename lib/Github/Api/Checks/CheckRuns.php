<?php
/**
* @see https://developer.github.com/v3/checks/runs/
*/
namespace Github\Api\Checks;

use Github\Api\AbstractApi;
use Github\Api\AcceptHeaderTrait;

abstract class CheckRunsApi extends AbstractApi
{
    use AcceptHeaderTrait;

    /**
     * Configure the accept header for Early Access to the projects api.
     *
     * @see https://developer.github.com/v3/repos/projects/#projects
     *
     * @return self
     */
    public function configure()
    {
        $this->acceptHeaderValue = 'application/vnd.github.antiope-preview+json';

        return $this;
    }

     /**
     * run check
     *
     * @link https://developer.github.com/v3/checks/runs/#create-a-check-run
     * 
     * @param string $username
     * @param string $repository
     * @param string $name
     * @param string $head_sha	
     * @param string $conclusion
     * @param sting $started_at
     * @param string $completed_at ISO 8601 format: YYYY-MM-DDTHH:MM:SSZ
     * @param array $output
     * @param array $annotations
     * @param array $images
     * @param array $actions
     * @return array
     */
    
    
    public function run_check($username, $repository, $name, $head_sha, $conclusion, $started_at, $completed_at, array $output, array $annotations, array $images, array $actions)
    {
        return $this->post('/repos/'.rawurlencode($username).'/'.rawurlencode($repository).'/check-runs',  ['name' => $name, 'head_sha' => $head_sha, 'conclusion' => $conclusion, 'completed_at' => $completed_at, 'output' => $output, 'annotations' => $annotations, 'images' => $images, 'actions' => $actions ]);
    }

    
}
