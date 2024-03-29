<?php defined("BASEPATH") or exit('No direct script access allowed');

class Home extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('analytics');
        $this->analytics->setDatabase($this->load->database('master', TRUE));
        $this->results = array(
            'success' => true
        );
        $this->breakdown = array(
            'male' => array(
                '18-24' => 0,
                '25-34' => 0,
                '35-44' => 0,
                '45-54' => 0,
                '55+' => 0
            ),
            'female' => array(
                '18-24' => 0,
                '25-34' => 0,
                '35-44' => 0,
                '45-54' => 0,
                '55+' => 0
            )
        );
        $this->days = array(
            "0" => 0,
            "1" => 0,
            "2" => 0,
            "3" => 0,
            "4" => 0,
            "5" => 0,
            "6" => 0
        );
        $this->hours = array();
        for($i = 0; $i < 24; $i++) $this->hours[$i] = 0;
    }

    public function cropper()
    {
        $this->load->view('cropper.php');
    }
    public function dashboard()
    {
        $date = date('Y-m-d H:i:s');
        $data = array(
            'user_count' => $this->analytics->exec('SELECT COUNT(*) as count FROM users LEFT JOIN users_groups ON users.id = users_groups.user_id WHERE group_id = 2')[0]->count,
            'company_count' => $this->analytics->exec('SELECT COUNT(*) as count FROM users LEFT JOIN users_groups ON users.id = users_groups.user_id WHERE group_id = 3')[0]->count,
            'active_contests' => $this->analytics->exec('SELECT COUNT(*) as count FROM contests WHERE start_time > "'.$date.'" AND stop_time < "'.$date.'" AND paid = 1')[0]->count,
            'submission_count' => $this->analytics->exec('SELECT COUNT(*) as count FROM submissions')[0]->count
        );
        $data['user_breakdown'] = $this->analytics->user_summary();
        $data['submission_breakdown'] = $this->analytics->submission_summary();
        $this->load->view('home/dashboard', $data);
    }

    public function users()
    {
        $this->load->view('home/users');
    }

    public function users_by_day()
    {
        if($data = $this->analytics->users_by_day())
        {
            foreach($data as $datum)
            {
                $this->days[$datum->weekday] = $datum->count;
            }
            $this->results['data'] = $this->days;
        } else {
            $this->results['error'] = $this->analytics->error();
            $this->results['success'] = false;
        }
        echo json_encode($this->results);
    }

    public function users_by_hour()
    {
        if($data = $this->analytics->users_by_hour())
        {
            foreach($data as $datum)
            {
                $this->hours[$datum->hour] = $datum->count;
            }
            $this->results['data'] = $this->hours;
        } else {
            $this->results['error'] = $this->analytics->error();
            $this->results['success'] = false;
        }
        echo json_encode($this->results);
    }

    public function submissions_by_day()
    {
        if($data = $this->analytics->submissions_by_day())
        {
            foreach($data as $datum)
            {
                $this->days[$datum->weekday] = $datum->count;
            }
            $this->results['data'] = $this->days;
        } else {
            $this->results['error'] = $this->analytics->error();
            $this->results['success'] = false;
        }
        echo json_encode($this->results);
    }

    public function submissions_by_hour()
    {
        if($data = $this->analytics->submissions_by_hour())
        {
            foreach($data as $datum)
            {
                $this->hours[$datum->hour] = $datum->count;
            }
            $this->results['data'] = $this->hours;
        } else {
            $this->results['error'] = $this->analytics->error();
            $this->results['success'] = false;
        }
        echo json_encode($this->results);
    }

    public function submissions()
    {
        $this->load->view('home/submissions');
    }

    public function unique_submissions_by_age_gender()
    {
        if($data = $this->analytics->unique_submissions_by_age_gender())
        {
            $this->results['data'] = $data;
        } else {
            $this->results['error'] = $this->analytics->error();
            $this->results['success'] = false;
        }
        echo json_encode($this->results);
    }

    public function unique_submissions_by_age_gender_date()
    {

        if($data = $this->analytics->unique_submissions_by_age_gender_date())
        {
            $this->results['data'] = $data;
        } else {
            $this->results['error'] = $this->analytics->error();
            $this->results['success'] = false;
        }
        echo json_encode($this->results);
    }

    public function users_by_date()
    {

        if(($data = $this->analytics->users_by_date()) !== FALSE)
        {
            $this->results['data'] = $data;
        } else {
            $this->results['error'] = $this->analytics->error();
            $this->results['success'] = false;
        }
        echo json_encode($this->results);
    }




    public function users_by_age_gender()
    {

        if($data = $this->analytics->users_by_age_gender())
        {
            $this->fill_breakdown($data);
            $this->results['data'] = $this->breakdown;
        } else {
            $this->results['error'] = $this->analytics->error();
            $this->results['success'] = false;
        }
        echo json_encode($this->results);
    }

    public function users_by_gender()
    {

        if($data = $this->analytics->users_by_gender())
        {
            $this->results['data'] = $data;
        } else {
            $this->results['error'] = $this->analytics->error();
            $this->results['success'] = false;
        }
        echo json_encode($this->results);
    }

    public function users_by_age_gender_date()
    {

        if($data = $this->analytics->users_by_age_gender_date())
        {
            $this->results['data'] = $data;
        } else {
            $this->results['error'] = $this->analytics->error();
            $this->results['success'] = false;
        }
        echo json_encode($this->results);
    }

    public function submissions_by_age_gender()
    {

        if($data = $this->analytics->submissions_by_age_gender())
        {
            $this->fill_breakdown($data);
            $this->results['data'] = $this->breakdown;
        } else {
            $this->results['error'] = $this->analytics->error();
            $this->results['success'] = false;
        }
        echo json_encode($this->results);
    }

    public function submissions_by_age_gender_date()
    {

        if($data = $this->analytics->submissions_by_age_gender_date())
        {
            $this->results['data'] = $data;
        } else {
            $this->results['error'] = $this->analytics->error();
            $this->results['success'] = false;
        }
        echo json_encode($this->results);
    }

    public function submissions_by_date()
    {
        if($data = ($this->analytics->submissions_by_date()))
        {
            $this->results['data'] = $data;
        } else {
            $this->results['error'] = $this->analytics->error();
            $this->results['success'] = false;
        }
        echo json_encode($this->results);
    }

    public function unique_submissions_by_date()
    {
        if($data = $this->analytics->unique_submissions_by_date())
        {
            $this->results['data'] = $data;
        } else {
            $this->results['error'] = $this->analytics->error();
            $this->results['success'] = false;
        }
        echo json_encode($this->results);
    }

    public function fill_breakdown($data)
    {
        foreach($data as $value)
        {
            if(!is_null($value->age_range) && !is_null($value->gender))
            {
                $gender = 'unspecified';
                if((int)$value->gender === 1)
                {
                    $gender = 'male';
                }
                else if((int)$value->gender === 2)
                {
                    $gender = 'female';
                }
                $this->breakdown[$gender][$value->age_range] = (int)$value->count;
            }
        }
    }
}
