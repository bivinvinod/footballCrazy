<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('header');
        $this->load->view('sidebar');
        $this->load->view('top_navigation');
        $this->load->view('dashboard');
        $this->load->view('footer');
    }

    public function mostPicked()
    {
        $this->load->view('header');
        $this->load->view('sidebar');
        $this->load->view('top_navigation');
        $this->load->view('most_picked');
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
            foreach ($playerIds as $players) {
                $jsonurl = "https://fantasy.premierleague.com/drf/entry/" . $players . "/event/" . $id;
                $json    = @file_get_contents($jsonurl, false, stream_context_create($arrContextOptions));
                if ($json === false) {
                    echo "No data";
                    return;
                }
                $starsData = json_decode($json);
                foreach ($starsData->picks as $value) {
                    $stars[] = $value->element;
                }
            }

            //stars details selected by players

            $jsonurl = "https://fantasy.premierleague.com/drf/bootstrap-static";
            $json    = @file_get_contents($jsonurl, false, stream_context_create($arrContextOptions));
            if ($json === false) {
                echo "No data";
                return;
            }
            $playerGameData = json_decode($json);
            foreach ($stars as $selectedStar) {
                foreach ($playerGameData->elements as $value) {
                    if ($value->id == $selectedStar) {
                        $playerNames[] = $value->web_name;
                    }
                }
            }
            $result['occurences'] = array_count_values($playerNames);
            $this->load->view('player_count', $result);
        }

    }

}
