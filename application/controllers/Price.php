<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Price extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $arrContextOptions = array(
            "ssl" => array(
                "verify_peer"      => false,
                "verify_peer_name" => false,
            ),
        );
        $jsonurl = "http://www.fplstatistics.co.uk/Home/AjaxPricesHandler?sEcho=11&iColumns=12&sColumns=%2Cweb_name%2CPClubName%2CPosition%2CStatus%2CpercentSelected%2CCost%2CPriceChangesinGW%2Cunlockdt%2CNTIDelta%2CNTIPERCENTNJD%2CPId&iDisplayStart=0&iDisplayLength=1000&mDataProp_0=0&sSearch_0=&bRegex_0=false&bSearchable_0=true&bSortable_0=false&mDataProp_1=1&sSearch_1=&bRegex_1=false&bSearchable_1=true&bSortable_1=true&mDataProp_2=2&sSearch_2=&bRegex_2=false&bSearchable_2=true&bSortable_2=true&mDataProp_3=3&sSearch_3=&bRegex_3=false&bSearchable_3=true&bSortable_3=true&mDataProp_4=4&sSearch_4=&bRegex_4=false&bSearchable_4=true&bSortable_4=true&mDataProp_5=5&sSearch_5=&bRegex_5=false&bSearchable_5=true&bSortable_5=true&mDataProp_6=6&sSearch_6=&bRegex_6=false&bSearchable_6=true&bSortable_6=true&mDataProp_7=7&sSearch_7=&bRegex_7=false&bSearchable_7=true&bSortable_7=true&mDataProp_8=8&sSearch_8=&bRegex_8=false&bSearchable_8=true&bSortable_8=true&mDataProp_9=9&sSearch_9=&bRegex_9=false&bSearchable_9=true&bSortable_9=true&mDataProp_10=10&sSearch_10=&bRegex_10=false&bSearchable_10=true&bSortable_10=true&mDataProp_11=11&sSearch_11=&bRegex_11=false&bSearchable_11=false&bSortable_11=true&sSearch=&bRegex=false&iSortCol_0=10&sSortDir_0=desc&iSortingCols=1&_=1471586043883";
        $json    = @file_get_contents($jsonurl, false, stream_context_create($arrContextOptions));
        if ($json === false) {
            echo "No data";
            return;
        }
        $leagueData = json_decode($json);
        $result['occurences'] = $leagueData->aaData;
        $this->load->view('header');
        $this->load->view('sidebar');
        $this->load->view('top_navigation');
        $this->load->view('price_table', $result);
        $this->load->view('footer');
    }

}
