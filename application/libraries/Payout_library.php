<?php defined("BASEPATH") or exit('No direct script access allowed');

class Payout_library
{
    public function __construct()
    {
        $this->load->model('payout');
    }

    public function __call($method, $args)
    {
        if(! method_exists($this->payout, $method))
        {
            throw new Exception("Undefined method Payout_library::{$method}()");
        }
        return call_user_func_array(array($this->payout, $method), $args);
    }

    public function __get($var)
    {
        return get_instance()->$var;
    }


    public function getAll()
    {
        $this->processReportQueryString();
        return array(
            'count' => $this->payout->count(),
            'payouts' => $this->payout->fetch()->result()
        );
    }

    public function get($params)
    {
        $payout = $this->payout->where($params)->fetch();
        if(!$payout || $payout->num_rows() == 0)
        {
            $this->errors = "That payout does not exist";
            return FALSE;
        }
        return $payout->row();
    }

    public function processReportQueryString()
    {
        if($this->input->get('fields')) $this->payout->select($this->input->get('fields'));
        if($this->input->get('title')) $this->payout->like('title', $this->input->get('title'));
        $limit = 25;
        if($this->input->get('limit') && $this->input->get('offset'))
        {
            $this->payout->limit($this->input->get('limit'), $this->input->get('offset'));
        } else if($this->input->get('offset'))
        {
            $this->payout->limit(25, $this->input->get('offset'));
        } else if($this->input->get('limit'))
        {
            $this->payout->limit($this->input->get('limit'), 0);
        }
        else
        {
            $this->payout->limit(25, 0);
        }
        if($this->input->get('sort_by') && $this->input->get('sort_dir'))
        {
            $this->payout->order_by($this->input->get('sort_by'), $this->input->get('sort_dir'));
        } else if($this->input->get('sort_by'))
        {
            $this->payout->order_by($this->input->get('sort_by'), 'desc');
        }
        if($this->input->get('claimed') !== FALSE && !is_null($this->input->get('claimed'))) {
            $this->payout->where('claimed', $this->input->get('claimed'));
        }
    }
}
