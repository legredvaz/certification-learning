<?php

namespace Certification\Learning\Console\Command;
use Symfony\Component\Console\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HelloWorld extends Command {

	public function configure() {
		$this->setName("training:hello_world")->setDescription("The command prints out hello world")
		->setAliases(array('hw')); 
	}

	public function execute(InputInterface $input,OutputInterface $output) {
		$output->writeln("Hello world");
	}
}