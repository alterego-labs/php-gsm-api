<?php

namespace GlobalSportsMedia\Api;

/**
 * @link   http://client.globalsportsmedia.com/documentation/rugby
 * @author Kevin Saliou <kevin at saliou dot name>
 */
class Rugby extends AbstractApi
{
    protected $section = 'rugby';

    /**
     * @link http://client.globalsportsmedia.com/documentation/rugby/functions/get_player_statistics
     * @param  array $params array of optional params
     * @return \SimpleXMLElement
     */
    public function get_player_statistics(array $params = array())
    {
        throw new \Exception('Not implemented yet');
    }
}
