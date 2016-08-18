<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Perfomance extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file'));
    }

    public function index()
    {
        $this->load->view('header');
        $this->load->view('sidebar');
        $this->load->view('top_navigation');
        $this->load->view('perfomance');
        $this->load->view('footer');
    }

    public function results($id)
    {
        $arrContextOptions = array(
            "ssl" => array(
                "verify_peer"      => false,
                "verify_peer_name" => false,
            ),
        );
        $jsonurl = "https://fantasy.premierleague.com/drf/leagues-classic-standings/240301?phase=1&le-page=1&ls-page=1";
        $json    = @file_get_contents($jsonurl, false, stream_context_create($arrContextOptions));
        if ($json === false) {
            echo "No data";
            return;
        }
        $leagueData = json_decode($json);
        foreach ($leagueData->standings->results as $value) {
            $playerIds[] = $value->entry;

        }

        if (!empty($playerIds)) {

            //stars selected by players
            $i = 0;
            foreach ($playerIds as $players) {
                $captain = 0;
                $mvp     = 0;
                $jsonurl = "https://fantasy.premierleague.com/drf/entry/" . $players . "/event/" . $id;
                $json    = @file_get_contents($jsonurl, false, stream_context_create($arrContextOptions));
                if ($json != false) {
                    $starsData = json_decode($json);
                    $tempIct   = 0;
                    foreach ($starsData->picks as $value) {
                        if ($value->stats->ict_index > $tempIct) {
                            $mvp     = $value->element;
                            $tempIct = $value->stats->ict_index;

                        }
                        if ($value->is_captain) {
                            $captain = $value->element;
                        }

                    }
                    $userName[$i]  = $starsData->entry->player_first_name . " " . $starsData->entry->player_last_name;
                    $userScore[$i] = $starsData->points;
                    $userRank[$i]  = $starsData->entry->summary_event_rank;
                }

                //stars details selected by players

                if (!$playerGameData = $this->cache->get('playerGameData')) {
                    $jsonurl = "https://fantasy.premierleague.com/drf/bootstrap-static";
                    $json2   = @file_get_contents($jsonurl, false, stream_context_create($arrContextOptions));
                    if ($json2 === false) {
                        echo "No data";
                        return;
                    }
                    $playerGameData = json_decode($json2);
                    $this->cache->save('playerGameData', $playerGameData, 300);
                }

                foreach ($playerGameData->elements as $value) {
                    if ($value->id == $mvp) {
                        $playerNames[$i] = $value->web_name;
                    }
                    if ($value->id == $captain) {
                        $userCaptain[$i] = $value->web_name;
                    }
                }
                $i++;
            }
            if (empty($userName)) {
                echo "No Data";
                return;
            }
            $result['userName']    = $userName;
            $result['userScore']   = $userScore;
            $result['userRank']    = $userRank;
            $result['playerNames'] = $playerNames;
            $result['userCaptain'] = $userCaptain;

            $this->load->view('perfomance_result', $result);
        }

    }

}
