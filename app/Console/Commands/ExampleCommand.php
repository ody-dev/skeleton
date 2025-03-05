<?php

namespace App\Console\Commands;

use Ody\Core\Foundation\Console\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ExampleCommand extends Command
{
    protected string $commandName = 'example:command';
    protected string $commandDescription = "A command";

    protected function configure()
    {
        $this
            ->setName($this->commandName)
            ->setDescription($this->commandDescription);
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        return true;
    }
}