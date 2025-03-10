<?php

namespace App\Processes;

use Ody\Process\AbstractProcess;
use Ody\Process\ProcessInterface;
use Swoole\Process;

class SomeProcess extends AbstractProcess implements ProcessInterface
{
    protected static $name = 'SomeProcess';

    private Process $worker;

    public function __construct(Process $worker)
    {
        $this->worker = $worker;
        parent::__construct();
    }

    public function handle(): void
    {
        echo "Process running" . PHP_EOL;

        while($this->running) {
            // Your process logic
            echo "test\n";

            // Make sure signals get processed
            // Is needed to terminated forever running processes
            pcntl_signal_dispatch();
            // Optional: add a small sleep to prevent CPU hogging
            sleep(2); // 10ms
        }

        // You can send data back to the parent process
        $this->worker->write("Process completed a task!");
        echo "Process finished" . PHP_EOL;
    }
}