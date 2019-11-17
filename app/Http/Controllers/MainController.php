<?php

namespace App\Http\Controllers;

use App\Company;
use App\Job;
use App\Services\SenderFactory;
use App\User;

class MainController extends Controller
{
    // ScheduleCommandの実装
    public function main()
    {
        $entriedJobs = Job::all();
        foreach ($entriedJobs as $entriedJob) {
            // ① userにメール送信
            $this->send(User::class, $entriedJob);
            // ② companyにメールまたはAPIを送信
            $this->send(Company::class, $entriedJob);
        }
    }

    private function send($class, $entriedJob)
    {
        $sender = SenderFactory::create($class);
        $sender->setParameter($entriedJob);
        $sender->send();
    }
}
