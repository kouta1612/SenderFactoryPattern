<?php

namespace App\Services\Company;

use App\Job;

class Sender
{
    private $job;
    private $aggregate;

    // パラメータを設定する
    public function setParameter(Job $job)
    {
        $this->job = $job;
        $this->aggregate = $this->job->aggrgate;
    }

    // 企業に対してAPIまたはメールを送る
    public function send()
    {
        $company = CompanyFactory::create($this->job->aggregate);
        $company->setParameter($this->job);
        $company->send();
    }
}
