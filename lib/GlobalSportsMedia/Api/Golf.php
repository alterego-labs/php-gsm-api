<?php

namespace GlobalSportsMedia\Api;

/**
 * @link   http://client.globalsportsmedia.com/documentation/golf
 * @author Kevin Saliou <kevin at saliou dot name>
 */
class Golf extends AbstractApi
{
    protected $section = 'golf';

    public function get_competitions()
    {
        throw new \Exception(__METHOD__.' - this method does not exist');
    }

    /**
     * @link http://client.globalsportsmedia.com/documentation/gold/functions/get_deleted
     * @param  array $params array of optional params
     * @return \SimpleXMLElement
     */
    public function get_deleted(array $params = array())
    {
        throw new \Exception('Not implemented yet');
    }

    /**
     * @link http://client.globalsportsmedia.com/documentation/gold/functions/get_holebyhole
     * @param  array $params array of optional params
     * @return \SimpleXMLElement
     */
    public function get_holebyhole(array $params = array())
    {
        throw new \Exception('Not implemented yet');
    }

    /**
     * @link http://client.globalsportsmedia.com/documentation/gold/functions/get_leaderboard
     * @param  array $params array of optional params
     * @return \SimpleXMLElement
     */
    public function get_leaderboard(array $params = array())
    {
        throw new \Exception('Not implemented yet');
    }

    /**
     * @link http://client.globalsportsmedia.com/documentation/gold/functions/get_matches
     * @param  array $params array of optional params
     * @return \SimpleXMLElement
     */
    public function get_matches(array $params = array())
    {
        throw new \Exception('Not implemented yet');
    }

    /**
     * @link http://client.globalsportsmedia.com/documentation/gold/functions/get_people
     * @param  array $params array of optional params
     * @return \SimpleXMLElement
     */
    public function get_people(array $params = array())
    {
        throw new \Exception('Not implemented yet');
    }

    /**
     * @link http://client.globalsportsmedia.com/documentation/gold/functions/get_rankings
     * @param  array $params array of optional params
     * @return \SimpleXMLElement
     */
    public function get_rankings(array $params = array())
    {
        throw new \Exception('Not implemented yet');
    }

    /**
     * @link http://client.globalsportsmedia.com/documentation/gold/functions/get_rounds
     * @param  array $params array of optional params
     * @return \SimpleXMLElement
     */
    public function get_rounds(array $params = array())
    {
        throw new \Exception('Not implemented yet');
    }

    /**
     * @link http://client.globalsportsmedia.com/documentation/gold/functions/get_seasons
     * @param  array $params array of optional params
     * @return \SimpleXMLElement
     */
    public function get_seasons(array $params = array())
    {
        throw new \Exception('Not implemented yet');
    }

    /**
     * @link http://client.globalsportsmedia.com/documentation/gold/functions/get_tours
     * @param  array $params array of optional params
     * @return \SimpleXMLElement
     */
    public function get_tours(array $params = array())
    {
        throw new \Exception('Not implemented yet');
    }
}