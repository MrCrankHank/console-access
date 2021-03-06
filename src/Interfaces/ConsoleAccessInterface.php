<?php

namespace MrCrankHank\ConsoleAccess\Interfaces;

use Closure;

interface ConsoleAccessInterface
{
    public function __construct(AdapterInterface $adapter);

    public function sudo($sudo = '/usr/bin/sudo');

    public function bin($bin, $escape = true);

    public function param($param, $escape = true);

    public function hiddenParam($param, $escape = true);

    public function exec(Closure $live = null);

    public function getOutput();

    public function getExitStatus();

    public function getBin();

    public function setPreExec(Closure $function);

    public function setPostExec(Closure $function);

    public function getParams();

    public function getStart();

    public function getEnd();

    public function getDuration();

    public function getCommand();
}
