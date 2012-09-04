<?php

interface PersisterInterface
{
    public function getCurrentVersion();
    public function save($versionNumber, $options);
    public function getUserQuestions();
}
