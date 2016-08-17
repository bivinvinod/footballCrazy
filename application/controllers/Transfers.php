<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Transfers extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function transfersIn()
    {
        $this->load->view('header');
        $this->load->view('sidebar');
        $this->load->view('top_navigation');
        $this->load->view('transfers_in');
        $this->load->view('footer');
    }

    public function transfersOut()
    {
        $this->load->view('header');
        $this->load->view('sidebar');
        $this->load->view('top_navigation');
        $this->load->view('transfers_out');
        $this->load->view('footer');
    }

    public function transfersInResult($id)
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

                $prevGw = $id - 1;
                if ($prevGw >= 1) {
                    //stars selected by players previous week
                    foreach ($playerIds as $players) {
                        $jsonurl   = "https://fantasy.premierleague.com/drf/entry/" . $players . "/event/" . $prevGw;
                        $json      = @file_get_contents($jsonurl, false, stream_context_create($arrContextOptions));
                        $starsData = json_decode($json);
                        foreach ($starsData->picks as $value) {
                            $oldStars[] = $value->element;
                        }
                    }

                }
            }
            if (empty($oldStars)) {
                $oldStars[] = "";
            }
            $diff = array_diff($stars, $oldStars);

            if (!empty($diff)) {
                $heroDatas = $diff;
            } else {
                $heroDatas = $stars;
            }
            //stars details selected by players
            $jsonurl = "https://fantasy.premierleague.com/drf/bootstrap-static";
            $json    = @file_get_contents($jsonurl, false, stream_context_create($arrContextOptions));
            if ($json === false) {
                echo "No data";
                return;
            }
            $playerGameData = json_decode($json);
            foreach ($heroDatas as $selectedStar) {
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

    public function transfersOutResult($id)
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

                $prevGw = $id - 1;
                if ($prevGw >= 1) {
                    //stars selected by players previous week
                    foreach ($playerIds as $players) {
                        $jsonurl   = "https://fantasy.premierleague.com/drf/entry/" . $players . "/event/" . $prevGw;
                        $json      = @file_get_contents($jsonurl, false, stream_context_create($arrContextOptions));
                        $starsData = json_decode($json);
                        foreach ($starsData->picks as $value) {
                            $oldStars[] = $value->element;
                        }
                    }

                }
            }
            if (empty($oldStars)) {
                $oldStars[] = "";
            }
            $heroDatas = array_diff($oldStars, $stars);

            if (empty($heroDatas)) {
                echo "No data";
                return;
            }

            //stars details selected by players
            $jsonurl = "https://fantasy.premierleague.com/drf/bootstrap-static";
            $json    = @file_get_contents($jsonurl, false, stream_context_create($arrContextOptions));
            if ($json === false) {
                echo "No data";
                return;
            }
            $playerGameData = json_decode($json);
            foreach ($heroDatas as $selectedStar) {
                foreach ($playerGameData->elements as $value) {
                    if ($value->id == $selectedStar) {
                        $playerNames[] = $value->web_name;
                    }
                }
            }
            if (empty($playerNames)) {
                echo "No data";
                return;
            }
            $result['occurences'] = array_count_values($playerNames);
            $this->load->view('player_count', $result);
        }

    }

}
