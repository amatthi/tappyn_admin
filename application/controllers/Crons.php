<?php defined("BASEPATH") or exit('No diret script access allowed');

class Crons extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if(!is_cli())
        {
            die('Unauthoried Area');
        }
        $this->db = $this->load->database('master', TRUE);
    }

    public function unique_submitters_from_yesterday($date = NULL)
    {
        if(is_null($date)) $date = date('Y-m-d', strtotime('-1 day'));
        $uniques = 0;
        $totals = 0;
        $users = $this->db->select('users.id, users_groups.group_id')->from('users')->join('users_groups', 'users.id = users_groups.user_id', 'left')->where(array('DATE(FROM_UNIXTIME(users.created_on))' => $date, 'users_groups.group_id' => '2'))->get()->result();
        error_log($this->db->last_query());
        echo json_encode($users);
        echo "----------------------------------\n";
        echo "|  UID       |  Submissions      |\n";
        echo "|------------|-------------------|\n";

        foreach($users as $user)
        {
            $user->submissions = $this->db->select('COUNT(*) as count')->from('submissions')->where('owner', $user->id)->get()->row()->count;
            echo "|  {$user->id}       |  {$user->submissions}                |\n";
            if($user->submissions > 0) {
                $uniques++;
                $totals = $totals + $user->submissions;
            }
        }
        echo "|--------------------------------|\n\n\n";
        echo "==============================\n";
        echo "|| Totals!!!!               ||\n";
        echo "==============================\n";
        echo "Signups      : ".count($users)."\n";
        echo "Total Subs   : ".$totals."\n";
        echo "Unique Subs  : ".$uniques."\n\n\n";
        echo "This report provided by your fuckin motha!!\n\n\n\n";
    }
}
