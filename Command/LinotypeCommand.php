<?php

namespace Linotype\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class LinotypeCommand extends Command
{
    protected static $defaultName = 'linotype';

    private $directoryIteratorProvider;
    private $isReadableProvider;

    public function __construct(string $name = null, callable $directoryIteratorProvider = null, callable $isReadableProvider = null)
    {
        parent::__construct($name);

        $this->directoryIteratorProvider = $directoryIteratorProvider;
        $this->isReadableProvider = $isReadableProvider;
    }

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setDescription('Create, export and import linotype components')
            ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);
        
        $io->success('The "Title" block from "ynk/linotype-lib" imported with success');
        
        return 1;
    }

}
