<?php

namespace MrCrankHank\ConsoleAccess\Interfaces;

use Closure;

interface ConsoleAccessInterface {
    public function __construct(AdapterInterface $adapter);

    public function getOutput();

    public function getExitStatus();

    public function getCommand();

    public function notEscaped();

    public function exec(Closure $live = null);

    public function command($command);

    public function sudo($sudo = '/usr/bin/sudo');

    public function setPreExec(Closure $function);

    public function setPostExec(Closure $function);
}